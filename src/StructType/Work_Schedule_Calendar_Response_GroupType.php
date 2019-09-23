<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Options for responded Work Schedule Calendar.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Boolean value to include references for Work Schedule Calendar.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Work_Schedule_Calendar_Data
     * Meta information extracted from the WSDL
     * - documentation: Boolean value to include holiday calendar data for Work Schedule Calendar.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Work_Schedule_Calendar_Data;
    /**
     * Constructor method for Work_Schedule_Calendar_Response_GroupType
     * @uses Work_Schedule_Calendar_Response_GroupType::setInclude_Reference()
     * @uses Work_Schedule_Calendar_Response_GroupType::setInclude_Work_Schedule_Calendar_Data()
     * @param bool $include_Reference
     * @param bool $include_Work_Schedule_Calendar_Data
     */
    public function __construct($include_Reference = null, $include_Work_Schedule_Calendar_Data = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Work_Schedule_Calendar_Data($include_Work_Schedule_Calendar_Data);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Get Include_Work_Schedule_Calendar_Data value
     * @return bool|null
     */
    public function getInclude_Work_Schedule_Calendar_Data()
    {
        return $this->Include_Work_Schedule_Calendar_Data;
    }
    /**
     * Set Include_Work_Schedule_Calendar_Data value
     * @param bool $include_Work_Schedule_Calendar_Data
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Response_GroupType
     */
    public function setInclude_Work_Schedule_Calendar_Data($include_Work_Schedule_Calendar_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Work_Schedule_Calendar_Data) && !is_bool($include_Work_Schedule_Calendar_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Work_Schedule_Calendar_Data, true), gettype($include_Work_Schedule_Calendar_Data)), __LINE__);
        }
        $this->Include_Work_Schedule_Calendar_Data = $include_Work_Schedule_Calendar_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Response_GroupType
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
