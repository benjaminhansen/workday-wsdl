<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Social_Benefits_Locality_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Social Benefits Locality data.
 * @subpackage Structs
 */
class Social_Benefits_Locality_Response_DataType extends AbstractStructBase
{
    /**
     * The Social_Benefits_Locality
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Social Benefits Locality
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Social_Benefits_LocalityType[]
     */
    public $Social_Benefits_Locality;
    /**
     * Constructor method for Social_Benefits_Locality_Response_DataType
     * @uses Social_Benefits_Locality_Response_DataType::setSocial_Benefits_Locality()
     * @param \StructType\Social_Benefits_LocalityType[] $social_Benefits_Locality
     */
    public function __construct(array $social_Benefits_Locality = array())
    {
        $this
            ->setSocial_Benefits_Locality($social_Benefits_Locality);
    }
    /**
     * Get Social_Benefits_Locality value
     * @return \StructType\Social_Benefits_LocalityType[]|null
     */
    public function getSocial_Benefits_Locality()
    {
        return $this->Social_Benefits_Locality;
    }
    /**
     * This method is responsible for validating the values passed to the setSocial_Benefits_Locality method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSocial_Benefits_Locality method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSocial_Benefits_LocalityForArrayConstraintsFromSetSocial_Benefits_Locality(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $social_Benefits_Locality_Response_DataTypeSocial_Benefits_LocalityItem) {
            // validation for constraint: itemType
            if (!$social_Benefits_Locality_Response_DataTypeSocial_Benefits_LocalityItem instanceof \StructType\Social_Benefits_LocalityType) {
                $invalidValues[] = is_object($social_Benefits_Locality_Response_DataTypeSocial_Benefits_LocalityItem) ? get_class($social_Benefits_Locality_Response_DataTypeSocial_Benefits_LocalityItem) : sprintf('%s(%s)', gettype($social_Benefits_Locality_Response_DataTypeSocial_Benefits_LocalityItem), var_export($social_Benefits_Locality_Response_DataTypeSocial_Benefits_LocalityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Social_Benefits_Locality property can only contain items of type \StructType\Social_Benefits_LocalityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Social_Benefits_Locality value
     * @throws \InvalidArgumentException
     * @param \StructType\Social_Benefits_LocalityType[] $social_Benefits_Locality
     * @return \StructType\Social_Benefits_Locality_Response_DataType
     */
    public function setSocial_Benefits_Locality(array $social_Benefits_Locality = array())
    {
        // validation for constraint: array
        if ('' !== ($social_Benefits_LocalityArrayErrorMessage = self::validateSocial_Benefits_LocalityForArrayConstraintsFromSetSocial_Benefits_Locality($social_Benefits_Locality))) {
            throw new \InvalidArgumentException($social_Benefits_LocalityArrayErrorMessage, __LINE__);
        }
        $this->Social_Benefits_Locality = $social_Benefits_Locality;
        return $this;
    }
    /**
     * Add item to Social_Benefits_Locality value
     * @throws \InvalidArgumentException
     * @param \StructType\Social_Benefits_LocalityType $item
     * @return \StructType\Social_Benefits_Locality_Response_DataType
     */
    public function addToSocial_Benefits_Locality(\StructType\Social_Benefits_LocalityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Social_Benefits_LocalityType) {
            throw new \InvalidArgumentException(sprintf('The Social_Benefits_Locality property can only contain items of type \StructType\Social_Benefits_LocalityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Social_Benefits_Locality[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Social_Benefits_Locality_Response_DataType
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
