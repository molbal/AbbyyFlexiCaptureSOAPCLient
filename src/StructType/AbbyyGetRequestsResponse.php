<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRequestsResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetRequestsResponse extends AbstractStructBase
{
    /**
     * The requests
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyRequests
     */
    public $requests;
    /**
     * Constructor method for GetRequestsResponse
     * @uses AbbyyGetRequestsResponse::setRequests()
     * @param \AbbyyBridge\StructType\AbbyyRequests $requests
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyRequests $requests = null)
    {
        $this
            ->setRequests($requests);
    }
    /**
     * Get requests value
     * @return \AbbyyBridge\StructType\AbbyyRequests|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
    /**
     * Set requests value
     * @param \AbbyyBridge\StructType\AbbyyRequests $requests
     * @return \AbbyyBridge\StructType\AbbyyGetRequestsResponse
     */
    public function setRequests(\AbbyyBridge\StructType\AbbyyRequests $requests = null)
    {
        $this->requests = $requests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetRequestsResponse
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
