<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 13/04/17
 * Time: 15.27
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 *
 */
class Pickup extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;
    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_params = array(
        'PickupDate' => array(
            'type' => 'date',
            'required' => true,
            'subobject' => false,
        ),
        'PickupTypeCode' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'same day or advance pickup',
            'minLength' => '1',
            'maxLength' => '1',
            'enumeration' => 'S,A',
        ), 
        'ReadyByTime' => array(
            'type' => 'TimeHM',
            'required' => true,
            'subobject' => false,
            'lenght'=> '5'
        ),
        'CloseTime' => array(
            'type' => 'TimeHM',
            'required' => true,
            'subobject' => false,
            'lenght'=> '5'
        ),
        'Pieces' => array(
            'type' => 'positiveInteger',
            'required' => true,
            'subobject' => false,
            'minValue' => '1',
            'maxValue' => '99',
        ),
    );
}
