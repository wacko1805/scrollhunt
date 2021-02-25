<?php
header('Location: https://scrollhunt.pixel-fy.com/upload/uploaded.html');

if(isset($_POST['submit'])){
$Name = "User: ".$_POST['name']."
";



$code = "code: ".$_POST['code']."
";


$file=fopen('Scrollbar-code'.date('m-d-Y_hia').'.txt', "a");
fwrite($file, $Name);
fwrite($file, $code);
fclose($file);
}
?>