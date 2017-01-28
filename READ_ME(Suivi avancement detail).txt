//////////////////////////////////////////////////////////////////////////////////////////

FLORIAN

fichier nouveau_billet2.php

les differentes infos pour un $_FILE dÈnit par php:("monfichier" est le name envoyÈ par le formulaire)
$_FILES['monfichier']['name']
	

Contient le nom du fichier envoyÈ par le visiteur.

$_FILES['monfichier']['type']
	

Indique le type du fichier envoyÈ. Si c'est une image gif par exemple, le type seraimage/gif.

$_FILES['monfichier']['size']
	

Indique la taille du fichier envoyÈ. Attention : cette taille est en octets. Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
Attention : la taille de l'envoi est limitÈe par PHP. Par dÈfaut, impossible d'uploader des fichiers de plus de 8 Mo.

$_FILES['monfichier']['tmp_name']
	

Juste aprËs l'envoi, le fichier est placÈ dans un rÈpertoire temporaire sur le
serveur en attendant que votre script
PHP dÈcide si oui ou non il accepte de
le stocker pour de bon. Cette variable
contient l'emplacement temporaire du
fichier (c'est PHP qui gËre Áa).

$_FILES['monfichier']['error']
	

Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectuÈ ou s'il
y a eu un problËme et si oui, lequel. La
variable vaut 0 s'il n'y a pas eu d'erreur.

DiffÈrent types d'erreurs:
UPLOAD_ERR_NO_FILE : fichier manquant.
UPLOAD_ERR_INI_SIZE : fichier dÈpassant la taille maximale autorisÈe par PHP.
UPLOAD_ERR_FORM_SIZE : fichier dÈpassant la taille maximale autorisÈe par le formulaire.
UPLOAD_ERR_PARTIAL : fichier transfÈrÈ partiellement.

On peut faire des vÈrifications via des instructions conditionnelles; pour le fichier ci-joint(nouveau_billet2.php)

move_uploaded_file() est une fonction qui dÈplace le fichier vers un emplacement donnÈ!



/////////////////////////////////////////////////////////////////////////////////////////

AINA


Inscription/Connexion Hash

Ca y est la fonction connexion est finie, le stockage du MDP dans la BDD est sous forme de hash de 60 caractères. Le niveau de securité est maintenant standard.

L’inscription vérifie maintenant si le pseudo existe deja 
Faut-il faire pareil pour l’adresse mail ? 