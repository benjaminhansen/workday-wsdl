<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Create_Workday_Account_Sub_Business_ProcessType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper to hold the business process configuration and user account details.
 * @subpackage Structs
 */
class Create_Workday_Account_Sub_Business_ProcessType extends AbstractStructBase
{
    /**
     * The Business_Sub_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for web services sub business process parameters.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType
     */
    public $Business_Sub_Process_Parameters;
    /**
     * The Create_Workday_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for workday account data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\System_User_DataType
     */
    public $Create_Workday_Account_Data;
    /**
     * Constructor method for Create_Workday_Account_Sub_Business_ProcessType
     * @uses Create_Workday_Account_Sub_Business_ProcessType::setBusiness_Sub_Process_Parameters()
     * @uses Create_Workday_Account_Sub_Business_ProcessType::setCreate_Workday_Account_Data()
     * @param \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType $business_Sub_Process_Parameters
     * @param \WorkdayWsdl\\StructType\System_User_DataType $create_Workday_Account_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType $business_Sub_Process_Parameters = null, \WorkdayWsdl\\StructType\System_User_DataType $create_Workday_Account_Data = null)
    {
        $this
            ->setBusiness_Sub_Process_Parameters($business_Sub_Process_Parameters)
            ->setCreate_Workday_Account_Data($create_Workday_Account_Data);
    }
    /**
     * Get Business_Sub_Process_Parameters value
     * @return \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType|null
     */
    public function getBusiness_Sub_Process_Parameters()
    {
        return $this->Business_Sub_Process_Parameters;
    }
    /**
     * Set Business_Sub_Process_Parameters value
     * @param \WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType $business_Sub_Process_Parameters
     * @return \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType
     */
    public function setBusiness_Sub_Process_Parameters(\WorkdayWsdl\\StructType\Business_Sub_Process_ParametersType $business_Sub_Process_Parameters = null)
    {
        $this->Business_Sub_Process_Parameters = $business_Sub_Process_Parameters;
        return $this;
    }
    /**
     * Get Create_Workday_Account_Data value
     * @return \WorkdayWsdl\\StructType\System_User_DataType|null
     */
    public function getCreate_Workday_Account_Data()
    {
        return $this->Create_Workday_Account_Data;
    }
    /**
     * Set Create_Workday_Account_Data value
     * @param \WorkdayWsdl\\StructType\System_User_DataType $create_Workday_Account_Data
     * @return \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType
     */
    public function setCreate_Workday_Account_Data(\WorkdayWsdl\\StructType\System_User_DataType $create_Workday_Account_Data = null)
    {
        $this->Create_Workday_Account_Data = $create_Workday_Account_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType
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
