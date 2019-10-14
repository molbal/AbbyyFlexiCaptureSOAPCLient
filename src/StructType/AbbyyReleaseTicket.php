<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReleaseTicket StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyReleaseTicket extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The ticketId
     * @var int
     */
    public $ticketId;
    /**
     * Constructor method for ReleaseTicket
     * @uses AbbyyReleaseTicket::setSessionId()
     * @uses AbbyyReleaseTicket::setTicketId()
     * @param int $sessionId
     * @param int $ticketId
     */
    public function __construct($sessionId = null, $ticketId = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setTicketId($ticketId);
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyyReleaseTicket
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * Get ticketId value
     * @return int|null
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }
    /**
     * Set ticketId value
     * @param int $ticketId
     * @return \AbbyyBridge\StructType\AbbyyReleaseTicket
     */
    public function setTicketId($ticketId = null)
    {
        // validation for constraint: int
        if (!is_null($ticketId) && !(is_int($ticketId) || ctype_digit($ticketId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketId, true), gettype($ticketId)), __LINE__);
        }
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyReleaseTicket
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
