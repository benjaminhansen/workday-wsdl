<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Organization_Name_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Organization Name data
 * @subpackage Structs
 */
class Put_Organization_Name_RequestType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The Organization_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Organization Name Data
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Organization_Name_DataType[]
     */
    public $Organization_Name_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Organization_Name_RequestType
     * @uses Put_Organization_Name_RequestType::setOrganization_Reference()
     * @uses Put_Organization_Name_RequestType::setOrganization_Name_Data()
     * @uses Put_Organization_Name_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Name_DataType[] $organization_Name_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null, array $organization_Name_Data = array(), $version = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Name_Data($organization_Name_Data)
            ->setVersion($version);
    }
    /**
     * Get Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @return \WorkdayWsdl\\StructType\Put_Organization_Name_RequestType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Name_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Name_DataType[]|null
     */
    public function getOrganization_Name_Data()
    {
        return $this->Organization_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Name_DataForArrayConstraintsFromSetOrganization_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $put_Organization_Name_RequestTypeOrganization_Name_DataItem) {
            // validation for constraint: itemType
            if (!$put_Organization_Name_RequestTypeOrganization_Name_DataItem instanceof \WorkdayWsdl\\StructType\Organization_Name_DataType) {
                $invalidValues[] = is_object($put_Organization_Name_RequestTypeOrganization_Name_DataItem) ? get_class($put_Organization_Name_RequestTypeOrganization_Name_DataItem) : sprintf('%s(%s)', gettype($put_Organization_Name_RequestTypeOrganization_Name_DataItem), var_export($put_Organization_Name_RequestTypeOrganization_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Organization_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Name_DataType[] $organization_Name_Data
     * @return \WorkdayWsdl\\StructType\Put_Organization_Name_RequestType
     */
    public function setOrganization_Name_Data(array $organization_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Name_DataArrayErrorMessage = self::validateOrganization_Name_DataForArrayConstraintsFromSetOrganization_Name_Data($organization_Name_Data))) {
            throw new \InvalidArgumentException($organization_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Name_Data = $organization_Name_Data;
        return $this;
    }
    /**
     * Add item to Organization_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Name_DataType $item
     * @return \WorkdayWsdl\\StructType\Put_Organization_Name_RequestType
     */
    public function addToOrganization_Name_Data(\WorkdayWsdl\\StructType\Organization_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Organization_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Name_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Organization_Name_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Organization_Name_RequestType
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
