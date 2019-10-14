<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for requests StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyRequests extends AbstractStructBase
{
    /**
     * The ServerRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyServerRequest[]
     */
    public $ServerRequest;
    /**
     * Constructor method for requests
     * @uses AbbyyRequests::setServerRequest()
     * @param \AbbyyBridge\StructType\AbbyyServerRequest[] $serverRequest
     */
    public function __construct(array $serverRequest = array())
    {
        $this
            ->setServerRequest($serverRequest);
    }
    /**
     * Get ServerRequest value
     * @return \AbbyyBridge\StructType\AbbyyServerRequest[]|null
     */
    public function getServerRequest()
    {
        return $this->ServerRequest;
    }
    /**
     * This method is responsible for validating the values passed to the setServerRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServerRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServerRequestForArrayConstraintsFromSetServerRequest(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestsServerRequestItem) {
            // validation for constraint: itemType
            if (!$requestsServerRequestItem instanceof \AbbyyBridge\StructType\AbbyyServerRequest) {
                $invalidValues[] = is_object($requestsServerRequestItem) ? get_class($requestsServerRequestItem) : sprintf('%s(%s)', gettype($requestsServerRequestItem), var_export($requestsServerRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServerRequest property can only contain items of type \AbbyyBridge\StructType\AbbyyServerRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServerRequest value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyServerRequest[] $serverRequest
     * @return \AbbyyBridge\StructType\AbbyyRequests
     */
    public function setServerRequest(array $serverRequest = array())
    {
        // validation for constraint: array
        if ('' !== ($serverRequestArrayErrorMessage = self::validateServerRequestForArrayConstraintsFromSetServerRequest($serverRequest))) {
            throw new \InvalidArgumentException($serverRequestArrayErrorMessage, __LINE__);
        }
        $this->ServerRequest = $serverRequest;
        return $this;
    }
    /**
     * Add item to ServerRequest value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyServerRequest $item
     * @return \AbbyyBridge\StructType\AbbyyRequests
     */
    public function addToServerRequest(\AbbyyBridge\StructType\AbbyyServerRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyServerRequest) {
            throw new \InvalidArgumentException(sprintf('The ServerRequest property can only contain items of type \AbbyyBridge\StructType\AbbyyServerRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ServerRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyRequests
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
