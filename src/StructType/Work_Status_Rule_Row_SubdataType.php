<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Status_Rule_Row_SubdataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container Element for all Attributes and Relationships associated to the Work Status Rule Row
 * @subpackage Structs
 */
class Work_Status_Rule_Row_SubdataType extends AbstractStructBase
{
    /**
     * The Work_Status_Rule_Row_ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Work Status Rule Row.
     * - minOccurs: 0
     * @var string
     */
    public $Work_Status_Rule_Row_ID;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: The Order of the Collective Agreement Factor Parameter. | Specifies the order of evaluation of the Work Status Rules | The order this period has | Order for the Orderable Item.
     * - base: xsd:string
     * - maxLength: 6
     * - maxOccurs: 1
     * @var string
     */
    public $Order;
    /**
     * The Work_Status_Rule_Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the Work Status Rule Row
     * - maxOccurs: 1
     * @var string
     */
    public $Work_Status_Rule_Name;
    /**
     * The Work_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Specific Work Status associated to the row
     * @var \StructType\Work_StatusObjectType
     */
    public $Work_Status_Reference;
    /**
     * The Work_Status_Rule_Reference
     * Meta information extracted from the WSDL
     * - documentation: Evaluation designated for the row
     * @var \StructType\Work_Status_RuleObjectType
     */
    public $Work_Status_Rule_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating that the referenced data should be deleted.
     * @var bool
     */
    public $Delete;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update. If an existing instance is found and this flag is set there will be an error.
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Work_Status_Rule_Row_SubdataType
     * @uses Work_Status_Rule_Row_SubdataType::setWork_Status_Rule_Row_ID()
     * @uses Work_Status_Rule_Row_SubdataType::setOrder()
     * @uses Work_Status_Rule_Row_SubdataType::setWork_Status_Rule_Name()
     * @uses Work_Status_Rule_Row_SubdataType::setWork_Status_Reference()
     * @uses Work_Status_Rule_Row_SubdataType::setWork_Status_Rule_Reference()
     * @uses Work_Status_Rule_Row_SubdataType::setDelete()
     * @uses Work_Status_Rule_Row_SubdataType::setAdd_Only()
     * @param string $work_Status_Rule_Row_ID
     * @param string $order
     * @param string $work_Status_Rule_Name
     * @param \StructType\Work_StatusObjectType $work_Status_Reference
     * @param \StructType\Work_Status_RuleObjectType $work_Status_Rule_Reference
     * @param bool $delete
     * @param bool $add_Only
     */
    public function __construct($work_Status_Rule_Row_ID = null, $order = null, $work_Status_Rule_Name = null, \StructType\Work_StatusObjectType $work_Status_Reference = null, \StructType\Work_Status_RuleObjectType $work_Status_Rule_Reference = null, $delete = null, $add_Only = null)
    {
        $this
            ->setWork_Status_Rule_Row_ID($work_Status_Rule_Row_ID)
            ->setOrder($order)
            ->setWork_Status_Rule_Name($work_Status_Rule_Name)
            ->setWork_Status_Reference($work_Status_Reference)
            ->setWork_Status_Rule_Reference($work_Status_Rule_Reference)
            ->setDelete($delete)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Work_Status_Rule_Row_ID value
     * @return string|null
     */
    public function getWork_Status_Rule_Row_ID()
    {
        return $this->Work_Status_Rule_Row_ID;
    }
    /**
     * Set Work_Status_Rule_Row_ID value
     * @param string $work_Status_Rule_Row_ID
     * @return \StructType\Work_Status_Rule_Row_SubdataType
     */
    public function setWork_Status_Rule_Row_ID($work_Status_Rule_Row_ID = null)
    {
        // validation for constraint: string
        if (!is_null($work_Status_Rule_Row_ID) && !is_string($work_Status_Rule_Row_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Status_Rule_Row_ID, true), gettype($work_Status_Rule_Row_ID)), __LINE__);
        }
        $this->Work_Status_Rule_Row_ID = $work_Status_Rule_Row_ID;
        return $this;
    }
    /**
     * Get Order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param string $order
     * @return \StructType\Work_Status_Rule_Row_SubdataType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: string
        if (!is_null($order) && !is_string($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($order) && mb_strlen($order) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Name value
     * @return string|null
     */
    public function getWork_Status_Rule_Name()
    {
        return $this->Work_Status_Rule_Name;
    }
    /**
     * Set Work_Status_Rule_Name value
     * @param string $work_Status_Rule_Name
     * @return \StructType\Work_Status_Rule_Row_SubdataType
     */
    public function setWork_Status_Rule_Name($work_Status_Rule_Name = null)
    {
        // validation for constraint: string
        if (!is_null($work_Status_Rule_Name) && !is_string($work_Status_Rule_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Status_Rule_Name, true), gettype($work_Status_Rule_Name)), __LINE__);
        }
        $this->Work_Status_Rule_Name = $work_Status_Rule_Name;
        return $this;
    }
    /**
     * Get Work_Status_Reference value
     * @return \StructType\Work_StatusObjectType|null
     */
    public function getWork_Status_Reference()
    {
        return $this->Work_Status_Reference;
    }
    /**
     * Set Work_Status_Reference value
     * @param \StructType\Work_StatusObjectType $work_Status_Reference
     * @return \StructType\Work_Status_Rule_Row_SubdataType
     */
    public function setWork_Status_Reference(\StructType\Work_StatusObjectType $work_Status_Reference = null)
    {
        $this->Work_Status_Reference = $work_Status_Reference;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Reference value
     * @return \StructType\Work_Status_RuleObjectType|null
     */
    public function getWork_Status_Rule_Reference()
    {
        return $this->Work_Status_Rule_Reference;
    }
    /**
     * Set Work_Status_Rule_Reference value
     * @param \StructType\Work_Status_RuleObjectType $work_Status_Rule_Reference
     * @return \StructType\Work_Status_Rule_Row_SubdataType
     */
    public function setWork_Status_Rule_Reference(\StructType\Work_Status_RuleObjectType $work_Status_Rule_Reference = null)
    {
        $this->Work_Status_Rule_Reference = $work_Status_Rule_Reference;
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
     * @return \StructType\Work_Status_Rule_Row_SubdataType
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
     * @return \StructType\Work_Status_Rule_Row_SubdataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Status_Rule_Row_SubdataType
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
