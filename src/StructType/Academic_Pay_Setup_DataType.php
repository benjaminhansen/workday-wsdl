<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Pay_Setup_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that contains position's academic pay setup related data.
 * @subpackage Structs
 */
class Academic_Pay_Setup_DataType extends AbstractStructBase
{
    /**
     * The Annual_Work_Period_Work_Percent_of_Year
     * Meta information extracted from the WSDL
     * - documentation: Work period percent of year from the annual work period assigned to position.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 9
     * @var float
     */
    public $Annual_Work_Period_Work_Percent_of_Year;
    /**
     * The Annual_Work_Period_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Start date for annual work period assigned to the position based on the effective moment from the request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Annual_Work_Period_Start_Date;
    /**
     * The Annual_Work_Period_End_Date
     * Meta information extracted from the WSDL
     * - documentation: End date for annual work period assigned to the position based on the effective moment from the request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Annual_Work_Period_End_Date;
    /**
     * The Disbursement_Plan_Period_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Start date for disbursement plan period assigned to the position based on the effective moment from the request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disbursement_Plan_Period_Start_Date;
    /**
     * The Disbursement_Plan_Period_End_Date
     * Meta information extracted from the WSDL
     * - documentation: End date for disbursement plan period assigned to the position based on the effective moment from the request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disbursement_Plan_Period_End_Date;
    /**
     * Constructor method for Academic_Pay_Setup_DataType
     * @uses Academic_Pay_Setup_DataType::setAnnual_Work_Period_Work_Percent_of_Year()
     * @uses Academic_Pay_Setup_DataType::setAnnual_Work_Period_Start_Date()
     * @uses Academic_Pay_Setup_DataType::setAnnual_Work_Period_End_Date()
     * @uses Academic_Pay_Setup_DataType::setDisbursement_Plan_Period_Start_Date()
     * @uses Academic_Pay_Setup_DataType::setDisbursement_Plan_Period_End_Date()
     * @param float $annual_Work_Period_Work_Percent_of_Year
     * @param string $annual_Work_Period_Start_Date
     * @param string $annual_Work_Period_End_Date
     * @param string $disbursement_Plan_Period_Start_Date
     * @param string $disbursement_Plan_Period_End_Date
     */
    public function __construct($annual_Work_Period_Work_Percent_of_Year = null, $annual_Work_Period_Start_Date = null, $annual_Work_Period_End_Date = null, $disbursement_Plan_Period_Start_Date = null, $disbursement_Plan_Period_End_Date = null)
    {
        $this
            ->setAnnual_Work_Period_Work_Percent_of_Year($annual_Work_Period_Work_Percent_of_Year)
            ->setAnnual_Work_Period_Start_Date($annual_Work_Period_Start_Date)
            ->setAnnual_Work_Period_End_Date($annual_Work_Period_End_Date)
            ->setDisbursement_Plan_Period_Start_Date($disbursement_Plan_Period_Start_Date)
            ->setDisbursement_Plan_Period_End_Date($disbursement_Plan_Period_End_Date);
    }
    /**
     * Get Annual_Work_Period_Work_Percent_of_Year value
     * @return float|null
     */
    public function getAnnual_Work_Period_Work_Percent_of_Year()
    {
        return $this->Annual_Work_Period_Work_Percent_of_Year;
    }
    /**
     * Set Annual_Work_Period_Work_Percent_of_Year value
     * @param float $annual_Work_Period_Work_Percent_of_Year
     * @return \StructType\Academic_Pay_Setup_DataType
     */
    public function setAnnual_Work_Period_Work_Percent_of_Year($annual_Work_Period_Work_Percent_of_Year = null)
    {
        // validation for constraint: float
        if (!is_null($annual_Work_Period_Work_Percent_of_Year) && !(is_float($annual_Work_Period_Work_Percent_of_Year) || is_numeric($annual_Work_Period_Work_Percent_of_Year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($annual_Work_Period_Work_Percent_of_Year, true), gettype($annual_Work_Period_Work_Percent_of_Year)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($annual_Work_Period_Work_Percent_of_Year) && mb_strlen(mb_substr($annual_Work_Period_Work_Percent_of_Year, mb_strpos($annual_Work_Period_Work_Percent_of_Year, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($annual_Work_Period_Work_Percent_of_Year, true), mb_strlen(mb_substr($annual_Work_Period_Work_Percent_of_Year, mb_strpos($annual_Work_Period_Work_Percent_of_Year, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($annual_Work_Period_Work_Percent_of_Year) && $annual_Work_Period_Work_Percent_of_Year < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($annual_Work_Period_Work_Percent_of_Year, true)), __LINE__);
        }
        // validation for constraint: totalDigits(9)
        if (!is_null($annual_Work_Period_Work_Percent_of_Year) && mb_strlen(preg_replace('/(\D)/', '', $annual_Work_Period_Work_Percent_of_Year)) > 9) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 9 digits, "%d" given', var_export($annual_Work_Period_Work_Percent_of_Year, true), mb_strlen(preg_replace('/(\D)/', '', $annual_Work_Period_Work_Percent_of_Year))), __LINE__);
        }
        $this->Annual_Work_Period_Work_Percent_of_Year = $annual_Work_Period_Work_Percent_of_Year;
        return $this;
    }
    /**
     * Get Annual_Work_Period_Start_Date value
     * @return string|null
     */
    public function getAnnual_Work_Period_Start_Date()
    {
        return $this->Annual_Work_Period_Start_Date;
    }
    /**
     * Set Annual_Work_Period_Start_Date value
     * @param string $annual_Work_Period_Start_Date
     * @return \StructType\Academic_Pay_Setup_DataType
     */
    public function setAnnual_Work_Period_Start_Date($annual_Work_Period_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($annual_Work_Period_Start_Date) && !is_string($annual_Work_Period_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annual_Work_Period_Start_Date, true), gettype($annual_Work_Period_Start_Date)), __LINE__);
        }
        $this->Annual_Work_Period_Start_Date = $annual_Work_Period_Start_Date;
        return $this;
    }
    /**
     * Get Annual_Work_Period_End_Date value
     * @return string|null
     */
    public function getAnnual_Work_Period_End_Date()
    {
        return $this->Annual_Work_Period_End_Date;
    }
    /**
     * Set Annual_Work_Period_End_Date value
     * @param string $annual_Work_Period_End_Date
     * @return \StructType\Academic_Pay_Setup_DataType
     */
    public function setAnnual_Work_Period_End_Date($annual_Work_Period_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($annual_Work_Period_End_Date) && !is_string($annual_Work_Period_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annual_Work_Period_End_Date, true), gettype($annual_Work_Period_End_Date)), __LINE__);
        }
        $this->Annual_Work_Period_End_Date = $annual_Work_Period_End_Date;
        return $this;
    }
    /**
     * Get Disbursement_Plan_Period_Start_Date value
     * @return string|null
     */
    public function getDisbursement_Plan_Period_Start_Date()
    {
        return $this->Disbursement_Plan_Period_Start_Date;
    }
    /**
     * Set Disbursement_Plan_Period_Start_Date value
     * @param string $disbursement_Plan_Period_Start_Date
     * @return \StructType\Academic_Pay_Setup_DataType
     */
    public function setDisbursement_Plan_Period_Start_Date($disbursement_Plan_Period_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disbursement_Plan_Period_Start_Date) && !is_string($disbursement_Plan_Period_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disbursement_Plan_Period_Start_Date, true), gettype($disbursement_Plan_Period_Start_Date)), __LINE__);
        }
        $this->Disbursement_Plan_Period_Start_Date = $disbursement_Plan_Period_Start_Date;
        return $this;
    }
    /**
     * Get Disbursement_Plan_Period_End_Date value
     * @return string|null
     */
    public function getDisbursement_Plan_Period_End_Date()
    {
        return $this->Disbursement_Plan_Period_End_Date;
    }
    /**
     * Set Disbursement_Plan_Period_End_Date value
     * @param string $disbursement_Plan_Period_End_Date
     * @return \StructType\Academic_Pay_Setup_DataType
     */
    public function setDisbursement_Plan_Period_End_Date($disbursement_Plan_Period_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disbursement_Plan_Period_End_Date) && !is_string($disbursement_Plan_Period_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disbursement_Plan_Period_End_Date, true), gettype($disbursement_Plan_Period_End_Date)), __LINE__);
        }
        $this->Disbursement_Plan_Period_End_Date = $disbursement_Plan_Period_End_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Pay_Setup_DataType
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
