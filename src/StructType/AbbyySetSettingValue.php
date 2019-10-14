<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSettingValue StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyySetSettingValue extends AbstractStructBase
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * The batchTypeId
     * @var int
     */
    public $batchTypeId;
    /**
     * The settingName
     * @var string
     */
    public $settingName;
    /**
     * The settingValue
     * @var string
     */
    public $settingValue;
    /**
     * Constructor method for SetSettingValue
     * @uses AbbyySetSettingValue::setUserId()
     * @uses AbbyySetSettingValue::setProjectId()
     * @uses AbbyySetSettingValue::setBatchTypeId()
     * @uses AbbyySetSettingValue::setSettingName()
     * @uses AbbyySetSettingValue::setSettingValue()
     * @param int $userId
     * @param int $projectId
     * @param int $batchTypeId
     * @param string $settingName
     * @param string $settingValue
     */
    public function __construct($userId = null, $projectId = null, $batchTypeId = null, $settingName = null, $settingValue = null)
    {
        $this
            ->setUserId($userId)
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setSettingName($settingName)
            ->setSettingValue($settingValue);
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
     * @return \AbbyyBridge\StructType\AbbyySetSettingValue
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
     * @return \AbbyyBridge\StructType\AbbyySetSettingValue
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
     * Get batchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->batchTypeId;
    }
    /**
     * Set batchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyySetSettingValue
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->batchTypeId = $batchTypeId;
        return $this;
    }
    /**
     * Get settingName value
     * @return string|null
     */
    public function getSettingName()
    {
        return $this->settingName;
    }
    /**
     * Set settingName value
     * @param string $settingName
     * @return \AbbyyBridge\StructType\AbbyySetSettingValue
     */
    public function setSettingName($settingName = null)
    {
        // validation for constraint: string
        if (!is_null($settingName) && !is_string($settingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settingName, true), gettype($settingName)), __LINE__);
        }
        $this->settingName = $settingName;
        return $this;
    }
    /**
     * Get settingValue value
     * @return string|null
     */
    public function getSettingValue()
    {
        return $this->settingValue;
    }
    /**
     * Set settingValue value
     * @param string $settingValue
     * @return \AbbyyBridge\StructType\AbbyySetSettingValue
     */
    public function setSettingValue($settingValue = null)
    {
        // validation for constraint: string
        if (!is_null($settingValue) && !is_string($settingValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settingValue, true), gettype($settingValue)), __LINE__);
        }
        $this->settingValue = $settingValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyySetSettingValue
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
