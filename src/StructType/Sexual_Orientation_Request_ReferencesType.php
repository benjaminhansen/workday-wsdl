<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sexual_Orientation_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference to the sexual orientation of the person.
 * @subpackage Structs
 */
class Sexual_Orientation_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Sexual_Orientation_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the sexual orientation of the person.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Sexual_OrientationObjectType[]
     */
    public $Sexual_Orientation_Reference;
    /**
     * Constructor method for Sexual_Orientation_Request_ReferencesType
     * @uses Sexual_Orientation_Request_ReferencesType::setSexual_Orientation_Reference()
     * @param \WorkdayWsdl\\StructType\Sexual_OrientationObjectType[] $sexual_Orientation_Reference
     */
    public function __construct(array $sexual_Orientation_Reference = array())
    {
        $this
            ->setSexual_Orientation_Reference($sexual_Orientation_Reference);
    }
    /**
     * Get Sexual_Orientation_Reference value
     * @return \WorkdayWsdl\\StructType\Sexual_OrientationObjectType[]|null
     */
    public function getSexual_Orientation_Reference()
    {
        return $this->Sexual_Orientation_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSexual_Orientation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSexual_Orientation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSexual_Orientation_ReferenceForArrayConstraintsFromSetSexual_Orientation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sexual_Orientation_Request_ReferencesTypeSexual_Orientation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$sexual_Orientation_Request_ReferencesTypeSexual_Orientation_ReferenceItem instanceof \WorkdayWsdl\\StructType\Sexual_OrientationObjectType) {
                $invalidValues[] = is_object($sexual_Orientation_Request_ReferencesTypeSexual_Orientation_ReferenceItem) ? get_class($sexual_Orientation_Request_ReferencesTypeSexual_Orientation_ReferenceItem) : sprintf('%s(%s)', gettype($sexual_Orientation_Request_ReferencesTypeSexual_Orientation_ReferenceItem), var_export($sexual_Orientation_Request_ReferencesTypeSexual_Orientation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sexual_Orientation_Reference property can only contain items of type \WorkdayWsdl\\StructType\Sexual_OrientationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sexual_Orientation_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Sexual_OrientationObjectType[] $sexual_Orientation_Reference
     * @return \WorkdayWsdl\\StructType\Sexual_Orientation_Request_ReferencesType
     */
    public function setSexual_Orientation_Reference(array $sexual_Orientation_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($sexual_Orientation_ReferenceArrayErrorMessage = self::validateSexual_Orientation_ReferenceForArrayConstraintsFromSetSexual_Orientation_Reference($sexual_Orientation_Reference))) {
            throw new \InvalidArgumentException($sexual_Orientation_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Sexual_Orientation_Reference = $sexual_Orientation_Reference;
        return $this;
    }
    /**
     * Add item to Sexual_Orientation_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Sexual_OrientationObjectType $item
     * @return \WorkdayWsdl\\StructType\Sexual_Orientation_Request_ReferencesType
     */
    public function addToSexual_Orientation_Reference(\WorkdayWsdl\\StructType\Sexual_OrientationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Sexual_OrientationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Sexual_Orientation_Reference property can only contain items of type \WorkdayWsdl\\StructType\Sexual_OrientationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sexual_Orientation_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Sexual_Orientation_Request_ReferencesType
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
