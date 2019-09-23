<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Location_Request_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Safety Incident Location Request Reference
 * @subpackage Structs
 */
class Safety_Incident_Location_Request_ReferenceType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType[]
     */
    public $Safety_Incident_Location_Reference;
    /**
     * Constructor method for Safety_Incident_Location_Request_ReferenceType
     * @uses Safety_Incident_Location_Request_ReferenceType::setSafety_Incident_Location_Reference()
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType[] $safety_Incident_Location_Reference
     */
    public function __construct(array $safety_Incident_Location_Reference = array())
    {
        $this
            ->setSafety_Incident_Location_Reference($safety_Incident_Location_Reference);
    }
    /**
     * Get Safety_Incident_Location_Reference value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType[]|null
     */
    public function getSafety_Incident_Location_Reference()
    {
        return $this->Safety_Incident_Location_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSafety_Incident_Location_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSafety_Incident_Location_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSafety_Incident_Location_ReferenceForArrayConstraintsFromSetSafety_Incident_Location_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Location_Request_ReferenceTypeSafety_Incident_Location_ReferenceItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Location_Request_ReferenceTypeSafety_Incident_Location_ReferenceItem instanceof \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType) {
                $invalidValues[] = is_object($safety_Incident_Location_Request_ReferenceTypeSafety_Incident_Location_ReferenceItem) ? get_class($safety_Incident_Location_Request_ReferenceTypeSafety_Incident_Location_ReferenceItem) : sprintf('%s(%s)', gettype($safety_Incident_Location_Request_ReferenceTypeSafety_Incident_Location_ReferenceItem), var_export($safety_Incident_Location_Request_ReferenceTypeSafety_Incident_Location_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Safety_Incident_Location_Reference property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Safety_Incident_Location_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType[] $safety_Incident_Location_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Location_Request_ReferenceType
     */
    public function setSafety_Incident_Location_Reference(array $safety_Incident_Location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($safety_Incident_Location_ReferenceArrayErrorMessage = self::validateSafety_Incident_Location_ReferenceForArrayConstraintsFromSetSafety_Incident_Location_Reference($safety_Incident_Location_Reference))) {
            throw new \InvalidArgumentException($safety_Incident_Location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Safety_Incident_Location_Reference = $safety_Incident_Location_Reference;
        return $this;
    }
    /**
     * Add item to Safety_Incident_Location_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $item
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Location_Request_ReferenceType
     */
    public function addToSafety_Incident_Location_Reference(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Safety_Incident_Location_Reference property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Safety_Incident_Location_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Location_Request_ReferenceType
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
