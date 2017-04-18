<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        ShipmentDetails.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ShipmentDetails Request model for DHL API
 */
class ShipmentDetails extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(

        'AccountType' => array(
            'type' => 'AccountType',
            'required' => true,
            'subobject' => false,
            'comment' => 'Account Type by method of payment ( DHL account
				vs. Credit card)',
            'enumeration' => 'D,C',
            'minLength' => '1',
            'maxLength' => '1',
        ),
        'AccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account number',
            'maxLength' => '12',
        ),
        'BillToAccountNumber' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Account number',
            'maxLength' => '12',
        ),
        'AWBNumber' => array(
            'type' => 'AWBNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '10',
        ),
        'NumberOfPieces' => array(
            'type' => 'positiveInteger',
            'required' => true,
            'subobject' => false,
        ),
        'Weight' => array(
            'type' => 'Weight',
            'required' => true,
            'subobject' => false,
            'comment' => 'Weight of piece or shipment',
            'fractionDigits' => '1',
            'maxInclusive' => '999999.9',
            'totalDigits' => '7',
        ),
        'WeightUnit' => array(
            'type' => 'WeightUnit',
            'required' => true,
            'subobject' => false,
            'comment' => 'Unit of weight measurement (K:KiloGram)(L:Pounds)',
            'Length' => '1',
            'enumeration' => 'K,L',
        ),
        'GlobalProductCode' => array(
            'type' => 'GlobalProductCode',
            'required' => false,
            'subobject' => false,
            'minLength' => '1',
            'maxLength' => '4',
        ),
        'DoorTo' => array(
            'type' => 'DoorTo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Defines the type of delivery service that applies
				to the shipment DD (Door to Door), DA (Door to Airport) and DC (Door to Door non-compliant)',
            'length' => '2',
            'enumeration' => 'DD,DA,DC',
        ),
        'DimensionUnit' => array(
            'type' => 'DimensionUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Dimension Unit I (inches), C(Centremetres)',
            'Length' => '1',
            'enumeration' => 'C,I',
        ),
        'InsuredAmount' => array(
            'type' => 'Money',
            'required' => false,
            'subobject' => false,
            'comment' => 'Monetary amount (with 2 decimal precision)',
            'minInclusive' => '0.00',
            'maxInclusive' => '9999999999.99',
        ),
        'InsuredCurrencyCode' => array(
            'type' => 'InsuredCurrencyCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO currency code',
            'length' => '3',
        ),
        'Pieces' => array(
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
        'SpecialService' => array(
            'type' => 'SpecialService',
            'required' => false,
            'subobject' => true,
        ),
    );
}
