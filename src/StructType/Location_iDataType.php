<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_iDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: You can only add training room data when one of the Location Usage values is Training Room. | You can't specify Location Usages of Training Room and Business Site at the same time. | When you specify Training Room for Location
 * Usages, you need to specify a Superior Location that's a business site. | Deliver-To Locations cannot be associated to Inactive Ship-To Location | Default Ship-To Location cannot be associated with Inactive Deliver-To Location. | Inactive Deliver-To
 * Location(s) cannot be associated with Ship-To Location. | Inactive Ship-To Location cannot be Default Ship-To Location of current Location. | Enter a location with a Ship-To usage in the Default Ship-To field. | Associated Deliver-To’s is only
 * valid for locations that have a usage of Ship-To. | Default Ship-To location is only valid for locations that don't already have a Ship-To usage. | Address is required for a Ship-to Location. | Enter locations that don't have a Ship-To usage in the
 * Associated Deliver-To field. | The Location Usages of the Location Attributes must match the usages on the Location. | A selected Location Attribute is marked as inactive. | Address is required for a Par Location. | Owning organization is required
 * for an instructional location. | An Instructional Site Location cannot be a Campus at the same time. | This location cannot be inactivated as it is the primary location on at least 1 active supervisory organization. | Address is required for a
 * location used as a business site without address defined. | Worksite ID Code and Trade Name are valid only for Locations based in US. | Worksite ID Code must be unique within a US State. Please change the Worksite ID Code. | Another location already
 * exists with the same latitude, longitude, and altitude. | Work Space Locations must be a subordinate of Work Space or Business site, it cannot be a top-level Location. | A Business Site cannot be a subordinate of a Work Space. | A Work Space Location
 * cannot be a Business Site at the same time. | Locations must be uniquely assigned to a location hierarchy. A location can be assigned to one or more location hierarchy organizations, but can only be assigned to one organization in a hierarchy. | You
 * must choose a Workday-supported User Language that has been enabled in this tenant. | Validates that the code provided matches one of the locale codes in the Workday system. | Usage Type is Invalid for this Contactable. | Time Profile is required for
 * a location whose usages include Business Site. | Location Name is required when creating a new Location. | Element containing all Location data.
 * @subpackage Structs
 */
