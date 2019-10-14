<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Queue StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyQueue extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The StageType
     * @var int
     */
    public $StageType;
    /**
     * The TasksCount
     * @var int
     */
    public $TasksCount;
    /**
     * The UserTasksCount
     * @var int
     */
    public $UserTasksCount;
    /**
     * The PostponedTaskCount
     * @var int
     */
    public $PostponedTaskCount;
    /**
     * The IsEnabled
     * @var bool
     */
    public $IsEnabled;
    /**
     * The Id
     * @var int
     */
    public $Id;
    /**
     * Constructor method for Queue
     * @uses AbbyyQueue::setName()
     * @uses AbbyyQueue::setStageType()
     * @uses AbbyyQueue::setTasksCount()
     * @uses AbbyyQueue::setUserTasksCount()
     * @uses AbbyyQueue::setPostponedTaskCount()
     * @uses AbbyyQueue::setIsEnabled()
     * @uses AbbyyQueue::setId()
     * @param string $name
     * @param int $stageType
     * @param int $tasksCount
     * @param int $userTasksCount
     * @param int $postponedTaskCount
     * @param bool $isEnabled
     * @param int $id
     */
    public function __construct($name = null, $stageType = null, $tasksCount = null, $userTasksCount = null, $postponedTaskCount = null, $isEnabled = null, $id = null)
    {
        $this
            ->setName($name)
            ->setStageType($stageType)
            ->setTasksCount($tasksCount)
            ->setUserTasksCount($userTasksCount)
            ->setPostponedTaskCount($postponedTaskCount)
            ->setIsEnabled($isEnabled)
            ->setId($id);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get StageType value
     * @return int|null
     */
    public function getStageType()
    {
        return $this->StageType;
    }
    /**
     * Set StageType value
     * @param int $stageType
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setStageType($stageType = null)
    {
        // validation for constraint: int
        if (!is_null($stageType) && !(is_int($stageType) || ctype_digit($stageType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stageType, true), gettype($stageType)), __LINE__);
        }
        $this->StageType = $stageType;
        return $this;
    }
    /**
     * Get TasksCount value
     * @return int|null
     */
    public function getTasksCount()
    {
        return $this->TasksCount;
    }
    /**
     * Set TasksCount value
     * @param int $tasksCount
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setTasksCount($tasksCount = null)
    {
        // validation for constraint: int
        if (!is_null($tasksCount) && !(is_int($tasksCount) || ctype_digit($tasksCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tasksCount, true), gettype($tasksCount)), __LINE__);
        }
        $this->TasksCount = $tasksCount;
        return $this;
    }
    /**
     * Get UserTasksCount value
     * @return int|null
     */
    public function getUserTasksCount()
    {
        return $this->UserTasksCount;
    }
    /**
     * Set UserTasksCount value
     * @param int $userTasksCount
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setUserTasksCount($userTasksCount = null)
    {
        // validation for constraint: int
        if (!is_null($userTasksCount) && !(is_int($userTasksCount) || ctype_digit($userTasksCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userTasksCount, true), gettype($userTasksCount)), __LINE__);
        }
        $this->UserTasksCount = $userTasksCount;
        return $this;
    }
    /**
     * Get PostponedTaskCount value
     * @return int|null
     */
    public function getPostponedTaskCount()
    {
        return $this->PostponedTaskCount;
    }
    /**
     * Set PostponedTaskCount value
     * @param int $postponedTaskCount
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setPostponedTaskCount($postponedTaskCount = null)
    {
        // validation for constraint: int
        if (!is_null($postponedTaskCount) && !(is_int($postponedTaskCount) || ctype_digit($postponedTaskCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($postponedTaskCount, true), gettype($postponedTaskCount)), __LINE__);
        }
        $this->PostponedTaskCount = $postponedTaskCount;
        return $this;
    }
    /**
     * Get IsEnabled value
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->IsEnabled;
    }
    /**
     * Set IsEnabled value
     * @param bool $isEnabled
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setIsEnabled($isEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEnabled) && !is_bool($isEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnabled, true), gettype($isEnabled)), __LINE__);
        }
        $this->IsEnabled = $isEnabled;
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \AbbyyBridge\StructType\AbbyyQueue
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyQueue
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
