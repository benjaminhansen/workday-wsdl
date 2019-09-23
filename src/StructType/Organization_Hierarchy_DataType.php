<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Hierarchy_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information regarding organizations just adjacent in the hierarchy.
 * @subpackage Structs
 */
class Organization_Hierarchy_DataType extends AbstractStructBase
{
    /**
     * The Top_Level_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference information for the top-level node.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Top_Level_Organization_Reference;
    /**
     * The Superior_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference information for immediately superior Organization to the current Organization. Will only appear for Hierarchical Organizations.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Superior_Organization_Reference;
    /**
     * The Subordinate_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference information for all Organizations immediately subordinate to the current Organization. Will only appear for Hierarchical Organizations.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Subordinate_Organization_Reference;
    /**
     * The Included_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference information for all included Organizations. Will only appear for Hierarchical Organizations that include other organizations as members.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Included_Organization_Reference;
    /**
     * The Included_In_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference information for Organizations that include this Organization in their Organization hierarchy
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Included_In_Organization_Reference;
    /**
     * Constructor method for Organization_Hierarchy_DataType
     * @uses Organization_Hierarchy_DataType::setTop_Level_Organization_Reference()
     * @uses Organization_Hierarchy_DataType::setSuperior_Organization_Reference()
     * @uses Organization_Hierarchy_DataType::setSubordinate_Organization_Reference()
     * @uses Organization_Hierarchy_DataType::setIncluded_Organization_Reference()
     * @uses Organization_Hierarchy_DataType::setIncluded_In_Organization_Reference()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $top_Level_Organization_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $subordinate_Organization_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $included_Organization_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $included_In_Organization_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $top_Level_Organization_Reference = null, \WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference = null, array $subordinate_Organization_Reference = array(), array $included_Organization_Reference = array(), array $included_In_Organization_Reference = array())
    {
        $this
            ->setTop_Level_Organization_Reference($top_Level_Organization_Reference)
            ->setSuperior_Organization_Reference($superior_Organization_Reference)
            ->setSubordinate_Organization_Reference($subordinate_Organization_Reference)
            ->setIncluded_Organization_Reference($included_Organization_Reference)
            ->setIncluded_In_Organization_Reference($included_In_Organization_Reference);
    }
    /**
     * Get Top_Level_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getTop_Level_Organization_Reference()
    {
        return $this->{'Top-Level_Organization_Reference'};
    }
    /**
     * Set Top_Level_Organization_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $top_Level_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function setTop_Level_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $top_Level_Organization_Reference = null)
    {
        $this->Top_Level_Organization_Reference = $this->{'Top-Level_Organization_Reference'} = $top_Level_Organization_Reference;
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
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function setSuperior_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $superior_Organization_Reference = null)
    {
        $this->Superior_Organization_Reference = $superior_Organization_Reference;
        return $this;
    }
    /**
     * Get Subordinate_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getSubordinate_Organization_Reference()
    {
        return $this->Subordinate_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSubordinate_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubordinate_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubordinate_Organization_ReferenceForArrayConstraintsFromSetSubordinate_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Hierarchy_DataTypeSubordinate_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Hierarchy_DataTypeSubordinate_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Hierarchy_DataTypeSubordinate_Organization_ReferenceItem) ? get_class($organization_Hierarchy_DataTypeSubordinate_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Hierarchy_DataTypeSubordinate_Organization_ReferenceItem), var_export($organization_Hierarchy_DataTypeSubordinate_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subordinate_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subordinate_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $subordinate_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function setSubordinate_Organization_Reference(array $subordinate_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($subordinate_Organization_ReferenceArrayErrorMessage = self::validateSubordinate_Organization_ReferenceForArrayConstraintsFromSetSubordinate_Organization_Reference($subordinate_Organization_Reference))) {
            throw new \InvalidArgumentException($subordinate_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Subordinate_Organization_Reference = $subordinate_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Subordinate_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function addToSubordinate_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Subordinate_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subordinate_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Included_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getIncluded_Organization_Reference()
    {
        return $this->Included_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setIncluded_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncluded_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncluded_Organization_ReferenceForArrayConstraintsFromSetIncluded_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Hierarchy_DataTypeIncluded_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Hierarchy_DataTypeIncluded_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Hierarchy_DataTypeIncluded_Organization_ReferenceItem) ? get_class($organization_Hierarchy_DataTypeIncluded_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Hierarchy_DataTypeIncluded_Organization_ReferenceItem), var_export($organization_Hierarchy_DataTypeIncluded_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Included_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Included_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $included_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function setIncluded_Organization_Reference(array $included_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($included_Organization_ReferenceArrayErrorMessage = self::validateIncluded_Organization_ReferenceForArrayConstraintsFromSetIncluded_Organization_Reference($included_Organization_Reference))) {
            throw new \InvalidArgumentException($included_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Included_Organization_Reference = $included_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Included_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function addToIncluded_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Included_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Included_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Included_In_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getIncluded_In_Organization_Reference()
    {
        return $this->Included_In_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setIncluded_In_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncluded_In_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncluded_In_Organization_ReferenceForArrayConstraintsFromSetIncluded_In_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Hierarchy_DataTypeIncluded_In_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Hierarchy_DataTypeIncluded_In_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Hierarchy_DataTypeIncluded_In_Organization_ReferenceItem) ? get_class($organization_Hierarchy_DataTypeIncluded_In_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Hierarchy_DataTypeIncluded_In_Organization_ReferenceItem), var_export($organization_Hierarchy_DataTypeIncluded_In_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Included_In_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Included_In_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $included_In_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function setIncluded_In_Organization_Reference(array $included_In_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($included_In_Organization_ReferenceArrayErrorMessage = self::validateIncluded_In_Organization_ReferenceForArrayConstraintsFromSetIncluded_In_Organization_Reference($included_In_Organization_Reference))) {
            throw new \InvalidArgumentException($included_In_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Included_In_Organization_Reference = $included_In_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Included_In_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
     */
    public function addToIncluded_In_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Included_In_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Included_In_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Hierarchy_DataType
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
