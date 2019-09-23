<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Period_Reporting_Calendar_Row_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Period Reporting Row Data
 * @subpackage Structs
 */
class Period_Reporting_Calendar_Row_DataType extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: The Order of the Collective Agreement Factor Parameter. | Specifies the order of evaluation of the Work Status Rules | The order this period has | Order for the Orderable Item.
     * - base: xsd:string
     * - maxLength: 6
     * - maxOccurs: 1
     * @var string
     */
    public $Order;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID of the Period Reporting Calendar Row
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Calendar_Period_Name
     * Meta information extracted from the WSDL
     * - documentation: The Name of the Period.
     * - maxOccurs: 1
     * @var string
     */
    public $Calendar_Period_Name;
    /**
     * The Academic_Period_Reference
     * Meta information extracted from the WSDL
     * - documentation: The academic period associated with this period row. (Is Optional!)
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_PeriodObjectType
     */
    public $Academic_Period_Reference;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The Start Date of the evaluation period
     * - maxOccurs: 1
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: The End Date of the evaluation period
     * - maxOccurs: 1
     * @var string
     */
    public $End_Date;
    /**
     * The Evaluation_Constraint_Reference
     * Meta information extracted from the WSDL
     * - documentation: The specification of how the status of a period is calculated based on the date range
     * @var \WorkdayWsdl\\StructType\Evaluation_ConstraintObjectType
     */
    public $Evaluation_Constraint_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: States that this row is to be deleted
     * @var bool
     */
    public $Delete;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Determines if this row is a new row to add
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Period_Reporting_Calendar_Row_DataType
     * @uses Period_Reporting_Calendar_Row_DataType::setOrder()
     * @uses Period_Reporting_Calendar_Row_DataType::setID()
     * @uses Period_Reporting_Calendar_Row_DataType::setCalendar_Period_Name()
     * @uses Period_Reporting_Calendar_Row_DataType::setAcademic_Period_Reference()
     * @uses Period_Reporting_Calendar_Row_DataType::setStart_Date()
     * @uses Period_Reporting_Calendar_Row_DataType::setEnd_Date()
     * @uses Period_Reporting_Calendar_Row_DataType::setEvaluation_Constraint_Reference()
     * @uses Period_Reporting_Calendar_Row_DataType::setDelete()
     * @uses Period_Reporting_Calendar_Row_DataType::setAdd_Only()
     * @param string $order
     * @param string $iD
     * @param string $calendar_Period_Name
     * @param \WorkdayWsdl\\StructType\Academic_PeriodObjectType $academic_Period_Reference
     * @param string $start_Date
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Evaluation_ConstraintObjectType $evaluation_Constraint_Reference
     * @param bool $delete
     * @param bool $add_Only
     */
    public function __construct($order = null, $iD = null, $calendar_Period_Name = null, \WorkdayWsdl\\StructType\Academic_PeriodObjectType $academic_Period_Reference = null, $start_Date = null, $end_Date = null, \WorkdayWsdl\\StructType\Evaluation_ConstraintObjectType $evaluation_Constraint_Reference = null, $delete = null, $add_Only = null)
    {
        $this
            ->setOrder($order)
            ->setID($iD)
            ->setCalendar_Period_Name($calendar_Period_Name)
            ->setAcademic_Period_Reference($academic_Period_Reference)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setEvaluation_Constraint_Reference($evaluation_Constraint_Reference)
            ->setDelete($delete)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param string $order
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($order) && mb_strlen($order) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($order)), __LINE__);
        }
        $this->Order = $order;
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
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
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
     * Get Calendar_Period_Name value
     * @return string|null
     */
    public function getCalendar_Period_Name()
    {
        return $this->Calendar_Period_Name;
    }
    /**
     * Set Calendar_Period_Name value
     * @param string $calendar_Period_Name
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setCalendar_Period_Name($calendar_Period_Name = null)
    {
        // validation for constraint: string
        if (!is_null($calendar_Period_Name) && !is_string($calendar_Period_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendar_Period_Name, true), gettype($calendar_Period_Name)), __LINE__);
        }
        $this->Calendar_Period_Name = $calendar_Period_Name;
        return $this;
    }
    /**
     * Get Academic_Period_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_PeriodObjectType|null
     */
    public function getAcademic_Period_Reference()
    {
        return $this->Academic_Period_Reference;
    }
    /**
     * Set Academic_Period_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_PeriodObjectType $academic_Period_Reference
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setAcademic_Period_Reference(\WorkdayWsdl\\StructType\Academic_PeriodObjectType $academic_Period_Reference = null)
    {
        $this->Academic_Period_Reference = $academic_Period_Reference;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get Evaluation_Constraint_Reference value
     * @return \WorkdayWsdl\\StructType\Evaluation_ConstraintObjectType|null
     */
    public function getEvaluation_Constraint_Reference()
    {
        return $this->Evaluation_Constraint_Reference;
    }
    /**
     * Set Evaluation_Constraint_Reference value
     * @param \WorkdayWsdl\\StructType\Evaluation_ConstraintObjectType $evaluation_Constraint_Reference
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setEvaluation_Constraint_Reference(\WorkdayWsdl\\StructType\Evaluation_ConstraintObjectType $evaluation_Constraint_Reference = null)
    {
        $this->Evaluation_Constraint_Reference = $evaluation_Constraint_Reference;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType
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
