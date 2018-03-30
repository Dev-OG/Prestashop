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
 * Class which has common bridge functionality
 */
class BridgeCommon
{
    private $backup_file_ext = 'sql';
    private $br_errors;
    private $bridge_options;
    private $sql_compatibility;
    private $sql_delimiter = '/*DELIMITER*/';
    private $count_sql_exec_prev = 0;
    /*private $test_result;*/
    private $request_params;
    private $db_tables = array();
    private $log_file_reset = false;
    private $db_file_handler;
    private $shop_cart;
    private $tmp_folder_path;
    private $searched_files = array();
    private $module_version;
    private $revision;
    private $post_replace_from_sm = array('-' => '+', '_' => '/', ',' => '='); /* Replace symbols in chunk */
    private $image_url;
    private $code_response;
    private $key_message;
    private $successful_code;
    private $error_code_common;
    private $key_is_compressed;
    private $key_parts_count;
    private $key_file_size;
    private $key_file_name;
    private $key_checksum;
    private $error_generate_store_file_archive;
    private $dump_data_prev = false;
    private $default_tmp_dir;
    private $dump_file_current;
    private $dump_file_part_number = 1;

    const BRIDGE_COMMON_VERSION              = 4;
    const TEST_POST_STRING                   = '////AjfiIkllsomsdjUNNLkdsuinmJNFIkmsiidmfmiOKSFKMI/////';
    const TEST_OK                            = '<span style="color: #008000;">Ok</span>';
    const TEST_FAIL                          = '<span style="color: #ff0000;">Fail</span>';
    const TEST_YES                           = '<span style="color: #008000;">Yes</span>';
    const TEST_SKIP                          = '<span style="color: #808080;">Test Skipped</span>';
    const TEST_NO                            = '<span style="color: #ff0000;">Fail</span>';
    const QOUTE_CHAR                         = '"';
    const LOG_FILENAME                       = 'bridgeconnector.log';
//    const MODULE_NAME                        = 'bridgeconnector.log';
    const DB_FILE_PREFIX                     = 'm1bridge_';
    const TMP_FILE_PREFIX                    = 'm1bridgetmp_';
    const INTERMEDIATE_FILE_NAME             = 'sm_intermediate.txt';
    const DB_FILE_MAIN                       = 'em1_bridge_db_dump';
    const DB_FILE_COMPRESSION_NO             = 'em1_bridge_db_dump.sql';
    const DB_FILE_COMPRESSION_YES            = 'em1_bridge_db_dump.gz';
    const DB_DATA_TMP                        = 'em1_dump_data_tmp.txt';
    const FILE_TMP_GET_SQL                   = 'em1_tmp_get_sql.txt';
    const FILE_TMP_PUT_SQL                   = 'em1_tmp_put_sql.txt';
    const GET_SQL_CANCEL_MESSAGE             = 'Generating database dump is canceled';
    const GET_SQL_CANCEL_PARAM               = 'get_sql_cancel';
    const GET_SQL_TABLE                      = 'get_sql_table';
    const GET_SQL_PERCENTAGE                 = 'get_sql_percentage';
    const GET_SQL_FILE_PART                  = 'get_sql_file_part';
    const GET_SQL_FILE_PART_NAME             = 'get_sql_file_part_name';
    const GET_SQL_FILE_NAME_GENERATING       = 'get_sql_file_name_generating';
    const FILE_NAME_FILE_LIST                = 'em1_bridge_file_list';
    const FILE_NAME_GET_FILE_LIST_TMP        = 'sm_tmp_get_file_list.txt';
    const KEY_PROCESS_ID                     = 'process_id';
    const DB_FILE_EXT_COMPRESSION_NO         = '.sql';
    const DB_FILE_EXT_COMPRESSION_YES        = '.gz';
    const FILE_EXT_TXT                       = '.txt';
    const FILE_NAME_PART_NUMBER_COUNT_DIGITS = 3;
    const NUMERIC                            = 1;
    const ASSOC                              = 0;
    const PUT_SQL_ENCODED                    = 'base_64_encoded_';
    const SESSION_NAME                       = 'emagicone_bridge';
    /*const UPLOAD_IMAGE_FILE_NAME      = 'image_file';*/
    const UPLOAD_FILE_NAME                   = 'file';
    const FILE_READ_SIZE                     = 102400; /* B */
    const DELAY_TO_GENERATE_DUMP             = 10; /* seconds */

    /* Section of default values which are stored in database */
    const DEFAULT_LOGIN              = '1';
    const DEFAULT_PASSWORD           = '1';
    const DEFAULT_ALLOW_COMPRESSION  = 1;
    const DEFAULT_COMPRESS_LEVEL     = 6;      /* 1 - 9 */
    const DEFAULT_LIMIT_QUERY_SIZE   = 8192;      /* kB */
    const DEFAULT_PACKAGE_SIZE       = 1024;      /* kB */
    const DEFAULT_EXCLUDE_DB_TABLES  = '';
    const DEFAULT_NOTIFICATION_EMAIL = '';
    const DEFAULT_ALLOWED_IPS        = '';
    const MIN_COMPRESS_LEVEL         = 1;
    const MAX_COMPRESS_LEVEL         = 9;
    const MIN_LIMIT_QUERY_SIZE       = 100;    /* kB */
    const MAX_LIMIT_QUERY_SIZE       = 100000;    /* kB */
    const MIN_PACKAGE_SIZE           = 100;    /* kB */
    const MAX_PACKAGE_SIZE           = 30000;    /* kB */

    const MAX_KEY_LIFETIME   = 86400; /* 24 hours */
    const TABLE_SESSION_KEYS = 'bridgeconnector_session_keys';
    const TABLE_FAILED_LOGIN = 'bridgeconnector_failed_login';

    /* an operation was executed successfully */
    /*const SUCCESSFUL = 20;*/

    /* chunk checksum from the store manager and chunk checksum from the bridge file are different */
    const POST_ERROR_CHUNK_CHECKSUM_DIF = 21;

    /* chunk checksums are correct, but some sql code was not executed; has one parameter - an index of sql code
    which was not executed */
    const POST_ERROR_SQL_INDEX = 22;

    const ERROR_CODE_AUTHENTICATION = 25;
    const ERROR_CODE_SESSION_KEY    = 26;
    const ERROR_TEXT_AUTHENTICATION = 'Authentication error';
    const ERROR_TEXT_SESSION_KEY    = 'Session key error';

    /*const CODE_RESPONSE = 'response_code';
    const KEY_MESSAGE   = 'message';*/

    /* It is used to retry putting sql when server is temporary unavailable */
    const MAX_COUNT_ATTEMPT_POST = 3;   /* maximum count of attempts */
    const DELAY_BETWEEN_POST     = 20;  /* delay between attempts (seconds) */

    public function __construct($shop_cart_overrider, $module_version, $revision)
    {
        $this->shop_cart = $shop_cart_overrider;
        $this->default_tmp_dir = '/modules/'.$this->shop_cart->module_name.'/tmp';
//        $this->image_file = $shop_cart_overrider::IMAGE_FILE;
        $this->image_url = $shop_cart_overrider::IMAGE_URL;
        $this->code_response = $shop_cart_overrider::CODE_RESPONSE;
        $this->key_message = $shop_cart_overrider::KEY_MESSAGE;
        $this->successful_code = $shop_cart_overrider::SUCCESSFUL;
        $this->error_code_common = $shop_cart_overrider::ERROR_CODE_COMMON;
        $this->key_is_compressed = $shop_cart_overrider::KEY_IS_COMPRESSED;
        $this->key_parts_count = $shop_cart_overrider::KEY_PARTS_COUNT;
        $this->key_file_size = $shop_cart_overrider::KEY_FILE_SIZE;
        $this->key_file_name = $shop_cart_overrider::KEY_FILE_NAME;
        $this->key_checksum = $shop_cart_overrider::KEY_CHECKSUM;
        $this->error_generate_store_file_archive = $shop_cart_overrider::ERROR_GENERATE_STORE_FILE_ARCHIVE;
        $this->module_version = $module_version;
        $this->revision = $revision;
        $this->getErrors();
        $this->bridge_options = $this->shop_cart->getBridgeOptions();
        $this->tmp_folder_path = $this->shop_cart->getShopRootDir().$this->bridge_options['tmp_dir'];
        $timestamp = time();

        if (!isset($this->bridge_options['last_clear_date'])
            || ($timestamp - (int)$this->bridge_options['last_clear_date']) > self::MAX_KEY_LIFETIME
        ) {
            $this->clearOldData();
            $this->bridge_options['last_clear_date'] = $timestamp;
            $this->shop_cart->saveConfigData($this->bridge_options);
        }

        $this->checkBridgeOptions();

        if (!$this->shop_cart->issetRequestParam('task')) {
            $this->runSelfTest();
        }

        if (!$this->shop_cart->isModuleEnabled()) {
            $this->generateError($this->br_errors['module_disabled']);
        }

        $this->checkAuth();

        if ($this->shop_cart->issetRequestParam('task')) {
            $this->bridgeAction();
        } else {
            $this->deleteSessionKey();
            die($this->shop_cart->jsonEncode(array(
                $this->code_response => $this->error_code_common,
                $this->key_message   => 'Missing parameters',
            )));
        }
    }

    private function getErrors()
    {
        $this->br_errors = array(
            'authentification' => "BridgeConnector (v.{$this->module_version}): Authentication Error",
            'create_tmp_file' => "BridgeConnector (v.{$this->module_version}): Can't Create Temporary File",
            'open_tmp_file' => "BridgeConnector (v.{$this->module_version}): Can't Open Temporary File",
            'not_writeable_dir' => "BridgeConnector (v.{$this->module_version}): Temporary Directory specified in
                BridgeConnector settings doesn't exist or is not writeable",
            'temporary_file_exist_not' => "BridgeConnector (v.{$this->module_version}): Temporary File doesn't exist",
            'temporary_file_readable_not' => "BridgeConnector (v.{$this->module_version}): Temporary File isn't
                readable",
            'file_uid_mismatch' => "BridgeConnector (v.{$this->module_version}): SAFE MODE Restriction in effect.
                The script uid is not allowed to access tmp folder owned by other uid. If you don't understand this
                error, please contact your hosting provider for help",
            'open_basedir' => "BridgeConnector (v.{$this->module_version}): Please create local Temporary Directory,
                see \$temporary_dir variable in bridge.php",
            'checksum_dif' => 'Checksums are different',
            'ip_check' => "BridgeConnector (v.{$this->module_version}): Add your IP to allowed list to run bridge,
                please",
            'module_disabled' => 'Module is disabled',
            'filename_param_missing' => 'Request parameter "filename" is missing',
            'position_param_missing' => 'Request parameter "position" is missing',
            'sql_param_missing' => 'Request parameter "sql" is missing',
            'category_param_missing' => 'Request parameter "category" is missing',
            'searchpath_param_missing' => 'Request parameter "search_path" is missing',
            'varsmaindir_param_missing' => 'Request parameter "vars_main_dir" is missing',
            'varsnames_param_missing' => 'Request parameter "vars_names" is missing',
            'xmlpath_param_missing' => 'Request parameter "xml_path" is missing',
            'xmlfields_param_missing' => 'Request parameter "xml_fields" is missing',
            'xmlitemsnode_param_missing' => 'Request parameter "xml_items_node" is missing',
            'xmlitemsinfonode_param_missing' => 'Request parameter "xml_items_info_node" is missing',
            'tablename_param_missing' => 'Request parameter "table_name" is missing',
            'orderid_param_missing' => 'Request parameter "order_id" is missing',
            'entitytype_param_missing' => 'Request parameter "entity_type" is missing',
            'imageid_param_missing' => 'Request parameter "image_id" is missing',
            'toimageid_param_missing' => 'Request parameter "to_image_id" is missing',
            'path_param_missing' => 'Request parameter "path" is missing',
            'searchpath_param_empty' => 'Request parameter "search_path" is empty',
            'varsmaindir_param_empty' => 'Request parameter "vars_main_dir" is empty',
            'varsnames_param_empty' => 'Request parameter "vars_names" is empty',
            'xmlpath_param_empty' => 'Request parameter "xml_path" is empty',
            'xmlfields_param_empty' => 'Request parameter "xml_fields" is empty',
            'xmlitemsnode_param_empty' => 'Request parameter "xml_items_node" is empty',
            'xmlitemsinfonode_param_empty' => 'Request parameter "xml_items_info_node" is empty',
            'tablename_param_empty' => 'Request parameter "table_name" is empty',
            'entitytype_param_empty' => 'Request parameter "entity_type" is empty',
            'imageurl_param_empty' => 'Request parameter "image_url" is empty',
            'key_param_empty' => 'Request parameter "key" is empty',
            'hash_param_empty' => 'Request parameter "hash" is empty',
            'filename_param_empty' => 'Request parameter "filename" is empty',
            'path_param_empty' => 'Request parameter "path" is empty',
            'category_param_empty' => 'Request parameter "category" is empty',
            'orderid_param_incorrect' => 'Request parameter "order_id" is incorrect',
            'imageid_param_incorrect' => 'Request parameter "image_id" is incorrect',
            'toimageid_param_incorrect' => 'Request parameter "to_image_id" is incorrect',
            'upload_file_error' => 'Some error occurs uploading file into temporary server folder',
            'delete_file_error' => 'No such file',
            'zip_archive_not_supported' => 'ZipArchive is supported in php version >= 5.2.0',
            'zip_not_loaded' => 'Zip extension not loaded',
            'cannot_archive_files' => 'Cannot archive files',
        );
    }

