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

class Bridgeconnector extends Module
{
    private $default_tmp_dir;

    const CRYPT_KEY = "EMO_bridgeconnector\0\0\0\0\0";

    /* Section of default values which are stored in database */
    const DEFAULT_LOGIN              = '1';
    const DEFAULT_PASSWORD           = '1';
    const DEFAULT_ALLOW_COMPRESSION  = 1;
    const DEFAULT_COMPRESS_LEVEL     = 6;      /* 1 - 9 */
    const DEFAULT_LIMIT_QUERY_SIZE   = 1024;   /* kB */
    const DEFAULT_PACKAGE_SIZE       = 1024;   /* kB */
    /*const DEFAULT_NOTIFICATION_EMAIL = '';*/
    const DEFAULT_ALLOWED_IPS        = '';
    const MIN_COMPRESS_LEVEL         = 1;
    const MAX_COMPRESS_LEVEL         = 9;
    const MIN_LIMIT_QUERY_SIZE       = 100;    /* kB */
    const MAX_LIMIT_QUERY_SIZE       = 100000; /* kB */
    const MIN_PACKAGE_SIZE           = 100;    /* kB */
    const MAX_PACKAGE_SIZE           = 30000;  /* kB */
    const TABLE_SESSION_KEYS         = 'bridgeconnector_session_keys';
    const TABLE_FAILED_LOGIN         = 'bridgeconnector_failed_login';

    public function __construct()
    {
        include_once _PS_MODULE_DIR_.'/bridgeconnector/classes/SelfTest.php';
        include_once _PS_MODULE_DIR_.'/bridgeconnector/classes/BridgeConnectorConstants.php';

        $this->name             = 'bridgeconnector';
        $this->tab              = 'others';
        $this->version          = '1.0.14';
        $this->author           = 'eMagicOne';
        $this->module_key       = '2939fcd625448e7b3d9713696cbd1beb';
        $this->need_instance    = 0;
        $this->is_configurable  = 1;
        $this->bootstrap        = true;
        $this->cart_version     = Configuration::get('PS_INSTALL_VERSION');
        $this->def_shop         = Configuration::get('PS_SHOP_DEFAULT');
        $this->default_tmp_dir  = '/modules/'.$this->name.'/tmp';

        if (version_compare($this->cart_version, '1.7.0.1', '!=')) {
            $this->ps_versions_compliancy = array('min' => '1.5.1', 'max' => '1.7');
        }

        parent::__construct();

        $this->displayName = $this->l('Bridge Connector');
        $this->description = $this->l(
            'Install Bridge Connector module to fluently connect Store Manager desktop application to PrestaShop 
            database. Increase speed of data management, take advantage of simplicity and reliability with all-in-one
            Store Manager via Bridge Connector.'
        );

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get(BridgeConnectorConstants::OPTIONS_KEY)) {
            $this->warning = $this->l('No name provided');
        }

        $database_version_cur = $this->getDatabaseVersion();

