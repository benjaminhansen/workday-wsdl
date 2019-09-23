<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Probation_Status_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Probation Status data for a Worker.
 * @subpackage Structs
 */
class Probation_Status_DataType extends AbstractStructBase
{
    /**
     * The Probation_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Primary Position Probation Start Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Probation_Start_Date;
    /**
     * The Probation_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Primary Position Probation End Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Probation_End_Date;
    /**
     * Constructor method for Probation_Status_DataType
     * @uses Probation_Status_DataType::setProbation_Start_Date()
     * @uses Probation_Status_DataType::setProbation_End_Date()
     * @param string $probation_Start_Date
     * @param string $probation_End_Date
     */
    public function __construct($probation_Start_Date = null, $probation_End_Date = null)
    {
        $this
            ->setProbation_Start_Date($probation_Start_Date)
            ->setProbation_End_Date($probation_End_Date);
    }
    /**
     * Get Probation_Start_Date value
     * @return string|null
     */
    public function getProbation_Start_Date()
    {
        return $this->Probation_Start_Date;
    }
    /**
     * Set Probation_Start_Date value
     * @param string $probation_Start_Date
     * @return \StructType\Probation_Status_DataType
     */
    public function setProbation_Start_Date($probation_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($probation_Start_Date) && !is_string($probation_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($probation_Start_Date, true), gettype($probation_Start_Date)), __LINE__);
        }
        $this->Probation_Start_Date = $probation_Start_Date;
        return $this;
    }
    /**
     * Get Probation_End_Date value
     * @return string|null
     */
    public function getProbation_End_Date()
    {
        return $this->Probation_End_Date;
    }
    /**
     * Set Probation_End_Date value
     * @param string $probation_End_Date
     * @return \StructType\Probation_Status_DataType
     */
    public function setProbation_End_Date($probation_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($probation_End_Date) && !is_string($probation_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($probation_End_Date, true), gettype($probation_End_Date)), __LINE__);
        }
        $this->Probation_End_Date = $probation_End_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Probation_Status_DataType
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
