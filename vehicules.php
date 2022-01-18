<?php

$sql ="select * from Vehicle limit 4";
$response=array();
$vehicule=mysql_query($sql);
$stmt = $conn->prepare($sql);
$stmt->execute();
$res = $stmt->get_result();
while($row=mysql_fetch_array($vehicule)){
    $Id=$row['Id'];
    $capacite=$row['capacite'];
   
    $vehicule[]=array('Id'=>$Id,'capacite'=>$capacite);

}

$response['vehicle']=$vehicule;
$fp=fopen('vehicles.json','w');
fwrite($fp,json_encode($response));
fclose($fp);
?>
