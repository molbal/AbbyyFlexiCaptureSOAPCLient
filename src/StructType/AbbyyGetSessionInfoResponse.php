<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSessionInfoResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetSessionInfoResponse extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The userName
     * @var string
     */
    public $userName;
    /**
     * The computerName
     * @var string
     */
    public $computerName;
    /**
     * The roleType
     * @var int
     */
    public $roleType;
    /**
     * Constructor method for GetSessionInfoResponse
     * @uses AbbyyGetSessionInfoResponse::setUserId()
     * @uses AbbyyGetSessionInfoResponse::setUserName()
     * @uses AbbyyGetSessionInfoResponse::setComputerName()
     * @uses AbbyyGetSessionInfoResponse::setRoleType()
     * @param int $userId
     * @param string $userName
     * @param string $computerName
     * @param int $roleType
     */
    public function __construct($userId = null, $userName = null, $computerName = null, $roleType = null)
    {
        $this
            ->setUserId($userId)
            ->setUserName($userName)
            ->setComputerName($computerName)
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
     * @return \AbbyyBridge\StructType\AbbyyGetSessionInfoResponse
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
     * Get userName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \AbbyyBridge\StructType\AbbyyGetSessionInfoResponse
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        return $this;
    }
    /**
     * Get computerName value
     * @return string|null
     */
    public function getComputerName()
    {
        return $this->computerName;
    }
    /**
     * Set computerName value
     * @param string $computerName
     * @return \AbbyyBridge\StructType\AbbyyGetSessionInfoResponse
     */
    public function setComputerName($computerName = null)
    {
        // validation for constraint: string
        if (!is_null($computerName) && !is_string($computerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($computerName, true), gettype($computerName)), __LINE__);
        }
        $this->computerName = $computerName;
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
     * @return \AbbyyBridge\StructType\AbbyyGetSessionInfoResponse
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
     * @return \AbbyyBridge\StructType\AbbyyGetSessionInfoResponse
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
