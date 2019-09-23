<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Government_IDs_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the worker data for the Get Change Government IDs response.
 * @subpackage Structs
 */
class Change_Government_IDs_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Government_IDs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Government_IDs_Response_WrapperType[]
     */
    public $Change_Government_IDs;
    /**
     * Constructor method for Change_Government_IDs_Response_DataType
     * @uses Change_Government_IDs_Response_DataType::setChange_Government_IDs()
     * @param \StructType\Change_Government_IDs_Response_WrapperType[] $change_Government_IDs
     */
    public function __construct(array $change_Government_IDs = array())
    {
        $this
            ->setChange_Government_IDs($change_Government_IDs);
    }
    /**
     * Get Change_Government_IDs value
     * @return \StructType\Change_Government_IDs_Response_WrapperType[]|null
     */
    public function getChange_Government_IDs()
    {
        return $this->Change_Government_IDs;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Government_IDs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Government_IDs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Government_IDsForArrayConstraintsFromSetChange_Government_IDs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Government_IDs_Response_DataTypeChange_Government_IDsItem) {
            // validation for constraint: itemType
            if (!$change_Government_IDs_Response_DataTypeChange_Government_IDsItem instanceof \StructType\Change_Government_IDs_Response_WrapperType) {
                $invalidValues[] = is_object($change_Government_IDs_Response_DataTypeChange_Government_IDsItem) ? get_class($change_Government_IDs_Response_DataTypeChange_Government_IDsItem) : sprintf('%s(%s)', gettype($change_Government_IDs_Response_DataTypeChange_Government_IDsItem), var_export($change_Government_IDs_Response_DataTypeChange_Government_IDsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Government_IDs property can only contain items of type \StructType\Change_Government_IDs_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Government_IDs value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Government_IDs_Response_WrapperType[] $change_Government_IDs
     * @return \StructType\Change_Government_IDs_Response_DataType
     */
    public function setChange_Government_IDs(array $change_Government_IDs = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Government_IDsArrayErrorMessage = self::validateChange_Government_IDsForArrayConstraintsFromSetChange_Government_IDs($change_Government_IDs))) {
            throw new \InvalidArgumentException($change_Government_IDsArrayErrorMessage, __LINE__);
        }
        $this->Change_Government_IDs = $change_Government_IDs;
        return $this;
    }
    /**
     * Add item to Change_Government_IDs value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Government_IDs_Response_WrapperType $item
     * @return \StructType\Change_Government_IDs_Response_DataType
     */
    public function addToChange_Government_IDs(\StructType\Change_Government_IDs_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Government_IDs_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Government_IDs property can only contain items of type \StructType\Change_Government_IDs_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Government_IDs[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Government_IDs_Response_DataType
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
