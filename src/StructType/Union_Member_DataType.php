<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Union_Member_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing a single union member with associated membership details.
 * @subpackage Structs
 */
class Union_Member_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the worker who's enrolled, or enrolling, in the union.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Union_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the union in which the worker is member.
     * @var \StructType\UnionObjectType
     */
    public $Union_Reference;
    /**
     * The Seniority_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when the worker gained seniority at the union.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Seniority_Date;
    /**
     * The Union_Membership_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\Union_Membership_DataType[]
     */
    public $Union_Membership_Data;
    /**
     * Constructor method for Union_Member_DataType
     * @uses Union_Member_DataType::setWorker_Reference()
     * @uses Union_Member_DataType::setUnion_Reference()
     * @uses Union_Member_DataType::setSeniority_Date()
     * @uses Union_Member_DataType::setUnion_Membership_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param \StructType\UnionObjectType $union_Reference
     * @param string $seniority_Date
     * @param \StructType\Union_Membership_DataType[] $union_Membership_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, \StructType\UnionObjectType $union_Reference = null, $seniority_Date = null, array $union_Membership_Data = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setUnion_Reference($union_Reference)
            ->setSeniority_Date($seniority_Date)
            ->setUnion_Membership_Data($union_Membership_Data);
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\WorkerObjectType $worker_Reference
     * @return \StructType\Union_Member_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Union_Reference value
     * @return \StructType\UnionObjectType|null
     */
    public function getUnion_Reference()
    {
        return $this->Union_Reference;
    }
    /**
     * Set Union_Reference value
     * @param \StructType\UnionObjectType $union_Reference
     * @return \StructType\Union_Member_DataType
     */
    public function setUnion_Reference(\StructType\UnionObjectType $union_Reference = null)
    {
        $this->Union_Reference = $union_Reference;
        return $this;
    }
    /**
     * Get Seniority_Date value
     * @return string|null
     */
    public function getSeniority_Date()
    {
        return $this->Seniority_Date;
    }
    /**
     * Set Seniority_Date value
     * @param string $seniority_Date
     * @return \StructType\Union_Member_DataType
     */
    public function setSeniority_Date($seniority_Date = null)
    {
        // validation for constraint: string
        if (!is_null($seniority_Date) && !is_string($seniority_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seniority_Date, true), gettype($seniority_Date)), __LINE__);
        }
        $this->Seniority_Date = $seniority_Date;
        return $this;
    }
    /**
     * Get Union_Membership_Data value
     * @return \StructType\Union_Membership_DataType[]|null
     */
    public function getUnion_Membership_Data()
    {
        return $this->Union_Membership_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUnion_Membership_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnion_Membership_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnion_Membership_DataForArrayConstraintsFromSetUnion_Membership_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $union_Member_DataTypeUnion_Membership_DataItem) {
            // validation for constraint: itemType
            if (!$union_Member_DataTypeUnion_Membership_DataItem instanceof \StructType\Union_Membership_DataType) {
                $invalidValues[] = is_object($union_Member_DataTypeUnion_Membership_DataItem) ? get_class($union_Member_DataTypeUnion_Membership_DataItem) : sprintf('%s(%s)', gettype($union_Member_DataTypeUnion_Membership_DataItem), var_export($union_Member_DataTypeUnion_Membership_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Union_Membership_Data property can only contain items of type \StructType\Union_Membership_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Union_Membership_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Union_Membership_DataType[] $union_Membership_Data
     * @return \StructType\Union_Member_DataType
     */
    public function setUnion_Membership_Data(array $union_Membership_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($union_Membership_DataArrayErrorMessage = self::validateUnion_Membership_DataForArrayConstraintsFromSetUnion_Membership_Data($union_Membership_Data))) {
            throw new \InvalidArgumentException($union_Membership_DataArrayErrorMessage, __LINE__);
        }
        $this->Union_Membership_Data = $union_Membership_Data;
        return $this;
    }
    /**
     * Add item to Union_Membership_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Union_Membership_DataType $item
     * @return \StructType\Union_Member_DataType
     */
    public function addToUnion_Membership_Data(\StructType\Union_Membership_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Union_Membership_DataType) {
            throw new \InvalidArgumentException(sprintf('The Union_Membership_Data property can only contain items of type \StructType\Union_Membership_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Union_Membership_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Union_Member_DataType
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
