<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contract_Details_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Contract Details data.
 * @subpackage Structs
 */
class Contract_Details_DataType extends AbstractStructBase
{
    /**
     * The Contract_Pay_Rate
     * Meta information extracted from the WSDL
     * - documentation: The Contract Pay Rate for the position. Automatically calculated based on the Compensation and Frequency values. | Contract Pay Rate for the Worker.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Contract_Pay_Rate;
    /**
     * The Currency_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Currency Rate Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Currency_Reference_DataType
     */
    public $Currency_Reference_Data;
    /**
     * The Frequency_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Frequency.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Frequency_Reference_DataType[]
     */
    public $Frequency_Reference_Data;
    /**
     * The Contract_Assignment_Details
     * Meta information extracted from the WSDL
     * - documentation: The Contract Assignment description. If empty, Workday will use the existing value.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_Assignment_Details;
    /**
     * Constructor method for Contract_Details_DataType
     * @uses Contract_Details_DataType::setContract_Pay_Rate()
     * @uses Contract_Details_DataType::setCurrency_Reference_Data()
     * @uses Contract_Details_DataType::setFrequency_Reference_Data()
     * @uses Contract_Details_DataType::setContract_Assignment_Details()
     * @param float $contract_Pay_Rate
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference_Data
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType[] $frequency_Reference_Data
     * @param string $contract_Assignment_Details
     */
    public function __construct($contract_Pay_Rate = null, \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference_Data = null, array $frequency_Reference_Data = array(), $contract_Assignment_Details = null)
    {
        $this
            ->setContract_Pay_Rate($contract_Pay_Rate)
            ->setCurrency_Reference_Data($currency_Reference_Data)
            ->setFrequency_Reference_Data($frequency_Reference_Data)
            ->setContract_Assignment_Details($contract_Assignment_Details);
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
     * @return \WorkdayWsdl\\StructType\Contract_Details_DataType
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
        // validation for constraint: minInclusive
        if (!is_null($contract_Pay_Rate) && $contract_Pay_Rate < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($contract_Pay_Rate, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($contract_Pay_Rate) && mb_strlen(preg_replace('/(\D)/', '', $contract_Pay_Rate)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($contract_Pay_Rate, true), mb_strlen(preg_replace('/(\D)/', '', $contract_Pay_Rate))), __LINE__);
        }
        $this->Contract_Pay_Rate = $contract_Pay_Rate;
        return $this;
    }
    /**
     * Get Currency_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Currency_Reference_DataType|null
     */
    public function getCurrency_Reference_Data()
    {
        return $this->Currency_Reference_Data;
    }
    /**
     * Set Currency_Reference_Data value
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference_Data
     * @return \WorkdayWsdl\\StructType\Contract_Details_DataType
     */
    public function setCurrency_Reference_Data(\WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference_Data = null)
    {
        $this->Currency_Reference_Data = $currency_Reference_Data;
        return $this;
    }
    /**
     * Get Frequency_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Frequency_Reference_DataType[]|null
     */
    public function getFrequency_Reference_Data()
    {
        return $this->Frequency_Reference_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setFrequency_Reference_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFrequency_Reference_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFrequency_Reference_DataForArrayConstraintsFromSetFrequency_Reference_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contract_Details_DataTypeFrequency_Reference_DataItem) {
            // validation for constraint: itemType
            if (!$contract_Details_DataTypeFrequency_Reference_DataItem instanceof \WorkdayWsdl\\StructType\Frequency_Reference_DataType) {
                $invalidValues[] = is_object($contract_Details_DataTypeFrequency_Reference_DataItem) ? get_class($contract_Details_DataTypeFrequency_Reference_DataItem) : sprintf('%s(%s)', gettype($contract_Details_DataTypeFrequency_Reference_DataItem), var_export($contract_Details_DataTypeFrequency_Reference_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Frequency_Reference_Data property can only contain items of type \WorkdayWsdl\\StructType\Frequency_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Frequency_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType[] $frequency_Reference_Data
     * @return \WorkdayWsdl\\StructType\Contract_Details_DataType
     */
    public function setFrequency_Reference_Data(array $frequency_Reference_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($frequency_Reference_DataArrayErrorMessage = self::validateFrequency_Reference_DataForArrayConstraintsFromSetFrequency_Reference_Data($frequency_Reference_Data))) {
            throw new \InvalidArgumentException($frequency_Reference_DataArrayErrorMessage, __LINE__);
        }
        $this->Frequency_Reference_Data = $frequency_Reference_Data;
        return $this;
    }
    /**
     * Add item to Frequency_Reference_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType $item
     * @return \WorkdayWsdl\\StructType\Contract_Details_DataType
     */
    public function addToFrequency_Reference_Data(\WorkdayWsdl\\StructType\Frequency_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Frequency_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Frequency_Reference_Data property can only contain items of type \WorkdayWsdl\\StructType\Frequency_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Frequency_Reference_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Contract_Details_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Contract_Details_DataType
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
