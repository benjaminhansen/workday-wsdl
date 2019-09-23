<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Visa_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Visa Identifier data.
 * @subpackage Structs
 */
class Visa_IDType extends AbstractStructBase
{
    /**
     * The Visa_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the Visa Identifier.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Visa_ID_Reference;
    /**
     * The Visa_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Visa Identifier Data
     * - minOccurs: 0
     * @var \StructType\Visa_ID_DataType
     */
    public $Visa_ID_Data;
    /**
     * The Visa_ID_Shared_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shared Reference ID for Visa Identifiers.
     * - minOccurs: 0
     * @var \StructType\Visa_Identifier_ReferenceObjectType
     */
    public $Visa_ID_Shared_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Delete is set to True and Replace All has been set to False, the ID will be deleted when the web service is submitted.Note: The Replace All flag defaults to False if not specified in the web service
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Visa_IDType
     * @uses Visa_IDType::setVisa_ID_Reference()
     * @uses Visa_IDType::setVisa_ID_Data()
     * @uses Visa_IDType::setVisa_ID_Shared_Reference()
     * @uses Visa_IDType::setDelete()
     * @param \StructType\Unique_IdentifierObjectType $visa_ID_Reference
     * @param \StructType\Visa_ID_DataType $visa_ID_Data
     * @param \StructType\Visa_Identifier_ReferenceObjectType $visa_ID_Shared_Reference
     * @param bool $delete
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $visa_ID_Reference = null, \StructType\Visa_ID_DataType $visa_ID_Data = null, \StructType\Visa_Identifier_ReferenceObjectType $visa_ID_Shared_Reference = null, $delete = null)
    {
        $this
            ->setVisa_ID_Reference($visa_ID_Reference)
            ->setVisa_ID_Data($visa_ID_Data)
            ->setVisa_ID_Shared_Reference($visa_ID_Shared_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Visa_ID_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getVisa_ID_Reference()
    {
        return $this->Visa_ID_Reference;
    }
    /**
     * Set Visa_ID_Reference value
     * @param \StructType\Unique_IdentifierObjectType $visa_ID_Reference
     * @return \StructType\Visa_IDType
     */
    public function setVisa_ID_Reference(\StructType\Unique_IdentifierObjectType $visa_ID_Reference = null)
    {
        $this->Visa_ID_Reference = $visa_ID_Reference;
        return $this;
    }
    /**
     * Get Visa_ID_Data value
     * @return \StructType\Visa_ID_DataType|null
     */
    public function getVisa_ID_Data()
    {
        return $this->Visa_ID_Data;
    }
    /**
     * Set Visa_ID_Data value
     * @param \StructType\Visa_ID_DataType $visa_ID_Data
     * @return \StructType\Visa_IDType
     */
    public function setVisa_ID_Data(\StructType\Visa_ID_DataType $visa_ID_Data = null)
    {
        $this->Visa_ID_Data = $visa_ID_Data;
        return $this;
    }
    /**
     * Get Visa_ID_Shared_Reference value
     * @return \StructType\Visa_Identifier_ReferenceObjectType|null
     */
    public function getVisa_ID_Shared_Reference()
    {
        return $this->Visa_ID_Shared_Reference;
    }
    /**
     * Set Visa_ID_Shared_Reference value
     * @param \StructType\Visa_Identifier_ReferenceObjectType $visa_ID_Shared_Reference
     * @return \StructType\Visa_IDType
     */
    public function setVisa_ID_Shared_Reference(\StructType\Visa_Identifier_ReferenceObjectType $visa_ID_Shared_Reference = null)
    {
        $this->Visa_ID_Shared_Reference = $visa_ID_Shared_Reference;
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
     * @return \StructType\Visa_IDType
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
     * @return \StructType\Visa_IDType
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
