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
