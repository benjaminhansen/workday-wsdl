<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Occupation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Occupation of the Dependent
 * @subpackage Structs
 */
class Occupation_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective date for Dependent's Occupation
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Occupation
     * Meta information extracted from the WSDL
     * - documentation: Text attribute describing Dependent's Occupation
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Occupation;
    /**
     * Constructor method for Occupation_DataType
     * @uses Occupation_DataType::setEffective_Date()
     * @uses Occupation_DataType::setOccupation()
     * @param string $effective_Date
     * @param string $occupation
     */
    public function __construct($effective_Date = null, $occupation = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setOccupation($occupation);
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
     * @return \StructType\Occupation_DataType
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
     * Get Occupation value
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->Occupation;
    }
    /**
     * Set Occupation value
     * @param string $occupation
     * @return \StructType\Occupation_DataType
     */
    public function setOccupation($occupation = null)
    {
        // validation for constraint: string
        if (!is_null($occupation) && !is_string($occupation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($occupation, true), gettype($occupation)), __LINE__);
        }
        $this->Occupation = $occupation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Occupation_DataType
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
