<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Project StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyProject extends AbstractStructBase
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
     * The Guid
     * @var string
     */
    public $Guid;
    /**
     * The IsTestProject
     * @var bool
     */
    public $IsTestProject;
    /**
     * Constructor method for Project
     * @uses AbbyyProject::setId()
     * @uses AbbyyProject::setName()
     * @uses AbbyyProject::setGuid()
     * @uses AbbyyProject::setIsTestProject()
     * @param int $id
     * @param string $name
     * @param string $guid
     * @param bool $isTestProject
     */
    public function __construct($id = null, $name = null, $guid = null, $isTestProject = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setGuid($guid)
            ->setIsTestProject($isTestProject);
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
     * @return \AbbyyBridge\StructType\AbbyyProject
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
     * @return \AbbyyBridge\StructType\AbbyyProject
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
     * Get Guid value
     * @return string|null
     */
    public function getGuid()
    {
        return $this->Guid;
    }
    /**
     * Set Guid value
     * @param string $guid
     * @return \AbbyyBridge\StructType\AbbyyProject
     */
    public function setGuid($guid = null)
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->Guid = $guid;
        return $this;
    }
    /**
     * Get IsTestProject value
     * @return bool|null
     */
    public function getIsTestProject()
    {
        return $this->IsTestProject;
    }
    /**
     * Set IsTestProject value
     * @param bool $isTestProject
     * @return \AbbyyBridge\StructType\AbbyyProject
     */
    public function setIsTestProject($isTestProject = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTestProject) && !is_bool($isTestProject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTestProject, true), gettype($isTestProject)), __LINE__);
        }
        $this->IsTestProject = $isTestProject;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyProject
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
