<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Development_Item_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains all Development Items for the referenced Worker
 * @subpackage Structs
 */
class Worker_Development_Item_DataType extends AbstractStructBase
{
    /**
     * The Worker_Development_Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Development_ItemType[]
     */
    public $Worker_Development_Item;
    /**
     * Constructor method for Worker_Development_Item_DataType
     * @uses Worker_Development_Item_DataType::setWorker_Development_Item()
     * @param \WorkdayWsdl\\StructType\Worker_Development_ItemType[] $worker_Development_Item
     */
    public function __construct(array $worker_Development_Item = array())
    {
        $this
            ->setWorker_Development_Item($worker_Development_Item);
    }
    /**
     * Get Worker_Development_Item value
     * @return \WorkdayWsdl\\StructType\Worker_Development_ItemType[]|null
     */
    public function getWorker_Development_Item()
    {
        return $this->Worker_Development_Item;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Development_Item method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Development_Item method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Development_ItemForArrayConstraintsFromSetWorker_Development_Item(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Development_Item_DataTypeWorker_Development_ItemItem) {
            // validation for constraint: itemType
            if (!$worker_Development_Item_DataTypeWorker_Development_ItemItem instanceof \WorkdayWsdl\\StructType\Worker_Development_ItemType) {
                $invalidValues[] = is_object($worker_Development_Item_DataTypeWorker_Development_ItemItem) ? get_class($worker_Development_Item_DataTypeWorker_Development_ItemItem) : sprintf('%s(%s)', gettype($worker_Development_Item_DataTypeWorker_Development_ItemItem), var_export($worker_Development_Item_DataTypeWorker_Development_ItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Development_Item property can only contain items of type \WorkdayWsdl\\StructType\Worker_Development_ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Development_Item value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Development_ItemType[] $worker_Development_Item
     * @return \WorkdayWsdl\\StructType\Worker_Development_Item_DataType
     */
    public function setWorker_Development_Item(array $worker_Development_Item = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Development_ItemArrayErrorMessage = self::validateWorker_Development_ItemForArrayConstraintsFromSetWorker_Development_Item($worker_Development_Item))) {
            throw new \InvalidArgumentException($worker_Development_ItemArrayErrorMessage, __LINE__);
        }
        $this->Worker_Development_Item = $worker_Development_Item;
        return $this;
    }
    /**
     * Add item to Worker_Development_Item value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Development_ItemType $item
     * @return \WorkdayWsdl\\StructType\Worker_Development_Item_DataType
     */
    public function addToWorker_Development_Item(\WorkdayWsdl\\StructType\Worker_Development_ItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Development_ItemType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Development_Item property can only contain items of type \WorkdayWsdl\\StructType\Worker_Development_ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Development_Item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Development_Item_DataType
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
