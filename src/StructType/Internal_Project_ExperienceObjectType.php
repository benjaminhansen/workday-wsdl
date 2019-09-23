<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Internal_Project_ExperienceObjectType StructType
 * @subpackage Structs
 */
class Internal_Project_ExperienceObjectType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType[]
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
     * Constructor method for Internal_Project_ExperienceObjectType
     * @uses Internal_Project_ExperienceObjectType::setID()
     * @uses Internal_Project_ExperienceObjectType::setDescriptor()
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType[] $iD
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
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType[]|null
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
        foreach ($values as $internal_Project_ExperienceObjectTypeIDItem) {
            // validation for constraint: itemType
            if (!$internal_Project_ExperienceObjectTypeIDItem instanceof \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType) {
                $invalidValues[] = is_object($internal_Project_ExperienceObjectTypeIDItem) ? get_class($internal_Project_ExperienceObjectTypeIDItem) : sprintf('%s(%s)', gettype($internal_Project_ExperienceObjectTypeIDItem), var_export($internal_Project_ExperienceObjectTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType[] $iD
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType
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
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType $item
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType
     */
    public function addToID(\WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of type \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType
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
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceObjectType
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
