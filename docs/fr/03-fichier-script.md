---
id: 307
permalink: /docs/fr/03-fichier-script.html
lang: fr-FR
layout: content-only
title: XtrmAddons | Joomla Module Example
comments: true
---

## Le fichier Script

<p>
	Nom du fichier: <code>script.php</code>
</p>

<p>
	Le fichier <code>script.php</code> est un fichier commun appelé par Joomla lors de l'installation d'une extension.<br />
	Il permet de gérer et de personnaliser les différents événements qui peuvent se produire durant l'installation, la mise à 
	jour ou encore la désinstallation d'un module, d'un plugin, d'une bibliothèque ou d'un composant.<br />
	Comme événements, nous pouvons citer: installation, désinstallation, mise à jour et "post flight" qui est 
	appelée en fin d'execution quel que soit le mode utilisé.
</p>

### Déclaration d'un fichier pour Joomla

<p>
	Tout d'abord, commençons par la première déclaration.<br />
	Pour s'assurer que le fichier ne sera executé uniquement par l'application Joomla du site, 
	nous devons verifier que la constante `_JEXEC` est bien définie avant toute opération.
</p>

```php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;
```

### Déclaration de la class d'installation

<p>
	Nom de la class: Mod_[nom du module]InstallerScript
</p>
<p>
	Ici le nom du module choisit est <code>XtrmExample</code> mais c'est à vous de définir un nom qui doit 
	être unique et définitif.<br />
</p>
<p>
	Nous allons donc définir la class suivante:<br />
</p>

```php
class Mod_XtrmExampleInstallerScript
{
  // Déclarer ici les méthodes d'événements.
}
```
<p>
	Cette class sera instanciée quelque soit le mode utilisé: installation, mise à jour désinstallation.
</p>

### Déclaration les méthodes d'événements.

```php
public function install($parent)
{
	
}
```

```php
public function uninstall($parent)
{
	
}
```

```php
public function update($parent)
{
	
}
```

```php
public function postflight($type, $parent)
{
	// Do nothing
}
```