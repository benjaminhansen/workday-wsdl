<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Assignment_Restrictions_Response_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Data
 * @subpackage Structs
 */
class Organization_Assignment_Restrictions_Response_DataType extends AbstractStructBase
{
    /**
     * The Organization_Assignment_Restrictions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Assignment_RestrictionsType[]
     */
    public $Organization_Assignment_Restrictions;
    /**
     * Constructor method for Organization_Assignment_Restrictions_Response_DataType
     * @uses Organization_Assignment_Restrictions_Response_DataType::setOrganization_Assignment_Restrictions()
     * @param \StructType\Organization_Assignment_RestrictionsType[] $organization_Assignment_Restrictions
     */
    public function __construct(array $organization_Assignment_Restrictions = array())
    {
        $this
            ->setOrganization_Assignment_Restrictions($organization_Assignment_Restrictions);
    }
    /**
     * Get Organization_Assignment_Restrictions value
     * @return \StructType\Organization_Assignment_RestrictionsType[]|null
     */
    public function getOrganization_Assignment_Restrictions()
    {
        return $this->Organization_Assignment_Restrictions;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Assignment_Restrictions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Assignment_Restrictions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Assignment_RestrictionsForArrayConstraintsFromSetOrganization_Assignment_Restrictions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Assignment_Restrictions_Response_DataTypeOrganization_Assignment_RestrictionsItem) {
            // validation for constraint: itemType
            if (!$organization_Assignment_Restrictions_Response_DataTypeOrganization_Assignment_RestrictionsItem instanceof \StructType\Organization_Assignment_RestrictionsType) {
                $invalidValues[] = is_object($organization_Assignment_Restrictions_Response_DataTypeOrganization_Assignment_RestrictionsItem) ? get_class($organization_Assignment_Restrictions_Response_DataTypeOrganization_Assignment_RestrictionsItem) : sprintf('%s(%s)', gettype($organization_Assignment_Restrictions_Response_DataTypeOrganization_Assignment_RestrictionsItem), var_export($organization_Assignment_Restrictions_Response_DataTypeOrganization_Assignment_RestrictionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Assignment_Restrictions property can only contain items of type \StructType\Organization_Assignment_RestrictionsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Assignment_Restrictions value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Assignment_RestrictionsType[] $organization_Assignment_Restrictions
     * @return \StructType\Organization_Assignment_Restrictions_Response_DataType
     */
    public function setOrganization_Assignment_Restrictions(array $organization_Assignment_Restrictions = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Assignment_RestrictionsArrayErrorMessage = self::validateOrganization_Assignment_RestrictionsForArrayConstraintsFromSetOrganization_Assignment_Restrictions($organization_Assignment_Restrictions))) {
            throw new \InvalidArgumentException($organization_Assignment_RestrictionsArrayErrorMessage, __LINE__);
        }
        $this->Organization_Assignment_Restrictions = $organization_Assignment_Restrictions;
        return $this;
    }
    /**
     * Add item to Organization_Assignment_Restrictions value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Assignment_RestrictionsType $item
     * @return \StructType\Organization_Assignment_Restrictions_Response_DataType
     */
    public function addToOrganization_Assignment_Restrictions(\StructType\Organization_Assignment_RestrictionsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Assignment_RestrictionsType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Assignment_Restrictions property can only contain items of type \StructType\Organization_Assignment_RestrictionsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Assignment_Restrictions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Assignment_Restrictions_Response_DataType
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
