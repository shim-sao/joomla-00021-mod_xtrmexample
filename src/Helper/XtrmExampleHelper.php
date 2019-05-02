<?php
/**
 * XtrmExampleHelper.php, build date : {{creation_date}}
 * Helper file of the Joomla Module XtrmAddons Example.
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
 * @category   	{{category}}
 * @package    	{{framework}}
 * @subpackage 	{{element}}
 * @author     	{{author}} <{{author_email}}>
 * @copyright  	{{copyright}}
 * @license    	{{license_link}}
 * @version    	{{version_build}}
 * @link       	{{packager_url}}
 *
 * @access		 	public
 * @since 			4.0.00.01.190426 - 26 apr. 2019
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
	 * @version {{version_build}}
	 *
	 * @return  string
	 */
	public static function getMessage(&$params)
	{
		return 'Hello World !';
	}
}
