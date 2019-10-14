<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for projects StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyProjects extends AbstractStructBase
{
    /**
     * The Project
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyProject[]
     */
    public $Project;
    /**
     * Constructor method for projects
     * @uses AbbyyProjects::setProject()
     * @param \AbbyyBridge\StructType\AbbyyProject[] $project
     */
    public function __construct(array $project = array())
    {
        $this
            ->setProject($project);
    }
    /**
     * Get Project value
     * @return \AbbyyBridge\StructType\AbbyyProject[]|null
     */
    public function getProject()
    {
        return $this->Project;
    }
    /**
     * This method is responsible for validating the values passed to the setProject method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProject method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProjectForArrayConstraintsFromSetProject(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $projectsProjectItem) {
            // validation for constraint: itemType
            if (!$projectsProjectItem instanceof \AbbyyBridge\StructType\AbbyyProject) {
                $invalidValues[] = is_object($projectsProjectItem) ? get_class($projectsProjectItem) : sprintf('%s(%s)', gettype($projectsProjectItem), var_export($projectsProjectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Project property can only contain items of type \AbbyyBridge\StructType\AbbyyProject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Project value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyProject[] $project
     * @return \AbbyyBridge\StructType\AbbyyProjects
     */
    public function setProject(array $project = array())
    {
        // validation for constraint: array
        if ('' !== ($projectArrayErrorMessage = self::validateProjectForArrayConstraintsFromSetProject($project))) {
            throw new \InvalidArgumentException($projectArrayErrorMessage, __LINE__);
        }
        $this->Project = $project;
        return $this;
    }
    /**
     * Add item to Project value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyProject $item
     * @return \AbbyyBridge\StructType\AbbyyProjects
     */
    public function addToProject(\AbbyyBridge\StructType\AbbyyProject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyProject) {
            throw new \InvalidArgumentException(sprintf('The Project property can only contain items of type \AbbyyBridge\StructType\AbbyyProject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Project[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyProjects
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
