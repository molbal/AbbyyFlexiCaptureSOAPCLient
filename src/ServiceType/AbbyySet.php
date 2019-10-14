<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyySet extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SetDocumentProperties
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySetDocumentProperties $parameters
     * @return \AbbyyBridge\StructType\AbbyySetDocumentPropertiesResponse|bool
     */
    public function SetDocumentProperties(\AbbyyBridge\StructType\AbbyySetDocumentProperties $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetDocumentProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetSettingValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySetSettingValue $parameters
     * @return \AbbyyBridge\StructType\AbbyySetSettingValueResponse|bool
     */
    public function SetSettingValue(\AbbyyBridge\StructType\AbbyySetSettingValue $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetSettingValue($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetRequestStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySetRequestStatus $parameters
     * @return \AbbyyBridge\StructType\AbbyySetRequestStatusResponse|bool
     */
    public function SetRequestStatus(\AbbyyBridge\StructType\AbbyySetRequestStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetRequestStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetTaskPriority
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySetTaskPriority $parameters
     * @return \AbbyyBridge\StructType\AbbyySetTaskPriorityResponse|bool
     */
    public function SetTaskPriority(\AbbyyBridge\StructType\AbbyySetTaskPriority $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetTaskPriority($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetDocumentPriority
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySetDocumentPriority $parameters
     * @return \AbbyyBridge\StructType\AbbyySetDocumentPriorityResponse|bool
     */
    public function SetDocumentPriority(\AbbyyBridge\StructType\AbbyySetDocumentPriority $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetDocumentPriority($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyySetDocumentPriorityResponse|\AbbyyBridge\StructType\AbbyySetDocumentPropertiesResponse|\AbbyyBridge\StructType\AbbyySetRequestStatusResponse|\AbbyyBridge\StructType\AbbyySetSettingValueResponse|\AbbyyBridge\StructType\AbbyySetTaskPriorityResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
