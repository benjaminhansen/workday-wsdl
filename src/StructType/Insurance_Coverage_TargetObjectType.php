<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Insurance_Coverage_TargetObjectType StructType
 * @subpackage Structs
 */
class Insurance_Coverage_TargetObjectType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType[]
     */
    public $ID;
    /**
     * The Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Display information used to describe an instance of an object. This 'optional' information is for outbound descriptive purposes only and is not processed on inbound Workday Web Services requests.
     * @var string
     */
    public $Descriptor;
    /**
     * Constructor method for Insurance_Coverage_TargetObjectType
     * @uses Insurance_Coverage_TargetObjectType::setID()
     * @uses Insurance_Coverage_TargetObjectType::setDescriptor()
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType[] $iD
     * @param string $descriptor
     */
    public function __construct(array $iD = array(), $descriptor = null)
    {
        $this
            ->setID($iD)
            ->setDescriptor($descriptor);
    }
    /**
     * Get ID value
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * This method is responsible for validating the values passed to the setID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDForArrayConstraintsFromSetID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $insurance_Coverage_TargetObjectTypeIDItem) {
            // validation for constraint: itemType
            if (!$insurance_Coverage_TargetObjectTypeIDItem instanceof \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType) {
                $invalidValues[] = is_object($insurance_Coverage_TargetObjectTypeIDItem) ? get_class($insurance_Coverage_TargetObjectTypeIDItem) : sprintf('%s(%s)', gettype($insurance_Coverage_TargetObjectTypeIDItem), var_export($insurance_Coverage_TargetObjectTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType[] $iD
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType
     */
    public function setID(array $iD = array())
    {
        // validation for constraint: array
        if ('' !== ($iDArrayErrorMessage = self::validateIDForArrayConstraintsFromSetID($iD))) {
            throw new \InvalidArgumentException($iDArrayErrorMessage, __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType $item
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType
     */
    public function addToID(\WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of type \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Get Descriptor value
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->Descriptor;
    }
    /**
     * Set Descriptor value
     * @param string $descriptor
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType
     */
    public function setDescriptor($descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($descriptor) && !is_string($descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptor, true), gettype($descriptor)), __LINE__);
        }
        $this->Descriptor = $descriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Insurance_Coverage_TargetObjectType
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
