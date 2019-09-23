<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_EEO-1_Data_RecordType StructType
 * Meta information extracted from the WSDL
 * - documentation: External EEO-1 Data Record
 * @subpackage Structs
 */
class External_EEO_1_Data_RecordType extends AbstractStructBase
{
    /**
     * The Reference_Record
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference_Record;
    /**
     * The Employee_ID
     * Meta information extracted from the WSDL
     * - documentation: Employee ID
     * - maxOccurs: 1
     * @var string
     */
    public $Employee_ID;
    /**
     * The Calendar_Year_Reference
     * Meta information extracted from the WSDL
     * - documentation: Calendar Year Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Calendar_YearObjectType
     */
    public $Calendar_Year_Reference;
    /**
     * The Company_Reference
     * Meta information extracted from the WSDL
     * - documentation: Company Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CompanyObjectType
     */
    public $Company_Reference;
    /**
     * The W_2_Box_1
     * Meta information extracted from the WSDL
     * - documentation: W-2 Box 1 Amount
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $W_2_Box_1;
    /**
     * The EEO_Hours_Worked
     * Meta information extracted from the WSDL
     * - documentation: EEO Hours Worked
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $EEO_Hours_Worked;
    /**
     * Constructor method for External_EEO-1_Data_RecordType
     * @uses External_EEO_1_Data_RecordType::setReference_Record()
     * @uses External_EEO_1_Data_RecordType::setEmployee_ID()
     * @uses External_EEO_1_Data_RecordType::setCalendar_Year_Reference()
     * @uses External_EEO_1_Data_RecordType::setCompany_Reference()
     * @uses External_EEO_1_Data_RecordType::setW_2_Box_1()
     * @uses External_EEO_1_Data_RecordType::setEEO_Hours_Worked()
     * @param string $reference_Record
     * @param string $employee_ID
     * @param \WorkdayWsdl\\StructType\Calendar_YearObjectType $calendar_Year_Reference
     * @param \WorkdayWsdl\\StructType\CompanyObjectType $company_Reference
     * @param float $w_2_Box_1
     * @param float $eEO_Hours_Worked
     */
    public function __construct($reference_Record = null, $employee_ID = null, \WorkdayWsdl\\StructType\Calendar_YearObjectType $calendar_Year_Reference = null, \WorkdayWsdl\\StructType\CompanyObjectType $company_Reference = null, $w_2_Box_1 = null, $eEO_Hours_Worked = null)
    {
        $this
            ->setReference_Record($reference_Record)
            ->setEmployee_ID($employee_ID)
            ->setCalendar_Year_Reference($calendar_Year_Reference)
            ->setCompany_Reference($company_Reference)
            ->setW_2_Box_1($w_2_Box_1)
            ->setEEO_Hours_Worked($eEO_Hours_Worked);
    }
    /**
     * Get Reference_Record value
     * @return string|null
     */
    public function getReference_Record()
    {
        return $this->Reference_Record;
    }
    /**
     * Set Reference_Record value
     * @param string $reference_Record
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public function setReference_Record($reference_Record = null)
    {
        // validation for constraint: string
        if (!is_null($reference_Record) && !is_string($reference_Record)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_Record, true), gettype($reference_Record)), __LINE__);
        }
        $this->Reference_Record = $reference_Record;
        return $this;
    }
    /**
     * Get Employee_ID value
     * @return string|null
     */
    public function getEmployee_ID()
    {
        return $this->Employee_ID;
    }
    /**
     * Set Employee_ID value
     * @param string $employee_ID
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public function setEmployee_ID($employee_ID = null)
    {
        // validation for constraint: string
        if (!is_null($employee_ID) && !is_string($employee_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_ID, true), gettype($employee_ID)), __LINE__);
        }
        $this->Employee_ID = $employee_ID;
        return $this;
    }
    /**
     * Get Calendar_Year_Reference value
     * @return \WorkdayWsdl\\StructType\Calendar_YearObjectType|null
     */
    public function getCalendar_Year_Reference()
    {
        return $this->Calendar_Year_Reference;
    }
    /**
     * Set Calendar_Year_Reference value
     * @param \WorkdayWsdl\\StructType\Calendar_YearObjectType $calendar_Year_Reference
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public function setCalendar_Year_Reference(\WorkdayWsdl\\StructType\Calendar_YearObjectType $calendar_Year_Reference = null)
    {
        $this->Calendar_Year_Reference = $calendar_Year_Reference;
        return $this;
    }
    /**
     * Get Company_Reference value
     * @return \WorkdayWsdl\\StructType\CompanyObjectType|null
     */
    public function getCompany_Reference()
    {
        return $this->Company_Reference;
    }
    /**
     * Set Company_Reference value
     * @param \WorkdayWsdl\\StructType\CompanyObjectType $company_Reference
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public function setCompany_Reference(\WorkdayWsdl\\StructType\CompanyObjectType $company_Reference = null)
    {
        $this->Company_Reference = $company_Reference;
        return $this;
    }
    /**
     * Get w_Box value
     * @return w_Box
     */
    public function getW_2_Box_1()
    {
        return $this->{'W-2_Box_1'};
    }
    /**
     * Set w_Box value
     * @param w_Box $w_Box
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public function setW_2_Box_1($w_2_Box_1 = null)
    {
        // validation for constraint: float
        if (!is_null($w_2_Box_1) && !(is_float($w_2_Box_1) || is_numeric($w_2_Box_1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($w_2_Box_1, true), gettype($w_2_Box_1)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($w_2_Box_1) && mb_strlen(mb_substr($w_2_Box_1, mb_strpos($w_2_Box_1, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($w_2_Box_1, true), mb_strlen(mb_substr($w_2_Box_1, mb_strpos($w_2_Box_1, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($w_2_Box_1) && $w_2_Box_1 < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($w_2_Box_1, true)), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($w_2_Box_1) && mb_strlen(preg_replace('/(\D)/', '', $w_2_Box_1)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($w_2_Box_1, true), mb_strlen(preg_replace('/(\D)/', '', $w_2_Box_1))), __LINE__);
        }
        $this->W_2_Box_1 = $this->{'W-2_Box_1'} = $w_2_Box_1;
        return $this;
    }
    /**
     * Get EEO_Hours_Worked value
     * @return float|null
     */
    public function getEEO_Hours_Worked()
    {
        return $this->EEO_Hours_Worked;
    }
    /**
     * Set EEO_Hours_Worked value
     * @param float $eEO_Hours_Worked
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public function setEEO_Hours_Worked($eEO_Hours_Worked = null)
    {
        // validation for constraint: float
        if (!is_null($eEO_Hours_Worked) && !(is_float($eEO_Hours_Worked) || is_numeric($eEO_Hours_Worked))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($eEO_Hours_Worked, true), gettype($eEO_Hours_Worked)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($eEO_Hours_Worked) && mb_strlen(mb_substr($eEO_Hours_Worked, mb_strpos($eEO_Hours_Worked, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($eEO_Hours_Worked, true), mb_strlen(mb_substr($eEO_Hours_Worked, mb_strpos($eEO_Hours_Worked, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($eEO_Hours_Worked) && $eEO_Hours_Worked < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($eEO_Hours_Worked, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($eEO_Hours_Worked) && mb_strlen(preg_replace('/(\D)/', '', $eEO_Hours_Worked)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($eEO_Hours_Worked, true), mb_strlen(preg_replace('/(\D)/', '', $eEO_Hours_Worked))), __LINE__);
        }
        $this->EEO_Hours_Worked = $eEO_Hours_Worked;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
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
