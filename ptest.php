<html>
<head>
<title>Personality test </title>
</head>
<body>
<?php
 $q1=$q2=$q3=$q4=$q5=$q6=$q7=$q8=$q9=$q10="";
 $q11=$q12=$q13=$q14=$q15=$q16=$q17=$q18=$q19=$q20="";
 $q21=$q22=$q23=$q24=$q25=$q26=$q27=$q28=$q29=$q30="";
 $q31=$q32=$q33=$q34=$q35=$q36=$q37=$q38=$q39=$q40="";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $q1=$_POST['1'];
 $q2=$_POST['2'];
 $q3=$_POST['3'];
 $q4=$_POST['4'];
 $q5=$_POST['5'];
 $q6=$_POST['6'];
 $q7=$_POST['7'];
 $q8=$_POST['8'];
 $q9=$_POST['9'];
 $q10=$_POST['10'];
 $q11=$_POST['11'];
 $q12=$_POST['12'];
 $q13=$_POST['13'];
 $q14=$_POST['14'];
 $q15=$_POST['15'];
 $q16=$_POST['16'];
 $q17=$_POST['17'];
 $q18=$_POST['18'];
 $q19=$_POST['19'];
 $q20=$_POST['20'];
 $q21=$_POST['21'];
 $q22=$_POST['22'];
 $q23=$_POST['23'];
 $q24=$_POST['24'];
 $q25=$_POST['25'];
 $q26=$_POST['26'];
 $q27=$_POST['27'];
 $q28=$_POST['28'];
 $q29=$_POST['29'];
 $q30=$_POST['30'];
 $q31=$_POST['31'];
 $q32=$_POST['32'];
 $q33=$_POST['33'];
 $q34=$_POST['34'];
 $q35=$_POST['35'];
 $q36=$_POST['36'];
 $q37=$_POST['37'];
 $q38=$_POST['38'];
 $q39=$_POST['39'];
 $q40=$_POST['40'];
