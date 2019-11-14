<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:signup.html");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
</head>
<body>

<h2>Welcome, <?=$_SESSION['sess_user'];?>!</h2>
<p>
  <form>
  Name: <input type="text" required placeholder="Name">
  <br>
  Gender:
  <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other <br>

    Date of Birth:
    <input type="date" name="Date of Birth" required>
    <br>

    Address:
  <textarea name="textarea" cols="35" rows="5" id="textarea" required></textarea><br>

    Mobile Number:
    <input type="tel" placeholder="Mobile Number" required>
    <br>

    Email:
    <input type="Email" placeholder="Email Id">
    <br>

  <h4>Educational Qualifications</h4>

  Xth(%):<input type="Number" placeholder="Enter your Xth percentage here" required>
  <br>
  XIIth(%):<input type="Number" placeholder="Enter your XIIth percentage here" required>
  <br>

  Undergraduate Degree:<select name="udegree" id="udegree" required>
        <option selected>-- Select Group --</option>
        <option>B.Com</option>
        <option>B.sc</option>
        <option>BCA</option>
        <option>BBA</option>
        <option>B.Tech</option>
        <option>B.Arch</option></select><br>

    Undergraduate Degree(%):<input type="Number" placeholder="Enter your UG % here" required>
      <br>
    Postgraduate Degree:<select name="pdegree" id="pdegree" required>
      <option selected>--Select Group--></option>
      <option>M.Com</option>
      <option>M.sc</option>
      <option>MCA</option>
      <option>MBA</option>
      <option>M.Tech</option>
      <option>M.Arch</option>
    </select><br>
    Postgraduate Degree(%):<input type="Number" placeholder="Enter your PG % here" required>
    <br>

  Hobbies:
  <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1" checked>Playing chess<br>
  <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup2">Reading Books<br>
  Any other:<input type="text" name="other" placeholder="if any other specify">
  <br>
  Attach Resume: <input type="file" name="fileField" id="fileField" required><br><br>
    <br>
  <button onclick="window.location='aptitude.php';" value="Apptitude Test">Apptitude Test</button>
  <br>
  <button onclick="window.location='ptest.php';" value="Career Anchor">Career Anchor</button>
</form>
</p>
</body>
</html>
<?php
}
?>
