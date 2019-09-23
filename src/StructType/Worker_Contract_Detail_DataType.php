<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Contract_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Contract data for a Worker.
 * @subpackage Structs
 */
class Worker_Contract_Detail_DataType extends AbstractStructBase
{
    /**
     * The Contract_Pay_Rate
     * Meta information extracted from the WSDL
     * - documentation: The Contract Pay Rate for the position. Automatically calculated based on the Compensation and Frequency values. | Contract Pay Rate for the Worker.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Contract_Pay_Rate;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Currency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Frequency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The Contract_Assignment_Details
     * Meta information extracted from the WSDL
     * - documentation: Contract Assignment Details for the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_Assignment_Details;
    /**
     * The Contract_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the contingent worker's contract ends. The corresponding contract start date can be found in the Hire Date. This field is informational only. The value is effective immediately on update.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_End_Date;
    /**
     * The Supplier_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Supplier for the Contingent Worker.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\SupplierObjectType
     */
    public $Supplier_Reference;
    /**
     * Constructor method for Worker_Contract_Detail_DataType
     * @uses Worker_Contract_Detail_DataType::setContract_Pay_Rate()
     * @uses Worker_Contract_Detail_DataType::setCurrency_Reference()
     * @uses Worker_Contract_Detail_DataType::setFrequency_Reference()
     * @uses Worker_Contract_Detail_DataType::setContract_Assignment_Details()
     * @uses Worker_Contract_Detail_DataType::setContract_End_Date()
     * @uses Worker_Contract_Detail_DataType::setSupplier_Reference()
     * @param float $contract_Pay_Rate
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param string $contract_Assignment_Details
     * @param string $contract_End_Date
     * @param \WorkdayWsdl\\StructType\SupplierObjectType $supplier_Reference
     */
    public function __construct($contract_Pay_Rate = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, $contract_Assignment_Details = null, $contract_End_Date = null, \WorkdayWsdl\\StructType\SupplierObjectType $supplier_Reference = null)
    {
        $this
            ->setContract_Pay_Rate($contract_Pay_Rate)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setContract_Assignment_Details($contract_Assignment_Details)
            ->setContract_End_Date($contract_End_Date)
            ->setSupplier_Reference($supplier_Reference);
    }
    /**
     * Get Contract_Pay_Rate value
     * @return float|null
     */
    public function getContract_Pay_Rate()
    {
        return $this->Contract_Pay_Rate;
    }
    /**
     * Set Contract_Pay_Rate value
     * @param float $contract_Pay_Rate
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
     */
    public function setContract_Pay_Rate($contract_Pay_Rate = null)
    {
        // validation for constraint: float
        if (!is_null($contract_Pay_Rate) && !(is_float($contract_Pay_Rate) || is_numeric($contract_Pay_Rate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($contract_Pay_Rate, true), gettype($contract_Pay_Rate)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($contract_Pay_Rate) && mb_strlen(mb_substr($contract_Pay_Rate, mb_strpos($contract_Pay_Rate, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($contract_Pay_Rate, true), mb_strlen(mb_substr($contract_Pay_Rate, mb_strpos($contract_Pay_Rate, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($contract_Pay_Rate) && mb_strlen(preg_replace('/(\D)/', '', $contract_Pay_Rate)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($contract_Pay_Rate, true), mb_strlen(preg_replace('/(\D)/', '', $contract_Pay_Rate))), __LINE__);
        }
        $this->Contract_Pay_Rate = $contract_Pay_Rate;
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
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Contract_Assignment_Details value
     * @return string|null
     */
    public function getContract_Assignment_Details()
    {
        return $this->Contract_Assignment_Details;
    }
    /**
     * Set Contract_Assignment_Details value
     * @param string $contract_Assignment_Details
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
     */
    public function setContract_Assignment_Details($contract_Assignment_Details = null)
    {
        // validation for constraint: string
        if (!is_null($contract_Assignment_Details) && !is_string($contract_Assignment_Details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_Assignment_Details, true), gettype($contract_Assignment_Details)), __LINE__);
        }
        $this->Contract_Assignment_Details = $contract_Assignment_Details;
        return $this;
    }
    /**
     * Get Contract_End_Date value
     * @return string|null
     */
    public function getContract_End_Date()
    {
        return $this->Contract_End_Date;
    }
    /**
     * Set Contract_End_Date value
     * @param string $contract_End_Date
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
     */
    public function setContract_End_Date($contract_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($contract_End_Date) && !is_string($contract_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_End_Date, true), gettype($contract_End_Date)), __LINE__);
        }
        $this->Contract_End_Date = $contract_End_Date;
        return $this;
    }
    /**
     * Get Supplier_Reference value
     * @return \WorkdayWsdl\\StructType\SupplierObjectType|null
     */
    public function getSupplier_Reference()
    {
        return $this->Supplier_Reference;
    }
    /**
     * Set Supplier_Reference value
     * @param \WorkdayWsdl\\StructType\SupplierObjectType $supplier_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
     */
    public function setSupplier_Reference(\WorkdayWsdl\\StructType\SupplierObjectType $supplier_Reference = null)
    {
        $this->Supplier_Reference = $supplier_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Contract_Detail_DataType
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
