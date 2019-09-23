<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Academic_Unit_Hierarchy_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level request element used to add or update an Academic Unit Hierarchy.
 * @subpackage Structs
 */
class Put_Academic_Unit_Hierarchy_RequestType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Academic Unit Hierarchy that is being updated.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType
     */
    public $Academic_Unit_Hierarchy_Reference;
    /**
     * The Academic_Unit_Hierarchy_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Academic Unit Hierarchy detail data.
     * @var \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public $Academic_Unit_Hierarchy_Data;
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
     * Constructor method for Put_Academic_Unit_Hierarchy_RequestType
     * @uses Put_Academic_Unit_Hierarchy_RequestType::setAcademic_Unit_Hierarchy_Reference()
     * @uses Put_Academic_Unit_Hierarchy_RequestType::setAcademic_Unit_Hierarchy_Data()
     * @uses Put_Academic_Unit_Hierarchy_RequestType::setAdd_Only()
     * @uses Put_Academic_Unit_Hierarchy_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType $academic_Unit_Hierarchy_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference = null, \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType $academic_Unit_Hierarchy_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setAcademic_Unit_Hierarchy_Reference($academic_Unit_Hierarchy_Reference)
            ->setAcademic_Unit_Hierarchy_Data($academic_Unit_Hierarchy_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Academic_Unit_Hierarchy_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType|null
     */
    public function getAcademic_Unit_Hierarchy_Reference()
    {
        return $this->Academic_Unit_Hierarchy_Reference;
    }
    /**
     * Set Academic_Unit_Hierarchy_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference
     * @return \WorkdayWsdl\\StructType\Put_Academic_Unit_Hierarchy_RequestType
     */
    public function setAcademic_Unit_Hierarchy_Reference(\WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference = null)
    {
        $this->Academic_Unit_Hierarchy_Reference = $academic_Unit_Hierarchy_Reference;
        return $this;
    }
    /**
     * Get Academic_Unit_Hierarchy_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType|null
     */
    public function getAcademic_Unit_Hierarchy_Data()
    {
        return $this->Academic_Unit_Hierarchy_Data;
    }
    /**
     * Set Academic_Unit_Hierarchy_Data value
     * @param \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType $academic_Unit_Hierarchy_Data
     * @return \WorkdayWsdl\\StructType\Put_Academic_Unit_Hierarchy_RequestType
     */
    public function setAcademic_Unit_Hierarchy_Data(\WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType $academic_Unit_Hierarchy_Data = null)
    {
        $this->Academic_Unit_Hierarchy_Data = $academic_Unit_Hierarchy_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Academic_Unit_Hierarchy_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Academic_Unit_Hierarchy_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Academic_Unit_Hierarchy_RequestType
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
