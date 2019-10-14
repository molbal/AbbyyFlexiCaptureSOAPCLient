<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyCancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CancelTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyCancelTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyCancelTaskResponse|bool
     */
    public function CancelTask(\AbbyyBridge\StructType\AbbyyCancelTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyCancelTaskResponse
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
