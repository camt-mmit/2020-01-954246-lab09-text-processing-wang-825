<?php
/* Name: Wang Zexue
   Wechat name: Wang
   ID: 602110191*/
$fp=fopen($_SERVER['argv'][2],'r');
$n=0;
for($i=0;;$i++){
   $info[$i]=trim(fgets($fp,4096));
   $low[$i]=strtolower($info[$i]);
   $up[$i]=ucwords($low[$i]);
   if(feof($fp))
        break;
    }
fclose($fp);
$doc=fopen($_SERVER['argv'][1],'r');
for($j=0;;$j++){
    $m[$j]=trim(fgets($doc,4096));
    if(feof($doc)) break;
    
}fclose($doc);
$ex=implode(" ",$m);
$end=str_ireplace($info,$up,$ex);
echo$end;