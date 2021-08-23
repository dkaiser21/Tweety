<?php

function is_post_request(){
    return $_SERVER["REQUEST_METHOD"]==='POST';
}

?>