//personailty variables
$tf = $gm = $au = $se = $ec = $sv = $ch = $ls = "";
$tf = ($q1+$q9+$q17+$q25+$q33)/5;
$gm = ($q2+$q10+$q18+$q26+$q34)/5;
$au = ($q3+$q11+$q19+$q27+$q35)/5;
$se = ($q4+$q12+$q20+$q28+$q36)/5;
$ec = ($q5+$q13+$q21+$q29+$q37)/5;
$sv = ($q6+$q14+$q22+$q30+$q38)/5;
$ch = ($q7+$q15+$q23+$q31+$q39)/5;
$ls = ($q8+$q16+$q24+$q32+$q40)/5;
//finding maximum value out of the above variables
$a = max($tf,$gm,$au,$se,$ec,$sv,$ch,$ls);
if($tf==$a)
{
  header('Refresh:1; url=tf.html');
}
if($gm==$a)
{
  header('Refresh:1; url=gm.html');
}
if($au==$a)
{
  header('Refresh:1; url=au.html');
}
if($se==$a)
{
  header('Refresh:1; url=se.html');
}
if($ec==$a)
{
  header('Refresh:1; url=ec.html');
}
if($sv==$a)
{
  header('Refresh:1; url=sv.html');
}
if($ch==$a)
{
  header('Refresh:1; url=ch.html');
}
if($ls==$a)
{
  header('Refresh:1; url=ls.html');
}

}
?>
  <form action="ptest.php" method="POST">
    1. I dream of being so good at what I do that my expert advice will be sought continually.<br>
    <input type="radio" name="1" value="0" required>0
    <input type="radio" name="1" value="1">1
    <input type="radio" name="1" value="2">2
    <input type="radio" name="1" value="3">3
    <input type="radio" name="1" value="4">4
    <input type="radio" name="1" value="5">5
    <input type="radio" name="1" value="6">6 <br>
    2. I am most fulfilled in my work when I have been able to integrate and manage the efforts of others.<br>
    <input type="radio" name="2" value="0" required>0
    <input type="radio" name="2" value="1">1
    <input type="radio" name="2" value="2">2
    <input type="radio" name="2" value="3">3
    <input type="radio" name="2" value="4">4
    <input type="radio" name="2" value="5">5
    <input type="radio" name="2" value="6">6 <br>
    3. I dream of having a career that will allow me the freedom to do a job my own way and on my own schedule.<br>
    <input type="radio" name="3" value="0" required>0
    <input type="radio" name="3" value="1">1
    <input type="radio" name="3" value="2">2
    <input type="radio" name="3" value="3">3
    <input type="radio" name="3" value="4">4
    <input type="radio" name="3" value="5">5
    <input type="radio" name="3" value="6">6 <br>
    4. Security and stability are more important to me than freedom and autonomy.<br>
    <input type="radio" name="4" value="0" required>0
    <input type="radio" name="4" value="1">1
    <input type="radio" name="4" value="2">2
    <input type="radio" name="4" value="3">3
    <input type="radio" name="4" value="4">4
    <input type="radio" name="4" value="5">5
    <input type="radio" name="4" value="6">6 <br>
    5. I am always on the lookout for ideas that would permit me to start my own enterprise.<br>
    <input type="radio" name="5" value="0" required>0
    <input type="radio" name="5" value="1">1
    <input type="radio" name="5" value="2">2
    <input type="radio" name="5" value="3">3
    <input type="radio" name="5" value="4">4
    <input type="radio" name="5" value="5">5
    <input type="radio" name="5" value="6">6 <br>
    6. I will feel successful in my career only if I have a feeling of having made a real contribution to the welfare of society.<br>
    <input type="radio" name="6" value="0" required>0
    <input type="radio" name="6" value="1">1
    <input type="radio" name="6" value="2">2
    <input type="radio" name="6" value="3">3
    <input type="radio" name="6" value="4">4
    <input type="radio" name="6" value="5">5
    <input type="radio" name="6" value="6">6 <br>
    7. I dream of a career in which I can slove problems or win out in the situation that are extremely challenging.<br>
    <input type="radio" name="7" value="0" required>0
    <input type="radio" name="7" value="1">1
    <input type="radio" name="7" value="2">2
    <input type="radio" name="7" value="3">3
    <input type="radio" name="7" value="4">4
    <input type="radio" name="7" value="5">5
    <input type="radio" name="7" value="6">6 <br>
    8. I would rather leave my organization than to put into a job that would compromise my ability to pursue personal and family concerns.<br>
    <input type="radio" name="8" value="0"  required>0
    <input type="radio" name="8" value="1">1
    <input type="radio" name="8" value="2">2
    <input type="radio" name="8" value="3">3
    <input type="radio" name="8" value="4">4
    <input type="radio" name="8" value="5">5
    <input type="radio" name="8" value="6">6 <br>
    9. I will feel successful in my career only if I can develop my technical or functoinal skills to a very high level of competence.<br>
    <input type="radio" name="9" value="0" required>0
    <input type="radio" name="9" value="1">1
    <input type="radio" name="9" value="2">2
    <input type="radio" name="9" value="3">3
    <input type="radio" name="9" value="4">4
    <input type="radio" name="9" value="5">5
    <input type="radio" name="9" value="6">6 <br>
    10. I dream of being in charge of a complex organization and making decisions that affect many people.<br>
    <input type="radio" name="10" value="0"required>0
    <input type="radio" name="10" value="1">1
    <input type="radio" name="10" value="2">2
    <input type="radio" name="10" value="3">3
    <input type="radio" name="10" value="4">4
    <input type="radio" name="10" value="5">5
    <input type="radio" name="10" value="6">6 <br>
    11. I am most fulfilled in my work when I am completely free to define my own tasks, schedules and procedures.<br>
    <input type="radio" name="11" value="0"required>0
    <input type="radio" name="11" value="1">1
    <input type="radio" name="11" value="2">2
    <input type="radio" name="11" value="3">3
    <input type="radio" name="11" value="4">4
    <input type="radio" name="11" value="5">5
    <input type="radio" name="11" value="6">6 <br>
    12. I would rather leave my organization altogether than accept an assignment that would jeopardise my security in that organization.<br>
    <input type="radio" name="12" value="0"required>0
    <input type="radio" name="12" value="1">1
    <input type="radio" name="12" value="2">2
    <input type="radio" name="12" value="3">3
    <input type="radio" name="12" value="4">4
    <input type="radio" name="12" value="5">5
    <input type="radio" name="12" value="6">6 <br>
    13. Building my own business is more important to me than achieving a high-level managerial position in someone else's organization.<br>
    <input type="radio" name="13" value="0"required>0
    <input type="radio" name="13" value="1">1
    <input type="radio" name="13" value="2">2
    <input type="radio" name="13" value="3">3
    <input type="radio" name="13" value="4">4
    <input type="radio" name="13" value="5">5
    <input type="radio" name="13" value="6">6 <br>
    414. I am most fulfilled in my career when I have been able to use my talents in the service of others.<br>
    <input type="radio" name="14" value="0"required>0
    <input type="radio" name="14" value="1">1
    <input type="radio" name="14" value="2">2
    <input type="radio" name="14" value="3">3
    <input type="radio" name="14" value="4">4
    <input type="radio" name="14" value="5">5
    <input type="radio" name="14" value="6">6 <br>
    15. I will feel successful in my career when I have been able to use my talents in the service of others.<br>
    <input type="radio" name="15" value="0"required>0
    <input type="radio" name="15" value="1">1
    <input type="radio" name="15" value="2">2
    <input type="radio" name="15" value="3">3
    <input type="radio" name="15" value="4">4
    <input type="radio" name="15" value="5">5
    <input type="radio" name="15" value="6">6 <br>
    16. I dream of a career that will me to integrate my personal, family and work needs.<br>
    <input type="radio" name="16" value="0"required>0
    <input type="radio" name="16" value="1">1
    <input type="radio" name="16" value="2">2
    <input type="radio" name="16" value="3">3
    <input type="radio" name="16" value="4">4
    <input type="radio" name="16" value="5">5
    <input type="radio" name="16" value="6">6 <br>
    17. Becoming a functional manager in my area of expertise is more attractive to me than becoming a general manager.<br>
    <input type="radio" name="17" value="0"required>0
    <input type="radio" name="17" value="1">1
    <input type="radio" name="17" value="2">2
    <input type="radio" name="17" value="3">3
    <input type="radio" name="17" value="4">4
    <input type="radio" name="17" value="5">5
    <input type="radio" name="17" value="6">6 <br>
    18. I will feel successful in my career only if I become a general manager in some organization.<br>
    <input type="radio" name="18" value="0"required>0
    <input type="radio" name="18" value="1">1
    <input type="radio" name="18" value="2">2
    <input type="radio" name="18" value="3">3
    <input type="radio" name="18" value="4">4
    <input type="radio" name="18" value="5">5
    <input type="radio" name="18" value="6">6 <br>
    19. I will feel successful in my career only if I achieve complete autonomy and freedom.<br>
    <input type="radio" name="19" value="0"required>0
    <input type="radio" name="19" value="1">1
    <input type="radio" name="19" value="2">2
    <input type="radio" name="19" value="3">3
    <input type="radio" name="19" value="4">4
    <input type="radio" name="19" value="5">5
    <input type="radio" name="19" value="6">6 <br>
    20. I seek jobs in organiztion that will give me sense of security and stability.<br>
    <input type="radio" name="20" value="0"required>0
    <input type="radio" name="20" value="1">1
    <input type="radio" name="20" value="2">2
    <input type="radio" name="20" value="3">3
    <input type="radio" name="20" value="4">4
    <input type="radio" name="20" value="5">5
    <input type="radio" name="20" value="6">6 <br>
    21. I am most fulfilled in my carerr when I have been able to build something that is entirely the result of my own ideas and efforts.<br>
    <input type="radio" name="21" value="0"required>0
    <input type="radio" name="21" value="1">1
    <input type="radio" name="21" value="2">2
    <input type="radio" name="21" value="3">3
    <input type="radio" name="21" value="4">4
    <input type="radio" name="21" value="5">5
    <input type="radio" name="21" value="6">6 <br>
    22. Using my skills to make the world a better place to live and work is more important to me than achieving a high-level managerial position.<br>
    <input type="radio" name="22" value="0"required>0
    <input type="radio" name="22" value="1">1
    <input type="radio" name="22" value="2">2
    <input type="radio" name="22" value="3">3
    <input type="radio" name="22" value="4">4
    <input type="radio" name="22" value="5">5
    <input type="radio" name="22" value="6">6 <br>
    23. I have been most fulfilled in my career when I have solved seemingly unsolvable problems or won out uver seemingly impossible odds.<br>
    <input type="radio" name="23" value="0"required>0
    <input type="radio" name="23" value="1">1
    <input type="radio" name="23" value="2">2
    <input type="radio" name="23" value="3">3
    <input type="radio" name="23" value="4">4
    <input type="radio" name="23" value="5">5
    <input type="radio" name="23" value="6">6 <br>
    24. I feel successful in life only if I have been able to balance my personal, family and career requirements.<br>
    <input type="radio" name="24" value="0"required>0
    <input type="radio" name="24" value="1">1
    <input type="radio" name="24" value="2">2
    <input type="radio" name="24" value="3">3
    <input type="radio" name="24" value="4">4
    <input type="radio" name="24" value="5">5
    <input type="radio" name="24" value="6">6 <br>
    25. I would rather leave my organization that accept a rotational assignment that would take me out of my area of expertise.<br>
    <input type="radio" name="25" value="0"required>0
    <input type="radio" name="25" value="1">1
    <input type="radio" name="25" value="2">2
    <input type="radio" name="25" value="3">3
    <input type="radio" name="25" value="4">4
    <input type="radio" name="25" value="5">5
    <input type="radio" name="25" value="6">6 <br>
    26. Becoming a general manager is more attractive to me than becoming a functional manager in my current area of expertise.<br>
    <input type="radio" name="26" value="0"required>0
    <input type="radio" name="26" value="1">1
    <input type="radio" name="26" value="2">2
    <input type="radio" name="26" value="3">3
    <input type="radio" name="26" value="4">4
    <input type="radio" name="26" value="5">5
    <input type="radio" name="26" value="6">6 <br>
    27. The chnaces to do a job my own way, free of rules and constraints, is more important to me than security.<br>
    <input type="radio" name="27" value="0"required>0
    <input type="radio" name="27" value="1">1
    <input type="radio" name="27" value="2">2
    <input type="radio" name="27" value="3">3
    <input type="radio" name="27" value="4">4
    <input type="radio" name="27" value="5">5
    <input type="radio" name="27" value="6">6 <br>
    28. I am most fulfilled in my work when I feel that I have complete financial and employment security.<br>
    <input type="radio" name="28" value="0"required>0
    <input type="radio" name="28" value="1">1
    <input type="radio" name="28" value="2">2
    <input type="radio" name="28" value="3">3
    <input type="radio" name="28" value="4">4
    <input type="radio" name="28" value="5">5
    <input type="radio" name="28" value="6">6 <br>
    29. I will feel successful inmy career only if I have succeeded in creating or building something that is entirely my own product or idea.<br>
    <input type="radio" name="29" value="0"required>0
    <input type="radio" name="29" value="1">1
    <input type="radio" name="29" value="2">2
    <input type="radio" name="29" value="3">3
    <input type="radio" name="29" value="4">4
    <input type="radio" name="29" value="5">5
    <input type="radio" name="29" value="6">6 <br>
    30. I dream of having a career that makes a real contribution to humanity and  society.<br>
    <input type="radio" name="30" value="0"required>0
    <input type="radio" name="30" value="1">1
    <input type="radio" name="30" value="2">2
    <input type="radio" name="30" value="3">3
    <input type="radio" name="30" value="4">4
    <input type="radio" name="30" value="5">5
    <input type="radio" name="30" value="6">6 <br>
    31. I seek out work opportunities that strongly challenge my problem solving and/or competitive skills.<br>
    <input type="radio" name="31" value="0"required>0
    <input type="radio" name="31" value="1">1
    <input type="radio" name="31" value="2">2
    <input type="radio" name="31" value="3">3
    <input type="radio" name="31" value="4">4
    <input type="radio" name="31" value="5">5
    <input type="radio" name="31" value="6">6 <br>
    32. Balancing the demands of personal and professional life is more important to me than achieving a high-level managerial track.<br>
    <input type="radio" name="32" value="0"required>0
    <input type="radio" name="32" value="1">1
    <input type="radio" name="32" value="2">2
    <input type="radio" name="32" value="3">3
    <input type="radio" name="32" value="4">4
    <input type="radio" name="32" value="5">5
    <input type="radio" name="32" value="6">6 <br>
    33. I am most fulfilled in my work when I have been able to use my special skills and talents.<br>
    <input type="radio" name="33" value="0"required>0
    <input type="radio" name="33" value="1">1
    <input type="radio" name="33" value="2">2
    <input type="radio" name="33" value="3">3
    <input type="radio" name="33" value="4">4
    <input type="radio" name="33" value="5">5
    <input type="radio" name="33" value="6">6 <br>
    34. I would rather leave my organization than accept a job that would take me away from the general managerial tasks.<br>
    <input type="radio" name="34" value="0"required>0
    <input type="radio" name="34" value="1">1
    <input type="radio" name="34" value="2">2
    <input type="radio" name="34" value="3">3
    <input type="radio" name="34" value="4">4
    <input type="radio" name="34" value="5">5
    <input type="radio" name="34" value="6">6 <br>
    35. I would rather leave my organization that accept a job that would reduce my autonomy and freedom.<br>
    <input type="radio" name="35" value="0"required>0
    <input type="radio" name="35" value="1">1
    <input type="radio" name="35" value="2">2
    <input type="radio" name="35" value="3">3
    <input type="radio" name="35" value="4">4
    <input type="radio" name="35" value="5">5
    <input type="radio" name="35" value="6">6 <br>
    36. I dream of having a career that will allow me feel a sense of security and stability.<br>
    <input type="radio" name="36" value="0"required>0
    <input type="radio" name="36" value="1">1
    <input type="radio" name="36" value="2">2
    <input type="radio" name="36" value="3">3
    <input type="radio" name="36" value="4">4
    <input type="radio" name="36" value="5">5
    <input type="radio" name="36" value="6">6 <br>
    37. I dream of starting up and running my own business.<br>
    <input type="radio" name="37" value="0"required>0
    <input type="radio" name="37" value="1">1
    <input type="radio" name="37" value="2">2
    <input type="radio" name="37" value="3">3
    <input type="radio" name="37" value="4">4
    <input type="radio" name="37" value="5">5
    <input type="radio" name="37" value="6">6 <br>
    38. I would rather leave my organization than accept an assignment that would undermine my ability to be of service to others.<br>
    <input type="radio" name="38" value="0"required>0
    <input type="radio" name="38" value="1">1
    <input type="radio" name="38" value="2">2
    <input type="radio" name="38" value="3">3
    <input type="radio" name="38" value="4">4
    <input type="radio" name="38" value="5">5
    <input type="radio" name="38" value="6">6 <br>
    39. Working on problems that  are  almost unsolvable is more important to me than achieving a high-level managerial position.<br>
    <input type="radio" name="39" value="0"required>0
    <input type="radio" name="39" value="1">1
    <input type="radio" name="39" value="2">2
    <input type="radio" name="39" value="3">3
    <input type="radio" name="39" value="4">4
    <input type="radio" name="39" value="5">5
    <input type="radio" name="39" value="6">6 <br>
    40. I have always sought out work oppotunities that would minimise interference with home or family concerns.<br>
    <input type="radio" name="40" value="0"required>0
    <input type="radio" name="40" value="1">1
    <input type="radio" name="40" value="2">2
    <input type="radio" name="40" value="3">3
    <input type="radio" name="40" value="4">4
    <input type="radio" name="40" value="5">5
    <input type="radio" name="40" value="6">6 <br>

    <button type="submit"> DONE  </button>
  </form>
</body>
</html>
