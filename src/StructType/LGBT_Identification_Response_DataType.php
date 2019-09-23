<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LGBT_Identification_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all LGBT Identification data.
 * @subpackage Structs
 */
class LGBT_Identification_Response_DataType extends AbstractStructBase
{
    /**
     * The LGBT_Identification
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of LGBT Identification
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LGBT_IdentificationType[]
     */
    public $LGBT_Identification;
    /**
     * Constructor method for LGBT_Identification_Response_DataType
     * @uses LGBT_Identification_Response_DataType::setLGBT_Identification()
     * @param \StructType\LGBT_IdentificationType[] $lGBT_Identification
     */
    public function __construct(array $lGBT_Identification = array())
    {
        $this
            ->setLGBT_Identification($lGBT_Identification);
    }
    /**
     * Get LGBT_Identification value
     * @return \StructType\LGBT_IdentificationType[]|null
     */
    public function getLGBT_Identification()
    {
        return $this->LGBT_Identification;
    }
    /**
     * This method is responsible for validating the values passed to the setLGBT_Identification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLGBT_Identification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLGBT_IdentificationForArrayConstraintsFromSetLGBT_Identification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $lGBT_Identification_Response_DataTypeLGBT_IdentificationItem) {
            // validation for constraint: itemType
            if (!$lGBT_Identification_Response_DataTypeLGBT_IdentificationItem instanceof \StructType\LGBT_IdentificationType) {
                $invalidValues[] = is_object($lGBT_Identification_Response_DataTypeLGBT_IdentificationItem) ? get_class($lGBT_Identification_Response_DataTypeLGBT_IdentificationItem) : sprintf('%s(%s)', gettype($lGBT_Identification_Response_DataTypeLGBT_IdentificationItem), var_export($lGBT_Identification_Response_DataTypeLGBT_IdentificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LGBT_Identification property can only contain items of type \StructType\LGBT_IdentificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LGBT_Identification value
     * @throws \InvalidArgumentException
     * @param \StructType\LGBT_IdentificationType[] $lGBT_Identification
     * @return \StructType\LGBT_Identification_Response_DataType
     */
    public function setLGBT_Identification(array $lGBT_Identification = array())
    {
        // validation for constraint: array
        if ('' !== ($lGBT_IdentificationArrayErrorMessage = self::validateLGBT_IdentificationForArrayConstraintsFromSetLGBT_Identification($lGBT_Identification))) {
            throw new \InvalidArgumentException($lGBT_IdentificationArrayErrorMessage, __LINE__);
        }
        $this->LGBT_Identification = $lGBT_Identification;
        return $this;
    }
    /**
     * Add item to LGBT_Identification value
     * @throws \InvalidArgumentException
     * @param \StructType\LGBT_IdentificationType $item
     * @return \StructType\LGBT_Identification_Response_DataType
     */
    public function addToLGBT_Identification(\StructType\LGBT_IdentificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LGBT_IdentificationType) {
            throw new \InvalidArgumentException(sprintf('The LGBT_Identification property can only contain items of type \StructType\LGBT_IdentificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LGBT_Identification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LGBT_Identification_Response_DataType
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
