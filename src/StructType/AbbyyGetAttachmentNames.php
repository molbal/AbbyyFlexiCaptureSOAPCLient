<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttachmentNames StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetAttachmentNames extends AbstractStructBase
{
    /**
     * The type
     * @var int
     */
    public $type;
    /**
     * The objectId
     * @var int
     */
    public $objectId;
    /**
     * The batchId
     * @var int
     */
    public $batchId;
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * Constructor method for GetAttachmentNames
     * @uses AbbyyGetAttachmentNames::setType()
     * @uses AbbyyGetAttachmentNames::setObjectId()
     * @uses AbbyyGetAttachmentNames::setBatchId()
     * @uses AbbyyGetAttachmentNames::setProjectId()
     * @param int $type
     * @param int $objectId
     * @param int $batchId
     * @param int $projectId
     */
    public function __construct($type = null, $objectId = null, $batchId = null, $projectId = null)
    {
        $this
            ->setType($type)
            ->setObjectId($objectId)
            ->setBatchId($batchId)
            ->setProjectId($projectId);
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNames
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get objectId value
     * @return int|null
     */
    public function getObjectId()
    {
        return $this->objectId;
    }
    /**
     * Set objectId value
     * @param int $objectId
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNames
     */
    public function setObjectId($objectId = null)
    {
        // validation for constraint: int
        if (!is_null($objectId) && !(is_int($objectId) || ctype_digit($objectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($objectId, true), gettype($objectId)), __LINE__);
        }
        $this->objectId = $objectId;
        return $this;
    }
    /**
     * Get batchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNames
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        return $this;
    }
    /**
     * Get projectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNames
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNames
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
