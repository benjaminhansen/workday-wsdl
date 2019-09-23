<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Relative_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: contains relative names for a relative of a person
 * @subpackage Structs
 */
class Relative_Name_DataType extends AbstractStructBase
{
    /**
     * The Relative_Name_Reference_Reference
     * Meta information extracted from the WSDL
     * - documentation: Holds a reference to a main relative name reference, with a single instance referencing all versions of a relative name.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Relative_Name_ReferenceObjectType
     */
    public $Relative_Name_Reference_Reference;
    /**
     * The Relative_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Relative Type specified in this request is inactive. Only active statuses are allowed. | Type to specify the relative person relationship.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Relative_TypeObjectType
     */
    public $Relative_Type_Reference;
    /**
     * The Name_Detail_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public $Name_Detail_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag to delete an existing Relative Name entry. If this flag is set, Relative Name Reference is also required.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Relative_Name_DataType
     * @uses Relative_Name_DataType::setRelative_Name_Reference_Reference()
     * @uses Relative_Name_DataType::setRelative_Type_Reference()
     * @uses Relative_Name_DataType::setName_Detail_Data()
     * @uses Relative_Name_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Relative_Name_ReferenceObjectType $relative_Name_Reference_Reference
     * @param \WorkdayWsdl\\StructType\Relative_TypeObjectType $relative_Type_Reference
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Relative_Name_ReferenceObjectType $relative_Name_Reference_Reference = null, \WorkdayWsdl\\StructType\Relative_TypeObjectType $relative_Type_Reference = null, \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data = null, $delete = null)
    {
        $this
            ->setRelative_Name_Reference_Reference($relative_Name_Reference_Reference)
            ->setRelative_Type_Reference($relative_Type_Reference)
            ->setName_Detail_Data($name_Detail_Data)
            ->setDelete($delete);
    }
    /**
     * Get Relative_Name_Reference_Reference value
     * @return \WorkdayWsdl\\StructType\Relative_Name_ReferenceObjectType|null
     */
    public function getRelative_Name_Reference_Reference()
    {
        return $this->Relative_Name_Reference_Reference;
    }
    /**
     * Set Relative_Name_Reference_Reference value
     * @param \WorkdayWsdl\\StructType\Relative_Name_ReferenceObjectType $relative_Name_Reference_Reference
     * @return \WorkdayWsdl\\StructType\Relative_Name_DataType
     */
    public function setRelative_Name_Reference_Reference(\WorkdayWsdl\\StructType\Relative_Name_ReferenceObjectType $relative_Name_Reference_Reference = null)
    {
        $this->Relative_Name_Reference_Reference = $relative_Name_Reference_Reference;
        return $this;
    }
    /**
     * Get Relative_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Relative_TypeObjectType|null
     */
    public function getRelative_Type_Reference()
    {
        return $this->Relative_Type_Reference;
    }
    /**
     * Set Relative_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Relative_TypeObjectType $relative_Type_Reference
     * @return \WorkdayWsdl\\StructType\Relative_Name_DataType
     */
    public function setRelative_Type_Reference(\WorkdayWsdl\\StructType\Relative_TypeObjectType $relative_Type_Reference = null)
    {
        $this->Relative_Type_Reference = $relative_Type_Reference;
        return $this;
    }
    /**
     * Get Name_Detail_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType|null
     */
    public function getName_Detail_Data()
    {
        return $this->Name_Detail_Data;
    }
    /**
     * Set Name_Detail_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data
     * @return \WorkdayWsdl\\StructType\Relative_Name_DataType
     */
    public function setName_Detail_Data(\WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data = null)
    {
        $this->Name_Detail_Data = $name_Detail_Data;
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
     * @return \WorkdayWsdl\\StructType\Relative_Name_DataType
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
     * @return \WorkdayWsdl\\StructType\Relative_Name_DataType
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
