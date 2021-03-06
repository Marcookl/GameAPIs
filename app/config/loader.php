<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->libraryDir
    ]
);

$loader->registerNamespaces(
    [
        'GameAPIs\Controllers'                                          => $config->application->controllersDir,
        'GameAPIs\Controllers\Overview'                                 => $config->application->controllersDir.'Overview/',
        // 7 Days to Die APIs //
        'GameAPIs\Controllers\APIs\SD2D\Query'                          => $config->application->controllersDir.'APIs/7D2D/Query/',
        'GameAPIs\Controllers\APIs\SD2D\Query\Info'                     => $config->application->controllersDir.'APIs/7D2D/Query/Info/',
        'GameAPIs\Controllers\APIs\SD2D\Query\Status'                   => $config->application->controllersDir.'APIs/7D2D/Query/Status/',
        'GameAPIs\Controllers\APIs\SD2D\Query\Players'                  => $config->application->controllersDir.'APIs/7D2D/Query/Players/',
        // Alien Swarm APIs //
        'GameAPIs\Controllers\APIs\AlienSwarm\Query'                    => $config->application->controllersDir.'APIs/AlienSwarm/Query/',
        'GameAPIs\Controllers\APIs\AlienSwarm\Query\Info'               => $config->application->controllersDir.'APIs/AlienSwarm/Query/Info/',
        'GameAPIs\Controllers\APIs\AlienSwarm\Query\Status'             => $config->application->controllersDir.'APIs/AlienSwarm/Query/Status/',
        'GameAPIs\Controllers\APIs\AlienSwarm\Query\Players'            => $config->application->controllersDir.'APIs/AlienSwarm/Query/Players/',
        // ARK: Survival Evolved APIs //
        'GameAPIs\Controllers\APIs\ARK\Query'                           => $config->application->controllersDir.'APIs/ARK/Query/',
        'GameAPIs\Controllers\APIs\ARK\Query\Info'                      => $config->application->controllersDir.'APIs/ARK/Query/Info/',
        'GameAPIs\Controllers\APIs\ARK\Query\Status'                    => $config->application->controllersDir.'APIs/ARK/Query/Status/',
        'GameAPIs\Controllers\APIs\ARK\Query\Players'                   => $config->application->controllersDir.'APIs/ARK/Query/Players/',
        // Arma 3 APIs //
        'GameAPIs\Controllers\APIs\ARMA3\Query'                         => $config->application->controllersDir.'APIs/ARMA3/Query/',
        'GameAPIs\Controllers\APIs\ARMA3\Query\Info'                    => $config->application->controllersDir.'APIs/ARMA3/Query/Info/',
        'GameAPIs\Controllers\APIs\ARMA3\Query\Status'                  => $config->application->controllersDir.'APIs/ARMA3/Query/Status/',
        'GameAPIs\Controllers\APIs\ARMA3\Query\Players'                 => $config->application->controllersDir.'APIs/ARMA3/Query/Players/',
        // All-Seeing Eyes APIs //
        'GameAPIs\Controllers\APIs\ASE\Query'                           => $config->application->controllersDir.'APIs/ASE/Query/',
        'GameAPIs\Controllers\APIs\ASE\Query\Info'                      => $config->application->controllersDir.'APIs/ASE/Query/Info/',
        'GameAPIs\Controllers\APIs\ASE\Query\Status'                    => $config->application->controllersDir.'APIs/ASE/Query/Status/',
        'GameAPIs\Controllers\APIs\ASE\Query\Players'                   => $config->application->controllersDir.'APIs/ASE/Query/Players/',
        // Battlefield 2 APIs //
        'GameAPIs\Controllers\APIs\BF2\Query'                           => $config->application->controllersDir.'APIs/BF2/Query/',
        'GameAPIs\Controllers\APIs\BF2\Query\Info'                      => $config->application->controllersDir.'APIs/BF2/Query/Info/',
        'GameAPIs\Controllers\APIs\BF2\Query\Status'                    => $config->application->controllersDir.'APIs/BF2/Query/Status/',
        'GameAPIs\Controllers\APIs\BF2\Query\Players'                   => $config->application->controllersDir.'APIs/BF2/Query/Players/',
        // Battlefield 3 APIs //
        'GameAPIs\Controllers\APIs\BF3\Query'                           => $config->application->controllersDir.'APIs/BF3/Query/',
        'GameAPIs\Controllers\APIs\BF3\Query\Info'                      => $config->application->controllersDir.'APIs/BF3/Query/Info/',
        'GameAPIs\Controllers\APIs\BF3\Query\Status'                    => $config->application->controllersDir.'APIs/BF3/Query/Status/',
        'GameAPIs\Controllers\APIs\BF3\Query\Players'                   => $config->application->controllersDir.'APIs/BF3/Query/Players/',
        // Battlefield 4 APIs //
        'GameAPIs\Controllers\APIs\BF4\Query'                           => $config->application->controllersDir.'APIs/BF4/Query/',
        'GameAPIs\Controllers\APIs\BF4\Query\Info'                      => $config->application->controllersDir.'APIs/BF4/Query/Info/',
        'GameAPIs\Controllers\APIs\BF4\Query\Status'                    => $config->application->controllersDir.'APIs/BF4/Query/Status/',
        'GameAPIs\Controllers\APIs\BF4\Query\Players'                   => $config->application->controllersDir.'APIs/BF4/Query/Players/',
        // Battlefield 1942 APIs //
        'GameAPIs\Controllers\APIs\BF1942\Query'                        => $config->application->controllersDir.'APIs/BF1942/Query/',
        'GameAPIs\Controllers\APIs\BF1942\Query\Info'                   => $config->application->controllersDir.'APIs/BF1942/Query/Info/',
        'GameAPIs\Controllers\APIs\BF1942\Query\Status'                 => $config->application->controllersDir.'APIs/BF1942/Query/Status/',
        'GameAPIs\Controllers\APIs\BF1942\Query\Players'                => $config->application->controllersDir.'APIs/BF1942/Query/Players/',
        // Battlefield 2142 APIs //
        'GameAPIs\Controllers\APIs\BF2142\Query'                        => $config->application->controllersDir.'APIs/BF2142/Query/',
        'GameAPIs\Controllers\APIs\BF2142\Query\Info'                   => $config->application->controllersDir.'APIs/BF2142/Query/Info/',
        'GameAPIs\Controllers\APIs\BF2142\Query\Status'                 => $config->application->controllersDir.'APIs/BF2142/Query/Status/',
        'GameAPIs\Controllers\APIs\BF2142\Query\Players'                => $config->application->controllersDir.'APIs/BF2142/Query/Players/',
        // Battlefield Bad Company 2 APIs //
        'GameAPIs\Controllers\APIs\BFBC2\Query'                         => $config->application->controllersDir.'APIs/BFBC2/Query/',
        'GameAPIs\Controllers\APIs\BFBC2\Query\Info'                    => $config->application->controllersDir.'APIs/BFBC2/Query/Info/',
        'GameAPIs\Controllers\APIs\BFBC2\Query\Status'                  => $config->application->controllersDir.'APIs/BFBC2/Query/Status/',
        'GameAPIs\Controllers\APIs\BFBC2\Query\Players'                 => $config->application->controllersDir.'APIs/BFBC2/Query/Players/',
        // Battlefield Hardline APIs //
        'GameAPIs\Controllers\APIs\BFHL\Query'                          => $config->application->controllersDir.'APIs/BFHL/Query/',
        'GameAPIs\Controllers\APIs\BFHL\Query\Info'                     => $config->application->controllersDir.'APIs/BFHL/Query/Info/',
        'GameAPIs\Controllers\APIs\BFHL\Query\Status'                   => $config->application->controllersDir.'APIs/BFHL/Query/Status/',
        'GameAPIs\Controllers\APIs\BFHL\Query\Players'                  => $config->application->controllersDir.'APIs/BFHL/Query/Players/',
        // BRINK APIs //
        'GameAPIs\Controllers\APIs\BRINK\Query'                         => $config->application->controllersDir.'APIs/BRINK/Query/',
        'GameAPIs\Controllers\APIs\BRINK\Query\Info'                    => $config->application->controllersDir.'APIs/BRINK/Query/Info/',
        'GameAPIs\Controllers\APIs\BRINK\Query\Status'                  => $config->application->controllersDir.'APIs/BRINK/Query/Status/',
        'GameAPIs\Controllers\APIs\BRINK\Query\Players'                 => $config->application->controllersDir.'APIs/BRINK/Query/Players/',
        // Conan Exiles APIs //
        'GameAPIs\Controllers\APIs\CE\Query'                            => $config->application->controllersDir.'APIs/CE/Query/',
        'GameAPIs\Controllers\APIs\CE\Query\Info'                       => $config->application->controllersDir.'APIs/CE/Query/Info/',
        'GameAPIs\Controllers\APIs\CE\Query\Status'                     => $config->application->controllersDir.'APIs/CE/Query/Status/',
        'GameAPIs\Controllers\APIs\CE\Query\Players'                    => $config->application->controllersDir.'APIs/CE/Query/Players/',
        // Chivalry Medieval Warfare APIs //
        'GameAPIs\Controllers\APIs\CMW\Query'                           => $config->application->controllersDir.'APIs/CMW/Query/',
        'GameAPIs\Controllers\APIs\CMW\Query\Info'                      => $config->application->controllersDir.'APIs/CMW/Query/Info/',
        'GameAPIs\Controllers\APIs\CMW\Query\Status'                    => $config->application->controllersDir.'APIs/CMW/Query/Status/',
        'GameAPIs\Controllers\APIs\CMW\Query\Players'                   => $config->application->controllersDir.'APIs/CMW/Query/Players/',
        // Call of Duty APIs //
        'GameAPIs\Controllers\APIs\COD\Query'                           => $config->application->controllersDir.'APIs/COD/Query/',
        'GameAPIs\Controllers\APIs\COD\Query\Info'                      => $config->application->controllersDir.'APIs/COD/Query/Info/',
        'GameAPIs\Controllers\APIs\COD\Query\Status'                    => $config->application->controllersDir.'APIs/COD/Query/Status/',
        'GameAPIs\Controllers\APIs\COD\Query\Players'                   => $config->application->controllersDir.'APIs/COD/Query/Players/',
        // Call of Duty: United Offensive APIs //
        'GameAPIs\Controllers\APIs\CODUO\Query'                         => $config->application->controllersDir.'APIs/CODUO/Query/',
        'GameAPIs\Controllers\APIs\CODUO\Query\Info'                    => $config->application->controllersDir.'APIs/CODUO/Query/Info/',
        'GameAPIs\Controllers\APIs\CODUO\Query\Status'                  => $config->application->controllersDir.'APIs/CODUO/Query/Status/',
        'GameAPIs\Controllers\APIs\CODUO\Query\Players'                 => $config->application->controllersDir.'APIs/CODUO/Query/Players/',
        // Call of Duty 2 APIs //
        'GameAPIs\Controllers\APIs\COD2\Query'                          => $config->application->controllersDir.'APIs/COD2/Query/',
        'GameAPIs\Controllers\APIs\COD2\Query\Info'                     => $config->application->controllersDir.'APIs/COD2/Query/Info/',
        'GameAPIs\Controllers\APIs\COD2\Query\Status'                   => $config->application->controllersDir.'APIs/COD2/Query/Status/',
        'GameAPIs\Controllers\APIs\COD2\Query\Players'                  => $config->application->controllersDir.'APIs/COD2/Query/Players/',
        // Call of Duty 4 APIs //
        'GameAPIs\Controllers\APIs\COD4\Query'                          => $config->application->controllersDir.'APIs/COD4/Query/',
        'GameAPIs\Controllers\APIs\COD4\Query\Info'                     => $config->application->controllersDir.'APIs/COD4/Query/Info/',
        'GameAPIs\Controllers\APIs\COD4\Query\Status'                   => $config->application->controllersDir.'APIs/COD4/Query/Status/',
        'GameAPIs\Controllers\APIs\COD4\Query\Players'                  => $config->application->controllersDir.'APIs/COD4/Query/Players/',
        // Call of Duty: Modern Warfare 3 APIs //
        'GameAPIs\Controllers\APIs\CODMW3\Query'                        => $config->application->controllersDir.'APIs/CODMW3/Query/',
        'GameAPIs\Controllers\APIs\CODMW3\Query\Info'                   => $config->application->controllersDir.'APIs/CODMW3/Query/Info/',
        'GameAPIs\Controllers\APIs\CODMW3\Query\Status'                 => $config->application->controllersDir.'APIs/CODMW3/Query/Status/',
        'GameAPIs\Controllers\APIs\CODMW3\Query\Players'                => $config->application->controllersDir.'APIs/CODMW3/Query/Players/',
        // Call of Duty: World at War APIs //
        'GameAPIs\Controllers\APIs\CODWAW\Query'                        => $config->application->controllersDir.'APIs/CODWAW/Query/',
        'GameAPIs\Controllers\APIs\CODWAW\Query\Info'                   => $config->application->controllersDir.'APIs/CODWAW/Query/Info/',
        'GameAPIs\Controllers\APIs\CODWAW\Query\Status'                 => $config->application->controllersDir.'APIs/CODWAW/Query/Status/',
        'GameAPIs\Controllers\APIs\CODWAW\Query\Players'                => $config->application->controllersDir.'APIs/CODWAW/Query/Players/',
        // Counter Strike 1.6 APIs //
        'GameAPIs\Controllers\APIs\CS\Query'                            => $config->application->controllersDir.'APIs/CS/Query/',
        'GameAPIs\Controllers\APIs\CS\Query\Info'                       => $config->application->controllersDir.'APIs/CS/Query/Info/',
        'GameAPIs\Controllers\APIs\CS\Query\Status'                     => $config->application->controllersDir.'APIs/CS/Query/Status/',
        'GameAPIs\Controllers\APIs\CS\Query\Players'                    => $config->application->controllersDir.'APIs/CS/Query/Players/',
        // Counter Strike: Global Offensive APIs //
        'GameAPIs\Controllers\APIs\CSGO\Query'                          => $config->application->controllersDir.'APIs/CSGO/Query/',
        'GameAPIs\Controllers\APIs\CSGO\Query\Info'                     => $config->application->controllersDir.'APIs/CSGO/Query/Info/',
        'GameAPIs\Controllers\APIs\CSGO\Query\Status'                   => $config->application->controllersDir.'APIs/CSGO/Query/Status/',
        'GameAPIs\Controllers\APIs\CSGO\Query\Players'                  => $config->application->controllersDir.'APIs/CSGO/Query/Players/',
        // Counter Strike Source APIs //
        'GameAPIs\Controllers\APIs\CSS\Query'                           => $config->application->controllersDir.'APIs/CSS/Query/',
        'GameAPIs\Controllers\APIs\CSS\Query\Info'                      => $config->application->controllersDir.'APIs/CSS/Query/Info/',
        'GameAPIs\Controllers\APIs\CSS\Query\Status'                    => $config->application->controllersDir.'APIs/CSS/Query/Status/',
        'GameAPIs\Controllers\APIs\CSS\Query\Players'                   => $config->application->controllersDir.'APIs/CSS/Query/Players/',
        // DayZ APIs //
        'GameAPIs\Controllers\APIs\DAYZ\Query'                          => $config->application->controllersDir.'APIs/DAYZ/Query/',
        'GameAPIs\Controllers\APIs\DAYZ\Query\Info'                     => $config->application->controllersDir.'APIs/DAYZ/Query/Info/',
        'GameAPIs\Controllers\APIs\DAYZ\Query\Status'                   => $config->application->controllersDir.'APIs/DAYZ/Query/Status/',
        'GameAPIs\Controllers\APIs\DAYZ\Query\Players'                  => $config->application->controllersDir.'APIs/DAYZ/Query/Players/',
        // Dark and Light APIs //
        'GameAPIs\Controllers\APIs\DNL\Query'                           => $config->application->controllersDir.'APIs/DNL/Query/',
        'GameAPIs\Controllers\APIs\DNL\Query\Info'                      => $config->application->controllersDir.'APIs/DNL/Query/Info/',
        'GameAPIs\Controllers\APIs\DNL\Query\Status'                    => $config->application->controllersDir.'APIs/DNL/Query/Status/',
        'GameAPIs\Controllers\APIs\DNL\Query\Players'                   => $config->application->controllersDir.'APIs/DNL/Query/Players/',
        // Day of Defeat APIs //
        'GameAPIs\Controllers\APIs\DOD\Query'                           => $config->application->controllersDir.'APIs/DOD/Query/',
        'GameAPIs\Controllers\APIs\DOD\Query\Info'                      => $config->application->controllersDir.'APIs/DOD/Query/Info/',
        'GameAPIs\Controllers\APIs\DOD\Query\Status'                    => $config->application->controllersDir.'APIs/DOD/Query/Status/',
        'GameAPIs\Controllers\APIs\DOD\Query\Players'                   => $config->application->controllersDir.'APIs/DOD/Query/Players/',
        // Day of Defeat: Source APIs //
        'GameAPIs\Controllers\APIs\DODS\Query'                          => $config->application->controllersDir.'APIs/DODS/Query/',
        'GameAPIs\Controllers\APIs\DODS\Query\Info'                     => $config->application->controllersDir.'APIs/DODS/Query/Info/',
        'GameAPIs\Controllers\APIs\DODS\Query\Status'                   => $config->application->controllersDir.'APIs/DODS/Query/Status/',
        'GameAPIs\Controllers\APIs\DODS\Query\Players'                  => $config->application->controllersDir.'APIs/DODS/Query/Players/',
        // FiveM (GTA5) APIs //
        'GameAPIs\Controllers\APIs\FiveM\Query'                         => $config->application->controllersDir.'APIs/FiveM/Query/',
        'GameAPIs\Controllers\APIs\FiveM\Query\Info'                    => $config->application->controllersDir.'APIs/FiveM/Query/Info/',
        'GameAPIs\Controllers\APIs\FiveM\Query\Status'                  => $config->application->controllersDir.'APIs/FiveM/Query/Status/',
        'GameAPIs\Controllers\APIs\FiveM\Query\Players'                 => $config->application->controllersDir.'APIs/FiveM/Query/Players/',
        // GameSpy APIs //
        'GameAPIs\Controllers\APIs\GameSpy\Query'                       => $config->application->controllersDir.'APIs/GameSpy/Query/',
        'GameAPIs\Controllers\APIs\GameSpy\Query\Info'                  => $config->application->controllersDir.'APIs/GameSpy/Query/Info/',
        'GameAPIs\Controllers\APIs\GameSpy\Query\Status'                => $config->application->controllersDir.'APIs/GameSpy/Query/Status/',
        'GameAPIs\Controllers\APIs\GameSpy\Query\Players'               => $config->application->controllersDir.'APIs/GameSpy/Query/Players/',
        // GameSpy2 APIs //
        'GameAPIs\Controllers\APIs\GameSpy2\Query'                      => $config->application->controllersDir.'APIs/GameSpy2/Query/',
        'GameAPIs\Controllers\APIs\GameSpy2\Query\Info'                 => $config->application->controllersDir.'APIs/GameSpy2/Query/Info/',
        'GameAPIs\Controllers\APIs\GameSpy2\Query\Status'               => $config->application->controllersDir.'APIs/GameSpy2/Query/Status/',
        'GameAPIs\Controllers\APIs\GameSpy2\Query\Players'              => $config->application->controllersDir.'APIs/GameSpy2/Query/Players/',
        // GameSpy3 APIs //
        'GameAPIs\Controllers\APIs\GameSpy3\Query'                      => $config->application->controllersDir.'APIs/GameSpy3/Query/',
        'GameAPIs\Controllers\APIs\GameSpy3\Query\Info'                 => $config->application->controllersDir.'APIs/GameSpy3/Query/Info/',
        'GameAPIs\Controllers\APIs\GameSpy3\Query\Status'               => $config->application->controllersDir.'APIs/GameSpy3/Query/Status/',
        'GameAPIs\Controllers\APIs\GameSpy3\Query\Players'              => $config->application->controllersDir.'APIs/GameSpy3/Query/Players/',
        // Garry's Mod APIs //
        'GameAPIs\Controllers\APIs\GMOD\Query'                          => $config->application->controllersDir.'APIs/GMOD/Query/',
        'GameAPIs\Controllers\APIs\GMOD\Query\Info'                     => $config->application->controllersDir.'APIs/GMOD/Query/Info/',
        'GameAPIs\Controllers\APIs\GMOD\Query\Status'                   => $config->application->controllersDir.'APIs/GMOD/Query/Status/',
        'GameAPIs\Controllers\APIs\GMOD\Query\Players'                  => $config->application->controllersDir.'APIs/GMOD/Query/Players/',
        // Half Life 2: Deathmatch APIs //
        'GameAPIs\Controllers\APIs\HL2DM\Query'                         => $config->application->controllersDir.'APIs/HL2DM/Query/',
        'GameAPIs\Controllers\APIs\HL2DM\Query\Info'                    => $config->application->controllersDir.'APIs/HL2DM/Query/Info/',
        'GameAPIs\Controllers\APIs\HL2DM\Query\Status'                  => $config->application->controllersDir.'APIs/HL2DM/Query/Status/',
        'GameAPIs\Controllers\APIs\HL2DM\Query\Players'                 => $config->application->controllersDir.'APIs/HL2DM/Query/Players/',
        // Hurtworld APIs //
        'GameAPIs\Controllers\APIs\HW\Query'                            => $config->application->controllersDir.'APIs/HW/Query/',
        'GameAPIs\Controllers\APIs\HW\Query\Info'                       => $config->application->controllersDir.'APIs/HW/Query/Info/',
        'GameAPIs\Controllers\APIs\HW\Query\Status'                     => $config->application->controllersDir.'APIs/HW/Query/Status/',
        'GameAPIs\Controllers\APIs\HW\Query\Players'                    => $config->application->controllersDir.'APIs/HW/Query/Players/',
        // Insurgency APIs //
        'GameAPIs\Controllers\APIs\Insurgency\Query'                    => $config->application->controllersDir.'APIs/Insurgency/Query/',
        'GameAPIs\Controllers\APIs\Insurgency\Query\Info'               => $config->application->controllersDir.'APIs/Insurgency/Query/Info/',
        'GameAPIs\Controllers\APIs\Insurgency\Query\Status'             => $config->application->controllersDir.'APIs/Insurgency/Query/Status/',
        'GameAPIs\Controllers\APIs\Insurgency\Query\Players'            => $config->application->controllersDir.'APIs/Insurgency/Query/Players/',
        // Killing Floor APIs //
        'GameAPIs\Controllers\APIs\KF\Query'                            => $config->application->controllersDir.'APIs/KF/Query/',
        'GameAPIs\Controllers\APIs\KF\Query\Info'                       => $config->application->controllersDir.'APIs/KF/Query/Info/',
        'GameAPIs\Controllers\APIs\KF\Query\Status'                     => $config->application->controllersDir.'APIs/KF/Query/Status/',
        'GameAPIs\Controllers\APIs\KF\Query\Players'                    => $config->application->controllersDir.'APIs/KF/Query/Players/',
        // Killing Floor 2 APIs //
        'GameAPIs\Controllers\APIs\KF2\Query'                           => $config->application->controllersDir.'APIs/KF2/Query/',
        'GameAPIs\Controllers\APIs\KF2\Query\Info'                      => $config->application->controllersDir.'APIs/KF2/Query/Info/',
        'GameAPIs\Controllers\APIs\KF2\Query\Status'                    => $config->application->controllersDir.'APIs/KF2/Query/Status/',
        'GameAPIs\Controllers\APIs\KF2\Query\Players'                   => $config->application->controllersDir.'APIs/KF2/Query/Players/',
        // Left 4 Dead APIs //
        'GameAPIs\Controllers\APIs\L4D\Query'                           => $config->application->controllersDir.'APIs/L4D/Query/',
        'GameAPIs\Controllers\APIs\L4D\Query\Info'                      => $config->application->controllersDir.'APIs/L4D/Query/Info/',
        'GameAPIs\Controllers\APIs\L4D\Query\Status'                    => $config->application->controllersDir.'APIs/L4D/Query/Status/',
        'GameAPIs\Controllers\APIs\L4D\Query\Players'                   => $config->application->controllersDir.'APIs/L4D/Query/Players/',
        // Left 4 Dead 2 APIs //
        'GameAPIs\Controllers\APIs\L4D2\Query'                          => $config->application->controllersDir.'APIs/L4D2/Query/',
        'GameAPIs\Controllers\APIs\L4D2\Query\Info'                     => $config->application->controllersDir.'APIs/L4D2/Query/Info/',
        'GameAPIs\Controllers\APIs\L4D2\Query\Status'                   => $config->application->controllersDir.'APIs/L4D2/Query/Status/',
        'GameAPIs\Controllers\APIs\L4D2\Query\Players'                  => $config->application->controllersDir.'APIs/L4D2/Query/Players/',
        // Medal Of Honor Allied Assault APIs //
        'GameAPIs\Controllers\APIs\MOHAA\Query'                         => $config->application->controllersDir.'APIs/MOHAA/Query/',
        'GameAPIs\Controllers\APIs\MOHAA\Query\Info'                    => $config->application->controllersDir.'APIs/MOHAA/Query/Info/',
        'GameAPIs\Controllers\APIs\MOHAA\Query\Status'                  => $config->application->controllersDir.'APIs/MOHAA/Query/Status/',
        'GameAPIs\Controllers\APIs\MOHAA\Query\Players'                 => $config->application->controllersDir.'APIs/MOHAA/Query/Players/',
        // Minecraft APIs //
        'GameAPIs\Controllers\APIs\Minecraft'                           => $config->application->controllersDir.'APIs/Minecraft/',
        'GameAPIs\Controllers\APIs\Minecraft\Extra'                     => $config->application->controllersDir.'APIs/Minecraft/Extra/',
        'GameAPIs\Controllers\APIs\Minecraft\Extra\SRV'                 => $config->application->controllersDir.'APIs/Minecraft/Extra/SRV/',
        'GameAPIs\Controllers\APIs\Minecraft\Extra\BlockedServers'      => $config->application->controllersDir.'APIs/Minecraft/Extra/BlockedServers/',
        'GameAPIs\Controllers\APIs\Minecraft\Extra\MinecraftStatus'     => $config->application->controllersDir.'APIs/Minecraft/Extra/MinecraftStatus/',
        'GameAPIs\Controllers\APIs\Minecraft\Query'                     => $config->application->controllersDir.'APIs/Minecraft/Query/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\Info'                => $config->application->controllersDir.'APIs/Minecraft/Query/Info/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\Icon'                => $config->application->controllersDir.'APIs/Minecraft/Query/Icon/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\MOTD'                => $config->application->controllersDir.'APIs/Minecraft/Query/MOTD/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\MCPE'                => $config->application->controllersDir.'APIs/Minecraft/Query/MCPE/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\Banner'              => $config->application->controllersDir.'APIs/Minecraft/Query/Banner/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\Players'             => $config->application->controllersDir.'APIs/Minecraft/Query/Players/',
        'GameAPIs\Controllers\APIs\Minecraft\Query\Extensive'           => $config->application->controllersDir.'APIs/Minecraft/Query/Extensive/',
        'GameAPIs\Controllers\APIs\Minecraft\Images'                    => $config->application->controllersDir.'APIs/Minecraft/Images/',
        'GameAPIs\Controllers\APIs\Minecraft\Images\Skin'               => $config->application->controllersDir.'APIs/Minecraft/Images/Skin/',
        'GameAPIs\Controllers\APIs\Minecraft\Images\Avatar'             => $config->application->controllersDir.'APIs/Minecraft/Images/Avatar/',
        'GameAPIs\Controllers\APIs\Minecraft\Tracker'                   => $config->application->controllersDir.'APIs/Minecraft/Tracker/',
        'GameAPIs\Controllers\APIs\Minecraft\Tracker\Player'            => $config->application->controllersDir.'APIs/Minecraft/Tracker/Player/',
        'GameAPIs\Controllers\APIs\Minecraft\Tracker\Server'            => $config->application->controllersDir.'APIs/Minecraft/Tracker/Server/',
        'GameAPIs\Controllers\APIs\Minecraft\Ecommerce'                 => $config->application->controllersDir.'APIs/Minecraft/Ecommerce/',
        'GameAPIs\Controllers\APIs\Minecraft\Ecommerce\Buycraft'        => $config->application->controllersDir.'APIs/Minecraft/Ecommerce/Buycraft/',
        'GameAPIs\Controllers\APIs\Minecraft\Ecommerce\MinecraftMarket' => $config->application->controllersDir.'APIs/Minecraft/Ecommerce/MinecraftMarket/',
        'GameAPIs\Controllers\APIs\Minecraft\Player'                    => $config->application->controllersDir.'APIs/Minecraft/Player/',
        'GameAPIs\Controllers\APIs\Minecraft\Player\Name'               => $config->application->controllersDir.'APIs/Minecraft/Player/Name/',
        'GameAPIs\Controllers\APIs\Minecraft\Player\UUID'               => $config->application->controllersDir.'APIs/Minecraft/Player/UUID/',
        'GameAPIs\Controllers\APIs\Minecraft\Player\Profile'            => $config->application->controllersDir.'APIs/Minecraft/Player/Profile/',
        // Multi Theft Auto APIs //
        'GameAPIs\Controllers\APIs\MTA\Query'                           => $config->application->controllersDir.'APIs/MTA/Query/',
        'GameAPIs\Controllers\APIs\MTA\Query\Info'                      => $config->application->controllersDir.'APIs/MTA/Query/Info/',
        'GameAPIs\Controllers\APIs\MTA\Query\Status'                    => $config->application->controllersDir.'APIs/MTA/Query/Status/',
        'GameAPIs\Controllers\APIs\MTA\Query\Players'                   => $config->application->controllersDir.'APIs/MTA/Query/Players/',
        // Natural Selection 2 APIs //
        'GameAPIs\Controllers\APIs\NS2\Query'                           => $config->application->controllersDir.'APIs/NS2/Query/',
        'GameAPIs\Controllers\APIs\NS2\Query\Info'                      => $config->application->controllersDir.'APIs/NS2/Query/Info/',
        'GameAPIs\Controllers\APIs\NS2\Query\Status'                    => $config->application->controllersDir.'APIs/NS2/Query/Status/',
        'GameAPIs\Controllers\APIs\NS2\Query\Players'                   => $config->application->controllersDir.'APIs/NS2/Query/Players/',
        // Quake APIs //
        'GameAPIs\Controllers\APIs\Quake\Query'                         => $config->application->controllersDir.'APIs/Quake/Query/',
        'GameAPIs\Controllers\APIs\Quake\Query\Info'                    => $config->application->controllersDir.'APIs/Quake/Query/Info/',
        'GameAPIs\Controllers\APIs\Quake\Query\Status'                  => $config->application->controllersDir.'APIs/Quake/Query/Status/',
        'GameAPIs\Controllers\APIs\Quake\Query\Players'                 => $config->application->controllersDir.'APIs/Quake/Query/Players/',
        // Quake 2 APIs //
        'GameAPIs\Controllers\APIs\Quake2\Query'                        => $config->application->controllersDir.'APIs/Quake2/Query/',
        'GameAPIs\Controllers\APIs\Quake2\Query\Info'                   => $config->application->controllersDir.'APIs/Quake2/Query/Info/',
        'GameAPIs\Controllers\APIs\Quake2\Query\Status'                 => $config->application->controllersDir.'APIs/Quake2/Query/Status/',
        'GameAPIs\Controllers\APIs\Quake2\Query\Players'                => $config->application->controllersDir.'APIs/Quake2/Query/Players/',
        // Quake 3 APIs //
        'GameAPIs\Controllers\APIs\Quake3\Query'                        => $config->application->controllersDir.'APIs/Quake3/Query/',
        'GameAPIs\Controllers\APIs\Quake3\Query\Info'                   => $config->application->controllersDir.'APIs/Quake3/Query/Info/',
        'GameAPIs\Controllers\APIs\Quake3\Query\Status'                 => $config->application->controllersDir.'APIs/Quake3/Query/Status/',
        'GameAPIs\Controllers\APIs\Quake3\Query\Players'                => $config->application->controllersDir.'APIs/Quake3/Query/Players/',
        // Quake Live APIs //
        'GameAPIs\Controllers\APIs\QuakeLive\Query'                     => $config->application->controllersDir.'APIs/QuakeLive/Query/',
        'GameAPIs\Controllers\APIs\QuakeLive\Query\Info'                => $config->application->controllersDir.'APIs/QuakeLive/Query/Info/',
        'GameAPIs\Controllers\APIs\QuakeLive\Query\Status'              => $config->application->controllersDir.'APIs/QuakeLive/Query/Status/',
        'GameAPIs\Controllers\APIs\QuakeLive\Query\Players'             => $config->application->controllersDir.'APIs/QuakeLive/Query/Players/',
        // Red Orchestra 2 APIs //
        'GameAPIs\Controllers\APIs\RO2\Query'                           => $config->application->controllersDir.'APIs/RO2/Query/',
        'GameAPIs\Controllers\APIs\RO2\Query\Info'                      => $config->application->controllersDir.'APIs/RO2/Query/Info/',
        'GameAPIs\Controllers\APIs\RO2\Query\Status'                    => $config->application->controllersDir.'APIs/RO2/Query/Status/',
        'GameAPIs\Controllers\APIs\RO2\Query\Players'                   => $config->application->controllersDir.'APIs/RO2/Query/Players/',
        // Rust APIs //
        'GameAPIs\Controllers\APIs\Rust\Query'                          => $config->application->controllersDir.'APIs/Rust/Query/',
        'GameAPIs\Controllers\APIs\Rust\Query\Info'                     => $config->application->controllersDir.'APIs/Rust/Query/Info/',
        'GameAPIs\Controllers\APIs\Rust\Query\Status'                   => $config->application->controllersDir.'APIs/Rust/Query/Status/',
        'GameAPIs\Controllers\APIs\Rust\Query\Players'                  => $config->application->controllersDir.'APIs/Rust/Query/Players/',
        // San Andreas Multiplayer APIs //
        'GameAPIs\Controllers\APIs\SAMP\Query'                          => $config->application->controllersDir.'APIs/SAMP/Query/',
        'GameAPIs\Controllers\APIs\SAMP\Query\Info'                     => $config->application->controllersDir.'APIs/SAMP/Query/Info/',
        'GameAPIs\Controllers\APIs\SAMP\Query\Status'                   => $config->application->controllersDir.'APIs/SAMP/Query/Status/',
        'GameAPIs\Controllers\APIs\SAMP\Query\Players'                  => $config->application->controllersDir.'APIs/SAMP/Query/Players/',
        // Space Engineers APIs //
        'GameAPIs\Controllers\APIs\SE\Query'                            => $config->application->controllersDir.'APIs/SE/Query/',
        'GameAPIs\Controllers\APIs\SE\Query\Info'                       => $config->application->controllersDir.'APIs/SE/Query/Info/',
        'GameAPIs\Controllers\APIs\SE\Query\Status'                     => $config->application->controllersDir.'APIs/SE/Query/Status/',
        'GameAPIs\Controllers\APIs\SE\Query\Players'                    => $config->application->controllersDir.'APIs/SE/Query/Players/',
        // Source APIs //
        'GameAPIs\Controllers\APIs\Source\Query'                        => $config->application->controllersDir.'APIs/Source/Query/',
        'GameAPIs\Controllers\APIs\Source\Query\Info'                   => $config->application->controllersDir.'APIs/Source/Query/Info/',
        'GameAPIs\Controllers\APIs\Source\Query\Status'                 => $config->application->controllersDir.'APIs/Source/Query/Status/',
        'GameAPIs\Controllers\APIs\Source\Query\Players'                => $config->application->controllersDir.'APIs/Source/Query/Players/',
        // SQUAD APIs //
        'GameAPIs\Controllers\APIs\SQUAD\Query'                         => $config->application->controllersDir.'APIs/SQUAD/Query/',
        'GameAPIs\Controllers\APIs\SQUAD\Query\Info'                    => $config->application->controllersDir.'APIs/SQUAD/Query/Info/',
        'GameAPIs\Controllers\APIs\SQUAD\Query\Status'                  => $config->application->controllersDir.'APIs/SQUAD/Query/Status/',
        'GameAPIs\Controllers\APIs\SQUAD\Query\Players'                 => $config->application->controllersDir.'APIs/SQUAD/Query/Players/',
        // Starbound APIs //
        'GameAPIs\Controllers\APIs\SB\Query'                            => $config->application->controllersDir.'APIs/SB/Query/',
        'GameAPIs\Controllers\APIs\SB\Query\Info'                       => $config->application->controllersDir.'APIs/SB/Query/Info/',
        'GameAPIs\Controllers\APIs\SB\Query\Status'                     => $config->application->controllersDir.'APIs/SB/Query/Status/',
        'GameAPIs\Controllers\APIs\SB\Query\Players'                    => $config->application->controllersDir.'APIs/SB/Query/Players/',
        // Terraria APIs //
        'GameAPIs\Controllers\APIs\Terraria\Query'                      => $config->application->controllersDir.'APIs/Terraria/Query/',
        'GameAPIs\Controllers\APIs\Terraria\Query\Info'                 => $config->application->controllersDir.'APIs/Terraria/Query/Info/',
        'GameAPIs\Controllers\APIs\Terraria\Query\Status'               => $config->application->controllersDir.'APIs/Terraria/Query/Status/',
        'GameAPIs\Controllers\APIs\Terraria\Query\Players'              => $config->application->controllersDir.'APIs/Terraria/Query/Players/',
        // Team Fortress 2 APIs //
        'GameAPIs\Controllers\APIs\TF2\Query'                           => $config->application->controllersDir.'APIs/TF2/Query/',
        'GameAPIs\Controllers\APIs\TF2\Query\Info'                      => $config->application->controllersDir.'APIs/TF2/Query/Info/',
        'GameAPIs\Controllers\APIs\TF2\Query\Status'                    => $config->application->controllersDir.'APIs/TF2/Query/Status/',
        'GameAPIs\Controllers\APIs\TF2\Query\Players'                   => $config->application->controllersDir.'APIs/TF2/Query/Players/',
        // Unturned APIs //
        'GameAPIs\Controllers\APIs\Unturned\Query'                      => $config->application->controllersDir.'APIs/Unturned/Query/',
        'GameAPIs\Controllers\APIs\Unturned\Query\Info'                 => $config->application->controllersDir.'APIs/Unturned/Query/Info/',
        'GameAPIs\Controllers\APIs\Unturned\Query\Status'               => $config->application->controllersDir.'APIs/Unturned/Query/Status/',
        'GameAPIs\Controllers\APIs\Unturned\Query\Players'              => $config->application->controllersDir.'APIs/Unturned/Query/Players/',
        // Wurm Unlimited APIs //
        'GameAPIs\Controllers\APIs\WU\Query'                            => $config->application->controllersDir.'APIs/WU/Query/',
        'GameAPIs\Controllers\APIs\WU\Query\Info'                       => $config->application->controllersDir.'APIs/WU/Query/Info/',
        'GameAPIs\Controllers\APIs\WU\Query\Status'                     => $config->application->controllersDir.'APIs/WU/Query/Status/',
        'GameAPIs\Controllers\APIs\WU\Query\Players'                    => $config->application->controllersDir.'APIs/WU/Query/Players/',
        // Libraries //
        'GameAPIs\Libraries\Minecraft\Query'                            => $config->application->libraryDir.'Minecraft/Query/'
    ]
);

$loader->register();
