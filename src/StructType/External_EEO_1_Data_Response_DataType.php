<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_EEO-1_Data_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: External EEO-1 Data Response Data
 * @subpackage Structs
 */
class External_EEO_1_Data_Response_DataType extends AbstractStructBase
{
    /**
     * The External_EEO_1_Data
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\External_EEO_1_DataType[]
     */
    public $External_EEO_1_Data;
    /**
     * Constructor method for External_EEO-1_Data_Response_DataType
     * @uses External_EEO_1_Data_Response_DataType::setExternal_EEO_1_Data()
     * @param \StructType\External_EEO_1_DataType[] $external_EEO_1_Data
     */
    public function __construct(array $external_EEO_1_Data = array())
    {
        $this
            ->setExternal_EEO_1_Data($external_EEO_1_Data);
    }
    /**
     * Get external_EEO_Data value
     * @return external_EEO_Data
     */
    public function getExternal_EEO_1_Data()
    {
        return $this->{'External_EEO-1_Data'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_EEO_1_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_EEO_1_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_EEO_1_DataForArrayConstraintsFromSetExternal_EEO_1_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_EEO_1_Data_Response_DataTypeExternal_EEO_1_DataItem) {
            // validation for constraint: itemType
            if (!$external_EEO_1_Data_Response_DataTypeExternal_EEO_1_DataItem instanceof \StructType\External_EEO_1_DataType) {
                $invalidValues[] = is_object($external_EEO_1_Data_Response_DataTypeExternal_EEO_1_DataItem) ? get_class($external_EEO_1_Data_Response_DataTypeExternal_EEO_1_DataItem) : sprintf('%s(%s)', gettype($external_EEO_1_Data_Response_DataTypeExternal_EEO_1_DataItem), var_export($external_EEO_1_Data_Response_DataTypeExternal_EEO_1_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_EEO_1_Data property can only contain items of type \StructType\External_EEO_1_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_EEO_Data value
     * @param external_EEO_Data $external_EEO_Data
     * @return \StructType\External_EEO_1_Data_Response_DataType
     */
    public function setExternal_EEO_1_Data(array $external_EEO_1_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($external_EEO_1_DataArrayErrorMessage = self::validateExternal_EEO_1_DataForArrayConstraintsFromSetExternal_EEO_1_Data($external_EEO_1_Data))) {
            throw new \InvalidArgumentException($external_EEO_1_DataArrayErrorMessage, __LINE__);
        }
        $this->External_EEO_1_Data = $this->{'External_EEO-1_Data'} = $external_EEO_1_Data;
        return $this;
    }
    /**
     * Add item to External_EEO_1_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\External_EEO_1_DataType $item
     * @return \StructType\External_EEO_1_Data_Response_DataType
     */
    public function addToExternal_EEO_1_Data(\StructType\External_EEO_1_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\External_EEO_1_DataType) {
            throw new \InvalidArgumentException(sprintf('The External_EEO_1_Data property can only contain items of type \StructType\External_EEO_1_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_EEO_1_Data[] = $this->{'External_EEO-1_Data'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_EEO_1_Data_Response_DataType
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
