<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Veteran_Status_IdentificationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This request element contains the data element for Veteran Status Identification for a Worker.
 * @subpackage Structs
 */
class Change_Veteran_Status_IdentificationType extends AbstractStructBase
{
    /**
     * The Change_Veteran_Status_Identification_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType[]
     */
    public $Change_Veteran_Status_Identification_Data;
    /**
     * Constructor method for Change_Veteran_Status_IdentificationType
     * @uses Change_Veteran_Status_IdentificationType::setChange_Veteran_Status_Identification_Data()
     * @param \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType[] $change_Veteran_Status_Identification_Data
     */
    public function __construct(array $change_Veteran_Status_Identification_Data = array())
    {
        $this
            ->setChange_Veteran_Status_Identification_Data($change_Veteran_Status_Identification_Data);
    }
    /**
     * Get Change_Veteran_Status_Identification_Data value
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType[]|null
     */
    public function getChange_Veteran_Status_Identification_Data()
    {
        return $this->Change_Veteran_Status_Identification_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Veteran_Status_Identification_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Veteran_Status_Identification_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Veteran_Status_Identification_DataForArrayConstraintsFromSetChange_Veteran_Status_Identification_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Veteran_Status_IdentificationTypeChange_Veteran_Status_Identification_DataItem) {
            // validation for constraint: itemType
            if (!$change_Veteran_Status_IdentificationTypeChange_Veteran_Status_Identification_DataItem instanceof \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType) {
                $invalidValues[] = is_object($change_Veteran_Status_IdentificationTypeChange_Veteran_Status_Identification_DataItem) ? get_class($change_Veteran_Status_IdentificationTypeChange_Veteran_Status_Identification_DataItem) : sprintf('%s(%s)', gettype($change_Veteran_Status_IdentificationTypeChange_Veteran_Status_Identification_DataItem), var_export($change_Veteran_Status_IdentificationTypeChange_Veteran_Status_Identification_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Veteran_Status_Identification_Data property can only contain items of type \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Veteran_Status_Identification_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType[] $change_Veteran_Status_Identification_Data
     * @return \WorkdayWsdl\\StructType\Change_Veteran_Status_IdentificationType
     */
    public function setChange_Veteran_Status_Identification_Data(array $change_Veteran_Status_Identification_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Veteran_Status_Identification_DataArrayErrorMessage = self::validateChange_Veteran_Status_Identification_DataForArrayConstraintsFromSetChange_Veteran_Status_Identification_Data($change_Veteran_Status_Identification_Data))) {
            throw new \InvalidArgumentException($change_Veteran_Status_Identification_DataArrayErrorMessage, __LINE__);
        }
        $this->Change_Veteran_Status_Identification_Data = $change_Veteran_Status_Identification_Data;
        return $this;
    }
    /**
     * Add item to Change_Veteran_Status_Identification_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType $item
     * @return \WorkdayWsdl\\StructType\Change_Veteran_Status_IdentificationType
     */
    public function addToChange_Veteran_Status_Identification_Data(\WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType) {
            throw new \InvalidArgumentException(sprintf('The Change_Veteran_Status_Identification_Data property can only contain items of type \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Veteran_Status_Identification_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Veteran_Status_IdentificationType
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
