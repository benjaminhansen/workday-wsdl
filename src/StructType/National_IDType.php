<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for National_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for all National Identifier Data.
 * @subpackage Structs
 */
class National_IDType extends AbstractStructBase
{
    /**
     * The National_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Reference ID for the National Identifier.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $National_ID_Reference;
    /**
     * The National_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the National Identifier Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\National_ID_DataType
     */
    public $National_ID_Data;
    /**
     * The National_ID_Shared_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shared Reference ID for National Identifiers.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\National_Identifier_ReferenceObjectType
     */
    public $National_ID_Shared_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Delete is set to True and Replace All has been set to False, the ID will be deleted when the web service is submitted.Note: The Replace All flag defaults to False if not specified in the web service
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for National_IDType
     * @uses National_IDType::setNational_ID_Reference()
     * @uses National_IDType::setNational_ID_Data()
     * @uses National_IDType::setNational_ID_Shared_Reference()
     * @uses National_IDType::setDelete()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $national_ID_Reference
     * @param \WorkdayWsdl\\StructType\National_ID_DataType $national_ID_Data
     * @param \WorkdayWsdl\\StructType\National_Identifier_ReferenceObjectType $national_ID_Shared_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $national_ID_Reference = null, \WorkdayWsdl\\StructType\National_ID_DataType $national_ID_Data = null, \WorkdayWsdl\\StructType\National_Identifier_ReferenceObjectType $national_ID_Shared_Reference = null, $delete = null)
    {
        $this
            ->setNational_ID_Reference($national_ID_Reference)
            ->setNational_ID_Data($national_ID_Data)
            ->setNational_ID_Shared_Reference($national_ID_Shared_Reference)
            ->setDelete($delete);
    }
    /**
     * Get National_ID_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getNational_ID_Reference()
    {
        return $this->National_ID_Reference;
    }
    /**
     * Set National_ID_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $national_ID_Reference
     * @return \WorkdayWsdl\\StructType\National_IDType
     */
    public function setNational_ID_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $national_ID_Reference = null)
    {
        $this->National_ID_Reference = $national_ID_Reference;
        return $this;
    }
    /**
     * Get National_ID_Data value
     * @return \WorkdayWsdl\\StructType\National_ID_DataType|null
     */
    public function getNational_ID_Data()
    {
        return $this->National_ID_Data;
    }
    /**
     * Set National_ID_Data value
     * @param \WorkdayWsdl\\StructType\National_ID_DataType $national_ID_Data
     * @return \WorkdayWsdl\\StructType\National_IDType
     */
    public function setNational_ID_Data(\WorkdayWsdl\\StructType\National_ID_DataType $national_ID_Data = null)
    {
        $this->National_ID_Data = $national_ID_Data;
        return $this;
    }
    /**
     * Get National_ID_Shared_Reference value
     * @return \WorkdayWsdl\\StructType\National_Identifier_ReferenceObjectType|null
     */
    public function getNational_ID_Shared_Reference()
    {
        return $this->National_ID_Shared_Reference;
    }
    /**
     * Set National_ID_Shared_Reference value
     * @param \WorkdayWsdl\\StructType\National_Identifier_ReferenceObjectType $national_ID_Shared_Reference
     * @return \WorkdayWsdl\\StructType\National_IDType
     */
    public function setNational_ID_Shared_Reference(\WorkdayWsdl\\StructType\National_Identifier_ReferenceObjectType $national_ID_Shared_Reference = null)
    {
        $this->National_ID_Shared_Reference = $national_ID_Shared_Reference;
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
     * @return \WorkdayWsdl\\StructType\National_IDType
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
     * @return \WorkdayWsdl\\StructType\National_IDType
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
