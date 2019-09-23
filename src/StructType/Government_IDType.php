<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Government_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Government Identifier data.
 * @subpackage Structs
 */
class Government_IDType extends AbstractStructBase
{
    /**
     * The Government_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Reference ID for the Government Identifier.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Government_ID_Reference;
    /**
     * The Government_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Government Identifier Data
     * - minOccurs: 0
     * @var \StructType\Government_ID_DataType
     */
    public $Government_ID_Data;
    /**
     * The Government_ID_Shared_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shared Reference ID for Government Identifiers.
     * - minOccurs: 0
     * @var \StructType\Government_Identifier_ReferenceObjectType
     */
    public $Government_ID_Shared_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Delete is set to True and Replace All has been set to False, the ID will be deleted when the web service is submitted.Note: The Replace All flag defaults to False if not specified in the web service
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Government_IDType
     * @uses Government_IDType::setGovernment_ID_Reference()
     * @uses Government_IDType::setGovernment_ID_Data()
     * @uses Government_IDType::setGovernment_ID_Shared_Reference()
     * @uses Government_IDType::setDelete()
     * @param \StructType\Unique_IdentifierObjectType $government_ID_Reference
     * @param \StructType\Government_ID_DataType $government_ID_Data
     * @param \StructType\Government_Identifier_ReferenceObjectType $government_ID_Shared_Reference
     * @param bool $delete
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $government_ID_Reference = null, \StructType\Government_ID_DataType $government_ID_Data = null, \StructType\Government_Identifier_ReferenceObjectType $government_ID_Shared_Reference = null, $delete = null)
    {
        $this
            ->setGovernment_ID_Reference($government_ID_Reference)
            ->setGovernment_ID_Data($government_ID_Data)
            ->setGovernment_ID_Shared_Reference($government_ID_Shared_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Government_ID_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getGovernment_ID_Reference()
    {
        return $this->Government_ID_Reference;
    }
    /**
     * Set Government_ID_Reference value
     * @param \StructType\Unique_IdentifierObjectType $government_ID_Reference
     * @return \StructType\Government_IDType
     */
    public function setGovernment_ID_Reference(\StructType\Unique_IdentifierObjectType $government_ID_Reference = null)
    {
        $this->Government_ID_Reference = $government_ID_Reference;
        return $this;
    }
    /**
     * Get Government_ID_Data value
     * @return \StructType\Government_ID_DataType|null
     */
    public function getGovernment_ID_Data()
    {
        return $this->Government_ID_Data;
    }
    /**
     * Set Government_ID_Data value
     * @param \StructType\Government_ID_DataType $government_ID_Data
     * @return \StructType\Government_IDType
     */
    public function setGovernment_ID_Data(\StructType\Government_ID_DataType $government_ID_Data = null)
    {
        $this->Government_ID_Data = $government_ID_Data;
        return $this;
    }
    /**
     * Get Government_ID_Shared_Reference value
     * @return \StructType\Government_Identifier_ReferenceObjectType|null
     */
    public function getGovernment_ID_Shared_Reference()
    {
        return $this->Government_ID_Shared_Reference;
    }
    /**
     * Set Government_ID_Shared_Reference value
     * @param \StructType\Government_Identifier_ReferenceObjectType $government_ID_Shared_Reference
     * @return \StructType\Government_IDType
     */
    public function setGovernment_ID_Shared_Reference(\StructType\Government_Identifier_ReferenceObjectType $government_ID_Shared_Reference = null)
    {
        $this->Government_ID_Shared_Reference = $government_ID_Shared_Reference;
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
     * @return \StructType\Government_IDType
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
     * @return \StructType\Government_IDType
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
