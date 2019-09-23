<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Language_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Language Achievement information
 * @subpackage Structs
 */
class Language_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: Language Reference
     * @var \StructType\LanguageObjectType
     */
    public $Language_Reference;
    /**
     * The Remove_Language
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the language should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Language;
    /**
     * The Native_Language
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the language is Native language for the person.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Native_Language;
    /**
     * The Language_Ability
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Language_AbilityType[]
     */
    public $Language_Ability;
    /**
     * The Assessed_On
     * Meta information extracted from the WSDL
     * - documentation: Date of Assessment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assessed_On;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Assessment Comments
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The Assessed_by_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker assessing the language
     * - minOccurs: 0
     * @var \StructType\RoleObjectType
     */
    public $Assessed_by_Worker_Reference;
    /**
     * Constructor method for Language_Achievement_DataType
     * @uses Language_Achievement_DataType::setLanguage_Reference()
     * @uses Language_Achievement_DataType::setRemove_Language()
     * @uses Language_Achievement_DataType::setNative_Language()
     * @uses Language_Achievement_DataType::setLanguage_Ability()
     * @uses Language_Achievement_DataType::setAssessed_On()
     * @uses Language_Achievement_DataType::setNote()
     * @uses Language_Achievement_DataType::setAssessed_by_Worker_Reference()
     * @param \StructType\LanguageObjectType $language_Reference
     * @param bool $remove_Language
     * @param bool $native_Language
     * @param \StructType\Language_AbilityType[] $language_Ability
     * @param string $assessed_On
     * @param string $note
     * @param \StructType\RoleObjectType $assessed_by_Worker_Reference
     */
    public function __construct(\StructType\LanguageObjectType $language_Reference = null, $remove_Language = null, $native_Language = null, array $language_Ability = array(), $assessed_On = null, $note = null, \StructType\RoleObjectType $assessed_by_Worker_Reference = null)
    {
        $this
            ->setLanguage_Reference($language_Reference)
            ->setRemove_Language($remove_Language)
            ->setNative_Language($native_Language)
            ->setLanguage_Ability($language_Ability)
            ->setAssessed_On($assessed_On)
            ->setNote($note)
            ->setAssessed_by_Worker_Reference($assessed_by_Worker_Reference);
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
     * @return \StructType\Language_Achievement_DataType
     */
    public function setLanguage_Reference(\StructType\LanguageObjectType $language_Reference = null)
    {
        $this->Language_Reference = $language_Reference;
        return $this;
    }
    /**
     * Get Remove_Language value
     * @return bool|null
     */
    public function getRemove_Language()
    {
        return $this->Remove_Language;
    }
    /**
     * Set Remove_Language value
     * @param bool $remove_Language
     * @return \StructType\Language_Achievement_DataType
     */
    public function setRemove_Language($remove_Language = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Language) && !is_bool($remove_Language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Language, true), gettype($remove_Language)), __LINE__);
        }
        $this->Remove_Language = $remove_Language;
        return $this;
    }
    /**
     * Get Native_Language value
     * @return bool|null
     */
    public function getNative_Language()
    {
        return $this->Native_Language;
    }
    /**
     * Set Native_Language value
     * @param bool $native_Language
     * @return \StructType\Language_Achievement_DataType
     */
    public function setNative_Language($native_Language = null)
    {
        // validation for constraint: boolean
        if (!is_null($native_Language) && !is_bool($native_Language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($native_Language, true), gettype($native_Language)), __LINE__);
        }
        $this->Native_Language = $native_Language;
        return $this;
    }
    /**
     * Get Language_Ability value
     * @return \StructType\Language_AbilityType[]|null
     */
    public function getLanguage_Ability()
    {
        return $this->Language_Ability;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguage_Ability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguage_Ability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguage_AbilityForArrayConstraintsFromSetLanguage_Ability(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $language_Achievement_DataTypeLanguage_AbilityItem) {
            // validation for constraint: itemType
            if (!$language_Achievement_DataTypeLanguage_AbilityItem instanceof \StructType\Language_AbilityType) {
                $invalidValues[] = is_object($language_Achievement_DataTypeLanguage_AbilityItem) ? get_class($language_Achievement_DataTypeLanguage_AbilityItem) : sprintf('%s(%s)', gettype($language_Achievement_DataTypeLanguage_AbilityItem), var_export($language_Achievement_DataTypeLanguage_AbilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Language_Ability property can only contain items of type \StructType\Language_AbilityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Language_Ability value
     * @throws \InvalidArgumentException
     * @param \StructType\Language_AbilityType[] $language_Ability
     * @return \StructType\Language_Achievement_DataType
     */
    public function setLanguage_Ability(array $language_Ability = array())
    {
        // validation for constraint: array
        if ('' !== ($language_AbilityArrayErrorMessage = self::validateLanguage_AbilityForArrayConstraintsFromSetLanguage_Ability($language_Ability))) {
            throw new \InvalidArgumentException($language_AbilityArrayErrorMessage, __LINE__);
        }
        $this->Language_Ability = $language_Ability;
        return $this;
    }
    /**
     * Add item to Language_Ability value
     * @throws \InvalidArgumentException
     * @param \StructType\Language_AbilityType $item
     * @return \StructType\Language_Achievement_DataType
     */
    public function addToLanguage_Ability(\StructType\Language_AbilityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Language_AbilityType) {
            throw new \InvalidArgumentException(sprintf('The Language_Ability property can only contain items of type \StructType\Language_AbilityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Language_Ability[] = $item;
        return $this;
    }
    /**
     * Get Assessed_On value
     * @return string|null
     */
    public function getAssessed_On()
    {
        return $this->Assessed_On;
    }
    /**
     * Set Assessed_On value
     * @param string $assessed_On
     * @return \StructType\Language_Achievement_DataType
     */
    public function setAssessed_On($assessed_On = null)
    {
        // validation for constraint: string
        if (!is_null($assessed_On) && !is_string($assessed_On)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assessed_On, true), gettype($assessed_On)), __LINE__);
        }
        $this->Assessed_On = $assessed_On;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \StructType\Language_Achievement_DataType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Get Assessed_by_Worker_Reference value
     * @return \StructType\RoleObjectType|null
     */
    public function getAssessed_by_Worker_Reference()
    {
        return $this->Assessed_by_Worker_Reference;
    }
    /**
     * Set Assessed_by_Worker_Reference value
     * @param \StructType\RoleObjectType $assessed_by_Worker_Reference
     * @return \StructType\Language_Achievement_DataType
     */
    public function setAssessed_by_Worker_Reference(\StructType\RoleObjectType $assessed_by_Worker_Reference = null)
    {
        $this->Assessed_by_Worker_Reference = $assessed_by_Worker_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Language_Achievement_DataType
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
