<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DependentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Dependent data.
 * @subpackage Structs
 */
class DependentType extends AbstractStructBase
{
    /**
     * The Dependent_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the dependent.
     * @var \WorkdayWsdl\\StructType\DependentObjectType
     */
    public $Dependent_Reference;
    /**
     * The Dependent_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information for a dependent.
     * @var \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public $Dependent_Data;
    /**
     * Constructor method for DependentType
     * @uses DependentType::setDependent_Reference()
     * @uses DependentType::setDependent_Data()
     * @param \WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference
     * @param \WorkdayWsdl\\StructType\Dependent_DataType $dependent_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference = null, \WorkdayWsdl\\StructType\Dependent_DataType $dependent_Data = null)
    {
        $this
            ->setDependent_Reference($dependent_Reference)
            ->setDependent_Data($dependent_Data);
    }
    /**
     * Get Dependent_Reference value
     * @return \WorkdayWsdl\\StructType\DependentObjectType|null
     */
    public function getDependent_Reference()
    {
        return $this->Dependent_Reference;
    }
    /**
     * Set Dependent_Reference value
     * @param \WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference
     * @return \WorkdayWsdl\\StructType\DependentType
     */
    public function setDependent_Reference(\WorkdayWsdl\\StructType\DependentObjectType $dependent_Reference = null)
    {
        $this->Dependent_Reference = $dependent_Reference;
        return $this;
    }
    /**
     * Get Dependent_Data value
     * @return \WorkdayWsdl\\StructType\Dependent_DataType|null
     */
    public function getDependent_Data()
    {
        return $this->Dependent_Data;
    }
    /**
     * Set Dependent_Data value
     * @param \WorkdayWsdl\\StructType\Dependent_DataType $dependent_Data
     * @return \WorkdayWsdl\\StructType\DependentType
     */
    public function setDependent_Data(\WorkdayWsdl\\StructType\Dependent_DataType $dependent_Data = null)
    {
        $this->Dependent_Data = $dependent_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\DependentType
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
