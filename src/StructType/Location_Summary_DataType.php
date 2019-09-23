<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing a brief summary of Location data.
 * @subpackage Structs
 */
class Location_Summary_DataType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to a location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the location.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Location_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type(s) of a location.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_TypeObjectType[]
     */
    public $Location_Type_Reference;
    /**
     * The Local_Reference
     * Meta information extracted from the WSDL
     * - documentation: The locale for the location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocaleObjectType
     */
    public $Local_Reference;
    /**
     * The Display_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: The default user language for this location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_LanguageObjectType
     */
    public $Display_Language_Reference;
    /**
     * The Time_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: The time profile for the location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Time_ProfileObjectType
     */
    public $Time_Profile_Reference;
    /**
     * The Scheduled_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: Scheduled Weekly Hours for Position. | The scheduled weekly hours from the location's time profile. | Scheduled Weekly Hours for the former worker.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 14
     * @var float
     */
    public $Scheduled_Weekly_Hours;
    /**
     * The Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Address information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Address_Information_DataType[]
     */
    public $Address_Data;
    /**
     * Constructor method for Location_Summary_DataType
     * @uses Location_Summary_DataType::setLocation_Reference()
     * @uses Location_Summary_DataType::setName()
     * @uses Location_Summary_DataType::setLocation_Type_Reference()
     * @uses Location_Summary_DataType::setLocal_Reference()
     * @uses Location_Summary_DataType::setDisplay_Language_Reference()
     * @uses Location_Summary_DataType::setTime_Profile_Reference()
     * @uses Location_Summary_DataType::setScheduled_Weekly_Hours()
     * @uses Location_Summary_DataType::setAddress_Data()
     * @param \WorkdayWsdl\\StructType\LocationObjectType $location_Reference
     * @param string $name
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType[] $location_Type_Reference
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $local_Reference
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference
     * @param \WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference
     * @param float $scheduled_Weekly_Hours
     * @param \WorkdayWsdl\\StructType\Address_Information_DataType[] $address_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\LocationObjectType $location_Reference = null, $name = null, array $location_Type_Reference = array(), \WorkdayWsdl\\StructType\LocaleObjectType $local_Reference = null, \WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference = null, \WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference = null, $scheduled_Weekly_Hours = null, array $address_Data = array())
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setName($name)
            ->setLocation_Type_Reference($location_Type_Reference)
            ->setLocal_Reference($local_Reference)
            ->setDisplay_Language_Reference($display_Language_Reference)
            ->setTime_Profile_Reference($time_Profile_Reference)
            ->setScheduled_Weekly_Hours($scheduled_Weekly_Hours)
            ->setAddress_Data($address_Data);
    }
    /**
     * Get Location_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \WorkdayWsdl\\StructType\LocationObjectType $location_Reference
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setLocation_Reference(\WorkdayWsdl\\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
        foreach ($values as $location_Summary_DataTypeLocation_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Summary_DataTypeLocation_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_TypeObjectType) {
                $invalidValues[] = is_object($location_Summary_DataTypeLocation_Type_ReferenceItem) ? get_class($location_Summary_DataTypeLocation_Type_ReferenceItem) : sprintf('%s(%s)', gettype($location_Summary_DataTypeLocation_Type_ReferenceItem), var_export($location_Summary_DataTypeLocation_Type_ReferenceItem, true));
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
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
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
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
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
     * Get Local_Reference value
     * @return \WorkdayWsdl\\StructType\LocaleObjectType|null
     */
    public function getLocal_Reference()
    {
        return $this->Local_Reference;
    }
    /**
     * Set Local_Reference value
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $local_Reference
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setLocal_Reference(\WorkdayWsdl\\StructType\LocaleObjectType $local_Reference = null)
    {
        $this->Local_Reference = $local_Reference;
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
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setDisplay_Language_Reference(\WorkdayWsdl\\StructType\User_LanguageObjectType $display_Language_Reference = null)
    {
        $this->Display_Language_Reference = $display_Language_Reference;
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
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setTime_Profile_Reference(\WorkdayWsdl\\StructType\Time_ProfileObjectType $time_Profile_Reference = null)
    {
        $this->Time_Profile_Reference = $time_Profile_Reference;
        return $this;
    }
    /**
     * Get Scheduled_Weekly_Hours value
     * @return float|null
     */
    public function getScheduled_Weekly_Hours()
    {
        return $this->Scheduled_Weekly_Hours;
    }
    /**
     * Set Scheduled_Weekly_Hours value
     * @param float $scheduled_Weekly_Hours
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setScheduled_Weekly_Hours($scheduled_Weekly_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($scheduled_Weekly_Hours) && !(is_float($scheduled_Weekly_Hours) || is_numeric($scheduled_Weekly_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($scheduled_Weekly_Hours, true), gettype($scheduled_Weekly_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($scheduled_Weekly_Hours) && mb_strlen(mb_substr($scheduled_Weekly_Hours, mb_strpos($scheduled_Weekly_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($scheduled_Weekly_Hours, true), mb_strlen(mb_substr($scheduled_Weekly_Hours, mb_strpos($scheduled_Weekly_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(14)
        if (!is_null($scheduled_Weekly_Hours) && mb_strlen(preg_replace('/(\D)/', '', $scheduled_Weekly_Hours)) > 14) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 14 digits, "%d" given', var_export($scheduled_Weekly_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $scheduled_Weekly_Hours))), __LINE__);
        }
        $this->Scheduled_Weekly_Hours = $scheduled_Weekly_Hours;
        return $this;
    }
    /**
     * Get Address_Data value
     * @return \WorkdayWsdl\\StructType\Address_Information_DataType[]|null
     */
    public function getAddress_Data()
    {
        return $this->Address_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddress_DataForArrayConstraintsFromSetAddress_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Summary_DataTypeAddress_DataItem) {
            // validation for constraint: itemType
            if (!$location_Summary_DataTypeAddress_DataItem instanceof \WorkdayWsdl\\StructType\Address_Information_DataType) {
                $invalidValues[] = is_object($location_Summary_DataTypeAddress_DataItem) ? get_class($location_Summary_DataTypeAddress_DataItem) : sprintf('%s(%s)', gettype($location_Summary_DataTypeAddress_DataItem), var_export($location_Summary_DataTypeAddress_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_Information_DataType[] $address_Data
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function setAddress_Data(array $address_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($address_DataArrayErrorMessage = self::validateAddress_DataForArrayConstraintsFromSetAddress_Data($address_Data))) {
            throw new \InvalidArgumentException($address_DataArrayErrorMessage, __LINE__);
        }
        $this->Address_Data = $address_Data;
        return $this;
    }
    /**
     * Add item to Address_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Address_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public function addToAddress_Data(\WorkdayWsdl\\StructType\Address_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Address_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Data property can only contain items of type \WorkdayWsdl\\StructType\Address_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType
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
