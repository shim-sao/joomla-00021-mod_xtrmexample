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
<p>

### Déclaration les méthodes d'événements.

```php
	/**
	 * The full name of the module.
	 *
	 * @var string $extensionName
	 */
	private $extensionName = "00021-mod_xtrmexample";

	/**
	 * Method to install the component.
	 *
	 * @param   object $parent The class that calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
	 *
	 * @return 	void
	 */
	public function install($parent)
	{
		
	}

	/**
	 * Method to uninstall the component.
	 *
	 * @param	object	$parent	is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
	 *
	 * @return void
	 */
	public function uninstall($parent)
	{
		
	}

	/**
	 * Method to update the component.
	 *
	 * @param 	object $parent is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
	 *
	 * @return 	void
	 */
	public function update($parent)
	{
		$this->cleanUpdatesSites();
	}

	/**
	 * Method to run after an install/update/uninstall method.
	 *
	 * @param 	string	$type	is the type of change (install, update or discover_install)
	 * @param 	object	$parent	is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
	 *
	 * @return 	void
	 */
	public function postflight($type, $parent)
	{
		// Do nothing
	}

	/**
	 * Method to clean updates site liste.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
	 *
	 * @return 	void
	 */
	public function cleanUpdatesSites()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);

		$query->select($db->q('update_site_id'))
			->from($db->qn('#__update_sites'))
			->where($db->qn('location') . ' LIKE ' . $db->q('%' . $this->extensionName . '%'))
			->order('update_site_id DESC');

		$id    = $db->setQuery($query)->loadResult();
		$query = $db->getQuery(true);

		$query->delete($db->qn('#__update_sites'))
			->where($db->qn('location') . ' LIKE ' . $db->q('%' . $this->extensionName . '%'))
			->where($db->qn('update_site_id') . ' != ' . $db->q($id));

		$db->setQuery($query)->execute();
	}
}
```