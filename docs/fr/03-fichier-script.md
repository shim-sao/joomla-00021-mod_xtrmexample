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
  Nom du fichier: <a href="https://github.com/shim-sao/joomla-00021-mod_xtrmexample/blob/master/src/script.php" target="_blank"><code><span class="nc">script.php</span></code></a>
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
  Nom de la class: <code><span class="nc">Mod_</span><span class="nc font-italic">[nom du module]</span><span class="nc">InstallerScript</span></code>
</p>

<p class="text-justify">

  Ici le <span class="nc font-italic">nom du module</span> choisit est <code>XtrmExample</code> (sans les crochets bien sûr) mais c'est à vous de définir un nom qui doit être unique et définitif.<br />
</p>

<p class="text-justify">
  Nous allons donc définir la class PHP suivante:<br />
</p>

```php
/**
 * Script file of XtrmAddons component.
 *
 * @category    example
 * @package     Joomla
 * @subpackage  mod_xtrmexample
 * @author      example <example@example.com>
 * @copyright   Copyright 2019-2019 example.com. All rights reserved.
 * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @version     4.0.01.03.1391229
 * @link        https://www.example.com/
 *
 * @access      public
 * @since       4.0.00.01.190425
 */
class Mod_XtrmExampleInstallerScript
{
  // Déclarer ici les méthodes d'événements.
}
```
<p class="text-justify">
  Cette class sera instanciée quelque soit le mode utilisé: installation, mise à jour ou désinstallation.
</p>

### Déclaration des méthodes d'événements.

#### La méthode <span class="text-italic">Install</span>

<p class="text-justify">
  La méthode <code>install($parent)</code> est la méthode qui va être appelée lors de l'installation du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method to install the component.
 *
 * @param   Joomla\CMS\Installer\Adapter\ModuleAdapter $parent is the class calling this method.
 *
 * @access  public
 * @since   4.0.00.01.190425
 * @version 4.0.01.03.1391229
 *
 * @return  void
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

#### La méthode <span class="text-italic">Uninstall</span>

<p class="text-justify">
  La méthode <code>uninstall($parent)</code> est la méthode qui va être appelée lors de la désinstallation du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method to uninstall the component.
 *
 * @param   Joomla\CMS\Installer\Adapter\ModuleAdapter $parent is the class calling this method.
 *
 * @access  public
 * @since   4.0.00.01.190425
 * @version 4.0.01.03.1391229
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

#### La méthode <span class="text-italic">Update</span>

<p class="text-justify">
  La méthode <code>update($parent)</code> est la méthode qui va être appelée lors de la mise à jour du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method to update the component.
 *
 * @param   Joomla\CMS\Installer\Adapter\ModuleAdapter $parent is the class calling this method.
 *
 * @access  public
 * @since   4.0.00.01.190425
 * @version 4.0.01.03.1391229
 *
 * @return  void
 */
public function update($parent)
{
  $this->cleanUpdatesSites();
  echo '<p class="alert alert-info">'
    . 'Method: update<br />'
    . 'Parent: ' . get_class($parent)
    . '</p><p class="alert alert-success">'
    . JText::_('MOD_XTRMEXAMPLE_UPDATE_SUCCESS')
    . '</p>';
}
```

#### La méthode <span class="text-italic">postflight</span>

<p class="text-justify">
  La méthode <code>postflight($parent)</code> est une méthode qui va être appelée à la fin de l'éxécution du script quelque soit le mode, installation, désinstallation ou mise à jour du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method run after an install/update/uninstall method.
 *
 * @param   string $type 	is the type of change (install, update or discover_install)
 * @param   Joomla\CMS\Installer\Adapter\ModuleAdapter $parent is the class calling this method
 *
 * @access  public
 * @since   4.0.00.01.190425
 * @version 4.0.01.03.1391229
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

  $this->copyright($parent);
}
```

#### La méthode <span class="text-italic">preflight</span>

<p class="text-justify">
  La méthode <code>preflight($parent)</code> est une méthode qui va être appelée au début de l'éxécution du script quelque soit le mode, installation, désinstallation ou mise à jour du module, <code>$parent</code> étant la class appelante du script ce qui permet d'accèder à ses informations ou méthodes publiques.
</p>

```php
/**
 * Method run before an install/update/uninstall method.
 *
 * @param   string $type   is the type of change (install, update or discover_install)
 * @param   Joomla\CMS\Installer\Adapter\ModuleAdapter $parent is the class calling this method
 *
 * @access  public
 * @since   4.0.01.03.136
 * @version 4.0.01.03.1391229
 *
 * @return  void
 */
public function preflight($type, $parent)
{
  echo '<p class="alert alert-warning">'
    . 'Method: preflight<br />'
    . 'Name: ' . $parent->getName()
    . '<br />'
    . 'Element: ' . $parent->getElement()
    . '<br />'
    . 'Version: ' . (string) $parent->getManifest()->version
    . '<br /><br />'
    . 'Type: ' . $type
    . '<br />'
    . 'Parent: ' . get_class($parent)
    . '</p>';
}
```

### Déroulement des événements en image.

<figure>
  <figcaption class="text-justify">
    Voici une capture d'écran pour notre example du déroulement de l'installation du module.<br />
    Le module étant déjà installé, les méthodes utilisées correspondent au mode de mise à jour, <span class="font-italic">update</span>, cependant le même processus reste valable avec les autres modes d'événements que sont <span class="font-italic">install, uninstall</span>.
  </figcaption>
  <img src="/assets/images/module-xtrmexample-install.jpg" alt="Module XtrmExample Install" title="Module XtrmExample Install" />
</figure>
