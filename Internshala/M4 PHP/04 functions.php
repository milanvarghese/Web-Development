<html>
  <head>
    <title>Functions, Arrays and Strings</title>
  </head>
  <body>
    <?php
      function sum(parameter1,parameter2=0){
      $	addition=$parameter1+$parameter2;
      echo"Sum of variables is ".$addition.".";
      return;
      }
      $var1=18;
      $var2=12;
      $sum=sum($var1,$var2);
      echo "Sum of two variables is ".$sum."."; 
     ?>
  </body>
</html>