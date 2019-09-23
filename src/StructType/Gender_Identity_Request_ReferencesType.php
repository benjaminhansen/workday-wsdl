<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gender_Identity_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference to the gender identity of the person.
 * @subpackage Structs
 */
class Gender_Identity_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Gender_Identity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the gender identity of the person.
     * - maxOccurs: unbounded
     * @var \StructType\Gender_IdentityObjectType[]
     */
    public $Gender_Identity_Reference;
    /**
     * Constructor method for Gender_Identity_Request_ReferencesType
     * @uses Gender_Identity_Request_ReferencesType::setGender_Identity_Reference()
     * @param \StructType\Gender_IdentityObjectType[] $gender_Identity_Reference
     */
    public function __construct(array $gender_Identity_Reference = array())
    {
        $this
            ->setGender_Identity_Reference($gender_Identity_Reference);
    }
    /**
     * Get Gender_Identity_Reference value
     * @return \StructType\Gender_IdentityObjectType[]|null
     */
    public function getGender_Identity_Reference()
    {
        return $this->Gender_Identity_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setGender_Identity_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGender_Identity_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGender_Identity_ReferenceForArrayConstraintsFromSetGender_Identity_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $gender_Identity_Request_ReferencesTypeGender_Identity_ReferenceItem) {
            // validation for constraint: itemType
            if (!$gender_Identity_Request_ReferencesTypeGender_Identity_ReferenceItem instanceof \StructType\Gender_IdentityObjectType) {
                $invalidValues[] = is_object($gender_Identity_Request_ReferencesTypeGender_Identity_ReferenceItem) ? get_class($gender_Identity_Request_ReferencesTypeGender_Identity_ReferenceItem) : sprintf('%s(%s)', gettype($gender_Identity_Request_ReferencesTypeGender_Identity_ReferenceItem), var_export($gender_Identity_Request_ReferencesTypeGender_Identity_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Gender_Identity_Reference property can only contain items of type \StructType\Gender_IdentityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Gender_Identity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Gender_IdentityObjectType[] $gender_Identity_Reference
     * @return \StructType\Gender_Identity_Request_ReferencesType
     */
    public function setGender_Identity_Reference(array $gender_Identity_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($gender_Identity_ReferenceArrayErrorMessage = self::validateGender_Identity_ReferenceForArrayConstraintsFromSetGender_Identity_Reference($gender_Identity_Reference))) {
            throw new \InvalidArgumentException($gender_Identity_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Gender_Identity_Reference = $gender_Identity_Reference;
        return $this;
    }
    /**
     * Add item to Gender_Identity_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Gender_IdentityObjectType $item
     * @return \StructType\Gender_Identity_Request_ReferencesType
     */
    public function addToGender_Identity_Reference(\StructType\Gender_IdentityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Gender_IdentityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Gender_Identity_Reference property can only contain items of type \StructType\Gender_IdentityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Gender_Identity_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Gender_Identity_Request_ReferencesType
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
