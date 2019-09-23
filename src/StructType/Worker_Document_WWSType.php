<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Document_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for documents associated with a worker.
 * @subpackage Structs
 */
class Worker_Document_WWSType extends AbstractStructBase
{
    /**
     * The Worker_Document_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the worker document.
     * @var \StructType\Worker_DocumentObjectType
     */
    public $Worker_Document_Reference;
    /**
     * The Worker_Document_Detail_Data
     * Meta information extracted from the WSDL
     * - documentation: The information about the worker document, such as the category and file.
     * @var \StructType\Worker_Document_Details_DataType
     */
    public $Worker_Document_Detail_Data;
    /**
     * Constructor method for Worker_Document_WWSType
     * @uses Worker_Document_WWSType::setWorker_Document_Reference()
     * @uses Worker_Document_WWSType::setWorker_Document_Detail_Data()
     * @param \StructType\Worker_DocumentObjectType $worker_Document_Reference
     * @param \StructType\Worker_Document_Details_DataType $worker_Document_Detail_Data
     */
    public function __construct(\StructType\Worker_DocumentObjectType $worker_Document_Reference = null, \StructType\Worker_Document_Details_DataType $worker_Document_Detail_Data = null)
    {
        $this
            ->setWorker_Document_Reference($worker_Document_Reference)
            ->setWorker_Document_Detail_Data($worker_Document_Detail_Data);
    }
    /**
     * Get Worker_Document_Reference value
     * @return \StructType\Worker_DocumentObjectType|null
     */
    public function getWorker_Document_Reference()
    {
        return $this->Worker_Document_Reference;
    }
    /**
     * Set Worker_Document_Reference value
     * @param \StructType\Worker_DocumentObjectType $worker_Document_Reference
     * @return \StructType\Worker_Document_WWSType
     */
    public function setWorker_Document_Reference(\StructType\Worker_DocumentObjectType $worker_Document_Reference = null)
    {
        $this->Worker_Document_Reference = $worker_Document_Reference;
        return $this;
    }
    /**
     * Get Worker_Document_Detail_Data value
     * @return \StructType\Worker_Document_Details_DataType|null
     */
    public function getWorker_Document_Detail_Data()
    {
        return $this->Worker_Document_Detail_Data;
    }
    /**
     * Set Worker_Document_Detail_Data value
     * @param \StructType\Worker_Document_Details_DataType $worker_Document_Detail_Data
     * @return \StructType\Worker_Document_WWSType
     */
    public function setWorker_Document_Detail_Data(\StructType\Worker_Document_Details_DataType $worker_Document_Detail_Data = null)
    {
        $this->Worker_Document_Detail_Data = $worker_Document_Detail_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Document_WWSType
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
