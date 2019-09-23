<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Probation_Period_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Probation Period data. Including Corrected data.
 * @subpackage Structs
 */
class Employee_Probation_Period_Detail_DataType extends AbstractStructBase
{
    /**
     * The Employee_Probation_Period_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Probation Period Event Reference for the Worker's effective Position
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Employee_Probation_Period_Event_Reference;
    /**
     * The Employee_Probation_Period_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Probation Period reference.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType
     */
    public $Employee_Probation_Period_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of the Probation Period Event
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Probation Start Date of the Probation Period belonging to the effective Position
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: Probation End Date of the Probation Period belonging to the effective Position
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Probation_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Probation Type of the Probation Period belonging to the effective Position
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType
     */
    public $Probation_Type_Reference;
    /**
     * The Probation_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Probation Reason of the Probation Period belonging to the effective Position
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType
     */
    public $Probation_Reason_Reference;
    /**
     * The Extended_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Probation Extended End Date of the Probation Period belonging to the effective Position
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Extended_End_Date;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Note / Comments of the Probation Period belonging to the effective Position
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * Constructor method for Employee_Probation_Period_Detail_DataType
     * @uses Employee_Probation_Period_Detail_DataType::setEmployee_Probation_Period_Event_Reference()
     * @uses Employee_Probation_Period_Detail_DataType::setEmployee_Probation_Period_Reference()
     * @uses Employee_Probation_Period_Detail_DataType::setEffective_Date()
     * @uses Employee_Probation_Period_Detail_DataType::setStart_Date()
     * @uses Employee_Probation_Period_Detail_DataType::setEnd_Date()
     * @uses Employee_Probation_Period_Detail_DataType::setProbation_Type_Reference()
     * @uses Employee_Probation_Period_Detail_DataType::setProbation_Reason_Reference()
     * @uses Employee_Probation_Period_Detail_DataType::setExtended_End_Date()
     * @uses Employee_Probation_Period_Detail_DataType::setNote()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $employee_Probation_Period_Reference
     * @param string $effective_Date
     * @param string $start_Date
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType $probation_Reason_Reference
     * @param string $extended_End_Date
     * @param string $note
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference = null, \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $employee_Probation_Period_Reference = null, $effective_Date = null, $start_Date = null, $end_Date = null, \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference = null, \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType $probation_Reason_Reference = null, $extended_End_Date = null, $note = null)
    {
        $this
            ->setEmployee_Probation_Period_Event_Reference($employee_Probation_Period_Event_Reference)
            ->setEmployee_Probation_Period_Reference($employee_Probation_Period_Reference)
            ->setEffective_Date($effective_Date)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setProbation_Type_Reference($probation_Type_Reference)
            ->setProbation_Reason_Reference($probation_Reason_Reference)
            ->setExtended_End_Date($extended_End_Date)
            ->setNote($note);
    }
    /**
     * Get Employee_Probation_Period_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getEmployee_Probation_Period_Event_Reference()
    {
        return $this->Employee_Probation_Period_Event_Reference;
    }
    /**
     * Set Employee_Probation_Period_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
     */
    public function setEmployee_Probation_Period_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference = null)
    {
        $this->Employee_Probation_Period_Event_Reference = $employee_Probation_Period_Event_Reference;
        return $this;
    }
    /**
     * Get Employee_Probation_Period_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType|null
     */
    public function getEmployee_Probation_Period_Reference()
    {
        return $this->Employee_Probation_Period_Reference;
    }
    /**
     * Set Employee_Probation_Period_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $employee_Probation_Period_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
     */
    public function setEmployee_Probation_Period_Reference(\WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $employee_Probation_Period_Reference = null)
    {
        $this->Employee_Probation_Period_Reference = $employee_Probation_Period_Reference;
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
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
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
     * Get Probation_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType|null
     */
    public function getProbation_Type_Reference()
    {
        return $this->Probation_Type_Reference;
    }
    /**
     * Set Probation_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
     */
    public function setProbation_Type_Reference(\WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference = null)
    {
        $this->Probation_Type_Reference = $probation_Type_Reference;
        return $this;
    }
    /**
     * Get Probation_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType|null
     */
    public function getProbation_Reason_Reference()
    {
        return $this->Probation_Reason_Reference;
    }
    /**
     * Set Probation_Reason_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType $probation_Reason_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
     */
    public function setProbation_Reason_Reference(\WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType $probation_Reason_Reference = null)
    {
        $this->Probation_Reason_Reference = $probation_Reason_Reference;
        return $this;
    }
    /**
     * Get Extended_End_Date value
     * @return string|null
     */
    public function getExtended_End_Date()
    {
        return $this->Extended_End_Date;
    }
    /**
     * Set Extended_End_Date value
     * @param string $extended_End_Date
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
     */
    public function setExtended_End_Date($extended_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($extended_End_Date) && !is_string($extended_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extended_End_Date, true), gettype($extended_End_Date)), __LINE__);
        }
        $this->Extended_End_Date = $extended_End_Date;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Detail_DataType
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
