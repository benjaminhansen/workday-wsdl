<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Assignment_Restrictions_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Default Company must be one of the 'Restricted To Companies' for default Cost Center. | Organization Types in request can not duplicate. | An Organization Type only allows 1 Default Organization Assignment. | Organization Assignment
 * Restrictions Data
 * @subpackage Structs
 */
class Organization_Assignment_Restrictions_DataType extends AbstractStructBase
{
    /**
     * The Supervisory_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Supervisory Organization Reference holds the Superviosry Organization for which the allowed/default organization(s) will be changed.
     * @var \StructType\Supervisory_OrganizationObjectType
     */
    public $Supervisory_Organization_Reference;
    /**
     * The Organization_Assignment_Restrictions_by_Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Organization Assignment Restrictions Data for an Organization Type
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Assignment_Restrictions_by_Type_DataType[]
     */
    public $Organization_Assignment_Restrictions_by_Type_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: Default to FALSE, if omitted.If set to TRUE, all existing Allowed/Default Organization(s) will be removed before any further processes.If inheritance of default and allowed values from the superior is being severed, setting this to
     * 'TRUE' will not persist inherited values for any org type.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Organization_Assignment_Restrictions_DataType
     * @uses Organization_Assignment_Restrictions_DataType::setSupervisory_Organization_Reference()
     * @uses Organization_Assignment_Restrictions_DataType::setOrganization_Assignment_Restrictions_by_Type_Data()
     * @uses Organization_Assignment_Restrictions_DataType::setReplace_All()
     * @param \StructType\Supervisory_OrganizationObjectType $supervisory_Organization_Reference
     * @param \StructType\Organization_Assignment_Restrictions_by_Type_DataType[] $organization_Assignment_Restrictions_by_Type_Data
     * @param bool $replace_All
     */
    public function __construct(\StructType\Supervisory_OrganizationObjectType $supervisory_Organization_Reference = null, array $organization_Assignment_Restrictions_by_Type_Data = array(), $replace_All = null)
    {
        $this
            ->setSupervisory_Organization_Reference($supervisory_Organization_Reference)
            ->setOrganization_Assignment_Restrictions_by_Type_Data($organization_Assignment_Restrictions_by_Type_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Supervisory_Organization_Reference value
     * @return \StructType\Supervisory_OrganizationObjectType|null
     */
    public function getSupervisory_Organization_Reference()
    {
        return $this->Supervisory_Organization_Reference;
    }
    /**
     * Set Supervisory_Organization_Reference value
     * @param \StructType\Supervisory_OrganizationObjectType $supervisory_Organization_Reference
     * @return \StructType\Organization_Assignment_Restrictions_DataType
     */
    public function setSupervisory_Organization_Reference(\StructType\Supervisory_OrganizationObjectType $supervisory_Organization_Reference = null)
    {
        $this->Supervisory_Organization_Reference = $supervisory_Organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Assignment_Restrictions_by_Type_Data value
     * @return \StructType\Organization_Assignment_Restrictions_by_Type_DataType[]|null
     */
    public function getOrganization_Assignment_Restrictions_by_Type_Data()
    {
        return $this->Organization_Assignment_Restrictions_by_Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Assignment_Restrictions_by_Type_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Assignment_Restrictions_by_Type_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Assignment_Restrictions_by_Type_DataForArrayConstraintsFromSetOrganization_Assignment_Restrictions_by_Type_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Assignment_Restrictions_DataTypeOrganization_Assignment_Restrictions_by_Type_DataItem) {
            // validation for constraint: itemType
            if (!$organization_Assignment_Restrictions_DataTypeOrganization_Assignment_Restrictions_by_Type_DataItem instanceof \StructType\Organization_Assignment_Restrictions_by_Type_DataType) {
                $invalidValues[] = is_object($organization_Assignment_Restrictions_DataTypeOrganization_Assignment_Restrictions_by_Type_DataItem) ? get_class($organization_Assignment_Restrictions_DataTypeOrganization_Assignment_Restrictions_by_Type_DataItem) : sprintf('%s(%s)', gettype($organization_Assignment_Restrictions_DataTypeOrganization_Assignment_Restrictions_by_Type_DataItem), var_export($organization_Assignment_Restrictions_DataTypeOrganization_Assignment_Restrictions_by_Type_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Assignment_Restrictions_by_Type_Data property can only contain items of type \StructType\Organization_Assignment_Restrictions_by_Type_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Assignment_Restrictions_by_Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Assignment_Restrictions_by_Type_DataType[] $organization_Assignment_Restrictions_by_Type_Data
     * @return \StructType\Organization_Assignment_Restrictions_DataType
     */
    public function setOrganization_Assignment_Restrictions_by_Type_Data(array $organization_Assignment_Restrictions_by_Type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Assignment_Restrictions_by_Type_DataArrayErrorMessage = self::validateOrganization_Assignment_Restrictions_by_Type_DataForArrayConstraintsFromSetOrganization_Assignment_Restrictions_by_Type_Data($organization_Assignment_Restrictions_by_Type_Data))) {
            throw new \InvalidArgumentException($organization_Assignment_Restrictions_by_Type_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Assignment_Restrictions_by_Type_Data = $organization_Assignment_Restrictions_by_Type_Data;
        return $this;
    }
    /**
     * Add item to Organization_Assignment_Restrictions_by_Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Assignment_Restrictions_by_Type_DataType $item
     * @return \StructType\Organization_Assignment_Restrictions_DataType
     */
    public function addToOrganization_Assignment_Restrictions_by_Type_Data(\StructType\Organization_Assignment_Restrictions_by_Type_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Assignment_Restrictions_by_Type_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Assignment_Restrictions_by_Type_Data property can only contain items of type \StructType\Organization_Assignment_Restrictions_by_Type_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Assignment_Restrictions_by_Type_Data[] = $item;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \StructType\Organization_Assignment_Restrictions_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Assignment_Restrictions_DataType
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
