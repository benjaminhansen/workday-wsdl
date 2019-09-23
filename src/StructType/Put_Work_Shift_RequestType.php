<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Work_Shift_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for adding or updating a Work Shift.
 * @subpackage Structs
 */
class Put_Work_Shift_RequestType extends AbstractStructBase
{
    /**
     * The Work_Shift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Work Shift. Only needed when updating a reference id on the Work Shift.
     * - minOccurs: 0
     * @var \StructType\Work_ShiftObjectType
     */
    public $Work_Shift_Reference;
    /**
     * The Work_Shift_Data
     * @var \StructType\Work_Shift_DataType
     */
    public $Work_Shift_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Work_Shift_RequestType
     * @uses Put_Work_Shift_RequestType::setWork_Shift_Reference()
     * @uses Put_Work_Shift_RequestType::setWork_Shift_Data()
     * @uses Put_Work_Shift_RequestType::setAdd_Only()
     * @uses Put_Work_Shift_RequestType::setVersion()
     * @param \StructType\Work_ShiftObjectType $work_Shift_Reference
     * @param \StructType\Work_Shift_DataType $work_Shift_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Work_ShiftObjectType $work_Shift_Reference = null, \StructType\Work_Shift_DataType $work_Shift_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setWork_Shift_Reference($work_Shift_Reference)
            ->setWork_Shift_Data($work_Shift_Data)
            ->setAdd_Only($add_Only)
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
     * @return \StructType\Put_Work_Shift_RequestType
     */
    public function setWork_Shift_Reference(\StructType\Work_ShiftObjectType $work_Shift_Reference = null)
    {
        $this->Work_Shift_Reference = $work_Shift_Reference;
        return $this;
    }
    /**
     * Get Work_Shift_Data value
     * @return \StructType\Work_Shift_DataType|null
     */
    public function getWork_Shift_Data()
    {
        return $this->Work_Shift_Data;
    }
    /**
     * Set Work_Shift_Data value
     * @param \StructType\Work_Shift_DataType $work_Shift_Data
     * @return \StructType\Put_Work_Shift_RequestType
     */
    public function setWork_Shift_Data(\StructType\Work_Shift_DataType $work_Shift_Data = null)
    {
        $this->Work_Shift_Data = $work_Shift_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \StructType\Put_Work_Shift_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \StructType\Put_Work_Shift_RequestType
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
     * @return \StructType\Put_Work_Shift_RequestType
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
