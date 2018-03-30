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

class PrestashopOverrider extends BridgeConnectorCore
{
    public function __construct($module_name, $options_name)
    {
        $this->module_name  = $module_name;
        $this->options_name = $options_name;
    }

    public function isModuleEnabled()
    {
        return Module::isEnabled($this->module_name);
    }

    public function getBridgeOptions()
    {
        $options = Configuration::get($this->options_name);

        return $options ? unserialize($options) : false;
    }

    public function getShopRootDir()
    {
        return $this->subStr(_PS_ROOT_DIR_, -1) == '/' ? _PS_ROOT_DIR_ : _PS_ROOT_DIR_ . '/';
    }

    public function getDbHost()
    {
        return _DB_SERVER_;
    }

    public function getDbName()
    {
        return _DB_NAME_;
    }

    public function getDbUsername()
    {
        return _DB_USER_;
    }

    public function getDbPassword()
    {
        return _DB_PASSWD_;
    }

    public function getDbPrefix()
    {
        return _DB_PREFIX_;
    }

    public function getSqlResults($sql, $type = self::ASSOC)
    {
        $ret = array();
        $db = Db::getInstance();
        /*$time_current = time();

        if (($time_current - $this->timer) > 15) {
            $db->disconnect();
            $db->connect();
            $this->timer = $time_current;
        }*/

        try {
            $result = $db->executeS($sql);

            if ($result === false) {
                throw new Exception('Error');
            }

            if ($type == self::ASSOC) {
                return $result;
            }

            foreach ($result as $arr_values) {
                $ret[] = array_values($arr_values);
            }
        } catch (Exception $e) {
            $this->error_no = $db->getNumberError();
            $this->error_msg = $db->getMsgError();

            return false;
        }

        return $ret;
    }

    public function execSql($sql, $reconnect = false)
    {
        $result = true;
        $db = Db::getInstance();

        if ($reconnect) {
            $db->connect();
        }

        try {
            if (!$db->execute($sql)) {
                throw new Exception('Error');
            }
        } catch (Exception $e) {
            $this->error_no = $db->getNumberError();
            $this->error_msg = $db->getMsgError();
            $result = false;
        }

        return $result;
    }

    public function sanitizeSql($sql)
    {
        return Db::getInstance()->escape($sql, true);
    }

    public function issetRequestParam($param)
    {
        return Tools::getIsset($param);
    }

    public function getRequestParam($param)
    {
        return Tools::getValue($param);
    }

    public function getStoreLink($ssl = false)
    {
        if ($ssl) {
            return _PS_BASE_URL_SSL_.__PS_BASE_URI__;
        }

        return _PS_BASE_URL_.__PS_BASE_URI__;
    }

    public function runIndexer()
    {
        ini_set('max_execution_time', 7200);
        Search::indexation(1);
        exit;
    }

    public function getCartVersion()
    {
        return Tools::jsonEncode(
            array(
                'cart_version' => _PS_VERSION_,
                'cookie_key' => _COOKIE_KEY_,
            )
        );
    }

    public function getImage($entity_type, $image_id)
    {
        $image_id = (int)$image_id;

        if ($image_id < 1) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Image id is incorrect',
            )));
        }

        $img_path = false;

        switch ($entity_type) {
            case self::PRODUCT:
                $entity = new Image($image_id);
                $entity->id = $image_id;
                $img_path = $this->getImageDir(self::PRODUCT).$entity->getExistingImgPath().'.'.$entity->image_format;
                break;
            case self::CATEGORY:
                $entity = new Category($image_id);

                if ($entity->id_image) {
                    $img_path = $this->getImageDir(self::CATEGORY).$entity->id_image.'.jpg';
                }

                break;
            case self::MANUFACTURER:
                $img_path = $this->getImageDir(self::MANUFACTURER).$image_id.'.jpg';
                break;
            case self::CARRIER:
                $img_path = $this->getImageDir(self::CARRIER).$image_id.'.jpg';
                break;
            case self::SUPPLIER:
                $img_path = $this->getImageDir(self::SUPPLIER).$image_id.'.jpg';
                break;
            case self::ATTRIBUTE:
                $img_path = $this->getImageDir(self::ATTRIBUTE).$image_id.'.jpg';
                break;
        }

        return $img_path;
    }

    public function setImage($entity_type, $image_id, $img, $type)
    {
        $image_id = (int)$image_id;

        if ($image_id < 1) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Image id is incorrect',
            )));
        }

        if ($type == self::IMAGE_URL) {
            $options = $this->getBridgeOptions();
            $img_file = tempnam($this->getShopRootDir().$options['tmp_dir'], 'emo');

            if (!$img_file) {
                die($this->jsonEncode(array(
                    self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                    self::KEY_MESSAGE   => 'Could not create file in temporary folder',
                )));
            }

            $img = str_replace(' ', '%20', $img);
            file_put_contents($img_file, $this->fileGetContents($img));
        } else {
            $img_file = $_FILES[$img]['tmp_name'];
        }

