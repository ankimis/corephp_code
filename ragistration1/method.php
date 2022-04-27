<?php
class abc {
public function first(){
    echo"fugh";
    return$this;
}
public function second(){
    echo"mid";
    return$this;
}
public function third(){
    echo"last";
}
}
$test=new abc();
$test->first()->second()->third();