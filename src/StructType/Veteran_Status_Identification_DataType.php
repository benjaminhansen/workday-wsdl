<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Veteran_Status_Identification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information to assign a Veteran Status Identification for a Worker.
 * @subpackage Structs
 */
class Veteran_Status_Identification_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Worker for this business process.
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The US_Veteran_Tenanted_Reference
     * Meta information extracted from the WSDL
     * - documentation: The US Veteran Status to be assigned to the Worker.
     * @var \WorkdayWsdl\\StructType\US_Veteran_Status__Tenanted_ObjectType
     */
    public $US_Veteran_Tenanted_Reference;
    /**
     * The US_Protected_Veteran_Status_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The US Protected Veteran Status Types for this Worker's Veteran Status.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType[]
     */
    public $US_Protected_Veteran_Status_Type_Reference;
    /**
     * The Discharge_Date
     * Meta information extracted from the WSDL
     * - documentation: The discharge date for workers that have been recently separated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Discharge_Date;
    /**
     * Constructor method for Veteran_Status_Identification_DataType
     * @uses Veteran_Status_Identification_DataType::setWorker_Reference()
     * @uses Veteran_Status_Identification_DataType::setUS_Veteran_Tenanted_Reference()
     * @uses Veteran_Status_Identification_DataType::setUS_Protected_Veteran_Status_Type_Reference()
     * @uses Veteran_Status_Identification_DataType::setDischarge_Date()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\US_Veteran_Status__Tenanted_ObjectType $uS_Veteran_Tenanted_Reference
     * @param \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType[] $uS_Protected_Veteran_Status_Type_Reference
     * @param string $discharge_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, \WorkdayWsdl\\StructType\US_Veteran_Status__Tenanted_ObjectType $uS_Veteran_Tenanted_Reference = null, array $uS_Protected_Veteran_Status_Type_Reference = array(), $discharge_Date = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setUS_Veteran_Tenanted_Reference($uS_Veteran_Tenanted_Reference)
            ->setUS_Protected_Veteran_Status_Type_Reference($uS_Protected_Veteran_Status_Type_Reference)
            ->setDischarge_Date($discharge_Date);
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get US_Veteran_Tenanted_Reference value
     * @return \WorkdayWsdl\\StructType\US_Veteran_Status__Tenanted_ObjectType|null
     */
    public function getUS_Veteran_Tenanted_Reference()
    {
        return $this->US_Veteran_Tenanted_Reference;
    }
    /**
     * Set US_Veteran_Tenanted_Reference value
     * @param \WorkdayWsdl\\StructType\US_Veteran_Status__Tenanted_ObjectType $uS_Veteran_Tenanted_Reference
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType
     */
    public function setUS_Veteran_Tenanted_Reference(\WorkdayWsdl\\StructType\US_Veteran_Status__Tenanted_ObjectType $uS_Veteran_Tenanted_Reference = null)
    {
        $this->US_Veteran_Tenanted_Reference = $uS_Veteran_Tenanted_Reference;
        return $this;
    }
    /**
     * Get US_Protected_Veteran_Status_Type_Reference value
     * @return \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType[]|null
     */
    public function getUS_Protected_Veteran_Status_Type_Reference()
    {
        return $this->US_Protected_Veteran_Status_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUS_Protected_Veteran_Status_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUS_Protected_Veteran_Status_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUS_Protected_Veteran_Status_Type_ReferenceForArrayConstraintsFromSetUS_Protected_Veteran_Status_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $veteran_Status_Identification_DataTypeUS_Protected_Veteran_Status_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$veteran_Status_Identification_DataTypeUS_Protected_Veteran_Status_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType) {
                $invalidValues[] = is_object($veteran_Status_Identification_DataTypeUS_Protected_Veteran_Status_Type_ReferenceItem) ? get_class($veteran_Status_Identification_DataTypeUS_Protected_Veteran_Status_Type_ReferenceItem) : sprintf('%s(%s)', gettype($veteran_Status_Identification_DataTypeUS_Protected_Veteran_Status_Type_ReferenceItem), var_export($veteran_Status_Identification_DataTypeUS_Protected_Veteran_Status_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The US_Protected_Veteran_Status_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set US_Protected_Veteran_Status_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType[] $uS_Protected_Veteran_Status_Type_Reference
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType
     */
    public function setUS_Protected_Veteran_Status_Type_Reference(array $uS_Protected_Veteran_Status_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($uS_Protected_Veteran_Status_Type_ReferenceArrayErrorMessage = self::validateUS_Protected_Veteran_Status_Type_ReferenceForArrayConstraintsFromSetUS_Protected_Veteran_Status_Type_Reference($uS_Protected_Veteran_Status_Type_Reference))) {
            throw new \InvalidArgumentException($uS_Protected_Veteran_Status_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->US_Protected_Veteran_Status_Type_Reference = $uS_Protected_Veteran_Status_Type_Reference;
        return $this;
    }
    /**
     * Add item to US_Protected_Veteran_Status_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType
     */
    public function addToUS_Protected_Veteran_Status_Type_Reference(\WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The US_Protected_Veteran_Status_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\US_Protected_Veteran_Status_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->US_Protected_Veteran_Status_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Discharge_Date value
     * @return string|null
     */
    public function getDischarge_Date()
    {
        return $this->Discharge_Date;
    }
    /**
     * Set Discharge_Date value
     * @param string $discharge_Date
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType
     */
    public function setDischarge_Date($discharge_Date = null)
    {
        // validation for constraint: string
        if (!is_null($discharge_Date) && !is_string($discharge_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discharge_Date, true), gettype($discharge_Date)), __LINE__);
        }
        $this->Discharge_Date = $discharge_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Veteran_Status_Identification_DataType
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
