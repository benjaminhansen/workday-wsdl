<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service_Center_Representative_Workday_Account_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Service Center Representative Workday Account data.
 * @subpackage Structs
 */
class Service_Center_Representative_Workday_Account_DataType extends AbstractStructBase
{
    /**
     * The Workday_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing Service Center Representative Workday Account data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\System_User_DataType[]
     */
    public $Workday_Account_Data;
    /**
     * Constructor method for Service_Center_Representative_Workday_Account_DataType
     * @uses Service_Center_Representative_Workday_Account_DataType::setWorkday_Account_Data()
     * @param \WorkdayWsdl\\StructType\System_User_DataType[] $workday_Account_Data
     */
    public function __construct(array $workday_Account_Data = array())
    {
        $this
            ->setWorkday_Account_Data($workday_Account_Data);
    }
    /**
     * Get Workday_Account_Data value
     * @return \WorkdayWsdl\\StructType\System_User_DataType[]|null
     */
    public function getWorkday_Account_Data()
    {
        return $this->Workday_Account_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkday_Account_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkday_Account_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkday_Account_DataForArrayConstraintsFromSetWorkday_Account_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $service_Center_Representative_Workday_Account_DataTypeWorkday_Account_DataItem) {
            // validation for constraint: itemType
            if (!$service_Center_Representative_Workday_Account_DataTypeWorkday_Account_DataItem instanceof \WorkdayWsdl\\StructType\System_User_DataType) {
                $invalidValues[] = is_object($service_Center_Representative_Workday_Account_DataTypeWorkday_Account_DataItem) ? get_class($service_Center_Representative_Workday_Account_DataTypeWorkday_Account_DataItem) : sprintf('%s(%s)', gettype($service_Center_Representative_Workday_Account_DataTypeWorkday_Account_DataItem), var_export($service_Center_Representative_Workday_Account_DataTypeWorkday_Account_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workday_Account_Data property can only contain items of type \WorkdayWsdl\\StructType\System_User_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workday_Account_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\System_User_DataType[] $workday_Account_Data
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_Account_DataType
     */
    public function setWorkday_Account_Data(array $workday_Account_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workday_Account_DataArrayErrorMessage = self::validateWorkday_Account_DataForArrayConstraintsFromSetWorkday_Account_Data($workday_Account_Data))) {
            throw new \InvalidArgumentException($workday_Account_DataArrayErrorMessage, __LINE__);
        }
        $this->Workday_Account_Data = $workday_Account_Data;
        return $this;
    }
    /**
     * Add item to Workday_Account_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\System_User_DataType $item
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_Account_DataType
     */
    public function addToWorkday_Account_Data(\WorkdayWsdl\\StructType\System_User_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\System_User_DataType) {
            throw new \InvalidArgumentException(sprintf('The Workday_Account_Data property can only contain items of type \WorkdayWsdl\\StructType\System_User_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workday_Account_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_Account_DataType
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
