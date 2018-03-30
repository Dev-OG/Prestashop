<?php
/**
 *    This file is part of Bridge Connector.
 *
 *   Bridge Connector is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   Bridge Connector is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with Mobile Assistant Connector. If not, see <http://www.gnu.org/licenses/>.
 *
 *  @author    eMagicOne <contact@emagicone.com>
 *  @copyright 2018 eMagicOne
 *  @license   http://www.gnu.org/licenses   GNU General Public License
 */

class SelfTest
{
    const TEST_POST_STRING = '////AjfiIkllsomsdjUNNLkdsuinmJNFIkmsiidmfmiOKSFKMI/////';
    const TEST_OK          = '<span style="color: #008000;">Ok</span>';
    const TEST_FAIL        = '<span style="color: #ff0000;">Fail</span>';
    const TEST_YES         = '<span style="color: #008000;">Yes</span>';
    const TEST_SKIP        = '<span style="color: #808080;">Test Skipped</span>';
    const TEST_NO          = '<span style="color: #ff0000;">Fail</span>';

    private $module_version;
    private $base_url;
    private $hash;
    /*private $test_result;*/

    public function __construct($module_version, $base_url, $hash)
    {
        $this->module_version = $module_version;
        $this->base_url       = $base_url.'index.php?fc=module&module=bridgeconnector&controller=bridge&';
        $this->hash           = $hash;
    }

    public function runSelfTest()
    {
        if (!function_exists('curl_init') || !is_callable('curl_init')) {
            return '<b>PHP CURL extension is disabled.</b><br />Please contact your hosting provider to
                enable PHP CURL extension. It is necessary for Bridgeconnector self test only.';
        }

        $html = '<table cellpadding=2 width="100%"><tr><th width="30%">Test Title</th><th>Result</th></tr>
            <tr><td>BridgeConnector Version</td><td>'.$this->module_version.'</td><td></td></tr>
            <tr><td>Post Maximum Size</td><td>'.ini_get('post_max_size').'</td>
            <tr><td>Zlib PHP Extension Loaded</td><td>'
            .(self::testIsGzAvailable() ? self::TEST_YES : self::TEST_NO).'</td>';

        $html .= '<tr><td>Apache mod_security Disabled</td><td>'
            .(self::testApacheModSecurity()
                ? self::TEST_YES
                : self::testIsCgiMode() === true ? self::TEST_SKIP : self::TEST_NO).'</td>';

        $html .= '<tr><td>Suhosin PHP extension Disabled</td><td>'
            .(self::testSuhosinExtensionLoaded() ? self::TEST_YES : self::TEST_NO).'</td>';
        $html .= '<tr><td>Magic Quotes GPC/Runtime Disabled</td><td>'
            .(self::testMagicQuotes() ? self::TEST_YES : self::TEST_NO).'</td>';
        $html .= '</table>';

        return $html;
    }

    private static function testIsGzAvailable()
    {
        return extension_loaded('zlib');
    }

    private static function testApacheModSecurity()
    {
        if (function_exists('apache_get_modules')) {
            $apache_modules = call_user_func('apache_get_modules');

            return !in_array('mod_security', $apache_modules);
        }

        return false;
    }

    private static function testIsCgiMode()
    {
        if ((function_exists('apache_get_modules') && call_user_func('apache_get_modules') == null)
            || (!function_exists('apache_get_modules'))
        ) {
            return true;
        }

        return false;
    }

    private static function testSuhosinExtensionLoaded()
    {
        return (int)ini_get('suhosin.request.max_value_length') > 1048576 || !extension_loaded('suhosin');
    }

    private static function testMagicQuotes()
    {
        $test_magic_quotes_gpc     = true;
        $test_magic_quotes_runtime = true;

        if (function_exists('get_magic_quotes_gpc')) {
            $test_magic_quotes_gpc = !get_magic_quotes_gpc();
        }

        if (function_exists('get_magic_quotes_runtime')) {
            $test_magic_quotes_runtime = !get_magic_quotes_runtime();
        }

        return $test_magic_quotes_gpc && $test_magic_quotes_runtime;
    }
}
