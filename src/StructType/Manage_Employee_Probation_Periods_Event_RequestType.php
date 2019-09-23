<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Employee_Probation_Periods_Event_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Probation Period Request Element
 * @subpackage Structs
 */
class Manage_Employee_Probation_Periods_Event_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Business Process Parameters
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Manage_Employee_Probation_Periods_Event_Data
     * Meta information extracted from the WSDL
     * - documentation: Details of the Probation Period that is being added to the Worker
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Manage_Employee_Probation_Periods_Event_DataType[]
     */
    public $Manage_Employee_Probation_Periods_Event_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Manage_Employee_Probation_Periods_Event_RequestType
     * @uses Manage_Employee_Probation_Periods_Event_RequestType::setBusiness_Process_Parameters()
     * @uses Manage_Employee_Probation_Periods_Event_RequestType::setManage_Employee_Probation_Periods_Event_Data()
     * @uses Manage_Employee_Probation_Periods_Event_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Manage_Employee_Probation_Periods_Event_DataType[] $manage_Employee_Probation_Periods_Event_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, array $manage_Employee_Probation_Periods_Event_Data = array(), $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setManage_Employee_Probation_Periods_Event_Data($manage_Employee_Probation_Periods_Event_Data)
            ->setVersion($version);
    }
    /**
     * Get Business_Process_Parameters value
     * @return \StructType\Business_Process_ParametersType|null
     */
    public function getBusiness_Process_Parameters()
    {
        return $this->Business_Process_Parameters;
    }
    /**
     * Set Business_Process_Parameters value
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @return \StructType\Manage_Employee_Probation_Periods_Event_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Manage_Employee_Probation_Periods_Event_Data value
     * @return \StructType\Manage_Employee_Probation_Periods_Event_DataType[]|null
     */
    public function getManage_Employee_Probation_Periods_Event_Data()
    {
        return $this->Manage_Employee_Probation_Periods_Event_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setManage_Employee_Probation_Periods_Event_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManage_Employee_Probation_Periods_Event_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManage_Employee_Probation_Periods_Event_DataForArrayConstraintsFromSetManage_Employee_Probation_Periods_Event_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Employee_Probation_Periods_Event_RequestTypeManage_Employee_Probation_Periods_Event_DataItem) {
            // validation for constraint: itemType
            if (!$manage_Employee_Probation_Periods_Event_RequestTypeManage_Employee_Probation_Periods_Event_DataItem instanceof \StructType\Manage_Employee_Probation_Periods_Event_DataType) {
                $invalidValues[] = is_object($manage_Employee_Probation_Periods_Event_RequestTypeManage_Employee_Probation_Periods_Event_DataItem) ? get_class($manage_Employee_Probation_Periods_Event_RequestTypeManage_Employee_Probation_Periods_Event_DataItem) : sprintf('%s(%s)', gettype($manage_Employee_Probation_Periods_Event_RequestTypeManage_Employee_Probation_Periods_Event_DataItem), var_export($manage_Employee_Probation_Periods_Event_RequestTypeManage_Employee_Probation_Periods_Event_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manage_Employee_Probation_Periods_Event_Data property can only contain items of type \StructType\Manage_Employee_Probation_Periods_Event_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manage_Employee_Probation_Periods_Event_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Manage_Employee_Probation_Periods_Event_DataType[] $manage_Employee_Probation_Periods_Event_Data
     * @return \StructType\Manage_Employee_Probation_Periods_Event_RequestType
     */
    public function setManage_Employee_Probation_Periods_Event_Data(array $manage_Employee_Probation_Periods_Event_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($manage_Employee_Probation_Periods_Event_DataArrayErrorMessage = self::validateManage_Employee_Probation_Periods_Event_DataForArrayConstraintsFromSetManage_Employee_Probation_Periods_Event_Data($manage_Employee_Probation_Periods_Event_Data))) {
            throw new \InvalidArgumentException($manage_Employee_Probation_Periods_Event_DataArrayErrorMessage, __LINE__);
        }
        $this->Manage_Employee_Probation_Periods_Event_Data = $manage_Employee_Probation_Periods_Event_Data;
        return $this;
    }
    /**
     * Add item to Manage_Employee_Probation_Periods_Event_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Manage_Employee_Probation_Periods_Event_DataType $item
     * @return \StructType\Manage_Employee_Probation_Periods_Event_RequestType
     */
    public function addToManage_Employee_Probation_Periods_Event_Data(\StructType\Manage_Employee_Probation_Periods_Event_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Manage_Employee_Probation_Periods_Event_DataType) {
            throw new \InvalidArgumentException(sprintf('The Manage_Employee_Probation_Periods_Event_Data property can only contain items of type \StructType\Manage_Employee_Probation_Periods_Event_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manage_Employee_Probation_Periods_Event_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Manage_Employee_Probation_Periods_Event_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Manage_Employee_Probation_Periods_Event_RequestType
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
