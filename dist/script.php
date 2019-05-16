<?php
/**
 * script.php, build date : 16 May. 2019
 * Installation script of the Joomla Module XtrmAddons Example.
 * php version 7.2.10
 *
 * @version    4.0.01.03.1362239
 * @category   XtrmAddons
 * @package    Joomla
 * @subpackage mod_xtrmexample
 * @author     shim-sao <contact@xtrmaddons.com>
 * @copyright  Copyright 2019-2019 XtrmAddons.com. All rights reserved.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @link       https://www.xtrmaddons.com/
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;



/**
 * Script file of XtrmAddons component.
 *
 * @category   	XtrmAddons
 * @package    	Joomla
 * @subpackage 	mod_xtrmexample
 * @author     	shim-sao <contact@xtrmaddons.com>
 * @copyright  	Copyright 2019-2019 XtrmAddons.com. All rights reserved.
 * @license    	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @version    	4.0.01.03.1362239
 * @link       	https://www.xtrmaddons.com/
 *
 * @access     	public
 * @since 			4.0.00.01.190425
 */
class Mod_XtrmExampleInstallerScript
{
	/**
	 * The full name of the module.
	 *
	 * @var string $extensionName
	 */
	private $extensionName = "mod_xtrmexample";

	/**
	 * Method to install the component.
	 *
	 * @param   object $parent The class that calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version 4.0.01.03.1362239
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
	 * @param	object	$parent	is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version 4.0.01.03.1362239
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
	 * @param 	object $parent is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version 4.0.01.03.1362239
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

	/**
	 * Method run after an install/update/uninstall method.
	 *
	 * @param 	string	$type	is the type of change (install, update or discover_install)
	 * @param 	object	$parent	is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version 4.0.01.03.1362239
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

	/**
	 * Method run before an install/update/uninstall method.
	 *
	 * @param 	string	$type	is the type of change (install, update or discover_install)
	 * @param 	object	$parent	is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.01.03.136
	 * @version 4.0.01.03.1362239
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

	/**
	 * Method to clean updates site liste.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425
	 * @version 4.0.01.03.1362239
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
