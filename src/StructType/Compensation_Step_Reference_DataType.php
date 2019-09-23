<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Step_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Compensation Step within the Compensation Grade Profile.
 * @subpackage Structs
 */
class Compensation_Step_Reference_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Step_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Step must exist for the given value of Compensation Step Name. | Unique attribute name/description identifying a valid instance of Compensation Step.
     * - maxOccurs: 1
     * @var string
     */
    public $Compensation_Step_Name;
    /**
     * The Progression_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Start date for the Compensation Step.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Progression_Start_Date;
    /**
     * Constructor method for Compensation_Step_Reference_DataType
     * @uses Compensation_Step_Reference_DataType::setCompensation_Step_Name()
     * @uses Compensation_Step_Reference_DataType::setProgression_Start_Date()
     * @param string $compensation_Step_Name
     * @param string $progression_Start_Date
     */
    public function __construct($compensation_Step_Name = null, $progression_Start_Date = null)
    {
        $this
            ->setCompensation_Step_Name($compensation_Step_Name)
            ->setProgression_Start_Date($progression_Start_Date);
    }
    /**
     * Get Compensation_Step_Name value
     * @return string|null
     */
    public function getCompensation_Step_Name()
    {
        return $this->Compensation_Step_Name;
    }
    /**
     * Set Compensation_Step_Name value
     * @param string $compensation_Step_Name
     * @return \WorkdayWsdl\\StructType\Compensation_Step_Reference_DataType
     */
    public function setCompensation_Step_Name($compensation_Step_Name = null)
    {
        // validation for constraint: string
        if (!is_null($compensation_Step_Name) && !is_string($compensation_Step_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compensation_Step_Name, true), gettype($compensation_Step_Name)), __LINE__);
        }
        $this->Compensation_Step_Name = $compensation_Step_Name;
        return $this;
    }
    /**
     * Get Progression_Start_Date value
     * @return string|null
     */
    public function getProgression_Start_Date()
    {
        return $this->Progression_Start_Date;
    }
    /**
     * Set Progression_Start_Date value
     * @param string $progression_Start_Date
     * @return \WorkdayWsdl\\StructType\Compensation_Step_Reference_DataType
     */
    public function setProgression_Start_Date($progression_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($progression_Start_Date) && !is_string($progression_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($progression_Start_Date, true), gettype($progression_Start_Date)), __LINE__);
        }
        $this->Progression_Start_Date = $progression_Start_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Compensation_Step_Reference_DataType
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
