<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Certification_AchievementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Certification information.
 * @subpackage Structs
 */
class Certification_AchievementType extends AbstractStructBase
{
    /**
     * The Certification_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the certification profile.
     * - minOccurs: 0
     * @var \StructType\Certification_SkillObjectType
     */
    public $Certification_Reference;
    /**
     * The Certification_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Certification data.
     * - maxOccurs: unbounded
     * @var \StructType\Certification_Achievement_DataType[]
     */
    public $Certification_Data;
    /**
     * Constructor method for Certification_AchievementType
     * @uses Certification_AchievementType::setCertification_Reference()
     * @uses Certification_AchievementType::setCertification_Data()
     * @param \StructType\Certification_SkillObjectType $certification_Reference
     * @param \StructType\Certification_Achievement_DataType[] $certification_Data
     */
    public function __construct(\StructType\Certification_SkillObjectType $certification_Reference = null, array $certification_Data = array())
    {
        $this
            ->setCertification_Reference($certification_Reference)
            ->setCertification_Data($certification_Data);
    }
    /**
     * Get Certification_Reference value
     * @return \StructType\Certification_SkillObjectType|null
     */
    public function getCertification_Reference()
    {
        return $this->Certification_Reference;
    }
    /**
     * Set Certification_Reference value
     * @param \StructType\Certification_SkillObjectType $certification_Reference
     * @return \StructType\Certification_AchievementType
     */
    public function setCertification_Reference(\StructType\Certification_SkillObjectType $certification_Reference = null)
    {
        $this->Certification_Reference = $certification_Reference;
        return $this;
    }
    /**
     * Get Certification_Data value
     * @return \StructType\Certification_Achievement_DataType[]|null
     */
    public function getCertification_Data()
    {
        return $this->Certification_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCertification_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCertification_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCertification_DataForArrayConstraintsFromSetCertification_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $certification_AchievementTypeCertification_DataItem) {
            // validation for constraint: itemType
            if (!$certification_AchievementTypeCertification_DataItem instanceof \StructType\Certification_Achievement_DataType) {
                $invalidValues[] = is_object($certification_AchievementTypeCertification_DataItem) ? get_class($certification_AchievementTypeCertification_DataItem) : sprintf('%s(%s)', gettype($certification_AchievementTypeCertification_DataItem), var_export($certification_AchievementTypeCertification_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Certification_Data property can only contain items of type \StructType\Certification_Achievement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Certification_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Certification_Achievement_DataType[] $certification_Data
     * @return \StructType\Certification_AchievementType
     */
    public function setCertification_Data(array $certification_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($certification_DataArrayErrorMessage = self::validateCertification_DataForArrayConstraintsFromSetCertification_Data($certification_Data))) {
            throw new \InvalidArgumentException($certification_DataArrayErrorMessage, __LINE__);
        }
        $this->Certification_Data = $certification_Data;
        return $this;
    }
    /**
     * Add item to Certification_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Certification_Achievement_DataType $item
     * @return \StructType\Certification_AchievementType
     */
    public function addToCertification_Data(\StructType\Certification_Achievement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Certification_Achievement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Certification_Data property can only contain items of type \StructType\Certification_Achievement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Certification_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Certification_AchievementType
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
