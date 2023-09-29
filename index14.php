<?php
//phpinfo);
$h = date("H");
if($h >= 8 && $h < 12) {
echo "<p> ".$h. "hs. Bom dia á todos!</p>";
}else if($h >= 12 && $h < 18){
  echo "<p> ".$h. "hs. Boa tarde á todos! </p>";
}else if($h >= 18 && $h < 24) {
 echo "<p> " .$h. "hs. Boa noite à todos! </p>";
}
?>