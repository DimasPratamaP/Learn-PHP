<?php

class text{
    public $str = "hello world";

    function show_text(){
        return $this->str;
    }
}

$message = new text;
var_dump($message);

?>