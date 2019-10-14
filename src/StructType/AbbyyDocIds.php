<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docIds StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyDocIds extends AbstractStructBase
{
    /**
     * The DocId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $DocId;
    /**
     * Constructor method for docIds
     * @uses AbbyyDocIds::setDocId()
     * @param int[] $docId
     */
    public function __construct(array $docId = array())
    {
        $this
            ->setDocId($docId);
    }
    /**
     * Get DocId value
     * @return int[]|null
     */
    public function getDocId()
    {
        return $this->DocId;
    }
    /**
     * This method is responsible for validating the values passed to the setDocId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocIdForArrayConstraintsFromSetDocId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $docIdsDocIdItem) {
            // validation for constraint: itemType
            if (!(is_int($docIdsDocIdItem) || ctype_digit($docIdsDocIdItem))) {
                $invalidValues[] = is_object($docIdsDocIdItem) ? get_class($docIdsDocIdItem) : sprintf('%s(%s)', gettype($docIdsDocIdItem), var_export($docIdsDocIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocId value
     * @throws \InvalidArgumentException
     * @param int[] $docId
     * @return \AbbyyBridge\StructType\AbbyyDocIds
     */
    public function setDocId(array $docId = array())
    {
        // validation for constraint: array
        if ('' !== ($docIdArrayErrorMessage = self::validateDocIdForArrayConstraintsFromSetDocId($docId))) {
            throw new \InvalidArgumentException($docIdArrayErrorMessage, __LINE__);
        }
        $this->DocId = $docId;
        return $this;
    }
    /**
     * Add item to DocId value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \AbbyyBridge\StructType\AbbyyDocIds
     */
    public function addToDocId($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The DocId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocId[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyDocIds
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
