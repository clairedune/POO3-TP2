 <?php 	
 	require_once("source/Carre.php"); 
 	require_once("source/Cercle.php"); 
	require_once("source/Display.php");
	require_once("source/Rectangle.php");
 
    if (!isset($_POST['forme']))
    {
    	$forme="rectangle";
    }
    else
    {
    	$forme   = htmlentities($_POST['forme']);
    	$X       = htmlentities($_POST['x']);
    	$Y       = htmlentities($_POST['y']);
    	$R       = htmlentities($_POST['r']);
    	$G       = htmlentities($_POST['g']);
    	$B       = htmlentities($_POST['b']);
    	$largeur = htmlentities($_POST['largeur']);
    	$hauteur = htmlentities($_POST['hauteur']);
    	$rayon   = htmlentities($_POST['rayon']);	
    	$cote    = htmlentities($_POST['cote']);
    	$valid   = htmlentities($_POST['valid']);
  	
    }

?>

<html>
  	<H1>Geometrie</H1>
  	
  	
<div style="float:left;"> 
<H2>Parametres</H2>

 <form method="post" action="dessine.php">
 <H3> Rectangle <input type="radio" name="forme" value="rectangle" <?php if($forme=="rectangle"){echo checked;}?>></H3>
   <table>
   	<tr>
    	<td>	
    		Largeur : 
    	</td>
    	<td>
    		<input type="text" name="largeur"  
    		value="<?php if(isset($largeur)) { echo $largeur;} else echo 100;?>" /> 
     	</td>
    </tr>
    <tr> 	
    	<td>
    		Hauteur :
    	</td>
		<td> 
    	 	<input type="text" name="hauteur" 
    	 	value="<?php if(isset($hauteur)) { echo $hauteur;}else echo 50;?>" />
    	</td> 
    </tr>
   </table> 

<H3> Cercle <input type="radio" name="forme" value="cercle" <?php if($forme=="cercle"){echo checked;}?>></H3> 
 
   <table>
   	<tr>
    	<td>	
    		Rayon : 
    	</td>
    	<td>
    		<input type="text" name="rayon"  
    		value="<?php if(isset($rayon)) { echo $rayon;}else echo 60;?>" /> 
     	</td>
    </tr>
   </table> 
 
<H3> Carre <input type="radio" name="forme" value="carre" <?php if($forme=="carre"){echo checked;}?>></H3> 
 
   <table>
   	<tr>
    	<td>	
    		cote : 
    	</td>
    	<td>
    		<input type="text" name="cote"  
    		value="<?php if(isset($cote)) { echo $cote;}else echo 60;?>" /> 
     	</td>
    </tr>
  </table> 
  
  <H3>Avec les parametres </H3>
  
  <table>
    <tr>
    	<td>
    		X : 
    	</td>
    	<td>
    		<input type="text" name="x" 
    		value="<?php if(isset($X)) { echo $X;}else echo 150;?>" />  
    	</td>
    </tr>
    <tr>
    	<td>    
    		Y : 
    	</td>
    	<td>
    		<input type="text" name="y" 
    		value="<?php if(isset($Y)) { echo $Y;}else echo 150;?>" />  
    	</td>
    </tr>
    <tr>
    	<td>
    		Rouge : 
    	</td>
    	<td>
    		<input type="text" name="r" 
    		value="<?php if(isset($R)) { echo $R;}else echo 250;?>" />   
    	</td>
    </tr>
    <tr>
    	<td>
    		Vert : 
    	</td>
    	<td>
    		<input type="text" name="g" 
    		value="<?php if(isset($G)) { echo $G;}else echo 250;?>" /> 
    	</td>
    </tr>
    <tr>
    	<td>
    		Bleu : 
    	</td>
    	<td>
    		<input type="text" name="b" 
    		value="<?php if(isset($B)) { echo $B;}else echo 150;?>" />
    	</td>
     </tr>

</table>
   
<input type="submit" value="Valider" name="valid"/>

</form>

</div>
 	
<div style="float:left;with=800px" id="image">
<?php
	$dispLarg = 800;
  	$dispHaut = 600;  	
  	$display = new Display($dispLarg, $dispHaut);
  	$display->couleurFond(200,200,220);
  	
  	if(isset($valid))
	{   
		if($forme=='rectangle')
		{
			echo "On dessine un rectangle<br>";
	    	$rect = new Rectangle($X, $Y, $largeur, $hauteur);
  			$display->dessineRectangle($rect,$R, $G, $B);
		}
		elseif($forme=='cercle')
		{
			echo "On dessine un cercle<br>";
			$cercle = new Cercle($X, $Y, $rayon);
			$display->dessineCercle($cercle,$R, $G, $B);

		}
		elseif($forme=='carre')
		{
			echo "On dessine un carre<br>";				
			$carre = new Carre($X, $Y, $cote);
			$display->dessineCarre($carre,$R, $G, $B);
		}
	}
	
	$display->enregistre();
    $display->afficheImage();
	
?>
</div>
<div style="float:left;" id="image">
<?php
	  	
	if(isset($valid))
	{   
  		if($forme=='rectangle')
		{
			echo $rect;	
		}
		elseif($forme=='cercle')
		{
			echo $cercle;
		}
		elseif($forme=='carre')
		{
			echo $carre;
		}
	}
?>
</div>
</html>	

