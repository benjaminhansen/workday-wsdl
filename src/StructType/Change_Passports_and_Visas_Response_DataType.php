<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Passports_and_Visas_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the worker data for the Get Change Passports and Visas response.
 * @subpackage Structs
 */
class Change_Passports_and_Visas_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Passports_and_Visas
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Passports_and_Visas_Response_WrapperType[]
     */
    public $Change_Passports_and_Visas;
    /**
     * Constructor method for Change_Passports_and_Visas_Response_DataType
     * @uses Change_Passports_and_Visas_Response_DataType::setChange_Passports_and_Visas()
     * @param \StructType\Change_Passports_and_Visas_Response_WrapperType[] $change_Passports_and_Visas
     */
    public function __construct(array $change_Passports_and_Visas = array())
    {
        $this
            ->setChange_Passports_and_Visas($change_Passports_and_Visas);
    }
    /**
     * Get Change_Passports_and_Visas value
     * @return \StructType\Change_Passports_and_Visas_Response_WrapperType[]|null
     */
    public function getChange_Passports_and_Visas()
    {
        return $this->Change_Passports_and_Visas;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Passports_and_Visas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Passports_and_Visas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Passports_and_VisasForArrayConstraintsFromSetChange_Passports_and_Visas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Passports_and_Visas_Response_DataTypeChange_Passports_and_VisasItem) {
            // validation for constraint: itemType
            if (!$change_Passports_and_Visas_Response_DataTypeChange_Passports_and_VisasItem instanceof \StructType\Change_Passports_and_Visas_Response_WrapperType) {
                $invalidValues[] = is_object($change_Passports_and_Visas_Response_DataTypeChange_Passports_and_VisasItem) ? get_class($change_Passports_and_Visas_Response_DataTypeChange_Passports_and_VisasItem) : sprintf('%s(%s)', gettype($change_Passports_and_Visas_Response_DataTypeChange_Passports_and_VisasItem), var_export($change_Passports_and_Visas_Response_DataTypeChange_Passports_and_VisasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Passports_and_Visas property can only contain items of type \StructType\Change_Passports_and_Visas_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Passports_and_Visas value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Passports_and_Visas_Response_WrapperType[] $change_Passports_and_Visas
     * @return \StructType\Change_Passports_and_Visas_Response_DataType
     */
    public function setChange_Passports_and_Visas(array $change_Passports_and_Visas = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Passports_and_VisasArrayErrorMessage = self::validateChange_Passports_and_VisasForArrayConstraintsFromSetChange_Passports_and_Visas($change_Passports_and_Visas))) {
            throw new \InvalidArgumentException($change_Passports_and_VisasArrayErrorMessage, __LINE__);
        }
        $this->Change_Passports_and_Visas = $change_Passports_and_Visas;
        return $this;
    }
    /**
     * Add item to Change_Passports_and_Visas value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Passports_and_Visas_Response_WrapperType $item
     * @return \StructType\Change_Passports_and_Visas_Response_DataType
     */
    public function addToChange_Passports_and_Visas(\StructType\Change_Passports_and_Visas_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Passports_and_Visas_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Passports_and_Visas property can only contain items of type \StructType\Change_Passports_and_Visas_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Passports_and_Visas[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Passports_and_Visas_Response_DataType
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
