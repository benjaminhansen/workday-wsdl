<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Replacement element containing Language Qualifications for the Job Profile. When updating a Job Profile, all Languages for the Job Profile will be replaced by the submitted data. If no data is submitted, then the existing Languages
 * are not changed.
 * @subpackage Structs
 */
class Language_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: The identifier of a Language.
     * @var \StructType\LanguageObjectType
     */
    public $Language_Reference;
    /**
     * The Language_Ability_Profile_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Language_Ability_Profile_DataType[]
     */
    public $Language_Ability_Profile_Data;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Y, Language Qualification Profile is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for Language_Qualification_Profile_Replacement_DataType
     * @uses Language_Qualification_Profile_Replacement_DataType::setLanguage_Reference()
     * @uses Language_Qualification_Profile_Replacement_DataType::setLanguage_Ability_Profile_Data()
     * @uses Language_Qualification_Profile_Replacement_DataType::setRequired()
     * @param \StructType\LanguageObjectType $language_Reference
     * @param \StructType\Language_Ability_Profile_DataType[] $language_Ability_Profile_Data
     * @param bool $required
     */
    public function __construct(\StructType\LanguageObjectType $language_Reference = null, array $language_Ability_Profile_Data = array(), $required = null)
    {
        $this
            ->setLanguage_Reference($language_Reference)
            ->setLanguage_Ability_Profile_Data($language_Ability_Profile_Data)
            ->setRequired($required);
    }
    /**
     * Get Language_Reference value
     * @return \StructType\LanguageObjectType|null
     */
    public function getLanguage_Reference()
    {
        return $this->Language_Reference;
    }
    /**
     * Set Language_Reference value
     * @param \StructType\LanguageObjectType $language_Reference
     * @return \StructType\Language_Qualification_Profile_Replacement_DataType
     */
    public function setLanguage_Reference(\StructType\LanguageObjectType $language_Reference = null)
    {
        $this->Language_Reference = $language_Reference;
        return $this;
    }
    /**
     * Get Language_Ability_Profile_Data value
     * @return \StructType\Language_Ability_Profile_DataType[]|null
     */
    public function getLanguage_Ability_Profile_Data()
    {
        return $this->Language_Ability_Profile_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguage_Ability_Profile_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguage_Ability_Profile_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguage_Ability_Profile_DataForArrayConstraintsFromSetLanguage_Ability_Profile_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $language_Qualification_Profile_Replacement_DataTypeLanguage_Ability_Profile_DataItem) {
            // validation for constraint: itemType
            if (!$language_Qualification_Profile_Replacement_DataTypeLanguage_Ability_Profile_DataItem instanceof \StructType\Language_Ability_Profile_DataType) {
                $invalidValues[] = is_object($language_Qualification_Profile_Replacement_DataTypeLanguage_Ability_Profile_DataItem) ? get_class($language_Qualification_Profile_Replacement_DataTypeLanguage_Ability_Profile_DataItem) : sprintf('%s(%s)', gettype($language_Qualification_Profile_Replacement_DataTypeLanguage_Ability_Profile_DataItem), var_export($language_Qualification_Profile_Replacement_DataTypeLanguage_Ability_Profile_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Language_Ability_Profile_Data property can only contain items of type \StructType\Language_Ability_Profile_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Language_Ability_Profile_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Language_Ability_Profile_DataType[] $language_Ability_Profile_Data
     * @return \StructType\Language_Qualification_Profile_Replacement_DataType
     */
    public function setLanguage_Ability_Profile_Data(array $language_Ability_Profile_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($language_Ability_Profile_DataArrayErrorMessage = self::validateLanguage_Ability_Profile_DataForArrayConstraintsFromSetLanguage_Ability_Profile_Data($language_Ability_Profile_Data))) {
            throw new \InvalidArgumentException($language_Ability_Profile_DataArrayErrorMessage, __LINE__);
        }
        $this->Language_Ability_Profile_Data = $language_Ability_Profile_Data;
        return $this;
    }
    /**
     * Add item to Language_Ability_Profile_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Language_Ability_Profile_DataType $item
     * @return \StructType\Language_Qualification_Profile_Replacement_DataType
     */
    public function addToLanguage_Ability_Profile_Data(\StructType\Language_Ability_Profile_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Language_Ability_Profile_DataType) {
            throw new \InvalidArgumentException(sprintf('The Language_Ability_Profile_Data property can only contain items of type \StructType\Language_Ability_Profile_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Language_Ability_Profile_Data[] = $item;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \StructType\Language_Qualification_Profile_Replacement_DataType
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Language_Qualification_Profile_Replacement_DataType
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
