<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Social_Benefits_Locality_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Social Benefits Locality and its associated data.
 * @subpackage Structs
 */
class Social_Benefits_Locality_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Social Benefits Locality
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType[]
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * Constructor method for Social_Benefits_Locality_Request_ReferencesType
     * @uses Social_Benefits_Locality_Request_ReferencesType::setSocial_Benefits_Locality_Reference()
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType[] $social_Benefits_Locality_Reference
     */
    public function __construct(array $social_Benefits_Locality_Reference = array())
    {
        $this
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference);
    }
    /**
     * Get Social_Benefits_Locality_Reference value
     * @return \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType[]|null
     */
    public function getSocial_Benefits_Locality_Reference()
    {
        return $this->Social_Benefits_Locality_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSocial_Benefits_Locality_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSocial_Benefits_Locality_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSocial_Benefits_Locality_ReferenceForArrayConstraintsFromSetSocial_Benefits_Locality_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $social_Benefits_Locality_Request_ReferencesTypeSocial_Benefits_Locality_ReferenceItem) {
            // validation for constraint: itemType
            if (!$social_Benefits_Locality_Request_ReferencesTypeSocial_Benefits_Locality_ReferenceItem instanceof \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType) {
                $invalidValues[] = is_object($social_Benefits_Locality_Request_ReferencesTypeSocial_Benefits_Locality_ReferenceItem) ? get_class($social_Benefits_Locality_Request_ReferencesTypeSocial_Benefits_Locality_ReferenceItem) : sprintf('%s(%s)', gettype($social_Benefits_Locality_Request_ReferencesTypeSocial_Benefits_Locality_ReferenceItem), var_export($social_Benefits_Locality_Request_ReferencesTypeSocial_Benefits_Locality_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Social_Benefits_Locality_Reference property can only contain items of type \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Social_Benefits_Locality_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType[] $social_Benefits_Locality_Reference
     * @return \WorkdayWsdl\\StructType\Social_Benefits_Locality_Request_ReferencesType
     */
    public function setSocial_Benefits_Locality_Reference(array $social_Benefits_Locality_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($social_Benefits_Locality_ReferenceArrayErrorMessage = self::validateSocial_Benefits_Locality_ReferenceForArrayConstraintsFromSetSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference))) {
            throw new \InvalidArgumentException($social_Benefits_Locality_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
        return $this;
    }
    /**
     * Add item to Social_Benefits_Locality_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $item
     * @return \WorkdayWsdl\\StructType\Social_Benefits_Locality_Request_ReferencesType
     */
    public function addToSocial_Benefits_Locality_Reference(\WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType) {
            throw new \InvalidArgumentException(sprintf('The Social_Benefits_Locality_Reference property can only contain items of type \WorkdayWsdl\\StructType\Social_Benefits_LocalityObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Social_Benefits_Locality_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Social_Benefits_Locality_Request_ReferencesType
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
