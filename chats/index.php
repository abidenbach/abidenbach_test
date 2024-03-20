<?php
require_once 'class.Chat.inc.php';
$felix = new Chat('Félix','Siamois',new DateTime('1865-4-13'));
$thierry = new Chat('Thierry','Bleu Russe',new DateTime('1970-12-24'));
$philippe = new Chat('Philippe','Angora',new DateTime('1789-8-2'),'NǐHǎo ');

$tbChats=array($felix,$thierry,$philippe);
for($i=0;$i<count($tbChats);$i++){
    echo $tbChats[$i]->decrire()."\n";  ²
}

?>