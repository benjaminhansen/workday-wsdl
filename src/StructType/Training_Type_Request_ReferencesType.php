<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_Type_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Training Type and its associated data.
 * @subpackage Structs
 */
class Training_Type_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Training_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Training Type.
     * - maxOccurs: unbounded
     * @var \StructType\Training_TypeObjectType[]
     */
    public $Training_Type_Reference;
    /**
     * Constructor method for Training_Type_Request_ReferencesType
     * @uses Training_Type_Request_ReferencesType::setTraining_Type_Reference()
     * @param \StructType\Training_TypeObjectType[] $training_Type_Reference
     */
    public function __construct(array $training_Type_Reference = array())
    {
        $this
            ->setTraining_Type_Reference($training_Type_Reference);
    }
    /**
     * Get Training_Type_Reference value
     * @return \StructType\Training_TypeObjectType[]|null
     */
    public function getTraining_Type_Reference()
    {
        return $this->Training_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setTraining_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraining_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraining_Type_ReferenceForArrayConstraintsFromSetTraining_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $training_Type_Request_ReferencesTypeTraining_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$training_Type_Request_ReferencesTypeTraining_Type_ReferenceItem instanceof \StructType\Training_TypeObjectType) {
                $invalidValues[] = is_object($training_Type_Request_ReferencesTypeTraining_Type_ReferenceItem) ? get_class($training_Type_Request_ReferencesTypeTraining_Type_ReferenceItem) : sprintf('%s(%s)', gettype($training_Type_Request_ReferencesTypeTraining_Type_ReferenceItem), var_export($training_Type_Request_ReferencesTypeTraining_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Training_Type_Reference property can only contain items of type \StructType\Training_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Training_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_TypeObjectType[] $training_Type_Reference
     * @return \StructType\Training_Type_Request_ReferencesType
     */
    public function setTraining_Type_Reference(array $training_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($training_Type_ReferenceArrayErrorMessage = self::validateTraining_Type_ReferenceForArrayConstraintsFromSetTraining_Type_Reference($training_Type_Reference))) {
            throw new \InvalidArgumentException($training_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Training_Type_Reference = $training_Type_Reference;
        return $this;
    }
    /**
     * Add item to Training_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_TypeObjectType $item
     * @return \StructType\Training_Type_Request_ReferencesType
     */
    public function addToTraining_Type_Reference(\StructType\Training_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Training_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Training_Type_Reference property can only contain items of type \StructType\Training_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Training_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Training_Type_Request_ReferencesType
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
