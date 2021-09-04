<?php

function is_post_request(){
    return $_SERVER["REQUEST_METHOD"]==='POST';
}

function getInputValue($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}

?>