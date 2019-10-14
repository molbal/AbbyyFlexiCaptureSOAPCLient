<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyUpdate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdateBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyUpdateBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyUpdateBatchResponse|bool
     */
    public function UpdateBatch(\AbbyyBridge\StructType\AbbyyUpdateBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyUpdateTicket $parameters
     * @return \AbbyyBridge\StructType\AbbyyUpdateTicketResponse|bool
     */
    public function UpdateTicket(\AbbyyBridge\StructType\AbbyyUpdateTicket $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateTicket($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyUpdateBatchResponse|\AbbyyBridge\StructType\AbbyyUpdateTicketResponse
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
