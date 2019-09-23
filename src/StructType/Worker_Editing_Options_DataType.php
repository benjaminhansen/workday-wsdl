<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Editing_Options_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Instance data for Worker Editing Options for Work Schedule Calendar.
 * @subpackage Structs
 */
class Worker_Editing_Options_DataType extends AbstractStructBase
{
    /**
     * The Enable_Worker_Editing_Options
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for enabling Worker Editing Options.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Enable_Worker_Editing_Options;
    /**
     * The Change_Scheduled_and_Non_Scheduled_Days
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for allowing Worker to Change Scheduled and Non-Scheduled Days for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Change_Scheduled_and_Non_Scheduled_Days;
    /**
     * The Change_Number_of_Scheduled_Days
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for allowing Worker to Change Number of Scheduled Days for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Change_Number_of_Scheduled_Days;
    /**
     * The Enable_Hours_Restrictions
     * Meta information extracted from the WSDL
     * - documentation: Boolean value to enable Minimum/Maximum Number of Hours per Day and Minimum/Maximum Number of Hours per Week for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Enable_Hours_Restrictions;
    /**
     * The Minimum_Number_of_Hours_per_Day
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Minimum Number of Hours per Day for schedule pattern.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 4
     * @var float
     */
    public $Minimum_Number_of_Hours_per_Day;
    /**
     * The Maximum_Number_of_Hours_per_Day
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Maximum Number of Hours per Day for schedule pattern.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 4
     * @var float
     */
    public $Maximum_Number_of_Hours_per_Day;
    /**
     * The Minimum_Number_of_Hours_per_Week
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Minimum Number of Hours per Week for schedule pattern.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Minimum_Number_of_Hours_per_Week;
    /**
     * The Maximum_Number_of_Hours_per_Week
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Maximum Number of Hours per Week for schedule pattern.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Maximum_Number_of_Hours_per_Week;
    /**
     * The Change_Daily_Start_and_End_Times
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for allowing Worker to Change Daily Start and End Times for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Change_Daily_Start_and_End_Times;
    /**
     * The Uniform_Start_and_End_Times
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for enforcing Uniform Start and End Times for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Uniform_Start_and_End_Times;
    /**
     * The Flexible_Start_Time
     * Meta information extracted from the WSDL
     * - documentation: Minute-precision Time value for Flexible Start Time for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Flexible_Start_Time;
    /**
     * The Flexible_End_Time
     * Meta information extracted from the WSDL
     * - documentation: Minute-precision Time value for Flexible End Time for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Flexible_End_Time;
    /**
     * The Allow_Meals
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for allowing Worker to have Meals for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Allow_Meals;
    /**
     * The Change_Meal_Start_and_End_Times
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for allowing Worker to Change Meal Start and End Times for schedule pattern.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Change_Meal_Start_and_End_Times;
    /**
     * The Minimum_Meal_Duration
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Minimum Meal Duration in minutes for schedule pattern.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 3
     * @var float
     */
    public $Minimum_Meal_Duration;
    /**
     * The Maximum_Meal_Duration
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for Maximum Meal Duration in minutes for schedule pattern.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 3
     * @var float
     */
    public $Maximum_Meal_Duration;
    /**
     * Constructor method for Worker_Editing_Options_DataType
     * @uses Worker_Editing_Options_DataType::setEnable_Worker_Editing_Options()
     * @uses Worker_Editing_Options_DataType::setChange_Scheduled_and_Non_Scheduled_Days()
     * @uses Worker_Editing_Options_DataType::setChange_Number_of_Scheduled_Days()
     * @uses Worker_Editing_Options_DataType::setEnable_Hours_Restrictions()
     * @uses Worker_Editing_Options_DataType::setMinimum_Number_of_Hours_per_Day()
     * @uses Worker_Editing_Options_DataType::setMaximum_Number_of_Hours_per_Day()
     * @uses Worker_Editing_Options_DataType::setMinimum_Number_of_Hours_per_Week()
     * @uses Worker_Editing_Options_DataType::setMaximum_Number_of_Hours_per_Week()
     * @uses Worker_Editing_Options_DataType::setChange_Daily_Start_and_End_Times()
     * @uses Worker_Editing_Options_DataType::setUniform_Start_and_End_Times()
     * @uses Worker_Editing_Options_DataType::setFlexible_Start_Time()
     * @uses Worker_Editing_Options_DataType::setFlexible_End_Time()
     * @uses Worker_Editing_Options_DataType::setAllow_Meals()
     * @uses Worker_Editing_Options_DataType::setChange_Meal_Start_and_End_Times()
     * @uses Worker_Editing_Options_DataType::setMinimum_Meal_Duration()
     * @uses Worker_Editing_Options_DataType::setMaximum_Meal_Duration()
     * @param bool $enable_Worker_Editing_Options
     * @param bool $change_Scheduled_and_Non_Scheduled_Days
     * @param bool $change_Number_of_Scheduled_Days
     * @param bool $enable_Hours_Restrictions
     * @param float $minimum_Number_of_Hours_per_Day
     * @param float $maximum_Number_of_Hours_per_Day
     * @param float $minimum_Number_of_Hours_per_Week
     * @param float $maximum_Number_of_Hours_per_Week
     * @param bool $change_Daily_Start_and_End_Times
     * @param bool $uniform_Start_and_End_Times
     * @param string $flexible_Start_Time
     * @param string $flexible_End_Time
     * @param bool $allow_Meals
     * @param bool $change_Meal_Start_and_End_Times
     * @param float $minimum_Meal_Duration
     * @param float $maximum_Meal_Duration
     */
    public function __construct($enable_Worker_Editing_Options = null, $change_Scheduled_and_Non_Scheduled_Days = null, $change_Number_of_Scheduled_Days = null, $enable_Hours_Restrictions = null, $minimum_Number_of_Hours_per_Day = null, $maximum_Number_of_Hours_per_Day = null, $minimum_Number_of_Hours_per_Week = null, $maximum_Number_of_Hours_per_Week = null, $change_Daily_Start_and_End_Times = null, $uniform_Start_and_End_Times = null, $flexible_Start_Time = null, $flexible_End_Time = null, $allow_Meals = null, $change_Meal_Start_and_End_Times = null, $minimum_Meal_Duration = null, $maximum_Meal_Duration = null)
    {
        $this
            ->setEnable_Worker_Editing_Options($enable_Worker_Editing_Options)
            ->setChange_Scheduled_and_Non_Scheduled_Days($change_Scheduled_and_Non_Scheduled_Days)
            ->setChange_Number_of_Scheduled_Days($change_Number_of_Scheduled_Days)
            ->setEnable_Hours_Restrictions($enable_Hours_Restrictions)
            ->setMinimum_Number_of_Hours_per_Day($minimum_Number_of_Hours_per_Day)
            ->setMaximum_Number_of_Hours_per_Day($maximum_Number_of_Hours_per_Day)
            ->setMinimum_Number_of_Hours_per_Week($minimum_Number_of_Hours_per_Week)
            ->setMaximum_Number_of_Hours_per_Week($maximum_Number_of_Hours_per_Week)
            ->setChange_Daily_Start_and_End_Times($change_Daily_Start_and_End_Times)
            ->setUniform_Start_and_End_Times($uniform_Start_and_End_Times)
            ->setFlexible_Start_Time($flexible_Start_Time)
            ->setFlexible_End_Time($flexible_End_Time)
            ->setAllow_Meals($allow_Meals)
            ->setChange_Meal_Start_and_End_Times($change_Meal_Start_and_End_Times)
            ->setMinimum_Meal_Duration($minimum_Meal_Duration)
            ->setMaximum_Meal_Duration($maximum_Meal_Duration);
    }
    /**
     * Get Enable_Worker_Editing_Options value
     * @return bool|null
     */
    public function getEnable_Worker_Editing_Options()
    {
        return $this->Enable_Worker_Editing_Options;
    }
    /**
     * Set Enable_Worker_Editing_Options value
     * @param bool $enable_Worker_Editing_Options
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setEnable_Worker_Editing_Options($enable_Worker_Editing_Options = null)
    {
        // validation for constraint: boolean
        if (!is_null($enable_Worker_Editing_Options) && !is_bool($enable_Worker_Editing_Options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enable_Worker_Editing_Options, true), gettype($enable_Worker_Editing_Options)), __LINE__);
        }
        $this->Enable_Worker_Editing_Options = $enable_Worker_Editing_Options;
        return $this;
    }
    /**
     * Get Change_Scheduled_and_Non_Scheduled_Days value
     * @return bool|null
     */
    public function getChange_Scheduled_and_Non_Scheduled_Days()
    {
        return $this->Change_Scheduled_and_Non_Scheduled_Days;
    }
    /**
     * Set Change_Scheduled_and_Non_Scheduled_Days value
     * @param bool $change_Scheduled_and_Non_Scheduled_Days
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setChange_Scheduled_and_Non_Scheduled_Days($change_Scheduled_and_Non_Scheduled_Days = null)
    {
        // validation for constraint: boolean
        if (!is_null($change_Scheduled_and_Non_Scheduled_Days) && !is_bool($change_Scheduled_and_Non_Scheduled_Days)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($change_Scheduled_and_Non_Scheduled_Days, true), gettype($change_Scheduled_and_Non_Scheduled_Days)), __LINE__);
        }
        $this->Change_Scheduled_and_Non_Scheduled_Days = $change_Scheduled_and_Non_Scheduled_Days;
        return $this;
    }
    /**
     * Get Change_Number_of_Scheduled_Days value
     * @return bool|null
     */
    public function getChange_Number_of_Scheduled_Days()
    {
        return $this->Change_Number_of_Scheduled_Days;
    }
    /**
     * Set Change_Number_of_Scheduled_Days value
     * @param bool $change_Number_of_Scheduled_Days
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setChange_Number_of_Scheduled_Days($change_Number_of_Scheduled_Days = null)
    {
        // validation for constraint: boolean
        if (!is_null($change_Number_of_Scheduled_Days) && !is_bool($change_Number_of_Scheduled_Days)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($change_Number_of_Scheduled_Days, true), gettype($change_Number_of_Scheduled_Days)), __LINE__);
        }
        $this->Change_Number_of_Scheduled_Days = $change_Number_of_Scheduled_Days;
        return $this;
    }
    /**
     * Get Enable_Hours_Restrictions value
     * @return bool|null
     */
    public function getEnable_Hours_Restrictions()
    {
        return $this->Enable_Hours_Restrictions;
    }
    /**
     * Set Enable_Hours_Restrictions value
     * @param bool $enable_Hours_Restrictions
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setEnable_Hours_Restrictions($enable_Hours_Restrictions = null)
    {
        // validation for constraint: boolean
        if (!is_null($enable_Hours_Restrictions) && !is_bool($enable_Hours_Restrictions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enable_Hours_Restrictions, true), gettype($enable_Hours_Restrictions)), __LINE__);
        }
        $this->Enable_Hours_Restrictions = $enable_Hours_Restrictions;
        return $this;
    }
    /**
     * Get Minimum_Number_of_Hours_per_Day value
     * @return float|null
     */
    public function getMinimum_Number_of_Hours_per_Day()
    {
        return $this->Minimum_Number_of_Hours_per_Day;
    }
    /**
     * Set Minimum_Number_of_Hours_per_Day value
     * @param float $minimum_Number_of_Hours_per_Day
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setMinimum_Number_of_Hours_per_Day($minimum_Number_of_Hours_per_Day = null)
    {
        // validation for constraint: float
        if (!is_null($minimum_Number_of_Hours_per_Day) && !(is_float($minimum_Number_of_Hours_per_Day) || is_numeric($minimum_Number_of_Hours_per_Day))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimum_Number_of_Hours_per_Day, true), gettype($minimum_Number_of_Hours_per_Day)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($minimum_Number_of_Hours_per_Day) && mb_strlen(mb_substr($minimum_Number_of_Hours_per_Day, mb_strpos($minimum_Number_of_Hours_per_Day, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($minimum_Number_of_Hours_per_Day, true), mb_strlen(mb_substr($minimum_Number_of_Hours_per_Day, mb_strpos($minimum_Number_of_Hours_per_Day, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minimum_Number_of_Hours_per_Day) && $minimum_Number_of_Hours_per_Day < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minimum_Number_of_Hours_per_Day, true)), __LINE__);
        }
        // validation for constraint: totalDigits(4)
        if (!is_null($minimum_Number_of_Hours_per_Day) && mb_strlen(preg_replace('/(\D)/', '', $minimum_Number_of_Hours_per_Day)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 4 digits, "%d" given', var_export($minimum_Number_of_Hours_per_Day, true), mb_strlen(preg_replace('/(\D)/', '', $minimum_Number_of_Hours_per_Day))), __LINE__);
        }
        $this->Minimum_Number_of_Hours_per_Day = $minimum_Number_of_Hours_per_Day;
        return $this;
    }
    /**
     * Get Maximum_Number_of_Hours_per_Day value
     * @return float|null
     */
    public function getMaximum_Number_of_Hours_per_Day()
    {
        return $this->Maximum_Number_of_Hours_per_Day;
    }
    /**
     * Set Maximum_Number_of_Hours_per_Day value
     * @param float $maximum_Number_of_Hours_per_Day
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setMaximum_Number_of_Hours_per_Day($maximum_Number_of_Hours_per_Day = null)
    {
        // validation for constraint: float
        if (!is_null($maximum_Number_of_Hours_per_Day) && !(is_float($maximum_Number_of_Hours_per_Day) || is_numeric($maximum_Number_of_Hours_per_Day))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximum_Number_of_Hours_per_Day, true), gettype($maximum_Number_of_Hours_per_Day)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($maximum_Number_of_Hours_per_Day) && mb_strlen(mb_substr($maximum_Number_of_Hours_per_Day, mb_strpos($maximum_Number_of_Hours_per_Day, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($maximum_Number_of_Hours_per_Day, true), mb_strlen(mb_substr($maximum_Number_of_Hours_per_Day, mb_strpos($maximum_Number_of_Hours_per_Day, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maximum_Number_of_Hours_per_Day) && $maximum_Number_of_Hours_per_Day < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maximum_Number_of_Hours_per_Day, true)), __LINE__);
        }
        // validation for constraint: totalDigits(4)
        if (!is_null($maximum_Number_of_Hours_per_Day) && mb_strlen(preg_replace('/(\D)/', '', $maximum_Number_of_Hours_per_Day)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 4 digits, "%d" given', var_export($maximum_Number_of_Hours_per_Day, true), mb_strlen(preg_replace('/(\D)/', '', $maximum_Number_of_Hours_per_Day))), __LINE__);
        }
        $this->Maximum_Number_of_Hours_per_Day = $maximum_Number_of_Hours_per_Day;
        return $this;
    }
    /**
     * Get Minimum_Number_of_Hours_per_Week value
     * @return float|null
     */
    public function getMinimum_Number_of_Hours_per_Week()
    {
        return $this->Minimum_Number_of_Hours_per_Week;
    }
    /**
     * Set Minimum_Number_of_Hours_per_Week value
     * @param float $minimum_Number_of_Hours_per_Week
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setMinimum_Number_of_Hours_per_Week($minimum_Number_of_Hours_per_Week = null)
    {
        // validation for constraint: float
        if (!is_null($minimum_Number_of_Hours_per_Week) && !(is_float($minimum_Number_of_Hours_per_Week) || is_numeric($minimum_Number_of_Hours_per_Week))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimum_Number_of_Hours_per_Week, true), gettype($minimum_Number_of_Hours_per_Week)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($minimum_Number_of_Hours_per_Week) && mb_strlen(mb_substr($minimum_Number_of_Hours_per_Week, mb_strpos($minimum_Number_of_Hours_per_Week, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($minimum_Number_of_Hours_per_Week, true), mb_strlen(mb_substr($minimum_Number_of_Hours_per_Week, mb_strpos($minimum_Number_of_Hours_per_Week, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minimum_Number_of_Hours_per_Week) && $minimum_Number_of_Hours_per_Week < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minimum_Number_of_Hours_per_Week, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($minimum_Number_of_Hours_per_Week) && mb_strlen(preg_replace('/(\D)/', '', $minimum_Number_of_Hours_per_Week)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($minimum_Number_of_Hours_per_Week, true), mb_strlen(preg_replace('/(\D)/', '', $minimum_Number_of_Hours_per_Week))), __LINE__);
        }
        $this->Minimum_Number_of_Hours_per_Week = $minimum_Number_of_Hours_per_Week;
        return $this;
    }
    /**
     * Get Maximum_Number_of_Hours_per_Week value
     * @return float|null
     */
    public function getMaximum_Number_of_Hours_per_Week()
    {
        return $this->Maximum_Number_of_Hours_per_Week;
    }
    /**
     * Set Maximum_Number_of_Hours_per_Week value
     * @param float $maximum_Number_of_Hours_per_Week
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setMaximum_Number_of_Hours_per_Week($maximum_Number_of_Hours_per_Week = null)
    {
        // validation for constraint: float
        if (!is_null($maximum_Number_of_Hours_per_Week) && !(is_float($maximum_Number_of_Hours_per_Week) || is_numeric($maximum_Number_of_Hours_per_Week))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximum_Number_of_Hours_per_Week, true), gettype($maximum_Number_of_Hours_per_Week)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($maximum_Number_of_Hours_per_Week) && mb_strlen(mb_substr($maximum_Number_of_Hours_per_Week, mb_strpos($maximum_Number_of_Hours_per_Week, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($maximum_Number_of_Hours_per_Week, true), mb_strlen(mb_substr($maximum_Number_of_Hours_per_Week, mb_strpos($maximum_Number_of_Hours_per_Week, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maximum_Number_of_Hours_per_Week) && $maximum_Number_of_Hours_per_Week < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maximum_Number_of_Hours_per_Week, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($maximum_Number_of_Hours_per_Week) && mb_strlen(preg_replace('/(\D)/', '', $maximum_Number_of_Hours_per_Week)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($maximum_Number_of_Hours_per_Week, true), mb_strlen(preg_replace('/(\D)/', '', $maximum_Number_of_Hours_per_Week))), __LINE__);
        }
        $this->Maximum_Number_of_Hours_per_Week = $maximum_Number_of_Hours_per_Week;
        return $this;
    }
    /**
     * Get Change_Daily_Start_and_End_Times value
     * @return bool|null
     */
    public function getChange_Daily_Start_and_End_Times()
    {
        return $this->Change_Daily_Start_and_End_Times;
    }
    /**
     * Set Change_Daily_Start_and_End_Times value
     * @param bool $change_Daily_Start_and_End_Times
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setChange_Daily_Start_and_End_Times($change_Daily_Start_and_End_Times = null)
    {
        // validation for constraint: boolean
        if (!is_null($change_Daily_Start_and_End_Times) && !is_bool($change_Daily_Start_and_End_Times)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($change_Daily_Start_and_End_Times, true), gettype($change_Daily_Start_and_End_Times)), __LINE__);
        }
        $this->Change_Daily_Start_and_End_Times = $change_Daily_Start_and_End_Times;
        return $this;
    }
    /**
     * Get Uniform_Start_and_End_Times value
     * @return bool|null
     */
    public function getUniform_Start_and_End_Times()
    {
        return $this->Uniform_Start_and_End_Times;
    }
    /**
     * Set Uniform_Start_and_End_Times value
     * @param bool $uniform_Start_and_End_Times
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setUniform_Start_and_End_Times($uniform_Start_and_End_Times = null)
    {
        // validation for constraint: boolean
        if (!is_null($uniform_Start_and_End_Times) && !is_bool($uniform_Start_and_End_Times)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($uniform_Start_and_End_Times, true), gettype($uniform_Start_and_End_Times)), __LINE__);
        }
        $this->Uniform_Start_and_End_Times = $uniform_Start_and_End_Times;
        return $this;
    }
    /**
     * Get Flexible_Start_Time value
     * @return string|null
     */
    public function getFlexible_Start_Time()
    {
        return $this->Flexible_Start_Time;
    }
    /**
     * Set Flexible_Start_Time value
     * @param string $flexible_Start_Time
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setFlexible_Start_Time($flexible_Start_Time = null)
    {
        // validation for constraint: string
        if (!is_null($flexible_Start_Time) && !is_string($flexible_Start_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flexible_Start_Time, true), gettype($flexible_Start_Time)), __LINE__);
        }
        $this->Flexible_Start_Time = $flexible_Start_Time;
        return $this;
    }
    /**
     * Get Flexible_End_Time value
     * @return string|null
     */
    public function getFlexible_End_Time()
    {
        return $this->Flexible_End_Time;
    }
    /**
     * Set Flexible_End_Time value
     * @param string $flexible_End_Time
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setFlexible_End_Time($flexible_End_Time = null)
    {
        // validation for constraint: string
        if (!is_null($flexible_End_Time) && !is_string($flexible_End_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flexible_End_Time, true), gettype($flexible_End_Time)), __LINE__);
        }
        $this->Flexible_End_Time = $flexible_End_Time;
        return $this;
    }
    /**
     * Get Allow_Meals value
     * @return bool|null
     */
    public function getAllow_Meals()
    {
        return $this->Allow_Meals;
    }
    /**
     * Set Allow_Meals value
     * @param bool $allow_Meals
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setAllow_Meals($allow_Meals = null)
    {
        // validation for constraint: boolean
        if (!is_null($allow_Meals) && !is_bool($allow_Meals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allow_Meals, true), gettype($allow_Meals)), __LINE__);
        }
        $this->Allow_Meals = $allow_Meals;
        return $this;
    }
    /**
     * Get Change_Meal_Start_and_End_Times value
     * @return bool|null
     */
    public function getChange_Meal_Start_and_End_Times()
    {
        return $this->Change_Meal_Start_and_End_Times;
    }
    /**
     * Set Change_Meal_Start_and_End_Times value
     * @param bool $change_Meal_Start_and_End_Times
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setChange_Meal_Start_and_End_Times($change_Meal_Start_and_End_Times = null)
    {
        // validation for constraint: boolean
        if (!is_null($change_Meal_Start_and_End_Times) && !is_bool($change_Meal_Start_and_End_Times)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($change_Meal_Start_and_End_Times, true), gettype($change_Meal_Start_and_End_Times)), __LINE__);
        }
        $this->Change_Meal_Start_and_End_Times = $change_Meal_Start_and_End_Times;
        return $this;
    }
    /**
     * Get Minimum_Meal_Duration value
     * @return float|null
     */
    public function getMinimum_Meal_Duration()
    {
        return $this->Minimum_Meal_Duration;
    }
    /**
     * Set Minimum_Meal_Duration value
     * @param float $minimum_Meal_Duration
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setMinimum_Meal_Duration($minimum_Meal_Duration = null)
    {
        // validation for constraint: float
        if (!is_null($minimum_Meal_Duration) && !(is_float($minimum_Meal_Duration) || is_numeric($minimum_Meal_Duration))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimum_Meal_Duration, true), gettype($minimum_Meal_Duration)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($minimum_Meal_Duration) && mb_strlen(mb_substr($minimum_Meal_Duration, mb_strpos($minimum_Meal_Duration, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($minimum_Meal_Duration, true), mb_strlen(mb_substr($minimum_Meal_Duration, mb_strpos($minimum_Meal_Duration, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minimum_Meal_Duration) && $minimum_Meal_Duration < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minimum_Meal_Duration, true)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($minimum_Meal_Duration) && mb_strlen(preg_replace('/(\D)/', '', $minimum_Meal_Duration)) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($minimum_Meal_Duration, true), mb_strlen(preg_replace('/(\D)/', '', $minimum_Meal_Duration))), __LINE__);
        }
        $this->Minimum_Meal_Duration = $minimum_Meal_Duration;
        return $this;
    }
    /**
     * Get Maximum_Meal_Duration value
     * @return float|null
     */
    public function getMaximum_Meal_Duration()
    {
        return $this->Maximum_Meal_Duration;
    }
    /**
     * Set Maximum_Meal_Duration value
     * @param float $maximum_Meal_Duration
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
     */
    public function setMaximum_Meal_Duration($maximum_Meal_Duration = null)
    {
        // validation for constraint: float
        if (!is_null($maximum_Meal_Duration) && !(is_float($maximum_Meal_Duration) || is_numeric($maximum_Meal_Duration))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximum_Meal_Duration, true), gettype($maximum_Meal_Duration)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($maximum_Meal_Duration) && mb_strlen(mb_substr($maximum_Meal_Duration, mb_strpos($maximum_Meal_Duration, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($maximum_Meal_Duration, true), mb_strlen(mb_substr($maximum_Meal_Duration, mb_strpos($maximum_Meal_Duration, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maximum_Meal_Duration) && $maximum_Meal_Duration < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maximum_Meal_Duration, true)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($maximum_Meal_Duration) && mb_strlen(preg_replace('/(\D)/', '', $maximum_Meal_Duration)) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($maximum_Meal_Duration, true), mb_strlen(preg_replace('/(\D)/', '', $maximum_Meal_Duration))), __LINE__);
        }
        $this->Maximum_Meal_Duration = $maximum_Meal_Duration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Editing_Options_DataType
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
