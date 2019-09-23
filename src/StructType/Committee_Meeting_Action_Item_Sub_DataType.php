<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Action_Item_Sub_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Action Item element for everything about Action Items for Committee Meetings
 * @subpackage Structs
 */
class Committee_Meeting_Action_Item_Sub_DataType extends AbstractStructBase
{
    /**
     * The Action_Item_Reference
     * Meta information extracted from the WSDL
     * - documentation: Action Item instance
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_Action_ItemObjectType
     */
    public $Action_Item_Reference;
    /**
     * The Action_Item_ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Action Item
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Action_Item_ID;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Action Item title
     * - maxOccurs: 1
     * @var string
     */
    public $Item;
    /**
     * The Assignee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Assignee for the action item
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType[]
     */
    public $Assignee_Reference;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - documentation: Action Item Description
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Details;
    /**
     * The Complete
     * Meta information extracted from the WSDL
     * - documentation: Action Item is completed if true
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Complete;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Specifies that the request is for deleting a committee meeting
     * @var bool
     */
    public $Delete;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Specifies that the request is for adding committees meetings only
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Committee_Meeting_Action_Item_Sub_DataType
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setAction_Item_Reference()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setAction_Item_ID()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setItem()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setAssignee_Reference()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setDetails()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setComplete()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setDelete()
     * @uses Committee_Meeting_Action_Item_Sub_DataType::setAdd_Only()
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Action_ItemObjectType $action_Item_Reference
     * @param string $action_Item_ID
     * @param string $item
     * @param \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType[] $assignee_Reference
     * @param string $details
     * @param bool $complete
     * @param bool $delete
     * @param bool $add_Only
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Meeting_Action_ItemObjectType $action_Item_Reference = null, $action_Item_ID = null, $item = null, array $assignee_Reference = array(), $details = null, $complete = null, $delete = null, $add_Only = null)
    {
        $this
            ->setAction_Item_Reference($action_Item_Reference)
            ->setAction_Item_ID($action_Item_ID)
            ->setItem($item)
            ->setAssignee_Reference($assignee_Reference)
            ->setDetails($details)
            ->setComplete($complete)
            ->setDelete($delete)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Action_Item_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_ItemObjectType|null
     */
    public function getAction_Item_Reference()
    {
        return $this->Action_Item_Reference;
    }
    /**
     * Set Action_Item_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_Action_ItemObjectType $action_Item_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function setAction_Item_Reference(\WorkdayWsdl\\StructType\Committee_Meeting_Action_ItemObjectType $action_Item_Reference = null)
    {
        $this->Action_Item_Reference = $action_Item_Reference;
        return $this;
    }
    /**
     * Get Action_Item_ID value
     * @return string|null
     */
    public function getAction_Item_ID()
    {
        return $this->Action_Item_ID;
    }
    /**
     * Set Action_Item_ID value
     * @param string $action_Item_ID
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function setAction_Item_ID($action_Item_ID = null)
    {
        // validation for constraint: string
        if (!is_null($action_Item_ID) && !is_string($action_Item_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action_Item_ID, true), gettype($action_Item_ID)), __LINE__);
        }
        $this->Action_Item_ID = $action_Item_ID;
        return $this;
    }
    /**
     * Get Item value
     * @return string|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param string $item
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function setItem($item = null)
    {
        // validation for constraint: string
        if (!is_null($item) && !is_string($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($item, true), gettype($item)), __LINE__);
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Get Assignee_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType[]|null
     */
    public function getAssignee_Reference()
    {
        return $this->Assignee_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAssignee_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssignee_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssignee_ReferenceForArrayConstraintsFromSetAssignee_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Action_Item_Sub_DataTypeAssignee_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Action_Item_Sub_DataTypeAssignee_ReferenceItem instanceof \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType) {
                $invalidValues[] = is_object($committee_Meeting_Action_Item_Sub_DataTypeAssignee_ReferenceItem) ? get_class($committee_Meeting_Action_Item_Sub_DataTypeAssignee_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Meeting_Action_Item_Sub_DataTypeAssignee_ReferenceItem), var_export($committee_Meeting_Action_Item_Sub_DataTypeAssignee_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Assignee_Reference property can only contain items of type \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Assignee_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType[] $assignee_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function setAssignee_Reference(array $assignee_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($assignee_ReferenceArrayErrorMessage = self::validateAssignee_ReferenceForArrayConstraintsFromSetAssignee_Reference($assignee_Reference))) {
            throw new \InvalidArgumentException($assignee_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Assignee_Reference = $assignee_Reference;
        return $this;
    }
    /**
     * Add item to Assignee_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType $item
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function addToAssignee_Reference(\WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType) {
            throw new \InvalidArgumentException(sprintf('The Assignee_Reference property can only contain items of type \WorkdayWsdl\\StructType\Committee_Member_EnabledObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Assignee_Reference[] = $item;
        return $this;
    }
    /**
     * Get Details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param string $details
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function setDetails($details = null)
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Get Complete value
     * @return bool|null
     */
    public function getComplete()
    {
        return $this->Complete;
    }
    /**
     * Set Complete value
     * @param bool $complete
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
     */
    public function setComplete($complete = null)
    {
        // validation for constraint: boolean
        if (!is_null($complete) && !is_bool($complete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($complete, true), gettype($complete)), __LINE__);
        }
        $this->Complete = $complete;
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
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
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Action_Item_Sub_DataType
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
