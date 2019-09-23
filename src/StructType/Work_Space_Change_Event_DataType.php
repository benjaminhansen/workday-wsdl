<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Space_Change_Event_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Sub element used to change work space on a Position.
 * @subpackage Structs
 */
class Work_Space_Change_Event_DataType extends AbstractStructBase
{
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Position you want to specify for the "Change Work Space" Web Service.
     * @var \StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the work space change will be effective.
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Work_Space_Reference
     * Meta information extracted from the WSDL
     * - documentation: Work Space location for the Position.
     * @var \StructType\LocationObjectType
     */
    public $Work_Space_Reference;
    /**
     * Constructor method for Work_Space_Change_Event_DataType
     * @uses Work_Space_Change_Event_DataType::setPosition_Reference()
     * @uses Work_Space_Change_Event_DataType::setEffective_Date()
     * @uses Work_Space_Change_Event_DataType::setWork_Space_Reference()
     * @param \StructType\Position_ElementObjectType $position_Reference
     * @param string $effective_Date
     * @param \StructType\LocationObjectType $work_Space_Reference
     */
    public function __construct(\StructType\Position_ElementObjectType $position_Reference = null, $effective_Date = null, \StructType\LocationObjectType $work_Space_Reference = null)
    {
        $this
            ->setPosition_Reference($position_Reference)
            ->setEffective_Date($effective_Date)
            ->setWork_Space_Reference($work_Space_Reference);
    }
    /**
     * Get Position_Reference value
     * @return \StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \StructType\Position_ElementObjectType $position_Reference
     * @return \StructType\Work_Space_Change_Event_DataType
     */
    public function setPosition_Reference(\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Work_Space_Change_Event_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Work_Space_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getWork_Space_Reference()
    {
        return $this->Work_Space_Reference;
    }
    /**
     * Set Work_Space_Reference value
     * @param \StructType\LocationObjectType $work_Space_Reference
     * @return \StructType\Work_Space_Change_Event_DataType
     */
    public function setWork_Space_Reference(\StructType\LocationObjectType $work_Space_Reference = null)
    {
        $this->Work_Space_Reference = $work_Space_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Space_Change_Event_DataType
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
