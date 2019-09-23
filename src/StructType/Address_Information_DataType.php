<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Address Line is required for certain countries. | The Address ID field is for updating the value of the Address Reference. It cannot be the same as another existing address. | Number of Days is not allowed for the country specified.
 * | Number of Days cannot be greater than 7. | Address Reference must match an existing (and not deleted) address in use by the worker subject of this request | If one western script field is submitted, all required western script address fields must
 * be submitted. | Address deletion is not supported in this web service request | Country Reference is required unless address is being deleted | Usage Data is required unless address is being deleted | Address Reference is required when deleting an
 * address | If one local script address field is submitted, all required local script address fields must be submitted. | Subregion 2 (or Subregion 2 - Local if Local Scripts configured on Tenant Setup - Global) is required for this country. |
 * Subregion 1 (or Subregion 1 - Local if Local Scripts configured on Tenant Setup - Global) is required for this country. | Submunicipality (City Subdivision 2 or City Subdivision 2 - Local if Local Scripts configured on Tenant Setup - Global) are
 * required for this Country. | Submunicipality ("City Subdivision 1", or "City Subdivision 1 - Local" if Local Script configured on tenant setup global) is required in this country. | City Subdivision 2 is not a valid address component for certain
 * countries. | Region Subdivision 2 is not a valid address component for certain countries. | Region Subdivision 2 - Local is not a valid address component for certain countries. | Region Subdivision 1 - Local is not a valid address component for
 * certain countries. | City Subdivision 2 - Local is not a valid address component for certain countries. | City Subdivision 1 - Local is not a valid address component for certain countries. | Address Line 4 - Local is not Valid for this Country. |
 * Address Line 5 - Local is not Valid for this Country. | Address Line 6 is not Valid for this Country. | Address Line 7 - Local is not Valid for this Country. | Address Line 8 - Local is not Valid for this Country. | Address Line 9 - Local is not
 * Valid for this Country. | Address Line 3 - Local is not Valid for this Country. | Address Line 2 - Local is not valid for this Country. | Municipality - Local is not a valid address component for certain countries . | Address Line 1 - Local is not
 * valid for this Country. | You cannot specify the same usage type more than once for an address. | Address Line 9 is not Valid for this Country. | Address Line 9 (or Address Line 9 - Local if configured on Tenant Setup Global) is Required for this
 * Country. | Address Line 8 is not Valid for this Country. | Address Line 8 (or Address Line 8 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 7 is not Valid for this Country. | Address Line 7 (or Address Line
 * 7 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 6 (or Address Line 6 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 5 is not Valid for this Country. | Address
 * Line 5 (or Address Line 5 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 4 is not Valid for this Country. | Address Line 4 (or Address Line 4 - Local if configured on Tenant Setup Global) is Required for
 * this Country. | Address Line 3 is not Valid for this Country. | Address Line 3 (or Address Line 3 - Local if configured on Tenant Setup Global) is Required for this Country. | Address Line 2 not Valid for this Country. | Address Line 2 (or Address
 * Line 2 - Local if configured on Tenant Setup Global) is Required in this Country. | Address Line 1 is not valid for this Country. | Address Line 1 (or Address Line 1 - Local if configured on Tenant Setup Global) is Required for this Country. | Postal
 * Code must be valid for the Region. | Home addresses which are not additionally used as work addresses cannot be marked as public. | Region is required for certain countries. | A maximum of four Address Lines are allowed in an address. | A maximum of
 * four Subregions are allowed in an address. | A maximum of four Submunicipalities are allowed in an address. | Second Submunicipality is not a valid address component for certain countries. | Submunicipality is not a valid address component for
 * certain countries. | Second Subregion is not a valid address component for certain countries. | Subregion is not a valid address component for certain countries. | Fourth Address Line is not a valid address component for certain countries. | Third
 * Address Line is not a valid address component for certain countries. | Second Address Line is not a valid address component for certain countries. | Second Submunicipality is required for certain countries. | Submunicipality (or City Subdivision -
 * Local if configured on Tenant Setup Global) is required for certain countries. | Second Subregion is required for certain countries. | Subregion is required for certain countries. | Fourth Address Line is required for certain countries. | Third
 * Address Line is required for certain countries. | Second Address Line is required for certain countries. | Usage Type and Use For combination must be valid for Address. | Region Name must be valid for the specified Country. | Municipality is required
 * for certain countries. | Postal Code is required for certain countries. | Municipality is not a valid address component for certain countries . | Postal Code is not a valid address component for certain countries. | Address information
 * @subpackage Structs
 */
class Address_Information_DataType extends AbstractStructBase
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
     * The Last_Modified
     * Meta information extracted from the WSDL
     * - documentation: The moment when the address was last modified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Modified;
    /**
     * The Address_Line_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Address_Line_Information_DataType[]
     */
    public $Address_Line_Data;
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
     * The Country_City_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country city for the address.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_CityObjectType
     */
    public $Country_City_Reference;
    /**
     * The Submunicipality_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Submunicipality_Information_DataType[]
     */
    public $Submunicipality_Data;
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
     * The Subregion_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Subregion_Information_DataType[]
     */
    public $Subregion_Data;
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
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[]
     */
    public $Usage_Data;
    /**
     * The Number_of_Days
     * Meta information extracted from the WSDL
     * - documentation: Tracks the number of days an employee works from home per week. | The number of days a week this address will be used as a Work from Home address
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 1
     * @var float
     */
    public $Number_of_Days;
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
     * The Address_Reference
     * Meta information extracted from the WSDL
     * - documentation: The address Reference ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Address_ReferenceObjectType
     */
    public $Address_Reference;
    /**
     * The Address_ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in address updates. The ID cannot already be in use by another address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address_ID;
    /**
     * The Formatted_Address
     * Meta information extracted from the WSDL
     * - documentation: Returns the formatted address in the format specified for the country. This data is not used for inbound requests and any data provided in this element will be ignored.
     * @var string
     */
    public $Formatted_Address;
    /**
     * The Address_Format_Type
     * Meta information extracted from the WSDL
     * - documentation: The format type of the address.
     * @var string
     */
    public $Address_Format_Type;
    /**
     * The Defaulted_Business_Site_Address
     * Meta information extracted from the WSDL
     * - documentation: Set to 1 if the address is a defaulted location address. If this value is 1, this address will not be processed for inbound web services.
     * @var bool
     */
    public $Defaulted_Business_Site_Address;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: The referenced address is in use as a primary home address and cannot be deleted. | Set this flag to true in order to delete the referenced address. If this flag is set, the Reference ID field becomes required, and all other address
     * fields that would otherwise be required will be optional and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * The Do_Not_Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary address data will be replaced. A value of true means only the referenced address will be updated, or created if it does not exist or no reference was provided. This behavior is
     * used if the flag is set to true for ANY address in the request.
     * @var bool
     */
    public $Do_Not_Replace_All;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective date of address.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Address_Information_DataType
     * @uses Address_Information_DataType::setCountry_Reference()
     * @uses Address_Information_DataType::setLast_Modified()
     * @uses Address_Information_DataType::setAddress_Line_Data()
     * @uses Address_Information_DataType::setMunicipality()
     * @uses Address_Information_DataType::setCountry_City_Reference()
     * @uses Address_Information_DataType::setSubmunicipality_Data()
     * @uses Address_Information_DataType::setCountry_Region_Reference()
     * @uses Address_Information_DataType::setCountry_Region_Descriptor()
     * @uses Address_Information_DataType::setSubregion_Data()
     * @uses Address_Information_DataType::setPostal_Code()
     * @uses Address_Information_DataType::setUsage_Data()
     * @uses Address_Information_DataType::setNumber_of_Days()
     * @uses Address_Information_DataType::setMunicipality_Local()
     * @uses Address_Information_DataType::setAddress_Reference()
     * @uses Address_Information_DataType::setAddress_ID()
     * @uses Address_Information_DataType::setFormatted_Address()
     * @uses Address_Information_DataType::setAddress_Format_Type()
     * @uses Address_Information_DataType::setDefaulted_Business_Site_Address()
     * @uses Address_Information_DataType::setDelete()
     * @uses Address_Information_DataType::setDo_Not_Replace_All()
     * @uses Address_Information_DataType::setEffective_Date()
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param string $last_Modified
     * @param \WorkdayWsdl\\StructType\Address_Line_Information_DataType[] $address_Line_Data
     * @param string $municipality
     * @param \WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference
     * @param \WorkdayWsdl\\StructType\Submunicipality_Information_DataType[] $submunicipality_Data
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference
     * @param string $country_Region_Descriptor
     * @param \WorkdayWsdl\\StructType\Subregion_Information_DataType[] $subregion_Data
     * @param string $postal_Code
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param float $number_of_Days
     * @param string $municipality_Local
     * @param \WorkdayWsdl\\StructType\Address_ReferenceObjectType $address_Reference
     * @param string $address_ID
     * @param string $formatted_Address
     * @param string $address_Format_Type
     * @param bool $defaulted_Business_Site_Address
     * @param bool $delete
     * @param bool $do_Not_Replace_All
     * @param string $effective_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, $last_Modified = null, array $address_Line_Data = array(), $municipality = null, \WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference = null, array $submunicipality_Data = array(), \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference = null, $country_Region_Descriptor = null, array $subregion_Data = array(), $postal_Code = null, array $usage_Data = array(), $number_of_Days = null, $municipality_Local = null, \WorkdayWsdl\\StructType\Address_ReferenceObjectType $address_Reference = null, $address_ID = null, $formatted_Address = null, $address_Format_Type = null, $defaulted_Business_Site_Address = null, $delete = null, $do_Not_Replace_All = null, $effective_Date = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setLast_Modified($last_Modified)
            ->setAddress_Line_Data($address_Line_Data)
            ->setMunicipality($municipality)
            ->setCountry_City_Reference($country_City_Reference)
            ->setSubmunicipality_Data($submunicipality_Data)
            ->setCountry_Region_Reference($country_Region_Reference)
            ->setCountry_Region_Descriptor($country_Region_Descriptor)
            ->setSubregion_Data($subregion_Data)
            ->setPostal_Code($postal_Code)
            ->setUsage_Data($usage_Data)
            ->setNumber_of_Days($number_of_Days)
            ->setMunicipality_Local($municipality_Local)
            ->setAddress_Reference($address_Reference)
            ->setAddress_ID($address_ID)
            ->setFormatted_Address($formatted_Address)
            ->setAddress_Format_Type($address_Format_Type)
            ->setDefaulted_Business_Site_Address($defaulted_Business_Site_Address)
            ->setDelete($delete)
            ->setDo_Not_Replace_All($do_Not_Replace_All)
            ->setEffective_Date($effective_Date);
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Last_Modified value
     * @return string|null
     */
    public function getLast_Modified()
    {
        return $this->Last_Modified;
    }
    /**
     * Set Last_Modified value
     * @param string $last_Modified
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setLast_Modified($last_Modified = null)
    {
        // validation for constraint: string
        if (!is_null($last_Modified) && !is_string($last_Modified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Modified, true), gettype($last_Modified)), __LINE__);
        }
        $this->Last_Modified = $last_Modified;
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
        foreach ($values as $address_Information_DataTypeAddress_Line_DataItem) {
            // validation for constraint: itemType
            if (!$address_Information_DataTypeAddress_Line_DataItem instanceof \WorkdayWsdl\\StructType\Address_Line_Information_DataType) {
                $invalidValues[] = is_object($address_Information_DataTypeAddress_Line_DataItem) ? get_class($address_Information_DataTypeAddress_Line_DataItem) : sprintf('%s(%s)', gettype($address_Information_DataTypeAddress_Line_DataItem), var_export($address_Information_DataTypeAddress_Line_DataItem, true));
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setCountry_City_Reference(\WorkdayWsdl\\StructType\Country_CityObjectType $country_City_Reference = null)
    {
        $this->Country_City_Reference = $country_City_Reference;
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
        foreach ($values as $address_Information_DataTypeSubmunicipality_DataItem) {
            // validation for constraint: itemType
            if (!$address_Information_DataTypeSubmunicipality_DataItem instanceof \WorkdayWsdl\\StructType\Submunicipality_Information_DataType) {
                $invalidValues[] = is_object($address_Information_DataTypeSubmunicipality_DataItem) ? get_class($address_Information_DataTypeSubmunicipality_DataItem) : sprintf('%s(%s)', gettype($address_Information_DataTypeSubmunicipality_DataItem), var_export($address_Information_DataTypeSubmunicipality_DataItem, true));
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
        foreach ($values as $address_Information_DataTypeSubregion_DataItem) {
            // validation for constraint: itemType
            if (!$address_Information_DataTypeSubregion_DataItem instanceof \WorkdayWsdl\\StructType\Subregion_Information_DataType) {
                $invalidValues[] = is_object($address_Information_DataTypeSubregion_DataItem) ? get_class($address_Information_DataTypeSubregion_DataItem) : sprintf('%s(%s)', gettype($address_Information_DataTypeSubregion_DataItem), var_export($address_Information_DataTypeSubregion_DataItem, true));
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * Get Usage_Data value
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[]|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUsage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsage_DataForArrayConstraintsFromSetUsage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $address_Information_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$address_Information_DataTypeUsage_DataItem instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($address_Information_DataTypeUsage_DataItem) ? get_class($address_Information_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($address_Information_DataTypeUsage_DataItem), var_export($address_Information_DataTypeUsage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage_Data property can only contain items of type \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Usage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setUsage_Data(array $usage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($usage_DataArrayErrorMessage = self::validateUsage_DataForArrayConstraintsFromSetUsage_Data($usage_Data))) {
            throw new \InvalidArgumentException($usage_DataArrayErrorMessage, __LINE__);
        }
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Add item to Usage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function addToUsage_Data(\WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Usage_Data property can only contain items of type \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Usage_Data[] = $item;
        return $this;
    }
    /**
     * Get Number_of_Days value
     * @return float|null
     */
    public function getNumber_of_Days()
    {
        return $this->Number_of_Days;
    }
    /**
     * Set Number_of_Days value
     * @param float $number_of_Days
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setNumber_of_Days($number_of_Days = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Days) && !(is_float($number_of_Days) || is_numeric($number_of_Days))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Days, true), gettype($number_of_Days)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Days) && mb_strlen(mb_substr($number_of_Days, mb_strpos($number_of_Days, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Days, true), mb_strlen(mb_substr($number_of_Days, mb_strpos($number_of_Days, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Days) && $number_of_Days < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Days, true)), __LINE__);
        }
        // validation for constraint: totalDigits(1)
        if (!is_null($number_of_Days) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Days)) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($number_of_Days, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Days))), __LINE__);
        }
        $this->Number_of_Days = $number_of_Days;
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * Get Address_Reference value
     * @return \WorkdayWsdl\\StructType\Address_ReferenceObjectType|null
     */
    public function getAddress_Reference()
    {
        return $this->Address_Reference;
    }
    /**
     * Set Address_Reference value
     * @param \WorkdayWsdl\\StructType\Address_ReferenceObjectType $address_Reference
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setAddress_Reference(\WorkdayWsdl\\StructType\Address_ReferenceObjectType $address_Reference = null)
    {
        $this->Address_Reference = $address_Reference;
        return $this;
    }
    /**
     * Get Address_ID value
     * @return string|null
     */
    public function getAddress_ID()
    {
        return $this->Address_ID;
    }
    /**
     * Set Address_ID value
     * @param string $address_ID
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setAddress_ID($address_ID = null)
    {
        // validation for constraint: string
        if (!is_null($address_ID) && !is_string($address_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_ID, true), gettype($address_ID)), __LINE__);
        }
        $this->Address_ID = $address_ID;
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * Get Address_Format_Type value
     * @return string|null
     */
    public function getAddress_Format_Type()
    {
        return $this->Address_Format_Type;
    }
    /**
     * Set Address_Format_Type value
     * @param string $address_Format_Type
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setAddress_Format_Type($address_Format_Type = null)
    {
        // validation for constraint: string
        if (!is_null($address_Format_Type) && !is_string($address_Format_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Format_Type, true), gettype($address_Format_Type)), __LINE__);
        }
        $this->Address_Format_Type = $address_Format_Type;
        return $this;
    }
    /**
     * Get Defaulted_Business_Site_Address value
     * @return bool|null
     */
    public function getDefaulted_Business_Site_Address()
    {
        return $this->Defaulted_Business_Site_Address;
    }
    /**
     * Set Defaulted_Business_Site_Address value
     * @param bool $defaulted_Business_Site_Address
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setDefaulted_Business_Site_Address($defaulted_Business_Site_Address = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaulted_Business_Site_Address) && !is_bool($defaulted_Business_Site_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaulted_Business_Site_Address, true), gettype($defaulted_Business_Site_Address)), __LINE__);
        }
        $this->Defaulted_Business_Site_Address = $defaulted_Business_Site_Address;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
     * Get Do_Not_Replace_All value
     * @return bool|null
     */
    public function getDo_Not_Replace_All()
    {
        return $this->Do_Not_Replace_All;
    }
    /**
     * Set Do_Not_Replace_All value
     * @param bool $do_Not_Replace_All
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setDo_Not_Replace_All($do_Not_Replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($do_Not_Replace_All) && !is_bool($do_Not_Replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($do_Not_Replace_All, true), gettype($do_Not_Replace_All)), __LINE__);
        }
        $this->Do_Not_Replace_All = $do_Not_Replace_All;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType
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
