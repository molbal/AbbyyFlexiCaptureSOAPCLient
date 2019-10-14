<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewPageResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyAddNewPageResponse extends AbstractStructBase
{
    /**
     * The pageId
     * @var int
     */
    public $pageId;
    /**
     * Constructor method for AddNewPageResponse
     * @uses AbbyyAddNewPageResponse::setPageId()
     * @param int $pageId
     */
    public function __construct($pageId = null)
    {
        $this
            ->setPageId($pageId);
    }
    /**
     * Get pageId value
     * @return int|null
     */
    public function getPageId()
    {
        return $this->pageId;
    }
    /**
     * Set pageId value
     * @param int $pageId
     * @return \AbbyyBridge\StructType\AbbyyAddNewPageResponse
     */
    public function setPageId($pageId = null)
    {
        // validation for constraint: int
        if (!is_null($pageId) && !(is_int($pageId) || ctype_digit($pageId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageId, true), gettype($pageId)), __LINE__);
        }
        $this->pageId = $pageId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyAddNewPageResponse
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
