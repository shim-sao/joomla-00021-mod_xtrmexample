<?php
/**
 * default.php, build date : 26 apr. 2019
 * Default template file of the Joomla Module XtrmAddons Example.
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

// Declare Joomla namespaces
use Joomla\CMS\HTML\HTMLHelper;

// Declare Module namespaces
use Joomla\CMS\Helper\ModuleHelper;

HTMLHelper::_('script', 'mod_xtrmexample/default.min.js', array('version' => 'auto', 'relative' => true));

$id = '';

// The menu class is deprecated. Use mod-menu instead
?>
<div?php echo $id; ?> class="mod-xtrmexample<?php echo $classSfx ? '-' . $classSfx : ''; ?>">
<
	echo $message;
?>
</div>
