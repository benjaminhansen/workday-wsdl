<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disability_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Disability and its associated data.
 * @subpackage Structs
 */
class Disability_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an Disability.
     * - maxOccurs: unbounded
     * @var \StructType\DisabilityObjectType[]
     */
    public $Disability_Reference;
    /**
     * Constructor method for Disability_Request_ReferencesType
     * @uses Disability_Request_ReferencesType::setDisability_Reference()
     * @param \StructType\DisabilityObjectType[] $disability_Reference
     */
    public function __construct(array $disability_Reference = array())
    {
        $this
            ->setDisability_Reference($disability_Reference);
    }
    /**
     * Get Disability_Reference value
     * @return \StructType\DisabilityObjectType[]|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDisability_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisability_ReferenceForArrayConstraintsFromSetDisability_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disability_Request_ReferencesTypeDisability_ReferenceItem) {
            // validation for constraint: itemType
            if (!$disability_Request_ReferencesTypeDisability_ReferenceItem instanceof \StructType\DisabilityObjectType) {
                $invalidValues[] = is_object($disability_Request_ReferencesTypeDisability_ReferenceItem) ? get_class($disability_Request_ReferencesTypeDisability_ReferenceItem) : sprintf('%s(%s)', gettype($disability_Request_ReferencesTypeDisability_ReferenceItem), var_export($disability_Request_ReferencesTypeDisability_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disability_Reference property can only contain items of type \StructType\DisabilityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disability_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\DisabilityObjectType[] $disability_Reference
     * @return \StructType\Disability_Request_ReferencesType
     */
    public function setDisability_Reference(array $disability_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($disability_ReferenceArrayErrorMessage = self::validateDisability_ReferenceForArrayConstraintsFromSetDisability_Reference($disability_Reference))) {
            throw new \InvalidArgumentException($disability_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Disability_Reference = $disability_Reference;
        return $this;
    }
    /**
     * Add item to Disability_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\DisabilityObjectType $item
     * @return \StructType\Disability_Request_ReferencesType
     */
    public function addToDisability_Reference(\StructType\DisabilityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisabilityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Disability_Reference property can only contain items of type \StructType\DisabilityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disability_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Disability_Request_ReferencesType
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
