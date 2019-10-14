<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Open ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyOpen extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named OpenSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyOpenSession $parameters
     * @return \AbbyyBridge\StructType\AbbyyOpenSessionResponse|bool
     */
    public function OpenSession(\AbbyyBridge\StructType\AbbyyOpenSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->OpenSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OpenProject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyOpenProject $parameters
     * @return \AbbyyBridge\StructType\AbbyyOpenProjectResponse|bool
     */
    public function OpenProject(\AbbyyBridge\StructType\AbbyyOpenProject $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->OpenProject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OpenBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyOpenBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyOpenBatchResponse|bool
     */
    public function OpenBatch(\AbbyyBridge\StructType\AbbyyOpenBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->OpenBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OpenTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyOpenTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyOpenTaskResponse|bool
     */
    public function OpenTask(\AbbyyBridge\StructType\AbbyyOpenTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->OpenTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyOpenBatchResponse|\AbbyyBridge\StructType\AbbyyOpenProjectResponse|\AbbyyBridge\StructType\AbbyyOpenSessionResponse|\AbbyyBridge\StructType\AbbyyOpenTaskResponse
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
