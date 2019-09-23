<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Student_Housing_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Location Student Housing Assignment Data Wrapper for the Location iData Element
 * @subpackage Structs
 */
class Location_Student_Housing_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Academic Unit Reference for a Student Housing Assignment
     * @var \WorkdayWsdl\\StructType\Academic_UnitObjectType
     */
    public $Academic_Unit_Reference;
    /**
     * Constructor method for Location_Student_Housing_Assignment_DataType
     * @uses Location_Student_Housing_Assignment_DataType::setAcademic_Unit_Reference()
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType $academic_Unit_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Academic_UnitObjectType $academic_Unit_Reference = null)
    {
        $this
            ->setAcademic_Unit_Reference($academic_Unit_Reference);
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_UnitObjectType|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * Set Academic_Unit_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @return \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType
     */
    public function setAcademic_Unit_Reference(\WorkdayWsdl\\StructType\Academic_UnitObjectType $academic_Unit_Reference = null)
    {
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Student_Housing_Assignment_DataType
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
