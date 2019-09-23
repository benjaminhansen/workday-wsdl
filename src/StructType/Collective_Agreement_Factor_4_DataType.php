<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collective_Agreement_Factor_4_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the collective agreement factor 4 and factor option 4 data.
 * @subpackage Structs
 */
class Collective_Agreement_Factor_4_DataType extends AbstractStructBase
{
    /**
     * The Collective_Agreement_Factor_4_Reference
     * Meta information extracted from the WSDL
     * - documentation: The collective agreement factor 4.
     * - minOccurs: 0
     * @var \StructType\Collective_Agreement_FactorObjectType
     */
    public $Collective_Agreement_Factor_4_Reference;
    /**
     * The Collective_Agreement_Factor_Option_4_Reference
     * Meta information extracted from the WSDL
     * - documentation: The collective agreement factor option 4.
     * - minOccurs: 0
     * @var \StructType\Collective_Agreement_Factor_OptionObjectType
     */
    public $Collective_Agreement_Factor_Option_4_Reference;
    /**
     * Constructor method for Collective_Agreement_Factor_4_DataType
     * @uses Collective_Agreement_Factor_4_DataType::setCollective_Agreement_Factor_4_Reference()
     * @uses Collective_Agreement_Factor_4_DataType::setCollective_Agreement_Factor_Option_4_Reference()
     * @param \StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_4_Reference
     * @param \StructType\Collective_Agreement_Factor_OptionObjectType $collective_Agreement_Factor_Option_4_Reference
     */
    public function __construct(\StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_4_Reference = null, \StructType\Collective_Agreement_Factor_OptionObjectType $collective_Agreement_Factor_Option_4_Reference = null)
    {
        $this
            ->setCollective_Agreement_Factor_4_Reference($collective_Agreement_Factor_4_Reference)
            ->setCollective_Agreement_Factor_Option_4_Reference($collective_Agreement_Factor_Option_4_Reference);
    }
    /**
     * Get collective_Agreement_Factor_Reference value
     * @return collective_Agreement_Factor_Reference
     */
    public function getCollective_Agreement_Factor_4_Reference()
    {
        return $this->Collective_Agreement_Factor_4_Reference;
    }
    /**
     * Set collective_Agreement_Factor_Reference value
     * @param collective_Agreement_Factor_Reference $collective_Agreement_Factor_Reference
     * @return \StructType\Collective_Agreement_Factor_4_DataType
     */
    public function setCollective_Agreement_Factor_4_Reference(\StructType\Collective_Agreement_FactorObjectType $collective_Agreement_Factor_4_Reference = null)
    {
        $this->Collective_Agreement_Factor_4_Reference = $collective_Agreement_Factor_4_Reference;
        return $this;
    }
    /**
     * Get collective_Agreement_Factor_Option_Reference value
     * @return collective_Agreement_Factor_Option_Reference
     */
    public function getCollective_Agreement_Factor_Option_4_Reference()
    {
        return $this->Collective_Agreement_Factor_Option_4_Reference;
    }
    /**
     * Set collective_Agreement_Factor_Option_Reference value
     * @param collective_Agreement_Factor_Option_Reference $collective_Agreement_Factor_Option_Reference
     * @return \StructType\Collective_Agreement_Factor_4_DataType
     */
    public function setCollective_Agreement_Factor_Option_4_Reference(\StructType\Collective_Agreement_Factor_OptionObjectType $collective_Agreement_Factor_Option_4_Reference = null)
    {
        $this->Collective_Agreement_Factor_Option_4_Reference = $collective_Agreement_Factor_Option_4_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Collective_Agreement_Factor_4_DataType
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
