<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gender_Identity_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The gender identity response data.
 * @subpackage Structs
 */
class Gender_Identity_Response_DataType extends AbstractStructBase
{
    /**
     * The Gender_Identity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Gender_IdentityType[]
     */
    public $Gender_Identity;
    /**
     * Constructor method for Gender_Identity_Response_DataType
     * @uses Gender_Identity_Response_DataType::setGender_Identity()
     * @param \WorkdayWsdl\\StructType\Gender_IdentityType[] $gender_Identity
     */
    public function __construct(array $gender_Identity = array())
    {
        $this
            ->setGender_Identity($gender_Identity);
    }
    /**
     * Get Gender_Identity value
     * @return \WorkdayWsdl\\StructType\Gender_IdentityType[]|null
     */
    public function getGender_Identity()
    {
        return $this->Gender_Identity;
    }
    /**
     * This method is responsible for validating the values passed to the setGender_Identity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGender_Identity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGender_IdentityForArrayConstraintsFromSetGender_Identity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $gender_Identity_Response_DataTypeGender_IdentityItem) {
            // validation for constraint: itemType
            if (!$gender_Identity_Response_DataTypeGender_IdentityItem instanceof \WorkdayWsdl\\StructType\Gender_IdentityType) {
                $invalidValues[] = is_object($gender_Identity_Response_DataTypeGender_IdentityItem) ? get_class($gender_Identity_Response_DataTypeGender_IdentityItem) : sprintf('%s(%s)', gettype($gender_Identity_Response_DataTypeGender_IdentityItem), var_export($gender_Identity_Response_DataTypeGender_IdentityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Gender_Identity property can only contain items of type \WorkdayWsdl\\StructType\Gender_IdentityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Gender_Identity value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Gender_IdentityType[] $gender_Identity
     * @return \WorkdayWsdl\\StructType\Gender_Identity_Response_DataType
     */
    public function setGender_Identity(array $gender_Identity = array())
    {
        // validation for constraint: array
        if ('' !== ($gender_IdentityArrayErrorMessage = self::validateGender_IdentityForArrayConstraintsFromSetGender_Identity($gender_Identity))) {
            throw new \InvalidArgumentException($gender_IdentityArrayErrorMessage, __LINE__);
        }
        $this->Gender_Identity = $gender_Identity;
        return $this;
    }
    /**
     * Add item to Gender_Identity value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Gender_IdentityType $item
     * @return \WorkdayWsdl\\StructType\Gender_Identity_Response_DataType
     */
    public function addToGender_Identity(\WorkdayWsdl\\StructType\Gender_IdentityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Gender_IdentityType) {
            throw new \InvalidArgumentException(sprintf('The Gender_Identity property can only contain items of type \WorkdayWsdl\\StructType\Gender_IdentityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Gender_Identity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Gender_Identity_Response_DataType
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
