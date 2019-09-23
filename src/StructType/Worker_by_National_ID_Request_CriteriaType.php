<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_by_National_ID_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: National Id request criteria.
 * @subpackage Structs
 */
class Worker_by_National_ID_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Identifier_ID
     * Meta information extracted from the WSDL
     * - documentation: The specific national ID value for the worker.
     * - maxOccurs: 1
     * @var string
     */
    public $Identifier_ID;
    /**
     * The National_ID_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of national id for the worker. Either the type or the country need to be included.
     * - choice: National_ID_Type_Reference | Country_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \WorkdayWsdl\\StructType\National_ID_TypeObjectType
     */
    public $National_ID_Type_Reference;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Country Reference for the National ID.You must enter either the National ID Type or the Country for the National ID.Using the National ID Type is more explicit -if a country is entered, then it is possible that there are multiple
     * workers who have the same ID value but with different national id types within that country.
     * - choice: National_ID_Type_Reference | Country_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * Constructor method for Worker_by_National_ID_Request_CriteriaType
     * @uses Worker_by_National_ID_Request_CriteriaType::setIdentifier_ID()
     * @uses Worker_by_National_ID_Request_CriteriaType::setNational_ID_Type_Reference()
     * @uses Worker_by_National_ID_Request_CriteriaType::setCountry_Reference()
     * @param string $identifier_ID
     * @param \WorkdayWsdl\\StructType\National_ID_TypeObjectType $national_ID_Type_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     */
    public function __construct($identifier_ID = null, \WorkdayWsdl\\StructType\National_ID_TypeObjectType $national_ID_Type_Reference = null, \WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this
            ->setIdentifier_ID($identifier_ID)
            ->setNational_ID_Type_Reference($national_ID_Type_Reference)
            ->setCountry_Reference($country_Reference);
    }
    /**
     * Get Identifier_ID value
     * @return string|null
     */
    public function getIdentifier_ID()
    {
        return $this->Identifier_ID;
    }
    /**
     * Set Identifier_ID value
     * @param string $identifier_ID
     * @return \WorkdayWsdl\\StructType\Worker_by_National_ID_Request_CriteriaType
     */
    public function setIdentifier_ID($identifier_ID = null)
    {
        // validation for constraint: string
        if (!is_null($identifier_ID) && !is_string($identifier_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier_ID, true), gettype($identifier_ID)), __LINE__);
        }
        $this->Identifier_ID = $identifier_ID;
        return $this;
    }
    /**
     * Get National_ID_Type_Reference value
     * @return \WorkdayWsdl\\StructType\National_ID_TypeObjectType|null
     */
    public function getNational_ID_Type_Reference()
    {
        return isset($this->National_ID_Type_Reference) ? $this->National_ID_Type_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNational_ID_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNational_ID_Type_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNational_ID_Type_ReferenceForChoiceConstraintsFromSetNational_ID_Type_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Country_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property National_ID_Type_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: National_ID_Type_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set National_ID_Type_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\National_ID_TypeObjectType $national_ID_Type_Reference
     * @return \WorkdayWsdl\\StructType\Worker_by_National_ID_Request_CriteriaType
     */
    public function setNational_ID_Type_Reference(\WorkdayWsdl\\StructType\National_ID_TypeObjectType $national_ID_Type_Reference = null)
    {
        // validation for constraint: choice(National_ID_Type_Reference, Country_Reference)
        if ('' !== ($national_ID_Type_ReferenceChoiceErrorMessage = self::validateNational_ID_Type_ReferenceForChoiceConstraintsFromSetNational_ID_Type_Reference($national_ID_Type_Reference))) {
            throw new \InvalidArgumentException($national_ID_Type_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($national_ID_Type_Reference) || (is_array($national_ID_Type_Reference) && empty($national_ID_Type_Reference))) {
            unset($this->National_ID_Type_Reference);
        } else {
            $this->National_ID_Type_Reference = $national_ID_Type_Reference;
        }
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return isset($this->Country_Reference) ? $this->Country_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCountry_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCountry_ReferenceForChoiceConstraintsFromSetCountry_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'National_ID_Type_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Country_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Country_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Country_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @return \WorkdayWsdl\\StructType\Worker_by_National_ID_Request_CriteriaType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        // validation for constraint: choice(National_ID_Type_Reference, Country_Reference)
        if ('' !== ($country_ReferenceChoiceErrorMessage = self::validateCountry_ReferenceForChoiceConstraintsFromSetCountry_Reference($country_Reference))) {
            throw new \InvalidArgumentException($country_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($country_Reference) || (is_array($country_Reference) && empty($country_Reference))) {
            unset($this->Country_Reference);
        } else {
            $this->Country_Reference = $country_Reference;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_by_National_ID_Request_CriteriaType
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
