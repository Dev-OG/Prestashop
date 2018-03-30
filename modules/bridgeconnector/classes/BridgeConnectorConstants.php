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

class BridgeConnectorConstants
{
    const MODULE_VERSION  = '1.0.14';
    const MODULE_REVISION = 15;
    const MODULE_NAME     = 'bridgeconnector';
    const OPTIONS_KEY     = 'BRIDGE_OPTIONS';

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
}
