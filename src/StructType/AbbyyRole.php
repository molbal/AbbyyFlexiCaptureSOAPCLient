<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Role StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyRole extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The Type
     * @var int
     */
    public $Type;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The ProjectId
     * @var int
     */
    public $ProjectId;
    /**
     * The Attributes
     * @var int
     */
    public $Attributes;
    /**
     * Constructor method for Role
     * @uses AbbyyRole::setId()
     * @uses AbbyyRole::setType()
     * @uses AbbyyRole::setName()
     * @uses AbbyyRole::setProjectId()
     * @uses AbbyyRole::setAttributes()
     * @param int $id
     * @param int $type
     * @param string $name
     * @param int $projectId
     * @param int $attributes
     */
    public function __construct($id = null, $type = null, $name = null, $projectId = null, $attributes = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setName($name)
            ->setProjectId($projectId)
            ->setAttributes($attributes);
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
     * @return \AbbyyBridge\StructType\AbbyyRole
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
     * Get Type value
     * @return int|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \AbbyyBridge\StructType\AbbyyRole
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \AbbyyBridge\StructType\AbbyyRole
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
     * Get ProjectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }
    /**
     * Set ProjectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyRole
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->ProjectId = $projectId;
        return $this;
    }
    /**
     * Get Attributes value
     * @return int|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param int $attributes
     * @return \AbbyyBridge\StructType\AbbyyRole
     */
    public function setAttributes($attributes = null)
    {
        // validation for constraint: int
        if (!is_null($attributes) && !(is_int($attributes) || ctype_digit($attributes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributes, true), gettype($attributes)), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyRole
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
