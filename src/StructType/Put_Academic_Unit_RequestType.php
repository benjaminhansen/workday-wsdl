<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Academic_Unit_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for selecting the Academic Unit to be updated
 * @subpackage Structs
 */
class Put_Academic_Unit_RequestType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Academic Unit
     * - minOccurs: 0
     * @var \StructType\Academic_UnitObjectType
     */
    public $Academic_Unit_Reference;
    /**
     * The Academic_Unit_Data
     * @var \StructType\Academic_Unit_DataType
     */
    public $Academic_Unit_Data;
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
     * Constructor method for Put_Academic_Unit_RequestType
     * @uses Put_Academic_Unit_RequestType::setAcademic_Unit_Reference()
     * @uses Put_Academic_Unit_RequestType::setAcademic_Unit_Data()
     * @uses Put_Academic_Unit_RequestType::setAdd_Only()
     * @uses Put_Academic_Unit_RequestType::setVersion()
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @param \StructType\Academic_Unit_DataType $academic_Unit_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null, \StructType\Academic_Unit_DataType $academic_Unit_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setAcademic_Unit_Data($academic_Unit_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * Set Academic_Unit_Reference value
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @return \StructType\Put_Academic_Unit_RequestType
     */
    public function setAcademic_Unit_Reference(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null)
    {
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Get Academic_Unit_Data value
     * @return \StructType\Academic_Unit_DataType|null
     */
    public function getAcademic_Unit_Data()
    {
        return $this->Academic_Unit_Data;
    }
    /**
     * Set Academic_Unit_Data value
     * @param \StructType\Academic_Unit_DataType $academic_Unit_Data
     * @return \StructType\Put_Academic_Unit_RequestType
     */
    public function setAcademic_Unit_Data(\StructType\Academic_Unit_DataType $academic_Unit_Data = null)
    {
        $this->Academic_Unit_Data = $academic_Unit_Data;
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
     * @return \StructType\Put_Academic_Unit_RequestType
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
     * @return \StructType\Put_Academic_Unit_RequestType
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
     * @return \StructType\Put_Academic_Unit_RequestType
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
