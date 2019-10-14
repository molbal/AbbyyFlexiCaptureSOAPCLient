<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyDelete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyDeleteBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyDeleteBatchResponse|bool
     */
    public function DeleteBatch(\AbbyyBridge\StructType\AbbyyDeleteBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeletePage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyDeletePage $parameters
     * @return \AbbyyBridge\StructType\AbbyyDeletePageResponse|bool
     */
    public function DeletePage(\AbbyyBridge\StructType\AbbyyDeletePage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeletePage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyDeleteDocument $parameters
     * @return \AbbyyBridge\StructType\AbbyyDeleteDocumentResponse|bool
     */
    public function DeleteDocument(\AbbyyBridge\StructType\AbbyyDeleteDocument $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyDeleteRequest $parameters
     * @return \AbbyyBridge\StructType\AbbyyDeleteRequestResponse|bool
     */
    public function DeleteRequest(\AbbyyBridge\StructType\AbbyyDeleteRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteRequest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyDeleteBatchResponse|\AbbyyBridge\StructType\AbbyyDeleteDocumentResponse|\AbbyyBridge\StructType\AbbyyDeletePageResponse|\AbbyyBridge\StructType\AbbyyDeleteRequestResponse
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
