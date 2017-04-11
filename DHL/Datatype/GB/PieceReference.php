<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 11/04/17
 * Time: 10.24
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

class PieceReference extends Base
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
        'ReferenceID' => array(
            'type' => 'ReferenceID',
            'required' => true,
            'subobject' => false,
            'comment' => 'Piece reference ID',
            'maxLength' => '35',
        ),
        'ReferenceType' => array(
            'type' => 'ReferenceType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Piece reference type',
            'length' => '2',
        ),
    );
}
