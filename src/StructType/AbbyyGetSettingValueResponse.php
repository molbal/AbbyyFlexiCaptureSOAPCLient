<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSettingValueResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetSettingValueResponse extends AbstractStructBase
{
    /**
     * The value
     * @var string
     */
    public $value;
    /**
     * Constructor method for GetSettingValueResponse
     * @uses AbbyyGetSettingValueResponse::setValue()
     * @param string $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValueResponse
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValueResponse
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
