<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Social_Benefits_LocalityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Social Benefits Locality
 * @subpackage Structs
 */
class Social_Benefits_LocalityType extends AbstractStructBase
{
    /**
     * The Social_Benefits_Locality_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Social Benefits Locality
     * - minOccurs: 0
     * @var \StructType\Social_Benefits_LocalityObjectType
     */
    public $Social_Benefits_Locality_Reference;
    /**
     * The Social_Benefits_Locality_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Social Benefits Locality data.
     * - minOccurs: 0
     * @var \StructType\Social_Benefits_Locality_DataType
     */
    public $Social_Benefits_Locality_Data;
    /**
     * Constructor method for Social_Benefits_LocalityType
     * @uses Social_Benefits_LocalityType::setSocial_Benefits_Locality_Reference()
     * @uses Social_Benefits_LocalityType::setSocial_Benefits_Locality_Data()
     * @param \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @param \StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data
     */
    public function __construct(\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null, \StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data = null)
    {
        $this
            ->setSocial_Benefits_Locality_Reference($social_Benefits_Locality_Reference)
            ->setSocial_Benefits_Locality_Data($social_Benefits_Locality_Data);
    }
    /**
     * Get Social_Benefits_Locality_Reference value
     * @return \StructType\Social_Benefits_LocalityObjectType|null
     */
    public function getSocial_Benefits_Locality_Reference()
    {
        return $this->Social_Benefits_Locality_Reference;
    }
    /**
     * Set Social_Benefits_Locality_Reference value
     * @param \StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference
     * @return \StructType\Social_Benefits_LocalityType
     */
    public function setSocial_Benefits_Locality_Reference(\StructType\Social_Benefits_LocalityObjectType $social_Benefits_Locality_Reference = null)
    {
        $this->Social_Benefits_Locality_Reference = $social_Benefits_Locality_Reference;
        return $this;
    }
    /**
     * Get Social_Benefits_Locality_Data value
     * @return \StructType\Social_Benefits_Locality_DataType|null
     */
    public function getSocial_Benefits_Locality_Data()
    {
        return $this->Social_Benefits_Locality_Data;
    }
    /**
     * Set Social_Benefits_Locality_Data value
     * @param \StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data
     * @return \StructType\Social_Benefits_LocalityType
     */
    public function setSocial_Benefits_Locality_Data(\StructType\Social_Benefits_Locality_DataType $social_Benefits_Locality_Data = null)
    {
        $this->Social_Benefits_Locality_Data = $social_Benefits_Locality_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Social_Benefits_LocalityType
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
