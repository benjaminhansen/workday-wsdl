<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Status_Rule_Set_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container Element containing all Attributes and Relationship for a Work Status Rule Set
 * @subpackage Structs
 */
class Work_Status_Rule_Set_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Work Status Rule Set
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Work_Status_Rule_Set_Name
     * Meta information extracted from the WSDL
     * - documentation: Name of Work Status Rule Set
     * - maxOccurs: 1
     * @var string
     */
    public $Work_Status_Rule_Set_Name;
    /**
     * The Work_Status_Rule_Set_Description
     * Meta information extracted from the WSDL
     * - documentation: Description of Work Status Rule Set
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Work_Status_Rule_Set_Description;
    /**
     * The Restricted_to_Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Academic Unit that the Work Status Rule Set is restricted to
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Academic_UnitObjectType[]
     */
    public $Restricted_to_Academic_Unit_Reference;
    /**
     * The Default_Work_Status_Rule_Set
     * Meta information extracted from the WSDL
     * - documentation: Determines whether the Work Status Rule Set is defaulted to be used in other reports
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Default_Work_Status_Rule_Set;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: This flag will inactivate the Work Status Rule Set.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Applies_to_Leave_Types_Reference
     * Meta information extracted from the WSDL
     * - documentation: Leave Types that are used in the Evaluation of certain Work Status Rules
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Leave_of_Absence_TypeObjectType[]
     */
    public $Applies_to_Leave_Types_Reference;
    /**
     * The Active_Periods_Required_for_Eligibility
     * Meta information extracted from the WSDL
     * - documentation: Number of Active Periods Required for Eligibility of Leave
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 10
     * @var float
     */
    public $Active_Periods_Required_for_Eligibility;
    /**
     * The Minimum_Years_Since_Last_Applicable_Leave
     * Meta information extracted from the WSDL
     * - documentation: Minimum Years Since Last Applicable Leave
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 4
     * @var float
     */
    public $Minimum_Years_Since_Last_Applicable_Leave;
    /**
     * The Work_Status_Rule_Row_Subdata
     * Meta information extracted from the WSDL
     * - documentation: Element Container for all the Attributes and Relationships for each Work Status Rule Row
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Status_Rule_Row_SubdataType[]
     */
    public $Work_Status_Rule_Row_Subdata;
    /**
     * Constructor method for Work_Status_Rule_Set_DataType
     * @uses Work_Status_Rule_Set_DataType::setID()
     * @uses Work_Status_Rule_Set_DataType::setWork_Status_Rule_Set_Name()
     * @uses Work_Status_Rule_Set_DataType::setWork_Status_Rule_Set_Description()
     * @uses Work_Status_Rule_Set_DataType::setRestricted_to_Academic_Unit_Reference()
     * @uses Work_Status_Rule_Set_DataType::setDefault_Work_Status_Rule_Set()
     * @uses Work_Status_Rule_Set_DataType::setInactive()
     * @uses Work_Status_Rule_Set_DataType::setApplies_to_Leave_Types_Reference()
     * @uses Work_Status_Rule_Set_DataType::setActive_Periods_Required_for_Eligibility()
     * @uses Work_Status_Rule_Set_DataType::setMinimum_Years_Since_Last_Applicable_Leave()
     * @uses Work_Status_Rule_Set_DataType::setWork_Status_Rule_Row_Subdata()
     * @param string $iD
     * @param string $work_Status_Rule_Set_Name
     * @param string $work_Status_Rule_Set_Description
     * @param \StructType\Academic_UnitObjectType[] $restricted_to_Academic_Unit_Reference
     * @param bool $default_Work_Status_Rule_Set
     * @param bool $inactive
     * @param \StructType\Leave_of_Absence_TypeObjectType[] $applies_to_Leave_Types_Reference
     * @param float $active_Periods_Required_for_Eligibility
     * @param float $minimum_Years_Since_Last_Applicable_Leave
     * @param \StructType\Work_Status_Rule_Row_SubdataType[] $work_Status_Rule_Row_Subdata
     */
    public function __construct($iD = null, $work_Status_Rule_Set_Name = null, $work_Status_Rule_Set_Description = null, array $restricted_to_Academic_Unit_Reference = array(), $default_Work_Status_Rule_Set = null, $inactive = null, array $applies_to_Leave_Types_Reference = array(), $active_Periods_Required_for_Eligibility = null, $minimum_Years_Since_Last_Applicable_Leave = null, array $work_Status_Rule_Row_Subdata = array())
    {
        $this
            ->setID($iD)
            ->setWork_Status_Rule_Set_Name($work_Status_Rule_Set_Name)
            ->setWork_Status_Rule_Set_Description($work_Status_Rule_Set_Description)
            ->setRestricted_to_Academic_Unit_Reference($restricted_to_Academic_Unit_Reference)
            ->setDefault_Work_Status_Rule_Set($default_Work_Status_Rule_Set)
            ->setInactive($inactive)
            ->setApplies_to_Leave_Types_Reference($applies_to_Leave_Types_Reference)
            ->setActive_Periods_Required_for_Eligibility($active_Periods_Required_for_Eligibility)
            ->setMinimum_Years_Since_Last_Applicable_Leave($minimum_Years_Since_Last_Applicable_Leave)
            ->setWork_Status_Rule_Row_Subdata($work_Status_Rule_Row_Subdata);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Set_Name value
     * @return string|null
     */
    public function getWork_Status_Rule_Set_Name()
    {
        return $this->Work_Status_Rule_Set_Name;
    }
    /**
     * Set Work_Status_Rule_Set_Name value
     * @param string $work_Status_Rule_Set_Name
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setWork_Status_Rule_Set_Name($work_Status_Rule_Set_Name = null)
    {
        // validation for constraint: string
        if (!is_null($work_Status_Rule_Set_Name) && !is_string($work_Status_Rule_Set_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Status_Rule_Set_Name, true), gettype($work_Status_Rule_Set_Name)), __LINE__);
        }
        $this->Work_Status_Rule_Set_Name = $work_Status_Rule_Set_Name;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Set_Description value
     * @return string|null
     */
    public function getWork_Status_Rule_Set_Description()
    {
        return $this->Work_Status_Rule_Set_Description;
    }
    /**
     * Set Work_Status_Rule_Set_Description value
     * @param string $work_Status_Rule_Set_Description
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setWork_Status_Rule_Set_Description($work_Status_Rule_Set_Description = null)
    {
        // validation for constraint: string
        if (!is_null($work_Status_Rule_Set_Description) && !is_string($work_Status_Rule_Set_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Status_Rule_Set_Description, true), gettype($work_Status_Rule_Set_Description)), __LINE__);
        }
        $this->Work_Status_Rule_Set_Description = $work_Status_Rule_Set_Description;
        return $this;
    }
    /**
     * Get Restricted_to_Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType[]|null
     */
    public function getRestricted_to_Academic_Unit_Reference()
    {
        return $this->Restricted_to_Academic_Unit_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setRestricted_to_Academic_Unit_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestricted_to_Academic_Unit_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestricted_to_Academic_Unit_ReferenceForArrayConstraintsFromSetRestricted_to_Academic_Unit_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Status_Rule_Set_DataTypeRestricted_to_Academic_Unit_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Status_Rule_Set_DataTypeRestricted_to_Academic_Unit_ReferenceItem instanceof \StructType\Academic_UnitObjectType) {
                $invalidValues[] = is_object($work_Status_Rule_Set_DataTypeRestricted_to_Academic_Unit_ReferenceItem) ? get_class($work_Status_Rule_Set_DataTypeRestricted_to_Academic_Unit_ReferenceItem) : sprintf('%s(%s)', gettype($work_Status_Rule_Set_DataTypeRestricted_to_Academic_Unit_ReferenceItem), var_export($work_Status_Rule_Set_DataTypeRestricted_to_Academic_Unit_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Restricted_to_Academic_Unit_Reference property can only contain items of type \StructType\Academic_UnitObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Restricted_to_Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_UnitObjectType[] $restricted_to_Academic_Unit_Reference
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setRestricted_to_Academic_Unit_Reference(array $restricted_to_Academic_Unit_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($restricted_to_Academic_Unit_ReferenceArrayErrorMessage = self::validateRestricted_to_Academic_Unit_ReferenceForArrayConstraintsFromSetRestricted_to_Academic_Unit_Reference($restricted_to_Academic_Unit_Reference))) {
            throw new \InvalidArgumentException($restricted_to_Academic_Unit_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Restricted_to_Academic_Unit_Reference = $restricted_to_Academic_Unit_Reference;
        return $this;
    }
    /**
     * Add item to Restricted_to_Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_UnitObjectType $item
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function addToRestricted_to_Academic_Unit_Reference(\StructType\Academic_UnitObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_UnitObjectType) {
            throw new \InvalidArgumentException(sprintf('The Restricted_to_Academic_Unit_Reference property can only contain items of type \StructType\Academic_UnitObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Restricted_to_Academic_Unit_Reference[] = $item;
        return $this;
    }
    /**
     * Get Default_Work_Status_Rule_Set value
     * @return bool|null
     */
    public function getDefault_Work_Status_Rule_Set()
    {
        return $this->Default_Work_Status_Rule_Set;
    }
    /**
     * Set Default_Work_Status_Rule_Set value
     * @param bool $default_Work_Status_Rule_Set
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setDefault_Work_Status_Rule_Set($default_Work_Status_Rule_Set = null)
    {
        // validation for constraint: boolean
        if (!is_null($default_Work_Status_Rule_Set) && !is_bool($default_Work_Status_Rule_Set)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default_Work_Status_Rule_Set, true), gettype($default_Work_Status_Rule_Set)), __LINE__);
        }
        $this->Default_Work_Status_Rule_Set = $default_Work_Status_Rule_Set;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Applies_to_Leave_Types_Reference value
     * @return \StructType\Leave_of_Absence_TypeObjectType[]|null
     */
    public function getApplies_to_Leave_Types_Reference()
    {
        return $this->Applies_to_Leave_Types_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setApplies_to_Leave_Types_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplies_to_Leave_Types_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplies_to_Leave_Types_ReferenceForArrayConstraintsFromSetApplies_to_Leave_Types_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Status_Rule_Set_DataTypeApplies_to_Leave_Types_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Status_Rule_Set_DataTypeApplies_to_Leave_Types_ReferenceItem instanceof \StructType\Leave_of_Absence_TypeObjectType) {
                $invalidValues[] = is_object($work_Status_Rule_Set_DataTypeApplies_to_Leave_Types_ReferenceItem) ? get_class($work_Status_Rule_Set_DataTypeApplies_to_Leave_Types_ReferenceItem) : sprintf('%s(%s)', gettype($work_Status_Rule_Set_DataTypeApplies_to_Leave_Types_ReferenceItem), var_export($work_Status_Rule_Set_DataTypeApplies_to_Leave_Types_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Applies_to_Leave_Types_Reference property can only contain items of type \StructType\Leave_of_Absence_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Applies_to_Leave_Types_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_of_Absence_TypeObjectType[] $applies_to_Leave_Types_Reference
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setApplies_to_Leave_Types_Reference(array $applies_to_Leave_Types_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($applies_to_Leave_Types_ReferenceArrayErrorMessage = self::validateApplies_to_Leave_Types_ReferenceForArrayConstraintsFromSetApplies_to_Leave_Types_Reference($applies_to_Leave_Types_Reference))) {
            throw new \InvalidArgumentException($applies_to_Leave_Types_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Applies_to_Leave_Types_Reference = $applies_to_Leave_Types_Reference;
        return $this;
    }
    /**
     * Add item to Applies_to_Leave_Types_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_of_Absence_TypeObjectType $item
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function addToApplies_to_Leave_Types_Reference(\StructType\Leave_of_Absence_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Leave_of_Absence_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Applies_to_Leave_Types_Reference property can only contain items of type \StructType\Leave_of_Absence_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Applies_to_Leave_Types_Reference[] = $item;
        return $this;
    }
    /**
     * Get Active_Periods_Required_for_Eligibility value
     * @return float|null
     */
    public function getActive_Periods_Required_for_Eligibility()
    {
        return $this->Active_Periods_Required_for_Eligibility;
    }
    /**
     * Set Active_Periods_Required_for_Eligibility value
     * @param float $active_Periods_Required_for_Eligibility
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setActive_Periods_Required_for_Eligibility($active_Periods_Required_for_Eligibility = null)
    {
        // validation for constraint: float
        if (!is_null($active_Periods_Required_for_Eligibility) && !(is_float($active_Periods_Required_for_Eligibility) || is_numeric($active_Periods_Required_for_Eligibility))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($active_Periods_Required_for_Eligibility, true), gettype($active_Periods_Required_for_Eligibility)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($active_Periods_Required_for_Eligibility) && mb_strlen(mb_substr($active_Periods_Required_for_Eligibility, mb_strpos($active_Periods_Required_for_Eligibility, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($active_Periods_Required_for_Eligibility, true), mb_strlen(mb_substr($active_Periods_Required_for_Eligibility, mb_strpos($active_Periods_Required_for_Eligibility, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($active_Periods_Required_for_Eligibility) && $active_Periods_Required_for_Eligibility < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($active_Periods_Required_for_Eligibility, true)), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($active_Periods_Required_for_Eligibility) && mb_strlen(preg_replace('/(\D)/', '', $active_Periods_Required_for_Eligibility)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($active_Periods_Required_for_Eligibility, true), mb_strlen(preg_replace('/(\D)/', '', $active_Periods_Required_for_Eligibility))), __LINE__);
        }
        $this->Active_Periods_Required_for_Eligibility = $active_Periods_Required_for_Eligibility;
        return $this;
    }
    /**
     * Get Minimum_Years_Since_Last_Applicable_Leave value
     * @return float|null
     */
    public function getMinimum_Years_Since_Last_Applicable_Leave()
    {
        return $this->Minimum_Years_Since_Last_Applicable_Leave;
    }
    /**
     * Set Minimum_Years_Since_Last_Applicable_Leave value
     * @param float $minimum_Years_Since_Last_Applicable_Leave
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setMinimum_Years_Since_Last_Applicable_Leave($minimum_Years_Since_Last_Applicable_Leave = null)
    {
        // validation for constraint: float
        if (!is_null($minimum_Years_Since_Last_Applicable_Leave) && !(is_float($minimum_Years_Since_Last_Applicable_Leave) || is_numeric($minimum_Years_Since_Last_Applicable_Leave))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimum_Years_Since_Last_Applicable_Leave, true), gettype($minimum_Years_Since_Last_Applicable_Leave)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($minimum_Years_Since_Last_Applicable_Leave) && mb_strlen(mb_substr($minimum_Years_Since_Last_Applicable_Leave, mb_strpos($minimum_Years_Since_Last_Applicable_Leave, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($minimum_Years_Since_Last_Applicable_Leave, true), mb_strlen(mb_substr($minimum_Years_Since_Last_Applicable_Leave, mb_strpos($minimum_Years_Since_Last_Applicable_Leave, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minimum_Years_Since_Last_Applicable_Leave) && $minimum_Years_Since_Last_Applicable_Leave < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minimum_Years_Since_Last_Applicable_Leave, true)), __LINE__);
        }
        // validation for constraint: totalDigits(4)
        if (!is_null($minimum_Years_Since_Last_Applicable_Leave) && mb_strlen(preg_replace('/(\D)/', '', $minimum_Years_Since_Last_Applicable_Leave)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 4 digits, "%d" given', var_export($minimum_Years_Since_Last_Applicable_Leave, true), mb_strlen(preg_replace('/(\D)/', '', $minimum_Years_Since_Last_Applicable_Leave))), __LINE__);
        }
        $this->Minimum_Years_Since_Last_Applicable_Leave = $minimum_Years_Since_Last_Applicable_Leave;
        return $this;
    }
    /**
     * Get Work_Status_Rule_Row_Subdata value
     * @return \StructType\Work_Status_Rule_Row_SubdataType[]|null
     */
    public function getWork_Status_Rule_Row_Subdata()
    {
        return $this->Work_Status_Rule_Row_Subdata;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Status_Rule_Row_Subdata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Status_Rule_Row_Subdata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Status_Rule_Row_SubdataForArrayConstraintsFromSetWork_Status_Rule_Row_Subdata(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Status_Rule_Set_DataTypeWork_Status_Rule_Row_SubdataItem) {
            // validation for constraint: itemType
            if (!$work_Status_Rule_Set_DataTypeWork_Status_Rule_Row_SubdataItem instanceof \StructType\Work_Status_Rule_Row_SubdataType) {
                $invalidValues[] = is_object($work_Status_Rule_Set_DataTypeWork_Status_Rule_Row_SubdataItem) ? get_class($work_Status_Rule_Set_DataTypeWork_Status_Rule_Row_SubdataItem) : sprintf('%s(%s)', gettype($work_Status_Rule_Set_DataTypeWork_Status_Rule_Row_SubdataItem), var_export($work_Status_Rule_Set_DataTypeWork_Status_Rule_Row_SubdataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Status_Rule_Row_Subdata property can only contain items of type \StructType\Work_Status_Rule_Row_SubdataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Status_Rule_Row_Subdata value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Status_Rule_Row_SubdataType[] $work_Status_Rule_Row_Subdata
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function setWork_Status_Rule_Row_Subdata(array $work_Status_Rule_Row_Subdata = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Status_Rule_Row_SubdataArrayErrorMessage = self::validateWork_Status_Rule_Row_SubdataForArrayConstraintsFromSetWork_Status_Rule_Row_Subdata($work_Status_Rule_Row_Subdata))) {
            throw new \InvalidArgumentException($work_Status_Rule_Row_SubdataArrayErrorMessage, __LINE__);
        }
        $this->Work_Status_Rule_Row_Subdata = $work_Status_Rule_Row_Subdata;
        return $this;
    }
    /**
     * Add item to Work_Status_Rule_Row_Subdata value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Status_Rule_Row_SubdataType $item
     * @return \StructType\Work_Status_Rule_Set_DataType
     */
    public function addToWork_Status_Rule_Row_Subdata(\StructType\Work_Status_Rule_Row_SubdataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Status_Rule_Row_SubdataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Status_Rule_Row_Subdata property can only contain items of type \StructType\Work_Status_Rule_Row_SubdataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Status_Rule_Row_Subdata[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Status_Rule_Set_DataType
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
