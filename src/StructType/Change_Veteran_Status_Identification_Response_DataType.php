<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Veteran_Status_Identification_Response_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the worker data for the Veteran Status Identification response.
 * @subpackage Structs
 */
class Change_Veteran_Status_Identification_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Veteran_Status_Identification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Veteran_Status_IdentificationType[]
     */
    public $Change_Veteran_Status_Identification;
    /**
     * Constructor method for Change_Veteran_Status_Identification_Response_DataType
     * @uses Change_Veteran_Status_Identification_Response_DataType::setChange_Veteran_Status_Identification()
     * @param \StructType\Change_Veteran_Status_IdentificationType[] $change_Veteran_Status_Identification
     */
    public function __construct(array $change_Veteran_Status_Identification = array())
    {
        $this
            ->setChange_Veteran_Status_Identification($change_Veteran_Status_Identification);
    }
    /**
     * Get Change_Veteran_Status_Identification value
     * @return \StructType\Change_Veteran_Status_IdentificationType[]|null
     */
    public function getChange_Veteran_Status_Identification()
    {
        return $this->Change_Veteran_Status_Identification;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Veteran_Status_Identification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Veteran_Status_Identification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Veteran_Status_IdentificationForArrayConstraintsFromSetChange_Veteran_Status_Identification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Veteran_Status_Identification_Response_DataTypeChange_Veteran_Status_IdentificationItem) {
            // validation for constraint: itemType
            if (!$change_Veteran_Status_Identification_Response_DataTypeChange_Veteran_Status_IdentificationItem instanceof \StructType\Change_Veteran_Status_IdentificationType) {
                $invalidValues[] = is_object($change_Veteran_Status_Identification_Response_DataTypeChange_Veteran_Status_IdentificationItem) ? get_class($change_Veteran_Status_Identification_Response_DataTypeChange_Veteran_Status_IdentificationItem) : sprintf('%s(%s)', gettype($change_Veteran_Status_Identification_Response_DataTypeChange_Veteran_Status_IdentificationItem), var_export($change_Veteran_Status_Identification_Response_DataTypeChange_Veteran_Status_IdentificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Veteran_Status_Identification property can only contain items of type \StructType\Change_Veteran_Status_IdentificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Veteran_Status_Identification value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Veteran_Status_IdentificationType[] $change_Veteran_Status_Identification
     * @return \StructType\Change_Veteran_Status_Identification_Response_DataType
     */
    public function setChange_Veteran_Status_Identification(array $change_Veteran_Status_Identification = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Veteran_Status_IdentificationArrayErrorMessage = self::validateChange_Veteran_Status_IdentificationForArrayConstraintsFromSetChange_Veteran_Status_Identification($change_Veteran_Status_Identification))) {
            throw new \InvalidArgumentException($change_Veteran_Status_IdentificationArrayErrorMessage, __LINE__);
        }
        $this->Change_Veteran_Status_Identification = $change_Veteran_Status_Identification;
        return $this;
    }
    /**
     * Add item to Change_Veteran_Status_Identification value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Veteran_Status_IdentificationType $item
     * @return \StructType\Change_Veteran_Status_Identification_Response_DataType
     */
    public function addToChange_Veteran_Status_Identification(\StructType\Change_Veteran_Status_IdentificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Veteran_Status_IdentificationType) {
            throw new \InvalidArgumentException(sprintf('The Change_Veteran_Status_Identification property can only contain items of type \StructType\Change_Veteran_Status_IdentificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Veteran_Status_Identification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Veteran_Status_Identification_Response_DataType
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
