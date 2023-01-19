<?php
$my_arr_constructor = array();
$my_arr_literal = [];
$my_arr_init_vals =['a',1,true,5.6];
$mixed_arr = ["Shaun McKinnon", true,44,30.62];
array_push($mixed_arr, "i like cats");
$mixed_arr[]="i like dogs";
array_unshift($mixed_arr, false);
array_pop($mixed_arr);
array_shift($mixed_arr);
array_splice($mixed_arr, 3,1);
$mixed_arr[] =[
    "hello",
    "world"
];

?>