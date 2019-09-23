<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Reference_ID_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Reference ID Response Data
 * @subpackage Structs
 */
class Organization_Reference_ID_Response_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Holds Organization Reference ID information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Reference_IDType[]
     */
    public $Organization_Reference_ID;
    /**
     * Constructor method for Organization_Reference_ID_Response_DataType
     * @uses Organization_Reference_ID_Response_DataType::setOrganization_Reference_ID()
     * @param \WorkdayWsdl\\StructType\Organization_Reference_IDType[] $organization_Reference_ID
     */
    public function __construct(array $organization_Reference_ID = array())
    {
        $this
            ->setOrganization_Reference_ID($organization_Reference_ID);
    }
    /**
     * Get Organization_Reference_ID value
     * @return \WorkdayWsdl\\StructType\Organization_Reference_IDType[]|null
     */
    public function getOrganization_Reference_ID()
    {
        return $this->Organization_Reference_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Reference_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Reference_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Reference_IDForArrayConstraintsFromSetOrganization_Reference_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Reference_ID_Response_DataTypeOrganization_Reference_IDItem) {
            // validation for constraint: itemType
            if (!$organization_Reference_ID_Response_DataTypeOrganization_Reference_IDItem instanceof \WorkdayWsdl\\StructType\Organization_Reference_IDType) {
                $invalidValues[] = is_object($organization_Reference_ID_Response_DataTypeOrganization_Reference_IDItem) ? get_class($organization_Reference_ID_Response_DataTypeOrganization_Reference_IDItem) : sprintf('%s(%s)', gettype($organization_Reference_ID_Response_DataTypeOrganization_Reference_IDItem), var_export($organization_Reference_ID_Response_DataTypeOrganization_Reference_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference_ID property can only contain items of type \WorkdayWsdl\\StructType\Organization_Reference_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference_ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Reference_IDType[] $organization_Reference_ID
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Response_DataType
     */
    public function setOrganization_Reference_ID(array $organization_Reference_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Reference_IDArrayErrorMessage = self::validateOrganization_Reference_IDForArrayConstraintsFromSetOrganization_Reference_ID($organization_Reference_ID))) {
            throw new \InvalidArgumentException($organization_Reference_IDArrayErrorMessage, __LINE__);
        }
        $this->Organization_Reference_ID = $organization_Reference_ID;
        return $this;
    }
    /**
     * Add item to Organization_Reference_ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Reference_IDType $item
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Response_DataType
     */
    public function addToOrganization_Reference_ID(\WorkdayWsdl\\StructType\Organization_Reference_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_Reference_IDType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference_ID property can only contain items of type \WorkdayWsdl\\StructType\Organization_Reference_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference_ID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Response_DataType
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
