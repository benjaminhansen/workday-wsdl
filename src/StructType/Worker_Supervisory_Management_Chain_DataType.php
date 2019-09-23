<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Supervisory_Management_Chain_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's supervisory management chain.
 * @subpackage Structs
 */
class Worker_Supervisory_Management_Chain_DataType extends AbstractStructBase
{
    /**
     * The Management_Chain_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Management_Chain_DataType[]
     */
    public $Management_Chain_Data;
    /**
     * Constructor method for Worker_Supervisory_Management_Chain_DataType
     * @uses Worker_Supervisory_Management_Chain_DataType::setManagement_Chain_Data()
     * @param \StructType\Management_Chain_DataType[] $management_Chain_Data
     */
    public function __construct(array $management_Chain_Data = array())
    {
        $this
            ->setManagement_Chain_Data($management_Chain_Data);
    }
    /**
     * Get Management_Chain_Data value
     * @return \StructType\Management_Chain_DataType[]|null
     */
    public function getManagement_Chain_Data()
    {
        return $this->Management_Chain_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setManagement_Chain_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManagement_Chain_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManagement_Chain_DataForArrayConstraintsFromSetManagement_Chain_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Supervisory_Management_Chain_DataTypeManagement_Chain_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Supervisory_Management_Chain_DataTypeManagement_Chain_DataItem instanceof \StructType\Management_Chain_DataType) {
                $invalidValues[] = is_object($worker_Supervisory_Management_Chain_DataTypeManagement_Chain_DataItem) ? get_class($worker_Supervisory_Management_Chain_DataTypeManagement_Chain_DataItem) : sprintf('%s(%s)', gettype($worker_Supervisory_Management_Chain_DataTypeManagement_Chain_DataItem), var_export($worker_Supervisory_Management_Chain_DataTypeManagement_Chain_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Management_Chain_Data property can only contain items of type \StructType\Management_Chain_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Management_Chain_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Management_Chain_DataType[] $management_Chain_Data
     * @return \StructType\Worker_Supervisory_Management_Chain_DataType
     */
    public function setManagement_Chain_Data(array $management_Chain_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($management_Chain_DataArrayErrorMessage = self::validateManagement_Chain_DataForArrayConstraintsFromSetManagement_Chain_Data($management_Chain_Data))) {
            throw new \InvalidArgumentException($management_Chain_DataArrayErrorMessage, __LINE__);
        }
        $this->Management_Chain_Data = $management_Chain_Data;
        return $this;
    }
    /**
     * Add item to Management_Chain_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Management_Chain_DataType $item
     * @return \StructType\Worker_Supervisory_Management_Chain_DataType
     */
    public function addToManagement_Chain_Data(\StructType\Management_Chain_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Management_Chain_DataType) {
            throw new \InvalidArgumentException(sprintf('The Management_Chain_Data property can only contain items of type \StructType\Management_Chain_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Management_Chain_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Supervisory_Management_Chain_DataType
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
