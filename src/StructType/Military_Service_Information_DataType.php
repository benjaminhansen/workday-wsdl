<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Military_Service_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Military Service Reference provided is not owned by the worker in this request or does not exist. | Military Service Reference is required when deleting a Military Service entry | Wrapper element for each Military Service entry.
 * @subpackage Structs
 */
class Military_Service_Information_DataType extends AbstractStructBase
{
    /**
     * The Military_Service_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Military Service entry for edits and deletes.
     * - minOccurs: 0
     * @var \StructType\Military_Service_ReferenceObjectType
     */
    public $Military_Service_Reference;
    /**
     * The Military_Service_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Military_Service_Sub_DataType
     */
    public $Military_Service_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag to delete an existing Military Service entry. If this flag is set, Military Service Reference is also required.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Military_Service_Information_DataType
     * @uses Military_Service_Information_DataType::setMilitary_Service_Reference()
     * @uses Military_Service_Information_DataType::setMilitary_Service_Data()
     * @uses Military_Service_Information_DataType::setDelete()
     * @param \StructType\Military_Service_ReferenceObjectType $military_Service_Reference
     * @param \StructType\Military_Service_Sub_DataType $military_Service_Data
     * @param bool $delete
     */
    public function __construct(\StructType\Military_Service_ReferenceObjectType $military_Service_Reference = null, \StructType\Military_Service_Sub_DataType $military_Service_Data = null, $delete = null)
    {
        $this
            ->setMilitary_Service_Reference($military_Service_Reference)
            ->setMilitary_Service_Data($military_Service_Data)
            ->setDelete($delete);
    }
    /**
     * Get Military_Service_Reference value
     * @return \StructType\Military_Service_ReferenceObjectType|null
     */
    public function getMilitary_Service_Reference()
    {
        return $this->Military_Service_Reference;
    }
    /**
     * Set Military_Service_Reference value
     * @param \StructType\Military_Service_ReferenceObjectType $military_Service_Reference
     * @return \StructType\Military_Service_Information_DataType
     */
    public function setMilitary_Service_Reference(\StructType\Military_Service_ReferenceObjectType $military_Service_Reference = null)
    {
        $this->Military_Service_Reference = $military_Service_Reference;
        return $this;
    }
    /**
     * Get Military_Service_Data value
     * @return \StructType\Military_Service_Sub_DataType|null
     */
    public function getMilitary_Service_Data()
    {
        return $this->Military_Service_Data;
    }
    /**
     * Set Military_Service_Data value
     * @param \StructType\Military_Service_Sub_DataType $military_Service_Data
     * @return \StructType\Military_Service_Information_DataType
     */
    public function setMilitary_Service_Data(\StructType\Military_Service_Sub_DataType $military_Service_Data = null)
    {
        $this->Military_Service_Data = $military_Service_Data;
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
     * @return \StructType\Military_Service_Information_DataType
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
     * @return \StructType\Military_Service_Information_DataType
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
