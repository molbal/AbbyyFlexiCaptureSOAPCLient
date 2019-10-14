<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Close ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyClose extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CloseSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCloseSession $parameters
     * @return \AbbyyBridge\StructType\AbbyyCloseSessionResponse|bool
     */
    public function CloseSession(\AbbyyBridge\StructType\AbbyyCloseSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CloseSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseProject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCloseProject $parameters
     * @return \AbbyyBridge\StructType\AbbyyCloseProjectResponse|bool
     */
    public function CloseProject(\AbbyyBridge\StructType\AbbyyCloseProject $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CloseProject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCloseBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyCloseBatchResponse|bool
     */
    public function CloseBatch(\AbbyyBridge\StructType\AbbyyCloseBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CloseBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCloseTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyCloseTaskResponse|bool
     */
    public function CloseTask(\AbbyyBridge\StructType\AbbyyCloseTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CloseTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyCloseBatchResponse|\AbbyyBridge\StructType\AbbyyCloseProjectResponse|\AbbyyBridge\StructType\AbbyyCloseSessionResponse|\AbbyyBridge\StructType\AbbyyCloseTaskResponse
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
