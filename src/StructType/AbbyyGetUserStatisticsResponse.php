<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserStatisticsResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetUserStatisticsResponse extends AbstractStructBase
{
    /**
     * The userStat
     * @var \AbbyyBridge\StructType\AbbyyUserStatistics
     */
    public $userStat;
    /**
     * Constructor method for GetUserStatisticsResponse
     * @uses AbbyyGetUserStatisticsResponse::setUserStat()
     * @param \AbbyyBridge\StructType\AbbyyUserStatistics $userStat
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyUserStatistics $userStat = null)
    {
        $this
            ->setUserStat($userStat);
    }
    /**
     * Get userStat value
     * @return \AbbyyBridge\StructType\AbbyyUserStatistics|null
     */
    public function getUserStat()
    {
        return $this->userStat;
    }
    /**
     * Set userStat value
     * @param \AbbyyBridge\StructType\AbbyyUserStatistics $userStat
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatisticsResponse
     */
    public function setUserStat(\AbbyyBridge\StructType\AbbyyUserStatistics $userStat = null)
    {
        $this->userStat = $userStat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatisticsResponse
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
