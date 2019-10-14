<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrentUserIdentityResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetCurrentUserIdentityResponse extends AbstractStructBase
{
    /**
     * The userIdentity
     * @var \AbbyyBridge\StructType\AbbyyUserIdentity
     */
    public $userIdentity;
    /**
     * Constructor method for GetCurrentUserIdentityResponse
     * @uses AbbyyGetCurrentUserIdentityResponse::setUserIdentity()
     * @param \AbbyyBridge\StructType\AbbyyUserIdentity $userIdentity
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyUserIdentity $userIdentity = null)
    {
        $this
            ->setUserIdentity($userIdentity);
    }
    /**
     * Get userIdentity value
     * @return \AbbyyBridge\StructType\AbbyyUserIdentity|null
     */
    public function getUserIdentity()
    {
        return $this->userIdentity;
    }
    /**
     * Set userIdentity value
     * @param \AbbyyBridge\StructType\AbbyyUserIdentity $userIdentity
     * @return \AbbyyBridge\StructType\AbbyyGetCurrentUserIdentityResponse
     */
    public function setUserIdentity(\AbbyyBridge\StructType\AbbyyUserIdentity $userIdentity = null)
    {
        $this->userIdentity = $userIdentity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetCurrentUserIdentityResponse
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
