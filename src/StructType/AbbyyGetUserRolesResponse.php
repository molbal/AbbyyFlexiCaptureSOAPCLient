<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRolesResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetUserRolesResponse extends AbstractStructBase
{
    /**
     * The roleIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyRoleIds
     */
    public $roleIds;
    /**
     * Constructor method for GetUserRolesResponse
     * @uses AbbyyGetUserRolesResponse::setRoleIds()
     * @param \AbbyyBridge\StructType\AbbyyRoleIds $roleIds
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyRoleIds $roleIds = null)
    {
        $this
            ->setRoleIds($roleIds);
    }
    /**
     * Get roleIds value
     * @return \AbbyyBridge\StructType\AbbyyRoleIds|null
     */
    public function getRoleIds()
    {
        return $this->roleIds;
    }
    /**
     * Set roleIds value
     * @param \AbbyyBridge\StructType\AbbyyRoleIds $roleIds
     * @return \AbbyyBridge\StructType\AbbyyGetUserRolesResponse
     */
    public function setRoleIds(\AbbyyBridge\StructType\AbbyyRoleIds $roleIds = null)
    {
        $this->roleIds = $roleIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetUserRolesResponse
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
