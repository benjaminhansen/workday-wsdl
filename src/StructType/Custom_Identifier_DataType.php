<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Custom_Identifier_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Custom Identifier data.
 * @subpackage Structs
 */
class Custom_Identifier_DataType extends AbstractStructBase
{
    /**
     * The Custom_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Custom ID.
     * - maxOccurs: 1
     * @var string
     */
    public $Custom_ID;
    /**
     * The Custom_ID_Type_Reference
     * @var \StructType\Custom_ID_Type_ReferenceType
     */
    public $Custom_ID_Type_Reference;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Custom ID was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Custom ID expires.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Organization_ReferenceType
     */
    public $Organization_Reference;
    /**
     * The Custom_Description
     * Meta information extracted from the WSDL
     * - documentation: Custom Description of the Custom ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom_Description;
    /**
     * Constructor method for Custom_Identifier_DataType
     * @uses Custom_Identifier_DataType::setCustom_ID()
     * @uses Custom_Identifier_DataType::setCustom_ID_Type_Reference()
     * @uses Custom_Identifier_DataType::setIssued_Date()
     * @uses Custom_Identifier_DataType::setExpiration_Date()
     * @uses Custom_Identifier_DataType::setOrganization_Reference()
     * @uses Custom_Identifier_DataType::setCustom_Description()
     * @param string $custom_ID
     * @param \StructType\Custom_ID_Type_ReferenceType $custom_ID_Type_Reference
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param \StructType\Organization_ReferenceType $organization_Reference
     * @param string $custom_Description
     */
    public function __construct($custom_ID = null, \StructType\Custom_ID_Type_ReferenceType $custom_ID_Type_Reference = null, $issued_Date = null, $expiration_Date = null, \StructType\Organization_ReferenceType $organization_Reference = null, $custom_Description = null)
    {
        $this
            ->setCustom_ID($custom_ID)
            ->setCustom_ID_Type_Reference($custom_ID_Type_Reference)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setOrganization_Reference($organization_Reference)
            ->setCustom_Description($custom_Description);
    }
    /**
     * Get Custom_ID value
     * @return string|null
     */
    public function getCustom_ID()
    {
        return $this->Custom_ID;
    }
    /**
     * Set Custom_ID value
     * @param string $custom_ID
     * @return \StructType\Custom_Identifier_DataType
     */
    public function setCustom_ID($custom_ID = null)
    {
        // validation for constraint: string
        if (!is_null($custom_ID) && !is_string($custom_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom_ID, true), gettype($custom_ID)), __LINE__);
        }
        $this->Custom_ID = $custom_ID;
        return $this;
    }
    /**
     * Get Custom_ID_Type_Reference value
     * @return \StructType\Custom_ID_Type_ReferenceType|null
     */
    public function getCustom_ID_Type_Reference()
    {
        return $this->Custom_ID_Type_Reference;
    }
    /**
     * Set Custom_ID_Type_Reference value
     * @param \StructType\Custom_ID_Type_ReferenceType $custom_ID_Type_Reference
     * @return \StructType\Custom_Identifier_DataType
     */
    public function setCustom_ID_Type_Reference(\StructType\Custom_ID_Type_ReferenceType $custom_ID_Type_Reference = null)
    {
        $this->Custom_ID_Type_Reference = $custom_ID_Type_Reference;
        return $this;
    }
    /**
     * Get Issued_Date value
     * @return string|null
     */
    public function getIssued_Date()
    {
        return $this->Issued_Date;
    }
    /**
     * Set Issued_Date value
     * @param string $issued_Date
     * @return \StructType\Custom_Identifier_DataType
     */
    public function setIssued_Date($issued_Date = null)
    {
        // validation for constraint: string
        if (!is_null($issued_Date) && !is_string($issued_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issued_Date, true), gettype($issued_Date)), __LINE__);
        }
        $this->Issued_Date = $issued_Date;
        return $this;
    }
    /**
     * Get Expiration_Date value
     * @return string|null
     */
    public function getExpiration_Date()
    {
        return $this->Expiration_Date;
    }
    /**
     * Set Expiration_Date value
     * @param string $expiration_Date
     * @return \StructType\Custom_Identifier_DataType
     */
    public function setExpiration_Date($expiration_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_Date) && !is_string($expiration_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration_Date, true), gettype($expiration_Date)), __LINE__);
        }
        $this->Expiration_Date = $expiration_Date;
        return $this;
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\Organization_ReferenceType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \StructType\Organization_ReferenceType $organization_Reference
     * @return \StructType\Custom_Identifier_DataType
     */
    public function setOrganization_Reference(\StructType\Organization_ReferenceType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Custom_Description value
     * @return string|null
     */
    public function getCustom_Description()
    {
        return $this->Custom_Description;
    }
    /**
     * Set Custom_Description value
     * @param string $custom_Description
     * @return \StructType\Custom_Identifier_DataType
     */
    public function setCustom_Description($custom_Description = null)
    {
        // validation for constraint: string
        if (!is_null($custom_Description) && !is_string($custom_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom_Description, true), gettype($custom_Description)), __LINE__);
        }
        $this->Custom_Description = $custom_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Custom_Identifier_DataType
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
