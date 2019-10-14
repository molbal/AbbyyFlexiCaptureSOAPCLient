<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetUsersResponse extends AbstractStructBase
{
    /**
     * The users
     * @var \AbbyyBridge\StructType\AbbyyUserList
     */
    public $users;
    /**
     * Constructor method for GetUsersResponse
     * @uses AbbyyGetUsersResponse::setUsers()
     * @param \AbbyyBridge\StructType\AbbyyUserList $users
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyUserList $users = null)
    {
        $this
            ->setUsers($users);
    }
    /**
     * Get users value
     * @return \AbbyyBridge\StructType\AbbyyUserList|null
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * Set users value
     * @param \AbbyyBridge\StructType\AbbyyUserList $users
     * @return \AbbyyBridge\StructType\AbbyyGetUsersResponse
     */
    public function setUsers(\AbbyyBridge\StructType\AbbyyUserList $users = null)
    {
        $this->users = $users;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetUsersResponse
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
