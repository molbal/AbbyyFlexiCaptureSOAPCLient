<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyIs extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named IsSessionExists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyIsSessionExists $parameters
     * @return \AbbyyBridge\StructType\AbbyyIsSessionExistsResponse|bool
     */
    public function IsSessionExists(\AbbyyBridge\StructType\AbbyyIsSessionExists $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->IsSessionExists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyIsSessionExistsResponse
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
