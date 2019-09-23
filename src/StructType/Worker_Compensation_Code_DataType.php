<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Compensation_Code_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the worker compensation code. Contains the reference id and the worker comp code.
 * @subpackage Structs
 */
class Worker_Compensation_Code_DataType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Workers' Compensation Code
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_CodeObjectType
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * The Workers_Compensation_Code
     * Meta information extracted from the WSDL
     * - documentation: The worker compensation code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Workers_Compensation_Code;
    /**
     * Constructor method for Worker_Compensation_Code_DataType
     * @uses Worker_Compensation_Code_DataType::setWorkers_Compensation_Code_Reference()
     * @uses Worker_Compensation_Code_DataType::setWorkers_Compensation_Code()
     * @param \StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @param string $workers_Compensation_Code
     */
    public function __construct(\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null, $workers_Compensation_Code = null)
    {
        $this
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference)
            ->setWorkers_Compensation_Code($workers_Compensation_Code);
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
     * @return \StructType\Worker_Compensation_Code_DataType
     */
    public function setWorkers_Compensation_Code_Reference(\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null)
    {
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
        return $this;
    }
    /**
     * Get Workers_Compensation_Code value
     * @return string|null
     */
    public function getWorkers_Compensation_Code()
    {
        return $this->Workers_Compensation_Code;
    }
    /**
     * Set Workers_Compensation_Code value
     * @param string $workers_Compensation_Code
     * @return \StructType\Worker_Compensation_Code_DataType
     */
    public function setWorkers_Compensation_Code($workers_Compensation_Code = null)
    {
        // validation for constraint: string
        if (!is_null($workers_Compensation_Code) && !is_string($workers_Compensation_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workers_Compensation_Code, true), gettype($workers_Compensation_Code)), __LINE__);
        }
        $this->Workers_Compensation_Code = $workers_Compensation_Code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Compensation_Code_DataType
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
