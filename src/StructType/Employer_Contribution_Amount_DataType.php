<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employer_Contribution_Amount_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the employer contribution amount for the retirement savings election.
 * @subpackage Structs
 */
class Employer_Contribution_Amount_DataType extends AbstractStructBase
{
    /**
     * The Contribution_Amount_Data
     * @var \StructType\Contribution_Amount_DataType
     */
    public $Contribution_Amount_Data;
    /**
     * The Payroll_Interface_Contribution_Amount_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Payroll_Interface_Contribution_Amount_DataType
     */
    public $Payroll_Interface_Contribution_Amount_Data;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Employer_Contribution_Amount_DataType
     * @uses Employer_Contribution_Amount_DataType::setContribution_Amount_Data()
     * @uses Employer_Contribution_Amount_DataType::setPayroll_Interface_Contribution_Amount_Data()
     * @uses Employer_Contribution_Amount_DataType::setCurrency_Reference()
     * @param \StructType\Contribution_Amount_DataType $contribution_Amount_Data
     * @param \StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data
     * @param \StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct(\StructType\Contribution_Amount_DataType $contribution_Amount_Data = null, \StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data = null, \StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setContribution_Amount_Data($contribution_Amount_Data)
            ->setPayroll_Interface_Contribution_Amount_Data($payroll_Interface_Contribution_Amount_Data)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Contribution_Amount_Data value
     * @return \StructType\Contribution_Amount_DataType|null
     */
    public function getContribution_Amount_Data()
    {
        return $this->Contribution_Amount_Data;
    }
    /**
     * Set Contribution_Amount_Data value
     * @param \StructType\Contribution_Amount_DataType $contribution_Amount_Data
     * @return \StructType\Employer_Contribution_Amount_DataType
     */
    public function setContribution_Amount_Data(\StructType\Contribution_Amount_DataType $contribution_Amount_Data = null)
    {
        $this->Contribution_Amount_Data = $contribution_Amount_Data;
        return $this;
    }
    /**
     * Get Payroll_Interface_Contribution_Amount_Data value
     * @return \StructType\Payroll_Interface_Contribution_Amount_DataType|null
     */
    public function getPayroll_Interface_Contribution_Amount_Data()
    {
        return $this->Payroll_Interface_Contribution_Amount_Data;
    }
    /**
     * Set Payroll_Interface_Contribution_Amount_Data value
     * @param \StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data
     * @return \StructType\Employer_Contribution_Amount_DataType
     */
    public function setPayroll_Interface_Contribution_Amount_Data(\StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data = null)
    {
        $this->Payroll_Interface_Contribution_Amount_Data = $payroll_Interface_Contribution_Amount_Data;
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
     * @return \StructType\Employer_Contribution_Amount_DataType
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
     * @return \StructType\Employer_Contribution_Amount_DataType
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
