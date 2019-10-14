<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Page StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyPage extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The PageIndex
     * @var int
     */
    public $PageIndex;
    /**
     * The SourceFileName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SourceFileName;
    /**
     * The SourcePageNumber
     * @var int
     */
    public $SourcePageNumber;
    /**
     * The SourceType
     * @var int
     */
    public $SourceType;
    /**
     * The SourceDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SourceDetails;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * The ErrorText
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ErrorText;
    /**
     * The ExternalId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ExternalId;
    /**
     * The HasAttachments
     * @var bool
     */
    public $HasAttachments;
    /**
     * The UncertainSymbols
     * @var int
     */
    public $UncertainSymbols;
    /**
     * The VerificationSymbols
     * @var int
     */
    public $VerificationSymbols;
    /**
     * The TotalSymbols
     * @var int
     */
    public $TotalSymbols;
    /**
     * The FileVersion
     * @var int
     */
    public $FileVersion;
    /**
     * The Flags
     * @var int
     */
    public $Flags;
    /**
     * Constructor method for Page
     * @uses AbbyyPage::setId()
     * @uses AbbyyPage::setPageIndex()
     * @uses AbbyyPage::setSourceFileName()
     * @uses AbbyyPage::setSourcePageNumber()
     * @uses AbbyyPage::setSourceType()
     * @uses AbbyyPage::setSourceDetails()
     * @uses AbbyyPage::setComment()
     * @uses AbbyyPage::setErrorText()
     * @uses AbbyyPage::setExternalId()
     * @uses AbbyyPage::setHasAttachments()
     * @uses AbbyyPage::setUncertainSymbols()
     * @uses AbbyyPage::setVerificationSymbols()
     * @uses AbbyyPage::setTotalSymbols()
     * @uses AbbyyPage::setFileVersion()
     * @uses AbbyyPage::setFlags()
     * @param int $id
     * @param int $pageIndex
     * @param string $sourceFileName
     * @param int $sourcePageNumber
     * @param int $sourceType
     * @param string $sourceDetails
     * @param string $comment
     * @param string $errorText
     * @param string $externalId
     * @param bool $hasAttachments
     * @param int $uncertainSymbols
     * @param int $verificationSymbols
     * @param int $totalSymbols
     * @param int $fileVersion
     * @param int $flags
     */
    public function __construct($id = null, $pageIndex = null, $sourceFileName = null, $sourcePageNumber = null, $sourceType = null, $sourceDetails = null, $comment = null, $errorText = null, $externalId = null, $hasAttachments = null, $uncertainSymbols = null, $verificationSymbols = null, $totalSymbols = null, $fileVersion = null, $flags = null)
    {
        $this
            ->setId($id)
            ->setPageIndex($pageIndex)
            ->setSourceFileName($sourceFileName)
            ->setSourcePageNumber($sourcePageNumber)
            ->setSourceType($sourceType)
            ->setSourceDetails($sourceDetails)
            ->setComment($comment)
            ->setErrorText($errorText)
            ->setExternalId($externalId)
            ->setHasAttachments($hasAttachments)
            ->setUncertainSymbols($uncertainSymbols)
            ->setVerificationSymbols($verificationSymbols)
            ->setTotalSymbols($totalSymbols)
            ->setFileVersion($fileVersion)
            ->setFlags($flags);
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get PageIndex value
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->PageIndex;
    }
    /**
     * Set PageIndex value
     * @param int $pageIndex
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setPageIndex($pageIndex = null)
    {
        // validation for constraint: int
        if (!is_null($pageIndex) && !(is_int($pageIndex) || ctype_digit($pageIndex))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageIndex, true), gettype($pageIndex)), __LINE__);
        }
        $this->PageIndex = $pageIndex;
        return $this;
    }
    /**
     * Get SourceFileName value
     * @return string|null
     */
    public function getSourceFileName()
    {
        return $this->SourceFileName;
    }
    /**
     * Set SourceFileName value
     * @param string $sourceFileName
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setSourceFileName($sourceFileName = null)
    {
        // validation for constraint: string
        if (!is_null($sourceFileName) && !is_string($sourceFileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceFileName, true), gettype($sourceFileName)), __LINE__);
        }
        $this->SourceFileName = $sourceFileName;
        return $this;
    }
    /**
     * Get SourcePageNumber value
     * @return int|null
     */
    public function getSourcePageNumber()
    {
        return $this->SourcePageNumber;
    }
    /**
     * Set SourcePageNumber value
     * @param int $sourcePageNumber
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setSourcePageNumber($sourcePageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sourcePageNumber) && !(is_int($sourcePageNumber) || ctype_digit($sourcePageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourcePageNumber, true), gettype($sourcePageNumber)), __LINE__);
        }
        $this->SourcePageNumber = $sourcePageNumber;
        return $this;
    }
    /**
     * Get SourceType value
     * @return int|null
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }
    /**
     * Set SourceType value
     * @param int $sourceType
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setSourceType($sourceType = null)
    {
        // validation for constraint: int
        if (!is_null($sourceType) && !(is_int($sourceType) || ctype_digit($sourceType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceType, true), gettype($sourceType)), __LINE__);
        }
        $this->SourceType = $sourceType;
        return $this;
    }
    /**
     * Get SourceDetails value
     * @return string|null
     */
    public function getSourceDetails()
    {
        return $this->SourceDetails;
    }
    /**
     * Set SourceDetails value
     * @param string $sourceDetails
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setSourceDetails($sourceDetails = null)
    {
        // validation for constraint: string
        if (!is_null($sourceDetails) && !is_string($sourceDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceDetails, true), gettype($sourceDetails)), __LINE__);
        }
        $this->SourceDetails = $sourceDetails;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get ErrorText value
     * @return string|null
     */
    public function getErrorText()
    {
        return $this->ErrorText;
    }
    /**
     * Set ErrorText value
     * @param string $errorText
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setErrorText($errorText = null)
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->ErrorText = $errorText;
        return $this;
    }
    /**
     * Get ExternalId value
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }
    /**
     * Set ExternalId value
     * @param string $externalId
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setExternalId($externalId = null)
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->ExternalId = $externalId;
        return $this;
    }
    /**
     * Get HasAttachments value
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->HasAttachments;
    }
    /**
     * Set HasAttachments value
     * @param bool $hasAttachments
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setHasAttachments($hasAttachments = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAttachments) && !is_bool($hasAttachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAttachments, true), gettype($hasAttachments)), __LINE__);
        }
        $this->HasAttachments = $hasAttachments;
        return $this;
    }
    /**
     * Get UncertainSymbols value
     * @return int|null
     */
    public function getUncertainSymbols()
    {
        return $this->UncertainSymbols;
    }
    /**
     * Set UncertainSymbols value
     * @param int $uncertainSymbols
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setUncertainSymbols($uncertainSymbols = null)
    {
        // validation for constraint: int
        if (!is_null($uncertainSymbols) && !(is_int($uncertainSymbols) || ctype_digit($uncertainSymbols))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uncertainSymbols, true), gettype($uncertainSymbols)), __LINE__);
        }
        $this->UncertainSymbols = $uncertainSymbols;
        return $this;
    }
    /**
     * Get VerificationSymbols value
     * @return int|null
     */
    public function getVerificationSymbols()
    {
        return $this->VerificationSymbols;
    }
    /**
     * Set VerificationSymbols value
     * @param int $verificationSymbols
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setVerificationSymbols($verificationSymbols = null)
    {
        // validation for constraint: int
        if (!is_null($verificationSymbols) && !(is_int($verificationSymbols) || ctype_digit($verificationSymbols))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verificationSymbols, true), gettype($verificationSymbols)), __LINE__);
        }
        $this->VerificationSymbols = $verificationSymbols;
        return $this;
    }
    /**
     * Get TotalSymbols value
     * @return int|null
     */
    public function getTotalSymbols()
    {
        return $this->TotalSymbols;
    }
    /**
     * Set TotalSymbols value
     * @param int $totalSymbols
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setTotalSymbols($totalSymbols = null)
    {
        // validation for constraint: int
        if (!is_null($totalSymbols) && !(is_int($totalSymbols) || ctype_digit($totalSymbols))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalSymbols, true), gettype($totalSymbols)), __LINE__);
        }
        $this->TotalSymbols = $totalSymbols;
        return $this;
    }
    /**
     * Get FileVersion value
     * @return int|null
     */
    public function getFileVersion()
    {
        return $this->FileVersion;
    }
    /**
     * Set FileVersion value
     * @param int $fileVersion
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setFileVersion($fileVersion = null)
    {
        // validation for constraint: int
        if (!is_null($fileVersion) && !(is_int($fileVersion) || ctype_digit($fileVersion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileVersion, true), gettype($fileVersion)), __LINE__);
        }
        $this->FileVersion = $fileVersion;
        return $this;
    }
    /**
     * Get Flags value
     * @return int|null
     */
    public function getFlags()
    {
        return $this->Flags;
    }
    /**
     * Set Flags value
     * @param int $flags
     * @return \AbbyyBridge\StructType\AbbyyPage
     */
    public function setFlags($flags = null)
    {
        // validation for constraint: int
        if (!is_null($flags) && !(is_int($flags) || ctype_digit($flags))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flags, true), gettype($flags)), __LINE__);
        }
        $this->Flags = $flags;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyPage
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
