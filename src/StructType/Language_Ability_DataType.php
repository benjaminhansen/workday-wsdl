<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language_Ability_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the language ability information.
 * @subpackage Structs
 */
class Language_Ability_DataType extends AbstractStructBase
{
    /**
     * The Language_Proficiency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Language Proficiency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Language_ProficiencyObjectType
     */
    public $Language_Proficiency_Reference;
    /**
     * The Language_Ability_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Language Ability Type.
     * @var \WorkdayWsdl\\StructType\Language_Ability_TypeObjectType
     */
    public $Language_Ability_Type_Reference;
    /**
     * Constructor method for Language_Ability_DataType
     * @uses Language_Ability_DataType::setLanguage_Proficiency_Reference()
     * @uses Language_Ability_DataType::setLanguage_Ability_Type_Reference()
     * @param \WorkdayWsdl\\StructType\Language_ProficiencyObjectType $language_Proficiency_Reference
     * @param \WorkdayWsdl\\StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Language_ProficiencyObjectType $language_Proficiency_Reference = null, \WorkdayWsdl\\StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference = null)
    {
        $this
            ->setLanguage_Proficiency_Reference($language_Proficiency_Reference)
            ->setLanguage_Ability_Type_Reference($language_Ability_Type_Reference);
    }
    /**
     * Get Language_Proficiency_Reference value
     * @return \WorkdayWsdl\\StructType\Language_ProficiencyObjectType|null
     */
    public function getLanguage_Proficiency_Reference()
    {
        return $this->Language_Proficiency_Reference;
    }
    /**
     * Set Language_Proficiency_Reference value
     * @param \WorkdayWsdl\\StructType\Language_ProficiencyObjectType $language_Proficiency_Reference
     * @return \WorkdayWsdl\\StructType\Language_Ability_DataType
     */
    public function setLanguage_Proficiency_Reference(\WorkdayWsdl\\StructType\Language_ProficiencyObjectType $language_Proficiency_Reference = null)
    {
        $this->Language_Proficiency_Reference = $language_Proficiency_Reference;
        return $this;
    }
    /**
     * Get Language_Ability_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Language_Ability_TypeObjectType|null
     */
    public function getLanguage_Ability_Type_Reference()
    {
        return $this->Language_Ability_Type_Reference;
    }
    /**
     * Set Language_Ability_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference
     * @return \WorkdayWsdl\\StructType\Language_Ability_DataType
     */
    public function setLanguage_Ability_Type_Reference(\WorkdayWsdl\\StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference = null)
    {
        $this->Language_Ability_Type_Reference = $language_Ability_Type_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Language_Ability_DataType
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
