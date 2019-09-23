<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Name_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Organization Name information
 * @subpackage Structs
 */
class Organization_Name_Response_DataType extends AbstractStructBase
{
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: Organization Name
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_NameType[]
     */
    public $Organization_Name;
    /**
     * Constructor method for Organization_Name_Response_DataType
     * @uses Organization_Name_Response_DataType::setOrganization_Name()
     * @param \StructType\Organization_NameType[] $organization_Name
     */
    public function __construct(array $organization_Name = array())
    {
        $this
            ->setOrganization_Name($organization_Name);
    }
    /**
     * Get Organization_Name value
     * @return \StructType\Organization_NameType[]|null
     */
    public function getOrganization_Name()
    {
        return $this->Organization_Name;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Name method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_NameForArrayConstraintsFromSetOrganization_Name(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Name_Response_DataTypeOrganization_NameItem) {
            // validation for constraint: itemType
            if (!$organization_Name_Response_DataTypeOrganization_NameItem instanceof \StructType\Organization_NameType) {
                $invalidValues[] = is_object($organization_Name_Response_DataTypeOrganization_NameItem) ? get_class($organization_Name_Response_DataTypeOrganization_NameItem) : sprintf('%s(%s)', gettype($organization_Name_Response_DataTypeOrganization_NameItem), var_export($organization_Name_Response_DataTypeOrganization_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Name property can only contain items of type \StructType\Organization_NameType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Name value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_NameType[] $organization_Name
     * @return \StructType\Organization_Name_Response_DataType
     */
    public function setOrganization_Name(array $organization_Name = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_NameArrayErrorMessage = self::validateOrganization_NameForArrayConstraintsFromSetOrganization_Name($organization_Name))) {
            throw new \InvalidArgumentException($organization_NameArrayErrorMessage, __LINE__);
        }
        $this->Organization_Name = $organization_Name;
        return $this;
    }
    /**
     * Add item to Organization_Name value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_NameType $item
     * @return \StructType\Organization_Name_Response_DataType
     */
    public function addToOrganization_Name(\StructType\Organization_NameType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_NameType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Name property can only contain items of type \StructType\Organization_NameType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Name[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Name_Response_DataType
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
