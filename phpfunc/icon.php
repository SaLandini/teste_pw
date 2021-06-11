<?php
function icon($hora){
    if($hora == null){
        echo "<link rel='shortcut icon' href='assets/index.ico'>";
        echo "<title>Bom Index</title>";
    } elseif (($hora >= 0) and ($hora <= 12)){
        echo "<link rel='shortcut icon' href='assets/dia.ico'>";
        echo "<title>Bom dia</title>";
    } elseif (($hora >= 13) and ($hora < 18)){
        echo "<link rel='shortcut icon' href='assets/tarde.ico'>";
        echo "<title>Boa tarde</title>";
    } elseif (($hora >= 18) and ($hora <= 23)){
        echo "<link rel='shortcut icon' href='assets/noite.ico'>";
        echo "<title>Boa noite</title>";
    }
}
?>