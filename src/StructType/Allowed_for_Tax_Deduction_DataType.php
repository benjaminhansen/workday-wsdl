<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Allowed_for_Tax_Deduction_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: If the dependent is allowed for tax deduction
 * @subpackage Structs
 */
class Allowed_for_Tax_Deduction_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective date for if dependent is allowed for tax deduction
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Allowed_for_Tax_Deduction
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying if the dependent is allowed for tax deduction
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Allowed_for_Tax_Deduction;
    /**
     * Constructor method for Allowed_for_Tax_Deduction_DataType
     * @uses Allowed_for_Tax_Deduction_DataType::setEffective_Date()
     * @uses Allowed_for_Tax_Deduction_DataType::setAllowed_for_Tax_Deduction()
     * @param string $effective_Date
     * @param bool $allowed_for_Tax_Deduction
     */
    public function __construct($effective_Date = null, $allowed_for_Tax_Deduction = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setAllowed_for_Tax_Deduction($allowed_for_Tax_Deduction);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Allowed_for_Tax_Deduction_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Allowed_for_Tax_Deduction value
     * @return bool|null
     */
    public function getAllowed_for_Tax_Deduction()
    {
        return $this->Allowed_for_Tax_Deduction;
    }
    /**
     * Set Allowed_for_Tax_Deduction value
     * @param bool $allowed_for_Tax_Deduction
     * @return \StructType\Allowed_for_Tax_Deduction_DataType
     */
    public function setAllowed_for_Tax_Deduction($allowed_for_Tax_Deduction = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowed_for_Tax_Deduction) && !is_bool($allowed_for_Tax_Deduction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowed_for_Tax_Deduction, true), gettype($allowed_for_Tax_Deduction)), __LINE__);
        }
        $this->Allowed_for_Tax_Deduction = $allowed_for_Tax_Deduction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Allowed_for_Tax_Deduction_DataType
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