    private function checkBridgeOptions()
    {
        if (!isset($this->bridge_options['tmp_dir'])) {
            $this->bridge_options['tmp_dir'] = $this->default_tmp_dir;
        }

        if (!isset($this->bridge_options['bridge_hash'])) {
            $this->bridge_options['bridge_hash'] = '';
        }

        if (!isset($this->bridge_options['allow_compression'])) {
            $this->bridge_options['allow_compression'] = self::DEFAULT_ALLOW_COMPRESSION;
        } else {
            $this->bridge_options['allow_compression'] = (int)$this->bridge_options['allow_compression'];
        }

        if (!isset($this->bridge_options['limit_query_size'])) {
            $this->bridge_options['limit_query_size'] = self::DEFAULT_LIMIT_QUERY_SIZE;
        } elseif ((int)$this->bridge_options['limit_query_size'] < self::MIN_LIMIT_QUERY_SIZE) {
            $this->bridge_options['limit_query_size'] = self::MIN_LIMIT_QUERY_SIZE;
        } elseif ((int)$this->bridge_options['limit_query_size'] > self::MAX_LIMIT_QUERY_SIZE) {
            $this->bridge_options['limit_query_size'] = self::MAX_LIMIT_QUERY_SIZE;
        } else {
            $this->bridge_options['limit_query_size'] = (int)$this->bridge_options['limit_query_size'];
        }

        if (!isset($this->bridge_options['package_size'])) {
            $this->bridge_options['package_size'] = self::DEFAULT_PACKAGE_SIZE * 1024; // B
        } elseif ((int)$this->bridge_options['package_size'] < self::MIN_PACKAGE_SIZE) {
            $this->bridge_options['package_size'] = self::MIN_PACKAGE_SIZE * 1024;
        } elseif ((int)$this->bridge_options['package_size'] > self::MAX_PACKAGE_SIZE) {
            $this->bridge_options['package_size'] = self::MAX_PACKAGE_SIZE * 1024;
        } else {
            $this->bridge_options['package_size'] = (int)$this->bridge_options['package_size'] * 1024;
        }

        if (!isset($this->bridge_options['exclude_db_tables'])) {
            $this->bridge_options['exclude_db_tables'] = self::DEFAULT_EXCLUDE_DB_TABLES;
        }

        if (!isset($this->bridge_options['notification_email'])) {
            $this->bridge_options['notification_email'] = self::DEFAULT_NOTIFICATION_EMAIL;
        }

        // Values of $compress_level between 1 and 9 will trade off speed and efficiency, and the default is 6.
        // The 1 flag means "fast but less efficient" compression, and 9 means "slow but most efficient" compression.
        if (!isset($this->bridge_options['compress_level'])) {
            $this->bridge_options['compress_level'] = self::DEFAULT_COMPRESS_LEVEL;
        } elseif ((int)$this->bridge_options['compress_level'] < self::MIN_COMPRESS_LEVEL) {
            $this->bridge_options['compress_level'] = self::MIN_COMPRESS_LEVEL;
        } elseif ((int)$this->bridge_options['compress_level'] > self::MAX_COMPRESS_LEVEL) {
            $this->bridge_options['compress_level'] = self::MAX_COMPRESS_LEVEL;
        } else {
            $this->bridge_options['compress_level'] = (int)$this->bridge_options['compress_level'];
        }

        if (!isset($this->bridge_options['allowed_ips'])) {
            $this->bridge_options['allowed_ips'] = self::DEFAULT_ALLOWED_IPS;
        }
    }

    private function checkAuth()
    {
        if ($this->shop_cart->issetRequestParam('key')) {
            $key = (string)$this->shop_cart->getRequestParam('key');

            if (empty($key)) {
                $this->addFailedAttempt();
                $this->generateError($this->br_errors['key_param_empty']);
            }

            if (!$this->isSessionKeyValid($key)) {
                $this->addFailedAttempt();
                die($this->shop_cart->jsonEncode(
                    array(
                        $this->code_response => self::ERROR_CODE_SESSION_KEY,
                        $this->key_message   => self::ERROR_TEXT_SESSION_KEY,
                    )
                ));
            }
        } elseif ($this->shop_cart->issetRequestParam('hash')) {
            $hash = (string)$this->shop_cart->getRequestParam('hash');

            if (empty($hash)) {
                $this->addFailedAttempt();
                $this->generateError($this->br_errors['hash_param_empty']);
            }

            if (!$this->isHashValid($hash)) {
                $this->addFailedAttempt();
                die($this->shop_cart->jsonEncode(
                    array(
                        $this->code_response => self::ERROR_CODE_AUTHENTICATION,
                        $this->key_message   => self::ERROR_TEXT_AUTHENTICATION,
                    )
                ));
            }

            $key = $this->generateSessionKey($hash);

            if ($this->shop_cart->issetRequestParam('task')) {
                $task = $this->shop_cart->getRequestParam('task');

                if ($task == 'get_version') {
                    die($this->shop_cart->jsonEncode(
                        array(
                            $this->code_response => $this->successful_code,
                            'revision'          => $this->revision,
                            'module_version'    => $this->module_version,
                            'session_key'       => $key,
                        )
                    ));
                }
            }

            die($this->shop_cart->jsonEncode(
                array(
                    $this->code_response => $this->successful_code,
                    'session_key'       => $key,
                )
            ));
        } else {
            $this->addFailedAttempt();
            die($this->shop_cart->jsonEncode(
                array(
                    $this->code_response => self::ERROR_CODE_AUTHENTICATION,
                    $this->key_message   => self::ERROR_TEXT_AUTHENTICATION,
                )
            ));
        }
    }

    private function isHashValid($hash)
    {
        if ($this->bridge_options['bridge_hash'] != $hash) {
//        {
//            if (isset($this->bridge_options['notification_email']{0}) && function_exists('mail'))
//                call_user_func(
//                    'mail',
//                    $this->bridge_options['notification_email'],
//                    '[Bridgeconnector] Bad authentification try',
//                    'Bad login or password was used to login into Bridgeconnector from '.$_SERVER['REMOTE_ADDR']
//                );

            return false;
        }

        return true;
    }

    private function bridgeAction()
    {
        $this->checkDataBeforeRun();

        // Disabling magic quotes at runtime
        if (get_magic_quotes_runtime() || get_magic_quotes_gpc()) {
            $_REQUEST = array_map(array($this, 'stripslashesDeep'), $_REQUEST);
//            $_POST    = array_map(array($this, 'stripslashesDeep'), $_POST);
//            $_GET     = array_map(array($this, 'stripslashesDeep'), $_GET);
//            $_COOKIE  = array_map(array($this, 'stripslashesDeep'), $_COOKIE);
        }

        $this->request_params = $this->validateTypes(
            $_REQUEST,
            array(
                'task'                => 'STR',
                'category'            => 'STR',
                'include_tables'      => 'STR',
                'sql'                 => 'STR',
                'filename'            => 'STR',
                'position'            => 'INT',
                'vars_names'          => 'STR',
                'vars_main_dir'       => 'STR',
                'xml_path'            => 'STR',
                'xml_fields'          => 'STR',
                'xml_items_node'      => 'STR',
                'xml_items_info_node' => 'STR',
                'xml_filters'         => 'STR',
                'search_path'         => 'STR',
                'mask'                => 'STR',
                'ignore_dir'          => 'STR',
                'checksum_sm'         => 'STR',
                'fc'                  => 'STR',
                'module'              => 'STR',
                'controller'          => 'STR',
                'hash'                => 'STR',
                'entity_type'         => 'STR',
                'image_id'            => 'STR',
                'to_image_id'         => 'INT',
            )
        );

        switch ($this->request_params['task']) {
            case 'get_sql':
                $this->getDbDump();
                break;
            case 'get_sql_file':
                $this->getDbFile();
                break;
            case 'put_sql':
                $this->putSql();
                break;
            case 'get_version':
                $this->getModuleVersion();
                break;
            case 'get_config':
                $this->getConfig();
                break;
            case 'get_category_tree':
                $this->getCategoryTree(); // For store diagnostics
                break;
            case 'run_indexer':
                $this->runIndexer();
                break;
            case 'get_var_from_script':
                $this->getVars();
                break;
            case 'get_xml_data':
                $this->getXmlData();
                break;
            case 'get_ftp_files':
                $this->getFtpFiles();
                break;
            case 'get_file_list':
                $this->getFileList();
                break;
            case 'get_cart_version':
                $this->getCartVersion();
                break;
            case 'check_data_changes':
                $this->checkDataChanges();
                break;
            case 'get_new_orders':
                $this->getNewOrders();
                break;
            case 'get_sql_cancel':
                $this->createDbDumpCancel();
                break;
            case 'get_sql_progress':
                $this->createDbDumpProgress();
                break;
            case 'get_sql_file_part_info':
                $this->getSqlFilePartInfo();
                break;
            case 'get_image':
                $this->getImage();
                break;
            case 'set_image':
                $this->setImage();
                break;
            case 'delete_image':
                $this->deleteImage();
                break;
            case 'delete_file':
                $this->deleteFile();
                break;
            case 'copy_image':
                $this->copyImage();
                break;
            case 'get_file':
                $this->getFile();
                break;
            case 'set_file':
                $this->setFile();
                break;
            case 'get_cache':
                $this->getCache();
                break;
            case 'clear_cache':
                $this->clearCache();
                break;
            case 'get_payment_and_shipping_methods':
                $this->getPaymentAndShippingMethods();
                break;
            case 'get_store_file_archive':
                $this->getStoreFileArchive();
                break;
            default:
                $this->deleteSessionKey();
                break;
        }

        die();
    }

    private function stripslashesDeep($value)
    {
        $value = is_array($value)
            ? array_map(array($this, 'stripslashesDeep'), $value)
            : $this->shop_cart->stripSlashes($value);

        return $value;
    }

