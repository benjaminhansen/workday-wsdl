<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disability_Status_Information_Data_for_Related_PersonType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for each disability status entry.
 * @subpackage Structs
 */
class Disability_Status_Information_Data_for_Related_PersonType extends AbstractStructBase
{
    /**
     * The Disability_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Disability Status entry for edits and deletes.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType
     */
    public $Disability_Status_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag to delete an existing disability status entry. If this flag is set, Disability Status Reference is also required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The Disability_Status_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for disability status data for the Dependent business process.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType
     */
    public $Disability_Status_Data;
    /**
     * Constructor method for Disability_Status_Information_Data_for_Related_PersonType
     * @uses Disability_Status_Information_Data_for_Related_PersonType::setDisability_Status_Reference()
     * @uses Disability_Status_Information_Data_for_Related_PersonType::setDelete()
     * @uses Disability_Status_Information_Data_for_Related_PersonType::setDisability_Status_Data()
     * @param \WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference
     * @param bool $delete
     * @param \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType $disability_Status_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference = null, $delete = null, \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType $disability_Status_Data = null)
    {
        $this
            ->setDisability_Status_Reference($disability_Status_Reference)
            ->setDelete($delete)
            ->setDisability_Status_Data($disability_Status_Data);
    }
    /**
     * Get Disability_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType|null
     */
    public function getDisability_Status_Reference()
    {
        return $this->Disability_Status_Reference;
    }
    /**
     * Set Disability_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference
     * @return \WorkdayWsdl\\StructType\Disability_Status_Information_Data_for_Related_PersonType
     */
    public function setDisability_Status_Reference(\WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference = null)
    {
        $this->Disability_Status_Reference = $disability_Status_Reference;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Disability_Status_Information_Data_for_Related_PersonType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get Disability_Status_Data value
     * @return \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType|null
     */
    public function getDisability_Status_Data()
    {
        return $this->Disability_Status_Data;
    }
    /**
     * Set Disability_Status_Data value
     * @param \WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType $disability_Status_Data
     * @return \WorkdayWsdl\\StructType\Disability_Status_Information_Data_for_Related_PersonType
     */
    public function setDisability_Status_Data(\WorkdayWsdl\\StructType\Disability_Status_Sub_Data_for_Related_PersonType $disability_Status_Data = null)
    {
        $this->Disability_Status_Data = $disability_Status_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Disability_Status_Information_Data_for_Related_PersonType
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
