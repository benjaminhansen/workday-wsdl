<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Service_Center_Representative_Workday_Account_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Service Center Representative Workday Account response data.
 * @subpackage Structs
 */
class Service_Center_Representative_Workday_Account_Response_DataType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Workday_Account
     * Meta information extracted from the WSDL
     * - documentation: Element containing Service Center Representative Workday Account data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType[]
     */
    public $Service_Center_Representative_Workday_Account;
    /**
     * Constructor method for
     * Service_Center_Representative_Workday_Account_Response_DataType
     * @uses Service_Center_Representative_Workday_Account_Response_DataType::setService_Center_Representative_Workday_Account()
     * @param \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType[] $service_Center_Representative_Workday_Account
     */
    public function __construct(array $service_Center_Representative_Workday_Account = array())
    {
        $this
            ->setService_Center_Representative_Workday_Account($service_Center_Representative_Workday_Account);
    }
    /**
     * Get Service_Center_Representative_Workday_Account value
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType[]|null
     */
    public function getService_Center_Representative_Workday_Account()
    {
        return $this->Service_Center_Representative_Workday_Account;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Center_Representative_Workday_Account method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Center_Representative_Workday_Account method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_Center_Representative_Workday_AccountForArrayConstraintsFromSetService_Center_Representative_Workday_Account(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $service_Center_Representative_Workday_Account_Response_DataTypeService_Center_Representative_Workday_AccountItem) {
            // validation for constraint: itemType
            if (!$service_Center_Representative_Workday_Account_Response_DataTypeService_Center_Representative_Workday_AccountItem instanceof \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType) {
                $invalidValues[] = is_object($service_Center_Representative_Workday_Account_Response_DataTypeService_Center_Representative_Workday_AccountItem) ? get_class($service_Center_Representative_Workday_Account_Response_DataTypeService_Center_Representative_Workday_AccountItem) : sprintf('%s(%s)', gettype($service_Center_Representative_Workday_Account_Response_DataTypeService_Center_Representative_Workday_AccountItem), var_export($service_Center_Representative_Workday_Account_Response_DataTypeService_Center_Representative_Workday_AccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Center_Representative_Workday_Account property can only contain items of type \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Service_Center_Representative_Workday_Account value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType[] $service_Center_Representative_Workday_Account
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_Account_Response_DataType
     */
    public function setService_Center_Representative_Workday_Account(array $service_Center_Representative_Workday_Account = array())
    {
        // validation for constraint: array
        if ('' !== ($service_Center_Representative_Workday_AccountArrayErrorMessage = self::validateService_Center_Representative_Workday_AccountForArrayConstraintsFromSetService_Center_Representative_Workday_Account($service_Center_Representative_Workday_Account))) {
            throw new \InvalidArgumentException($service_Center_Representative_Workday_AccountArrayErrorMessage, __LINE__);
        }
        $this->Service_Center_Representative_Workday_Account = $service_Center_Representative_Workday_Account;
        return $this;
    }
    /**
     * Add item to Service_Center_Representative_Workday_Account value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType $item
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_Account_Response_DataType
     */
    public function addToService_Center_Representative_Workday_Account(\WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType) {
            throw new \InvalidArgumentException(sprintf('The Service_Center_Representative_Workday_Account property can only contain items of type \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_AccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Center_Representative_Workday_Account[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Service_Center_Representative_Workday_Account_Response_DataType
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
