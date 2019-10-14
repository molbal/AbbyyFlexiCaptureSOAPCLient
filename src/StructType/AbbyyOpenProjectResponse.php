<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenProjectResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyOpenProjectResponse extends AbstractStructBase
{
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * Constructor method for OpenProjectResponse
     * @uses AbbyyOpenProjectResponse::setProjectId()
     * @param int $projectId
     */
    public function __construct($projectId = null)
    {
        $this
            ->setProjectId($projectId);
    }
    /**
     * Get projectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyOpenProjectResponse
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyOpenProjectResponse
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
