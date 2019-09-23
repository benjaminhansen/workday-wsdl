<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Frequency_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the core response data based on the request submitted
 * @subpackage Structs
 */
class Frequency_Response_DataType extends AbstractStructBase
{
    /**
     * The Frequency
     * Meta information extracted from the WSDL
     * - documentation: Contains the data for a single frequency
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\FrequencyType[]
     */
    public $Frequency;
    /**
     * Constructor method for Frequency_Response_DataType
     * @uses Frequency_Response_DataType::setFrequency()
     * @param \StructType\FrequencyType[] $frequency
     */
    public function __construct(array $frequency = array())
    {
        $this
            ->setFrequency($frequency);
    }
    /**
     * Get Frequency value
     * @return \StructType\FrequencyType[]|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * This method is responsible for validating the values passed to the setFrequency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFrequency method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFrequencyForArrayConstraintsFromSetFrequency(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $frequency_Response_DataTypeFrequencyItem) {
            // validation for constraint: itemType
            if (!$frequency_Response_DataTypeFrequencyItem instanceof \StructType\FrequencyType) {
                $invalidValues[] = is_object($frequency_Response_DataTypeFrequencyItem) ? get_class($frequency_Response_DataTypeFrequencyItem) : sprintf('%s(%s)', gettype($frequency_Response_DataTypeFrequencyItem), var_export($frequency_Response_DataTypeFrequencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Frequency property can only contain items of type \StructType\FrequencyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Frequency value
     * @throws \InvalidArgumentException
     * @param \StructType\FrequencyType[] $frequency
     * @return \StructType\Frequency_Response_DataType
     */
    public function setFrequency(array $frequency = array())
    {
        // validation for constraint: array
        if ('' !== ($frequencyArrayErrorMessage = self::validateFrequencyForArrayConstraintsFromSetFrequency($frequency))) {
            throw new \InvalidArgumentException($frequencyArrayErrorMessage, __LINE__);
        }
        $this->Frequency = $frequency;
        return $this;
    }
    /**
     * Add item to Frequency value
     * @throws \InvalidArgumentException
     * @param \StructType\FrequencyType $item
     * @return \StructType\Frequency_Response_DataType
     */
    public function addToFrequency(\StructType\FrequencyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FrequencyType) {
            throw new \InvalidArgumentException(sprintf('The Frequency property can only contain items of type \StructType\FrequencyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Frequency[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Frequency_Response_DataType
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
