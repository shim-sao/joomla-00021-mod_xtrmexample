<?php
/**
 * XtrmExampleHelper.php, build date : {{date.today}}, builder version : {{builder_version}}
 * Helper file of the Joomla Module XtrmAddons Example.
 * php version 7.2.10
 * {{tmpl:php/phpdocs/file.header}}
 * @since      4.0.01.20116.190426
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
 * {{tmpl:php/phpdocs/file.header}}
 * @since      4.0.01.20116.190426
 *
 * @access     public
 */
class XtrmExampleHelper
{
  /**
   * Method to get a simple message for example.
   *
   * @param   \Joomla\Registry\Registry $params The module options.
   *
   * @access 	public
   * @version {{version.build}}
   * @since   4.0.01.20116.190426
   *
   * @return  string
   */
  public static function getMessage(&$params)
  {
    return 'Hello World !';
  }
}
