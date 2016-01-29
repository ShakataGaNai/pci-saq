<?php
  $f = fopen("saq.html", "r") or die("Unable to open file!");
  $x = fread($f,filesize("saq.html"));
  fclose($f);

  $x = preg_replace("/\n/"," ",$x);
  $x = preg_replace("/\t/","",$x);
  $x = preg_replace("/\s\s+/"," ",$x);
  $re = "/title=\"(.*?)\"(.*?)data-content=\"(.*?)\">/mis";
  preg_match_all($re, $x, $m);

  $f = fopen("saq.csv","w");
  fwrite($f,"Title,Question,Answer,Comments\n");
  for($a = 0;$a < count($m[1]); $a++){
    fwrite($f,"\"".$m[1][$a]."\",\"".$m[3][$a]."\"\n");
  }
  fclose($f);
?>
