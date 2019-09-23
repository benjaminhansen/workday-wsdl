<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sort_Order_Enabled_Order_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing information about the Orderable Item and its order.
 * @subpackage Structs
 */
class Sort_Order_Enabled_Order_DataType extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: The Order of the Collective Agreement Factor Parameter. | Specifies the order of evaluation of the Work Status Rules | The order this period has | Order for the Orderable Item.
     * - base: xsd:string
     * - maxLength: 6
     * - maxOccurs: 1
     * @var string
     */
    public $Order;
    /**
     * The Orderable_Item_Reference
     * Meta information extracted from the WSDL
     * - documentation: Orderable Item instance reference.
     * @var \WorkdayWsdl\\StructType\Orderable_ItemObjectType
     */
    public $Orderable_Item_Reference;
    /**
     * Constructor method for Sort_Order_Enabled_Order_DataType
     * @uses Sort_Order_Enabled_Order_DataType::setOrder()
     * @uses Sort_Order_Enabled_Order_DataType::setOrderable_Item_Reference()
     * @param string $order
     * @param \WorkdayWsdl\\StructType\Orderable_ItemObjectType $orderable_Item_Reference
     */
    public function __construct($order = null, \WorkdayWsdl\\StructType\Orderable_ItemObjectType $orderable_Item_Reference = null)
    {
        $this
            ->setOrder($order)
            ->setOrderable_Item_Reference($orderable_Item_Reference);
    }
    /**
     * Get Order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param string $order
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Order_DataType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($order) && mb_strlen($order) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get Orderable_Item_Reference value
     * @return \WorkdayWsdl\\StructType\Orderable_ItemObjectType|null
     */
    public function getOrderable_Item_Reference()
    {
        return $this->Orderable_Item_Reference;
    }
    /**
     * Set Orderable_Item_Reference value
     * @param \WorkdayWsdl\\StructType\Orderable_ItemObjectType $orderable_Item_Reference
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Order_DataType
     */
    public function setOrderable_Item_Reference(\WorkdayWsdl\\StructType\Orderable_ItemObjectType $orderable_Item_Reference = null)
    {
        $this->Orderable_Item_Reference = $orderable_Item_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Order_DataType
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
