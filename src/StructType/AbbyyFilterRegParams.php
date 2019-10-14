<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterRegParams StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyFilterRegParams extends AbstractStructBase
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
     * Constructor method for filterRegParams
     * @uses AbbyyFilterRegParams::setRegistrationProperty()
     * @param \AbbyyBridge\StructType\AbbyyRegistrationProperty[] $registrationProperty
     */
    public function __construct(array $registrationProperty = array())
    {
        $this
            ->setRegistrationProperty($registrationProperty);
    }
    /**
     * Get RegistrationProperty value
     * @return \AbbyyBridge\StructType\AbbyyRegistrationProperty[]|null
     */
    public function getRegistrationProperty()
    {
        return $this->RegistrationProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistrationProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistrationProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistrationPropertyForArrayConstraintsFromSetRegistrationProperty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterRegParamsRegistrationPropertyItem) {
            // validation for constraint: itemType
            if (!$filterRegParamsRegistrationPropertyItem instanceof \AbbyyBridge\StructType\AbbyyRegistrationProperty) {
                $invalidValues[] = is_object($filterRegParamsRegistrationPropertyItem) ? get_class($filterRegParamsRegistrationPropertyItem) : sprintf('%s(%s)', gettype($filterRegParamsRegistrationPropertyItem), var_export($filterRegParamsRegistrationPropertyItem, true));
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
     * @return \AbbyyBridge\StructType\AbbyyFilterRegParams
     */
    public function setRegistrationProperty(array $registrationProperty = array())
    {
        // validation for constraint: array
        if ('' !== ($registrationPropertyArrayErrorMessage = self::validateRegistrationPropertyForArrayConstraintsFromSetRegistrationProperty($registrationProperty))) {
            throw new \InvalidArgumentException($registrationPropertyArrayErrorMessage, __LINE__);
        }
        $this->RegistrationProperty = $registrationProperty;
        return $this;
    }
    /**
     * Add item to RegistrationProperty value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyRegistrationProperty $item
     * @return \AbbyyBridge\StructType\AbbyyFilterRegParams
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
     * @return \AbbyyBridge\StructType\AbbyyFilterRegParams
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
