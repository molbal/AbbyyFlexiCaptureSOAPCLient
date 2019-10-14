<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for documents StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyDocuments extends AbstractStructBase
{
    /**
     * The Document
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyDocument[]
     */
    public $Document;
    /**
     * Constructor method for documents
     * @uses AbbyyDocuments::setDocument()
     * @param \AbbyyBridge\StructType\AbbyyDocument[] $document
     */
    public function __construct(array $document = array())
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get Document value
     * @return \AbbyyBridge\StructType\AbbyyDocument[]|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * This method is responsible for validating the values passed to the setDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentForArrayConstraintsFromSetDocument(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentsDocumentItem) {
            // validation for constraint: itemType
            if (!$documentsDocumentItem instanceof \AbbyyBridge\StructType\AbbyyDocument) {
                $invalidValues[] = is_object($documentsDocumentItem) ? get_class($documentsDocumentItem) : sprintf('%s(%s)', gettype($documentsDocumentItem), var_export($documentsDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Document property can only contain items of type \AbbyyBridge\StructType\AbbyyDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Document value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyDocument[] $document
     * @return \AbbyyBridge\StructType\AbbyyDocuments
     */
    public function setDocument(array $document = array())
    {
        // validation for constraint: array
        if ('' !== ($documentArrayErrorMessage = self::validateDocumentForArrayConstraintsFromSetDocument($document))) {
            throw new \InvalidArgumentException($documentArrayErrorMessage, __LINE__);
        }
        $this->Document = $document;
        return $this;
    }
    /**
     * Add item to Document value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyDocument $item
     * @return \AbbyyBridge\StructType\AbbyyDocuments
     */
    public function addToDocument(\AbbyyBridge\StructType\AbbyyDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyDocument) {
            throw new \InvalidArgumentException(sprintf('The Document property can only contain items of type \AbbyyBridge\StructType\AbbyyDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyDocuments
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
