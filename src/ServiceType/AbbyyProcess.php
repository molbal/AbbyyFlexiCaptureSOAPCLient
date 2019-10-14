<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyProcess extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ProcessBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyProcessBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyProcessBatchResponse|bool
     */
    public function ProcessBatch(\AbbyyBridge\StructType\AbbyyProcessBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ProcessBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyProcessBatchResponse
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
