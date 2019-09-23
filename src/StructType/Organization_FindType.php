<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_FindType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following criteria options to search for Organizations within the Workday system. The Organization references that are returned are those that satisfy ALL criteria included in the request. Therefore, the result set will
 * become more limited with every criterium that is populated.
 * @subpackage Structs
 */
class Organization_FindType extends AbstractStructBase
{
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Find" operations, the "As Of Date" determines what data to be used within the search logic. For "Get" operations, the response
     * element will only include data that is the most effective as of the "As Of Date".
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $As_Of_Date;
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those references with an exact match. The search index used to query on this value is not case-sensitive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name;
    /**
     * The Location_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those references with an exact match. The search index used to query on this value is not case-sensitive.
     * - minOccurs: 0
     * @var \StructType\Business_Site_Reference_DataType
     */
    public $Location_Reference_Data;
    /**
     * The Employee_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those references with an exact match. The search index used to query on this value is not case-sensitive.
     * - minOccurs: 0
     * @var \StructType\Employee_ReferenceType
     */
    public $Employee_Reference_Data;
    /**
     * The Contingent_Worker_Reference_Data
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those references with an exact match. The search index used to query on this value is not case-sensitive.
     * - minOccurs: 0
     * @var \StructType\Contingent_Worker_Reference_DataType
     */
    public $Contingent_Worker_Reference_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Organization_FindType
     * @uses Organization_FindType::setAs_Of_Date()
     * @uses Organization_FindType::setOrganization_Name()
     * @uses Organization_FindType::setLocation_Reference_Data()
     * @uses Organization_FindType::setEmployee_Reference_Data()
     * @uses Organization_FindType::setContingent_Worker_Reference_Data()
     * @uses Organization_FindType::setVersion()
     * @param string $as_Of_Date
     * @param string $organization_Name
     * @param \StructType\Business_Site_Reference_DataType $location_Reference_Data
     * @param \StructType\Employee_ReferenceType $employee_Reference_Data
     * @param \StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference_Data
     * @param string $version
     */
    public function __construct($as_Of_Date = null, $organization_Name = null, \StructType\Business_Site_Reference_DataType $location_Reference_Data = null, \StructType\Employee_ReferenceType $employee_Reference_Data = null, \StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference_Data = null, $version = null)
    {
        $this
            ->setAs_Of_Date($as_Of_Date)
            ->setOrganization_Name($organization_Name)
            ->setLocation_Reference_Data($location_Reference_Data)
            ->setEmployee_Reference_Data($employee_Reference_Data)
            ->setContingent_Worker_Reference_Data($contingent_Worker_Reference_Data)
            ->setVersion($version);
    }
    /**
     * Get As_Of_Date value
     * @return string|null
     */
    public function getAs_Of_Date()
    {
        return $this->As_Of_Date;
    }
    /**
     * Set As_Of_Date value
     * @param string $as_Of_Date
     * @return \StructType\Organization_FindType
     */
    public function setAs_Of_Date($as_Of_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Date) && !is_string($as_Of_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Date, true), gettype($as_Of_Date)), __LINE__);
        }
        $this->As_Of_Date = $as_Of_Date;
        return $this;
    }
    /**
     * Get Organization_Name value
     * @return string|null
     */
    public function getOrganization_Name()
    {
        return $this->Organization_Name;
    }
    /**
     * Set Organization_Name value
     * @param string $organization_Name
     * @return \StructType\Organization_FindType
     */
    public function setOrganization_Name($organization_Name = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name) && !is_string($organization_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name, true), gettype($organization_Name)), __LINE__);
        }
        $this->Organization_Name = $organization_Name;
        return $this;
    }
    /**
     * Get Location_Reference_Data value
     * @return \StructType\Business_Site_Reference_DataType|null
     */
    public function getLocation_Reference_Data()
    {
        return $this->Location_Reference_Data;
    }
    /**
     * Set Location_Reference_Data value
     * @param \StructType\Business_Site_Reference_DataType $location_Reference_Data
     * @return \StructType\Organization_FindType
     */
    public function setLocation_Reference_Data(\StructType\Business_Site_Reference_DataType $location_Reference_Data = null)
    {
        $this->Location_Reference_Data = $location_Reference_Data;
        return $this;
    }
    /**
     * Get Employee_Reference_Data value
     * @return \StructType\Employee_ReferenceType|null
     */
    public function getEmployee_Reference_Data()
    {
        return $this->Employee_Reference_Data;
    }
    /**
     * Set Employee_Reference_Data value
     * @param \StructType\Employee_ReferenceType $employee_Reference_Data
     * @return \StructType\Organization_FindType
     */
    public function setEmployee_Reference_Data(\StructType\Employee_ReferenceType $employee_Reference_Data = null)
    {
        $this->Employee_Reference_Data = $employee_Reference_Data;
        return $this;
    }
    /**
     * Get Contingent_Worker_Reference_Data value
     * @return \StructType\Contingent_Worker_Reference_DataType|null
     */
    public function getContingent_Worker_Reference_Data()
    {
        return $this->Contingent_Worker_Reference_Data;
    }
    /**
     * Set Contingent_Worker_Reference_Data value
     * @param \StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference_Data
     * @return \StructType\Organization_FindType
     */
    public function setContingent_Worker_Reference_Data(\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference_Data = null)
    {
        $this->Contingent_Worker_Reference_Data = $contingent_Worker_Reference_Data;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Organization_FindType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_FindType
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
