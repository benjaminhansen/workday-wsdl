<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Employee_Collective_Agreement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Assign Employee Collective Agreement event.
 * @subpackage Structs
 */
class Assign_Employee_Collective_Agreement_DataType extends AbstractStructBase
{
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Position of the Worker. If the Worker has only one position, the position will be defaulted, but If the Worker has multiple positions, it is expected in the request.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Collective_Agreement_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Collective Agreement ID.
     * @var \WorkdayWsdl\\StructType\Collective_AgreementObjectType
     */
    public $Collective_Agreement_Reference;
    /**
     * The Factor_Options
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for collective agreement factors and factor options.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType
     */
    public $Factor_Options;
    /**
     * Constructor method for Assign_Employee_Collective_Agreement_DataType
     * @uses Assign_Employee_Collective_Agreement_DataType::setPosition_Reference()
     * @uses Assign_Employee_Collective_Agreement_DataType::setCollective_Agreement_Reference()
     * @uses Assign_Employee_Collective_Agreement_DataType::setFactor_Options()
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @param \WorkdayWsdl\\StructType\Collective_AgreementObjectType $collective_Agreement_Reference
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType $factor_Options
     */
    public function __construct(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null, \WorkdayWsdl\\StructType\Collective_AgreementObjectType $collective_Agreement_Reference = null, \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType $factor_Options = null)
    {
        $this
            ->setPosition_Reference($position_Reference)
            ->setCollective_Agreement_Reference($collective_Agreement_Reference)
            ->setFactor_Options($factor_Options);
    }
    /**
     * Get Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_DataType
     */
    public function setPosition_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Collective_Agreement_Reference value
     * @return \WorkdayWsdl\\StructType\Collective_AgreementObjectType|null
     */
    public function getCollective_Agreement_Reference()
    {
        return $this->Collective_Agreement_Reference;
    }
    /**
     * Set Collective_Agreement_Reference value
     * @param \WorkdayWsdl\\StructType\Collective_AgreementObjectType $collective_Agreement_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_DataType
     */
    public function setCollective_Agreement_Reference(\WorkdayWsdl\\StructType\Collective_AgreementObjectType $collective_Agreement_Reference = null)
    {
        $this->Collective_Agreement_Reference = $collective_Agreement_Reference;
        return $this;
    }
    /**
     * Get Factor_Options value
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType|null
     */
    public function getFactor_Options()
    {
        return $this->Factor_Options;
    }
    /**
     * Set Factor_Options value
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType $factor_Options
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_DataType
     */
    public function setFactor_Options(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_Options_DataType $factor_Options = null)
    {
        $this->Factor_Options = $factor_Options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_DataType
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
