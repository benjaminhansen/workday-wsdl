<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document_Field_Result_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Result of the evaluation of an External Field based on a contextual instance.
 * @subpackage Structs
 */
class Document_Field_Result_DataType extends AbstractStructBase
{
    /**
     * The Field_Reference
     * Meta information extracted from the WSDL
     * - documentation: Integration Document Field Reference. Eligibility Criteria element is used in conjunction with Workday delivered integrations.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Integration_Document_FieldObjectType
     */
    public $Field_Reference;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Value
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for Document_Field_Result_DataType
     * @uses Document_Field_Result_DataType::setField_Reference()
     * @uses Document_Field_Result_DataType::setValue()
     * @param \WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference
     * @param string $value
     */
    public function __construct(\WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference = null, $value = null)
    {
        $this
            ->setField_Reference($field_Reference)
            ->setValue($value);
    }
    /**
     * Get Field_Reference value
     * @return \WorkdayWsdl\\StructType\Integration_Document_FieldObjectType|null
     */
    public function getField_Reference()
    {
        return $this->Field_Reference;
    }
    /**
     * Set Field_Reference value
     * @param \WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference
     * @return \WorkdayWsdl\\StructType\Document_Field_Result_DataType
     */
    public function setField_Reference(\WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference = null)
    {
        $this->Field_Reference = $field_Reference;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \WorkdayWsdl\\StructType\Document_Field_Result_DataType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Document_Field_Result_DataType
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
