<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Workday_Account_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workday Account response data.
 * @subpackage Structs
 */
class Get_Workday_Account_Response_DataType extends AbstractStructBase
{
    /**
     * The Workday_Account_Response_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing Workday Account Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Get_Workday_AccountType[]
     */
    public $Workday_Account_Response_Data;
    /**
     * Constructor method for Get_Workday_Account_Response_DataType
     * @uses Get_Workday_Account_Response_DataType::setWorkday_Account_Response_Data()
     * @param \WorkdayWsdl\\StructType\Get_Workday_AccountType[] $workday_Account_Response_Data
     */
    public function __construct(array $workday_Account_Response_Data = array())
    {
        $this
            ->setWorkday_Account_Response_Data($workday_Account_Response_Data);
    }
    /**
     * Get Workday_Account_Response_Data value
     * @return \WorkdayWsdl\\StructType\Get_Workday_AccountType[]|null
     */
    public function getWorkday_Account_Response_Data()
    {
        return $this->Workday_Account_Response_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkday_Account_Response_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkday_Account_Response_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkday_Account_Response_DataForArrayConstraintsFromSetWorkday_Account_Response_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Workday_Account_Response_DataTypeWorkday_Account_Response_DataItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_Response_DataTypeWorkday_Account_Response_DataItem instanceof \WorkdayWsdl\\StructType\Get_Workday_AccountType) {
                $invalidValues[] = is_object($get_Workday_Account_Response_DataTypeWorkday_Account_Response_DataItem) ? get_class($get_Workday_Account_Response_DataTypeWorkday_Account_Response_DataItem) : sprintf('%s(%s)', gettype($get_Workday_Account_Response_DataTypeWorkday_Account_Response_DataItem), var_export($get_Workday_Account_Response_DataTypeWorkday_Account_Response_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workday_Account_Response_Data property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_AccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workday_Account_Response_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Get_Workday_AccountType[] $workday_Account_Response_Data
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType
     */
    public function setWorkday_Account_Response_Data(array $workday_Account_Response_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workday_Account_Response_DataArrayErrorMessage = self::validateWorkday_Account_Response_DataForArrayConstraintsFromSetWorkday_Account_Response_Data($workday_Account_Response_Data))) {
            throw new \InvalidArgumentException($workday_Account_Response_DataArrayErrorMessage, __LINE__);
        }
        $this->Workday_Account_Response_Data = $workday_Account_Response_Data;
        return $this;
    }
    /**
     * Add item to Workday_Account_Response_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Get_Workday_AccountType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType
     */
    public function addToWorkday_Account_Response_Data(\WorkdayWsdl\\StructType\Get_Workday_AccountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Get_Workday_AccountType) {
            throw new \InvalidArgumentException(sprintf('The Workday_Account_Response_Data property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_AccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workday_Account_Response_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType
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
