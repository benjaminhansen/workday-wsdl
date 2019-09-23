<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Organization_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's organizations that they are a member of.
 * @subpackage Structs
 */
class Worker_Organization_DataType extends AbstractStructBase
{
    /**
     * The Worker_Organization_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[]
     */
    public $Worker_Organization_Data;
    /**
     * Constructor method for Worker_Organization_DataType
     * @uses Worker_Organization_DataType::setWorker_Organization_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[] $worker_Organization_Data
     */
    public function __construct(array $worker_Organization_Data = array())
    {
        $this
            ->setWorker_Organization_Data($worker_Organization_Data);
    }
    /**
     * Get Worker_Organization_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[]|null
     */
    public function getWorker_Organization_Data()
    {
        return $this->Worker_Organization_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Organization_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Organization_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Organization_DataForArrayConstraintsFromSetWorker_Organization_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Organization_DataTypeWorker_Organization_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Organization_DataTypeWorker_Organization_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType) {
                $invalidValues[] = is_object($worker_Organization_DataTypeWorker_Organization_DataItem) ? get_class($worker_Organization_DataTypeWorker_Organization_DataItem) : sprintf('%s(%s)', gettype($worker_Organization_DataTypeWorker_Organization_DataItem), var_export($worker_Organization_DataTypeWorker_Organization_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Organization_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[] $worker_Organization_Data
     * @return \WorkdayWsdl\\StructType\Worker_Organization_DataType
     */
    public function setWorker_Organization_Data(array $worker_Organization_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Organization_DataArrayErrorMessage = self::validateWorker_Organization_DataForArrayConstraintsFromSetWorker_Organization_Data($worker_Organization_Data))) {
            throw new \InvalidArgumentException($worker_Organization_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Organization_Data = $worker_Organization_Data;
        return $this;
    }
    /**
     * Add item to Worker_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Organization_DataType
     */
    public function addToWorker_Organization_Data(\WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Organization_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Organization_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Organization_DataType
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
