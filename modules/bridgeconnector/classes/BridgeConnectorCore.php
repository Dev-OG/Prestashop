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

/**
 * Class which contains those methods which have be overridden in child class
 */
abstract class BridgeConnectorCore
{
    public $module_name;
    protected $options_name;
    protected $is_sql_encoded_in_base64 = false;

    public $error_no;   /* error number during sql query execution */
    public $error_msg;  /* error message during sql query execution */

    const NUMERIC      = 1;     /* numeric array */
    const ASSOC        = 0;     /* associating array */
    const PRODUCT      = 'p';   /* entity 'product' */
    const CATEGORY     = 'c';   /* entity 'category' */
    const MANUFACTURER = 'm';   /* entity 'manufacturer' */
    const CARRIER      = 's';   /* entity 'carrier' */
    const SUPPLIER     = 'su';  /* entity 'supplier' */
    const ATTRIBUTE    = 'co';  /* entity 'attribute' */

    /*const IMAGE_FILE        = 'image_file';*/
    const IMAGE_URL                         = 'image_url';
    const CODE_RESPONSE                     = 'response_code';
    const KEY_MESSAGE                       = 'message';
    const SUCCESSFUL                        = 20; /* an operation was executed successfully */
    const ERROR_CODE_COMMON                 = 19;
    const ERROR_GENERATE_STORE_FILE_ARCHIVE = 27;
    const KEY_IS_COMPRESSED                 = 'is_compressed';
    const KEY_PARTS_COUNT                   = 'parts_count';
    const KEY_FILE_SIZE                     = 'file_size';
    const KEY_FILE_NAME                     = 'file_name';
    const KEY_CHECKSUM                      = 'checksum';

    abstract public function isModuleEnabled();
    abstract public function getBridgeOptions();
    abstract public function getShopRootDir();
    abstract public function getDbHost();
    abstract public function getDbName();
    abstract public function getDbUsername();
    abstract public function getDbPassword();
    abstract public function getDbPrefix();
    abstract public function getSqlResults($sql, $type = self::ASSOC);
    abstract public function execSql($sql, $reconnect = false);
    abstract public function sanitizeSql($sql);
    abstract public function issetRequestParam($param);
    abstract public function getRequestParam($param);
    abstract public function getStoreLink($ssl = false);
    abstract public function runIndexer();
    abstract public function getCartVersion();
    abstract public function getImage($entity_type, $image_id);
    abstract public function setImage($entity_type, $image_id, $image, $type);
    abstract public function getImageDir($type);
    abstract public function deleteImage($entity_type, $image_id);
    abstract public function deleteFile($filepath);
    abstract public function copyImage($entity_type, $from_image_id, $to_image_id);
    abstract public function getFile($folder, $filename);
    abstract public function setFile($folder, $filename, $file);
    abstract public function checkDataChanges($tablesArr = '');
    abstract public function getNewOrders($order_id = '');
    abstract public function clearCache();
    abstract public function strLen($str);
    abstract public function subStr($str, $start, $length = false);
    abstract public function strToLower($str);
    abstract public function strToUpper($str);
    abstract public function jsonEncode($arr);
    abstract public function stripSlashes($str);
    abstract public function fileGetContents($file);
    abstract public function filePutContents($path, $content, $mode = null);
    abstract public function pSQL($data);
    abstract public function saveConfigData($data);
    abstract public function fileOpen($path, $mode);
    abstract public function fileClose($resource);
    abstract public function isReadable($path);
    abstract public function isWritable($path);
    abstract public function isDirectory($path);
    abstract public function isFile($path);
    abstract public function stat($path);
    abstract public function search($path, $pattern = '*', $onlyDir = false);
    abstract public function readDirectory($path);
    abstract public function filemtime($path);
    abstract public function fileSize($path);
    abstract public function fileExists($path);
    abstract public function fileWrite($resource, $data);
    abstract public function fileRead($resource, $length);
    abstract public function gzFileOpen($path, $mode);
    abstract public function gzFileWrite($resource, $data);
    abstract public function gzFileClose($resource);
    abstract public function unlink($path);
    abstract public function createDirectory($path, $permissions);
    abstract public function getParentDirectory($path);
    abstract public function unserialize($data);
    abstract public function getPaymentAndShippingMethods();
    abstract public function getZipArchiveInstance();
    abstract public function getZipArchiveCreateValue();

    /**
     * @param $path
     * @param array $arr_ignore_dir
     * @param string $mask
     * @param bool|false $include_subdir
     * @param array $skip
     * @param array $files
     * @return array
     */
    public function getFilesRecursively(
        $path,
        $arr_ignore_dir = array(),
        $mask = '*',
        $include_subdir = false,
        $skip = array('.', '..'),
        $files = array()
    ) {
        if ($this->isReadable($path)) {
            $rootDir = $this->getShopRootDir();

            foreach ($this->search($path, $mask) as $file) {
                if ($this->isFile($file)) {
                    $files[] = $this->subStr($file, $this->strLen($rootDir) - 1);
                }
            }

            if ($include_subdir) {
                foreach ($this->search($path, '*', true) as $directory) {
                    if (in_array($directory, $arr_ignore_dir)) {
                        continue;
                    }

                    $files = $this->getFilesRecursively(
                        $directory,
                        $arr_ignore_dir,
                        $mask,
                        $include_subdir,
                        $skip,
                        $files
                    );
                }
            }
        }

        return $files;
    }

    public function getIgnoreDirs()
    {
        if (!$this->issetRequestParam('ignore_dir')) {
            return array();
        }

        $ignore_dir = (string)$this->getRequestParam('ignore_dir');

        if (empty($ignore_dir)) {
            return array();
        }

        $arr_ignore_dir = explode(';', $ignore_dir);
        $rootDir = $this->getShopRootDir();

        // Set full directory path
        $count = count($arr_ignore_dir);
        for ($i = 0; $i < $count; $i++) {
            $arr_ignore_dir[$i] = $rootDir.ltrim($arr_ignore_dir[$i], '/');
        }

        return $arr_ignore_dir;
    }

    public function getCodeResponse()
    {
        return self::CODE_RESPONSE;
    }

    public function getCodeSuccessful()
    {
        return self::SUCCESSFUL;
    }

    public function getKeyMessage()
    {
        return self::KEY_MESSAGE;
    }

    public function setSqlEncodedInBase64($isEncoded)
    {
        $this->is_sql_encoded_in_base64 = $isEncoded;
    }
}
