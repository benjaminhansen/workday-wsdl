<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Enrollment_Period_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the benefit plan year information.
 * @subpackage Structs
 */
class Enrollment_Period_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Program_Name
     * Meta information extracted from the WSDL
     * - documentation: A reference to the benefit program.
     * - maxOccurs: 1
     * @var string
     */
    public $Benefit_Program_Name;
    /**
     * The Plan_Year
     * Meta information extracted from the WSDL
     * - documentation: The year of the plan year definition.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Plan_Year;
    /**
     * The Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The start date of the plan year.
     * - maxOccurs: 1
     * @var string
     */
    public $Begin_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: The end date of the plan year.
     * - maxOccurs: 1
     * @var string
     */
    public $End_Date;
    /**
     * Constructor method for Enrollment_Period_DataType
     * @uses Enrollment_Period_DataType::setBenefit_Program_Name()
     * @uses Enrollment_Period_DataType::setPlan_Year()
     * @uses Enrollment_Period_DataType::setBegin_Date()
     * @uses Enrollment_Period_DataType::setEnd_Date()
     * @param string $benefit_Program_Name
     * @param string $plan_Year
     * @param string $begin_Date
     * @param string $end_Date
     */
    public function __construct($benefit_Program_Name = null, $plan_Year = null, $begin_Date = null, $end_Date = null)
    {
        $this
            ->setBenefit_Program_Name($benefit_Program_Name)
            ->setPlan_Year($plan_Year)
            ->setBegin_Date($begin_Date)
            ->setEnd_Date($end_Date);
    }
    /**
     * Get Benefit_Program_Name value
     * @return string|null
     */
    public function getBenefit_Program_Name()
    {
        return $this->Benefit_Program_Name;
    }
    /**
     * Set Benefit_Program_Name value
     * @param string $benefit_Program_Name
     * @return \StructType\Enrollment_Period_DataType
     */
    public function setBenefit_Program_Name($benefit_Program_Name = null)
    {
        // validation for constraint: string
        if (!is_null($benefit_Program_Name) && !is_string($benefit_Program_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benefit_Program_Name, true), gettype($benefit_Program_Name)), __LINE__);
        }
        $this->Benefit_Program_Name = $benefit_Program_Name;
        return $this;
    }
    /**
     * Get Plan_Year value
     * @return string|null
     */
    public function getPlan_Year()
    {
        return $this->Plan_Year;
    }
    /**
     * Set Plan_Year value
     * @param string $plan_Year
     * @return \StructType\Enrollment_Period_DataType
     */
    public function setPlan_Year($plan_Year = null)
    {
        // validation for constraint: string
        if (!is_null($plan_Year) && !is_string($plan_Year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plan_Year, true), gettype($plan_Year)), __LINE__);
        }
        $this->Plan_Year = $plan_Year;
        return $this;
    }
    /**
     * Get Begin_Date value
     * @return string|null
     */
    public function getBegin_Date()
    {
        return $this->Begin_Date;
    }
    /**
     * Set Begin_Date value
     * @param string $begin_Date
     * @return \StructType\Enrollment_Period_DataType
     */
    public function setBegin_Date($begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($begin_Date) && !is_string($begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin_Date, true), gettype($begin_Date)), __LINE__);
        }
        $this->Begin_Date = $begin_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \StructType\Enrollment_Period_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Enrollment_Period_DataType
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
