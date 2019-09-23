<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Has_Health_Insurance_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: If the dependent has health insurance
 * @subpackage Structs
 */
class Has_Health_Insurance_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective date for if dependent has health insurance
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Has_Health_Insurance
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying if the dependent has health insurance
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Has_Health_Insurance;
    /**
     * Constructor method for Has_Health_Insurance_DataType
     * @uses Has_Health_Insurance_DataType::setEffective_Date()
     * @uses Has_Health_Insurance_DataType::setHas_Health_Insurance()
     * @param string $effective_Date
     * @param bool $has_Health_Insurance
     */
    public function __construct($effective_Date = null, $has_Health_Insurance = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setHas_Health_Insurance($has_Health_Insurance);
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
     * @return \StructType\Has_Health_Insurance_DataType
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
     * Get Has_Health_Insurance value
     * @return bool|null
     */
    public function getHas_Health_Insurance()
    {
        return $this->Has_Health_Insurance;
    }
    /**
     * Set Has_Health_Insurance value
     * @param bool $has_Health_Insurance
     * @return \StructType\Has_Health_Insurance_DataType
     */
    public function setHas_Health_Insurance($has_Health_Insurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($has_Health_Insurance) && !is_bool($has_Health_Insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($has_Health_Insurance, true), gettype($has_Health_Insurance)), __LINE__);
        }
        $this->Has_Health_Insurance = $has_Health_Insurance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Has_Health_Insurance_DataType
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
