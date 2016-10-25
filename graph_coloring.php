<?php

$team=$_POST['team'];
$moves=$_POST['moves'];
$sol=$_POST['solution'];
$no_of_colors=$_POST['no_of_colors'];
$clicks=$_POST['clicks'];

$filehandle=fopen("graph_coloring.txt",'a');
fwrite($filehandle,PHP_EOL .PHP_EOL .PHP_EOL ."\tTeam : ".$team.PHP_EOL );
fwrite($filehandle,"\tMoves : ".$moves. PHP_EOL);
fwrite($filehandle,"\tsolution : ".$sol. PHP_EOL);
fwrite($filehandle,"\tNo of colors used : ".$no_of_colors. PHP_EOL);
fwrite($filehandle,"\tClicks: [".$clicks[0]."],"."[".$clicks[1]."],"."[".$clicks[2]."],"."[".$clicks[3]."],"."[".$clicks[4]."],"."[".$clicks[5]."],"."[".$clicks[6]."],"."[".$clicks[7]."],"."[".$clicks[8]."],"."[".$clicks[9]."],"."[".$clicks[10]."],"."[".$clicks[11]."],"."[".$clicks[12]."],"."[".$clicks[13]."],"."[".$clicks[14]."],"."[".$clicks[15]."],"."[".$clicks[16]."],"."[".$clicks[17]."],"."[".$clicks[18]."],"."[".$clicks[19]."],");
fclose($fileHandle);

echo "Team : ".$team;

?>
