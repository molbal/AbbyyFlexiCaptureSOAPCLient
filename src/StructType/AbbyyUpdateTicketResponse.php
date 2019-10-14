<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTicketResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyUpdateTicketResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool
     */
    public $result;
    /**
     * The ticketInfo
     * @var \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public $ticketInfo;
    /**
     * Constructor method for UpdateTicketResponse
     * @uses AbbyyUpdateTicketResponse::setResult()
     * @uses AbbyyUpdateTicketResponse::setTicketInfo()
     * @param bool $result
     * @param \AbbyyBridge\StructType\AbbyyTicketInfo $ticketInfo
     */
    public function __construct($result = null, \AbbyyBridge\StructType\AbbyyTicketInfo $ticketInfo = null)
    {
        $this
            ->setResult($result)
            ->setTicketInfo($ticketInfo);
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \AbbyyBridge\StructType\AbbyyUpdateTicketResponse
     */
    public function setResult($result = null)
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Get ticketInfo value
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo|null
     */
    public function getTicketInfo()
    {
        return $this->ticketInfo;
    }
    /**
     * Set ticketInfo value
     * @param \AbbyyBridge\StructType\AbbyyTicketInfo $ticketInfo
     * @return \AbbyyBridge\StructType\AbbyyUpdateTicketResponse
     */
    public function setTicketInfo(\AbbyyBridge\StructType\AbbyyTicketInfo $ticketInfo = null)
    {
        $this->ticketInfo = $ticketInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyUpdateTicketResponse
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