    private function checkDataBeforeRun()
    {
        if (!$this->checkAllowedIp()) {
            $this->generateError($this->br_errors['ip_check']);
        }

        if (!ini_get('date.timezone') || ini_get('date.timezone' == '')) {
            date_default_timezone_set(date_default_timezone_get());
        }

        if ($this->shop_cart->issetRequestParam('sql_compatibility')) {
            $this->sql_compatibility = $this->shop_cart->getRequestParam('sql_compatibility');
        }

        if ($this->shop_cart->issetRequestParam('sql_delimiter')) {
            $this->sql_delimiter = $this->shop_cart->getRequestParam('sql_delimiter');
        }

        if (!(function_exists('gzopen')
            && function_exists('gzread')
            && function_exists('gzwrite')
            && function_exists('gzclose'))
        ) {
            $this->bridge_options['allow_compression'] = 0;
        }

        // Detecting open_basedir - required for temporary file storage
        if (ini_get('open_basedir') && null == $this->bridge_options['tmp_dir']) {
            $this->generateError($this->br_errors['open_basedir']);
        }

        // checking temporary directory
        if (!$this->shop_cart->isDirectory($this->tmp_folder_path)
            || !$this->shop_cart->isWritable($this->tmp_folder_path)
        ) {
            $this->generateError($this->br_errors['not_writeable_dir']);
        }

        $tmp_file_stat = $this->shop_cart->stat($this->tmp_folder_path);
        if (function_exists('getmyuid') && (ini_get('safe_mode') && getmyuid() != (int)$tmp_file_stat['uid'])) {
            $this->generateError($this->br_errors['file_uid_mismatch']);
        }

        if ($this->shop_cart->getRequestParam('task') == 'test_post') {
            die(self::TEST_POST_STRING);
        }
    }

    private function validateTypes(&$array, $names)
    {
        foreach ($names as $name => $type) {
            if (isset($array[$name])) {
                switch ($type) {
                    case 'INT':
                        $array[$name] = (int)$array[$name];
                        break;
                    case 'FLOAT':
                        $array[$name] = (float)$array[$name];
                        break;
                    case 'STR':
                        $array[$name] = str_replace(
                            array("\r", "\n"),
                            ' ',
                            addslashes(htmlspecialchars(trim(urldecode($array[$name]))))
                        );
                        break;
                    case 'STR_HTML':
                        $array[$name] = addslashes(trim(urldecode($array[$name])));
                        break;
                    default:
                        $array[$name] = '';
                }
            } else {
                $array[$name] = '';
            }
        }

        $array_keys = array_keys($array);

        foreach ($array_keys as $key) {
            if (!$this->shop_cart->issetRequestParam($key) && $key != 'hash') {
                $array[$key] = '';
            }
        }

        return $array;
    }

    private function checkAllowedIp()
    {
        if (!empty($this->bridge_options['allowed_ips'])) {
            $allowed_ips = explode(',', $this->bridge_options['allowed_ips']);
            $ip_allowed = false;

            foreach ($allowed_ips as $ip) {
                $ip = trim($ip);
                $str_without_x = $ip;

                if (strpos($ip, 'x') !== false) {
                    $str_without_x = $this->shop_cart->subStr($ip, 0, strpos($ip, 'x'));
                }

                if ($this->checkIp($str_without_x) === true) {
                    $ip_allowed = true;
                    break;
                }
            }

            return $ip_allowed;
        } else {
            return true;
        }
    }

    private function checkIp($ip)
    {
        if (strpos($_SERVER['REMOTE_ADDR'], $ip) === 0) {
            return true;
        }

        return false;
    }

    /**
     * Generate database dump
     */
    private function getDbDump()
    {
        $this->dump_data_prev = $this->getDumpData();

        if (!$this->dump_data_prev) {
            $this->setGeneratingDumpValue(
                array(
                    self::GET_SQL_CANCEL_PARAM => 0,
                    self::GET_SQL_TABLE        => '',
                    self::GET_SQL_PERCENTAGE   => 0,
                    self::GET_SQL_FILE_PART    => 0
                )
            );
        } else {
            if ($this->isDumpGenerating()) {
                die('Dump is being generated. Could not run next attempt');
            }

            $this->log_file_reset = true;
        }

        $this->putLog('Initializing');

        // Delete old files, create new and open it for putting data
        $this->openDbFile();

        // Generate database dump
        $this->createDump();

        $this->setGeneratingDumpValue(
            array(self::GET_SQL_CANCEL_PARAM => 0, self::GET_SQL_TABLE => '', self::GET_SQL_PERCENTAGE => 0)
        );

        // Output generated database dump information
        $this->downloadDump($this->dump_file_current, $this->bridge_options['allow_compression']);
    }

    private function getDumpData()
    {
//        $content = false;
        $file_with_prev_data    = $this->tmp_folder_path.'/'.self::DB_DATA_TMP;
//        $file_db = $this->tmp_folder_path.'/'.self::DB_FILE_COMPRESSION_NO;

        if ($this->shop_cart->fileExists($file_with_prev_data)) {
            $content = $this->shop_cart->fileGetContents($file_with_prev_data);
            $content = $this->shop_cart->unserialize($content);

            if (isset($content[self::GET_SQL_FILE_NAME_GENERATING])) {
                $file_db_prev = $this->tmp_folder_path.'/'.$content[GET_SQL_FILE_NAME_GENERATING];

                if (file_exists($file_db_prev) && (time() - $this->shop_cart->filemtime($file_db_prev)) > 600) {
                    $this->shop_cart->unlink($file_db_prev);
                    return false;
                } elseif (!file_exists($file_db_prev)) {
                    return false;
                }

                return $content;
            }

            /*if ($this->shop_cart->fileExists($file_db) && (time() - $this->shop_cart->filemtime($file_db)) > 600) {
                $this->shop_cart->unlink($file_db);
                return false;
            } elseif (!$this->shop_cart->fileExists($file_db)) {
                return false;
            } else {
                $content = $this->shop_cart->fileGetContents($file);
                $content = $this->shop_cart->unserialize($content);
            }*/
        }

//        return $content;
        return false;
    }

    private function isDumpGenerating()
    {
        $file = $this->tmp_folder_path.'/'.self::LOG_FILENAME;

        if ($this->shop_cart->fileExists($file)) {
            $checksum_prev = md5_file($file);
            sleep(self::DELAY_TO_GENERATE_DUMP);

            if ($checksum_prev != md5_file($file)) {
                return true;
            }
        }

        return false;
    }

    private function setGeneratingDumpValue($arr)
    {
        if (!is_array($arr)) {
            $arr = array($arr);
        }

        $file_data = $this->getGeneratingDumpValueFromFile();

        foreach ($arr as $key => $value) {
            $file_data[$key] = $value;
        }

        $this->shop_cart->filePutContents($this->tmp_folder_path.'/'.self::FILE_TMP_GET_SQL, serialize($file_data));
    }

    private function getGeneratingDumpValue($name)
    {
        $ret    = false;
        $values = $this->getGeneratingDumpValueFromFile();

        if (is_array($name)) {
            $ret = array();

            foreach ($name as $val) {
                if (isset($values[$val])) {
                    $ret[$val] = $values[$val];
                } else {
                    $ret[$val] = '';
                }
            }
        } elseif (isset($values[$name])) {
            $ret = $values[$name];
        }

        return $ret;
    }

    private function getGeneratingDumpValueFromFile()
    {
        $ret = array();
        $file = $this->tmp_folder_path.'/'.self::FILE_TMP_GET_SQL;

        if ($this->shop_cart->fileExists($file)) {
            $content = $this->shop_cart->fileGetContents($file);
            $ret     = $this->shop_cart->unserialize($content);
        }

        return $ret;
    }

    private function getPartNumber($number)
    {
        return str_pad($number, self::FILE_NAME_PART_NUMBER_COUNT_DIGITS, '0', STR_PAD_LEFT);
    }

    private function openDbFile()
    {
        if ($this->bridge_options['allow_compression']) {
            $this->backup_file_ext = 'gz';
        }

        $this->putLog('Creating backup file');
        $this->dump_file_current = self::DB_FILE_MAIN.$this->getPartNumber($this->dump_file_part_number)
            .self::DB_FILE_EXT_COMPRESSION_NO;
//        $this->db_file_handler = fopen($this->tmp_folder_path.'/'.self::DB_FILE_COMPRESSION_NO, 'ab');
        $this->db_file_handler = $this->shop_cart->fileOpen($this->tmp_folder_path.'/'.$this->dump_file_current, 'ab');
    }

