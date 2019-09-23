<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Spending_Account_Coverage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the spending account coverage information (elections) for an employee.
 * @subpackage Structs
 */
class Spending_Account_Coverage_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Election_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Benefit_Election_DataType
     */
    public $Benefit_Election_Data;
    /**
     * The Employee_Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Employee_Contribution_DataType
     */
    public $Employee_Contribution_Data;
    /**
     * The Employer_Contribution_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Employer_Contribution_DataType
     */
    public $Employer_Contribution_Data;
    /**
     * Constructor method for Spending_Account_Coverage_DataType
     * @uses Spending_Account_Coverage_DataType::setBenefit_Election_Data()
     * @uses Spending_Account_Coverage_DataType::setEmployee_Contribution_Data()
     * @uses Spending_Account_Coverage_DataType::setEmployer_Contribution_Data()
     * @param \StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @param \StructType\Employee_Contribution_DataType $employee_Contribution_Data
     * @param \StructType\Employer_Contribution_DataType $employer_Contribution_Data
     */
    public function __construct(\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null, \StructType\Employee_Contribution_DataType $employee_Contribution_Data = null, \StructType\Employer_Contribution_DataType $employer_Contribution_Data = null)
    {
        $this
            ->setBenefit_Election_Data($benefit_Election_Data)
            ->setEmployee_Contribution_Data($employee_Contribution_Data)
            ->setEmployer_Contribution_Data($employer_Contribution_Data);
    }
    /**
     * Get Benefit_Election_Data value
     * @return \StructType\Worker_Benefit_Election_DataType|null
     */
    public function getBenefit_Election_Data()
    {
        return $this->Benefit_Election_Data;
    }
    /**
     * Set Benefit_Election_Data value
     * @param \StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @return \StructType\Spending_Account_Coverage_DataType
     */
    public function setBenefit_Election_Data(\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null)
    {
        $this->Benefit_Election_Data = $benefit_Election_Data;
        return $this;
    }
    /**
     * Get Employee_Contribution_Data value
     * @return \StructType\Employee_Contribution_DataType|null
     */
    public function getEmployee_Contribution_Data()
    {
        return $this->Employee_Contribution_Data;
    }
    /**
     * Set Employee_Contribution_Data value
     * @param \StructType\Employee_Contribution_DataType $employee_Contribution_Data
     * @return \StructType\Spending_Account_Coverage_DataType
     */
    public function setEmployee_Contribution_Data(\StructType\Employee_Contribution_DataType $employee_Contribution_Data = null)
    {
        $this->Employee_Contribution_Data = $employee_Contribution_Data;
        return $this;
    }
    /**
     * Get Employer_Contribution_Data value
     * @return \StructType\Employer_Contribution_DataType|null
     */
    public function getEmployer_Contribution_Data()
    {
        return $this->Employer_Contribution_Data;
    }
    /**
     * Set Employer_Contribution_Data value
     * @param \StructType\Employer_Contribution_DataType $employer_Contribution_Data
     * @return \StructType\Spending_Account_Coverage_DataType
     */
    public function setEmployer_Contribution_Data(\StructType\Employer_Contribution_DataType $employer_Contribution_Data = null)
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
     * @return \StructType\Spending_Account_Coverage_DataType
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
