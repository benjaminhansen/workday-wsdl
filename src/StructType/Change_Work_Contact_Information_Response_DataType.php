<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Work_Contact_Information_Response_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the person data for the Get Work Contact Information response.
 * @subpackage Structs
 */
class Change_Work_Contact_Information_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Work_Contact_Information
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Change Work Contact Information Business Process Data element.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType[]
     */
    public $Change_Work_Contact_Information;
    /**
     * Constructor method for Change_Work_Contact_Information_Response_DataType
     * @uses Change_Work_Contact_Information_Response_DataType::setChange_Work_Contact_Information()
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType[] $change_Work_Contact_Information
     */
    public function __construct(array $change_Work_Contact_Information = array())
    {
        $this
            ->setChange_Work_Contact_Information($change_Work_Contact_Information);
    }
    /**
     * Get Change_Work_Contact_Information value
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType[]|null
     */
    public function getChange_Work_Contact_Information()
    {
        return $this->Change_Work_Contact_Information;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Work_Contact_Information method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Work_Contact_Information method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Work_Contact_InformationForArrayConstraintsFromSetChange_Work_Contact_Information(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Work_Contact_Information_Response_DataTypeChange_Work_Contact_InformationItem) {
            // validation for constraint: itemType
            if (!$change_Work_Contact_Information_Response_DataTypeChange_Work_Contact_InformationItem instanceof \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType) {
                $invalidValues[] = is_object($change_Work_Contact_Information_Response_DataTypeChange_Work_Contact_InformationItem) ? get_class($change_Work_Contact_Information_Response_DataTypeChange_Work_Contact_InformationItem) : sprintf('%s(%s)', gettype($change_Work_Contact_Information_Response_DataTypeChange_Work_Contact_InformationItem), var_export($change_Work_Contact_Information_Response_DataTypeChange_Work_Contact_InformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Work_Contact_Information property can only contain items of type \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Work_Contact_Information value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType[] $change_Work_Contact_Information
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_DataType
     */
    public function setChange_Work_Contact_Information(array $change_Work_Contact_Information = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Work_Contact_InformationArrayErrorMessage = self::validateChange_Work_Contact_InformationForArrayConstraintsFromSetChange_Work_Contact_Information($change_Work_Contact_Information))) {
            throw new \InvalidArgumentException($change_Work_Contact_InformationArrayErrorMessage, __LINE__);
        }
        $this->Change_Work_Contact_Information = $change_Work_Contact_Information;
        return $this;
    }
    /**
     * Add item to Change_Work_Contact_Information value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType $item
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_DataType
     */
    public function addToChange_Work_Contact_Information(\WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Work_Contact_Information property can only contain items of type \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Work_Contact_Information[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_Response_DataType
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