    private function createDump()
    {
        $tabinfo        = array();
        $table_sizes    = array();
        $handled_tables = array();
        $tabsize        = array();
        $tabinfo[0]     = 0;
        $db_size        = 0;
        $t              = 0;
        $continue       = false;

        // Get information about all tables
        $this->getTables();

        $result = $this->shop_cart->getSqlResults('SHOW TABLE STATUS');

        if (!$result) {
            $this->generateError(
                'Error selecting table status. Error: '.$this->shop_cart->error_no.'; '.$this->shop_cart->error_msg
            );
        }

        foreach ($result as $item) {
            if (in_array($item['Name'], $this->db_tables)) {
                $item['Rows'] = empty($item['Rows']) ? 0 : $item['Rows'];
                $tabinfo[0] += $item['Rows'];
                $tabinfo[$item['Name']] = $item['Rows'];
                $tabsize[$item['Name']] = 1
                    + round($this->bridge_options['limit_query_size'] * 1024 / ($item['Avg_row_length'] + 1));
                $table_sizes[$item['Name']]['size'] = $item['Data_length'] + $item['Index_length'];
                $table_sizes[$item['Name']]['rows'] = $item['Rows'];
                $db_size += $item['Data_length'] + $item['Index_length'];
            }
        }

        if (!$this->dump_data_prev) {
            $result = $this->shop_cart->getSqlResults(
                "SELECT DEFAULT_CHARACTER_SET_NAME AS charset FROM information_schema.SCHEMATA WHERE SCHEMA_NAME = '"
                .$this->shop_cart->getDbName()."'"
            );

            if (!$result) {
                $this->generateError(
                    "Error selecting database charset. Error: {$this->shop_cart->error_no};
                    {$this->shop_cart->error_msg}"
                );
            }

            $row = array_shift($result);
            $this->dbFileWrite("ALTER DATABASE CHARACTER SET '{$row['charset']}';\nSET NAMES 'utf8';\n\n");
        }

        $this->shop_cart->execSql('SET SQL_QUOTE_SHOW_CREATE = 1');

        // Form database dump file
        foreach ($this->db_tables as $table) {
            if ($this->dump_data_prev) {
                if ($this->dump_data_prev['table'] == $table) {
                    $this->putLog('Next attempt of generating dump');
                    $continue = true;
                } elseif (!$continue) {
                    $handled_tables[] = $table;
                    continue;
                }
            }

            if (!$this->dump_data_prev || $this->dump_data_prev['table'] != $table) {
                $this->putLog("Handling table `{$table}` [".$this->getFormatedIntNumber($tabinfo[$table]).'].');
            }

            $table_empty = true;
            $result = $this->shop_cart->getSqlResults("SHOW CREATE TABLE `{$table}`", self::NUMERIC);

            if ($result === false) {
                $this->generateError(
                    'Error selecting table structure. Error: '.$this->shop_cart->error_no.'; '
                    .$this->shop_cart->error_msg
                );
            }

            $tab = array_shift($result);
            $tab = preg_replace(
                '/(default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP|collate \w+)/i',
                '/*!40101 \\1 */',
                $tab
            );
            $this->dbFileWrite("DROP TABLE IF EXISTS `{$table}`;\n{$tab[1]};\n\n");

            $numeric_column = array();
            $result = $this->shop_cart->getSqlResults("SHOW COLUMNS FROM `{$table}`", self::NUMERIC);

            if ($result === false) {
                $this->generateError(
                    'Error selecting table columns. Error: '.$this->shop_cart->error_no.'; '
                    .$this->shop_cart->error_msg
                );
            }

            $field = 0;

            foreach ($result as $col) {
                $numeric_column[$field ++] = preg_match('/^(\w*int|year)/', $col[1]) ? 1 : 0;
            }

            if ($this->dump_data_prev && $this->dump_data_prev['table'] == $table) {
                $from = $this->dump_data_prev['from'];
            } else {
                $from = 0;
            }

            $fields = $field;
            $limit  = $tabsize[$table];
            $i      = 0;
            $query  = "SELECT * FROM `{$table}` LIMIT {$from}, {$limit}";
            $result = $this->shop_cart->getSqlResults($query, self::NUMERIC);

            if ($result === false) {
                $this->generateError(
                    "Error selecting data from table `{$table}`. Error: ".$this->shop_cart->error_no.'; '
                    .$this->shop_cart->error_msg
                );
            }

            $count_result = count($result);

            if ($count_result > 0) {
                $this->dbFileWrite("INSERT INTO `{$table}` VALUES");
            }

            while ($result && $count_result > 0) {
                $table_empty = false;
                $this->putLog('-'.$query);

                foreach ($result as $row) {
                    $i ++;
                    $t ++;

                    for ($k = 0; $k < $fields; $k ++) {
                        if ($numeric_column[$k]) {
                            $row[$k] = isset($row[$k]) ? $row[$k] : 'NULL';
                        } else {
                            if (isset($row[$k])) {
                                $row[$k] = ' '.self::QOUTE_CHAR.$this->shop_cart->sanitizeSql($row[$k])
                                    .self::QOUTE_CHAR.' ';
                            } else {
                                $row[$k] = 'NULL';
                            }
                        }
                    }

                    $row_ex = ',';

                    if ($i == 1) {
                        $row_ex = '';
                    }

                    if ($i % 500 == 0 && $i > 0) {
                        $this->dbFileWrite(";\nINSERT INTO `{$table}` VALUES");
                        $row_ex = '';
                    }

                    $this->dbFileWrite($row_ex."\n(".implode(', ', $row).')');
                }

                // Set data of generating database dump progress
                $this->setCreateDbDumpProgress($handled_tables, $table_sizes, $table, $from, $db_size);

                $this->putDumpData($table, $from + $limit);

                // Check if generating database dump should be canceled
                if ($this->getGeneratingDumpValue(self::GET_SQL_CANCEL_PARAM)) {
                    $this->putLog(self::GET_SQL_CANCEL_PARAM);
                    $path_sm_tmp_get_sql_txt = $this->tmp_folder_path.'/'.self::FILE_TMP_GET_SQL;
                    $path_dump_data_tmp_txt = $this->tmp_folder_path.'/'.self::DB_DATA_TMP;
                    $path_em1_bridge_db_dump_sql = $this->tmp_folder_path.'/'.self::DB_FILE_COMPRESSION_NO;

                    if ($this->shop_cart->fileExists($path_sm_tmp_get_sql_txt)) {
                        $this->shop_cart->unlink($path_sm_tmp_get_sql_txt);
                    }

                    if ($this->shop_cart->fileExists($path_dump_data_tmp_txt)) {
                        $this->shop_cart->unlink($path_dump_data_tmp_txt);
                    }

                    if ($this->shop_cart->fileExists($path_em1_bridge_db_dump_sql)) {
                        $this->dbFileClose();
                        $this->shop_cart->unlink($path_em1_bridge_db_dump_sql);
                    }

                    die(self::GET_SQL_CANCEL_MESSAGE);
                }

                // If store manager needs to get part of dump
                if ($this->getGeneratingDumpValue(self::GET_SQL_FILE_PART)) {
                    $this->dbFileClose();
                    $this->generateArchive();
                    $this->setGeneratingDumpValue(
                        array(
                            self::GET_SQL_FILE_PART_NAME => $this->dump_file_current,
                            self::GET_SQL_FILE_PART      => 0
                        )
                    );
                    $this->dump_file_part_number++;
                    $this->openDbFile();
                }

                if ($count_result < $limit) {
                    break;
                }

                $from  += $limit;
                $query  = "SELECT * FROM {$table} LIMIT {$from}, {$limit}";
                $result = $this->shop_cart->getSqlResults($query, self::NUMERIC);

                if ($result === false) {
                    $this->generateError(
                        "Error selecting data from table `{$table}`. Error: ".$this->shop_cart->error_no.'; '
                        .$this->shop_cart->error_msg
                    );
                }

                $count_result = count($result);
            }

            // Add table to array of processed tables
            $handled_tables[] = $table;

            if (!$table_empty) {
                $this->dbFileWrite(';');
            }

            $this->dbFileWrite("\n\n");
        }

        // Close database dump file
        $this->dbFileClose();
        $this->generateArchive();
    }

    private function generateArchive()
    {
        if ($this->bridge_options['allow_compression']) {
//            $fname_gz_path = $this->tmp_folder_path.'/'.self::DB_FILE_COMPRESSION_YES;
            $file_gz = self::DB_FILE_MAIN.$this->getPartNumber($this->dump_file_part_number)
                .self::DB_FILE_EXT_COMPRESSION_YES;
            $fname_gz_path = $this->tmp_folder_path."/$file_gz";
            $fp_gz = $this->shop_cart->gzFileOpen($fname_gz_path, "wb{$this->bridge_options['compress_level']}");

            $fname_path = $this->tmp_folder_path."/$this->dump_file_current";
            $fp = $this->shop_cart->fileOpen($fname_path, 'r');

            if ($fp_gz && $fp) {
                while (!feof($fp)) {
                    $content = $this->shop_cart->fileRead($fp, $this->bridge_options['package_size']);
                    $this->shop_cart->gzFileWrite($fp_gz, $content);
                }

                $this->shop_cart->fileClose($fp);
                $this->shop_cart->unlink($fname_path);
                $this->shop_cart->fileClose($fp_gz);
                $this->dump_file_current = $file_gz;
            }
        }
    }

    private function generateArchiveByFile($fromFile, $toFile)
    {
        $fp_gz = $this->shop_cart->gzFileOpen($toFile, "wb{$this->bridge_options['compress_level']}");
        $fp = $this->shop_cart->fileOpen($fromFile, 'r');

        if ($fp_gz && $fp) {
            while (!feof($fp)) {
                $content = $this->shop_cart->fileRead($fp, $this->bridge_options['package_size']);
                $this->shop_cart->gzFileWrite($fp_gz, $content);
            }

            $this->shop_cart->fileClose($fp);
            $this->shop_cart->unlink($fromFile);

            $this->shop_cart->fileClose($fp_gz);
        }
    }

    private function putDumpData($table, $from)
    {
        $data = array(
            'table' => $table,
            'from' => $from,
            self::GET_SQL_FILE_NAME_GENERATING => $this->dump_file_current
        );

        $this->shop_cart->filePutContents($this->tmp_folder_path.'/'.self::DB_DATA_TMP, serialize($data));
    }

    private function getTables()
    {
        $this->putLog('Selecting tables');
        $result = $this->shop_cart->getSqlResults(
            'SHOW FULL TABLES FROM `'.$this->shop_cart->getDbName()."` WHERE Table_type = 'BASE TABLE'",
            self::NUMERIC
        );

        if ($result === false) {
            $this->generateError(
                'Error selecting tables. Error: '.$this->shop_cart->error_no.'; '.$this->shop_cart->error_msg
            );
        }

        $quoted_tbls = array();
        if (isset($this->bridge_options['exclude_db_tables']{0})) {
            $arr_exclude_db_tables = explode(';', $this->bridge_options['exclude_db_tables']);
            $count = count($arr_exclude_db_tables);

            for ($i = 0; $i < $count; $i++) {
                $arr_exclude_db_tables[$i] = preg_quote($arr_exclude_db_tables[$i], '/');
                $arr_exclude_db_tables[$i] = str_replace('\*', '.*', $arr_exclude_db_tables[$i]);
                $arr_exclude_db_tables[$i] = str_replace('\?', '?', $arr_exclude_db_tables[$i]);
                $quoted_tbls[] = "^$arr_exclude_db_tables[$i]$";
            }
        }
        $tables_exclude_pattern = implode('|', $quoted_tbls);

        $quoted_tbls = array();
        if (isset($this->request_params['include_tables']{0})) {
            $arr_include_db_tables = explode(';', $this->request_params['include_tables']);
            $count = count($arr_include_db_tables);

            for ($i = 0; $i < $count; $i++) {
                $arr_include_db_tables[$i] = preg_quote($arr_include_db_tables[$i], '/');
                $arr_include_db_tables[$i] = str_replace('\*', '.*', $arr_include_db_tables[$i]);
                $arr_include_db_tables[$i] = str_replace('\?', '?', $arr_include_db_tables[$i]);
                $quoted_tbls[] = '^'.$this->shop_cart->getDbPrefix()."$arr_include_db_tables[$i]$";
            }
            $quoted_tbls[] = '^sm_.*$';
        }
        $tables_include_pattern = implode('|', $quoted_tbls);

        $tables = array();
        $inc_tables = 0;
        foreach ($result as $table) {
            if (preg_match("/$tables_include_pattern/", $table[0])) {
                $inc_tables++;
            }

            $tables[] = $table[0];
        }

        $count = count($tables);
        for ($i = 0; $i < $count; $i++) {
            if (!empty($tables_exclude_pattern) && preg_match("/$tables_exclude_pattern/", $tables[$i])) {
                continue;
            }

            if (preg_match("/$tables_include_pattern/", $tables[$i]) || $inc_tables == 0) {
                $this->db_tables[] = $tables[$i];
            }
        }
    }

    /*    private function wakeServer()
        {
            $curr_time = time();

             Check if it needs to output string
            if ($curr_time - $this->i_curr_time > self::I_TIME_OUT)
            {
                echo self::S_UNIQ_DEL;
                $this->flushBuffers();
                $this->i_curr_time = $curr_time;
                $this->ping_count ++;
            }
        }*/

    /*private function flushBuffers()
    {
        ob_end_flush();
        ob_flush();
        flush();
        ob_start();
    }*/

    private function dbFileWrite($str)
    {
        if ($this->bridge_options['allow_compression']) {
            $this->shop_cart->gzFileWrite($this->db_file_handler, $str);
        } else {
            $this->shop_cart->fileWrite($this->db_file_handler, $str);
        }
    }

    private function dbFileClose()
    {
//        if ($this->bridge_options['allow_compression'])
//            gzclose($this->db_file_handler);
//        else
        $this->shop_cart->fileClose($this->db_file_handler);
    }

    /**
     * Set table name and percentage of processed data in session
     * @param array $handled_tables
     * Array of processed tables
     * @param array $table_sizes
     * Information about size of each table
     * @param string $handling_table
     * Table name which is being processing at the moment
     * @param int $handled_rows
     * Count of processed rows in table name which is being processing at the moment
     * @param int $db_size
     * Size of all data in database which will be processed
     */
    private function setCreateDbDumpProgress($handled_tables, $table_sizes, $handling_table, $handled_rows, $db_size)
    {
        $size_handled = 0;

        foreach ($handled_tables as $table) {
            $size_handled += $table_sizes[$table]['size'];
        }

        if ($handled_rows >= $table_sizes[$handling_table]['rows']) {
            $size_handled += $table_sizes[$handling_table]['size'];
        } else {
            $size_handled += round(
                $table_sizes[$handling_table]['size'] / $table_sizes[$handling_table]['rows'] * $handled_rows,
                0
            );
        }

        $percentage = round($size_handled / $db_size * 100, 0);
        $this->setGeneratingDumpValue(
            array(self::GET_SQL_TABLE => $handling_table, self::GET_SQL_PERCENTAGE => $percentage)
        );
    }

