<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User_Preferred_Communication_Language_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: User Preferred Communication Language References
 * @subpackage Structs
 */
class User_Preferred_Communication_Language_ReferencesType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\CountryObjectType[]
     */
    public $Country_Reference;
    /**
     * Constructor method for User_Preferred_Communication_Language_ReferencesType
     * @uses User_Preferred_Communication_Language_ReferencesType::setCountry_Reference()
     * @param \WorkdayWsdl\\StructType\CountryObjectType[] $country_Reference
     */
    public function __construct(array $country_Reference = array())
    {
        $this
            ->setCountry_Reference($country_Reference);
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType[]|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCountry_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountry_ReferenceForArrayConstraintsFromSetCountry_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $user_Preferred_Communication_Language_ReferencesTypeCountry_ReferenceItem) {
            // validation for constraint: itemType
            if (!$user_Preferred_Communication_Language_ReferencesTypeCountry_ReferenceItem instanceof \WorkdayWsdl\\StructType\CountryObjectType) {
                $invalidValues[] = is_object($user_Preferred_Communication_Language_ReferencesTypeCountry_ReferenceItem) ? get_class($user_Preferred_Communication_Language_ReferencesTypeCountry_ReferenceItem) : sprintf('%s(%s)', gettype($user_Preferred_Communication_Language_ReferencesTypeCountry_ReferenceItem), var_export($user_Preferred_Communication_Language_ReferencesTypeCountry_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Country_Reference property can only contain items of type \WorkdayWsdl\\StructType\CountryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Country_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\CountryObjectType[] $country_Reference
     * @return \WorkdayWsdl\\StructType\User_Preferred_Communication_Language_ReferencesType
     */
    public function setCountry_Reference(array $country_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($country_ReferenceArrayErrorMessage = self::validateCountry_ReferenceForArrayConstraintsFromSetCountry_Reference($country_Reference))) {
            throw new \InvalidArgumentException($country_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Add item to Country_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\CountryObjectType $item
     * @return \WorkdayWsdl\\StructType\User_Preferred_Communication_Language_ReferencesType
     */
    public function addToCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\CountryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Country_Reference property can only contain items of type \WorkdayWsdl\\StructType\CountryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Country_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\User_Preferred_Communication_Language_ReferencesType
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
