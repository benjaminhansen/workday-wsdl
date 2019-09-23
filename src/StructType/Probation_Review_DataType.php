<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Probation_Review_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of Probation Period Review
 * @subpackage Structs
 */
class Probation_Review_DataType extends AbstractStructBase
{
    /**
     * The Derive_Probation_Period_Review_from_Rule
     * Meta information extracted from the WSDL
     * - documentation: Derive Probation Period Review from Rule
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Derive_Probation_Period_Review_from_Rule;
    /**
     * The Probation_Review_Date
     * Meta information extracted from the WSDL
     * - documentation: Review Date of Probation Period
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Probation_Review_Date;
    /**
     * The Probation_Period_Review_Length
     * Meta information extracted from the WSDL
     * - documentation: Probation Period Review Length
     * - minOccurs: 0
     * @var \StructType\Probation_Period_Review_LengthType
     */
    public $Probation_Period_Review_Length;
    /**
     * Constructor method for Probation_Review_DataType
     * @uses Probation_Review_DataType::setDerive_Probation_Period_Review_from_Rule()
     * @uses Probation_Review_DataType::setProbation_Review_Date()
     * @uses Probation_Review_DataType::setProbation_Period_Review_Length()
     * @param bool $derive_Probation_Period_Review_from_Rule
     * @param string $probation_Review_Date
     * @param \StructType\Probation_Period_Review_LengthType $probation_Period_Review_Length
     */
    public function __construct($derive_Probation_Period_Review_from_Rule = null, $probation_Review_Date = null, \StructType\Probation_Period_Review_LengthType $probation_Period_Review_Length = null)
    {
        $this
            ->setDerive_Probation_Period_Review_from_Rule($derive_Probation_Period_Review_from_Rule)
            ->setProbation_Review_Date($probation_Review_Date)
            ->setProbation_Period_Review_Length($probation_Period_Review_Length);
    }
    /**
     * Get Derive_Probation_Period_Review_from_Rule value
     * @return bool|null
     */
    public function getDerive_Probation_Period_Review_from_Rule()
    {
        return $this->Derive_Probation_Period_Review_from_Rule;
    }
    /**
     * Set Derive_Probation_Period_Review_from_Rule value
     * @param bool $derive_Probation_Period_Review_from_Rule
     * @return \StructType\Probation_Review_DataType
     */
    public function setDerive_Probation_Period_Review_from_Rule($derive_Probation_Period_Review_from_Rule = null)
    {
        // validation for constraint: boolean
        if (!is_null($derive_Probation_Period_Review_from_Rule) && !is_bool($derive_Probation_Period_Review_from_Rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($derive_Probation_Period_Review_from_Rule, true), gettype($derive_Probation_Period_Review_from_Rule)), __LINE__);
        }
        $this->Derive_Probation_Period_Review_from_Rule = $derive_Probation_Period_Review_from_Rule;
        return $this;
    }
    /**
     * Get Probation_Review_Date value
     * @return string|null
     */
    public function getProbation_Review_Date()
    {
        return $this->Probation_Review_Date;
    }
    /**
     * Set Probation_Review_Date value
     * @param string $probation_Review_Date
     * @return \StructType\Probation_Review_DataType
     */
    public function setProbation_Review_Date($probation_Review_Date = null)
    {
        // validation for constraint: string
        if (!is_null($probation_Review_Date) && !is_string($probation_Review_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($probation_Review_Date, true), gettype($probation_Review_Date)), __LINE__);
        }
        $this->Probation_Review_Date = $probation_Review_Date;
        return $this;
    }
    /**
     * Get Probation_Period_Review_Length value
     * @return \StructType\Probation_Period_Review_LengthType|null
     */
    public function getProbation_Period_Review_Length()
    {
        return $this->Probation_Period_Review_Length;
    }
    /**
     * Set Probation_Period_Review_Length value
     * @param \StructType\Probation_Period_Review_LengthType $probation_Period_Review_Length
     * @return \StructType\Probation_Review_DataType
     */
    public function setProbation_Period_Review_Length(\StructType\Probation_Period_Review_LengthType $probation_Period_Review_Length = null)
    {
        $this->Probation_Period_Review_Length = $probation_Period_Review_Length;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Probation_Review_DataType
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
