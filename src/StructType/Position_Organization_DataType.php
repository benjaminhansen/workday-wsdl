<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Organization_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the position's organization that it is part of
 * @subpackage Structs
 */
class Position_Organization_DataType extends AbstractStructBase
{
    /**
     * The Position_Organization_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[]
     */
    public $Position_Organization_Data;
    /**
     * The Pay_Group_Assignment_Correct_or_Rescind_Data
     * Meta information extracted from the WSDL
     * - documentation: Provides additional information on Pay Group Assignment corrections or rescinds. This element only reports Pay Group Assignment Rescind events.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType[]
     */
    public $Pay_Group_Assignment_Correct_or_Rescind_Data;
    /**
     * Constructor method for Position_Organization_DataType
     * @uses Position_Organization_DataType::setPosition_Organization_Data()
     * @uses Position_Organization_DataType::setPay_Group_Assignment_Correct_or_Rescind_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[] $position_Organization_Data
     * @param \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType[] $pay_Group_Assignment_Correct_or_Rescind_Data
     */
    public function __construct(array $position_Organization_Data = array(), array $pay_Group_Assignment_Correct_or_Rescind_Data = array())
    {
        $this
            ->setPosition_Organization_Data($position_Organization_Data)
            ->setPay_Group_Assignment_Correct_or_Rescind_Data($pay_Group_Assignment_Correct_or_Rescind_Data);
    }
    /**
     * Get Position_Organization_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[]|null
     */
    public function getPosition_Organization_Data()
    {
        return $this->Position_Organization_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition_Organization_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition_Organization_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePosition_Organization_DataForArrayConstraintsFromSetPosition_Organization_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Organization_DataTypePosition_Organization_DataItem) {
            // validation for constraint: itemType
            if (!$position_Organization_DataTypePosition_Organization_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType) {
                $invalidValues[] = is_object($position_Organization_DataTypePosition_Organization_DataItem) ? get_class($position_Organization_DataTypePosition_Organization_DataItem) : sprintf('%s(%s)', gettype($position_Organization_DataTypePosition_Organization_DataItem), var_export($position_Organization_DataTypePosition_Organization_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Position_Organization_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Position_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType[] $position_Organization_Data
     * @return \WorkdayWsdl\\StructType\Position_Organization_DataType
     */
    public function setPosition_Organization_Data(array $position_Organization_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($position_Organization_DataArrayErrorMessage = self::validatePosition_Organization_DataForArrayConstraintsFromSetPosition_Organization_Data($position_Organization_Data))) {
            throw new \InvalidArgumentException($position_Organization_DataArrayErrorMessage, __LINE__);
        }
        $this->Position_Organization_Data = $position_Organization_Data;
        return $this;
    }
    /**
     * Add item to Position_Organization_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType $item
     * @return \WorkdayWsdl\\StructType\Position_Organization_DataType
     */
    public function addToPosition_Organization_Data(\WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType) {
            throw new \InvalidArgumentException(sprintf('The Position_Organization_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Position_Organization_Data[] = $item;
        return $this;
    }
    /**
     * Get Pay_Group_Assignment_Correct_or_Rescind_Data value
     * @return \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType[]|null
     */
    public function getPay_Group_Assignment_Correct_or_Rescind_Data()
    {
        return $this->Pay_Group_Assignment_Correct_or_Rescind_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPay_Group_Assignment_Correct_or_Rescind_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPay_Group_Assignment_Correct_or_Rescind_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePay_Group_Assignment_Correct_or_Rescind_DataForArrayConstraintsFromSetPay_Group_Assignment_Correct_or_Rescind_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Organization_DataTypePay_Group_Assignment_Correct_or_Rescind_DataItem) {
            // validation for constraint: itemType
            if (!$position_Organization_DataTypePay_Group_Assignment_Correct_or_Rescind_DataItem instanceof \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType) {
                $invalidValues[] = is_object($position_Organization_DataTypePay_Group_Assignment_Correct_or_Rescind_DataItem) ? get_class($position_Organization_DataTypePay_Group_Assignment_Correct_or_Rescind_DataItem) : sprintf('%s(%s)', gettype($position_Organization_DataTypePay_Group_Assignment_Correct_or_Rescind_DataItem), var_export($position_Organization_DataTypePay_Group_Assignment_Correct_or_Rescind_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pay_Group_Assignment_Correct_or_Rescind_Data property can only contain items of type \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pay_Group_Assignment_Correct_or_Rescind_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType[] $pay_Group_Assignment_Correct_or_Rescind_Data
     * @return \WorkdayWsdl\\StructType\Position_Organization_DataType
     */
    public function setPay_Group_Assignment_Correct_or_Rescind_Data(array $pay_Group_Assignment_Correct_or_Rescind_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($pay_Group_Assignment_Correct_or_Rescind_DataArrayErrorMessage = self::validatePay_Group_Assignment_Correct_or_Rescind_DataForArrayConstraintsFromSetPay_Group_Assignment_Correct_or_Rescind_Data($pay_Group_Assignment_Correct_or_Rescind_Data))) {
            throw new \InvalidArgumentException($pay_Group_Assignment_Correct_or_Rescind_DataArrayErrorMessage, __LINE__);
        }
        $this->Pay_Group_Assignment_Correct_or_Rescind_Data = $pay_Group_Assignment_Correct_or_Rescind_Data;
        return $this;
    }
    /**
     * Add item to Pay_Group_Assignment_Correct_or_Rescind_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType $item
     * @return \WorkdayWsdl\\StructType\Position_Organization_DataType
     */
    public function addToPay_Group_Assignment_Correct_or_Rescind_Data(\WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType) {
            throw new \InvalidArgumentException(sprintf('The Pay_Group_Assignment_Correct_or_Rescind_Data property can only contain items of type \WorkdayWsdl\\StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pay_Group_Assignment_Correct_or_Rescind_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Position_Organization_DataType
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
