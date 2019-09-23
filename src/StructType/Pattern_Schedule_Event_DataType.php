<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pattern_Schedule_Event_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Instance data for Schedule Pattern. This schedule pattern may be linked to schedule changes that a manager made. If you update this schedule pattern, you will also be deleting the manager's changes.
 * @subpackage Structs
 */
class Pattern_Schedule_Event_DataType extends AbstractStructBase
{
    /**
     * The Week_Number
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Pattern Week Number for Pattern Schedule Event.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 2
     * @var float
     */
    public $Week_Number;
    /**
     * The Day_of_the_Week_Reference
     * Meta information extracted from the WSDL
     * - documentation: Day(s) of the Week for Pattern Schedule Event.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType[]
     */
    public $Day_of_the_Week_Reference;
    /**
     * The Start_Time
     * Meta information extracted from the WSDL
     * - documentation: Minute-precision Start Time for Pattern Schedule Event. Note: This is also referred to as the In time for the schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Time;
    /**
     * The End_Time
     * Meta information extracted from the WSDL
     * - documentation: Minute-precision End Time for Pattern Schedule Event. Note: This is also referred to as the Out time for the schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Time;
    /**
     * The _24_Hour_Shift
     * Meta information extracted from the WSDL
     * - documentation: Boolean value specifying whether the Pattern Schedule Event is a 24-Hour Shift.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $_24_Hour_Shift;
    /**
     * The Meal_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType[]
     */
    public $Meal_Data;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Pattern Schedule Event.
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Pattern_Schedule_Event_DataType
     * @uses Pattern_Schedule_Event_DataType::setWeek_Number()
     * @uses Pattern_Schedule_Event_DataType::setDay_of_the_Week_Reference()
     * @uses Pattern_Schedule_Event_DataType::setStart_Time()
     * @uses Pattern_Schedule_Event_DataType::setEnd_Time()
     * @uses Pattern_Schedule_Event_DataType::set_24_Hour_Shift()
     * @uses Pattern_Schedule_Event_DataType::setMeal_Data()
     * @uses Pattern_Schedule_Event_DataType::setID()
     * @param float $week_Number
     * @param \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType[] $day_of_the_Week_Reference
     * @param string $start_Time
     * @param string $end_Time
     * @param bool $_24_Hour_Shift
     * @param \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType[] $meal_Data
     * @param string $iD
     */
    public function __construct($week_Number = null, array $day_of_the_Week_Reference = array(), $start_Time = null, $end_Time = null, $_24_Hour_Shift = null, array $meal_Data = array(), $iD = null)
    {
        $this
            ->setWeek_Number($week_Number)
            ->setDay_of_the_Week_Reference($day_of_the_Week_Reference)
            ->setStart_Time($start_Time)
            ->setEnd_Time($end_Time)
            ->set_24_Hour_Shift($_24_Hour_Shift)
            ->setMeal_Data($meal_Data)
            ->setID($iD);
    }
    /**
     * Get Week_Number value
     * @return float|null
     */
    public function getWeek_Number()
    {
        return $this->Week_Number;
    }
    /**
     * Set Week_Number value
     * @param float $week_Number
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function setWeek_Number($week_Number = null)
    {
        // validation for constraint: float
        if (!is_null($week_Number) && !(is_float($week_Number) || is_numeric($week_Number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($week_Number, true), gettype($week_Number)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($week_Number) && mb_strlen(mb_substr($week_Number, mb_strpos($week_Number, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($week_Number, true), mb_strlen(mb_substr($week_Number, mb_strpos($week_Number, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($week_Number) && $week_Number < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($week_Number, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($week_Number) && mb_strlen(preg_replace('/(\D)/', '', $week_Number)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($week_Number, true), mb_strlen(preg_replace('/(\D)/', '', $week_Number))), __LINE__);
        }
        $this->Week_Number = $week_Number;
        return $this;
    }
    /**
     * Get Day_of_the_Week_Reference value
     * @return \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType[]|null
     */
    public function getDay_of_the_Week_Reference()
    {
        return $this->Day_of_the_Week_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDay_of_the_Week_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDay_of_the_Week_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDay_of_the_Week_ReferenceForArrayConstraintsFromSetDay_of_the_Week_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pattern_Schedule_Event_DataTypeDay_of_the_Week_ReferenceItem) {
            // validation for constraint: itemType
            if (!$pattern_Schedule_Event_DataTypeDay_of_the_Week_ReferenceItem instanceof \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType) {
                $invalidValues[] = is_object($pattern_Schedule_Event_DataTypeDay_of_the_Week_ReferenceItem) ? get_class($pattern_Schedule_Event_DataTypeDay_of_the_Week_ReferenceItem) : sprintf('%s(%s)', gettype($pattern_Schedule_Event_DataTypeDay_of_the_Week_ReferenceItem), var_export($pattern_Schedule_Event_DataTypeDay_of_the_Week_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Day_of_the_Week_Reference property can only contain items of type \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Day_of_the_Week_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType[] $day_of_the_Week_Reference
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function setDay_of_the_Week_Reference(array $day_of_the_Week_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($day_of_the_Week_ReferenceArrayErrorMessage = self::validateDay_of_the_Week_ReferenceForArrayConstraintsFromSetDay_of_the_Week_Reference($day_of_the_Week_Reference))) {
            throw new \InvalidArgumentException($day_of_the_Week_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Day_of_the_Week_Reference = $day_of_the_Week_Reference;
        return $this;
    }
    /**
     * Add item to Day_of_the_Week_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType $item
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function addToDay_of_the_Week_Reference(\WorkdayWsdl\\StructType\Day_of_the_WeekObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType) {
            throw new \InvalidArgumentException(sprintf('The Day_of_the_Week_Reference property can only contain items of type \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Day_of_the_Week_Reference[] = $item;
        return $this;
    }
    /**
     * Get Start_Time value
     * @return string|null
     */
    public function getStart_Time()
    {
        return $this->Start_Time;
    }
    /**
     * Set Start_Time value
     * @param string $start_Time
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function setStart_Time($start_Time = null)
    {
        // validation for constraint: string
        if (!is_null($start_Time) && !is_string($start_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Time, true), gettype($start_Time)), __LINE__);
        }
        $this->Start_Time = $start_Time;
        return $this;
    }
    /**
     * Get End_Time value
     * @return string|null
     */
    public function getEnd_Time()
    {
        return $this->End_Time;
    }
    /**
     * Set End_Time value
     * @param string $end_Time
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function setEnd_Time($end_Time = null)
    {
        // validation for constraint: string
        if (!is_null($end_Time) && !is_string($end_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Time, true), gettype($end_Time)), __LINE__);
        }
        $this->End_Time = $end_Time;
        return $this;
    }
    /**
     * Get _Hour_Shift value
     * @return _Hour_Shift
     */
    public function get_24_Hour_Shift()
    {
        return $this->_24_Hour_Shift;
    }
    /**
     * Set _Hour_Shift value
     * @param _Hour_Shift $_Hour_Shift
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function set_24_Hour_Shift($_24_Hour_Shift = null)
    {
        // validation for constraint: boolean
        if (!is_null($_24_Hour_Shift) && !is_bool($_24_Hour_Shift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($_24_Hour_Shift, true), gettype($_24_Hour_Shift)), __LINE__);
        }
        $this->_24_Hour_Shift = $_24_Hour_Shift;
        return $this;
    }
    /**
     * Get Meal_Data value
     * @return \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType[]|null
     */
    public function getMeal_Data()
    {
        return $this->Meal_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMeal_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeal_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMeal_DataForArrayConstraintsFromSetMeal_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pattern_Schedule_Event_DataTypeMeal_DataItem) {
            // validation for constraint: itemType
            if (!$pattern_Schedule_Event_DataTypeMeal_DataItem instanceof \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType) {
                $invalidValues[] = is_object($pattern_Schedule_Event_DataTypeMeal_DataItem) ? get_class($pattern_Schedule_Event_DataTypeMeal_DataItem) : sprintf('%s(%s)', gettype($pattern_Schedule_Event_DataTypeMeal_DataItem), var_export($pattern_Schedule_Event_DataTypeMeal_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Meal_Data property can only contain items of type \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Meal_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType[] $meal_Data
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function setMeal_Data(array $meal_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($meal_DataArrayErrorMessage = self::validateMeal_DataForArrayConstraintsFromSetMeal_Data($meal_Data))) {
            throw new \InvalidArgumentException($meal_DataArrayErrorMessage, __LINE__);
        }
        $this->Meal_Data = $meal_Data;
        return $this;
    }
    /**
     * Add item to Meal_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType $item
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
     */
    public function addToMeal_Data(\WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType) {
            throw new \InvalidArgumentException(sprintf('The Meal_Data property can only contain items of type \WorkdayWsdl\\StructType\Scheduling_Non_Work_Time_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Meal_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
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
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType
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
