<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Related_Person_Descriptor_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Related Person Descriptor data.
 * @subpackage Structs
 */
class Related_Person_Descriptor_DataType extends AbstractStructBase
{
    /**
     * The Related_Person_Relationship_Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying name of Relationship.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Related_Person_Relationship_Name;
    /**
     * Constructor method for Related_Person_Descriptor_DataType
     * @uses Related_Person_Descriptor_DataType::setRelated_Person_Relationship_Name()
     * @param string $related_Person_Relationship_Name
     */
    public function __construct($related_Person_Relationship_Name = null)
    {
        $this
            ->setRelated_Person_Relationship_Name($related_Person_Relationship_Name);
    }
    /**
     * Get Related_Person_Relationship_Name value
     * @return string|null
     */
    public function getRelated_Person_Relationship_Name()
    {
        return $this->Related_Person_Relationship_Name;
    }
    /**
     * Set Related_Person_Relationship_Name value
     * @param string $related_Person_Relationship_Name
     * @return \StructType\Related_Person_Descriptor_DataType
     */
    public function setRelated_Person_Relationship_Name($related_Person_Relationship_Name = null)
    {
        // validation for constraint: string
        if (!is_null($related_Person_Relationship_Name) && !is_string($related_Person_Relationship_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($related_Person_Relationship_Name, true), gettype($related_Person_Relationship_Name)), __LINE__);
        }
        $this->Related_Person_Relationship_Name = $related_Person_Relationship_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Related_Person_Descriptor_DataType
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
