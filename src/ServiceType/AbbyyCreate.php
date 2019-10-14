<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyCreate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CreateTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCreateTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyCreateTaskResponse|bool
     */
    public function CreateTask(\AbbyyBridge\StructType\AbbyyCreateTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCreateRequest $parameters
     * @return \AbbyyBridge\StructType\AbbyyCreateRequestResponse|bool
     */
    public function CreateRequest(\AbbyyBridge\StructType\AbbyyCreateRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateRequest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyCreateRequestResponse|\AbbyyBridge\StructType\AbbyyCreateTaskResponse
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
