<?php

/*
 *
 * Classe d'affichage de formes géométriques
 *
 */

require_once("source/Rectangle.php");
require_once("source/Cercle.php");  
require_once("source/Carre.php");


class Display
{
	private $_largeur;
	private $_hauteur;
	private $_filename = "tmp.png";
	private $_rouge    = 255;
	private $_vert     = 255;
	private $_bleu     = 255;	
	public $im;
    
    // constructeur magique php5
    public function __construct($w,$h)
    {
    	$this->_largeur  = $w;
    	$this->_hauteur  = $h;
    	$this->im        = imagecreatetruecolor($this->_largeur/2, $this->_hauteur/2);
		$this->efface();
    }
    	
    // modifie la couleur de l'arriere plan	
    public function couleurFond ($r,$g,$b)
    {
 	 	$this->_rouge = $r ;
 	    $this->_vert  = $g ;
 	    $this->_bleu  = $b;
 	    $this->efface();
 	}
    	    	
     
    // methodes publiques
    public function enregistre()
    {
        imagepng($this->im, $this->_filename);  
    }
    	
    // permet d'enregistrer l'image sous un nouveau nom
    public function enregistreSous($filename)
    {
    	$this->_filename=$filename;
        imagepng($this->im, $this->_filename);  
    }
    
    // appel des balises html pour afficher une image
    public function afficheImage()
    {
    		echo "<br><img src=\"".$this->filename."\"\>";
	
    }
    	
    // remet l'image entierement à la couleur de départ du fond
    public function efface()
	{
    	$color = imagecolorallocate($this->im, $this->_rouge, $this->_vert, $this->_bleu);
		imagefilledrectangle($this->im, 0, 0, $this->_largeur, $this->_hauteur, $color);
    }
    
    // dessine un rectangle
    public function dessineRectangle($rect, $rouge, $vert, $bleu)
    {
    	    $color = imagecolorallocate($this->im, $rouge, $vert, $bleu);
			$x1 = $rect->getX()-$rect->getLargeur()/2;
			$y1 = $rect->getY()-$rect->getHauteur()/2;
		  	$x2 = $rect->getX()+$rect->getLargeur()/2;
			$y2 = $rect->getY()+$rect->getHauteur()/2;
			imagefilledrectangle($this->im, $x1, $y1, $x2, $y2, $color);	  
	
    }	
      
    // dessin
    public function dessineCercle($cercle,$rouge,$vert,$bleu)
    {
    	    $color = imagecolorallocate($this->im, $rouge, $vert, $bleu);
            imagefilledellipse ($this->im , 
                                $cercle->getX() ,
                                $cercle->getY() , 
                                $cercle->getRayon()*2 , 
                                $cercle->getRayon()*2 , 
                                $color );
    }  
      
    public function dessineCarre($carre, $rouge, $vert, $bleu)
    {
    	  $this->dessineRectangle($carre, $rouge, $vert, $bleu)  ;	  
    }	
      
         
        // methodes magiques
    	public function __destruct(){ 
    		imagedestroy($this->im);       
    	}
    	
    	public function __toString(){
		return "<H3>Attributs de l'image</H3>".
    	   	   "Largeur : ".$this->largeur.
    	   	   "<br>Hauteur : ".$this->hauteur.
   		       "<br>fichier :".$this->filename.
    	       "<br>fond rouge :".$this->rouge.
    		   "<br>vert".$this->vert.
    	  	   "<br>bleu".$this->bleu;
    	}
        
	
	
}