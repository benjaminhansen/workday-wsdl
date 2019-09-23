<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication_Method_Usage_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Communication Method Usage data.
 * @subpackage Structs
 */
class Communication_Method_Usage_Information_DataType extends AbstractStructBase
{
    /**
     * The Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the communication usage type.
     * - maxOccurs: unbounded
     * @var \StructType\Communication_Usage_Type_DataType[]
     */
    public $Type_Data;
    /**
     * The Use_For_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for communication usage behavior.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Communication_Usage_BehaviorObjectType[]
     */
    public $Use_For_Reference;
    /**
     * The Use_For_Tenanted_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for communication usage behavior tenanted.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Communication_Usage_Behavior_TenantedObjectType[]
     */
    public $Use_For_Tenanted_Reference;
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - documentation: Description of the address, phone, email, instant messenger, or web address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comments;
    /**
     * The Public
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the address is public.
     * @var bool
     */
    public $Public;
    /**
     * Constructor method for Communication_Method_Usage_Information_DataType
     * @uses Communication_Method_Usage_Information_DataType::setType_Data()
     * @uses Communication_Method_Usage_Information_DataType::setUse_For_Reference()
     * @uses Communication_Method_Usage_Information_DataType::setUse_For_Tenanted_Reference()
     * @uses Communication_Method_Usage_Information_DataType::setComments()
     * @uses Communication_Method_Usage_Information_DataType::setPublic()
     * @param \StructType\Communication_Usage_Type_DataType[] $type_Data
     * @param \StructType\Communication_Usage_BehaviorObjectType[] $use_For_Reference
     * @param \StructType\Communication_Usage_Behavior_TenantedObjectType[] $use_For_Tenanted_Reference
     * @param string $comments
     * @param bool $public
     */
    public function __construct(array $type_Data = array(), array $use_For_Reference = array(), array $use_For_Tenanted_Reference = array(), $comments = null, $public = null)
    {
        $this
            ->setType_Data($type_Data)
            ->setUse_For_Reference($use_For_Reference)
            ->setUse_For_Tenanted_Reference($use_For_Tenanted_Reference)
            ->setComments($comments)
            ->setPublic($public);
    }
    /**
     * Get Type_Data value
     * @return \StructType\Communication_Usage_Type_DataType[]|null
     */
    public function getType_Data()
    {
        return $this->Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setType_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setType_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateType_DataForArrayConstraintsFromSetType_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $communication_Method_Usage_Information_DataTypeType_DataItem) {
            // validation for constraint: itemType
            if (!$communication_Method_Usage_Information_DataTypeType_DataItem instanceof \StructType\Communication_Usage_Type_DataType) {
                $invalidValues[] = is_object($communication_Method_Usage_Information_DataTypeType_DataItem) ? get_class($communication_Method_Usage_Information_DataTypeType_DataItem) : sprintf('%s(%s)', gettype($communication_Method_Usage_Information_DataTypeType_DataItem), var_export($communication_Method_Usage_Information_DataTypeType_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Type_Data property can only contain items of type \StructType\Communication_Usage_Type_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Usage_Type_DataType[] $type_Data
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function setType_Data(array $type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($type_DataArrayErrorMessage = self::validateType_DataForArrayConstraintsFromSetType_Data($type_Data))) {
            throw new \InvalidArgumentException($type_DataArrayErrorMessage, __LINE__);
        }
        $this->Type_Data = $type_Data;
        return $this;
    }
    /**
     * Add item to Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Usage_Type_DataType $item
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function addToType_Data(\StructType\Communication_Usage_Type_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Communication_Usage_Type_DataType) {
            throw new \InvalidArgumentException(sprintf('The Type_Data property can only contain items of type \StructType\Communication_Usage_Type_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Type_Data[] = $item;
        return $this;
    }
    /**
     * Get Use_For_Reference value
     * @return \StructType\Communication_Usage_BehaviorObjectType[]|null
     */
    public function getUse_For_Reference()
    {
        return $this->Use_For_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUse_For_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUse_For_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUse_For_ReferenceForArrayConstraintsFromSetUse_For_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $communication_Method_Usage_Information_DataTypeUse_For_ReferenceItem) {
            // validation for constraint: itemType
            if (!$communication_Method_Usage_Information_DataTypeUse_For_ReferenceItem instanceof \StructType\Communication_Usage_BehaviorObjectType) {
                $invalidValues[] = is_object($communication_Method_Usage_Information_DataTypeUse_For_ReferenceItem) ? get_class($communication_Method_Usage_Information_DataTypeUse_For_ReferenceItem) : sprintf('%s(%s)', gettype($communication_Method_Usage_Information_DataTypeUse_For_ReferenceItem), var_export($communication_Method_Usage_Information_DataTypeUse_For_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Use_For_Reference property can only contain items of type \StructType\Communication_Usage_BehaviorObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Use_For_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Usage_BehaviorObjectType[] $use_For_Reference
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function setUse_For_Reference(array $use_For_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($use_For_ReferenceArrayErrorMessage = self::validateUse_For_ReferenceForArrayConstraintsFromSetUse_For_Reference($use_For_Reference))) {
            throw new \InvalidArgumentException($use_For_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Use_For_Reference = $use_For_Reference;
        return $this;
    }
    /**
     * Add item to Use_For_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Usage_BehaviorObjectType $item
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function addToUse_For_Reference(\StructType\Communication_Usage_BehaviorObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Communication_Usage_BehaviorObjectType) {
            throw new \InvalidArgumentException(sprintf('The Use_For_Reference property can only contain items of type \StructType\Communication_Usage_BehaviorObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Use_For_Reference[] = $item;
        return $this;
    }
    /**
     * Get Use_For_Tenanted_Reference value
     * @return \StructType\Communication_Usage_Behavior_TenantedObjectType[]|null
     */
    public function getUse_For_Tenanted_Reference()
    {
        return $this->Use_For_Tenanted_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUse_For_Tenanted_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUse_For_Tenanted_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUse_For_Tenanted_ReferenceForArrayConstraintsFromSetUse_For_Tenanted_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $communication_Method_Usage_Information_DataTypeUse_For_Tenanted_ReferenceItem) {
            // validation for constraint: itemType
            if (!$communication_Method_Usage_Information_DataTypeUse_For_Tenanted_ReferenceItem instanceof \StructType\Communication_Usage_Behavior_TenantedObjectType) {
                $invalidValues[] = is_object($communication_Method_Usage_Information_DataTypeUse_For_Tenanted_ReferenceItem) ? get_class($communication_Method_Usage_Information_DataTypeUse_For_Tenanted_ReferenceItem) : sprintf('%s(%s)', gettype($communication_Method_Usage_Information_DataTypeUse_For_Tenanted_ReferenceItem), var_export($communication_Method_Usage_Information_DataTypeUse_For_Tenanted_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Use_For_Tenanted_Reference property can only contain items of type \StructType\Communication_Usage_Behavior_TenantedObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Use_For_Tenanted_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Usage_Behavior_TenantedObjectType[] $use_For_Tenanted_Reference
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function setUse_For_Tenanted_Reference(array $use_For_Tenanted_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($use_For_Tenanted_ReferenceArrayErrorMessage = self::validateUse_For_Tenanted_ReferenceForArrayConstraintsFromSetUse_For_Tenanted_Reference($use_For_Tenanted_Reference))) {
            throw new \InvalidArgumentException($use_For_Tenanted_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Use_For_Tenanted_Reference = $use_For_Tenanted_Reference;
        return $this;
    }
    /**
     * Add item to Use_For_Tenanted_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Usage_Behavior_TenantedObjectType $item
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function addToUse_For_Tenanted_Reference(\StructType\Communication_Usage_Behavior_TenantedObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Communication_Usage_Behavior_TenantedObjectType) {
            throw new \InvalidArgumentException(sprintf('The Use_For_Tenanted_Reference property can only contain items of type \StructType\Communication_Usage_Behavior_TenantedObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Use_For_Tenanted_Reference[] = $item;
        return $this;
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $comments
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get Public value
     * @return bool|null
     */
    public function getPublic()
    {
        return $this->Public;
    }
    /**
     * Set Public value
     * @param bool $public
     * @return \StructType\Communication_Method_Usage_Information_DataType
     */
    public function setPublic($public = null)
    {
        // validation for constraint: boolean
        if (!is_null($public) && !is_bool($public)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($public, true), gettype($public)), __LINE__);
        }
        $this->Public = $public;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Communication_Method_Usage_Information_DataType
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
