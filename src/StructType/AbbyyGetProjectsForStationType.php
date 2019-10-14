<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectsForStationType StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetProjectsForStationType extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The workstationType
     * @var int
     */
    public $workstationType;
    /**
     * Constructor method for GetProjectsForStationType
     * @uses AbbyyGetProjectsForStationType::setUserId()
     * @uses AbbyyGetProjectsForStationType::setWorkstationType()
     * @param int $userId
     * @param int $workstationType
     */
    public function __construct($userId = null, $workstationType = null)
    {
        $this
            ->setUserId($userId)
            ->setWorkstationType($workstationType);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForStationType
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        return $this;
    }
    /**
     * Get workstationType value
     * @return int|null
     */
    public function getWorkstationType()
    {
        return $this->workstationType;
    }
    /**
     * Set workstationType value
     * @param int $workstationType
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForStationType
     */
    public function setWorkstationType($workstationType = null)
    {
        // validation for constraint: int
        if (!is_null($workstationType) && !(is_int($workstationType) || ctype_digit($workstationType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workstationType, true), gettype($workstationType)), __LINE__);
        }
        $this->workstationType = $workstationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForStationType
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
