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
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with Bridge Connector.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  @author    eMagicOne <contact@emagicone.com>
 *  @copyright 2018 eMagicOne
 *  @license   http://www.gnu.org/licenses   GNU General Public License
 */

$(document).ready(function() {
    var bridgeconnector_login        = $('#bridgeconnector_login');
    var bridgeconnector_div_tables   = '<div id="bridgeconnector_div_tables" style="height: 300px; overflow: scroll;">';
    var bridgeconnector_div_selftest = '<div id="bridgeconnector_div_selftest"></div>';

    $('#bridgeconnector_db_tables_invisible').parent().prepend(bridgeconnector_div_tables);
    $('#bridgeconnector_div_tables').append($('#bridgeconnector_db_tables_hidden').val());

    $('#bridgeconnector_selftest').parent().prepend(bridgeconnector_div_selftest);
    $('#bridgeconnector_div_selftest').html($('#bridgeconnector_selftest_hidden').val());
});