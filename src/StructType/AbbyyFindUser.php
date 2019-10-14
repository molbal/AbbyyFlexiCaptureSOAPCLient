<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindUser StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyFindUser extends AbstractStructBase
{
    /**
     * The userLogin
     * @var string
     */
    public $userLogin;
    /**
     * Constructor method for FindUser
     * @uses AbbyyFindUser::setUserLogin()
     * @param string $userLogin
     */
    public function __construct($userLogin = null)
    {
        $this
            ->setUserLogin($userLogin);
    }
    /**
     * Get userLogin value
     * @return string|null
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }
    /**
     * Set userLogin value
     * @param string $userLogin
     * @return \AbbyyBridge\StructType\AbbyyFindUser
     */
    public function setUserLogin($userLogin = null)
    {
        // validation for constraint: string
        if (!is_null($userLogin) && !is_string($userLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLogin, true), gettype($userLogin)), __LINE__);
        }
        $this->userLogin = $userLogin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyFindUser
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
