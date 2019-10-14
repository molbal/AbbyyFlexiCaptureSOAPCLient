<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchTypeIdentity StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyBatchTypeIdentity extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The ProjectId
     * @var int
     */
    public $ProjectId;
    /**
     * Constructor method for BatchTypeIdentity
     * @uses AbbyyBatchTypeIdentity::setId()
     * @uses AbbyyBatchTypeIdentity::setProjectId()
     * @param int $id
     * @param int $projectId
     */
    public function __construct($id = null, $projectId = null)
    {
        $this
            ->setId($id)
            ->setProjectId($projectId);
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
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIdentity
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
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIdentity
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyBatchTypeIdentity
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
