<?php
$array = [
    "Japan"=>"Tokyo",
    "Mexico"=>"Mexico City",
    "USA"=>"Washington D.C.",
    "India"=>"New Delhi",
    "Zuid-Korea"=>"Seoul",
    "China"=>"Peking",
    "Nigeria"=> "Abuja",
    "Argentina"=>"Buenos Aires",
    "Egypt"=>"Cairo",
    "UK"=>"London"
];
$goed = 0;
echo("Wil je landen toevoegen?".PHP_EOL);
$janee = readline();
if($janee == 'Ja'){
    echo("Hoeveel landen wil je toevoegen?".PHP_EOL);
    $integer = readline();
    if(is_numeric($integer)){
        for($i=1;$i<=$integer;$i++){
            echo("Welk land wil je toevoegen?".PHP_EOL);
            $landnaam = readline();
            echo("Welke hoofdstad hoort hier bij?".PHP_EOL);
            $stadsnaam = readline();
            $array[$landnaam]=$stadsnaam;
        }
    }
}
foreach($array as $land=>$stad){
    echo("Welke hoofdstad heeft ".$land."?".PHP_EOL);
    $answer = readline();
    if($answer == $stad){
        echo("Correct!".PHP_EOL);
        $goed++;
}
    else if($answer != $stad){
        echo("Incorrect!".PHP_EOL);
        $goed--;
}
}
$amount  = count($array);
echo("Je hebt er ".$goed." van de ".$amount." goed.");
