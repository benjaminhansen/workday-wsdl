<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Group_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of provisioning groups.
 * @subpackage Structs
 */
class Provisioning_Group_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Provisioning_Group_Request_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier to reference a provisioning group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Provisioning_GroupObjectType[]
     */
    public $Provisioning_Group_Request_Reference;
    /**
     * Constructor method for Provisioning_Group_Request_ReferencesType
     * @uses Provisioning_Group_Request_ReferencesType::setProvisioning_Group_Request_Reference()
     * @param \StructType\Provisioning_GroupObjectType[] $provisioning_Group_Request_Reference
     */
    public function __construct(array $provisioning_Group_Request_Reference = array())
    {
        $this
            ->setProvisioning_Group_Request_Reference($provisioning_Group_Request_Reference);
    }
    /**
     * Get Provisioning_Group_Request_Reference value
     * @return \StructType\Provisioning_GroupObjectType[]|null
     */
    public function getProvisioning_Group_Request_Reference()
    {
        return $this->Provisioning_Group_Request_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setProvisioning_Group_Request_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProvisioning_Group_Request_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProvisioning_Group_Request_ReferenceForArrayConstraintsFromSetProvisioning_Group_Request_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $provisioning_Group_Request_ReferencesTypeProvisioning_Group_Request_ReferenceItem) {
            // validation for constraint: itemType
            if (!$provisioning_Group_Request_ReferencesTypeProvisioning_Group_Request_ReferenceItem instanceof \StructType\Provisioning_GroupObjectType) {
                $invalidValues[] = is_object($provisioning_Group_Request_ReferencesTypeProvisioning_Group_Request_ReferenceItem) ? get_class($provisioning_Group_Request_ReferencesTypeProvisioning_Group_Request_ReferenceItem) : sprintf('%s(%s)', gettype($provisioning_Group_Request_ReferencesTypeProvisioning_Group_Request_ReferenceItem), var_export($provisioning_Group_Request_ReferencesTypeProvisioning_Group_Request_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Provisioning_Group_Request_Reference property can only contain items of type \StructType\Provisioning_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Provisioning_Group_Request_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_GroupObjectType[] $provisioning_Group_Request_Reference
     * @return \StructType\Provisioning_Group_Request_ReferencesType
     */
    public function setProvisioning_Group_Request_Reference(array $provisioning_Group_Request_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($provisioning_Group_Request_ReferenceArrayErrorMessage = self::validateProvisioning_Group_Request_ReferenceForArrayConstraintsFromSetProvisioning_Group_Request_Reference($provisioning_Group_Request_Reference))) {
            throw new \InvalidArgumentException($provisioning_Group_Request_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Provisioning_Group_Request_Reference = $provisioning_Group_Request_Reference;
        return $this;
    }
    /**
     * Add item to Provisioning_Group_Request_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_GroupObjectType $item
     * @return \StructType\Provisioning_Group_Request_ReferencesType
     */
    public function addToProvisioning_Group_Request_Reference(\StructType\Provisioning_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Provisioning_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The Provisioning_Group_Request_Reference property can only contain items of type \StructType\Provisioning_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Provisioning_Group_Request_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Provisioning_Group_Request_ReferencesType
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
