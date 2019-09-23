<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Safety Incident Request Reference
 * @subpackage Structs
 */
class Safety_Incident_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Reference
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Reference
     * - maxOccurs: unbounded
     * @var \StructType\Safety_IncidentObjectType[]
     */
    public $Safety_Incident_Reference;
    /**
     * Constructor method for Safety_Incident_Request_ReferencesType
     * @uses Safety_Incident_Request_ReferencesType::setSafety_Incident_Reference()
     * @param \StructType\Safety_IncidentObjectType[] $safety_Incident_Reference
     */
    public function __construct(array $safety_Incident_Reference = array())
    {
        $this
            ->setSafety_Incident_Reference($safety_Incident_Reference);
    }
    /**
     * Get Safety_Incident_Reference value
     * @return \StructType\Safety_IncidentObjectType[]|null
     */
    public function getSafety_Incident_Reference()
    {
        return $this->Safety_Incident_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSafety_Incident_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSafety_Incident_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSafety_Incident_ReferenceForArrayConstraintsFromSetSafety_Incident_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Request_ReferencesTypeSafety_Incident_ReferenceItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Request_ReferencesTypeSafety_Incident_ReferenceItem instanceof \StructType\Safety_IncidentObjectType) {
                $invalidValues[] = is_object($safety_Incident_Request_ReferencesTypeSafety_Incident_ReferenceItem) ? get_class($safety_Incident_Request_ReferencesTypeSafety_Incident_ReferenceItem) : sprintf('%s(%s)', gettype($safety_Incident_Request_ReferencesTypeSafety_Incident_ReferenceItem), var_export($safety_Incident_Request_ReferencesTypeSafety_Incident_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Safety_Incident_Reference property can only contain items of type \StructType\Safety_IncidentObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Safety_Incident_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_IncidentObjectType[] $safety_Incident_Reference
     * @return \StructType\Safety_Incident_Request_ReferencesType
     */
    public function setSafety_Incident_Reference(array $safety_Incident_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($safety_Incident_ReferenceArrayErrorMessage = self::validateSafety_Incident_ReferenceForArrayConstraintsFromSetSafety_Incident_Reference($safety_Incident_Reference))) {
            throw new \InvalidArgumentException($safety_Incident_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Safety_Incident_Reference = $safety_Incident_Reference;
        return $this;
    }
    /**
     * Add item to Safety_Incident_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_IncidentObjectType $item
     * @return \StructType\Safety_Incident_Request_ReferencesType
     */
    public function addToSafety_Incident_Reference(\StructType\Safety_IncidentObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_IncidentObjectType) {
            throw new \InvalidArgumentException(sprintf('The Safety_Incident_Reference property can only contain items of type \StructType\Safety_IncidentObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Safety_Incident_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Safety_Incident_Request_ReferencesType
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
