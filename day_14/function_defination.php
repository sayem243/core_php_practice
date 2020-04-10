<?php

   function even_sum($value){
     
     $starting_number=$_POST['starting_number'];
     $ending_number=$_POST['ending_number'];
     $sum=0;
     for($i=$starting_number;$i<=$ending_number;$i++){
         if($i % 2==0)
             $sum=$sum+$i;
             
     }
     return $sum;
     
 }

