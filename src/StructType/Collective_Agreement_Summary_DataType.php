<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Collective Agreement data. Including Corrected data.
 * @subpackage Structs
 */
class Collective_Agreement_Summary_DataType extends AbstractStructBase
{
    /**
     * The Collective_Agreement_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Detail_DataType
     */
    public $Collective_Agreement_Data;
    /**
     * Constructor method for Collective_Agreement_Summary_DataType
     * @uses Collective_Agreement_Summary_DataType::setCollective_Agreement_Data()
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Detail_DataType $collective_Agreement_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Collective_Agreement_Detail_DataType $collective_Agreement_Data = null)
    {
        $this
            ->setCollective_Agreement_Data($collective_Agreement_Data);
    }
    /**
     * Get Collective_Agreement_Data value
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Detail_DataType|null
     */
    public function getCollective_Agreement_Data()
    {
        return $this->Collective_Agreement_Data;
    }
    /**
     * Set Collective_Agreement_Data value
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Detail_DataType $collective_Agreement_Data
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType
     */
    public function setCollective_Agreement_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Detail_DataType $collective_Agreement_Data = null)
    {
        $this->Collective_Agreement_Data = $collective_Agreement_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType
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
