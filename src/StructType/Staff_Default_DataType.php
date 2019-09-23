<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Staff_Default_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Default Organization Data
 * @subpackage Structs
 */
class Staff_Default_DataType extends AbstractStructBase
{
    /**
     * The Default_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Default Organization Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\StaffObjectType
     */
    public $Default_Organization_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: When set to TRUE, the values in Default_Organization_Reference will be removed from existing Default Organization;when omitted or set to FALSE, the values in Default_Organization_Reference will be merged into existing Default
     * Organization. If inheritance of default and allowed values from the superior is being severed, setting this to 'TRUE' will not persist inherited values for this org type.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Staff_Default_DataType
     * @uses Staff_Default_DataType::setDefault_Organization_Reference()
     * @uses Staff_Default_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\StaffObjectType $default_Organization_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\StaffObjectType $default_Organization_Reference = null, $delete = null)
    {
        $this
            ->setDefault_Organization_Reference($default_Organization_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Default_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\StaffObjectType|null
     */
    public function getDefault_Organization_Reference()
    {
        return $this->Default_Organization_Reference;
    }
    /**
     * Set Default_Organization_Reference value
     * @param \WorkdayWsdl\\StructType\StaffObjectType $default_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Staff_Default_DataType
     */
    public function setDefault_Organization_Reference(\WorkdayWsdl\\StructType\StaffObjectType $default_Organization_Reference = null)
    {
        $this->Default_Organization_Reference = $default_Organization_Reference;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Staff_Default_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Staff_Default_DataType
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
