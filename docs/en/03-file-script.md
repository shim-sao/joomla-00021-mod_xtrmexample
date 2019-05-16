---
id: 307
permalink: /docs/fr/03-file-script.html
lang: fr-FR
langISOlower: fr
layout: content-only
title: XtrmAddons | Joomla Module Example
comments: true
---

## Le fichier Script

<p>
	Nom du fichier: <code>script.php</code>
</p>

<p class="text-justify">
	Le fichier <code><span class="nc">script.php</span></code> est un fichier commun appelé par Joomla lors de l'installation d'une extension.<br />
	Il permet de gérer et de personnaliser les différents événements qui peuvent se produire durant l'installation, la mise à 
	jour ou encore la désinstallation d'un module, d'un plugin, d'une bibliothèque ou d'un composant.<br />
	Comme événements, nous pouvons citer: installation, désinstallation, mise à jour et "post flight" qui est 
	appelée en fin d'execution quel que soit le mode utilisé.
</p>

### Déclaration d'un fichier pour Joomla

<p class="text-justify">
	Tout d'abord, commençons par la première déclaration.<br />
	Pour s'assurer que le fichier ne sera executé uniquement par l'application Joomla du site, 
	nous devons verifier que la constante `_JEXEC` est bien définie avant toute opération.
</p>

```php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;
```

### Déclaration de la class d'installation

<p class="text-justify">
	Nom de la class: <code><span class="nc">Mod_</span><span class="nc text-italic">[nom du module]</span><span class="nc">InstallerScript</span></code>
</p>

<p class="text-justify">
	Ici le nom du module choisit est <code>XtrmExample</code> mais c'est à vous de définir un nom qui doit
	 être unique et définitif.<br />
</p>

<p class="text-justify">
	Nous allons donc définir la class suivante:<br />
</p>

```php
class Mod_XtrmExampleInstallerScript
{
  // Déclarer ici les méthodes d'événements.
}
```
<p class="text-justify">
	Cette class sera instanciée quelque soit le mode utilisé: installation, mise à jour désinstallation.
</p>

### Déclaration les méthodes d'événements.

<p class="text-justify">
	La méthode <code>install($parent)</code> est la méthode qui va être appelée lors de l'installation du module.
	. <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations
	. ou méthodes publiques.
</p>

```php
public function install($parent)
{
	echo 'Script called by: '.get_class($parent);
}
```

<p class="text-justify">
	La méthode <code>uninstall($parent)</code> est la méthode qui va être appelée lors de la désinstallation du module.
	. <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations
	. ou méthodes publiques.
</p>

```php
public function uninstall($parent)
{
	
}
```

<p class="text-justify">
	La méthode <code>update($parent)</code> est la méthode qui va être appelée lors de la mise à jour du module.
	. <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations
	. ou méthodes publiques.
</p>

```php
public function update($parent)
{
	
}
```

<p class="text-justify">
	La méthode <code>postflight($parent)</code> est une méthode qui va être appelée à la fin de l'éxcution du script
	 quelque soit le mode, installation, désinstallation ou mise à jour du module.
	. <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations
	. ou méthodes publiques.
</p>

```php
public function postflight($type, $parent)
{
	
}
```