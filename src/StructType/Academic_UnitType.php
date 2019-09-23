<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_UnitType StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for Academic Unit Data
 * @subpackage Structs
 */
class Academic_UnitType extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - documentation: A container for detailed information about the Academic Unit
     * - minOccurs: 0
     * @var \StructType\Academic_Unit_DataType
     */
    public $Academic_Unit_Data;
    /**
     * Constructor method for Academic_UnitType
     * @uses Academic_UnitType::setAcademic_Unit_Reference()
     * @uses Academic_UnitType::setAcademic_Unit_Data()
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @param \StructType\Academic_Unit_DataType $academic_Unit_Data
     */
    public function __construct(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null, \StructType\Academic_Unit_DataType $academic_Unit_Data = null)
    {
        $this
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setAcademic_Unit_Data($academic_Unit_Data);
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
     * @return \StructType\Academic_UnitType
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
     * @return \StructType\Academic_UnitType
     */
    public function setAcademic_Unit_Data(\StructType\Academic_Unit_DataType $academic_Unit_Data = null)
    {
        $this->Academic_Unit_Data = $academic_Unit_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_UnitType
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
