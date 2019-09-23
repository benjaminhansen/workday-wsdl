<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Compensation_Code_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request Criteria to search for a specific instance(s) of a Workers' Compensation Code
 * @subpackage Structs
 */
class Workers_Compensation_Code_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Country for the workers' compensation code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType[]
     */
    public $Country_Reference;
    /**
     * The Country_Subregion_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the country region for the workers' compensation code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType[]
     */
    public $Country_Subregion_Reference;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location must be of usage Business Site. | Reference to the location for the workers' compensation code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType[]
     */
    public $Location_Reference;
    /**
     * Constructor method for Workers_Compensation_Code_Request_CriteriaType
     * @uses Workers_Compensation_Code_Request_CriteriaType::setCountry_Reference()
     * @uses Workers_Compensation_Code_Request_CriteriaType::setCountry_Subregion_Reference()
     * @uses Workers_Compensation_Code_Request_CriteriaType::setLocation_Reference()
     * @param \WorkdayWsdl\\StructType\CountryObjectType[] $country_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType[] $country_Subregion_Reference
     * @param \WorkdayWsdl\\StructType\LocationObjectType[] $location_Reference
     */
    public function __construct(array $country_Reference = array(), array $country_Subregion_Reference = array(), array $location_Reference = array())
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setCountry_Subregion_Reference($country_Subregion_Reference)
            ->setLocation_Reference($location_Reference);
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
        foreach ($values as $workers_Compensation_Code_Request_CriteriaTypeCountry_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_Request_CriteriaTypeCountry_ReferenceItem instanceof \WorkdayWsdl\\StructType\CountryObjectType) {
                $invalidValues[] = is_object($workers_Compensation_Code_Request_CriteriaTypeCountry_ReferenceItem) ? get_class($workers_Compensation_Code_Request_CriteriaTypeCountry_ReferenceItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_Request_CriteriaTypeCountry_ReferenceItem), var_export($workers_Compensation_Code_Request_CriteriaTypeCountry_ReferenceItem, true));
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
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
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
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
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
     * Get Country_Subregion_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType[]|null
     */
    public function getCountry_Subregion_Reference()
    {
        return $this->Country_Subregion_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCountry_Subregion_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Subregion_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountry_Subregion_ReferenceForArrayConstraintsFromSetCountry_Subregion_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workers_Compensation_Code_Request_CriteriaTypeCountry_Subregion_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_Request_CriteriaTypeCountry_Subregion_ReferenceItem instanceof \WorkdayWsdl\\StructType\Country_RegionObjectType) {
                $invalidValues[] = is_object($workers_Compensation_Code_Request_CriteriaTypeCountry_Subregion_ReferenceItem) ? get_class($workers_Compensation_Code_Request_CriteriaTypeCountry_Subregion_ReferenceItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_Request_CriteriaTypeCountry_Subregion_ReferenceItem), var_export($workers_Compensation_Code_Request_CriteriaTypeCountry_Subregion_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Country_Subregion_Reference property can only contain items of type \WorkdayWsdl\\StructType\Country_RegionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Country_Subregion_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType[] $country_Subregion_Reference
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
     */
    public function setCountry_Subregion_Reference(array $country_Subregion_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($country_Subregion_ReferenceArrayErrorMessage = self::validateCountry_Subregion_ReferenceForArrayConstraintsFromSetCountry_Subregion_Reference($country_Subregion_Reference))) {
            throw new \InvalidArgumentException($country_Subregion_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Country_Subregion_Reference = $country_Subregion_Reference;
        return $this;
    }
    /**
     * Add item to Country_Subregion_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $item
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
     */
    public function addToCountry_Subregion_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Country_RegionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Country_Subregion_Reference property can only contain items of type \WorkdayWsdl\\StructType\Country_RegionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Country_Subregion_Reference[] = $item;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType[]|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workers_Compensation_Code_Request_CriteriaTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_Request_CriteriaTypeLocation_ReferenceItem instanceof \WorkdayWsdl\\StructType\LocationObjectType) {
                $invalidValues[] = is_object($workers_Compensation_Code_Request_CriteriaTypeLocation_ReferenceItem) ? get_class($workers_Compensation_Code_Request_CriteriaTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_Request_CriteriaTypeLocation_ReferenceItem), var_export($workers_Compensation_Code_Request_CriteriaTypeLocation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Reference property can only contain items of type \WorkdayWsdl\\StructType\LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\LocationObjectType[] $location_Reference
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
     */
    public function setLocation_Reference(array $location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_ReferenceArrayErrorMessage = self::validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference($location_Reference))) {
            throw new \InvalidArgumentException($location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Add item to Location_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\LocationObjectType $item
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
     */
    public function addToLocation_Reference(\WorkdayWsdl\\StructType\LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Reference property can only contain items of type \WorkdayWsdl\\StructType\LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
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
