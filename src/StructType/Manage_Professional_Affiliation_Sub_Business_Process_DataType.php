<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Manage_Professional_Affiliation_Sub_Business_Process_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The "Manage Professional Affiliation Data" subelement is required if "Automatically Complete" is set to true. | Manage Professional Affiliation Sub Business Process Data
 * @subpackage Structs
 */
class Manage_Professional_Affiliation_Sub_Business_Process_DataType extends AbstractStructBase
{
    /**
     * The Business_Sub_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Manage Professional Affiliation Sub Business Process Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType[]
     */
    public $Business_Sub_Process_Parameters;
    /**
     * The Manage_Professional_Affiliation_Data
     * Meta information extracted from the WSDL
     * - documentation: Manage Professional Affiliation Sub Business Process Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType[]
     */
    public $Manage_Professional_Affiliation_Data;
    /**
     * Constructor method for
     * Manage_Professional_Affiliation_Sub_Business_Process_DataType
     * @uses Manage_Professional_Affiliation_Sub_Business_Process_DataType::setBusiness_Sub_Process_Parameters()
     * @uses Manage_Professional_Affiliation_Sub_Business_Process_DataType::setManage_Professional_Affiliation_Data()
     * @param \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType[] $business_Sub_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType[] $manage_Professional_Affiliation_Data
     */
    public function __construct(array $business_Sub_Process_Parameters = array(), array $manage_Professional_Affiliation_Data = array())
    {
        $this
            ->setBusiness_Sub_Process_Parameters($business_Sub_Process_Parameters)
            ->setManage_Professional_Affiliation_Data($manage_Professional_Affiliation_Data);
    }
    /**
     * Get Business_Sub_Process_Parameters value
     * @return \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType[]|null
     */
    public function getBusiness_Sub_Process_Parameters()
    {
        return $this->Business_Sub_Process_Parameters;
    }
    /**
     * This method is responsible for validating the values passed to the setBusiness_Sub_Process_Parameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusiness_Sub_Process_Parameters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusiness_Sub_Process_ParametersForArrayConstraintsFromSetBusiness_Sub_Process_Parameters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Professional_Affiliation_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem) {
            // validation for constraint: itemType
            if (!$manage_Professional_Affiliation_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem instanceof \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType) {
                $invalidValues[] = is_object($manage_Professional_Affiliation_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem) ? get_class($manage_Professional_Affiliation_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem) : sprintf('%s(%s)', gettype($manage_Professional_Affiliation_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem), var_export($manage_Professional_Affiliation_Sub_Business_Process_DataTypeBusiness_Sub_Process_ParametersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Business_Sub_Process_Parameters property can only contain items of type \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Business_Sub_Process_Parameters value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType[] $business_Sub_Process_Parameters
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType
     */
    public function setBusiness_Sub_Process_Parameters(array $business_Sub_Process_Parameters = array())
    {
        // validation for constraint: array
        if ('' !== ($business_Sub_Process_ParametersArrayErrorMessage = self::validateBusiness_Sub_Process_ParametersForArrayConstraintsFromSetBusiness_Sub_Process_Parameters($business_Sub_Process_Parameters))) {
            throw new \InvalidArgumentException($business_Sub_Process_ParametersArrayErrorMessage, __LINE__);
        }
        $this->Business_Sub_Process_Parameters = $business_Sub_Process_Parameters;
        return $this;
    }
    /**
     * Add item to Business_Sub_Process_Parameters value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType $item
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType
     */
    public function addToBusiness_Sub_Process_Parameters(\WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType) {
            throw new \InvalidArgumentException(sprintf('The Business_Sub_Process_Parameters property can only contain items of type \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Business_Sub_Process_Parameters[] = $item;
        return $this;
    }
    /**
     * Get Manage_Professional_Affiliation_Data value
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType[]|null
     */
    public function getManage_Professional_Affiliation_Data()
    {
        return $this->Manage_Professional_Affiliation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setManage_Professional_Affiliation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManage_Professional_Affiliation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManage_Professional_Affiliation_DataForArrayConstraintsFromSetManage_Professional_Affiliation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $manage_Professional_Affiliation_Sub_Business_Process_DataTypeManage_Professional_Affiliation_DataItem) {
            // validation for constraint: itemType
            if (!$manage_Professional_Affiliation_Sub_Business_Process_DataTypeManage_Professional_Affiliation_DataItem instanceof \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType) {
                $invalidValues[] = is_object($manage_Professional_Affiliation_Sub_Business_Process_DataTypeManage_Professional_Affiliation_DataItem) ? get_class($manage_Professional_Affiliation_Sub_Business_Process_DataTypeManage_Professional_Affiliation_DataItem) : sprintf('%s(%s)', gettype($manage_Professional_Affiliation_Sub_Business_Process_DataTypeManage_Professional_Affiliation_DataItem), var_export($manage_Professional_Affiliation_Sub_Business_Process_DataTypeManage_Professional_Affiliation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manage_Professional_Affiliation_Data property can only contain items of type \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manage_Professional_Affiliation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType[] $manage_Professional_Affiliation_Data
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType
     */
    public function setManage_Professional_Affiliation_Data(array $manage_Professional_Affiliation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($manage_Professional_Affiliation_DataArrayErrorMessage = self::validateManage_Professional_Affiliation_DataForArrayConstraintsFromSetManage_Professional_Affiliation_Data($manage_Professional_Affiliation_Data))) {
            throw new \InvalidArgumentException($manage_Professional_Affiliation_DataArrayErrorMessage, __LINE__);
        }
        $this->Manage_Professional_Affiliation_Data = $manage_Professional_Affiliation_Data;
        return $this;
    }
    /**
     * Add item to Manage_Professional_Affiliation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType $item
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType
     */
    public function addToManage_Professional_Affiliation_Data(\WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType) {
            throw new \InvalidArgumentException(sprintf('The Manage_Professional_Affiliation_Data property can only contain items of type \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Data_for_RoleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manage_Professional_Affiliation_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType
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
