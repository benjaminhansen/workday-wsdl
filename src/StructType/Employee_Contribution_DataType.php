<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Contribution_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the spending account election information including the contribution, payroll interface contribution, goal, and annual contribution information.
 * @subpackage Structs
 */
class Employee_Contribution_DataType extends AbstractStructBase
{
    /**
     * The Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contribution_DataType
     */
    public $Contribution_Data;
    /**
     * The Payroll_Interface_Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Payroll_Interface_Contribution_DataType
     */
    public $Payroll_Interface_Contribution_Data;
    /**
     * The Goal_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Goal_DataType
     */
    public $Goal_Data;
    /**
     * The Annual_Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Annual_Contribution_DataType
     */
    public $Annual_Contribution_Data;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Employee_Contribution_DataType
     * @uses Employee_Contribution_DataType::setContribution_Data()
     * @uses Employee_Contribution_DataType::setPayroll_Interface_Contribution_Data()
     * @uses Employee_Contribution_DataType::setGoal_Data()
     * @uses Employee_Contribution_DataType::setAnnual_Contribution_Data()
     * @uses Employee_Contribution_DataType::setCurrency_Reference()
     * @param \WorkdayWsdl\\StructType\Contribution_DataType $contribution_Data
     * @param \WorkdayWsdl\\StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data
     * @param \WorkdayWsdl\\StructType\Goal_DataType $goal_Data
     * @param \WorkdayWsdl\\StructType\Annual_Contribution_DataType $annual_Contribution_Data
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Contribution_DataType $contribution_Data = null, \WorkdayWsdl\\StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data = null, \WorkdayWsdl\\StructType\Goal_DataType $goal_Data = null, \WorkdayWsdl\\StructType\Annual_Contribution_DataType $annual_Contribution_Data = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setContribution_Data($contribution_Data)
            ->setPayroll_Interface_Contribution_Data($payroll_Interface_Contribution_Data)
            ->setGoal_Data($goal_Data)
            ->setAnnual_Contribution_Data($annual_Contribution_Data)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Contribution_DataType|null
     */
    public function getContribution_Data()
    {
        return $this->Contribution_Data;
    }
    /**
     * Set Contribution_Data value
     * @param \WorkdayWsdl\\StructType\Contribution_DataType $contribution_Data
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType
     */
    public function setContribution_Data(\WorkdayWsdl\\StructType\Contribution_DataType $contribution_Data = null)
    {
        $this->Contribution_Data = $contribution_Data;
        return $this;
    }
    /**
     * Get Payroll_Interface_Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Payroll_Interface_Contribution_DataType|null
     */
    public function getPayroll_Interface_Contribution_Data()
    {
        return $this->Payroll_Interface_Contribution_Data;
    }
    /**
     * Set Payroll_Interface_Contribution_Data value
     * @param \WorkdayWsdl\\StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType
     */
    public function setPayroll_Interface_Contribution_Data(\WorkdayWsdl\\StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data = null)
    {
        $this->Payroll_Interface_Contribution_Data = $payroll_Interface_Contribution_Data;
        return $this;
    }
    /**
     * Get Goal_Data value
     * @return \WorkdayWsdl\\StructType\Goal_DataType|null
     */
    public function getGoal_Data()
    {
        return $this->Goal_Data;
    }
    /**
     * Set Goal_Data value
     * @param \WorkdayWsdl\\StructType\Goal_DataType $goal_Data
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType
     */
    public function setGoal_Data(\WorkdayWsdl\\StructType\Goal_DataType $goal_Data = null)
    {
        $this->Goal_Data = $goal_Data;
        return $this;
    }
    /**
     * Get Annual_Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Annual_Contribution_DataType|null
     */
    public function getAnnual_Contribution_Data()
    {
        return $this->Annual_Contribution_Data;
    }
    /**
     * Set Annual_Contribution_Data value
     * @param \WorkdayWsdl\\StructType\Annual_Contribution_DataType $annual_Contribution_Data
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType
     */
    public function setAnnual_Contribution_Data(\WorkdayWsdl\\StructType\Annual_Contribution_DataType $annual_Contribution_Data = null)
    {
        $this->Annual_Contribution_Data = $annual_Contribution_Data;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType
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
