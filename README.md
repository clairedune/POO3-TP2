POO3-TP2
========

Programmation orientée objet en PHP 5 MMi2 - S3 

#Problème


On veut faire un programme de dessins géométriques. Il doit permettre de dessiner des cercles, des carrés, des rectangles et de calculer leur aire et leur périmètre.


#Enoncé du TP


Dans ce TP, nous allons créer modifier la classe Rectangle et créer la classe mère Forme et les classes filles Cercle, Carre et Rectangle en respectant le diagramme de classe proposé au TD2. 


## Définition de la classe abstraite *Forme* 

La classe *Forme* est la classe mère pour toutes les formes géométriques. C'est une classe *abstraite*. Elle contient 
- les attributs : 
  - l'abscisse x ;
  - l'ordonnée y. 
- et les méthodes :  
  - une fonction d'affichage des paramètres ;
  - une fonction *abstraite* qui calcule l'aire ;
  - une fonction *abstraite* qui calcule le périmètre ;
  - deux accesseurs getX() et getY().

1. Téléchargez le répertoire  *POO-TP2*, en local sur vos machine, dans votre répertoire de travail habituel (www ou htdocs). 
2. Créez un fichier Forme.php dans le sous-répertoire source.
4. Dans le fichier Forme.php, définissez la classe Forme. 
