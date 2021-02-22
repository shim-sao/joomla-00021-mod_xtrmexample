<?php
/**
 * mod_xtrmexample.php, build date : {{creation_date}}
 * Module Xtrm Example main file.
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
defined('_JEXEC') or die();

// Declare Joomla Module Helper
use Joomla\CMS\Helper\ModuleHelper;

// Declare Module Helper
use Joomla\Module\XtrmExample\Site\Helper\XtrmExampleHelper;

// Include the helper functions only once
require_once "Helper/XtrmExampleHelper.php";

// Get message from module helper class.
$message = XtrmExampleHelper::getMessage($params);

// Get module html class suffix.
$classSfx = htmlspecialchars($params->get('class_sfx'), ENT_COMPAT, 'UTF-8');
$tagId    = htmlspecialchars($params->get('tag_id', ''), ENT_COMPAT, 'UTF-8');


// Display module layout.
require ModuleHelper::getLayoutPath('mod_xtrmexample', $params->get('layout', 'default'));
