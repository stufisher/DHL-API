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
 * File:        MultiLabel.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB; 
use DHL\Datatype\Base;

/**
 * MultiLabel Response model for DHL API
 */
class MultiLabel extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parent node name of the object 
     * @var string
     */
    // protected $_xmlNodeName = 'MultiLabel';

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'DocName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'DocFormat' => array(
            'type' => 'DocFormat',
            'required' => false,
            'subobject' => false,
            'enumeration' => 'PDF,PNG',
        ), 
        'DocImageVal' => array(
            'type' => 'DocImageVal',
            'required' => false,
            'subobject' => false,
            'comment' => 'Document base64 string'
        ), 
    );
}
