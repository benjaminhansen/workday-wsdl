<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pay_Rate_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Pay Rate Type.
 * @subpackage Structs
 */
class Pay_Rate_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Pay_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Pay Rate Type must exist for the given value of Pay Type Name. | Unique attribute name/description identifying a valid instance of Pay Rate Type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pay_Type_Name;
    /**
     * Constructor method for Pay_Rate_Type_ReferenceType
     * @uses Pay_Rate_Type_ReferenceType::setPay_Type_Name()
     * @param string $pay_Type_Name
     */
    public function __construct($pay_Type_Name = null)
    {
        $this
            ->setPay_Type_Name($pay_Type_Name);
    }
    /**
     * Get Pay_Type_Name value
     * @return string|null
     */
    public function getPay_Type_Name()
    {
        return $this->Pay_Type_Name;
    }
    /**
     * Set Pay_Type_Name value
     * @param string $pay_Type_Name
     * @return \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType
     */
    public function setPay_Type_Name($pay_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($pay_Type_Name) && !is_string($pay_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pay_Type_Name, true), gettype($pay_Type_Name)), __LINE__);
        }
        $this->Pay_Type_Name = $pay_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType
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
