<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address_Core_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Address Line 5 (or Address Line 5 - Local if configured on Tenant Setup Global) is Required for this Country. | Municipality - Local is not a valid address component for certain countries . | Subregion 2 (or Subregion 2 - Local if
 * Local Scripts configured on Tenant Setup - Global) is required for this country. | Address Line 6 is not Valid for this Country. | Address Line 1 (or Address Line 1 - Local if configured on Tenant Setup Global) is Required for this Country. | Address
 * Line 9 is not Valid for this Country. | Municipality is not a valid address component for certain countries . | Address Line 3 is not Valid for this Country. | Region Subdivision 1 - Local is not a valid address component for certain countries. |
 * Address Line 2 (or Address Line 2 - Local if configured on Tenant Setup Global) is Required in this Country. | Region Name must be valid for the specified Country. | Postal Code is required for certain countries. | Address Line 5 - Local is not Valid
 * for this Country. | Address Line 3 (or Address Line 3 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 4 (or Address Line 4 - Local if configured on Tenant Setup Global) is Required for this Country. | City
 * Subdivision 2 is not a valid address component for certain countries. | Address Line 8 - Local is not Valid for this Country. | Address Line 7 - Local is not Valid for this Country. | City Subdivision 1 - Local is not a valid address component for
 * certain countries. | Submunicipality (or City Subdivision - Local if configured on Tenant Setup Global) is required for certain countries. | Region is required for certain countries. | Region Subdivision 2 is not a valid address component for certain
 * countries. | Address Line 8 (or Address Line 8 - Local if configured on Tenant Setup Global) is Required for this Country. | Postal Code must be valid for the Region. | If one local script address field is submitted, all required local script address
 * fields must be submitted. | Address Line 4 is not Valid for this Country. | Address Line 4 - Local is not Valid for this Country. | Subregion 1 (or Subregion 1 - Local if Local Scripts configured on Tenant Setup - Global) is required for this
 * country. | Address Line 2 not Valid for this Country. | Address Line 1 - Local is not valid for this Country. | Submunicipality (City Subdivision 2 or City Subdivision 2 - Local if Local Scripts configured on Tenant Setup - Global) are required for
 * this Country. | Address Line 9 - Local is not Valid for this Country. | City Subdivision 2 - Local is not a valid address component for certain countries. | City Subdivision 1 is not a valid address component for certain countries. | Address Line 3 -
 * Local is not Valid for this Country. | Address Line 8 is not Valid for this Country. | Region Subdivision 2 - Local is not a valid address component for certain countries. | Address Line 6 (or Address Line 6 - Local if configured on Tenant Setup
 * Global) is Required for this Country. | Address Line 9 (or Address Line 9 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 1 is not valid for this Country. | Address Line 5 is not Valid for this Country. |
 * Address Line 7 (or Address Line 7 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 2 - Local is not valid for this Country. | Address Line 7 is not Valid for this Country. | Postal Code is not a valid address
 * component for certain countries. | If one western script field is submitted, all required western script address fields must be submitted. | Subregion is not a valid address component for certain countries. | Municipality is required for certain
 * countries. | Submunicipality ("City Subdivision 1", or "City Subdivision 1 - Local" if Local Script configured on tenant setup global) is required in this country. | Element encapsulating the core address information.
 * @subpackage Structs
 */
class Address_Core_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country for the address.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Country_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: The region part of the address. Typically this contains the state/province information.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType
     */
    public $Country_Region_Reference;
    /**
     * The Country_Region_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: The region part of the address. Typically this contains the state/province information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country_Region_Descriptor;
    /**
     * The Address_Line_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Address_Line_Information_DataType[]
     */
    public $Address_Line_Data;
    /**
     * The Subregion_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Subregion_Information_DataType[]
     */
    public $Subregion_Data;
    /**
     * The Submunicipality_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Submunicipality_Information_DataType[]
     */
    public $Submunicipality_Data;
    /**
     * The Postal_Code
     * Meta information extracted from the WSDL
     * - documentation: The postal code part of the address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Postal_Code;
    /**
     * The Municipality
     * Meta information extracted from the WSDL
     * - documentation: City part of the address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Municipality;
    /**
     * The Municipality_Local
     * Meta information extracted from the WSDL
     * - documentation: City in local script part of the address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Municipality_Local;
    /**
     * The Country_City_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country city for the address.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_CityObjectType
     */
    public $Country_City_Reference;
    /**
     * The Formatted_Address
     * Meta information extracted from the WSDL
     * - documentation: Returns the formatted address in the format specified for the country. This data is not used for inbound requests and any data provided in this element will be ignored.
     * @var string
     */
    public $Formatted_Address;
    /**
     * The Default_Address
     * Meta information extracted from the WSDL
     * - documentation: Set to 1 if the address is a defaulted location address. If this value is 1, this address will not be processed for inbound web services.
     * @var bool
     */
    public $Default_Address;
    /**
     * Constructor method for Address_Core_DataType
     * @uses Address_Core_DataType::setCountry_Reference()
     * @uses Address_Core_DataType::setCountry_Region_Reference()
     * @uses Address_Core_DataType::setCountry_Region_Descriptor()
     * @uses Address_Core_DataType::setAddress_Line_Data()
     * @uses Address_Core_DataType::setSubregion_Data()
     * @uses Address_Core_DataType::setSubmunicipality_Data()
     * @uses Address_Core_DataType::setPostal_Code()
     * @uses Address_Core_DataType::setMunicipality()
     * @uses Address_Core_DataType::setMunicipality_Local()
     * @uses Address_Core_DataType::setCountry_City_Reference()
     * @uses Address_Core_DataType::setFormatted_Address()
     * @uses Address_Core_DataType::setDefault_Address()
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference
     * @param string $country_Region_Descriptor
     * @param \WorkdayWsdl\\StructType\Address_Line_Information_DataType[] $address_Line_Data
     * @param \WorkdayWsdl\\StructType\Subregion_Information_DataType[] $subregion_Data
     * @param \WorkdayWsdl\\StructType\Submunicipality_Information_DataType[] $submunicipality_Data
     * @param string $postal_Code
     * @param string $municipality
     * @param string $municipality_Local
     * @param \WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference
     * @param string $formatted_Address
     * @param bool $default_Address
     */
    public function __construct(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference = null, $country_Region_Descriptor = null, array $address_Line_Data = array(), array $subregion_Data = array(), array $submunicipality_Data = array(), $postal_Code = null, $municipality = null, $municipality_Local = null, \WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference = null, $formatted_Address = null, $default_Address = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setCountry_Region_Reference($country_Region_Reference)
            ->setCountry_Region_Descriptor($country_Region_Descriptor)
            ->setAddress_Line_Data($address_Line_Data)
            ->setSubregion_Data($subregion_Data)
            ->setSubmunicipality_Data($submunicipality_Data)
            ->setPostal_Code($postal_Code)
            ->setMunicipality($municipality)
            ->setMunicipality_Local($municipality_Local)
            ->setCountry_City_Reference($country_City_Reference)
            ->setFormatted_Address($formatted_Address)
            ->setDefault_Address($default_Address);
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
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Country_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType|null
     */
    public function getCountry_Region_Reference()
    {
        return $this->Country_Region_Reference;
    }
    /**
     * Set Country_Region_Reference value
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setCountry_Region_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference = null)
    {
        $this->Country_Region_Reference = $country_Region_Reference;
        return $this;
    }
    /**
     * Get Country_Region_Descriptor value
     * @return string|null
     */
    public function getCountry_Region_Descriptor()
    {
        return $this->Country_Region_Descriptor;
    }
    /**
     * Set Country_Region_Descriptor value
     * @param string $country_Region_Descriptor
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setCountry_Region_Descriptor($country_Region_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($country_Region_Descriptor) && !is_string($country_Region_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_Region_Descriptor, true), gettype($country_Region_Descriptor)), __LINE__);
        }
        $this->Country_Region_Descriptor = $country_Region_Descriptor;
        return $this;
    }
    /**
     * Get Address_Line_Data value
     * @return \WorkdayWsdl\\StructType\Address_Line_Information_DataType[]|null
     */
    public function getAddress_Line_Data()
    {
        return $this->Address_Line_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress_Line_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress_Line_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddress_Line_DataForArrayConstraintsFromSetAddress_Line_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_Core_DataTypeAddress_Line_DataItem) {
            // validation for constraint: itemType
            if (!$address_Core_DataTypeAddress_Line_DataItem instanceof \WorkdayWsdl\\StructType\Address_Line_Information_DataType) {
                $invalidValues[] = is_object($address_Core_DataTypeAddress_Line_DataItem) ? get_class($address_Core_DataTypeAddress_Line_DataItem) : sprintf('%s(%s)', gettype($address_Core_DataTypeAddress_Line_DataItem), var_export($address_Core_DataTypeAddress_Line_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Line_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_Line_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Line_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_Line_Information_DataType[] $address_Line_Data
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setAddress_Line_Data(array $address_Line_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($address_Line_DataArrayErrorMessage = self::validateAddress_Line_DataForArrayConstraintsFromSetAddress_Line_Data($address_Line_Data))) {
            throw new \InvalidArgumentException($address_Line_DataArrayErrorMessage, __LINE__);
        }
        $this->Address_Line_Data = $address_Line_Data;
        return $this;
    }
    /**
     * Add item to Address_Line_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_Line_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function addToAddress_Line_Data(\WorkdayWsdl\\StructType\Address_Line_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Address_Line_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Line_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_Line_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Line_Data[] = $item;
        return $this;
    }
    /**
     * Get Subregion_Data value
     * @return \WorkdayWsdl\\StructType\Subregion_Information_DataType[]|null
     */
    public function getSubregion_Data()
    {
        return $this->Subregion_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSubregion_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubregion_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubregion_DataForArrayConstraintsFromSetSubregion_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_Core_DataTypeSubregion_DataItem) {
            // validation for constraint: itemType
            if (!$address_Core_DataTypeSubregion_DataItem instanceof \WorkdayWsdl\\StructType\Subregion_Information_DataType) {
                $invalidValues[] = is_object($address_Core_DataTypeSubregion_DataItem) ? get_class($address_Core_DataTypeSubregion_DataItem) : sprintf('%s(%s)', gettype($address_Core_DataTypeSubregion_DataItem), var_export($address_Core_DataTypeSubregion_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subregion_Data property can only contain items of type \WorkdayWsdl\\StructType\Subregion_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subregion_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Subregion_Information_DataType[] $subregion_Data
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setSubregion_Data(array $subregion_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($subregion_DataArrayErrorMessage = self::validateSubregion_DataForArrayConstraintsFromSetSubregion_Data($subregion_Data))) {
            throw new \InvalidArgumentException($subregion_DataArrayErrorMessage, __LINE__);
        }
        $this->Subregion_Data = $subregion_Data;
        return $this;
    }
    /**
     * Add item to Subregion_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Subregion_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function addToSubregion_Data(\WorkdayWsdl\\StructType\Subregion_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Subregion_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Subregion_Data property can only contain items of type \WorkdayWsdl\\StructType\Subregion_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subregion_Data[] = $item;
        return $this;
    }
    /**
     * Get Submunicipality_Data value
     * @return \WorkdayWsdl\\StructType\Submunicipality_Information_DataType[]|null
     */
    public function getSubmunicipality_Data()
    {
        return $this->Submunicipality_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSubmunicipality_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubmunicipality_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubmunicipality_DataForArrayConstraintsFromSetSubmunicipality_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_Core_DataTypeSubmunicipality_DataItem) {
            // validation for constraint: itemType
            if (!$address_Core_DataTypeSubmunicipality_DataItem instanceof \WorkdayWsdl\\StructType\Submunicipality_Information_DataType) {
                $invalidValues[] = is_object($address_Core_DataTypeSubmunicipality_DataItem) ? get_class($address_Core_DataTypeSubmunicipality_DataItem) : sprintf('%s(%s)', gettype($address_Core_DataTypeSubmunicipality_DataItem), var_export($address_Core_DataTypeSubmunicipality_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Submunicipality_Data property can only contain items of type \WorkdayWsdl\\StructType\Submunicipality_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Submunicipality_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Submunicipality_Information_DataType[] $submunicipality_Data
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setSubmunicipality_Data(array $submunicipality_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($submunicipality_DataArrayErrorMessage = self::validateSubmunicipality_DataForArrayConstraintsFromSetSubmunicipality_Data($submunicipality_Data))) {
            throw new \InvalidArgumentException($submunicipality_DataArrayErrorMessage, __LINE__);
        }
        $this->Submunicipality_Data = $submunicipality_Data;
        return $this;
    }
    /**
     * Add item to Submunicipality_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Submunicipality_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function addToSubmunicipality_Data(\WorkdayWsdl\\StructType\Submunicipality_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Submunicipality_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Submunicipality_Data property can only contain items of type \WorkdayWsdl\\StructType\Submunicipality_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Submunicipality_Data[] = $item;
        return $this;
    }
    /**
     * Get Postal_Code value
     * @return string|null
     */
    public function getPostal_Code()
    {
        return $this->Postal_Code;
    }
    /**
     * Set Postal_Code value
     * @param string $postal_Code
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setPostal_Code($postal_Code = null)
    {
        // validation for constraint: string
        if (!is_null($postal_Code) && !is_string($postal_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_Code, true), gettype($postal_Code)), __LINE__);
        }
        $this->Postal_Code = $postal_Code;
        return $this;
    }
    /**
     * Get Municipality value
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->Municipality;
    }
    /**
     * Set Municipality value
     * @param string $municipality
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setMunicipality($municipality = null)
    {
        // validation for constraint: string
        if (!is_null($municipality) && !is_string($municipality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($municipality, true), gettype($municipality)), __LINE__);
        }
        $this->Municipality = $municipality;
        return $this;
    }
    /**
     * Get Municipality_Local value
     * @return string|null
     */
    public function getMunicipality_Local()
    {
        return $this->Municipality_Local;
    }
    /**
     * Set Municipality_Local value
     * @param string $municipality_Local
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setMunicipality_Local($municipality_Local = null)
    {
        // validation for constraint: string
        if (!is_null($municipality_Local) && !is_string($municipality_Local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($municipality_Local, true), gettype($municipality_Local)), __LINE__);
        }
        $this->Municipality_Local = $municipality_Local;
        return $this;
    }
    /**
     * Get Country_City_Reference value
     * @return \WorkdayWsdl\\StructType\Country_CityObjectType|null
     */
    public function getCountry_City_Reference()
    {
        return $this->Country_City_Reference;
    }
    /**
     * Set Country_City_Reference value
     * @param \WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setCountry_City_Reference(\WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference = null)
    {
        $this->Country_City_Reference = $country_City_Reference;
        return $this;
    }
    /**
     * Get Formatted_Address value
     * @return string|null
     */
    public function getFormatted_Address()
    {
        return $this->Formatted_Address;
    }
    /**
     * Set Formatted_Address value
     * @param string $formatted_Address
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setFormatted_Address($formatted_Address = null)
    {
        // validation for constraint: string
        if (!is_null($formatted_Address) && !is_string($formatted_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatted_Address, true), gettype($formatted_Address)), __LINE__);
        }
        $this->Formatted_Address = $formatted_Address;
        return $this;
    }
    /**
     * Get Default_Address value
     * @return bool|null
     */
    public function getDefault_Address()
    {
        return $this->Default_Address;
    }
    /**
     * Set Default_Address value
     * @param bool $default_Address
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
     */
    public function setDefault_Address($default_Address = null)
    {
        // validation for constraint: boolean
        if (!is_null($default_Address) && !is_bool($default_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default_Address, true), gettype($default_Address)), __LINE__);
        }
        $this->Default_Address = $default_Address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Address_Core_DataType
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
