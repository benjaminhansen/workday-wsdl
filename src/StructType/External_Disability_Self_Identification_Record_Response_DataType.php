<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * External_Disability_Self-Identification_Record_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all External Disability Self-Identification Record data.
 * @subpackage Structs
 */
class External_Disability_Self_Identification_Record_Response_DataType extends AbstractStructBase
{
    /**
     * The External_Disability_Self_Identification_Record
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType[]
     */
    public $External_Disability_Self_Identification_Record;
    /**
     * Constructor method for
     * External_Disability_Self-Identification_Record_Response_DataType
     * @uses External_Disability_Self_Identification_Record_Response_DataType::setExternal_Disability_Self_Identification_Record()
     * @param \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType[] $external_Disability_Self_Identification_Record
     */
    public function __construct(array $external_Disability_Self_Identification_Record = array())
    {
        $this
            ->setExternal_Disability_Self_Identification_Record($external_Disability_Self_Identification_Record);
    }
    /**
     * Get External_Disability_Self_Identification_Record value
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType[]|null
     */
    public function getExternal_Disability_Self_Identification_Record()
    {
        return $this->External_Disability_Self_Identification_Record;
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Disability_Self_Identification_Record method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Disability_Self_Identification_Record method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Disability_Self_Identification_RecordForArrayConstraintsFromSetExternal_Disability_Self_Identification_Record(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Disability_Self_Identification_Record_Response_DataTypeExternal_Disability_Self_Identification_RecordItem) {
            // validation for constraint: itemType
            if (!$external_Disability_Self_Identification_Record_Response_DataTypeExternal_Disability_Self_Identification_RecordItem instanceof \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType) {
                $invalidValues[] = is_object($external_Disability_Self_Identification_Record_Response_DataTypeExternal_Disability_Self_Identification_RecordItem) ? get_class($external_Disability_Self_Identification_Record_Response_DataTypeExternal_Disability_Self_Identification_RecordItem) : sprintf('%s(%s)', gettype($external_Disability_Self_Identification_Record_Response_DataTypeExternal_Disability_Self_Identification_RecordItem), var_export($external_Disability_Self_Identification_Record_Response_DataTypeExternal_Disability_Self_Identification_RecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Disability_Self_Identification_Record property can only contain items of type \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set External_Disability_Self_Identification_Record value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType[] $external_Disability_Self_Identification_Record
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_Response_DataType
     */
    public function setExternal_Disability_Self_Identification_Record(array $external_Disability_Self_Identification_Record = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Disability_Self_Identification_RecordArrayErrorMessage = self::validateExternal_Disability_Self_Identification_RecordForArrayConstraintsFromSetExternal_Disability_Self_Identification_Record($external_Disability_Self_Identification_Record))) {
            throw new \InvalidArgumentException($external_Disability_Self_Identification_RecordArrayErrorMessage, __LINE__);
        }
        $this->External_Disability_Self_Identification_Record = $external_Disability_Self_Identification_Record;
        return $this;
    }
    /**
     * Add item to External_Disability_Self_Identification_Record value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType $item
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_Response_DataType
     */
    public function addToExternal_Disability_Self_Identification_Record(\WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType) {
            throw new \InvalidArgumentException(sprintf('The External_Disability_Self_Identification_Record property can only contain items of type \WorkdayWsdl\\StructType\External_Disability_Self_Identification_RecordType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Disability_Self_Identification_Record[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_Response_DataType
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
