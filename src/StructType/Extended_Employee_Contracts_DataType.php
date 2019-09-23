<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Extended_Employee_Contracts_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the extended employee's contract information.
 * @subpackage Structs
 */
class Extended_Employee_Contracts_DataType extends AbstractStructBase
{
    /**
     * The Extended_Employee_Contract_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains extended data for an employee contract.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType[]
     */
    public $Extended_Employee_Contract_Data;
    /**
     * Constructor method for Extended_Employee_Contracts_DataType
     * @uses Extended_Employee_Contracts_DataType::setExtended_Employee_Contract_Data()
     * @param \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType[] $extended_Employee_Contract_Data
     */
    public function __construct(array $extended_Employee_Contract_Data = array())
    {
        $this
            ->setExtended_Employee_Contract_Data($extended_Employee_Contract_Data);
    }
    /**
     * Get Extended_Employee_Contract_Data value
     * @return \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType[]|null
     */
    public function getExtended_Employee_Contract_Data()
    {
        return $this->Extended_Employee_Contract_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setExtended_Employee_Contract_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtended_Employee_Contract_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtended_Employee_Contract_DataForArrayConstraintsFromSetExtended_Employee_Contract_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $extended_Employee_Contracts_DataTypeExtended_Employee_Contract_DataItem) {
            // validation for constraint: itemType
            if (!$extended_Employee_Contracts_DataTypeExtended_Employee_Contract_DataItem instanceof \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType) {
                $invalidValues[] = is_object($extended_Employee_Contracts_DataTypeExtended_Employee_Contract_DataItem) ? get_class($extended_Employee_Contracts_DataTypeExtended_Employee_Contract_DataItem) : sprintf('%s(%s)', gettype($extended_Employee_Contracts_DataTypeExtended_Employee_Contract_DataItem), var_export($extended_Employee_Contracts_DataTypeExtended_Employee_Contract_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Extended_Employee_Contract_Data property can only contain items of type \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Extended_Employee_Contract_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType[] $extended_Employee_Contract_Data
     * @return \WorkdayWsdl\\StructType\Extended_Employee_Contracts_DataType
     */
    public function setExtended_Employee_Contract_Data(array $extended_Employee_Contract_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($extended_Employee_Contract_DataArrayErrorMessage = self::validateExtended_Employee_Contract_DataForArrayConstraintsFromSetExtended_Employee_Contract_Data($extended_Employee_Contract_Data))) {
            throw new \InvalidArgumentException($extended_Employee_Contract_DataArrayErrorMessage, __LINE__);
        }
        $this->Extended_Employee_Contract_Data = $extended_Employee_Contract_Data;
        return $this;
    }
    /**
     * Add item to Extended_Employee_Contract_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType $item
     * @return \WorkdayWsdl\\StructType\Extended_Employee_Contracts_DataType
     */
    public function addToExtended_Employee_Contract_Data(\WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType) {
            throw new \InvalidArgumentException(sprintf('The Extended_Employee_Contract_Data property can only contain items of type \WorkdayWsdl\\StructType\Extended_Employee_Contract_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Extended_Employee_Contract_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Extended_Employee_Contracts_DataType
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
