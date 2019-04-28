<?php
/**
 * script.php, build date : 25 apr. 2019
 * Installation script of the Joomla Module XtrmAddons Example.
 * php version 7.2.10
 *
 * @version    GIT: $Id$
 * @category   XtrmAddons
 * @package    Joomla
 * @subpackage mod_xtrmexample
 * @author     shim-sao <contact@xtrmaddons.com>
 * @copyright  2019-2019 XtrmAddons.COM
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL, see LICENSE.php
 * @link       http://www.xtrmaddons.com/
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;



/**
 * Script file of XtrmAddons component.
 *
 * @category   	XtrmAddons
 * @package    	Joomla
 * @subpackage 	XtrmBuilder
 * @author     	shim-sao <contact@xtrmaddons.com>
 * @copyright  	2019-2019 XtrmAddons.COM
 * @license    	http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL, see LICENSE.php
 * @version    	Release: @package_version@
 * @link       	http://www.xtrmaddons.com/
 *
 * @access     	public
 * @since 			4.0.00.01.190425 - 25 apr. 2019
 * @version 		4.0.00.01.190425 - 25 apr. 2019
 */
class Mod_XtrmExampleInstallerScript
{
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
	 * @since 	4.0.00.01.190425 - 25 apr. 2019
	 * @version 4.0.00.01.190425 - 25 apr. 2019
	 *
	 * @return 	void
	 */
	public function install($parent)
	{
		echo '<p>' . JText::_('mod_xtrmexample_INSTALL_SUCCESS') . '</p>';
	}

	/**
	 * Method to uninstall the component.
	 *
	 * @param	object	$parent	is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425 - 25 apr. 2019
	 * @version 4.0.00.01.190425 - 25 apr. 2019
	 *
	 * @return void
	 */
	public function uninstall($parent)
	{
		echo '<p>' . JText::_('mod_xtrmexample_UNINSTALL_SUCCESS') . '</p>';
	}

	/**
	 * Method to update the component.
	 *
	 * @param 	object $parent is the class calling this method.
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425 - 25 apr. 2019
	 * @version 4.0.00.01.190425 - 25 apr. 2019
	 *
	 * @return 	void
	 */
	public function update($parent)
	{
		$this->cleanUpdatesSites();
		echo '<p>' . JText::sprintf('mod_xtrmexample_UPDATE_SUCCESS', $parent->get('manifest')->version) . '</p>';
	}

	/**
	 * Method to run after an install/update/uninstall method.
	 *
	 * @param 	string	$type	is the type of change (install, update or discover_install)
	 * @param 	object	$parent	is the class calling this method
	 *
	 * @access	public
	 * @since 	4.0.00.01.190425 - 25 apr. 2019
	 * @version 4.0.00.01.190425 - 25 apr. 2019
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
	 * @since 	4.0.00.01.190425 - 25 apr. 2019
	 * @version 4.0.00.01.190425 - 25 apr. 2019
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
