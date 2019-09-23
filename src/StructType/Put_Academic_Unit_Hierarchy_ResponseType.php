<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Academic_Unit_Hierarchy_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level response element for the Put Academic Unit Hierarchy operation
 * @subpackage Structs
 */
class Put_Academic_Unit_Hierarchy_ResponseType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Academic Unit Hierarchy added or updated.
     * - minOccurs: 0
     * @var \StructType\Academic_Unit_HierarchyObjectType
     */
    public $Academic_Unit_Hierarchy_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Academic_Unit_Hierarchy_ResponseType
     * @uses Put_Academic_Unit_Hierarchy_ResponseType::setAcademic_Unit_Hierarchy_Reference()
     * @uses Put_Academic_Unit_Hierarchy_ResponseType::setVersion()
     * @param \StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference
     * @param string $version
     */
    public function __construct(\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference = null, $version = null)
    {
        $this
            ->setAcademic_Unit_Hierarchy_Reference($academic_Unit_Hierarchy_Reference)
            ->setVersion($version);
    }
    /**
     * Get Academic_Unit_Hierarchy_Reference value
     * @return \StructType\Academic_Unit_HierarchyObjectType|null
     */
    public function getAcademic_Unit_Hierarchy_Reference()
    {
        return $this->Academic_Unit_Hierarchy_Reference;
    }
    /**
     * Set Academic_Unit_Hierarchy_Reference value
     * @param \StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference
     * @return \StructType\Put_Academic_Unit_Hierarchy_ResponseType
     */
    public function setAcademic_Unit_Hierarchy_Reference(\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference = null)
    {
        $this->Academic_Unit_Hierarchy_Reference = $academic_Unit_Hierarchy_Reference;
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
     * @return \StructType\Put_Academic_Unit_Hierarchy_ResponseType
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
     * @return \StructType\Put_Academic_Unit_Hierarchy_ResponseType
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
