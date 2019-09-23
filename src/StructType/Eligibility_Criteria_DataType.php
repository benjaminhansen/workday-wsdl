<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Eligibility_Criteria_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Eligibility Criteria Data Field Reference must be a valid Integration Document Field from a provider specified in the Field_And_Parameter_Criteria_Data element. | Eligibility Criteria Data. Eligibility Criteria element is used in
 * conjunction with Workday delivered integrations.
 * @subpackage Structs
 */
class Eligibility_Criteria_DataType extends AbstractStructBase
{
    /**
     * The Field_Reference
     * Meta information extracted from the WSDL
     * - documentation: Integration Document Field Reference. Eligibility Criteria element is used in conjunction with Workday delivered integrations.
     * @var \WorkdayWsdl\\StructType\Integration_Document_FieldObjectType
     */
    public $Field_Reference;
    /**
     * The As_Of_Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date when application data, such as benefits and compensation, are deemed effective in the Workday system. (Also referred to as the "Effective Moment".) If not specified, this date defaults to TODAY.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $As_Of_Effective_Date;
    /**
     * The As_Of_Entry_DateTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date and time that data was entered into the system. (This field is also referred to as the "Entry Moment".) If not specified, defaults to the CURRENT DATE/TIME.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $As_Of_Entry_DateTime;
    /**
     * Constructor method for Eligibility_Criteria_DataType
     * @uses Eligibility_Criteria_DataType::setField_Reference()
     * @uses Eligibility_Criteria_DataType::setAs_Of_Effective_Date()
     * @uses Eligibility_Criteria_DataType::setAs_Of_Entry_DateTime()
     * @param \WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference
     * @param string $as_Of_Effective_Date
     * @param string $as_Of_Entry_DateTime
     */
    public function __construct(\WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference = null, $as_Of_Effective_Date = null, $as_Of_Entry_DateTime = null)
    {
        $this
            ->setField_Reference($field_Reference)
            ->setAs_Of_Effective_Date($as_Of_Effective_Date)
            ->setAs_Of_Entry_DateTime($as_Of_Entry_DateTime);
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
     * @return \WorkdayWsdl\\StructType\Eligibility_Criteria_DataType
     */
    public function setField_Reference(\WorkdayWsdl\\StructType\Integration_Document_FieldObjectType $field_Reference = null)
    {
        $this->Field_Reference = $field_Reference;
        return $this;
    }
    /**
     * Get As_Of_Effective_Date value
     * @return string|null
     */
    public function getAs_Of_Effective_Date()
    {
        return $this->As_Of_Effective_Date;
    }
    /**
     * Set As_Of_Effective_Date value
     * @param string $as_Of_Effective_Date
     * @return \WorkdayWsdl\\StructType\Eligibility_Criteria_DataType
     */
    public function setAs_Of_Effective_Date($as_Of_Effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Effective_Date) && !is_string($as_Of_Effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Effective_Date, true), gettype($as_Of_Effective_Date)), __LINE__);
        }
        $this->As_Of_Effective_Date = $as_Of_Effective_Date;
        return $this;
    }
    /**
     * Get As_Of_Entry_DateTime value
     * @return string|null
     */
    public function getAs_Of_Entry_DateTime()
    {
        return $this->As_Of_Entry_DateTime;
    }
    /**
     * Set As_Of_Entry_DateTime value
     * @param string $as_Of_Entry_DateTime
     * @return \WorkdayWsdl\\StructType\Eligibility_Criteria_DataType
     */
    public function setAs_Of_Entry_DateTime($as_Of_Entry_DateTime = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Entry_DateTime) && !is_string($as_Of_Entry_DateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Entry_DateTime, true), gettype($as_Of_Entry_DateTime)), __LINE__);
        }
        $this->As_Of_Entry_DateTime = $as_Of_Entry_DateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Eligibility_Criteria_DataType
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
