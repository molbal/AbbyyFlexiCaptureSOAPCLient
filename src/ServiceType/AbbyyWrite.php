<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Write ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyWrite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named WriteToLog
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyWriteToLog $parameters
     * @return \AbbyyBridge\StructType\AbbyyWriteToLogResponse|bool
     */
    public function WriteToLog(\AbbyyBridge\StructType\AbbyyWriteToLog $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->WriteToLog($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyWriteToLogResponse
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
