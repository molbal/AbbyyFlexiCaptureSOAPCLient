<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveBatchItem StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyMoveBatchItem extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The batchId
     * @var int
     */
    public $batchId;
    /**
     * The itemId
     * @var int
     */
    public $itemId;
    /**
     * The newParentId
     * @var int
     */
    public $newParentId;
    /**
     * The previousItemId
     * @var int
     */
    public $previousItemId;
    /**
     * Constructor method for MoveBatchItem
     * @uses AbbyyMoveBatchItem::setSessionId()
     * @uses AbbyyMoveBatchItem::setBatchId()
     * @uses AbbyyMoveBatchItem::setItemId()
     * @uses AbbyyMoveBatchItem::setNewParentId()
     * @uses AbbyyMoveBatchItem::setPreviousItemId()
     * @param int $sessionId
     * @param int $batchId
     * @param int $itemId
     * @param int $newParentId
     * @param int $previousItemId
     */
    public function __construct($sessionId = null, $batchId = null, $itemId = null, $newParentId = null, $previousItemId = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setBatchId($batchId)
            ->setItemId($itemId)
            ->setNewParentId($newParentId)
            ->setPreviousItemId($previousItemId);
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItem
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
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
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItem
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItem
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Get newParentId value
     * @return int|null
     */
    public function getNewParentId()
    {
        return $this->newParentId;
    }
    /**
     * Set newParentId value
     * @param int $newParentId
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItem
     */
    public function setNewParentId($newParentId = null)
    {
        // validation for constraint: int
        if (!is_null($newParentId) && !(is_int($newParentId) || ctype_digit($newParentId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($newParentId, true), gettype($newParentId)), __LINE__);
        }
        $this->newParentId = $newParentId;
        return $this;
    }
    /**
     * Get previousItemId value
     * @return int|null
     */
    public function getPreviousItemId()
    {
        return $this->previousItemId;
    }
    /**
     * Set previousItemId value
     * @param int $previousItemId
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItem
     */
    public function setPreviousItemId($previousItemId = null)
    {
        // validation for constraint: int
        if (!is_null($previousItemId) && !(is_int($previousItemId) || ctype_digit($previousItemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($previousItemId, true), gettype($previousItemId)), __LINE__);
        }
        $this->previousItemId = $previousItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItem
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
