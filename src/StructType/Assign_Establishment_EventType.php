<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Establishment_EventType StructType
 * Meta information extracted from the WSDL
 * - documentation: Assign Establishment Event
 * @subpackage Structs
 */
class Assign_Establishment_EventType extends AbstractStructBase
{
    /**
     * The Workers_Secured_by_Transaction_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workers Secured by Transaction Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType[]
     */
    public $Workers_Secured_by_Transaction_Reference;
    /**
     * The Assign_Establishment_Data
     * Meta information extracted from the WSDL
     * - documentation: The request element containing all necessary information to manually assign an establishment to a worker position
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Assign_Establishment_DataType[]
     */
    public $Assign_Establishment_Data;
    /**
     * Constructor method for Assign_Establishment_EventType
     * @uses Assign_Establishment_EventType::setWorkers_Secured_by_Transaction_Reference()
     * @uses Assign_Establishment_EventType::setAssign_Establishment_Data()
     * @param \StructType\WorkerObjectType[] $workers_Secured_by_Transaction_Reference
     * @param \StructType\Assign_Establishment_DataType[] $assign_Establishment_Data
     */
    public function __construct(array $workers_Secured_by_Transaction_Reference = array(), array $assign_Establishment_Data = array())
    {
        $this
            ->setWorkers_Secured_by_Transaction_Reference($workers_Secured_by_Transaction_Reference)
            ->setAssign_Establishment_Data($assign_Establishment_Data);
    }
    /**
     * Get Workers_Secured_by_Transaction_Reference value
     * @return \StructType\WorkerObjectType[]|null
     */
    public function getWorkers_Secured_by_Transaction_Reference()
    {
        return $this->Workers_Secured_by_Transaction_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkers_Secured_by_Transaction_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkers_Secured_by_Transaction_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkers_Secured_by_Transaction_ReferenceForArrayConstraintsFromSetWorkers_Secured_by_Transaction_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_Establishment_EventTypeWorkers_Secured_by_Transaction_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_Establishment_EventTypeWorkers_Secured_by_Transaction_ReferenceItem instanceof \StructType\WorkerObjectType) {
                $invalidValues[] = is_object($assign_Establishment_EventTypeWorkers_Secured_by_Transaction_ReferenceItem) ? get_class($assign_Establishment_EventTypeWorkers_Secured_by_Transaction_ReferenceItem) : sprintf('%s(%s)', gettype($assign_Establishment_EventTypeWorkers_Secured_by_Transaction_ReferenceItem), var_export($assign_Establishment_EventTypeWorkers_Secured_by_Transaction_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workers_Secured_by_Transaction_Reference property can only contain items of type \StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workers_Secured_by_Transaction_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkerObjectType[] $workers_Secured_by_Transaction_Reference
     * @return \StructType\Assign_Establishment_EventType
     */
    public function setWorkers_Secured_by_Transaction_Reference(array $workers_Secured_by_Transaction_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($workers_Secured_by_Transaction_ReferenceArrayErrorMessage = self::validateWorkers_Secured_by_Transaction_ReferenceForArrayConstraintsFromSetWorkers_Secured_by_Transaction_Reference($workers_Secured_by_Transaction_Reference))) {
            throw new \InvalidArgumentException($workers_Secured_by_Transaction_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Workers_Secured_by_Transaction_Reference = $workers_Secured_by_Transaction_Reference;
        return $this;
    }
    /**
     * Add item to Workers_Secured_by_Transaction_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkerObjectType $item
     * @return \StructType\Assign_Establishment_EventType
     */
    public function addToWorkers_Secured_by_Transaction_Reference(\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Workers_Secured_by_Transaction_Reference property can only contain items of type \StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workers_Secured_by_Transaction_Reference[] = $item;
        return $this;
    }
    /**
     * Get Assign_Establishment_Data value
     * @return \StructType\Assign_Establishment_DataType[]|null
     */
    public function getAssign_Establishment_Data()
    {
        return $this->Assign_Establishment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAssign_Establishment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssign_Establishment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssign_Establishment_DataForArrayConstraintsFromSetAssign_Establishment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_Establishment_EventTypeAssign_Establishment_DataItem) {
            // validation for constraint: itemType
            if (!$assign_Establishment_EventTypeAssign_Establishment_DataItem instanceof \StructType\Assign_Establishment_DataType) {
                $invalidValues[] = is_object($assign_Establishment_EventTypeAssign_Establishment_DataItem) ? get_class($assign_Establishment_EventTypeAssign_Establishment_DataItem) : sprintf('%s(%s)', gettype($assign_Establishment_EventTypeAssign_Establishment_DataItem), var_export($assign_Establishment_EventTypeAssign_Establishment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Assign_Establishment_Data property can only contain items of type \StructType\Assign_Establishment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Assign_Establishment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Assign_Establishment_DataType[] $assign_Establishment_Data
     * @return \StructType\Assign_Establishment_EventType
     */
    public function setAssign_Establishment_Data(array $assign_Establishment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($assign_Establishment_DataArrayErrorMessage = self::validateAssign_Establishment_DataForArrayConstraintsFromSetAssign_Establishment_Data($assign_Establishment_Data))) {
            throw new \InvalidArgumentException($assign_Establishment_DataArrayErrorMessage, __LINE__);
        }
        $this->Assign_Establishment_Data = $assign_Establishment_Data;
        return $this;
    }
    /**
     * Add item to Assign_Establishment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Assign_Establishment_DataType $item
     * @return \StructType\Assign_Establishment_EventType
     */
    public function addToAssign_Establishment_Data(\StructType\Assign_Establishment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Assign_Establishment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Assign_Establishment_Data property can only contain items of type \StructType\Assign_Establishment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Assign_Establishment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Assign_Establishment_EventType
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
