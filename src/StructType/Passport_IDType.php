<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passport_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Passport Identifier data.
 * @subpackage Structs
 */
class Passport_IDType extends AbstractStructBase
{
    /**
     * The Passport_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the Passport Identifier.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Passport_ID_Reference;
    /**
     * The Passport_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Passport Identifier Data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Passport_ID_DataType
     */
    public $Passport_ID_Data;
    /**
     * The Passport_ID_Shared_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shared Reference ID for Passport Identifiers.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Passport_Identifier_ReferenceObjectType
     */
    public $Passport_ID_Shared_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Delete is set to True and Replace All has been set to False, the ID will be deleted when the web service is submitted.Note: The Replace All flag defaults to False if not specified in the web service
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Passport_IDType
     * @uses Passport_IDType::setPassport_ID_Reference()
     * @uses Passport_IDType::setPassport_ID_Data()
     * @uses Passport_IDType::setPassport_ID_Shared_Reference()
     * @uses Passport_IDType::setDelete()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $passport_ID_Reference
     * @param \WorkdayWsdl\\StructType\Passport_ID_DataType $passport_ID_Data
     * @param \WorkdayWsdl\\StructType\Passport_Identifier_ReferenceObjectType $passport_ID_Shared_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $passport_ID_Reference = null, \WorkdayWsdl\\StructType\Passport_ID_DataType $passport_ID_Data = null, \WorkdayWsdl\\StructType\Passport_Identifier_ReferenceObjectType $passport_ID_Shared_Reference = null, $delete = null)
    {
        $this
            ->setPassport_ID_Reference($passport_ID_Reference)
            ->setPassport_ID_Data($passport_ID_Data)
            ->setPassport_ID_Shared_Reference($passport_ID_Shared_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Passport_ID_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getPassport_ID_Reference()
    {
        return $this->Passport_ID_Reference;
    }
    /**
     * Set Passport_ID_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $passport_ID_Reference
     * @return \WorkdayWsdl\\StructType\Passport_IDType
     */
    public function setPassport_ID_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $passport_ID_Reference = null)
    {
        $this->Passport_ID_Reference = $passport_ID_Reference;
        return $this;
    }
    /**
     * Get Passport_ID_Data value
     * @return \WorkdayWsdl\\StructType\Passport_ID_DataType|null
     */
    public function getPassport_ID_Data()
    {
        return $this->Passport_ID_Data;
    }
    /**
     * Set Passport_ID_Data value
     * @param \WorkdayWsdl\\StructType\Passport_ID_DataType $passport_ID_Data
     * @return \WorkdayWsdl\\StructType\Passport_IDType
     */
    public function setPassport_ID_Data(\WorkdayWsdl\\StructType\Passport_ID_DataType $passport_ID_Data = null)
    {
        $this->Passport_ID_Data = $passport_ID_Data;
        return $this;
    }
    /**
     * Get Passport_ID_Shared_Reference value
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_ReferenceObjectType|null
     */
    public function getPassport_ID_Shared_Reference()
    {
        return $this->Passport_ID_Shared_Reference;
    }
    /**
     * Set Passport_ID_Shared_Reference value
     * @param \WorkdayWsdl\\StructType\Passport_Identifier_ReferenceObjectType $passport_ID_Shared_Reference
     * @return \WorkdayWsdl\\StructType\Passport_IDType
     */
    public function setPassport_ID_Shared_Reference(\WorkdayWsdl\\StructType\Passport_Identifier_ReferenceObjectType $passport_ID_Shared_Reference = null)
    {
        $this->Passport_ID_Shared_Reference = $passport_ID_Shared_Reference;
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
     * @return \WorkdayWsdl\\StructType\Passport_IDType
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
     * @return \WorkdayWsdl\\StructType\Passport_IDType
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
