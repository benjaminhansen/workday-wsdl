<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Process_Comment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Captures a comment for the Business Process.
 * @subpackage Structs
 */
class Business_Process_Comment_DataType extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Free form comment regarding the business process.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Default the Person making the comment to the processing person if not submitted via the web service.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * Constructor method for Business_Process_Comment_DataType
     * @uses Business_Process_Comment_DataType::setComment()
     * @uses Business_Process_Comment_DataType::setWorker_Reference()
     * @param string $comment
     * @param \StructType\WorkerObjectType $worker_Reference
     */
    public function __construct($comment = null, \StructType\WorkerObjectType $worker_Reference = null)
    {
        $this
            ->setComment($comment)
            ->setWorker_Reference($worker_Reference);
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \StructType\Business_Process_Comment_DataType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\WorkerObjectType $worker_Reference
     * @return \StructType\Business_Process_Comment_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Business_Process_Comment_DataType
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
