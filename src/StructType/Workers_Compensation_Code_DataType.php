<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Compensation_Code_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workers' Compensation Code data
 * @subpackage Structs
 */
class Workers_Compensation_Code_DataType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_ID
     * Meta information extracted from the WSDL
     * - documentation: Workers' Compensation Code Reference ID. This is the unique identifier for a Workers' Compensation Code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Workers_Compensation_ID;
    /**
     * The Workers_Compensation_Code
     * Meta information extracted from the WSDL
     * - documentation: Workers' Compensation Code.
     * - maxOccurs: 1
     * @var string
     */
    public $Workers_Compensation_Code;
    /**
     * The Workers_Compensation_Name
     * Meta information extracted from the WSDL
     * - documentation: Workers' Compensation Code Name.
     * - maxOccurs: 1
     * @var string
     */
    public $Workers_Compensation_Name;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Country for the workers' compensation code.
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Country_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the country region for the workers' compensation code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType[]
     */
    public $Country_Region_Reference;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the location for the workers' compensation code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType[]
     */
    public $Location_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean to indicate whether the workers' compensation code is active.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Workers_Compensation_Code_DataType
     * @uses Workers_Compensation_Code_DataType::setWorkers_Compensation_ID()
     * @uses Workers_Compensation_Code_DataType::setWorkers_Compensation_Code()
     * @uses Workers_Compensation_Code_DataType::setWorkers_Compensation_Name()
     * @uses Workers_Compensation_Code_DataType::setCountry_Reference()
     * @uses Workers_Compensation_Code_DataType::setCountry_Region_Reference()
     * @uses Workers_Compensation_Code_DataType::setLocation_Reference()
     * @uses Workers_Compensation_Code_DataType::setInactive()
     * @param string $workers_Compensation_ID
     * @param string $workers_Compensation_Code
     * @param string $workers_Compensation_Name
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType[] $country_Region_Reference
     * @param \WorkdayWsdl\\StructType\LocationObjectType[] $location_Reference
     * @param bool $inactive
     */
    public function __construct($workers_Compensation_ID = null, $workers_Compensation_Code = null, $workers_Compensation_Name = null, \WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, array $country_Region_Reference = array(), array $location_Reference = array(), $inactive = null)
    {
        $this
            ->setWorkers_Compensation_ID($workers_Compensation_ID)
            ->setWorkers_Compensation_Code($workers_Compensation_Code)
            ->setWorkers_Compensation_Name($workers_Compensation_Name)
            ->setCountry_Reference($country_Reference)
            ->setCountry_Region_Reference($country_Region_Reference)
            ->setLocation_Reference($location_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get Workers_Compensation_ID value
     * @return string|null
     */
    public function getWorkers_Compensation_ID()
    {
        return $this->Workers_Compensation_ID;
    }
    /**
     * Set Workers_Compensation_ID value
     * @param string $workers_Compensation_ID
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function setWorkers_Compensation_ID($workers_Compensation_ID = null)
    {
        // validation for constraint: string
        if (!is_null($workers_Compensation_ID) && !is_string($workers_Compensation_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workers_Compensation_ID, true), gettype($workers_Compensation_ID)), __LINE__);
        }
        $this->Workers_Compensation_ID = $workers_Compensation_ID;
        return $this;
    }
    /**
     * Get Workers_Compensation_Code value
     * @return string|null
     */
    public function getWorkers_Compensation_Code()
    {
        return $this->Workers_Compensation_Code;
    }
    /**
     * Set Workers_Compensation_Code value
     * @param string $workers_Compensation_Code
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function setWorkers_Compensation_Code($workers_Compensation_Code = null)
    {
        // validation for constraint: string
        if (!is_null($workers_Compensation_Code) && !is_string($workers_Compensation_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workers_Compensation_Code, true), gettype($workers_Compensation_Code)), __LINE__);
        }
        $this->Workers_Compensation_Code = $workers_Compensation_Code;
        return $this;
    }
    /**
     * Get Workers_Compensation_Name value
     * @return string|null
     */
    public function getWorkers_Compensation_Name()
    {
        return $this->Workers_Compensation_Name;
    }
    /**
     * Set Workers_Compensation_Name value
     * @param string $workers_Compensation_Name
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function setWorkers_Compensation_Name($workers_Compensation_Name = null)
    {
        // validation for constraint: string
        if (!is_null($workers_Compensation_Name) && !is_string($workers_Compensation_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workers_Compensation_Name, true), gettype($workers_Compensation_Name)), __LINE__);
        }
        $this->Workers_Compensation_Name = $workers_Compensation_Name;
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
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Country_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType[]|null
     */
    public function getCountry_Region_Reference()
    {
        return $this->Country_Region_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCountry_Region_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Region_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountry_Region_ReferenceForArrayConstraintsFromSetCountry_Region_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workers_Compensation_Code_DataTypeCountry_Region_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_DataTypeCountry_Region_ReferenceItem instanceof \WorkdayWsdl\\StructType\Country_RegionObjectType) {
                $invalidValues[] = is_object($workers_Compensation_Code_DataTypeCountry_Region_ReferenceItem) ? get_class($workers_Compensation_Code_DataTypeCountry_Region_ReferenceItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_DataTypeCountry_Region_ReferenceItem), var_export($workers_Compensation_Code_DataTypeCountry_Region_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Country_Region_Reference property can only contain items of type \WorkdayWsdl\\StructType\Country_RegionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Country_Region_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType[] $country_Region_Reference
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function setCountry_Region_Reference(array $country_Region_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($country_Region_ReferenceArrayErrorMessage = self::validateCountry_Region_ReferenceForArrayConstraintsFromSetCountry_Region_Reference($country_Region_Reference))) {
            throw new \InvalidArgumentException($country_Region_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Country_Region_Reference = $country_Region_Reference;
        return $this;
    }
    /**
     * Add item to Country_Region_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $item
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function addToCountry_Region_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Country_RegionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Country_Region_Reference property can only contain items of type \WorkdayWsdl\\StructType\Country_RegionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Country_Region_Reference[] = $item;
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
        foreach ($values as $workers_Compensation_Code_DataTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$workers_Compensation_Code_DataTypeLocation_ReferenceItem instanceof \WorkdayWsdl\\StructType\LocationObjectType) {
                $invalidValues[] = is_object($workers_Compensation_Code_DataTypeLocation_ReferenceItem) ? get_class($workers_Compensation_Code_DataTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($workers_Compensation_Code_DataTypeLocation_ReferenceItem), var_export($workers_Compensation_Code_DataTypeLocation_ReferenceItem, true));
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
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
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
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
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
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_DataType
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
