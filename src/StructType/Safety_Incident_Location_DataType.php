<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Location_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Safety Incident Location Data
 * @subpackage Structs
 */
class Safety_Incident_Location_DataType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Location_Name
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location Name
     * - maxOccurs: 1
     * @var string
     */
    public $Safety_Incident_Location_Name;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Safety_Incident_Location_Description
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location Description
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Safety_Incident_Location_Description;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location must be of usage Business Site. | Location
     * @var \StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Government_Reporting_Agency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Government Reporting Agency
     * @var \StructType\Government_Reporting_AgencyObjectType
     */
    public $Government_Reporting_Agency_Reference;
    /**
     * The Related_Reporting_Agency_s_Grouping_ID
     * Meta information extracted from the WSDL
     * - documentation: Related Reporting Agency's Grouping ID
     * - maxOccurs: 1
     * @var string
     */
    public $Related_Reporting_Agency_s_Grouping_ID;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Safety_Incident_Location_DataType
     * @uses Safety_Incident_Location_DataType::setSafety_Incident_Location_Name()
     * @uses Safety_Incident_Location_DataType::setCode()
     * @uses Safety_Incident_Location_DataType::setSafety_Incident_Location_Description()
     * @uses Safety_Incident_Location_DataType::setLocation_Reference()
     * @uses Safety_Incident_Location_DataType::setGovernment_Reporting_Agency_Reference()
     * @uses Safety_Incident_Location_DataType::setRelated_Reporting_Agency_s_Grouping_ID()
     * @uses Safety_Incident_Location_DataType::setInactive()
     * @param string $safety_Incident_Location_Name
     * @param string $code
     * @param string $safety_Incident_Location_Description
     * @param \StructType\LocationObjectType $location_Reference
     * @param \StructType\Government_Reporting_AgencyObjectType $government_Reporting_Agency_Reference
     * @param string $related_Reporting_Agency_s_Grouping_ID
     * @param bool $inactive
     */
    public function __construct($safety_Incident_Location_Name = null, $code = null, $safety_Incident_Location_Description = null, \StructType\LocationObjectType $location_Reference = null, \StructType\Government_Reporting_AgencyObjectType $government_Reporting_Agency_Reference = null, $related_Reporting_Agency_s_Grouping_ID = null, $inactive = null)
    {
        $this
            ->setSafety_Incident_Location_Name($safety_Incident_Location_Name)
            ->setCode($code)
            ->setSafety_Incident_Location_Description($safety_Incident_Location_Description)
            ->setLocation_Reference($location_Reference)
            ->setGovernment_Reporting_Agency_Reference($government_Reporting_Agency_Reference)
            ->setRelated_Reporting_Agency_s_Grouping_ID($related_Reporting_Agency_s_Grouping_ID)
            ->setInactive($inactive);
    }
    /**
     * Get Safety_Incident_Location_Name value
     * @return string|null
     */
    public function getSafety_Incident_Location_Name()
    {
        return $this->Safety_Incident_Location_Name;
    }
    /**
     * Set Safety_Incident_Location_Name value
     * @param string $safety_Incident_Location_Name
     * @return \StructType\Safety_Incident_Location_DataType
     */
    public function setSafety_Incident_Location_Name($safety_Incident_Location_Name = null)
    {
        // validation for constraint: string
        if (!is_null($safety_Incident_Location_Name) && !is_string($safety_Incident_Location_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($safety_Incident_Location_Name, true), gettype($safety_Incident_Location_Name)), __LINE__);
        }
        $this->Safety_Incident_Location_Name = $safety_Incident_Location_Name;
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
     * @return \StructType\Safety_Incident_Location_DataType
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
     * Get Safety_Incident_Location_Description value
     * @return string|null
     */
    public function getSafety_Incident_Location_Description()
    {
        return $this->Safety_Incident_Location_Description;
    }
    /**
     * Set Safety_Incident_Location_Description value
     * @param string $safety_Incident_Location_Description
     * @return \StructType\Safety_Incident_Location_DataType
     */
    public function setSafety_Incident_Location_Description($safety_Incident_Location_Description = null)
    {
        // validation for constraint: string
        if (!is_null($safety_Incident_Location_Description) && !is_string($safety_Incident_Location_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($safety_Incident_Location_Description, true), gettype($safety_Incident_Location_Description)), __LINE__);
        }
        $this->Safety_Incident_Location_Description = $safety_Incident_Location_Description;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\LocationObjectType $location_Reference
     * @return \StructType\Safety_Incident_Location_DataType
     */
    public function setLocation_Reference(\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Government_Reporting_Agency_Reference value
     * @return \StructType\Government_Reporting_AgencyObjectType|null
     */
    public function getGovernment_Reporting_Agency_Reference()
    {
        return $this->Government_Reporting_Agency_Reference;
    }
    /**
     * Set Government_Reporting_Agency_Reference value
     * @param \StructType\Government_Reporting_AgencyObjectType $government_Reporting_Agency_Reference
     * @return \StructType\Safety_Incident_Location_DataType
     */
    public function setGovernment_Reporting_Agency_Reference(\StructType\Government_Reporting_AgencyObjectType $government_Reporting_Agency_Reference = null)
    {
        $this->Government_Reporting_Agency_Reference = $government_Reporting_Agency_Reference;
        return $this;
    }
    /**
     * Get Related_Reporting_Agency_s_Grouping_ID value
     * @return string|null
     */
    public function getRelated_Reporting_Agency_s_Grouping_ID()
    {
        return $this->Related_Reporting_Agency_s_Grouping_ID;
    }
    /**
     * Set Related_Reporting_Agency_s_Grouping_ID value
     * @param string $related_Reporting_Agency_s_Grouping_ID
     * @return \StructType\Safety_Incident_Location_DataType
     */
    public function setRelated_Reporting_Agency_s_Grouping_ID($related_Reporting_Agency_s_Grouping_ID = null)
    {
        // validation for constraint: string
        if (!is_null($related_Reporting_Agency_s_Grouping_ID) && !is_string($related_Reporting_Agency_s_Grouping_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($related_Reporting_Agency_s_Grouping_ID, true), gettype($related_Reporting_Agency_s_Grouping_ID)), __LINE__);
        }
        $this->Related_Reporting_Agency_s_Grouping_ID = $related_Reporting_Agency_s_Grouping_ID;
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
     * @return \StructType\Safety_Incident_Location_DataType
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
     * @return \StructType\Safety_Incident_Location_DataType
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
