<?php
function  createConfirmationmbox(){
    echo "<script type="text/javascript""> ;
    echo ' function openulr(home.html) {';
    echo '  if (confirm("Are you sure you want to open new URL")) {';
    echo '    document.location = home.html;';
    echo '  }';
    echo '}';
    echo '</script>';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<?php
createConfirmationmbox();
?>
</head>
<body>
<strong><a href="javascript:openulr('home.html');">Open new URL</a></strong>
</body>
</html>
