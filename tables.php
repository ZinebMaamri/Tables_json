<?php
            $servname = "localhost"; $user = "root"; $pass = "root";
            
            try{
                $dbco = new PDO("mysql:host=$servname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $createDB = "CREATE DATABASE tables";
                $dbco->exec($createDB);
                
                //On utilise la base tout juste créée pour créer une table dedanss
                $createTb = "use tables";
                $dbco->exec($createTb);
                
                $createTb = "CREATE TABLE vehicles(
                  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  capacite VARCHAR(30) NOT NULL)";
                $dbco->exec($createTb);
                
                $sth = $dbco->prepare("
                  INSERT INTO vehicles(capacite)
                  VALUES (:capacite)
                ");
                $sth->bindParam(':capacite', $capacite);
                
                $capacite="2000";
                $sth->execute();
                $capacite="1000";
                $sth->execute();
                $capacite= "1300";
                $sth->execute();
                $capacite="950";



                $createTb = "CREATE TABLE commandes(
                    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    poid VARCHAR(30) NOT NULL,
                    destination VARCHAR(30) NOT NULL),
                    longitude VARCHAR(30) NOT NULL,
                    laptitude VARCHAR(30) NOT NULL)";
                  $dbco->exec($createTb);
                  
                  $sth = $dbco->prepare("
                    INSERT INTO commandes(poid,destination,longitude,laptitude)
                    VALUES (:poid,:destination,:longitude,:laptitude)
                  ");
                  $sth->bindParam(':poid', $capacite);
                  $sth->bindParam(':destination', $destination);
                  $sth->bindParam(':longitude', $longitude);
                  $sth->bindParam(':laptitude', $laptitude);
                  
                  $poid="890";
                  $destination="Boulevard Mohamed V";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();
                  
                  $poid="1100";
                  $destination="Boulevard El Lalou";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();

                  $poid="2000";
                  $destination="Rue Sidi Fatah";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();

                  $poid="1000";
                  $destination="Hay el fath";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();

                  $poid="900";
                  $destination="Avenue Hassan II";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();

                  $poid="5000";
                  $destination="Avenue Al Marsa";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();

                  $poid="3000";
                  $destination="Boulevard ad Doustour";
                  $longitude="";
                  $laptitude="";
                  $sth->execute();
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
?>
  