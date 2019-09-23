<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sort_Order_Enabled_Order_Data_ContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing information about the Orderable Items and their order.
 * @subpackage Structs
 */
class Sort_Order_Enabled_Order_Data_ContainerType extends AbstractStructBase
{
    /**
     * The Sort_Order_Enabled_Reference
     * Meta information extracted from the WSDL
     * - documentation: Sort Order Enabled instance reference.
     * @var \StructType\Sort_Order_EnabledObjectType
     */
    public $Sort_Order_Enabled_Reference;
    /**
     * The Order_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing information about the Orderable Item and its order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Sort_Order_Enabled_Order_DataType[]
     */
    public $Order_Data;
    /**
     * Constructor method for Sort_Order_Enabled_Order_Data_ContainerType
     * @uses Sort_Order_Enabled_Order_Data_ContainerType::setSort_Order_Enabled_Reference()
     * @uses Sort_Order_Enabled_Order_Data_ContainerType::setOrder_Data()
     * @param \StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference
     * @param \StructType\Sort_Order_Enabled_Order_DataType[] $order_Data
     */
    public function __construct(\StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference = null, array $order_Data = array())
    {
        $this
            ->setSort_Order_Enabled_Reference($sort_Order_Enabled_Reference)
            ->setOrder_Data($order_Data);
    }
    /**
     * Get Sort_Order_Enabled_Reference value
     * @return \StructType\Sort_Order_EnabledObjectType|null
     */
    public function getSort_Order_Enabled_Reference()
    {
        return $this->Sort_Order_Enabled_Reference;
    }
    /**
     * Set Sort_Order_Enabled_Reference value
     * @param \StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference
     * @return \StructType\Sort_Order_Enabled_Order_Data_ContainerType
     */
    public function setSort_Order_Enabled_Reference(\StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference = null)
    {
        $this->Sort_Order_Enabled_Reference = $sort_Order_Enabled_Reference;
        return $this;
    }
    /**
     * Get Order_Data value
     * @return \StructType\Sort_Order_Enabled_Order_DataType[]|null
     */
    public function getOrder_Data()
    {
        return $this->Order_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrder_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrder_DataForArrayConstraintsFromSetOrder_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sort_Order_Enabled_Order_Data_ContainerTypeOrder_DataItem) {
            // validation for constraint: itemType
            if (!$sort_Order_Enabled_Order_Data_ContainerTypeOrder_DataItem instanceof \StructType\Sort_Order_Enabled_Order_DataType) {
                $invalidValues[] = is_object($sort_Order_Enabled_Order_Data_ContainerTypeOrder_DataItem) ? get_class($sort_Order_Enabled_Order_Data_ContainerTypeOrder_DataItem) : sprintf('%s(%s)', gettype($sort_Order_Enabled_Order_Data_ContainerTypeOrder_DataItem), var_export($sort_Order_Enabled_Order_Data_ContainerTypeOrder_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Order_Data property can only contain items of type \StructType\Sort_Order_Enabled_Order_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Order_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Sort_Order_Enabled_Order_DataType[] $order_Data
     * @return \StructType\Sort_Order_Enabled_Order_Data_ContainerType
     */
    public function setOrder_Data(array $order_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($order_DataArrayErrorMessage = self::validateOrder_DataForArrayConstraintsFromSetOrder_Data($order_Data))) {
            throw new \InvalidArgumentException($order_DataArrayErrorMessage, __LINE__);
        }
        $this->Order_Data = $order_Data;
        return $this;
    }
    /**
     * Add item to Order_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Sort_Order_Enabled_Order_DataType $item
     * @return \StructType\Sort_Order_Enabled_Order_Data_ContainerType
     */
    public function addToOrder_Data(\StructType\Sort_Order_Enabled_Order_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Sort_Order_Enabled_Order_DataType) {
            throw new \InvalidArgumentException(sprintf('The Order_Data property can only contain items of type \StructType\Sort_Order_Enabled_Order_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Order_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Sort_Order_Enabled_Order_Data_ContainerType
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
