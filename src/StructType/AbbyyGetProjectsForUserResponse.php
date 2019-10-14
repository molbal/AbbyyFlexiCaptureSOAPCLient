<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProjectsForUserResponse StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyGetProjectsForUserResponse extends AbstractStructBase
{
    /**
     * The projects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \AbbyyBridge\StructType\AbbyyProjects
     */
    public $projects;
    /**
     * Constructor method for GetProjectsForUserResponse
     * @uses AbbyyGetProjectsForUserResponse::setProjects()
     * @param \AbbyyBridge\StructType\AbbyyProjects $projects
     */
    public function __construct(\AbbyyBridge\StructType\AbbyyProjects $projects = null)
    {
        $this
            ->setProjects($projects);
    }
    /**
     * Get projects value
     * @return \AbbyyBridge\StructType\AbbyyProjects|null
     */
    public function getProjects()
    {
        return $this->projects;
    }
    /**
     * Set projects value
     * @param \AbbyyBridge\StructType\AbbyyProjects $projects
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForUserResponse
     */
    public function setProjects(\AbbyyBridge\StructType\AbbyyProjects $projects = null)
    {
        $this->projects = $projects;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForUserResponse
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
