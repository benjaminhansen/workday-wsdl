<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_Academic_Appointment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Add Academic Appointment business process.
 * @subpackage Structs
 */
class Add_Academic_Appointment_DataType extends AbstractStructBase
{
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the reason for the academic appointment event.
     * @var \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Add_Academic_Affiliate_Status
     * Meta information extracted from the WSDL
     * - documentation: Flag to Add Academic Affiliate Status to Worker
     * - minOccurs: 0
     * @var bool
     */
    public $Add_Academic_Affiliate_Status;
    /**
     * The Academic_Appointee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the person this academic appointment is for.
     * - choice: Academic_Appointee_Reference | Create_Academic_Affiliate_Data
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType
     */
    public $Academic_Appointee_Reference;
    /**
     * The Create_Academic_Affiliate_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for a new Academic Affiliate if an affiliate is to be created as part of the appointment.
     * - choice: Academic_Appointee_Reference | Create_Academic_Affiliate_Data
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType
     */
    public $Create_Academic_Affiliate_Data;
    /**
     * The Academic_Appointment_Data
     * @var \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType
     */
    public $Academic_Appointment_Data;
    /**
     * The Create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType
     */
    public $Create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate;
    /**
     * The Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType[]
     */
    public $Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate;
    /**
     * The Manage_Education_Sub_Business_Process_for_Academic_Affiliate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType[]
     */
    public $Manage_Education_Sub_Business_Process_for_Academic_Affiliate;
    /**
     * The Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType[]
     */
    public $Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate;
    /**
     * Constructor method for Add_Academic_Appointment_DataType
     * @uses Add_Academic_Appointment_DataType::setReason_Reference()
     * @uses Add_Academic_Appointment_DataType::setAdd_Academic_Affiliate_Status()
     * @uses Add_Academic_Appointment_DataType::setAcademic_Appointee_Reference()
     * @uses Add_Academic_Appointment_DataType::setCreate_Academic_Affiliate_Data()
     * @uses Add_Academic_Appointment_DataType::setAcademic_Appointment_Data()
     * @uses Add_Academic_Appointment_DataType::setCreate_Workday_Account_Sub_Business_Process_for_Academic_Affiliate()
     * @uses Add_Academic_Appointment_DataType::setManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate()
     * @uses Add_Academic_Appointment_DataType::setManage_Education_Sub_Business_Process_for_Academic_Affiliate()
     * @uses Add_Academic_Appointment_DataType::setManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate()
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @param bool $add_Academic_Affiliate_Status
     * @param \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @param \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType $create_Academic_Affiliate_Data
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data
     * @param \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType $create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate
     * @param \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType[] $manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate
     * @param \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType[] $manage_Education_Sub_Business_Process_for_Academic_Affiliate
     * @param \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType[] $manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate
     */
    public function __construct(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null, $add_Academic_Affiliate_Status = null, \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null, \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType $create_Academic_Affiliate_Data = null, \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data = null, \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType $create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate = null, array $manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate = array(), array $manage_Education_Sub_Business_Process_for_Academic_Affiliate = array(), array $manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate = array())
    {
        $this
            ->setReason_Reference($reason_Reference)
            ->setAdd_Academic_Affiliate_Status($add_Academic_Affiliate_Status)
            ->setAcademic_Appointee_Reference($academic_Appointee_Reference)
            ->setCreate_Academic_Affiliate_Data($create_Academic_Affiliate_Data)
            ->setAcademic_Appointment_Data($academic_Appointment_Data)
            ->setCreate_Workday_Account_Sub_Business_Process_for_Academic_Affiliate($create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate)
            ->setManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate($manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate)
            ->setManage_Education_Sub_Business_Process_for_Academic_Affiliate($manage_Education_Sub_Business_Process_for_Academic_Affiliate)
            ->setManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate($manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate);
    }
    /**
     * Get Reason_Reference value
     * @return \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType|null
     */
    public function getReason_Reference()
    {
        return $this->Reason_Reference;
    }
    /**
     * Set Reason_Reference value
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setReason_Reference(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
        return $this;
    }
    /**
     * Get Add_Academic_Affiliate_Status value
     * @return bool|null
     */
    public function getAdd_Academic_Affiliate_Status()
    {
        return $this->Add_Academic_Affiliate_Status;
    }
    /**
     * Set Add_Academic_Affiliate_Status value
     * @param bool $add_Academic_Affiliate_Status
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setAdd_Academic_Affiliate_Status($add_Academic_Affiliate_Status = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Academic_Affiliate_Status) && !is_bool($add_Academic_Affiliate_Status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Academic_Affiliate_Status, true), gettype($add_Academic_Affiliate_Status)), __LINE__);
        }
        $this->Add_Academic_Affiliate_Status = $add_Academic_Affiliate_Status;
        return $this;
    }
    /**
     * Get Academic_Appointee_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType|null
     */
    public function getAcademic_Appointee_Reference()
    {
        return isset($this->Academic_Appointee_Reference) ? $this->Academic_Appointee_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAcademic_Appointee_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Appointee_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAcademic_Appointee_ReferenceForChoiceConstraintsFromSetAcademic_Appointee_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Create_Academic_Affiliate_Data',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Academic_Appointee_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Academic_Appointee_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Academic_Appointee_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setAcademic_Appointee_Reference(\WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null)
    {
        // validation for constraint: choice(Academic_Appointee_Reference, Create_Academic_Affiliate_Data)
        if ('' !== ($academic_Appointee_ReferenceChoiceErrorMessage = self::validateAcademic_Appointee_ReferenceForChoiceConstraintsFromSetAcademic_Appointee_Reference($academic_Appointee_Reference))) {
            throw new \InvalidArgumentException($academic_Appointee_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($academic_Appointee_Reference) || (is_array($academic_Appointee_Reference) && empty($academic_Appointee_Reference))) {
            unset($this->Academic_Appointee_Reference);
        } else {
            $this->Academic_Appointee_Reference = $academic_Appointee_Reference;
        }
        return $this;
    }
    /**
     * Get Create_Academic_Affiliate_Data value
     * @return \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType|null
     */
    public function getCreate_Academic_Affiliate_Data()
    {
        return isset($this->Create_Academic_Affiliate_Data) ? $this->Create_Academic_Affiliate_Data : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreate_Academic_Affiliate_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreate_Academic_Affiliate_Data method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreate_Academic_Affiliate_DataForChoiceConstraintsFromSetCreate_Academic_Affiliate_Data($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Academic_Appointee_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Create_Academic_Affiliate_Data can\'t be set as the property %s is already set. Only one property must be set among these properties: Create_Academic_Affiliate_Data, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Create_Academic_Affiliate_Data value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType $create_Academic_Affiliate_Data
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setCreate_Academic_Affiliate_Data(\WorkdayWsdl\\StructType\Create_Academic_Affiliate_DataType $create_Academic_Affiliate_Data = null)
    {
        // validation for constraint: choice(Academic_Appointee_Reference, Create_Academic_Affiliate_Data)
        if ('' !== ($create_Academic_Affiliate_DataChoiceErrorMessage = self::validateCreate_Academic_Affiliate_DataForChoiceConstraintsFromSetCreate_Academic_Affiliate_Data($create_Academic_Affiliate_Data))) {
            throw new \InvalidArgumentException($create_Academic_Affiliate_DataChoiceErrorMessage, __LINE__);
        }
        if (is_null($create_Academic_Affiliate_Data) || (is_array($create_Academic_Affiliate_Data) && empty($create_Academic_Affiliate_Data))) {
            unset($this->Create_Academic_Affiliate_Data);
        } else {
            $this->Create_Academic_Affiliate_Data = $create_Academic_Affiliate_Data;
        }
        return $this;
    }
    /**
     * Get Academic_Appointment_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType|null
     */
    public function getAcademic_Appointment_Data()
    {
        return $this->Academic_Appointment_Data;
    }
    /**
     * Set Academic_Appointment_Data value
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setAcademic_Appointment_Data(\WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data = null)
    {
        $this->Academic_Appointment_Data = $academic_Appointment_Data;
        return $this;
    }
    /**
     * Get Create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate value
     * @return \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType|null
     */
    public function getCreate_Workday_Account_Sub_Business_Process_for_Academic_Affiliate()
    {
        return $this->Create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate;
    }
    /**
     * Set Create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate value
     * @param \WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType $create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setCreate_Workday_Account_Sub_Business_Process_for_Academic_Affiliate(\WorkdayWsdl\\StructType\Create_Workday_Account_Sub_Business_ProcessType $create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate = null)
    {
        $this->Create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate = $create_Workday_Account_Sub_Business_Process_for_Academic_Affiliate;
        return $this;
    }
    /**
     * Get Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate
     * value
     * @return \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType[]|null
     */
    public function getManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate()
    {
        return $this->Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate;
    }
    /**
     * This method is responsible for validating the values passed to the setManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateForArrayConstraintsFromSetManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $add_Academic_Appointment_DataTypeManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateItem) {
            // validation for constraint: itemType
            if (!$add_Academic_Appointment_DataTypeManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateItem instanceof \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType) {
                $invalidValues[] = is_object($add_Academic_Appointment_DataTypeManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateItem) ? get_class($add_Academic_Appointment_DataTypeManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateItem) : sprintf('%s(%s)', gettype($add_Academic_Appointment_DataTypeManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateItem), var_export($add_Academic_Appointment_DataTypeManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate property can only contain items of type \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate
     * value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType[] $manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate(array $manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate = array())
    {
        // validation for constraint: array
        if ('' !== ($manage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateArrayErrorMessage = self::validateManage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateForArrayConstraintsFromSetManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate($manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate))) {
            throw new \InvalidArgumentException($manage_Professional_Affiliation_Sub_Business_Process_for_Academic_AffiliateArrayErrorMessage, __LINE__);
        }
        $this->Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate = $manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate;
        return $this;
    }
    /**
     * Add item to
     * Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate
     * value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType $item
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function addToManage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate(\WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType) {
            throw new \InvalidArgumentException(sprintf('The Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate property can only contain items of type \WorkdayWsdl\\StructType\Manage_Professional_Affiliation_Sub_Business_Process_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manage_Professional_Affiliation_Sub_Business_Process_for_Academic_Affiliate[] = $item;
        return $this;
    }
    /**
     * Get Manage_Education_Sub_Business_Process_for_Academic_Affiliate value
     * @return \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType[]|null
     */
    public function getManage_Education_Sub_Business_Process_for_Academic_Affiliate()
    {
        return $this->Manage_Education_Sub_Business_Process_for_Academic_Affiliate;
    }
    /**
     * This method is responsible for validating the values passed to the setManage_Education_Sub_Business_Process_for_Academic_Affiliate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManage_Education_Sub_Business_Process_for_Academic_Affiliate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManage_Education_Sub_Business_Process_for_Academic_AffiliateForArrayConstraintsFromSetManage_Education_Sub_Business_Process_for_Academic_Affiliate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $add_Academic_Appointment_DataTypeManage_Education_Sub_Business_Process_for_Academic_AffiliateItem) {
            // validation for constraint: itemType
            if (!$add_Academic_Appointment_DataTypeManage_Education_Sub_Business_Process_for_Academic_AffiliateItem instanceof \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType) {
                $invalidValues[] = is_object($add_Academic_Appointment_DataTypeManage_Education_Sub_Business_Process_for_Academic_AffiliateItem) ? get_class($add_Academic_Appointment_DataTypeManage_Education_Sub_Business_Process_for_Academic_AffiliateItem) : sprintf('%s(%s)', gettype($add_Academic_Appointment_DataTypeManage_Education_Sub_Business_Process_for_Academic_AffiliateItem), var_export($add_Academic_Appointment_DataTypeManage_Education_Sub_Business_Process_for_Academic_AffiliateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manage_Education_Sub_Business_Process_for_Academic_Affiliate property can only contain items of type \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manage_Education_Sub_Business_Process_for_Academic_Affiliate value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType[] $manage_Education_Sub_Business_Process_for_Academic_Affiliate
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setManage_Education_Sub_Business_Process_for_Academic_Affiliate(array $manage_Education_Sub_Business_Process_for_Academic_Affiliate = array())
    {
        // validation for constraint: array
        if ('' !== ($manage_Education_Sub_Business_Process_for_Academic_AffiliateArrayErrorMessage = self::validateManage_Education_Sub_Business_Process_for_Academic_AffiliateForArrayConstraintsFromSetManage_Education_Sub_Business_Process_for_Academic_Affiliate($manage_Education_Sub_Business_Process_for_Academic_Affiliate))) {
            throw new \InvalidArgumentException($manage_Education_Sub_Business_Process_for_Academic_AffiliateArrayErrorMessage, __LINE__);
        }
        $this->Manage_Education_Sub_Business_Process_for_Academic_Affiliate = $manage_Education_Sub_Business_Process_for_Academic_Affiliate;
        return $this;
    }
    /**
     * Add item to Manage_Education_Sub_Business_Process_for_Academic_Affiliate value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType $item
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function addToManage_Education_Sub_Business_Process_for_Academic_Affiliate(\WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType) {
            throw new \InvalidArgumentException(sprintf('The Manage_Education_Sub_Business_Process_for_Academic_Affiliate property can only contain items of type \WorkdayWsdl\\StructType\Manage_Education_Sub_Business_Process_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manage_Education_Sub_Business_Process_for_Academic_Affiliate[] = $item;
        return $this;
    }
    /**
     * Get Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate
     * value
     * @return \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType[]|null
     */
    public function getManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate()
    {
        return $this->Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate;
    }
    /**
     * This method is responsible for validating the values passed to the setManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateForArrayConstraintsFromSetManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $add_Academic_Appointment_DataTypeManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateItem) {
            // validation for constraint: itemType
            if (!$add_Academic_Appointment_DataTypeManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateItem instanceof \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType) {
                $invalidValues[] = is_object($add_Academic_Appointment_DataTypeManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateItem) ? get_class($add_Academic_Appointment_DataTypeManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateItem) : sprintf('%s(%s)', gettype($add_Academic_Appointment_DataTypeManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateItem), var_export($add_Academic_Appointment_DataTypeManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate property can only contain items of type \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate
     * value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType[] $manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function setManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate(array $manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate = array())
    {
        // validation for constraint: array
        if ('' !== ($manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateArrayErrorMessage = self::validateManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateForArrayConstraintsFromSetManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate($manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate))) {
            throw new \InvalidArgumentException($manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_AffiliateArrayErrorMessage, __LINE__);
        }
        $this->Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate = $manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate;
        return $this;
    }
    /**
     * Add item to
     * Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType $item
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public function addToManage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate(\WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType) {
            throw new \InvalidArgumentException(sprintf('The Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate property can only contain items of type \WorkdayWsdl\\StructType\Manage_Instructor_Eligibility_Sub_Business_Process_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manage_Instructor_Eligibility_Sub_Business_Process_for_Academic_Affiliate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
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
