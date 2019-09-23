<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sort_Order_EnabledType StructType
 * Meta information extracted from the WSDL
 * - documentation: Sort Order Enabled data.
 * @subpackage Structs
 */
class Sort_Order_EnabledType extends AbstractStructBase
{
    /**
     * The Sort_Order_Enabled_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Sort_Order_Enabled_Order_Data_ContainerType[]
     */
    public $Sort_Order_Enabled_Data;
    /**
     * Constructor method for Sort_Order_EnabledType
     * @uses Sort_Order_EnabledType::setSort_Order_Enabled_Data()
     * @param \StructType\Sort_Order_Enabled_Order_Data_ContainerType[] $sort_Order_Enabled_Data
     */
    public function __construct(array $sort_Order_Enabled_Data = array())
    {
        $this
            ->setSort_Order_Enabled_Data($sort_Order_Enabled_Data);
    }
    /**
     * Get Sort_Order_Enabled_Data value
     * @return \StructType\Sort_Order_Enabled_Order_Data_ContainerType[]|null
     */
    public function getSort_Order_Enabled_Data()
    {
        return $this->Sort_Order_Enabled_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSort_Order_Enabled_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSort_Order_Enabled_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSort_Order_Enabled_DataForArrayConstraintsFromSetSort_Order_Enabled_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sort_Order_EnabledTypeSort_Order_Enabled_DataItem) {
            // validation for constraint: itemType
            if (!$sort_Order_EnabledTypeSort_Order_Enabled_DataItem instanceof \StructType\Sort_Order_Enabled_Order_Data_ContainerType) {
                $invalidValues[] = is_object($sort_Order_EnabledTypeSort_Order_Enabled_DataItem) ? get_class($sort_Order_EnabledTypeSort_Order_Enabled_DataItem) : sprintf('%s(%s)', gettype($sort_Order_EnabledTypeSort_Order_Enabled_DataItem), var_export($sort_Order_EnabledTypeSort_Order_Enabled_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sort_Order_Enabled_Data property can only contain items of type \StructType\Sort_Order_Enabled_Order_Data_ContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sort_Order_Enabled_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Sort_Order_Enabled_Order_Data_ContainerType[] $sort_Order_Enabled_Data
     * @return \StructType\Sort_Order_EnabledType
     */
    public function setSort_Order_Enabled_Data(array $sort_Order_Enabled_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($sort_Order_Enabled_DataArrayErrorMessage = self::validateSort_Order_Enabled_DataForArrayConstraintsFromSetSort_Order_Enabled_Data($sort_Order_Enabled_Data))) {
            throw new \InvalidArgumentException($sort_Order_Enabled_DataArrayErrorMessage, __LINE__);
        }
        $this->Sort_Order_Enabled_Data = $sort_Order_Enabled_Data;
        return $this;
    }
    /**
     * Add item to Sort_Order_Enabled_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Sort_Order_Enabled_Order_Data_ContainerType $item
     * @return \StructType\Sort_Order_EnabledType
     */
    public function addToSort_Order_Enabled_Data(\StructType\Sort_Order_Enabled_Order_Data_ContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Sort_Order_Enabled_Order_Data_ContainerType) {
            throw new \InvalidArgumentException(sprintf('The Sort_Order_Enabled_Data property can only contain items of type \StructType\Sort_Order_Enabled_Order_Data_ContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sort_Order_Enabled_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Sort_Order_EnabledType
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
