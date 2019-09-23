<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language_AbilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Language Ability
 * @subpackage Structs
 */
class Language_AbilityType extends AbstractStructBase
{
    /**
     * The Language_Ability_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\Language_Ability_DataType[]
     */
    public $Language_Ability_Data;
    /**
     * Constructor method for Language_AbilityType
     * @uses Language_AbilityType::setLanguage_Ability_Data()
     * @param \StructType\Language_Ability_DataType[] $language_Ability_Data
     */
    public function __construct(array $language_Ability_Data = array())
    {
        $this
            ->setLanguage_Ability_Data($language_Ability_Data);
    }
    /**
     * Get Language_Ability_Data value
     * @return \StructType\Language_Ability_DataType[]|null
     */
    public function getLanguage_Ability_Data()
    {
        return $this->Language_Ability_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguage_Ability_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguage_Ability_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguage_Ability_DataForArrayConstraintsFromSetLanguage_Ability_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $language_AbilityTypeLanguage_Ability_DataItem) {
            // validation for constraint: itemType
            if (!$language_AbilityTypeLanguage_Ability_DataItem instanceof \StructType\Language_Ability_DataType) {
                $invalidValues[] = is_object($language_AbilityTypeLanguage_Ability_DataItem) ? get_class($language_AbilityTypeLanguage_Ability_DataItem) : sprintf('%s(%s)', gettype($language_AbilityTypeLanguage_Ability_DataItem), var_export($language_AbilityTypeLanguage_Ability_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Language_Ability_Data property can only contain items of type \StructType\Language_Ability_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Language_Ability_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Language_Ability_DataType[] $language_Ability_Data
     * @return \StructType\Language_AbilityType
     */
    public function setLanguage_Ability_Data(array $language_Ability_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($language_Ability_DataArrayErrorMessage = self::validateLanguage_Ability_DataForArrayConstraintsFromSetLanguage_Ability_Data($language_Ability_Data))) {
            throw new \InvalidArgumentException($language_Ability_DataArrayErrorMessage, __LINE__);
        }
        $this->Language_Ability_Data = $language_Ability_Data;
        return $this;
    }
    /**
     * Add item to Language_Ability_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Language_Ability_DataType $item
     * @return \StructType\Language_AbilityType
     */
    public function addToLanguage_Ability_Data(\StructType\Language_Ability_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Language_Ability_DataType) {
            throw new \InvalidArgumentException(sprintf('The Language_Ability_Data property can only contain items of type \StructType\Language_Ability_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Language_Ability_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Language_AbilityType
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
