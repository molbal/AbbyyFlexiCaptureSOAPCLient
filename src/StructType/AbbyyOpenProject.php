<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenProject StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyOpenProject extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The projectNameOrGuid
     * @var string
     */
    public $projectNameOrGuid;
    /**
     * Constructor method for OpenProject
     * @uses AbbyyOpenProject::setSessionId()
     * @uses AbbyyOpenProject::setProjectNameOrGuid()
     * @param int $sessionId
     * @param string $projectNameOrGuid
     */
    public function __construct($sessionId = null, $projectNameOrGuid = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setProjectNameOrGuid($projectNameOrGuid);
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
     * @return \AbbyyBridge\StructType\AbbyyOpenProject
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
     * Get projectNameOrGuid value
     * @return string|null
     */
    public function getProjectNameOrGuid()
    {
        return $this->projectNameOrGuid;
    }
    /**
     * Set projectNameOrGuid value
     * @param string $projectNameOrGuid
     * @return \AbbyyBridge\StructType\AbbyyOpenProject
     */
    public function setProjectNameOrGuid($projectNameOrGuid = null)
    {
        // validation for constraint: string
        if (!is_null($projectNameOrGuid) && !is_string($projectNameOrGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectNameOrGuid, true), gettype($projectNameOrGuid)), __LINE__);
        }
        $this->projectNameOrGuid = $projectNameOrGuid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyOpenProject
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
