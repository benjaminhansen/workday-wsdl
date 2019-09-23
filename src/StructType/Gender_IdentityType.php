<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gender_IdentityType StructType
 * Meta information extracted from the WSDL
 * - documentation: The gender identity for a worker.
 * @subpackage Structs
 */
class Gender_IdentityType extends AbstractStructBase
{
    /**
     * The Gender_Identity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the gender identity of the person.
     * - minOccurs: 0
     * @var \StructType\Gender_IdentityObjectType
     */
    public $Gender_Identity_Reference;
    /**
     * The Gender_Identity_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Gender_Identity_DataType[]
     */
    public $Gender_Identity_Data;
    /**
     * Constructor method for Gender_IdentityType
     * @uses Gender_IdentityType::setGender_Identity_Reference()
     * @uses Gender_IdentityType::setGender_Identity_Data()
     * @param \StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @param \StructType\Gender_Identity_DataType[] $gender_Identity_Data
     */
    public function __construct(\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null, array $gender_Identity_Data = array())
    {
        $this
            ->setGender_Identity_Reference($gender_Identity_Reference)
            ->setGender_Identity_Data($gender_Identity_Data);
    }
    /**
     * Get Gender_Identity_Reference value
     * @return \StructType\Gender_IdentityObjectType|null
     */
    public function getGender_Identity_Reference()
    {
        return $this->Gender_Identity_Reference;
    }
    /**
     * Set Gender_Identity_Reference value
     * @param \StructType\Gender_IdentityObjectType $gender_Identity_Reference
     * @return \StructType\Gender_IdentityType
     */
    public function setGender_Identity_Reference(\StructType\Gender_IdentityObjectType $gender_Identity_Reference = null)
    {
        $this->Gender_Identity_Reference = $gender_Identity_Reference;
        return $this;
    }
    /**
     * Get Gender_Identity_Data value
     * @return \StructType\Gender_Identity_DataType[]|null
     */
    public function getGender_Identity_Data()
    {
        return $this->Gender_Identity_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setGender_Identity_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGender_Identity_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGender_Identity_DataForArrayConstraintsFromSetGender_Identity_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $gender_IdentityTypeGender_Identity_DataItem) {
            // validation for constraint: itemType
            if (!$gender_IdentityTypeGender_Identity_DataItem instanceof \StructType\Gender_Identity_DataType) {
                $invalidValues[] = is_object($gender_IdentityTypeGender_Identity_DataItem) ? get_class($gender_IdentityTypeGender_Identity_DataItem) : sprintf('%s(%s)', gettype($gender_IdentityTypeGender_Identity_DataItem), var_export($gender_IdentityTypeGender_Identity_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Gender_Identity_Data property can only contain items of type \StructType\Gender_Identity_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Gender_Identity_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Gender_Identity_DataType[] $gender_Identity_Data
     * @return \StructType\Gender_IdentityType
     */
    public function setGender_Identity_Data(array $gender_Identity_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($gender_Identity_DataArrayErrorMessage = self::validateGender_Identity_DataForArrayConstraintsFromSetGender_Identity_Data($gender_Identity_Data))) {
            throw new \InvalidArgumentException($gender_Identity_DataArrayErrorMessage, __LINE__);
        }
        $this->Gender_Identity_Data = $gender_Identity_Data;
        return $this;
    }
    /**
     * Add item to Gender_Identity_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Gender_Identity_DataType $item
     * @return \StructType\Gender_IdentityType
     */
    public function addToGender_Identity_Data(\StructType\Gender_Identity_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Gender_Identity_DataType) {
            throw new \InvalidArgumentException(sprintf('The Gender_Identity_Data property can only contain items of type \StructType\Gender_Identity_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Gender_Identity_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Gender_IdentityType
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
