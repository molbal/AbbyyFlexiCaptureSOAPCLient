<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchType StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyBatchType extends AbstractStructBase
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
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The PropertyDefs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyPropertyDefs
     */
    public $PropertyDefs;
    /**
     * Constructor method for BatchType
     * @uses AbbyyBatchType::setId()
     * @uses AbbyyBatchType::setName()
     * @uses AbbyyBatchType::setDescription()
     * @uses AbbyyBatchType::setPropertyDefs()
     * @param int $id
     * @param string $name
     * @param string $description
     * @param \AbbyyBridge\StructType\AbbyyPropertyDefs $propertyDefs
     */
    public function __construct($id = null, $name = null, $description = null, \AbbyyBridge\StructType\AbbyyPropertyDefs $propertyDefs = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setDescription($description)
            ->setPropertyDefs($propertyDefs);
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
     * @return \AbbyyBridge\StructType\AbbyyBatchType
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
     * @return \AbbyyBridge\StructType\AbbyyBatchType
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \AbbyyBridge\StructType\AbbyyBatchType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get PropertyDefs value
     * @return \AbbyyBridge\StructType\AbbyyPropertyDefs|null
     */
    public function getPropertyDefs()
    {
        return $this->PropertyDefs;
    }
    /**
     * Set PropertyDefs value
     * @param \AbbyyBridge\StructType\AbbyyPropertyDefs $propertyDefs
     * @return \AbbyyBridge\StructType\AbbyyBatchType
     */
    public function setPropertyDefs(\AbbyyBridge\StructType\AbbyyPropertyDefs $propertyDefs = null)
    {
        $this->PropertyDefs = $propertyDefs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyBatchType
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
