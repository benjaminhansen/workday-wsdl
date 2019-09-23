<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Address_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: You can't change a primary address to an additional address or an additional address to a primary address. | Address Reference must match an existing (and not deleted) address in use by the person subject of this request. | Number of
 * Days cannot be greater than 7. | Number of Days is not allowed for the country specified. | Days of the Week can only be set on an address marked Work From Home | Number of Days can only be set on an address marked Work From Home | Days of the Week
 * is not allowed for the country specified. | Work From Home Fields are only valid for Workers | Address Data and Usage Data elements are required unless address is being deleted. | Address Reference is required when deleting an address | International
 * Assignment is only valid for Non-Primary Home Addresses | You cannot specify the same usage type more than once for a contact instance. | Usage Type and Use For combination must be valid for Address. | Encapsulating element for updating a single
 * address.
 * @subpackage Structs
 */
class Person_Address_DataType extends AbstractStructBase
{
    /**
     * The Address_Data
     * Meta information extracted from the WSDL
     * - documentation: Element encapsulating the core address information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Address_Core_DataType[]
     */
    public $Address_Data;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Communication_Method_Usage_Information_DataType[]
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
     * The Days_of_the_Week_Reference
     * Meta information extracted from the WSDL
     * - documentation: The days of the week this address will be used as a Work from Home address
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Day_of_the_WeekObjectType[]
     */
    public $Days_of_the_Week_Reference;
    /**
     * The Address_Reference
     * Meta information extracted from the WSDL
     * - documentation: The address Reference ID.
     * - minOccurs: 0
     * @var \StructType\Address_ReferenceObjectType
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
     * The Address_Format_Type
     * Meta information extracted from the WSDL
     * - documentation: The format type of the address.
     * @var string
     */
    public $Address_Format_Type;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced address. If this flag is set, the Reference ID field becomes required, and all other address fields that would otherwise be required will be optional and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective date of address.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Person_Address_DataType
     * @uses Person_Address_DataType::setAddress_Data()
     * @uses Person_Address_DataType::setUsage_Data()
     * @uses Person_Address_DataType::setNumber_of_Days()
     * @uses Person_Address_DataType::setDays_of_the_Week_Reference()
     * @uses Person_Address_DataType::setAddress_Reference()
     * @uses Person_Address_DataType::setAddress_ID()
     * @uses Person_Address_DataType::setAddress_Format_Type()
     * @uses Person_Address_DataType::setDelete()
     * @uses Person_Address_DataType::setEffective_Date()
     * @param \StructType\Address_Core_DataType[] $address_Data
     * @param \StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param float $number_of_Days
     * @param \StructType\Day_of_the_WeekObjectType[] $days_of_the_Week_Reference
     * @param \StructType\Address_ReferenceObjectType $address_Reference
     * @param string $address_ID
     * @param string $address_Format_Type
     * @param bool $delete
     * @param string $effective_Date
     */
    public function __construct(array $address_Data = array(), array $usage_Data = array(), $number_of_Days = null, array $days_of_the_Week_Reference = array(), \StructType\Address_ReferenceObjectType $address_Reference = null, $address_ID = null, $address_Format_Type = null, $delete = null, $effective_Date = null)
    {
        $this
            ->setAddress_Data($address_Data)
            ->setUsage_Data($usage_Data)
            ->setNumber_of_Days($number_of_Days)
            ->setDays_of_the_Week_Reference($days_of_the_Week_Reference)
            ->setAddress_Reference($address_Reference)
            ->setAddress_ID($address_ID)
            ->setAddress_Format_Type($address_Format_Type)
            ->setDelete($delete)
            ->setEffective_Date($effective_Date);
    }
    /**
     * Get Address_Data value
     * @return \StructType\Address_Core_DataType[]|null
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
        foreach ($values as $person_Address_DataTypeAddress_DataItem) {
            // validation for constraint: itemType
            if (!$person_Address_DataTypeAddress_DataItem instanceof \StructType\Address_Core_DataType) {
                $invalidValues[] = is_object($person_Address_DataTypeAddress_DataItem) ? get_class($person_Address_DataTypeAddress_DataItem) : sprintf('%s(%s)', gettype($person_Address_DataTypeAddress_DataItem), var_export($person_Address_DataTypeAddress_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address_Data property can only contain items of type \StructType\Address_Core_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Address_Core_DataType[] $address_Data
     * @return \StructType\Person_Address_DataType
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
     * @param \StructType\Address_Core_DataType $item
     * @return \StructType\Person_Address_DataType
     */
    public function addToAddress_Data(\StructType\Address_Core_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Address_Core_DataType) {
            throw new \InvalidArgumentException(sprintf('The Address_Data property can only contain items of type \StructType\Address_Core_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Address_Data[] = $item;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \StructType\Communication_Method_Usage_Information_DataType[]|null
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
        foreach ($values as $person_Address_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$person_Address_DataTypeUsage_DataItem instanceof \StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($person_Address_DataTypeUsage_DataItem) ? get_class($person_Address_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($person_Address_DataTypeUsage_DataItem), var_export($person_Address_DataTypeUsage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage_Data property can only contain items of type \StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Usage_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @return \StructType\Person_Address_DataType
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
     * @param \StructType\Communication_Method_Usage_Information_DataType $item
     * @return \StructType\Person_Address_DataType
     */
    public function addToUsage_Data(\StructType\Communication_Method_Usage_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Communication_Method_Usage_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Usage_Data property can only contain items of type \StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \StructType\Person_Address_DataType
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
     * Get Days_of_the_Week_Reference value
     * @return \StructType\Day_of_the_WeekObjectType[]|null
     */
    public function getDays_of_the_Week_Reference()
    {
        return $this->Days_of_the_Week_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDays_of_the_Week_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDays_of_the_Week_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDays_of_the_Week_ReferenceForArrayConstraintsFromSetDays_of_the_Week_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Address_DataTypeDays_of_the_Week_ReferenceItem) {
            // validation for constraint: itemType
            if (!$person_Address_DataTypeDays_of_the_Week_ReferenceItem instanceof \StructType\Day_of_the_WeekObjectType) {
                $invalidValues[] = is_object($person_Address_DataTypeDays_of_the_Week_ReferenceItem) ? get_class($person_Address_DataTypeDays_of_the_Week_ReferenceItem) : sprintf('%s(%s)', gettype($person_Address_DataTypeDays_of_the_Week_ReferenceItem), var_export($person_Address_DataTypeDays_of_the_Week_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Days_of_the_Week_Reference property can only contain items of type \StructType\Day_of_the_WeekObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Days_of_the_Week_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Day_of_the_WeekObjectType[] $days_of_the_Week_Reference
     * @return \StructType\Person_Address_DataType
     */
    public function setDays_of_the_Week_Reference(array $days_of_the_Week_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($days_of_the_Week_ReferenceArrayErrorMessage = self::validateDays_of_the_Week_ReferenceForArrayConstraintsFromSetDays_of_the_Week_Reference($days_of_the_Week_Reference))) {
            throw new \InvalidArgumentException($days_of_the_Week_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Days_of_the_Week_Reference = $days_of_the_Week_Reference;
        return $this;
    }
    /**
     * Add item to Days_of_the_Week_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Day_of_the_WeekObjectType $item
     * @return \StructType\Person_Address_DataType
     */
    public function addToDays_of_the_Week_Reference(\StructType\Day_of_the_WeekObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Day_of_the_WeekObjectType) {
            throw new \InvalidArgumentException(sprintf('The Days_of_the_Week_Reference property can only contain items of type \StructType\Day_of_the_WeekObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Days_of_the_Week_Reference[] = $item;
        return $this;
    }
    /**
     * Get Address_Reference value
     * @return \StructType\Address_ReferenceObjectType|null
     */
    public function getAddress_Reference()
    {
        return $this->Address_Reference;
    }
    /**
     * Set Address_Reference value
     * @param \StructType\Address_ReferenceObjectType $address_Reference
     * @return \StructType\Person_Address_DataType
     */
    public function setAddress_Reference(\StructType\Address_ReferenceObjectType $address_Reference = null)
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
     * @return \StructType\Person_Address_DataType
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
     * @return \StructType\Person_Address_DataType
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
     * @return \StructType\Person_Address_DataType
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
     * @return \StructType\Person_Address_DataType
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
     * @return \StructType\Person_Address_DataType
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
