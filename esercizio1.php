<?php
$nomefile="file1.yaml";
$puntatore=fopen($nomefile,"r+");
if($puntatore==false)
{
    echo("non è stato possibile aprire il file\n");
    exit;
}
$dimensione=1024;

while(!feof($puntatore))
{
    $contenutofile=fread($puntatore,$dimensione);
}
$conversione=json_encode($contenuto);
echo $conversione;
?>
