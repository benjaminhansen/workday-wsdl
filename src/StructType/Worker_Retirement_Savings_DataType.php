<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Retirement_Savings_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the retirement savings election information for the employee.
 * @subpackage Structs
 */
class Worker_Retirement_Savings_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Election_Data
     * @var \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType
     */
    public $Benefit_Election_Data;
    /**
     * The Employee_Contribution_Percentage_Data
     * Meta information extracted from the WSDL
     * - choice: Employee_Contribution_Percentage_Data | Employee_Contribution_Amount_Data
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType
     */
    public $Employee_Contribution_Percentage_Data;
    /**
     * The Employee_Contribution_Amount_Data
     * Meta information extracted from the WSDL
     * - choice: Employee_Contribution_Percentage_Data | Employee_Contribution_Amount_Data
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType
     */
    public $Employee_Contribution_Amount_Data;
    /**
     * The Employer_Contribution_Percentage_Data
     * Meta information extracted from the WSDL
     * - choice: Employer_Contribution_Percentage_Data | Employer_Contribution_Amount_Data
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType
     */
    public $Employer_Contribution_Percentage_Data;
    /**
     * The Employer_Contribution_Amount_Data
     * Meta information extracted from the WSDL
     * - choice: Employer_Contribution_Percentage_Data | Employer_Contribution_Amount_Data
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employer_Contribution_Amount_DataType
     */
    public $Employer_Contribution_Amount_Data;
    /**
     * The Beneficiary_Designation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[]
     */
    public $Beneficiary_Designation_Data;
    /**
     * Constructor method for Worker_Retirement_Savings_DataType
     * @uses Worker_Retirement_Savings_DataType::setBenefit_Election_Data()
     * @uses Worker_Retirement_Savings_DataType::setEmployee_Contribution_Percentage_Data()
     * @uses Worker_Retirement_Savings_DataType::setEmployee_Contribution_Amount_Data()
     * @uses Worker_Retirement_Savings_DataType::setEmployer_Contribution_Percentage_Data()
     * @uses Worker_Retirement_Savings_DataType::setEmployer_Contribution_Amount_Data()
     * @uses Worker_Retirement_Savings_DataType::setBeneficiary_Designation_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $employee_Contribution_Percentage_Data
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType $employee_Contribution_Amount_Data
     * @param \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType $employer_Contribution_Percentage_Data
     * @param \WorkdayWsdl\\StructType\Employer_Contribution_Amount_DataType $employer_Contribution_Amount_Data
     * @param \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[] $beneficiary_Designation_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null, \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $employee_Contribution_Percentage_Data = null, \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType $employee_Contribution_Amount_Data = null, \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType $employer_Contribution_Percentage_Data = null, \WorkdayWsdl\\StructType\Employer_Contribution_Amount_DataType $employer_Contribution_Amount_Data = null, array $beneficiary_Designation_Data = array())
    {
        $this
            ->setBenefit_Election_Data($benefit_Election_Data)
            ->setEmployee_Contribution_Percentage_Data($employee_Contribution_Percentage_Data)
            ->setEmployee_Contribution_Amount_Data($employee_Contribution_Amount_Data)
            ->setEmployer_Contribution_Percentage_Data($employer_Contribution_Percentage_Data)
            ->setEmployer_Contribution_Amount_Data($employer_Contribution_Amount_Data)
            ->setBeneficiary_Designation_Data($beneficiary_Designation_Data);
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
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function setBenefit_Election_Data(\WorkdayWsdl\\StructType\Worker_Benefit_Election_DataType $benefit_Election_Data = null)
    {
        $this->Benefit_Election_Data = $benefit_Election_Data;
        return $this;
    }
    /**
     * Get Employee_Contribution_Percentage_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType|null
     */
    public function getEmployee_Contribution_Percentage_Data()
    {
        return isset($this->Employee_Contribution_Percentage_Data) ? $this->Employee_Contribution_Percentage_Data : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployee_Contribution_Percentage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Contribution_Percentage_Data method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployee_Contribution_Percentage_DataForChoiceConstraintsFromSetEmployee_Contribution_Percentage_Data($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employee_Contribution_Amount_Data',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employee_Contribution_Percentage_Data can\'t be set as the property %s is already set. Only one property must be set among these properties: Employee_Contribution_Percentage_Data, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employee_Contribution_Percentage_Data value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $employee_Contribution_Percentage_Data
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function setEmployee_Contribution_Percentage_Data(\WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType $employee_Contribution_Percentage_Data = null)
    {
        // validation for constraint: choice(Employee_Contribution_Percentage_Data, Employee_Contribution_Amount_Data)
        if ('' !== ($employee_Contribution_Percentage_DataChoiceErrorMessage = self::validateEmployee_Contribution_Percentage_DataForChoiceConstraintsFromSetEmployee_Contribution_Percentage_Data($employee_Contribution_Percentage_Data))) {
            throw new \InvalidArgumentException($employee_Contribution_Percentage_DataChoiceErrorMessage, __LINE__);
        }
        if (is_null($employee_Contribution_Percentage_Data) || (is_array($employee_Contribution_Percentage_Data) && empty($employee_Contribution_Percentage_Data))) {
            unset($this->Employee_Contribution_Percentage_Data);
        } else {
            $this->Employee_Contribution_Percentage_Data = $employee_Contribution_Percentage_Data;
        }
        return $this;
    }
    /**
     * Get Employee_Contribution_Amount_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType|null
     */
    public function getEmployee_Contribution_Amount_Data()
    {
        return isset($this->Employee_Contribution_Amount_Data) ? $this->Employee_Contribution_Amount_Data : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployee_Contribution_Amount_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Contribution_Amount_Data method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployee_Contribution_Amount_DataForChoiceConstraintsFromSetEmployee_Contribution_Amount_Data($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employee_Contribution_Percentage_Data',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employee_Contribution_Amount_Data can\'t be set as the property %s is already set. Only one property must be set among these properties: Employee_Contribution_Amount_Data, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employee_Contribution_Amount_Data value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType $employee_Contribution_Amount_Data
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function setEmployee_Contribution_Amount_Data(\WorkdayWsdl\\StructType\Employee_Contribution_Amount_DataType $employee_Contribution_Amount_Data = null)
    {
        // validation for constraint: choice(Employee_Contribution_Percentage_Data, Employee_Contribution_Amount_Data)
        if ('' !== ($employee_Contribution_Amount_DataChoiceErrorMessage = self::validateEmployee_Contribution_Amount_DataForChoiceConstraintsFromSetEmployee_Contribution_Amount_Data($employee_Contribution_Amount_Data))) {
            throw new \InvalidArgumentException($employee_Contribution_Amount_DataChoiceErrorMessage, __LINE__);
        }
        if (is_null($employee_Contribution_Amount_Data) || (is_array($employee_Contribution_Amount_Data) && empty($employee_Contribution_Amount_Data))) {
            unset($this->Employee_Contribution_Amount_Data);
        } else {
            $this->Employee_Contribution_Amount_Data = $employee_Contribution_Amount_Data;
        }
        return $this;
    }
    /**
     * Get Employer_Contribution_Percentage_Data value
     * @return \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType|null
     */
    public function getEmployer_Contribution_Percentage_Data()
    {
        return isset($this->Employer_Contribution_Percentage_Data) ? $this->Employer_Contribution_Percentage_Data : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployer_Contribution_Percentage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployer_Contribution_Percentage_Data method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployer_Contribution_Percentage_DataForChoiceConstraintsFromSetEmployer_Contribution_Percentage_Data($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employer_Contribution_Amount_Data',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employer_Contribution_Percentage_Data can\'t be set as the property %s is already set. Only one property must be set among these properties: Employer_Contribution_Percentage_Data, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employer_Contribution_Percentage_Data value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType $employer_Contribution_Percentage_Data
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function setEmployer_Contribution_Percentage_Data(\WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType $employer_Contribution_Percentage_Data = null)
    {
        // validation for constraint: choice(Employer_Contribution_Percentage_Data, Employer_Contribution_Amount_Data)
        if ('' !== ($employer_Contribution_Percentage_DataChoiceErrorMessage = self::validateEmployer_Contribution_Percentage_DataForChoiceConstraintsFromSetEmployer_Contribution_Percentage_Data($employer_Contribution_Percentage_Data))) {
            throw new \InvalidArgumentException($employer_Contribution_Percentage_DataChoiceErrorMessage, __LINE__);
        }
        if (is_null($employer_Contribution_Percentage_Data) || (is_array($employer_Contribution_Percentage_Data) && empty($employer_Contribution_Percentage_Data))) {
            unset($this->Employer_Contribution_Percentage_Data);
        } else {
            $this->Employer_Contribution_Percentage_Data = $employer_Contribution_Percentage_Data;
        }
        return $this;
    }
    /**
     * Get Employer_Contribution_Amount_Data value
     * @return \WorkdayWsdl\\StructType\Employer_Contribution_Amount_DataType|null
     */
    public function getEmployer_Contribution_Amount_Data()
    {
        return isset($this->Employer_Contribution_Amount_Data) ? $this->Employer_Contribution_Amount_Data : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmployer_Contribution_Amount_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployer_Contribution_Amount_Data method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmployer_Contribution_Amount_DataForChoiceConstraintsFromSetEmployer_Contribution_Amount_Data($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Employer_Contribution_Percentage_Data',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Employer_Contribution_Amount_Data can\'t be set as the property %s is already set. Only one property must be set among these properties: Employer_Contribution_Amount_Data, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Employer_Contribution_Amount_Data value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employer_Contribution_Amount_DataType $employer_Contribution_Amount_Data
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function setEmployer_Contribution_Amount_Data(\WorkdayWsdl\\StructType\Employer_Contribution_Amount_DataType $employer_Contribution_Amount_Data = null)
    {
        // validation for constraint: choice(Employer_Contribution_Percentage_Data, Employer_Contribution_Amount_Data)
        if ('' !== ($employer_Contribution_Amount_DataChoiceErrorMessage = self::validateEmployer_Contribution_Amount_DataForChoiceConstraintsFromSetEmployer_Contribution_Amount_Data($employer_Contribution_Amount_Data))) {
            throw new \InvalidArgumentException($employer_Contribution_Amount_DataChoiceErrorMessage, __LINE__);
        }
        if (is_null($employer_Contribution_Amount_Data) || (is_array($employer_Contribution_Amount_Data) && empty($employer_Contribution_Amount_Data))) {
            unset($this->Employer_Contribution_Amount_Data);
        } else {
            $this->Employer_Contribution_Amount_Data = $employer_Contribution_Amount_Data;
        }
        return $this;
    }
    /**
     * Get Beneficiary_Designation_Data value
     * @return \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[]|null
     */
    public function getBeneficiary_Designation_Data()
    {
        return $this->Beneficiary_Designation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBeneficiary_Designation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBeneficiary_Designation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBeneficiary_Designation_DataForArrayConstraintsFromSetBeneficiary_Designation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Retirement_Savings_DataTypeBeneficiary_Designation_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Retirement_Savings_DataTypeBeneficiary_Designation_DataItem instanceof \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType) {
                $invalidValues[] = is_object($worker_Retirement_Savings_DataTypeBeneficiary_Designation_DataItem) ? get_class($worker_Retirement_Savings_DataTypeBeneficiary_Designation_DataItem) : sprintf('%s(%s)', gettype($worker_Retirement_Savings_DataTypeBeneficiary_Designation_DataItem), var_export($worker_Retirement_Savings_DataTypeBeneficiary_Designation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Beneficiary_Designation_Data property can only contain items of type \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Beneficiary_Designation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType[] $beneficiary_Designation_Data
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function setBeneficiary_Designation_Data(array $beneficiary_Designation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($beneficiary_Designation_DataArrayErrorMessage = self::validateBeneficiary_Designation_DataForArrayConstraintsFromSetBeneficiary_Designation_Data($beneficiary_Designation_Data))) {
            throw new \InvalidArgumentException($beneficiary_Designation_DataArrayErrorMessage, __LINE__);
        }
        $this->Beneficiary_Designation_Data = $beneficiary_Designation_Data;
        return $this;
    }
    /**
     * Add item to Beneficiary_Designation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
     */
    public function addToBeneficiary_Designation_Data(\WorkdayWsdl\\StructType\Beneficiary_Designation_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType) {
            throw new \InvalidArgumentException(sprintf('The Beneficiary_Designation_Data property can only contain items of type \WorkdayWsdl\\StructType\Beneficiary_Designation_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Beneficiary_Designation_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_DataType
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
