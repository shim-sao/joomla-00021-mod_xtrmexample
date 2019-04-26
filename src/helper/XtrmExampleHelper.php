<?php
/**
 * XtrmExampleHelper.php, build date : 26 apr. 2019
 * Helper file of the Joomla Module XtrmAddons Example.
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
namespace Joomla\Module\XtrmExample\Site\XtrmExampleHelper;

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

// Declare Joomla namespaces
use Joomla\CMS\Cache\CacheControllerFactoryInterface;
use Joomla\CMS\Cache\Controller\OutputController;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Multilanguage;
use Joomla\CMS\Router\Route;

/**
 * Class Module XtrmAddons Example Helper.
 *
 * @category   	XtrmAddons
 * @package    	Joomla
 * @subpackage 	XtrmBuilder
 * @author     	shim-sao <contact@xtrmaddons.com>
 * @copyright  	2018-2019 XtrmAddons.COM
 * @license    	http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL, see LICENSE.php
 * @version    	Release: @package_version@
 * @link       	http://www.xtrmaddons.com/
 *
 * @access		 	public
 * @since 			4.0.00.01.190426 - 26 apr. 2019
 * @version 		4.0.00.01.190426 - 26 apr. 2019
 */
class XtrmExampleHelper
{
	/**
	 * Method to get a simple message for example.
	 *
	 * @param   \Joomla\Registry\Registry $params The module options.
	 *
	 * @access 	public
	 * @since 	4.0.00.01.190426 - 26 apr. 2019
	 * @version 4.0.00.01.190426 - 26 apr. 2019
	 *
	 * @return  string
	 */
	public static function getMessage(&$params)
	{
		return 'Hello World !';
	}
}
