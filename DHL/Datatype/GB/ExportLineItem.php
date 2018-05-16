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
 * File:        ExportLineItem.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * ExportLineItem Request model for DHL API
 */
class ExportLineItem extends Base
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
        'LineNumber' => array(
            'type' => 'LineNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'minInclusive' => '1',
            'maxInclusive' => '200',
        ), 
        'Quantity' => array(
            'type' => 'Quantity',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity',
            'maxInclusive' => '32000',
        ), 
        'QuantityUnit' => array(
            'type' => 'QuantityUnit',
            'required' => false,
            'subobject' => false,
            'comment' => 'Quantity unit of measure (tens, hundreds, thousands, etc.)',
            'enumeration' => 'UOM,BOX,2GM,2M,2M3,3M3,M3,DPR,DOZ,2NO,PCS,GM,GRS,KG,L,M,3GM,3L,X,NO,2KG,PRS,2L,3KG,CM2,2M2,3M2,M2,4M2,3M,CM,CONE,CT,EA,LBS,RILL,ROLL,SET,TU,YDS'
        ), 
        'Description' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Value' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'IsDomestic' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ), 
        'CommodityCode' => array(
            'type' => 'CommodityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Commodity codes for shipment type',
            'minLength' => '1',
            'maxLength' => '20',
        ), 
        'ScheduleB' => array(
            'type' => 'ScheduleB',
            'required' => false,
            'subobject' => false,
            'comment' => 'Schedule B numner',
            'maxLength' => '15',
        ), 
        'ECCN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'Weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => true,
        ), 
        'GrossWeight' => array(
            'type' => 'GrossWeight',
            'required' => false,
            'subobject' => true,
        ), 
        'License' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ), 
        'LicenseSymbol' => array(
            'type' => 'LicenseNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export license number',
            'maxLength' => '16',
        ), 
    );
}