    /**
     * Form information about database dump file and output it
     */
    private function downloadDump($file_name, $is_compressed)
    {
        /*if ($this->bridge_options['allow_compression']) {
            $file  = self::DB_FILE_COMPRESSION_YES;
            $fname = $this->tmp_folder_path.'/'.self::DB_FILE_COMPRESSION_YES;
        } else {
            $file  = self::DB_FILE_COMPRESSION_NO;
            $fname = $this->tmp_folder_path.'/'.self::DB_FILE_COMPRESSION_NO;
        }*/

        $fname = $this->tmp_folder_path.'/'.$file_name;

        if (!$this->shop_cart->fileExists($fname)) {
            $this->putLog('File not exists.');
        }

        if (!$this->shop_cart->isReadable($fname)) {
            $this->putLog('File is not readable.');
        }

        $file_size     = $this->shop_cart->fileSize($fname);
        $file_checksum = md5_file($fname);
        $outpustr      = "0\r\n";

//        if ($this->backup_file_ext == 'gz') {
        if ($is_compressed) {
            $outpustr .= '1';
        } else {
            $outpustr .= '0';
        }

        $outpustr .= '|';
        $div_last = $file_size % $this->bridge_options['package_size'];

        if ($div_last == 0) {
            $outpustr .= (($file_size - $div_last) / $this->bridge_options['package_size']);
        } else {
            $outpustr .= (($file_size - $div_last) / $this->bridge_options['package_size'] + 1);
        }

        $outpustr .= "|$file_size";
        $res = $this->shop_cart->getSqlResults('SELECT @@character_set_database AS charset');

        if (!$res) {
            $outpustr .= '';
        } else {
            $res = array_shift($res);
            $outpustr .= '|'.$res['charset'];
        }

        $outpustr .= "\r\n$file_name\r\n$file_checksum\r\n";

        if (!headers_sent()) {
            header('Content-Length: '.$this->shop_cart->strLen($outpustr));
            header('Content-Length-Alternative: '.$this->shop_cart->strLen($outpustr));
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Pragma: no-cache');
        }

        echo $outpustr;
    }

