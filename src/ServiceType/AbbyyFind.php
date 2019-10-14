<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyFind extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FindUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyFindUser $parameters
     * @return \AbbyyBridge\StructType\AbbyyFindUserResponse|bool
     */
    public function FindUser(\AbbyyBridge\StructType\AbbyyFindUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->FindUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyFindUserResponse
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
