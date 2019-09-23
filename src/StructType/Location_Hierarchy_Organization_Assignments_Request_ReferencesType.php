<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Location_Hierarchy_Organization_Assignments_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: References to Location Hierarchies for which to request their Organization Assignments. Can take one or more references
 * @subpackage Structs
 */
class Location_Hierarchy_Organization_Assignments_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Location_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to Location Hierarchy for Organization Assignments.
     * - maxOccurs: unbounded
     * @var \StructType\Location_HierarchyObjectType[]
     */
    public $Location_Hierarchy_Reference;
    /**
     * Constructor method for
     * Location_Hierarchy_Organization_Assignments_Request_ReferencesType
     * @uses Location_Hierarchy_Organization_Assignments_Request_ReferencesType::setLocation_Hierarchy_Reference()
     * @param \StructType\Location_HierarchyObjectType[] $location_Hierarchy_Reference
     */
    public function __construct(array $location_Hierarchy_Reference = array())
    {
        $this
            ->setLocation_Hierarchy_Reference($location_Hierarchy_Reference);
    }
    /**
     * Get Location_Hierarchy_Reference value
     * @return \StructType\Location_HierarchyObjectType[]|null
     */
    public function getLocation_Hierarchy_Reference()
    {
        return $this->Location_Hierarchy_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Hierarchy_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Hierarchy_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Hierarchy_ReferenceForArrayConstraintsFromSetLocation_Hierarchy_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Hierarchy_Organization_Assignments_Request_ReferencesTypeLocation_Hierarchy_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Hierarchy_Organization_Assignments_Request_ReferencesTypeLocation_Hierarchy_ReferenceItem instanceof \StructType\Location_HierarchyObjectType) {
                $invalidValues[] = is_object($location_Hierarchy_Organization_Assignments_Request_ReferencesTypeLocation_Hierarchy_ReferenceItem) ? get_class($location_Hierarchy_Organization_Assignments_Request_ReferencesTypeLocation_Hierarchy_ReferenceItem) : sprintf('%s(%s)', gettype($location_Hierarchy_Organization_Assignments_Request_ReferencesTypeLocation_Hierarchy_ReferenceItem), var_export($location_Hierarchy_Organization_Assignments_Request_ReferencesTypeLocation_Hierarchy_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Hierarchy_Reference property can only contain items of type \StructType\Location_HierarchyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Hierarchy_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_HierarchyObjectType[] $location_Hierarchy_Reference
     * @return \StructType\Location_Hierarchy_Organization_Assignments_Request_ReferencesType
     */
    public function setLocation_Hierarchy_Reference(array $location_Hierarchy_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Hierarchy_ReferenceArrayErrorMessage = self::validateLocation_Hierarchy_ReferenceForArrayConstraintsFromSetLocation_Hierarchy_Reference($location_Hierarchy_Reference))) {
            throw new \InvalidArgumentException($location_Hierarchy_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Hierarchy_Reference = $location_Hierarchy_Reference;
        return $this;
    }
    /**
     * Add item to Location_Hierarchy_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_HierarchyObjectType $item
     * @return \StructType\Location_Hierarchy_Organization_Assignments_Request_ReferencesType
     */
    public function addToLocation_Hierarchy_Reference(\StructType\Location_HierarchyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location_HierarchyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Hierarchy_Reference property can only contain items of type \StructType\Location_HierarchyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Hierarchy_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Hierarchy_Organization_Assignments_Request_ReferencesType
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
