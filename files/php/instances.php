<?php
$instance['test01'] = array_merge($instance['test01'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt',
        'servers.dat'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Acteris",
        "ip" => "158.220.118.146",
        "port" => 30120
    )
));

// $instance['PokeMoonX'] = array_merge($instance['PokeMoonX'], array(
//     "loadder" => array(
//         "minecraft_version" => "1.16.5",
//         "loadder_type" => "forge",
//         "loadder_version" => "1.16.5-36.2.35"
//     ),
//     "verify" => false,
//     "ignored" => array(),
//     "whitelist" => array(),
//     "whitelistActive" => false,
//     "status" => array(
//         "nameServer" => "Acteris",
//         "ip" => "178.32.106.234",
//         "port" => 25599
//     )
// ));
?>
