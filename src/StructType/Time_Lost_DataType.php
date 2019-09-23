<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Time_Lost_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The data for the time lost that occurred.
 * @subpackage Structs
 */
class Time_Lost_DataType extends AbstractStructBase
{
    /**
     * The Full_Day_Lost
     * Meta information extracted from the WSDL
     * - documentation: Whether a full day was lost or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Full_Day_Lost;
    /**
     * The Job_Restrictions
     * Meta information extracted from the WSDL
     * - documentation: Whether there are job restrictions or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Job_Restrictions;
    /**
     * The Time_Away_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType[]
     */
    public $Time_Away_Data;
    /**
     * Constructor method for Time_Lost_DataType
     * @uses Time_Lost_DataType::setFull_Day_Lost()
     * @uses Time_Lost_DataType::setJob_Restrictions()
     * @uses Time_Lost_DataType::setTime_Away_Data()
     * @param bool $full_Day_Lost
     * @param bool $job_Restrictions
     * @param \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType[] $time_Away_Data
     */
    public function __construct($full_Day_Lost = null, $job_Restrictions = null, array $time_Away_Data = array())
    {
        $this
            ->setFull_Day_Lost($full_Day_Lost)
            ->setJob_Restrictions($job_Restrictions)
            ->setTime_Away_Data($time_Away_Data);
    }
    /**
     * Get Full_Day_Lost value
     * @return bool|null
     */
    public function getFull_Day_Lost()
    {
        return $this->Full_Day_Lost;
    }
    /**
     * Set Full_Day_Lost value
     * @param bool $full_Day_Lost
     * @return \WorkdayWsdl\\StructType\Time_Lost_DataType
     */
    public function setFull_Day_Lost($full_Day_Lost = null)
    {
        // validation for constraint: boolean
        if (!is_null($full_Day_Lost) && !is_bool($full_Day_Lost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($full_Day_Lost, true), gettype($full_Day_Lost)), __LINE__);
        }
        $this->Full_Day_Lost = $full_Day_Lost;
        return $this;
    }
    /**
     * Get Job_Restrictions value
     * @return bool|null
     */
    public function getJob_Restrictions()
    {
        return $this->Job_Restrictions;
    }
    /**
     * Set Job_Restrictions value
     * @param bool $job_Restrictions
     * @return \WorkdayWsdl\\StructType\Time_Lost_DataType
     */
    public function setJob_Restrictions($job_Restrictions = null)
    {
        // validation for constraint: boolean
        if (!is_null($job_Restrictions) && !is_bool($job_Restrictions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($job_Restrictions, true), gettype($job_Restrictions)), __LINE__);
        }
        $this->Job_Restrictions = $job_Restrictions;
        return $this;
    }
    /**
     * Get Time_Away_Data value
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType[]|null
     */
    public function getTime_Away_Data()
    {
        return $this->Time_Away_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTime_Away_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTime_Away_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTime_Away_DataForArrayConstraintsFromSetTime_Away_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $time_Lost_DataTypeTime_Away_DataItem) {
            // validation for constraint: itemType
            if (!$time_Lost_DataTypeTime_Away_DataItem instanceof \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType) {
                $invalidValues[] = is_object($time_Lost_DataTypeTime_Away_DataItem) ? get_class($time_Lost_DataTypeTime_Away_DataItem) : sprintf('%s(%s)', gettype($time_Lost_DataTypeTime_Away_DataItem), var_export($time_Lost_DataTypeTime_Away_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Time_Away_Data property can only contain items of type \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Time_Away_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType[] $time_Away_Data
     * @return \WorkdayWsdl\\StructType\Time_Lost_DataType
     */
    public function setTime_Away_Data(array $time_Away_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($time_Away_DataArrayErrorMessage = self::validateTime_Away_DataForArrayConstraintsFromSetTime_Away_Data($time_Away_Data))) {
            throw new \InvalidArgumentException($time_Away_DataArrayErrorMessage, __LINE__);
        }
        $this->Time_Away_Data = $time_Away_Data;
        return $this;
    }
    /**
     * Add item to Time_Away_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType $item
     * @return \WorkdayWsdl\\StructType\Time_Lost_DataType
     */
    public function addToTime_Away_Data(\WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType) {
            throw new \InvalidArgumentException(sprintf('The Time_Away_Data property can only contain items of type \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Time_Away_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Time_Lost_DataType
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
