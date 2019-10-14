<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyySave extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SaveCustomFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySaveCustomFile $parameters
     * @return \AbbyyBridge\StructType\AbbyySaveCustomFileResponse|bool
     */
    public function SaveCustomFile(\AbbyyBridge\StructType\AbbyySaveCustomFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SaveCustomFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SaveAttachment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyySaveAttachment $parameters
     * @return \AbbyyBridge\StructType\AbbyySaveAttachmentResponse|bool
     */
    public function SaveAttachment(\AbbyyBridge\StructType\AbbyySaveAttachment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SaveAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyySaveAttachmentResponse|\AbbyyBridge\StructType\AbbyySaveCustomFileResponse
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
