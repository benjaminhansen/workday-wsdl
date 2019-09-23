<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language_Ability_Profile_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the language ability type and proficiency for a Job Profile Language Qualfication language.
 * @subpackage Structs
 */
class Language_Ability_Profile_DataType extends AbstractStructBase
{
    /**
     * The Language_Ability_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The identifier of Language Ability Type.
     * @var \StructType\Language_Ability_TypeObjectType
     */
    public $Language_Ability_Type_Reference;
    /**
     * The Language_Proficiency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Language Proficiency ID specified in Language Proficiency Levels report.
     * - minOccurs: 0
     * @var \StructType\Language_ProficiencyObjectType
     */
    public $Language_Proficiency_Reference;
    /**
     * Constructor method for Language_Ability_Profile_DataType
     * @uses Language_Ability_Profile_DataType::setLanguage_Ability_Type_Reference()
     * @uses Language_Ability_Profile_DataType::setLanguage_Proficiency_Reference()
     * @param \StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference
     * @param \StructType\Language_ProficiencyObjectType $language_Proficiency_Reference
     */
    public function __construct(\StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference = null, \StructType\Language_ProficiencyObjectType $language_Proficiency_Reference = null)
    {
        $this
            ->setLanguage_Ability_Type_Reference($language_Ability_Type_Reference)
            ->setLanguage_Proficiency_Reference($language_Proficiency_Reference);
    }
    /**
     * Get Language_Ability_Type_Reference value
     * @return \StructType\Language_Ability_TypeObjectType|null
     */
    public function getLanguage_Ability_Type_Reference()
    {
        return $this->Language_Ability_Type_Reference;
    }
    /**
     * Set Language_Ability_Type_Reference value
     * @param \StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference
     * @return \StructType\Language_Ability_Profile_DataType
     */
    public function setLanguage_Ability_Type_Reference(\StructType\Language_Ability_TypeObjectType $language_Ability_Type_Reference = null)
    {
        $this->Language_Ability_Type_Reference = $language_Ability_Type_Reference;
        return $this;
    }
    /**
     * Get Language_Proficiency_Reference value
     * @return \StructType\Language_ProficiencyObjectType|null
     */
    public function getLanguage_Proficiency_Reference()
    {
        return $this->Language_Proficiency_Reference;
    }
    /**
     * Set Language_Proficiency_Reference value
     * @param \StructType\Language_ProficiencyObjectType $language_Proficiency_Reference
     * @return \StructType\Language_Ability_Profile_DataType
     */
    public function setLanguage_Proficiency_Reference(\StructType\Language_ProficiencyObjectType $language_Proficiency_Reference = null)
    {
        $this->Language_Proficiency_Reference = $language_Proficiency_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Language_Ability_Profile_DataType
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
