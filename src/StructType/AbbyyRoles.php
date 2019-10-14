<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roles StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyRoles extends AbstractStructBase
{
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyRole[]
     */
    public $Role;
    /**
     * Constructor method for roles
     * @uses AbbyyRoles::setRole()
     * @param \AbbyyBridge\StructType\AbbyyRole[] $role
     */
    public function __construct(array $role = array())
    {
        $this
            ->setRole($role);
    }
    /**
     * Get Role value
     * @return \AbbyyBridge\StructType\AbbyyRole[]|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * This method is responsible for validating the values passed to the setRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoleForArrayConstraintsFromSetRole(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $rolesRoleItem) {
            // validation for constraint: itemType
            if (!$rolesRoleItem instanceof \AbbyyBridge\StructType\AbbyyRole) {
                $invalidValues[] = is_object($rolesRoleItem) ? get_class($rolesRoleItem) : sprintf('%s(%s)', gettype($rolesRoleItem), var_export($rolesRoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Role property can only contain items of type \AbbyyBridge\StructType\AbbyyRole, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Role value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRole[] $role
     * @return \AbbyyBridge\StructType\AbbyyRoles
     */
    public function setRole(array $role = array())
    {
        // validation for constraint: array
        if ('' !== ($roleArrayErrorMessage = self::validateRoleForArrayConstraintsFromSetRole($role))) {
            throw new \InvalidArgumentException($roleArrayErrorMessage, __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Add item to Role value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRole $item
     * @return \AbbyyBridge\StructType\AbbyyRoles
     */
    public function addToRole(\AbbyyBridge\StructType\AbbyyRole $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyRole) {
            throw new \InvalidArgumentException(sprintf('The Role property can only contain items of type \AbbyyBridge\StructType\AbbyyRole, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Role[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyRoles
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
