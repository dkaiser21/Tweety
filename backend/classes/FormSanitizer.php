<?php

class FormSanitizer{
    public static function formSanitizer($data){
        $data=trim(strip_tags($data));
        $data=htmlspecialchars($data);
        return $data;
    }    

    public static function formSanitizerName( $data){
        $data=trim(strip_tags($data));
        $data=htmlspecialchars($data);
        $data=strtolower($data);
        $data=ucfirst($data);
        return $data;
    }
}

?>