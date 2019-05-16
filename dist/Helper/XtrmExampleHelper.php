<?php
/**
 * XtrmExampleHelper.php, build date : 16 May. 2019
 * Helper file of the Joomla Module XtrmAddons Example.
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
namespace Joomla\Module\XtrmExample\Site\Helper;

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
 * @subpackage 	mod_xtrmexample
 * @author     	shim-sao <contact@xtrmaddons.com>
 * @copyright  	Copyright 2019-2019 XtrmAddons.com. All rights reserved.
 * @license    	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @version    	4.0.01.03.1362239
 * @link       	https://www.xtrmaddons.com/
 *
 * @access		 	public
 * @since 			4.0.00.01.190426
 */
class XtrmExampleHelper
{
	/**
	 * Method to get a simple message for example.
	 *
	 * @param   \Joomla\Registry\Registry $params The module options.
	 *
	 * @access 	public
	 * @since 	4.0.00.01.190426
	 * @version 4.0.01.03.1362239
	 *
	 * @return  string
	 */
	public static function getMessage(&$params)
	{
		return 'Hello World !';
	}
}
