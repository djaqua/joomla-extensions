<?php
/**
 * Hello World Module entry point
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

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$message = modHelloWorldHelper::getMessage($params);

// $response = modHelloWorldHelper::doGet('http://www.example.com/api?foo=bar', $params);

require JModuleHelper::getLayoutPath('mod_helloworld'); //
