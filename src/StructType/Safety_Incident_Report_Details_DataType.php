<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Report_Details_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The report details of the safety incident for the involved party.
 * @subpackage Structs
 */
class Safety_Incident_Report_Details_DataType extends AbstractStructBase
{
    /**
     * The Government_Reportable
     * Meta information extracted from the WSDL
     * - documentation: Whether the incident is government reportable or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Government_Reportable;
    /**
     * The Case_Number
     * Meta information extracted from the WSDL
     * - documentation: The case number of the safety incident.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Case_Number;
    /**
     * The Claim_Removed_Date
     * Meta information extracted from the WSDL
     * - documentation: The claim remove date of the safety incident.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Claim_Removed_Date;
    /**
     * The Injury_Illness_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of the injury Illness.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\XMLNAME__US__Injury_Illness_TypeObjectType
     */
    public $Injury_Illness_Type_Reference;
    /**
     * The Specific_Work_Area
     * Meta information extracted from the WSDL
     * - documentation: The specific area where the safety incident occurred.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Specific_Work_Area;
    /**
     * The Investigation_Due_Date
     * Meta information extracted from the WSDL
     * - documentation: When the investigation is due.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Investigation_Due_Date;
    /**
     * The Worker_Comp_Legal_Claim_Number
     * Meta information extracted from the WSDL
     * - documentation: The worker comp legal number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_Comp_Legal_Claim_Number;
    /**
     * The Claim_Administrator_Code
     * Meta information extracted from the WSDL
     * - documentation: The claim administrator code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Claim_Administrator_Code;
    /**
     * The Worker_Prior_Activity
     * Meta information extracted from the WSDL
     * - documentation: The involved parties prior activity.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_Prior_Activity;
    /**
     * The What_Happened
     * Meta information extracted from the WSDL
     * - documentation: What happened for the safety incident.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $What_Happened;
    /**
     * The Preventative_Measures
     * Meta information extracted from the WSDL
     * - documentation: The preventive measures for the safety incident.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Preventative_Measures;
    /**
     * Constructor method for Safety_Incident_Report_Details_DataType
     * @uses Safety_Incident_Report_Details_DataType::setGovernment_Reportable()
     * @uses Safety_Incident_Report_Details_DataType::setCase_Number()
     * @uses Safety_Incident_Report_Details_DataType::setClaim_Removed_Date()
     * @uses Safety_Incident_Report_Details_DataType::setInjury_Illness_Type_Reference()
     * @uses Safety_Incident_Report_Details_DataType::setSpecific_Work_Area()
     * @uses Safety_Incident_Report_Details_DataType::setInvestigation_Due_Date()
     * @uses Safety_Incident_Report_Details_DataType::setWorker_Comp_Legal_Claim_Number()
     * @uses Safety_Incident_Report_Details_DataType::setClaim_Administrator_Code()
     * @uses Safety_Incident_Report_Details_DataType::setWorker_Prior_Activity()
     * @uses Safety_Incident_Report_Details_DataType::setWhat_Happened()
     * @uses Safety_Incident_Report_Details_DataType::setPreventative_Measures()
     * @param bool $government_Reportable
     * @param string $case_Number
     * @param string $claim_Removed_Date
     * @param \WorkdayWsdl\\StructType\XMLNAME__US__Injury_Illness_TypeObjectType $injury_Illness_Type_Reference
     * @param string $specific_Work_Area
     * @param string $investigation_Due_Date
     * @param string $worker_Comp_Legal_Claim_Number
     * @param string $claim_Administrator_Code
     * @param string $worker_Prior_Activity
     * @param string $what_Happened
     * @param string $preventative_Measures
     */
    public function __construct($government_Reportable = null, $case_Number = null, $claim_Removed_Date = null, \WorkdayWsdl\\StructType\XMLNAME__US__Injury_Illness_TypeObjectType $injury_Illness_Type_Reference = null, $specific_Work_Area = null, $investigation_Due_Date = null, $worker_Comp_Legal_Claim_Number = null, $claim_Administrator_Code = null, $worker_Prior_Activity = null, $what_Happened = null, $preventative_Measures = null)
    {
        $this
            ->setGovernment_Reportable($government_Reportable)
            ->setCase_Number($case_Number)
            ->setClaim_Removed_Date($claim_Removed_Date)
            ->setInjury_Illness_Type_Reference($injury_Illness_Type_Reference)
            ->setSpecific_Work_Area($specific_Work_Area)
            ->setInvestigation_Due_Date($investigation_Due_Date)
            ->setWorker_Comp_Legal_Claim_Number($worker_Comp_Legal_Claim_Number)
            ->setClaim_Administrator_Code($claim_Administrator_Code)
            ->setWorker_Prior_Activity($worker_Prior_Activity)
            ->setWhat_Happened($what_Happened)
            ->setPreventative_Measures($preventative_Measures);
    }
    /**
     * Get Government_Reportable value
     * @return bool|null
     */
    public function getGovernment_Reportable()
    {
        return $this->Government_Reportable;
    }
    /**
     * Set Government_Reportable value
     * @param bool $government_Reportable
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setGovernment_Reportable($government_Reportable = null)
    {
        // validation for constraint: boolean
        if (!is_null($government_Reportable) && !is_bool($government_Reportable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($government_Reportable, true), gettype($government_Reportable)), __LINE__);
        }
        $this->Government_Reportable = $government_Reportable;
        return $this;
    }
    /**
     * Get Case_Number value
     * @return string|null
     */
    public function getCase_Number()
    {
        return $this->Case_Number;
    }
    /**
     * Set Case_Number value
     * @param string $case_Number
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setCase_Number($case_Number = null)
    {
        // validation for constraint: string
        if (!is_null($case_Number) && !is_string($case_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($case_Number, true), gettype($case_Number)), __LINE__);
        }
        $this->Case_Number = $case_Number;
        return $this;
    }
    /**
     * Get Claim_Removed_Date value
     * @return string|null
     */
    public function getClaim_Removed_Date()
    {
        return $this->Claim_Removed_Date;
    }
    /**
     * Set Claim_Removed_Date value
     * @param string $claim_Removed_Date
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setClaim_Removed_Date($claim_Removed_Date = null)
    {
        // validation for constraint: string
        if (!is_null($claim_Removed_Date) && !is_string($claim_Removed_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claim_Removed_Date, true), gettype($claim_Removed_Date)), __LINE__);
        }
        $this->Claim_Removed_Date = $claim_Removed_Date;
        return $this;
    }
    /**
     * Get Injury_Illness_Type_Reference value
     * @return \WorkdayWsdl\\StructType\XMLNAME__US__Injury_Illness_TypeObjectType|null
     */
    public function getInjury_Illness_Type_Reference()
    {
        return $this->Injury_Illness_Type_Reference;
    }
    /**
     * Set Injury_Illness_Type_Reference value
     * @param \WorkdayWsdl\\StructType\XMLNAME__US__Injury_Illness_TypeObjectType $injury_Illness_Type_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setInjury_Illness_Type_Reference(\WorkdayWsdl\\StructType\XMLNAME__US__Injury_Illness_TypeObjectType $injury_Illness_Type_Reference = null)
    {
        $this->Injury_Illness_Type_Reference = $injury_Illness_Type_Reference;
        return $this;
    }
    /**
     * Get Specific_Work_Area value
     * @return string|null
     */
    public function getSpecific_Work_Area()
    {
        return $this->Specific_Work_Area;
    }
    /**
     * Set Specific_Work_Area value
     * @param string $specific_Work_Area
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setSpecific_Work_Area($specific_Work_Area = null)
    {
        // validation for constraint: string
        if (!is_null($specific_Work_Area) && !is_string($specific_Work_Area)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specific_Work_Area, true), gettype($specific_Work_Area)), __LINE__);
        }
        $this->Specific_Work_Area = $specific_Work_Area;
        return $this;
    }
    /**
     * Get Investigation_Due_Date value
     * @return string|null
     */
    public function getInvestigation_Due_Date()
    {
        return $this->Investigation_Due_Date;
    }
    /**
     * Set Investigation_Due_Date value
     * @param string $investigation_Due_Date
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setInvestigation_Due_Date($investigation_Due_Date = null)
    {
        // validation for constraint: string
        if (!is_null($investigation_Due_Date) && !is_string($investigation_Due_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($investigation_Due_Date, true), gettype($investigation_Due_Date)), __LINE__);
        }
        $this->Investigation_Due_Date = $investigation_Due_Date;
        return $this;
    }
    /**
     * Get Worker_Comp_Legal_Claim_Number value
     * @return string|null
     */
    public function getWorker_Comp_Legal_Claim_Number()
    {
        return $this->Worker_Comp_Legal_Claim_Number;
    }
    /**
     * Set Worker_Comp_Legal_Claim_Number value
     * @param string $worker_Comp_Legal_Claim_Number
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setWorker_Comp_Legal_Claim_Number($worker_Comp_Legal_Claim_Number = null)
    {
        // validation for constraint: string
        if (!is_null($worker_Comp_Legal_Claim_Number) && !is_string($worker_Comp_Legal_Claim_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_Comp_Legal_Claim_Number, true), gettype($worker_Comp_Legal_Claim_Number)), __LINE__);
        }
        $this->Worker_Comp_Legal_Claim_Number = $worker_Comp_Legal_Claim_Number;
        return $this;
    }
    /**
     * Get Claim_Administrator_Code value
     * @return string|null
     */
    public function getClaim_Administrator_Code()
    {
        return $this->Claim_Administrator_Code;
    }
    /**
     * Set Claim_Administrator_Code value
     * @param string $claim_Administrator_Code
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setClaim_Administrator_Code($claim_Administrator_Code = null)
    {
        // validation for constraint: string
        if (!is_null($claim_Administrator_Code) && !is_string($claim_Administrator_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claim_Administrator_Code, true), gettype($claim_Administrator_Code)), __LINE__);
        }
        $this->Claim_Administrator_Code = $claim_Administrator_Code;
        return $this;
    }
    /**
     * Get Worker_Prior_Activity value
     * @return string|null
     */
    public function getWorker_Prior_Activity()
    {
        return $this->Worker_Prior_Activity;
    }
    /**
     * Set Worker_Prior_Activity value
     * @param string $worker_Prior_Activity
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setWorker_Prior_Activity($worker_Prior_Activity = null)
    {
        // validation for constraint: string
        if (!is_null($worker_Prior_Activity) && !is_string($worker_Prior_Activity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_Prior_Activity, true), gettype($worker_Prior_Activity)), __LINE__);
        }
        $this->Worker_Prior_Activity = $worker_Prior_Activity;
        return $this;
    }
    /**
     * Get What_Happened value
     * @return string|null
     */
    public function getWhat_Happened()
    {
        return $this->What_Happened;
    }
    /**
     * Set What_Happened value
     * @param string $what_Happened
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setWhat_Happened($what_Happened = null)
    {
        // validation for constraint: string
        if (!is_null($what_Happened) && !is_string($what_Happened)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($what_Happened, true), gettype($what_Happened)), __LINE__);
        }
        $this->What_Happened = $what_Happened;
        return $this;
    }
    /**
     * Get Preventative_Measures value
     * @return string|null
     */
    public function getPreventative_Measures()
    {
        return $this->Preventative_Measures;
    }
    /**
     * Set Preventative_Measures value
     * @param string $preventative_Measures
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
     */
    public function setPreventative_Measures($preventative_Measures = null)
    {
        // validation for constraint: string
        if (!is_null($preventative_Measures) && !is_string($preventative_Measures)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preventative_Measures, true), gettype($preventative_Measures)), __LINE__);
        }
        $this->Preventative_Measures = $preventative_Measures;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Report_Details_DataType
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
