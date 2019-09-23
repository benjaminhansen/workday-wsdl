<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Licenses_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the worker data for the Get Change Licenses response.
 * @subpackage Structs
 */
class Change_Licenses_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Licenses
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Licenses_Response_WrapperType[]
     */
    public $Change_Licenses;
    /**
     * Constructor method for Change_Licenses_Response_DataType
     * @uses Change_Licenses_Response_DataType::setChange_Licenses()
     * @param \StructType\Change_Licenses_Response_WrapperType[] $change_Licenses
     */
    public function __construct(array $change_Licenses = array())
    {
        $this
            ->setChange_Licenses($change_Licenses);
    }
    /**
     * Get Change_Licenses value
     * @return \StructType\Change_Licenses_Response_WrapperType[]|null
     */
    public function getChange_Licenses()
    {
        return $this->Change_Licenses;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Licenses method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Licenses method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_LicensesForArrayConstraintsFromSetChange_Licenses(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Licenses_Response_DataTypeChange_LicensesItem) {
            // validation for constraint: itemType
            if (!$change_Licenses_Response_DataTypeChange_LicensesItem instanceof \StructType\Change_Licenses_Response_WrapperType) {
                $invalidValues[] = is_object($change_Licenses_Response_DataTypeChange_LicensesItem) ? get_class($change_Licenses_Response_DataTypeChange_LicensesItem) : sprintf('%s(%s)', gettype($change_Licenses_Response_DataTypeChange_LicensesItem), var_export($change_Licenses_Response_DataTypeChange_LicensesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Licenses property can only contain items of type \StructType\Change_Licenses_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Licenses value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Licenses_Response_WrapperType[] $change_Licenses
     * @return \StructType\Change_Licenses_Response_DataType
     */
    public function setChange_Licenses(array $change_Licenses = array())
    {
        // validation for constraint: array
        if ('' !== ($change_LicensesArrayErrorMessage = self::validateChange_LicensesForArrayConstraintsFromSetChange_Licenses($change_Licenses))) {
            throw new \InvalidArgumentException($change_LicensesArrayErrorMessage, __LINE__);
        }
        $this->Change_Licenses = $change_Licenses;
        return $this;
    }
    /**
     * Add item to Change_Licenses value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Licenses_Response_WrapperType $item
     * @return \StructType\Change_Licenses_Response_DataType
     */
    public function addToChange_Licenses(\StructType\Change_Licenses_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Licenses_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Licenses property can only contain items of type \StructType\Change_Licenses_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Licenses[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Licenses_Response_DataType
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
