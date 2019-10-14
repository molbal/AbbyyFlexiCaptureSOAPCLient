<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Release ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyRelease extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ReleaseTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyReleaseTicket $parameters
     * @return \AbbyyBridge\StructType\AbbyyReleaseTicketResponse|bool
     */
    public function ReleaseTicket(\AbbyyBridge\StructType\AbbyyReleaseTicket $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ReleaseTicket($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyReleaseTicketResponse
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
