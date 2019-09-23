<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Named_Professorship_Snapshot_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Named Professorship Snapshot.
 * @subpackage Structs
 */
class Named_Professorship_Snapshot_DataType extends AbstractStructBase
{
    /**
     * The Gift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Gift for which the Named Professorship is being added.
     * @var \StructType\GiftObjectType
     */
    public $Gift_Reference;
    /**
     * The Professorship_Name
     * Meta information extracted from the WSDL
     * - documentation: The Professorship Name for the Named Professorship.
     * - maxOccurs: 1
     * @var string
     */
    public $Professorship_Name;
    /**
     * The Named_Professorship_Title
     * Meta information extracted from the WSDL
     * - documentation: Named Professorship Title for the Named Professorship.
     * - maxOccurs: 1
     * @var string
     */
    public $Named_Professorship_Title;
    /**
     * The Academic_Unit_for_Named_Professorship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Unit for the Named Professorship.
     * @var \StructType\Academic_UnitObjectType
     */
    public $Academic_Unit_for_Named_Professorship_Reference;
    /**
     * The Term_Limits
     * Meta information extracted from the WSDL
     * - documentation: Term limits in months for the Named Professorship.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Term_Limits;
    /**
     * The Appointment_Restrictions
     * Meta information extracted from the WSDL
     * - documentation: Appointment restrictions text for the Named Professorship.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Appointment_Restrictions;
    /**
     * Constructor method for Named_Professorship_Snapshot_DataType
     * @uses Named_Professorship_Snapshot_DataType::setGift_Reference()
     * @uses Named_Professorship_Snapshot_DataType::setProfessorship_Name()
     * @uses Named_Professorship_Snapshot_DataType::setNamed_Professorship_Title()
     * @uses Named_Professorship_Snapshot_DataType::setAcademic_Unit_for_Named_Professorship_Reference()
     * @uses Named_Professorship_Snapshot_DataType::setTerm_Limits()
     * @uses Named_Professorship_Snapshot_DataType::setAppointment_Restrictions()
     * @param \StructType\GiftObjectType $gift_Reference
     * @param string $professorship_Name
     * @param string $named_Professorship_Title
     * @param \StructType\Academic_UnitObjectType $academic_Unit_for_Named_Professorship_Reference
     * @param float $term_Limits
     * @param string $appointment_Restrictions
     */
    public function __construct(\StructType\GiftObjectType $gift_Reference = null, $professorship_Name = null, $named_Professorship_Title = null, \StructType\Academic_UnitObjectType $academic_Unit_for_Named_Professorship_Reference = null, $term_Limits = null, $appointment_Restrictions = null)
    {
        $this
            ->setGift_Reference($gift_Reference)
            ->setProfessorship_Name($professorship_Name)
            ->setNamed_Professorship_Title($named_Professorship_Title)
            ->setAcademic_Unit_for_Named_Professorship_Reference($academic_Unit_for_Named_Professorship_Reference)
            ->setTerm_Limits($term_Limits)
            ->setAppointment_Restrictions($appointment_Restrictions);
    }
    /**
     * Get Gift_Reference value
     * @return \StructType\GiftObjectType|null
     */
    public function getGift_Reference()
    {
        return $this->Gift_Reference;
    }
    /**
     * Set Gift_Reference value
     * @param \StructType\GiftObjectType $gift_Reference
     * @return \StructType\Named_Professorship_Snapshot_DataType
     */
    public function setGift_Reference(\StructType\GiftObjectType $gift_Reference = null)
    {
        $this->Gift_Reference = $gift_Reference;
        return $this;
    }
    /**
     * Get Professorship_Name value
     * @return string|null
     */
    public function getProfessorship_Name()
    {
        return $this->Professorship_Name;
    }
    /**
     * Set Professorship_Name value
     * @param string $professorship_Name
     * @return \StructType\Named_Professorship_Snapshot_DataType
     */
    public function setProfessorship_Name($professorship_Name = null)
    {
        // validation for constraint: string
        if (!is_null($professorship_Name) && !is_string($professorship_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professorship_Name, true), gettype($professorship_Name)), __LINE__);
        }
        $this->Professorship_Name = $professorship_Name;
        return $this;
    }
    /**
     * Get Named_Professorship_Title value
     * @return string|null
     */
    public function getNamed_Professorship_Title()
    {
        return $this->Named_Professorship_Title;
    }
    /**
     * Set Named_Professorship_Title value
     * @param string $named_Professorship_Title
     * @return \StructType\Named_Professorship_Snapshot_DataType
     */
    public function setNamed_Professorship_Title($named_Professorship_Title = null)
    {
        // validation for constraint: string
        if (!is_null($named_Professorship_Title) && !is_string($named_Professorship_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($named_Professorship_Title, true), gettype($named_Professorship_Title)), __LINE__);
        }
        $this->Named_Professorship_Title = $named_Professorship_Title;
        return $this;
    }
    /**
     * Get Academic_Unit_for_Named_Professorship_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getAcademic_Unit_for_Named_Professorship_Reference()
    {
        return $this->Academic_Unit_for_Named_Professorship_Reference;
    }
    /**
     * Set Academic_Unit_for_Named_Professorship_Reference value
     * @param \StructType\Academic_UnitObjectType $academic_Unit_for_Named_Professorship_Reference
     * @return \StructType\Named_Professorship_Snapshot_DataType
     */
    public function setAcademic_Unit_for_Named_Professorship_Reference(\StructType\Academic_UnitObjectType $academic_Unit_for_Named_Professorship_Reference = null)
    {
        $this->Academic_Unit_for_Named_Professorship_Reference = $academic_Unit_for_Named_Professorship_Reference;
        return $this;
    }
    /**
     * Get Term_Limits value
     * @return float|null
     */
    public function getTerm_Limits()
    {
        return $this->Term_Limits;
    }
    /**
     * Set Term_Limits value
     * @param float $term_Limits
     * @return \StructType\Named_Professorship_Snapshot_DataType
     */
    public function setTerm_Limits($term_Limits = null)
    {
        // validation for constraint: float
        if (!is_null($term_Limits) && !(is_float($term_Limits) || is_numeric($term_Limits))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($term_Limits, true), gettype($term_Limits)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($term_Limits) && mb_strlen(mb_substr($term_Limits, mb_strpos($term_Limits, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($term_Limits, true), mb_strlen(mb_substr($term_Limits, mb_strpos($term_Limits, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($term_Limits) && $term_Limits < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($term_Limits, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($term_Limits) && mb_strlen(preg_replace('/(\D)/', '', $term_Limits)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($term_Limits, true), mb_strlen(preg_replace('/(\D)/', '', $term_Limits))), __LINE__);
        }
        $this->Term_Limits = $term_Limits;
        return $this;
    }
    /**
     * Get Appointment_Restrictions value
     * @return string|null
     */
    public function getAppointment_Restrictions()
    {
        return $this->Appointment_Restrictions;
    }
    /**
     * Set Appointment_Restrictions value
     * @param string $appointment_Restrictions
     * @return \StructType\Named_Professorship_Snapshot_DataType
     */
    public function setAppointment_Restrictions($appointment_Restrictions = null)
    {
        // validation for constraint: string
        if (!is_null($appointment_Restrictions) && !is_string($appointment_Restrictions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appointment_Restrictions, true), gettype($appointment_Restrictions)), __LINE__);
        }
        $this->Appointment_Restrictions = $appointment_Restrictions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Named_Professorship_Snapshot_DataType
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
