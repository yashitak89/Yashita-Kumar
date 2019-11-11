<html>
<head>
  <title>APTITUDE TEST</title>
  <link rel="stylesheet" type="text/css" href="aptitude.css">
  </head>
  <body>
    <?php
    $q1 = $q2 = $q3 = $q4 = $q5 = "";
    //counting variables
    $a1=24;
    $a2=116;
    $a3=29;
    $a4=120;
    $a5=33;
    $count=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    if ($q1==$a1){
      $count ++ ;
  }
  if($q2==$a2)
  {
    $count++;
  }
  if($q3==$a3)
  {
    $count++;
  }
  if($q4==$a4)
  {
    $count++;
  }
  if($q5==$a5)
  {
    $count++;
  }
  }
    ?>
    <form action="aptitude.php" method="POST">
    <p>1.Evaluate the expression: 2 + 5 * 6 - 7 * 8 / 4 + 6</p>
    <input type="radio" value="22" name="q1" required>22
    <input type="radio" value="21" name="q1" >21
    <input type="radio" value="23" name="q1" >23
    <input type="radio" value="24" name="q1" >24
    <p>2.There were 12 students in a particular Class.
      The class teacher knows the overall height of all the students in the class is 1400.
      Can you find the average height of students in the class?</p>
    <input type="radio" value="110" name="q2" required>110.84
    <input type="radio" value="122" name="q2" >122.5
    <input type="radio" value="116" name="q2" >116.67
    <input type="radio" value="128" name="q2" >128.34
    <p>3.What least number must be subtracted from 13601, so that the remainder is divisible by 87?</p>
    <input type="radio" value="23" name="q3" required>23
    <input type="radio" value="31" name="q3" >31
    <input type="radio" value="29" name="q3" >29
    <input type="radio" value="37" name="q3" >37
    <p>4.Find the next number in the the below series
        18, 42, 67, 93, _____</p>
    <input type="radio" value="121" name="q4" required>121
    <input type="radio" value="122" name="q4" >122
    <input type="radio" value="117" name="q4" >117
    <input type="radio" value="120" name="q4" >120
    <p>5.Two numbers are in the ratio 3 : 5. If 9 is subtracted from each, the new numbers are in the ratio 12 : 23. The smaller number is:</p>
    <input type="radio" value="35" name="q5" required>35
    <input type="radio" value="32" name="q5" >32
    <input type="radio" value="33" name="q5" >33
    <input type="radio" value="24" name="q5" >24
    <br><br>
    <input type="submit" value="submit" name="submit">
  </form>
  <?php
  echo "score:";
  echo $count;
  ?>
</body>
</html>
