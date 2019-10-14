<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Move ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyMove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named MoveBatchItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyMoveBatchItem $parameters
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItemResponse|bool
     */
    public function MoveBatchItem(\AbbyyBridge\StructType\AbbyyMoveBatchItem $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->MoveBatchItem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyMoveBatchItemResponse
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
