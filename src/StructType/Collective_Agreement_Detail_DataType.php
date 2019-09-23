<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Collective Agreement data.
 * @subpackage Structs
 */
class Collective_Agreement_Detail_DataType extends AbstractStructBase
{
    /**
     * The Assign_Employee_Collective_Agreement_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Assign Employee Collective Agreement Event
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Assign_Employee_Collective_Agreement_Event_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective Date of the Assign Employee Collective Agreement Event
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The End_Assignment_Date
     * Meta information extracted from the WSDL
     * - documentation: The Collective Agreement End Date is populated if there is an End Collective Agreement Event for the Collective Agreement that is being displayed or if the Collective Agreement has been ended
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Assignment_Date;
    /**
     * The Collective_Agreement_Data
     * Meta information extracted from the WSDL
     * - documentation: The Collective Agreement Snapshot Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Collective_Agreement_Snapshot_DataType[]
     */
    public $Collective_Agreement_Data;
    /**
     * Constructor method for Collective_Agreement_Detail_DataType
     * @uses Collective_Agreement_Detail_DataType::setAssign_Employee_Collective_Agreement_Event_Reference()
     * @uses Collective_Agreement_Detail_DataType::setEffective_Date()
     * @uses Collective_Agreement_Detail_DataType::setEnd_Assignment_Date()
     * @uses Collective_Agreement_Detail_DataType::setCollective_Agreement_Data()
     * @param \StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference
     * @param string $effective_Date
     * @param string $end_Assignment_Date
     * @param \StructType\Collective_Agreement_Snapshot_DataType[] $collective_Agreement_Data
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference = null, $effective_Date = null, $end_Assignment_Date = null, array $collective_Agreement_Data = array())
    {
        $this
            ->setAssign_Employee_Collective_Agreement_Event_Reference($assign_Employee_Collective_Agreement_Event_Reference)
            ->setEffective_Date($effective_Date)
            ->setEnd_Assignment_Date($end_Assignment_Date)
            ->setCollective_Agreement_Data($collective_Agreement_Data);
    }
    /**
     * Get Assign_Employee_Collective_Agreement_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getAssign_Employee_Collective_Agreement_Event_Reference()
    {
        return $this->Assign_Employee_Collective_Agreement_Event_Reference;
    }
    /**
     * Set Assign_Employee_Collective_Agreement_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference
     * @return \StructType\Collective_Agreement_Detail_DataType
     */
    public function setAssign_Employee_Collective_Agreement_Event_Reference(\StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference = null)
    {
        $this->Assign_Employee_Collective_Agreement_Event_Reference = $assign_Employee_Collective_Agreement_Event_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Collective_Agreement_Detail_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get End_Assignment_Date value
     * @return string|null
     */
    public function getEnd_Assignment_Date()
    {
        return $this->End_Assignment_Date;
    }
    /**
     * Set End_Assignment_Date value
     * @param string $end_Assignment_Date
     * @return \StructType\Collective_Agreement_Detail_DataType
     */
    public function setEnd_Assignment_Date($end_Assignment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Assignment_Date) && !is_string($end_Assignment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Assignment_Date, true), gettype($end_Assignment_Date)), __LINE__);
        }
        $this->End_Assignment_Date = $end_Assignment_Date;
        return $this;
    }
    /**
     * Get Collective_Agreement_Data value
     * @return \StructType\Collective_Agreement_Snapshot_DataType[]|null
     */
    public function getCollective_Agreement_Data()
    {
        return $this->Collective_Agreement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCollective_Agreement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollective_Agreement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCollective_Agreement_DataForArrayConstraintsFromSetCollective_Agreement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collective_Agreement_Detail_DataTypeCollective_Agreement_DataItem) {
            // validation for constraint: itemType
            if (!$collective_Agreement_Detail_DataTypeCollective_Agreement_DataItem instanceof \StructType\Collective_Agreement_Snapshot_DataType) {
                $invalidValues[] = is_object($collective_Agreement_Detail_DataTypeCollective_Agreement_DataItem) ? get_class($collective_Agreement_Detail_DataTypeCollective_Agreement_DataItem) : sprintf('%s(%s)', gettype($collective_Agreement_Detail_DataTypeCollective_Agreement_DataItem), var_export($collective_Agreement_Detail_DataTypeCollective_Agreement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Collective_Agreement_Data property can only contain items of type \StructType\Collective_Agreement_Snapshot_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Collective_Agreement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Collective_Agreement_Snapshot_DataType[] $collective_Agreement_Data
     * @return \StructType\Collective_Agreement_Detail_DataType
     */
    public function setCollective_Agreement_Data(array $collective_Agreement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($collective_Agreement_DataArrayErrorMessage = self::validateCollective_Agreement_DataForArrayConstraintsFromSetCollective_Agreement_Data($collective_Agreement_Data))) {
            throw new \InvalidArgumentException($collective_Agreement_DataArrayErrorMessage, __LINE__);
        }
        $this->Collective_Agreement_Data = $collective_Agreement_Data;
        return $this;
    }
    /**
     * Add item to Collective_Agreement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Collective_Agreement_Snapshot_DataType $item
     * @return \StructType\Collective_Agreement_Detail_DataType
     */
    public function addToCollective_Agreement_Data(\StructType\Collective_Agreement_Snapshot_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Collective_Agreement_Snapshot_DataType) {
            throw new \InvalidArgumentException(sprintf('The Collective_Agreement_Data property can only contain items of type \StructType\Collective_Agreement_Snapshot_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Collective_Agreement_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Collective_Agreement_Detail_DataType
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
