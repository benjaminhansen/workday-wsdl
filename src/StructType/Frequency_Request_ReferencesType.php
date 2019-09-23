<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Frequency_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: "References" element allowing the specification of specific object instances to be returned based on ID values.
 * @subpackage Structs
 */
class Frequency_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to a specific Frequency based on its unique ID (Frequency ID or Workday ID).
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType[]
     */
    public $Frequency_Reference;
    /**
     * Constructor method for Frequency_Request_ReferencesType
     * @uses Frequency_Request_ReferencesType::setFrequency_Reference()
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType[] $frequency_Reference
     */
    public function __construct(array $frequency_Reference = array())
    {
        $this
            ->setFrequency_Reference($frequency_Reference);
    }
    /**
     * Get Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\FrequencyObjectType[]|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setFrequency_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFrequency_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFrequency_ReferenceForArrayConstraintsFromSetFrequency_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $frequency_Request_ReferencesTypeFrequency_ReferenceItem) {
            // validation for constraint: itemType
            if (!$frequency_Request_ReferencesTypeFrequency_ReferenceItem instanceof \WorkdayWsdl\\StructType\FrequencyObjectType) {
                $invalidValues[] = is_object($frequency_Request_ReferencesTypeFrequency_ReferenceItem) ? get_class($frequency_Request_ReferencesTypeFrequency_ReferenceItem) : sprintf('%s(%s)', gettype($frequency_Request_ReferencesTypeFrequency_ReferenceItem), var_export($frequency_Request_ReferencesTypeFrequency_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Frequency_Reference property can only contain items of type \WorkdayWsdl\\StructType\FrequencyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Frequency_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType[] $frequency_Reference
     * @return \WorkdayWsdl\\StructType\Frequency_Request_ReferencesType
     */
    public function setFrequency_Reference(array $frequency_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($frequency_ReferenceArrayErrorMessage = self::validateFrequency_ReferenceForArrayConstraintsFromSetFrequency_Reference($frequency_Reference))) {
            throw new \InvalidArgumentException($frequency_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Add item to Frequency_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $item
     * @return \WorkdayWsdl\\StructType\Frequency_Request_ReferencesType
     */
    public function addToFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\FrequencyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Frequency_Reference property can only contain items of type \WorkdayWsdl\\StructType\FrequencyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Frequency_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Frequency_Request_ReferencesType
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
