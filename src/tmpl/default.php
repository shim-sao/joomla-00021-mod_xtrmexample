<?php
/**
 * default.php, build date : {{creation_date}}
 * Default template file of the Joomla Module XtrmAddons Example.
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

// Declare Joomla namespaces
use Joomla\CMS\HTML\HTMLHelper;

// Declare Module namespaces
use Joomla\CMS\Helper\ModuleHelper;

// Add default module javascript.
HTMLHelper::_('script', 'mod_xtrmexample/default.min.js', array('version' => 'auto', 'relative' => true));

?>
<div <?php echo $tagId ? 'id="' . $tagId . '"' : ''; ?>class="mod-xtrmexample mod-<?php echo $classSfx ? '-' . $classSfx : ''; ?>">
<?php
	echo $message;
?>
</div>
