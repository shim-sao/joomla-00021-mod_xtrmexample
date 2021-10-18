<?php
/**
 * default.php, build date : {{date.today}}, builder version : {{builder_version}}
 * Default template file of the Joomla Module XtrmAddons Example.
 * php version 7.2.10
 * {{tmpl:php/phpdocs/file.header}}
 * @since      4.0.00.01.116.190425
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

// Declare Joomla namespaces
use Joomla\CMS\Helper\ModuleHelper;

// Declare Module namespaces
use Joomla\CMS\HTML\HTMLHelper;

// Add default module style.
HTMLHelper::_('stylesheet', 'mod_xtrmexample/css/default.min.css', array('version' => 'auto', 'relative' => true));

// Add default module javascript.
HTMLHelper::_('script', 'mod_xtrmexample/js/default.min.js', array('version' => 'auto', 'relative' => true));

// HTML ?>
<div <?php echo $tagId ? 'id="' . $tagId . '"' : ''; ?>class="mod-xtrmexample mod-<?php echo $classSfx ? '-' . $classSfx : ''; ?>">
<?php echo $message; ?>
</div>
