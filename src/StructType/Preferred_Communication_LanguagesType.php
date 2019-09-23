<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preferred_Communication_LanguagesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Preferred Communication Language
 * @subpackage Structs
 */
class Preferred_Communication_LanguagesType extends AbstractStructBase
{
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Delete Flag
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country Reference
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Preferred_Communication_Language_Data
     * Meta information extracted from the WSDL
     * - documentation: Preferred Communication Language Data
     * @var \WorkdayWsdl\\StructType\Preferred_Communication_Language_DataType
     */
    public $Preferred_Communication_Language_Data;
    /**
     * Constructor method for Preferred_Communication_LanguagesType
     * @uses Preferred_Communication_LanguagesType::setDelete()
     * @uses Preferred_Communication_LanguagesType::setCountry_Reference()
     * @uses Preferred_Communication_LanguagesType::setPreferred_Communication_Language_Data()
     * @param bool $delete
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\Preferred_Communication_Language_DataType $preferred_Communication_Language_Data
     */
    public function __construct($delete = null, \WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, \WorkdayWsdl\\StructType\Preferred_Communication_Language_DataType $preferred_Communication_Language_Data = null)
    {
        $this
            ->setDelete($delete)
            ->setCountry_Reference($country_Reference)
            ->setPreferred_Communication_Language_Data($preferred_Communication_Language_Data);
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Preferred_Communication_LanguagesType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @return \WorkdayWsdl\\StructType\Preferred_Communication_LanguagesType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Preferred_Communication_Language_Data value
     * @return \WorkdayWsdl\\StructType\Preferred_Communication_Language_DataType|null
     */
    public function getPreferred_Communication_Language_Data()
    {
        return $this->Preferred_Communication_Language_Data;
    }
    /**
     * Set Preferred_Communication_Language_Data value
     * @param \WorkdayWsdl\\StructType\Preferred_Communication_Language_DataType $preferred_Communication_Language_Data
     * @return \WorkdayWsdl\\StructType\Preferred_Communication_LanguagesType
     */
    public function setPreferred_Communication_Language_Data(\WorkdayWsdl\\StructType\Preferred_Communication_Language_DataType $preferred_Communication_Language_Data = null)
    {
        $this->Preferred_Communication_Language_Data = $preferred_Communication_Language_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Preferred_Communication_LanguagesType
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
