<?php
$key = $_GET['u'];
$contents = '';
$fc=file("ancor.txt");
foreach($fc as $line)
  {
    if (!strstr($line,$key))
    {
       $contents .= $line;
     }  
  }
file_put_contents('ancor.txt' , $contents);
echo "<script>setTimeout(function(){location.href='./'} , 500);</script>";
?>