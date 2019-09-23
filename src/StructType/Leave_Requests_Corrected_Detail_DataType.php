<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leave_Requests_Corrected_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Leave Requests that have corrected data.
 * @subpackage Structs
 */
class Leave_Requests_Corrected_Detail_DataType extends AbstractStructBase
{
    /**
     * The Leave_Request_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker Leave Event
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Leave_Request_EventObjectType
     */
    public $Leave_Request_Event_Reference;
    /**
     * The Leave_Request_Description
     * Meta information extracted from the WSDL
     * - documentation: The description of Leave Request Event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Leave_Request_Description;
    /**
     * The Leave_Return_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Leave Return reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Leave_Return_Event_Reference;
    /**
     * The On_Leave
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Worker is On Leave (as of As Of Date).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $On_Leave;
    /**
     * The Leave_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Current leave event Start Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Leave_Start_Date;
    /**
     * The Estimated_Leave_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Current leave event Estimated End Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Estimated_Leave_End_Date;
    /**
     * The Leave_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Most recent leave event Actual End Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Leave_End_Date;
    /**
     * The First_Day_of_Work
     * Meta information extracted from the WSDL
     * - documentation: First Day of Work.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Day_of_Work;
    /**
     * The Leave_Last_Day_of_Work
     * Meta information extracted from the WSDL
     * - documentation: Last day of work for the worker's leave event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Leave_Last_Day_of_Work;
    /**
     * The Leave_of_Absence_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of leave.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Leave_of_Absence_TypeObjectType
     */
    public $Leave_of_Absence_Type_Reference;
    /**
     * The Links_Back_to_Prior_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The leave request that provides entitlement for this event
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Leave_Request_EventObjectType
     */
    public $Links_Back_to_Prior_Event_Reference;
    /**
     * The Benefits_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Benefits Effect.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Benefits_Effect;
    /**
     * The Payroll_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Payroll Effect.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Payroll_Effect;
    /**
     * The Paid_Time_Off_Accrual_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Time Off.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Paid_Time_Off_Accrual_Effect;
    /**
     * The Continuous_Service_Accrual_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Continuous
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Continuous_Service_Accrual_Effect;
    /**
     * The Stock_Vesting_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Stock Vesting
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Stock_Vesting_Effect;
    /**
     * The Leave_Type_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Leave Type Reason
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Leave_Type_ReasonObjectType
     */
    public $Leave_Type_Reason_Reference;
    /**
     * The Leave_Request_Additional_Fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Leave_Request_Additional_FieldsType
     */
    public $Leave_Request_Additional_Fields;
    /**
     * Constructor method for Leave_Requests_Corrected_Detail_DataType
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Request_Event_Reference()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Request_Description()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Return_Event_Reference()
     * @uses Leave_Requests_Corrected_Detail_DataType::setOn_Leave()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Start_Date()
     * @uses Leave_Requests_Corrected_Detail_DataType::setEstimated_Leave_End_Date()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_End_Date()
     * @uses Leave_Requests_Corrected_Detail_DataType::setFirst_Day_of_Work()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Last_Day_of_Work()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_of_Absence_Type_Reference()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLinks_Back_to_Prior_Event_Reference()
     * @uses Leave_Requests_Corrected_Detail_DataType::setBenefits_Effect()
     * @uses Leave_Requests_Corrected_Detail_DataType::setPayroll_Effect()
     * @uses Leave_Requests_Corrected_Detail_DataType::setPaid_Time_Off_Accrual_Effect()
     * @uses Leave_Requests_Corrected_Detail_DataType::setContinuous_Service_Accrual_Effect()
     * @uses Leave_Requests_Corrected_Detail_DataType::setStock_Vesting_Effect()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Type_Reason_Reference()
     * @uses Leave_Requests_Corrected_Detail_DataType::setLeave_Request_Additional_Fields()
     * @param \WorkdayWsdl\\StructType\Leave_Request_EventObjectType $leave_Request_Event_Reference
     * @param string $leave_Request_Description
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $leave_Return_Event_Reference
     * @param bool $on_Leave
     * @param string $leave_Start_Date
     * @param string $estimated_Leave_End_Date
     * @param string $leave_End_Date
     * @param string $first_Day_of_Work
     * @param string $leave_Last_Day_of_Work
     * @param \WorkdayWsdl\\StructType\Leave_of_Absence_TypeObjectType $leave_of_Absence_Type_Reference
     * @param \WorkdayWsdl\\StructType\Leave_Request_EventObjectType $links_Back_to_Prior_Event_Reference
     * @param bool $benefits_Effect
     * @param bool $payroll_Effect
     * @param bool $paid_Time_Off_Accrual_Effect
     * @param bool $continuous_Service_Accrual_Effect
     * @param bool $stock_Vesting_Effect
     * @param \WorkdayWsdl\\StructType\Leave_Type_ReasonObjectType $leave_Type_Reason_Reference
     * @param \WorkdayWsdl\\StructType\Leave_Request_Additional_FieldsType $leave_Request_Additional_Fields
     */
    public function __construct(\WorkdayWsdl\\StructType\Leave_Request_EventObjectType $leave_Request_Event_Reference = null, $leave_Request_Description = null, \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $leave_Return_Event_Reference = null, $on_Leave = null, $leave_Start_Date = null, $estimated_Leave_End_Date = null, $leave_End_Date = null, $first_Day_of_Work = null, $leave_Last_Day_of_Work = null, \WorkdayWsdl\\StructType\Leave_of_Absence_TypeObjectType $leave_of_Absence_Type_Reference = null, \WorkdayWsdl\\StructType\Leave_Request_EventObjectType $links_Back_to_Prior_Event_Reference = null, $benefits_Effect = null, $payroll_Effect = null, $paid_Time_Off_Accrual_Effect = null, $continuous_Service_Accrual_Effect = null, $stock_Vesting_Effect = null, \WorkdayWsdl\\StructType\Leave_Type_ReasonObjectType $leave_Type_Reason_Reference = null, \WorkdayWsdl\\StructType\Leave_Request_Additional_FieldsType $leave_Request_Additional_Fields = null)
    {
        $this
            ->setLeave_Request_Event_Reference($leave_Request_Event_Reference)
            ->setLeave_Request_Description($leave_Request_Description)
            ->setLeave_Return_Event_Reference($leave_Return_Event_Reference)
            ->setOn_Leave($on_Leave)
            ->setLeave_Start_Date($leave_Start_Date)
            ->setEstimated_Leave_End_Date($estimated_Leave_End_Date)
            ->setLeave_End_Date($leave_End_Date)
            ->setFirst_Day_of_Work($first_Day_of_Work)
            ->setLeave_Last_Day_of_Work($leave_Last_Day_of_Work)
            ->setLeave_of_Absence_Type_Reference($leave_of_Absence_Type_Reference)
            ->setLinks_Back_to_Prior_Event_Reference($links_Back_to_Prior_Event_Reference)
            ->setBenefits_Effect($benefits_Effect)
            ->setPayroll_Effect($payroll_Effect)
            ->setPaid_Time_Off_Accrual_Effect($paid_Time_Off_Accrual_Effect)
            ->setContinuous_Service_Accrual_Effect($continuous_Service_Accrual_Effect)
            ->setStock_Vesting_Effect($stock_Vesting_Effect)
            ->setLeave_Type_Reason_Reference($leave_Type_Reason_Reference)
            ->setLeave_Request_Additional_Fields($leave_Request_Additional_Fields);
    }
    /**
     * Get Leave_Request_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Leave_Request_EventObjectType|null
     */
    public function getLeave_Request_Event_Reference()
    {
        return $this->Leave_Request_Event_Reference;
    }
    /**
     * Set Leave_Request_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Leave_Request_EventObjectType $leave_Request_Event_Reference
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Request_Event_Reference(\WorkdayWsdl\\StructType\Leave_Request_EventObjectType $leave_Request_Event_Reference = null)
    {
        $this->Leave_Request_Event_Reference = $leave_Request_Event_Reference;
        return $this;
    }
    /**
     * Get Leave_Request_Description value
     * @return string|null
     */
    public function getLeave_Request_Description()
    {
        return $this->Leave_Request_Description;
    }
    /**
     * Set Leave_Request_Description value
     * @param string $leave_Request_Description
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Request_Description($leave_Request_Description = null)
    {
        // validation for constraint: string
        if (!is_null($leave_Request_Description) && !is_string($leave_Request_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leave_Request_Description, true), gettype($leave_Request_Description)), __LINE__);
        }
        $this->Leave_Request_Description = $leave_Request_Description;
        return $this;
    }
    /**
     * Get Leave_Return_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getLeave_Return_Event_Reference()
    {
        return $this->Leave_Return_Event_Reference;
    }
    /**
     * Set Leave_Return_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $leave_Return_Event_Reference
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Return_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $leave_Return_Event_Reference = null)
    {
        $this->Leave_Return_Event_Reference = $leave_Return_Event_Reference;
        return $this;
    }
    /**
     * Get On_Leave value
     * @return bool|null
     */
    public function getOn_Leave()
    {
        return $this->On_Leave;
    }
    /**
     * Set On_Leave value
     * @param bool $on_Leave
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setOn_Leave($on_Leave = null)
    {
        // validation for constraint: boolean
        if (!is_null($on_Leave) && !is_bool($on_Leave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($on_Leave, true), gettype($on_Leave)), __LINE__);
        }
        $this->On_Leave = $on_Leave;
        return $this;
    }
    /**
     * Get Leave_Start_Date value
     * @return string|null
     */
    public function getLeave_Start_Date()
    {
        return $this->Leave_Start_Date;
    }
    /**
     * Set Leave_Start_Date value
     * @param string $leave_Start_Date
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Start_Date($leave_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($leave_Start_Date) && !is_string($leave_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leave_Start_Date, true), gettype($leave_Start_Date)), __LINE__);
        }
        $this->Leave_Start_Date = $leave_Start_Date;
        return $this;
    }
    /**
     * Get Estimated_Leave_End_Date value
     * @return string|null
     */
    public function getEstimated_Leave_End_Date()
    {
        return $this->Estimated_Leave_End_Date;
    }
    /**
     * Set Estimated_Leave_End_Date value
     * @param string $estimated_Leave_End_Date
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setEstimated_Leave_End_Date($estimated_Leave_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($estimated_Leave_End_Date) && !is_string($estimated_Leave_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimated_Leave_End_Date, true), gettype($estimated_Leave_End_Date)), __LINE__);
        }
        $this->Estimated_Leave_End_Date = $estimated_Leave_End_Date;
        return $this;
    }
    /**
     * Get Leave_End_Date value
     * @return string|null
     */
    public function getLeave_End_Date()
    {
        return $this->Leave_End_Date;
    }
    /**
     * Set Leave_End_Date value
     * @param string $leave_End_Date
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_End_Date($leave_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($leave_End_Date) && !is_string($leave_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leave_End_Date, true), gettype($leave_End_Date)), __LINE__);
        }
        $this->Leave_End_Date = $leave_End_Date;
        return $this;
    }
    /**
     * Get First_Day_of_Work value
     * @return string|null
     */
    public function getFirst_Day_of_Work()
    {
        return $this->First_Day_of_Work;
    }
    /**
     * Set First_Day_of_Work value
     * @param string $first_Day_of_Work
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setFirst_Day_of_Work($first_Day_of_Work = null)
    {
        // validation for constraint: string
        if (!is_null($first_Day_of_Work) && !is_string($first_Day_of_Work)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Day_of_Work, true), gettype($first_Day_of_Work)), __LINE__);
        }
        $this->First_Day_of_Work = $first_Day_of_Work;
        return $this;
    }
    /**
     * Get Leave_Last_Day_of_Work value
     * @return string|null
     */
    public function getLeave_Last_Day_of_Work()
    {
        return $this->Leave_Last_Day_of_Work;
    }
    /**
     * Set Leave_Last_Day_of_Work value
     * @param string $leave_Last_Day_of_Work
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Last_Day_of_Work($leave_Last_Day_of_Work = null)
    {
        // validation for constraint: string
        if (!is_null($leave_Last_Day_of_Work) && !is_string($leave_Last_Day_of_Work)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leave_Last_Day_of_Work, true), gettype($leave_Last_Day_of_Work)), __LINE__);
        }
        $this->Leave_Last_Day_of_Work = $leave_Last_Day_of_Work;
        return $this;
    }
    /**
     * Get Leave_of_Absence_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Leave_of_Absence_TypeObjectType|null
     */
    public function getLeave_of_Absence_Type_Reference()
    {
        return $this->Leave_of_Absence_Type_Reference;
    }
    /**
     * Set Leave_of_Absence_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Leave_of_Absence_TypeObjectType $leave_of_Absence_Type_Reference
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_of_Absence_Type_Reference(\WorkdayWsdl\\StructType\Leave_of_Absence_TypeObjectType $leave_of_Absence_Type_Reference = null)
    {
        $this->Leave_of_Absence_Type_Reference = $leave_of_Absence_Type_Reference;
        return $this;
    }
    /**
     * Get Links_Back_to_Prior_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Leave_Request_EventObjectType|null
     */
    public function getLinks_Back_to_Prior_Event_Reference()
    {
        return $this->Links_Back_to_Prior_Event_Reference;
    }
    /**
     * Set Links_Back_to_Prior_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Leave_Request_EventObjectType $links_Back_to_Prior_Event_Reference
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLinks_Back_to_Prior_Event_Reference(\WorkdayWsdl\\StructType\Leave_Request_EventObjectType $links_Back_to_Prior_Event_Reference = null)
    {
        $this->Links_Back_to_Prior_Event_Reference = $links_Back_to_Prior_Event_Reference;
        return $this;
    }
    /**
     * Get Benefits_Effect value
     * @return bool|null
     */
    public function getBenefits_Effect()
    {
        return $this->Benefits_Effect;
    }
    /**
     * Set Benefits_Effect value
     * @param bool $benefits_Effect
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setBenefits_Effect($benefits_Effect = null)
    {
        // validation for constraint: boolean
        if (!is_null($benefits_Effect) && !is_bool($benefits_Effect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($benefits_Effect, true), gettype($benefits_Effect)), __LINE__);
        }
        $this->Benefits_Effect = $benefits_Effect;
        return $this;
    }
    /**
     * Get Payroll_Effect value
     * @return bool|null
     */
    public function getPayroll_Effect()
    {
        return $this->Payroll_Effect;
    }
    /**
     * Set Payroll_Effect value
     * @param bool $payroll_Effect
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setPayroll_Effect($payroll_Effect = null)
    {
        // validation for constraint: boolean
        if (!is_null($payroll_Effect) && !is_bool($payroll_Effect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payroll_Effect, true), gettype($payroll_Effect)), __LINE__);
        }
        $this->Payroll_Effect = $payroll_Effect;
        return $this;
    }
    /**
     * Get Paid_Time_Off_Accrual_Effect value
     * @return bool|null
     */
    public function getPaid_Time_Off_Accrual_Effect()
    {
        return $this->Paid_Time_Off_Accrual_Effect;
    }
    /**
     * Set Paid_Time_Off_Accrual_Effect value
     * @param bool $paid_Time_Off_Accrual_Effect
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setPaid_Time_Off_Accrual_Effect($paid_Time_Off_Accrual_Effect = null)
    {
        // validation for constraint: boolean
        if (!is_null($paid_Time_Off_Accrual_Effect) && !is_bool($paid_Time_Off_Accrual_Effect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid_Time_Off_Accrual_Effect, true), gettype($paid_Time_Off_Accrual_Effect)), __LINE__);
        }
        $this->Paid_Time_Off_Accrual_Effect = $paid_Time_Off_Accrual_Effect;
        return $this;
    }
    /**
     * Get Continuous_Service_Accrual_Effect value
     * @return bool|null
     */
    public function getContinuous_Service_Accrual_Effect()
    {
        return $this->Continuous_Service_Accrual_Effect;
    }
    /**
     * Set Continuous_Service_Accrual_Effect value
     * @param bool $continuous_Service_Accrual_Effect
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setContinuous_Service_Accrual_Effect($continuous_Service_Accrual_Effect = null)
    {
        // validation for constraint: boolean
        if (!is_null($continuous_Service_Accrual_Effect) && !is_bool($continuous_Service_Accrual_Effect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($continuous_Service_Accrual_Effect, true), gettype($continuous_Service_Accrual_Effect)), __LINE__);
        }
        $this->Continuous_Service_Accrual_Effect = $continuous_Service_Accrual_Effect;
        return $this;
    }
    /**
     * Get Stock_Vesting_Effect value
     * @return bool|null
     */
    public function getStock_Vesting_Effect()
    {
        return $this->Stock_Vesting_Effect;
    }
    /**
     * Set Stock_Vesting_Effect value
     * @param bool $stock_Vesting_Effect
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setStock_Vesting_Effect($stock_Vesting_Effect = null)
    {
        // validation for constraint: boolean
        if (!is_null($stock_Vesting_Effect) && !is_bool($stock_Vesting_Effect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stock_Vesting_Effect, true), gettype($stock_Vesting_Effect)), __LINE__);
        }
        $this->Stock_Vesting_Effect = $stock_Vesting_Effect;
        return $this;
    }
    /**
     * Get Leave_Type_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Leave_Type_ReasonObjectType|null
     */
    public function getLeave_Type_Reason_Reference()
    {
        return $this->Leave_Type_Reason_Reference;
    }
    /**
     * Set Leave_Type_Reason_Reference value
     * @param \WorkdayWsdl\\StructType\Leave_Type_ReasonObjectType $leave_Type_Reason_Reference
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Type_Reason_Reference(\WorkdayWsdl\\StructType\Leave_Type_ReasonObjectType $leave_Type_Reason_Reference = null)
    {
        $this->Leave_Type_Reason_Reference = $leave_Type_Reason_Reference;
        return $this;
    }
    /**
     * Get Leave_Request_Additional_Fields value
     * @return \WorkdayWsdl\\StructType\Leave_Request_Additional_FieldsType|null
     */
    public function getLeave_Request_Additional_Fields()
    {
        return $this->Leave_Request_Additional_Fields;
    }
    /**
     * Set Leave_Request_Additional_Fields value
     * @param \WorkdayWsdl\\StructType\Leave_Request_Additional_FieldsType $leave_Request_Additional_Fields
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
     */
    public function setLeave_Request_Additional_Fields(\WorkdayWsdl\\StructType\Leave_Request_Additional_FieldsType $leave_Request_Additional_Fields = null)
    {
        $this->Leave_Request_Additional_Fields = $leave_Request_Additional_Fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Leave_Requests_Corrected_Detail_DataType
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
