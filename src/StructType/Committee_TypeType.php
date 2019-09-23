<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_TypeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Committee Type
 * @subpackage Structs
 */
class Committee_TypeType extends AbstractStructBase
{
    /**
     * The Committee_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to a Committee Type
     * - minOccurs: 0
     * @var \StructType\Committee_TypeObjectType
     */
    public $Committee_Type_Reference;
    /**
     * The Committee_Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for Committee Type
     * - minOccurs: 0
     * @var \StructType\Committee_Type_DataType
     */
    public $Committee_Type_Data;
    /**
     * Constructor method for Committee_TypeType
     * @uses Committee_TypeType::setCommittee_Type_Reference()
     * @uses Committee_TypeType::setCommittee_Type_Data()
     * @param \StructType\Committee_TypeObjectType $committee_Type_Reference
     * @param \StructType\Committee_Type_DataType $committee_Type_Data
     */
    public function __construct(\StructType\Committee_TypeObjectType $committee_Type_Reference = null, \StructType\Committee_Type_DataType $committee_Type_Data = null)
    {
        $this
            ->setCommittee_Type_Reference($committee_Type_Reference)
            ->setCommittee_Type_Data($committee_Type_Data);
    }
    /**
     * Get Committee_Type_Reference value
     * @return \StructType\Committee_TypeObjectType|null
     */
    public function getCommittee_Type_Reference()
    {
        return $this->Committee_Type_Reference;
    }
    /**
     * Set Committee_Type_Reference value
     * @param \StructType\Committee_TypeObjectType $committee_Type_Reference
     * @return \StructType\Committee_TypeType
     */
    public function setCommittee_Type_Reference(\StructType\Committee_TypeObjectType $committee_Type_Reference = null)
    {
        $this->Committee_Type_Reference = $committee_Type_Reference;
        return $this;
    }
    /**
     * Get Committee_Type_Data value
     * @return \StructType\Committee_Type_DataType|null
     */
    public function getCommittee_Type_Data()
    {
        return $this->Committee_Type_Data;
    }
    /**
     * Set Committee_Type_Data value
     * @param \StructType\Committee_Type_DataType $committee_Type_Data
     * @return \StructType\Committee_TypeType
     */
    public function setCommittee_Type_Data(\StructType\Committee_Type_DataType $committee_Type_Data = null)
    {
        $this->Committee_Type_Data = $committee_Type_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_TypeType
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
