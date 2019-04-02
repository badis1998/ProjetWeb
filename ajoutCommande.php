<?PHP
include '../core/commandes.php';

echo $_POST['reference'];
if (isset($_POST['reference']) and isset($_POST['nom']) and isset($_POST['montant']) and isset($_POST['type']) and isset($_POST['description'])){

$commande=new commande($_POST['reference'],$_POST['nom'],$_POST['montant'],$_POST['type'],$_POST['date'],$_POST['description']);


$commandes=new commandes();
$commandes->ajouterCommande($commande);
header('Location: afficherCommande.php');

}else{
	echo "vérifier les champs";
}
//*/

?>