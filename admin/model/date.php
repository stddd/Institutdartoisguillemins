<?php 
class Date{

var $days	= array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche'); 

// une année scolaire
var $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 

function getEvents($year){
global $dbs;
$req = $dbs->query('SELECT id,title,date FROM events WHERE YEAR(date)='.$year);
$r=array();
while($d=$req->fetch(PDO::FETCH_OBJ)){
$r[strtotime($d->date)][$d->id] = $d->title;
}
return $r;
}
function getEvents2($year){
global $dbs;
$req = $dbs->query('SELECT id,title,date FROM events WHERE YEAR(date)='.$year);
$r=array();
while($d=$req->fetch(PDO::FETCH_OBJ)){
$r[strtotime($d->date)][$d->id] = $d->title;
}
return $r;
}

function getAll($year){
$date = new DateTime($year.'-01-01');
while($date->format('Y')<=$year){
// obtenir $r[ANNEE][MOI][JOUR] = jour de la semaine
$y = $date->format('Y');
$m = $date->format('n');
$d = $date->format('j');
$w = str_replace('0','7',$date->format('w'));
$r[$y][$m][$d]=$w;
$date->add(new DateInterval('P1D'));
}
return $r;
}
}

?>
