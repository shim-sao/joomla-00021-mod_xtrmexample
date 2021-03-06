<?php
/**
 * script.php, build date : {{creation_date}}
 * Installation script of the Joomla Module XtrmAddons Example.
 * php version 7.2.10
 *
 * @version    {{version_build}}
 * @category   {{category}}
 * @package    {{framework}}
 * @subpackage {{element}}
 * @author     {{author}} <{{author_email}}>
 * @copyright  {{copyright}}
 * @license    {{license_link}}
 * @link       {{packager_url}}
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;



/**
 * Script file of XtrmAddons component.
 *
 * @category   	{{category}}
 * @package    	{{framework}}
 * @subpackage 	{{element}}
 * @author     	{{author}} <{{author_email}}>
 * @copyright  	{{copyright}}
 * @license    	{{license_link}}
 * @version    	{{version_build}}
 * @link       	{{packager_url}}
 *
 * @access     	public
 * @since 			4.0.00.01.190425
 */
class Mod_XtrmExampleInstallerScript
{
	/**
	 * Method to install the component.
	 *
	 * @param   Joomla\CMS\Installer\Adapter\ModuleAdapter $parent The class that calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
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

	/**
	 * Method to uninstall the component.
	 *
	 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter $parent	is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
	 *
	 * @return void
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

	/**
	 * Method to update the component.
	 *
	 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter $parent is the class calling this method.
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
		echo '<p class="alert alert-info">'
			. 'Method: update<br />'
			. 'Parent: ' . get_class($parent)
			. '</p><p class="alert alert-success">'
			. JText::_('MOD_XTRMEXAMPLE_UPDATE_SUCCESS')
			. '</p>';
	}

	/**
	 * Method run after an install/update/uninstall method.
	 *
	 * @param 	string 																			$type 	is the type of change (install, update or discover_install)
	 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter 	$parent is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version {{version_build}}
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

	/**
	 * Method run before an install/update/uninstall method.
	 *
	 * @param 	string 																			$type 	is the type of change (install, update or discover_install)
	 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter 	$parent is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.01.03.136
	 * @version {{version_build}}
	 *
	 * @return 	void
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

	/**
	 * Method to display copyright informations.
	 *
	 * @param 	Joomla\CMS\Installer\Adapter\ModuleAdapter 	$parent is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.01.03.1391207
	 * @version {{version_build}}
	 *
	 * @return 	void
	 */
	public function copyright($parent)
	{
		// Explode license assuming: link name
		$license = explode(' ', (string) $parent->getManifest()->license);

		// Displays copyright
		echo '<p class="text-center">'
			. 'Author: ' . (string) $parent->getManifest()->author
			. ' - Version:' . (string) $parent->getManifest()->version
			. ' - License: <a target="_blank" href="' . $license[0] . '">'
			. (empty($license[0]) ? '' : pathinfo($license[0], PATHINFO_FILENAME))
			. (empty($license[0]) || empty($license[1]) ? '' : ' ')
			. (empty($license[1]) ? '' : $license[1])
			. '</a>'
			. '<br />'
			. (string) $parent->getManifest()->copyright
			. '</p>';
	}

	/**
	 * Method to clean updates site list.
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
			->where($db->qn('location') . ' LIKE ' . $db->q('%' . $this->element . '%'))
			->order('update_site_id DESC');

		$id    = $db->setQuery($query)->loadResult();
		$query = $db->getQuery(true);

		$query->delete($db->qn('#__update_sites'))
			->where($db->qn('location') . ' LIKE ' . $db->q('%' . $this->element . '%'))
			->where($db->qn('update_site_id') . ' != ' . $db->q($id));

		$db->setQuery($query)->execute();
	}
}
