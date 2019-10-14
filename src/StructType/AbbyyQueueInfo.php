<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queueInfo StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyQueueInfo extends AbstractStructBase
{
    /**
     * The Queue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyQueue[]
     */
    public $Queue;
    /**
     * Constructor method for queueInfo
     * @uses AbbyyQueueInfo::setQueue()
     * @param \AbbyyBridge\StructType\AbbyyQueue[] $queue
     */
    public function __construct(array $queue = array())
    {
        $this
            ->setQueue($queue);
    }
    /**
     * Get Queue value
     * @return \AbbyyBridge\StructType\AbbyyQueue[]|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * This method is responsible for validating the values passed to the setQueue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQueue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQueueForArrayConstraintsFromSetQueue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $queueInfoQueueItem) {
            // validation for constraint: itemType
            if (!$queueInfoQueueItem instanceof \AbbyyBridge\StructType\AbbyyQueue) {
                $invalidValues[] = is_object($queueInfoQueueItem) ? get_class($queueInfoQueueItem) : sprintf('%s(%s)', gettype($queueInfoQueueItem), var_export($queueInfoQueueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Queue property can only contain items of type \AbbyyBridge\StructType\AbbyyQueue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Queue value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyQueue[] $queue
     * @return \AbbyyBridge\StructType\AbbyyQueueInfo
     */
    public function setQueue(array $queue = array())
    {
        // validation for constraint: array
        if ('' !== ($queueArrayErrorMessage = self::validateQueueForArrayConstraintsFromSetQueue($queue))) {
            throw new \InvalidArgumentException($queueArrayErrorMessage, __LINE__);
        }
        $this->Queue = $queue;
        return $this;
    }
    /**
     * Add item to Queue value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyQueue $item
     * @return \AbbyyBridge\StructType\AbbyyQueueInfo
     */
    public function addToQueue(\AbbyyBridge\StructType\AbbyyQueue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyQueue) {
            throw new \InvalidArgumentException(sprintf('The Queue property can only contain items of type \AbbyyBridge\StructType\AbbyyQueue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Queue[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyQueueInfo
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
