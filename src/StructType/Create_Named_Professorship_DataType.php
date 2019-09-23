<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Create_Named_Professorship_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Create Named Professorship business process.
 * @subpackage Structs
 */
class Create_Named_Professorship_DataType extends AbstractStructBase
{
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the reason for the Create Named Professorship business process
     * @var \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Named_Professorship_ID
     * Meta information extracted from the WSDL
     * - documentation: The Reference ID for the new Named Professorship
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Named_Professorship_ID;
    /**
     * The Initially_Established_Date
     * Meta information extracted from the WSDL
     * - documentation: Initial Established Date for the Named Professorship.
     * - maxOccurs: 1
     * @var string
     */
    public $Initially_Established_Date;
    /**
     * The Initially_Available_Date
     * Meta information extracted from the WSDL
     * - documentation: Initial Available Date for the Named Professorship.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Initially_Available_Date;
    /**
     * The Include_Code_in_Display_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Code should be included in the display name of the Named Professorship.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Code_in_Display_Name;
    /**
     * The Named_Professorship_Snapshot_Data
     * @var \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType
     */
    public $Named_Professorship_Snapshot_Data;
    /**
     * Constructor method for Create_Named_Professorship_DataType
     * @uses Create_Named_Professorship_DataType::setReason_Reference()
     * @uses Create_Named_Professorship_DataType::setNamed_Professorship_ID()
     * @uses Create_Named_Professorship_DataType::setInitially_Established_Date()
     * @uses Create_Named_Professorship_DataType::setInitially_Available_Date()
     * @uses Create_Named_Professorship_DataType::setInclude_Code_in_Display_Name()
     * @uses Create_Named_Professorship_DataType::setNamed_Professorship_Snapshot_Data()
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @param string $named_Professorship_ID
     * @param string $initially_Established_Date
     * @param string $initially_Available_Date
     * @param bool $include_Code_in_Display_Name
     * @param \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType $named_Professorship_Snapshot_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null, $named_Professorship_ID = null, $initially_Established_Date = null, $initially_Available_Date = null, $include_Code_in_Display_Name = null, \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType $named_Professorship_Snapshot_Data = null)
    {
        $this
            ->setReason_Reference($reason_Reference)
            ->setNamed_Professorship_ID($named_Professorship_ID)
            ->setInitially_Established_Date($initially_Established_Date)
            ->setInitially_Available_Date($initially_Available_Date)
            ->setInclude_Code_in_Display_Name($include_Code_in_Display_Name)
            ->setNamed_Professorship_Snapshot_Data($named_Professorship_Snapshot_Data);
    }
    /**
     * Get Reason_Reference value
     * @return \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType|null
     */
    public function getReason_Reference()
    {
        return $this->Reason_Reference;
    }
    /**
     * Set Reason_Reference value
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
     */
    public function setReason_Reference(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
        return $this;
    }
    /**
     * Get Named_Professorship_ID value
     * @return string|null
     */
    public function getNamed_Professorship_ID()
    {
        return $this->Named_Professorship_ID;
    }
    /**
     * Set Named_Professorship_ID value
     * @param string $named_Professorship_ID
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
     */
    public function setNamed_Professorship_ID($named_Professorship_ID = null)
    {
        // validation for constraint: string
        if (!is_null($named_Professorship_ID) && !is_string($named_Professorship_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($named_Professorship_ID, true), gettype($named_Professorship_ID)), __LINE__);
        }
        $this->Named_Professorship_ID = $named_Professorship_ID;
        return $this;
    }
    /**
     * Get Initially_Established_Date value
     * @return string|null
     */
    public function getInitially_Established_Date()
    {
        return $this->Initially_Established_Date;
    }
    /**
     * Set Initially_Established_Date value
     * @param string $initially_Established_Date
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
     */
    public function setInitially_Established_Date($initially_Established_Date = null)
    {
        // validation for constraint: string
        if (!is_null($initially_Established_Date) && !is_string($initially_Established_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initially_Established_Date, true), gettype($initially_Established_Date)), __LINE__);
        }
        $this->Initially_Established_Date = $initially_Established_Date;
        return $this;
    }
    /**
     * Get Initially_Available_Date value
     * @return string|null
     */
    public function getInitially_Available_Date()
    {
        return $this->Initially_Available_Date;
    }
    /**
     * Set Initially_Available_Date value
     * @param string $initially_Available_Date
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
     */
    public function setInitially_Available_Date($initially_Available_Date = null)
    {
        // validation for constraint: string
        if (!is_null($initially_Available_Date) && !is_string($initially_Available_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initially_Available_Date, true), gettype($initially_Available_Date)), __LINE__);
        }
        $this->Initially_Available_Date = $initially_Available_Date;
        return $this;
    }
    /**
     * Get Include_Code_in_Display_Name value
     * @return bool|null
     */
    public function getInclude_Code_in_Display_Name()
    {
        return $this->Include_Code_in_Display_Name;
    }
    /**
     * Set Include_Code_in_Display_Name value
     * @param bool $include_Code_in_Display_Name
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
     */
    public function setInclude_Code_in_Display_Name($include_Code_in_Display_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Code_in_Display_Name) && !is_bool($include_Code_in_Display_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Code_in_Display_Name, true), gettype($include_Code_in_Display_Name)), __LINE__);
        }
        $this->Include_Code_in_Display_Name = $include_Code_in_Display_Name;
        return $this;
    }
    /**
     * Get Named_Professorship_Snapshot_Data value
     * @return \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType|null
     */
    public function getNamed_Professorship_Snapshot_Data()
    {
        return $this->Named_Professorship_Snapshot_Data;
    }
    /**
     * Set Named_Professorship_Snapshot_Data value
     * @param \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType $named_Professorship_Snapshot_Data
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
     */
    public function setNamed_Professorship_Snapshot_Data(\WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType $named_Professorship_Snapshot_Data = null)
    {
        $this->Named_Professorship_Snapshot_Data = $named_Professorship_Snapshot_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Create_Named_Professorship_DataType
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
