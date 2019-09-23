<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ethnicity_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the detailed information about an Ethnicity.
 * @subpackage Structs
 */
class Ethnicity_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID (Ethnicity_ID)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Ethnicity.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The code for the Ethnicity.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the Ethnicity.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country the ethnicity is for.
     * - minOccurs: 0
     * @var \StructType\Location_ContextObjectType
     */
    public $Location_Reference;
    /**
     * The Ethnicity_Mapping_Reference
     * Meta information extracted from the WSDL
     * - documentation: This is the Workday Owned Ethnicity mapping for this Ethnicity.
     * - minOccurs: 0
     * @var \StructType\Global_Setup_Data_MappingObjectType
     */
    public $Ethnicity_Mapping_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating that the ethnicity is no longer used
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Ethnicity_DataType
     * @uses Ethnicity_DataType::setID()
     * @uses Ethnicity_DataType::setName()
     * @uses Ethnicity_DataType::setCode()
     * @uses Ethnicity_DataType::setDescription()
     * @uses Ethnicity_DataType::setLocation_Reference()
     * @uses Ethnicity_DataType::setEthnicity_Mapping_Reference()
     * @uses Ethnicity_DataType::setInactive()
     * @param string $iD
     * @param string $name
     * @param string $code
     * @param string $description
     * @param \StructType\Location_ContextObjectType $location_Reference
     * @param \StructType\Global_Setup_Data_MappingObjectType $ethnicity_Mapping_Reference
     * @param bool $inactive
     */
    public function __construct($iD = null, $name = null, $code = null, $description = null, \StructType\Location_ContextObjectType $location_Reference = null, \StructType\Global_Setup_Data_MappingObjectType $ethnicity_Mapping_Reference = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setCode($code)
            ->setDescription($description)
            ->setLocation_Reference($location_Reference)
            ->setEthnicity_Mapping_Reference($ethnicity_Mapping_Reference)
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
     * @return \StructType\Ethnicity_DataType
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
     * @return \StructType\Ethnicity_DataType
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
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\Ethnicity_DataType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \StructType\Ethnicity_DataType
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
     * Get Location_Reference value
     * @return \StructType\Location_ContextObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\Location_ContextObjectType $location_Reference
     * @return \StructType\Ethnicity_DataType
     */
    public function setLocation_Reference(\StructType\Location_ContextObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Ethnicity_Mapping_Reference value
     * @return \StructType\Global_Setup_Data_MappingObjectType|null
     */
    public function getEthnicity_Mapping_Reference()
    {
        return $this->Ethnicity_Mapping_Reference;
    }
    /**
     * Set Ethnicity_Mapping_Reference value
     * @param \StructType\Global_Setup_Data_MappingObjectType $ethnicity_Mapping_Reference
     * @return \StructType\Ethnicity_DataType
     */
    public function setEthnicity_Mapping_Reference(\StructType\Global_Setup_Data_MappingObjectType $ethnicity_Mapping_Reference = null)
    {
        $this->Ethnicity_Mapping_Reference = $ethnicity_Mapping_Reference;
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
     * @return \StructType\Ethnicity_DataType
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
     * @return \StructType\Ethnicity_DataType
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
