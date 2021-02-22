<?php
/**
 * default.php, build date : {{date.today}}, builder version : {{builder_version}}
 * Default template file of the Joomla Module XtrmAddons Example.
 * php version 7.2.10
 *
 * @version    {{version.build}}
 * @category   {{extension.category}}
 * @package    {{extension.cms}}
 * @subpackage {{extension.element}}
 * @author     {{author.name}} <{{author.email}}>
 * @copyright  {{author.copyright}}
 * @license    {{author.license_url}}
 * @link       {{packager.url}}
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

// Declare Joomla namespaces
use Joomla\CMS\Helper\ModuleHelper;

// Declare Module namespaces
use Joomla\CMS\HTML\HTMLHelper;

// Add default module javascript.
HTMLHelper::_('script', 'mod_xtrmexample/default.min.js', array('version' => 'auto', 'relative' => true));

// HTML ?>
<div <?php echo $tagId ? 'id="' . $tagId . '"' : ''; ?>class="mod-xtrmexample mod-<?php echo $classSfx ? '-' . $classSfx : ''; ?>">
<?php echo $message; ?>
</div>
