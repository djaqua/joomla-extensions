<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HTML View class for the HelloWorld Component
 *
 * @since  0.0.1
 */
class HelloWorldViewHelloWorld extends JViewLegacy
{
	/**
	 * Display the Hello World view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)  // uses 'tmpl/default.php'
	// function display($tpl = '2')    // uses 'tmpl/default_2.php'
	{
		// Assign data to the view (tmpl/default.php)
		$this->msg = 'Hello World (defined in view.html.php)';

		// Display the view
		parent::display($tpl);
	}
}
