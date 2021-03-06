<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Factor_1_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the collective agreement factor 1 and factor option 1 data.
 * @subpackage Structs
 */
class Collective_Agreement_Factor_1_DataType extends AbstractStructBase
{
    /**
     * The Collective_Agreement_Factor_1_Reference
     * Meta information extracted from the WSDL
     * - documentation: The collective agreement factor 1.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_FactorObjectType
     */
    public $Collective_Agreement_Factor_1_Reference;
    /**
     * The Collective_Agreement_Factor_Option_1_Reference
     * Meta information extracted from the WSDL
     * - documentation: The collective agreement factor option 1.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Factor_OptionObjectType
     */
    public $Collective_Agreement_Factor_Option_1_Reference;
    /**
     * Constructor method for Collective_Agreement_Factor_1_DataType
     * @uses Collective_Agreement_Factor_1_DataType::setCollective_Agreement_Factor_1_Reference()
     * @uses Collective_Agreement_Factor_1_DataType::setCollective_Agreement_Factor_Option_1_Reference()
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_1_Reference
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Factor_OptionObjectType $collective_Agreement_Factor_Option_1_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_1_Reference = null, \WorkdayWsdl\\StructType\Collective_Agreement_Factor_OptionObjectType $collective_Agreement_Factor_Option_1_Reference = null)
    {
        $this
            ->setCollective_Agreement_Factor_1_Reference($collective_Agreement_Factor_1_Reference)
            ->setCollective_Agreement_Factor_Option_1_Reference($collective_Agreement_Factor_Option_1_Reference);
    }
    /**
     * Get collective_Agreement_Factor_Reference value
     * @return collective_Agreement_Factor_Reference
     */
    public function getCollective_Agreement_Factor_1_Reference()
    {
        return $this->Collective_Agreement_Factor_1_Reference;
    }
    /**
     * Set collective_Agreement_Factor_Reference value
     * @param collective_Agreement_Factor_Reference $collective_Agreement_Factor_Reference
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType
     */
    public function setCollective_Agreement_Factor_1_Reference(\WorkdayWsdl\\StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_1_Reference = null)
    {
        $this->Collective_Agreement_Factor_1_Reference = $collective_Agreement_Factor_1_Reference;
        return $this;
    }
    /**
     * Get collective_Agreement_Factor_Option_Reference value
     * @return collective_Agreement_Factor_Option_Reference
     */
    public function getCollective_Agreement_Factor_Option_1_Reference()
    {
        return $this->Collective_Agreement_Factor_Option_1_Reference;
    }
    /**
     * Set collective_Agreement_Factor_Option_Reference value
     * @param collective_Agreement_Factor_Option_Reference $collective_Agreement_Factor_Option_Reference
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType
     */
    public function setCollective_Agreement_Factor_Option_1_Reference(\WorkdayWsdl\\StructType\Collective_Agreement_Factor_OptionObjectType $collective_Agreement_Factor_Option_1_Reference = null)
    {
        $this->Collective_Agreement_Factor_Option_1_Reference = $collective_Agreement_Factor_Option_1_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Factor_1_DataType
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
