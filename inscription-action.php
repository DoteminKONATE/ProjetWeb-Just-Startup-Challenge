
<?php
//infos bd
$host= '91.216.107.162';
$dbname = 'justs791325';
$user= 'justs791325';
$pass= 'x0fwknahdq';


//recuperation des données
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$datenaissace = $_POST['datenaissace'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$statusentreprise = $_POST['statusentreprise'];
$adresse = $_POST['adresse'];
$codepostale = $_POST['codepostale'];
$ville = $_POST['ville'];
$VotreMotivation = $_POST['VotreMotivation'];


$nomEntreprise = $_POST['nomEntreprise'];
$tailleEntreprise = $_POST['tailleEntreprise'];
$adresseadministrative = $_POST['adresseadministrative'];
$emailEntreprise = $_POST['emailEntreprise'];
$TelephoneEntreprise = $_POST['TelephoneEntreprise'];
$descriptionEntreprise = $_POST['descriptionEntreprise'];


$curentdate = date('y-m-d');


echo $civilite;





if (empty($_POST['email']) ){

    header('Location: inscription.php?errorp=oui');
    exit();

}else{


    try {
        $conn = new PDO("mysql:host=91.216.107.162;dbname=justs791325", 'justs791325', 'x0fwknahdq');
        // PDO can throw exceptions rather than Fatal errors, so let's change the error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connection successful";

        $stmt = $conn->prepare("INSERT INTO Inscriptions (civilite, nom, prenom, datenaissace, email, contact, statusentreprise, adresse, codepostale, ville, VotreMotivation, nomEntreprise, tailleEntreprise, adresseadministrative, emailEntreprise, TelephoneEntreprise, descriptionEntreprise) VALUES ( :civilite, :nom, :prenom, :datenaissace, :email, :contact, :statusentreprise, :adresse, :codepostale, :ville, :VotreMotivation, :nomEntreprise, :tailleEntreprise, :adresseadministrative, :emailEntreprise, :TelephoneEntreprise, :descriptionEntreprise)");
        $stmt->bindParam(':civilite', $civilite);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':datenaissace', $datenaissace);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':statusentreprise', $statusentreprise);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':codepostale', $codepostale);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':VotreMotivation', $VotreMotivation);
        $stmt->bindParam(':nomEntreprise', $nomEntreprise);
        $stmt->bindParam(':tailleEntreprise', $tailleEntreprise);
        $stmt->bindParam(':adresseadministrative', $adresseadministrative);
        $stmt->bindParam(':emailEntreprise', $emailEntreprise);
        $stmt->bindParam(':TelephoneEntreprise', $TelephoneEntreprise);
        $stmt->bindParam(':descriptionEntreprise', $descriptionEntreprise);


        $stmt->execute();

        header('Location: inscription.php?errorp=non');
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;

}
?>
