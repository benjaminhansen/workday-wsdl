<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sort_Order_Enabled_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Sort Order Enableds response element.
 * @subpackage Structs
 */
class Sort_Order_Enabled_Response_DataType extends AbstractStructBase
{
    /**
     * The Sort_Order_Enabled
     * Meta information extracted from the WSDL
     * - documentation: Sort Order Enabled data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Sort_Order_EnabledType[]
     */
    public $Sort_Order_Enabled;
    /**
     * Constructor method for Sort_Order_Enabled_Response_DataType
     * @uses Sort_Order_Enabled_Response_DataType::setSort_Order_Enabled()
     * @param \WorkdayWsdl\\StructType\Sort_Order_EnabledType[] $sort_Order_Enabled
     */
    public function __construct(array $sort_Order_Enabled = array())
    {
        $this
            ->setSort_Order_Enabled($sort_Order_Enabled);
    }
    /**
     * Get Sort_Order_Enabled value
     * @return \WorkdayWsdl\\StructType\Sort_Order_EnabledType[]|null
     */
    public function getSort_Order_Enabled()
    {
        return $this->Sort_Order_Enabled;
    }
    /**
     * This method is responsible for validating the values passed to the setSort_Order_Enabled method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSort_Order_Enabled method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSort_Order_EnabledForArrayConstraintsFromSetSort_Order_Enabled(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sort_Order_Enabled_Response_DataTypeSort_Order_EnabledItem) {
            // validation for constraint: itemType
            if (!$sort_Order_Enabled_Response_DataTypeSort_Order_EnabledItem instanceof \WorkdayWsdl\\StructType\Sort_Order_EnabledType) {
                $invalidValues[] = is_object($sort_Order_Enabled_Response_DataTypeSort_Order_EnabledItem) ? get_class($sort_Order_Enabled_Response_DataTypeSort_Order_EnabledItem) : sprintf('%s(%s)', gettype($sort_Order_Enabled_Response_DataTypeSort_Order_EnabledItem), var_export($sort_Order_Enabled_Response_DataTypeSort_Order_EnabledItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sort_Order_Enabled property can only contain items of type \WorkdayWsdl\\StructType\Sort_Order_EnabledType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sort_Order_Enabled value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Sort_Order_EnabledType[] $sort_Order_Enabled
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Response_DataType
     */
    public function setSort_Order_Enabled(array $sort_Order_Enabled = array())
    {
        // validation for constraint: array
        if ('' !== ($sort_Order_EnabledArrayErrorMessage = self::validateSort_Order_EnabledForArrayConstraintsFromSetSort_Order_Enabled($sort_Order_Enabled))) {
            throw new \InvalidArgumentException($sort_Order_EnabledArrayErrorMessage, __LINE__);
        }
        $this->Sort_Order_Enabled = $sort_Order_Enabled;
        return $this;
    }
    /**
     * Add item to Sort_Order_Enabled value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Sort_Order_EnabledType $item
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Response_DataType
     */
    public function addToSort_Order_Enabled(\WorkdayWsdl\\StructType\Sort_Order_EnabledType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Sort_Order_EnabledType) {
            throw new \InvalidArgumentException(sprintf('The Sort_Order_Enabled property can only contain items of type \WorkdayWsdl\\StructType\Sort_Order_EnabledType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sort_Order_Enabled[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Response_DataType
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
