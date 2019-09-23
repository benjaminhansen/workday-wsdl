<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Contract_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for a Pre-Hire Contract.
 * @subpackage Structs
 */
class Employee_Contract_DataType extends AbstractStructBase
{
    /**
     * The Employee_Contract_Reference
     * Meta information extracted from the WSDL
     * - documentation: Employee Contract which is being edited. An employee contract may have many versions. The employee contract reference is common for each version.1. Update existing contract if Employee Contract Reference is specified.2. Add new
     * contract if Employee Contract Reference is not specified.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_ContractObjectType
     */
    public $Employee_Contract_Reference;
    /**
     * The Employee_Contract_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: The contract reason defined in the Maintain Employee Contract Reasons task.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType[]
     */
    public $Employee_Contract_Reason_Reference;
    /**
     * The Employee_Contract_ID
     * Meta information extracted from the WSDL
     * - documentation: The employee contract ID for the contract that you're adding or the new employee contract ID for an existing contract. When no value is specified in the employee contract, Workday creates a new contract with the Employee Contract ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Employee_Contract_ID;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The date when the contract takes effect.
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Contract_ID
     * Meta information extracted from the WSDL
     * - documentation: The user-defined identifier for the employee contract. This value isn't always unique. If empty, Workday automatically populates the existing value.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_ID;
    /**
     * The Contract_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The contract types defined in the Maintain Employee Contract Types task. If empty, Workday automatically populates the existing value.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Contract_TypeObjectType
     */
    public $Contract_Type_Reference;
    /**
     * The Contract_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The start date of the contract. Must be on or after the start date of hire or additional job staffing event.
     * - maxOccurs: 1
     * @var string
     */
    public $Contract_Start_Date;
    /**
     * The Contract_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The end date of the worker contract. When there is a pending change job or transfer contract, the end date should be before or the same as the effective date of the Change Job event. If empty, Workday automatically populates the
     * existing value.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_End_Date;
    /**
     * The Employee_Contract_Collective_Agreement_Reference
     * Meta information extracted from the WSDL
     * - documentation: The collective agreements for this employee contract.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_AgreementObjectType[]
     */
    public $Employee_Contract_Collective_Agreement_Reference;
    /**
     * The Maximum_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: The Maximum Weekly Hours for the employee contract.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 14
     * @var float
     */
    public $Maximum_Weekly_Hours;
    /**
     * The Minimum_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: The Minimum Weekly Hours for the employee contract.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 14
     * @var float
     */
    public $Minimum_Weekly_Hours;
    /**
     * The Contract_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: The status of the contract, based on the status types defined within your organization. The status values will be those defined for the location of the employee's primary position.
     * @var \WorkdayWsdl\\StructType\Employee_Contract_StatusObjectType
     */
    public $Contract_Status_Reference;
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Position ID associated with the contract. If empty, Workday automatically populates the existing value.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Contract_Description
     * Meta information extracted from the WSDL
     * - documentation: The Contract Description for the employee contract. If empty, Workday automatically populates the existing value.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_Description;
    /**
     * The Date_Employee_Signed
     * Meta information extracted from the WSDL
     * - documentation: The date the employee signed the contract. Must be within 1 month of the Contract Start Date and not later than the Contract End Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Employee_Signed;
    /**
     * The Date_Employer_Signed
     * Meta information extracted from the WSDL
     * - documentation: The date the employer signed the contract. Must be within 1 month of the Contract Start Date and not later than the Contract End Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Employer_Signed;
    /**
     * The Worker_Document_Reference
     * Meta information extracted from the WSDL
     * - documentation: You can attach scanned contract images, addendums, or other file attachments.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_DocumentObjectType[]
     */
    public $Worker_Document_Reference;
    /**
     * Constructor method for Employee_Contract_DataType
     * @uses Employee_Contract_DataType::setEmployee_Contract_Reference()
     * @uses Employee_Contract_DataType::setEmployee_Contract_Reason_Reference()
     * @uses Employee_Contract_DataType::setEmployee_Contract_ID()
     * @uses Employee_Contract_DataType::setEffective_Date()
     * @uses Employee_Contract_DataType::setContract_ID()
     * @uses Employee_Contract_DataType::setContract_Type_Reference()
     * @uses Employee_Contract_DataType::setContract_Start_Date()
     * @uses Employee_Contract_DataType::setContract_End_Date()
     * @uses Employee_Contract_DataType::setEmployee_Contract_Collective_Agreement_Reference()
     * @uses Employee_Contract_DataType::setMaximum_Weekly_Hours()
     * @uses Employee_Contract_DataType::setMinimum_Weekly_Hours()
     * @uses Employee_Contract_DataType::setContract_Status_Reference()
     * @uses Employee_Contract_DataType::setPosition_Reference()
     * @uses Employee_Contract_DataType::setContract_Description()
     * @uses Employee_Contract_DataType::setDate_Employee_Signed()
     * @uses Employee_Contract_DataType::setDate_Employer_Signed()
     * @uses Employee_Contract_DataType::setWorker_Document_Reference()
     * @param \WorkdayWsdl\\StructType\Employee_ContractObjectType $employee_Contract_Reference
     * @param \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType[] $employee_Contract_Reason_Reference
     * @param string $employee_Contract_ID
     * @param string $effective_Date
     * @param string $contract_ID
     * @param \WorkdayWsdl\\StructType\Employee_Contract_TypeObjectType $contract_Type_Reference
     * @param string $contract_Start_Date
     * @param string $contract_End_Date
     * @param \WorkdayWsdl\\StructType\Collective_AgreementObjectType[] $employee_Contract_Collective_Agreement_Reference
     * @param float $maximum_Weekly_Hours
     * @param float $minimum_Weekly_Hours
     * @param \WorkdayWsdl\\StructType\Employee_Contract_StatusObjectType $contract_Status_Reference
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @param string $contract_Description
     * @param string $date_Employee_Signed
     * @param string $date_Employer_Signed
     * @param \WorkdayWsdl\\StructType\Worker_DocumentObjectType[] $worker_Document_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Employee_ContractObjectType $employee_Contract_Reference = null, array $employee_Contract_Reason_Reference = array(), $employee_Contract_ID = null, $effective_Date = null, $contract_ID = null, \WorkdayWsdl\\StructType\Employee_Contract_TypeObjectType $contract_Type_Reference = null, $contract_Start_Date = null, $contract_End_Date = null, array $employee_Contract_Collective_Agreement_Reference = array(), $maximum_Weekly_Hours = null, $minimum_Weekly_Hours = null, \WorkdayWsdl\\StructType\Employee_Contract_StatusObjectType $contract_Status_Reference = null, \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null, $contract_Description = null, $date_Employee_Signed = null, $date_Employer_Signed = null, array $worker_Document_Reference = array())
    {
        $this
            ->setEmployee_Contract_Reference($employee_Contract_Reference)
            ->setEmployee_Contract_Reason_Reference($employee_Contract_Reason_Reference)
            ->setEmployee_Contract_ID($employee_Contract_ID)
            ->setEffective_Date($effective_Date)
            ->setContract_ID($contract_ID)
            ->setContract_Type_Reference($contract_Type_Reference)
            ->setContract_Start_Date($contract_Start_Date)
            ->setContract_End_Date($contract_End_Date)
            ->setEmployee_Contract_Collective_Agreement_Reference($employee_Contract_Collective_Agreement_Reference)
            ->setMaximum_Weekly_Hours($maximum_Weekly_Hours)
            ->setMinimum_Weekly_Hours($minimum_Weekly_Hours)
            ->setContract_Status_Reference($contract_Status_Reference)
            ->setPosition_Reference($position_Reference)
            ->setContract_Description($contract_Description)
            ->setDate_Employee_Signed($date_Employee_Signed)
            ->setDate_Employer_Signed($date_Employer_Signed)
            ->setWorker_Document_Reference($worker_Document_Reference);
    }
    /**
     * Get Employee_Contract_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_ContractObjectType|null
     */
    public function getEmployee_Contract_Reference()
    {
        return $this->Employee_Contract_Reference;
    }
    /**
     * Set Employee_Contract_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_ContractObjectType $employee_Contract_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setEmployee_Contract_Reference(\WorkdayWsdl\\StructType\Employee_ContractObjectType $employee_Contract_Reference = null)
    {
        $this->Employee_Contract_Reference = $employee_Contract_Reference;
        return $this;
    }
    /**
     * Get Employee_Contract_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType[]|null
     */
    public function getEmployee_Contract_Reason_Reference()
    {
        return $this->Employee_Contract_Reason_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Contract_Reason_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Contract_Reason_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_Contract_Reason_ReferenceForArrayConstraintsFromSetEmployee_Contract_Reason_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Contract_DataTypeEmployee_Contract_Reason_ReferenceItem) {
            // validation for constraint: itemType
            if (!$employee_Contract_DataTypeEmployee_Contract_Reason_ReferenceItem instanceof \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType) {
                $invalidValues[] = is_object($employee_Contract_DataTypeEmployee_Contract_Reason_ReferenceItem) ? get_class($employee_Contract_DataTypeEmployee_Contract_Reason_ReferenceItem) : sprintf('%s(%s)', gettype($employee_Contract_DataTypeEmployee_Contract_Reason_ReferenceItem), var_export($employee_Contract_DataTypeEmployee_Contract_Reason_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Contract_Reason_Reference property can only contain items of type \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Contract_Reason_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType[] $employee_Contract_Reason_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setEmployee_Contract_Reason_Reference(array $employee_Contract_Reason_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_Contract_Reason_ReferenceArrayErrorMessage = self::validateEmployee_Contract_Reason_ReferenceForArrayConstraintsFromSetEmployee_Contract_Reason_Reference($employee_Contract_Reason_Reference))) {
            throw new \InvalidArgumentException($employee_Contract_Reason_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Employee_Contract_Reason_Reference = $employee_Contract_Reason_Reference;
        return $this;
    }
    /**
     * Add item to Employee_Contract_Reason_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType $item
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function addToEmployee_Contract_Reason_Reference(\WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Contract_Reason_Reference property can only contain items of type \WorkdayWsdl\\StructType\Employee_Contract_ReasonObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Contract_Reason_Reference[] = $item;
        return $this;
    }
    /**
     * Get Employee_Contract_ID value
     * @return string|null
     */
    public function getEmployee_Contract_ID()
    {
        return $this->Employee_Contract_ID;
    }
    /**
     * Set Employee_Contract_ID value
     * @param string $employee_Contract_ID
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setEmployee_Contract_ID($employee_Contract_ID = null)
    {
        // validation for constraint: string
        if (!is_null($employee_Contract_ID) && !is_string($employee_Contract_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_Contract_ID, true), gettype($employee_Contract_ID)), __LINE__);
        }
        $this->Employee_Contract_ID = $employee_Contract_ID;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
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
     * Get Contract_ID value
     * @return string|null
     */
    public function getContract_ID()
    {
        return $this->Contract_ID;
    }
    /**
     * Set Contract_ID value
     * @param string $contract_ID
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setContract_ID($contract_ID = null)
    {
        // validation for constraint: string
        if (!is_null($contract_ID) && !is_string($contract_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_ID, true), gettype($contract_ID)), __LINE__);
        }
        $this->Contract_ID = $contract_ID;
        return $this;
    }
    /**
     * Get Contract_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Contract_TypeObjectType|null
     */
    public function getContract_Type_Reference()
    {
        return $this->Contract_Type_Reference;
    }
    /**
     * Set Contract_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Contract_TypeObjectType $contract_Type_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setContract_Type_Reference(\WorkdayWsdl\\StructType\Employee_Contract_TypeObjectType $contract_Type_Reference = null)
    {
        $this->Contract_Type_Reference = $contract_Type_Reference;
        return $this;
    }
    /**
     * Get Contract_Start_Date value
     * @return string|null
     */
    public function getContract_Start_Date()
    {
        return $this->Contract_Start_Date;
    }
    /**
     * Set Contract_Start_Date value
     * @param string $contract_Start_Date
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setContract_Start_Date($contract_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($contract_Start_Date) && !is_string($contract_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_Start_Date, true), gettype($contract_Start_Date)), __LINE__);
        }
        $this->Contract_Start_Date = $contract_Start_Date;
        return $this;
    }
    /**
     * Get Contract_End_Date value
     * @return string|null
     */
    public function getContract_End_Date()
    {
        return $this->Contract_End_Date;
    }
    /**
     * Set Contract_End_Date value
     * @param string $contract_End_Date
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setContract_End_Date($contract_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($contract_End_Date) && !is_string($contract_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_End_Date, true), gettype($contract_End_Date)), __LINE__);
        }
        $this->Contract_End_Date = $contract_End_Date;
        return $this;
    }
    /**
     * Get Employee_Contract_Collective_Agreement_Reference value
     * @return \WorkdayWsdl\\StructType\Collective_AgreementObjectType[]|null
     */
    public function getEmployee_Contract_Collective_Agreement_Reference()
    {
        return $this->Employee_Contract_Collective_Agreement_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Contract_Collective_Agreement_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Contract_Collective_Agreement_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_Contract_Collective_Agreement_ReferenceForArrayConstraintsFromSetEmployee_Contract_Collective_Agreement_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Contract_DataTypeEmployee_Contract_Collective_Agreement_ReferenceItem) {
            // validation for constraint: itemType
            if (!$employee_Contract_DataTypeEmployee_Contract_Collective_Agreement_ReferenceItem instanceof \WorkdayWsdl\\StructType\Collective_AgreementObjectType) {
                $invalidValues[] = is_object($employee_Contract_DataTypeEmployee_Contract_Collective_Agreement_ReferenceItem) ? get_class($employee_Contract_DataTypeEmployee_Contract_Collective_Agreement_ReferenceItem) : sprintf('%s(%s)', gettype($employee_Contract_DataTypeEmployee_Contract_Collective_Agreement_ReferenceItem), var_export($employee_Contract_DataTypeEmployee_Contract_Collective_Agreement_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Contract_Collective_Agreement_Reference property can only contain items of type \WorkdayWsdl\\StructType\Collective_AgreementObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Contract_Collective_Agreement_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Collective_AgreementObjectType[] $employee_Contract_Collective_Agreement_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setEmployee_Contract_Collective_Agreement_Reference(array $employee_Contract_Collective_Agreement_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_Contract_Collective_Agreement_ReferenceArrayErrorMessage = self::validateEmployee_Contract_Collective_Agreement_ReferenceForArrayConstraintsFromSetEmployee_Contract_Collective_Agreement_Reference($employee_Contract_Collective_Agreement_Reference))) {
            throw new \InvalidArgumentException($employee_Contract_Collective_Agreement_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Employee_Contract_Collective_Agreement_Reference = $employee_Contract_Collective_Agreement_Reference;
        return $this;
    }
    /**
     * Add item to Employee_Contract_Collective_Agreement_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Collective_AgreementObjectType $item
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function addToEmployee_Contract_Collective_Agreement_Reference(\WorkdayWsdl\\StructType\Collective_AgreementObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Collective_AgreementObjectType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Contract_Collective_Agreement_Reference property can only contain items of type \WorkdayWsdl\\StructType\Collective_AgreementObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Contract_Collective_Agreement_Reference[] = $item;
        return $this;
    }
    /**
     * Get Maximum_Weekly_Hours value
     * @return float|null
     */
    public function getMaximum_Weekly_Hours()
    {
        return $this->Maximum_Weekly_Hours;
    }
    /**
     * Set Maximum_Weekly_Hours value
     * @param float $maximum_Weekly_Hours
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setMaximum_Weekly_Hours($maximum_Weekly_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($maximum_Weekly_Hours) && !(is_float($maximum_Weekly_Hours) || is_numeric($maximum_Weekly_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximum_Weekly_Hours, true), gettype($maximum_Weekly_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($maximum_Weekly_Hours) && mb_strlen(mb_substr($maximum_Weekly_Hours, mb_strpos($maximum_Weekly_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($maximum_Weekly_Hours, true), mb_strlen(mb_substr($maximum_Weekly_Hours, mb_strpos($maximum_Weekly_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maximum_Weekly_Hours) && $maximum_Weekly_Hours < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maximum_Weekly_Hours, true)), __LINE__);
        }
        // validation for constraint: totalDigits(14)
        if (!is_null($maximum_Weekly_Hours) && mb_strlen(preg_replace('/(\D)/', '', $maximum_Weekly_Hours)) > 14) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 14 digits, "%d" given', var_export($maximum_Weekly_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $maximum_Weekly_Hours))), __LINE__);
        }
        $this->Maximum_Weekly_Hours = $maximum_Weekly_Hours;
        return $this;
    }
    /**
     * Get Minimum_Weekly_Hours value
     * @return float|null
     */
    public function getMinimum_Weekly_Hours()
    {
        return $this->Minimum_Weekly_Hours;
    }
    /**
     * Set Minimum_Weekly_Hours value
     * @param float $minimum_Weekly_Hours
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setMinimum_Weekly_Hours($minimum_Weekly_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($minimum_Weekly_Hours) && !(is_float($minimum_Weekly_Hours) || is_numeric($minimum_Weekly_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimum_Weekly_Hours, true), gettype($minimum_Weekly_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($minimum_Weekly_Hours) && mb_strlen(mb_substr($minimum_Weekly_Hours, mb_strpos($minimum_Weekly_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($minimum_Weekly_Hours, true), mb_strlen(mb_substr($minimum_Weekly_Hours, mb_strpos($minimum_Weekly_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minimum_Weekly_Hours) && $minimum_Weekly_Hours < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minimum_Weekly_Hours, true)), __LINE__);
        }
        // validation for constraint: totalDigits(14)
        if (!is_null($minimum_Weekly_Hours) && mb_strlen(preg_replace('/(\D)/', '', $minimum_Weekly_Hours)) > 14) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 14 digits, "%d" given', var_export($minimum_Weekly_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $minimum_Weekly_Hours))), __LINE__);
        }
        $this->Minimum_Weekly_Hours = $minimum_Weekly_Hours;
        return $this;
    }
    /**
     * Get Contract_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Contract_StatusObjectType|null
     */
    public function getContract_Status_Reference()
    {
        return $this->Contract_Status_Reference;
    }
    /**
     * Set Contract_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_Contract_StatusObjectType $contract_Status_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setContract_Status_Reference(\WorkdayWsdl\\StructType\Employee_Contract_StatusObjectType $contract_Status_Reference = null)
    {
        $this->Contract_Status_Reference = $contract_Status_Reference;
        return $this;
    }
    /**
     * Get Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setPosition_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Contract_Description value
     * @return string|null
     */
    public function getContract_Description()
    {
        return $this->Contract_Description;
    }
    /**
     * Set Contract_Description value
     * @param string $contract_Description
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setContract_Description($contract_Description = null)
    {
        // validation for constraint: string
        if (!is_null($contract_Description) && !is_string($contract_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_Description, true), gettype($contract_Description)), __LINE__);
        }
        $this->Contract_Description = $contract_Description;
        return $this;
    }
    /**
     * Get Date_Employee_Signed value
     * @return string|null
     */
    public function getDate_Employee_Signed()
    {
        return $this->Date_Employee_Signed;
    }
    /**
     * Set Date_Employee_Signed value
     * @param string $date_Employee_Signed
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setDate_Employee_Signed($date_Employee_Signed = null)
    {
        // validation for constraint: string
        if (!is_null($date_Employee_Signed) && !is_string($date_Employee_Signed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Employee_Signed, true), gettype($date_Employee_Signed)), __LINE__);
        }
        $this->Date_Employee_Signed = $date_Employee_Signed;
        return $this;
    }
    /**
     * Get Date_Employer_Signed value
     * @return string|null
     */
    public function getDate_Employer_Signed()
    {
        return $this->Date_Employer_Signed;
    }
    /**
     * Set Date_Employer_Signed value
     * @param string $date_Employer_Signed
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setDate_Employer_Signed($date_Employer_Signed = null)
    {
        // validation for constraint: string
        if (!is_null($date_Employer_Signed) && !is_string($date_Employer_Signed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Employer_Signed, true), gettype($date_Employer_Signed)), __LINE__);
        }
        $this->Date_Employer_Signed = $date_Employer_Signed;
        return $this;
    }
    /**
     * Get Worker_Document_Reference value
     * @return \WorkdayWsdl\\StructType\Worker_DocumentObjectType[]|null
     */
    public function getWorker_Document_Reference()
    {
        return $this->Worker_Document_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Document_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Document_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Document_ReferenceForArrayConstraintsFromSetWorker_Document_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Contract_DataTypeWorker_Document_ReferenceItem) {
            // validation for constraint: itemType
            if (!$employee_Contract_DataTypeWorker_Document_ReferenceItem instanceof \WorkdayWsdl\\StructType\Worker_DocumentObjectType) {
                $invalidValues[] = is_object($employee_Contract_DataTypeWorker_Document_ReferenceItem) ? get_class($employee_Contract_DataTypeWorker_Document_ReferenceItem) : sprintf('%s(%s)', gettype($employee_Contract_DataTypeWorker_Document_ReferenceItem), var_export($employee_Contract_DataTypeWorker_Document_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Document_Reference property can only contain items of type \WorkdayWsdl\\StructType\Worker_DocumentObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Document_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_DocumentObjectType[] $worker_Document_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function setWorker_Document_Reference(array $worker_Document_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Document_ReferenceArrayErrorMessage = self::validateWorker_Document_ReferenceForArrayConstraintsFromSetWorker_Document_Reference($worker_Document_Reference))) {
            throw new \InvalidArgumentException($worker_Document_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Worker_Document_Reference = $worker_Document_Reference;
        return $this;
    }
    /**
     * Add item to Worker_Document_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_DocumentObjectType $item
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
     */
    public function addToWorker_Document_Reference(\WorkdayWsdl\\StructType\Worker_DocumentObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_DocumentObjectType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Document_Reference property can only contain items of type \WorkdayWsdl\\StructType\Worker_DocumentObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Document_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Contract_DataType
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