        if ($database_version_cur) {
            // Update module version in database
            if (version_compare($database_version_cur, $this->version, '<')) {
                self::upgradeModuleVersion($this->name, $this->version);
                $this->_generateConfigXml();
            }
        }
    }

    public function install()
    {
        return parent::install() && $this->saveBridgeData() && $this->createTables();
    }

    public function uninstall()
    {
        if (!parent::uninstall()
            || !Configuration::deleteByName(BridgeConnectorConstants::OPTIONS_KEY)
            || !$this->dropTables()
        ) {
            return false;
        }

        return true;
    }

    public function getContent()
    {
        $output = null;

        if (Tools::getIsset('bridgeconnector_login') && Tools::getIsset('bridgeconnector_password')) {
            if (Tools::isSubmit('submit'.$this->name)) {
                $my_module_name = (string)Tools::getValue('submitbridgeconnector');

                if (!$my_module_name || empty($my_module_name) || !Validate::isGenericName($my_module_name)) {
                    $output .= $this->displayError($this->l('Invalid Configuration value'));
                } else {
                    $this->saveBridgeData(true);
                    $output .= $this->displayConfirmation($this->l('Settings updated'));
                }
            }
        }

        $bridge_options = unserialize(Configuration::get(BridgeConnectorConstants::OPTIONS_KEY));

        if ($bridge_options['bridge_hash'] == md5('11')) {
            $output .= $this->displayError(
                $this->l(
                    'Bridge Connector: Default login and password are "1". Change them because of security reasons,
                    please!'
                )
            );
        }

        if (!is_dir(_PS_ROOT_DIR_.$bridge_options['tmp_dir'])) {
            $output .= $this->displayError($this->l('Directory for module operations does not exist'));
        } elseif (!is_writable(_PS_ROOT_DIR_.$bridge_options['tmp_dir'])) {
            $output .= $this->displayError($this->l('Set writing permissions for temporary directory'));
        }

        return $output.$this->displayForm($bridge_options);
    }

    private function displayForm($bridge_options)
    {
        $fields_form = array();

        // Get default language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Access Settings'),
            ),
            'input' => array(
                array(
                    'type'  => 'text',
                    'label' => $this->l('Login'),
                    'name'  => 'bridgeconnector_login',
                    'id'    => 'bridgeconnector_login',
                    'desc'  => $this->l(
                        'Login for accessing Bridge Connector from eMagicOne Store Manager for Prestashop.'
                    )
                ),
                array(
                    'type'  => 'password',
                    'label' => $this->l('Password'),
                    'name'  => 'bridgeconnector_password',
                    'id'    => 'bridgeconnector_password',
                    'desc'  => $this->l(
                        'Password for accessing Bridge Connector from eMagicOne Store Manager for Prestashop.'
                    ),
                )
            ),
        );
        $fields_form[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('Store Manager Bridge Settings'),
            ),
            'input' => array(
                array(
                    'type'  => 'text',
                    'label' => $this->l('Directory for Module Operations'),
                    'name'  => 'bridgeconnector_tmp_dir',
                    'id'    => 'bridgeconnector_tmp_dir',
                    'desc'  => $this->l('Enter temporary folder path. It should be writable.'),
                ),
                array(
                    'type'      => 'switch',
                    'label'     => $this->l('Allow Compression'),
                    'is_bool'   => true,
                    'name'      => 'bridgeconnector_allow_compression',
                    'id'        => 'bridgeconnector_allow_compression',
                    'desc'      => $this->l(
                        'Compression of generated dump file. It is recommended for save space and faster getting data
                        in Store Manager.'
                    ),
                    'values'    => array(
                        array(
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Compress Level'),
                    'name'  => 'bridgeconnector_compress_level',
                    'id'    => 'bridgeconnector_compress_level',
                    'desc'  => $this->l(
                        'Values between 1 and 9 will trade off speed and efficiency. The 1 flag means "fast but less
                        efficient" compression, and 9 means "slow but most efficient" compression.'
                    ),
                    'class' => 'fixed-width-xs'
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Selection Query Size'),
                    'name'  => 'bridgeconnector_limit_query_size',
                    'id'    => 'bridgeconnector_limit_query_size',
                    'desc'  => $this->l('Restrict capacity of queries per one request (kB).'),
                    'class' => 'fixed-width-xl'
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Package Size'),
                    'name'  => 'bridgeconnector_package_size',
                    'id'    => 'bridgeconnector_package_size',
                    'desc'  => 'Size of parts for getting dump file (kB).',
                    'class' => 'fixed-width-xl'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Exclude Tables'),
                    'name'  => 'bridgeconnector_db_tables_invisible',
                    'id'    => 'bridgeconnector_db_tables_invisible',
                    'desc'  => $this->l(
                        'Do not get data from tables specified here. Use this to reduce size of the data retrieved
                        from module. Specify table names separated by semicolon ;'
                    ),
                    'class' => 'bridgeconnector_invisible',
                ),
                array(
                    'type'  => 'hidden',
                    'name'  => 'bridgeconnector_db_tables_hidden',
                    'id'    => 'bridgeconnector_db_tables_hidden',
                ),
                array(
                    'type'  => 'text',
                    'label' => $this->l('Allowed IPs'),
                    'name'  => 'bridgeconnector_allowed_ips',
                    'id'    => 'bridgeconnector_allowed_ips',
                    'desc'  => $this->l(
                        'In order to allow module using only from specific IP address you should add IP address here
                        (for example, 48.78.88.98 - only one IP address; 48.78.88.98, 15.25.35.45 - two IP addresses;
                        48.78.x.x - all IP addresses which begin from 48.78.)'
                    ),
                ),
                array(
                    'type'  => 'hidden',
                    'name'  => 'bridgeconnector_selftest_hidden',
                    'id'    => 'bridgeconnector_selftest_hidden',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Information for Server Administrator'),
                    'name'  => 'bridgeconnector_selftest',
                    'id'    => 'bridgeconnector_selftest',
                    'desc'  => $this->l(
                        'These details are important for server administrators and eMagicOne Support Team'
                    ),
                    'class' => 'bridgeconnector_invisible',
                ),
                /*array(
                    'type'  => 'text',
                    'label' => $this->l('Email for Log Reports'),
                    'name'  => 'bridgeconnector_notification_email',
                    'id'    => 'bridgeconnector_notification_email',
                    'desc'  => $this->l('Please enter your email address here to receive notifications.'),
                )*/
            ),
            'submit' => array(
                'title' => version_compare($this->cart_version, '1.6.0.0', '<')
                    ? $this->l('Update settings')
                    : $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        (version_compare($this->cart_version, '1.6.0.0', '<') && version_compare($this->cart_version, '1.5.0.0', '>='))
            ? $helper->show_toolbar = false
            : $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes -> Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
            array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules'),
            ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues($bridge_options),
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id
        );

        if (version_compare($this->cart_version, '1.6.0.0', '<')) {
            $root_path = '';
        } else {
            $root_path = _PS_ROOT_DIR_;
        }

        $this->context->controller->addCSS("$root_path/modules/$this->name/views/css/bridgeconnector.css");
        $this->context->controller->addJS("$root_path/modules/$this->name/views/js/common.js");

        return $helper->generateForm($fields_form);
    }

    private function getConfigFieldsValues($bridge_options)
    {
        $shop_url = new ShopUrl((int)Configuration::get('PS_SHOP_DEFAULT'));
        $base_url = $shop_url->getURL(Configuration::get('PS_SSL_ENABLED'));
        $selftest = new SelfTest($this->version, $base_url, $bridge_options['bridge_hash']);

        $data = array(
            'bridgeconnector_login'               => $bridge_options['login'],
            'bridgeconnector_password'            => $bridge_options['password'],
            'bridgeconnector_tmp_dir'             => $bridge_options['tmp_dir'],
            'bridgeconnector_allow_compression'   => $bridge_options['allow_compression'],
            'bridgeconnector_compress_level'      => $bridge_options['compress_level'],
            'bridgeconnector_limit_query_size'    => $bridge_options['limit_query_size'],
            'bridgeconnector_package_size'        => $bridge_options['package_size'],
            'bridgeconnector_db_tables_hidden'    => $this->getTablesToShow(),
//            'bridgeconnector_notification_email'  => $bridge_options['notification_email'],
            'bridgeconnector_allowed_ips'         => $bridge_options['allowed_ips'],
            'bridgeconnector_db_tables_invisible' => '',
            'bridgeconnector_selftest_hidden'     => $selftest->runSelfTest(),
            'bridgeconnector_selftest'            => '',
        );

        return $data;
    }

    private function saveBridgeData($is_submit = false)
    {
        $config = array();

        if ($is_submit) {
            $stored_data                 = unserialize(Configuration::get(BridgeConnectorConstants::OPTIONS_KEY));
            $config['login']             = (string)Tools::getValue('bridgeconnector_login');
            $config['password']          = $this->getDecryptedPassword($stored_data['password']);
            $config['tmp_dir']           = (string)Tools::getValue('bridgeconnector_tmp_dir');
            $config['allow_compression'] = (int)Tools::getValue('bridgeconnector_allow_compression');
            $config['compress_level']    = (int)Tools::getValue('bridgeconnector_compress_level');
            $config['limit_query_size']  = (int)Tools::getValue('bridgeconnector_limit_query_size');
            $config['package_size']      = (int)Tools::getValue('bridgeconnector_package_size');
            $config['exclude_db_tables'] = implode(';', Tools::getValue('bridgeconnector_exclude_db_tables_checked'));
//            $config['notification_email'] = (string)Tools::getValue('bridgeconnector_notification_email');
            $config['allowed_ips']       = (string)Tools::getValue('bridgeconnector_allowed_ips');
            $config['last_clear_date']   = isset($stored_data['last_clear_date'])
                ? (int)$stored_data['last_clear_date']
                : time();

            $request_password = Tools::getValue('bridgeconnector_password');

            if (Tools::strlen($request_password) > 0) {
                $config['password'] = $request_password;
            }

            $config = $this->prepareData($config);
        } else {
            $config['login']              = self::DEFAULT_LOGIN;
            $config['password']           = self::DEFAULT_PASSWORD;
            $config['tmp_dir']            = $this->default_tmp_dir;
            $config['allow_compression']  = self::DEFAULT_ALLOW_COMPRESSION;
            $config['compress_level']     = self::DEFAULT_COMPRESS_LEVEL;
            $config['limit_query_size']   = self::DEFAULT_LIMIT_QUERY_SIZE;
            $config['package_size']       = self::DEFAULT_PACKAGE_SIZE;
            $config['exclude_db_tables']  = implode(';', $this->getDefaultExcludedTables());
//            $config['notification_email'] = self::DEFAULT_NOTIFICATION_EMAIL;
            $config['allowed_ips']        = self::DEFAULT_ALLOWED_IPS;
            $config['last_clear_date']    = time();
        }

        $config['bridge_hash'] = md5($config['login'].$config['password']);
        $config['password']    = $this->getEncryptedPassword($config['password']);

        return Configuration::updateGlobalValue(BridgeConnectorConstants::OPTIONS_KEY, serialize($config));
    }

    private function getEncryptedPassword($data)
    {
        return call_user_func(
            'base64_encode',
            mcrypt_encrypt(MCRYPT_RIJNDAEL_128, self::CRYPT_KEY, $data, MCRYPT_MODE_ECB)
        );
    }

    private function getDecryptedPassword($data)
    {
        return trim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_128,
                self::CRYPT_KEY,
                call_user_func('base64_decode', $data),
                MCRYPT_MODE_ECB
            )
        );
    }

    private function prepareData($config)
    {
        // trim '/', '\', '.' from begin and end
        $config['tmp_dir'] = preg_replace('/^[\/|\\\|\.]*|[\/|\\\|\.]*$/', '', $config['tmp_dir']);

        // add '/' to begin
        $config['tmp_dir'] = '/'.$config['tmp_dir'];

        if ($config['compress_level'] < (int)self::MIN_COMPRESS_LEVEL) {
            $config['compress_level'] = (int)self::MIN_COMPRESS_LEVEL;
        } elseif ($config['compress_level'] > (int)self::MAX_COMPRESS_LEVEL) {
            $config['compress_level'] = (int)self::MAX_COMPRESS_LEVEL;
        }

        if ($config['limit_query_size'] < (int)self::MIN_LIMIT_QUERY_SIZE) {
            $config['limit_query_size'] = (int)self::MIN_LIMIT_QUERY_SIZE;
        } elseif ($config['limit_query_size'] > (int)self::MAX_LIMIT_QUERY_SIZE) {
            $config['limit_query_size'] = (int)self::MAX_LIMIT_QUERY_SIZE;
        }

        if ($config['package_size'] < (int)self::MIN_PACKAGE_SIZE) {
            $config['package_size'] = (int)self::MIN_PACKAGE_SIZE;
        } elseif ($config['package_size'] > (int)self::MAX_PACKAGE_SIZE) {
            $config['package_size'] = (int)self::MAX_PACKAGE_SIZE;
        }

        return $config;
    }

    private function getTablesToShow()
    {
        $options = '';

        $db_tables = $this->getDbTables();
        $excluded_tables = $this->getExcludedTables();

        foreach ($db_tables as $table_name) {
            $table_name = array_shift($table_name);
            $checked = in_array($table_name, $excluded_tables) ? 'checked' : '';
            $options .= '<input type="checkbox" name="bridgeconnector_exclude_db_tables_checked[]" value="'
                .$table_name.'" '.$checked.'>'.$table_name.'</input><br>';
        }

        return $options;
    }

    private function getDbTables()
    {
        $query = 'SHOW TABLES';

        return Db::getInstance()->executeS($query);
    }

    private function getExcludedTables()
    {
        $bridge_options = unserialize(Configuration::get(BridgeConnectorConstants::OPTIONS_KEY));

        return explode(';', $bridge_options['exclude_db_tables']);
    }

    private function getDefaultExcludedTables()
    {
        $table_excluded = array(
            _DB_PREFIX_.'connections',
            _DB_PREFIX_.'guest',
            _DB_PREFIX_.'pagenotfound',
            _DB_PREFIX_.'log',
        );

        $query = "SELECT `table_name`
                    FROM information_schema.tables
                    WHERE table_schema = '"._DB_NAME_."'
                        AND table_name NOT LIKE '".str_replace('_', '\_', _DB_PREFIX_)."%'";
        $tables = Db::getInstance()->executeS($query);

        foreach ($tables as $table) {
            $table_excluded[] = $table;
        }

        return $table_excluded;
    }

    private function getDatabaseVersion()
    {
        return Db::getInstance()->getValue(
            'SELECT `version` FROM `'._DB_PREFIX_.'module` WHERE `id_module` = '.(int)$this->id
        );
    }

    private function createTables()
    {
        // Create table `bridgeconnector_session_keys`
        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.self::TABLE_SESSION_KEYS.'` (
            `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
            `session_key` VARCHAR(100) NOT NULL,
            `date_added` DATETIME NOT NULL,
            `last_activity` DATETIME NOT NULL,
            PRIMARY KEY (`id`))';
        $tc_session_keys = Db::getInstance()->execute($sql);

        // Create table `bridgeconnector_failed_login`
        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.self::TABLE_FAILED_LOGIN.'` (
            `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
            `ip` VARCHAR(20) NOT NULL,
            `date_added` DATETIME NOT NULL,
            PRIMARY KEY (`id`))';
        $tc_failed_attempts = Db::getInstance()->execute($sql);

        return $tc_session_keys && $tc_failed_attempts;
    }

    private function dropTables()
    {
        // Drop table `mobassistantconnector_session_keys`
        $sql = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.self::TABLE_SESSION_KEYS.'`';
        $td_session_keys = Db::getInstance()->execute($sql);

        // Drop table `mobassistantconnector_failed_login`
        $sql = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.self::TABLE_FAILED_LOGIN.'`';
        $td_failed_attempts = Db::getInstance()->execute($sql);

        return $td_session_keys && $td_failed_attempts;
    }
}
