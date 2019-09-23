<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Compensation_CodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that includes the Workers' Compensation Code instance set and data.
 * @subpackage Structs
 */
class Workers_Compensation_CodeType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Workers' Compensation Code
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_CodeObjectType
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * The Workers_Compensation_Code_Data
     * Meta information extracted from the WSDL
     * - documentation: Workers' Compensation Code Data
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_Code_DataType
     */
    public $Workers_Compensation_Code_Data;
    /**
     * Constructor method for Workers_Compensation_CodeType
     * @uses Workers_Compensation_CodeType::setWorkers_Compensation_Code_Reference()
     * @uses Workers_Compensation_CodeType::setWorkers_Compensation_Code_Data()
     * @param \StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @param \StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data
     */
    public function __construct(\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null, \StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data = null)
    {
        $this
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference)
            ->setWorkers_Compensation_Code_Data($workers_Compensation_Code_Data);
    }
    /**
     * Get Workers_Compensation_Code_Reference value
     * @return \StructType\Workers_Compensation_CodeObjectType|null
     */
    public function getWorkers_Compensation_Code_Reference()
    {
        return $this->Workers_Compensation_Code_Reference;
    }
    /**
     * Set Workers_Compensation_Code_Reference value
     * @param \StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @return \StructType\Workers_Compensation_CodeType
     */
    public function setWorkers_Compensation_Code_Reference(\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null)
    {
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
        return $this;
    }
    /**
     * Get Workers_Compensation_Code_Data value
     * @return \StructType\Workers_Compensation_Code_DataType|null
     */
    public function getWorkers_Compensation_Code_Data()
    {
        return $this->Workers_Compensation_Code_Data;
    }
    /**
     * Set Workers_Compensation_Code_Data value
     * @param \StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data
     * @return \StructType\Workers_Compensation_CodeType
     */
    public function setWorkers_Compensation_Code_Data(\StructType\Workers_Compensation_Code_DataType $workers_Compensation_Code_Data = null)
    {
        $this->Workers_Compensation_Code_Data = $workers_Compensation_Code_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workers_Compensation_CodeType
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
