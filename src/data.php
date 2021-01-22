<?php

// Stark

$eddard = [
    'id' => 'eddardstark',
    'name' => 'Eddard Stark',
    'nickname' => 'Ned',
    'role' => 'Lord',
];

$catelyn = [
    'id' => 'catelynstark',
    'name' => 'Catelyn Stark',
    'nickname' => 'Cat',
    'role' => 'Lady',
];

$robb = [
    'id' => 'robbstark',
    'name' => 'Robb Stark',
    'nickname' => 'The young wolf',
    'role' => 'Young',
];

$sansa = [
    'id' => 'sansastark',
    'name' => 'Sansa Stark',
    'nickname' => 'Little dove',
    'role' => 'Young'
];

$arya = [
    'id' => 'aryastark',
    'name' => 'Arya Stark',
    'nickname' => 'no name',
    'role' => 'Young',
];

$stark = [
    $eddard['name'] => $eddard,
    $catelyn['name'] => $catelyn,
    $robb['name'] => $robb,
    $sansa['name'] => $sansa,
    $arya['name'] => $arya,
];

$starkDescription = "House Stark of Winterfell is a Great House of Westeros and the royal house of the Kingdom of the North. They rule over the vast region known as the North from their seat in Winterfell. It is one of the oldest lines of Westerosi nobility by far, claiming a line of descent stretching back over eight thousand years. 
<br><br>
House Stark's sigil is a grey direwolf on a white background, over a green escutcheon. They are one of the few noble Houses whose family motto is not a boast or threat. Instead, the House Stark family motto is a warning, one that, no matter the circumstances, will always be relevant: \"Winter Is Coming.\"";

// Lannister

$jaime = [
    'id' => 'jaimelannister',
    'name' => 'Jaime Lannister',
    'nickname' => 'Kingslayer',
    'role' => 'Lord',
];

$cersei = [
    'id' => 'cerseilannister',
    'name' => 'Cersei Lannister',
    'nickname' => 'Queen',
    'role' => 'Lady',
];

$joffrey = [
    'id' => 'joffreybaratheon',
    'name' => 'Joffrey Baratheon',
    'nickname' => 'The false king',
    'role' => 'Young',
];

$myrcella = [
    'id' => 'myrcellabaratheon',
    'name' => 'Myrcella Baratheon',
    'nickname' => 'Princess',
    'role' => 'Young',
];

$tommen = [
    'id' => 'tommenbaratheon',
    'name' => 'Tommen Baratheon',
    'nickname' => 'The boy kink',
    'role' => 'Young',
];

$lannister = [
    $jaime['name'] => $jaime,
    $cersei['name'] => $cersei,
    $joffrey['name'] => $joffrey,
    $myrcella['name'] => $myrcella,
    $tommen['name'] => $tommen,
];

$lannisterDescription = "House Lannister of Casterly Rock is one of the Great Houses of Westeros, one of its richest and most powerful families and one of its oldest dynasties. It was also the royal house of the Seven Kingdoms following the extinction of House Baratheon of King's Landing,
<br><br>
The Lannisters rule over the Westerlands. Their seat is Casterly Rock, a massive rocky promontory overlooking the Sunset Sea which has had habitations and fortifications built into it over the millennia. They are the Lords Paramount of the Westerlands and Wardens of the West. As the new royal house, they also ruled directly over the Crownlands from their seat of the Red Keep in King's Landing, the traditional seat of the royal family. House Lannister's Heraldry consists of a golden lion on a crimson background, and their House words are \"Hear me roar!\", which are rarely mentioned. Their unofficial motto, which is as well known as the official one, is \"A Lannister always pays his debts\" - which is used much more often and mostly in negative context, though it can also be used in the original, literal sense.";

// Martell

$oberyn = [
    'id' => 'oberynmartell',
    'name' => 'Oberyn Martell',
    'nickname' => 'The red viper of Dorme',
    'role' => 'Lord',
];

$ellaria = [
    'id' => 'ellariasand',
    'name' => 'Ellaria Sand',
    'nickname' => 'Ellaria',
    'role' => 'Lady',
];

$obara = [
    'id' => 'obarasand',
    'name' => 'Obara Sand',
    'nickname' => 'Obara',
    'role' => 'Young',
];

$nymeria = [
    'id' => 'nymeriasand',
    'name' => 'Nymeria Sand',
    'nickname' => 'Nymeria',
    'role' => 'Young',
];

$tyene = [
    'id' => 'tyenesand',
    'name' => 'Tyene Sand',
    'nickname' => 'Tyene',
    'role' => 'Young',
];

$martell = [
    $oberyn['name'] => $oberyn,
    $ellaria['name'] => $ellaria,
    $obara['name'] => $obara,
    $nymeria['name'] => $nymeria,
    $tyene['name'] => $tyene,
];

$martellDescription = "House Martell of Sunspear is one of the Great Houses of Westeros. It rules the peninsula of Dorne in the far south of the continent from their castle Sunspear. Though loyal to the Iron Throne, the Martells were never conquered by the Targaryens and pursued a more isolated role in wider political events since Robert's Rebellion.
<br><br>
House Martell's sigil is a red sun pierced by a golden spear, on an orange field, a combination of the original Martell sigil - a yellow spear - and the emblem of Princess Nymeria - a red sun - to symbolize the marriage of the warrior-queen to Mors Martell. Their house words are \"Unbowed, Unbent, Unbroken.\"";

// ...

$houses = [
    'stark' => [
        'name' => 'House Stark',
        'description' => $starkDescription,
        'members' => $stark,
    ],
    'lannister' => [
        'name' => 'House Lannister',
        'description' => $lannisterDescription,
        'members' => $lannister,
    ],
    'martell' => [
        'name' => 'House Martell',
        'description' => $martellDescription,
        'members' => $martell,
    ]
];

$daenerys = [
    'id' => 'daenerystargaryen',
    'name' => 'Daenerys Targaryen',
    'nickname' => 'Mother of dragons',
    'role' => 'Joker',
];

$jon = [
    'id' => 'jonsnow',
    'name' => 'Jon Snow',
    'nickname' => 'The bastard of Winterfell',
    'role' => 'Joker',
];

$jokers = [
    $daenerys['name'] = $daenerys,
    $jon['name'] => $jon,
];