<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication_Method_Usage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Communication Method Usage data.
 * @subpackage Structs
 */
class Communication_Method_Usage_DataType extends AbstractStructBase
{
    /**
     * The Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType[]
     */
    public $Type_Reference;
    /**
     * The Use_For_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Communication Usage Behavior.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Use_For_Reference;
    /**
     * The Comments
     * Meta information extracted from the WSDL
     * - documentation: Description of the usage of the contact information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comments;
    /**
     * The Public
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether this Communication Usage is Public.
     * @var bool
     */
    public $Public;
    /**
     * Constructor method for Communication_Method_Usage_DataType
     * @uses Communication_Method_Usage_DataType::setType_Reference()
     * @uses Communication_Method_Usage_DataType::setUse_For_Reference()
     * @uses Communication_Method_Usage_DataType::setComments()
     * @uses Communication_Method_Usage_DataType::setPublic()
     * @param \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType[] $type_Reference
     * @param string[] $use_For_Reference
     * @param string $comments
     * @param bool $public
     */
    public function __construct(array $type_Reference = array(), array $use_For_Reference = array(), $comments = null, $public = null)
    {
        $this
            ->setType_Reference($type_Reference)
            ->setUse_For_Reference($use_For_Reference)
            ->setComments($comments)
            ->setPublic($public);
    }
    /**
     * Get Type_Reference value
     * @return \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType[]|null
     */
    public function getType_Reference()
    {
        return $this->Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setType_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setType_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateType_ReferenceForArrayConstraintsFromSetType_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $communication_Method_Usage_DataTypeType_ReferenceItem) {
            // validation for constraint: itemType
            if (!$communication_Method_Usage_DataTypeType_ReferenceItem instanceof \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType) {
                $invalidValues[] = is_object($communication_Method_Usage_DataTypeType_ReferenceItem) ? get_class($communication_Method_Usage_DataTypeType_ReferenceItem) : sprintf('%s(%s)', gettype($communication_Method_Usage_DataTypeType_ReferenceItem), var_export($communication_Method_Usage_DataTypeType_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType[] $type_Reference
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
     */
    public function setType_Reference(array $type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($type_ReferenceArrayErrorMessage = self::validateType_ReferenceForArrayConstraintsFromSetType_Reference($type_Reference))) {
            throw new \InvalidArgumentException($type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Type_Reference = $type_Reference;
        return $this;
    }
    /**
     * Add item to Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
     */
    public function addToType_Reference(\WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Communication_Usage_Type_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Use_For_Reference value
     * @return string[]|null
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
        foreach ($values as $communication_Method_Usage_DataTypeUse_For_ReferenceItem) {
            // validation for constraint: enumeration
            if (!\WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::valueIsValid($communication_Method_Usage_DataTypeUse_For_ReferenceItem)) {
                $invalidValues[] = is_object($communication_Method_Usage_DataTypeUse_For_ReferenceItem) ? get_class($communication_Method_Usage_DataTypeUse_For_ReferenceItem) : sprintf('%s(%s)', gettype($communication_Method_Usage_DataTypeUse_For_ReferenceItem), var_export($communication_Method_Usage_DataTypeUse_For_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Use_For_Reference value
     * @uses \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::valueIsValid()
     * @uses \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $use_For_Reference
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
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
     * @uses \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::valueIsValid()
     * @uses \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
     */
    public function addToUse_For_Reference($item)
    {
        // validation for constraint: enumeration
        if (!\WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \WorkdayWsdl\\EnumType\Communication_Usage_BehaviorEnumeration::getValidValues())), __LINE__);
        }
        $this->Use_For_Reference[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
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
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
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
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
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
