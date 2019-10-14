<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyRemove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RemoveCustomFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyRemoveCustomFile $parameters
     * @return \AbbyyBridge\StructType\AbbyyRemoveCustomFileResponse|bool
     */
    public function RemoveCustomFile(\AbbyyBridge\StructType\AbbyyRemoveCustomFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->RemoveCustomFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RemoveAttachment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyRemoveAttachment $parameters
     * @return \AbbyyBridge\StructType\AbbyyRemoveAttachmentResponse|bool
     */
    public function RemoveAttachment(\AbbyyBridge\StructType\AbbyyRemoveAttachment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->RemoveAttachment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyRemoveAttachmentResponse|\AbbyyBridge\StructType\AbbyyRemoveCustomFileResponse
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
