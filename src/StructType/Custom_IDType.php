<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Custom_IDType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Custom Identifier data.
 * @subpackage Structs
 */
class Custom_IDType extends AbstractStructBase
{
    /**
     * The Custom_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Custom Identifier.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Custom_ID_Reference;
    /**
     * The Custom_ID_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Custom Identifier data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Custom_ID_DataType
     */
    public $Custom_ID_Data;
    /**
     * The Custom_ID_Shared_Reference
     * Meta information extracted from the WSDL
     * - documentation: Shared Reference ID for Custom Identifiers.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Custom_Identifier_ReferenceObjectType
     */
    public $Custom_ID_Shared_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Delete is set to True and Replace All has been set to False, the ID will be deleted when the web service is submitted.Note: The Replace All flag defaults to False if not specified in the web service
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Custom_IDType
     * @uses Custom_IDType::setCustom_ID_Reference()
     * @uses Custom_IDType::setCustom_ID_Data()
     * @uses Custom_IDType::setCustom_ID_Shared_Reference()
     * @uses Custom_IDType::setDelete()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $custom_ID_Reference
     * @param \WorkdayWsdl\\StructType\Custom_ID_DataType $custom_ID_Data
     * @param \WorkdayWsdl\\StructType\Custom_Identifier_ReferenceObjectType $custom_ID_Shared_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $custom_ID_Reference = null, \WorkdayWsdl\\StructType\Custom_ID_DataType $custom_ID_Data = null, \WorkdayWsdl\\StructType\Custom_Identifier_ReferenceObjectType $custom_ID_Shared_Reference = null, $delete = null)
    {
        $this
            ->setCustom_ID_Reference($custom_ID_Reference)
            ->setCustom_ID_Data($custom_ID_Data)
            ->setCustom_ID_Shared_Reference($custom_ID_Shared_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Custom_ID_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getCustom_ID_Reference()
    {
        return $this->Custom_ID_Reference;
    }
    /**
     * Set Custom_ID_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $custom_ID_Reference
     * @return \WorkdayWsdl\\StructType\Custom_IDType
     */
    public function setCustom_ID_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $custom_ID_Reference = null)
    {
        $this->Custom_ID_Reference = $custom_ID_Reference;
        return $this;
    }
    /**
     * Get Custom_ID_Data value
     * @return \WorkdayWsdl\\StructType\Custom_ID_DataType|null
     */
    public function getCustom_ID_Data()
    {
        return $this->Custom_ID_Data;
    }
    /**
     * Set Custom_ID_Data value
     * @param \WorkdayWsdl\\StructType\Custom_ID_DataType $custom_ID_Data
     * @return \WorkdayWsdl\\StructType\Custom_IDType
     */
    public function setCustom_ID_Data(\WorkdayWsdl\\StructType\Custom_ID_DataType $custom_ID_Data = null)
    {
        $this->Custom_ID_Data = $custom_ID_Data;
        return $this;
    }
    /**
     * Get Custom_ID_Shared_Reference value
     * @return \WorkdayWsdl\\StructType\Custom_Identifier_ReferenceObjectType|null
     */
    public function getCustom_ID_Shared_Reference()
    {
        return $this->Custom_ID_Shared_Reference;
    }
    /**
     * Set Custom_ID_Shared_Reference value
     * @param \WorkdayWsdl\\StructType\Custom_Identifier_ReferenceObjectType $custom_ID_Shared_Reference
     * @return \WorkdayWsdl\\StructType\Custom_IDType
     */
    public function setCustom_ID_Shared_Reference(\WorkdayWsdl\\StructType\Custom_Identifier_ReferenceObjectType $custom_ID_Shared_Reference = null)
    {
        $this->Custom_ID_Shared_Reference = $custom_ID_Shared_Reference;
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
     * @return \WorkdayWsdl\\StructType\Custom_IDType
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
     * @return \WorkdayWsdl\\StructType\Custom_IDType
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
