<?php

// permet de voir si une cession membre a été créée
function internauteEstConnecte(){

	if(!isset($_SESSION["membre"])){
		return false;
	}else{
		return true;
	}

}



// permet de savoir si lutilisateur connecté
// est administrateur du site
function internauteEstConnecteEtEstAdmin(){
		
	if(internauteEstConnecte() && $_SESSION["membre"]["status"] == 1){
		return true;
	}else{
		return false;
	}

}

?>