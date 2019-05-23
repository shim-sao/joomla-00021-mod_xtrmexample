---
id: 312
permalink: /docs/en/03-file-script.html
lang: en-GB
langISOlower: en
layout: content-only
title: XtrmAddons | Joomla Module Example
comments: true
---

## The file Script

<p>
  Name of the file: <a href="https://github.com/shim-sao/joomla-00021-mod_xtrmexample/blob/master/dist/script.php" target="_blank"><code><span class="nc">script.php</span></code></a>
</p>

<p class="text-justify">
  The file <code><span class="nc">script.php</span></code> is a common file called by Joomla during the installation of an extension.<br />
  It hepls to manage and to personalize  et It allows you to manage and customize the various events that can occur during the installation, the update or the uninstallation of a module, a plugin, a library or a component.<br />
  As events, we can mention: installation, uninstallation, update, "pre flight" and "post flight" which is called at the end of execution regardless of the mode used.</p>

### Declaring a file for Joomla

<p class="text-justify">
  First, let's start with the first statement. <br />
  To ensure that the file will only be executed by the site Joomla application, we need to check that the `_JEXEC` constant is set before any operation.
</p>

```php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;
```

<br/>

### Declaration of the installation class

<p class="text-justify">
  Name of the class: <code><span class="nc">Mod_</span><span class="nc font-italic">[module name]</span><span class="nc">InstallerScript</span></code>
</p>

<p class="text-justify">
  Here the <span class="nc font-italic">module name</span> chosen is <code>XtrmExample</code> (without the brackets of course) but it's up to you to define a name that must be unique and definitive. <br />
</p>

<p class="text-justify">
  We will therefore define the following PHP class:<br />
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
  // Declare here the methods of events.
}
```
<p class="text-justify">
  This class will be instantiated whatever the mode used: installation, update or uninstallation.
</p>

<br/>

### Declaration of the methods of events.

#### The method <span class="text-italic">Install</span>

<p class="text-justify">
  The method <code>install($parent)</code> is the method that will be called during the installation of the module, <code>$parent</code> being the calling class of the script which makes it possible to access its information or public methods.
</p>

```php
/**
 * Method to install the extension.
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

<br/>

#### The method <span class="text-italic">Uninstall</span>

<p class="text-justify">
  The method <code>uninstall($parent)</code> is the method that will be called during the uninstallation of the module, <code>$parent</code> being the calling class of the script which makes it possible to access its information or public methods.
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

<br/>

#### The method <span class="text-italic">Update</span>

<p class="text-justify">
  The method <code>update($parent)</code> is the method that will be called during the update of the module, <code>$parent</code> being the calling class of the script which makes it possible to access its information or public methods.
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

<br/>

#### The method <span class="text-italic">preflight</span>

<p class="text-justify">
  The method <code>preflight($parent)</code> is a method that will be called at the beginning of the execution of the script whatever the mode, installation, uninstallation or update of the module, <code>$parent</code> being the calling class of the script which makes it possible to access its information or public methods.
</p>

```php
/**
 * Method run before an install/update/uninstall method.
 *
 * @param   string $type is the type of change (install, update or discover_install)
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

<br/>

#### The method <span class="text-italic">postflight</span>

<p class="text-justify">
  The method <code>postflight($parent)</code> is a method that will be called at the end of the execution of the script whatever the mode, installation, uninstallation or update of the module, <code>$parent</code> being the calling class of the script which makes it possible to access its information or public methods.
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

<br/>

### Course of events in image.

<figure>
  <figcaption class="text-justify">
    Here is a screen shot for our example of the module installation process.<br />
    Since the module is already installed, the methods used correspond to the update mode, <span class="font-italic">update</span>, however the same process remains valid with the other event modes that are <span class="font-italic">install, uninstall</span>.
  </figcaption>
  <a target="_blank" href="/assets/images/module-xtrmexample-install.jpg" class="Module XtrmExample Install">
    <img src="/assets/images/module-xtrmexample-install.jpg" alt="Module XtrmExample Install" title="Module XtrmExample Install" />
  </a>
</figure>
