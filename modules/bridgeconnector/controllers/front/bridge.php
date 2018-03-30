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

class BridgeconnectorBridgeModuleFrontController extends ModuleFrontController
{
    private $shop_cart_overrider;

    public function __construct()
    {
        require_once _PS_MODULE_DIR_.'/bridgeconnector/classes/BridgeConnectorConstants.php';
        require_once _PS_MODULE_DIR_.'/'.BridgeConnectorConstants::MODULE_NAME.'/classes/BridgeConnectorCore.php';
        require_once _PS_MODULE_DIR_.'/'.BridgeConnectorConstants::MODULE_NAME.'/classes/PrestashopOverrider.php';
        require_once _PS_MODULE_DIR_.'/'.BridgeConnectorConstants::MODULE_NAME.'/classes/BridgeCommon.php';

        $this->shop_cart_overrider = new PrestashopOverrider(
            BridgeConnectorConstants::MODULE_NAME,
            BridgeConnectorConstants::OPTIONS_KEY
        );

        new BridgeCommon(
            $this->shop_cart_overrider,
            BridgeConnectorConstants::MODULE_VERSION,
            BridgeConnectorConstants::MODULE_REVISION
        );
    }
}
