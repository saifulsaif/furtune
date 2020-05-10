<?php

/**
* change plain number to formatted currency
*
*
*/

function getMenuList(){

}

function getSubMenu(){

}

function getAllById($id,$table_name){
    $result = DB::table($table_name)->where('id', $id)->first();
    return $result;
}

function getIdByFirst($id,$table_name){
    $result = DB::table($table_name)->where('id', $id)->first();
    return $result;
}
