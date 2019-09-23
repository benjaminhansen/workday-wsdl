<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Previous_System_Job_History_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for defining whether a previous system job history entry is being added, updated or deleted.
 * @subpackage Structs
 */
class Previous_System_Job_History_DataType extends AbstractStructBase
{
    /**
     * The Previous_System_Job_History_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier to a Previous System Job History entry. Required if you are deleting or updating an existing entry. Leave blank on an Add.
     * - minOccurs: 0
     * @var \StructType\Job_Previous_System_HistoryObjectType
     */
    public $Previous_System_Job_History_Reference;
    /**
     * The Previous_System_Job_History_Detail_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Previous_System_Job_History_Detail_DataType
     */
    public $Previous_System_Job_History_Detail_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating that the referenced data should be deleted.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Previous_System_Job_History_DataType
     * @uses Previous_System_Job_History_DataType::setPrevious_System_Job_History_Reference()
     * @uses Previous_System_Job_History_DataType::setPrevious_System_Job_History_Detail_Data()
     * @uses Previous_System_Job_History_DataType::setAdd_Only()
     * @uses Previous_System_Job_History_DataType::setDelete()
     * @param \StructType\Job_Previous_System_HistoryObjectType $previous_System_Job_History_Reference
     * @param \StructType\Previous_System_Job_History_Detail_DataType $previous_System_Job_History_Detail_Data
     * @param bool $add_Only
     * @param bool $delete
     */
    public function __construct(\StructType\Job_Previous_System_HistoryObjectType $previous_System_Job_History_Reference = null, \StructType\Previous_System_Job_History_Detail_DataType $previous_System_Job_History_Detail_Data = null, $add_Only = null, $delete = null)
    {
        $this
            ->setPrevious_System_Job_History_Reference($previous_System_Job_History_Reference)
            ->setPrevious_System_Job_History_Detail_Data($previous_System_Job_History_Detail_Data)
            ->setAdd_Only($add_Only)
            ->setDelete($delete);
    }
    /**
     * Get Previous_System_Job_History_Reference value
     * @return \StructType\Job_Previous_System_HistoryObjectType|null
     */
    public function getPrevious_System_Job_History_Reference()
    {
        return $this->Previous_System_Job_History_Reference;
    }
    /**
     * Set Previous_System_Job_History_Reference value
     * @param \StructType\Job_Previous_System_HistoryObjectType $previous_System_Job_History_Reference
     * @return \StructType\Previous_System_Job_History_DataType
     */
    public function setPrevious_System_Job_History_Reference(\StructType\Job_Previous_System_HistoryObjectType $previous_System_Job_History_Reference = null)
    {
        $this->Previous_System_Job_History_Reference = $previous_System_Job_History_Reference;
        return $this;
    }
    /**
     * Get Previous_System_Job_History_Detail_Data value
     * @return \StructType\Previous_System_Job_History_Detail_DataType|null
     */
    public function getPrevious_System_Job_History_Detail_Data()
    {
        return $this->Previous_System_Job_History_Detail_Data;
    }
    /**
     * Set Previous_System_Job_History_Detail_Data value
     * @param \StructType\Previous_System_Job_History_Detail_DataType $previous_System_Job_History_Detail_Data
     * @return \StructType\Previous_System_Job_History_DataType
     */
    public function setPrevious_System_Job_History_Detail_Data(\StructType\Previous_System_Job_History_Detail_DataType $previous_System_Job_History_Detail_Data = null)
    {
        $this->Previous_System_Job_History_Detail_Data = $previous_System_Job_History_Detail_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \StructType\Previous_System_Job_History_DataType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \StructType\Previous_System_Job_History_DataType
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
     * @return \StructType\Previous_System_Job_History_DataType
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
