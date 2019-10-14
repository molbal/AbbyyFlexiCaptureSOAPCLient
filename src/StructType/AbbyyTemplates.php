<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for templates StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyTemplates extends AbstractStructBase
{
    /**
     * The Template
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyTemplate[]
     */
    public $Template;
    /**
     * Constructor method for templates
     * @uses AbbyyTemplates::setTemplate()
     * @param \AbbyyBridge\StructType\AbbyyTemplate[] $template
     */
    public function __construct(array $template = array())
    {
        $this
            ->setTemplate($template);
    }
    /**
     * Get Template value
     * @return \AbbyyBridge\StructType\AbbyyTemplate[]|null
     */
    public function getTemplate()
    {
        return $this->Template;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplateForArrayConstraintsFromSetTemplate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $templatesTemplateItem) {
            // validation for constraint: itemType
            if (!$templatesTemplateItem instanceof \AbbyyBridge\StructType\AbbyyTemplate) {
                $invalidValues[] = is_object($templatesTemplateItem) ? get_class($templatesTemplateItem) : sprintf('%s(%s)', gettype($templatesTemplateItem), var_export($templatesTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Template property can only contain items of type \AbbyyBridge\StructType\AbbyyTemplate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Template value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyTemplate[] $template
     * @return \AbbyyBridge\StructType\AbbyyTemplates
     */
    public function setTemplate(array $template = array())
    {
        // validation for constraint: array
        if ('' !== ($templateArrayErrorMessage = self::validateTemplateForArrayConstraintsFromSetTemplate($template))) {
            throw new \InvalidArgumentException($templateArrayErrorMessage, __LINE__);
        }
        $this->Template = $template;
        return $this;
    }
    /**
     * Add item to Template value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyTemplate $item
     * @return \AbbyyBridge\StructType\AbbyyTemplates
     */
    public function addToTemplate(\AbbyyBridge\StructType\AbbyyTemplate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyTemplate) {
            throw new \InvalidArgumentException(sprintf('The Template property can only contain items of type \AbbyyBridge\StructType\AbbyyTemplate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Template[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyTemplates
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
