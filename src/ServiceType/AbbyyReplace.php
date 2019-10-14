<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Replace ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyReplace extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ReplacePageImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyReplacePageImage $parameters
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImageResponse|bool
     */
    public function ReplacePageImage(\AbbyyBridge\StructType\AbbyyReplacePageImage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ReplacePageImage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyReplacePageImageResponse
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
