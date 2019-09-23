<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_EEO-1_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: External EEO-1 Data
 * @subpackage Structs
 */
class External_EEO_1_DataType extends AbstractStructBase
{
    /**
     * The External_EEO_1_Data_Reference
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data Reference
     * - minOccurs: 0
     * @var \StructType\External_EEO_1_DataObjectType
     */
    public $External_EEO_1_Data_Reference;
    /**
     * The External_EEO_1_Data_Data
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data Record
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\External_EEO_1_Data_RecordType[]
     */
    public $External_EEO_1_Data_Data;
    /**
     * Constructor method for External_EEO-1_DataType
     * @uses External_EEO_1_DataType::setExternal_EEO_1_Data_Reference()
     * @uses External_EEO_1_DataType::setExternal_EEO_1_Data_Data()
     * @param \StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference
     * @param \StructType\External_EEO_1_Data_RecordType[] $external_EEO_1_Data_Data
     */
    public function __construct(\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference = null, array $external_EEO_1_Data_Data = array())
    {
        $this
            ->setExternal_EEO_1_Data_Reference($external_EEO_1_Data_Reference)
            ->setExternal_EEO_1_Data_Data($external_EEO_1_Data_Data);
    }
    /**
     * Get external_EEO_Data_Reference value
     * @return external_EEO_Data_Reference
     */
    public function getExternal_EEO_1_Data_Reference()
    {
        return $this->{'External_EEO-1_Data_Reference'};
    }
    /**
     * Set external_EEO_Data_Reference value
     * @param external_EEO_Data_Reference $external_EEO_Data_Reference
     * @return \StructType\External_EEO_1_DataType
     */
    public function setExternal_EEO_1_Data_Reference(\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference = null)
    {
        $this->External_EEO_1_Data_Reference = $this->{'External_EEO-1_Data_Reference'} = $external_EEO_1_Data_Reference;
        return $this;
    }
    /**
     * Get external_EEO_Data_Data value
     * @return external_EEO_Data_Data
     */
    public function getExternal_EEO_1_Data_Data()
    {
        return $this->{'External_EEO-1_Data_Data'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_EEO_1_Data_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_EEO_1_Data_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_EEO_1_Data_DataForArrayConstraintsFromSetExternal_EEO_1_Data_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_EEO_1_DataTypeExternal_EEO_1_Data_DataItem) {
            // validation for constraint: itemType
            if (!$external_EEO_1_DataTypeExternal_EEO_1_Data_DataItem instanceof \StructType\External_EEO_1_Data_RecordType) {
                $invalidValues[] = is_object($external_EEO_1_DataTypeExternal_EEO_1_Data_DataItem) ? get_class($external_EEO_1_DataTypeExternal_EEO_1_Data_DataItem) : sprintf('%s(%s)', gettype($external_EEO_1_DataTypeExternal_EEO_1_Data_DataItem), var_export($external_EEO_1_DataTypeExternal_EEO_1_Data_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_EEO_1_Data_Data property can only contain items of type \StructType\External_EEO_1_Data_RecordType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_EEO_Data_Data value
     * @param external_EEO_Data_Data $external_EEO_Data_Data
     * @return \StructType\External_EEO_1_DataType
     */
    public function setExternal_EEO_1_Data_Data(array $external_EEO_1_Data_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($external_EEO_1_Data_DataArrayErrorMessage = self::validateExternal_EEO_1_Data_DataForArrayConstraintsFromSetExternal_EEO_1_Data_Data($external_EEO_1_Data_Data))) {
            throw new \InvalidArgumentException($external_EEO_1_Data_DataArrayErrorMessage, __LINE__);
        }
        $this->External_EEO_1_Data_Data = $this->{'External_EEO-1_Data_Data'} = $external_EEO_1_Data_Data;
        return $this;
    }
    /**
     * Add item to External_EEO_1_Data_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\External_EEO_1_Data_RecordType $item
     * @return \StructType\External_EEO_1_DataType
     */
    public function addToExternal_EEO_1_Data_Data(\StructType\External_EEO_1_Data_RecordType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\External_EEO_1_Data_RecordType) {
            throw new \InvalidArgumentException(sprintf('The External_EEO_1_Data_Data property can only contain items of type \StructType\External_EEO_1_Data_RecordType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_EEO_1_Data_Data[] = $this->{'External_EEO-1_Data_Data'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_EEO_1_DataType
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
