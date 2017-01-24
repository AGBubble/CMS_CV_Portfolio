<?php
$pseudo=htmlspecialchars($_POST['pseudo']);
$mdp=htmlspecialchars($_POST['mdp']);
$options = ['cost' => 10,];
$errors = array();

if(!empty($pseudo) && !empty($mdp))
	{//On vérifie que les deux champs sont complets
    	try 
		{
			$bdd=new PDO('mysql:host=localhost;dbname=monsite;charset=utf8','root','root');//conexion à la base
    	} 
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
    //prepare la commande
		$req=$bdd->prepare('SELECT * FROM membres WHERE pseudo=?');

    	$req->execute([$pseudo]);
		
		$res = $req->fetch(PDO::FETCH_ASSOC);
		
		if($res)
		{
			$hash = $res['mot_de_passe'];
		
			if (password_verify($mdp, $hash))
			{
				header('Location : index.php');
			}
			else
			{
				echo "Erreur d'identification";
			}
		}
  }
  
else
{
	echo "Au moins un des deux champs est vide";
}
if ($errors)
  {
    foreach($errors as $num_errors)
    {
      echo $num_errors . '<br />';
    }
  }

?>