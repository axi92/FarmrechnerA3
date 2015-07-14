<?php
$sell_array =
[
	["pizza", 20],
	["rabbit",65],
	["redgull",350],
	["tbacon",25],
	["donuts",60],
	["water",5],
	["coffee",5],
	["fuelF",500],
	["lockpick",1000],
	["turtlesoup",1000],
	["pickaxe",1250],
	["apple",50],
	["peach",55],
	["bananen",65],
    ["grapes",70],
	["ornate",348],
	["salema",505],
	["mackerel",600],
	["mullet",705],
	["catshark",835],
    ["wine",1176],
	["salt_r",1376],
	["copper_r",1232],
	["clothing",1624],
	["oilp",1792],
	["iron_r",2408],
	["glass",1482],
	["cement",1428],
	["brief",392],
	["diamond",714],
	["diamondc",3024],
	["petroleum",3220],
	["paket",6160],
	["helium-3",24000],
	["heroinu",1850],
	["heroinp",4150],
	["moonshine",2574],
	["marijuana",3773],
	["cocaine",4312],
	["cocainep",6252],
	["dunklematerie",36500],
	["tuna",4455],
	["turtle",8800],
	["goldbar",300000],
	["kidney",37000]
];
echo '<pre>';
$sort_sell_array = array();
$i = 0;
foreach ($sell_array as &$value) {
	//echo $i;
	//echo $sell_array[$i][0];
	//echo $sell_array[$i][1];
	$sort_sell_array[$sell_array[$i][0]] = [$sell_array[$i][1]];
	//array_push
	$i++;
}

/*
$keys = [ $sell_array[0][0], $sell_array[1][0] ];
$vars = [ $sell_array[0][1], $sell_array[1][1] ];
*/
echo $sort_sell_array['pizza'][0];
print_r($sort_sell_array);
//print count($sell_array);
echo '</pre>';
/*
switch (_item) do
{
	case "oilu": {7};
	case "oilp": {5};
	case "heroinu": {6};
	case "dunklematerie": {100};
	case "helium-3": {100};
	case "paket": {25};
	case "brief": {3};
	case "heroinp": {4};
	case "cannabis": {4};
	case "marijuana": {3};
	case "apple": {1};
	case "water": {1};
	case "rabbit": {1};
	case "pizza": {1};
	case "salema": {2};
	case "ornate": {2};
	case "mackerel": {4};
	case "tuna": {6};
	case "mullet": {4};
	case "catshark": {6};
	case "turtle": {6};
	case "fishing": {2};
	case "turtlesoup": {2};
	case "donuts": {1};
	case "coffee": {1};
	case "fuelE": {2};
	case "fuelF": {5};
	case "money": {0};
	case "pickaxe": {2};
	case "copperore": {4};
	case "ironore": {5};
	case "copper_r": {3};
	case "iron_r": {3};
	case "sand": {3};
	case "salt": {3};
	case "salt_r": {1};
	case "glass": {1};
	case "diamond": {4};
	case "diamondc": {2};
	case "cocaine": {6};
	case "cocainep": {4};
	case "rock": {6};
	case "cement": {5};
	case "goldbar": {40};
	case "blastingcharge": {15};
	case "boltcutter": {5};
	case "defusekit": {2};
	case "storagesmall": {5};
	case "storagebig": {10};
	case "zipties": {2};
	case "kidney": {15};
	case "wine": {2};
    case "moonshine": {2};
    case "grapes": {3};
	case "baumwolle": {4};
	case "clothing": {2};
	case "bananen": {1};
	case "scalpel": {2};
	case "coolbox": {5};
	case "gas": {6};
	case "petroleum": {4};
	case "med_marijuana": {5};
	default {1};

*/
?>