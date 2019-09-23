<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Name_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Request Criteria
 * @subpackage Structs
 */
class Organization_Name_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Organization_Name_in_Effect_From
     * Meta information extracted from the WSDL
     * - documentation: The start date of a date range. If Org Name In Effect From and Org Name In Effect To are both empty, organization name as of the current date is retrieved. If both dates are filled, all the organization names in effect within the
     * date range are retrieved. If From date is filled and To date is empty, all organization names in effect as of and including the From date are retrieved. If From date is empty and To date is filled, all organization names in effect up to and including
     * the To date are retrieved.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name_in_Effect_From;
    /**
     * The Organization_Name_in_Effect_To
     * Meta information extracted from the WSDL
     * - documentation: The end date of a date range. Refer to field description for "Org Name In Effect From" for how these two dates work together.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name_in_Effect_To;
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: This element allows you to filter the organizations retrieved by type. This is an optional parameter. Ignored if an organization is specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_TypeObjectType[]
     */
    public $Organization_Type_Reference;
    /**
     * The Include_Inactive
     * Meta information extracted from the WSDL
     * - documentation: Set this attribute to true to include Inactive Organizations in your results. Default is to not include. This is an optional parameter. Ignored if an organization is specified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Inactive;
    /**
     * Constructor method for Organization_Name_Request_CriteriaType
     * @uses Organization_Name_Request_CriteriaType::setOrganization_Name_in_Effect_From()
     * @uses Organization_Name_Request_CriteriaType::setOrganization_Name_in_Effect_To()
     * @uses Organization_Name_Request_CriteriaType::setOrganization_Type_Reference()
     * @uses Organization_Name_Request_CriteriaType::setInclude_Inactive()
     * @param string $organization_Name_in_Effect_From
     * @param string $organization_Name_in_Effect_To
     * @param \StructType\Organization_TypeObjectType[] $organization_Type_Reference
     * @param bool $include_Inactive
     */
    public function __construct($organization_Name_in_Effect_From = null, $organization_Name_in_Effect_To = null, array $organization_Type_Reference = array(), $include_Inactive = null)
    {
        $this
            ->setOrganization_Name_in_Effect_From($organization_Name_in_Effect_From)
            ->setOrganization_Name_in_Effect_To($organization_Name_in_Effect_To)
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setInclude_Inactive($include_Inactive);
    }
    /**
     * Get Organization_Name_in_Effect_From value
     * @return string|null
     */
    public function getOrganization_Name_in_Effect_From()
    {
        return $this->Organization_Name_in_Effect_From;
    }
    /**
     * Set Organization_Name_in_Effect_From value
     * @param string $organization_Name_in_Effect_From
     * @return \StructType\Organization_Name_Request_CriteriaType
     */
    public function setOrganization_Name_in_Effect_From($organization_Name_in_Effect_From = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name_in_Effect_From) && !is_string($organization_Name_in_Effect_From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name_in_Effect_From, true), gettype($organization_Name_in_Effect_From)), __LINE__);
        }
        $this->Organization_Name_in_Effect_From = $organization_Name_in_Effect_From;
        return $this;
    }
    /**
     * Get Organization_Name_in_Effect_To value
     * @return string|null
     */
    public function getOrganization_Name_in_Effect_To()
    {
        return $this->Organization_Name_in_Effect_To;
    }
    /**
     * Set Organization_Name_in_Effect_To value
     * @param string $organization_Name_in_Effect_To
     * @return \StructType\Organization_Name_Request_CriteriaType
     */
    public function setOrganization_Name_in_Effect_To($organization_Name_in_Effect_To = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name_in_Effect_To) && !is_string($organization_Name_in_Effect_To)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name_in_Effect_To, true), gettype($organization_Name_in_Effect_To)), __LINE__);
        }
        $this->Organization_Name_in_Effect_To = $organization_Name_in_Effect_To;
        return $this;
    }
    /**
     * Get Organization_Type_Reference value
     * @return \StructType\Organization_TypeObjectType[]|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Type_ReferenceForArrayConstraintsFromSetOrganization_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Name_Request_CriteriaTypeOrganization_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Name_Request_CriteriaTypeOrganization_Type_ReferenceItem instanceof \StructType\Organization_TypeObjectType) {
                $invalidValues[] = is_object($organization_Name_Request_CriteriaTypeOrganization_Type_ReferenceItem) ? get_class($organization_Name_Request_CriteriaTypeOrganization_Type_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Name_Request_CriteriaTypeOrganization_Type_ReferenceItem), var_export($organization_Name_Request_CriteriaTypeOrganization_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Type_Reference property can only contain items of type \StructType\Organization_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_TypeObjectType[] $organization_Type_Reference
     * @return \StructType\Organization_Name_Request_CriteriaType
     */
    public function setOrganization_Type_Reference(array $organization_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Type_ReferenceArrayErrorMessage = self::validateOrganization_Type_ReferenceForArrayConstraintsFromSetOrganization_Type_Reference($organization_Type_Reference))) {
            throw new \InvalidArgumentException($organization_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_TypeObjectType $item
     * @return \StructType\Organization_Name_Request_CriteriaType
     */
    public function addToOrganization_Type_Reference(\StructType\Organization_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Type_Reference property can only contain items of type \StructType\Organization_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Include_Inactive value
     * @return bool|null
     */
    public function getInclude_Inactive()
    {
        return $this->Include_Inactive;
    }
    /**
     * Set Include_Inactive value
     * @param bool $include_Inactive
     * @return \StructType\Organization_Name_Request_CriteriaType
     */
    public function setInclude_Inactive($include_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Inactive) && !is_bool($include_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Inactive, true), gettype($include_Inactive)), __LINE__);
        }
        $this->Include_Inactive = $include_Inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Name_Request_CriteriaType
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
