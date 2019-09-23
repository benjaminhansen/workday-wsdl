<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Generic_Disability_Status_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Disability Status Reference is required when deleting a Disability Status entry. | Disability Status Data is required unless the disability status is being deleted. | Wrapper element for each disability status entry.
 * @subpackage Structs
 */
class Generic_Disability_Status_Information_DataType extends AbstractStructBase
{
    /**
     * The Disability_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Disability Status Reference provided is not owned by the person in this request or does not exist. | Reference to an existing Military Service entry for edits and deletes.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType
     */
    public $Disability_Status_Reference;
    /**
     * The Disability_Status_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Generic_Disability_Status_Sub_DataType
     */
    public $Disability_Status_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag to delete an existing Disability status entry. If this flag is set, Disability Status Reference is also required.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Generic_Disability_Status_Information_DataType
     * @uses Generic_Disability_Status_Information_DataType::setDisability_Status_Reference()
     * @uses Generic_Disability_Status_Information_DataType::setDisability_Status_Data()
     * @uses Generic_Disability_Status_Information_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference
     * @param \WorkdayWsdl\\StructType\Generic_Disability_Status_Sub_DataType $disability_Status_Data
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference = null, \WorkdayWsdl\\StructType\Generic_Disability_Status_Sub_DataType $disability_Status_Data = null, $delete = null)
    {
        $this
            ->setDisability_Status_Reference($disability_Status_Reference)
            ->setDisability_Status_Data($disability_Status_Data)
            ->setDelete($delete);
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
     * @return \WorkdayWsdl\\StructType\Generic_Disability_Status_Information_DataType
     */
    public function setDisability_Status_Reference(\WorkdayWsdl\\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference = null)
    {
        $this->Disability_Status_Reference = $disability_Status_Reference;
        return $this;
    }
    /**
     * Get Disability_Status_Data value
     * @return \WorkdayWsdl\\StructType\Generic_Disability_Status_Sub_DataType|null
     */
    public function getDisability_Status_Data()
    {
        return $this->Disability_Status_Data;
    }
    /**
     * Set Disability_Status_Data value
     * @param \WorkdayWsdl\\StructType\Generic_Disability_Status_Sub_DataType $disability_Status_Data
     * @return \WorkdayWsdl\\StructType\Generic_Disability_Status_Information_DataType
     */
    public function setDisability_Status_Data(\WorkdayWsdl\\StructType\Generic_Disability_Status_Sub_DataType $disability_Status_Data = null)
    {
        $this->Disability_Status_Data = $disability_Status_Data;
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
     * @return \WorkdayWsdl\\StructType\Generic_Disability_Status_Information_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Generic_Disability_Status_Information_DataType
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
