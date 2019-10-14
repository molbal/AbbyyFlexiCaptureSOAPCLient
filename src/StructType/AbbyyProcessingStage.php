<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessingStage StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyProcessingStage extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The ExternalId
     * @var int
     */
    public $ExternalId;
    /**
     * The ProjectId
     * @var int
     */
    public $ProjectId;
    /**
     * The BatchTypeId
     * @var int
     */
    public $BatchTypeId;
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
     * Constructor method for ProcessingStage
     * @uses AbbyyProcessingStage::setId()
     * @uses AbbyyProcessingStage::setExternalId()
     * @uses AbbyyProcessingStage::setProjectId()
     * @uses AbbyyProcessingStage::setBatchTypeId()
     * @uses AbbyyProcessingStage::setType()
     * @uses AbbyyProcessingStage::setName()
     * @param int $id
     * @param int $externalId
     * @param int $projectId
     * @param int $batchTypeId
     * @param int $type
     * @param string $name
     */
    public function __construct($id = null, $externalId = null, $projectId = null, $batchTypeId = null, $type = null, $name = null)
    {
        $this
            ->setId($id)
            ->setExternalId($externalId)
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setType($type)
            ->setName($name);
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
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
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
     * Get ExternalId value
     * @return int|null
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }
    /**
     * Set ExternalId value
     * @param int $externalId
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
     */
    public function setExternalId($externalId = null)
    {
        // validation for constraint: int
        if (!is_null($externalId) && !(is_int($externalId) || ctype_digit($externalId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->ExternalId = $externalId;
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
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
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
     * Get BatchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->BatchTypeId;
    }
    /**
     * Set BatchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->BatchTypeId = $batchTypeId;
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
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
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
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage
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
