<?php
   $bmaior = $_REQUEST["bmaior"];
   $bmenor = $_REQUEST["bmenor"];
   $altura = $_REQUEST["altura"];


   echo "A área do trapézio é: " . ($bmaior + $bmenor) * $altura / 2 . " cm²";
?>