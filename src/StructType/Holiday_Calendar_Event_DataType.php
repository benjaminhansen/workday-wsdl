<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Holiday_Calendar_Event_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Event Data for the Holiday Calendar.
 * @subpackage Structs
 */
class Holiday_Calendar_Event_DataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Text Value for the name of the Holiday Calendar Entry.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Start_End_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element containing date and times for the Calendar Event.
     * @var \WorkdayWsdl\\StructType\Start_End_DataType
     */
    public $Start_End_Data;
    /**
     * The Recurrence_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element containing recurrence data for the Calendar Event.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Recurrence_DataType
     */
    public $Recurrence_Data;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Holiday Calendar Event.
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Holiday_Calendar_Event_DataType
     * @uses Holiday_Calendar_Event_DataType::setName()
     * @uses Holiday_Calendar_Event_DataType::setStart_End_Data()
     * @uses Holiday_Calendar_Event_DataType::setRecurrence_Data()
     * @uses Holiday_Calendar_Event_DataType::setID()
     * @param string $name
     * @param \WorkdayWsdl\\StructType\Start_End_DataType $start_End_Data
     * @param \WorkdayWsdl\\StructType\Recurrence_DataType $recurrence_Data
     * @param string $iD
     */
    public function __construct($name = null, \WorkdayWsdl\\StructType\Start_End_DataType $start_End_Data = null, \WorkdayWsdl\\StructType\Recurrence_DataType $recurrence_Data = null, $iD = null)
    {
        $this
            ->setName($name)
            ->setStart_End_Data($start_End_Data)
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
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Event_DataType
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
     * Get Start_End_Data value
     * @return \WorkdayWsdl\\StructType\Start_End_DataType|null
     */
    public function getStart_End_Data()
    {
        return $this->Start_End_Data;
    }
    /**
     * Set Start_End_Data value
     * @param \WorkdayWsdl\\StructType\Start_End_DataType $start_End_Data
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Event_DataType
     */
    public function setStart_End_Data(\WorkdayWsdl\\StructType\Start_End_DataType $start_End_Data = null)
    {
        $this->Start_End_Data = $start_End_Data;
        return $this;
    }
    /**
     * Get Recurrence_Data value
     * @return \WorkdayWsdl\\StructType\Recurrence_DataType|null
     */
    public function getRecurrence_Data()
    {
        return $this->Recurrence_Data;
    }
    /**
     * Set Recurrence_Data value
     * @param \WorkdayWsdl\\StructType\Recurrence_DataType $recurrence_Data
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Event_DataType
     */
    public function setRecurrence_Data(\WorkdayWsdl\\StructType\Recurrence_DataType $recurrence_Data = null)
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
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Event_DataType
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
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Event_DataType
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
