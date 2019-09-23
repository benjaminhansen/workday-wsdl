<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Other_IDs_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: element containing the worker data for the Get Change Other IDs response.
 * @subpackage Structs
 */
class Change_Other_IDs_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Other_IDs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType[]
     */
    public $Change_Other_IDs;
    /**
     * Constructor method for Change_Other_IDs_Response_DataType
     * @uses Change_Other_IDs_Response_DataType::setChange_Other_IDs()
     * @param \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType[] $change_Other_IDs
     */
    public function __construct(array $change_Other_IDs = array())
    {
        $this
            ->setChange_Other_IDs($change_Other_IDs);
    }
    /**
     * Get Change_Other_IDs value
     * @return \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType[]|null
     */
    public function getChange_Other_IDs()
    {
        return $this->Change_Other_IDs;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Other_IDs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Other_IDs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Other_IDsForArrayConstraintsFromSetChange_Other_IDs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Other_IDs_Response_DataTypeChange_Other_IDsItem) {
            // validation for constraint: itemType
            if (!$change_Other_IDs_Response_DataTypeChange_Other_IDsItem instanceof \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType) {
                $invalidValues[] = is_object($change_Other_IDs_Response_DataTypeChange_Other_IDsItem) ? get_class($change_Other_IDs_Response_DataTypeChange_Other_IDsItem) : sprintf('%s(%s)', gettype($change_Other_IDs_Response_DataTypeChange_Other_IDsItem), var_export($change_Other_IDs_Response_DataTypeChange_Other_IDsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Other_IDs property can only contain items of type \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Other_IDs value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType[] $change_Other_IDs
     * @return \WorkdayWsdl\\StructType\Change_Other_IDs_Response_DataType
     */
    public function setChange_Other_IDs(array $change_Other_IDs = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Other_IDsArrayErrorMessage = self::validateChange_Other_IDsForArrayConstraintsFromSetChange_Other_IDs($change_Other_IDs))) {
            throw new \InvalidArgumentException($change_Other_IDsArrayErrorMessage, __LINE__);
        }
        $this->Change_Other_IDs = $change_Other_IDs;
        return $this;
    }
    /**
     * Add item to Change_Other_IDs value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType $item
     * @return \WorkdayWsdl\\StructType\Change_Other_IDs_Response_DataType
     */
    public function addToChange_Other_IDs(\WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Other_IDs property can only contain items of type \WorkdayWsdl\\StructType\Change_Other_IDs_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Other_IDs[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Other_IDs_Response_DataType
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
