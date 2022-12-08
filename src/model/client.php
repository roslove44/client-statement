<?php
require_once __DIR__.('/../lib/database.php');

class Client {
    public int $id;
    public string $sigle;
}

class ClientAction {
    public static  $invoices_prerequisites;
    public static string $add_invoices_statement;

    public function get_clients():array {
        self::$add_invoices_statement = "";
        $conn = DatabaseConnexion::getConnexion();
        $statement = ("SELECT * FROM `clients`");
        $result = $conn->query($statement);
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $client = new Client; 
                $client->id = $row['id'];
                $client->sigle = $row['sigle'];

                $clients[] = $client;
            }
            
            return $clients;
        } else {
            self::$add_invoices_statement = "disabled";
            self::$invoices_prerequisites = "Veuillez ajouter vos clients dans la base avant l'enregistrement de Facture.";
            return $clients = array();
        }
    }

    public function create_client() {
        if(isset($_POST['add_sigle'])) {
            try {
                //code...
                $conn = DatabaseConnexion::getConnexion();
                $sigle = Security::text_checker($_POST['add_sigle']);

                $statement = ("INSERT INTO `clients` (sigle) VALUES ('$sigle')");
                if ($conn->query($statement) === TRUE) {
                    DatabaseConnexion::$database = null;
                    echo "<div class ='alert alert-success'>Client Ajouté avec succès. <br>
                    <button class='btn btn-warning' onclick='window.location.replace(\"profile.php\")'>Revenir à la page</button>
                </div>";
                    die();
                }
            } catch (\Throwable $th) {
                //throw $th;
                echo"<div class ='alert alert-danger'>Echec! Nom de Client déjà enregistré. <br>
                    <button class='btn btn-warning' onclick='window.location.replace(\"profile.php\")'>Revenir à la page</button>
                </div>";
                die();
            }
        }
    }

    public function delete_client() {
        if(isset($_POST['delete_sigle'])) {
                $conn = DatabaseConnexion::getConnexion();
                $sigle = $_POST['delete_sigle'];
                    // Check if sigle exist
                    try {
                    //code...
                        $statement = ("SELECT `sigle` FROM `clients` WHERE `sigle`='$sigle'");
                        $result = $conn->query($statement);
                        if ($result->num_rows > 0) {
                            try {
                                //Delete if no transactions with client...
                                $statement = ("DELETE FROM `clients` WHERE `sigle`='$sigle'");
                                if($conn->query($statement) === TRUE) {
                                    echo "<div class ='alert alert-success'>Supprèsion EffectuéE avec succès. <br>
                                        <button class='btn btn-warning' onclick='window.location.replace(\"profile.php\")'>Revenir à la page</button>
                                    </div>";
                                    $conn->close();
                                    die();
                                }
                            } catch (\Throwable $th) {
                                echo "<div class ='alert alert-info'>Des Transactions sont déjà rattachées au compte client. <br> 
                                        Impossible de Supprimer.
                                    <button class='btn btn-warning' onclick='window.location.replace(\"profile.php\")'>Revenir à la page</button>
                                </div>";
                                $conn->close();
                                die();
                            }
                        } else {
                            echo "<div class ='alert alert-warning'>Aucun client ne correspond à ce SIGLE. <br>
                                    <button class='btn btn-warning' onclick='window.location.replace(\"profile.php\")'>Revenir à la page</button>
                                </div>";
                            $conn->close();
                            die();
                        }
                    } catch (\Throwable $th) {
                            echo "<div class ='alert alert-info'>Service Indisponible<br>
                                    <button class='btn btn-warning' onclick='window.location.replace(\"profile.php\")'>Revenir à la page</button>
                                </div>";
                            $conn->close();
                            die();
                    }
        }
    }

    public function rend_clients(array $clients ) {
        
        if(!empty($clients) && !is_null($clients)) {
            echo
            "<option value=''>---Sélectionner le Client</option>";
            foreach ($clients as $client) {
                echo "<option value='$client->sigle'>$client->sigle</option>";
            }
        }elseif (empty($clients)) {
            echo "<option value='' disabled selected>Aucun Client Disponible</option>";
        }
    }
}

class Invoice {
    public string $client; 
    public string $ref; 
    public int $mht;
    public int $tva;
    public int $aib_maj;
    public int $aib_retained;
    public string $file_src;
    public int $other_fee;
}


class InvoiceAction {
    public function add_invoices()
    {
        if (count($_POST) === 8) {
            $client = Security::text_checker($_POST['client']);
            $ref = strtoupper(Security::text_checker($_POST['ref']));
            $mht = Security::text_checker($_POST['mht']);
            $tva = Security::text_checker($_POST['tva']);
            $aib_maj = Security::text_checker($_POST['aib_maj']);
            $aib_retained = Security::text_checker($_POST['aib_retained']);
            $other_fee = Security::text_checker($_POST['other_fee']);
        }
    }
}
