<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Has ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyHas extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HasRightsForBatchType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyHasRightsForBatchType $parameters
     * @return \AbbyyBridge\StructType\AbbyyHasRightsForBatchTypeResponse|bool
     */
    public function HasRightsForBatchType(\AbbyyBridge\StructType\AbbyyHasRightsForBatchType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HasRightsForBatchType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyHasRightsForBatchTypeResponse
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
