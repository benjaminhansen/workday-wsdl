<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Organization and its associated data.
 * @subpackage Structs
 */
class OrganizationType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Organization_ReferenceType
     */
    public $Organization_Reference;
    /**
     * The Organization_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Organization_DataType
     */
    public $Organization_Data;
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Request" elements, the "As Of Date" determines what data is to be used within search logic or returned in a response. For
     * "Response" elements, this element will echo "As Of Date" entered in the "Request" element or the default "As Of Date" if omitted..
     * @var string
     */
    public $As_Of_Date;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Request" elements, the "As Of Moment" determines what data is to be used within search logic or returned in a response. For "Response" elements,
     * this element will echo "As Of Moment" entered in the "Request" element or the default "As Of Moment" if omitted.
     * @var string
     */
    public $As_Of_Moment;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for OrganizationType
     * @uses OrganizationType::setOrganization_Reference()
     * @uses OrganizationType::setOrganization_Data()
     * @uses OrganizationType::setAs_Of_Date()
     * @uses OrganizationType::setAs_Of_Moment()
     * @uses OrganizationType::setVersion()
     * @param \StructType\Organization_ReferenceType $organization_Reference
     * @param \StructType\Organization_DataType $organization_Data
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     * @param string $version
     */
    public function __construct(\StructType\Organization_ReferenceType $organization_Reference = null, \StructType\Organization_DataType $organization_Data = null, $as_Of_Date = null, $as_Of_Moment = null, $version = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Data($organization_Data)
            ->setAs_Of_Date($as_Of_Date)
            ->setAs_Of_Moment($as_Of_Moment)
            ->setVersion($version);
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\Organization_ReferenceType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \StructType\Organization_ReferenceType $organization_Reference
     * @return \StructType\OrganizationType
     */
    public function setOrganization_Reference(\StructType\Organization_ReferenceType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Data value
     * @return \StructType\Organization_DataType|null
     */
    public function getOrganization_Data()
    {
        return $this->Organization_Data;
    }
    /**
     * Set Organization_Data value
     * @param \StructType\Organization_DataType $organization_Data
     * @return \StructType\OrganizationType
     */
    public function setOrganization_Data(\StructType\Organization_DataType $organization_Data = null)
    {
        $this->Organization_Data = $organization_Data;
        return $this;
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
     * @return \StructType\OrganizationType
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
     * Get As_Of_Moment value
     * @return string|null
     */
    public function getAs_Of_Moment()
    {
        return $this->As_Of_Moment;
    }
    /**
     * Set As_Of_Moment value
     * @param string $as_Of_Moment
     * @return \StructType\OrganizationType
     */
    public function setAs_Of_Moment($as_Of_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Moment) && !is_string($as_Of_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Moment, true), gettype($as_Of_Moment)), __LINE__);
        }
        $this->As_Of_Moment = $as_Of_Moment;
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
     * @return \StructType\OrganizationType
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
     * @return \StructType\OrganizationType
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
