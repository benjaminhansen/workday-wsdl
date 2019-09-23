<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing reference to a specific Location.
 * @subpackage Structs
 */
class Location_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a specific Location to return.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LocationObjectType[]
     */
    public $Location_Reference;
    /**
     * The Skip_Non_Existing_Instances
     * @var bool
     */
    public $Skip_Non_Existing_Instances;
    /**
     * Constructor method for Location_Request_ReferencesType
     * @uses Location_Request_ReferencesType::setLocation_Reference()
     * @uses Location_Request_ReferencesType::setSkip_Non_Existing_Instances()
     * @param \StructType\LocationObjectType[] $location_Reference
     * @param bool $skip_Non_Existing_Instances
     */
    public function __construct(array $location_Reference = array(), $skip_Non_Existing_Instances = null)
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setSkip_Non_Existing_Instances($skip_Non_Existing_Instances);
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType[]|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Request_ReferencesTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Request_ReferencesTypeLocation_ReferenceItem instanceof \StructType\LocationObjectType) {
                $invalidValues[] = is_object($location_Request_ReferencesTypeLocation_ReferenceItem) ? get_class($location_Request_ReferencesTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($location_Request_ReferencesTypeLocation_ReferenceItem), var_export($location_Request_ReferencesTypeLocation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType[] $location_Reference
     * @return \StructType\Location_Request_ReferencesType
     */
    public function setLocation_Reference(array $location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_ReferenceArrayErrorMessage = self::validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference($location_Reference))) {
            throw new \InvalidArgumentException($location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Add item to Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType $item
     * @return \StructType\Location_Request_ReferencesType
     */
    public function addToLocation_Reference(\StructType\LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Reference[] = $item;
        return $this;
    }
    /**
     * Get Skip_Non_Existing_Instances value
     * @return bool|null
     */
    public function getSkip_Non_Existing_Instances()
    {
        return $this->Skip_Non_Existing_Instances;
    }
    /**
     * Set Skip_Non_Existing_Instances value
     * @param bool $skip_Non_Existing_Instances
     * @return \StructType\Location_Request_ReferencesType
     */
    public function setSkip_Non_Existing_Instances($skip_Non_Existing_Instances = null)
    {
        // validation for constraint: boolean
        if (!is_null($skip_Non_Existing_Instances) && !is_bool($skip_Non_Existing_Instances)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skip_Non_Existing_Instances, true), gettype($skip_Non_Existing_Instances)), __LINE__);
        }
        $this->Skip_Non_Existing_Instances = $skip_Non_Existing_Instances;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Request_ReferencesType
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
