<?php

namespace GameAPIs\Controllers\APIs\Minecraft\Player\Name;

use Redis;
use Phalcon\Filter;

class IndexController extends ControllerBase {

    public function firstAction() {
        $params = $this->dispatcher->getParams();
        $filter = new Filter();
        $target = strtolower($filter->sanitize($params['target'], 'string'));
        if(empty($target)) {
            $output = array("error" => "Please enter a username or UUID.");
            return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        }
        $redis = new Redis();
        $redis->pconnect($this->config->application->redis->host);

        if (strlen($target) > 16) {
            if (ctype_alnum(str_replace('-', '', $target))) {
                $uuid = str_replace('-', '', $target);
                if($redis->exists($this->config->application->redis->keyStructure->mcpc->player->avoid.$uuid)) {
                    $output = array("error" => "Requested UUID is on the avoid list. Check back later.");
                    return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                } else {
                    if($redis->exists($this->config->application->redis->keyStructure->mcpc->player->profile.$uuid)) {
                        $checkRedis = json_decode($redis->get($this->config->application->redis->keyStructure->mcpc->player->profile.$uuid),true);
                        if($checkRedis['expiresAt'] > time()) {
                            $realOutput = array();
                            $realOutput['name']             = $checkRedis['name'];
                            $realOutput['id']               = $checkRedis['id'];
                            $realOutput['uuid_formatted']   = $checkRedis['uuid_formatted'];
                            return json_encode($realOutput, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                        } else {
                            if($redis->exists($this->config->application->redis->keyStructure->mcpc->player->overloaded)) {
                                $output = array("error" => "API is overloaded. Please wait a few minutes.");
                                return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                            } else {
                                return $this->dispatcher->forward(
                                    [
                                        'namespace'     => 'GameAPIs\Controllers\APIs\Minecraft\Player\Name',
                                        'controller'    => 'index',
                                        'action'        => 'second',
                                        'params'        => array(
                                            'uuid'          => $uuid
                                        )
                                    ]
                                );
                            }
                        }
                    } else {
                        return $this->dispatcher->forward(
                            [
                                'namespace'     => 'GameAPIs\Controllers\APIs\Minecraft\Player\Name',
                                'controller'    => 'index',
                                'action'        => 'second',
                                'params'        => array(
                                    'uuid'          => $uuid
                                )
                            ]
                        );
                    }
                }
            } else {
                $redis->set($this->config->application->redis->keyStructure->mcpc->player->avoid.$target, true, 300);
                $output = array("error" => "Invalid UUID characters.");
                return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
            }
        } else {
            $output = array("error" => "UUID are only supported.");
            return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        }
    }

    public function secondAction() {
        $params = $this->dispatcher->getParams();
        $redis = new Redis();
        $redis->pconnect($this->config->application->redis->host);
        function getUser($uuid) {
            session_write_close();
            $curl = curl_init();
            $curlConfig = array(
                CURLOPT_HTTPHEADER => array('Content-Type: application/json') ,
                CURLOPT_URL => 'https://sessionserver.mojang.com/session/minecraft/profile/' . $uuid . '?unsigned=false',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 1,
                CURLOPT_TIMEOUT => 1,
                CURLOPT_SSL_VERIFYPEER => false
            );
            curl_setopt_array($curl, $curlConfig);
            $req = json_decode(curl_exec($curl), true);
            if (!curl_errno($curl)) {
                switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
                    case 200: {
                        break;
                    }
                    default: {
                        $req['error'] = true;
                    }
                }
            }
            curl_close($curl);
            return $req;
        }
        function getUUID($username) {
            session_write_close();
            $curl = curl_init();
            $curlConfig = array(
                CURLOPT_HTTPHEADER => array('Content-Type: application/json') ,
                CURLOPT_URL => 'https://api.mojang.com/users/profiles/minecraft/' . $username,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 1,
                CURLOPT_TIMEOUT => 1,
                CURLOPT_SSL_VERIFYPEER => false
            );
            curl_setopt_array($curl, $curlConfig);
            $req = json_decode(curl_exec($curl), true);
            if (!curl_errno($curl)) {
                switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
                    case 200: {
                        break;
                    }
                    default: {
                        $req['error'] = true;
                    }
                }
            }
            curl_close($curl);
            return $req;
        }
        if(isset($params['uuid'])){
            $uuid = $params['uuid'];
            if($redis->exists($this->config->application->redis->keyStructure->mcpc->player->profile.$uuid)) {
                $getUser = getUser($uuid);
                if(empty($getUser['id'])) {
                    $output = json_decode($redis->get($this->config->application->redis->keyStructure->mcpc->player->profile.$uuid),true);
                    $output['expiresAt'] = time() + 172800;
                    $output['expiresAtHR'] = date("F j, Y, g:i a", time() + 172800);
                    $redis->mSet(array(
                        $this->config->application->redis->keyStructure->mcpc->player->profile . strtolower($output['name']) => json_encode($output,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE),
                        $this->config->application->redis->keyStructure->mcpc->player->profile . $output['id'] => json_encode($output,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
                    ));
                    $realOutput = array();
                    $realOutput['name']             = $output['name'];
                    $realOutput['uuid']             = $output['uuid'];
                    $realOutput['uuid_formatted']   = $output['uuid_formatted'];
                    return json_encode($realOutput, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                } else {
                    $uid = '';
                    $uid.= substr($getUser['id'], 0, 8) . '-';
                    $uid.= substr($getUser['id'], 8, 4) . '-';
                    $uid.= substr($getUser['id'], 12, 4) . '-';
                    $uid.= substr($getUser['id'], 16, 4) . '-';
                    $uid.= substr($getUser['id'], 20);
                    $output['id'] = $getUser['id'];
                    $output['uuid_formatted'] = $uid;
                    $output['name'] = $getUser['name'];
                    $output['properties'][0]['name'] = $getUser['properties'][0]['name'];
                    $output['properties'][0]['value'] = $getUser['properties'][0]['value'];
                    $output['properties'][0]['signature'] = $getUser['properties'][0]['signature'];
                    $output['properties_decoded'] = json_decode(base64_decode($getUser['properties'][0]['value']) , true);
                    $output['expiresAt'] = time() + 172800;
                    $output['expiresAtHR'] = date("F j, Y, g:i a", time() + 172800);
                    $redis->mSet(array(
                        $this->config->application->redis->keyStructure->mcpc->player->profile . strtolower($getUser['name']) => json_encode($output,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE),
                        $this->config->application->redis->keyStructure->mcpc->player->profile . $getUser['id'] => json_encode($output,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
                    ));
                    $realOutput = array();
                    $realOutput['name']             = $output['name'];
                    $realOutput['id']               = $output['id'];
                    $realOutput['uuid_formatted']   = $output['uuid_formatted'];
                    return json_encode($realOutput, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                }
            } else {
                $getUser = getUser($uuid);
                if(!empty($getUser['error'])) {
                    $output = array("error" => "Invalid UUID.");
                    $redis->set($this->config->application->redis->keyStructure->mcpc->player->avoid.$uuid, true, 300);
                    return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                } elseif(empty($getUser['id'])) {
                    $output = array("error" => "API is overloaded. Please wait a few minutes.");
                    $redis->set($this->config->application->redis->keyStructure->mcpc->player->overloaded, true, 300);
                    return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                } else {
                    $uid = '';
                    $uid.= substr($getUser['id'], 0, 8) . '-';
                    $uid.= substr($getUser['id'], 8, 4) . '-';
                    $uid.= substr($getUser['id'], 12, 4) . '-';
                    $uid.= substr($getUser['id'], 16, 4) . '-';
                    $uid.= substr($getUser['id'], 20);
                    $output['id'] = $getUser['id'];
                    $output['uuid_formatted'] = $uid;
                    $output['name'] = $getUser['name'];
                    $output['properties'][0]['name'] = $getUser['properties'][0]['name'];
                    $output['properties'][0]['value'] = $getUser['properties'][0]['value'];
                    $output['properties'][0]['signature'] = $getUser['properties'][0]['signature'];
                    $output['properties_decoded'] = json_decode(base64_decode($getUser['properties'][0]['value']) , true);
                    $output['expiresAt'] = time() + 172800;
                    $output['expiresAtHR'] = date("F j, Y, g:i a", time() + 172800);
                    $redis->mSet(array(
                        $this->config->application->redis->keyStructure->mcpc->player->profile . strtolower($getUser['name']) => json_encode($output,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE),
                        $this->config->application->redis->keyStructure->mcpc->player->profile . $getUser['id'] => json_encode($output,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
                    ));
                    $realOutput = array();
                    $realOutput['name']             = $output['name'];
                    $realOutput['id']               = $output['id'];
                    $realOutput['uuid_formatted']   = $output['uuid_formatted'];
                    return json_encode($realOutput, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                }
            }
        } else {
            $output = array("error" => "Something went wrong between phase 1 and phase 2.");
            return json_encode($output, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
        }
    }
}
