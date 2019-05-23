<?php
/**
 * mod_xtrmexample.php, build date : 23 May. 2019
 * Installation script of the Joomla Module XtrmAddons To Top.
 * php version 7.2.10
 *
 * @version    4.0.01.03.1431144
 * @category   XtrmAddons
 * @package    Joomla
 * @subpackage mod_xtrmexample
 * @author     shim-sao <contact@xtrmaddons.com>
 * @copyright  Copyright 2019-2019 XtrmAddons.com. All rights reserved.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @link       https://www.xtrmaddons.com/
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
