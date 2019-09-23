<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Establishment_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Establishment References
 * @subpackage Structs
 */
class Establishment_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Establishment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Establishment References
     * - maxOccurs: unbounded
     * @var \StructType\EstablishmentObjectType[]
     */
    public $Establishment_Reference;
    /**
     * Constructor method for Establishment_Request_ReferencesType
     * @uses Establishment_Request_ReferencesType::setEstablishment_Reference()
     * @param \StructType\EstablishmentObjectType[] $establishment_Reference
     */
    public function __construct(array $establishment_Reference = array())
    {
        $this
            ->setEstablishment_Reference($establishment_Reference);
    }
    /**
     * Get Establishment_Reference value
     * @return \StructType\EstablishmentObjectType[]|null
     */
    public function getEstablishment_Reference()
    {
        return $this->Establishment_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEstablishment_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEstablishment_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEstablishment_ReferenceForArrayConstraintsFromSetEstablishment_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $establishment_Request_ReferencesTypeEstablishment_ReferenceItem) {
            // validation for constraint: itemType
            if (!$establishment_Request_ReferencesTypeEstablishment_ReferenceItem instanceof \StructType\EstablishmentObjectType) {
                $invalidValues[] = is_object($establishment_Request_ReferencesTypeEstablishment_ReferenceItem) ? get_class($establishment_Request_ReferencesTypeEstablishment_ReferenceItem) : sprintf('%s(%s)', gettype($establishment_Request_ReferencesTypeEstablishment_ReferenceItem), var_export($establishment_Request_ReferencesTypeEstablishment_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Establishment_Reference property can only contain items of type \StructType\EstablishmentObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Establishment_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\EstablishmentObjectType[] $establishment_Reference
     * @return \StructType\Establishment_Request_ReferencesType
     */
    public function setEstablishment_Reference(array $establishment_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($establishment_ReferenceArrayErrorMessage = self::validateEstablishment_ReferenceForArrayConstraintsFromSetEstablishment_Reference($establishment_Reference))) {
            throw new \InvalidArgumentException($establishment_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Establishment_Reference = $establishment_Reference;
        return $this;
    }
    /**
     * Add item to Establishment_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\EstablishmentObjectType $item
     * @return \StructType\Establishment_Request_ReferencesType
     */
    public function addToEstablishment_Reference(\StructType\EstablishmentObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EstablishmentObjectType) {
            throw new \InvalidArgumentException(sprintf('The Establishment_Reference property can only contain items of type \StructType\EstablishmentObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Establishment_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Establishment_Request_ReferencesType
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
