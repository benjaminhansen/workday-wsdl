<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request Criteria element to limit the Job Profiles returned based on the specific criteria. Job Profiles that are returned must meet all of the criteria specified.
 * @subpackage Structs
 */
class Job_Profile_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Transaction_Log_Criteria_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Transaction_Log_CriteriaType[]
     */
    public $Transaction_Log_Criteria_Data;
    /**
     * The Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The identifier of an existing Event.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Event_Reference;
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a Job Family or a Job Family Group. If a Job Family Group is submitted, any Job Profile that has a Job Family that is part of that Job Family Group will be returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Family_BaseObjectType[]
     */
    public $Job_Family_Reference;
    /**
     * The Management_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the management level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Management_LevelObjectType[]
     */
    public $Management_Level_Reference;
    /**
     * The Job_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a job level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_LevelObjectType[]
     */
    public $Job_Level_Reference;
    /**
     * The Job_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_CategoryObjectType[]
     */
    public $Job_Category_Reference;
    /**
     * The Company_Insider_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Company Insider Type ID. This is the unique identifier for a company insider type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Company_Insider_TypeObjectType[]
     */
    public $Company_Insider_Type_Reference;
    /**
     * The Job_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job classification.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_ClassificationObjectType[]
     */
    public $Job_Classification_Reference;
    /**
     * The Job_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a job classification group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Classification_GroupObjectType[]
     */
    public $Job_Classification_Group_Reference;
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workers' Compensation Code Reference ID. This is the unique identifier for a Workers' Compensation Code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_CodeObjectType[]
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * The Work_Hours_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier of a work hours profile.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Hours_ProfileObjectType[]
     */
    public $Work_Hours_Profile_Reference;
    /**
     * The Field_And_Parameter_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Field_And_Parameter_Criteria_DataType
     */
    public $Field_And_Parameter_Criteria_Data;
    /**
     * Constructor method for Job_Profile_Request_CriteriaType
     * @uses Job_Profile_Request_CriteriaType::setTransaction_Log_Criteria_Data()
     * @uses Job_Profile_Request_CriteriaType::setEvent_Reference()
     * @uses Job_Profile_Request_CriteriaType::setJob_Family_Reference()
     * @uses Job_Profile_Request_CriteriaType::setManagement_Level_Reference()
     * @uses Job_Profile_Request_CriteriaType::setJob_Level_Reference()
     * @uses Job_Profile_Request_CriteriaType::setJob_Category_Reference()
     * @uses Job_Profile_Request_CriteriaType::setCompany_Insider_Type_Reference()
     * @uses Job_Profile_Request_CriteriaType::setJob_Classification_Reference()
     * @uses Job_Profile_Request_CriteriaType::setJob_Classification_Group_Reference()
     * @uses Job_Profile_Request_CriteriaType::setWorkers_Compensation_Code_Reference()
     * @uses Job_Profile_Request_CriteriaType::setWork_Hours_Profile_Reference()
     * @uses Job_Profile_Request_CriteriaType::setField_And_Parameter_Criteria_Data()
     * @param \StructType\Transaction_Log_CriteriaType[] $transaction_Log_Criteria_Data
     * @param \StructType\Unique_IdentifierObjectType $event_Reference
     * @param \StructType\Job_Family_BaseObjectType[] $job_Family_Reference
     * @param \StructType\Management_LevelObjectType[] $management_Level_Reference
     * @param \StructType\Job_LevelObjectType[] $job_Level_Reference
     * @param \StructType\Job_CategoryObjectType[] $job_Category_Reference
     * @param \StructType\Company_Insider_TypeObjectType[] $company_Insider_Type_Reference
     * @param \StructType\Job_ClassificationObjectType[] $job_Classification_Reference
     * @param \StructType\Job_Classification_GroupObjectType[] $job_Classification_Group_Reference
     * @param \StructType\Workers_Compensation_CodeObjectType[] $workers_Compensation_Code_Reference
     * @param \StructType\Work_Hours_ProfileObjectType[] $work_Hours_Profile_Reference
     * @param \StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     */
    public function __construct(array $transaction_Log_Criteria_Data = array(), \StructType\Unique_IdentifierObjectType $event_Reference = null, array $job_Family_Reference = array(), array $management_Level_Reference = array(), array $job_Level_Reference = array(), array $job_Category_Reference = array(), array $company_Insider_Type_Reference = array(), array $job_Classification_Reference = array(), array $job_Classification_Group_Reference = array(), array $workers_Compensation_Code_Reference = array(), array $work_Hours_Profile_Reference = array(), \StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null)
    {
        $this
            ->setTransaction_Log_Criteria_Data($transaction_Log_Criteria_Data)
            ->setEvent_Reference($event_Reference)
            ->setJob_Family_Reference($job_Family_Reference)
            ->setManagement_Level_Reference($management_Level_Reference)
            ->setJob_Level_Reference($job_Level_Reference)
            ->setJob_Category_Reference($job_Category_Reference)
            ->setCompany_Insider_Type_Reference($company_Insider_Type_Reference)
            ->setJob_Classification_Reference($job_Classification_Reference)
            ->setJob_Classification_Group_Reference($job_Classification_Group_Reference)
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference)
            ->setWork_Hours_Profile_Reference($work_Hours_Profile_Reference)
            ->setField_And_Parameter_Criteria_Data($field_And_Parameter_Criteria_Data);
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
        foreach ($values as $job_Profile_Request_CriteriaTypeTransaction_Log_Criteria_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeTransaction_Log_Criteria_DataItem instanceof \StructType\Transaction_Log_CriteriaType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeTransaction_Log_Criteria_DataItem) ? get_class($job_Profile_Request_CriteriaTypeTransaction_Log_Criteria_DataItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeTransaction_Log_Criteria_DataItem), var_export($job_Profile_Request_CriteriaTypeTransaction_Log_Criteria_DataItem, true));
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
     * @return \StructType\Job_Profile_Request_CriteriaType
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
     * @return \StructType\Job_Profile_Request_CriteriaType
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
     * Get Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getEvent_Reference()
    {
        return $this->Event_Reference;
    }
    /**
     * Set Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $event_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setEvent_Reference(\StructType\Unique_IdentifierObjectType $event_Reference = null)
    {
        $this->Event_Reference = $event_Reference;
        return $this;
    }
    /**
     * Get Job_Family_Reference value
     * @return \StructType\Job_Family_BaseObjectType[]|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Family_ReferenceForArrayConstraintsFromSetJob_Family_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeJob_Family_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeJob_Family_ReferenceItem instanceof \StructType\Job_Family_BaseObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeJob_Family_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeJob_Family_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeJob_Family_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeJob_Family_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family_Reference property can only contain items of type \StructType\Job_Family_BaseObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Family_BaseObjectType[] $job_Family_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setJob_Family_Reference(array $job_Family_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Family_ReferenceArrayErrorMessage = self::validateJob_Family_ReferenceForArrayConstraintsFromSetJob_Family_Reference($job_Family_Reference))) {
            throw new \InvalidArgumentException($job_Family_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Family_Reference = $job_Family_Reference;
        return $this;
    }
    /**
     * Add item to Job_Family_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Family_BaseObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToJob_Family_Reference(\StructType\Job_Family_BaseObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Family_BaseObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family_Reference property can only contain items of type \StructType\Job_Family_BaseObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family_Reference[] = $item;
        return $this;
    }
    /**
     * Get Management_Level_Reference value
     * @return \StructType\Management_LevelObjectType[]|null
     */
    public function getManagement_Level_Reference()
    {
        return $this->Management_Level_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setManagement_Level_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManagement_Level_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManagement_Level_ReferenceForArrayConstraintsFromSetManagement_Level_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeManagement_Level_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeManagement_Level_ReferenceItem instanceof \StructType\Management_LevelObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeManagement_Level_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeManagement_Level_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeManagement_Level_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeManagement_Level_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Management_Level_Reference property can only contain items of type \StructType\Management_LevelObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Management_Level_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Management_LevelObjectType[] $management_Level_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setManagement_Level_Reference(array $management_Level_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($management_Level_ReferenceArrayErrorMessage = self::validateManagement_Level_ReferenceForArrayConstraintsFromSetManagement_Level_Reference($management_Level_Reference))) {
            throw new \InvalidArgumentException($management_Level_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Management_Level_Reference = $management_Level_Reference;
        return $this;
    }
    /**
     * Add item to Management_Level_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Management_LevelObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToManagement_Level_Reference(\StructType\Management_LevelObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Management_LevelObjectType) {
            throw new \InvalidArgumentException(sprintf('The Management_Level_Reference property can only contain items of type \StructType\Management_LevelObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Management_Level_Reference[] = $item;
        return $this;
    }
    /**
     * Get Job_Level_Reference value
     * @return \StructType\Job_LevelObjectType[]|null
     */
    public function getJob_Level_Reference()
    {
        return $this->Job_Level_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Level_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Level_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Level_ReferenceForArrayConstraintsFromSetJob_Level_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeJob_Level_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeJob_Level_ReferenceItem instanceof \StructType\Job_LevelObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeJob_Level_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeJob_Level_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeJob_Level_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeJob_Level_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Level_Reference property can only contain items of type \StructType\Job_LevelObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Level_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_LevelObjectType[] $job_Level_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setJob_Level_Reference(array $job_Level_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Level_ReferenceArrayErrorMessage = self::validateJob_Level_ReferenceForArrayConstraintsFromSetJob_Level_Reference($job_Level_Reference))) {
            throw new \InvalidArgumentException($job_Level_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Level_Reference = $job_Level_Reference;
        return $this;
    }
    /**
     * Add item to Job_Level_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_LevelObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToJob_Level_Reference(\StructType\Job_LevelObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_LevelObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Level_Reference property can only contain items of type \StructType\Job_LevelObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Level_Reference[] = $item;
        return $this;
    }
    /**
     * Get Job_Category_Reference value
     * @return \StructType\Job_CategoryObjectType[]|null
     */
    public function getJob_Category_Reference()
    {
        return $this->Job_Category_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Category_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Category_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Category_ReferenceForArrayConstraintsFromSetJob_Category_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeJob_Category_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeJob_Category_ReferenceItem instanceof \StructType\Job_CategoryObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeJob_Category_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeJob_Category_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeJob_Category_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeJob_Category_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Category_Reference property can only contain items of type \StructType\Job_CategoryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Category_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_CategoryObjectType[] $job_Category_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setJob_Category_Reference(array $job_Category_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Category_ReferenceArrayErrorMessage = self::validateJob_Category_ReferenceForArrayConstraintsFromSetJob_Category_Reference($job_Category_Reference))) {
            throw new \InvalidArgumentException($job_Category_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Category_Reference = $job_Category_Reference;
        return $this;
    }
    /**
     * Add item to Job_Category_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_CategoryObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToJob_Category_Reference(\StructType\Job_CategoryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_CategoryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Category_Reference property can only contain items of type \StructType\Job_CategoryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Category_Reference[] = $item;
        return $this;
    }
    /**
     * Get Company_Insider_Type_Reference value
     * @return \StructType\Company_Insider_TypeObjectType[]|null
     */
    public function getCompany_Insider_Type_Reference()
    {
        return $this->Company_Insider_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCompany_Insider_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompany_Insider_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompany_Insider_Type_ReferenceForArrayConstraintsFromSetCompany_Insider_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeCompany_Insider_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeCompany_Insider_Type_ReferenceItem instanceof \StructType\Company_Insider_TypeObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeCompany_Insider_Type_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeCompany_Insider_Type_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeCompany_Insider_Type_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeCompany_Insider_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Type_Reference property can only contain items of type \StructType\Company_Insider_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Company_Insider_TypeObjectType[] $company_Insider_Type_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setCompany_Insider_Type_Reference(array $company_Insider_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($company_Insider_Type_ReferenceArrayErrorMessage = self::validateCompany_Insider_Type_ReferenceForArrayConstraintsFromSetCompany_Insider_Type_Reference($company_Insider_Type_Reference))) {
            throw new \InvalidArgumentException($company_Insider_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Company_Insider_Type_Reference = $company_Insider_Type_Reference;
        return $this;
    }
    /**
     * Add item to Company_Insider_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Company_Insider_TypeObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToCompany_Insider_Type_Reference(\StructType\Company_Insider_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Company_Insider_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Type_Reference property can only contain items of type \StructType\Company_Insider_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Job_Classification_Reference value
     * @return \StructType\Job_ClassificationObjectType[]|null
     */
    public function getJob_Classification_Reference()
    {
        return $this->Job_Classification_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_ReferenceForArrayConstraintsFromSetJob_Classification_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeJob_Classification_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeJob_Classification_ReferenceItem instanceof \StructType\Job_ClassificationObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeJob_Classification_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeJob_Classification_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeJob_Classification_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeJob_Classification_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Reference property can only contain items of type \StructType\Job_ClassificationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_ClassificationObjectType[] $job_Classification_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setJob_Classification_Reference(array $job_Classification_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_ReferenceArrayErrorMessage = self::validateJob_Classification_ReferenceForArrayConstraintsFromSetJob_Classification_Reference($job_Classification_Reference))) {
            throw new \InvalidArgumentException($job_Classification_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Reference = $job_Classification_Reference;
        return $this;
    }
    /**
     * Add item to Job_Classification_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_ClassificationObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToJob_Classification_Reference(\StructType\Job_ClassificationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_ClassificationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Reference property can only contain items of type \StructType\Job_ClassificationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Reference[] = $item;
        return $this;
    }
    /**
     * Get Job_Classification_Group_Reference value
     * @return \StructType\Job_Classification_GroupObjectType[]|null
     */
    public function getJob_Classification_Group_Reference()
    {
        return $this->Job_Classification_Group_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_Group_ReferenceForArrayConstraintsFromSetJob_Classification_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeJob_Classification_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeJob_Classification_Group_ReferenceItem instanceof \StructType\Job_Classification_GroupObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeJob_Classification_Group_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeJob_Classification_Group_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeJob_Classification_Group_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeJob_Classification_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Group_Reference property can only contain items of type \StructType\Job_Classification_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_GroupObjectType[] $job_Classification_Group_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setJob_Classification_Group_Reference(array $job_Classification_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_Group_ReferenceArrayErrorMessage = self::validateJob_Classification_Group_ReferenceForArrayConstraintsFromSetJob_Classification_Group_Reference($job_Classification_Group_Reference))) {
            throw new \InvalidArgumentException($job_Classification_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Group_Reference = $job_Classification_Group_Reference;
        return $this;
    }
    /**
     * Add item to Job_Classification_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_GroupObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToJob_Classification_Group_Reference(\StructType\Job_Classification_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Classification_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Group_Reference property can only contain items of type \StructType\Job_Classification_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Group_Reference[] = $item;
        return $this;
    }
    /**
     * Get Workers_Compensation_Code_Reference value
     * @return \StructType\Workers_Compensation_CodeObjectType[]|null
     */
    public function getWorkers_Compensation_Code_Reference()
    {
        return $this->Workers_Compensation_Code_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkers_Compensation_Code_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkers_Compensation_Code_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkers_Compensation_Code_ReferenceForArrayConstraintsFromSetWorkers_Compensation_Code_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeWorkers_Compensation_Code_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeWorkers_Compensation_Code_ReferenceItem instanceof \StructType\Workers_Compensation_CodeObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeWorkers_Compensation_Code_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeWorkers_Compensation_Code_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeWorkers_Compensation_Code_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeWorkers_Compensation_Code_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workers_Compensation_Code_Reference property can only contain items of type \StructType\Workers_Compensation_CodeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workers_Compensation_Code_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_CodeObjectType[] $workers_Compensation_Code_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setWorkers_Compensation_Code_Reference(array $workers_Compensation_Code_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($workers_Compensation_Code_ReferenceArrayErrorMessage = self::validateWorkers_Compensation_Code_ReferenceForArrayConstraintsFromSetWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference))) {
            throw new \InvalidArgumentException($workers_Compensation_Code_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
        return $this;
    }
    /**
     * Add item to Workers_Compensation_Code_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_CodeObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToWorkers_Compensation_Code_Reference(\StructType\Workers_Compensation_CodeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workers_Compensation_CodeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Workers_Compensation_Code_Reference property can only contain items of type \StructType\Workers_Compensation_CodeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workers_Compensation_Code_Reference[] = $item;
        return $this;
    }
    /**
     * Get Work_Hours_Profile_Reference value
     * @return \StructType\Work_Hours_ProfileObjectType[]|null
     */
    public function getWork_Hours_Profile_Reference()
    {
        return $this->Work_Hours_Profile_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Hours_Profile_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Hours_Profile_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Hours_Profile_ReferenceForArrayConstraintsFromSetWork_Hours_Profile_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_CriteriaTypeWork_Hours_Profile_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_CriteriaTypeWork_Hours_Profile_ReferenceItem instanceof \StructType\Work_Hours_ProfileObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_CriteriaTypeWork_Hours_Profile_ReferenceItem) ? get_class($job_Profile_Request_CriteriaTypeWork_Hours_Profile_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_CriteriaTypeWork_Hours_Profile_ReferenceItem), var_export($job_Profile_Request_CriteriaTypeWork_Hours_Profile_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Hours_Profile_Reference property can only contain items of type \StructType\Work_Hours_ProfileObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Hours_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Hours_ProfileObjectType[] $work_Hours_Profile_Reference
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setWork_Hours_Profile_Reference(array $work_Hours_Profile_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Hours_Profile_ReferenceArrayErrorMessage = self::validateWork_Hours_Profile_ReferenceForArrayConstraintsFromSetWork_Hours_Profile_Reference($work_Hours_Profile_Reference))) {
            throw new \InvalidArgumentException($work_Hours_Profile_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Hours_Profile_Reference = $work_Hours_Profile_Reference;
        return $this;
    }
    /**
     * Add item to Work_Hours_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Hours_ProfileObjectType $item
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function addToWork_Hours_Profile_Reference(\StructType\Work_Hours_ProfileObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Hours_ProfileObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Hours_Profile_Reference property can only contain items of type \StructType\Work_Hours_ProfileObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Hours_Profile_Reference[] = $item;
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
     * @return \StructType\Job_Profile_Request_CriteriaType
     */
    public function setField_And_Parameter_Criteria_Data(\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null)
    {
        $this->Field_And_Parameter_Criteria_Data = $field_And_Parameter_Criteria_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Profile_Request_CriteriaType
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
