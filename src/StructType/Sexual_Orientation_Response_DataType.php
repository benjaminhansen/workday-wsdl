<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sexual_Orientation_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The sexual orientation response data.
 * @subpackage Structs
 */
class Sexual_Orientation_Response_DataType extends AbstractStructBase
{
    /**
     * The Sexual_Orientation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Sexual_OrientationType[]
     */
    public $Sexual_Orientation;
    /**
     * Constructor method for Sexual_Orientation_Response_DataType
     * @uses Sexual_Orientation_Response_DataType::setSexual_Orientation()
     * @param \WorkdayWsdl\\StructType\Sexual_OrientationType[] $sexual_Orientation
     */
    public function __construct(array $sexual_Orientation = array())
    {
        $this
            ->setSexual_Orientation($sexual_Orientation);
    }
    /**
     * Get Sexual_Orientation value
     * @return \WorkdayWsdl\\StructType\Sexual_OrientationType[]|null
     */
    public function getSexual_Orientation()
    {
        return $this->Sexual_Orientation;
    }
    /**
     * This method is responsible for validating the values passed to the setSexual_Orientation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSexual_Orientation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSexual_OrientationForArrayConstraintsFromSetSexual_Orientation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sexual_Orientation_Response_DataTypeSexual_OrientationItem) {
            // validation for constraint: itemType
            if (!$sexual_Orientation_Response_DataTypeSexual_OrientationItem instanceof \WorkdayWsdl\\StructType\Sexual_OrientationType) {
                $invalidValues[] = is_object($sexual_Orientation_Response_DataTypeSexual_OrientationItem) ? get_class($sexual_Orientation_Response_DataTypeSexual_OrientationItem) : sprintf('%s(%s)', gettype($sexual_Orientation_Response_DataTypeSexual_OrientationItem), var_export($sexual_Orientation_Response_DataTypeSexual_OrientationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sexual_Orientation property can only contain items of type \WorkdayWsdl\\StructType\Sexual_OrientationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sexual_Orientation value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Sexual_OrientationType[] $sexual_Orientation
     * @return \WorkdayWsdl\\StructType\Sexual_Orientation_Response_DataType
     */
    public function setSexual_Orientation(array $sexual_Orientation = array())
    {
        // validation for constraint: array
        if ('' !== ($sexual_OrientationArrayErrorMessage = self::validateSexual_OrientationForArrayConstraintsFromSetSexual_Orientation($sexual_Orientation))) {
            throw new \InvalidArgumentException($sexual_OrientationArrayErrorMessage, __LINE__);
        }
        $this->Sexual_Orientation = $sexual_Orientation;
        return $this;
    }
    /**
     * Add item to Sexual_Orientation value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Sexual_OrientationType $item
     * @return \WorkdayWsdl\\StructType\Sexual_Orientation_Response_DataType
     */
    public function addToSexual_Orientation(\WorkdayWsdl\\StructType\Sexual_OrientationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Sexual_OrientationType) {
            throw new \InvalidArgumentException(sprintf('The Sexual_Orientation property can only contain items of type \WorkdayWsdl\\StructType\Sexual_OrientationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sexual_Orientation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Sexual_Orientation_Response_DataType
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
