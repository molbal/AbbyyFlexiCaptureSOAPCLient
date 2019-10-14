<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserStatistics StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyUserStatistics extends AbstractStructBase
{
    /**
     * The BatchesCount
     * @var int
     */
    public $BatchesCount;
    /**
     * The DocumentsCount
     * @var int
     */
    public $DocumentsCount;
    /**
     * The PagesCount
     * @var int
     */
    public $PagesCount;
    /**
     * Constructor method for UserStatistics
     * @uses AbbyyUserStatistics::setBatchesCount()
     * @uses AbbyyUserStatistics::setDocumentsCount()
     * @uses AbbyyUserStatistics::setPagesCount()
     * @param int $batchesCount
     * @param int $documentsCount
     * @param int $pagesCount
     */
    public function __construct($batchesCount = null, $documentsCount = null, $pagesCount = null)
    {
        $this
            ->setBatchesCount($batchesCount)
            ->setDocumentsCount($documentsCount)
            ->setPagesCount($pagesCount);
    }
    /**
     * Get BatchesCount value
     * @return int|null
     */
    public function getBatchesCount()
    {
        return $this->BatchesCount;
    }
    /**
     * Set BatchesCount value
     * @param int $batchesCount
     * @return \AbbyyBridge\StructType\AbbyyUserStatistics
     */
    public function setBatchesCount($batchesCount = null)
    {
        // validation for constraint: int
        if (!is_null($batchesCount) && !(is_int($batchesCount) || ctype_digit($batchesCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchesCount, true), gettype($batchesCount)), __LINE__);
        }
        $this->BatchesCount = $batchesCount;
        return $this;
    }
    /**
     * Get DocumentsCount value
     * @return int|null
     */
    public function getDocumentsCount()
    {
        return $this->DocumentsCount;
    }
    /**
     * Set DocumentsCount value
     * @param int $documentsCount
     * @return \AbbyyBridge\StructType\AbbyyUserStatistics
     */
    public function setDocumentsCount($documentsCount = null)
    {
        // validation for constraint: int
        if (!is_null($documentsCount) && !(is_int($documentsCount) || ctype_digit($documentsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentsCount, true), gettype($documentsCount)), __LINE__);
        }
        $this->DocumentsCount = $documentsCount;
        return $this;
    }
    /**
     * Get PagesCount value
     * @return int|null
     */
    public function getPagesCount()
    {
        return $this->PagesCount;
    }
    /**
     * Set PagesCount value
     * @param int $pagesCount
     * @return \AbbyyBridge\StructType\AbbyyUserStatistics
     */
    public function setPagesCount($pagesCount = null)
    {
        // validation for constraint: int
        if (!is_null($pagesCount) && !(is_int($pagesCount) || ctype_digit($pagesCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pagesCount, true), gettype($pagesCount)), __LINE__);
        }
        $this->PagesCount = $pagesCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyUserStatistics
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
