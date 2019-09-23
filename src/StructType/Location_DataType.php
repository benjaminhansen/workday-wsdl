<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Usage Type must be valid for Location. | Location Data: ID subelements of Integration ID Data cannot reference multiple Locations. | Location Type is required when creating a new Location. | Time Profile is required for a location
 * whose usages include Business Site. | Location Name is required when creating a new Location. | Encapsulating element containing all Location data.
 * @subpackage Structs
 */
class Location_DataType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: The unique location ID. The organization, position and hire tabs will reference location ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Location_Name
     * Meta information extracted from the WSDL
     * - documentation: The unique location name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_Name;
    /**
     * The Time_Profile_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: The time profile associated with the location. This ties to the time profile description that has been set up.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType
     */
    public $Time_Profile_Reference_Data;
    /**
     * The Location_Type_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: The location type associated with the location that ties to the usage that has been setup.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Type_Reference_DataType[]
     */
    public $Location_Type_Reference_Data;
    /**
     * The Default_Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The default currency for the location. This value is either derived from the currency of the location country (using the primary address), or the default currency overridden by the location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Default_Currency_Reference;
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
     * The Contact_Data
     * Meta information extracted from the WSDL
     * - documentation: Contact Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contact_DataType
     */
    public $Contact_Data;
    /**
     * The Container_Organization_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: Container Organization Reference Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType[]
     */
    public $Container_Organization_Reference_Data;
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
     * Constructor method for Location_DataType
     * @uses Location_DataType::setIntegration_ID_Data()
     * @uses Location_DataType::setLocation_Name()
     * @uses Location_DataType::setTime_Profile_Reference_Data()
     * @uses Location_DataType::setLocation_Type_Reference_Data()
     * @uses Location_DataType::setDefault_Currency_Reference()
     * @uses Location_DataType::setTrade_Name()
     * @uses Location_DataType::setWorksite_ID_Code()
     * @uses Location_DataType::setContact_Data()
     * @uses Location_DataType::setContainer_Organization_Reference_Data()
     * @uses Location_DataType::setInactive()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param string $location_Name
     * @param \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType $time_Profile_Reference_Data
     * @param \WorkdayWsdl\\StructType\Location_Type_Reference_DataType[] $location_Type_Reference_Data
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference
     * @param string $trade_Name
     * @param string $worksite_ID_Code
     * @param \WorkdayWsdl\\StructType\Contact_DataType $contact_Data
     * @param \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType[] $container_Organization_Reference_Data
     * @param bool $inactive
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, $location_Name = null, \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType $time_Profile_Reference_Data = null, array $location_Type_Reference_Data = array(), \WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference = null, $trade_Name = null, $worksite_ID_Code = null, \WorkdayWsdl\\StructType\Contact_DataType $contact_Data = null, array $container_Organization_Reference_Data = array(), $inactive = null)
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setLocation_Name($location_Name)
            ->setTime_Profile_Reference_Data($time_Profile_Reference_Data)
            ->setLocation_Type_Reference_Data($location_Type_Reference_Data)
            ->setDefault_Currency_Reference($default_Currency_Reference)
            ->setTrade_Name($trade_Name)
            ->setWorksite_ID_Code($worksite_ID_Code)
            ->setContact_Data($contact_Data)
            ->setContainer_Organization_Reference_Data($container_Organization_Reference_Data)
            ->setInactive($inactive);
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
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
     * Get Time_Profile_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType|null
     */
    public function getTime_Profile_Reference_Data()
    {
        return $this->Time_Profile_Reference_Data;
    }
    /**
     * Set Time_Profile_Reference_Data value
     * @param \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType $time_Profile_Reference_Data
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function setTime_Profile_Reference_Data(\WorkdayWsdl\\StructType\Time_Profile_Reference_DataType $time_Profile_Reference_Data = null)
    {
        $this->Time_Profile_Reference_Data = $time_Profile_Reference_Data;
        return $this;
    }
    /**
     * Get Location_Type_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Location_Type_Reference_DataType[]|null
     */
    public function getLocation_Type_Reference_Data()
    {
        return $this->Location_Type_Reference_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Type_Reference_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Type_Reference_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Type_Reference_DataForArrayConstraintsFromSetLocation_Type_Reference_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_DataTypeLocation_Type_Reference_DataItem) {
            // validation for constraint: itemType
            if (!$location_DataTypeLocation_Type_Reference_DataItem instanceof \WorkdayWsdl\\StructType\Location_Type_Reference_DataType) {
                $invalidValues[] = is_object($location_DataTypeLocation_Type_Reference_DataItem) ? get_class($location_DataTypeLocation_Type_Reference_DataItem) : sprintf('%s(%s)', gettype($location_DataTypeLocation_Type_Reference_DataItem), var_export($location_DataTypeLocation_Type_Reference_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Type_Reference_Data property can only contain items of type \WorkdayWsdl\\StructType\Location_Type_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Type_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Type_Reference_DataType[] $location_Type_Reference_Data
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function setLocation_Type_Reference_Data(array $location_Type_Reference_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Type_Reference_DataArrayErrorMessage = self::validateLocation_Type_Reference_DataForArrayConstraintsFromSetLocation_Type_Reference_Data($location_Type_Reference_Data))) {
            throw new \InvalidArgumentException($location_Type_Reference_DataArrayErrorMessage, __LINE__);
        }
        $this->Location_Type_Reference_Data = $location_Type_Reference_Data;
        return $this;
    }
    /**
     * Add item to Location_Type_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Type_Reference_DataType $item
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function addToLocation_Type_Reference_Data(\WorkdayWsdl\\StructType\Location_Type_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_Type_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Location_Type_Reference_Data property can only contain items of type \WorkdayWsdl\\StructType\Location_Type_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Type_Reference_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function setDefault_Currency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $default_Currency_Reference = null)
    {
        $this->Default_Currency_Reference = $default_Currency_Reference;
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
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
     * Get Contact_Data value
     * @return \WorkdayWsdl\\StructType\Contact_DataType|null
     */
    public function getContact_Data()
    {
        return $this->Contact_Data;
    }
    /**
     * Set Contact_Data value
     * @param \WorkdayWsdl\\StructType\Contact_DataType $contact_Data
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function setContact_Data(\WorkdayWsdl\\StructType\Contact_DataType $contact_Data = null)
    {
        $this->Contact_Data = $contact_Data;
        return $this;
    }
    /**
     * Get Container_Organization_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType[]|null
     */
    public function getContainer_Organization_Reference_Data()
    {
        return $this->Container_Organization_Reference_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setContainer_Organization_Reference_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContainer_Organization_Reference_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContainer_Organization_Reference_DataForArrayConstraintsFromSetContainer_Organization_Reference_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_DataTypeContainer_Organization_Reference_DataItem) {
            // validation for constraint: itemType
            if (!$location_DataTypeContainer_Organization_Reference_DataItem instanceof \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType) {
                $invalidValues[] = is_object($location_DataTypeContainer_Organization_Reference_DataItem) ? get_class($location_DataTypeContainer_Organization_Reference_DataItem) : sprintf('%s(%s)', gettype($location_DataTypeContainer_Organization_Reference_DataItem), var_export($location_DataTypeContainer_Organization_Reference_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Container_Organization_Reference_Data property can only contain items of type \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Container_Organization_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType[] $container_Organization_Reference_Data
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function setContainer_Organization_Reference_Data(array $container_Organization_Reference_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($container_Organization_Reference_DataArrayErrorMessage = self::validateContainer_Organization_Reference_DataForArrayConstraintsFromSetContainer_Organization_Reference_Data($container_Organization_Reference_Data))) {
            throw new \InvalidArgumentException($container_Organization_Reference_DataArrayErrorMessage, __LINE__);
        }
        $this->Container_Organization_Reference_Data = $container_Organization_Reference_Data;
        return $this;
    }
    /**
     * Add item to Container_Organization_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType $item
     * @return \WorkdayWsdl\\StructType\Location_DataType
     */
    public function addToContainer_Organization_Reference_Data(\WorkdayWsdl\\StructType\Container_Organization_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Container_Organization_Reference_Data property can only contain items of type \WorkdayWsdl\\StructType\Container_Organization_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Container_Organization_Reference_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
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
     * @return \WorkdayWsdl\\StructType\Location_DataType
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
