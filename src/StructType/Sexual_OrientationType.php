<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sexual_OrientationType StructType
 * Meta information extracted from the WSDL
 * - documentation: The sexual orientation for a worker.
 * @subpackage Structs
 */
class Sexual_OrientationType extends AbstractStructBase
{
    /**
     * The Sexual_Orientation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the sexual orientation of the person.
     * - minOccurs: 0
     * @var \StructType\Sexual_OrientationObjectType
     */
    public $Sexual_Orientation_Reference;
    /**
     * The Sexual_Orientation_Data
     * Meta information extracted from the WSDL
     * - documentation: The sexual orientation data for a worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Sexual_Orientation_DataType[]
     */
    public $Sexual_Orientation_Data;
    /**
     * Constructor method for Sexual_OrientationType
     * @uses Sexual_OrientationType::setSexual_Orientation_Reference()
     * @uses Sexual_OrientationType::setSexual_Orientation_Data()
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @param \StructType\Sexual_Orientation_DataType[] $sexual_Orientation_Data
     */
    public function __construct(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null, array $sexual_Orientation_Data = array())
    {
        $this
            ->setSexual_Orientation_Reference($sexual_Orientation_Reference)
            ->setSexual_Orientation_Data($sexual_Orientation_Data);
    }
    /**
     * Get Sexual_Orientation_Reference value
     * @return \StructType\Sexual_OrientationObjectType|null
     */
    public function getSexual_Orientation_Reference()
    {
        return $this->Sexual_Orientation_Reference;
    }
    /**
     * Set Sexual_Orientation_Reference value
     * @param \StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference
     * @return \StructType\Sexual_OrientationType
     */
    public function setSexual_Orientation_Reference(\StructType\Sexual_OrientationObjectType $sexual_Orientation_Reference = null)
    {
        $this->Sexual_Orientation_Reference = $sexual_Orientation_Reference;
        return $this;
    }
    /**
     * Get Sexual_Orientation_Data value
     * @return \StructType\Sexual_Orientation_DataType[]|null
     */
    public function getSexual_Orientation_Data()
    {
        return $this->Sexual_Orientation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSexual_Orientation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSexual_Orientation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSexual_Orientation_DataForArrayConstraintsFromSetSexual_Orientation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sexual_OrientationTypeSexual_Orientation_DataItem) {
            // validation for constraint: itemType
            if (!$sexual_OrientationTypeSexual_Orientation_DataItem instanceof \StructType\Sexual_Orientation_DataType) {
                $invalidValues[] = is_object($sexual_OrientationTypeSexual_Orientation_DataItem) ? get_class($sexual_OrientationTypeSexual_Orientation_DataItem) : sprintf('%s(%s)', gettype($sexual_OrientationTypeSexual_Orientation_DataItem), var_export($sexual_OrientationTypeSexual_Orientation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sexual_Orientation_Data property can only contain items of type \StructType\Sexual_Orientation_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sexual_Orientation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Sexual_Orientation_DataType[] $sexual_Orientation_Data
     * @return \StructType\Sexual_OrientationType
     */
    public function setSexual_Orientation_Data(array $sexual_Orientation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($sexual_Orientation_DataArrayErrorMessage = self::validateSexual_Orientation_DataForArrayConstraintsFromSetSexual_Orientation_Data($sexual_Orientation_Data))) {
            throw new \InvalidArgumentException($sexual_Orientation_DataArrayErrorMessage, __LINE__);
        }
        $this->Sexual_Orientation_Data = $sexual_Orientation_Data;
        return $this;
    }
    /**
     * Add item to Sexual_Orientation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Sexual_Orientation_DataType $item
     * @return \StructType\Sexual_OrientationType
     */
    public function addToSexual_Orientation_Data(\StructType\Sexual_Orientation_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Sexual_Orientation_DataType) {
            throw new \InvalidArgumentException(sprintf('The Sexual_Orientation_Data property can only contain items of type \StructType\Sexual_Orientation_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sexual_Orientation_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Sexual_OrientationType
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
