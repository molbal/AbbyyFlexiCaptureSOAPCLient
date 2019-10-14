<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stages StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyStages extends AbstractStructBase
{
    /**
     * The ProcessingStage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyProcessingStage[]
     */
    public $ProcessingStage;
    /**
     * Constructor method for stages
     * @uses AbbyyStages::setProcessingStage()
     * @param \AbbyyBridge\StructType\AbbyyProcessingStage[] $processingStage
     */
    public function __construct(array $processingStage = array())
    {
        $this
            ->setProcessingStage($processingStage);
    }
    /**
     * Get ProcessingStage value
     * @return \AbbyyBridge\StructType\AbbyyProcessingStage[]|null
     */
    public function getProcessingStage()
    {
        return $this->ProcessingStage;
    }
    /**
     * This method is responsible for validating the values passed to the setProcessingStage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProcessingStage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProcessingStageForArrayConstraintsFromSetProcessingStage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $stagesProcessingStageItem) {
            // validation for constraint: itemType
            if (!$stagesProcessingStageItem instanceof \AbbyyBridge\StructType\AbbyyProcessingStage) {
                $invalidValues[] = is_object($stagesProcessingStageItem) ? get_class($stagesProcessingStageItem) : sprintf('%s(%s)', gettype($stagesProcessingStageItem), var_export($stagesProcessingStageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProcessingStage property can only contain items of type \AbbyyBridge\StructType\AbbyyProcessingStage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProcessingStage value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyProcessingStage[] $processingStage
     * @return \AbbyyBridge\StructType\AbbyyStages
     */
    public function setProcessingStage(array $processingStage = array())
    {
        // validation for constraint: array
        if ('' !== ($processingStageArrayErrorMessage = self::validateProcessingStageForArrayConstraintsFromSetProcessingStage($processingStage))) {
            throw new \InvalidArgumentException($processingStageArrayErrorMessage, __LINE__);
        }
        $this->ProcessingStage = $processingStage;
        return $this;
    }
    /**
     * Add item to ProcessingStage value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyProcessingStage $item
     * @return \AbbyyBridge\StructType\AbbyyStages
     */
    public function addToProcessingStage(\AbbyyBridge\StructType\AbbyyProcessingStage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyProcessingStage) {
            throw new \InvalidArgumentException(sprintf('The ProcessingStage property can only contain items of type \AbbyyBridge\StructType\AbbyyProcessingStage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProcessingStage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyStages
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