//        if (!ImageManager::isRealImage($_FILES[$upload_file_name]['tmp_name']))
        if (!ImageManager::isRealImage($img_file)) {
            if ($type == self::IMAGE_URL && $this->fileExists($img_file)) {
                $this->unlink($img_file);
            }

            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'File is not an image',
            )));
        }

        $image_types = array();
        $image_path = '';
        $res = false;

        switch ($entity_type) {
            case self::PRODUCT:
                // Get image type of products
                $image_types = ImageType::getImagesTypes('products');

                // Get image path to copy
                $image = new Image($image_id);
                $image->id = $image_id;
                $image_path = $image->getPathForCreation();

                // Set $image_id = '' because $image_path already has that value
                $image_id = '';
                break;
            case self::CATEGORY:
                // Get image type of categories
                $image_types = ImageType::getImagesTypes('categories');

                // Get image path to copy
                $image_path = $this->getImageDir(self::CATEGORY);
                break;
            case self::MANUFACTURER:
                // Get image type of manufacturers
                $image_types = ImageType::getImagesTypes('manufacturers');

                // Get image path to copy
                $image_path = $this->getImageDir(self::MANUFACTURER);
                break;
            case self::CARRIER:
                // Get image path to copy
                $image_path = $this->getImageDir(self::CARRIER);
                break;
            case self::SUPPLIER:
                // Get image type of suppliers
                $image_types = ImageType::getImagesTypes('suppliers');

                // Get image path to copy
                $image_path = $this->getImageDir(self::SUPPLIER);
                break;
            case self::ATTRIBUTE:
                // Get image path to copy
                $image_path = $this->getImageDir(self::ATTRIBUTE);
                break;
            default:
                break;
        }

        // Add extra values to create base image
        $image_types[] = array('name' => '', 'width' => false, 'height' => false);

        // Create all images for entity
        foreach ($image_types as $image_type) {
            $image_type['name'] = $this->stripSlashes($image_type['name']);

            if ($image_type['name'] == '') {
                $image_path_name = $image_path.$image_id.'.jpg';
            } else {
                $image_path_name = $image_path.$image_id.'-'.$image_type['name'].'.jpg';
            }

            $res = ImageManager::resize(
                //$_FILES[$upload_file_name]['tmp_name'],
                $img_file,
                $image_path_name,
                $image_type['width'],
                $image_type['height'],
                'jpg'
            );

            if (!$res) {
                break;
            }
        }

        if ($type == self::IMAGE_URL) {
            unlink($img_file);
        }

        if (!$res) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Unable to resize one or more of your pictures',
            )));
        } else {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::SUCCESSFUL,
                self::KEY_MESSAGE   => 'Upload and resize of images has been executed successfully',
            )));
        }
    }

    public function getImageDir($type)
    {
        $path = '';

        switch ($type) {
            case self::PRODUCT:
                $path = _PS_PROD_IMG_DIR_;
                break;
            case self::CATEGORY:
                $path = _PS_CAT_IMG_DIR_;
                break;
            case self::MANUFACTURER:
                $path = _PS_MANU_IMG_DIR_;
                break;
            case self::CARRIER:
                $path = _PS_SHIP_IMG_DIR_;
                break;
            case self::SUPPLIER:
                $path = _PS_SUPP_IMG_DIR_;
                break;
            case self::ATTRIBUTE:
                $path = _PS_COL_IMG_DIR_;
                break;
            default:
                break;
        }

        return $path;
    }

    public function deleteImage($entity_type, $image_id)
    {
        $image_id = (int)$image_id;

        if ($image_id < 1) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Parameter "image_id" is incorrect',
            )));
        }

        $obj = false;

        switch ($entity_type) {
            case self::PRODUCT:
                $obj = new Image($image_id);

                if (!$obj->id) {
                    $obj->id = $image_id;
                }
                break;
            case self::CATEGORY:
                $obj = new Category($image_id);
                break;
            case self::MANUFACTURER:
                $obj = new Manufacturer($image_id);
                break;
            case self::CARRIER:
                $obj = new Carrier($image_id);
                break;
            case self::SUPPLIER:
                $obj = new Supplier($image_id);
                break;
            case self::ATTRIBUTE:
                $obj = new Attribute($image_id);
                break;
            default:
                break;
        }

        if ($obj) {
            $res = $obj->deleteImage(true);

            if ($res) {
                die($this->jsonEncode(array(
                    self::CODE_RESPONSE => self::SUCCESSFUL,
                    self::KEY_MESSAGE   => 'Image was deleted from FTP Server successfully',
                )));
            } else {
                die($this->jsonEncode(array(
                    self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                    self::KEY_MESSAGE   => 'Image was not deleted from FTP Server',
                )));
            }
        } else {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Image was not deleted from FTP Server',
            )));
        }
    }

    public function deleteFile($filepath)
    {
        if (unlink($filepath)) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::SUCCESSFUL,
                self::KEY_MESSAGE   => 'File was deleted from FTP Server successfully',
            )));
        }

        die($this->jsonEncode(array(
            self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
            self::KEY_MESSAGE   => 'File was not deleted from FTP Server',
        )));
    }

    public function copyImage($entity_type, $from_image_id, $to_image_id)
    {
        $from_image_path = $this->getImage(self::PRODUCT, $from_image_id);

        if (!$from_image_path) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Could not get image to copy',
            )));
        }

        $image_types = array();
        $to_image_path  = '';
        $res         = false;
        $image_ext   = 'jpg';

        switch ($entity_type) {
            case self::PRODUCT:
                // Get image type of products
                $image_types = ImageType::getImagesTypes('products');

                // Get image path to copy
                $to_image = new Image($to_image_id);
                $to_image->id = $to_image_id;
                $to_image_path = $to_image->getPathForCreation();

                // Set $image_id = '' because $image_path already has that value
                $to_image_id = '';
                break;
            default:
                break;
        }

        // Add extra values to create base image
        $image_types[] = array('name' => '', 'width' => false, 'height' => false);

        // Create all images for entity
        foreach ($image_types as $image_type) {
            $image_type['name'] = $this->stripSlashes($image_type['name']);

            if ($image_type['name'] == '') {
                $image_path_name = $to_image_path.$to_image_id.'.'.$image_ext;
            } else {
                $image_path_name = $to_image_path.$to_image_id.'-'.$image_type['name'].'.'.$image_ext;
            }

            $res = ImageManager::resize(
                $from_image_path,
                $image_path_name,
                $image_type['width'],
                $image_type['height'],
                $image_ext
            );
        }

        if (!$res) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'Unable to resize copied image',
            )));
        } else {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::SUCCESSFUL,
                self::KEY_MESSAGE   => 'Image has been copied successfully',
            )));
        }
    }

    public function getFile($folder, $filename)
    {
        return $this->getShopRootDir().'/'.$folder.'/'.$filename;
    }

    public function setFile($folder, $filename, $file)
    {
        $destination_path = $this->getShopRootDir().'/'.$folder.'/'.$filename;
        $result = move_uploaded_file($_FILES[$file]['tmp_name'], $destination_path);

        if ($result) {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::SUCCESSFUL,
                self::KEY_MESSAGE   => 'File was successfully uploaded',
            )));
        } else {
            die($this->jsonEncode(array(
                self::CODE_RESPONSE => self::ERROR_CODE_COMMON,
                self::KEY_MESSAGE   => 'File was not uploaded',
            )));
        }
    }

    public function checkDataChanges($tables_arr = '')
    {
        return $tables_arr;
    }

    public function getNewOrders($order_id = '')
    {
        return $order_id;
    }

    public function clearCache()
    {
        $cache_type = 'smarty';
        $cache_type_pv = $this->getRequestParam('cache_type');

//        if ($this->issetRequestParam('cache_type') && isset($this->getRequestParam('cache_type')[0]))
        if ($cache_type_pv !== false && !empty($cache_type_pv)) {
            $cache_type = (string)$cache_type_pv;
        }

        switch ($cache_type) {
            case 'smarty':
                Tools::clearSmartyCache();
                break;
            case 'xml':
                Tools::clearXMLCache();
                break;
            case 'media':
                Media::clearCache();
                break;
            default:
                break;
        }
    }

    public function strLen($str)
    {
        return Tools::strlen($str);
    }

    public function subStr($str, $start, $length = false)
    {
        return $length ? Tools::substr($str, $start, $length) : Tools::substr($str, $start);
    }

    public function strToLower($str)
    {
        return Tools::strtolower($str);
    }

    public function strToUpper($str)
    {
        return Tools::strtoupper($str);
    }

    public function jsonEncode($arr)
    {
        return Tools::jsonEncode($arr);
    }

    public function stripSlashes($str)
    {
        return Tools::stripslashes($str);
    }

    public function fileGetContents($file)
    {
        return Tools::file_get_contents($file);
    }

    public function filePutContents($path, $content, $mode = null)
    {
        return file_put_contents($path, $content, $mode);
    }

    public function pSQL($data)
    {
        return pSQL($data);
    }

    public function saveConfigData($data)
    {
        Configuration::updateGlobalValue(BridgeConnectorConstants::OPTIONS_KEY, serialize($data));
    }

    public function fileOpen($path, $mode)
    {
        return fopen($path, $mode);
    }

    public function fileClose($resource)
    {
        return fclose($resource);
    }

    public function isReadable($path)
    {
        return is_readable($path);
    }

    public function isWritable($path)
    {
        return is_writable($path);
    }

    public function isDirectory($path)
    {
        return is_dir($path);
    }

    public function isFile($path)
    {
        return is_file($path);
    }

    public function stat($path)
    {
        return stat($path);
    }

    public function search($path, $pattern = '*', $onlyDir = false)
    {
        $data = glob("$path/$pattern");

        if ($onlyDir) {
            $dirs = array();

            foreach ($data as $item) {
                if ($this->isDirectory($item)) {
                    $dirs[] = $item;
                }
            }

            return $dirs;
        }

        return $data;
    }

    public function readDirectory($path)
    {
        return readdir($path);
    }

    public function filemtime($path)
    {
        $data = $this->stat($path);

        if (!$data || !isset($data['size'])) {
            return false;
        }

        return $data['mtime'];
    }

    public function fileSize($path)
    {
        $data = $this->stat($path);

        if (!$data || !isset($data['size'])) {
            return false;
        }

        return $data['size'];
    }

    public function fileExists($path)
    {
        return file_exists($path);
    }

    public function fileWrite($resource, $data)
    {
        return fwrite($resource, $data);
    }

    public function fileRead($resource, $length)
    {
        return fread($resource, $length);
    }

    public function gzFileOpen($path, $mode)
    {
        return gzopen($path, $mode);
    }

    public function gzFileWrite($resource, $data)
    {
        gzwrite($resource, $data);
    }

    public function gzFileClose($resource)
    {
        gzclose($resource);
    }

    public function unlink($path)
    {
        return unlink($path);
    }

    public function createDirectory($path, $permissions)
    {
        return mkdir($path, $permissions);
    }

    public function getParentDirectory($path)
    {
        return dirname($path);
    }

    public function unserialize($data)
    {
        return unserialize($data);
    }

    public function getPaymentAndShippingMethods()
    {
        return false;
    }

    public function getZipArchiveInstance()
    {
        return new ZipArchive();
    }

    public function getZipArchiveCreateValue()
    {
        return ZipArchive::CREATE;
    }
}
