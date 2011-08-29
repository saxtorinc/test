<?php
  class helloworld{
     
     
      function hellworld($information){
         echo "Hello world $information";
      }
      function myipaddress(){
       echo $_SERVER['REMOTE_ADDR'];
      }
  } 
    
$new = new helloworld();
$new->helloworld('Stephen');
$new->myipaddress();
?>