<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Site_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Set of Location Reference elements.
 * @subpackage Structs
 */
class Business_Site_ReferencesType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing an object within the Workday system. The sub-elements and attributes within this element are used to return one and only one instance of the identifying object.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Location_Reference_WWSType[]
     */
    public $Location_Reference;
    /**
     * Constructor method for Business_Site_ReferencesType
     * @uses Business_Site_ReferencesType::setLocation_Reference()
     * @param \StructType\Location_Reference_WWSType[] $location_Reference
     */
    public function __construct(array $location_Reference = array())
    {
        $this
            ->setLocation_Reference($location_Reference);
    }
    /**
     * Get Location_Reference value
     * @return \StructType\Location_Reference_WWSType[]|null
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
        foreach ($values as $business_Site_ReferencesTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$business_Site_ReferencesTypeLocation_ReferenceItem instanceof \StructType\Location_Reference_WWSType) {
                $invalidValues[] = is_object($business_Site_ReferencesTypeLocation_ReferenceItem) ? get_class($business_Site_ReferencesTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($business_Site_ReferencesTypeLocation_ReferenceItem), var_export($business_Site_ReferencesTypeLocation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Reference property can only contain items of type \StructType\Location_Reference_WWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_Reference_WWSType[] $location_Reference
     * @return \StructType\Business_Site_ReferencesType
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
     * @param \StructType\Location_Reference_WWSType $item
     * @return \StructType\Business_Site_ReferencesType
     */
    public function addToLocation_Reference(\StructType\Location_Reference_WWSType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location_Reference_WWSType) {
            throw new \InvalidArgumentException(sprintf('The Location_Reference property can only contain items of type \StructType\Location_Reference_WWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Business_Site_ReferencesType
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
