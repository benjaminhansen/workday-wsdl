<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: An organization that is inactive now or will be inactive in future cannot include an active organization. | Either position management or job management must be enabled for supervisory organizations. | Assigning this Container
 * Organization would create a circular reference. | A superior that is inactive now or will be inactive in future cannot be assigned to an active subordinate organization. | If specified, the organization visibility for a subordinate organization must
 * match its top level organization. | Organization Subtype needs to be valid for Organization Type. | Primary Location is allowed only for supervisory organizations. | Superior/subordinate organization hierarchies are allowed for only certain
 * organization types. | If specified, the organization type for a subordinate organization must match its top level organization. | The organization type does not match the organization type allowed for roll-up by the container organization. |
 * Organization Visibility is required for a top level organization. | Primary Location is required for top level supervisory organizations. | Activating a hiring freeze is allowed only for supervisory organizations. | Organization Type is required for
 * a top level organization. | Assign Superior Org Vaidation Help Text | 'Include Organization ID in Name' can only be set to true for supervisory organizations. | Position management or job management can only be enabled for supervisory organizations.
 * | Organization Subtype needs to be valid for the Hierarchy Structure on top level organization. | Enter an Organization Name or select the 'Include Manager/Leader in Name' checkbox or use the Organization Code as the name by entering an Organization
 * Code and selecting the 'Include Organization Code in Name' checkbox. | Enter an Organization Name or use the Organization Code as the name by entering an Organization Code and selecting the 'Include Organization Code in Name' checkbox. | Organization
 * Code is required If 'Include Organization Code in Name' is selected. | Include Manager/Leader in Name is only valid for organizations of certain organization types. | The organization type for an existing organization cannot be changed. | Multiple
 * Organizations are referenced by the same ID. | Organization Subtype is required when creating a new Organization. | VLD DOC: Check Avail. Date. | Encapsulating element containing all Organization data.
 * @subpackage Structs
 */
