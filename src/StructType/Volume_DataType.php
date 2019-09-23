<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Volume_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The volume information for the coverage level selected.
 * @subpackage Structs
 */
class Volume_DataType extends AbstractStructBase
{
    /**
     * The Volume
     * Meta information extracted from the WSDL
     * - documentation: The volume of the coverage amount selected.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 21
     * @var float
     */
    public $Volume;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Volume_DataType
     * @uses Volume_DataType::setVolume()
     * @uses Volume_DataType::setCurrency_Reference()
     * @param float $volume
     * @param \StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct($volume = null, \StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setVolume($volume)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Volume value
     * @return float|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param float $volume
     * @return \StructType\Volume_DataType
     */
    public function setVolume($volume = null)
    {
        // validation for constraint: float
        if (!is_null($volume) && !(is_float($volume) || is_numeric($volume))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volume, true), gettype($volume)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($volume) && mb_strlen(mb_substr($volume, mb_strpos($volume, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($volume, true), mb_strlen(mb_substr($volume, mb_strpos($volume, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($volume) && $volume < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($volume, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($volume) && mb_strlen(preg_replace('/(\D)/', '', $volume)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($volume, true), mb_strlen(preg_replace('/(\D)/', '', $volume))), __LINE__);
        }
        $this->Volume = $volume;
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
     * @return \StructType\Volume_DataType
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
     * @return \StructType\Volume_DataType
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
