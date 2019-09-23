<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Benefit_Election_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The election information for the coverage.
 * @subpackage Structs
 */
class Worker_Benefit_Election_DataType extends AbstractStructBase
{
    /**
     * The Coverage_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that the coverage began for the coverage level, dependents, and beneficiaries (if applicable).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Coverage_Begin_Date;
    /**
     * The Coverage_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that coverage ended for this election.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Coverage_End_Date;
    /**
     * The Election_Coverage_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that coverage began for this election.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Election_Coverage_Begin_Date;
    /**
     * The Original_Coverage_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The first date that coverage began for this election. This is used to track when an employee first elected a coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Coverage_Begin_Date;
    /**
     * The Original_Coverage_Begin_Date_for_Benefit_Coverage_Type
     * Meta information extracted from the WSDL
     * - documentation: The first date that coverage began for this type of coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Coverage_Begin_Date_for_Benefit_Coverage_Type;
    /**
     * The Deduction_Begin_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that the deduction began for this plan.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Deduction_Begin_Date;
    /**
     * The Deduction_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that the deduction ended for plan.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Deduction_End_Date;
    /**
     * The Election_Status
     * Meta information extracted from the WSDL
     * - documentation: The status of the coverage: Current, Prior, or Future
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Election_Status;
    /**
     * The Enrollment_Signature_Date
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date on file for the enrollment signature.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Enrollment_Signature_Date;
    /**
     * The Latest_Enrollment_Signature_Date
     * Meta information extracted from the WSDL
     * - documentation: Returns the Latest Enrollment Signature Date for the plan elected
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Latest_Enrollment_Signature_Date;
    /**
     * The Passive_Enrollment
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date on file for the enrollment signature.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Passive_Enrollment;
    /**
     * The Benefit_Plan_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date on file for the enrollment signature.
     * - minOccurs: 0
     * @var \StructType\Benefit_Plan_Summary_DataType
     */
    public $Benefit_Plan_Summary_Data;
    /**
     * The Original_Plan_Enrollment_Date
     * Meta information extracted from the WSDL
     * - documentation: First time an individual enrolled in the plan of this benefit election, ignoring gaps in coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Plan_Enrollment_Date;
    /**
     * The Original_Benefit_Provider_Enrollment_Date
     * Meta information extracted from the WSDL
     * - documentation: First time an individual enrolled in any plan associated with this provider for this election, ignoring gaps in coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Benefit_Provider_Enrollment_Date;
    /**
     * The Is_Corrected_or_Rescinded
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the Benefit Election is part of an event that has been corrected or rescinded.
     * @var bool
     */
    public $Is_Corrected_or_Rescinded;
    /**
     * Constructor method for Worker_Benefit_Election_DataType
     * @uses Worker_Benefit_Election_DataType::setCoverage_Begin_Date()
     * @uses Worker_Benefit_Election_DataType::setCoverage_End_Date()
     * @uses Worker_Benefit_Election_DataType::setElection_Coverage_Begin_Date()
     * @uses Worker_Benefit_Election_DataType::setOriginal_Coverage_Begin_Date()
     * @uses Worker_Benefit_Election_DataType::setOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type()
     * @uses Worker_Benefit_Election_DataType::setDeduction_Begin_Date()
     * @uses Worker_Benefit_Election_DataType::setDeduction_End_Date()
     * @uses Worker_Benefit_Election_DataType::setElection_Status()
     * @uses Worker_Benefit_Election_DataType::setEnrollment_Signature_Date()
     * @uses Worker_Benefit_Election_DataType::setLatest_Enrollment_Signature_Date()
     * @uses Worker_Benefit_Election_DataType::setPassive_Enrollment()
     * @uses Worker_Benefit_Election_DataType::setBenefit_Plan_Summary_Data()
     * @uses Worker_Benefit_Election_DataType::setOriginal_Plan_Enrollment_Date()
     * @uses Worker_Benefit_Election_DataType::setOriginal_Benefit_Provider_Enrollment_Date()
     * @uses Worker_Benefit_Election_DataType::setIs_Corrected_or_Rescinded()
     * @param string $coverage_Begin_Date
     * @param string $coverage_End_Date
     * @param string $election_Coverage_Begin_Date
     * @param string $original_Coverage_Begin_Date
     * @param string $original_Coverage_Begin_Date_for_Benefit_Coverage_Type
     * @param string $deduction_Begin_Date
     * @param string $deduction_End_Date
     * @param string $election_Status
     * @param string $enrollment_Signature_Date
     * @param string $latest_Enrollment_Signature_Date
     * @param bool $passive_Enrollment
     * @param \StructType\Benefit_Plan_Summary_DataType $benefit_Plan_Summary_Data
     * @param string $original_Plan_Enrollment_Date
     * @param string $original_Benefit_Provider_Enrollment_Date
     * @param bool $is_Corrected_or_Rescinded
     */
    public function __construct($coverage_Begin_Date = null, $coverage_End_Date = null, $election_Coverage_Begin_Date = null, $original_Coverage_Begin_Date = null, $original_Coverage_Begin_Date_for_Benefit_Coverage_Type = null, $deduction_Begin_Date = null, $deduction_End_Date = null, $election_Status = null, $enrollment_Signature_Date = null, $latest_Enrollment_Signature_Date = null, $passive_Enrollment = null, \StructType\Benefit_Plan_Summary_DataType $benefit_Plan_Summary_Data = null, $original_Plan_Enrollment_Date = null, $original_Benefit_Provider_Enrollment_Date = null, $is_Corrected_or_Rescinded = null)
    {
        $this
            ->setCoverage_Begin_Date($coverage_Begin_Date)
            ->setCoverage_End_Date($coverage_End_Date)
            ->setElection_Coverage_Begin_Date($election_Coverage_Begin_Date)
            ->setOriginal_Coverage_Begin_Date($original_Coverage_Begin_Date)
            ->setOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type($original_Coverage_Begin_Date_for_Benefit_Coverage_Type)
            ->setDeduction_Begin_Date($deduction_Begin_Date)
            ->setDeduction_End_Date($deduction_End_Date)
            ->setElection_Status($election_Status)
            ->setEnrollment_Signature_Date($enrollment_Signature_Date)
            ->setLatest_Enrollment_Signature_Date($latest_Enrollment_Signature_Date)
            ->setPassive_Enrollment($passive_Enrollment)
            ->setBenefit_Plan_Summary_Data($benefit_Plan_Summary_Data)
            ->setOriginal_Plan_Enrollment_Date($original_Plan_Enrollment_Date)
            ->setOriginal_Benefit_Provider_Enrollment_Date($original_Benefit_Provider_Enrollment_Date)
            ->setIs_Corrected_or_Rescinded($is_Corrected_or_Rescinded);
    }
    /**
     * Get Coverage_Begin_Date value
     * @return string|null
     */
    public function getCoverage_Begin_Date()
    {
        return $this->Coverage_Begin_Date;
    }
    /**
     * Set Coverage_Begin_Date value
     * @param string $coverage_Begin_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setCoverage_Begin_Date($coverage_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($coverage_Begin_Date) && !is_string($coverage_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coverage_Begin_Date, true), gettype($coverage_Begin_Date)), __LINE__);
        }
        $this->Coverage_Begin_Date = $coverage_Begin_Date;
        return $this;
    }
    /**
     * Get Coverage_End_Date value
     * @return string|null
     */
    public function getCoverage_End_Date()
    {
        return $this->Coverage_End_Date;
    }
    /**
     * Set Coverage_End_Date value
     * @param string $coverage_End_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setCoverage_End_Date($coverage_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($coverage_End_Date) && !is_string($coverage_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coverage_End_Date, true), gettype($coverage_End_Date)), __LINE__);
        }
        $this->Coverage_End_Date = $coverage_End_Date;
        return $this;
    }
    /**
     * Get Election_Coverage_Begin_Date value
     * @return string|null
     */
    public function getElection_Coverage_Begin_Date()
    {
        return $this->Election_Coverage_Begin_Date;
    }
    /**
     * Set Election_Coverage_Begin_Date value
     * @param string $election_Coverage_Begin_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setElection_Coverage_Begin_Date($election_Coverage_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($election_Coverage_Begin_Date) && !is_string($election_Coverage_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($election_Coverage_Begin_Date, true), gettype($election_Coverage_Begin_Date)), __LINE__);
        }
        $this->Election_Coverage_Begin_Date = $election_Coverage_Begin_Date;
        return $this;
    }
    /**
     * Get Original_Coverage_Begin_Date value
     * @return string|null
     */
    public function getOriginal_Coverage_Begin_Date()
    {
        return $this->Original_Coverage_Begin_Date;
    }
    /**
     * Set Original_Coverage_Begin_Date value
     * @param string $original_Coverage_Begin_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setOriginal_Coverage_Begin_Date($original_Coverage_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($original_Coverage_Begin_Date) && !is_string($original_Coverage_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Coverage_Begin_Date, true), gettype($original_Coverage_Begin_Date)), __LINE__);
        }
        $this->Original_Coverage_Begin_Date = $original_Coverage_Begin_Date;
        return $this;
    }
    /**
     * Get Original_Coverage_Begin_Date_for_Benefit_Coverage_Type value
     * @return string|null
     */
    public function getOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type()
    {
        return $this->Original_Coverage_Begin_Date_for_Benefit_Coverage_Type;
    }
    /**
     * Set Original_Coverage_Begin_Date_for_Benefit_Coverage_Type value
     * @param string $original_Coverage_Begin_Date_for_Benefit_Coverage_Type
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setOriginal_Coverage_Begin_Date_for_Benefit_Coverage_Type($original_Coverage_Begin_Date_for_Benefit_Coverage_Type = null)
    {
        // validation for constraint: string
        if (!is_null($original_Coverage_Begin_Date_for_Benefit_Coverage_Type) && !is_string($original_Coverage_Begin_Date_for_Benefit_Coverage_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Coverage_Begin_Date_for_Benefit_Coverage_Type, true), gettype($original_Coverage_Begin_Date_for_Benefit_Coverage_Type)), __LINE__);
        }
        $this->Original_Coverage_Begin_Date_for_Benefit_Coverage_Type = $original_Coverage_Begin_Date_for_Benefit_Coverage_Type;
        return $this;
    }
    /**
     * Get Deduction_Begin_Date value
     * @return string|null
     */
    public function getDeduction_Begin_Date()
    {
        return $this->Deduction_Begin_Date;
    }
    /**
     * Set Deduction_Begin_Date value
     * @param string $deduction_Begin_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setDeduction_Begin_Date($deduction_Begin_Date = null)
    {
        // validation for constraint: string
        if (!is_null($deduction_Begin_Date) && !is_string($deduction_Begin_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deduction_Begin_Date, true), gettype($deduction_Begin_Date)), __LINE__);
        }
        $this->Deduction_Begin_Date = $deduction_Begin_Date;
        return $this;
    }
    /**
     * Get Deduction_End_Date value
     * @return string|null
     */
    public function getDeduction_End_Date()
    {
        return $this->Deduction_End_Date;
    }
    /**
     * Set Deduction_End_Date value
     * @param string $deduction_End_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setDeduction_End_Date($deduction_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($deduction_End_Date) && !is_string($deduction_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deduction_End_Date, true), gettype($deduction_End_Date)), __LINE__);
        }
        $this->Deduction_End_Date = $deduction_End_Date;
        return $this;
    }
    /**
     * Get Election_Status value
     * @return string|null
     */
    public function getElection_Status()
    {
        return $this->Election_Status;
    }
    /**
     * Set Election_Status value
     * @param string $election_Status
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setElection_Status($election_Status = null)
    {
        // validation for constraint: string
        if (!is_null($election_Status) && !is_string($election_Status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($election_Status, true), gettype($election_Status)), __LINE__);
        }
        $this->Election_Status = $election_Status;
        return $this;
    }
    /**
     * Get Enrollment_Signature_Date value
     * @return string|null
     */
    public function getEnrollment_Signature_Date()
    {
        return $this->Enrollment_Signature_Date;
    }
    /**
     * Set Enrollment_Signature_Date value
     * @param string $enrollment_Signature_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setEnrollment_Signature_Date($enrollment_Signature_Date = null)
    {
        // validation for constraint: string
        if (!is_null($enrollment_Signature_Date) && !is_string($enrollment_Signature_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enrollment_Signature_Date, true), gettype($enrollment_Signature_Date)), __LINE__);
        }
        $this->Enrollment_Signature_Date = $enrollment_Signature_Date;
        return $this;
    }
    /**
     * Get Latest_Enrollment_Signature_Date value
     * @return string|null
     */
    public function getLatest_Enrollment_Signature_Date()
    {
        return $this->Latest_Enrollment_Signature_Date;
    }
    /**
     * Set Latest_Enrollment_Signature_Date value
     * @param string $latest_Enrollment_Signature_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setLatest_Enrollment_Signature_Date($latest_Enrollment_Signature_Date = null)
    {
        // validation for constraint: string
        if (!is_null($latest_Enrollment_Signature_Date) && !is_string($latest_Enrollment_Signature_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latest_Enrollment_Signature_Date, true), gettype($latest_Enrollment_Signature_Date)), __LINE__);
        }
        $this->Latest_Enrollment_Signature_Date = $latest_Enrollment_Signature_Date;
        return $this;
    }
    /**
     * Get Passive_Enrollment value
     * @return bool|null
     */
    public function getPassive_Enrollment()
    {
        return $this->Passive_Enrollment;
    }
    /**
     * Set Passive_Enrollment value
     * @param bool $passive_Enrollment
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setPassive_Enrollment($passive_Enrollment = null)
    {
        // validation for constraint: boolean
        if (!is_null($passive_Enrollment) && !is_bool($passive_Enrollment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passive_Enrollment, true), gettype($passive_Enrollment)), __LINE__);
        }
        $this->Passive_Enrollment = $passive_Enrollment;
        return $this;
    }
    /**
     * Get Benefit_Plan_Summary_Data value
     * @return \StructType\Benefit_Plan_Summary_DataType|null
     */
    public function getBenefit_Plan_Summary_Data()
    {
        return $this->Benefit_Plan_Summary_Data;
    }
    /**
     * Set Benefit_Plan_Summary_Data value
     * @param \StructType\Benefit_Plan_Summary_DataType $benefit_Plan_Summary_Data
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setBenefit_Plan_Summary_Data(\StructType\Benefit_Plan_Summary_DataType $benefit_Plan_Summary_Data = null)
    {
        $this->Benefit_Plan_Summary_Data = $benefit_Plan_Summary_Data;
        return $this;
    }
    /**
     * Get Original_Plan_Enrollment_Date value
     * @return string|null
     */
    public function getOriginal_Plan_Enrollment_Date()
    {
        return $this->Original_Plan_Enrollment_Date;
    }
    /**
     * Set Original_Plan_Enrollment_Date value
     * @param string $original_Plan_Enrollment_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setOriginal_Plan_Enrollment_Date($original_Plan_Enrollment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($original_Plan_Enrollment_Date) && !is_string($original_Plan_Enrollment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Plan_Enrollment_Date, true), gettype($original_Plan_Enrollment_Date)), __LINE__);
        }
        $this->Original_Plan_Enrollment_Date = $original_Plan_Enrollment_Date;
        return $this;
    }
    /**
     * Get Original_Benefit_Provider_Enrollment_Date value
     * @return string|null
     */
    public function getOriginal_Benefit_Provider_Enrollment_Date()
    {
        return $this->Original_Benefit_Provider_Enrollment_Date;
    }
    /**
     * Set Original_Benefit_Provider_Enrollment_Date value
     * @param string $original_Benefit_Provider_Enrollment_Date
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setOriginal_Benefit_Provider_Enrollment_Date($original_Benefit_Provider_Enrollment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($original_Benefit_Provider_Enrollment_Date) && !is_string($original_Benefit_Provider_Enrollment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Benefit_Provider_Enrollment_Date, true), gettype($original_Benefit_Provider_Enrollment_Date)), __LINE__);
        }
        $this->Original_Benefit_Provider_Enrollment_Date = $original_Benefit_Provider_Enrollment_Date;
        return $this;
    }
    /**
     * Get Is_Corrected_or_Rescinded value
     * @return bool|null
     */
    public function getIs_Corrected_or_Rescinded()
    {
        return $this->Is_Corrected_or_Rescinded;
    }
    /**
     * Set Is_Corrected_or_Rescinded value
     * @param bool $is_Corrected_or_Rescinded
     * @return \StructType\Worker_Benefit_Election_DataType
     */
    public function setIs_Corrected_or_Rescinded($is_Corrected_or_Rescinded = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Corrected_or_Rescinded) && !is_bool($is_Corrected_or_Rescinded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Corrected_or_Rescinded, true), gettype($is_Corrected_or_Rescinded)), __LINE__);
        }
        $this->Is_Corrected_or_Rescinded = $is_Corrected_or_Rescinded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Benefit_Election_DataType
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
