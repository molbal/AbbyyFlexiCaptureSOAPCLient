<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Template StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyTemplate extends AbstractStructBase
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
     * The Version
     * @var int
     */
    public $Version;
    /**
     * The IsDisabled
     * @var bool
     */
    public $IsDisabled;
    /**
     * Constructor method for Template
     * @uses AbbyyTemplate::setId()
     * @uses AbbyyTemplate::setName()
     * @uses AbbyyTemplate::setVersion()
     * @uses AbbyyTemplate::setIsDisabled()
     * @param int $id
     * @param string $name
     * @param int $version
     * @param bool $isDisabled
     */
    public function __construct($id = null, $name = null, $version = null, $isDisabled = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setVersion($version)
            ->setIsDisabled($isDisabled);
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
     * @return \AbbyyBridge\StructType\AbbyyTemplate
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
     * @return \AbbyyBridge\StructType\AbbyyTemplate
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
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \AbbyyBridge\StructType\AbbyyTemplate
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get IsDisabled value
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->IsDisabled;
    }
    /**
     * Set IsDisabled value
     * @param bool $isDisabled
     * @return \AbbyyBridge\StructType\AbbyyTemplate
     */
    public function setIsDisabled($isDisabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDisabled) && !is_bool($isDisabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDisabled, true), gettype($isDisabled)), __LINE__);
        }
        $this->IsDisabled = $isDisabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyTemplate
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
