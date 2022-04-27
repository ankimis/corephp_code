<?php
class first {
    public function __construct(){
    echo"my firsy class\n";
    }
    public function hello(){
    echo"hello\n<br>";
    }
    public function __destruct(){
    echo"destruct";
    }




}


$test=new first();
$test->hello();
?>