class Organization_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Organization Reference ID. To ensure backward compatibility, the Organization Reference ID element will not be populated on outbound data (i.e. Get Organization web service) for Workday 9 and earlier versions. It will be populated
     * with on outbound data starting with Workday 10.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Reference_ID;
    /**
     * The Include_Organization_ID_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Organization ID within the name (Display ID within Workday). A new effective-dated organization name is automatically created if value for this field is different as of specified
     * effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organization_ID_in_Name;
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Integration ID Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Organization Name. A new effective-dated organization name is automatically created if value for this field is different as of specified effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name;
    /**
     * The Availability_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Organization is available for staffing events.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Availability_Date;
    /**
     * The Include_Organization_Code_In_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Organization Code within the name (Display ID within Workday). A new effective-dated organization name is automatically created if value for this field is different as of specified
     * effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organization_Code_In_Name;
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
     * The Include_Leader_In_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Manager/Leader Name within the name (Display ID in Workday). A new effective-dated organization name is automatically created if value for this field is different as of specified
     * effective date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Leader_In_Name;
    /**
     * The Frozen_Status
     * Meta information extracted from the WSDL
     * - documentation: Element containing boolean attribute identifying whether a Hiring Freeze is currently in affect.
     * - minOccurs: 0
     * @var bool
     */
    public $Frozen_Status;
    /**
     * The Job_Management_Enabled
     * Meta information extracted from the WSDL
     * - documentation: Boolean element identifying whether Job Management is enabled.
     * - minOccurs: 0
     * @var bool
     */
    public $Job_Management_Enabled;
    /**
     * The Position_Management_Enabled
     * Meta information extracted from the WSDL
     * - documentation: Element containing boolean attribute identifying whether Position Management is enabled.
     * - minOccurs: 0
     * @var bool
     */
    public $Position_Management_Enabled;
    /**
     * The Superior_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Superior Organization Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Superior_Organization_Reference;
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Type Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType
     */
    public $Organization_Type_Reference;
    /**
     * The Organization_Subtype_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Subtype Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Subtype_Reference_DataType
     */
    public $Organization_Subtype_Reference;
    /**
     * The Organization_Visibility_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Visibility Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Visibility_Reference_DataType
     */
    public $Organization_Visibility_Reference;
    /**
     * The Primary_Business_Site_Reference
     * Meta information extracted from the WSDL
     * - documentation: Primary location (for supervisory organizations) is effective dated.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Primary_Business_Site_Reference;
    /**
     * The Container_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Container Organization Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Container_Organization_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date. A new effective-dated organization name is automatically created if any attributes used for organization name are different as of specified effective date which include: Organization Name, Organization Code, and
     * Include 'xx' in Name booleans.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Organization_DataType
     * @uses Organization_DataType::setOrganization_Reference_ID()
     * @uses Organization_DataType::setInclude_Organization_ID_in_Name()
     * @uses Organization_DataType::setIntegration_ID_Data()
     * @uses Organization_DataType::setOrganization_Name()
     * @uses Organization_DataType::setAvailability_Date()
     * @uses Organization_DataType::setInclude_Organization_Code_In_Name()
     * @uses Organization_DataType::setOrganization_Code()
     * @uses Organization_DataType::setInclude_Leader_In_Name()
     * @uses Organization_DataType::setFrozen_Status()
     * @uses Organization_DataType::setJob_Management_Enabled()
     * @uses Organization_DataType::setPosition_Management_Enabled()
     * @uses Organization_DataType::setSuperior_Organization_Reference()
     * @uses Organization_DataType::setOrganization_Type_Reference()
     * @uses Organization_DataType::setOrganization_Subtype_Reference()
     * @uses Organization_DataType::setOrganization_Visibility_Reference()
     * @uses Organization_DataType::setPrimary_Business_Site_Reference()
     * @uses Organization_DataType::setContainer_Organization_Reference()
     * @uses Organization_DataType::setEffective_Date()
     * @param string $organization_Reference_ID
     * @param bool $include_Organization_ID_in_Name
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param string $organization_Name
     * @param string $availability_Date
     * @param bool $include_Organization_Code_In_Name
     * @param string $organization_Code
     * @param bool $include_Leader_In_Name
     * @param bool $frozen_Status
     * @param bool $job_Management_Enabled
     * @param bool $position_Management_Enabled
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType $organization_Type_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Subtype_Reference_DataType $organization_Subtype_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Visibility_Reference_DataType $organization_Visibility_Reference
     * @param \WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $container_Organization_Reference
     * @param string $effective_Date
     */
    public function __construct($organization_Reference_ID = null, $include_Organization_ID_in_Name = null, \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, $organization_Name = null, $availability_Date = null, $include_Organization_Code_In_Name = null, $organization_Code = null, $include_Leader_In_Name = null, $frozen_Status = null, $job_Management_Enabled = null, $position_Management_Enabled = null, \WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference = null, \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType $organization_Type_Reference = null, \WorkdayWsdl\\StructType\Organization_Subtype_Reference_DataType $organization_Subtype_Reference = null, \WorkdayWsdl\\StructType\Organization_Visibility_Reference_DataType $organization_Visibility_Reference = null, \WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference = null, array $container_Organization_Reference = array(), $effective_Date = null)
    {
        $this
            ->setOrganization_Reference_ID($organization_Reference_ID)
            ->setInclude_Organization_ID_in_Name($include_Organization_ID_in_Name)
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setOrganization_Name($organization_Name)
            ->setAvailability_Date($availability_Date)
            ->setInclude_Organization_Code_In_Name($include_Organization_Code_In_Name)
            ->setOrganization_Code($organization_Code)
            ->setInclude_Leader_In_Name($include_Leader_In_Name)
            ->setFrozen_Status($frozen_Status)
            ->setJob_Management_Enabled($job_Management_Enabled)
            ->setPosition_Management_Enabled($position_Management_Enabled)
            ->setSuperior_Organization_Reference($superior_Organization_Reference)
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setOrganization_Subtype_Reference($organization_Subtype_Reference)
            ->setOrganization_Visibility_Reference($organization_Visibility_Reference)
            ->setPrimary_Business_Site_Reference($primary_Business_Site_Reference)
            ->setContainer_Organization_Reference($container_Organization_Reference)
            ->setEffective_Date($effective_Date);
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
     * @return \WorkdayWsdl\\StructType\Organization_DataType
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
     * @return \WorkdayWsdl\\StructType\Organization_DataType
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
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
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
     * @return \WorkdayWsdl\\StructType\Organization_DataType
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
     * Get Availability_Date value
     * @return string|null
     */
    public function getAvailability_Date()
    {
        return $this->Availability_Date;
    }
    /**
     * Set Availability_Date value
     * @param string $availability_Date
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setAvailability_Date($availability_Date = null)
    {
        // validation for constraint: string
        if (!is_null($availability_Date) && !is_string($availability_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availability_Date, true), gettype($availability_Date)), __LINE__);
        }
        $this->Availability_Date = $availability_Date;
        return $this;
    }
    /**
     * Get Include_Organization_Code_In_Name value
     * @return bool|null
     */
    public function getInclude_Organization_Code_In_Name()
    {
        return $this->Include_Organization_Code_In_Name;
    }
    /**
     * Set Include_Organization_Code_In_Name value
     * @param bool $include_Organization_Code_In_Name
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setInclude_Organization_Code_In_Name($include_Organization_Code_In_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Organization_Code_In_Name) && !is_bool($include_Organization_Code_In_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Organization_Code_In_Name, true), gettype($include_Organization_Code_In_Name)), __LINE__);
        }
        $this->Include_Organization_Code_In_Name = $include_Organization_Code_In_Name;
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
     * @return \WorkdayWsdl\\StructType\Organization_DataType
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
     * Get Include_Leader_In_Name value
     * @return bool|null
     */
    public function getInclude_Leader_In_Name()
    {
        return $this->Include_Leader_In_Name;
    }
    /**
     * Set Include_Leader_In_Name value
     * @param bool $include_Leader_In_Name
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setInclude_Leader_In_Name($include_Leader_In_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Leader_In_Name) && !is_bool($include_Leader_In_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Leader_In_Name, true), gettype($include_Leader_In_Name)), __LINE__);
        }
        $this->Include_Leader_In_Name = $include_Leader_In_Name;
        return $this;
    }
    /**
     * Get Frozen_Status value
     * @return bool|null
     */
    public function getFrozen_Status()
    {
        return $this->Frozen_Status;
    }
    /**
     * Set Frozen_Status value
     * @param bool $frozen_Status
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setFrozen_Status($frozen_Status = null)
    {
        // validation for constraint: boolean
        if (!is_null($frozen_Status) && !is_bool($frozen_Status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($frozen_Status, true), gettype($frozen_Status)), __LINE__);
        }
        $this->Frozen_Status = $frozen_Status;
        return $this;
    }
    /**
     * Get Job_Management_Enabled value
     * @return bool|null
     */
    public function getJob_Management_Enabled()
    {
        return $this->Job_Management_Enabled;
    }
    /**
     * Set Job_Management_Enabled value
     * @param bool $job_Management_Enabled
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setJob_Management_Enabled($job_Management_Enabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($job_Management_Enabled) && !is_bool($job_Management_Enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($job_Management_Enabled, true), gettype($job_Management_Enabled)), __LINE__);
        }
        $this->Job_Management_Enabled = $job_Management_Enabled;
        return $this;
    }
    /**
     * Get Position_Management_Enabled value
     * @return bool|null
     */
    public function getPosition_Management_Enabled()
    {
        return $this->Position_Management_Enabled;
    }
    /**
     * Set Position_Management_Enabled value
     * @param bool $position_Management_Enabled
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setPosition_Management_Enabled($position_Management_Enabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($position_Management_Enabled) && !is_bool($position_Management_Enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($position_Management_Enabled, true), gettype($position_Management_Enabled)), __LINE__);
        }
        $this->Position_Management_Enabled = $position_Management_Enabled;
        return $this;
    }
    /**
     * Get Superior_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getSuperior_Organization_Reference()
    {
        return $this->Superior_Organization_Reference;
    }
    /**
     * Set Superior_Organization_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setSuperior_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference = null)
    {
        $this->Superior_Organization_Reference = $superior_Organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * Set Organization_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType $organization_Type_Reference
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setOrganization_Type_Reference(\WorkdayWsdl\\StructType\Organization_Type_Reference_DataType $organization_Type_Reference = null)
    {
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
    }
    /**
     * Get Organization_Subtype_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_Subtype_Reference_DataType|null
     */
    public function getOrganization_Subtype_Reference()
    {
        return $this->Organization_Subtype_Reference;
    }
    /**
     * Set Organization_Subtype_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_Subtype_Reference_DataType $organization_Subtype_Reference
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setOrganization_Subtype_Reference(\WorkdayWsdl\\StructType\Organization_Subtype_Reference_DataType $organization_Subtype_Reference = null)
    {
        $this->Organization_Subtype_Reference = $organization_Subtype_Reference;
        return $this;
    }
    /**
     * Get Organization_Visibility_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_Visibility_Reference_DataType|null
     */
    public function getOrganization_Visibility_Reference()
    {
        return $this->Organization_Visibility_Reference;
    }
    /**
     * Set Organization_Visibility_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_Visibility_Reference_DataType $organization_Visibility_Reference
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setOrganization_Visibility_Reference(\WorkdayWsdl\\StructType\Organization_Visibility_Reference_DataType $organization_Visibility_Reference = null)
    {
        $this->Organization_Visibility_Reference = $organization_Visibility_Reference;
        return $this;
    }
    /**
     * Get Primary_Business_Site_Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType|null
     */
    public function getPrimary_Business_Site_Reference()
    {
        return $this->Primary_Business_Site_Reference;
    }
    /**
     * Set Primary_Business_Site_Reference value
     * @param \WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setPrimary_Business_Site_Reference(\WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference = null)
    {
        $this->Primary_Business_Site_Reference = $primary_Business_Site_Reference;
        return $this;
    }
    /**
     * Get Container_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getContainer_Organization_Reference()
    {
        return $this->Container_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setContainer_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContainer_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContainer_Organization_ReferenceForArrayConstraintsFromSetContainer_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_DataTypeContainer_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_DataTypeContainer_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_DataTypeContainer_Organization_ReferenceItem) ? get_class($organization_DataTypeContainer_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_DataTypeContainer_Organization_ReferenceItem), var_export($organization_DataTypeContainer_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Container_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Container_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $container_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function setContainer_Organization_Reference(array $container_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($container_Organization_ReferenceArrayErrorMessage = self::validateContainer_Organization_ReferenceForArrayConstraintsFromSetContainer_Organization_Reference($container_Organization_Reference))) {
            throw new \InvalidArgumentException($container_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Container_Organization_Reference = $container_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Container_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_DataType
     */
    public function addToContainer_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Container_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Container_Organization_Reference[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Organization_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_DataType
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
