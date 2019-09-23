<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LGBT_Identification_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of LGBT Identifications and its associated data.
 * @subpackage Structs
 */
class LGBT_Identification_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The LGBT_Identification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a LGBT Identification
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType[]
     */
    public $LGBT_Identification_Reference;
    /**
     * Constructor method for LGBT_Identification_Request_ReferencesType
     * @uses LGBT_Identification_Request_ReferencesType::setLGBT_Identification_Reference()
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType[] $lGBT_Identification_Reference
     */
    public function __construct(array $lGBT_Identification_Reference = array())
    {
        $this
            ->setLGBT_Identification_Reference($lGBT_Identification_Reference);
    }
    /**
     * Get LGBT_Identification_Reference value
     * @return \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType[]|null
     */
    public function getLGBT_Identification_Reference()
    {
        return $this->LGBT_Identification_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLGBT_Identification_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLGBT_Identification_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLGBT_Identification_ReferenceForArrayConstraintsFromSetLGBT_Identification_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $lGBT_Identification_Request_ReferencesTypeLGBT_Identification_ReferenceItem) {
            // validation for constraint: itemType
            if (!$lGBT_Identification_Request_ReferencesTypeLGBT_Identification_ReferenceItem instanceof \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType) {
                $invalidValues[] = is_object($lGBT_Identification_Request_ReferencesTypeLGBT_Identification_ReferenceItem) ? get_class($lGBT_Identification_Request_ReferencesTypeLGBT_Identification_ReferenceItem) : sprintf('%s(%s)', gettype($lGBT_Identification_Request_ReferencesTypeLGBT_Identification_ReferenceItem), var_export($lGBT_Identification_Request_ReferencesTypeLGBT_Identification_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LGBT_Identification_Reference property can only contain items of type \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LGBT_Identification_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType[] $lGBT_Identification_Reference
     * @return \WorkdayWsdl\\StructType\LGBT_Identification_Request_ReferencesType
     */
    public function setLGBT_Identification_Reference(array $lGBT_Identification_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($lGBT_Identification_ReferenceArrayErrorMessage = self::validateLGBT_Identification_ReferenceForArrayConstraintsFromSetLGBT_Identification_Reference($lGBT_Identification_Reference))) {
            throw new \InvalidArgumentException($lGBT_Identification_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->LGBT_Identification_Reference = $lGBT_Identification_Reference;
        return $this;
    }
    /**
     * Add item to LGBT_Identification_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $item
     * @return \WorkdayWsdl\\StructType\LGBT_Identification_Request_ReferencesType
     */
    public function addToLGBT_Identification_Reference(\WorkdayWsdl\\StructType\LGBT_IdentificationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType) {
            throw new \InvalidArgumentException(sprintf('The LGBT_Identification_Reference property can only contain items of type \WorkdayWsdl\\StructType\LGBT_IdentificationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LGBT_Identification_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\LGBT_Identification_Request_ReferencesType
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
