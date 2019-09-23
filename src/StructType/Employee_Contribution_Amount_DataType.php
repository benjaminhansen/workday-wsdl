<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Contribution_Amount_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the retirement savings amount information.
 * @subpackage Structs
 */
class Employee_Contribution_Amount_DataType extends AbstractStructBase
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
     * The Contribution_Amount_Maximum
     * Meta information extracted from the WSDL
     * - documentation: The maximum contribution amount allowed.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 21
     * @var float
     */
    public $Contribution_Amount_Maximum;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Employee_Contribution_Amount_DataType
     * @uses Employee_Contribution_Amount_DataType::setContribution_Amount_Data()
     * @uses Employee_Contribution_Amount_DataType::setPayroll_Interface_Contribution_Amount_Data()
     * @uses Employee_Contribution_Amount_DataType::setContribution_Amount_Maximum()
     * @uses Employee_Contribution_Amount_DataType::setCurrency_Reference()
     * @param \StructType\Contribution_Amount_DataType $contribution_Amount_Data
     * @param \StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data
     * @param float $contribution_Amount_Maximum
     * @param \StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct(\StructType\Contribution_Amount_DataType $contribution_Amount_Data = null, \StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data = null, $contribution_Amount_Maximum = null, \StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setContribution_Amount_Data($contribution_Amount_Data)
            ->setPayroll_Interface_Contribution_Amount_Data($payroll_Interface_Contribution_Amount_Data)
            ->setContribution_Amount_Maximum($contribution_Amount_Maximum)
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
     * @return \StructType\Employee_Contribution_Amount_DataType
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
     * @return \StructType\Employee_Contribution_Amount_DataType
     */
    public function setPayroll_Interface_Contribution_Amount_Data(\StructType\Payroll_Interface_Contribution_Amount_DataType $payroll_Interface_Contribution_Amount_Data = null)
    {
        $this->Payroll_Interface_Contribution_Amount_Data = $payroll_Interface_Contribution_Amount_Data;
        return $this;
    }
    /**
     * Get Contribution_Amount_Maximum value
     * @return float|null
     */
    public function getContribution_Amount_Maximum()
    {
        return $this->Contribution_Amount_Maximum;
    }
    /**
     * Set Contribution_Amount_Maximum value
     * @param float $contribution_Amount_Maximum
     * @return \StructType\Employee_Contribution_Amount_DataType
     */
    public function setContribution_Amount_Maximum($contribution_Amount_Maximum = null)
    {
        // validation for constraint: float
        if (!is_null($contribution_Amount_Maximum) && !(is_float($contribution_Amount_Maximum) || is_numeric($contribution_Amount_Maximum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($contribution_Amount_Maximum, true), gettype($contribution_Amount_Maximum)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($contribution_Amount_Maximum) && mb_strlen(mb_substr($contribution_Amount_Maximum, mb_strpos($contribution_Amount_Maximum, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($contribution_Amount_Maximum, true), mb_strlen(mb_substr($contribution_Amount_Maximum, mb_strpos($contribution_Amount_Maximum, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($contribution_Amount_Maximum) && $contribution_Amount_Maximum < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($contribution_Amount_Maximum, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($contribution_Amount_Maximum) && mb_strlen(preg_replace('/(\D)/', '', $contribution_Amount_Maximum)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($contribution_Amount_Maximum, true), mb_strlen(preg_replace('/(\D)/', '', $contribution_Amount_Maximum))), __LINE__);
        }
        $this->Contribution_Amount_Maximum = $contribution_Amount_Maximum;
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
     * @return \StructType\Employee_Contribution_Amount_DataType
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
     * @return \StructType\Employee_Contribution_Amount_DataType
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
