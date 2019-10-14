<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Properties StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyProperties_1 extends AbstractStructBase
{
    /**
     * The RegistrationProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyRegistrationProperty[]
     */
    public $RegistrationProperty;
    /**
     * Constructor method for Properties
     * @uses AbbyyProperties_1::setRegistrationProperty_1()
     * @param \AbbyyBridge\StructType\AbbyyRegistrationProperty[] $registrationProperty
     */
    public function __construct(array $registrationProperty_1 = array())
    {
        $this
            ->setRegistrationProperty_1($registrationProperty_1);
    }
    /**
     * Get RegistrationProperty value
     * @return \AbbyyBridge\StructType\AbbyyRegistrationProperty[]|null
     */
    public function getRegistrationProperty_1()
    {
        return $this->RegistrationProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistrationProperty_1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistrationProperty_1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistrationProperty_1ForArrayConstraintsFromSetRegistrationProperty_1(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $propertiesRegistrationPropertyItem) {
            // validation for constraint: itemType
            if (!$propertiesRegistrationPropertyItem instanceof \AbbyyBridge\StructType\AbbyyRegistrationProperty) {
                $invalidValues[] = is_object($propertiesRegistrationPropertyItem) ? get_class($propertiesRegistrationPropertyItem) : sprintf('%s(%s)', gettype($propertiesRegistrationPropertyItem), var_export($propertiesRegistrationPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistrationProperty property can only contain items of type \AbbyyBridge\StructType\AbbyyRegistrationProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistrationProperty value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRegistrationProperty[] $registrationProperty
     * @return \AbbyyBridge\StructType\AbbyyProperties_1
     */
    public function setRegistrationProperty_1(array $registrationProperty_1 = array())
    {
        // validation for constraint: array
        if ('' !== ($registrationProperty_1ArrayErrorMessage = self::validateRegistrationProperty_1ForArrayConstraintsFromSetRegistrationProperty_1($registrationProperty_1))) {
            throw new \InvalidArgumentException($registrationProperty_1ArrayErrorMessage, __LINE__);
        }
        $this->RegistrationProperty = $registrationProperty_1;
        return $this;
    }
    /**
     * Add item to RegistrationProperty value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRegistrationProperty $item
     * @return \AbbyyBridge\StructType\AbbyyProperties_1
     */
    public function addToRegistrationProperty(\AbbyyBridge\StructType\AbbyyRegistrationProperty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyRegistrationProperty) {
            throw new \InvalidArgumentException(sprintf('The RegistrationProperty property can only contain items of type \AbbyyBridge\StructType\AbbyyRegistrationProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RegistrationProperty[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyProperties_1
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
