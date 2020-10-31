<?php
/* Name: Wang Zexue
   Wechat name: Wang
   ID: 602110191*/

   $p=substr($_SERVER['argv'][1],0,2);
   $m=substr($_SERVER['argv'][1],2);
   $t=0;
   for($i=0;;$i++){
      if(substr($m,$i,1)==0){
         $t++;
      }
      else break;
   }
   $k=substr($m,$t);
   $fp=fopen($_SERVER['argv'][2],'r');
   fscanf($fp,"%d",$n);
   $books=[];
   for($i=0;$i<$n;$i++){
     fscanf($fp,"%s",$book['name']);
     $book['0']=str_repeat("0",$t);
     $book['m']=$k+$i;
     $books[]=$book;
    printf("%s%s%d   %s\n",$p,$book['0'],$book['m'],$book['name']);
   }

  
  
