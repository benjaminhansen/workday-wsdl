<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_WWS_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the detailed information about an Organization.
 * @subpackage Structs
 */
class Organization_WWS_DataType extends AbstractStructBase
{
    /**
     * The Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Integration Reference ID used for integration purposes; This is also the Organization ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference_ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Organization that appears on pages and reports. A new effective-dated organization name is automatically created if value for this field is different as of specified effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: A long description of the Organization.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Organization_Code
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Organization Code. A new effective-dated organization name is automatically created if value for this field is different as of specified effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Code;
    /**
     * The Include_Manager_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean choice to include the Manager/Leader Name in the Organization Name display.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Manager_in_Name;
    /**
     * The Include_Organization_Code_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Organization Code within the name (Display ID within Workday). A new effective-dated organization name is automatically created if value for this field is different as of specified
     * effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organization_Code_in_Name;
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the type of organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_TypeObjectType
     */
    public $Organization_Type_Reference;
    /**
     * The Organization_Subtype_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the subtype of the organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_SubtypeObjectType
     */
    public $Organization_Subtype_Reference;
    /**
     * The Availibility_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Organization is available for use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Availibility_Date;
    /**
     * The Last_Updated_DateTime
     * Meta information extracted from the WSDL
     * - documentation: Date/Time for the last update.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Updated_DateTime;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive indicator for the Organization.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Inactive_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Organization was made Inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Inactive_Date;
    /**
     * The Manager_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the manager for the organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Manager_Reference;
    /**
     * The Leadership_Reference
     * Meta information extracted from the WSDL
     * - documentation: Manager(s) of this organization. If there is a position restriction with an overlap, both are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Leadership_Reference;
    /**
     * The Organization_Owner_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the worker that owns the Organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_OwnerObjectType
     */
    public $Organization_Owner_Reference;
    /**
     * The Organization_Visibility_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the scope of visibility for the Organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Organization_Visibility_Reference;
    /**
     * The External_URL_Reference
     * Meta information extracted from the WSDL
     * - documentation: Non-Workday URL link for more Organizational information.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_URLObjectType
     */
    public $External_URL_Reference;
    /**
     * The External_IDs_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains external system name and its corresponding ID that can be used to match data between systems during an integration.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $External_IDs_Data;
    /**
     * The Roles_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains information about an Organization Role and incumbent worker(s).
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Roles_WWS_DataType
     */
    public $Roles_Data;
    /**
     * The Hierarchy_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the top-level organization, the immediate superior organization, and all immediate subordinate organization references.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public $Hierarchy_Data;
    /**
     * The Supervisory_Data
     * Meta information extracted from the WSDL
     * - documentation: For Organizations of type Supervisory, contains staffing model and restrictions, location and other organizational assignments.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Supervisory_Org_DataType
     */
    public $Supervisory_Data;
    /**
     * The Integration_Field_Override_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Document_Field_Result_DataType[]
     */
    public $Integration_Field_Override_Data;
    /**
     * Constructor method for Organization_WWS_DataType
     * @uses Organization_WWS_DataType::setReference_ID()
     * @uses Organization_WWS_DataType::setName()
     * @uses Organization_WWS_DataType::setDescription()
     * @uses Organization_WWS_DataType::setOrganization_Code()
     * @uses Organization_WWS_DataType::setInclude_Manager_in_Name()
     * @uses Organization_WWS_DataType::setInclude_Organization_Code_in_Name()
     * @uses Organization_WWS_DataType::setOrganization_Type_Reference()
     * @uses Organization_WWS_DataType::setOrganization_Subtype_Reference()
     * @uses Organization_WWS_DataType::setAvailibility_Date()
     * @uses Organization_WWS_DataType::setLast_Updated_DateTime()
     * @uses Organization_WWS_DataType::setInactive()
     * @uses Organization_WWS_DataType::setInactive_Date()
     * @uses Organization_WWS_DataType::setManager_Reference()
     * @uses Organization_WWS_DataType::setLeadership_Reference()
     * @uses Organization_WWS_DataType::setOrganization_Owner_Reference()
     * @uses Organization_WWS_DataType::setOrganization_Visibility_Reference()
     * @uses Organization_WWS_DataType::setExternal_URL_Reference()
     * @uses Organization_WWS_DataType::setExternal_IDs_Data()
     * @uses Organization_WWS_DataType::setRoles_Data()
     * @uses Organization_WWS_DataType::setHierarchy_Data()
     * @uses Organization_WWS_DataType::setSupervisory_Data()
     * @uses Organization_WWS_DataType::setIntegration_Field_Override_Data()
     * @param string $reference_ID
     * @param string $name
     * @param string $description
     * @param string $organization_Code
     * @param bool $include_Manager_in_Name
     * @param bool $include_Organization_Code_in_Name
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference
     * @param \WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference
     * @param string $availibility_Date
     * @param string $last_Updated_DateTime
     * @param bool $inactive
     * @param string $inactive_Date
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $leadership_Reference
     * @param \WorkdayWsdl\\StructType\Organization_OwnerObjectType $organization_Owner_Reference
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $organization_Visibility_Reference
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_IDs_Data
     * @param \WorkdayWsdl\\StructType\Organization_Roles_WWS_DataType $roles_Data
     * @param \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType $hierarchy_Data
     * @param \WorkdayWsdl\\StructType\Supervisory_Org_DataType $supervisory_Data
     * @param \WorkdayWsdl\\StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     */
    public function __construct($reference_ID = null, $name = null, $description = null, $organization_Code = null, $include_Manager_in_Name = null, $include_Organization_Code_in_Name = null, \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference = null, \WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference = null, $availibility_Date = null, $last_Updated_DateTime = null, $inactive = null, $inactive_Date = null, \WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference = null, array $leadership_Reference = array(), \WorkdayWsdl\\StructType\Organization_OwnerObjectType $organization_Owner_Reference = null, \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $organization_Visibility_Reference = null, \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null, \WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_IDs_Data = null, \WorkdayWsdl\\StructType\Organization_Roles_WWS_DataType $roles_Data = null, \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType $hierarchy_Data = null, \WorkdayWsdl\\StructType\Supervisory_Org_DataType $supervisory_Data = null, array $integration_Field_Override_Data = array())
    {
        $this
            ->setReference_ID($reference_ID)
            ->setName($name)
            ->setDescription($description)
            ->setOrganization_Code($organization_Code)
            ->setInclude_Manager_in_Name($include_Manager_in_Name)
            ->setInclude_Organization_Code_in_Name($include_Organization_Code_in_Name)
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setOrganization_Subtype_Reference($organization_Subtype_Reference)
            ->setAvailibility_Date($availibility_Date)
            ->setLast_Updated_DateTime($last_Updated_DateTime)
            ->setInactive($inactive)
            ->setInactive_Date($inactive_Date)
            ->setManager_Reference($manager_Reference)
            ->setLeadership_Reference($leadership_Reference)
            ->setOrganization_Owner_Reference($organization_Owner_Reference)
            ->setOrganization_Visibility_Reference($organization_Visibility_Reference)
            ->setExternal_URL_Reference($external_URL_Reference)
            ->setExternal_IDs_Data($external_IDs_Data)
            ->setRoles_Data($roles_Data)
            ->setHierarchy_Data($hierarchy_Data)
            ->setSupervisory_Data($supervisory_Data)
            ->setIntegration_Field_Override_Data($integration_Field_Override_Data);
    }
    /**
     * Get Reference_ID value
     * @return string|null
     */
    public function getReference_ID()
    {
        return $this->Reference_ID;
    }
    /**
     * Set Reference_ID value
     * @param string $reference_ID
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setReference_ID($reference_ID = null)
    {
        // validation for constraint: string
        if (!is_null($reference_ID) && !is_string($reference_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_ID, true), gettype($reference_ID)), __LINE__);
        }
        $this->Reference_ID = $reference_ID;
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
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
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
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
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
     * Get Organization_Code value
     * @return string|null
     */
    public function getOrganization_Code()
    {
        return $this->Organization_Code;
    }
    /**
     * Set Organization_Code value
     * @param string $organization_Code
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setOrganization_Code($organization_Code = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Code) && !is_string($organization_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Code, true), gettype($organization_Code)), __LINE__);
        }
        $this->Organization_Code = $organization_Code;
        return $this;
    }
    /**
     * Get Include_Manager_in_Name value
     * @return bool|null
     */
    public function getInclude_Manager_in_Name()
    {
        return $this->Include_Manager_in_Name;
    }
    /**
     * Set Include_Manager_in_Name value
     * @param bool $include_Manager_in_Name
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setInclude_Manager_in_Name($include_Manager_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Manager_in_Name) && !is_bool($include_Manager_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Manager_in_Name, true), gettype($include_Manager_in_Name)), __LINE__);
        }
        $this->Include_Manager_in_Name = $include_Manager_in_Name;
        return $this;
    }
    /**
     * Get Include_Organization_Code_in_Name value
     * @return bool|null
     */
    public function getInclude_Organization_Code_in_Name()
    {
        return $this->Include_Organization_Code_in_Name;
    }
    /**
     * Set Include_Organization_Code_in_Name value
     * @param bool $include_Organization_Code_in_Name
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setInclude_Organization_Code_in_Name($include_Organization_Code_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Organization_Code_in_Name) && !is_bool($include_Organization_Code_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Organization_Code_in_Name, true), gettype($include_Organization_Code_in_Name)), __LINE__);
        }
        $this->Include_Organization_Code_in_Name = $include_Organization_Code_in_Name;
        return $this;
    }
    /**
     * Get Organization_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_TypeObjectType|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * Set Organization_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setOrganization_Type_Reference(\WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference = null)
    {
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
    }
    /**
     * Get Organization_Subtype_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_SubtypeObjectType|null
     */
    public function getOrganization_Subtype_Reference()
    {
        return $this->Organization_Subtype_Reference;
    }
    /**
     * Set Organization_Subtype_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setOrganization_Subtype_Reference(\WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference = null)
    {
        $this->Organization_Subtype_Reference = $organization_Subtype_Reference;
        return $this;
    }
    /**
     * Get Availibility_Date value
     * @return string|null
     */
    public function getAvailibility_Date()
    {
        return $this->Availibility_Date;
    }
    /**
     * Set Availibility_Date value
     * @param string $availibility_Date
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setAvailibility_Date($availibility_Date = null)
    {
        // validation for constraint: string
        if (!is_null($availibility_Date) && !is_string($availibility_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availibility_Date, true), gettype($availibility_Date)), __LINE__);
        }
        $this->Availibility_Date = $availibility_Date;
        return $this;
    }
    /**
     * Get Last_Updated_DateTime value
     * @return string|null
     */
    public function getLast_Updated_DateTime()
    {
        return $this->Last_Updated_DateTime;
    }
    /**
     * Set Last_Updated_DateTime value
     * @param string $last_Updated_DateTime
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setLast_Updated_DateTime($last_Updated_DateTime = null)
    {
        // validation for constraint: string
        if (!is_null($last_Updated_DateTime) && !is_string($last_Updated_DateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Updated_DateTime, true), gettype($last_Updated_DateTime)), __LINE__);
        }
        $this->Last_Updated_DateTime = $last_Updated_DateTime;
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
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
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
     * Get Inactive_Date value
     * @return string|null
     */
    public function getInactive_Date()
    {
        return $this->Inactive_Date;
    }
    /**
     * Set Inactive_Date value
     * @param string $inactive_Date
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setInactive_Date($inactive_Date = null)
    {
        // validation for constraint: string
        if (!is_null($inactive_Date) && !is_string($inactive_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inactive_Date, true), gettype($inactive_Date)), __LINE__);
        }
        $this->Inactive_Date = $inactive_Date;
        return $this;
    }
    /**
     * Get Manager_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getManager_Reference()
    {
        return $this->Manager_Reference;
    }
    /**
     * Set Manager_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setManager_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $manager_Reference = null)
    {
        $this->Manager_Reference = $manager_Reference;
        return $this;
    }
    /**
     * Get Leadership_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
     */
    public function getLeadership_Reference()
    {
        return $this->Leadership_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLeadership_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeadership_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLeadership_ReferenceForArrayConstraintsFromSetLeadership_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_WWS_DataTypeLeadership_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_WWS_DataTypeLeadership_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($organization_WWS_DataTypeLeadership_ReferenceItem) ? get_class($organization_WWS_DataTypeLeadership_ReferenceItem) : sprintf('%s(%s)', gettype($organization_WWS_DataTypeLeadership_ReferenceItem), var_export($organization_WWS_DataTypeLeadership_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leadership_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Leadership_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $leadership_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setLeadership_Reference(array $leadership_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($leadership_ReferenceArrayErrorMessage = self::validateLeadership_ReferenceForArrayConstraintsFromSetLeadership_Reference($leadership_Reference))) {
            throw new \InvalidArgumentException($leadership_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Leadership_Reference = $leadership_Reference;
        return $this;
    }
    /**
     * Add item to Leadership_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function addToLeadership_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Leadership_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Leadership_Reference[] = $item;
        return $this;
    }
    /**
     * Get Organization_Owner_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_OwnerObjectType|null
     */
    public function getOrganization_Owner_Reference()
    {
        return $this->Organization_Owner_Reference;
    }
    /**
     * Set Organization_Owner_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_OwnerObjectType $organization_Owner_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setOrganization_Owner_Reference(\WorkdayWsdl\\StructType\Organization_OwnerObjectType $organization_Owner_Reference = null)
    {
        $this->Organization_Owner_Reference = $organization_Owner_Reference;
        return $this;
    }
    /**
     * Get Organization_Visibility_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getOrganization_Visibility_Reference()
    {
        return $this->Organization_Visibility_Reference;
    }
    /**
     * Set Organization_Visibility_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $organization_Visibility_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setOrganization_Visibility_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $organization_Visibility_Reference = null)
    {
        $this->Organization_Visibility_Reference = $organization_Visibility_Reference;
        return $this;
    }
    /**
     * Get External_URL_Reference value
     * @return \WorkdayWsdl\\StructType\External_URLObjectType|null
     */
    public function getExternal_URL_Reference()
    {
        return $this->External_URL_Reference;
    }
    /**
     * Set External_URL_Reference value
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setExternal_URL_Reference(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null)
    {
        $this->External_URL_Reference = $external_URL_Reference;
        return $this;
    }
    /**
     * Get External_IDs_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getExternal_IDs_Data()
    {
        return $this->External_IDs_Data;
    }
    /**
     * Set External_IDs_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_IDs_Data
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setExternal_IDs_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $external_IDs_Data = null)
    {
        $this->External_IDs_Data = $external_IDs_Data;
        return $this;
    }
    /**
     * Get Roles_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Roles_WWS_DataType|null
     */
    public function getRoles_Data()
    {
        return $this->Roles_Data;
    }
    /**
     * Set Roles_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Roles_WWS_DataType $roles_Data
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setRoles_Data(\WorkdayWsdl\\StructType\Organization_Roles_WWS_DataType $roles_Data = null)
    {
        $this->Roles_Data = $roles_Data;
        return $this;
    }
    /**
     * Get Hierarchy_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType|null
     */
    public function getHierarchy_Data()
    {
        return $this->Hierarchy_Data;
    }
    /**
     * Set Hierarchy_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType $hierarchy_Data
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setHierarchy_Data(\WorkdayWsdl\\StructType\Organization_Hierarchy_DataType $hierarchy_Data = null)
    {
        $this->Hierarchy_Data = $hierarchy_Data;
        return $this;
    }
    /**
     * Get Supervisory_Data value
     * @return \WorkdayWsdl\\StructType\Supervisory_Org_DataType|null
     */
    public function getSupervisory_Data()
    {
        return $this->Supervisory_Data;
    }
    /**
     * Set Supervisory_Data value
     * @param \WorkdayWsdl\\StructType\Supervisory_Org_DataType $supervisory_Data
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function setSupervisory_Data(\WorkdayWsdl\\StructType\Supervisory_Org_DataType $supervisory_Data = null)
    {
        $this->Supervisory_Data = $supervisory_Data;
        return $this;
    }
    /**
     * Get Integration_Field_Override_Data value
     * @return \WorkdayWsdl\\StructType\Document_Field_Result_DataType[]|null
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
        foreach ($values as $organization_WWS_DataTypeIntegration_Field_Override_DataItem) {
            // validation for constraint: itemType
            if (!$organization_WWS_DataTypeIntegration_Field_Override_DataItem instanceof \WorkdayWsdl\\StructType\Document_Field_Result_DataType) {
                $invalidValues[] = is_object($organization_WWS_DataTypeIntegration_Field_Override_DataItem) ? get_class($organization_WWS_DataTypeIntegration_Field_Override_DataItem) : sprintf('%s(%s)', gettype($organization_WWS_DataTypeIntegration_Field_Override_DataItem), var_export($organization_WWS_DataTypeIntegration_Field_Override_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Integration_Field_Override_Data property can only contain items of type \WorkdayWsdl\\StructType\Document_Field_Result_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
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
     * @param \WorkdayWsdl\\StructType\Document_Field_Result_DataType $item
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public function addToIntegration_Field_Override_Data(\WorkdayWsdl\\StructType\Document_Field_Result_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Document_Field_Result_DataType) {
            throw new \InvalidArgumentException(sprintf('The Integration_Field_Override_Data property can only contain items of type \WorkdayWsdl\\StructType\Document_Field_Result_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType
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
