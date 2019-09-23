<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Job Family data.
 * @subpackage Structs
 */
class Job_Family_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the Job Family data (Job_Family_ID).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of Job Family.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Job Family Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Summary
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Job Family Summary.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Summary;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating if a Job Family/Job Family Group is Inactive or not. Inactive Job Families/Groups will not appear in prompts.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Job_Profile_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing the Job Profile reference for a Job Family.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Profile_for_Job_Family_DataType[]
     */
    public $Job_Profile_Data;
    /**
     * The Integration_Field_Override_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Document_Field_Result_DataType[]
     */
    public $Integration_Field_Override_Data;
    /**
     * Constructor method for Job_Family_DataType
     * @uses Job_Family_DataType::setID()
     * @uses Job_Family_DataType::setEffective_Date()
     * @uses Job_Family_DataType::setName()
     * @uses Job_Family_DataType::setSummary()
     * @uses Job_Family_DataType::setInactive()
     * @uses Job_Family_DataType::setJob_Profile_Data()
     * @uses Job_Family_DataType::setIntegration_Field_Override_Data()
     * @param string $iD
     * @param string $effective_Date
     * @param string $name
     * @param string $summary
     * @param bool $inactive
     * @param \StructType\Job_Profile_for_Job_Family_DataType[] $job_Profile_Data
     * @param \StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     */
    public function __construct($iD = null, $effective_Date = null, $name = null, $summary = null, $inactive = null, array $job_Profile_Data = array(), array $integration_Field_Override_Data = array())
    {
        $this
            ->setID($iD)
            ->setEffective_Date($effective_Date)
            ->setName($name)
            ->setSummary($summary)
            ->setInactive($inactive)
            ->setJob_Profile_Data($job_Profile_Data)
            ->setIntegration_Field_Override_Data($integration_Field_Override_Data);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Job_Family_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
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
     * @return \StructType\Job_Family_DataType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\Job_Family_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Summary value
     * @return string|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param string $summary
     * @return \StructType\Job_Family_DataType
     */
    public function setSummary($summary = null)
    {
        // validation for constraint: string
        if (!is_null($summary) && !is_string($summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($summary, true), gettype($summary)), __LINE__);
        }
        $this->Summary = $summary;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Job_Family_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Job_Profile_Data value
     * @return \StructType\Job_Profile_for_Job_Family_DataType[]|null
     */
    public function getJob_Profile_Data()
    {
        return $this->Job_Profile_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_DataForArrayConstraintsFromSetJob_Profile_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Family_DataTypeJob_Profile_DataItem) {
            // validation for constraint: itemType
            if (!$job_Family_DataTypeJob_Profile_DataItem instanceof \StructType\Job_Profile_for_Job_Family_DataType) {
                $invalidValues[] = is_object($job_Family_DataTypeJob_Profile_DataItem) ? get_class($job_Family_DataTypeJob_Profile_DataItem) : sprintf('%s(%s)', gettype($job_Family_DataTypeJob_Profile_DataItem), var_export($job_Family_DataTypeJob_Profile_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Data property can only contain items of type \StructType\Job_Profile_for_Job_Family_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_for_Job_Family_DataType[] $job_Profile_Data
     * @return \StructType\Job_Family_DataType
     */
    public function setJob_Profile_Data(array $job_Profile_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_DataArrayErrorMessage = self::validateJob_Profile_DataForArrayConstraintsFromSetJob_Profile_Data($job_Profile_Data))) {
            throw new \InvalidArgumentException($job_Profile_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Data = $job_Profile_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_for_Job_Family_DataType $item
     * @return \StructType\Job_Family_DataType
     */
    public function addToJob_Profile_Data(\StructType\Job_Profile_for_Job_Family_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Profile_for_Job_Family_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Data property can only contain items of type \StructType\Job_Profile_for_Job_Family_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Data[] = $item;
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
        foreach ($values as $job_Family_DataTypeIntegration_Field_Override_DataItem) {
            // validation for constraint: itemType
            if (!$job_Family_DataTypeIntegration_Field_Override_DataItem instanceof \StructType\Document_Field_Result_DataType) {
                $invalidValues[] = is_object($job_Family_DataTypeIntegration_Field_Override_DataItem) ? get_class($job_Family_DataTypeIntegration_Field_Override_DataItem) : sprintf('%s(%s)', gettype($job_Family_DataTypeIntegration_Field_Override_DataItem), var_export($job_Family_DataTypeIntegration_Field_Override_DataItem, true));
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
     * @return \StructType\Job_Family_DataType
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
     * @return \StructType\Job_Family_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Family_DataType
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
