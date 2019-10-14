<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Postpone ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyPostpone extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PostponeTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyPostponeTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyPostponeTaskResponse|bool
     */
    public function PostponeTask(\AbbyyBridge\StructType\AbbyyPostponeTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->PostponeTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyPostponeTaskResponse
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
