<?php
      $num1=15;
      $num2=20;
      $num3=10;
      if($num1>$num2 && $num1>$num3){
        echo "$num1 is the biggest number ";
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "$num2 is the biggest number ";
        }
        else
          echo "$num3 is the biggest number ";
      }
?>