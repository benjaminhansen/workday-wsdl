<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Secondary_Termination_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The secondary reasons for the worker's most recent termination.
 * @subpackage Structs
 */
class Secondary_Termination_DataType extends AbstractStructBase
{
    /**
     * The Secondary_Termination_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Secondary reason for the worker's termination.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType
     */
    public $Secondary_Termination_Reason_Reference;
    /**
     * The Secondary_Termination_Reason_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the secondary termination reason category.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Event_Classification_CategoryObjectType
     */
    public $Secondary_Termination_Reason_Category_Reference;
    /**
     * Constructor method for Secondary_Termination_DataType
     * @uses Secondary_Termination_DataType::setSecondary_Termination_Reason_Reference()
     * @uses Secondary_Termination_DataType::setSecondary_Termination_Reason_Category_Reference()
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $secondary_Termination_Reason_Reference
     * @param \WorkdayWsdl\\StructType\Event_Classification_CategoryObjectType $secondary_Termination_Reason_Category_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $secondary_Termination_Reason_Reference = null, \WorkdayWsdl\\StructType\Event_Classification_CategoryObjectType $secondary_Termination_Reason_Category_Reference = null)
    {
        $this
            ->setSecondary_Termination_Reason_Reference($secondary_Termination_Reason_Reference)
            ->setSecondary_Termination_Reason_Category_Reference($secondary_Termination_Reason_Category_Reference);
    }
    /**
     * Get Secondary_Termination_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType|null
     */
    public function getSecondary_Termination_Reason_Reference()
    {
        return $this->Secondary_Termination_Reason_Reference;
    }
    /**
     * Set Secondary_Termination_Reason_Reference value
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $secondary_Termination_Reason_Reference
     * @return \WorkdayWsdl\\StructType\Secondary_Termination_DataType
     */
    public function setSecondary_Termination_Reason_Reference(\WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $secondary_Termination_Reason_Reference = null)
    {
        $this->Secondary_Termination_Reason_Reference = $secondary_Termination_Reason_Reference;
        return $this;
    }
    /**
     * Get Secondary_Termination_Reason_Category_Reference value
     * @return \WorkdayWsdl\\StructType\Event_Classification_CategoryObjectType|null
     */
    public function getSecondary_Termination_Reason_Category_Reference()
    {
        return $this->Secondary_Termination_Reason_Category_Reference;
    }
    /**
     * Set Secondary_Termination_Reason_Category_Reference value
     * @param \WorkdayWsdl\\StructType\Event_Classification_CategoryObjectType $secondary_Termination_Reason_Category_Reference
     * @return \WorkdayWsdl\\StructType\Secondary_Termination_DataType
     */
    public function setSecondary_Termination_Reason_Category_Reference(\WorkdayWsdl\\StructType\Event_Classification_CategoryObjectType $secondary_Termination_Reason_Category_Reference = null)
    {
        $this->Secondary_Termination_Reason_Category_Reference = $secondary_Termination_Reason_Category_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Secondary_Termination_DataType
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
