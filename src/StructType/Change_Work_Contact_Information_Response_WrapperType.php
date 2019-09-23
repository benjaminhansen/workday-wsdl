<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Work_Contact_Information_Response_WrapperType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Change Work Contact Information Business Process Data element.
 * @subpackage Structs
 */
class Change_Work_Contact_Information_Response_WrapperType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of the person through one of its active person types, such as worker, student, affiliate, external committee member, and so on. The ID consists of a type attribute, which should be set to one of either
     * "Employee_ID", "Contingent_Worker_ID", "Student_ID", etc, and a value attribute, such as "04345".
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Change_Work_Contact_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Contact Information data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType[]
     */
    public $Change_Work_Contact_Information_Data;
    /**
     * Constructor method for Change_Work_Contact_Information_Response_WrapperType
     * @uses Change_Work_Contact_Information_Response_WrapperType::setPerson_Reference()
     * @uses Change_Work_Contact_Information_Response_WrapperType::setChange_Work_Contact_Information_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType[] $change_Work_Contact_Information_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, array $change_Work_Contact_Information_Data = array())
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setChange_Work_Contact_Information_Data($change_Work_Contact_Information_Data);
    }
    /**
     * Get Person_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Change_Work_Contact_Information_Data value
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType[]|null
     */
    public function getChange_Work_Contact_Information_Data()
    {
        return $this->Change_Work_Contact_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Work_Contact_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Work_Contact_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Work_Contact_Information_DataForArrayConstraintsFromSetChange_Work_Contact_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Work_Contact_Information_Response_WrapperTypeChange_Work_Contact_Information_DataItem) {
            // validation for constraint: itemType
            if (!$change_Work_Contact_Information_Response_WrapperTypeChange_Work_Contact_Information_DataItem instanceof \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType) {
                $invalidValues[] = is_object($change_Work_Contact_Information_Response_WrapperTypeChange_Work_Contact_Information_DataItem) ? get_class($change_Work_Contact_Information_Response_WrapperTypeChange_Work_Contact_Information_DataItem) : sprintf('%s(%s)', gettype($change_Work_Contact_Information_Response_WrapperTypeChange_Work_Contact_Information_DataItem), var_export($change_Work_Contact_Information_Response_WrapperTypeChange_Work_Contact_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Work_Contact_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Work_Contact_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType[] $change_Work_Contact_Information_Data
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType
     */
    public function setChange_Work_Contact_Information_Data(array $change_Work_Contact_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Work_Contact_Information_DataArrayErrorMessage = self::validateChange_Work_Contact_Information_DataForArrayConstraintsFromSetChange_Work_Contact_Information_Data($change_Work_Contact_Information_Data))) {
            throw new \InvalidArgumentException($change_Work_Contact_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Change_Work_Contact_Information_Data = $change_Work_Contact_Information_Data;
        return $this;
    }
    /**
     * Add item to Change_Work_Contact_Information_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType $item
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType
     */
    public function addToChange_Work_Contact_Information_Data(\WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType) {
            throw new \InvalidArgumentException(sprintf('The Change_Work_Contact_Information_Data property can only contain items of type \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Business_Process_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Work_Contact_Information_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType
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
