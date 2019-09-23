<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Location_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Safety Incident Location Response Data
 * @subpackage Structs
 */
class Safety_Incident_Location_Response_DataType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Location
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_LocationType[]
     */
    public $Safety_Incident_Location;
    /**
     * Constructor method for Safety_Incident_Location_Response_DataType
     * @uses Safety_Incident_Location_Response_DataType::setSafety_Incident_Location()
     * @param \StructType\Safety_Incident_LocationType[] $safety_Incident_Location
     */
    public function __construct(array $safety_Incident_Location = array())
    {
        $this
            ->setSafety_Incident_Location($safety_Incident_Location);
    }
    /**
     * Get Safety_Incident_Location value
     * @return \StructType\Safety_Incident_LocationType[]|null
     */
    public function getSafety_Incident_Location()
    {
        return $this->Safety_Incident_Location;
    }
    /**
     * This method is responsible for validating the values passed to the setSafety_Incident_Location method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSafety_Incident_Location method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSafety_Incident_LocationForArrayConstraintsFromSetSafety_Incident_Location(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Location_Response_DataTypeSafety_Incident_LocationItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Location_Response_DataTypeSafety_Incident_LocationItem instanceof \StructType\Safety_Incident_LocationType) {
                $invalidValues[] = is_object($safety_Incident_Location_Response_DataTypeSafety_Incident_LocationItem) ? get_class($safety_Incident_Location_Response_DataTypeSafety_Incident_LocationItem) : sprintf('%s(%s)', gettype($safety_Incident_Location_Response_DataTypeSafety_Incident_LocationItem), var_export($safety_Incident_Location_Response_DataTypeSafety_Incident_LocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Safety_Incident_Location property can only contain items of type \StructType\Safety_Incident_LocationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Safety_Incident_Location value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_LocationType[] $safety_Incident_Location
     * @return \StructType\Safety_Incident_Location_Response_DataType
     */
    public function setSafety_Incident_Location(array $safety_Incident_Location = array())
    {
        // validation for constraint: array
        if ('' !== ($safety_Incident_LocationArrayErrorMessage = self::validateSafety_Incident_LocationForArrayConstraintsFromSetSafety_Incident_Location($safety_Incident_Location))) {
            throw new \InvalidArgumentException($safety_Incident_LocationArrayErrorMessage, __LINE__);
        }
        $this->Safety_Incident_Location = $safety_Incident_Location;
        return $this;
    }
    /**
     * Add item to Safety_Incident_Location value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_LocationType $item
     * @return \StructType\Safety_Incident_Location_Response_DataType
     */
    public function addToSafety_Incident_Location(\StructType\Safety_Incident_LocationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_Incident_LocationType) {
            throw new \InvalidArgumentException(sprintf('The Safety_Incident_Location property can only contain items of type \StructType\Safety_Incident_LocationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Safety_Incident_Location[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Safety_Incident_Location_Response_DataType
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
