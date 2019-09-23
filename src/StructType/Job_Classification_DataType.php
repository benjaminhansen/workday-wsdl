<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job Classification Data Element
 * @subpackage Structs
 */
class Job_Classification_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a Job Classification. On a new entry, this will become the Reference ID. When updating an existing Job Classification, you can enter a new value here to change the Reference ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Job_Classification_ID
     * Meta information extracted from the WSDL
     * - documentation: A text value for the Job Classification ID. This is usually defined by the outside agency that sets the Job Classification in the group. It does not need to be unique.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Classification_ID;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Job Classification Description
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Job_Classification_Mapping_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Workday Owned metadata value the job classification maps to
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Job_Classification_Mapping_ID_Reference;
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
     * Constructor method for Job_Classification_DataType
     * @uses Job_Classification_DataType::setID()
     * @uses Job_Classification_DataType::setJob_Classification_ID()
     * @uses Job_Classification_DataType::setDescription()
     * @uses Job_Classification_DataType::setJob_Classification_Mapping_ID_Reference()
     * @uses Job_Classification_DataType::setInactive()
     * @param string $iD
     * @param string $job_Classification_ID
     * @param string $description
     * @param \StructType\Unique_IdentifierObjectType $job_Classification_Mapping_ID_Reference
     * @param bool $inactive
     */
    public function __construct($iD = null, $job_Classification_ID = null, $description = null, \StructType\Unique_IdentifierObjectType $job_Classification_Mapping_ID_Reference = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setJob_Classification_ID($job_Classification_ID)
            ->setDescription($description)
            ->setJob_Classification_Mapping_ID_Reference($job_Classification_Mapping_ID_Reference)
            ->setInactive($inactive);
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
     * @return \StructType\Job_Classification_DataType
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
     * Get Job_Classification_ID value
     * @return string|null
     */
    public function getJob_Classification_ID()
    {
        return $this->Job_Classification_ID;
    }
    /**
     * Set Job_Classification_ID value
     * @param string $job_Classification_ID
     * @return \StructType\Job_Classification_DataType
     */
    public function setJob_Classification_ID($job_Classification_ID = null)
    {
        // validation for constraint: string
        if (!is_null($job_Classification_ID) && !is_string($job_Classification_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Classification_ID, true), gettype($job_Classification_ID)), __LINE__);
        }
        $this->Job_Classification_ID = $job_Classification_ID;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Job_Classification_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Job_Classification_Mapping_ID_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getJob_Classification_Mapping_ID_Reference()
    {
        return $this->Job_Classification_Mapping_ID_Reference;
    }
    /**
     * Set Job_Classification_Mapping_ID_Reference value
     * @param \StructType\Unique_IdentifierObjectType $job_Classification_Mapping_ID_Reference
     * @return \StructType\Job_Classification_DataType
     */
    public function setJob_Classification_Mapping_ID_Reference(\StructType\Unique_IdentifierObjectType $job_Classification_Mapping_ID_Reference = null)
    {
        $this->Job_Classification_Mapping_ID_Reference = $job_Classification_Mapping_ID_Reference;
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
     * @return \StructType\Job_Classification_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_DataType
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
