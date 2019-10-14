<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIdentity StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyUserIdentity extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Tenant
     * @var string
     */
    public $Tenant;
    /**
     * Constructor method for UserIdentity
     * @uses AbbyyUserIdentity::setName()
     * @uses AbbyyUserIdentity::setTenant()
     * @param string $name
     * @param string $tenant
     */
    public function __construct($name = null, $tenant = null)
    {
        $this
            ->setName($name)
            ->setTenant($tenant);
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
     * @return \AbbyyBridge\StructType\AbbyyUserIdentity
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
     * Get Tenant value
     * @return string|null
     */
    public function getTenant()
    {
        return $this->Tenant;
    }
    /**
     * Set Tenant value
     * @param string $tenant
     * @return \AbbyyBridge\StructType\AbbyyUserIdentity
     */
    public function setTenant($tenant = null)
    {
        // validation for constraint: string
        if (!is_null($tenant) && !is_string($tenant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tenant, true), gettype($tenant)), __LINE__);
        }
        $this->Tenant = $tenant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyUserIdentity
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
