<html>
  <head>
    <title>Functions, Arrays and Strings</title>
  </head>
  <body>
    <?php
      $num=array(18, 12);
      $sum=$num[0] + $num[1];
      echo"Sum of two variables is ".$sum.".";

      //Associative Array
      $num1=array("first_num"=>18,"second_num"=>12);
      $sum1=$num1["first_num"] + $num1["second_num"];
      echo"Sum of two variables is ".$sum1.".";
      echo"Length of the array is ".sizeof($numbers);

      //Two Dimensional Array
      $num2=array(array(18,12),array(1, 2));
      $sum2=$num2[0][0]+$num2[0][1];
      echo"Sum of two variables is ".$sum2.".";
    ?>
  </body>
</html>