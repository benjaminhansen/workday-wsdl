<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Instance data for Work Schedule Calendar.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_DataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Text name for Work Schedule Calendar.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Schedule_Summary
     * Meta information extracted from the WSDL
     * - documentation: A short description of the work schedule calendar or its restrictions to display to workers when they edit their work schedules.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Schedule_Summary;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Text description of Work Schedule Calendar.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Condition_Rule_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Calendar Rule for the Work Schedule Calendar.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Condition_RuleObjectType
     */
    public $Condition_Rule_Reference;
    /**
     * The Work_Schedule_Calendar_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Work Schedule Calendar Group for the Work Schedule Calendar.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType[]
     */
    public $Work_Schedule_Calendar_Group_Reference;
    /**
     * The Day_Breaker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to Day Breaker for Work Schedule Calendar as Twenty Four Hour.
     * @var \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType
     */
    public $Day_Breaker_Reference;
    /**
     * The Day_Breaker_Divides_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to Day Breaker Divider for Work Schedule Calendar.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Day_Breaker_DividerObjectType
     */
    public $Day_Breaker_Divides_Reference;
    /**
     * The Work_Week_Start_Day_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to day of the week which begins the work week. This setting only applies to time entry and does not affect the start day of a worker's schedule shown in My Schedule report.
     * @var \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType
     */
    public $Work_Week_Start_Day_Reference;
    /**
     * The Biweekly_Calculation_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Reference to Biweekly Calculation Start Date for Work Schedule Calendar.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Biweekly_Calculation_Start_Date;
    /**
     * The Configurable_Calculation_Period_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to Configurable Calculation Period for Work Schedule Calendar.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Configurable_Calculation_PeriodObjectType
     */
    public $Configurable_Calculation_Period_Reference;
    /**
     * The Pattern_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The date on which the patterns begin cycling, if using Pattern Schedule Events. This setting does not affect the week start day of the My Schedule report.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pattern_Start_Date;
    /**
     * The Number_of_Weeks
     * Meta information extracted from the WSDL
     * - documentation: Number of Weeks for Work Schedule Calendar, if using Pattern Schedule Events.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 2
     * @var float
     */
    public $Number_of_Weeks;
    /**
     * The Work_Schedule_Calendar_Event_Data
     * Meta information extracted from the WSDL
     * - documentation: Work Schedule Calendar Event data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType[]
     */
    public $Work_Schedule_Calendar_Event_Data;
    /**
     * The Worker_Edit_Options_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public $Worker_Edit_Options_Data;
    /**
     * The Pattern_Schedule_Event_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType[]
     */
    public $Pattern_Schedule_Event_Data;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Work Schedule Calendar.
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Work_Schedule_Calendar_DataType
     * @uses Work_Schedule_Calendar_DataType::setName()
     * @uses Work_Schedule_Calendar_DataType::setSchedule_Summary()
     * @uses Work_Schedule_Calendar_DataType::setDescription()
     * @uses Work_Schedule_Calendar_DataType::setCondition_Rule_Reference()
     * @uses Work_Schedule_Calendar_DataType::setWork_Schedule_Calendar_Group_Reference()
     * @uses Work_Schedule_Calendar_DataType::setDay_Breaker_Reference()
     * @uses Work_Schedule_Calendar_DataType::setDay_Breaker_Divides_Reference()
     * @uses Work_Schedule_Calendar_DataType::setWork_Week_Start_Day_Reference()
     * @uses Work_Schedule_Calendar_DataType::setBiweekly_Calculation_Start_Date()
     * @uses Work_Schedule_Calendar_DataType::setConfigurable_Calculation_Period_Reference()
     * @uses Work_Schedule_Calendar_DataType::setPattern_Start_Date()
     * @uses Work_Schedule_Calendar_DataType::setNumber_of_Weeks()
     * @uses Work_Schedule_Calendar_DataType::setWork_Schedule_Calendar_Event_Data()
     * @uses Work_Schedule_Calendar_DataType::setWorker_Edit_Options_Data()
     * @uses Work_Schedule_Calendar_DataType::setPattern_Schedule_Event_Data()
     * @uses Work_Schedule_Calendar_DataType::setID()
     * @param string $name
     * @param string $schedule_Summary
     * @param string $description
     * @param \WorkdayWsdl\\StructType\Condition_RuleObjectType $condition_Rule_Reference
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType[] $work_Schedule_Calendar_Group_Reference
     * @param \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $day_Breaker_Reference
     * @param \WorkdayWsdl\\StructType\Day_Breaker_DividerObjectType $day_Breaker_Divides_Reference
     * @param \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType $work_Week_Start_Day_Reference
     * @param string $biweekly_Calculation_Start_Date
     * @param \WorkdayWsdl\\StructType\Configurable_Calculation_PeriodObjectType $configurable_Calculation_Period_Reference
     * @param string $pattern_Start_Date
     * @param float $number_of_Weeks
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType[] $work_Schedule_Calendar_Event_Data
     * @param \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType $worker_Edit_Options_Data
     * @param \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType[] $pattern_Schedule_Event_Data
     * @param string $iD
     */
    public function __construct($name = null, $schedule_Summary = null, $description = null, \WorkdayWsdl\\StructType\Condition_RuleObjectType $condition_Rule_Reference = null, array $work_Schedule_Calendar_Group_Reference = array(), \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $day_Breaker_Reference = null, \WorkdayWsdl\\StructType\Day_Breaker_DividerObjectType $day_Breaker_Divides_Reference = null, \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType $work_Week_Start_Day_Reference = null, $biweekly_Calculation_Start_Date = null, \WorkdayWsdl\\StructType\Configurable_Calculation_PeriodObjectType $configurable_Calculation_Period_Reference = null, $pattern_Start_Date = null, $number_of_Weeks = null, array $work_Schedule_Calendar_Event_Data = array(), \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType $worker_Edit_Options_Data = null, array $pattern_Schedule_Event_Data = array(), $iD = null)
    {
        $this
            ->setName($name)
            ->setSchedule_Summary($schedule_Summary)
            ->setDescription($description)
            ->setCondition_Rule_Reference($condition_Rule_Reference)
            ->setWork_Schedule_Calendar_Group_Reference($work_Schedule_Calendar_Group_Reference)
            ->setDay_Breaker_Reference($day_Breaker_Reference)
            ->setDay_Breaker_Divides_Reference($day_Breaker_Divides_Reference)
            ->setWork_Week_Start_Day_Reference($work_Week_Start_Day_Reference)
            ->setBiweekly_Calculation_Start_Date($biweekly_Calculation_Start_Date)
            ->setConfigurable_Calculation_Period_Reference($configurable_Calculation_Period_Reference)
            ->setPattern_Start_Date($pattern_Start_Date)
            ->setNumber_of_Weeks($number_of_Weeks)
            ->setWork_Schedule_Calendar_Event_Data($work_Schedule_Calendar_Event_Data)
            ->setWorker_Edit_Options_Data($worker_Edit_Options_Data)
            ->setPattern_Schedule_Event_Data($pattern_Schedule_Event_Data)
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
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
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
     * Get Schedule_Summary value
     * @return string|null
     */
    public function getSchedule_Summary()
    {
        return $this->Schedule_Summary;
    }
    /**
     * Set Schedule_Summary value
     * @param string $schedule_Summary
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setSchedule_Summary($schedule_Summary = null)
    {
        // validation for constraint: string
        if (!is_null($schedule_Summary) && !is_string($schedule_Summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schedule_Summary, true), gettype($schedule_Summary)), __LINE__);
        }
        $this->Schedule_Summary = $schedule_Summary;
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
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
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
     * @return \WorkdayWsdl\\StructType\Condition_RuleObjectType|null
     */
    public function getCondition_Rule_Reference()
    {
        return $this->Condition_Rule_Reference;
    }
    /**
     * Set Condition_Rule_Reference value
     * @param \WorkdayWsdl\\StructType\Condition_RuleObjectType $condition_Rule_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setCondition_Rule_Reference(\WorkdayWsdl\\StructType\Condition_RuleObjectType $condition_Rule_Reference = null)
    {
        $this->Condition_Rule_Reference = $condition_Rule_Reference;
        return $this;
    }
    /**
     * Get Work_Schedule_Calendar_Group_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType[]|null
     */
    public function getWork_Schedule_Calendar_Group_Reference()
    {
        return $this->Work_Schedule_Calendar_Group_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_Group_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Group_ReferenceItem instanceof \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Group_ReferenceItem) ? get_class($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Group_ReferenceItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Group_ReferenceItem), var_export($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Group_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType[] $work_Schedule_Calendar_Group_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setWork_Schedule_Calendar_Group_Reference(array $work_Schedule_Calendar_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_Group_ReferenceArrayErrorMessage = self::validateWork_Schedule_Calendar_Group_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Group_Reference($work_Schedule_Calendar_Group_Reference))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Group_Reference = $work_Schedule_Calendar_Group_Reference;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType $item
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function addToWork_Schedule_Calendar_Group_Reference(\WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Group_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Group_Reference[] = $item;
        return $this;
    }
    /**
     * Get Day_Breaker_Reference value
     * @return \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType|null
     */
    public function getDay_Breaker_Reference()
    {
        return $this->Day_Breaker_Reference;
    }
    /**
     * Set Day_Breaker_Reference value
     * @param \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $day_Breaker_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setDay_Breaker_Reference(\WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $day_Breaker_Reference = null)
    {
        $this->Day_Breaker_Reference = $day_Breaker_Reference;
        return $this;
    }
    /**
     * Get Day_Breaker_Divides_Reference value
     * @return \WorkdayWsdl\\StructType\Day_Breaker_DividerObjectType|null
     */
    public function getDay_Breaker_Divides_Reference()
    {
        return $this->Day_Breaker_Divides_Reference;
    }
    /**
     * Set Day_Breaker_Divides_Reference value
     * @param \WorkdayWsdl\\StructType\Day_Breaker_DividerObjectType $day_Breaker_Divides_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setDay_Breaker_Divides_Reference(\WorkdayWsdl\\StructType\Day_Breaker_DividerObjectType $day_Breaker_Divides_Reference = null)
    {
        $this->Day_Breaker_Divides_Reference = $day_Breaker_Divides_Reference;
        return $this;
    }
    /**
     * Get Work_Week_Start_Day_Reference value
     * @return \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType|null
     */
    public function getWork_Week_Start_Day_Reference()
    {
        return $this->Work_Week_Start_Day_Reference;
    }
    /**
     * Set Work_Week_Start_Day_Reference value
     * @param \WorkdayWsdl\\StructType\Day_of_the_WeekObjectType $work_Week_Start_Day_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setWork_Week_Start_Day_Reference(\WorkdayWsdl\\StructType\Day_of_the_WeekObjectType $work_Week_Start_Day_Reference = null)
    {
        $this->Work_Week_Start_Day_Reference = $work_Week_Start_Day_Reference;
        return $this;
    }
    /**
     * Get Biweekly_Calculation_Start_Date value
     * @return string|null
     */
    public function getBiweekly_Calculation_Start_Date()
    {
        return $this->Biweekly_Calculation_Start_Date;
    }
    /**
     * Set Biweekly_Calculation_Start_Date value
     * @param string $biweekly_Calculation_Start_Date
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setBiweekly_Calculation_Start_Date($biweekly_Calculation_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($biweekly_Calculation_Start_Date) && !is_string($biweekly_Calculation_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($biweekly_Calculation_Start_Date, true), gettype($biweekly_Calculation_Start_Date)), __LINE__);
        }
        $this->Biweekly_Calculation_Start_Date = $biweekly_Calculation_Start_Date;
        return $this;
    }
    /**
     * Get Configurable_Calculation_Period_Reference value
     * @return \WorkdayWsdl\\StructType\Configurable_Calculation_PeriodObjectType|null
     */
    public function getConfigurable_Calculation_Period_Reference()
    {
        return $this->Configurable_Calculation_Period_Reference;
    }
    /**
     * Set Configurable_Calculation_Period_Reference value
     * @param \WorkdayWsdl\\StructType\Configurable_Calculation_PeriodObjectType $configurable_Calculation_Period_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setConfigurable_Calculation_Period_Reference(\WorkdayWsdl\\StructType\Configurable_Calculation_PeriodObjectType $configurable_Calculation_Period_Reference = null)
    {
        $this->Configurable_Calculation_Period_Reference = $configurable_Calculation_Period_Reference;
        return $this;
    }
    /**
     * Get Pattern_Start_Date value
     * @return string|null
     */
    public function getPattern_Start_Date()
    {
        return $this->Pattern_Start_Date;
    }
    /**
     * Set Pattern_Start_Date value
     * @param string $pattern_Start_Date
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setPattern_Start_Date($pattern_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($pattern_Start_Date) && !is_string($pattern_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pattern_Start_Date, true), gettype($pattern_Start_Date)), __LINE__);
        }
        $this->Pattern_Start_Date = $pattern_Start_Date;
        return $this;
    }
    /**
     * Get Number_of_Weeks value
     * @return float|null
     */
    public function getNumber_of_Weeks()
    {
        return $this->Number_of_Weeks;
    }
    /**
     * Set Number_of_Weeks value
     * @param float $number_of_Weeks
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setNumber_of_Weeks($number_of_Weeks = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Weeks) && !(is_float($number_of_Weeks) || is_numeric($number_of_Weeks))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Weeks, true), gettype($number_of_Weeks)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Weeks) && mb_strlen(mb_substr($number_of_Weeks, mb_strpos($number_of_Weeks, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Weeks, true), mb_strlen(mb_substr($number_of_Weeks, mb_strpos($number_of_Weeks, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Weeks) && $number_of_Weeks < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Weeks, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($number_of_Weeks) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Weeks)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($number_of_Weeks, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Weeks))), __LINE__);
        }
        $this->Number_of_Weeks = $number_of_Weeks;
        return $this;
    }
    /**
     * Get Work_Schedule_Calendar_Event_Data value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType[]|null
     */
    public function getWork_Schedule_Calendar_Event_Data()
    {
        return $this->Work_Schedule_Calendar_Event_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Event_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Event_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_Event_DataForArrayConstraintsFromSetWork_Schedule_Calendar_Event_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Event_DataItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Event_DataItem instanceof \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Event_DataItem) ? get_class($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Event_DataItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Event_DataItem), var_export($work_Schedule_Calendar_DataTypeWork_Schedule_Calendar_Event_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Event_Data property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Event_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType[] $work_Schedule_Calendar_Event_Data
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setWork_Schedule_Calendar_Event_Data(array $work_Schedule_Calendar_Event_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_Event_DataArrayErrorMessage = self::validateWork_Schedule_Calendar_Event_DataForArrayConstraintsFromSetWork_Schedule_Calendar_Event_Data($work_Schedule_Calendar_Event_Data))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_Event_DataArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Event_Data = $work_Schedule_Calendar_Event_Data;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Event_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType $item
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function addToWork_Schedule_Calendar_Event_Data(\WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Event_Data property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Event_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Event_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Edit_Options_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType|null
     */
    public function getWorker_Edit_Options_Data()
    {
        return $this->Worker_Edit_Options_Data;
    }
    /**
     * Set Worker_Edit_Options_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType $worker_Edit_Options_Data
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setWorker_Edit_Options_Data(\WorkdayWsdl\\StructType\Worker_Editing_Options_DataType $worker_Edit_Options_Data = null)
    {
        $this->Worker_Edit_Options_Data = $worker_Edit_Options_Data;
        return $this;
    }
    /**
     * Get Pattern_Schedule_Event_Data value
     * @return \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType[]|null
     */
    public function getPattern_Schedule_Event_Data()
    {
        return $this->Pattern_Schedule_Event_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPattern_Schedule_Event_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPattern_Schedule_Event_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePattern_Schedule_Event_DataForArrayConstraintsFromSetPattern_Schedule_Event_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_DataTypePattern_Schedule_Event_DataItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_DataTypePattern_Schedule_Event_DataItem instanceof \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_DataTypePattern_Schedule_Event_DataItem) ? get_class($work_Schedule_Calendar_DataTypePattern_Schedule_Event_DataItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_DataTypePattern_Schedule_Event_DataItem), var_export($work_Schedule_Calendar_DataTypePattern_Schedule_Event_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pattern_Schedule_Event_Data property can only contain items of type \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pattern_Schedule_Event_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType[] $pattern_Schedule_Event_Data
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function setPattern_Schedule_Event_Data(array $pattern_Schedule_Event_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($pattern_Schedule_Event_DataArrayErrorMessage = self::validatePattern_Schedule_Event_DataForArrayConstraintsFromSetPattern_Schedule_Event_Data($pattern_Schedule_Event_Data))) {
            throw new \InvalidArgumentException($pattern_Schedule_Event_DataArrayErrorMessage, __LINE__);
        }
        $this->Pattern_Schedule_Event_Data = $pattern_Schedule_Event_Data;
        return $this;
    }
    /**
     * Add item to Pattern_Schedule_Event_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType $item
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public function addToPattern_Schedule_Event_Data(\WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType) {
            throw new \InvalidArgumentException(sprintf('The Pattern_Schedule_Event_Data property can only contain items of type \WorkdayWsdl\\StructType\Pattern_Schedule_Event_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pattern_Schedule_Event_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
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
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
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
