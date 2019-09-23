<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Compensation Data.
 * @subpackage Structs
 */
class Compensation_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of Compensation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Summary_Compensation_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_Summary_DataType
     */
    public $Summary_Compensation_Data;
    /**
     * Constructor method for Compensation_DataType
     * @uses Compensation_DataType::setEffective_Date()
     * @uses Compensation_DataType::setSummary_Compensation_Data()
     * @param string $effective_Date
     * @param \WorkdayWsdl\\StructType\Compensation_Summary_DataType $summary_Compensation_Data
     */
    public function __construct($effective_Date = null, \WorkdayWsdl\\StructType\Compensation_Summary_DataType $summary_Compensation_Data = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setSummary_Compensation_Data($summary_Compensation_Data);
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
     * @return \WorkdayWsdl\\StructType\Compensation_DataType
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
     * Get Summary_Compensation_Data value
     * @return \WorkdayWsdl\\StructType\Compensation_Summary_DataType|null
     */
    public function getSummary_Compensation_Data()
    {
        return $this->Summary_Compensation_Data;
    }
    /**
     * Set Summary_Compensation_Data value
     * @param \WorkdayWsdl\\StructType\Compensation_Summary_DataType $summary_Compensation_Data
     * @return \WorkdayWsdl\\StructType\Compensation_DataType
     */
    public function setSummary_Compensation_Data(\WorkdayWsdl\\StructType\Compensation_Summary_DataType $summary_Compensation_Data = null)
    {
        $this->Summary_Compensation_Data = $summary_Compensation_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Compensation_DataType
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
