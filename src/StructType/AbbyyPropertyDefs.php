<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyDefs StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyPropertyDefs extends AbstractStructBase
{
    /**
     * The RegistrationPropertyDef
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef[]
     */
    public $RegistrationPropertyDef;
    /**
     * Constructor method for PropertyDefs
     * @uses AbbyyPropertyDefs::setRegistrationPropertyDef()
     * @param \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef[] $registrationPropertyDef
     */
    public function __construct(array $registrationPropertyDef = array())
    {
        $this
            ->setRegistrationPropertyDef($registrationPropertyDef);
    }
    /**
     * Get RegistrationPropertyDef value
     * @return \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef[]|null
     */
    public function getRegistrationPropertyDef()
    {
        return $this->RegistrationPropertyDef;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistrationPropertyDef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistrationPropertyDef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistrationPropertyDefForArrayConstraintsFromSetRegistrationPropertyDef(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $propertyDefsRegistrationPropertyDefItem) {
            // validation for constraint: itemType
            if (!$propertyDefsRegistrationPropertyDefItem instanceof \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef) {
                $invalidValues[] = is_object($propertyDefsRegistrationPropertyDefItem) ? get_class($propertyDefsRegistrationPropertyDefItem) : sprintf('%s(%s)', gettype($propertyDefsRegistrationPropertyDefItem), var_export($propertyDefsRegistrationPropertyDefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistrationPropertyDef property can only contain items of type \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistrationPropertyDef value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef[] $registrationPropertyDef
     * @return \AbbyyBridge\StructType\AbbyyPropertyDefs
     */
    public function setRegistrationPropertyDef(array $registrationPropertyDef = array())
    {
        // validation for constraint: array
        if ('' !== ($registrationPropertyDefArrayErrorMessage = self::validateRegistrationPropertyDefForArrayConstraintsFromSetRegistrationPropertyDef($registrationPropertyDef))) {
            throw new \InvalidArgumentException($registrationPropertyDefArrayErrorMessage, __LINE__);
        }
        $this->RegistrationPropertyDef = $registrationPropertyDef;
        return $this;
    }
    /**
     * Add item to RegistrationPropertyDef value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef $item
     * @return \AbbyyBridge\StructType\AbbyyPropertyDefs
     */
    public function addToRegistrationPropertyDef(\AbbyyBridge\StructType\AbbyyRegistrationPropertyDef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef) {
            throw new \InvalidArgumentException(sprintf('The RegistrationPropertyDef property can only contain items of type \AbbyyBridge\StructType\AbbyyRegistrationPropertyDef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RegistrationPropertyDef[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyPropertyDefs
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
