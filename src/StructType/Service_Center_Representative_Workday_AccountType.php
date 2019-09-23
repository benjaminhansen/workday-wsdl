<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service_Center_Representative_Workday_AccountType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workday Account information for a Service Center Representative.
 * @subpackage Structs
 */
class Service_Center_Representative_Workday_AccountType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Service Center Representative.
     * - minOccurs: 0
     * @var \StructType\Service_Center_RepresentativeObjectType
     */
    public $Service_Center_Representative_Workday_Account_Reference;
    /**
     * The Service_Center_Representative_Workday_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing Service Center Representative Workday Account data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Service_Center_Representative_Workday_Account_DataType[]
     */
    public $Service_Center_Representative_Workday_Account_Data;
    /**
     * Constructor method for Service_Center_Representative_Workday_AccountType
     * @uses Service_Center_Representative_Workday_AccountType::setService_Center_Representative_Workday_Account_Reference()
     * @uses Service_Center_Representative_Workday_AccountType::setService_Center_Representative_Workday_Account_Data()
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference
     * @param \StructType\Service_Center_Representative_Workday_Account_DataType[] $service_Center_Representative_Workday_Account_Data
     */
    public function __construct(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference = null, array $service_Center_Representative_Workday_Account_Data = array())
    {
        $this
            ->setService_Center_Representative_Workday_Account_Reference($service_Center_Representative_Workday_Account_Reference)
            ->setService_Center_Representative_Workday_Account_Data($service_Center_Representative_Workday_Account_Data);
    }
    /**
     * Get Service_Center_Representative_Workday_Account_Reference value
     * @return \StructType\Service_Center_RepresentativeObjectType|null
     */
    public function getService_Center_Representative_Workday_Account_Reference()
    {
        return $this->Service_Center_Representative_Workday_Account_Reference;
    }
    /**
     * Set Service_Center_Representative_Workday_Account_Reference value
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference
     * @return \StructType\Service_Center_Representative_Workday_AccountType
     */
    public function setService_Center_Representative_Workday_Account_Reference(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference = null)
    {
        $this->Service_Center_Representative_Workday_Account_Reference = $service_Center_Representative_Workday_Account_Reference;
        return $this;
    }
    /**
     * Get Service_Center_Representative_Workday_Account_Data value
     * @return \StructType\Service_Center_Representative_Workday_Account_DataType[]|null
     */
    public function getService_Center_Representative_Workday_Account_Data()
    {
        return $this->Service_Center_Representative_Workday_Account_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setService_Center_Representative_Workday_Account_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService_Center_Representative_Workday_Account_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateService_Center_Representative_Workday_Account_DataForArrayConstraintsFromSetService_Center_Representative_Workday_Account_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $service_Center_Representative_Workday_AccountTypeService_Center_Representative_Workday_Account_DataItem) {
            // validation for constraint: itemType
            if (!$service_Center_Representative_Workday_AccountTypeService_Center_Representative_Workday_Account_DataItem instanceof \StructType\Service_Center_Representative_Workday_Account_DataType) {
                $invalidValues[] = is_object($service_Center_Representative_Workday_AccountTypeService_Center_Representative_Workday_Account_DataItem) ? get_class($service_Center_Representative_Workday_AccountTypeService_Center_Representative_Workday_Account_DataItem) : sprintf('%s(%s)', gettype($service_Center_Representative_Workday_AccountTypeService_Center_Representative_Workday_Account_DataItem), var_export($service_Center_Representative_Workday_AccountTypeService_Center_Representative_Workday_Account_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service_Center_Representative_Workday_Account_Data property can only contain items of type \StructType\Service_Center_Representative_Workday_Account_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Service_Center_Representative_Workday_Account_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Service_Center_Representative_Workday_Account_DataType[] $service_Center_Representative_Workday_Account_Data
     * @return \StructType\Service_Center_Representative_Workday_AccountType
     */
    public function setService_Center_Representative_Workday_Account_Data(array $service_Center_Representative_Workday_Account_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($service_Center_Representative_Workday_Account_DataArrayErrorMessage = self::validateService_Center_Representative_Workday_Account_DataForArrayConstraintsFromSetService_Center_Representative_Workday_Account_Data($service_Center_Representative_Workday_Account_Data))) {
            throw new \InvalidArgumentException($service_Center_Representative_Workday_Account_DataArrayErrorMessage, __LINE__);
        }
        $this->Service_Center_Representative_Workday_Account_Data = $service_Center_Representative_Workday_Account_Data;
        return $this;
    }
    /**
     * Add item to Service_Center_Representative_Workday_Account_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Service_Center_Representative_Workday_Account_DataType $item
     * @return \StructType\Service_Center_Representative_Workday_AccountType
     */
    public function addToService_Center_Representative_Workday_Account_Data(\StructType\Service_Center_Representative_Workday_Account_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Service_Center_Representative_Workday_Account_DataType) {
            throw new \InvalidArgumentException(sprintf('The Service_Center_Representative_Workday_Account_Data property can only contain items of type \StructType\Service_Center_Representative_Workday_Account_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service_Center_Representative_Workday_Account_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Service_Center_Representative_Workday_AccountType
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