    /**
     * Read database dump file and output its data by parts
     */
    private function getDbFile()
    {
        if (!$this->shop_cart->issetRequestParam('filename')) {
            $this->generateError($this->br_errors['filename_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('position')) {
            $this->generateError($this->br_errors['position_param_missing']);
        }

        $filename = (string)$this->tmp_folder_path.'/'.$this->shop_cart->getRequestParam('filename');
        $position = (int)$this->shop_cart->getRequestParam('position');

        if (!$this->shop_cart->fileExists($filename)) {
            $this->generateError($this->br_errors['temporary_file_exist_not']);
        }

        if (!$this->shop_cart->isReadable($filename)) {
            $this->generateError($this->br_errors['temporary_file_readable_not']);
        }

        $outpustr       = '';
        $package_size   = $this->bridge_options['package_size'];
        $filesize       = $this->shop_cart->fileSize($filename);
        $filesize       = $filesize - $position * $package_size;
        $delete_db_file = false;

        if ($filesize > $package_size) {
            $filesize = $package_size;
        }

        if ($filesize < 0) {
            $filesize = 0;
        }

        if ($filesize < $package_size) {
            $delete_db_file = true;
        }

        if (!headers_sent()) {
            header('Content-Length: '.($this->shop_cart->strLen($outpustr) + $filesize));
            header('Content-Length-Alternative: '.($this->shop_cart->strLen($outpustr) + $filesize));
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Pragma: no-cache');
        }

        echo $outpustr;

        $fp = $this->shop_cart->fileOpen($filename, 'rb');
        fseek($fp, $package_size * $position);
        $read_size = (int)self::FILE_READ_SIZE;

        while (($read_size > 0) && ($package_size > 0)) {
            if ($package_size >= $read_size) {
                $package_size -= $read_size;
            } else {
                $read_size = $package_size;
                $package_size = 0;
            }

            if ($read_size == 0) {
                break;
            }

            $str = $this->shop_cart->fileRead($fp, $read_size);
            echo $str;
        }

        $this->shop_cart->fileClose($fp);

        if ($delete_db_file) {
            $this->shop_cart->unlink($filename);
            $this->shop_cart->unlink($this->tmp_folder_path.'/'.self::DB_DATA_TMP);
        }
    }

    /**
     * Check data and run SQLs
     */
    private function putSql()
    {
        if (!$this->shop_cart->issetRequestParam('sql')) {
            $this->generateError($this->br_errors['sql_param_missing']);
        }

        $this->putLog('Put sql. Start');
        $sql = $this->shop_cart->getRequestParam('sql');

        // Put all SQLs into log file
        $this->putLog($sql);

        // Run SQLs
        $content = $this->putSqlRun($sql);

        // Output answer
        if ($this->shop_cart->strLen($content) > 0) {
            echo $content;
        } else {
            echo "0\r\n";
        }
    }

    private function putSqlRun($data)
    {
        $ret                       = '';
        $checksum_prev             = '';
        $this->count_sql_exec_prev = 0;
        $post_replace_to_sm        = array_flip($this->post_replace_from_sm);
        $sql_delimiter_pv          = $this->shop_cart->getRequestParam('sql_delimiter');
        $sql_compatibility_pv      = $this->shop_cart->getRequestParam('sql_compatibility');

        // Read checksum and count of processed SQLs from file
        $checksum_arr = $this->getChecksumPrev();

        // Get encoded string in base64 to check below if data are encoded in base64
        $encoded_data_begin = strtr(call_user_func('base64_encode', self::PUT_SQL_ENCODED), $post_replace_to_sm);

        if ($checksum_arr) {
            $checksum_prev = $checksum_arr[0];
            $this->count_sql_exec_prev = $checksum_arr[1];
        }

        if ($sql_delimiter_pv !== false && !empty($sql_delimiter_pv)) {
            $this->sql_delimiter = (string)$this->shop_cart->getRequestParam('sql_delimiter');
        }

        if ($sql_compatibility_pv !== false && !empty($sql_compatibility_pv)) {
            $this->shop_cart->execSql("SET SQL_MODE = '".(string)$sql_compatibility_pv."'");
        }

        $checksum_current = str_pad($this->shop_cart->strToUpper(dechex(crc32($data))), 8, '0', STR_PAD_LEFT);

        // Check if chunk checksum from the store manager and checksum of retrieved data are different
        if ($this->shop_cart->issetRequestParam('checksum')
            && $this->shop_cart->getRequestParam('checksum') != $checksum_current
        ) {
            return self::POST_ERROR_CHUNK_CHECKSUM_DIF.'|'.$this->br_errors['checksum_dif'];
        } else {
            if ($this->shop_cart->issetRequestParam('checksum')) {
                if (strpos($data, $encoded_data_begin) === 0) {
                    $this->shop_cart->setSqlEncodedInBase64(true);
                    $data = $this->shop_cart->subStr($data, $this->shop_cart->strLen($encoded_data_begin));
                    $data = call_user_func('base64_decode', strtr($data, $this->post_replace_from_sm));
                }
            }

            $sql_queries = explode($this->sql_delimiter, $data);

            if ($this->shop_cart->issetRequestParam('checksum')) {
                if ($checksum_current != $checksum_prev) {
                    foreach ($sql_queries as $query) {
                        $query = trim($query);

                        if (!empty($query)) {
                            if ($ret == '') {
                                $ret .= $this->importRunQuery($query, $checksum_current);
                            }
                        } else {
                            break;
                        }
                    }
                } else {
                    foreach ($sql_queries as $key => $query) {
                        $query = trim($query);

                        if (!empty($query) && $ret == '' && $key >= $this->count_sql_exec_prev) {
                            $ret .= $this->importRunQuery($query, $checksum_current);
                        }
                    }
                }
            } else {
                foreach ($sql_queries as $query) {
                    $query = trim($query);

                    if (!empty($query)) {
                        $ret .= $this->importRunQuery($query);
                    }
                }
            }
        }

        if ($ret == '' && $this->shop_cart->issetRequestParam('checksum')) {
            $ret = $this->successful_code.'|Data were posted successfully';
        }

        return $ret;
    }

    private function getChecksumPrev()
    {
        $checksum_arr = false;
        $file_name_intermediate = $this->tmp_folder_path.'/'.self::INTERMEDIATE_FILE_NAME;

        if ($this->shop_cart->fileExists($file_name_intermediate)) {
            $fp = $this->shop_cart->fileOpen($file_name_intermediate, 'r');

            if ($fp) {
                $file_size_intermediate = $this->shop_cart->fileSize($file_name_intermediate);

                if ($file_size_intermediate > 0) {
                    $content = $this->shop_cart->fileRead($fp, $file_size_intermediate);
                    $checksum_arr = explode('|', $content);

                    if (count($checksum_arr) == 2) {
                        $checksum_arr[0] = (string)$checksum_arr[0];
                        $checksum_arr[1] = (int)$checksum_arr[1];

                        if ($checksum_arr[1] < 0) {
                            $checksum_arr[1] = 0;
                        }
                    } else {
                        $checksum_arr = false;
                    }
                }

                $this->shop_cart->fileClose($fp);
            }
        }

        return $checksum_arr;
    }

    /**
     * Run one SQL and put data into file
     */
    private function importRunQuery($query, $checksum = '')
    {
        $ret = '';
        $this->putLog($query);
        $result = $this->shop_cart->execSql($query);

        // Error Code: 2006 - MySQL server has gone away; Error Code: 1317 - Query execution was interrupted
        if (!$result && ($this->shop_cart->error_no == 2006 || $this->shop_cart->error_no == 1317)) {
            $result = $this->retryPutSql($query);
        }

        if ($result) {
            if ($this->shop_cart->issetRequestParam('checksum')) {
                $this->shop_cart->filePutContents(
                    $this->tmp_folder_path.'/'.self::INTERMEDIATE_FILE_NAME,
                    $checksum.'|'.++$this->count_sql_exec_prev
                );
            }
        } else {
            $ret .= self::POST_ERROR_SQL_INDEX.'|'.($this->count_sql_exec_prev + 1).'|<font color="#000000"><b>'
                .$this->shop_cart->error_no.'; '.$this->shop_cart->error_msg.'</b></font><br>'.htmlspecialchars($query)
                .'<br>';

            if ($this->shop_cart->issetRequestParam('checksum')) {
                $this->shop_cart->filePutContents(
                    $this->tmp_folder_path.'/'.self::INTERMEDIATE_FILE_NAME,
                    $checksum.'|'.$this->count_sql_exec_prev
                );
            }
        }

        return $ret;
    }

    private function retryPutSql($query)
    {
        $result = false;

        for ($i = 0; $i < self::MAX_COUNT_ATTEMPT_POST; $i ++) {
            sleep(self::DELAY_BETWEEN_POST);
            $result = $this->shop_cart->execSql($query, true);

            if ($result || ($this->shop_cart->error_no != 2006 && $this->shop_cart->error_no != 1317)) {
                break;
            }
        }

        return $result;
    }

    private function getModuleVersion()
    {
        die($this->shop_cart->jsonEncode(
            array(
                $this->code_response => $this->successful_code,
                'revision'           => $this->revision,
                'module_version'     => $this->module_version,
            )
        ));
    }

    private function getConfig()
    {
        echo "0\r\n";
        echo 'database_host='.$this->shop_cart->getDbHost()."<br>\r\n";
        echo 'database_name='.$this->shop_cart->getDbName()."<br>\r\n";
        echo 'database_username='.$this->shop_cart->getDbUsername()."<br>\r\n";
        echo 'database_password='.$this->shop_cart->getDbPassword()."<br>\r\n";
        echo 'database_table_prefix='.$this->shop_cart->getDbPrefix()."<br>\r\n";
        echo 'php_version='.phpversion()."<br>\r\n";
        echo 'gzip='.(int)extension_loaded('zlib')."<br>\r\n";

        if (defined('VM_VERSION')) {
            echo 'vm_version='.VM_VERSION."<br>\r\n";
        }
    }

    private function getCategoryTree()
    {
        if (!$this->shop_cart->issetRequestParam('category')) {
            $this->putLog('Error: Category name is missing');
            $this->generateError($this->br_errors['category_param_missing']);
        }

        $category = $this->shop_cart->getRequestParam('category');
        if (empty($category)) {
            $this->putLog('Error: Category name is empty');
            $this->generateError($this->br_errors['category_param_empty']);
        }

        $dir = (string)$this->shop_cart->getRequestParam('category');
        if (empty($dir)) {
            $this->putLog('Error: Category name is empty');
            $this->generateError($this->br_errors['category_param_missing']);
        }

        $tmp_dir_info = dir($this->tmp_folder_path);

        while (false !== ($entry = $tmp_dir_info->read())) {
            if ($entry != '.'
                && $entry != '..'
                && $this->shop_cart->subStr(
                    $entry,
                    0,
                    $this->shop_cart->strLen(self::TMP_FILE_PREFIX)
                ) == self::TMP_FILE_PREFIX
            ) {
                $this->shop_cart->unlink($this->tmp_folder_path.'/'.$entry);
            }
        }

        $tmpfname = $this->shop_cart->strToLower(self::TMP_FILE_PREFIX.date('H_i_s-d_M_Y'));
        $this->putLog('Creating and opening tmp file for get category path');

        if ($this->bridge_options['allow_compression']) {
            $tmpfname .= '.txt.gz';
            $tmpfd = $this->shop_cart->gzFileOpen(
                $this->tmp_folder_path.'/'.$tmpfname,
                'wb'.$this->bridge_options['compress_level']
            );
        } else {
            $tmpfname .= '.txt';
            $tmpfd = $this->shop_cart->fileOpen($this->tmp_folder_path.'/'.$tmpfname, 'wb');
        }

        if (!$tmpfd) {
            $this->putLog('Error creating and opening tmp file');
            $this->generateError($this->br_errors['open_tmp_file']);
        }

        $files = $this->shop_cart->getFilesRecursively(
            $this->shop_cart->getShopRootDir().ltrim($dir, '/'),
            $this->shop_cart->getIgnoreDirs(),
            '*',
            true
        );

        foreach ($files as $file) {
            $this->bridge_options['allow_compression']
                ? $this->shop_cart->gzFileWrite($tmpfd, "$file\r\n")
                : $this->shop_cart->fileWrite($tmpfd, "$file\r\n");
        }

        $this->bridge_options['allow_compression']
            ? $this->shop_cart->gzFileClose($tmpfd)
            : $this->shop_cart->fileClose($tmpfd);

        die($this->generateFileData($this->tmp_folder_path.'/'.$tmpfname, $this->bridge_options['allow_compression']));
    }

    private function runIndexer()
    {
        $this->shop_cart->runIndexer();
        die();
    }

    /**
     * Get values of variables from FTP files
     */
    private function getVars()
    {
        if (!$this->shop_cart->issetRequestParam('vars_main_dir')) {
            $this->generateError($this->br_errors['varsmaindir_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('vars_names')) {
            $this->generateError($this->br_errors['varsnames_param_missing']);
        }

        $translations = array();
        $vars_main_dir = (string)$this->shop_cart->getRequestParam('vars_main_dir');
        $vars_main_dir = trim('\\', trim('/', $vars_main_dir));
        $vars_main_dir = $this->shop_cart->getShopRootDir().'/'.$vars_main_dir;
        $vars_names = (string)$this->shop_cart->getRequestParam('vars_names');

        if ($vars_main_dir == '') {
            $this->generateError($this->br_errors['varsmaindir_param_empty']);
        }

        if ($vars_names == '') {
            $this->generateError($this->br_errors['varsnames_param_empty']);
        }

        $item_handler = opendir($vars_main_dir);

        while (($item = $this->shop_cart->readDirectory($item_handler)) !== false) {
            if ($this->shop_cart->subStr($item, 0, 1) != '.' && !$this->shop_cart->isDirectory($item)) {
                $translations[(string)$item] = $this->getVarsFromScript($vars_main_dir.'/'.$item, $vars_names);
            }
        }

        echo '1|'.$this->shop_cart->jsonEncode($translations);
    }

    /**
     * Get values of variables from FTP file
     */
    private function getVarsFromScript($path_to_script, $vars_names)
    {
        if ($this->shop_cart->fileExists('./'.$path_to_script)
            && $this->shop_cart->isReadable('./'.$path_to_script)
            && $this->shop_cart->fileSize('./'.$path_to_script) > 0
        ) {
            $current_translations = array();
            $content = call_user_func('file_get_contents', './'.$path_to_script);

            if (!$content) {
                $this->generateError('Cannot open file: '.$path_to_script);
            }

            $rows     = explode("\n", $content);
            $pattern = '/^\$\_\[\'(.*)\']\s*\=\s*(.*)\;/i';

            foreach ($rows as $data) {
                preg_match($pattern, $data, $matches);

                if (in_array($matches[1], $vars_names) && isset($matches[2]) && $matches[2] != null) {
                    $current_translations[$matches[1]] = $matches[2];
                }
            }

            return $current_translations;
        }

        return '';
    }

    /**
     * Get data from .xml file on FTP server
     */
    private function getXmlData()
    {
        if (!$this->shop_cart->issetRequestParam('xml_path')) {
            $this->generateError($this->br_errors['xmlpath_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('xml_fields')) {
            $this->generateError($this->br_errors['xmlfields_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('xml_items_node')) {
            $this->generateError($this->br_errors['xmlitemsnode_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('xml_items_info_node')) {
            $this->generateError($this->br_errors['xmlitemsinfonode_param_missing']);
        }

        $xml_path            = (string)$this->shop_cart->getRequestParam('xml_path');
        $xml_fields          = (string)$this->shop_cart->getRequestParam('xml_fields');
        $xml_items_node      = (string)$this->shop_cart->getRequestParam('xml_items_node');
        $xml_items_info_node = (string)$this->shop_cart->getRequestParam('xml_items_info_node');
        $xml_filters         = array();
        $xml_filters_pv      = $this->shop_cart->getRequestParam('xml_filters');

        if ($xml_path == '') {
            $this->generateError($this->br_errors['xmlpath_param_empty']);
        }

        if ($xml_fields == '') {
            $this->generateError($this->br_errors['xmlfields_param_empty']);
        }

        if ($xml_items_node == '') {
            $this->generateError($this->br_errors['xmlitemsnode_param_empty']);
        }

        if ($xml_items_info_node == '') {
            $this->generateError($this->br_errors['xmlitemsinfonode_param_empty']);
        }

        if ($xml_filters_pv !== false && !empty($xml_filters_pv)) {
            $xml_filters = explode(';', (string)$xml_filters_pv);
        }

        $path_xml_file = $this->shop_cart->getShopRootDir().'/'.$xml_path;

        if (!$this->shop_cart->fileExists($path_xml_file)) {
            $this->generateError("File {$xml_path} not found!");
        }

        $this->getItemsList($path_xml_file, $xml_fields, $xml_items_node, $xml_items_info_node, $xml_filters);
    }

    /**
     * Get value of nodes from .xml file
     */
    private function getItemsList($path_xml_file, $fields, $items_node, $items_info_node, $filters)
    {
        $items_list      = array();
        $filters_matched = array();
        $xml             = simplexml_load_file($path_xml_file);

        foreach ($filters as $filter) {
            preg_match('/^(.*)\:(.*)$/', $filter, $matches);
            $filters_matched[$matches[1]] = $matches[2];
        }

        $count_filters_matched = count($filters_matched);
        $fields                = explode(',', $fields);
        $items                 = $xml->xpath("{$items_node}");
        $items_keys            = array_keys($items[0]);

        foreach ($items_keys as $item_name) {
            if ($items_node != $items_info_node) {
                $items_info = $xml->xpath("{$items_info_node}/{$item_name}");
                $items_info = $items_info[0];
            } else {
                $items_info = $item_name;
            }

            if ($count_filters_matched > 0) {
                foreach ($filters_matched as $filter_name => $filter_value) {
                    if ((string)$items_info->$filter_name != $filter_value) {
                        continue 2;
                    }
                }
            }

            foreach ($fields as $field) {
                $items_list[$item_name][$field] = (string)$items_info->$field;
            }
        }

        echo '1|'.$this->shop_cart->jsonEncode($items_list)."\r\n";
    }

    /**
     * Get file structure from FTP server by path
     */
    private function getFtpFiles()
    {
        if (!$this->shop_cart->issetRequestParam('search_path')) {
            $this->generateError($this->br_errors['searchpath_param_missing']);
        }

        $path = (string)$this->shop_cart->getRequestParam('search_path');
        $mask = '*';

        if ($path == '') {
            $this->generateError($this->br_errors['searchpath_param_empty']);
        }

        if ($this->shop_cart->issetRequestParam('mask')) {
            $mask = (string)$this->shop_cart->getRequestParam('mask');

            if (empty($mask)) {
                $mask = '*';
            }
        }

        $include_subdir = $this->shop_cart->issetRequestParam('include_subdir')
            && (int)$this->shop_cart->getRequestParam('include_subdir') == 1;

        $files = $this->shop_cart->getFilesRecursively(
            $this->shop_cart->getShopRootDir().ltrim($path, '/'),
            $this->shop_cart->getIgnoreDirs(),
            $mask,
            $include_subdir
        );

        echo $this->shop_cart->jsonEncode(
            array(
                $this->shop_cart->getCodeResponse() => $this->shop_cart->getCodeSuccessful(),
                $this->shop_cart->getKeyMessage()   => $files,
            )
        );
    }

    private function getFileList()
    {
        if (!$this->shop_cart->issetRequestParam('search_path')) {
            $this->generateJsonResponse(array($this->key_message => $this->br_errors['searchpath_param_missing']), true);
        }

        $searchPath = (string)$this->shop_cart->getRequestParam('search_path');

        if (empty($searchPath)) {
            $this->generateJsonResponse(array($this->key_message => $this->br_errors['searchpath_param_empty']), true);
        }

        $filePathTxt = '.'.$this->bridge_options['tmp_dir'].'/'.self::FILE_NAME_FILE_LIST.self::FILE_EXT_TXT;
        $filePathGz = '.'.$this->bridge_options['tmp_dir'].'/'.self::FILE_NAME_FILE_LIST.self::DB_FILE_EXT_COMPRESSION_YES;
        $filePathFinal = $filePathTxt;

        $includeMask = $this->shop_cart->issetRequestParam('include_mask')
            ? (string)$this->shop_cart->getRequestParam('include_mask')
            : '';
        if (!empty($includeMask)) {
            $includeMask = '{' . str_replace(';', ',', $includeMask) . '}';
        }

        $excludeMask = $this->shop_cart->issetRequestParam('exclude_mask')
            ? (string)$this->shop_cart->getRequestParam('exclude_mask')
            : '';
        if (!empty($excludeMask)) {
            $excludeMask = '{' . str_replace(';', ',', $excludeMask) . '}';
        }

        $includeRegexp = (string)$this->shop_cart->getRequestParam('include_regexp');
        if (!empty($includeRegexp)) {
            $includeRegexp = '\\'.$includeRegexp.'\\';
        }

        $excludeRegexp = (string)$this->shop_cart->getRequestParam('exclude_regexp');
        if (!empty($excludeRegexp)) {
            $excludeRegexp = '\\'.$excludeRegexp.'\\';
        }

        $excludeDirectoryList = (string)$this->shop_cart->getRequestParam('exclude_dirs');
        $excludeDirectoryList = str_replace('\\', '/', $excludeDirectoryList);

        $excludeDirectories = !empty($excludeDirectoryList)
            ? explode(';', $excludeDirectoryList)
            : array();

        $excludeIsAbsolute = strpos($excludeDirectoryList, '/') !== false;

        if (file_exists($filePathGz)) {
            $this->shop_cart->unlink($filePathGz);
        }

        $fileTmp = $this->tmp_folder_path.'/'.self::FILE_NAME_GET_FILE_LIST_TMP;
        $processId = md5(rand());
        $this->setValueByKeyToFile($fileTmp, self::KEY_PROCESS_ID, $processId);

        // Init file
        $this->shop_cart->filePutContents($filePathTxt, '');

        $this->recursiveScanFolder(
            $fileTmp,
            $processId,
            $filePathTxt,
            $searchPath,
            $includeMask,
            $excludeMask,
            $includeRegexp,
            $excludeRegexp,
            $this->shop_cart->issetRequestParam('include_subdir')
                ? (string)$this->shop_cart->getRequestParam('include_subdir') == '1'
                : true,
            $excludeDirectories,
            $excludeIsAbsolute
        );

        if ($this->bridge_options['allow_compression']) {
            $filePathFinal = $filePathGz;
            $this->generateArchiveByFile($filePathTxt, $filePathFinal);
        }

        die($this->getDownloadableFileInfo($filePathFinal, $this->bridge_options['allow_compression']));
    }

    private function recursiveScanFolder(
        $fileTmp,
        $processId,
        $temporaryFileLocation,
        $searchPath,
        $includeMask,
        $excludeMask,
        $includeRegexp,
        $excludeRegexp,
        $includeSubDirectories,
        $excludeDirs = array(),
        $excludeIsAbsolute = true,
        $skipArray = array('.', '..')
    ) {
        if ($this->getValueByKeyFromFile($fileTmp, self::KEY_PROCESS_ID) != $processId) {
            $this->generateJsonResponse(array(KEY_MESSAGE => 'Another process has been run'), true);
        }

        if (!($objectPath = opendir($searchPath))) {
            return;
        }

        $filesProcessed = false;

        if (!empty($includeMask) || !empty($excludeMask)) {
            if (!empty($includeMask)) {
                $files = array_filter(glob("$searchPath/$includeMask", GLOB_BRACE), 'is_file');
            } else {
                $files = $this->globNot($searchPath, $excludeMask, GLOB_BRACE);
            }

            for ($i = 0, $count = count($files); $i < $count; $i++) {
                $this->shop_cart->filePutContents($temporaryFileLocation, $files[$i]."\r\n", FILE_APPEND);
            }

            $filesProcessed = true;

            if (!$includeSubDirectories) {
                return;
            }
        }

        while (($objectName = readdir($objectPath)) !== false) {
            $searchObjectPath = str_replace('\\', '/', "$searchPath/$objectName");

            if (is_file($searchObjectPath)) {
                if ($filesProcessed) {
                    continue;
                }

                if (!empty($includeRegexp)) {
                    if (preg_match($includeRegexp, $objectName)) {
                        $this->shop_cart->filePutContents($temporaryFileLocation, $searchObjectPath."\r\n", FILE_APPEND);
                    }

                    continue;
                } elseif (!empty($excludeRegexp)) {
                    if (!preg_match($excludeRegexp, $objectName)) {
                        $this->shop_cart->filePutContents($temporaryFileLocation, $searchObjectPath."\r\n", FILE_APPEND);
                    }

                    continue;
                }

                $this->shop_cart->filePutContents($temporaryFileLocation, $searchObjectPath."\r\n", FILE_APPEND);
            } elseif ($this->shop_cart->isDirectory($searchObjectPath)
                && $includeSubDirectories
                && ($excludeIsAbsolute ? !in_array($searchObjectPath, $excludeDirs) : !in_array($objectName, $excludeDirs))
                && !in_array($objectName, $skipArray)) {

                $this->recursiveScanFolder(
                    $fileTmp,
                    $processId,
                    $temporaryFileLocation,
                    $searchObjectPath,
                    $includeMask,
                    $excludeMask,
                    $includeRegexp,
                    $excludeRegexp,
                    $includeSubDirectories,
                    $excludeDirs,
                    $excludeIsAbsolute,
                    $skipArray
                );
            }
        }
    }

    private function globNot($searchPath, $excludePattern, $globFlag = null)
    {
        $allResults = array_filter(glob("$searchPath/*"), 'is_file');

        $differentResult = !empty($globFlag)
            ? array_filter(glob("$searchPath/$excludePattern", $globFlag), 'is_file')
            : array_filter(glob("$searchPath/$excludePattern"), 'is_file');

        return array_values(array_diff($allResults, $differentResult));
    }

    private function getDownloadableFileInfo($file, $isCompressed) {
        $fileSize = filesize($file);
        $divLastPart = $fileSize % $this->bridge_options['package_size'];

        return "0\r\n".($isCompressed ? '1' : '0').'|'
            .floor($divLastPart > 0 ? $fileSize / $this->bridge_options['package_size'] + 1 : $fileSize / $this->bridge_options['package_size'])
            ."|$fileSize\r\n".basename($file)."\r\n".md5_file($file);
    }

    private function getDownloadableFileInfoJson($file, $isCompressed)
    {
        $fileSize = $this->shop_cart->fileSize($file);
        $divLastPart = $fileSize % $this->bridge_options['package_size'];

        return array(
            $this->key_is_compressed => $isCompressed,
            $this->key_file_size => $fileSize,
            $this->key_parts_count =>
                floor($divLastPart > 0
                    ? $fileSize / $this->bridge_options['package_size'] + 1
                    : $fileSize / $this->bridge_options['package_size']),
            $this->key_checksum => md5_file($file),
            $this->key_file_name => basename($file)
        );
    }

    private function setValueByKeyToFile($file, $key, $value) {
        $content = $this->shop_cart->fileGetContents($file);
        $content = !empty($content) ? unserialize($content) : array();
        $content[$key] = $value;

        $this->shop_cart->filePutContents($file, serialize($content));
    }

    private function getValueByKeyFromFile($file, $key) {
        $content = $this->shop_cart->fileGetContents($file);

        if (empty($content)) {
            return false;
        }

        $content = unserialize($content);

        return array_key_exists($key, $content) ? $content[$key] : false;
    }

    private function getCartVersion()
    {
        echo $this->shop_cart->getCartVersion();
    }

    private function checkDataChanges()
    {
        if (!$this->shop_cart->issetRequestParam('table_name')) {
            $this->generateError($this->br_errors['tablename_param_missing']);
        }

        $table_name = (string)$this->shop_cart->getRequestParam('table_name');

        if (empty($table_name)) {
            $this->generateError($this->br_errors['tablename_param_empty']);
        }

        echo $this->shop_cart->checkDataChanges(explode(';', call_user_func('base64_decode', $table_name)));
    }

    private function getNewOrders()
    {
        if (!$this->shop_cart->issetRequestParam('order_id')) {
            $this->generateError($this->br_errors['orderid_param_missing']);
        }

        $order_id = (int)$this->shop_cart->getRequestParam('order_id');

        if ($order_id < 1) {
            $this->generateError($this->br_errors['orderid_param_incorrect']);
        }

        echo $this->shop_cart->getNewOrders($order_id);
    }

    /**
     * Set value in session to cancel of generating database dump
     */
    private function createDbDumpCancel()
    {
        $this->setGeneratingDumpValue(array(self::GET_SQL_CANCEL_PARAM => 1));
    }

    /**
     * Get information about state of generating database dump
     */
    private function createDbDumpProgress()
    {
        $ret = array();
        $str = '0|';

        $ret['table']      = $this->getGeneratingDumpValue(self::GET_SQL_TABLE);
        $ret['percentage'] = $this->getGeneratingDumpValue(self::GET_SQL_PERCENTAGE);

        if ($ret['table'] !== false && $ret['percentage'] !== false) {
            $str = '1|'.$this->shop_cart->jsonEncode($ret);
        }

        echo $str;
    }

    private function getSqlFilePartInfo()
    {
        $this->setGeneratingDumpValue(array(self::GET_SQL_FILE_PART => 1));

        for ($i = 0; $i < 10; $i++) {
            sleep(10);
            $file_part = $this->getGeneratingDumpValue(self::GET_SQL_FILE_PART_NAME);

            if ($file_part && !empty($file_part)) {
                $is_compressed = false;

                if (preg_match('/.gz$/', $file_part)) {
                    $is_compressed = true;
                }

                $this->downloadDump($file_part, $is_compressed);
                $this->setGeneratingDumpValue(array(self::GET_SQL_FILE_PART_NAME => ''));
                die();
            }
        }

        die('Cannot give a file');
    }

    private function getImage()
    {
        if (!$this->shop_cart->issetRequestParam('entity_type')) {
            $this->generateError($this->br_errors['entitytype_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('image_id')) {
            $this->generateError($this->br_errors['imageid_param_missing']);
        }

        $entity_type = (string)$this->shop_cart->getRequestParam('entity_type');
        $image_id    = (string)$this->shop_cart->getRequestParam('image_id');

        if (!isset($entity_type[0])) {
            $this->generateError($this->br_errors['entitytype_param_empty']);
        }

        if (empty($image_id)) {
            $this->generateError($this->br_errors['imageid_param_incorrect']);
        }

        $image_path = $this->shop_cart->getImage($entity_type, $image_id);

        if ($image_path && $this->shop_cart->fileExists($image_path)) {
            header('Content-Type: image/jpeg');
            header('Content-Length: '.$this->shop_cart->fileSize($image_path));
            readfile($image_path);
        } else {
            $this->generateError('Image is missing');
        }
    }

    private function setImage()
    {
        if (!$this->shop_cart->issetRequestParam('entity_type')) {
            $this->generateError($this->br_errors['entitytype_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('image_id')) {
            $this->generateError($this->br_errors['imageid_param_missing']);
        }

        $entity_type = (string)$this->shop_cart->getRequestParam('entity_type');
        $image_id    = (string)$this->shop_cart->getRequestParam('image_id');

        if (!isset($entity_type[0])) {
            $this->generateError($this->br_errors['entitytype_param_empty']);
        }

        if (empty($image_id)) {
            $this->generateError($this->br_errors['imageid_param_incorrect']);
        }

        if ($this->shop_cart->issetRequestParam('image_url')) {
            $image_url = (string)$this->shop_cart->getRequestParam('image_url');

            if (empty($image_url)) {
                $this->generateError($this->br_errors['imageurl_param_empty']);
            }

            $this->shop_cart->setImage($entity_type, $image_id, $image_url, $this->image_url);
        } else {
            if ($_FILES[self::UPLOAD_FILE_NAME]['error']) {
                $this->generateError($this->br_errors['upload_file_error']);
            } else {
                $this->shop_cart->setImage($entity_type, $image_id, self::UPLOAD_FILE_NAME, self::UPLOAD_FILE_NAME);
            }
        }
    }

    private function deleteImage()
    {
        if (!$this->shop_cart->issetRequestParam('entity_type')) {
            $this->generateError($this->br_errors['entitytype_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('image_id')) {
            $this->generateError($this->br_errors['imageid_param_missing']);
        }

        $entity_type = (string)$this->shop_cart->getRequestParam('entity_type');
//        $image_id    = $this->shop_cart->getRequestParam('image_id');

        if (!isset($entity_type[0])) {
            $this->generateError($this->br_errors['entitytype_param_empty']);
        }

//        if ($image_id < 1) {
//            $this->generateError($this->br_errors['imageid_param_incorrect']);
//        }

        $this->shop_cart->deleteImage($entity_type, $this->shop_cart->getRequestParam('image_id'));
    }

    private function deleteFile()
    {
        if (!$this->shop_cart->issetRequestParam('path')) {
            $this->generateError($this->br_errors['path_param_missing']);
        }

        $filepath = (string)$this->shop_cart->getRequestParam('path');

        if (empty($filepath)) {
            $this->generateError($this->br_errors['path_param_empty']);
        }

        $filepath = $this->shop_cart->getShopRootDir().'/'.$filepath;

        if (!$this->shop_cart->fileExists($filepath)) {
            $this->generateError($this->br_errors['delete_file_error']);
        }

        $this->shop_cart->deleteFile($filepath);
    }

    private function copyImage()
    {
        if (!$this->shop_cart->issetRequestParam('entity_type')) {
            $this->generateError($this->br_errors['entitytype_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('image_id')) {
            $this->generateError($this->br_errors['imageid_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('to_image_id')) {
            $this->generateError($this->br_errors['toimageid_param_missing']);
        }

        $entity_type   = (string)$this->shop_cart->getRequestParam('entity_type');
        $from_image_id = (int)$this->shop_cart->getRequestParam('image_id');
        $to_image_id   = (int)$this->shop_cart->getRequestParam('to_image_id');

        if (!isset($entity_type[0])) {
            $this->generateError($this->br_errors['entitytype_param_empty']);
        }

        if ($from_image_id < 1) {
            $this->generateError($this->br_errors['imageid_param_incorrect']);
        }

        if ($to_image_id < 1) {
            $this->generateError($this->br_errors['toimageid_param_incorrect']);
        }

        $this->shop_cart->copyImage($entity_type, $from_image_id, $to_image_id);
    }

    private function getFile()
    {
        if (!$this->shop_cart->issetRequestParam('entity_type')) {
            $this->generateError($this->br_errors['entitytype_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('filename')) {
            $this->generateError($this->br_errors['filename_param_missing']);
        }

        $entity_type = (string)$this->shop_cart->getRequestParam('entity_type');
        $filename    = (string)$this->shop_cart->getRequestParam('filename');

        if (empty($entity_type)) {
            $this->generateError($this->br_errors['entitytype_param_empty']);
        }

        if (empty($filename)) {
            $this->generateError($this->br_errors['filename_param_empty']);
        }

        $file_path = $this->shop_cart->getFile($entity_type, $filename);

        if ($file_path && $this->shop_cart->fileExists($file_path)) {
            header('Content-Type: image/jpeg');
            header('Content-Length: '.$this->shop_cart->fileSize($file_path));
            readfile($file_path);
        } else {
            $this->generateError('File is missing');
        }
    }

    private function setFile()
    {
        if (!$this->shop_cart->issetRequestParam('entity_type')) {
            $this->generateError($this->br_errors['entitytype_param_missing']);
        }

        if (!$this->shop_cart->issetRequestParam('filename')) {
            $this->generateError($this->br_errors['filename_param_missing']);
        }

        $entity_type = (string)$this->shop_cart->getRequestParam('entity_type');
        $filename    = (string)$this->shop_cart->getRequestParam('filename');

        if (empty($entity_type)) {
            $this->generateError($this->br_errors['entitytype_param_empty']);
        }

        if (empty($filename)) {
            $this->generateError($this->br_errors['filename_param_empty']);
        }

        if ($_FILES[self::UPLOAD_FILE_NAME]['error']) {
            $this->generateError($this->br_errors['upload_file_error']);
        }

        $this->shop_cart->setFile($entity_type, $filename, self::UPLOAD_FILE_NAME);
    }

    private function getCache()
    {
        echo $this->shop_cart->getCache();
    }

    private function clearCache()
    {
        $this->shop_cart->clearCache();
    }

    /*private function getBridgeVersion()
    {
        $version = explode(' ', $this->bridge_version);

        return $version[1];
    }*/

    private function getPaymentAndShippingMethods()
    {
        $this->shop_cart->getPaymentAndShippingMethods();
    }

    private function getStoreFileArchive()
    {
        if (version_compare(phpversion(), '5.2.0', '<')) {
            $this->generateError(
                $this->br_errors['zip_archive_not_supported'],
                $this->error_generate_store_file_archive
            );
        }

        if (!extension_loaded('zip')) {
            $this->generateError($this->br_errors['zip_not_loaded']);
        }

        if (!$this->shop_cart->isWritable($this->tmp_folder_path)) {
            $this->generateError($this->br_errors['not_writeable_dir']);
        }

        $result         = false;
        $arr_ignore_dir = array();
        $file           = "$this->tmp_folder_path/emagicone_store.zip";

        if ($this->shop_cart->issetRequestParam('ignore_dir')) {
            $ignore_dir = $this->shop_cart->getRequestParam('ignore_dir');

            if (!empty($ignore_dir)) {
                $arr_ignore_dir = explode(';', $ignore_dir);
            }
        }

        if ($this->shop_cart->fileExists($file)) {
            $this->shop_cart->unlink($file);
        }

        $zipObj = $this->shop_cart->getZipArchiveInstance();

        if ($zipObj->open($file, $this->shop_cart->getZipArchiveCreateValue()) === true) {
            $store_root_dir = $this->shop_cart->getShopRootDir();
            $this->generateFileArchive(
                $zipObj,
                $store_root_dir,
                $this->shop_cart->strLen($store_root_dir),
                $arr_ignore_dir
            );
            $zipObj->close();
            $result = $this->generateFileData($file, true);
        }

        if (!$result) {
            $this->generateError($this->br_errors['cannot_archive_files'], $this->error_generate_store_file_archive);
        }

        die($result);
    }

    private function generateFileArchive($zipObj, $path, $store_root_dir_length, $arr_ignore_dir)
    {
        $skip = array('.', '..');

        if ($fp = opendir($path)) {
            while (false !== ($value = $this->shop_cart->readDirectory($fp))) {
                $item = "$path/$value";

                if ($this->shop_cart->isFile($item)) {
                    $zipObj->addFile($item, $this->shop_cart->subStr($item, $store_root_dir_length));
                } elseif ($this->shop_cart->isDirectory($item)
                    && !in_array($value, $skip)
                    && !in_array($this->shop_cart->subStr($item, $store_root_dir_length), $arr_ignore_dir)
                ) {
                    $this->generateFileArchive($zipObj, $item, $store_root_dir_length, $arr_ignore_dir);
                }
            }

            closedir($fp);
        }
    }

    private function generateFileData($file, $allow_compression)
    {
        $file_size = $this->shop_cart->fileSize($file);
        $output = "0\r\n" . ($allow_compression ? '1' : '0') . '|';
        $div_last = $file_size % $this->bridge_options['package_size'];
        $output .= $div_last == 0
            ? ($file_size / $this->bridge_options['package_size'])
            : (($file_size - $div_last) / $this->bridge_options['package_size'] + 1);
        $output .= "|$file_size|\r\n" . basename($file) . "\r\n" . md5_file($file);

        if (!headers_sent()) {
            header('Content-Length: ' . $this->shop_cart->strLen($output));
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Pragma: no-cache');
        }

        return $output;
    }

    private function generateError($err_text = '1', $error_code = false, $show_link = false)
    {
        if ($show_link) {
            echo "1\r\n";
            echo $err_text;
        } else {
            echo $this->shop_cart->jsonEncode(array(
                $this->code_response => $error_code ? : $this->error_code_common,
                $this->key_message   => $err_text,
            ));
//            echo '0|';
//            echo $err_text;
        }

        die();
    }

    private function generateJsonResponse($data, $isError = false)
    {
        if (!is_array($data)) {
            $data = array($data);
        }

        $data[$this->code_response] = $isError ? $this->error_code_common : $this->successful_code;

        die($this->shop_cart->jsonEncode($data));
    }

    /*private function deleteOldFiles()
    {
        $dir = dir($this->tmp_folder_path);

        while (false !== ($entry = $dir->read()))
        {
            if ($entry != '.' && $entry != '..' && $this->shop_cart->subStr($entry, 0,
    $this->shop_cart->strLen(self::DB_FILE_PREFIX)) == self::DB_FILE_PREFIX)
                unlink($this->tmp_folder_path.'/'.$entry);
        }
    }*/

    private function putLog($data)
    {
        if (!$this->log_file_reset) {
            $log_file_handler = $this->shop_cart->fileOpen($this->tmp_folder_path.'/'.self::LOG_FILENAME, 'w');
            $this->log_file_reset = true;
        } else {
            $log_file_handler = $this->shop_cart->fileOpen($this->tmp_folder_path.'/'.self::LOG_FILENAME, 'a');
        }

        fputs($log_file_handler, '['.date('r').']'.$data."\r\n");
        $this->shop_cart->fileClose($log_file_handler);
    }

    private function runSelfTest()
    {
        die($this->shop_cart->jsonEncode(array(
            $this->key_message => 'test ok',
        )));
    }

    private function isSessionKeyValid($key)
    {
        $date = date('Y-m-d H:i:s', (time() - self::MAX_KEY_LIFETIME));
        $sql = 'SELECT `id` FROM `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS
            ."` WHERE `session_key` = '".$this->shop_cart->pSQL($key)."' AND `last_activity` > '"
            .$this->shop_cart->pSQL($date)."'";
        $result = $this->shop_cart->getSqlResults($sql);

        if ($result && isset($result[0]['id'])) {
            $sql = 'UPDATE `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS."` SET `last_activity` = '"
                .$this->shop_cart->pSQL(date('Y-m-d H:i:s'))."' WHERE `id` = ".(int)$result[0]['id'];
            $this->shop_cart->execSql($sql);

            return true;
        }

        return false;
    }

    private function addFailedAttempt()
    {
        $timestamp = time();
        $sql = 'INSERT INTO `'.$this->shop_cart->getDbPrefix().self::TABLE_FAILED_LOGIN
            ."` (`ip`, `date_added`) VALUES ('".$_SERVER['REMOTE_ADDR']."', '"
            .$this->shop_cart->pSQL(date('Y-m-d H:i:s', $timestamp))."')";
        $this->shop_cart->execSql($sql);

        // Get count of failed attempts for last 24 hours and set delay
        $sql = 'SELECT COUNT(`id`) AS count_rows FROM `'.$this->shop_cart->getDbPrefix().self::TABLE_FAILED_LOGIN
            ."` WHERE `ip` = '".$this->shop_cart->pSQL($_SERVER['REMOTE_ADDR'])."' AND `date_added` > '"
            .$this->shop_cart->pSQL(date('Y-m-d H:i:s', ($timestamp - self::MAX_KEY_LIFETIME)))."'";
        $result = $this->shop_cart->getSqlResults($sql);

        if ($result) {
            self::setDelay((int)$result[0]['count_rows']);
        }
    }

    private function generateSessionKey($hash)
    {
        $timestamp = time();
        $date = date('Y-m-d H:i:s', $timestamp);
        $sql = 'SELECT `session_key` FROM `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS
            ."` WHERE `last_activity` > '"
            .$this->shop_cart->pSQL(date('Y-m-d H:i:s', ($timestamp - self::MAX_KEY_LIFETIME)))
            ."' ORDER BY `last_activity` DESC LIMIT 1";
        $result = $this->shop_cart->getSqlResults($sql);

        if ($result && isset($result[0]['session_key'])) {
            $sql = 'UPDATE `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS."` SET `last_activity` = '"
                .$this->shop_cart->pSQL($date)."' WHERE `session_key` = '"
                .$this->shop_cart->pSQL($result[0]['session_key'])."'";
            $this->shop_cart->execSql($sql);

            return $result[0]['session_key'];
        }

        $key = hash('sha256', $hash.$timestamp);
        $sql = 'INSERT INTO `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS
            ."` (`session_key`, `date_added`, `last_activity`) VALUES ('".$this->shop_cart->pSQL($key)."', '"
            .$date."', '".$date."')";
        $this->shop_cart->execSql($sql);

        return $key;
    }

    private function deleteSessionKey()
    {
        if ($this->shop_cart->issetRequestParam('key')) {
            $key = (string)$this->shop_cart->getRequestParam('key');

            if (!empty($key)) {
                $sql = 'DELETE FROM `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS
                    ."` WHERE `session_key` = '".$this->shop_cart->pSQL($key)."'";
                $this->shop_cart->execSql($sql);
            }
        }
    }

    private function clearOldData()
    {
        $timestamp = time();
        $date = date('Y-m-d H:i:s', ($timestamp - self::MAX_KEY_LIFETIME));
        $this->shop_cart->execSql(
            'DELETE FROM `'.$this->shop_cart->getDbPrefix().self::TABLE_SESSION_KEYS."` WHERE `last_activity` < '"
            .$this->shop_cart->pSQL($date)."'"
        );
        $this->shop_cart->execSql(
            'DELETE FROM `'.$this->shop_cart->getDbPrefix().self::TABLE_FAILED_LOGIN."` WHERE `date_added` < '"
            .$this->shop_cart->pSQL($date)."'"
        );
    }

    private static function setDelay($count_attempts)
    {
        if ($count_attempts <= 10) {
            sleep(1);
        } elseif ($count_attempts <= 20) {
            sleep(2);
        } elseif ($count_attempts <= 50) {
            sleep(5);
        } else {
            sleep(10);
        }
    }

    /**
     * Get formated number
     */
    private function getFormatedIntNumber($num)
    {
        return number_format($num, 0, ',', ' ');
    }
}
