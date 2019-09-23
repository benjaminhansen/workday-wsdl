<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_InactivateType StructType
 * Meta information extracted from the WSDL
 * - documentation: 'Organization for Subordinates Reference' cannot be one of the active subordinates. | The superior that active included organizations are to move to cannot be inactive or have a future inactivation. | The superior that active
 * subordinates are to move to cannot be inactive or have a future inactivation. | Organization being inactivated has no superior to move active organizations to so you must specify a value for 'Organization for Subordinates Reference'. | Organization
 * being inactivated has no superior to move active included organizations to so you must specify a value for 'Organization for Included Organizations Reference'. | When 'Keep in Hierarchy' is false and there are active subordinates you must specify a
 * value for 'Organization for Subordinates Reference'. | When 'Keep in Hierarchy' is false and there are active included organizations, you must specify a value for 'Organization for Included Organizations Reference'. | Value for 'Organization for
 * Subordinates Reference' and 'Organization for Included Organizations Reference' must be the reference id of an active organization that does not have a future inactivation and is for same organization type. | An organization cannot be inactivated if
 * it has retiree members or positions or restrictions. | An organization must be active in order to be inactivated. | An organization cannot be inactivated while it has conflicting events. Those events can be events in progress or future events. | An
 * organization cannot be inactivated while it still has events in progress. | Utilize the following elements to Inactivate an existing Organization within the Workday system.
 * @subpackage Structs
 */
