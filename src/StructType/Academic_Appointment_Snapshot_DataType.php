<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointment_Snapshot_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the specifics for the academic appointment being added or updated. An academic appointment tracks an academic worker’s time at a university or college.
 * @subpackage Structs
 */
class Academic_Appointment_Snapshot_DataType extends AbstractStructBase
{
    /**
     * The Academic_Appointment_Track_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the academic appointment thread being updated. Required on Update Academic Appointment events. Leave blank on Add Academic Appointment events.
     * - minOccurs: 0
     * @var \StructType\Academic_Appointment_TrackObjectType
     */
    public $Academic_Appointment_Track_Reference;
    /**
     * The Appointment_Track_ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for academic appointment track.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Appointment_Track_ID;
    /**
     * The Track_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the academic track type.
     * - minOccurs: 0
     * @var \StructType\Academic_Track_TypeObjectType
     */
    public $Track_Type_Reference;
    /**
     * The Appointment_Identifier_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates the type of appointment, such as primary, joint, or dual. Workday recommends only 1 primary active academic appointment.
     * @var \StructType\Academic_Appointment_IdentifierObjectType
     */
    public $Appointment_Identifier_Reference;
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Appointee's filled position that's associated with an academic appointment. Can't use on the Hire subprocess, because the position isn't filled yet.
     * - minOccurs: 0
     * @var \StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the academic unit.
     * @var \StructType\Academic_UnitObjectType
     */
    public $Academic_Unit_Reference;
    /**
     * The Roster_Percent
     * Meta information extracted from the WSDL
     * - documentation: Percent of the academic appointee's total time on an academic appointment. Between 0.00 and 1.00. May be blank or zero for things like centers and institutes.
     * - base: xsd:decimal
     * - fractionDigits: 4
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 7
     * @var float
     */
    public $Roster_Percent;
    /**
     * The Appointment_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when the appointment becomes effective or takes effect.
     * - maxOccurs: 1
     * @var string
     */
    public $Appointment_Start_Date;
    /**
     * The Appointment_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when the academic appointment is intended to end. To end academic appointments, you must complete an End Academic Appointment Track event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Appointment_End_Date;
    /**
     * The Track_Start_Date_Override
     * Meta information extracted from the WSDL
     * - documentation: Override for academic appointment track start date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Track_Start_Date_Override;
    /**
     * The Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the academic rank.
     * - minOccurs: 0
     * @var \StructType\Academic_RankObjectType
     */
    public $Rank_Reference;
    /**
     * The Named_Professorship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the named professorship.
     * - minOccurs: 0
     * @var \StructType\Named_ProfessorshipObjectType
     */
    public $Named_Professorship_Reference;
    /**
     * The Appointment_Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the appointment specialty.
     * - minOccurs: 0
     * @var \StructType\Appointment_SpecialtyObjectType
     */
    public $Appointment_Specialty_Reference;
    /**
     * The Constructed_Title
     * Meta information extracted from the WSDL
     * - documentation: Do not enter, Constructed Title will be defaulted and used if all fields pertaining to rule set for track is supplied.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Constructed_Title;
    /**
     * The Appointment_Title
     * Meta information extracted from the WSDL
     * - documentation: Title for the academic appointment.
     * - maxOccurs: 1
     * @var string
     */
    public $Appointment_Title;
    /**
     * The Adjusted_Title_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when the academic appointment title was designated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Adjusted_Title_Start_Date;
    /**
     * The Academic_Review_Date
     * Meta information extracted from the WSDL
     * - documentation: Manually maintained date that acts as a reminder to review the academic for promotion. Only applies when the Appointment’s Track includes a Promotion program. On an update, the existing value will be retained if not sent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Academic_Review_Date;
    /**
     * The Related_Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the related academic unit.
     * - minOccurs: 0
     * @var \StructType\Academic_UnitObjectType
     */
    public $Related_Academic_Unit_Reference;
    /**
     * The Tenure_Home_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the academic unit for the tenure track appointment.
     * - minOccurs: 0
     * @var \StructType\Academic_UnitObjectType
     */
    public $Tenure_Home_Reference;
    /**
     * The Tenure_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the tenure status.
     * - minOccurs: 0
     * @var \StructType\Academic_Tenure_StatusObjectType
     */
    public $Tenure_Status_Reference;
    /**
     * The Probationary_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when the tenure probationary period ends.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Probationary_End_Date;
    /**
     * The Tenure_Award_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when the academic appointee was awarded tenure.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Tenure_Award_Date;
    /**
     * Constructor method for Academic_Appointment_Snapshot_DataType
     * @uses Academic_Appointment_Snapshot_DataType::setAcademic_Appointment_Track_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setAppointment_Track_ID()
     * @uses Academic_Appointment_Snapshot_DataType::setTrack_Type_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setAppointment_Identifier_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setPosition_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setAcademic_Unit_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setRoster_Percent()
     * @uses Academic_Appointment_Snapshot_DataType::setAppointment_Start_Date()
     * @uses Academic_Appointment_Snapshot_DataType::setAppointment_End_Date()
     * @uses Academic_Appointment_Snapshot_DataType::setTrack_Start_Date_Override()
     * @uses Academic_Appointment_Snapshot_DataType::setRank_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setNamed_Professorship_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setAppointment_Specialty_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setConstructed_Title()
     * @uses Academic_Appointment_Snapshot_DataType::setAppointment_Title()
     * @uses Academic_Appointment_Snapshot_DataType::setAdjusted_Title_Start_Date()
     * @uses Academic_Appointment_Snapshot_DataType::setAcademic_Review_Date()
     * @uses Academic_Appointment_Snapshot_DataType::setRelated_Academic_Unit_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setTenure_Home_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setTenure_Status_Reference()
     * @uses Academic_Appointment_Snapshot_DataType::setProbationary_End_Date()
     * @uses Academic_Appointment_Snapshot_DataType::setTenure_Award_Date()
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @param string $appointment_Track_ID
     * @param \StructType\Academic_Track_TypeObjectType $track_Type_Reference
     * @param \StructType\Academic_Appointment_IdentifierObjectType $appointment_Identifier_Reference
     * @param \StructType\Position_ElementObjectType $position_Reference
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @param float $roster_Percent
     * @param string $appointment_Start_Date
     * @param string $appointment_End_Date
     * @param string $track_Start_Date_Override
     * @param \StructType\Academic_RankObjectType $rank_Reference
     * @param \StructType\Named_ProfessorshipObjectType $named_Professorship_Reference
     * @param \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @param string $constructed_Title
     * @param string $appointment_Title
     * @param string $adjusted_Title_Start_Date
     * @param string $academic_Review_Date
     * @param \StructType\Academic_UnitObjectType $related_Academic_Unit_Reference
     * @param \StructType\Academic_UnitObjectType $tenure_Home_Reference
     * @param \StructType\Academic_Tenure_StatusObjectType $tenure_Status_Reference
     * @param string $probationary_End_Date
     * @param string $tenure_Award_Date
     */
    public function __construct(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null, $appointment_Track_ID = null, \StructType\Academic_Track_TypeObjectType $track_Type_Reference = null, \StructType\Academic_Appointment_IdentifierObjectType $appointment_Identifier_Reference = null, \StructType\Position_ElementObjectType $position_Reference = null, \StructType\Academic_UnitObjectType $academic_Unit_Reference = null, $roster_Percent = null, $appointment_Start_Date = null, $appointment_End_Date = null, $track_Start_Date_Override = null, \StructType\Academic_RankObjectType $rank_Reference = null, \StructType\Named_ProfessorshipObjectType $named_Professorship_Reference = null, \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null, $constructed_Title = null, $appointment_Title = null, $adjusted_Title_Start_Date = null, $academic_Review_Date = null, \StructType\Academic_UnitObjectType $related_Academic_Unit_Reference = null, \StructType\Academic_UnitObjectType $tenure_Home_Reference = null, \StructType\Academic_Tenure_StatusObjectType $tenure_Status_Reference = null, $probationary_End_Date = null, $tenure_Award_Date = null)
    {
        $this
            ->setAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference)
            ->setAppointment_Track_ID($appointment_Track_ID)
            ->setTrack_Type_Reference($track_Type_Reference)
            ->setAppointment_Identifier_Reference($appointment_Identifier_Reference)
            ->setPosition_Reference($position_Reference)
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setRoster_Percent($roster_Percent)
            ->setAppointment_Start_Date($appointment_Start_Date)
            ->setAppointment_End_Date($appointment_End_Date)
            ->setTrack_Start_Date_Override($track_Start_Date_Override)
            ->setRank_Reference($rank_Reference)
            ->setNamed_Professorship_Reference($named_Professorship_Reference)
            ->setAppointment_Specialty_Reference($appointment_Specialty_Reference)
            ->setConstructed_Title($constructed_Title)
            ->setAppointment_Title($appointment_Title)
            ->setAdjusted_Title_Start_Date($adjusted_Title_Start_Date)
            ->setAcademic_Review_Date($academic_Review_Date)
            ->setRelated_Academic_Unit_Reference($related_Academic_Unit_Reference)
            ->setTenure_Home_Reference($tenure_Home_Reference)
            ->setTenure_Status_Reference($tenure_Status_Reference)
            ->setProbationary_End_Date($probationary_End_Date)
            ->setTenure_Award_Date($tenure_Award_Date);
    }
    /**
     * Get Academic_Appointment_Track_Reference value
     * @return \StructType\Academic_Appointment_TrackObjectType|null
     */
    public function getAcademic_Appointment_Track_Reference()
    {
        return $this->Academic_Appointment_Track_Reference;
    }
    /**
     * Set Academic_Appointment_Track_Reference value
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAcademic_Appointment_Track_Reference(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null)
    {
        $this->Academic_Appointment_Track_Reference = $academic_Appointment_Track_Reference;
        return $this;
    }
    /**
     * Get Appointment_Track_ID value
     * @return string|null
     */
    public function getAppointment_Track_ID()
    {
        return $this->Appointment_Track_ID;
    }
    /**
     * Set Appointment_Track_ID value
     * @param string $appointment_Track_ID
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAppointment_Track_ID($appointment_Track_ID = null)
    {
        // validation for constraint: string
        if (!is_null($appointment_Track_ID) && !is_string($appointment_Track_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appointment_Track_ID, true), gettype($appointment_Track_ID)), __LINE__);
        }
        $this->Appointment_Track_ID = $appointment_Track_ID;
        return $this;
    }
    /**
     * Get Track_Type_Reference value
     * @return \StructType\Academic_Track_TypeObjectType|null
     */
    public function getTrack_Type_Reference()
    {
        return $this->Track_Type_Reference;
    }
    /**
     * Set Track_Type_Reference value
     * @param \StructType\Academic_Track_TypeObjectType $track_Type_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setTrack_Type_Reference(\StructType\Academic_Track_TypeObjectType $track_Type_Reference = null)
    {
        $this->Track_Type_Reference = $track_Type_Reference;
        return $this;
    }
    /**
     * Get Appointment_Identifier_Reference value
     * @return \StructType\Academic_Appointment_IdentifierObjectType|null
     */
    public function getAppointment_Identifier_Reference()
    {
        return $this->Appointment_Identifier_Reference;
    }
    /**
     * Set Appointment_Identifier_Reference value
     * @param \StructType\Academic_Appointment_IdentifierObjectType $appointment_Identifier_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAppointment_Identifier_Reference(\StructType\Academic_Appointment_IdentifierObjectType $appointment_Identifier_Reference = null)
    {
        $this->Appointment_Identifier_Reference = $appointment_Identifier_Reference;
        return $this;
    }
    /**
     * Get Position_Reference value
     * @return \StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \StructType\Position_ElementObjectType $position_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setPosition_Reference(\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * Set Academic_Unit_Reference value
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAcademic_Unit_Reference(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null)
    {
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Get Roster_Percent value
     * @return float|null
     */
    public function getRoster_Percent()
    {
        return $this->Roster_Percent;
    }
    /**
     * Set Roster_Percent value
     * @param float $roster_Percent
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setRoster_Percent($roster_Percent = null)
    {
        // validation for constraint: float
        if (!is_null($roster_Percent) && !(is_float($roster_Percent) || is_numeric($roster_Percent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($roster_Percent, true), gettype($roster_Percent)), __LINE__);
        }
        // validation for constraint: fractionDigits(4)
        if (!is_null($roster_Percent) && mb_strlen(mb_substr($roster_Percent, mb_strpos($roster_Percent, '.') + 1)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 4 fraction digits, %d given', var_export($roster_Percent, true), mb_strlen(mb_substr($roster_Percent, mb_strpos($roster_Percent, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($roster_Percent) && $roster_Percent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($roster_Percent, true)), __LINE__);
        }
        // validation for constraint: totalDigits(7)
        if (!is_null($roster_Percent) && mb_strlen(preg_replace('/(\D)/', '', $roster_Percent)) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 7 digits, "%d" given', var_export($roster_Percent, true), mb_strlen(preg_replace('/(\D)/', '', $roster_Percent))), __LINE__);
        }
        $this->Roster_Percent = $roster_Percent;
        return $this;
    }
    /**
     * Get Appointment_Start_Date value
     * @return string|null
     */
    public function getAppointment_Start_Date()
    {
        return $this->Appointment_Start_Date;
    }
    /**
     * Set Appointment_Start_Date value
     * @param string $appointment_Start_Date
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAppointment_Start_Date($appointment_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($appointment_Start_Date) && !is_string($appointment_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appointment_Start_Date, true), gettype($appointment_Start_Date)), __LINE__);
        }
        $this->Appointment_Start_Date = $appointment_Start_Date;
        return $this;
    }
    /**
     * Get Appointment_End_Date value
     * @return string|null
     */
    public function getAppointment_End_Date()
    {
        return $this->Appointment_End_Date;
    }
    /**
     * Set Appointment_End_Date value
     * @param string $appointment_End_Date
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAppointment_End_Date($appointment_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($appointment_End_Date) && !is_string($appointment_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appointment_End_Date, true), gettype($appointment_End_Date)), __LINE__);
        }
        $this->Appointment_End_Date = $appointment_End_Date;
        return $this;
    }
    /**
     * Get Track_Start_Date_Override value
     * @return string|null
     */
    public function getTrack_Start_Date_Override()
    {
        return $this->Track_Start_Date_Override;
    }
    /**
     * Set Track_Start_Date_Override value
     * @param string $track_Start_Date_Override
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setTrack_Start_Date_Override($track_Start_Date_Override = null)
    {
        // validation for constraint: string
        if (!is_null($track_Start_Date_Override) && !is_string($track_Start_Date_Override)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($track_Start_Date_Override, true), gettype($track_Start_Date_Override)), __LINE__);
        }
        $this->Track_Start_Date_Override = $track_Start_Date_Override;
        return $this;
    }
    /**
     * Get Rank_Reference value
     * @return \StructType\Academic_RankObjectType|null
     */
    public function getRank_Reference()
    {
        return $this->Rank_Reference;
    }
    /**
     * Set Rank_Reference value
     * @param \StructType\Academic_RankObjectType $rank_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setRank_Reference(\StructType\Academic_RankObjectType $rank_Reference = null)
    {
        $this->Rank_Reference = $rank_Reference;
        return $this;
    }
    /**
     * Get Named_Professorship_Reference value
     * @return \StructType\Named_ProfessorshipObjectType|null
     */
    public function getNamed_Professorship_Reference()
    {
        return $this->Named_Professorship_Reference;
    }
    /**
     * Set Named_Professorship_Reference value
     * @param \StructType\Named_ProfessorshipObjectType $named_Professorship_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setNamed_Professorship_Reference(\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference = null)
    {
        $this->Named_Professorship_Reference = $named_Professorship_Reference;
        return $this;
    }
    /**
     * Get Appointment_Specialty_Reference value
     * @return \StructType\Appointment_SpecialtyObjectType|null
     */
    public function getAppointment_Specialty_Reference()
    {
        return $this->Appointment_Specialty_Reference;
    }
    /**
     * Set Appointment_Specialty_Reference value
     * @param \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAppointment_Specialty_Reference(\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null)
    {
        $this->Appointment_Specialty_Reference = $appointment_Specialty_Reference;
        return $this;
    }
    /**
     * Get Constructed_Title value
     * @return string|null
     */
    public function getConstructed_Title()
    {
        return $this->Constructed_Title;
    }
    /**
     * Set Constructed_Title value
     * @param string $constructed_Title
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setConstructed_Title($constructed_Title = null)
    {
        // validation for constraint: string
        if (!is_null($constructed_Title) && !is_string($constructed_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($constructed_Title, true), gettype($constructed_Title)), __LINE__);
        }
        $this->Constructed_Title = $constructed_Title;
        return $this;
    }
    /**
     * Get Appointment_Title value
     * @return string|null
     */
    public function getAppointment_Title()
    {
        return $this->Appointment_Title;
    }
    /**
     * Set Appointment_Title value
     * @param string $appointment_Title
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAppointment_Title($appointment_Title = null)
    {
        // validation for constraint: string
        if (!is_null($appointment_Title) && !is_string($appointment_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appointment_Title, true), gettype($appointment_Title)), __LINE__);
        }
        $this->Appointment_Title = $appointment_Title;
        return $this;
    }
    /**
     * Get Adjusted_Title_Start_Date value
     * @return string|null
     */
    public function getAdjusted_Title_Start_Date()
    {
        return $this->Adjusted_Title_Start_Date;
    }
    /**
     * Set Adjusted_Title_Start_Date value
     * @param string $adjusted_Title_Start_Date
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAdjusted_Title_Start_Date($adjusted_Title_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($adjusted_Title_Start_Date) && !is_string($adjusted_Title_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adjusted_Title_Start_Date, true), gettype($adjusted_Title_Start_Date)), __LINE__);
        }
        $this->Adjusted_Title_Start_Date = $adjusted_Title_Start_Date;
        return $this;
    }
    /**
     * Get Academic_Review_Date value
     * @return string|null
     */
    public function getAcademic_Review_Date()
    {
        return $this->Academic_Review_Date;
    }
    /**
     * Set Academic_Review_Date value
     * @param string $academic_Review_Date
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setAcademic_Review_Date($academic_Review_Date = null)
    {
        // validation for constraint: string
        if (!is_null($academic_Review_Date) && !is_string($academic_Review_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academic_Review_Date, true), gettype($academic_Review_Date)), __LINE__);
        }
        $this->Academic_Review_Date = $academic_Review_Date;
        return $this;
    }
    /**
     * Get Related_Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getRelated_Academic_Unit_Reference()
    {
        return $this->Related_Academic_Unit_Reference;
    }
    /**
     * Set Related_Academic_Unit_Reference value
     * @param \StructType\Academic_UnitObjectType $related_Academic_Unit_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setRelated_Academic_Unit_Reference(\StructType\Academic_UnitObjectType $related_Academic_Unit_Reference = null)
    {
        $this->Related_Academic_Unit_Reference = $related_Academic_Unit_Reference;
        return $this;
    }
    /**
     * Get Tenure_Home_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getTenure_Home_Reference()
    {
        return $this->Tenure_Home_Reference;
    }
    /**
     * Set Tenure_Home_Reference value
     * @param \StructType\Academic_UnitObjectType $tenure_Home_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setTenure_Home_Reference(\StructType\Academic_UnitObjectType $tenure_Home_Reference = null)
    {
        $this->Tenure_Home_Reference = $tenure_Home_Reference;
        return $this;
    }
    /**
     * Get Tenure_Status_Reference value
     * @return \StructType\Academic_Tenure_StatusObjectType|null
     */
    public function getTenure_Status_Reference()
    {
        return $this->Tenure_Status_Reference;
    }
    /**
     * Set Tenure_Status_Reference value
     * @param \StructType\Academic_Tenure_StatusObjectType $tenure_Status_Reference
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setTenure_Status_Reference(\StructType\Academic_Tenure_StatusObjectType $tenure_Status_Reference = null)
    {
        $this->Tenure_Status_Reference = $tenure_Status_Reference;
        return $this;
    }
    /**
     * Get Probationary_End_Date value
     * @return string|null
     */
    public function getProbationary_End_Date()
    {
        return $this->Probationary_End_Date;
    }
    /**
     * Set Probationary_End_Date value
     * @param string $probationary_End_Date
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setProbationary_End_Date($probationary_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($probationary_End_Date) && !is_string($probationary_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($probationary_End_Date, true), gettype($probationary_End_Date)), __LINE__);
        }
        $this->Probationary_End_Date = $probationary_End_Date;
        return $this;
    }
    /**
     * Get Tenure_Award_Date value
     * @return string|null
     */
    public function getTenure_Award_Date()
    {
        return $this->Tenure_Award_Date;
    }
    /**
     * Set Tenure_Award_Date value
     * @param string $tenure_Award_Date
     * @return \StructType\Academic_Appointment_Snapshot_DataType
     */
    public function setTenure_Award_Date($tenure_Award_Date = null)
    {
        // validation for constraint: string
        if (!is_null($tenure_Award_Date) && !is_string($tenure_Award_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tenure_Award_Date, true), gettype($tenure_Award_Date)), __LINE__);
        }
        $this->Tenure_Award_Date = $tenure_Award_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Appointment_Snapshot_DataType
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
