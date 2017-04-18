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
 * File:        PUPlace.php
 * Project:     DHL API
 *
 * @author      Moro Alberto
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * Place Request model for DHL API
 */
class PUPlace extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * will produce <Place>...</Place>
     * instead of   <PUPlace>...</PUPlace>
     * @var string
     */
    protected $_xmlNodeName = 'Place';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'LocationType' => array(
            'type' => 'String',
            'required' => true,
            'subobject' => false,
            'comment' => 'Identifies if a location is a business, residence,
				or both (B:Business, R:Residence, C:Business Residence)',
            'length' => '1',
            'enumeration' => 'B,R,C',
        ), 
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => true,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
            'maxLength' => '35',
        ), 
        'Address1' => array(
            'type' => 'AddressLine',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
            'minLength' => '0',
            'maxLength' => '35',
        ),
        'Address2' => array(
            'type' => 'AddressLine',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line',
            'minLength' => '0',
            'maxLength' => '35',
        ),
        'PackageLocation' => array(
            'type' => 'PackageLocation',
            'required' => true,
            'subobject' => false,
            'comment' => 'PackageLocation',
            'minLength' => '0',
            'maxLength' => '35',
        ),
        'City' => array(
            'type' => 'City',
            'required' => true,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ),
        'DivisionCode' => array(
            'type' => 'StateCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (state) code.',
            'maxLength' => '35',
        ), 
        'Division' => array(
            'type' => 'State',
            'required' => false,
            'subobject' => false,
            'comment' => 'State',
            'maxLength' => '35',
        ),
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ),
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => true,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ), 

    );
}
