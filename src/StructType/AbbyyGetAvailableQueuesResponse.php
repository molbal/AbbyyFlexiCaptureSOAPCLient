<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableQueuesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetAvailableQueuesResponse extends AbstractStructBase
{
    /**
     * The queueInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyQueueInfo
     */
    public $queueInfo;
    /**
     * Constructor method for GetAvailableQueuesResponse
     * @uses AbbyyGetAvailableQueuesResponse::setQueueInfo()
     * @param \AbbyyBridge\StructType\AbbyyQueueInfo $queueInfo
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyQueueInfo $queueInfo = null)
    {
        $this
            ->setQueueInfo($queueInfo);
    }
    /**
     * Get queueInfo value
     * @return \AbbyyBridge\StructType\AbbyyQueueInfo|null
     */
    public function getQueueInfo()
    {
        return $this->queueInfo;
    }
    /**
     * Set queueInfo value
     * @param \AbbyyBridge\StructType\AbbyyQueueInfo $queueInfo
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableQueuesResponse
     */
    public function setQueueInfo(\AbbyyBridge\StructType\AbbyyQueueInfo $queueInfo = null)
    {
        $this->queueInfo = $queueInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableQueuesResponse
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
