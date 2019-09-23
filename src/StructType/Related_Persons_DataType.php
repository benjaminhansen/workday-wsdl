<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Related_Persons_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Related Persons data.
 * @subpackage Structs
 */
class Related_Persons_DataType extends AbstractStructBase
{
    /**
     * The Related_Person_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Related_Person_DataType[]
     */
    public $Related_Person_Data;
    /**
     * Constructor method for Related_Persons_DataType
     * @uses Related_Persons_DataType::setRelated_Person_Data()
     * @param \WorkdayWsdl\\StructType\Related_Person_DataType[] $related_Person_Data
     */
    public function __construct(array $related_Person_Data = array())
    {
        $this
            ->setRelated_Person_Data($related_Person_Data);
    }
    /**
     * Get Related_Person_Data value
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType[]|null
     */
    public function getRelated_Person_Data()
    {
        return $this->Related_Person_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setRelated_Person_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelated_Person_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelated_Person_DataForArrayConstraintsFromSetRelated_Person_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $related_Persons_DataTypeRelated_Person_DataItem) {
            // validation for constraint: itemType
            if (!$related_Persons_DataTypeRelated_Person_DataItem instanceof \WorkdayWsdl\\StructType\Related_Person_DataType) {
                $invalidValues[] = is_object($related_Persons_DataTypeRelated_Person_DataItem) ? get_class($related_Persons_DataTypeRelated_Person_DataItem) : sprintf('%s(%s)', gettype($related_Persons_DataTypeRelated_Person_DataItem), var_export($related_Persons_DataTypeRelated_Person_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Related_Person_Data property can only contain items of type \WorkdayWsdl\\StructType\Related_Person_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Related_Person_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Related_Person_DataType[] $related_Person_Data
     * @return \WorkdayWsdl\\StructType\Related_Persons_DataType
     */
    public function setRelated_Person_Data(array $related_Person_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($related_Person_DataArrayErrorMessage = self::validateRelated_Person_DataForArrayConstraintsFromSetRelated_Person_Data($related_Person_Data))) {
            throw new \InvalidArgumentException($related_Person_DataArrayErrorMessage, __LINE__);
        }
        $this->Related_Person_Data = $related_Person_Data;
        return $this;
    }
    /**
     * Add item to Related_Person_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Related_Person_DataType $item
     * @return \WorkdayWsdl\\StructType\Related_Persons_DataType
     */
    public function addToRelated_Person_Data(\WorkdayWsdl\\StructType\Related_Person_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Related_Person_DataType) {
            throw new \InvalidArgumentException(sprintf('The Related_Person_Data property can only contain items of type \WorkdayWsdl\\StructType\Related_Person_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Related_Person_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Related_Persons_DataType
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
