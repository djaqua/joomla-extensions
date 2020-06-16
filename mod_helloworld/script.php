<?php
// No direct access to this file
defined('_JEXEC') or die;

/**
 * Script file of HelloWorld module
 */
class mod_helloWorldInstallerScript
{
	/**
	 * Method to install the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function install($parent)
	{
		echo '<p>Hello World Module has been installed. Message brought to you by mod_helloworld/script.php</p>';
	}

	/**
	 * Method to uninstall the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function uninstall($parent)
	{
		echo '<p>Hello World Module has been uninstalled. Message brought to you by mod_helloworld/script.php</p>';
	}

	/**
	 * Method to update the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function update($parent)
	{
		echo '<p>Hello World Module has been updated to version' . $parent->get('manifest')->version . '. Message brought to you by mod_helloworld/script.php</p>';
	}

	/**
	 * Method to run before an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function preflight($type, $parent)
	{
		echo '<p>Anything here happens before the installation/update/uninstallation of Hello World Module. Message brought to you by mod_helloworld/script.php</p>';
	}

	/**
	 * Method to run after an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function postflight($type, $parent)
	{
		echo '<p>Anything here happens after the installation/update/uninstallation of Hello World Module. Message brought to you by mod_helloworld/script.php</p>';
	}
}
