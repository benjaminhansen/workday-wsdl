<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Edit_Named_Professorship_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper Element for Named Professorship Data
 * @subpackage Structs
 */
class Edit_Named_Professorship_DataType extends AbstractStructBase
{
    /**
     * The Named_Professorship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference Named Professorship for Edit
     * @var \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType
     */
    public $Named_Professorship_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date for Edit Named Professorship
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to reason for Edit Named Professorship
     * @var \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Include_Code_in_Display_Name
     * Meta information extracted from the WSDL
     * - documentation: Determines whether the Code is included in the Display name of the Named professorship
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Code_in_Display_Name;
    /**
     * The Initially_Available_Date
     * Meta information extracted from the WSDL
     * - documentation: Date Named Professorship is available
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Initially_Available_Date;
    /**
     * The On_Hold_Date
     * Meta information extracted from the WSDL
     * - documentation: On hold date of Named Professorship
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $On_Hold_Date;
    /**
     * The Discontinued_Date
     * Meta information extracted from the WSDL
     * - documentation: Discontinued Date of Named Professorship
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Discontinued_Date;
    /**
     * The Named_Professorship_Snapshot_Data
     * @var \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType
     */
    public $Named_Professorship_Snapshot_Data;
    /**
     * Constructor method for Edit_Named_Professorship_DataType
     * @uses Edit_Named_Professorship_DataType::setNamed_Professorship_Reference()
     * @uses Edit_Named_Professorship_DataType::setEffective_Date()
     * @uses Edit_Named_Professorship_DataType::setReason_Reference()
     * @uses Edit_Named_Professorship_DataType::setInclude_Code_in_Display_Name()
     * @uses Edit_Named_Professorship_DataType::setInitially_Available_Date()
     * @uses Edit_Named_Professorship_DataType::setOn_Hold_Date()
     * @uses Edit_Named_Professorship_DataType::setDiscontinued_Date()
     * @uses Edit_Named_Professorship_DataType::setNamed_Professorship_Snapshot_Data()
     * @param \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference
     * @param string $effective_Date
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @param bool $include_Code_in_Display_Name
     * @param string $initially_Available_Date
     * @param string $on_Hold_Date
     * @param string $discontinued_Date
     * @param \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType $named_Professorship_Snapshot_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference = null, $effective_Date = null, \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null, $include_Code_in_Display_Name = null, $initially_Available_Date = null, $on_Hold_Date = null, $discontinued_Date = null, \WorkdayWsdl\\StructType\Named_Professorship_Snapshot_DataType $named_Professorship_Snapshot_Data = null)
    {
        $this
            ->setNamed_Professorship_Reference($named_Professorship_Reference)
            ->setEffective_Date($effective_Date)
            ->setReason_Reference($reason_Reference)
            ->setInclude_Code_in_Display_Name($include_Code_in_Display_Name)
            ->setInitially_Available_Date($initially_Available_Date)
            ->setOn_Hold_Date($on_Hold_Date)
            ->setDiscontinued_Date($discontinued_Date)
            ->setNamed_Professorship_Snapshot_Data($named_Professorship_Snapshot_Data);
    }
    /**
     * Get Named_Professorship_Reference value
     * @return \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType|null
     */
    public function getNamed_Professorship_Reference()
    {
        return $this->Named_Professorship_Reference;
    }
    /**
     * Set Named_Professorship_Reference value
     * @param \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
     */
    public function setNamed_Professorship_Reference(\WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference = null)
    {
        $this->Named_Professorship_Reference = $named_Professorship_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
     */
    public function setReason_Reference(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
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
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
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
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
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
     * Get On_Hold_Date value
     * @return string|null
     */
    public function getOn_Hold_Date()
    {
        return $this->On_Hold_Date;
    }
    /**
     * Set On_Hold_Date value
     * @param string $on_Hold_Date
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
     */
    public function setOn_Hold_Date($on_Hold_Date = null)
    {
        // validation for constraint: string
        if (!is_null($on_Hold_Date) && !is_string($on_Hold_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($on_Hold_Date, true), gettype($on_Hold_Date)), __LINE__);
        }
        $this->On_Hold_Date = $on_Hold_Date;
        return $this;
    }
    /**
     * Get Discontinued_Date value
     * @return string|null
     */
    public function getDiscontinued_Date()
    {
        return $this->Discontinued_Date;
    }
    /**
     * Set Discontinued_Date value
     * @param string $discontinued_Date
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
     */
    public function setDiscontinued_Date($discontinued_Date = null)
    {
        // validation for constraint: string
        if (!is_null($discontinued_Date) && !is_string($discontinued_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discontinued_Date, true), gettype($discontinued_Date)), __LINE__);
        }
        $this->Discontinued_Date = $discontinued_Date;
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
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
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
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_DataType
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
