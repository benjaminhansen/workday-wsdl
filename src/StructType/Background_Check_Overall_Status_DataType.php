<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Background_Check_Overall_Status_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Background Check data.
 * @subpackage Structs
 */
class Background_Check_Overall_Status_DataType extends AbstractStructBase
{
    /**
     * The Status_Date
     * Meta information extracted from the WSDL
     * - documentation: Background check status date.
     * - maxOccurs: 1
     * @var string
     */
    public $Status_Date;
    /**
     * The Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Background check status.
     * @var \WorkdayWsdl\\StructType\Background_Check_StatusObjectType
     */
    public $Status_Reference;
    /**
     * The Status_Comment
     * Meta information extracted from the WSDL
     * - documentation: Background check status comment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status_Comment;
    /**
     * Constructor method for Background_Check_Overall_Status_DataType
     * @uses Background_Check_Overall_Status_DataType::setStatus_Date()
     * @uses Background_Check_Overall_Status_DataType::setStatus_Reference()
     * @uses Background_Check_Overall_Status_DataType::setStatus_Comment()
     * @param string $status_Date
     * @param \WorkdayWsdl\\StructType\Background_Check_StatusObjectType $status_Reference
     * @param string $status_Comment
     */
    public function __construct($status_Date = null, \WorkdayWsdl\\StructType\Background_Check_StatusObjectType $status_Reference = null, $status_Comment = null)
    {
        $this
            ->setStatus_Date($status_Date)
            ->setStatus_Reference($status_Reference)
            ->setStatus_Comment($status_Comment);
    }
    /**
     * Get Status_Date value
     * @return string|null
     */
    public function getStatus_Date()
    {
        return $this->Status_Date;
    }
    /**
     * Set Status_Date value
     * @param string $status_Date
     * @return \WorkdayWsdl\\StructType\Background_Check_Overall_Status_DataType
     */
    public function setStatus_Date($status_Date = null)
    {
        // validation for constraint: string
        if (!is_null($status_Date) && !is_string($status_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status_Date, true), gettype($status_Date)), __LINE__);
        }
        $this->Status_Date = $status_Date;
        return $this;
    }
    /**
     * Get Status_Reference value
     * @return \WorkdayWsdl\\StructType\Background_Check_StatusObjectType|null
     */
    public function getStatus_Reference()
    {
        return $this->Status_Reference;
    }
    /**
     * Set Status_Reference value
     * @param \WorkdayWsdl\\StructType\Background_Check_StatusObjectType $status_Reference
     * @return \WorkdayWsdl\\StructType\Background_Check_Overall_Status_DataType
     */
    public function setStatus_Reference(\WorkdayWsdl\\StructType\Background_Check_StatusObjectType $status_Reference = null)
    {
        $this->Status_Reference = $status_Reference;
        return $this;
    }
    /**
     * Get Status_Comment value
     * @return string|null
     */
    public function getStatus_Comment()
    {
        return $this->Status_Comment;
    }
    /**
     * Set Status_Comment value
     * @param string $status_Comment
     * @return \WorkdayWsdl\\StructType\Background_Check_Overall_Status_DataType
     */
    public function setStatus_Comment($status_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($status_Comment) && !is_string($status_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status_Comment, true), gettype($status_Comment)), __LINE__);
        }
        $this->Status_Comment = $status_Comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Background_Check_Overall_Status_DataType
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
