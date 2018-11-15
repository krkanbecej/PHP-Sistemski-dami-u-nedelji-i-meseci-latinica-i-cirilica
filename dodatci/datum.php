<?php //automatski ispis datuma i dana u nedelji ćirilicom********

//dani u nedelji na srpskom ćirilica*******************
$dani = date('D');
if ($dani=='Mon'){
echo 'понедељак';
}
else;
if ($dani=='Tue'){
echo 'уторак';
}
else;
if ($dani=='Wed'){
echo 'среда';
}
else;
if ($dani=='Thu'){
echo 'четвртак';
}
else;
if ($dani=='Fri'){
echo 'петак';
}
else;
if ($dani=='Sat'){
echo 'субота';
}
else;
if ($dani=='Sun'){
echo 'недеља';
}
$datum = date(" d.");
echo $datum;
echo'&nbsp;';
//meseci na srpskom ćirilica lako se može promeniti i u latinični prikaz************************
$meseci= date("n");
if ($meseci ==1){
echo 'Јануар';
}
if ($meseci ==2){
echo 'Фебруар';
}
if ($meseci ==3){
echo 'Март';
}
if ($meseci ==4){
echo 'Април';
}
if ($meseci ==5){
echo 'Мај';
}
if ($meseci ==6){
echo 'Јун';
}
if ($meseci ==7){
echo 'Јул';
}
if ($meseci ==8){
echo 'Август';
}
if ($meseci ==9){
echo 'Септембар';
}
if ($meseci ==10){
echo 'Октобар';
}
if ($meseci ==11){
echo 'Новембар';
}
if ($meseci ==12){
echo 'Децембар';
}
echo'&nbsp;';//razmak u tekstu
//godine prikazuje četvorocifreni broj****************
$godine = date("Y.");
echo $godine;
echo'&nbsp; године';

?>
