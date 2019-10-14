<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredBatches StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetFilteredBatches extends AbstractStructBase
{
    /**
     * The sessionId
     * @var int
     */
    public $sessionId;
    /**
     * The projectId
     * @var int
     */
    public $projectId;
    /**
     * The batchTypeId
     * @var int
     */
    public $batchTypeId;
    /**
     * The stageTypes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyStageTypes
     */
    public $stageTypes;
    /**
     * The stageExtIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyStageExtIds
     */
    public $stageExtIds;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The batchPurpose
     * @var int
     */
    public $batchPurpose;
    /**
     * The startDate
     * @var int
     */
    public $startDate;
    /**
     * The stopDate
     * @var int
     */
    public $stopDate;
    /**
     * The slaDateBeginRange
     * @var int
     */
    public $slaDateBeginRange;
    /**
     * The slaDateEndRange
     * @var int
     */
    public $slaDateEndRange;
    /**
     * The slaStateFlags
     * @var int
     */
    public $slaStateFlags;
    /**
     * The firstRecord
     * @var int
     */
    public $firstRecord;
    /**
     * The recordsCount
     * @var int
     */
    public $recordsCount;
    /**
     * The filterRegParams
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyFilterRegParams
     */
    public $filterRegParams;
    /**
     * Constructor method for GetFilteredBatches
     * @uses AbbyyGetFilteredBatches::setSessionId()
     * @uses AbbyyGetFilteredBatches::setProjectId()
     * @uses AbbyyGetFilteredBatches::setBatchTypeId()
     * @uses AbbyyGetFilteredBatches::setStageTypes()
     * @uses AbbyyGetFilteredBatches::setStageExtIds()
     * @uses AbbyyGetFilteredBatches::setName()
     * @uses AbbyyGetFilteredBatches::setBatchPurpose()
     * @uses AbbyyGetFilteredBatches::setStartDate()
     * @uses AbbyyGetFilteredBatches::setStopDate()
     * @uses AbbyyGetFilteredBatches::setSlaDateBeginRange()
     * @uses AbbyyGetFilteredBatches::setSlaDateEndRange()
     * @uses AbbyyGetFilteredBatches::setSlaStateFlags()
     * @uses AbbyyGetFilteredBatches::setFirstRecord()
     * @uses AbbyyGetFilteredBatches::setRecordsCount()
     * @uses AbbyyGetFilteredBatches::setFilterRegParams()
     * @param int $sessionId
     * @param int $projectId
     * @param int $batchTypeId
     * @param \AbbyyBridge\StructType\AbbyyStageTypes $stageTypes
     * @param \AbbyyBridge\StructType\AbbyyStageExtIds $stageExtIds
     * @param string $name
     * @param int $batchPurpose
     * @param int $startDate
     * @param int $stopDate
     * @param int $slaDateBeginRange
     * @param int $slaDateEndRange
     * @param int $slaStateFlags
     * @param int $firstRecord
     * @param int $recordsCount
     * @param \AbbyyBridge\StructType\AbbyyFilterRegParams $filterRegParams
     */
    public function __construct($sessionId = null, $projectId = null, $batchTypeId = null, \AbbyyBridge\StructType\AbbyyStageTypes $stageTypes = null, \AbbyyBridge\StructType\AbbyyStageExtIds $stageExtIds = null, $name = null, $batchPurpose = null, $startDate = null, $stopDate = null, $slaDateBeginRange = null, $slaDateEndRange = null, $slaStateFlags = null, $firstRecord = null, $recordsCount = null, \AbbyyBridge\StructType\AbbyyFilterRegParams $filterRegParams = null)
    {
        $this
            ->setSessionId($sessionId)
            ->setProjectId($projectId)
            ->setBatchTypeId($batchTypeId)
            ->setStageTypes($stageTypes)
            ->setStageExtIds($stageExtIds)
            ->setName($name)
            ->setBatchPurpose($batchPurpose)
            ->setStartDate($startDate)
            ->setStopDate($stopDate)
            ->setSlaDateBeginRange($slaDateBeginRange)
            ->setSlaDateEndRange($slaDateEndRange)
            ->setSlaStateFlags($slaStateFlags)
            ->setFirstRecord($firstRecord)
            ->setRecordsCount($recordsCount)
            ->setFilterRegParams($filterRegParams);
    }
    /**
     * Get sessionId value
     * @return int|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param int $sessionId
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: int
        if (!is_null($sessionId) && !(is_int($sessionId) || ctype_digit($sessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * Get projectId value
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * Set projectId value
     * @param int $projectId
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setProjectId($projectId = null)
    {
        // validation for constraint: int
        if (!is_null($projectId) && !(is_int($projectId) || ctype_digit($projectId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($projectId, true), gettype($projectId)), __LINE__);
        }
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * Get batchTypeId value
     * @return int|null
     */
    public function getBatchTypeId()
    {
        return $this->batchTypeId;
    }
    /**
     * Set batchTypeId value
     * @param int $batchTypeId
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setBatchTypeId($batchTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($batchTypeId) && !(is_int($batchTypeId) || ctype_digit($batchTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchTypeId, true), gettype($batchTypeId)), __LINE__);
        }
        $this->batchTypeId = $batchTypeId;
        return $this;
    }
    /**
     * Get stageTypes value
     * @return \AbbyyBridge\StructType\AbbyyStageTypes|null
     */
    public function getStageTypes()
    {
        return $this->stageTypes;
    }
    /**
     * Set stageTypes value
     * @param \AbbyyBridge\StructType\AbbyyStageTypes $stageTypes
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setStageTypes(\AbbyyBridge\StructType\AbbyyStageTypes $stageTypes = null)
    {
        $this->stageTypes = $stageTypes;
        return $this;
    }
    /**
     * Get stageExtIds value
     * @return \AbbyyBridge\StructType\AbbyyStageExtIds|null
     */
    public function getStageExtIds()
    {
        return $this->stageExtIds;
    }
    /**
     * Set stageExtIds value
     * @param \AbbyyBridge\StructType\AbbyyStageExtIds $stageExtIds
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setStageExtIds(\AbbyyBridge\StructType\AbbyyStageExtIds $stageExtIds = null)
    {
        $this->stageExtIds = $stageExtIds;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get batchPurpose value
     * @return int|null
     */
    public function getBatchPurpose()
    {
        return $this->batchPurpose;
    }
    /**
     * Set batchPurpose value
     * @param int $batchPurpose
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setBatchPurpose($batchPurpose = null)
    {
        // validation for constraint: int
        if (!is_null($batchPurpose) && !(is_int($batchPurpose) || ctype_digit($batchPurpose))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchPurpose, true), gettype($batchPurpose)), __LINE__);
        }
        $this->batchPurpose = $batchPurpose;
        return $this;
    }
    /**
     * Get startDate value
     * @return int|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param int $startDate
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: int
        if (!is_null($startDate) && !(is_int($startDate) || ctype_digit($startDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Get stopDate value
     * @return int|null
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }
    /**
     * Set stopDate value
     * @param int $stopDate
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setStopDate($stopDate = null)
    {
        // validation for constraint: int
        if (!is_null($stopDate) && !(is_int($stopDate) || ctype_digit($stopDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stopDate, true), gettype($stopDate)), __LINE__);
        }
        $this->stopDate = $stopDate;
        return $this;
    }
    /**
     * Get slaDateBeginRange value
     * @return int|null
     */
    public function getSlaDateBeginRange()
    {
        return $this->slaDateBeginRange;
    }
    /**
     * Set slaDateBeginRange value
     * @param int $slaDateBeginRange
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setSlaDateBeginRange($slaDateBeginRange = null)
    {
        // validation for constraint: int
        if (!is_null($slaDateBeginRange) && !(is_int($slaDateBeginRange) || ctype_digit($slaDateBeginRange))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slaDateBeginRange, true), gettype($slaDateBeginRange)), __LINE__);
        }
        $this->slaDateBeginRange = $slaDateBeginRange;
        return $this;
    }
    /**
     * Get slaDateEndRange value
     * @return int|null
     */
    public function getSlaDateEndRange()
    {
        return $this->slaDateEndRange;
    }
    /**
     * Set slaDateEndRange value
     * @param int $slaDateEndRange
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setSlaDateEndRange($slaDateEndRange = null)
    {
        // validation for constraint: int
        if (!is_null($slaDateEndRange) && !(is_int($slaDateEndRange) || ctype_digit($slaDateEndRange))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slaDateEndRange, true), gettype($slaDateEndRange)), __LINE__);
        }
        $this->slaDateEndRange = $slaDateEndRange;
        return $this;
    }
    /**
     * Get slaStateFlags value
     * @return int|null
     */
    public function getSlaStateFlags()
    {
        return $this->slaStateFlags;
    }
    /**
     * Set slaStateFlags value
     * @param int $slaStateFlags
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setSlaStateFlags($slaStateFlags = null)
    {
        // validation for constraint: int
        if (!is_null($slaStateFlags) && !(is_int($slaStateFlags) || ctype_digit($slaStateFlags))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slaStateFlags, true), gettype($slaStateFlags)), __LINE__);
        }
        $this->slaStateFlags = $slaStateFlags;
        return $this;
    }
    /**
     * Get firstRecord value
     * @return int|null
     */
    public function getFirstRecord()
    {
        return $this->firstRecord;
    }
    /**
     * Set firstRecord value
     * @param int $firstRecord
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setFirstRecord($firstRecord = null)
    {
        // validation for constraint: int
        if (!is_null($firstRecord) && !(is_int($firstRecord) || ctype_digit($firstRecord))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($firstRecord, true), gettype($firstRecord)), __LINE__);
        }
        $this->firstRecord = $firstRecord;
        return $this;
    }
    /**
     * Get recordsCount value
     * @return int|null
     */
    public function getRecordsCount()
    {
        return $this->recordsCount;
    }
    /**
     * Set recordsCount value
     * @param int $recordsCount
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setRecordsCount($recordsCount = null)
    {
        // validation for constraint: int
        if (!is_null($recordsCount) && !(is_int($recordsCount) || ctype_digit($recordsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recordsCount, true), gettype($recordsCount)), __LINE__);
        }
        $this->recordsCount = $recordsCount;
        return $this;
    }
    /**
     * Get filterRegParams value
     * @return \AbbyyBridge\StructType\AbbyyFilterRegParams|null
     */
    public function getFilterRegParams()
    {
        return $this->filterRegParams;
    }
    /**
     * Set filterRegParams value
     * @param \AbbyyBridge\StructType\AbbyyFilterRegParams $filterRegParams
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
     */
    public function setFilterRegParams(\AbbyyBridge\StructType\AbbyyFilterRegParams $filterRegParams = null)
    {
        $this->filterRegParams = $filterRegParams;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatches
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
