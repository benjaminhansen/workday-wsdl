<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Group_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job Classification Group Data Element
 * @subpackage Structs
 */
class Job_Classification_Group_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Job Classification Group ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date. A new effective-dated organization name is automatically created if any attributes used for organization name are different as of specified effective date which include: Organization Name, Organization Code, and
     * Include 'xx' in Name booleans.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Job_Classification_Group_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Job Classification Group.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Classification_Group_Name;
    /**
     * The Global_Setup_Data_Mapping_Reference
     * Meta information extracted from the WSDL
     * - documentation: Metadata value the job classification group maps to.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Global_Setup_Data_MappingObjectType
     */
    public $Global_Setup_Data_Mapping_Reference;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location Reference. Reference to a Country or Country Region.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_ContextObjectType
     */
    public $Location_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive Flag.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Job_Classification
     * Meta information extracted from the WSDL
     * - documentation: Job Classification Element
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_ClassificationType[]
     */
    public $Job_Classification;
    /**
     * Constructor method for Job_Classification_Group_DataType
     * @uses Job_Classification_Group_DataType::setID()
     * @uses Job_Classification_Group_DataType::setEffective_Date()
     * @uses Job_Classification_Group_DataType::setJob_Classification_Group_Name()
     * @uses Job_Classification_Group_DataType::setGlobal_Setup_Data_Mapping_Reference()
     * @uses Job_Classification_Group_DataType::setLocation_Reference()
     * @uses Job_Classification_Group_DataType::setInactive()
     * @uses Job_Classification_Group_DataType::setJob_Classification()
     * @param string $iD
     * @param string $effective_Date
     * @param string $job_Classification_Group_Name
     * @param \WorkdayWsdl\\StructType\Global_Setup_Data_MappingObjectType $global_Setup_Data_Mapping_Reference
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType $location_Reference
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\Job_ClassificationType[] $job_Classification
     */
    public function __construct($iD = null, $effective_Date = null, $job_Classification_Group_Name = null, \WorkdayWsdl\\StructType\Global_Setup_Data_MappingObjectType $global_Setup_Data_Mapping_Reference = null, \WorkdayWsdl\\StructType\Location_ContextObjectType $location_Reference = null, $inactive = null, array $job_Classification = array())
    {
        $this
            ->setID($iD)
            ->setEffective_Date($effective_Date)
            ->setJob_Classification_Group_Name($job_Classification_Group_Name)
            ->setGlobal_Setup_Data_Mapping_Reference($global_Setup_Data_Mapping_Reference)
            ->setLocation_Reference($location_Reference)
            ->setInactive($inactive)
            ->setJob_Classification($job_Classification);
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
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
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
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
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
     * Get Job_Classification_Group_Name value
     * @return string|null
     */
    public function getJob_Classification_Group_Name()
    {
        return $this->Job_Classification_Group_Name;
    }
    /**
     * Set Job_Classification_Group_Name value
     * @param string $job_Classification_Group_Name
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
     */
    public function setJob_Classification_Group_Name($job_Classification_Group_Name = null)
    {
        // validation for constraint: string
        if (!is_null($job_Classification_Group_Name) && !is_string($job_Classification_Group_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Classification_Group_Name, true), gettype($job_Classification_Group_Name)), __LINE__);
        }
        $this->Job_Classification_Group_Name = $job_Classification_Group_Name;
        return $this;
    }
    /**
     * Get Global_Setup_Data_Mapping_Reference value
     * @return \WorkdayWsdl\\StructType\Global_Setup_Data_MappingObjectType|null
     */
    public function getGlobal_Setup_Data_Mapping_Reference()
    {
        return $this->Global_Setup_Data_Mapping_Reference;
    }
    /**
     * Set Global_Setup_Data_Mapping_Reference value
     * @param \WorkdayWsdl\\StructType\Global_Setup_Data_MappingObjectType $global_Setup_Data_Mapping_Reference
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
     */
    public function setGlobal_Setup_Data_Mapping_Reference(\WorkdayWsdl\\StructType\Global_Setup_Data_MappingObjectType $global_Setup_Data_Mapping_Reference = null)
    {
        $this->Global_Setup_Data_Mapping_Reference = $global_Setup_Data_Mapping_Reference;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \WorkdayWsdl\\StructType\Location_ContextObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType $location_Reference
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
     */
    public function setLocation_Reference(\WorkdayWsdl\\StructType\Location_ContextObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
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
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
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
     * Get Job_Classification value
     * @return \WorkdayWsdl\\StructType\Job_ClassificationType[]|null
     */
    public function getJob_Classification()
    {
        return $this->Job_Classification;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_ClassificationForArrayConstraintsFromSetJob_Classification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Classification_Group_DataTypeJob_ClassificationItem) {
            // validation for constraint: itemType
            if (!$job_Classification_Group_DataTypeJob_ClassificationItem instanceof \WorkdayWsdl\\StructType\Job_ClassificationType) {
                $invalidValues[] = is_object($job_Classification_Group_DataTypeJob_ClassificationItem) ? get_class($job_Classification_Group_DataTypeJob_ClassificationItem) : sprintf('%s(%s)', gettype($job_Classification_Group_DataTypeJob_ClassificationItem), var_export($job_Classification_Group_DataTypeJob_ClassificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification property can only contain items of type \WorkdayWsdl\\StructType\Job_ClassificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_ClassificationType[] $job_Classification
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
     */
    public function setJob_Classification(array $job_Classification = array())
    {
        // validation for constraint: array
        if ('' !== ($job_ClassificationArrayErrorMessage = self::validateJob_ClassificationForArrayConstraintsFromSetJob_Classification($job_Classification))) {
            throw new \InvalidArgumentException($job_ClassificationArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification = $job_Classification;
        return $this;
    }
    /**
     * Add item to Job_Classification value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_ClassificationType $item
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
     */
    public function addToJob_Classification(\WorkdayWsdl\\StructType\Job_ClassificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_ClassificationType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification property can only contain items of type \WorkdayWsdl\\StructType\Job_ClassificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
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