class Organization_InactivateType extends AbstractStructBase
{
    /**
     * The Validate_Only
     * Meta information extracted from the WSDL
     * - documentation: Use this boolean to validate the request without processing it.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Validate_Only;
    /**
     * The Organization_Reference_Data
     * @var \WorkdayWsdl\\StructType\Organization_ReferenceType
     */
    public $Organization_Reference_Data;
    /**
     * The Organization_Inactivate_Data
     * @var \WorkdayWsdl\\StructType\Organization_Inactivate_DataType
     */
    public $Organization_Inactivate_Data;
    /**
     * The Keep_in_Hierarchy
     * Meta information extracted from the WSDL
     * - documentation: Use this boolean to keep the organization in hierarchy.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Keep_in_Hierarchy;
    /**
     * The Organization_for_Subordinates_Reference
     * Meta information extracted from the WSDL
     * - documentation: Use this element to specify the new superior organization for current subordinates. When blank, default behavior is that active organizations are moved to superior.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_for_Subordinates_Reference;
    /**
     * The Organization_for_Included_Organizations_Reference
     * Meta information extracted from the WSDL
     * - documentation: Use this element to specify the new superior organization for current included organizations. When blank, default behavior is that active organizations are moved to superior.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_for_Included_Organizations_Reference;
    /**
     * The Remove_All_Role_Assignments
     * Meta information extracted from the WSDL
     * - documentation: Use this boolean to remove all direct role assignments as of the inactivation effective date and later. If empty or FALSE, direct role assignments will remain as is. Inherited role assignments will remain as is if you choose to keep
     * the organization in the hierarchy.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_All_Role_Assignments;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Organization_InactivateType
     * @uses Organization_InactivateType::setValidate_Only()
     * @uses Organization_InactivateType::setOrganization_Reference_Data()
     * @uses Organization_InactivateType::setOrganization_Inactivate_Data()
     * @uses Organization_InactivateType::setKeep_in_Hierarchy()
     * @uses Organization_InactivateType::setOrganization_for_Subordinates_Reference()
     * @uses Organization_InactivateType::setOrganization_for_Included_Organizations_Reference()
     * @uses Organization_InactivateType::setRemove_All_Role_Assignments()
     * @uses Organization_InactivateType::setVersion()
     * @param bool $validate_Only
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data
     * @param \WorkdayWsdl\\StructType\Organization_Inactivate_DataType $organization_Inactivate_Data
     * @param bool $keep_in_Hierarchy
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Subordinates_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Included_Organizations_Reference
     * @param bool $remove_All_Role_Assignments
     * @param string $version
     */
    public function __construct($validate_Only = null, \WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data = null, \WorkdayWsdl\\StructType\Organization_Inactivate_DataType $organization_Inactivate_Data = null, $keep_in_Hierarchy = null, \WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Subordinates_Reference = null, \WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Included_Organizations_Reference = null, $remove_All_Role_Assignments = null, $version = null)
    {
        $this
            ->setValidate_Only($validate_Only)
            ->setOrganization_Reference_Data($organization_Reference_Data)
            ->setOrganization_Inactivate_Data($organization_Inactivate_Data)
            ->setKeep_in_Hierarchy($keep_in_Hierarchy)
            ->setOrganization_for_Subordinates_Reference($organization_for_Subordinates_Reference)
            ->setOrganization_for_Included_Organizations_Reference($organization_for_Included_Organizations_Reference)
            ->setRemove_All_Role_Assignments($remove_All_Role_Assignments)
            ->setVersion($version);
    }
    /**
     * Get Validate_Only value
     * @return bool|null
     */
    public function getValidate_Only()
    {
        return $this->Validate_Only;
    }
    /**
     * Set Validate_Only value
     * @param bool $validate_Only
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setValidate_Only($validate_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($validate_Only) && !is_bool($validate_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validate_Only, true), gettype($validate_Only)), __LINE__);
        }
        $this->Validate_Only = $validate_Only;
        return $this;
    }
    /**
     * Get Organization_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Organization_ReferenceType|null
     */
    public function getOrganization_Reference_Data()
    {
        return $this->Organization_Reference_Data;
    }
    /**
     * Set Organization_Reference_Data value
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setOrganization_Reference_Data(\WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data = null)
    {
        $this->Organization_Reference_Data = $organization_Reference_Data;
        return $this;
    }
    /**
     * Get Organization_Inactivate_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Inactivate_DataType|null
     */
    public function getOrganization_Inactivate_Data()
    {
        return $this->Organization_Inactivate_Data;
    }
    /**
     * Set Organization_Inactivate_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Inactivate_DataType $organization_Inactivate_Data
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setOrganization_Inactivate_Data(\WorkdayWsdl\\StructType\Organization_Inactivate_DataType $organization_Inactivate_Data = null)
    {
        $this->Organization_Inactivate_Data = $organization_Inactivate_Data;
        return $this;
    }
    /**
     * Get Keep_in_Hierarchy value
     * @return bool|null
     */
    public function getKeep_in_Hierarchy()
    {
        return $this->Keep_in_Hierarchy;
    }
    /**
     * Set Keep_in_Hierarchy value
     * @param bool $keep_in_Hierarchy
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setKeep_in_Hierarchy($keep_in_Hierarchy = null)
    {
        // validation for constraint: boolean
        if (!is_null($keep_in_Hierarchy) && !is_bool($keep_in_Hierarchy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keep_in_Hierarchy, true), gettype($keep_in_Hierarchy)), __LINE__);
        }
        $this->Keep_in_Hierarchy = $keep_in_Hierarchy;
        return $this;
    }
    /**
     * Get Organization_for_Subordinates_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getOrganization_for_Subordinates_Reference()
    {
        return $this->Organization_for_Subordinates_Reference;
    }
    /**
     * Set Organization_for_Subordinates_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Subordinates_Reference
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setOrganization_for_Subordinates_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Subordinates_Reference = null)
    {
        $this->Organization_for_Subordinates_Reference = $organization_for_Subordinates_Reference;
        return $this;
    }
    /**
     * Get Organization_for_Included_Organizations_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getOrganization_for_Included_Organizations_Reference()
    {
        return $this->Organization_for_Included_Organizations_Reference;
    }
    /**
     * Set Organization_for_Included_Organizations_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Included_Organizations_Reference
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setOrganization_for_Included_Organizations_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_for_Included_Organizations_Reference = null)
    {
        $this->Organization_for_Included_Organizations_Reference = $organization_for_Included_Organizations_Reference;
        return $this;
    }
    /**
     * Get Remove_All_Role_Assignments value
     * @return bool|null
     */
    public function getRemove_All_Role_Assignments()
    {
        return $this->Remove_All_Role_Assignments;
    }
    /**
     * Set Remove_All_Role_Assignments value
     * @param bool $remove_All_Role_Assignments
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
     */
    public function setRemove_All_Role_Assignments($remove_All_Role_Assignments = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_All_Role_Assignments) && !is_bool($remove_All_Role_Assignments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_All_Role_Assignments, true), gettype($remove_All_Role_Assignments)), __LINE__);
        }
        $this->Remove_All_Role_Assignments = $remove_All_Role_Assignments;
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
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
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
     * @return \WorkdayWsdl\\StructType\Organization_InactivateType
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
