<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Status_Rule_SetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the Data and Reference to the Work Status Rule Sets
 * @subpackage Structs
 */
class Work_Status_Rule_SetType extends AbstractStructBase
{
    /**
     * The Work_Status_Rule_Set_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to Work Status Rule Set where data is retrieved from
     * - minOccurs: 0
     * @var \StructType\Work_Status_Rule_SetObjectType
     */
    public $Work_Status_Rule_Set_Reference;
    /**
     * The Work_Status_Rule_Set_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Status_Rule_Set_DataType[]
     */
    public $Work_Status_Rule_Set_Data;
    /**
     * Constructor method for Work_Status_Rule_SetType
     * @uses Work_Status_Rule_SetType::setWork_Status_Rule_Set_Reference()
     * @uses Work_Status_Rule_SetType::setWork_Status_Rule_Set_Data()
     * @param \StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference
     * @param \StructType\Work_Status_Rule_Set_DataType[] $work_Status_Rule_Set_Data
     */
    public function __construct(\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference = null, array $work_Status_Rule_Set_Data = array())
    {
        $this
            ->setWork_Status_Rule_Set_Reference($work_Status_Rule_Set_Reference)
            ->setWork_Status_Rule_Set_Data($work_Status_Rule_Set_Data);
    }
    /**
     * Get Work_Status_Rule_Set_Reference value
     * @return \StructType\Work_Status_Rule_SetObjectType|null
     */
    public function getWork_Status_Rule_Set_Reference()
    {
        return $this->Work_Status_Rule_Set_Reference;
    }
    /**
     * Set Work_Status_Rule_Set_Reference value
     * @param \StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference
     * @return \StructType\Work_Status_Rule_SetType
     */
    public function setWork_Status_Rule_Set_Reference(\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference = null)
    {
        $this->Work_Status_Rule_Set_Reference = $work_Status_Rule_Set_Reference;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Set_Data value
     * @return \StructType\Work_Status_Rule_Set_DataType[]|null
     */
    public function getWork_Status_Rule_Set_Data()
    {
        return $this->Work_Status_Rule_Set_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Status_Rule_Set_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Status_Rule_Set_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Status_Rule_Set_DataForArrayConstraintsFromSetWork_Status_Rule_Set_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Status_Rule_SetTypeWork_Status_Rule_Set_DataItem) {
            // validation for constraint: itemType
            if (!$work_Status_Rule_SetTypeWork_Status_Rule_Set_DataItem instanceof \StructType\Work_Status_Rule_Set_DataType) {
                $invalidValues[] = is_object($work_Status_Rule_SetTypeWork_Status_Rule_Set_DataItem) ? get_class($work_Status_Rule_SetTypeWork_Status_Rule_Set_DataItem) : sprintf('%s(%s)', gettype($work_Status_Rule_SetTypeWork_Status_Rule_Set_DataItem), var_export($work_Status_Rule_SetTypeWork_Status_Rule_Set_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Status_Rule_Set_Data property can only contain items of type \StructType\Work_Status_Rule_Set_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Status_Rule_Set_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Status_Rule_Set_DataType[] $work_Status_Rule_Set_Data
     * @return \StructType\Work_Status_Rule_SetType
     */
    public function setWork_Status_Rule_Set_Data(array $work_Status_Rule_Set_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Status_Rule_Set_DataArrayErrorMessage = self::validateWork_Status_Rule_Set_DataForArrayConstraintsFromSetWork_Status_Rule_Set_Data($work_Status_Rule_Set_Data))) {
            throw new \InvalidArgumentException($work_Status_Rule_Set_DataArrayErrorMessage, __LINE__);
        }
        $this->Work_Status_Rule_Set_Data = $work_Status_Rule_Set_Data;
        return $this;
    }
    /**
     * Add item to Work_Status_Rule_Set_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Status_Rule_Set_DataType $item
     * @return \StructType\Work_Status_Rule_SetType
     */
    public function addToWork_Status_Rule_Set_Data(\StructType\Work_Status_Rule_Set_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Status_Rule_Set_DataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Status_Rule_Set_Data property can only contain items of type \StructType\Work_Status_Rule_Set_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Status_Rule_Set_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Status_Rule_SetType
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
