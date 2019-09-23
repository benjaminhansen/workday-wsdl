<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensatable_Guidelines_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Compensation package is required. | Compensation step is not valid for the compensation grade. | Compensation Grade is required. | Compensation step is not valid for the compensation grade profile. | Compensation grade profile is not
 * valid for the compensation grade. | Data element containing the compensation guidelines for a compensation change.
 * @subpackage Structs
 */
class Compensatable_Guidelines_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Package_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation Package to assign.
     * - minOccurs: 0
     * @var \StructType\Compensation_PackageObjectType
     */
    public $Compensation_Package_Reference;
    /**
     * The Compensation_Grade_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation grade to assign. Required if you select a compensation package. Doesn't default for Request Compensation Change.
     * - minOccurs: 0
     * @var \StructType\Compensation_GradeObjectType
     */
    public $Compensation_Grade_Reference;
    /**
     * The Compensation_Grade_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: Profile within the Compensation Grade to assign. Does not default for Request Compensation Change.
     * - minOccurs: 0
     * @var \StructType\Compensation_Grade_ProfileObjectType
     */
    public $Compensation_Grade_Profile_Reference;
    /**
     * The Compensation_Step_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation Step within the Compensation Grade Profile.
     * - minOccurs: 0
     * @var \StructType\Compensation_StepObjectType
     */
    public $Compensation_Step_Reference;
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
     * Constructor method for Compensatable_Guidelines_DataType
     * @uses Compensatable_Guidelines_DataType::setCompensation_Package_Reference()
     * @uses Compensatable_Guidelines_DataType::setCompensation_Grade_Reference()
     * @uses Compensatable_Guidelines_DataType::setCompensation_Grade_Profile_Reference()
     * @uses Compensatable_Guidelines_DataType::setCompensation_Step_Reference()
     * @uses Compensatable_Guidelines_DataType::setProgression_Start_Date()
     * @param \StructType\Compensation_PackageObjectType $compensation_Package_Reference
     * @param \StructType\Compensation_GradeObjectType $compensation_Grade_Reference
     * @param \StructType\Compensation_Grade_ProfileObjectType $compensation_Grade_Profile_Reference
     * @param \StructType\Compensation_StepObjectType $compensation_Step_Reference
     * @param string $progression_Start_Date
     */
    public function __construct(\StructType\Compensation_PackageObjectType $compensation_Package_Reference = null, \StructType\Compensation_GradeObjectType $compensation_Grade_Reference = null, \StructType\Compensation_Grade_ProfileObjectType $compensation_Grade_Profile_Reference = null, \StructType\Compensation_StepObjectType $compensation_Step_Reference = null, $progression_Start_Date = null)
    {
        $this
            ->setCompensation_Package_Reference($compensation_Package_Reference)
            ->setCompensation_Grade_Reference($compensation_Grade_Reference)
            ->setCompensation_Grade_Profile_Reference($compensation_Grade_Profile_Reference)
            ->setCompensation_Step_Reference($compensation_Step_Reference)
            ->setProgression_Start_Date($progression_Start_Date);
    }
    /**
     * Get Compensation_Package_Reference value
     * @return \StructType\Compensation_PackageObjectType|null
     */
    public function getCompensation_Package_Reference()
    {
        return $this->Compensation_Package_Reference;
    }
    /**
     * Set Compensation_Package_Reference value
     * @param \StructType\Compensation_PackageObjectType $compensation_Package_Reference
     * @return \StructType\Compensatable_Guidelines_DataType
     */
    public function setCompensation_Package_Reference(\StructType\Compensation_PackageObjectType $compensation_Package_Reference = null)
    {
        $this->Compensation_Package_Reference = $compensation_Package_Reference;
        return $this;
    }
    /**
     * Get Compensation_Grade_Reference value
     * @return \StructType\Compensation_GradeObjectType|null
     */
    public function getCompensation_Grade_Reference()
    {
        return $this->Compensation_Grade_Reference;
    }
    /**
     * Set Compensation_Grade_Reference value
     * @param \StructType\Compensation_GradeObjectType $compensation_Grade_Reference
     * @return \StructType\Compensatable_Guidelines_DataType
     */
    public function setCompensation_Grade_Reference(\StructType\Compensation_GradeObjectType $compensation_Grade_Reference = null)
    {
        $this->Compensation_Grade_Reference = $compensation_Grade_Reference;
        return $this;
    }
    /**
     * Get Compensation_Grade_Profile_Reference value
     * @return \StructType\Compensation_Grade_ProfileObjectType|null
     */
    public function getCompensation_Grade_Profile_Reference()
    {
        return $this->Compensation_Grade_Profile_Reference;
    }
    /**
     * Set Compensation_Grade_Profile_Reference value
     * @param \StructType\Compensation_Grade_ProfileObjectType $compensation_Grade_Profile_Reference
     * @return \StructType\Compensatable_Guidelines_DataType
     */
    public function setCompensation_Grade_Profile_Reference(\StructType\Compensation_Grade_ProfileObjectType $compensation_Grade_Profile_Reference = null)
    {
        $this->Compensation_Grade_Profile_Reference = $compensation_Grade_Profile_Reference;
        return $this;
    }
    /**
     * Get Compensation_Step_Reference value
     * @return \StructType\Compensation_StepObjectType|null
     */
    public function getCompensation_Step_Reference()
    {
        return $this->Compensation_Step_Reference;
    }
    /**
     * Set Compensation_Step_Reference value
     * @param \StructType\Compensation_StepObjectType $compensation_Step_Reference
     * @return \StructType\Compensatable_Guidelines_DataType
     */
    public function setCompensation_Step_Reference(\StructType\Compensation_StepObjectType $compensation_Step_Reference = null)
    {
        $this->Compensation_Step_Reference = $compensation_Step_Reference;
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
     * @return \StructType\Compensatable_Guidelines_DataType
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
     * @return \StructType\Compensatable_Guidelines_DataType
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
