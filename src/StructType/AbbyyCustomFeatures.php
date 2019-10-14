<?php

namespace AbbyyBridge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomFeatures StructType
 * @package Abbyy
 * @subpackage Structs
 */
class AbbyyCustomFeatures extends AbstractStructBase
{
    /**
     * The LicenseCustomFeature
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbbyyBridge\StructType\AbbyyLicenseCustomFeature[]
     */
    public $LicenseCustomFeature;
    /**
     * Constructor method for CustomFeatures
     * @uses AbbyyCustomFeatures::setLicenseCustomFeature()
     * @param \AbbyyBridge\StructType\AbbyyLicenseCustomFeature[] $licenseCustomFeature
     */
    public function __construct(array $licenseCustomFeature = array())
    {
        $this
            ->setLicenseCustomFeature($licenseCustomFeature);
    }
    /**
     * Get LicenseCustomFeature value
     * @return \AbbyyBridge\StructType\AbbyyLicenseCustomFeature[]|null
     */
    public function getLicenseCustomFeature()
    {
        return $this->LicenseCustomFeature;
    }
    /**
     * This method is responsible for validating the values passed to the setLicenseCustomFeature method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLicenseCustomFeature method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLicenseCustomFeatureForArrayConstraintsFromSetLicenseCustomFeature(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $customFeaturesLicenseCustomFeatureItem) {
            // validation for constraint: itemType
            if (!$customFeaturesLicenseCustomFeatureItem instanceof \AbbyyBridge\StructType\AbbyyLicenseCustomFeature) {
                $invalidValues[] = is_object($customFeaturesLicenseCustomFeatureItem) ? get_class($customFeaturesLicenseCustomFeatureItem) : sprintf('%s(%s)', gettype($customFeaturesLicenseCustomFeatureItem), var_export($customFeaturesLicenseCustomFeatureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LicenseCustomFeature property can only contain items of type \AbbyyBridge\StructType\AbbyyLicenseCustomFeature, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LicenseCustomFeature value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyLicenseCustomFeature[] $licenseCustomFeature
     * @return \AbbyyBridge\StructType\AbbyyCustomFeatures
     */
    public function setLicenseCustomFeature(array $licenseCustomFeature = array())
    {
        // validation for constraint: array
        if ('' !== ($licenseCustomFeatureArrayErrorMessage = self::validateLicenseCustomFeatureForArrayConstraintsFromSetLicenseCustomFeature($licenseCustomFeature))) {
            throw new \InvalidArgumentException($licenseCustomFeatureArrayErrorMessage, __LINE__);
        }
        $this->LicenseCustomFeature = $licenseCustomFeature;
        return $this;
    }
    /**
     * Add item to LicenseCustomFeature value
     * @throws \InvalidArgumentException
     * @param \AbbyyBridge\StructType\AbbyyLicenseCustomFeature $item
     * @return \AbbyyBridge\StructType\AbbyyCustomFeatures
     */
    public function addToLicenseCustomFeature(\AbbyyBridge\StructType\AbbyyLicenseCustomFeature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbbyyBridge\StructType\AbbyyLicenseCustomFeature) {
            throw new \InvalidArgumentException(sprintf('The LicenseCustomFeature property can only contain items of type \AbbyyBridge\StructType\AbbyyLicenseCustomFeature, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LicenseCustomFeature[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AbbyyBridge\StructType\AbbyyCustomFeatures
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
