<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Committee_Membership_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Manage Committee Membership Data, contains the data for the Manage Committee Membership event
 * @subpackage Structs
 */
class Manage_Committee_Membership_DataType extends AbstractStructBase
{
    /**
     * The Create_External_Committee_Member_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for all the data needed for creating a new External Committee Member
     * - choice: Create_External_Committee_Member_Data | Committee_Member_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\Create_External_Committee_Member_DataType
     */
    public $Create_External_Committee_Member_Data;
    /**
     * The Committee_Member_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Member Reference for the Manage Committee Membership Service
     * - choice: Create_External_Committee_Member_Data | Committee_Member_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\Committee_Member_EnabledObjectType
     */
    public $Committee_Member_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date for the Manage Committee Membership Service Event, will be the start date for a new Committee Membership Service
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reason Reference for the Manage Committee Membership Service
     * @var \StructType\Event_Classification_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Committee__Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Reference for the Manage Committee Membership Service
     * @var \StructType\CommitteeObjectType
     */
    public $Committee__Reference;
    /**
     * The Committee_Membership_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Membership Type Reference for the Manage Committee Membership Service
     * @var \StructType\Committee_Membership_TypeObjectType
     */
    public $Committee_Membership_Type_Reference;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: End Date for the Manage Committee Membership Service
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The
     * Manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Memb
     * er
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType
     */
    public $Manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Manage_Committee_Membership_DataType
     * @uses Manage_Committee_Membership_DataType::setCreate_External_Committee_Member_Data()
     * @uses Manage_Committee_Membership_DataType::setCommittee_Member_Reference()
     * @uses Manage_Committee_Membership_DataType::setEffective_Date()
     * @uses Manage_Committee_Membership_DataType::setReason_Reference()
     * @uses Manage_Committee_Membership_DataType::setCommittee__Reference()
     * @uses Manage_Committee_Membership_DataType::setCommittee_Membership_Type_Reference()
     * @uses Manage_Committee_Membership_DataType::setEnd_Date()
     * @uses Manage_Committee_Membership_DataType::setManage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member()
     * @uses Manage_Committee_Membership_DataType::setAdd_Only()
     * @param \StructType\Create_External_Committee_Member_DataType $create_External_Committee_Member_Data
     * @param \StructType\Committee_Member_EnabledObjectType $committee_Member_Reference
     * @param string $effective_Date
     * @param \StructType\Event_Classification_SubcategoryObjectType $reason_Reference
     * @param \StructType\CommitteeObjectType $committee__Reference
     * @param \StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference
     * @param string $end_Date
     * @param \StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType $manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member
     * @param bool $add_Only
     */
    public function __construct(\StructType\Create_External_Committee_Member_DataType $create_External_Committee_Member_Data = null, \StructType\Committee_Member_EnabledObjectType $committee_Member_Reference = null, $effective_Date = null, \StructType\Event_Classification_SubcategoryObjectType $reason_Reference = null, \StructType\CommitteeObjectType $committee__Reference = null, \StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference = null, $end_Date = null, \StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType $manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member = null, $add_Only = null)
    {
        $this
            ->setCreate_External_Committee_Member_Data($create_External_Committee_Member_Data)
            ->setCommittee_Member_Reference($committee_Member_Reference)
            ->setEffective_Date($effective_Date)
            ->setReason_Reference($reason_Reference)
            ->setCommittee__Reference($committee__Reference)
            ->setCommittee_Membership_Type_Reference($committee_Membership_Type_Reference)
            ->setEnd_Date($end_Date)
            ->setManage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member($manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Create_External_Committee_Member_Data value
     * @return \StructType\Create_External_Committee_Member_DataType|null
     */
    public function getCreate_External_Committee_Member_Data()
    {
        return isset($this->Create_External_Committee_Member_Data) ? $this->Create_External_Committee_Member_Data : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreate_External_Committee_Member_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreate_External_Committee_Member_Data method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreate_External_Committee_Member_DataForChoiceConstraintsFromSetCreate_External_Committee_Member_Data($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Committee_Member_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Create_External_Committee_Member_Data can\'t be set as the property %s is already set. Only one property must be set among these properties: Create_External_Committee_Member_Data, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Create_External_Committee_Member_Data value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Create_External_Committee_Member_DataType $create_External_Committee_Member_Data
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setCreate_External_Committee_Member_Data(\StructType\Create_External_Committee_Member_DataType $create_External_Committee_Member_Data = null)
    {
        // validation for constraint: choice(Create_External_Committee_Member_Data, Committee_Member_Reference)
        if ('' !== ($create_External_Committee_Member_DataChoiceErrorMessage = self::validateCreate_External_Committee_Member_DataForChoiceConstraintsFromSetCreate_External_Committee_Member_Data($create_External_Committee_Member_Data))) {
            throw new \InvalidArgumentException($create_External_Committee_Member_DataChoiceErrorMessage, __LINE__);
        }
        if (is_null($create_External_Committee_Member_Data) || (is_array($create_External_Committee_Member_Data) && empty($create_External_Committee_Member_Data))) {
            unset($this->Create_External_Committee_Member_Data);
        } else {
            $this->Create_External_Committee_Member_Data = $create_External_Committee_Member_Data;
        }
        return $this;
    }
    /**
     * Get Committee_Member_Reference value
     * @return \StructType\Committee_Member_EnabledObjectType|null
     */
    public function getCommittee_Member_Reference()
    {
        return isset($this->Committee_Member_Reference) ? $this->Committee_Member_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCommittee_Member_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Member_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCommittee_Member_ReferenceForChoiceConstraintsFromSetCommittee_Member_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Create_External_Committee_Member_Data',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Committee_Member_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Committee_Member_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Committee_Member_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Member_EnabledObjectType $committee_Member_Reference
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setCommittee_Member_Reference(\StructType\Committee_Member_EnabledObjectType $committee_Member_Reference = null)
    {
        // validation for constraint: choice(Create_External_Committee_Member_Data, Committee_Member_Reference)
        if ('' !== ($committee_Member_ReferenceChoiceErrorMessage = self::validateCommittee_Member_ReferenceForChoiceConstraintsFromSetCommittee_Member_Reference($committee_Member_Reference))) {
            throw new \InvalidArgumentException($committee_Member_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($committee_Member_Reference) || (is_array($committee_Member_Reference) && empty($committee_Member_Reference))) {
            unset($this->Committee_Member_Reference);
        } else {
            $this->Committee_Member_Reference = $committee_Member_Reference;
        }
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Reason_Reference value
     * @return \StructType\Event_Classification_SubcategoryObjectType|null
     */
    public function getReason_Reference()
    {
        return $this->Reason_Reference;
    }
    /**
     * Set Reason_Reference value
     * @param \StructType\Event_Classification_SubcategoryObjectType $reason_Reference
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setReason_Reference(\StructType\Event_Classification_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
        return $this;
    }
    /**
     * Get Committee__Reference value
     * @return \StructType\CommitteeObjectType|null
     */
    public function getCommittee__Reference()
    {
        return $this->Committee__Reference;
    }
    /**
     * Set Committee__Reference value
     * @param \StructType\CommitteeObjectType $committee__Reference
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setCommittee__Reference(\StructType\CommitteeObjectType $committee__Reference = null)
    {
        $this->Committee__Reference = $committee__Reference;
        return $this;
    }
    /**
     * Get Committee_Membership_Type_Reference value
     * @return \StructType\Committee_Membership_TypeObjectType|null
     */
    public function getCommittee_Membership_Type_Reference()
    {
        return $this->Committee_Membership_Type_Reference;
    }
    /**
     * Set Committee_Membership_Type_Reference value
     * @param \StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setCommittee_Membership_Type_Reference(\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference = null)
    {
        $this->Committee_Membership_Type_Reference = $committee_Membership_Type_Reference;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get
     * Manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Memb
     * er value
     * @return \StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType|null
     */
    public function getManage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member()
    {
        return $this->Manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member;
    }
    /**
     * Set
     * Manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Memb
     * er value
     * @param \StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType $manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member
     * @return \StructType\Manage_Committee_Membership_DataType
     */
    public function setManage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member(\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType $manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member = null)
    {
        $this->Manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member = $manage_Professional_Affiliation_Sub_Business_Process_for_External_Committee_Member;
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
     * @return \StructType\Manage_Committee_Membership_DataType
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
     * @return \StructType\Manage_Committee_Membership_DataType
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
