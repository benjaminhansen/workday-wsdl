<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Currency_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element references a unique type of Currency.
 * @subpackage Structs
 */
class Currency_Reference_DataType extends AbstractStructBase
{
    /**
     * The Currency_Code
     * Meta information extracted from the WSDL
     * - documentation: There is no Currency for that Currency ID. | The preferred Currency for the contract pay rate.
     * - maxOccurs: 1
     * @var string
     */
    public $Currency_Code;
    /**
     * Constructor method for Currency_Reference_DataType
     * @uses Currency_Reference_DataType::setCurrency_Code()
     * @param string $currency_Code
     */
    public function __construct($currency_Code = null)
    {
        $this
            ->setCurrency_Code($currency_Code);
    }
    /**
     * Get Currency_Code value
     * @return string|null
     */
    public function getCurrency_Code()
    {
        return $this->Currency_Code;
    }
    /**
     * Set Currency_Code value
     * @uses \EnumType\CurrencyEnumeration::valueIsValid()
     * @uses \EnumType\CurrencyEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency_Code
     * @return \StructType\Currency_Reference_DataType
     */
    public function setCurrency_Code($currency_Code = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyEnumeration::valueIsValid($currency_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyEnumeration', is_array($currency_Code) ? implode(', ', $currency_Code) : var_export($currency_Code, true), implode(', ', \EnumType\CurrencyEnumeration::getValidValues())), __LINE__);
        }
        $this->Currency_Code = $currency_Code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Currency_Reference_DataType
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
