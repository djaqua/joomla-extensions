<?php
/**
 * This is the Hello World Module template which takes data collected by
 * mod_helloworld and generates HTML to be displayed on the page.
 *
 * @package    Jaqua.Templates
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die; ?>
<?php
    // defined in mod_helloworld.php
    echo $message;
    // echo $response;
?>
