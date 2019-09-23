<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leave_Status_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Leave Status data.
 * @subpackage Structs
 */
class Leave_Status_DataType extends AbstractStructBase
{
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
     * The First_Day_Of_Work
     * Meta information extracted from the WSDL
     * - documentation: First Day of Work.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Day_Of_Work;
    /**
     * The Leave_of_Absence_Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Leave_of_Absence_Type_ReferenceType[]
     */
    public $Leave_of_Absence_Type_Reference;
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
     * - documentation: Boolean attribute identifying whether the leave event has a Absence Accrual Effect.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Paid_Time_Off_Accrual_Effect;
    /**
     * The Continuous_Service_Accrual_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Continuous Service Accrual Effect.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Continuous_Service_Accrual_Effect;
    /**
     * The Stock_Vesting_Effect
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the leave event has a Stock Vesting Effect.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Stock_Vesting_Effect;
    /**
     * Constructor method for Leave_Status_DataType
     * @uses Leave_Status_DataType::setOn_Leave()
     * @uses Leave_Status_DataType::setLeave_Start_Date()
     * @uses Leave_Status_DataType::setEstimated_Leave_End_Date()
     * @uses Leave_Status_DataType::setLeave_End_Date()
     * @uses Leave_Status_DataType::setFirst_Day_Of_Work()
     * @uses Leave_Status_DataType::setLeave_of_Absence_Type_Reference()
     * @uses Leave_Status_DataType::setBenefits_Effect()
     * @uses Leave_Status_DataType::setPayroll_Effect()
     * @uses Leave_Status_DataType::setPaid_Time_Off_Accrual_Effect()
     * @uses Leave_Status_DataType::setContinuous_Service_Accrual_Effect()
     * @uses Leave_Status_DataType::setStock_Vesting_Effect()
     * @param bool $on_Leave
     * @param string $leave_Start_Date
     * @param string $estimated_Leave_End_Date
     * @param string $leave_End_Date
     * @param string $first_Day_Of_Work
     * @param \StructType\Leave_of_Absence_Type_ReferenceType[] $leave_of_Absence_Type_Reference
     * @param bool $benefits_Effect
     * @param bool $payroll_Effect
     * @param bool $paid_Time_Off_Accrual_Effect
     * @param bool $continuous_Service_Accrual_Effect
     * @param bool $stock_Vesting_Effect
     */
    public function __construct($on_Leave = null, $leave_Start_Date = null, $estimated_Leave_End_Date = null, $leave_End_Date = null, $first_Day_Of_Work = null, array $leave_of_Absence_Type_Reference = array(), $benefits_Effect = null, $payroll_Effect = null, $paid_Time_Off_Accrual_Effect = null, $continuous_Service_Accrual_Effect = null, $stock_Vesting_Effect = null)
    {
        $this
            ->setOn_Leave($on_Leave)
            ->setLeave_Start_Date($leave_Start_Date)
            ->setEstimated_Leave_End_Date($estimated_Leave_End_Date)
            ->setLeave_End_Date($leave_End_Date)
            ->setFirst_Day_Of_Work($first_Day_Of_Work)
            ->setLeave_of_Absence_Type_Reference($leave_of_Absence_Type_Reference)
            ->setBenefits_Effect($benefits_Effect)
            ->setPayroll_Effect($payroll_Effect)
            ->setPaid_Time_Off_Accrual_Effect($paid_Time_Off_Accrual_Effect)
            ->setContinuous_Service_Accrual_Effect($continuous_Service_Accrual_Effect)
            ->setStock_Vesting_Effect($stock_Vesting_Effect);
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * Get First_Day_Of_Work value
     * @return string|null
     */
    public function getFirst_Day_Of_Work()
    {
        return $this->First_Day_Of_Work;
    }
    /**
     * Set First_Day_Of_Work value
     * @param string $first_Day_Of_Work
     * @return \StructType\Leave_Status_DataType
     */
    public function setFirst_Day_Of_Work($first_Day_Of_Work = null)
    {
        // validation for constraint: string
        if (!is_null($first_Day_Of_Work) && !is_string($first_Day_Of_Work)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Day_Of_Work, true), gettype($first_Day_Of_Work)), __LINE__);
        }
        $this->First_Day_Of_Work = $first_Day_Of_Work;
        return $this;
    }
    /**
     * Get Leave_of_Absence_Type_Reference value
     * @return \StructType\Leave_of_Absence_Type_ReferenceType[]|null
     */
    public function getLeave_of_Absence_Type_Reference()
    {
        return $this->Leave_of_Absence_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLeave_of_Absence_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeave_of_Absence_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLeave_of_Absence_Type_ReferenceForArrayConstraintsFromSetLeave_of_Absence_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $leave_Status_DataTypeLeave_of_Absence_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$leave_Status_DataTypeLeave_of_Absence_Type_ReferenceItem instanceof \StructType\Leave_of_Absence_Type_ReferenceType) {
                $invalidValues[] = is_object($leave_Status_DataTypeLeave_of_Absence_Type_ReferenceItem) ? get_class($leave_Status_DataTypeLeave_of_Absence_Type_ReferenceItem) : sprintf('%s(%s)', gettype($leave_Status_DataTypeLeave_of_Absence_Type_ReferenceItem), var_export($leave_Status_DataTypeLeave_of_Absence_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leave_of_Absence_Type_Reference property can only contain items of type \StructType\Leave_of_Absence_Type_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Leave_of_Absence_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_of_Absence_Type_ReferenceType[] $leave_of_Absence_Type_Reference
     * @return \StructType\Leave_Status_DataType
     */
    public function setLeave_of_Absence_Type_Reference(array $leave_of_Absence_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($leave_of_Absence_Type_ReferenceArrayErrorMessage = self::validateLeave_of_Absence_Type_ReferenceForArrayConstraintsFromSetLeave_of_Absence_Type_Reference($leave_of_Absence_Type_Reference))) {
            throw new \InvalidArgumentException($leave_of_Absence_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Leave_of_Absence_Type_Reference = $leave_of_Absence_Type_Reference;
        return $this;
    }
    /**
     * Add item to Leave_of_Absence_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_of_Absence_Type_ReferenceType $item
     * @return \StructType\Leave_Status_DataType
     */
    public function addToLeave_of_Absence_Type_Reference(\StructType\Leave_of_Absence_Type_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Leave_of_Absence_Type_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Leave_of_Absence_Type_Reference property can only contain items of type \StructType\Leave_of_Absence_Type_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Leave_of_Absence_Type_Reference[] = $item;
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * @return \StructType\Leave_Status_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Leave_Status_DataType
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
