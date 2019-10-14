<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyAdd extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddNewBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyAddNewBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatchResponse|bool
     */
    public function AddNewBatch(\AbbyyBridge\StructType\AbbyyAddNewBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddNewBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNewImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyAddNewImage $parameters
     * @return \AbbyyBridge\StructType\AbbyyAddNewImageResponse|bool
     */
    public function AddNewImage(\AbbyyBridge\StructType\AbbyyAddNewImage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddNewImage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNewDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyAddNewDocument $parameters
     * @return \AbbyyBridge\StructType\AbbyyAddNewDocumentResponse|bool
     */
    public function AddNewDocument(\AbbyyBridge\StructType\AbbyyAddNewDocument $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddNewDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddNewPage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyAddNewPage $parameters
     * @return \AbbyyBridge\StructType\AbbyyAddNewPageResponse|bool
     */
    public function AddNewPage(\AbbyyBridge\StructType\AbbyyAddNewPage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddNewPage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddUserIfNotExist
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyAddUserIfNotExist $parameters
     * @return \AbbyyBridge\StructType\AbbyyAddUserIfNotExistResponse|bool
     */
    public function AddUserIfNotExist(\AbbyyBridge\StructType\AbbyyAddUserIfNotExist $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddUserIfNotExist($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyAddNewBatchResponse|\AbbyyBridge\StructType\AbbyyAddNewDocumentResponse|\AbbyyBridge\StructType\AbbyyAddNewImageResponse|\AbbyyBridge\StructType\AbbyyAddNewPageResponse|\AbbyyBridge\StructType\AbbyyAddUserIfNotExistResponse
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
