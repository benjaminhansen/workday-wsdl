<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Government_IDs_Response_WrapperType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Change Government IDs Business Process Data element. This is the element that contains the data to load.
 * @subpackage Structs
 */
class Change_Government_IDs_Response_WrapperType extends AbstractStructBase
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
     * The Change_Government_IDs_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType[]
     */
    public $Change_Government_IDs_Data;
    /**
     * Constructor method for Change_Government_IDs_Response_WrapperType
     * @uses Change_Government_IDs_Response_WrapperType::setPerson_Reference()
     * @uses Change_Government_IDs_Response_WrapperType::setChange_Government_IDs_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType[] $change_Government_IDs_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, array $change_Government_IDs_Data = array())
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setChange_Government_IDs_Data($change_Government_IDs_Data);
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
     * @return \WorkdayWsdl\\StructType\Change_Government_IDs_Response_WrapperType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Change_Government_IDs_Data value
     * @return \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType[]|null
     */
    public function getChange_Government_IDs_Data()
    {
        return $this->Change_Government_IDs_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Government_IDs_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Government_IDs_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Government_IDs_DataForArrayConstraintsFromSetChange_Government_IDs_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Government_IDs_Response_WrapperTypeChange_Government_IDs_DataItem) {
            // validation for constraint: itemType
            if (!$change_Government_IDs_Response_WrapperTypeChange_Government_IDs_DataItem instanceof \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType) {
                $invalidValues[] = is_object($change_Government_IDs_Response_WrapperTypeChange_Government_IDs_DataItem) ? get_class($change_Government_IDs_Response_WrapperTypeChange_Government_IDs_DataItem) : sprintf('%s(%s)', gettype($change_Government_IDs_Response_WrapperTypeChange_Government_IDs_DataItem), var_export($change_Government_IDs_Response_WrapperTypeChange_Government_IDs_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Government_IDs_Data property can only contain items of type \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Government_IDs_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType[] $change_Government_IDs_Data
     * @return \WorkdayWsdl\\StructType\Change_Government_IDs_Response_WrapperType
     */
    public function setChange_Government_IDs_Data(array $change_Government_IDs_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Government_IDs_DataArrayErrorMessage = self::validateChange_Government_IDs_DataForArrayConstraintsFromSetChange_Government_IDs_Data($change_Government_IDs_Data))) {
            throw new \InvalidArgumentException($change_Government_IDs_DataArrayErrorMessage, __LINE__);
        }
        $this->Change_Government_IDs_Data = $change_Government_IDs_Data;
        return $this;
    }
    /**
     * Add item to Change_Government_IDs_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType $item
     * @return \WorkdayWsdl\\StructType\Change_Government_IDs_Response_WrapperType
     */
    public function addToChange_Government_IDs_Data(\WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType) {
            throw new \InvalidArgumentException(sprintf('The Change_Government_IDs_Data property can only contain items of type \WorkdayWsdl\\StructType\Change_Government_IDs_Business_Process_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Government_IDs_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Government_IDs_Response_WrapperType
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
