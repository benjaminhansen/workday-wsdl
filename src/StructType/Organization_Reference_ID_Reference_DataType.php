<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Reference_ID_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Holds data for Organization Reference ID
 * @subpackage Structs
 */
class Organization_Reference_ID_Reference_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Organization Reference ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Reference_ID;
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: Organization Name. This field is read-only and should not be post back in Put Organization ID Request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name;
    /**
     * The Include_Organization_ID_in_Name
     * Meta information extracted from the WSDL
     * - documentation: This option is only allowed for Supervisory Organization at the moment. When set to true, Supervisory Organizations will have Organization Reference ID suffixed to their names. A new effective-dated organization name is automatically
     * created if value for this field is different as of current moment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organization_ID_in_Name;
    /**
     * Constructor method for Organization_Reference_ID_Reference_DataType
     * @uses Organization_Reference_ID_Reference_DataType::setOrganization_Reference_ID()
     * @uses Organization_Reference_ID_Reference_DataType::setOrganization_Name()
     * @uses Organization_Reference_ID_Reference_DataType::setInclude_Organization_ID_in_Name()
     * @param string $organization_Reference_ID
     * @param string $organization_Name
     * @param bool $include_Organization_ID_in_Name
     */
    public function __construct($organization_Reference_ID = null, $organization_Name = null, $include_Organization_ID_in_Name = null)
    {
        $this
            ->setOrganization_Reference_ID($organization_Reference_ID)
            ->setOrganization_Name($organization_Name)
            ->setInclude_Organization_ID_in_Name($include_Organization_ID_in_Name);
    }
    /**
     * Get Organization_Reference_ID value
     * @return string|null
     */
    public function getOrganization_Reference_ID()
    {
        return $this->Organization_Reference_ID;
    }
    /**
     * Set Organization_Reference_ID value
     * @param string $organization_Reference_ID
     * @return \StructType\Organization_Reference_ID_Reference_DataType
     */
    public function setOrganization_Reference_ID($organization_Reference_ID = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Reference_ID) && !is_string($organization_Reference_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Reference_ID, true), gettype($organization_Reference_ID)), __LINE__);
        }
        $this->Organization_Reference_ID = $organization_Reference_ID;
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
     * @return \StructType\Organization_Reference_ID_Reference_DataType
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
     * Get Include_Organization_ID_in_Name value
     * @return bool|null
     */
    public function getInclude_Organization_ID_in_Name()
    {
        return $this->Include_Organization_ID_in_Name;
    }
    /**
     * Set Include_Organization_ID_in_Name value
     * @param bool $include_Organization_ID_in_Name
     * @return \StructType\Organization_Reference_ID_Reference_DataType
     */
    public function setInclude_Organization_ID_in_Name($include_Organization_ID_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Organization_ID_in_Name) && !is_bool($include_Organization_ID_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Organization_ID_in_Name, true), gettype($include_Organization_ID_in_Name)), __LINE__);
        }
        $this->Include_Organization_ID_in_Name = $include_Organization_ID_in_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Reference_ID_Reference_DataType
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
