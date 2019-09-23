<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Health_Savings_Account_Coverage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the spending account coverage information (elections) for an employee.
 * @subpackage Structs
 */
class Health_Savings_Account_Coverage_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Election_Data
     * Meta information extracted from the WSDL
     * - documentation: The election information for the coverage.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType
     */
    public $Benefit_Election_Data;
    /**
     * The Health_Savings_Account_Election_Info_Data
     * Meta information extracted from the WSDL
     * - documentation: More information on Health Savings Account Election such as coverage target.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Health_Savings_Account_Election_Info_DataType
     */
    public $Health_Savings_Account_Election_Info_Data;
    /**
     * The Employee_Contribution_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the health saving account election information including the contribution, payroll interface contribution, goal, and annual contribution information.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contribution_DataType
     */
    public $Employee_Contribution_Data;
    /**
     * The Employer_Contribution_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employer contribution amount information for the health saving election.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employer_Contribution_DataType
     */
    public $Employer_Contribution_Data;
    /**
     * Constructor method for Health_Savings_Account_Coverage_DataType
     * @uses Health_Savings_Account_Coverage_DataType::setBenefit_Election_Data()
     * @uses Health_Savings_Account_Coverage_DataType::setHealth_Savings_Account_Election_Info_Data()
     * @uses Health_Savings_Account_Coverage_DataType::setEmployee_Contribution_Data()
     * @uses Health_Savings_Account_Coverage_DataType::setEmployer_Contribution_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @param \WorkdayWsdl\\StructType\Health_Savings_Account_Election_Info_DataType $health_Savings_Account_Election_Info_Data
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_DataType $employee_Contribution_Data
     * @param \WorkdayWsdl\\StructType\Employer_Contribution_DataType $employer_Contribution_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null, \WorkdayWsdl\\StructType\Health_Savings_Account_Election_Info_DataType $health_Savings_Account_Election_Info_Data = null, \WorkdayWsdl\\StructType\Employee_Contribution_DataType $employee_Contribution_Data = null, \WorkdayWsdl\\StructType\Employer_Contribution_DataType $employer_Contribution_Data = null)
    {
        $this
            ->setBenefit_Election_Data($benefit_Election_Data)
            ->setHealth_Savings_Account_Election_Info_Data($health_Savings_Account_Election_Info_Data)
            ->setEmployee_Contribution_Data($employee_Contribution_Data)
            ->setEmployer_Contribution_Data($employer_Contribution_Data);
    }
    /**
     * Get Benefit_Election_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType|null
     */
    public function getBenefit_Election_Data()
    {
        return $this->Benefit_Election_Data;
    }
    /**
     * Set Benefit_Election_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @return \WorkdayWsdl\\StructType\Health_Savings_Account_Coverage_DataType
     */
    public function setBenefit_Election_Data(\WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null)
    {
        $this->Benefit_Election_Data = $benefit_Election_Data;
        return $this;
    }
    /**
     * Get Health_Savings_Account_Election_Info_Data value
     * @return \WorkdayWsdl\\StructType\Health_Savings_Account_Election_Info_DataType|null
     */
    public function getHealth_Savings_Account_Election_Info_Data()
    {
        return $this->Health_Savings_Account_Election_Info_Data;
    }
    /**
     * Set Health_Savings_Account_Election_Info_Data value
     * @param \WorkdayWsdl\\StructType\Health_Savings_Account_Election_Info_DataType $health_Savings_Account_Election_Info_Data
     * @return \WorkdayWsdl\\StructType\Health_Savings_Account_Coverage_DataType
     */
    public function setHealth_Savings_Account_Election_Info_Data(\WorkdayWsdl\\StructType\Health_Savings_Account_Election_Info_DataType $health_Savings_Account_Election_Info_Data = null)
    {
        $this->Health_Savings_Account_Election_Info_Data = $health_Savings_Account_Election_Info_Data;
        return $this;
    }
    /**
     * Get Employee_Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_DataType|null
     */
    public function getEmployee_Contribution_Data()
    {
        return $this->Employee_Contribution_Data;
    }
    /**
     * Set Employee_Contribution_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_DataType $employee_Contribution_Data
     * @return \WorkdayWsdl\\StructType\Health_Savings_Account_Coverage_DataType
     */
    public function setEmployee_Contribution_Data(\WorkdayWsdl\\StructType\Employee_Contribution_DataType $employee_Contribution_Data = null)
    {
        $this->Employee_Contribution_Data = $employee_Contribution_Data;
        return $this;
    }
    /**
     * Get Employer_Contribution_Data value
     * @return \WorkdayWsdl\\StructType\Employer_Contribution_DataType|null
     */
    public function getEmployer_Contribution_Data()
    {
        return $this->Employer_Contribution_Data;
    }
    /**
     * Set Employer_Contribution_Data value
     * @param \WorkdayWsdl\\StructType\Employer_Contribution_DataType $employer_Contribution_Data
     * @return \WorkdayWsdl\\StructType\Health_Savings_Account_Coverage_DataType
     */
    public function setEmployer_Contribution_Data(\WorkdayWsdl\\StructType\Employer_Contribution_DataType $employer_Contribution_Data = null)
    {
        $this->Employer_Contribution_Data = $employer_Contribution_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Health_Savings_Account_Coverage_DataType
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
