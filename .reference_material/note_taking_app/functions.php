<?php 

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "<pre>";

    die();
}



//db functions
function db(){
    $config = require('configs.php');
    $db = new Database($config['db'], $config['user'], $config['pass']);
    return $db;
}
function get_user($value, $field = 'id' ){
    $user = db()->query("select * from users where $field = ?", [$value])->fetch();
    return $user;
}   
function get_users($add="",$var_array=null){
    $users = db()->query("select * from users ".$add, $var_array)->fetchAll();
    return $user;
}   
function get_note($value, $field = 'id'){
    $note = db()->query("select * from notes where $field = ?", [$value])->fetch();
    return $note;
}   
function get_notes($add="",$var_array=null){
    $notes = db()->query("select * from notes ".$add, $var_array)->fetchAll();
    return $notes;
}  
function add_note($var_array){
    db()->query("insert into notes(body, user_id) values(?,?)", $var_array);
}
function add_user($var_array){
    db()->query("insert into users(name, email) values(?,?)", $var_array);
}





function navFocus($url){
    
    if($_SERVER['REQUEST_URI'] === $url){
        echo "bg-gray-900 text-white";
    }
    else {
        echo "text-gray-300 hover:bg-gray-700 hover:text-white";
    }
}