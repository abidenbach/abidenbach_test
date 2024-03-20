<?php
/*************************************************
* saisie d'un nombre réel  (type float)
* supérieur à 0 et demandé par le message $message
*
* @autor : M Delio
* @date : //
*************************************************/
function saisirNombre(string $message): float {
    $nombre = 0;
     do {
        // (float) permet de convertir la saisie string en type float
        //  si des lettres sont saisies alors $nombre vaut 0
        $nombre = (float)readLine($message);
    }
    while ($nombre == 0);
    return $nombre;
}

/*************************************************
* saisie d'une chaine non vide
* demandé par le message $message
*
* @autor : M Delio
* @date : //
*************************************************/
function saisirChaine(string $message): string {
    $uneSaisie = '';
    do {
        $uneSaisie = readLine($message);
    }
    while (strlen($uneSaisie) == 0);
    return $uneSaisie;
}
?>