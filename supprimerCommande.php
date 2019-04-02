<?PHP
include "../core/commandes.php";
$commandes=new commandes();
echo $_POST["reference"];
if (isset($_POST["reference"])){
	$commandes->supprimerCommande($_POST["reference"]);
	header('Location: afficherCommande.php');
}

?>