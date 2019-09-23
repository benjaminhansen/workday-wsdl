<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the details about the organization.
 * @subpackage Structs
 */
class Organization_Summary_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: The Organization Reference ID for the organization.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Reference_ID;
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
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType[]
     */
    public $Integration_ID_Data;
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the organization.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name;
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
     * The Primary_Business_Site_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the primary location of the organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Primary_Business_Site_Reference;
    /**
     * The Organization_Support_Role_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Support_RoleType
     */
    public $Organization_Support_Role_Data;
    /**
     * The Date_of_Pay_Group_Assignment
     * Meta information extracted from the WSDL
     * - documentation: The Date the Pay Group was assigned to the Payee.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Pay_Group_Assignment;
    /**
     * The Used_in_Change_Organization_Assignments
     * Meta information extracted from the WSDL
     * - documentation: Returns true if this organization type is used in the Change Organizations business process.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Used_in_Change_Organization_Assignments;
    /**
     * Constructor method for Organization_Summary_DataType
     * @uses Organization_Summary_DataType::setOrganization_Reference_ID()
     * @uses Organization_Summary_DataType::setOrganization_Code()
     * @uses Organization_Summary_DataType::setIntegration_ID_Data()
     * @uses Organization_Summary_DataType::setOrganization_Name()
     * @uses Organization_Summary_DataType::setOrganization_Type_Reference()
     * @uses Organization_Summary_DataType::setOrganization_Subtype_Reference()
     * @uses Organization_Summary_DataType::setPrimary_Business_Site_Reference()
     * @uses Organization_Summary_DataType::setOrganization_Support_Role_Data()
     * @uses Organization_Summary_DataType::setDate_of_Pay_Group_Assignment()
     * @uses Organization_Summary_DataType::setUsed_in_Change_Organization_Assignments()
     * @param string $organization_Reference_ID
     * @param string $organization_Code
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType[] $integration_ID_Data
     * @param string $organization_Name
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference
     * @param \WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference
     * @param \WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Support_RoleType $organization_Support_Role_Data
     * @param string $date_of_Pay_Group_Assignment
     * @param bool $used_in_Change_Organization_Assignments
     */
    public function __construct($organization_Reference_ID = null, $organization_Code = null, array $integration_ID_Data = array(), $organization_Name = null, \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference = null, \WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference = null, \WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference = null, \WorkdayWsdl\\StructType\Organization_Support_RoleType $organization_Support_Role_Data = null, $date_of_Pay_Group_Assignment = null, $used_in_Change_Organization_Assignments = null)
    {
        $this
            ->setOrganization_Reference_ID($organization_Reference_ID)
            ->setOrganization_Code($organization_Code)
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setOrganization_Name($organization_Name)
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setOrganization_Subtype_Reference($organization_Subtype_Reference)
            ->setPrimary_Business_Site_Reference($primary_Business_Site_Reference)
            ->setOrganization_Support_Role_Data($organization_Support_Role_Data)
            ->setDate_of_Pay_Group_Assignment($date_of_Pay_Group_Assignment)
            ->setUsed_in_Change_Organization_Assignments($used_in_Change_Organization_Assignments);
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
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
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
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
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
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType[]|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setIntegration_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIntegration_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntegration_ID_DataForArrayConstraintsFromSetIntegration_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Summary_DataTypeIntegration_ID_DataItem) {
            // validation for constraint: itemType
            if (!$organization_Summary_DataTypeIntegration_ID_DataItem instanceof \WorkdayWsdl\\StructType\External_Integration_ID_DataType) {
                $invalidValues[] = is_object($organization_Summary_DataTypeIntegration_ID_DataItem) ? get_class($organization_Summary_DataTypeIntegration_ID_DataItem) : sprintf('%s(%s)', gettype($organization_Summary_DataTypeIntegration_ID_DataItem), var_export($organization_Summary_DataTypeIntegration_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Integration_ID_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Integration_ID_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Integration_ID_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType[] $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function setIntegration_ID_Data(array $integration_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($integration_ID_DataArrayErrorMessage = self::validateIntegration_ID_DataForArrayConstraintsFromSetIntegration_ID_Data($integration_ID_Data))) {
            throw new \InvalidArgumentException($integration_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Add item to Integration_ID_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $item
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function addToIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Integration_ID_DataType) {
            throw new \InvalidArgumentException(sprintf('The Integration_ID_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Integration_ID_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Integration_ID_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
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
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
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
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function setOrganization_Subtype_Reference(\WorkdayWsdl\\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference = null)
    {
        $this->Organization_Subtype_Reference = $organization_Subtype_Reference;
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
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function setPrimary_Business_Site_Reference(\WorkdayWsdl\\StructType\LocationObjectType $primary_Business_Site_Reference = null)
    {
        $this->Primary_Business_Site_Reference = $primary_Business_Site_Reference;
        return $this;
    }
    /**
     * Get Organization_Support_Role_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Support_RoleType|null
     */
    public function getOrganization_Support_Role_Data()
    {
        return $this->Organization_Support_Role_Data;
    }
    /**
     * Set Organization_Support_Role_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Support_RoleType $organization_Support_Role_Data
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function setOrganization_Support_Role_Data(\WorkdayWsdl\\StructType\Organization_Support_RoleType $organization_Support_Role_Data = null)
    {
        $this->Organization_Support_Role_Data = $organization_Support_Role_Data;
        return $this;
    }
    /**
     * Get Date_of_Pay_Group_Assignment value
     * @return string|null
     */
    public function getDate_of_Pay_Group_Assignment()
    {
        return $this->Date_of_Pay_Group_Assignment;
    }
    /**
     * Set Date_of_Pay_Group_Assignment value
     * @param string $date_of_Pay_Group_Assignment
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function setDate_of_Pay_Group_Assignment($date_of_Pay_Group_Assignment = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Pay_Group_Assignment) && !is_string($date_of_Pay_Group_Assignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Pay_Group_Assignment, true), gettype($date_of_Pay_Group_Assignment)), __LINE__);
        }
        $this->Date_of_Pay_Group_Assignment = $date_of_Pay_Group_Assignment;
        return $this;
    }
    /**
     * Get Used_in_Change_Organization_Assignments value
     * @return bool|null
     */
    public function getUsed_in_Change_Organization_Assignments()
    {
        return $this->Used_in_Change_Organization_Assignments;
    }
    /**
     * Set Used_in_Change_Organization_Assignments value
     * @param bool $used_in_Change_Organization_Assignments
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public function setUsed_in_Change_Organization_Assignments($used_in_Change_Organization_Assignments = null)
    {
        // validation for constraint: boolean
        if (!is_null($used_in_Change_Organization_Assignments) && !is_bool($used_in_Change_Organization_Assignments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($used_in_Change_Organization_Assignments, true), gettype($used_in_Change_Organization_Assignments)), __LINE__);
        }
        $this->Used_in_Change_Organization_Assignments = $used_in_Change_Organization_Assignments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType
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
