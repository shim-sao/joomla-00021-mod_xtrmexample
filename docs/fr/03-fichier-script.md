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
	Nom du fichier: <code><span class="nc">script.php</span></code>
</p>

<p class="text-justify">
	Le fichier <code><span class="nc">script.php</span></code> est un fichier commun appelé par Joomla lors de l'installation d'une extension.<br />
	Il permet de gérer et de personnaliser les différents événements qui peuvent se produire durant l'installation, la mise à jour ou encore la désinstallation d'un module, d'un plugin, d'une bibliothèque ou d'un composant.<br />
	Comme événements, nous pouvons citer: installation, désinstallation, mise à jour et "post flight" qui est appelée en fin d'execution quel que soit le mode utilisé.
</p>

### Déclaration d'un fichier pour Joomla

<p class="text-justify">
	Tout d'abord, commençons par la première déclaration.<br />
	Pour s'assurer que le fichier ne sera executé uniquement par l'application Joomla du site, nous devons verifier que la constante `_JEXEC` est bien définie avant toute opération.
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
	Ici le nom du module choisit est <code>XtrmExample</code> mais c'est à vous de définir un nom qui doit être unique et définitif.<br />
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

### Déclaration des méthodes d'événements.

#### Install

<p class="text-justify">
	La méthode <code>install($parent)</code> est la méthode qui va être appelée lors de l'installation du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method to install the component.
 *
 * @param   object $parent The class that calling this method.
 *
 * @access	public
 * @since 	4.0.00.01.190425
 * @version 4.0.01.03.1362219
 *
 * @return 	void
 */
public function install($parent)
{
	echo '<p class="alert alert-info">'
		. 'Method: Install<br />'
		. 'Parent: ' . get_class($parent)
		. '</p><p class="alert alert-success">'
		. JText::_('MOD_XTRMEXAMPLE_INSTALL_SUCCESS')
		. '</p>';
}
```

#### Uninstall

<p class="text-justify">
	La méthode <code>uninstall($parent)</code> est la méthode qui va être appelée lors de la désinstallation du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method to uninstall the component.
 *
 * @param	object	$parent	is the class calling this method.
 *
 * @access	public
 * @since 	4.0.00.01.190425
 * @version 4.0.01.03.1362219
 *
 * @return  void
 */
public function uninstall($parent)
{
	echo '<p class="alert alert-info">'
		. 'Method: uninstall<br />'
		. 'Parent: ' . get_class($parent)
		. '</p><p class="alert alert-success">'
		. JText::_('MOD_XTRMEXAMPLE_UNINSTALL_SUCCESS')
		. '</p>';
}
```

#### Update

<p class="text-justify">
	La méthode <code>update($parent)</code> est la méthode qui va être appelée lors de la mise à jour du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method to update the component.
 *
 * @param 	object $parent is the class calling this method.
 *
 * @access	public
 * @since 	4.0.00.01.190425
 * @version 4.0.01.03.1362219
 *
 * @return 	void
 */
public function update($parent)
{
	$this->cleanUpdatesSites();
	echo '<p class="alert alert-info">'
		. 'Method: update<br />'
		. 'Parent: ' . get_class($parent)
		. '</p><p class="alert alert-success">'
		. JText::_('MOD_XTRMEXAMPLE_UPDATE_SUCCESS', $parent->get('manifest')->version)
		. '</p>';
}
```

#### postflight

<p class="text-justify">
	La méthode <code>postflight($parent)</code> est une méthode qui va être appelée à la fin de l'éxécution du script quelque soit le mode, installation, désinstallation ou mise à jour du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method run after an install/update/uninstall method.
 *
 * @param 	string	$type	is the type of change (install, update or discover_install)
 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter	$parent	is the class calling this method
 *
 * @access	public
 * @since 	4.0.00.01.190425
 * @version 4.0.01.03.1362219
 *
 * @return 	void
 */
public function postflight($type, $parent)
{
	echo '<p class="alert alert-warning">'
		. 'Method: postflight<br />'
		. 'Type: ' . $type
		. '<br />'
		. 'Parent: ' . get_class($parent)
		. '</p>';
}
```

#### preflight

<p class="text-justify">
	La méthode <code>postflight($parent)</code> est une méthode qui va être appelée au début de l'éxécution du script quelque soit le mode, installation, désinstallation ou mise à jour du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method run before an install/update/uninstall method.
 *
 * @param 	string	$type	is the type of change (install, update or discover_install)
 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter	$parent	is the class calling this method
 *
 * @access	public
 * @since 	4.0.01.03.136
 * @version 4.0.01.03.1362219
 *
 * @return 	void
 */
public function preflight($type, $parent)
{
	echo '<p class="alert alert-warning">'
		. 'Method: preflight<br />'
		. 'Type: ' . $type
		. '<br />'
		. 'Parent: ' . get_class($parent)
		. '</p>';
}
```

