<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Work_Status_Rule_Set_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element to add or update Work Status Rule Set
 * @subpackage Structs
 */
class Put_Work_Status_Rule_Set_RequestType extends AbstractStructBase
{
    /**
     * The Work_Status_Rule_Set_Reference
     * Meta information extracted from the WSDL
     * - documentation: Work Status Rule Set Reference to be provided if request is an Edit action
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType
     */
    public $Work_Status_Rule_Set_Reference;
    /**
     * The Work_Status_Rule_Set_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Status_Rule_Set_DataType
     */
    public $Work_Status_Rule_Set_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update. If an existing instance is found and this flag is set there will be an error.
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
     * Constructor method for Put_Work_Status_Rule_Set_RequestType
     * @uses Put_Work_Status_Rule_Set_RequestType::setWork_Status_Rule_Set_Reference()
     * @uses Put_Work_Status_Rule_Set_RequestType::setWork_Status_Rule_Set_Data()
     * @uses Put_Work_Status_Rule_Set_RequestType::setAdd_Only()
     * @uses Put_Work_Status_Rule_Set_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_Set_DataType $work_Status_Rule_Set_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference = null, \WorkdayWsdl\\StructType\Work_Status_Rule_Set_DataType $work_Status_Rule_Set_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setWork_Status_Rule_Set_Reference($work_Status_Rule_Set_Reference)
            ->setWork_Status_Rule_Set_Data($work_Status_Rule_Set_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Work_Status_Rule_Set_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType|null
     */
    public function getWork_Status_Rule_Set_Reference()
    {
        return $this->Work_Status_Rule_Set_Reference;
    }
    /**
     * Set Work_Status_Rule_Set_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_RequestType
     */
    public function setWork_Status_Rule_Set_Reference(\WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference = null)
    {
        $this->Work_Status_Rule_Set_Reference = $work_Status_Rule_Set_Reference;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Set_Data value
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_DataType|null
     */
    public function getWork_Status_Rule_Set_Data()
    {
        return $this->Work_Status_Rule_Set_Data;
    }
    /**
     * Set Work_Status_Rule_Set_Data value
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_Set_DataType $work_Status_Rule_Set_Data
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_RequestType
     */
    public function setWork_Status_Rule_Set_Data(\WorkdayWsdl\\StructType\Work_Status_Rule_Set_DataType $work_Status_Rule_Set_Data = null)
    {
        $this->Work_Status_Rule_Set_Data = $work_Status_Rule_Set_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_RequestType
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
