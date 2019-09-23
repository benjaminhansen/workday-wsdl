<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recurrence_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element containing recurrence data for the Calendar Event.
 * @subpackage Structs
 */
class Recurrence_DataType extends AbstractStructBase
{
    /**
     * The Recurrence_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Run Frequency for Calendar Event.
     * @var \StructType\Schedule_Request_TypeObjectType
     */
    public $Recurrence_Type_Reference;
    /**
     * The Recurrence_Interval_Multiplier
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Recurrence Interval Multiplier for Calendar Event.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Recurrence_Interval_Multiplier;
    /**
     * The Recurs_Every_Weekday
     * Meta information extracted from the WSDL
     * - documentation: If true, calendar event recurs every weekday.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Recurs_Every_Weekday;
    /**
     * The Day_of_the_Week_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Day of the Week for Calendar Event.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Day_of_the_WeekObjectType[]
     */
    public $Day_of_the_Week_Reference;
    /**
     * The First_Day_of_the_Week_Reference
     * Meta information extracted from the WSDL
     * - documentation: First Day of the Week for Weekly Recurrences. Defaults to Sunday if not set.
     * - minOccurs: 0
     * @var \StructType\Day_of_the_WeekObjectType
     */
    public $First_Day_of_the_Week_Reference;
    /**
     * The Month_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Month for Calendar Event.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MonthObjectType[]
     */
    public $Month_Reference;
    /**
     * The Day_of_the_Month_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Day of the Month for Calendar Event.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Day_of_the_MonthObjectType[]
     */
    public $Day_of_the_Month_Reference;
    /**
     * The Week_of_the_Month_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Week of the Month for Calendar Event.
     * - minOccurs: 0
     * @var \StructType\Week_of_the_MonthObjectType
     */
    public $Week_of_the_Month_Reference;
    /**
     * The Recurrence_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Date value for Trigger Start Date for Calendar Event.
     * - maxOccurs: 1
     * @var string
     */
    public $Recurrence_Start_Date;
    /**
     * The Recurrence_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Date value for Trigger End Date for Calendar Event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Recurrence_End_Date;
    /**
     * Constructor method for Recurrence_DataType
     * @uses Recurrence_DataType::setRecurrence_Type_Reference()
     * @uses Recurrence_DataType::setRecurrence_Interval_Multiplier()
     * @uses Recurrence_DataType::setRecurs_Every_Weekday()
     * @uses Recurrence_DataType::setDay_of_the_Week_Reference()
     * @uses Recurrence_DataType::setFirst_Day_of_the_Week_Reference()
     * @uses Recurrence_DataType::setMonth_Reference()
     * @uses Recurrence_DataType::setDay_of_the_Month_Reference()
     * @uses Recurrence_DataType::setWeek_of_the_Month_Reference()
     * @uses Recurrence_DataType::setRecurrence_Start_Date()
     * @uses Recurrence_DataType::setRecurrence_End_Date()
     * @param \StructType\Schedule_Request_TypeObjectType $recurrence_Type_Reference
     * @param float $recurrence_Interval_Multiplier
     * @param bool $recurs_Every_Weekday
     * @param \StructType\Day_of_the_WeekObjectType[] $day_of_the_Week_Reference
     * @param \StructType\Day_of_the_WeekObjectType $first_Day_of_the_Week_Reference
     * @param \StructType\MonthObjectType[] $month_Reference
     * @param \StructType\Day_of_the_MonthObjectType[] $day_of_the_Month_Reference
     * @param \StructType\Week_of_the_MonthObjectType $week_of_the_Month_Reference
     * @param string $recurrence_Start_Date
     * @param string $recurrence_End_Date
     */
    public function __construct(\StructType\Schedule_Request_TypeObjectType $recurrence_Type_Reference = null, $recurrence_Interval_Multiplier = null, $recurs_Every_Weekday = null, array $day_of_the_Week_Reference = array(), \StructType\Day_of_the_WeekObjectType $first_Day_of_the_Week_Reference = null, array $month_Reference = array(), array $day_of_the_Month_Reference = array(), \StructType\Week_of_the_MonthObjectType $week_of_the_Month_Reference = null, $recurrence_Start_Date = null, $recurrence_End_Date = null)
    {
        $this
            ->setRecurrence_Type_Reference($recurrence_Type_Reference)
            ->setRecurrence_Interval_Multiplier($recurrence_Interval_Multiplier)
            ->setRecurs_Every_Weekday($recurs_Every_Weekday)
            ->setDay_of_the_Week_Reference($day_of_the_Week_Reference)
            ->setFirst_Day_of_the_Week_Reference($first_Day_of_the_Week_Reference)
            ->setMonth_Reference($month_Reference)
            ->setDay_of_the_Month_Reference($day_of_the_Month_Reference)
            ->setWeek_of_the_Month_Reference($week_of_the_Month_Reference)
            ->setRecurrence_Start_Date($recurrence_Start_Date)
            ->setRecurrence_End_Date($recurrence_End_Date);
    }
    /**
     * Get Recurrence_Type_Reference value
     * @return \StructType\Schedule_Request_TypeObjectType|null
     */
    public function getRecurrence_Type_Reference()
    {
        return $this->Recurrence_Type_Reference;
    }
    /**
     * Set Recurrence_Type_Reference value
     * @param \StructType\Schedule_Request_TypeObjectType $recurrence_Type_Reference
     * @return \StructType\Recurrence_DataType
     */
    public function setRecurrence_Type_Reference(\StructType\Schedule_Request_TypeObjectType $recurrence_Type_Reference = null)
    {
        $this->Recurrence_Type_Reference = $recurrence_Type_Reference;
        return $this;
    }
    /**
     * Get Recurrence_Interval_Multiplier value
     * @return float|null
     */
    public function getRecurrence_Interval_Multiplier()
    {
        return $this->Recurrence_Interval_Multiplier;
    }
    /**
     * Set Recurrence_Interval_Multiplier value
     * @param float $recurrence_Interval_Multiplier
     * @return \StructType\Recurrence_DataType
     */
    public function setRecurrence_Interval_Multiplier($recurrence_Interval_Multiplier = null)
    {
        // validation for constraint: float
        if (!is_null($recurrence_Interval_Multiplier) && !(is_float($recurrence_Interval_Multiplier) || is_numeric($recurrence_Interval_Multiplier))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($recurrence_Interval_Multiplier, true), gettype($recurrence_Interval_Multiplier)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($recurrence_Interval_Multiplier) && mb_strlen(mb_substr($recurrence_Interval_Multiplier, mb_strpos($recurrence_Interval_Multiplier, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($recurrence_Interval_Multiplier, true), mb_strlen(mb_substr($recurrence_Interval_Multiplier, mb_strpos($recurrence_Interval_Multiplier, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($recurrence_Interval_Multiplier) && $recurrence_Interval_Multiplier < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($recurrence_Interval_Multiplier, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($recurrence_Interval_Multiplier) && mb_strlen(preg_replace('/(\D)/', '', $recurrence_Interval_Multiplier)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($recurrence_Interval_Multiplier, true), mb_strlen(preg_replace('/(\D)/', '', $recurrence_Interval_Multiplier))), __LINE__);
        }
        $this->Recurrence_Interval_Multiplier = $recurrence_Interval_Multiplier;
        return $this;
    }
    /**
     * Get Recurs_Every_Weekday value
     * @return bool|null
     */
    public function getRecurs_Every_Weekday()
    {
        return $this->Recurs_Every_Weekday;
    }
    /**
     * Set Recurs_Every_Weekday value
     * @param bool $recurs_Every_Weekday
     * @return \StructType\Recurrence_DataType
     */
    public function setRecurs_Every_Weekday($recurs_Every_Weekday = null)
    {
        // validation for constraint: boolean
        if (!is_null($recurs_Every_Weekday) && !is_bool($recurs_Every_Weekday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recurs_Every_Weekday, true), gettype($recurs_Every_Weekday)), __LINE__);
        }
        $this->Recurs_Every_Weekday = $recurs_Every_Weekday;
        return $this;
    }
    /**
     * Get Day_of_the_Week_Reference value
     * @return \StructType\Day_of_the_WeekObjectType[]|null
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
        foreach ($values as $recurrence_DataTypeDay_of_the_Week_ReferenceItem) {
            // validation for constraint: itemType
            if (!$recurrence_DataTypeDay_of_the_Week_ReferenceItem instanceof \StructType\Day_of_the_WeekObjectType) {
                $invalidValues[] = is_object($recurrence_DataTypeDay_of_the_Week_ReferenceItem) ? get_class($recurrence_DataTypeDay_of_the_Week_ReferenceItem) : sprintf('%s(%s)', gettype($recurrence_DataTypeDay_of_the_Week_ReferenceItem), var_export($recurrence_DataTypeDay_of_the_Week_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Day_of_the_Week_Reference property can only contain items of type \StructType\Day_of_the_WeekObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Day_of_the_Week_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Day_of_the_WeekObjectType[] $day_of_the_Week_Reference
     * @return \StructType\Recurrence_DataType
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
     * @param \StructType\Day_of_the_WeekObjectType $item
     * @return \StructType\Recurrence_DataType
     */
    public function addToDay_of_the_Week_Reference(\StructType\Day_of_the_WeekObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Day_of_the_WeekObjectType) {
            throw new \InvalidArgumentException(sprintf('The Day_of_the_Week_Reference property can only contain items of type \StructType\Day_of_the_WeekObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Day_of_the_Week_Reference[] = $item;
        return $this;
    }
    /**
     * Get First_Day_of_the_Week_Reference value
     * @return \StructType\Day_of_the_WeekObjectType|null
     */
    public function getFirst_Day_of_the_Week_Reference()
    {
        return $this->First_Day_of_the_Week_Reference;
    }
    /**
     * Set First_Day_of_the_Week_Reference value
     * @param \StructType\Day_of_the_WeekObjectType $first_Day_of_the_Week_Reference
     * @return \StructType\Recurrence_DataType
     */
    public function setFirst_Day_of_the_Week_Reference(\StructType\Day_of_the_WeekObjectType $first_Day_of_the_Week_Reference = null)
    {
        $this->First_Day_of_the_Week_Reference = $first_Day_of_the_Week_Reference;
        return $this;
    }
    /**
     * Get Month_Reference value
     * @return \StructType\MonthObjectType[]|null
     */
    public function getMonth_Reference()
    {
        return $this->Month_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setMonth_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMonth_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMonth_ReferenceForArrayConstraintsFromSetMonth_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recurrence_DataTypeMonth_ReferenceItem) {
            // validation for constraint: itemType
            if (!$recurrence_DataTypeMonth_ReferenceItem instanceof \StructType\MonthObjectType) {
                $invalidValues[] = is_object($recurrence_DataTypeMonth_ReferenceItem) ? get_class($recurrence_DataTypeMonth_ReferenceItem) : sprintf('%s(%s)', gettype($recurrence_DataTypeMonth_ReferenceItem), var_export($recurrence_DataTypeMonth_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Month_Reference property can only contain items of type \StructType\MonthObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Month_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\MonthObjectType[] $month_Reference
     * @return \StructType\Recurrence_DataType
     */
    public function setMonth_Reference(array $month_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($month_ReferenceArrayErrorMessage = self::validateMonth_ReferenceForArrayConstraintsFromSetMonth_Reference($month_Reference))) {
            throw new \InvalidArgumentException($month_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Month_Reference = $month_Reference;
        return $this;
    }
    /**
     * Add item to Month_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\MonthObjectType $item
     * @return \StructType\Recurrence_DataType
     */
    public function addToMonth_Reference(\StructType\MonthObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MonthObjectType) {
            throw new \InvalidArgumentException(sprintf('The Month_Reference property can only contain items of type \StructType\MonthObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Month_Reference[] = $item;
        return $this;
    }
    /**
     * Get Day_of_the_Month_Reference value
     * @return \StructType\Day_of_the_MonthObjectType[]|null
     */
    public function getDay_of_the_Month_Reference()
    {
        return $this->Day_of_the_Month_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDay_of_the_Month_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDay_of_the_Month_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDay_of_the_Month_ReferenceForArrayConstraintsFromSetDay_of_the_Month_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recurrence_DataTypeDay_of_the_Month_ReferenceItem) {
            // validation for constraint: itemType
            if (!$recurrence_DataTypeDay_of_the_Month_ReferenceItem instanceof \StructType\Day_of_the_MonthObjectType) {
                $invalidValues[] = is_object($recurrence_DataTypeDay_of_the_Month_ReferenceItem) ? get_class($recurrence_DataTypeDay_of_the_Month_ReferenceItem) : sprintf('%s(%s)', gettype($recurrence_DataTypeDay_of_the_Month_ReferenceItem), var_export($recurrence_DataTypeDay_of_the_Month_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Day_of_the_Month_Reference property can only contain items of type \StructType\Day_of_the_MonthObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Day_of_the_Month_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Day_of_the_MonthObjectType[] $day_of_the_Month_Reference
     * @return \StructType\Recurrence_DataType
     */
    public function setDay_of_the_Month_Reference(array $day_of_the_Month_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($day_of_the_Month_ReferenceArrayErrorMessage = self::validateDay_of_the_Month_ReferenceForArrayConstraintsFromSetDay_of_the_Month_Reference($day_of_the_Month_Reference))) {
            throw new \InvalidArgumentException($day_of_the_Month_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Day_of_the_Month_Reference = $day_of_the_Month_Reference;
        return $this;
    }
    /**
     * Add item to Day_of_the_Month_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Day_of_the_MonthObjectType $item
     * @return \StructType\Recurrence_DataType
     */
    public function addToDay_of_the_Month_Reference(\StructType\Day_of_the_MonthObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Day_of_the_MonthObjectType) {
            throw new \InvalidArgumentException(sprintf('The Day_of_the_Month_Reference property can only contain items of type \StructType\Day_of_the_MonthObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Day_of_the_Month_Reference[] = $item;
        return $this;
    }
    /**
     * Get Week_of_the_Month_Reference value
     * @return \StructType\Week_of_the_MonthObjectType|null
     */
    public function getWeek_of_the_Month_Reference()
    {
        return $this->Week_of_the_Month_Reference;
    }
    /**
     * Set Week_of_the_Month_Reference value
     * @param \StructType\Week_of_the_MonthObjectType $week_of_the_Month_Reference
     * @return \StructType\Recurrence_DataType
     */
    public function setWeek_of_the_Month_Reference(\StructType\Week_of_the_MonthObjectType $week_of_the_Month_Reference = null)
    {
        $this->Week_of_the_Month_Reference = $week_of_the_Month_Reference;
        return $this;
    }
    /**
     * Get Recurrence_Start_Date value
     * @return string|null
     */
    public function getRecurrence_Start_Date()
    {
        return $this->Recurrence_Start_Date;
    }
    /**
     * Set Recurrence_Start_Date value
     * @param string $recurrence_Start_Date
     * @return \StructType\Recurrence_DataType
     */
    public function setRecurrence_Start_Date($recurrence_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($recurrence_Start_Date) && !is_string($recurrence_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurrence_Start_Date, true), gettype($recurrence_Start_Date)), __LINE__);
        }
        $this->Recurrence_Start_Date = $recurrence_Start_Date;
        return $this;
    }
    /**
     * Get Recurrence_End_Date value
     * @return string|null
     */
    public function getRecurrence_End_Date()
    {
        return $this->Recurrence_End_Date;
    }
    /**
     * Set Recurrence_End_Date value
     * @param string $recurrence_End_Date
     * @return \StructType\Recurrence_DataType
     */
    public function setRecurrence_End_Date($recurrence_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($recurrence_End_Date) && !is_string($recurrence_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurrence_End_Date, true), gettype($recurrence_End_Date)), __LINE__);
        }
        $this->Recurrence_End_Date = $recurrence_End_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Recurrence_DataType
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
