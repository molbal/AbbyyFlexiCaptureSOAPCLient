<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Load ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyLoad extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named LoadDocumentResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyLoadDocumentResult $parameters
     * @return \AbbyyBridge\StructType\AbbyyLoadDocumentResultResponse|bool
     */
    public function LoadDocumentResult(\AbbyyBridge\StructType\AbbyyLoadDocumentResult $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->LoadDocumentResult($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadCustomFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyLoadCustomFile $parameters
     * @return \AbbyyBridge\StructType\AbbyyLoadCustomFileResponse|bool
     */
    public function LoadCustomFile(\AbbyyBridge\StructType\AbbyyLoadCustomFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->LoadCustomFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named LoadAttachment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyLoadAttachment $parameters
     * @return \AbbyyBridge\StructType\AbbyyLoadAttachmentResponse|bool
     */
    public function LoadAttachment(\AbbyyBridge\StructType\AbbyyLoadAttachment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->LoadAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyLoadAttachmentResponse|\AbbyyBridge\StructType\AbbyyLoadCustomFileResponse|\AbbyyBridge\StructType\AbbyyLoadDocumentResultResponse
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
