<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectsForUser StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetProjectsForUser extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The roleType
     * @var int
     */
    public $roleType;
    /**
     * Constructor method for GetProjectsForUser
     * @uses AbbyyGetProjectsForUser::setUserId()
     * @uses AbbyyGetProjectsForUser::setRoleType()
     * @param int $userId
     * @param int $roleType
     */
    public function __construct($userId = null, $roleType = null)
    {
        $this
            ->setUserId($userId)
            ->setRoleType($roleType);
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
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForUser
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
     * Get roleType value
     * @return int|null
     */
    public function getRoleType()
    {
        return $this->roleType;
    }
    /**
     * Set roleType value
     * @param int $roleType
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForUser
     */
    public function setRoleType($roleType = null)
    {
        // validation for constraint: int
        if (!is_null($roleType) && !(is_int($roleType) || ctype_digit($roleType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleType, true), gettype($roleType)), __LINE__);
        }
        $this->roleType = $roleType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForUser
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
