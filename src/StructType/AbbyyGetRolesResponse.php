<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRolesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetRolesResponse extends AbstractStructBase
{
    /**
     * The roles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyRoles
     */
    public $roles;
    /**
     * Constructor method for GetRolesResponse
     * @uses AbbyyGetRolesResponse::setRoles()
     * @param \AbbyyBridge\StructType\AbbyyRoles $roles
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyRoles $roles = null)
    {
        $this
            ->setRoles($roles);
    }
    /**
     * Get roles value
     * @return \AbbyyBridge\StructType\AbbyyRoles|null
     */
    public function getRoles()
    {
        return $this->roles;
    }
    /**
     * Set roles value
     * @param \AbbyyBridge\StructType\AbbyyRoles $roles
     * @return \AbbyyBridge\StructType\AbbyyGetRolesResponse
     */
    public function setRoles(\AbbyyBridge\StructType\AbbyyRoles $roles = null)
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetRolesResponse
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
