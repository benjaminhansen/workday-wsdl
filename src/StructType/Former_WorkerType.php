<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_WorkerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for adding or updating a Former Worker.
 * @subpackage Structs
 */
class Former_WorkerType extends AbstractStructBase
{
    /**
     * The Former_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to a Former Worker.Reference ID Type: Former_Worker_ID
     * - minOccurs: 0
     * @var \StructType\Former_WorkerObjectType
     */
    public $Former_Worker_Reference;
    /**
     * The Former_Worker_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Former_Worker_DataType
     */
    public $Former_Worker_Data;
    /**
     * Constructor method for Former_WorkerType
     * @uses Former_WorkerType::setFormer_Worker_Reference()
     * @uses Former_WorkerType::setFormer_Worker_Data()
     * @param \StructType\Former_WorkerObjectType $former_Worker_Reference
     * @param \StructType\Former_Worker_DataType $former_Worker_Data
     */
    public function __construct(\StructType\Former_WorkerObjectType $former_Worker_Reference = null, \StructType\Former_Worker_DataType $former_Worker_Data = null)
    {
        $this
            ->setFormer_Worker_Reference($former_Worker_Reference)
            ->setFormer_Worker_Data($former_Worker_Data);
    }
    /**
     * Get Former_Worker_Reference value
     * @return \StructType\Former_WorkerObjectType|null
     */
    public function getFormer_Worker_Reference()
    {
        return $this->Former_Worker_Reference;
    }
    /**
     * Set Former_Worker_Reference value
     * @param \StructType\Former_WorkerObjectType $former_Worker_Reference
     * @return \StructType\Former_WorkerType
     */
    public function setFormer_Worker_Reference(\StructType\Former_WorkerObjectType $former_Worker_Reference = null)
    {
        $this->Former_Worker_Reference = $former_Worker_Reference;
        return $this;
    }
    /**
     * Get Former_Worker_Data value
     * @return \StructType\Former_Worker_DataType|null
     */
    public function getFormer_Worker_Data()
    {
        return $this->Former_Worker_Data;
    }
    /**
     * Set Former_Worker_Data value
     * @param \StructType\Former_Worker_DataType $former_Worker_Data
     * @return \StructType\Former_WorkerType
     */
    public function setFormer_Worker_Data(\StructType\Former_Worker_DataType $former_Worker_Data = null)
    {
        $this->Former_Worker_Data = $former_Worker_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_WorkerType
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
