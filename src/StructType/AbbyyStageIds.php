<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stageIds StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyStageIds extends AbstractStructBase
{
    /**
     * The stageId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $stageId;
    /**
     * Constructor method for stageIds
     * @uses AbbyyStageIds::setStageId()
     * @param int[] $stageId
     */
    public function __construct(array $stageId = array())
    {
        $this
            ->setStageId($stageId);
    }
    /**
     * Get stageId value
     * @return int[]|null
     */
    public function getStageId()
    {
        return $this->stageId;
    }
    /**
     * This method is responsible for validating the values passed to the setStageId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStageId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStageIdForArrayConstraintsFromSetStageId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $stageIdsStageIdItem) {
            // validation for constraint: itemType
            if (!(is_int($stageIdsStageIdItem) || ctype_digit($stageIdsStageIdItem))) {
                $invalidValues[] = is_object($stageIdsStageIdItem) ? get_class($stageIdsStageIdItem) : sprintf('%s(%s)', gettype($stageIdsStageIdItem), var_export($stageIdsStageIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The stageId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set stageId value
     * @throws \InvalidArgumentException
     * @param int[] $stageId
     * @return \AbbyyBridge\StructType\AbbyyStageIds
     */
    public function setStageId(array $stageId = array())
    {
        // validation for constraint: array
        if ('' !== ($stageIdArrayErrorMessage = self::validateStageIdForArrayConstraintsFromSetStageId($stageId))) {
            throw new \InvalidArgumentException($stageIdArrayErrorMessage, __LINE__);
        }
        $this->stageId = $stageId;
        return $this;
    }
    /**
     * Add item to stageId value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \AbbyyBridge\StructType\AbbyyStageIds
     */
    public function addToStageId($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The stageId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->stageId[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyStageIds
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
