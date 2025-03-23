<?php
$content = "";
$fp = fopen("ancor.txt","wb");
fwrite($fp,$content);
fclose($fp);
echo "<script>setTimeout(function(){location.href='./'} , 500);</script>";
?>