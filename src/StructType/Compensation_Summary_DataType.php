<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg a brief summary of Compensation data.
 * @subpackage Structs
 */
class Compensation_Summary_DataType extends AbstractStructBase
{
    /**
     * The Total_Compensation
     * Meta information extracted from the WSDL
     * - documentation: Total Compensation (as stated for Frequency).
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Total_Compensation;
    /**
     * The Total_Base_Pay
     * Meta information extracted from the WSDL
     * - documentation: Total Base Pay (as stated for Frequency). | Amount representing the total base pay for the worker in the currency and frequency specified.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Total_Base_Pay;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Currency_Reference_DataType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Frequency_Reference_DataType
     */
    public $Frequency_Reference;
    /**
     * Constructor method for Compensation_Summary_DataType
     * @uses Compensation_Summary_DataType::setTotal_Compensation()
     * @uses Compensation_Summary_DataType::setTotal_Base_Pay()
     * @uses Compensation_Summary_DataType::setCurrency_Reference()
     * @uses Compensation_Summary_DataType::setFrequency_Reference()
     * @param float $total_Compensation
     * @param float $total_Base_Pay
     * @param \StructType\Currency_Reference_DataType $currency_Reference
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     */
    public function __construct($total_Compensation = null, $total_Base_Pay = null, \StructType\Currency_Reference_DataType $currency_Reference = null, \StructType\Frequency_Reference_DataType $frequency_Reference = null)
    {
        $this
            ->setTotal_Compensation($total_Compensation)
            ->setTotal_Base_Pay($total_Base_Pay)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference);
    }
    /**
     * Get Total_Compensation value
     * @return float|null
     */
    public function getTotal_Compensation()
    {
        return $this->Total_Compensation;
    }
    /**
     * Set Total_Compensation value
     * @param float $total_Compensation
     * @return \StructType\Compensation_Summary_DataType
     */
    public function setTotal_Compensation($total_Compensation = null)
    {
        // validation for constraint: float
        if (!is_null($total_Compensation) && !(is_float($total_Compensation) || is_numeric($total_Compensation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_Compensation, true), gettype($total_Compensation)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($total_Compensation) && mb_strlen(mb_substr($total_Compensation, mb_strpos($total_Compensation, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($total_Compensation, true), mb_strlen(mb_substr($total_Compensation, mb_strpos($total_Compensation, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($total_Compensation) && mb_strlen(preg_replace('/(\D)/', '', $total_Compensation)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($total_Compensation, true), mb_strlen(preg_replace('/(\D)/', '', $total_Compensation))), __LINE__);
        }
        $this->Total_Compensation = $total_Compensation;
        return $this;
    }
    /**
     * Get Total_Base_Pay value
     * @return float|null
     */
    public function getTotal_Base_Pay()
    {
        return $this->Total_Base_Pay;
    }
    /**
     * Set Total_Base_Pay value
     * @param float $total_Base_Pay
     * @return \StructType\Compensation_Summary_DataType
     */
    public function setTotal_Base_Pay($total_Base_Pay = null)
    {
        // validation for constraint: float
        if (!is_null($total_Base_Pay) && !(is_float($total_Base_Pay) || is_numeric($total_Base_Pay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_Base_Pay, true), gettype($total_Base_Pay)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($total_Base_Pay) && mb_strlen(mb_substr($total_Base_Pay, mb_strpos($total_Base_Pay, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($total_Base_Pay, true), mb_strlen(mb_substr($total_Base_Pay, mb_strpos($total_Base_Pay, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($total_Base_Pay) && mb_strlen(preg_replace('/(\D)/', '', $total_Base_Pay)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($total_Base_Pay, true), mb_strlen(preg_replace('/(\D)/', '', $total_Base_Pay))), __LINE__);
        }
        $this->Total_Base_Pay = $total_Base_Pay;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \StructType\Currency_Reference_DataType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \StructType\Currency_Reference_DataType $currency_Reference
     * @return \StructType\Compensation_Summary_DataType
     */
    public function setCurrency_Reference(\StructType\Currency_Reference_DataType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \StructType\Frequency_Reference_DataType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @return \StructType\Compensation_Summary_DataType
     */
    public function setFrequency_Reference(\StructType\Frequency_Reference_DataType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Compensation_Summary_DataType
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
