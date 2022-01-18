<?php
$sql ="select * from Commande limit 30";
$response=array();
$vehicule=mysql_query($sql);
while($row=mysql_fetch_array($vehicule)){
    $Id=$row['Id'];
    $poid=$row['poid'];
    $destination=$row['destination']
    $latitude=$row['latitude'];
    $longitude=$row['longitude'];
    $vehicule[]=array('Id'=>$Id,'poid'=>$poid,'destination'=>$destination,
                      'latitude'=>$latitude,'longitude'=>$longitude);

}

$response['Commande']=$vehicule;
$fp=fopen('Commandes.json','w');
fwrite($fp,json_encode($response));
fclose($fp);
?>