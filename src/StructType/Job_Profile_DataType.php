<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing all Job Profile Data.
 * @subpackage Structs
 */
class Job_Profile_DataType extends AbstractStructBase
{
    /**
     * The Job_Code
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a Job Profile. Also known as Job Profile ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Code;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: On a Put this is the date the change to the Job Profile will take effect. Will default to today if not submitted.On a Get this is the As of Effective Date specified in the Response Filter or today's date if no request criteria is
     * specified.During implementation, we recommend using a date of 01-01-1900 for the initial entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Job_Profile_Basic_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Basic_DataType
     */
    public $Job_Profile_Basic_Data;
    /**
     * The Job_Classification_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Job_Classification_DataType[]
     */
    public $Job_Classification_Data;
    /**
     * The Job_Profile_Pay_Rate_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Pay_Rate_DataType[]
     */
    public $Job_Profile_Pay_Rate_Data;
    /**
     * The Job_Profile_Exempt_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Exempt_DataType[]
     */
    public $Job_Profile_Exempt_Data;
    /**
     * The Workers_Compensation_Code_Replacement_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing Worker's Compensation Code data for a Job Profile. This element does a complete replacement of data based on what is submitted. All Worker's Compensation Codes must be included for an update (unless none will be
     * touched).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_Replacement_DataType[]
     */
    public $Workers_Compensation_Code_Replacement_Data;
    /**
     * The Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public $Qualification_Replacement_Data;
    /**
     * The Integration_Field_Override_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Document_Field_Result_DataType[]
     */
    public $Integration_Field_Override_Data;
    /**
     * The Job_Profile_Compensation_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Compensation_DataType
     */
    public $Job_Profile_Compensation_Data;
    /**
     * The Unions_Data
     * Meta information extracted from the WSDL
     * - documentation: Container For Union Membership Data
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Union_Membership_DataType
     */
    public $Unions_Data;
    /**
     * The Work_Study_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for Work-Study Data.
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Work_Study_DataType
     */
    public $Work_Study_Data;
    /**
     * Constructor method for Job_Profile_DataType
     * @uses Job_Profile_DataType::setJob_Code()
     * @uses Job_Profile_DataType::setEffective_Date()
     * @uses Job_Profile_DataType::setJob_Profile_Basic_Data()
     * @uses Job_Profile_DataType::setJob_Classification_Data()
     * @uses Job_Profile_DataType::setJob_Profile_Pay_Rate_Data()
     * @uses Job_Profile_DataType::setJob_Profile_Exempt_Data()
     * @uses Job_Profile_DataType::setWorkers_Compensation_Code_Replacement_Data()
     * @uses Job_Profile_DataType::setQualification_Replacement_Data()
     * @uses Job_Profile_DataType::setIntegration_Field_Override_Data()
     * @uses Job_Profile_DataType::setJob_Profile_Compensation_Data()
     * @uses Job_Profile_DataType::setUnions_Data()
     * @uses Job_Profile_DataType::setWork_Study_Data()
     * @param string $job_Code
     * @param string $effective_Date
     * @param \StructType\Job_Profile_Basic_DataType $job_Profile_Basic_Data
     * @param \StructType\Job_Profile_Job_Classification_DataType[] $job_Classification_Data
     * @param \StructType\Job_Profile_Pay_Rate_DataType[] $job_Profile_Pay_Rate_Data
     * @param \StructType\Job_Profile_Exempt_DataType[] $job_Profile_Exempt_Data
     * @param \StructType\Workers_Compensation_Replacement_DataType[] $workers_Compensation_Code_Replacement_Data
     * @param \StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType $qualification_Replacement_Data
     * @param \StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     * @param \StructType\Job_Profile_Compensation_DataType $job_Profile_Compensation_Data
     * @param \StructType\Job_Profile_Union_Membership_DataType $unions_Data
     * @param \StructType\Job_Profile_Work_Study_DataType $work_Study_Data
     */
    public function __construct($job_Code = null, $effective_Date = null, \StructType\Job_Profile_Basic_DataType $job_Profile_Basic_Data = null, array $job_Classification_Data = array(), array $job_Profile_Pay_Rate_Data = array(), array $job_Profile_Exempt_Data = array(), array $workers_Compensation_Code_Replacement_Data = array(), \StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType $qualification_Replacement_Data = null, array $integration_Field_Override_Data = array(), \StructType\Job_Profile_Compensation_DataType $job_Profile_Compensation_Data = null, \StructType\Job_Profile_Union_Membership_DataType $unions_Data = null, \StructType\Job_Profile_Work_Study_DataType $work_Study_Data = null)
    {
        $this
            ->setJob_Code($job_Code)
            ->setEffective_Date($effective_Date)
            ->setJob_Profile_Basic_Data($job_Profile_Basic_Data)
            ->setJob_Classification_Data($job_Classification_Data)
            ->setJob_Profile_Pay_Rate_Data($job_Profile_Pay_Rate_Data)
            ->setJob_Profile_Exempt_Data($job_Profile_Exempt_Data)
            ->setWorkers_Compensation_Code_Replacement_Data($workers_Compensation_Code_Replacement_Data)
            ->setQualification_Replacement_Data($qualification_Replacement_Data)
            ->setIntegration_Field_Override_Data($integration_Field_Override_Data)
            ->setJob_Profile_Compensation_Data($job_Profile_Compensation_Data)
            ->setUnions_Data($unions_Data)
            ->setWork_Study_Data($work_Study_Data);
    }
    /**
     * Get Job_Code value
     * @return string|null
     */
    public function getJob_Code()
    {
        return $this->Job_Code;
    }
    /**
     * Set Job_Code value
     * @param string $job_Code
     * @return \StructType\Job_Profile_DataType
     */
    public function setJob_Code($job_Code = null)
    {
        // validation for constraint: string
        if (!is_null($job_Code) && !is_string($job_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Code, true), gettype($job_Code)), __LINE__);
        }
        $this->Job_Code = $job_Code;
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
     * @return \StructType\Job_Profile_DataType
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
     * Get Job_Profile_Basic_Data value
     * @return \StructType\Job_Profile_Basic_DataType|null
     */
    public function getJob_Profile_Basic_Data()
    {
        return $this->Job_Profile_Basic_Data;
    }
    /**
     * Set Job_Profile_Basic_Data value
     * @param \StructType\Job_Profile_Basic_DataType $job_Profile_Basic_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setJob_Profile_Basic_Data(\StructType\Job_Profile_Basic_DataType $job_Profile_Basic_Data = null)
    {
        $this->Job_Profile_Basic_Data = $job_Profile_Basic_Data;
        return $this;
    }
    /**
     * Get Job_Classification_Data value
     * @return \StructType\Job_Profile_Job_Classification_DataType[]|null
     */
    public function getJob_Classification_Data()
    {
        return $this->Job_Classification_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_DataForArrayConstraintsFromSetJob_Classification_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_DataTypeJob_Classification_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_DataTypeJob_Classification_DataItem instanceof \StructType\Job_Profile_Job_Classification_DataType) {
                $invalidValues[] = is_object($job_Profile_DataTypeJob_Classification_DataItem) ? get_class($job_Profile_DataTypeJob_Classification_DataItem) : sprintf('%s(%s)', gettype($job_Profile_DataTypeJob_Classification_DataItem), var_export($job_Profile_DataTypeJob_Classification_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Data property can only contain items of type \StructType\Job_Profile_Job_Classification_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Job_Classification_DataType[] $job_Classification_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setJob_Classification_Data(array $job_Classification_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_DataArrayErrorMessage = self::validateJob_Classification_DataForArrayConstraintsFromSetJob_Classification_Data($job_Classification_Data))) {
            throw new \InvalidArgumentException($job_Classification_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Data = $job_Classification_Data;
        return $this;
    }
    /**
     * Add item to Job_Classification_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Job_Classification_DataType $item
     * @return \StructType\Job_Profile_DataType
     */
    public function addToJob_Classification_Data(\StructType\Job_Profile_Job_Classification_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Profile_Job_Classification_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Data property can only contain items of type \StructType\Job_Profile_Job_Classification_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Data[] = $item;
        return $this;
    }
    /**
     * Get Job_Profile_Pay_Rate_Data value
     * @return \StructType\Job_Profile_Pay_Rate_DataType[]|null
     */
    public function getJob_Profile_Pay_Rate_Data()
    {
        return $this->Job_Profile_Pay_Rate_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Pay_Rate_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Pay_Rate_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_Pay_Rate_DataForArrayConstraintsFromSetJob_Profile_Pay_Rate_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_DataTypeJob_Profile_Pay_Rate_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_DataTypeJob_Profile_Pay_Rate_DataItem instanceof \StructType\Job_Profile_Pay_Rate_DataType) {
                $invalidValues[] = is_object($job_Profile_DataTypeJob_Profile_Pay_Rate_DataItem) ? get_class($job_Profile_DataTypeJob_Profile_Pay_Rate_DataItem) : sprintf('%s(%s)', gettype($job_Profile_DataTypeJob_Profile_Pay_Rate_DataItem), var_export($job_Profile_DataTypeJob_Profile_Pay_Rate_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Pay_Rate_Data property can only contain items of type \StructType\Job_Profile_Pay_Rate_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Pay_Rate_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Pay_Rate_DataType[] $job_Profile_Pay_Rate_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setJob_Profile_Pay_Rate_Data(array $job_Profile_Pay_Rate_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_Pay_Rate_DataArrayErrorMessage = self::validateJob_Profile_Pay_Rate_DataForArrayConstraintsFromSetJob_Profile_Pay_Rate_Data($job_Profile_Pay_Rate_Data))) {
            throw new \InvalidArgumentException($job_Profile_Pay_Rate_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Pay_Rate_Data = $job_Profile_Pay_Rate_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Pay_Rate_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Pay_Rate_DataType $item
     * @return \StructType\Job_Profile_DataType
     */
    public function addToJob_Profile_Pay_Rate_Data(\StructType\Job_Profile_Pay_Rate_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Profile_Pay_Rate_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Pay_Rate_Data property can only contain items of type \StructType\Job_Profile_Pay_Rate_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Pay_Rate_Data[] = $item;
        return $this;
    }
    /**
     * Get Job_Profile_Exempt_Data value
     * @return \StructType\Job_Profile_Exempt_DataType[]|null
     */
    public function getJob_Profile_Exempt_Data()
    {
        return $this->Job_Profile_Exempt_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Exempt_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Exempt_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_Exempt_DataForArrayConstraintsFromSetJob_Profile_Exempt_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_DataTypeJob_Profile_Exempt_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_DataTypeJob_Profile_Exempt_DataItem instanceof \StructType\Job_Profile_Exempt_DataType) {
                $invalidValues[] = is_object($job_Profile_DataTypeJob_Profile_Exempt_DataItem) ? get_class($job_Profile_DataTypeJob_Profile_Exempt_DataItem) : sprintf('%s(%s)', gettype($job_Profile_DataTypeJob_Profile_Exempt_DataItem), var_export($job_Profile_DataTypeJob_Profile_Exempt_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Exempt_Data property can only contain items of type \StructType\Job_Profile_Exempt_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Exempt_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Exempt_DataType[] $job_Profile_Exempt_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setJob_Profile_Exempt_Data(array $job_Profile_Exempt_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_Exempt_DataArrayErrorMessage = self::validateJob_Profile_Exempt_DataForArrayConstraintsFromSetJob_Profile_Exempt_Data($job_Profile_Exempt_Data))) {
            throw new \InvalidArgumentException($job_Profile_Exempt_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Exempt_Data = $job_Profile_Exempt_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Exempt_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Exempt_DataType $item
     * @return \StructType\Job_Profile_DataType
     */
    public function addToJob_Profile_Exempt_Data(\StructType\Job_Profile_Exempt_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Profile_Exempt_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Exempt_Data property can only contain items of type \StructType\Job_Profile_Exempt_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Exempt_Data[] = $item;
        return $this;
    }
    /**
     * Get Workers_Compensation_Code_Replacement_Data value
     * @return \StructType\Workers_Compensation_Replacement_DataType[]|null
     */
    public function getWorkers_Compensation_Code_Replacement_Data()
    {
        return $this->Workers_Compensation_Code_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkers_Compensation_Code_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkers_Compensation_Code_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkers_Compensation_Code_Replacement_DataForArrayConstraintsFromSetWorkers_Compensation_Code_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_DataTypeWorkers_Compensation_Code_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_DataTypeWorkers_Compensation_Code_Replacement_DataItem instanceof \StructType\Workers_Compensation_Replacement_DataType) {
                $invalidValues[] = is_object($job_Profile_DataTypeWorkers_Compensation_Code_Replacement_DataItem) ? get_class($job_Profile_DataTypeWorkers_Compensation_Code_Replacement_DataItem) : sprintf('%s(%s)', gettype($job_Profile_DataTypeWorkers_Compensation_Code_Replacement_DataItem), var_export($job_Profile_DataTypeWorkers_Compensation_Code_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workers_Compensation_Code_Replacement_Data property can only contain items of type \StructType\Workers_Compensation_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workers_Compensation_Code_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_Replacement_DataType[] $workers_Compensation_Code_Replacement_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setWorkers_Compensation_Code_Replacement_Data(array $workers_Compensation_Code_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workers_Compensation_Code_Replacement_DataArrayErrorMessage = self::validateWorkers_Compensation_Code_Replacement_DataForArrayConstraintsFromSetWorkers_Compensation_Code_Replacement_Data($workers_Compensation_Code_Replacement_Data))) {
            throw new \InvalidArgumentException($workers_Compensation_Code_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Workers_Compensation_Code_Replacement_Data = $workers_Compensation_Code_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Workers_Compensation_Code_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workers_Compensation_Replacement_DataType $item
     * @return \StructType\Job_Profile_DataType
     */
    public function addToWorkers_Compensation_Code_Replacement_Data(\StructType\Workers_Compensation_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workers_Compensation_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Workers_Compensation_Code_Replacement_Data property can only contain items of type \StructType\Workers_Compensation_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workers_Compensation_Code_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Get Qualification_Replacement_Data value
     * @return \StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType|null
     */
    public function getQualification_Replacement_Data()
    {
        return $this->Qualification_Replacement_Data;
    }
    /**
     * Set Qualification_Replacement_Data value
     * @param \StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType $qualification_Replacement_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setQualification_Replacement_Data(\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType $qualification_Replacement_Data = null)
    {
        $this->Qualification_Replacement_Data = $qualification_Replacement_Data;
        return $this;
    }
    /**
     * Get Integration_Field_Override_Data value
     * @return \StructType\Document_Field_Result_DataType[]|null
     */
    public function getIntegration_Field_Override_Data()
    {
        return $this->Integration_Field_Override_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setIntegration_Field_Override_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIntegration_Field_Override_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntegration_Field_Override_DataForArrayConstraintsFromSetIntegration_Field_Override_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_DataTypeIntegration_Field_Override_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_DataTypeIntegration_Field_Override_DataItem instanceof \StructType\Document_Field_Result_DataType) {
                $invalidValues[] = is_object($job_Profile_DataTypeIntegration_Field_Override_DataItem) ? get_class($job_Profile_DataTypeIntegration_Field_Override_DataItem) : sprintf('%s(%s)', gettype($job_Profile_DataTypeIntegration_Field_Override_DataItem), var_export($job_Profile_DataTypeIntegration_Field_Override_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Integration_Field_Override_Data property can only contain items of type \StructType\Document_Field_Result_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setIntegration_Field_Override_Data(array $integration_Field_Override_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($integration_Field_Override_DataArrayErrorMessage = self::validateIntegration_Field_Override_DataForArrayConstraintsFromSetIntegration_Field_Override_Data($integration_Field_Override_Data))) {
            throw new \InvalidArgumentException($integration_Field_Override_DataArrayErrorMessage, __LINE__);
        }
        $this->Integration_Field_Override_Data = $integration_Field_Override_Data;
        return $this;
    }
    /**
     * Add item to Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Document_Field_Result_DataType $item
     * @return \StructType\Job_Profile_DataType
     */
    public function addToIntegration_Field_Override_Data(\StructType\Document_Field_Result_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Document_Field_Result_DataType) {
            throw new \InvalidArgumentException(sprintf('The Integration_Field_Override_Data property can only contain items of type \StructType\Document_Field_Result_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Integration_Field_Override_Data[] = $item;
        return $this;
    }
    /**
     * Get Job_Profile_Compensation_Data value
     * @return \StructType\Job_Profile_Compensation_DataType|null
     */
    public function getJob_Profile_Compensation_Data()
    {
        return $this->Job_Profile_Compensation_Data;
    }
    /**
     * Set Job_Profile_Compensation_Data value
     * @param \StructType\Job_Profile_Compensation_DataType $job_Profile_Compensation_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setJob_Profile_Compensation_Data(\StructType\Job_Profile_Compensation_DataType $job_Profile_Compensation_Data = null)
    {
        $this->Job_Profile_Compensation_Data = $job_Profile_Compensation_Data;
        return $this;
    }
    /**
     * Get Unions_Data value
     * @return \StructType\Job_Profile_Union_Membership_DataType|null
     */
    public function getUnions_Data()
    {
        return $this->Unions_Data;
    }
    /**
     * Set Unions_Data value
     * @param \StructType\Job_Profile_Union_Membership_DataType $unions_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setUnions_Data(\StructType\Job_Profile_Union_Membership_DataType $unions_Data = null)
    {
        $this->Unions_Data = $unions_Data;
        return $this;
    }
    /**
     * Get Work_Study_Data value
     * @return \StructType\Job_Profile_Work_Study_DataType|null
     */
    public function getWork_Study_Data()
    {
        return $this->{'Work-Study_Data'};
    }
    /**
     * Set Work_Study_Data value
     * @param \StructType\Job_Profile_Work_Study_DataType $work_Study_Data
     * @return \StructType\Job_Profile_DataType
     */
    public function setWork_Study_Data(\StructType\Job_Profile_Work_Study_DataType $work_Study_Data = null)
    {
        $this->Work_Study_Data = $this->{'Work-Study_Data'} = $work_Study_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Profile_DataType
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
