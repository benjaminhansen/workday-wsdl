<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preferred_Communication_Language_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: User Language Setting Data
 * @subpackage Structs
 */
class Preferred_Communication_Language_DataType extends AbstractStructBase
{
    /**
     * The User_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: User Language Reference
     * - maxOccurs: unbounded
     * @var \StructType\User_LanguageObjectType[]
     */
    public $User_Language_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive Flag
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Preferred_Communication_Language_DataType
     * @uses Preferred_Communication_Language_DataType::setUser_Language_Reference()
     * @uses Preferred_Communication_Language_DataType::setInactive()
     * @param \StructType\User_LanguageObjectType[] $user_Language_Reference
     * @param bool $inactive
     */
    public function __construct(array $user_Language_Reference = array(), $inactive = null)
    {
        $this
            ->setUser_Language_Reference($user_Language_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get User_Language_Reference value
     * @return \StructType\User_LanguageObjectType[]|null
     */
    public function getUser_Language_Reference()
    {
        return $this->User_Language_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUser_Language_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser_Language_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUser_Language_ReferenceForArrayConstraintsFromSetUser_Language_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $preferred_Communication_Language_DataTypeUser_Language_ReferenceItem) {
            // validation for constraint: itemType
            if (!$preferred_Communication_Language_DataTypeUser_Language_ReferenceItem instanceof \StructType\User_LanguageObjectType) {
                $invalidValues[] = is_object($preferred_Communication_Language_DataTypeUser_Language_ReferenceItem) ? get_class($preferred_Communication_Language_DataTypeUser_Language_ReferenceItem) : sprintf('%s(%s)', gettype($preferred_Communication_Language_DataTypeUser_Language_ReferenceItem), var_export($preferred_Communication_Language_DataTypeUser_Language_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The User_Language_Reference property can only contain items of type \StructType\User_LanguageObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set User_Language_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\User_LanguageObjectType[] $user_Language_Reference
     * @return \StructType\Preferred_Communication_Language_DataType
     */
    public function setUser_Language_Reference(array $user_Language_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($user_Language_ReferenceArrayErrorMessage = self::validateUser_Language_ReferenceForArrayConstraintsFromSetUser_Language_Reference($user_Language_Reference))) {
            throw new \InvalidArgumentException($user_Language_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->User_Language_Reference = $user_Language_Reference;
        return $this;
    }
    /**
     * Add item to User_Language_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\User_LanguageObjectType $item
     * @return \StructType\Preferred_Communication_Language_DataType
     */
    public function addToUser_Language_Reference(\StructType\User_LanguageObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\User_LanguageObjectType) {
            throw new \InvalidArgumentException(sprintf('The User_Language_Reference property can only contain items of type \StructType\User_LanguageObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->User_Language_Reference[] = $item;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Preferred_Communication_Language_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Preferred_Communication_Language_DataType
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
