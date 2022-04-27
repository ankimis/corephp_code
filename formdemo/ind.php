<?php

 trait hello{
      public function sayhello(){
           echo"uvnerununuifrom trait.\n";
      }
     }
 class base{
     public function sayhello(){
          echo"uv ait.\n";
     }
 }
 class child extend base {
      use hello;

 }

 $test=new base();
  $test->sayhello();


?>