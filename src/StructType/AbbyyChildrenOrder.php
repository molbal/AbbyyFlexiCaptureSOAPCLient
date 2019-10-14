<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChildrenOrder StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyChildrenOrder extends AbstractStructBase
{
    /**
     * The OrderItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyOrderItem[]
     */
    public $OrderItem;
    /**
     * Constructor method for ChildrenOrder
     * @uses AbbyyChildrenOrder::setOrderItem()
     * @param \AbbyyBridge\StructType\AbbyyOrderItem[] $orderItem
     */
    public function __construct(array $orderItem = array())
    {
        $this
            ->setOrderItem($orderItem);
    }
    /**
     * Get OrderItem value
     * @return \AbbyyBridge\StructType\AbbyyOrderItem[]|null
     */
    public function getOrderItem()
    {
        return $this->OrderItem;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderItemForArrayConstraintsFromSetOrderItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $childrenOrderOrderItemItem) {
            // validation for constraint: itemType
            if (!$childrenOrderOrderItemItem instanceof \AbbyyBridge\StructType\AbbyyOrderItem) {
                $invalidValues[] = is_object($childrenOrderOrderItemItem) ? get_class($childrenOrderOrderItemItem) : sprintf('%s(%s)', gettype($childrenOrderOrderItemItem), var_export($childrenOrderOrderItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderItem property can only contain items of type \AbbyyBridge\StructType\AbbyyOrderItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderItem value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyOrderItem[] $orderItem
     * @return \AbbyyBridge\StructType\AbbyyChildrenOrder
     */
    public function setOrderItem(array $orderItem = array())
    {
        // validation for constraint: array
        if ('' !== ($orderItemArrayErrorMessage = self::validateOrderItemForArrayConstraintsFromSetOrderItem($orderItem))) {
            throw new \InvalidArgumentException($orderItemArrayErrorMessage, __LINE__);
        }
        $this->OrderItem = $orderItem;
        return $this;
    }
    /**
     * Add item to OrderItem value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyOrderItem $item
     * @return \AbbyyBridge\StructType\AbbyyChildrenOrder
     */
    public function addToOrderItem(\AbbyyBridge\StructType\AbbyyOrderItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyOrderItem) {
            throw new \InvalidArgumentException(sprintf('The OrderItem property can only contain items of type \AbbyyBridge\StructType\AbbyyOrderItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyChildrenOrder
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
