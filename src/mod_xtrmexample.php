<?php
/**
 * mod_xtrmexample.php, build date : {{date.today}}, builder version : {{builder_version}}
 * Module Xtrm Example main file.
 * php version 7.2.10
 * {{tmpl:php/phpdocs/file.header}}
 * @since      4.0.01.20116
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
