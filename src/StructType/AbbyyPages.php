<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pages StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyPages extends AbstractStructBase
{
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyPage[]
     */
    public $Page;
    /**
     * Constructor method for Pages
     * @uses AbbyyPages::setPage()
     * @param \AbbyyBridge\StructType\AbbyyPage[] $page
     */
    public function __construct(array $page = array())
    {
        $this
            ->setPage($page);
    }
    /**
     * Get Page value
     * @return \AbbyyBridge\StructType\AbbyyPage[]|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * This method is responsible for validating the values passed to the setPage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePageForArrayConstraintsFromSetPage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagesPageItem) {
            // validation for constraint: itemType
            if (!$pagesPageItem instanceof \AbbyyBridge\StructType\AbbyyPage) {
                $invalidValues[] = is_object($pagesPageItem) ? get_class($pagesPageItem) : sprintf('%s(%s)', gettype($pagesPageItem), var_export($pagesPageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Page property can only contain items of type \AbbyyBridge\StructType\AbbyyPage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Page value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyPage[] $page
     * @return \AbbyyBridge\StructType\AbbyyPages
     */
    public function setPage(array $page = array())
    {
        // validation for constraint: array
        if ('' !== ($pageArrayErrorMessage = self::validatePageForArrayConstraintsFromSetPage($page))) {
            throw new \InvalidArgumentException($pageArrayErrorMessage, __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Add item to Page value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyPage $item
     * @return \AbbyyBridge\StructType\AbbyyPages
     */
    public function addToPage(\AbbyyBridge\StructType\AbbyyPage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyPage) {
            throw new \InvalidArgumentException(sprintf('The Page property can only contain items of type \AbbyyBridge\StructType\AbbyyPage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Page[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyPages
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
