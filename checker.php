<?php
try{
   $IP = "Your Ip";
   $PORT = "Your Port";
   $fp=fsockopen($IP, $PORT, $errno, $errstr, 3);
 if($fp){
   echo "Open!"; 
 }else{
   echo $errstr;
 }
 }catch(Exception $e) {
       echo $e->getMessage()." On line ". $e->getLine();
}
