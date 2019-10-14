<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyDocument extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The BatchId
     * @var int
     */
    public $BatchId;
    /**
     * The ParentId
     * @var int
     */
    public $ParentId;
    /**
     * The DocIndex
     * @var int
     */
    public $DocIndex;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * The ProcessingStageType
     * @var int
     */
    public $ProcessingStageType;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Comment;
    /**
     * The Pages
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyPages
     */
    public $Pages;
    /**
     * The IsProcessed
     * @var bool
     */
    public $IsProcessed;
    /**
     * The HasProcessingErrors
     * @var bool
     */
    public $HasProcessingErrors;
    /**
     * The HasDocumentErrors
     * @var bool
     */
    public $HasDocumentErrors;
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
     * The Properties
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyProperties_1
     */
    public $Properties;
    /**
     * The Priority
     * @var int
     */
    public $Priority;
    /**
     * The FileVersion
     * @var int
     */
    public $FileVersion;
    /**
     * The OwnerId
     * @var int
     */
    public $OwnerId;
    /**
     * The StageExternalId
     * @var int
     */
    public $StageExternalId;
    /**
     * The TaskId
     * @var int
     */
    public $TaskId;
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
     * The HasErrors
     * @var bool
     */
    public $HasErrors;
    /**
     * The HasWarnings
     * @var bool
     */
    public $HasWarnings;
    /**
     * The HasAssemblingErrors
     * @var bool
     */
    public $HasAssemblingErrors;
    /**
     * The HasAttachments
     * @var bool
     */
    public $HasAttachments;
    /**
     * The Flags
     * @var int
     */
    public $Flags;
    /**
     * The ChildrenOrder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyChildrenOrder
     */
    public $ChildrenOrder;
    /**
     * Constructor method for Document
     * @uses AbbyyDocument::setId()
     * @uses AbbyyDocument::setBatchId()
     * @uses AbbyyDocument::setParentId()
     * @uses AbbyyDocument::setDocIndex()
     * @uses AbbyyDocument::setTemplateName()
     * @uses AbbyyDocument::setProcessingStageType()
     * @uses AbbyyDocument::setComment()
     * @uses AbbyyDocument::setPages()
     * @uses AbbyyDocument::setIsProcessed()
     * @uses AbbyyDocument::setHasProcessingErrors()
     * @uses AbbyyDocument::setHasDocumentErrors()
     * @uses AbbyyDocument::setErrorText()
     * @uses AbbyyDocument::setExternalId()
     * @uses AbbyyDocument::setProperties()
     * @uses AbbyyDocument::setPriority()
     * @uses AbbyyDocument::setFileVersion()
     * @uses AbbyyDocument::setOwnerId()
     * @uses AbbyyDocument::setStageExternalId()
     * @uses AbbyyDocument::setTaskId()
     * @uses AbbyyDocument::setUncertainSymbols()
     * @uses AbbyyDocument::setVerificationSymbols()
     * @uses AbbyyDocument::setTotalSymbols()
     * @uses AbbyyDocument::setHasErrors()
     * @uses AbbyyDocument::setHasWarnings()
     * @uses AbbyyDocument::setHasAssemblingErrors()
     * @uses AbbyyDocument::setHasAttachments()
     * @uses AbbyyDocument::setFlags()
     * @uses AbbyyDocument::setChildrenOrder()
     * @param int $id
     * @param int $batchId
     * @param int $parentId
     * @param int $docIndex
     * @param string $templateName
     * @param int $processingStageType
     * @param string $comment
     * @param \AbbyyBridge\StructType\AbbyyPages $pages
     * @param bool $isProcessed
     * @param bool $hasProcessingErrors
     * @param bool $hasDocumentErrors
     * @param string $errorText
     * @param string $externalId
     * @param \AbbyyBridge\StructType\AbbyyProperties_1 $properties
     * @param int $priority
     * @param int $fileVersion
     * @param int $ownerId
     * @param int $stageExternalId
     * @param int $taskId
     * @param int $uncertainSymbols
     * @param int $verificationSymbols
     * @param int $totalSymbols
     * @param bool $hasErrors
     * @param bool $hasWarnings
     * @param bool $hasAssemblingErrors
     * @param bool $hasAttachments
     * @param int $flags
     * @param \AbbyyBridge\StructType\AbbyyChildrenOrder $childrenOrder
     */
    public function __construct($id = null, $batchId = null, $parentId = null, $docIndex = null, $templateName = null, $processingStageType = null, $comment = null, \AbbyyBridge\StructType\AbbyyPages $pages = null, $isProcessed = null, $hasProcessingErrors = null, $hasDocumentErrors = null, $errorText = null, $externalId = null, \AbbyyBridge\StructType\AbbyyProperties_1 $properties = null, $priority = null, $fileVersion = null, $ownerId = null, $stageExternalId = null, $taskId = null, $uncertainSymbols = null, $verificationSymbols = null, $totalSymbols = null, $hasErrors = null, $hasWarnings = null, $hasAssemblingErrors = null, $hasAttachments = null, $flags = null, \AbbyyBridge\StructType\AbbyyChildrenOrder $childrenOrder = null)
    {
        $this
            ->setId($id)
            ->setBatchId($batchId)
            ->setParentId($parentId)
            ->setDocIndex($docIndex)
            ->setTemplateName($templateName)
            ->setProcessingStageType($processingStageType)
            ->setComment($comment)
            ->setPages($pages)
            ->setIsProcessed($isProcessed)
            ->setHasProcessingErrors($hasProcessingErrors)
            ->setHasDocumentErrors($hasDocumentErrors)
            ->setErrorText($errorText)
            ->setExternalId($externalId)
            ->setProperties($properties)
            ->setPriority($priority)
            ->setFileVersion($fileVersion)
            ->setOwnerId($ownerId)
            ->setStageExternalId($stageExternalId)
            ->setTaskId($taskId)
            ->setUncertainSymbols($uncertainSymbols)
            ->setVerificationSymbols($verificationSymbols)
            ->setTotalSymbols($totalSymbols)
            ->setHasErrors($hasErrors)
            ->setHasWarnings($hasWarnings)
            ->setHasAssemblingErrors($hasAssemblingErrors)
            ->setHasAttachments($hasAttachments)
            ->setFlags($flags)
            ->setChildrenOrder($childrenOrder);
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * Get BatchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }
    /**
     * Set BatchId value
     * @param int $batchId
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->BatchId = $batchId;
        return $this;
    }
    /**
     * Get ParentId value
     * @return int|null
     */
    public function getParentId()
    {
        return $this->ParentId;
    }
    /**
     * Set ParentId value
     * @param int $parentId
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setParentId($parentId = null)
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        $this->ParentId = $parentId;
        return $this;
    }
    /**
     * Get DocIndex value
     * @return int|null
     */
    public function getDocIndex()
    {
        return $this->DocIndex;
    }
    /**
     * Set DocIndex value
     * @param int $docIndex
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setDocIndex($docIndex = null)
    {
        // validation for constraint: int
        if (!is_null($docIndex) && !(is_int($docIndex) || ctype_digit($docIndex))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($docIndex, true), gettype($docIndex)), __LINE__);
        }
        $this->DocIndex = $docIndex;
        return $this;
    }
    /**
     * Get TemplateName value
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     * @param string $templateName
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->TemplateName = $templateName;
        return $this;
    }
    /**
     * Get ProcessingStageType value
     * @return int|null
     */
    public function getProcessingStageType()
    {
        return $this->ProcessingStageType;
    }
    /**
     * Set ProcessingStageType value
     * @param int $processingStageType
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setProcessingStageType($processingStageType = null)
    {
        // validation for constraint: int
        if (!is_null($processingStageType) && !(is_int($processingStageType) || ctype_digit($processingStageType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($processingStageType, true), gettype($processingStageType)), __LINE__);
        }
        $this->ProcessingStageType = $processingStageType;
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * Get Pages value
     * @return \AbbyyBridge\StructType\AbbyyPages|null
     */
    public function getPages()
    {
        return $this->Pages;
    }
    /**
     * Set Pages value
     * @param \AbbyyBridge\StructType\AbbyyPages $pages
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setPages(\AbbyyBridge\StructType\AbbyyPages $pages = null)
    {
        $this->Pages = $pages;
        return $this;
    }
    /**
     * Get IsProcessed value
     * @return bool|null
     */
    public function getIsProcessed()
    {
        return $this->IsProcessed;
    }
    /**
     * Set IsProcessed value
     * @param bool $isProcessed
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setIsProcessed($isProcessed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isProcessed) && !is_bool($isProcessed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessed, true), gettype($isProcessed)), __LINE__);
        }
        $this->IsProcessed = $isProcessed;
        return $this;
    }
    /**
     * Get HasProcessingErrors value
     * @return bool|null
     */
    public function getHasProcessingErrors()
    {
        return $this->HasProcessingErrors;
    }
    /**
     * Set HasProcessingErrors value
     * @param bool $hasProcessingErrors
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setHasProcessingErrors($hasProcessingErrors = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasProcessingErrors) && !is_bool($hasProcessingErrors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasProcessingErrors, true), gettype($hasProcessingErrors)), __LINE__);
        }
        $this->HasProcessingErrors = $hasProcessingErrors;
        return $this;
    }
    /**
     * Get HasDocumentErrors value
     * @return bool|null
     */
    public function getHasDocumentErrors()
    {
        return $this->HasDocumentErrors;
    }
    /**
     * Set HasDocumentErrors value
     * @param bool $hasDocumentErrors
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setHasDocumentErrors($hasDocumentErrors = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasDocumentErrors) && !is_bool($hasDocumentErrors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDocumentErrors, true), gettype($hasDocumentErrors)), __LINE__);
        }
        $this->HasDocumentErrors = $hasDocumentErrors;
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * Get Properties value
     * @return \AbbyyBridge\StructType\AbbyyProperties_1|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \AbbyyBridge\StructType\AbbyyProperties_1 $properties
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setProperties(\AbbyyBridge\StructType\AbbyyProperties_1 $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * Get OwnerId value
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->OwnerId;
    }
    /**
     * Set OwnerId value
     * @param int $ownerId
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setOwnerId($ownerId = null)
    {
        // validation for constraint: int
        if (!is_null($ownerId) && !(is_int($ownerId) || ctype_digit($ownerId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ownerId, true), gettype($ownerId)), __LINE__);
        }
        $this->OwnerId = $ownerId;
        return $this;
    }
    /**
     * Get StageExternalId value
     * @return int|null
     */
    public function getStageExternalId()
    {
        return $this->StageExternalId;
    }
    /**
     * Set StageExternalId value
     * @param int $stageExternalId
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setStageExternalId($stageExternalId = null)
    {
        // validation for constraint: int
        if (!is_null($stageExternalId) && !(is_int($stageExternalId) || ctype_digit($stageExternalId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageExternalId, true), gettype($stageExternalId)), __LINE__);
        }
        $this->StageExternalId = $stageExternalId;
        return $this;
    }
    /**
     * Get TaskId value
     * @return int|null
     */
    public function getTaskId()
    {
        return $this->TaskId;
    }
    /**
     * Set TaskId value
     * @param int $taskId
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setTaskId($taskId = null)
    {
        // validation for constraint: int
        if (!is_null($taskId) && !(is_int($taskId) || ctype_digit($taskId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskId, true), gettype($taskId)), __LINE__);
        }
        $this->TaskId = $taskId;
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * Get HasErrors value
     * @return bool|null
     */
    public function getHasErrors()
    {
        return $this->HasErrors;
    }
    /**
     * Set HasErrors value
     * @param bool $hasErrors
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setHasErrors($hasErrors = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasErrors) && !is_bool($hasErrors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasErrors, true), gettype($hasErrors)), __LINE__);
        }
        $this->HasErrors = $hasErrors;
        return $this;
    }
    /**
     * Get HasWarnings value
     * @return bool|null
     */
    public function getHasWarnings()
    {
        return $this->HasWarnings;
    }
    /**
     * Set HasWarnings value
     * @param bool $hasWarnings
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setHasWarnings($hasWarnings = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasWarnings) && !is_bool($hasWarnings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasWarnings, true), gettype($hasWarnings)), __LINE__);
        }
        $this->HasWarnings = $hasWarnings;
        return $this;
    }
    /**
     * Get HasAssemblingErrors value
     * @return bool|null
     */
    public function getHasAssemblingErrors()
    {
        return $this->HasAssemblingErrors;
    }
    /**
     * Set HasAssemblingErrors value
     * @param bool $hasAssemblingErrors
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setHasAssemblingErrors($hasAssemblingErrors = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAssemblingErrors) && !is_bool($hasAssemblingErrors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAssemblingErrors, true), gettype($hasAssemblingErrors)), __LINE__);
        }
        $this->HasAssemblingErrors = $hasAssemblingErrors;
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
     * Get ChildrenOrder value
     * @return \AbbyyBridge\StructType\AbbyyChildrenOrder|null
     */
    public function getChildrenOrder()
    {
        return $this->ChildrenOrder;
    }
    /**
     * Set ChildrenOrder value
     * @param \AbbyyBridge\StructType\AbbyyChildrenOrder $childrenOrder
     * @return \AbbyyBridge\StructType\AbbyyDocument
     */
    public function setChildrenOrder(\AbbyyBridge\StructType\AbbyyChildrenOrder $childrenOrder = null)
    {
        $this->ChildrenOrder = $childrenOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyDocument
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
