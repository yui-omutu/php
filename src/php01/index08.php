<?php
$people =[
 ["jiro",24,"women"],["taro",21,"men"],["hanako",27,"men"]
];
foreach($people as $person){
 echo $person[0] . "(" . $person[1] . $person[2] . ")";
}