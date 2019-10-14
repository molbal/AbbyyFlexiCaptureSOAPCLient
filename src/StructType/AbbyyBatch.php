<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Batch StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyBatch extends AbstractStructBase
{
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The ProjectId
     * @var int
     */
    public $ProjectId;
    /**
     * The BatchTypeId
     * @var int
     */
    public $BatchTypeId;
    /**
     * The Priority
     * @var int
     */
    public $Priority;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The HasAttachments
     * @var bool
     */
    public $HasAttachments;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyProperties_1
     */
    public $Properties;
    /**
     * The CreationDate
     * @var int
     */
    public $CreationDate;
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
     * The RecognizedSymbolsCount
     * @var int
     */
    public $RecognizedSymbolsCount;
    /**
     * The VerificationSymbolsCount
     * @var int
     */
    public $VerificationSymbolsCount;
    /**
     * The UncertainSymbolsCount
     * @var int
     */
    public $UncertainSymbolsCount;
    /**
     * The AssembledDocumentsCount
     * @var int
     */
    public $AssembledDocumentsCount;
    /**
     * The RecognizedDocumentsCount
     * @var int
     */
    public $RecognizedDocumentsCount;
    /**
     * The VerifiedDocumentsCount
     * @var int
     */
    public $VerifiedDocumentsCount;
    /**
     * The ExportedDocumentsCount
     * @var int
     */
    public $ExportedDocumentsCount;
    /**
     * The StageExternalId
     * @var int
     */
    public $StageExternalId;
    /**
     * The ErrorText
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ErrorText;
    /**
     * The OwnerId
     * @var int
     */
    public $OwnerId;
    /**
     * The CreatorId
     * @var int
     */
    public $CreatorId;
    /**
     * The SLAStartDate
     * @var int
     */
    public $SLAStartDate;
    /**
     * The SLAExpirationDate
     * @var int
     */
    public $SLAExpirationDate;
    /**
     * The ElapsedProcessingSeconds
     * @var int
     */
    public $ElapsedProcessingSeconds;
    /**
     * Constructor method for Batch
     * @uses AbbyyBatch::setId()
     * @uses AbbyyBatch::setName()
     * @uses AbbyyBatch::setProjectId()
     * @uses AbbyyBatch::setBatchTypeId()
     * @uses AbbyyBatch::setPriority()
     * @uses AbbyyBatch::setDescription()
     * @uses AbbyyBatch::setHasAttachments()
     * @uses AbbyyBatch::setProperties()
     * @uses AbbyyBatch::setCreationDate()
     * @uses AbbyyBatch::setDocumentsCount()
     * @uses AbbyyBatch::setPagesCount()
     * @uses AbbyyBatch::setRecognizedSymbolsCount()
     * @uses AbbyyBatch::setVerificationSymbolsCount()
     * @uses AbbyyBatch::setUncertainSymbolsCount()
     * @uses AbbyyBatch::setAssembledDocumentsCount()
     * @uses AbbyyBatch::setRecognizedDocumentsCount()
     * @uses AbbyyBatch::setVerifiedDocumentsCount()
     * @uses AbbyyBatch::setExportedDocumentsCount()
     * @uses AbbyyBatch::setStageExternalId()
     * @uses AbbyyBatch::setErrorText()
     * @uses AbbyyBatch::setOwnerId()
     * @uses AbbyyBatch::setCreatorId()
     * @uses AbbyyBatch::setSLAStartDate()
     * @uses AbbyyBatch::setSLAExpirationDate()
     * @uses AbbyyBatch::setElapsedProcessingSeconds()
     * @param int $id
     * @param string $name
     * @param int $projectId
     * @param int $batchTypeId
     * @param int $priority
     * @param string $description
     * @param bool $hasAttachments
     * @param \AbbyyBridge\StructType\AbbyyProperties_1 $properties
     * @param int $creationDate
     * @param int $documentsCount
     * @param int $pagesCount
     * @param int $recognizedSymbolsCount
     * @param int $verificationSymbolsCount
     * @param int $uncertainSymbolsCount
     * @param int $assembledDocumentsCount
     * @param int $recognizedDocumentsCount
     * @param int $verifiedDocumentsCount
     * @param int $exportedDocumentsCount
     * @param int $stageExternalId
     * @param string $errorText
     * @param int $ownerId
     * @param int $creatorId
     * @param int $sLAStartDate
     * @param int $sLAExpirationDate
     * @param int $elapsedProcessingSeconds
     */
    public function __construct($id = null, $name = null, $projectId = null, $batchTypeId = null, $priority = null, $description = null, $hasAttachments = null, \AbbyyBridge\StructType\AbbyyProperties_1 $properties = null, $creationDate = null, $documentsCount = null, $pagesCount = null, $recognizedSymbolsCount = null, $verificationSymbolsCount = null, $uncertainSymbolsCount = null, $assembledDocumentsCount = null, $recognizedDocumentsCount = null, $verifiedDocumentsCount = null, $exportedDocumentsCount = null, $stageExternalId = null, $errorText = null, $ownerId = null, $creatorId = null, $sLAStartDate = null, $sLAExpirationDate = null, $elapsedProcessingSeconds = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setPriority($priority)
            ->setDescription($description)
            ->setHasAttachments($hasAttachments)
            ->setProperties($properties)
            ->setCreationDate($creationDate)
            ->setDocumentsCount($documentsCount)
            ->setPagesCount($pagesCount)
            ->setRecognizedSymbolsCount($recognizedSymbolsCount)
            ->setVerificationSymbolsCount($verificationSymbolsCount)
            ->setUncertainSymbolsCount($uncertainSymbolsCount)
            ->setAssembledDocumentsCount($assembledDocumentsCount)
            ->setRecognizedDocumentsCount($recognizedDocumentsCount)
            ->setVerifiedDocumentsCount($verifiedDocumentsCount)
            ->setExportedDocumentsCount($exportedDocumentsCount)
            ->setStageExternalId($stageExternalId)
            ->setErrorText($errorText)
            ->setOwnerId($ownerId)
            ->setCreatorId($creatorId)
            ->setSLAStartDate($sLAStartDate)
            ->setSLAExpirationDate($sLAExpirationDate)
            ->setElapsedProcessingSeconds($elapsedProcessingSeconds);
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ProjectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }
    /**
     * Set ProjectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->ProjectId = $projectId;
        return $this;
    }
    /**
     * Get BatchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->BatchTypeId;
    }
    /**
     * Set BatchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->BatchTypeId = $batchTypeId;
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setProperties(\AbbyyBridge\StructType\AbbyyProperties_1 $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return int|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param int $creationDate
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: int
        if (!is_null($creationDate) && !(is_int($creationDate) || ctype_digit($creationDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * Get RecognizedSymbolsCount value
     * @return int|null
     */
    public function getRecognizedSymbolsCount()
    {
        return $this->RecognizedSymbolsCount;
    }
    /**
     * Set RecognizedSymbolsCount value
     * @param int $recognizedSymbolsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setRecognizedSymbolsCount($recognizedSymbolsCount = null)
    {
        // validation for constraint: int
        if (!is_null($recognizedSymbolsCount) && !(is_int($recognizedSymbolsCount) || ctype_digit($recognizedSymbolsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recognizedSymbolsCount, true), gettype($recognizedSymbolsCount)), __LINE__);
        }
        $this->RecognizedSymbolsCount = $recognizedSymbolsCount;
        return $this;
    }
    /**
     * Get VerificationSymbolsCount value
     * @return int|null
     */
    public function getVerificationSymbolsCount()
    {
        return $this->VerificationSymbolsCount;
    }
    /**
     * Set VerificationSymbolsCount value
     * @param int $verificationSymbolsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setVerificationSymbolsCount($verificationSymbolsCount = null)
    {
        // validation for constraint: int
        if (!is_null($verificationSymbolsCount) && !(is_int($verificationSymbolsCount) || ctype_digit($verificationSymbolsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verificationSymbolsCount, true), gettype($verificationSymbolsCount)), __LINE__);
        }
        $this->VerificationSymbolsCount = $verificationSymbolsCount;
        return $this;
    }
    /**
     * Get UncertainSymbolsCount value
     * @return int|null
     */
    public function getUncertainSymbolsCount()
    {
        return $this->UncertainSymbolsCount;
    }
    /**
     * Set UncertainSymbolsCount value
     * @param int $uncertainSymbolsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setUncertainSymbolsCount($uncertainSymbolsCount = null)
    {
        // validation for constraint: int
        if (!is_null($uncertainSymbolsCount) && !(is_int($uncertainSymbolsCount) || ctype_digit($uncertainSymbolsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uncertainSymbolsCount, true), gettype($uncertainSymbolsCount)), __LINE__);
        }
        $this->UncertainSymbolsCount = $uncertainSymbolsCount;
        return $this;
    }
    /**
     * Get AssembledDocumentsCount value
     * @return int|null
     */
    public function getAssembledDocumentsCount()
    {
        return $this->AssembledDocumentsCount;
    }
    /**
     * Set AssembledDocumentsCount value
     * @param int $assembledDocumentsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setAssembledDocumentsCount($assembledDocumentsCount = null)
    {
        // validation for constraint: int
        if (!is_null($assembledDocumentsCount) && !(is_int($assembledDocumentsCount) || ctype_digit($assembledDocumentsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assembledDocumentsCount, true), gettype($assembledDocumentsCount)), __LINE__);
        }
        $this->AssembledDocumentsCount = $assembledDocumentsCount;
        return $this;
    }
    /**
     * Get RecognizedDocumentsCount value
     * @return int|null
     */
    public function getRecognizedDocumentsCount()
    {
        return $this->RecognizedDocumentsCount;
    }
    /**
     * Set RecognizedDocumentsCount value
     * @param int $recognizedDocumentsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setRecognizedDocumentsCount($recognizedDocumentsCount = null)
    {
        // validation for constraint: int
        if (!is_null($recognizedDocumentsCount) && !(is_int($recognizedDocumentsCount) || ctype_digit($recognizedDocumentsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recognizedDocumentsCount, true), gettype($recognizedDocumentsCount)), __LINE__);
        }
        $this->RecognizedDocumentsCount = $recognizedDocumentsCount;
        return $this;
    }
    /**
     * Get VerifiedDocumentsCount value
     * @return int|null
     */
    public function getVerifiedDocumentsCount()
    {
        return $this->VerifiedDocumentsCount;
    }
    /**
     * Set VerifiedDocumentsCount value
     * @param int $verifiedDocumentsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setVerifiedDocumentsCount($verifiedDocumentsCount = null)
    {
        // validation for constraint: int
        if (!is_null($verifiedDocumentsCount) && !(is_int($verifiedDocumentsCount) || ctype_digit($verifiedDocumentsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verifiedDocumentsCount, true), gettype($verifiedDocumentsCount)), __LINE__);
        }
        $this->VerifiedDocumentsCount = $verifiedDocumentsCount;
        return $this;
    }
    /**
     * Get ExportedDocumentsCount value
     * @return int|null
     */
    public function getExportedDocumentsCount()
    {
        return $this->ExportedDocumentsCount;
    }
    /**
     * Set ExportedDocumentsCount value
     * @param int $exportedDocumentsCount
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setExportedDocumentsCount($exportedDocumentsCount = null)
    {
        // validation for constraint: int
        if (!is_null($exportedDocumentsCount) && !(is_int($exportedDocumentsCount) || ctype_digit($exportedDocumentsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportedDocumentsCount, true), gettype($exportedDocumentsCount)), __LINE__);
        }
        $this->ExportedDocumentsCount = $exportedDocumentsCount;
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
     * Get CreatorId value
     * @return int|null
     */
    public function getCreatorId()
    {
        return $this->CreatorId;
    }
    /**
     * Set CreatorId value
     * @param int $creatorId
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setCreatorId($creatorId = null)
    {
        // validation for constraint: int
        if (!is_null($creatorId) && !(is_int($creatorId) || ctype_digit($creatorId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatorId, true), gettype($creatorId)), __LINE__);
        }
        $this->CreatorId = $creatorId;
        return $this;
    }
    /**
     * Get SLAStartDate value
     * @return int|null
     */
    public function getSLAStartDate()
    {
        return $this->SLAStartDate;
    }
    /**
     * Set SLAStartDate value
     * @param int $sLAStartDate
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setSLAStartDate($sLAStartDate = null)
    {
        // validation for constraint: int
        if (!is_null($sLAStartDate) && !(is_int($sLAStartDate) || ctype_digit($sLAStartDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sLAStartDate, true), gettype($sLAStartDate)), __LINE__);
        }
        $this->SLAStartDate = $sLAStartDate;
        return $this;
    }
    /**
     * Get SLAExpirationDate value
     * @return int|null
     */
    public function getSLAExpirationDate()
    {
        return $this->SLAExpirationDate;
    }
    /**
     * Set SLAExpirationDate value
     * @param int $sLAExpirationDate
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setSLAExpirationDate($sLAExpirationDate = null)
    {
        // validation for constraint: int
        if (!is_null($sLAExpirationDate) && !(is_int($sLAExpirationDate) || ctype_digit($sLAExpirationDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sLAExpirationDate, true), gettype($sLAExpirationDate)), __LINE__);
        }
        $this->SLAExpirationDate = $sLAExpirationDate;
        return $this;
    }
    /**
     * Get ElapsedProcessingSeconds value
     * @return int|null
     */
    public function getElapsedProcessingSeconds()
    {
        return $this->ElapsedProcessingSeconds;
    }
    /**
     * Set ElapsedProcessingSeconds value
     * @param int $elapsedProcessingSeconds
     * @return \AbbyyBridge\StructType\AbbyyBatch
     */
    public function setElapsedProcessingSeconds($elapsedProcessingSeconds = null)
    {
        // validation for constraint: int
        if (!is_null($elapsedProcessingSeconds) && !(is_int($elapsedProcessingSeconds) || ctype_digit($elapsedProcessingSeconds))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($elapsedProcessingSeconds, true), gettype($elapsedProcessingSeconds)), __LINE__);
        }
        $this->ElapsedProcessingSeconds = $elapsedProcessingSeconds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyBatch
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
