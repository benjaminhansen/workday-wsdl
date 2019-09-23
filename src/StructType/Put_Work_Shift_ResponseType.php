<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Work_Shift_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Containing Put Work Shift Response Data
 * @subpackage Structs
 */
class Put_Work_Shift_ResponseType extends AbstractStructBase
{
    /**
     * The Work_Shift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Work Shift.
     * - minOccurs: 0
     * @var \StructType\Work_ShiftObjectType
     */
    public $Work_Shift_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Work_Shift_ResponseType
     * @uses Put_Work_Shift_ResponseType::setWork_Shift_Reference()
     * @uses Put_Work_Shift_ResponseType::setVersion()
     * @param \StructType\Work_ShiftObjectType $work_Shift_Reference
     * @param string $version
     */
    public function __construct(\StructType\Work_ShiftObjectType $work_Shift_Reference = null, $version = null)
    {
        $this
            ->setWork_Shift_Reference($work_Shift_Reference)
            ->setVersion($version);
    }
    /**
     * Get Work_Shift_Reference value
     * @return \StructType\Work_ShiftObjectType|null
     */
    public function getWork_Shift_Reference()
    {
        return $this->Work_Shift_Reference;
    }
    /**
     * Set Work_Shift_Reference value
     * @param \StructType\Work_ShiftObjectType $work_Shift_Reference
     * @return \StructType\Put_Work_Shift_ResponseType
     */
    public function setWork_Shift_Reference(\StructType\Work_ShiftObjectType $work_Shift_Reference = null)
    {
        $this->Work_Shift_Reference = $work_Shift_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Work_Shift_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Work_Shift_ResponseType
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
