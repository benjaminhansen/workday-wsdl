<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Field_And_Parameter_Criteria_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Field Result Request Criteria
 * @subpackage Structs
 */
class Field_And_Parameter_Criteria_DataType extends AbstractStructBase
{
    /**
     * The Provider_Reference
     * Meta information extracted from the WSDL
     * - documentation: Field And Parameter Initialization Provider Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType[]
     */
    public $Provider_Reference;
    /**
     * Constructor method for Field_And_Parameter_Criteria_DataType
     * @uses Field_And_Parameter_Criteria_DataType::setProvider_Reference()
     * @param \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType[] $provider_Reference
     */
    public function __construct(array $provider_Reference = array())
    {
        $this
            ->setProvider_Reference($provider_Reference);
    }
    /**
     * Get Provider_Reference value
     * @return \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType[]|null
     */
    public function getProvider_Reference()
    {
        return $this->Provider_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setProvider_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProvider_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProvider_ReferenceForArrayConstraintsFromSetProvider_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $field_And_Parameter_Criteria_DataTypeProvider_ReferenceItem) {
            // validation for constraint: itemType
            if (!$field_And_Parameter_Criteria_DataTypeProvider_ReferenceItem instanceof \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType) {
                $invalidValues[] = is_object($field_And_Parameter_Criteria_DataTypeProvider_ReferenceItem) ? get_class($field_And_Parameter_Criteria_DataTypeProvider_ReferenceItem) : sprintf('%s(%s)', gettype($field_And_Parameter_Criteria_DataTypeProvider_ReferenceItem), var_export($field_And_Parameter_Criteria_DataTypeProvider_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Provider_Reference property can only contain items of type \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Provider_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType[] $provider_Reference
     * @return \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType
     */
    public function setProvider_Reference(array $provider_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($provider_ReferenceArrayErrorMessage = self::validateProvider_ReferenceForArrayConstraintsFromSetProvider_Reference($provider_Reference))) {
            throw new \InvalidArgumentException($provider_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Provider_Reference = $provider_Reference;
        return $this;
    }
    /**
     * Add item to Provider_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType $item
     * @return \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType
     */
    public function addToProvider_Reference(\WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType) {
            throw new \InvalidArgumentException(sprintf('The Provider_Reference property can only contain items of type \WorkdayWsdl\\StructType\External_Field_and_Parameter_Initialization_ProviderObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Provider_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType
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
