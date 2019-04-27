<?php
/**
 * mod_xtrmexample.php, build date : 25 apr. 2019
 * Installation script of the Joomla Module XtrmAddons To Top.
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
defined('_JEXEC') or die();

// Declare Joomla Module Helper
use Joomla\CMS\Helper\ModuleHelper;

// Declare Module Helper
use Joomla\Module\XtrmExample\Site\Helper\XtrmExampleHelper;



// Get message from module helper class.
$message = XtrmExampleHelper::getMessage($params);

// Get module html class suffix.
$classSfx = htmlspecialchars($params->get('class_sfx'), ENT_COMPAT, 'UTF-8');



// Display module layout.
require ModuleHelper::getLayoutPath('mod_xtrmexample', $params->get('layout', 'default'));