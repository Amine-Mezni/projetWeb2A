<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eduprohub";
    try 
    {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) 
    {
        die("Erreur de connexion: " . $e->getMessage());
    }
    if (isset($_POST['ok'])) 
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date = htmlspecialchars($_POST['date']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = htmlspecialchars($_POST['mdp']);
        try 
        {
            $requete = $bdd->prepare("INSERT INTO inscription (nom, prenom, date, email, mdp) 
                                      VALUES (:nom, :prenom, :date, :email, :mdp)");
            $requete->execute
            (
                array
                (
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "date" => $date,
                    "email" => $email,
                    "mdp" => $mdp
                )
            );
            header("Location: ../frontoffice/connecter.html");
            exit(); 
        } 
        catch (PDOException $e) 
        {
            echo "Erreur lors de l'insertion des données : " . $e->getMessage();
        }
    }
?>