class Location_iDataType extends AbstractStructBase
{
    /**
     * The Location_ID
     * Meta information extracted from the WSDL
     * - documentation: The unique location ID. The organization, position and hire tabs will reference location ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_ID;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Specifies the Effective Date for updates to these fields only: Location Name, Inactive, and Location Hierarchy Reference. Blank means these field values will be effective as of the beginning of time. Must be blank for new locations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Location_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Location.
     * - maxOccurs: 1
     * @var string
     */
    public $Location_Name;
    /**
     * The Location_Usage_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the usage of the Location. (e.g. Business Site, Work Space, etc.)
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Location_UsageObjectType[]
     */
    public $Location_Usage_Reference;
    /**
     * The Location_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The location type associated with the location that ties to the usage that has been setup. If left blank, existing values will be removed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_TypeObjectType[]
     */
    public $Location_Type_Reference;
    /**
     * The Location_Attribute_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Location Attributes associated with this Location. If left blank, existing values will be removed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_AttributeObjectType[]
     */
    public $Location_Attribute_Reference;
    /**
     * The Superior_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Superior Location Reference. Reference to another Location that is Superior. If left blank, existing values will be removed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Superior_Location_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicates if the Location is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - documentation: The Latitude for a Coordinate. If left blank, existing values will be removed.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 8
     * @var float
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - documentation: The Longitude for a Coordinate. If left blank, existing values will be removed.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 9
     * @var float
     */
    public $Longitude;
    /**
     * The Altitude
     * Meta information extracted from the WSDL
     * - documentation: The Altitude for a Coordinate. If left blank, existing values will be removed.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 10
     * @var float
     */
    public $Altitude;
    /**
     * The Time_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: The time profile associated with the location. This ties to the time profile description that has been set up. If left blank, existing values will be removed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Time_ProfileObjectType
     */
    public $Time_Profile_Reference;
    /**
     * The Locale_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Locale used by the Location. If left blank, existing values will be removed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocaleObjectType
     */
    public $Locale_Reference;
    /**
     * The Display_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Default Display Language for the Location. If left blank, existing values will be removed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_LanguageObjectType
     */
    public $Display_Language_Reference;
    /**
     * The Time_Zone_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Time Zone of the Location. If left blank, existing values will be removed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Time_ZoneObjectType
     */
    public $Time_Zone_Reference;
    /**
     * The Default_Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Default Currency for the Location. In 'Put_Location', if the specified currency is different from the default currency of the country of the location's primary address then it is populated in this field as an
     * override and displayed in the UI as 'Location Default Currency Override'. In 'Get_Locations', the override currency will be returned if there is one, otherwise the default currency of the country of the location's primary address will be returned.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Default_Currency_Reference;
    /**
     * The External_Name
     * Meta information extracted from the WSDL
     * - documentation: An alternate name for the primary location when the job details display on the Recruiting External Career Sites.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $External_Name;
    /**
     * The Default_Job_Posting_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Define the location that's used when posting jobs for this business site location. This can be overridden by entering a different Job Posting Location Override on the Job Requisition.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Default_Job_Posting_Location_Reference;
    /**
     * The Trade_Name
     * Meta information extracted from the WSDL
     * - documentation: The division or subsidiary name of the establishment. | The division or subsidiary name of the establishment. If left blank, existing values will be removed.
     * - base: xsd:string
     * - maxLength: 35
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Trade_Name;
    /**
     * The Worksite_ID_Code
     * Meta information extracted from the WSDL
     * - documentation: A unique alpha/numeric identifier that identifies the business at this physical location. | A unique alpha/numeric identifier that identifies the business at this physical location. If left blank, existing values will be removed.
     * - base: xsd:string
     * - maxLength: 21
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worksite_ID_Code;
    /**
     * The Global_Location_Number
     * Meta information extracted from the WSDL
     * - documentation: The Global Location Number of the location.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Global_Location_Number;
    /**
     * The Location_Identifier
     * Meta information extracted from the WSDL
     * - documentation: The location identifier of the location.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_Identifier;
    /**
     * The Default_Ship_To_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shipping Location with an address associated to this Deliver-To location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Default_Ship_To_Location_Reference;
    /**
     * The Associate_Deliver_To_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Deliver-To location that can be associated with a Location with Ship-to usage.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType[]
     */
    public $Associate_Deliver_To_Location_Reference;
    /**
     * The Instructional_Site_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Instructional_Site_DataType
     */
    public $Instructional_Site_Data;
    /**
     * The Student_Housing_Assignment_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Student Housing Assignment Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType
     */
    public $Student_Housing_Assignment_Data;
    /**
     * The Location_Training_Room_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Training Room data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Training_Room_DataType
     */
    public $Location_Training_Room_Data;
    /**
     * The Contact_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contact_Information_DataType
     */
    public $Contact_Data;
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Location_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Location Hierarchy the includes this Location. If left blank, location will be removed from all location hierarchies it is included in as of effective date specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_HierarchyObjectType[]
     */
    public $Location_Hierarchy_Reference;
    /**
     * The Integration_Field_Override_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Document_Field_Result_DataType[]
     */
    public $Integration_Field_Override_Data;
    /**
     * Constructor method for Location_iDataType
     * @uses Location_iDataType::setLocation_ID()
     * @uses Location_iDataType::setEffective_Date()
     * @uses Location_iDataType::setLocation_Name()
     * @uses Location_iDataType::setLocation_Usage_Reference()
     * @uses Location_iDataType::setLocation_Type_Reference()
     * @uses Location_iDataType::setLocation_Attribute_Reference()
     * @uses Location_iDataType::setSuperior_Location_Reference()
     * @uses Location_iDataType::setInactive()
     * @uses Location_iDataType::setLatitude()
     * @uses Location_iDataType::setLongitude()
     * @uses Location_iDataType::setAltitude()
     * @uses Location_iDataType::setTime_Profile_Reference()
     * @uses Location_iDataType::setLocale_Reference()
     * @uses Location_iDataType::setDisplay_Language_Reference()
     * @uses Location_iDataType::setTime_Zone_Reference()
     * @uses Location_iDataType::setDefault_Currency_Reference()
     * @uses Location_iDataType::setExternal_Name()
     * @uses Location_iDataType::setDefault_Job_Posting_Location_Reference()
     * @uses Location_iDataType::setTrade_Name()
     * @uses Location_iDataType::setWorksite_ID_Code()
     * @uses Location_iDataType::setGlobal_Location_Number()
     * @uses Location_iDataType::setLocation_Identifier()
     * @uses Location_iDataType::setDefault_Ship_To_Location_Reference()
     * @uses Location_iDataType::setAssociate_Deliver_To_Location_Reference()
     * @uses Location_iDataType::setInstructional_Site_Data()
     * @uses Location_iDataType::setStudent_Housing_Assignment_Data()
     * @uses Location_iDataType::setLocation_Training_Room_Data()
     * @uses Location_iDataType::setContact_Data()
     * @uses Location_iDataType::setIntegration_ID_Data()
     * @uses Location_iDataType::setLocation_Hierarchy_Reference()
     * @uses Location_iDataType::setIntegration_Field_Override_Data()
     * @param string $location_ID
     * @param string $effective_Date
     * @param string $location_Name
     * @param \WorkdayWsdl\\StructType\Location_UsageObjectType[] $location_Usage_Reference
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType[] $location_Type_Reference
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType[] $location_Attribute_Reference
     * @param \WorkdayWsdl\\StructType\LocationObjectType $superior_Location_Reference
     * @param bool $inactive
     * @param float $latitude
     * @param float $longitude
     * @param float $altitude
     * @param \WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference
     * @param \WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference
     * @param string $external_Name
     * @param \WorkdayWsdl\\StructType\LocationObjectType $default_Job_Posting_Location_Reference
     * @param string $trade_Name
     * @param string $worksite_ID_Code
     * @param string $global_Location_Number
     * @param string $location_Identifier
     * @param \WorkdayWsdl\\StructType\LocationObjectType $default_Ship_To_Location_Reference
     * @param \WorkdayWsdl\\StructType\LocationObjectType[] $associate_Deliver_To_Location_Reference
     * @param \WorkdayWsdl\\StructType\Location_Instructional_Site_DataType $instructional_Site_Data
     * @param \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType $student_Housing_Assignment_Data
     * @param \WorkdayWsdl\\StructType\Location_Training_Room_DataType $location_Training_Room_Data
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Data
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param \WorkdayWsdl\\StructType\Location_HierarchyObjectType[] $location_Hierarchy_Reference
     * @param \WorkdayWsdl\\StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     */
    public function __construct($location_ID = null, $effective_Date = null, $location_Name = null, array $location_Usage_Reference = array(), array $location_Type_Reference = array(), array $location_Attribute_Reference = array(), \WorkdayWsdl\\StructType\LocationObjectType $superior_Location_Reference = null, $inactive = null, $latitude = null, $longitude = null, $altitude = null, \WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference = null, \WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference = null, \WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference = null, \WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference = null, \WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference = null, $external_Name = null, \WorkdayWsdl\\StructType\LocationObjectType $default_Job_Posting_Location_Reference = null, $trade_Name = null, $worksite_ID_Code = null, $global_Location_Number = null, $location_Identifier = null, \WorkdayWsdl\\StructType\LocationObjectType $default_Ship_To_Location_Reference = null, array $associate_Deliver_To_Location_Reference = array(), \WorkdayWsdl\\StructType\Location_Instructional_Site_DataType $instructional_Site_Data = null, \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType $student_Housing_Assignment_Data = null, \WorkdayWsdl\\StructType\Location_Training_Room_DataType $location_Training_Room_Data = null, \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Data = null, \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, array $location_Hierarchy_Reference = array(), array $integration_Field_Override_Data = array())
    {
        $this
            ->setLocation_ID($location_ID)
            ->setEffective_Date($effective_Date)
            ->setLocation_Name($location_Name)
            ->setLocation_Usage_Reference($location_Usage_Reference)
            ->setLocation_Type_Reference($location_Type_Reference)
            ->setLocation_Attribute_Reference($location_Attribute_Reference)
            ->setSuperior_Location_Reference($superior_Location_Reference)
            ->setInactive($inactive)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setAltitude($altitude)
            ->setTime_Profile_Reference($time_Profile_Reference)
            ->setLocale_Reference($locale_Reference)
            ->setDisplay_Language_Reference($display_Language_Reference)
            ->setTime_Zone_Reference($time_Zone_Reference)
            ->setDefault_Currency_Reference($default_Currency_Reference)
            ->setExternal_Name($external_Name)
            ->setDefault_Job_Posting_Location_Reference($default_Job_Posting_Location_Reference)
            ->setTrade_Name($trade_Name)
            ->setWorksite_ID_Code($worksite_ID_Code)
            ->setGlobal_Location_Number($global_Location_Number)
            ->setLocation_Identifier($location_Identifier)
            ->setDefault_Ship_To_Location_Reference($default_Ship_To_Location_Reference)
            ->setAssociate_Deliver_To_Location_Reference($associate_Deliver_To_Location_Reference)
            ->setInstructional_Site_Data($instructional_Site_Data)
            ->setStudent_Housing_Assignment_Data($student_Housing_Assignment_Data)
            ->setLocation_Training_Room_Data($location_Training_Room_Data)
            ->setContact_Data($contact_Data)
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setLocation_Hierarchy_Reference($location_Hierarchy_Reference)
            ->setIntegration_Field_Override_Data($integration_Field_Override_Data);
    }
    /**
     * Get Location_ID value
     * @return string|null
     */
    public function getLocation_ID()
    {
        return $this->Location_ID;
    }
    /**
     * Set Location_ID value
     * @param string $location_ID
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_ID($location_ID = null)
    {
        // validation for constraint: string
        if (!is_null($location_ID) && !is_string($location_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_ID, true), gettype($location_ID)), __LINE__);
        }
        $this->Location_ID = $location_ID;
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
     * @return \WorkdayWsdl\\StructType\Location_iDataType
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
     * Get Location_Name value
     * @return string|null
     */
    public function getLocation_Name()
    {
        return $this->Location_Name;
    }
    /**
     * Set Location_Name value
     * @param string $location_Name
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Name($location_Name = null)
    {
        // validation for constraint: string
        if (!is_null($location_Name) && !is_string($location_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_Name, true), gettype($location_Name)), __LINE__);
        }
        $this->Location_Name = $location_Name;
        return $this;
    }
    /**
     * Get Location_Usage_Reference value
     * @return \WorkdayWsdl\\StructType\Location_UsageObjectType[]|null
     */
    public function getLocation_Usage_Reference()
    {
        return $this->Location_Usage_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Usage_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Usage_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Usage_ReferenceForArrayConstraintsFromSetLocation_Usage_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_iDataTypeLocation_Usage_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_iDataTypeLocation_Usage_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_UsageObjectType) {
                $invalidValues[] = is_object($location_iDataTypeLocation_Usage_ReferenceItem) ? get_class($location_iDataTypeLocation_Usage_ReferenceItem) : sprintf('%s(%s)', gettype($location_iDataTypeLocation_Usage_ReferenceItem), var_export($location_iDataTypeLocation_Usage_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Usage_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_UsageObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Usage_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_UsageObjectType[] $location_Usage_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Usage_Reference(array $location_Usage_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Usage_ReferenceArrayErrorMessage = self::validateLocation_Usage_ReferenceForArrayConstraintsFromSetLocation_Usage_Reference($location_Usage_Reference))) {
            throw new \InvalidArgumentException($location_Usage_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Usage_Reference = $location_Usage_Reference;
        return $this;
    }
    /**
     * Add item to Location_Usage_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_UsageObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function addToLocation_Usage_Reference(\WorkdayWsdl\\StructType\Location_UsageObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_UsageObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Usage_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_UsageObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Usage_Reference[] = $item;
        return $this;
    }
    /**
     * Get Location_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Location_TypeObjectType[]|null
     */
    public function getLocation_Type_Reference()
    {
        return $this->Location_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Type_ReferenceForArrayConstraintsFromSetLocation_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_iDataTypeLocation_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_iDataTypeLocation_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_TypeObjectType) {
                $invalidValues[] = is_object($location_iDataTypeLocation_Type_ReferenceItem) ? get_class($location_iDataTypeLocation_Type_ReferenceItem) : sprintf('%s(%s)', gettype($location_iDataTypeLocation_Type_ReferenceItem), var_export($location_iDataTypeLocation_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType[] $location_Type_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Type_Reference(array $location_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Type_ReferenceArrayErrorMessage = self::validateLocation_Type_ReferenceForArrayConstraintsFromSetLocation_Type_Reference($location_Type_Reference))) {
            throw new \InvalidArgumentException($location_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Type_Reference = $location_Type_Reference;
        return $this;
    }
    /**
     * Add item to Location_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function addToLocation_Type_Reference(\WorkdayWsdl\\StructType\Location_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Location_Attribute_Reference value
     * @return \WorkdayWsdl\\StructType\Location_AttributeObjectType[]|null
     */
    public function getLocation_Attribute_Reference()
    {
        return $this->Location_Attribute_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Attribute_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Attribute_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Attribute_ReferenceForArrayConstraintsFromSetLocation_Attribute_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_iDataTypeLocation_Attribute_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_iDataTypeLocation_Attribute_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_AttributeObjectType) {
                $invalidValues[] = is_object($location_iDataTypeLocation_Attribute_ReferenceItem) ? get_class($location_iDataTypeLocation_Attribute_ReferenceItem) : sprintf('%s(%s)', gettype($location_iDataTypeLocation_Attribute_ReferenceItem), var_export($location_iDataTypeLocation_Attribute_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Attribute_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_AttributeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Attribute_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType[] $location_Attribute_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Attribute_Reference(array $location_Attribute_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Attribute_ReferenceArrayErrorMessage = self::validateLocation_Attribute_ReferenceForArrayConstraintsFromSetLocation_Attribute_Reference($location_Attribute_Reference))) {
            throw new \InvalidArgumentException($location_Attribute_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Attribute_Reference = $location_Attribute_Reference;
        return $this;
    }
    /**
     * Add item to Location_Attribute_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function addToLocation_Attribute_Reference(\WorkdayWsdl\\StructType\Location_AttributeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_AttributeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Attribute_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_AttributeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Attribute_Reference[] = $item;
        return $this;
    }
    /**
     * Get Superior_Location_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType|null
     */
    public function getSuperior_Location_Reference()
    {
        return $this->Superior_Location_Reference;
    }
    /**
     * Set Superior_Location_Reference value
     * @param \WorkdayWsdl\\StructType\LocationObjectType $superior_Location_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setSuperior_Location_Reference(\WorkdayWsdl\\StructType\LocationObjectType $superior_Location_Reference = null)
    {
        $this->Superior_Location_Reference = $superior_Location_Reference;
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
     * @return \WorkdayWsdl\\StructType\Location_iDataType
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
     * Get Latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param float $latitude
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($latitude) && mb_strlen(mb_substr($latitude, mb_strpos($latitude, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($latitude, true), mb_strlen(mb_substr($latitude, mb_strpos($latitude, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(8)
        if (!is_null($latitude) && mb_strlen(preg_replace('/(\D)/', '', $latitude)) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 8 digits, "%d" given', var_export($latitude, true), mb_strlen(preg_replace('/(\D)/', '', $latitude))), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param float $longitude
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($longitude) && mb_strlen(mb_substr($longitude, mb_strpos($longitude, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($longitude, true), mb_strlen(mb_substr($longitude, mb_strpos($longitude, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(9)
        if (!is_null($longitude) && mb_strlen(preg_replace('/(\D)/', '', $longitude)) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 9 digits, "%d" given', var_export($longitude, true), mb_strlen(preg_replace('/(\D)/', '', $longitude))), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get Altitude value
     * @return float|null
     */
    public function getAltitude()
    {
        return $this->Altitude;
    }
    /**
     * Set Altitude value
     * @param float $altitude
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setAltitude($altitude = null)
    {
        // validation for constraint: float
        if (!is_null($altitude) && !(is_float($altitude) || is_numeric($altitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($altitude, true), gettype($altitude)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($altitude) && mb_strlen(mb_substr($altitude, mb_strpos($altitude, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($altitude, true), mb_strlen(mb_substr($altitude, mb_strpos($altitude, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($altitude) && mb_strlen(preg_replace('/(\D)/', '', $altitude)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($altitude, true), mb_strlen(preg_replace('/(\D)/', '', $altitude))), __LINE__);
        }
        $this->Altitude = $altitude;
        return $this;
    }
    /**
     * Get Time_Profile_Reference value
     * @return \WorkdayWsdl\\StructType\Time_ProfileObjectType|null
     */
    public function getTime_Profile_Reference()
    {
        return $this->Time_Profile_Reference;
    }
    /**
     * Set Time_Profile_Reference value
     * @param \WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setTime_Profile_Reference(\WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference = null)
    {
        $this->Time_Profile_Reference = $time_Profile_Reference;
        return $this;
    }
    /**
     * Get Locale_Reference value
     * @return \WorkdayWsdl\\StructType\LocaleObjectType|null
     */
    public function getLocale_Reference()
    {
        return $this->Locale_Reference;
    }
    /**
     * Set Locale_Reference value
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocale_Reference(\WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference = null)
    {
        $this->Locale_Reference = $locale_Reference;
        return $this;
    }
    /**
     * Get Display_Language_Reference value
     * @return \WorkdayWsdl\\StructType\User_LanguageObjectType|null
     */
    public function getDisplay_Language_Reference()
    {
        return $this->Display_Language_Reference;
    }
    /**
     * Set Display_Language_Reference value
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setDisplay_Language_Reference(\WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference = null)
    {
        $this->Display_Language_Reference = $display_Language_Reference;
        return $this;
    }
    /**
     * Get Time_Zone_Reference value
     * @return \WorkdayWsdl\\StructType\Time_ZoneObjectType|null
     */
    public function getTime_Zone_Reference()
    {
        return $this->Time_Zone_Reference;
    }
    /**
     * Set Time_Zone_Reference value
     * @param \WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setTime_Zone_Reference(\WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference = null)
    {
        $this->Time_Zone_Reference = $time_Zone_Reference;
        return $this;
    }
    /**
     * Get Default_Currency_Reference value
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getDefault_Currency_Reference()
    {
        return $this->Default_Currency_Reference;
    }
    /**
     * Set Default_Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setDefault_Currency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference = null)
    {
        $this->Default_Currency_Reference = $default_Currency_Reference;
        return $this;
    }
    /**
     * Get External_Name value
     * @return string|null
     */
    public function getExternal_Name()
    {
        return $this->External_Name;
    }
    /**
     * Set External_Name value
     * @param string $external_Name
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setExternal_Name($external_Name = null)
    {
        // validation for constraint: string
        if (!is_null($external_Name) && !is_string($external_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_Name, true), gettype($external_Name)), __LINE__);
        }
        $this->External_Name = $external_Name;
        return $this;
    }
    /**
     * Get Default_Job_Posting_Location_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType|null
     */
    public function getDefault_Job_Posting_Location_Reference()
    {
        return $this->Default_Job_Posting_Location_Reference;
    }
    /**
     * Set Default_Job_Posting_Location_Reference value
     * @param \WorkdayWsdl\\StructType\LocationObjectType $default_Job_Posting_Location_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setDefault_Job_Posting_Location_Reference(\WorkdayWsdl\\StructType\LocationObjectType $default_Job_Posting_Location_Reference = null)
    {
        $this->Default_Job_Posting_Location_Reference = $default_Job_Posting_Location_Reference;
        return $this;
    }
    /**
     * Get Trade_Name value
     * @return string|null
     */
    public function getTrade_Name()
    {
        return $this->Trade_Name;
    }
    /**
     * Set Trade_Name value
     * @param string $trade_Name
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setTrade_Name($trade_Name = null)
    {
        // validation for constraint: string
        if (!is_null($trade_Name) && !is_string($trade_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trade_Name, true), gettype($trade_Name)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($trade_Name) && mb_strlen($trade_Name) > 35) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen($trade_Name)), __LINE__);
        }
        $this->Trade_Name = $trade_Name;
        return $this;
    }
    /**
     * Get Worksite_ID_Code value
     * @return string|null
     */
    public function getWorksite_ID_Code()
    {
        return $this->Worksite_ID_Code;
    }
    /**
     * Set Worksite_ID_Code value
     * @param string $worksite_ID_Code
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setWorksite_ID_Code($worksite_ID_Code = null)
    {
        // validation for constraint: string
        if (!is_null($worksite_ID_Code) && !is_string($worksite_ID_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worksite_ID_Code, true), gettype($worksite_ID_Code)), __LINE__);
        }
        // validation for constraint: maxLength(21)
        if (!is_null($worksite_ID_Code) && mb_strlen($worksite_ID_Code) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 21', mb_strlen($worksite_ID_Code)), __LINE__);
        }
        $this->Worksite_ID_Code = $worksite_ID_Code;
        return $this;
    }
    /**
     * Get Global_Location_Number value
     * @return string|null
     */
    public function getGlobal_Location_Number()
    {
        return $this->Global_Location_Number;
    }
    /**
     * Set Global_Location_Number value
     * @param string $global_Location_Number
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setGlobal_Location_Number($global_Location_Number = null)
    {
        // validation for constraint: string
        if (!is_null($global_Location_Number) && !is_string($global_Location_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($global_Location_Number, true), gettype($global_Location_Number)), __LINE__);
        }
        $this->Global_Location_Number = $global_Location_Number;
        return $this;
    }
    /**
     * Get Location_Identifier value
     * @return string|null
     */
    public function getLocation_Identifier()
    {
        return $this->Location_Identifier;
    }
    /**
     * Set Location_Identifier value
     * @param string $location_Identifier
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Identifier($location_Identifier = null)
    {
        // validation for constraint: string
        if (!is_null($location_Identifier) && !is_string($location_Identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_Identifier, true), gettype($location_Identifier)), __LINE__);
        }
        $this->Location_Identifier = $location_Identifier;
        return $this;
    }
    /**
     * Get Default_Ship_To_Location_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType|null
     */
    public function getDefault_Ship_To_Location_Reference()
    {
        return $this->{'Default_Ship-To_Location_Reference'};
    }
    /**
     * Set Default_Ship_To_Location_Reference value
     * @param \WorkdayWsdl\\StructType\LocationObjectType $default_Ship_To_Location_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setDefault_Ship_To_Location_Reference(\WorkdayWsdl\\StructType\LocationObjectType $default_Ship_To_Location_Reference = null)
    {
        $this->Default_Ship_To_Location_Reference = $this->{'Default_Ship-To_Location_Reference'} = $default_Ship_To_Location_Reference;
        return $this;
    }
    /**
     * Get Associate_Deliver_To_Location_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType[]|null
     */
    public function getAssociate_Deliver_To_Location_Reference()
    {
        return $this->{'Associate_Deliver-To_Location_Reference'};
    }
    /**
     * This method is responsible for validating the values passed to the setAssociate_Deliver_To_Location_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociate_Deliver_To_Location_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociate_Deliver_To_Location_ReferenceForArrayConstraintsFromSetAssociate_Deliver_To_Location_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_iDataTypeAssociate_Deliver_To_Location_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_iDataTypeAssociate_Deliver_To_Location_ReferenceItem instanceof \WorkdayWsdl\\StructType\LocationObjectType) {
                $invalidValues[] = is_object($location_iDataTypeAssociate_Deliver_To_Location_ReferenceItem) ? get_class($location_iDataTypeAssociate_Deliver_To_Location_ReferenceItem) : sprintf('%s(%s)', gettype($location_iDataTypeAssociate_Deliver_To_Location_ReferenceItem), var_export($location_iDataTypeAssociate_Deliver_To_Location_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Associate_Deliver_To_Location_Reference property can only contain items of type \WorkdayWsdl\\StructType\LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Associate_Deliver_To_Location_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\LocationObjectType[] $associate_Deliver_To_Location_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setAssociate_Deliver_To_Location_Reference(array $associate_Deliver_To_Location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($associate_Deliver_To_Location_ReferenceArrayErrorMessage = self::validateAssociate_Deliver_To_Location_ReferenceForArrayConstraintsFromSetAssociate_Deliver_To_Location_Reference($associate_Deliver_To_Location_Reference))) {
            throw new \InvalidArgumentException($associate_Deliver_To_Location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Associate_Deliver_To_Location_Reference = $this->{'Associate_Deliver-To_Location_Reference'} = $associate_Deliver_To_Location_Reference;
        return $this;
    }
    /**
     * Add item to Associate_Deliver_To_Location_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\LocationObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function addToAssociate_Deliver_To_Location_Reference(\WorkdayWsdl\\StructType\LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Associate_Deliver_To_Location_Reference property can only contain items of type \WorkdayWsdl\\StructType\LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Associate_Deliver_To_Location_Reference[] = $this->{'Associate_Deliver-To_Location_Reference'}[] = $item;
        return $this;
    }
    /**
     * Get Instructional_Site_Data value
     * @return \WorkdayWsdl\\StructType\Location_Instructional_Site_DataType|null
     */
    public function getInstructional_Site_Data()
    {
        return $this->Instructional_Site_Data;
    }
    /**
     * Set Instructional_Site_Data value
     * @param \WorkdayWsdl\\StructType\Location_Instructional_Site_DataType $instructional_Site_Data
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setInstructional_Site_Data(\WorkdayWsdl\\StructType\Location_Instructional_Site_DataType $instructional_Site_Data = null)
    {
        $this->Instructional_Site_Data = $instructional_Site_Data;
        return $this;
    }
    /**
     * Get Student_Housing_Assignment_Data value
     * @return \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType|null
     */
    public function getStudent_Housing_Assignment_Data()
    {
        return $this->Student_Housing_Assignment_Data;
    }
    /**
     * Set Student_Housing_Assignment_Data value
     * @param \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType $student_Housing_Assignment_Data
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setStudent_Housing_Assignment_Data(\WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType $student_Housing_Assignment_Data = null)
    {
        $this->Student_Housing_Assignment_Data = $student_Housing_Assignment_Data;
        return $this;
    }
    /**
     * Get Location_Training_Room_Data value
     * @return \WorkdayWsdl\\StructType\Location_Training_Room_DataType|null
     */
    public function getLocation_Training_Room_Data()
    {
        return $this->Location_Training_Room_Data;
    }
    /**
     * Set Location_Training_Room_Data value
     * @param \WorkdayWsdl\\StructType\Location_Training_Room_DataType $location_Training_Room_Data
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Training_Room_Data(\WorkdayWsdl\\StructType\Location_Training_Room_DataType $location_Training_Room_Data = null)
    {
        $this->Location_Training_Room_Data = $location_Training_Room_Data;
        return $this;
    }
    /**
     * Get Contact_Data value
     * @return \WorkdayWsdl\\StructType\Contact_Information_DataType|null
     */
    public function getContact_Data()
    {
        return $this->Contact_Data;
    }
    /**
     * Set Contact_Data value
     * @param \WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Data
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setContact_Data(\WorkdayWsdl\\StructType\Contact_Information_DataType $contact_Data = null)
    {
        $this->Contact_Data = $contact_Data;
        return $this;
    }
    /**
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Location_Hierarchy_Reference value
     * @return \WorkdayWsdl\\StructType\Location_HierarchyObjectType[]|null
     */
    public function getLocation_Hierarchy_Reference()
    {
        return $this->Location_Hierarchy_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Hierarchy_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Hierarchy_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Hierarchy_ReferenceForArrayConstraintsFromSetLocation_Hierarchy_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_iDataTypeLocation_Hierarchy_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_iDataTypeLocation_Hierarchy_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_HierarchyObjectType) {
                $invalidValues[] = is_object($location_iDataTypeLocation_Hierarchy_ReferenceItem) ? get_class($location_iDataTypeLocation_Hierarchy_ReferenceItem) : sprintf('%s(%s)', gettype($location_iDataTypeLocation_Hierarchy_ReferenceItem), var_export($location_iDataTypeLocation_Hierarchy_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Hierarchy_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_HierarchyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Hierarchy_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_HierarchyObjectType[] $location_Hierarchy_Reference
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setLocation_Hierarchy_Reference(array $location_Hierarchy_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Hierarchy_ReferenceArrayErrorMessage = self::validateLocation_Hierarchy_ReferenceForArrayConstraintsFromSetLocation_Hierarchy_Reference($location_Hierarchy_Reference))) {
            throw new \InvalidArgumentException($location_Hierarchy_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Hierarchy_Reference = $location_Hierarchy_Reference;
        return $this;
    }
    /**
     * Add item to Location_Hierarchy_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_HierarchyObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function addToLocation_Hierarchy_Reference(\WorkdayWsdl\\StructType\Location_HierarchyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_HierarchyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Hierarchy_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_HierarchyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Hierarchy_Reference[] = $item;
        return $this;
    }
    /**
     * Get Integration_Field_Override_Data value
     * @return \WorkdayWsdl\\StructType\Document_Field_Result_DataType[]|null
     */
    public function getIntegration_Field_Override_Data()
    {
        return $this->Integration_Field_Override_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setIntegration_Field_Override_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIntegration_Field_Override_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntegration_Field_Override_DataForArrayConstraintsFromSetIntegration_Field_Override_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_iDataTypeIntegration_Field_Override_DataItem) {
            // validation for constraint: itemType
            if (!$location_iDataTypeIntegration_Field_Override_DataItem instanceof \WorkdayWsdl\\StructType\Document_Field_Result_DataType) {
                $invalidValues[] = is_object($location_iDataTypeIntegration_Field_Override_DataItem) ? get_class($location_iDataTypeIntegration_Field_Override_DataItem) : sprintf('%s(%s)', gettype($location_iDataTypeIntegration_Field_Override_DataItem), var_export($location_iDataTypeIntegration_Field_Override_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Integration_Field_Override_Data property can only contain items of type \WorkdayWsdl\\StructType\Document_Field_Result_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function setIntegration_Field_Override_Data(array $integration_Field_Override_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($integration_Field_Override_DataArrayErrorMessage = self::validateIntegration_Field_Override_DataForArrayConstraintsFromSetIntegration_Field_Override_Data($integration_Field_Override_Data))) {
            throw new \InvalidArgumentException($integration_Field_Override_DataArrayErrorMessage, __LINE__);
        }
        $this->Integration_Field_Override_Data = $integration_Field_Override_Data;
        return $this;
    }
    /**
     * Add item to Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Document_Field_Result_DataType $item
     * @return \WorkdayWsdl\\StructType\Location_iDataType
     */
    public function addToIntegration_Field_Override_Data(\WorkdayWsdl\\StructType\Document_Field_Result_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Document_Field_Result_DataType) {
            throw new \InvalidArgumentException(sprintf('The Integration_Field_Override_Data property can only contain items of type \WorkdayWsdl\\StructType\Document_Field_Result_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Integration_Field_Override_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_iDataType
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
