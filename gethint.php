<?php
$a = ["Maria, José, Antônio, João, Francisco, Ana, Luiz, Paulo,
        Carlos, Manoel, Pedro, Francisca, Marcos, Raimundo, Sebastião,
        Antônia, Marcelo, Jorge, Márcia, Geraldo, Adriana, Sandra, 
        Luis, Fernando, Fabio, Roberto, Márcio, Edson, André, Sérgio,
        Josefa, Patrícia, Daniel, Rodrigo, Rafael, Joaquim, Vera, 
        Ricardo, Eduardo, Terezinha, Sônia, Alexandre, Rita, Luciana,
        Cláudio, Rosa, Benedito, Leandro, Raimunda, Mário"];

$q = $_GET["q"];
$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name){
        if(stristr($q, substr($name, 0, $len))){
            if($hint === ""){
                $hint = $name;

            }else{
                $hint .= ", $name";

            }
        }
    }
}
echo $hint === "" ? "Sem sugestão" :$hint;

?>