<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyySend extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SendTaskToException
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySendTaskToException $parameters
     * @return \AbbyyBridge\StructType\AbbyySendTaskToExceptionResponse|bool
     */
    public function SendTaskToException(\AbbyyBridge\StructType\AbbyySendTaskToException $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTaskToException($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySendTask $parameters
     * @return \AbbyyBridge\StructType\AbbyySendTaskResponse|bool
     */
    public function SendTask(\AbbyyBridge\StructType\AbbyySendTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyySendTaskResponse|\AbbyyBridge\StructType\AbbyySendTaskToExceptionResponse
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
