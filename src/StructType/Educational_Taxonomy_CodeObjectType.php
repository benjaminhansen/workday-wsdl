<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Educational_Taxonomy_CodeObjectType StructType
 * @subpackage Structs
 */
class Educational_Taxonomy_CodeObjectType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Educational_Taxonomy_CodeObjectIDType[]
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
     * Constructor method for Educational_Taxonomy_CodeObjectType
     * @uses Educational_Taxonomy_CodeObjectType::setID()
     * @uses Educational_Taxonomy_CodeObjectType::setDescriptor()
     * @param \StructType\Educational_Taxonomy_CodeObjectIDType[] $iD
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
     * @return \StructType\Educational_Taxonomy_CodeObjectIDType[]|null
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
        foreach ($values as $educational_Taxonomy_CodeObjectTypeIDItem) {
            // validation for constraint: itemType
            if (!$educational_Taxonomy_CodeObjectTypeIDItem instanceof \StructType\Educational_Taxonomy_CodeObjectIDType) {
                $invalidValues[] = is_object($educational_Taxonomy_CodeObjectTypeIDItem) ? get_class($educational_Taxonomy_CodeObjectTypeIDItem) : sprintf('%s(%s)', gettype($educational_Taxonomy_CodeObjectTypeIDItem), var_export($educational_Taxonomy_CodeObjectTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type \StructType\Educational_Taxonomy_CodeObjectIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Educational_Taxonomy_CodeObjectIDType[] $iD
     * @return \StructType\Educational_Taxonomy_CodeObjectType
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
     * @param \StructType\Educational_Taxonomy_CodeObjectIDType $item
     * @return \StructType\Educational_Taxonomy_CodeObjectType
     */
    public function addToID(\StructType\Educational_Taxonomy_CodeObjectIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Educational_Taxonomy_CodeObjectIDType) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of type \StructType\Educational_Taxonomy_CodeObjectIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \StructType\Educational_Taxonomy_CodeObjectType
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
     * @return \StructType\Educational_Taxonomy_CodeObjectType
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
