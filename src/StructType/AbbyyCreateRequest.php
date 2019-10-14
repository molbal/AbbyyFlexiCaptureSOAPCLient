<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRequest StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyCreateRequest extends AbstractStructBase
{
    /**
     * The request
     * @var \AbbyyBridge\StructType\AbbyyServerRequest
     */
    public $request;
    /**
     * Constructor method for CreateRequest
     * @uses AbbyyCreateRequest::setRequest()
     * @param \AbbyyBridge\StructType\AbbyyServerRequest $request
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyServerRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \AbbyyBridge\StructType\AbbyyServerRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \AbbyyBridge\StructType\AbbyyServerRequest $request
     * @return \AbbyyBridge\StructType\AbbyyCreateRequest
     */
    public function setRequest(\AbbyyBridge\StructType\AbbyyServerRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyCreateRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
