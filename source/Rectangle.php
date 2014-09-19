<?php
/*
* Classe Rectangle
* brief:  permet de construire un rectangle geometrique
*        un rectangle est défini par sa hauteur et sa largeur
* author :  Claire Dune
* date :  18/09/2014
*/

require_once("source/Forme.php");

class Rectangle
{
	// attributs prives
	private $_largeur;	
	private $_hauteur;	
	
	/* 
	* Constructeur de la classe Rectangle
	* on force la largeur et la hauteur a etre des
	* valeurs > 0.
	*
	* param : nvlarg, la largeur du rectangle
	*         nvhaut, la hauteur du rectangle
	*/
	public function Rectangle($nvlarg , $nvhaut)
	{
		$this->_largeur = abs($nvlarg);
		$this->_hauteur = abs($nvhaut);
	}
	
	/*
	* Cette méthode affiche 
	* les dimensions du rectangle, 
	* son aire et son perimetre
    */	
	public function affichage()
	{
		
		echo "<p>Rectangle infos :". 
		     "<table><tr>".
			 "<tr><td>Largeur </td><td> ".$this->_largeur."</td></tr>".
			 "<tr><td>Hauteur </td><td> ".$this->_hauteur."</td></tr>".
			 "<tr><td>Aire </td><td> ".$this->aire()."</td></tr>".
			 "<tr><td>Perimetre </td><td> ".$this->perimetre()."</td></tr>".
			 "</table></p>";
	}
	
	/*
	* Accesseurs : permet de lire les valeurs des attributs
	*/
	public function getLargeur()
	{
	  return $this->_largeur;
	}
	public function getHauteur()
	{
	  return $this->_hauteur;
	}
	
	
    /*
	* Modificateur : permet de modifier les valeurs des attributs
	*/
    public function setLargeur($a)
	{
	   $this->_largeur = abs($a);
	}
	public function setHauteur($a)
	{
	   $this->_hauteur = abs($a);
	}

	/*
	* Cette méthode cacule l'aire du rectangle 
	* @return $aire, l'aire du rectangle
	*/	    
	public function aire()
    {
    	$aire = $this->_largeur * $this->_hauteur; 
    	return $aire;
    }
    
    /*
	* Cette méthode cacule le périmètre du rectangle 
	* @return $perimetre, le perimetre du rectangle
	*/
    public function perimetre()
    {
    	$perimetre = 2*($this->_largeur + $this->_hauteur); 
    	return $perimetre;
    }

}
