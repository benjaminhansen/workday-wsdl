<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for License_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all License Identifier data.
 * @subpackage Structs
 */
class License_IDType extends AbstractStructBase
{
    /**
     * The License_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the License Identifier.
     * - minOccurs: 0
     * @var \StructType\License_IdentifierObjectType
     */
    public $License_ID_Reference;
    /**
     * The License_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the License Identifier data.
     * - minOccurs: 0
     * @var \StructType\License_ID_DataType
     */
    public $License_ID_Data;
    /**
     * The License_ID_Shared_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shared Reference ID for License Identifiers.
     * - minOccurs: 0
     * @var \StructType\License_Identifier_ReferenceObjectType
     */
    public $License_ID_Shared_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Delete is set to True and Replace All has been set to False, the ID will be deleted when the web service is submitted.Note: The Replace All flag defaults to False if not specified in the web service
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for License_IDType
     * @uses License_IDType::setLicense_ID_Reference()
     * @uses License_IDType::setLicense_ID_Data()
     * @uses License_IDType::setLicense_ID_Shared_Reference()
     * @uses License_IDType::setDelete()
     * @param \StructType\License_IdentifierObjectType $license_ID_Reference
     * @param \StructType\License_ID_DataType $license_ID_Data
     * @param \StructType\License_Identifier_ReferenceObjectType $license_ID_Shared_Reference
     * @param bool $delete
     */
    public function __construct(\StructType\License_IdentifierObjectType $license_ID_Reference = null, \StructType\License_ID_DataType $license_ID_Data = null, \StructType\License_Identifier_ReferenceObjectType $license_ID_Shared_Reference = null, $delete = null)
    {
        $this
            ->setLicense_ID_Reference($license_ID_Reference)
            ->setLicense_ID_Data($license_ID_Data)
            ->setLicense_ID_Shared_Reference($license_ID_Shared_Reference)
            ->setDelete($delete);
    }
    /**
     * Get License_ID_Reference value
     * @return \StructType\License_IdentifierObjectType|null
     */
    public function getLicense_ID_Reference()
    {
        return $this->License_ID_Reference;
    }
    /**
     * Set License_ID_Reference value
     * @param \StructType\License_IdentifierObjectType $license_ID_Reference
     * @return \StructType\License_IDType
     */
    public function setLicense_ID_Reference(\StructType\License_IdentifierObjectType $license_ID_Reference = null)
    {
        $this->License_ID_Reference = $license_ID_Reference;
        return $this;
    }
    /**
     * Get License_ID_Data value
     * @return \StructType\License_ID_DataType|null
     */
    public function getLicense_ID_Data()
    {
        return $this->License_ID_Data;
    }
    /**
     * Set License_ID_Data value
     * @param \StructType\License_ID_DataType $license_ID_Data
     * @return \StructType\License_IDType
     */
    public function setLicense_ID_Data(\StructType\License_ID_DataType $license_ID_Data = null)
    {
        $this->License_ID_Data = $license_ID_Data;
        return $this;
    }
    /**
     * Get License_ID_Shared_Reference value
     * @return \StructType\License_Identifier_ReferenceObjectType|null
     */
    public function getLicense_ID_Shared_Reference()
    {
        return $this->License_ID_Shared_Reference;
    }
    /**
     * Set License_ID_Shared_Reference value
     * @param \StructType\License_Identifier_ReferenceObjectType $license_ID_Shared_Reference
     * @return \StructType\License_IDType
     */
    public function setLicense_ID_Shared_Reference(\StructType\License_Identifier_ReferenceObjectType $license_ID_Shared_Reference = null)
    {
        $this->License_ID_Shared_Reference = $license_ID_Shared_Reference;
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
     * @return \StructType\License_IDType
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
     * @return \StructType\License_IDType
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
