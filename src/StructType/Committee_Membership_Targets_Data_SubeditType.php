<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Membership_Targets_Data_SubeditType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Membership Targets
 * @subpackage Structs
 */
class Committee_Membership_Targets_Data_SubeditType extends AbstractStructBase
{
    /**
     * The Committee_Membership_Target_Reference
     * Meta information extracted from the WSDL
     * - documentation: Membership Target Class that is created/updated
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Membership_TargetObjectType
     */
    public $Committee_Membership_Target_Reference;
    /**
     * The Committee_Membership_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Member type for Target
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType
     */
    public $Committee_Membership_Type_Reference;
    /**
     * The Target_Quantity
     * Meta information extracted from the WSDL
     * - documentation: Number of Member types targeted
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Target_Quantity;
    /**
     * The Unlimited_Quantity
     * Meta information extracted from the WSDL
     * - documentation: Number of Member Types targeted is unlimited
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Unlimited_Quantity;
    /**
     * The Delete_Only
     * Meta information extracted from the WSDL
     * - documentation: Delete Flag for deleting membership target for committee
     * @var bool
     */
    public $Delete_Only;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only being true will add a new Target to Committee IFF Delete is false, Add Only being false requires reference to target and updates the membership target
     * @var bool
     */
    public $Add_Only;
    /**
     * Constructor method for Committee_Membership_Targets_Data_SubeditType
     * @uses Committee_Membership_Targets_Data_SubeditType::setCommittee_Membership_Target_Reference()
     * @uses Committee_Membership_Targets_Data_SubeditType::setCommittee_Membership_Type_Reference()
     * @uses Committee_Membership_Targets_Data_SubeditType::setTarget_Quantity()
     * @uses Committee_Membership_Targets_Data_SubeditType::setUnlimited_Quantity()
     * @uses Committee_Membership_Targets_Data_SubeditType::setDelete_Only()
     * @uses Committee_Membership_Targets_Data_SubeditType::setAdd_Only()
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TargetObjectType $committee_Membership_Target_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference
     * @param float $target_Quantity
     * @param bool $unlimited_Quantity
     * @param bool $delete_Only
     * @param bool $add_Only
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Membership_TargetObjectType $committee_Membership_Target_Reference = null, \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference = null, $target_Quantity = null, $unlimited_Quantity = null, $delete_Only = null, $add_Only = null)
    {
        $this
            ->setCommittee_Membership_Target_Reference($committee_Membership_Target_Reference)
            ->setCommittee_Membership_Type_Reference($committee_Membership_Type_Reference)
            ->setTarget_Quantity($target_Quantity)
            ->setUnlimited_Quantity($unlimited_Quantity)
            ->setDelete_Only($delete_Only)
            ->setAdd_Only($add_Only);
    }
    /**
     * Get Committee_Membership_Target_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TargetObjectType|null
     */
    public function getCommittee_Membership_Target_Reference()
    {
        return $this->Committee_Membership_Target_Reference;
    }
    /**
     * Set Committee_Membership_Target_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TargetObjectType $committee_Membership_Target_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
     */
    public function setCommittee_Membership_Target_Reference(\WorkdayWsdl\\StructType\Committee_Membership_TargetObjectType $committee_Membership_Target_Reference = null)
    {
        $this->Committee_Membership_Target_Reference = $committee_Membership_Target_Reference;
        return $this;
    }
    /**
     * Get Committee_Membership_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType|null
     */
    public function getCommittee_Membership_Type_Reference()
    {
        return $this->Committee_Membership_Type_Reference;
    }
    /**
     * Set Committee_Membership_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
     */
    public function setCommittee_Membership_Type_Reference(\WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference = null)
    {
        $this->Committee_Membership_Type_Reference = $committee_Membership_Type_Reference;
        return $this;
    }
    /**
     * Get Target_Quantity value
     * @return float|null
     */
    public function getTarget_Quantity()
    {
        return $this->Target_Quantity;
    }
    /**
     * Set Target_Quantity value
     * @param float $target_Quantity
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
     */
    public function setTarget_Quantity($target_Quantity = null)
    {
        // validation for constraint: float
        if (!is_null($target_Quantity) && !(is_float($target_Quantity) || is_numeric($target_Quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($target_Quantity, true), gettype($target_Quantity)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($target_Quantity) && mb_strlen(mb_substr($target_Quantity, mb_strpos($target_Quantity, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($target_Quantity, true), mb_strlen(mb_substr($target_Quantity, mb_strpos($target_Quantity, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($target_Quantity) && $target_Quantity < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($target_Quantity, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($target_Quantity) && mb_strlen(preg_replace('/(\D)/', '', $target_Quantity)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($target_Quantity, true), mb_strlen(preg_replace('/(\D)/', '', $target_Quantity))), __LINE__);
        }
        $this->Target_Quantity = $target_Quantity;
        return $this;
    }
    /**
     * Get Unlimited_Quantity value
     * @return bool|null
     */
    public function getUnlimited_Quantity()
    {
        return $this->Unlimited_Quantity;
    }
    /**
     * Set Unlimited_Quantity value
     * @param bool $unlimited_Quantity
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
     */
    public function setUnlimited_Quantity($unlimited_Quantity = null)
    {
        // validation for constraint: boolean
        if (!is_null($unlimited_Quantity) && !is_bool($unlimited_Quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unlimited_Quantity, true), gettype($unlimited_Quantity)), __LINE__);
        }
        $this->Unlimited_Quantity = $unlimited_Quantity;
        return $this;
    }
    /**
     * Get Delete_Only value
     * @return bool|null
     */
    public function getDelete_Only()
    {
        return $this->Delete_Only;
    }
    /**
     * Set Delete_Only value
     * @param bool $delete_Only
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
     */
    public function setDelete_Only($delete_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete_Only) && !is_bool($delete_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete_Only, true), gettype($delete_Only)), __LINE__);
        }
        $this->Delete_Only = $delete_Only;
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
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
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
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Targets_Data_SubeditType
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
