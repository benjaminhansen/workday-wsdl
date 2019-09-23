<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Phone_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Subject worker must have exactly one primary work phone number in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request | Subject worker must have
 * exactly one primary home phone number in order to submit non-primary entries. The primary contact information may be either previously entered or included within this request. | The Phone ID field is for updating the value of the Phone Reference. It
 * cannot be the same as another existing phone. | Only one work Phone Number can be marked as Primary. | Only one home Phone Number can be marked as Primary. | When Replace All is True, you can't pass a Phone Reference. | When Replace All is True,
 * Delete can't be True. | Encapsulating element that tracks all phones.
 * @subpackage Structs
 */
class Person_Phone_Information_DataType extends AbstractStructBase
{
    /**
     * The Phone_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for updating a single phone.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Person_Phone_DataType[]
     */
    public $Phone_Information_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary address data will be replaced. A value of true means all non-primary addresses will be deleted and new address instances will be created regardless of whether a reference is
     * used.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Person_Phone_Information_DataType
     * @uses Person_Phone_Information_DataType::setPhone_Information_Data()
     * @uses Person_Phone_Information_DataType::setReplace_All()
     * @param \StructType\Person_Phone_DataType[] $phone_Information_Data
     * @param bool $replace_All
     */
    public function __construct(array $phone_Information_Data = array(), $replace_All = null)
    {
        $this
            ->setPhone_Information_Data($phone_Information_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Phone_Information_Data value
     * @return \StructType\Person_Phone_DataType[]|null
     */
    public function getPhone_Information_Data()
    {
        return $this->Phone_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPhone_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhone_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhone_Information_DataForArrayConstraintsFromSetPhone_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Phone_Information_DataTypePhone_Information_DataItem) {
            // validation for constraint: itemType
            if (!$person_Phone_Information_DataTypePhone_Information_DataItem instanceof \StructType\Person_Phone_DataType) {
                $invalidValues[] = is_object($person_Phone_Information_DataTypePhone_Information_DataItem) ? get_class($person_Phone_Information_DataTypePhone_Information_DataItem) : sprintf('%s(%s)', gettype($person_Phone_Information_DataTypePhone_Information_DataItem), var_export($person_Phone_Information_DataTypePhone_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone_Information_Data property can only contain items of type \StructType\Person_Phone_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Phone_Information_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Phone_DataType[] $phone_Information_Data
     * @return \StructType\Person_Phone_Information_DataType
     */
    public function setPhone_Information_Data(array $phone_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($phone_Information_DataArrayErrorMessage = self::validatePhone_Information_DataForArrayConstraintsFromSetPhone_Information_Data($phone_Information_Data))) {
            throw new \InvalidArgumentException($phone_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Phone_Information_Data = $phone_Information_Data;
        return $this;
    }
    /**
     * Add item to Phone_Information_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Person_Phone_DataType $item
     * @return \StructType\Person_Phone_Information_DataType
     */
    public function addToPhone_Information_Data(\StructType\Person_Phone_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Person_Phone_DataType) {
            throw new \InvalidArgumentException(sprintf('The Phone_Information_Data property can only contain items of type \StructType\Person_Phone_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Phone_Information_Data[] = $item;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \StructType\Person_Phone_Information_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Phone_Information_DataType
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
