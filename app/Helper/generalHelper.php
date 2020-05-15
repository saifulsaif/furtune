<?php

/**
* change plain number to formatted currency
*
*
*/

function getMenuList(){
    $result = DB::table('menu')->get();
    return $result;
}

function getSubMenu(){

} 

function getAll_id($fild_name,$value,$table_name){
    $result = DB::table($table_name)->where($fild_name, $value)->get();
    return $result;
}

function getSingle_id($fild_name,$value,$table_name){
    $result = DB::table($table_name)->where($fild_name, $value)->first();
    return $result;
}

function getValueByTBName($table_name)
{
    $result = DB::table($table_name)->get();
    return $result;
}
