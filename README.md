POO3-TP2
========

Programmation orientée objet en PHP 5 MMi2 - S3 

#Problème


On veut faire un programme de dessins géométriques. Il doit permettre de dessiner des cercles, des carrés, des rectangles et de calculer leur aire et leur périmètre.


#Enoncé du TP


Dans ce TP, nous allons créer modifier la classe Rectangle et créer la classe mère Forme et les classes filles Cercle, Carre et Rectangle en respectant le diagramme de classe proposé au TD2. 


## 1.Définition de la classe abstraite **Forme** 

La classe **Forme** est la classe mère pour toutes les formes géométriques. C'est une classe **abstraite**. Elle contient 
- les attributs : 
  - l'abscisse x ;
  - l'ordonnée y. 
- et les méthodes :  
  - une fonction d'affichage des paramètres ;
  - une fonction **abstraite** qui calcule l'aire ;
  - une fonction **abstraite** qui calcule le périmètre ;
  - deux accesseurs getX() et getY().

Les fonctions de calcule de l'aire et du périmètre sont **obligatoires** pour toutes les formes géométriques mais on ne peut pas les définir dans une classe générique car elle sont spécifique à chaque forme.

1. Téléchargez le répertoire  **POO-TP2**, en local sur vos machine, dans votre répertoire de travail habituel (www ou htdocs). *Attention ! Donnez bien les droits en écriture à tous sur le répertoire, sinon on ne pourra pas afficher les images*.
2. Dans le fichier Forme.php, définissez la classe **abstraite** **Forme**. 

```
<?php
abstact class Forme 
{
  …
  public abstract function aire();
  … 
}
```

Comme la classe **Forme** possède des méthodes abstraites, c'est une classe abstraite. Il faut utiliser le mot clé **abstract** pour définir la classe et ses méthodes **abstraites**.

3. Dans le fichier **index.php** essayez d'instancier la classe **Forme**. Que se passe-t-il ?


## 2.Définition de la classe fille **Rectangle** 

Le fichier **Rectangle.php**, que vous trouverez dans le répertoire **source**, est une correction du TP1 dans. 

1. Dans le fichier **Rectangle.php**, vous allez modifier la classe Rectangle pour la faire hériter de la classe **Forme**. Vous utiliserez le mot clé **extends**. N'oubliez pas d'ajouter un lien vers la classe Forme en utilisant la fonction php require_once.
2. Créez un rectangle dans le fichier **index.php**.
3. Testez ses méthodes dans le fichier **index.php**.
 
```
<?php

class Rectangle extends Forme
{
  … 
}
```

##3. Définition de la classe fille Cercle

1. En vous aidant du code de la classe Rectangle, créez la classe fille *Cercle* dans un fichier *Cercle.php*, dans le sous-répertoire source.
2. Instanciez cette classe dans le fichier *index.php* et testez ses méthodes.


##4. Définition de la classe fille  Carre

La classe fille **Carre** dérive de la classe **Rectangle**. La classe *Rectangle* est donc la classe fille de **Forme** et la classe mère de **Carre**.

1. Dans le fichier **Carre.php**, dans le répertoire **source**, définissez la classe fille **Carre**. N'oubliez pas de faire un lien vers sa classe mère Rectangle en utilisant la fonction php require_once.

2. Dans le fichier **index.php**, instancier cette classe et testez ses méthodes.






