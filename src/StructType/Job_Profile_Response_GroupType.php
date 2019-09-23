<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request, then all groups will be returned. If the Response Group element
 * is returned, you can select which sections of data to include in the response.
 * @subpackage Structs
 */
class Job_Profile_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Reference element for the job profile is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Job_Profile_Basic_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the basic job profile information is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Profile_Basic_Data;
    /**
     * The Include_Job_Classification_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Job Classification Data is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Classification_Data;
    /**
     * The Include_Job_Profile_Pay_Rate_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Job Profile Pay Rate Type element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Profile_Pay_Rate_Data;
    /**
     * The Include_Job_Profile_Exempt_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Job Profile Job Exempt element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Profile_Exempt_Data;
    /**
     * The Include_Workers_Compensation_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the workers' compensation code data is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Workers_Compensation_Data;
    /**
     * The Include_Responsibility_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Responsibility Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Responsibility_Qualifications;
    /**
     * The Include_Work_Experience_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Work Experience Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Work_Experience_Qualifications;
    /**
     * The Include_Education_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Education Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Education_Qualifications;
    /**
     * The Include_Language_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Language Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Language_Qualifications;
    /**
     * The Include_Competency_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Competency Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Competency_Qualifications;
    /**
     * The Include_Certification_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Certification Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Certification_Qualifications;
    /**
     * The Include_Certification_Reference_Only
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to 1 to leave the name and issuer of any certifications out of the response and only include the reference.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Certification_Reference_Only;
    /**
     * The Include_Training_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Training Qualifications element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Training_Qualifications;
    /**
     * The Include_Job_Profile_Compensation_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Compensation Rules using the Job Profile are included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Profile_Compensation_Data;
    /**
     * The Include_Skill_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Skills associated with the Job Profile are included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Skill_Qualifications;
    /**
     * Constructor method for Job_Profile_Response_GroupType
     * @uses Job_Profile_Response_GroupType::setInclude_Reference()
     * @uses Job_Profile_Response_GroupType::setInclude_Job_Profile_Basic_Data()
     * @uses Job_Profile_Response_GroupType::setInclude_Job_Classification_Data()
     * @uses Job_Profile_Response_GroupType::setInclude_Job_Profile_Pay_Rate_Data()
     * @uses Job_Profile_Response_GroupType::setInclude_Job_Profile_Exempt_Data()
     * @uses Job_Profile_Response_GroupType::setInclude_Workers_Compensation_Data()
     * @uses Job_Profile_Response_GroupType::setInclude_Responsibility_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Work_Experience_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Education_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Language_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Competency_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Certification_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Certification_Reference_Only()
     * @uses Job_Profile_Response_GroupType::setInclude_Training_Qualifications()
     * @uses Job_Profile_Response_GroupType::setInclude_Job_Profile_Compensation_Data()
     * @uses Job_Profile_Response_GroupType::setInclude_Skill_Qualifications()
     * @param bool $include_Reference
     * @param bool $include_Job_Profile_Basic_Data
     * @param bool $include_Job_Classification_Data
     * @param bool $include_Job_Profile_Pay_Rate_Data
     * @param bool $include_Job_Profile_Exempt_Data
     * @param bool $include_Workers_Compensation_Data
     * @param bool $include_Responsibility_Qualifications
     * @param bool $include_Work_Experience_Qualifications
     * @param bool $include_Education_Qualifications
     * @param bool $include_Language_Qualifications
     * @param bool $include_Competency_Qualifications
     * @param bool $include_Certification_Qualifications
     * @param bool $include_Certification_Reference_Only
     * @param bool $include_Training_Qualifications
     * @param bool $include_Job_Profile_Compensation_Data
     * @param bool $include_Skill_Qualifications
     */
    public function __construct($include_Reference = null, $include_Job_Profile_Basic_Data = null, $include_Job_Classification_Data = null, $include_Job_Profile_Pay_Rate_Data = null, $include_Job_Profile_Exempt_Data = null, $include_Workers_Compensation_Data = null, $include_Responsibility_Qualifications = null, $include_Work_Experience_Qualifications = null, $include_Education_Qualifications = null, $include_Language_Qualifications = null, $include_Competency_Qualifications = null, $include_Certification_Qualifications = null, $include_Certification_Reference_Only = null, $include_Training_Qualifications = null, $include_Job_Profile_Compensation_Data = null, $include_Skill_Qualifications = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Job_Profile_Basic_Data($include_Job_Profile_Basic_Data)
            ->setInclude_Job_Classification_Data($include_Job_Classification_Data)
            ->setInclude_Job_Profile_Pay_Rate_Data($include_Job_Profile_Pay_Rate_Data)
            ->setInclude_Job_Profile_Exempt_Data($include_Job_Profile_Exempt_Data)
            ->setInclude_Workers_Compensation_Data($include_Workers_Compensation_Data)
            ->setInclude_Responsibility_Qualifications($include_Responsibility_Qualifications)
            ->setInclude_Work_Experience_Qualifications($include_Work_Experience_Qualifications)
            ->setInclude_Education_Qualifications($include_Education_Qualifications)
            ->setInclude_Language_Qualifications($include_Language_Qualifications)
            ->setInclude_Competency_Qualifications($include_Competency_Qualifications)
            ->setInclude_Certification_Qualifications($include_Certification_Qualifications)
            ->setInclude_Certification_Reference_Only($include_Certification_Reference_Only)
            ->setInclude_Training_Qualifications($include_Training_Qualifications)
            ->setInclude_Job_Profile_Compensation_Data($include_Job_Profile_Compensation_Data)
            ->setInclude_Skill_Qualifications($include_Skill_Qualifications);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Get Include_Job_Profile_Basic_Data value
     * @return bool|null
     */
    public function getInclude_Job_Profile_Basic_Data()
    {
        return $this->Include_Job_Profile_Basic_Data;
    }
    /**
     * Set Include_Job_Profile_Basic_Data value
     * @param bool $include_Job_Profile_Basic_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Job_Profile_Basic_Data($include_Job_Profile_Basic_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Profile_Basic_Data) && !is_bool($include_Job_Profile_Basic_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Profile_Basic_Data, true), gettype($include_Job_Profile_Basic_Data)), __LINE__);
        }
        $this->Include_Job_Profile_Basic_Data = $include_Job_Profile_Basic_Data;
        return $this;
    }
    /**
     * Get Include_Job_Classification_Data value
     * @return bool|null
     */
    public function getInclude_Job_Classification_Data()
    {
        return $this->Include_Job_Classification_Data;
    }
    /**
     * Set Include_Job_Classification_Data value
     * @param bool $include_Job_Classification_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Job_Classification_Data($include_Job_Classification_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Classification_Data) && !is_bool($include_Job_Classification_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Classification_Data, true), gettype($include_Job_Classification_Data)), __LINE__);
        }
        $this->Include_Job_Classification_Data = $include_Job_Classification_Data;
        return $this;
    }
    /**
     * Get Include_Job_Profile_Pay_Rate_Data value
     * @return bool|null
     */
    public function getInclude_Job_Profile_Pay_Rate_Data()
    {
        return $this->Include_Job_Profile_Pay_Rate_Data;
    }
    /**
     * Set Include_Job_Profile_Pay_Rate_Data value
     * @param bool $include_Job_Profile_Pay_Rate_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Job_Profile_Pay_Rate_Data($include_Job_Profile_Pay_Rate_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Profile_Pay_Rate_Data) && !is_bool($include_Job_Profile_Pay_Rate_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Profile_Pay_Rate_Data, true), gettype($include_Job_Profile_Pay_Rate_Data)), __LINE__);
        }
        $this->Include_Job_Profile_Pay_Rate_Data = $include_Job_Profile_Pay_Rate_Data;
        return $this;
    }
    /**
     * Get Include_Job_Profile_Exempt_Data value
     * @return bool|null
     */
    public function getInclude_Job_Profile_Exempt_Data()
    {
        return $this->Include_Job_Profile_Exempt_Data;
    }
    /**
     * Set Include_Job_Profile_Exempt_Data value
     * @param bool $include_Job_Profile_Exempt_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Job_Profile_Exempt_Data($include_Job_Profile_Exempt_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Profile_Exempt_Data) && !is_bool($include_Job_Profile_Exempt_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Profile_Exempt_Data, true), gettype($include_Job_Profile_Exempt_Data)), __LINE__);
        }
        $this->Include_Job_Profile_Exempt_Data = $include_Job_Profile_Exempt_Data;
        return $this;
    }
    /**
     * Get Include_Workers_Compensation_Data value
     * @return bool|null
     */
    public function getInclude_Workers_Compensation_Data()
    {
        return $this->Include_Workers_Compensation_Data;
    }
    /**
     * Set Include_Workers_Compensation_Data value
     * @param bool $include_Workers_Compensation_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Workers_Compensation_Data($include_Workers_Compensation_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Workers_Compensation_Data) && !is_bool($include_Workers_Compensation_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Workers_Compensation_Data, true), gettype($include_Workers_Compensation_Data)), __LINE__);
        }
        $this->Include_Workers_Compensation_Data = $include_Workers_Compensation_Data;
        return $this;
    }
    /**
     * Get Include_Responsibility_Qualifications value
     * @return bool|null
     */
    public function getInclude_Responsibility_Qualifications()
    {
        return $this->Include_Responsibility_Qualifications;
    }
    /**
     * Set Include_Responsibility_Qualifications value
     * @param bool $include_Responsibility_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Responsibility_Qualifications($include_Responsibility_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Responsibility_Qualifications) && !is_bool($include_Responsibility_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Responsibility_Qualifications, true), gettype($include_Responsibility_Qualifications)), __LINE__);
        }
        $this->Include_Responsibility_Qualifications = $include_Responsibility_Qualifications;
        return $this;
    }
    /**
     * Get Include_Work_Experience_Qualifications value
     * @return bool|null
     */
    public function getInclude_Work_Experience_Qualifications()
    {
        return $this->Include_Work_Experience_Qualifications;
    }
    /**
     * Set Include_Work_Experience_Qualifications value
     * @param bool $include_Work_Experience_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Work_Experience_Qualifications($include_Work_Experience_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Work_Experience_Qualifications) && !is_bool($include_Work_Experience_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Work_Experience_Qualifications, true), gettype($include_Work_Experience_Qualifications)), __LINE__);
        }
        $this->Include_Work_Experience_Qualifications = $include_Work_Experience_Qualifications;
        return $this;
    }
    /**
     * Get Include_Education_Qualifications value
     * @return bool|null
     */
    public function getInclude_Education_Qualifications()
    {
        return $this->Include_Education_Qualifications;
    }
    /**
     * Set Include_Education_Qualifications value
     * @param bool $include_Education_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Education_Qualifications($include_Education_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Education_Qualifications) && !is_bool($include_Education_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Education_Qualifications, true), gettype($include_Education_Qualifications)), __LINE__);
        }
        $this->Include_Education_Qualifications = $include_Education_Qualifications;
        return $this;
    }
    /**
     * Get Include_Language_Qualifications value
     * @return bool|null
     */
    public function getInclude_Language_Qualifications()
    {
        return $this->Include_Language_Qualifications;
    }
    /**
     * Set Include_Language_Qualifications value
     * @param bool $include_Language_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Language_Qualifications($include_Language_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Language_Qualifications) && !is_bool($include_Language_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Language_Qualifications, true), gettype($include_Language_Qualifications)), __LINE__);
        }
        $this->Include_Language_Qualifications = $include_Language_Qualifications;
        return $this;
    }
    /**
     * Get Include_Competency_Qualifications value
     * @return bool|null
     */
    public function getInclude_Competency_Qualifications()
    {
        return $this->Include_Competency_Qualifications;
    }
    /**
     * Set Include_Competency_Qualifications value
     * @param bool $include_Competency_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Competency_Qualifications($include_Competency_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Competency_Qualifications) && !is_bool($include_Competency_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Competency_Qualifications, true), gettype($include_Competency_Qualifications)), __LINE__);
        }
        $this->Include_Competency_Qualifications = $include_Competency_Qualifications;
        return $this;
    }
    /**
     * Get Include_Certification_Qualifications value
     * @return bool|null
     */
    public function getInclude_Certification_Qualifications()
    {
        return $this->Include_Certification_Qualifications;
    }
    /**
     * Set Include_Certification_Qualifications value
     * @param bool $include_Certification_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Certification_Qualifications($include_Certification_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Certification_Qualifications) && !is_bool($include_Certification_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Certification_Qualifications, true), gettype($include_Certification_Qualifications)), __LINE__);
        }
        $this->Include_Certification_Qualifications = $include_Certification_Qualifications;
        return $this;
    }
    /**
     * Get Include_Certification_Reference_Only value
     * @return bool|null
     */
    public function getInclude_Certification_Reference_Only()
    {
        return $this->Include_Certification_Reference_Only;
    }
    /**
     * Set Include_Certification_Reference_Only value
     * @param bool $include_Certification_Reference_Only
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Certification_Reference_Only($include_Certification_Reference_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Certification_Reference_Only) && !is_bool($include_Certification_Reference_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Certification_Reference_Only, true), gettype($include_Certification_Reference_Only)), __LINE__);
        }
        $this->Include_Certification_Reference_Only = $include_Certification_Reference_Only;
        return $this;
    }
    /**
     * Get Include_Training_Qualifications value
     * @return bool|null
     */
    public function getInclude_Training_Qualifications()
    {
        return $this->Include_Training_Qualifications;
    }
    /**
     * Set Include_Training_Qualifications value
     * @param bool $include_Training_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Training_Qualifications($include_Training_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Training_Qualifications) && !is_bool($include_Training_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Training_Qualifications, true), gettype($include_Training_Qualifications)), __LINE__);
        }
        $this->Include_Training_Qualifications = $include_Training_Qualifications;
        return $this;
    }
    /**
     * Get Include_Job_Profile_Compensation_Data value
     * @return bool|null
     */
    public function getInclude_Job_Profile_Compensation_Data()
    {
        return $this->Include_Job_Profile_Compensation_Data;
    }
    /**
     * Set Include_Job_Profile_Compensation_Data value
     * @param bool $include_Job_Profile_Compensation_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Job_Profile_Compensation_Data($include_Job_Profile_Compensation_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Profile_Compensation_Data) && !is_bool($include_Job_Profile_Compensation_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Profile_Compensation_Data, true), gettype($include_Job_Profile_Compensation_Data)), __LINE__);
        }
        $this->Include_Job_Profile_Compensation_Data = $include_Job_Profile_Compensation_Data;
        return $this;
    }
    /**
     * Get Include_Skill_Qualifications value
     * @return bool|null
     */
    public function getInclude_Skill_Qualifications()
    {
        return $this->Include_Skill_Qualifications;
    }
    /**
     * Set Include_Skill_Qualifications value
     * @param bool $include_Skill_Qualifications
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
     */
    public function setInclude_Skill_Qualifications($include_Skill_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Skill_Qualifications) && !is_bool($include_Skill_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Skill_Qualifications, true), gettype($include_Skill_Qualifications)), __LINE__);
        }
        $this->Include_Skill_Qualifications = $include_Skill_Qualifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_GroupType
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
