<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserList StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyUserList extends AbstractStructBase
{
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyUser[]
     */
    public $User;
    /**
     * Constructor method for UserList
     * @uses AbbyyUserList::setUser()
     * @param \AbbyyBridge\StructType\AbbyyUser[] $user
     */
    public function __construct(array $user = array())
    {
        $this
            ->setUser($user);
    }
    /**
     * Get User value
     * @return \AbbyyBridge\StructType\AbbyyUser[]|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * This method is responsible for validating the values passed to the setUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserForArrayConstraintsFromSetUser(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $userListUserItem) {
            // validation for constraint: itemType
            if (!$userListUserItem instanceof \AbbyyBridge\StructType\AbbyyUser) {
                $invalidValues[] = is_object($userListUserItem) ? get_class($userListUserItem) : sprintf('%s(%s)', gettype($userListUserItem), var_export($userListUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The User property can only contain items of type \AbbyyBridge\StructType\AbbyyUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set User value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyUser[] $user
     * @return \AbbyyBridge\StructType\AbbyyUserList
     */
    public function setUser(array $user = array())
    {
        // validation for constraint: array
        if ('' !== ($userArrayErrorMessage = self::validateUserForArrayConstraintsFromSetUser($user))) {
            throw new \InvalidArgumentException($userArrayErrorMessage, __LINE__);
        }
        $this->User = $user;
        return $this;
    }
    /**
     * Add item to User value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyUser $item
     * @return \AbbyyBridge\StructType\AbbyyUserList
     */
    public function addToUser(\AbbyyBridge\StructType\AbbyyUser $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyUser) {
            throw new \InvalidArgumentException(sprintf('The User property can only contain items of type \AbbyyBridge\StructType\AbbyyUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->User[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyUserList
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
