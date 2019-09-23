<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Instructional_Site_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Instructional Location data.
 * @subpackage Structs
 */
class Location_Instructional_Site_DataType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Unit
     * @var \StructType\Academic_UnitObjectType
     */
    public $Academic_Unit_Reference;
    /**
     * The Instructional_Site_Data_Capacity
     * Meta information extracted from the WSDL
     * - documentation: Capacity
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 6
     * @var float
     */
    public $Instructional_Site_Data_Capacity;
    /**
     * The Off_Site
     * Meta information extracted from the WSDL
     * - documentation: Off-site
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Off_Site;
    /**
     * The Instructional_Use_Only
     * Meta information extracted from the WSDL
     * - documentation: Instructional Use Only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Instructional_Use_Only;
    /**
     * Constructor method for Location_Instructional_Site_DataType
     * @uses Location_Instructional_Site_DataType::setAcademic_Unit_Reference()
     * @uses Location_Instructional_Site_DataType::setInstructional_Site_Data_Capacity()
     * @uses Location_Instructional_Site_DataType::setOff_Site()
     * @uses Location_Instructional_Site_DataType::setInstructional_Use_Only()
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @param float $instructional_Site_Data_Capacity
     * @param bool $off_Site
     * @param bool $instructional_Use_Only
     */
    public function __construct(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null, $instructional_Site_Data_Capacity = null, $off_Site = null, $instructional_Use_Only = null)
    {
        $this
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setInstructional_Site_Data_Capacity($instructional_Site_Data_Capacity)
            ->setOff_Site($off_Site)
            ->setInstructional_Use_Only($instructional_Use_Only);
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
     * @return \StructType\Location_Instructional_Site_DataType
     */
    public function setAcademic_Unit_Reference(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null)
    {
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Get Instructional_Site_Data_Capacity value
     * @return float|null
     */
    public function getInstructional_Site_Data_Capacity()
    {
        return $this->Instructional_Site_Data_Capacity;
    }
    /**
     * Set Instructional_Site_Data_Capacity value
     * @param float $instructional_Site_Data_Capacity
     * @return \StructType\Location_Instructional_Site_DataType
     */
    public function setInstructional_Site_Data_Capacity($instructional_Site_Data_Capacity = null)
    {
        // validation for constraint: float
        if (!is_null($instructional_Site_Data_Capacity) && !(is_float($instructional_Site_Data_Capacity) || is_numeric($instructional_Site_Data_Capacity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($instructional_Site_Data_Capacity, true), gettype($instructional_Site_Data_Capacity)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($instructional_Site_Data_Capacity) && mb_strlen(mb_substr($instructional_Site_Data_Capacity, mb_strpos($instructional_Site_Data_Capacity, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($instructional_Site_Data_Capacity, true), mb_strlen(mb_substr($instructional_Site_Data_Capacity, mb_strpos($instructional_Site_Data_Capacity, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($instructional_Site_Data_Capacity) && $instructional_Site_Data_Capacity < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($instructional_Site_Data_Capacity, true)), __LINE__);
        }
        // validation for constraint: totalDigits(6)
        if (!is_null($instructional_Site_Data_Capacity) && mb_strlen(preg_replace('/(\D)/', '', $instructional_Site_Data_Capacity)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 6 digits, "%d" given', var_export($instructional_Site_Data_Capacity, true), mb_strlen(preg_replace('/(\D)/', '', $instructional_Site_Data_Capacity))), __LINE__);
        }
        $this->Instructional_Site_Data_Capacity = $instructional_Site_Data_Capacity;
        return $this;
    }
    /**
     * Get Off_Site value
     * @return bool|null
     */
    public function getOff_Site()
    {
        return $this->{'Off-Site'};
    }
    /**
     * Set Off_Site value
     * @param bool $off_Site
     * @return \StructType\Location_Instructional_Site_DataType
     */
    public function setOff_Site($off_Site = null)
    {
        // validation for constraint: boolean
        if (!is_null($off_Site) && !is_bool($off_Site)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($off_Site, true), gettype($off_Site)), __LINE__);
        }
        $this->Off_Site = $this->{'Off-Site'} = $off_Site;
        return $this;
    }
    /**
     * Get Instructional_Use_Only value
     * @return bool|null
     */
    public function getInstructional_Use_Only()
    {
        return $this->Instructional_Use_Only;
    }
    /**
     * Set Instructional_Use_Only value
     * @param bool $instructional_Use_Only
     * @return \StructType\Location_Instructional_Site_DataType
     */
    public function setInstructional_Use_Only($instructional_Use_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($instructional_Use_Only) && !is_bool($instructional_Use_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($instructional_Use_Only, true), gettype($instructional_Use_Only)), __LINE__);
        }
        $this->Instructional_Use_Only = $instructional_Use_Only;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Instructional_Site_DataType
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
