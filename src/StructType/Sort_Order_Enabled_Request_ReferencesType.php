<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sort_Order_Enabled_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Sort Order Enabled request references.
 * @subpackage Structs
 */
class Sort_Order_Enabled_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Sort_Order_Enabled_Reference
     * Meta information extracted from the WSDL
     * - documentation: Sort Order Enabled instance references.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Sort_Order_EnabledObjectType[]
     */
    public $Sort_Order_Enabled_Reference;
    /**
     * Constructor method for Sort_Order_Enabled_Request_ReferencesType
     * @uses Sort_Order_Enabled_Request_ReferencesType::setSort_Order_Enabled_Reference()
     * @param \StructType\Sort_Order_EnabledObjectType[] $sort_Order_Enabled_Reference
     */
    public function __construct(array $sort_Order_Enabled_Reference = array())
    {
        $this
            ->setSort_Order_Enabled_Reference($sort_Order_Enabled_Reference);
    }
    /**
     * Get Sort_Order_Enabled_Reference value
     * @return \StructType\Sort_Order_EnabledObjectType[]|null
     */
    public function getSort_Order_Enabled_Reference()
    {
        return $this->Sort_Order_Enabled_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSort_Order_Enabled_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSort_Order_Enabled_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSort_Order_Enabled_ReferenceForArrayConstraintsFromSetSort_Order_Enabled_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sort_Order_Enabled_Request_ReferencesTypeSort_Order_Enabled_ReferenceItem) {
            // validation for constraint: itemType
            if (!$sort_Order_Enabled_Request_ReferencesTypeSort_Order_Enabled_ReferenceItem instanceof \StructType\Sort_Order_EnabledObjectType) {
                $invalidValues[] = is_object($sort_Order_Enabled_Request_ReferencesTypeSort_Order_Enabled_ReferenceItem) ? get_class($sort_Order_Enabled_Request_ReferencesTypeSort_Order_Enabled_ReferenceItem) : sprintf('%s(%s)', gettype($sort_Order_Enabled_Request_ReferencesTypeSort_Order_Enabled_ReferenceItem), var_export($sort_Order_Enabled_Request_ReferencesTypeSort_Order_Enabled_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sort_Order_Enabled_Reference property can only contain items of type \StructType\Sort_Order_EnabledObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sort_Order_Enabled_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Sort_Order_EnabledObjectType[] $sort_Order_Enabled_Reference
     * @return \StructType\Sort_Order_Enabled_Request_ReferencesType
     */
    public function setSort_Order_Enabled_Reference(array $sort_Order_Enabled_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($sort_Order_Enabled_ReferenceArrayErrorMessage = self::validateSort_Order_Enabled_ReferenceForArrayConstraintsFromSetSort_Order_Enabled_Reference($sort_Order_Enabled_Reference))) {
            throw new \InvalidArgumentException($sort_Order_Enabled_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Sort_Order_Enabled_Reference = $sort_Order_Enabled_Reference;
        return $this;
    }
    /**
     * Add item to Sort_Order_Enabled_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Sort_Order_EnabledObjectType $item
     * @return \StructType\Sort_Order_Enabled_Request_ReferencesType
     */
    public function addToSort_Order_Enabled_Reference(\StructType\Sort_Order_EnabledObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Sort_Order_EnabledObjectType) {
            throw new \InvalidArgumentException(sprintf('The Sort_Order_Enabled_Reference property can only contain items of type \StructType\Sort_Order_EnabledObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sort_Order_Enabled_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Sort_Order_Enabled_Request_ReferencesType
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
