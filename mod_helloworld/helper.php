<?php
/**
 * Helper class for Hello World Module
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
class ModHelloWorldHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getMessage($config)
    {
        return $config->get('greeting');
    }

    public static function doGet($url, $config)
    {
        $ch = curl_init($url);

        // causes curl to return the transfer as a string of the return
        // value of curl_exec(...) instead of outputting it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // curl_setopt($ch, CURLOPT_POST, 0);

        // causes curl to follow any 'Location:' header that the server sends
        // as part of the HTTP header; WARNING: could potentially redirect
        // forever unless CURLOPT_MAXREDIRS is set
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $config->get('curl_follow_redirects', 0));

        // causes curl to skip verifying the peer's certificate
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $config->get('curl_ssl_verify_peer', 1));

        // causes curl to skip checking for a common name in the peer certificate
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $config->get('curl_ssl_verify_host', 2));

        // finally, perform the GET request, close the connection, return the string
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
