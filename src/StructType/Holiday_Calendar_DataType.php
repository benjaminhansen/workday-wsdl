<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Holiday_Calendar_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper containing data for Condition Rule.
 * @subpackage Structs
 */
class Holiday_Calendar_DataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Text name for Condition Rule.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Text description of Holiday Calendar.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Condition_Rule_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Calendar Rule for the Holiday Calendar.
     * - minOccurs: 0
     * @var \StructType\Condition_RuleObjectType
     */
    public $Condition_Rule_Reference;
    /**
     * The Display_on_Time_Off_and_Leave_Calendar
     * Meta information extracted from the WSDL
     * - documentation: Display on Time Off and Leave Calendar
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Display_on_Time_Off_and_Leave_Calendar;
    /**
     * The Holiday_Calendar_Event_Data
     * Meta information extracted from the WSDL
     * - documentation: Event Data for the Holiday Calendar.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Holiday_Calendar_Event_DataType[]
     */
    public $Holiday_Calendar_Event_Data;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Holiday Calendar Event.
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Holiday_Calendar_DataType
     * @uses Holiday_Calendar_DataType::setName()
     * @uses Holiday_Calendar_DataType::setDescription()
     * @uses Holiday_Calendar_DataType::setCondition_Rule_Reference()
     * @uses Holiday_Calendar_DataType::setDisplay_on_Time_Off_and_Leave_Calendar()
     * @uses Holiday_Calendar_DataType::setHoliday_Calendar_Event_Data()
     * @uses Holiday_Calendar_DataType::setID()
     * @param string $name
     * @param string $description
     * @param \StructType\Condition_RuleObjectType $condition_Rule_Reference
     * @param bool $display_on_Time_Off_and_Leave_Calendar
     * @param \StructType\Holiday_Calendar_Event_DataType[] $holiday_Calendar_Event_Data
     * @param string $iD
     */
    public function __construct($name = null, $description = null, \StructType\Condition_RuleObjectType $condition_Rule_Reference = null, $display_on_Time_Off_and_Leave_Calendar = null, array $holiday_Calendar_Event_Data = array(), $iD = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setCondition_Rule_Reference($condition_Rule_Reference)
            ->setDisplay_on_Time_Off_and_Leave_Calendar($display_on_Time_Off_and_Leave_Calendar)
            ->setHoliday_Calendar_Event_Data($holiday_Calendar_Event_Data)
            ->setID($iD);
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
     * @return \StructType\Holiday_Calendar_DataType
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
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Holiday_Calendar_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Condition_Rule_Reference value
     * @return \StructType\Condition_RuleObjectType|null
     */
    public function getCondition_Rule_Reference()
    {
        return $this->Condition_Rule_Reference;
    }
    /**
     * Set Condition_Rule_Reference value
     * @param \StructType\Condition_RuleObjectType $condition_Rule_Reference
     * @return \StructType\Holiday_Calendar_DataType
     */
    public function setCondition_Rule_Reference(\StructType\Condition_RuleObjectType $condition_Rule_Reference = null)
    {
        $this->Condition_Rule_Reference = $condition_Rule_Reference;
        return $this;
    }
    /**
     * Get Display_on_Time_Off_and_Leave_Calendar value
     * @return bool|null
     */
    public function getDisplay_on_Time_Off_and_Leave_Calendar()
    {
        return $this->Display_on_Time_Off_and_Leave_Calendar;
    }
    /**
     * Set Display_on_Time_Off_and_Leave_Calendar value
     * @param bool $display_on_Time_Off_and_Leave_Calendar
     * @return \StructType\Holiday_Calendar_DataType
     */
    public function setDisplay_on_Time_Off_and_Leave_Calendar($display_on_Time_Off_and_Leave_Calendar = null)
    {
        // validation for constraint: boolean
        if (!is_null($display_on_Time_Off_and_Leave_Calendar) && !is_bool($display_on_Time_Off_and_Leave_Calendar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($display_on_Time_Off_and_Leave_Calendar, true), gettype($display_on_Time_Off_and_Leave_Calendar)), __LINE__);
        }
        $this->Display_on_Time_Off_and_Leave_Calendar = $display_on_Time_Off_and_Leave_Calendar;
        return $this;
    }
    /**
     * Get Holiday_Calendar_Event_Data value
     * @return \StructType\Holiday_Calendar_Event_DataType[]|null
     */
    public function getHoliday_Calendar_Event_Data()
    {
        return $this->Holiday_Calendar_Event_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setHoliday_Calendar_Event_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHoliday_Calendar_Event_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHoliday_Calendar_Event_DataForArrayConstraintsFromSetHoliday_Calendar_Event_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $holiday_Calendar_DataTypeHoliday_Calendar_Event_DataItem) {
            // validation for constraint: itemType
            if (!$holiday_Calendar_DataTypeHoliday_Calendar_Event_DataItem instanceof \StructType\Holiday_Calendar_Event_DataType) {
                $invalidValues[] = is_object($holiday_Calendar_DataTypeHoliday_Calendar_Event_DataItem) ? get_class($holiday_Calendar_DataTypeHoliday_Calendar_Event_DataItem) : sprintf('%s(%s)', gettype($holiday_Calendar_DataTypeHoliday_Calendar_Event_DataItem), var_export($holiday_Calendar_DataTypeHoliday_Calendar_Event_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Holiday_Calendar_Event_Data property can only contain items of type \StructType\Holiday_Calendar_Event_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Holiday_Calendar_Event_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Holiday_Calendar_Event_DataType[] $holiday_Calendar_Event_Data
     * @return \StructType\Holiday_Calendar_DataType
     */
    public function setHoliday_Calendar_Event_Data(array $holiday_Calendar_Event_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($holiday_Calendar_Event_DataArrayErrorMessage = self::validateHoliday_Calendar_Event_DataForArrayConstraintsFromSetHoliday_Calendar_Event_Data($holiday_Calendar_Event_Data))) {
            throw new \InvalidArgumentException($holiday_Calendar_Event_DataArrayErrorMessage, __LINE__);
        }
        $this->Holiday_Calendar_Event_Data = $holiday_Calendar_Event_Data;
        return $this;
    }
    /**
     * Add item to Holiday_Calendar_Event_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Holiday_Calendar_Event_DataType $item
     * @return \StructType\Holiday_Calendar_DataType
     */
    public function addToHoliday_Calendar_Event_Data(\StructType\Holiday_Calendar_Event_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Holiday_Calendar_Event_DataType) {
            throw new \InvalidArgumentException(sprintf('The Holiday_Calendar_Event_Data property can only contain items of type \StructType\Holiday_Calendar_Event_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Holiday_Calendar_Event_Data[] = $item;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Holiday_Calendar_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Holiday_Calendar_DataType
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
