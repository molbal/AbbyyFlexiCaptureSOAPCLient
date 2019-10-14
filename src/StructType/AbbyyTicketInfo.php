<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfo StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyTicketInfo extends AbstractStructBase
{
    /**
     * The TicketId
     * @var int
     */
    public $TicketId;
    /**
     * The LicenseNumber
     * @var string
     */
    public $LicenseNumber;
    /**
     * The StationType
     * @var int
     */
    public $StationType;
    /**
     * The ExpirationDate
     * @var int
     */
    public $ExpirationDate;
    /**
     * The ExpirationPeriod
     * @var int
     */
    public $ExpirationPeriod;
    /**
     * The AvailableModules
     * @var int
     */
    public $AvailableModules;
    /**
     * The IssuedForSessionId
     * @var int
     */
    public $IssuedForSessionId;
    /**
     * The CustomFeatures
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyCustomFeatures
     */
    public $CustomFeatures;
    /**
     * The Signature
     * @var string
     */
    public $Signature;
    /**
     * Constructor method for TicketInfo
     * @uses AbbyyTicketInfo::setTicketId()
     * @uses AbbyyTicketInfo::setLicenseNumber()
     * @uses AbbyyTicketInfo::setStationType()
     * @uses AbbyyTicketInfo::setExpirationDate()
     * @uses AbbyyTicketInfo::setExpirationPeriod()
     * @uses AbbyyTicketInfo::setAvailableModules()
     * @uses AbbyyTicketInfo::setIssuedForSessionId()
     * @uses AbbyyTicketInfo::setCustomFeatures()
     * @uses AbbyyTicketInfo::setSignature()
     * @param int $ticketId
     * @param string $licenseNumber
     * @param int $stationType
     * @param int $expirationDate
     * @param int $expirationPeriod
     * @param int $availableModules
     * @param int $issuedForSessionId
     * @param \AbbyyBridge\StructType\AbbyyCustomFeatures $customFeatures
     * @param string $signature
     */
    public function __construct($ticketId = null, $licenseNumber = null, $stationType = null, $expirationDate = null, $expirationPeriod = null, $availableModules = null, $issuedForSessionId = null, \AbbyyBridge\StructType\AbbyyCustomFeatures $customFeatures = null, $signature = null)
    {
        $this
            ->setTicketId($ticketId)
            ->setLicenseNumber($licenseNumber)
            ->setStationType($stationType)
            ->setExpirationDate($expirationDate)
            ->setExpirationPeriod($expirationPeriod)
            ->setAvailableModules($availableModules)
            ->setIssuedForSessionId($issuedForSessionId)
            ->setCustomFeatures($customFeatures)
            ->setSignature($signature);
    }
    /**
     * Get TicketId value
     * @return int|null
     */
    public function getTicketId()
    {
        return $this->TicketId;
    }
    /**
     * Set TicketId value
     * @param int $ticketId
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setTicketId($ticketId = null)
    {
        // validation for constraint: int
        if (!is_null($ticketId) && !(is_int($ticketId) || ctype_digit($ticketId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketId, true), gettype($ticketId)), __LINE__);
        }
        $this->TicketId = $ticketId;
        return $this;
    }
    /**
     * Get LicenseNumber value
     * @return string|null
     */
    public function getLicenseNumber()
    {
        return $this->LicenseNumber;
    }
    /**
     * Set LicenseNumber value
     * @param string $licenseNumber
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setLicenseNumber($licenseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($licenseNumber) && !is_string($licenseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licenseNumber, true), gettype($licenseNumber)), __LINE__);
        }
        $this->LicenseNumber = $licenseNumber;
        return $this;
    }
    /**
     * Get StationType value
     * @return int|null
     */
    public function getStationType()
    {
        return $this->StationType;
    }
    /**
     * Set StationType value
     * @param int $stationType
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setStationType($stationType = null)
    {
        // validation for constraint: int
        if (!is_null($stationType) && !(is_int($stationType) || ctype_digit($stationType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stationType, true), gettype($stationType)), __LINE__);
        }
        $this->StationType = $stationType;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return int|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param int $expirationDate
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: int
        if (!is_null($expirationDate) && !(is_int($expirationDate) || ctype_digit($expirationDate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get ExpirationPeriod value
     * @return int|null
     */
    public function getExpirationPeriod()
    {
        return $this->ExpirationPeriod;
    }
    /**
     * Set ExpirationPeriod value
     * @param int $expirationPeriod
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setExpirationPeriod($expirationPeriod = null)
    {
        // validation for constraint: int
        if (!is_null($expirationPeriod) && !(is_int($expirationPeriod) || ctype_digit($expirationPeriod))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationPeriod, true), gettype($expirationPeriod)), __LINE__);
        }
        $this->ExpirationPeriod = $expirationPeriod;
        return $this;
    }
    /**
     * Get AvailableModules value
     * @return int|null
     */
    public function getAvailableModules()
    {
        return $this->AvailableModules;
    }
    /**
     * Set AvailableModules value
     * @param int $availableModules
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setAvailableModules($availableModules = null)
    {
        // validation for constraint: int
        if (!is_null($availableModules) && !(is_int($availableModules) || ctype_digit($availableModules))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableModules, true), gettype($availableModules)), __LINE__);
        }
        $this->AvailableModules = $availableModules;
        return $this;
    }
    /**
     * Get IssuedForSessionId value
     * @return int|null
     */
    public function getIssuedForSessionId()
    {
        return $this->IssuedForSessionId;
    }
    /**
     * Set IssuedForSessionId value
     * @param int $issuedForSessionId
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setIssuedForSessionId($issuedForSessionId = null)
    {
        // validation for constraint: int
        if (!is_null($issuedForSessionId) && !(is_int($issuedForSessionId) || ctype_digit($issuedForSessionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($issuedForSessionId, true), gettype($issuedForSessionId)), __LINE__);
        }
        $this->IssuedForSessionId = $issuedForSessionId;
        return $this;
    }
    /**
     * Get CustomFeatures value
     * @return \AbbyyBridge\StructType\AbbyyCustomFeatures|null
     */
    public function getCustomFeatures()
    {
        return $this->CustomFeatures;
    }
    /**
     * Set CustomFeatures value
     * @param \AbbyyBridge\StructType\AbbyyCustomFeatures $customFeatures
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setCustomFeatures(\AbbyyBridge\StructType\AbbyyCustomFeatures $customFeatures = null)
    {
        $this->CustomFeatures = $customFeatures;
        return $this;
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyTicketInfo
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
