<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employer_Contribution_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the employer contribution amount information for the spending account election.
 * @subpackage Structs
 */
class Employer_Contribution_DataType extends AbstractStructBase
{
    /**
     * The Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Contribution_DataType
     */
    public $Contribution_Data;
    /**
     * The Payroll_Interface_Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Payroll_Interface_Contribution_DataType
     */
    public $Payroll_Interface_Contribution_Data;
    /**
     * The Goal_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Goal_DataType
     */
    public $Goal_Data;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Employer_Contribution_DataType
     * @uses Employer_Contribution_DataType::setContribution_Data()
     * @uses Employer_Contribution_DataType::setPayroll_Interface_Contribution_Data()
     * @uses Employer_Contribution_DataType::setGoal_Data()
     * @uses Employer_Contribution_DataType::setCurrency_Reference()
     * @param \StructType\Contribution_DataType $contribution_Data
     * @param \StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data
     * @param \StructType\Goal_DataType $goal_Data
     * @param \StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct(\StructType\Contribution_DataType $contribution_Data = null, \StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data = null, \StructType\Goal_DataType $goal_Data = null, \StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setContribution_Data($contribution_Data)
            ->setPayroll_Interface_Contribution_Data($payroll_Interface_Contribution_Data)
            ->setGoal_Data($goal_Data)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Contribution_Data value
     * @return \StructType\Contribution_DataType|null
     */
    public function getContribution_Data()
    {
        return $this->Contribution_Data;
    }
    /**
     * Set Contribution_Data value
     * @param \StructType\Contribution_DataType $contribution_Data
     * @return \StructType\Employer_Contribution_DataType
     */
    public function setContribution_Data(\StructType\Contribution_DataType $contribution_Data = null)
    {
        $this->Contribution_Data = $contribution_Data;
        return $this;
    }
    /**
     * Get Payroll_Interface_Contribution_Data value
     * @return \StructType\Payroll_Interface_Contribution_DataType|null
     */
    public function getPayroll_Interface_Contribution_Data()
    {
        return $this->Payroll_Interface_Contribution_Data;
    }
    /**
     * Set Payroll_Interface_Contribution_Data value
     * @param \StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data
     * @return \StructType\Employer_Contribution_DataType
     */
    public function setPayroll_Interface_Contribution_Data(\StructType\Payroll_Interface_Contribution_DataType $payroll_Interface_Contribution_Data = null)
    {
        $this->Payroll_Interface_Contribution_Data = $payroll_Interface_Contribution_Data;
        return $this;
    }
    /**
     * Get Goal_Data value
     * @return \StructType\Goal_DataType|null
     */
    public function getGoal_Data()
    {
        return $this->Goal_Data;
    }
    /**
     * Set Goal_Data value
     * @param \StructType\Goal_DataType $goal_Data
     * @return \StructType\Employer_Contribution_DataType
     */
    public function setGoal_Data(\StructType\Goal_DataType $goal_Data = null)
    {
        $this->Goal_Data = $goal_Data;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @return \StructType\Employer_Contribution_DataType
     */
    public function setCurrency_Reference(\StructType\CurrencyObjectType $currency_Reference = null)
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
     * @return \StructType\Employer_Contribution_DataType
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
