<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Organization and its associated data.
 * @subpackage Structs
 */
class Organization_Response_DataType extends AbstractStructBase
{
    /**
     * The Organization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_WWSType[]
     */
    public $Organization;
    /**
     * Constructor method for Organization_Response_DataType
     * @uses Organization_Response_DataType::setOrganization()
     * @param \WorkdayWsdl\\StructType\Organization_WWSType[] $organization
     */
    public function __construct(array $organization = array())
    {
        $this
            ->setOrganization($organization);
    }
    /**
     * Get Organization value
     * @return \WorkdayWsdl\\StructType\Organization_WWSType[]|null
     */
    public function getOrganization()
    {
        return $this->Organization;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganizationForArrayConstraintsFromSetOrganization(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Response_DataTypeOrganizationItem) {
            // validation for constraint: itemType
            if (!$organization_Response_DataTypeOrganizationItem instanceof \WorkdayWsdl\\StructType\Organization_WWSType) {
                $invalidValues[] = is_object($organization_Response_DataTypeOrganizationItem) ? get_class($organization_Response_DataTypeOrganizationItem) : sprintf('%s(%s)', gettype($organization_Response_DataTypeOrganizationItem), var_export($organization_Response_DataTypeOrganizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization property can only contain items of type \WorkdayWsdl\\StructType\Organization_WWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_WWSType[] $organization
     * @return \WorkdayWsdl\\StructType\Organization_Response_DataType
     */
    public function setOrganization(array $organization = array())
    {
        // validation for constraint: array
        if ('' !== ($organizationArrayErrorMessage = self::validateOrganizationForArrayConstraintsFromSetOrganization($organization))) {
            throw new \InvalidArgumentException($organizationArrayErrorMessage, __LINE__);
        }
        $this->Organization = $organization;
        return $this;
    }
    /**
     * Add item to Organization value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_WWSType $item
     * @return \WorkdayWsdl\\StructType\Organization_Response_DataType
     */
    public function addToOrganization(\WorkdayWsdl\\StructType\Organization_WWSType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_WWSType) {
            throw new \InvalidArgumentException(sprintf('The Organization property can only contain items of type \WorkdayWsdl\\StructType\Organization_WWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Response_DataType
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
