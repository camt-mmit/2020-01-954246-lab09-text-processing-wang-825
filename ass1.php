<?php
/* Name: Wang Zexue
   Wechat name: Wang
   ID: 602110191*/
  $fp=fopen($_SERVER['argv'][1],'r');
  fscanf($fp,"%s %s",$fname,$lname);
  fscanf($fp,"%d",$n);
  printf("Transaction for:\n");
  printf("    First name: %s\n     Last name: %s\n",$fname,$lname);
  printf("Number of transactions: %d\n",$n);
  $infos=[];
  for($i=0;$i<$n;$i++){
     $info=[];
     fscanf($fp," %s %f",$info['type'],$info['money']);
      $infos[]=$info;
    printf(" %-8s  :  %5.2f\n",$info['type'],$info['money']);
  }
fclose($fp);
$balance=0;
foreach($infos as $value){
  if (strcasecmp($value['type'],"deposit")==0){
    $balance+=$value['money'];
  }
  if (strcasecmp($value['type'],"withdraw")==0){
    $balance-=$value['money'];
  }
  if (strcasecmp($value['type'],"transfer")==0){
      $balance+=$value['money'];
  }
}
printf("Account Balance: %.2f",$balance);







