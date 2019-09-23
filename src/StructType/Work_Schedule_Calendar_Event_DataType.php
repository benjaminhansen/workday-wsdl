<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Event_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Work Schedule Calendar Event data.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Event_DataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Text value for the name of the Work Schedule Calendar Event.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Display_Name
     * Meta information extracted from the WSDL
     * - documentation: Display Name of the Work Schedule Calendar Event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Display_Name;
    /**
     * The Start_End_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element containing date and times for the Calendar Event.
     * @var \StructType\Start_End_Minute_Support_DataType
     */
    public $Start_End_Data;
    /**
     * The Meal_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element containing meal times for the Work Schedule Calendar Event.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Scheduling_Non_Work_Time_DataType[]
     */
    public $Meal_Data;
    /**
     * The Recurrence_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element containing recurrence data for the Calendar Event.
     * - minOccurs: 0
     * @var \StructType\Recurrence_DataType
     */
    public $Recurrence_Data;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Work Schedule Calendar Event.
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Work_Schedule_Calendar_Event_DataType
     * @uses Work_Schedule_Calendar_Event_DataType::setName()
     * @uses Work_Schedule_Calendar_Event_DataType::setDisplay_Name()
     * @uses Work_Schedule_Calendar_Event_DataType::setStart_End_Data()
     * @uses Work_Schedule_Calendar_Event_DataType::setMeal_Data()
     * @uses Work_Schedule_Calendar_Event_DataType::setRecurrence_Data()
     * @uses Work_Schedule_Calendar_Event_DataType::setID()
     * @param string $name
     * @param string $display_Name
     * @param \StructType\Start_End_Minute_Support_DataType $start_End_Data
     * @param \StructType\Scheduling_Non_Work_Time_DataType[] $meal_Data
     * @param \StructType\Recurrence_DataType $recurrence_Data
     * @param string $iD
     */
    public function __construct($name = null, $display_Name = null, \StructType\Start_End_Minute_Support_DataType $start_End_Data = null, array $meal_Data = array(), \StructType\Recurrence_DataType $recurrence_Data = null, $iD = null)
    {
        $this
            ->setName($name)
            ->setDisplay_Name($display_Name)
            ->setStart_End_Data($start_End_Data)
            ->setMeal_Data($meal_Data)
            ->setRecurrence_Data($recurrence_Data)
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
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
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
     * Get Display_Name value
     * @return string|null
     */
    public function getDisplay_Name()
    {
        return $this->Display_Name;
    }
    /**
     * Set Display_Name value
     * @param string $display_Name
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
     */
    public function setDisplay_Name($display_Name = null)
    {
        // validation for constraint: string
        if (!is_null($display_Name) && !is_string($display_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($display_Name, true), gettype($display_Name)), __LINE__);
        }
        $this->Display_Name = $display_Name;
        return $this;
    }
    /**
     * Get Start_End_Data value
     * @return \StructType\Start_End_Minute_Support_DataType|null
     */
    public function getStart_End_Data()
    {
        return $this->Start_End_Data;
    }
    /**
     * Set Start_End_Data value
     * @param \StructType\Start_End_Minute_Support_DataType $start_End_Data
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
     */
    public function setStart_End_Data(\StructType\Start_End_Minute_Support_DataType $start_End_Data = null)
    {
        $this->Start_End_Data = $start_End_Data;
        return $this;
    }
    /**
     * Get Meal_Data value
     * @return \StructType\Scheduling_Non_Work_Time_DataType[]|null
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
        foreach ($values as $work_Schedule_Calendar_Event_DataTypeMeal_DataItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_Event_DataTypeMeal_DataItem instanceof \StructType\Scheduling_Non_Work_Time_DataType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_Event_DataTypeMeal_DataItem) ? get_class($work_Schedule_Calendar_Event_DataTypeMeal_DataItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_Event_DataTypeMeal_DataItem), var_export($work_Schedule_Calendar_Event_DataTypeMeal_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Meal_Data property can only contain items of type \StructType\Scheduling_Non_Work_Time_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Meal_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Scheduling_Non_Work_Time_DataType[] $meal_Data
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
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
     * @param \StructType\Scheduling_Non_Work_Time_DataType $item
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
     */
    public function addToMeal_Data(\StructType\Scheduling_Non_Work_Time_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Scheduling_Non_Work_Time_DataType) {
            throw new \InvalidArgumentException(sprintf('The Meal_Data property can only contain items of type \StructType\Scheduling_Non_Work_Time_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Meal_Data[] = $item;
        return $this;
    }
    /**
     * Get Recurrence_Data value
     * @return \StructType\Recurrence_DataType|null
     */
    public function getRecurrence_Data()
    {
        return $this->Recurrence_Data;
    }
    /**
     * Set Recurrence_Data value
     * @param \StructType\Recurrence_DataType $recurrence_Data
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
     */
    public function setRecurrence_Data(\StructType\Recurrence_DataType $recurrence_Data = null)
    {
        $this->Recurrence_Data = $recurrence_Data;
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
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
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
     * @return \StructType\Work_Schedule_Calendar_Event_DataType
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
