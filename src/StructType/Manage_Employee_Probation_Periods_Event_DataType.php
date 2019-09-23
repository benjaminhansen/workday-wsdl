<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Employee_Probation_Periods_Event_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of the Probation Period being added to the Worker
 * @subpackage Structs
 */
class Manage_Employee_Probation_Periods_Event_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Employee for the probation period
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Position for which the Probation Period is being added / modified
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Probation_Period_Reference
     * Meta information extracted from the WSDL
     * - documentation: Probation Period that needs to be updated
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType
     */
    public $Probation_Period_Reference;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Probation Period Start Date
     * - maxOccurs: 1
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: Probation Period End Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Probation_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Probation Period Type
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType
     */
    public $Probation_Type_Reference;
    /**
     * The Derive_Probation_Period_from_Rule
     * Meta information extracted from the WSDL
     * - documentation: Specifies if Workday derives the default probation period from the worker's probation period rule. If a probation period rule applies, any values in End Date or Length will not apply.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Derive_Probation_Period_from_Rule;
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Probation_Period_Length_DataType
     */
    public $Length;
    /**
     * The Extended_Length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Probation_Period_Extended_Length_DataType
     */
    public $Extended_Length;
    /**
     * The Probation_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Probation Period Reason
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType
     */
    public $Probation_Reason_Reference;
    /**
     * The Extended_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Extended End Date of the Probation Period
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Extended_End_Date;
    /**
     * The Probation_Review
     * Meta information extracted from the WSDL
     * - documentation: Probation Period Review localization error message | Details of Probation Period Review
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Probation_Review_DataType
     */
    public $Probation_Review;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Comments / Note
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * Constructor method for Manage_Employee_Probation_Periods_Event_DataType
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setWorker_Reference()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setPosition_Reference()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setProbation_Period_Reference()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setStart_Date()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setEnd_Date()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setProbation_Type_Reference()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setDerive_Probation_Period_from_Rule()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setLength()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setExtended_Length()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setProbation_Reason_Reference()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setExtended_End_Date()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setProbation_Review()
     * @uses Manage_Employee_Probation_Periods_Event_DataType::setNote()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $probation_Period_Reference
     * @param string $start_Date
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference
     * @param bool $derive_Probation_Period_from_Rule
     * @param \WorkdayWsdl\\StructType\Probation_Period_Length_DataType $length
     * @param \WorkdayWsdl\\StructType\Probation_Period_Extended_Length_DataType $extended_Length
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType $probation_Reason_Reference
     * @param string $extended_End_Date
     * @param \WorkdayWsdl\\StructType\Probation_Review_DataType $probation_Review
     * @param string $note
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null, \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $probation_Period_Reference = null, $start_Date = null, $end_Date = null, \WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference = null, $derive_Probation_Period_from_Rule = null, \WorkdayWsdl\\StructType\Probation_Period_Length_DataType $length = null, \WorkdayWsdl\\StructType\Probation_Period_Extended_Length_DataType $extended_Length = null, \WorkdayWsdl\\StructType\Employee_Probation_Period_ReasonObjectType $probation_Reason_Reference = null, $extended_End_Date = null, \WorkdayWsdl\\StructType\Probation_Review_DataType $probation_Review = null, $note = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setPosition_Reference($position_Reference)
            ->setProbation_Period_Reference($probation_Period_Reference)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setProbation_Type_Reference($probation_Type_Reference)
            ->setDerive_Probation_Period_from_Rule($derive_Probation_Period_from_Rule)
            ->setLength($length)
            ->setExtended_Length($extended_Length)
            ->setProbation_Reason_Reference($probation_Reason_Reference)
            ->setExtended_End_Date($extended_End_Date)
            ->setProbation_Review($probation_Review)
            ->setNote($note);
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setPosition_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Probation_Period_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType|null
     */
    public function getProbation_Period_Reference()
    {
        return $this->Probation_Period_Reference;
    }
    /**
     * Set Probation_Period_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $probation_Period_Reference
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setProbation_Period_Reference(\WorkdayWsdl\\StructType\Employee_Probation_PeriodObjectType $probation_Period_Reference = null)
    {
        $this->Probation_Period_Reference = $probation_Period_Reference;
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setProbation_Type_Reference(\WorkdayWsdl\\StructType\Employee_Probation_Period_TypeObjectType $probation_Type_Reference = null)
    {
        $this->Probation_Type_Reference = $probation_Type_Reference;
        return $this;
    }
    /**
     * Get Derive_Probation_Period_from_Rule value
     * @return bool|null
     */
    public function getDerive_Probation_Period_from_Rule()
    {
        return $this->Derive_Probation_Period_from_Rule;
    }
    /**
     * Set Derive_Probation_Period_from_Rule value
     * @param bool $derive_Probation_Period_from_Rule
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setDerive_Probation_Period_from_Rule($derive_Probation_Period_from_Rule = null)
    {
        // validation for constraint: boolean
        if (!is_null($derive_Probation_Period_from_Rule) && !is_bool($derive_Probation_Period_from_Rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($derive_Probation_Period_from_Rule, true), gettype($derive_Probation_Period_from_Rule)), __LINE__);
        }
        $this->Derive_Probation_Period_from_Rule = $derive_Probation_Period_from_Rule;
        return $this;
    }
    /**
     * Get Length value
     * @return \WorkdayWsdl\\StructType\Probation_Period_Length_DataType|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param \WorkdayWsdl\\StructType\Probation_Period_Length_DataType $length
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setLength(\WorkdayWsdl\\StructType\Probation_Period_Length_DataType $length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Extended_Length value
     * @return \WorkdayWsdl\\StructType\Probation_Period_Extended_Length_DataType|null
     */
    public function getExtended_Length()
    {
        return $this->Extended_Length;
    }
    /**
     * Set Extended_Length value
     * @param \WorkdayWsdl\\StructType\Probation_Period_Extended_Length_DataType $extended_Length
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setExtended_Length(\WorkdayWsdl\\StructType\Probation_Period_Extended_Length_DataType $extended_Length = null)
    {
        $this->Extended_Length = $extended_Length;
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
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
     * Get Probation_Review value
     * @return \WorkdayWsdl\\StructType\Probation_Review_DataType|null
     */
    public function getProbation_Review()
    {
        return $this->Probation_Review;
    }
    /**
     * Set Probation_Review value
     * @param \WorkdayWsdl\\StructType\Probation_Review_DataType $probation_Review
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
     */
    public function setProbation_Review(\WorkdayWsdl\\StructType\Probation_Review_DataType $probation_Review = null)
    {
        $this->Probation_Review = $probation_Review;
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
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
     * @return \WorkdayWsdl\\StructType\Manage_Employee_Probation_Periods_Event_DataType
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
