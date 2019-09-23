<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Request Criteria element lets you apply additional criteria to identify the specific instance(s) of a Worker.
 * @subpackage Structs
 */
class Worker_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Transaction_Log_Criteria_Data
     * Meta information extracted from the WSDL
     * - documentation: Transaction Log Criteria Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Transaction_Log_CriteriaType[]
     */
    public $Transaction_Log_Criteria_Data;
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a Supervisory Organization
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType[]
     */
    public $Organization_Reference;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a Country
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CountryObjectType[]
     */
    public $Country_Reference;
    /**
     * The Include_Subordinate_Organizations
     * Meta information extracted from the WSDL
     * - documentation: When this boolean value is set to true, indicates to include all subordinate organizations to the Organization Reference in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Subordinate_Organizations;
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the position of the worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Position_ElementObjectType[]
     */
    public $Position_Reference;
    /**
     * The Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The identifier of an existing Event.
     * - minOccurs: 0
     * @var \StructType\Transaction_LogObjectType
     */
    public $Event_Reference;
    /**
     * The Benefit_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier to a benefits plan, along with a string describing the benefits plan. Identifies the benefit plan or plans that can be used for Benefit Enrollment and Benefit Eligibility. Enrollment is checked when the benefit
     * plan year falls within the effective date. Otherwise, if the benefit plan year falls outside of the effective data, then eligibility is checked.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Benefit_PlanObjectType[]
     */
    public $Benefit_Plan_Reference;
    /**
     * The Field_And_Parameter_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Field_And_Parameter_Criteria_DataType
     */
    public $Field_And_Parameter_Criteria_Data;
    /**
     * The National_ID_Criteria_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_by_National_ID_Request_CriteriaType[]
     */
    public $National_ID_Criteria_Data;
    /**
     * The Exclude_Inactive_Workers
     * Meta information extracted from the WSDL
     * - documentation: Excludes from the response terminated employees or contingent workers whose contracts have ended. (See also: Exclude_Employees, Exclude_Contingent_Workers)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Inactive_Workers;
    /**
     * The Exclude_Employees
     * Meta information extracted from the WSDL
     * - documentation: Excludes employees from inclusion in the response. (See also: Exclude_Inactive_Workers, Exclude_Contingent_Workers)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Employees;
    /**
     * The Exclude_Contingent_Workers
     * Meta information extracted from the WSDL
     * - documentation: Excludes contingent workers from inclusion in the response. (See also: Exclude_Inactive_Workers, Exclude_Employees)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Contingent_Workers;
    /**
     * The Eligibility_Criteria_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Eligibility_Criteria_DataType[]
     */
    public $Eligibility_Criteria_Data;
    /**
     * The Universal_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: All worker roles will be returned for the person associated with each universal identifier.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Universal_IdentifierObjectType[]
     */
    public $Universal_ID_Reference;
    /**
     * Constructor method for Worker_Request_CriteriaType
     * @uses Worker_Request_CriteriaType::setTransaction_Log_Criteria_Data()
     * @uses Worker_Request_CriteriaType::setOrganization_Reference()
     * @uses Worker_Request_CriteriaType::setCountry_Reference()
     * @uses Worker_Request_CriteriaType::setInclude_Subordinate_Organizations()
     * @uses Worker_Request_CriteriaType::setPosition_Reference()
     * @uses Worker_Request_CriteriaType::setEvent_Reference()
     * @uses Worker_Request_CriteriaType::setBenefit_Plan_Reference()
     * @uses Worker_Request_CriteriaType::setField_And_Parameter_Criteria_Data()
     * @uses Worker_Request_CriteriaType::setNational_ID_Criteria_Data()
     * @uses Worker_Request_CriteriaType::setExclude_Inactive_Workers()
     * @uses Worker_Request_CriteriaType::setExclude_Employees()
     * @uses Worker_Request_CriteriaType::setExclude_Contingent_Workers()
     * @uses Worker_Request_CriteriaType::setEligibility_Criteria_Data()
     * @uses Worker_Request_CriteriaType::setUniversal_ID_Reference()
     * @param \StructType\Transaction_Log_CriteriaType[] $transaction_Log_Criteria_Data
     * @param \StructType\OrganizationObjectType[] $organization_Reference
     * @param \StructType\CountryObjectType[] $country_Reference
     * @param bool $include_Subordinate_Organizations
     * @param \StructType\Position_ElementObjectType[] $position_Reference
     * @param \StructType\Transaction_LogObjectType $event_Reference
     * @param \StructType\Benefit_PlanObjectType[] $benefit_Plan_Reference
     * @param \StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     * @param \StructType\Worker_by_National_ID_Request_CriteriaType[] $national_ID_Criteria_Data
     * @param bool $exclude_Inactive_Workers
     * @param bool $exclude_Employees
     * @param bool $exclude_Contingent_Workers
     * @param \StructType\Eligibility_Criteria_DataType[] $eligibility_Criteria_Data
     * @param \StructType\Universal_IdentifierObjectType[] $universal_ID_Reference
     */
    public function __construct(array $transaction_Log_Criteria_Data = array(), array $organization_Reference = array(), array $country_Reference = array(), $include_Subordinate_Organizations = null, array $position_Reference = array(), \StructType\Transaction_LogObjectType $event_Reference = null, array $benefit_Plan_Reference = array(), \StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null, array $national_ID_Criteria_Data = array(), $exclude_Inactive_Workers = null, $exclude_Employees = null, $exclude_Contingent_Workers = null, array $eligibility_Criteria_Data = array(), array $universal_ID_Reference = array())
    {
        $this
            ->setTransaction_Log_Criteria_Data($transaction_Log_Criteria_Data)
            ->setOrganization_Reference($organization_Reference)
            ->setCountry_Reference($country_Reference)
            ->setInclude_Subordinate_Organizations($include_Subordinate_Organizations)
            ->setPosition_Reference($position_Reference)
            ->setEvent_Reference($event_Reference)
            ->setBenefit_Plan_Reference($benefit_Plan_Reference)
            ->setField_And_Parameter_Criteria_Data($field_And_Parameter_Criteria_Data)
            ->setNational_ID_Criteria_Data($national_ID_Criteria_Data)
            ->setExclude_Inactive_Workers($exclude_Inactive_Workers)
            ->setExclude_Employees($exclude_Employees)
            ->setExclude_Contingent_Workers($exclude_Contingent_Workers)
            ->setEligibility_Criteria_Data($eligibility_Criteria_Data)
            ->setUniversal_ID_Reference($universal_ID_Reference);
    }
    /**
     * Get Transaction_Log_Criteria_Data value
     * @return \StructType\Transaction_Log_CriteriaType[]|null
     */
    public function getTransaction_Log_Criteria_Data()
    {
        return $this->Transaction_Log_Criteria_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Log_Criteria_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Log_Criteria_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Log_Criteria_DataForArrayConstraintsFromSetTransaction_Log_Criteria_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeTransaction_Log_Criteria_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeTransaction_Log_Criteria_DataItem instanceof \StructType\Transaction_Log_CriteriaType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeTransaction_Log_Criteria_DataItem) ? get_class($worker_Request_CriteriaTypeTransaction_Log_Criteria_DataItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeTransaction_Log_Criteria_DataItem), var_export($worker_Request_CriteriaTypeTransaction_Log_Criteria_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Log_Criteria_Data property can only contain items of type \StructType\Transaction_Log_CriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Log_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Log_CriteriaType[] $transaction_Log_Criteria_Data
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setTransaction_Log_Criteria_Data(array $transaction_Log_Criteria_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Log_Criteria_DataArrayErrorMessage = self::validateTransaction_Log_Criteria_DataForArrayConstraintsFromSetTransaction_Log_Criteria_Data($transaction_Log_Criteria_Data))) {
            throw new \InvalidArgumentException($transaction_Log_Criteria_DataArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Log_Criteria_Data = $transaction_Log_Criteria_Data;
        return $this;
    }
    /**
     * Add item to Transaction_Log_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Log_CriteriaType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToTransaction_Log_Criteria_Data(\StructType\Transaction_Log_CriteriaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Transaction_Log_CriteriaType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Log_Criteria_Data property can only contain items of type \StructType\Transaction_Log_CriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Log_Criteria_Data[] = $item;
        return $this;
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\OrganizationObjectType[]|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeOrganization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeOrganization_ReferenceItem instanceof \StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeOrganization_ReferenceItem) ? get_class($worker_Request_CriteriaTypeOrganization_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeOrganization_ReferenceItem), var_export($worker_Request_CriteriaTypeOrganization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference property can only contain items of type \StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\OrganizationObjectType[] $organization_Reference
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setOrganization_Reference(array $organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_ReferenceArrayErrorMessage = self::validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference($organization_Reference))) {
            throw new \InvalidArgumentException($organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\OrganizationObjectType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToOrganization_Reference(\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference property can only contain items of type \StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \StructType\CountryObjectType[]|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCountry_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountry_ReferenceForArrayConstraintsFromSetCountry_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeCountry_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeCountry_ReferenceItem instanceof \StructType\CountryObjectType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeCountry_ReferenceItem) ? get_class($worker_Request_CriteriaTypeCountry_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeCountry_ReferenceItem), var_export($worker_Request_CriteriaTypeCountry_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Country_Reference property can only contain items of type \StructType\CountryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Country_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryObjectType[] $country_Reference
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setCountry_Reference(array $country_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($country_ReferenceArrayErrorMessage = self::validateCountry_ReferenceForArrayConstraintsFromSetCountry_Reference($country_Reference))) {
            throw new \InvalidArgumentException($country_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Add item to Country_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryObjectType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToCountry_Reference(\StructType\CountryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CountryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Country_Reference property can only contain items of type \StructType\CountryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Country_Reference[] = $item;
        return $this;
    }
    /**
     * Get Include_Subordinate_Organizations value
     * @return bool|null
     */
    public function getInclude_Subordinate_Organizations()
    {
        return $this->Include_Subordinate_Organizations;
    }
    /**
     * Set Include_Subordinate_Organizations value
     * @param bool $include_Subordinate_Organizations
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setInclude_Subordinate_Organizations($include_Subordinate_Organizations = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Subordinate_Organizations) && !is_bool($include_Subordinate_Organizations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Subordinate_Organizations, true), gettype($include_Subordinate_Organizations)), __LINE__);
        }
        $this->Include_Subordinate_Organizations = $include_Subordinate_Organizations;
        return $this;
    }
    /**
     * Get Position_Reference value
     * @return \StructType\Position_ElementObjectType[]|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePosition_ReferenceForArrayConstraintsFromSetPosition_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypePosition_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypePosition_ReferenceItem instanceof \StructType\Position_ElementObjectType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypePosition_ReferenceItem) ? get_class($worker_Request_CriteriaTypePosition_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypePosition_ReferenceItem), var_export($worker_Request_CriteriaTypePosition_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Position_Reference property can only contain items of type \StructType\Position_ElementObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Position_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Position_ElementObjectType[] $position_Reference
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setPosition_Reference(array $position_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($position_ReferenceArrayErrorMessage = self::validatePosition_ReferenceForArrayConstraintsFromSetPosition_Reference($position_Reference))) {
            throw new \InvalidArgumentException($position_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Add item to Position_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Position_ElementObjectType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToPosition_Reference(\StructType\Position_ElementObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Position_ElementObjectType) {
            throw new \InvalidArgumentException(sprintf('The Position_Reference property can only contain items of type \StructType\Position_ElementObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Position_Reference[] = $item;
        return $this;
    }
    /**
     * Get Event_Reference value
     * @return \StructType\Transaction_LogObjectType|null
     */
    public function getEvent_Reference()
    {
        return $this->Event_Reference;
    }
    /**
     * Set Event_Reference value
     * @param \StructType\Transaction_LogObjectType $event_Reference
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setEvent_Reference(\StructType\Transaction_LogObjectType $event_Reference = null)
    {
        $this->Event_Reference = $event_Reference;
        return $this;
    }
    /**
     * Get Benefit_Plan_Reference value
     * @return \StructType\Benefit_PlanObjectType[]|null
     */
    public function getBenefit_Plan_Reference()
    {
        return $this->Benefit_Plan_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setBenefit_Plan_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBenefit_Plan_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBenefit_Plan_ReferenceForArrayConstraintsFromSetBenefit_Plan_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeBenefit_Plan_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeBenefit_Plan_ReferenceItem instanceof \StructType\Benefit_PlanObjectType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeBenefit_Plan_ReferenceItem) ? get_class($worker_Request_CriteriaTypeBenefit_Plan_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeBenefit_Plan_ReferenceItem), var_export($worker_Request_CriteriaTypeBenefit_Plan_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Benefit_Plan_Reference property can only contain items of type \StructType\Benefit_PlanObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Benefit_Plan_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Benefit_PlanObjectType[] $benefit_Plan_Reference
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setBenefit_Plan_Reference(array $benefit_Plan_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($benefit_Plan_ReferenceArrayErrorMessage = self::validateBenefit_Plan_ReferenceForArrayConstraintsFromSetBenefit_Plan_Reference($benefit_Plan_Reference))) {
            throw new \InvalidArgumentException($benefit_Plan_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Benefit_Plan_Reference = $benefit_Plan_Reference;
        return $this;
    }
    /**
     * Add item to Benefit_Plan_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Benefit_PlanObjectType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToBenefit_Plan_Reference(\StructType\Benefit_PlanObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Benefit_PlanObjectType) {
            throw new \InvalidArgumentException(sprintf('The Benefit_Plan_Reference property can only contain items of type \StructType\Benefit_PlanObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Benefit_Plan_Reference[] = $item;
        return $this;
    }
    /**
     * Get Field_And_Parameter_Criteria_Data value
     * @return \StructType\Field_And_Parameter_Criteria_DataType|null
     */
    public function getField_And_Parameter_Criteria_Data()
    {
        return $this->Field_And_Parameter_Criteria_Data;
    }
    /**
     * Set Field_And_Parameter_Criteria_Data value
     * @param \StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setField_And_Parameter_Criteria_Data(\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null)
    {
        $this->Field_And_Parameter_Criteria_Data = $field_And_Parameter_Criteria_Data;
        return $this;
    }
    /**
     * Get National_ID_Criteria_Data value
     * @return \StructType\Worker_by_National_ID_Request_CriteriaType[]|null
     */
    public function getNational_ID_Criteria_Data()
    {
        return $this->National_ID_Criteria_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setNational_ID_Criteria_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNational_ID_Criteria_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNational_ID_Criteria_DataForArrayConstraintsFromSetNational_ID_Criteria_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeNational_ID_Criteria_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeNational_ID_Criteria_DataItem instanceof \StructType\Worker_by_National_ID_Request_CriteriaType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeNational_ID_Criteria_DataItem) ? get_class($worker_Request_CriteriaTypeNational_ID_Criteria_DataItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeNational_ID_Criteria_DataItem), var_export($worker_Request_CriteriaTypeNational_ID_Criteria_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The National_ID_Criteria_Data property can only contain items of type \StructType\Worker_by_National_ID_Request_CriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set National_ID_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_by_National_ID_Request_CriteriaType[] $national_ID_Criteria_Data
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setNational_ID_Criteria_Data(array $national_ID_Criteria_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($national_ID_Criteria_DataArrayErrorMessage = self::validateNational_ID_Criteria_DataForArrayConstraintsFromSetNational_ID_Criteria_Data($national_ID_Criteria_Data))) {
            throw new \InvalidArgumentException($national_ID_Criteria_DataArrayErrorMessage, __LINE__);
        }
        $this->National_ID_Criteria_Data = $national_ID_Criteria_Data;
        return $this;
    }
    /**
     * Add item to National_ID_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_by_National_ID_Request_CriteriaType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToNational_ID_Criteria_Data(\StructType\Worker_by_National_ID_Request_CriteriaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_by_National_ID_Request_CriteriaType) {
            throw new \InvalidArgumentException(sprintf('The National_ID_Criteria_Data property can only contain items of type \StructType\Worker_by_National_ID_Request_CriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->National_ID_Criteria_Data[] = $item;
        return $this;
    }
    /**
     * Get Exclude_Inactive_Workers value
     * @return bool|null
     */
    public function getExclude_Inactive_Workers()
    {
        return $this->Exclude_Inactive_Workers;
    }
    /**
     * Set Exclude_Inactive_Workers value
     * @param bool $exclude_Inactive_Workers
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setExclude_Inactive_Workers($exclude_Inactive_Workers = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Inactive_Workers) && !is_bool($exclude_Inactive_Workers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Inactive_Workers, true), gettype($exclude_Inactive_Workers)), __LINE__);
        }
        $this->Exclude_Inactive_Workers = $exclude_Inactive_Workers;
        return $this;
    }
    /**
     * Get Exclude_Employees value
     * @return bool|null
     */
    public function getExclude_Employees()
    {
        return $this->Exclude_Employees;
    }
    /**
     * Set Exclude_Employees value
     * @param bool $exclude_Employees
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setExclude_Employees($exclude_Employees = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Employees) && !is_bool($exclude_Employees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Employees, true), gettype($exclude_Employees)), __LINE__);
        }
        $this->Exclude_Employees = $exclude_Employees;
        return $this;
    }
    /**
     * Get Exclude_Contingent_Workers value
     * @return bool|null
     */
    public function getExclude_Contingent_Workers()
    {
        return $this->Exclude_Contingent_Workers;
    }
    /**
     * Set Exclude_Contingent_Workers value
     * @param bool $exclude_Contingent_Workers
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setExclude_Contingent_Workers($exclude_Contingent_Workers = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Contingent_Workers) && !is_bool($exclude_Contingent_Workers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Contingent_Workers, true), gettype($exclude_Contingent_Workers)), __LINE__);
        }
        $this->Exclude_Contingent_Workers = $exclude_Contingent_Workers;
        return $this;
    }
    /**
     * Get Eligibility_Criteria_Data value
     * @return \StructType\Eligibility_Criteria_DataType[]|null
     */
    public function getEligibility_Criteria_Data()
    {
        return $this->Eligibility_Criteria_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEligibility_Criteria_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEligibility_Criteria_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEligibility_Criteria_DataForArrayConstraintsFromSetEligibility_Criteria_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeEligibility_Criteria_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeEligibility_Criteria_DataItem instanceof \StructType\Eligibility_Criteria_DataType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeEligibility_Criteria_DataItem) ? get_class($worker_Request_CriteriaTypeEligibility_Criteria_DataItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeEligibility_Criteria_DataItem), var_export($worker_Request_CriteriaTypeEligibility_Criteria_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Eligibility_Criteria_Data property can only contain items of type \StructType\Eligibility_Criteria_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Eligibility_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Eligibility_Criteria_DataType[] $eligibility_Criteria_Data
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setEligibility_Criteria_Data(array $eligibility_Criteria_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($eligibility_Criteria_DataArrayErrorMessage = self::validateEligibility_Criteria_DataForArrayConstraintsFromSetEligibility_Criteria_Data($eligibility_Criteria_Data))) {
            throw new \InvalidArgumentException($eligibility_Criteria_DataArrayErrorMessage, __LINE__);
        }
        $this->Eligibility_Criteria_Data = $eligibility_Criteria_Data;
        return $this;
    }
    /**
     * Add item to Eligibility_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Eligibility_Criteria_DataType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToEligibility_Criteria_Data(\StructType\Eligibility_Criteria_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Eligibility_Criteria_DataType) {
            throw new \InvalidArgumentException(sprintf('The Eligibility_Criteria_Data property can only contain items of type \StructType\Eligibility_Criteria_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Eligibility_Criteria_Data[] = $item;
        return $this;
    }
    /**
     * Get Universal_ID_Reference value
     * @return \StructType\Universal_IdentifierObjectType[]|null
     */
    public function getUniversal_ID_Reference()
    {
        return $this->Universal_ID_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUniversal_ID_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversal_ID_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversal_ID_ReferenceForArrayConstraintsFromSetUniversal_ID_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Request_CriteriaTypeUniversal_ID_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Request_CriteriaTypeUniversal_ID_ReferenceItem instanceof \StructType\Universal_IdentifierObjectType) {
                $invalidValues[] = is_object($worker_Request_CriteriaTypeUniversal_ID_ReferenceItem) ? get_class($worker_Request_CriteriaTypeUniversal_ID_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Request_CriteriaTypeUniversal_ID_ReferenceItem), var_export($worker_Request_CriteriaTypeUniversal_ID_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Universal_ID_Reference property can only contain items of type \StructType\Universal_IdentifierObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Universal_ID_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Universal_IdentifierObjectType[] $universal_ID_Reference
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function setUniversal_ID_Reference(array $universal_ID_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($universal_ID_ReferenceArrayErrorMessage = self::validateUniversal_ID_ReferenceForArrayConstraintsFromSetUniversal_ID_Reference($universal_ID_Reference))) {
            throw new \InvalidArgumentException($universal_ID_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Add item to Universal_ID_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Universal_IdentifierObjectType $item
     * @return \StructType\Worker_Request_CriteriaType
     */
    public function addToUniversal_ID_Reference(\StructType\Universal_IdentifierObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Universal_IdentifierObjectType) {
            throw new \InvalidArgumentException(sprintf('The Universal_ID_Reference property can only contain items of type \StructType\Universal_IdentifierObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Universal_ID_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Request_CriteriaType
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
