<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensatable_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element containing summary compensation information for a position. The information is in the position's compensation currency and frequency, annualized, and annualized in the default currency.
 * @subpackage Structs
 */
class Compensatable_Summary_DataType extends AbstractStructBase
{
    /**
     * The Employee_Compensation_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Employee Compensation Summary Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_DataType
     */
    public $Employee_Compensation_Summary_Data;
    /**
     * The Annualized_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Annualized Summary Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_DataType
     */
    public $Annualized_Summary_Data;
    /**
     * The Summary_Data_in_Pay_Group_Frequency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
     */
    public $Summary_Data_in_Pay_Group_Frequency;
    /**
     * The Annualized_in_Reporting_Currency_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Annualized in Reporting Currency Summary Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_In_Reporting_Currency_DataType
     */
    public $Annualized_in_Reporting_Currency_Summary_Data;
    /**
     * The Summary_Data_in_Hourly_Frequency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Hourly_DataType
     */
    public $Summary_Data_in_Hourly_Frequency;
    /**
     * Constructor method for Compensatable_Summary_DataType
     * @uses Compensatable_Summary_DataType::setEmployee_Compensation_Summary_Data()
     * @uses Compensatable_Summary_DataType::setAnnualized_Summary_Data()
     * @uses Compensatable_Summary_DataType::setSummary_Data_in_Pay_Group_Frequency()
     * @uses Compensatable_Summary_DataType::setAnnualized_in_Reporting_Currency_Summary_Data()
     * @uses Compensatable_Summary_DataType::setSummary_Data_in_Hourly_Frequency()
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_DataType $employee_Compensation_Summary_Data
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_DataType $annualized_Summary_Data
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType $summary_Data_in_Pay_Group_Frequency
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_In_Reporting_Currency_DataType $annualized_in_Reporting_Currency_Summary_Data
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Hourly_DataType $summary_Data_in_Hourly_Frequency
     */
    public function __construct(\WorkdayWsdl\\StructType\Compensatable_Summary_Amount_DataType $employee_Compensation_Summary_Data = null, \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_DataType $annualized_Summary_Data = null, \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType $summary_Data_in_Pay_Group_Frequency = null, \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_In_Reporting_Currency_DataType $annualized_in_Reporting_Currency_Summary_Data = null, \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Hourly_DataType $summary_Data_in_Hourly_Frequency = null)
    {
        $this
            ->setEmployee_Compensation_Summary_Data($employee_Compensation_Summary_Data)
            ->setAnnualized_Summary_Data($annualized_Summary_Data)
            ->setSummary_Data_in_Pay_Group_Frequency($summary_Data_in_Pay_Group_Frequency)
            ->setAnnualized_in_Reporting_Currency_Summary_Data($annualized_in_Reporting_Currency_Summary_Data)
            ->setSummary_Data_in_Hourly_Frequency($summary_Data_in_Hourly_Frequency);
    }
    /**
     * Get Employee_Compensation_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_DataType|null
     */
    public function getEmployee_Compensation_Summary_Data()
    {
        return $this->Employee_Compensation_Summary_Data;
    }
    /**
     * Set Employee_Compensation_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_DataType $employee_Compensation_Summary_Data
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_DataType
     */
    public function setEmployee_Compensation_Summary_Data(\WorkdayWsdl\\StructType\Compensatable_Summary_Amount_DataType $employee_Compensation_Summary_Data = null)
    {
        $this->Employee_Compensation_Summary_Data = $employee_Compensation_Summary_Data;
        return $this;
    }
    /**
     * Get Annualized_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_DataType|null
     */
    public function getAnnualized_Summary_Data()
    {
        return $this->Annualized_Summary_Data;
    }
    /**
     * Set Annualized_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_DataType $annualized_Summary_Data
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_DataType
     */
    public function setAnnualized_Summary_Data(\WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_DataType $annualized_Summary_Data = null)
    {
        $this->Annualized_Summary_Data = $annualized_Summary_Data;
        return $this;
    }
    /**
     * Get Summary_Data_in_Pay_Group_Frequency value
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType|null
     */
    public function getSummary_Data_in_Pay_Group_Frequency()
    {
        return $this->Summary_Data_in_Pay_Group_Frequency;
    }
    /**
     * Set Summary_Data_in_Pay_Group_Frequency value
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType $summary_Data_in_Pay_Group_Frequency
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_DataType
     */
    public function setSummary_Data_in_Pay_Group_Frequency(\WorkdayWsdl\\StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType $summary_Data_in_Pay_Group_Frequency = null)
    {
        $this->Summary_Data_in_Pay_Group_Frequency = $summary_Data_in_Pay_Group_Frequency;
        return $this;
    }
    /**
     * Get Annualized_in_Reporting_Currency_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_In_Reporting_Currency_DataType|null
     */
    public function getAnnualized_in_Reporting_Currency_Summary_Data()
    {
        return $this->Annualized_in_Reporting_Currency_Summary_Data;
    }
    /**
     * Set Annualized_in_Reporting_Currency_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_In_Reporting_Currency_DataType $annualized_in_Reporting_Currency_Summary_Data
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_DataType
     */
    public function setAnnualized_in_Reporting_Currency_Summary_Data(\WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Annualized_In_Reporting_Currency_DataType $annualized_in_Reporting_Currency_Summary_Data = null)
    {
        $this->Annualized_in_Reporting_Currency_Summary_Data = $annualized_in_Reporting_Currency_Summary_Data;
        return $this;
    }
    /**
     * Get Summary_Data_in_Hourly_Frequency value
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Hourly_DataType|null
     */
    public function getSummary_Data_in_Hourly_Frequency()
    {
        return $this->Summary_Data_in_Hourly_Frequency;
    }
    /**
     * Set Summary_Data_in_Hourly_Frequency value
     * @param \WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Hourly_DataType $summary_Data_in_Hourly_Frequency
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_DataType
     */
    public function setSummary_Data_in_Hourly_Frequency(\WorkdayWsdl\\StructType\Compensatable_Summary_Amount_Hourly_DataType $summary_Data_in_Hourly_Frequency = null)
    {
        $this->Summary_Data_in_Hourly_Frequency = $summary_Data_in_Hourly_Frequency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Compensatable_Summary_DataType
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
