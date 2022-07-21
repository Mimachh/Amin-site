<?php

function loadLanguage(string $lang){
    if ($lang === 'fr' ){
        require './Constants/bioFr.php';
    } else {
        require './Constants/bioEn.php';
    }
};

?>




