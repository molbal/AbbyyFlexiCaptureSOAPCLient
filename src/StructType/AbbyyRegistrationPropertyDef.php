<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistrationPropertyDef StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyRegistrationPropertyDef extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The IsRequired
     * @var bool
     */
    public $IsRequired;
    /**
     * Constructor method for RegistrationPropertyDef
     * @uses AbbyyRegistrationPropertyDef::setId()
     * @uses AbbyyRegistrationPropertyDef::setName()
     * @uses AbbyyRegistrationPropertyDef::setIsRequired()
     * @param int $id
     * @param string $name
     * @param bool $isRequired
     */
    public function __construct($id = null, $name = null, $isRequired = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setIsRequired($isRequired);
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get IsRequired value
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }
    /**
     * Set IsRequired value
     * @param bool $isRequired
     * @return \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef
     */
    public function setIsRequired($isRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRequired) && !is_bool($isRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequired, true), gettype($isRequired)), __LINE__);
        }
        $this->IsRequired = $isRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef
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
