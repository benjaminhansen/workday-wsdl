<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Disability_Self-Identification_Record_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all External Disability Self-Identification Record data.
 * @subpackage Structs
 */
class External_Disability_Self_Identification_Record_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for the External Disability Self-Identification Record.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Employee_Reference
     * Meta information extracted from the WSDL
     * - documentation: The employee for which the External Disability Self-Identification Record refers.
     * @var \WorkdayWsdl\\StructType\EmployeeObjectType
     */
    public $Employee_Reference;
    /**
     * The Disability_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: The disability status of the External Disability Self-Identification Record.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Self_Identification_of_Disability_StatusObjectType
     */
    public $Disability_Status_Reference;
    /**
     * The Invitation_Date
     * Meta information extracted from the WSDL
     * - documentation: The invitation date for the External Disability Self-Identification Record.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Invitation_Date;
    /**
     * The Response_Date
     * Meta information extracted from the WSDL
     * - documentation: The response date for External Disability Self-Identification Record.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Response_Date;
    /**
     * Constructor method for External_Disability_Self-Identification_Record_DataType
     * @uses External_Disability_Self_Identification_Record_DataType::setID()
     * @uses External_Disability_Self_Identification_Record_DataType::setEmployee_Reference()
     * @uses External_Disability_Self_Identification_Record_DataType::setDisability_Status_Reference()
     * @uses External_Disability_Self_Identification_Record_DataType::setInvitation_Date()
     * @uses External_Disability_Self_Identification_Record_DataType::setResponse_Date()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference
     * @param \WorkdayWsdl\\StructType\Self_Identification_of_Disability_StatusObjectType $disability_Status_Reference
     * @param string $invitation_Date
     * @param string $response_Date
     */
    public function __construct($iD = null, \WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference = null, \WorkdayWsdl\\StructType\Self_Identification_of_Disability_StatusObjectType $disability_Status_Reference = null, $invitation_Date = null, $response_Date = null)
    {
        $this
            ->setID($iD)
            ->setEmployee_Reference($employee_Reference)
            ->setDisability_Status_Reference($disability_Status_Reference)
            ->setInvitation_Date($invitation_Date)
            ->setResponse_Date($response_Date);
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
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_DataType
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
     * Get Employee_Reference value
     * @return \WorkdayWsdl\\StructType\EmployeeObjectType|null
     */
    public function getEmployee_Reference()
    {
        return $this->Employee_Reference;
    }
    /**
     * Set Employee_Reference value
     * @param \WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_DataType
     */
    public function setEmployee_Reference(\WorkdayWsdl\\StructType\EmployeeObjectType $employee_Reference = null)
    {
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Get Disability_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Self_Identification_of_Disability_StatusObjectType|null
     */
    public function getDisability_Status_Reference()
    {
        return $this->Disability_Status_Reference;
    }
    /**
     * Set Disability_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Self_Identification_of_Disability_StatusObjectType $disability_Status_Reference
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_DataType
     */
    public function setDisability_Status_Reference(\WorkdayWsdl\\StructType\Self_Identification_of_Disability_StatusObjectType $disability_Status_Reference = null)
    {
        $this->Disability_Status_Reference = $disability_Status_Reference;
        return $this;
    }
    /**
     * Get Invitation_Date value
     * @return string|null
     */
    public function getInvitation_Date()
    {
        return $this->Invitation_Date;
    }
    /**
     * Set Invitation_Date value
     * @param string $invitation_Date
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_DataType
     */
    public function setInvitation_Date($invitation_Date = null)
    {
        // validation for constraint: string
        if (!is_null($invitation_Date) && !is_string($invitation_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invitation_Date, true), gettype($invitation_Date)), __LINE__);
        }
        $this->Invitation_Date = $invitation_Date;
        return $this;
    }
    /**
     * Get Response_Date value
     * @return string|null
     */
    public function getResponse_Date()
    {
        return $this->Response_Date;
    }
    /**
     * Set Response_Date value
     * @param string $response_Date
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_DataType
     */
    public function setResponse_Date($response_Date = null)
    {
        // validation for constraint: string
        if (!is_null($response_Date) && !is_string($response_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($response_Date, true), gettype($response_Date)), __LINE__);
        }
        $this->Response_Date = $response_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Disability_Self_Identification_Record_DataType
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
