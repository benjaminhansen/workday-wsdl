<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Custom_ID_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Custom Identifier Data.
 * @subpackage Structs
 */
class Custom_ID_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Custom Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The ID_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Custom Identifier Type.
     * - minOccurs: 0
     * @var \StructType\Custom_ID_TypeObjectType
     */
    public $ID_Type_Reference;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Custom Identifier was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Expiration Date of the Custom Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Organization_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization issuing the Custom Identifier.
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType
     */
    public $Organization_ID_Reference;
    /**
     * The Custom_Description
     * Meta information extracted from the WSDL
     * - documentation: Description of the Custom Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom_Description;
    /**
     * Constructor method for Custom_ID_DataType
     * @uses Custom_ID_DataType::setID()
     * @uses Custom_ID_DataType::setID_Type_Reference()
     * @uses Custom_ID_DataType::setIssued_Date()
     * @uses Custom_ID_DataType::setExpiration_Date()
     * @uses Custom_ID_DataType::setOrganization_ID_Reference()
     * @uses Custom_ID_DataType::setCustom_Description()
     * @param string $iD
     * @param \StructType\Custom_ID_TypeObjectType $iD_Type_Reference
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param \StructType\OrganizationObjectType $organization_ID_Reference
     * @param string $custom_Description
     */
    public function __construct($iD = null, \StructType\Custom_ID_TypeObjectType $iD_Type_Reference = null, $issued_Date = null, $expiration_Date = null, \StructType\OrganizationObjectType $organization_ID_Reference = null, $custom_Description = null)
    {
        $this
            ->setID($iD)
            ->setID_Type_Reference($iD_Type_Reference)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setOrganization_ID_Reference($organization_ID_Reference)
            ->setCustom_Description($custom_Description);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Custom_ID_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get ID_Type_Reference value
     * @return \StructType\Custom_ID_TypeObjectType|null
     */
    public function getID_Type_Reference()
    {
        return $this->ID_Type_Reference;
    }
    /**
     * Set ID_Type_Reference value
     * @param \StructType\Custom_ID_TypeObjectType $iD_Type_Reference
     * @return \StructType\Custom_ID_DataType
     */
    public function setID_Type_Reference(\StructType\Custom_ID_TypeObjectType $iD_Type_Reference = null)
    {
        $this->ID_Type_Reference = $iD_Type_Reference;
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
     * @return \StructType\Custom_ID_DataType
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
     * @return \StructType\Custom_ID_DataType
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
     * Get Organization_ID_Reference value
     * @return \StructType\OrganizationObjectType|null
     */
    public function getOrganization_ID_Reference()
    {
        return $this->Organization_ID_Reference;
    }
    /**
     * Set Organization_ID_Reference value
     * @param \StructType\OrganizationObjectType $organization_ID_Reference
     * @return \StructType\Custom_ID_DataType
     */
    public function setOrganization_ID_Reference(\StructType\OrganizationObjectType $organization_ID_Reference = null)
    {
        $this->Organization_ID_Reference = $organization_ID_Reference;
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
     * @return \StructType\Custom_ID_DataType
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
     * @return \StructType\Custom_ID_DataType
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
