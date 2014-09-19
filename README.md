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

Les fonctions de calcule de l'aire et du périmètre sont *obligatoire* pour toutes les formes géométriques mais on ne peut pas les définir dans une classe générique car elle sont spécifique à chaque forme.

1. Téléchargez le répertoire  *POO-TP2*, en local sur vos machine, dans votre répertoire de travail habituel (www ou htdocs). 
2. Dans le fichier Forme.php, définissez la classe *abstraite* Forme. 

```
<?php
*abstact* class Forme 
{
  …
  public *abstract* function aire();
  … 
}
```

Comme la classe *Forme* possède des méthodes abstraites, c'est une classe abstraite. Il faut utiliser le mot clé *abstract* pour définir la classe et ses méthodes *abstraites*.

3. Dans le fichier *index.php* essayez d'instancier la classe *Forme*. Que se passe-t-il ?
