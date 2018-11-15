<?php //automatski ispis datuma i dana u nedelji ćirilicom********

//dani u nedelji na srpskom ćirilica*******************
$dani = date('D');
if ($dani=='Mon'){
echo 'ponedeljak';
}
else;
if ($dani=='Tue'){
echo 'utorak';
}
else;
if ($dani=='Wed'){
echo 'sreda';
}
else;
if ($dani=='Thu'){
echo 'četvrtak';
}
else;
if ($dani=='Fri'){
echo 'petak';
}
else;
if ($dani=='Sat'){
echo 'subota';
}
else;
if ($dani=='Sun'){
echo 'nedelja';
}
$datum = date(" d.");
echo $datum;
echo'&nbsp;';
//meseci na srpskom ćirilica lako se može promeniti i u latinični prikaz************************
$meseci= date("n");
if ($meseci ==1){
echo 'Januar';
}
if ($meseci ==2){
echo 'Februar';
}
if ($meseci ==3){
echo 'Mart';
}
if ($meseci ==4){
echo 'April';
}
if ($meseci ==5){
echo 'Maj';
}
if ($meseci ==6){
echo 'Jun';
}
if ($meseci ==7){
echo 'Jul';
}
if ($meseci ==8){
echo 'Avgust';
}
if ($meseci ==9){
echo 'Septembar';
}
if ($meseci ==10){
echo 'Oktobar';
}
if ($meseci ==11){
echo 'Novembar';
}
if ($meseci ==12){
echo 'Decenbar';
}
echo'&nbsp;';//razmak u tekstu
//godine prikazuje četvorocifreni broj****************
$godine = date("Y.");
echo $godine;
echo'&nbsp; godine';

?>
