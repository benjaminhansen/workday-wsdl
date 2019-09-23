<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Section_2_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information for Form I-9 Section 2 to assign to the worker.
 * @subpackage Structs
 */
class External_Form_I_9_Section_2_DataType extends AbstractStructBase
{
    /**
     * The Worker_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The Start Date for the Worker to be assigned to the Form I-9.
     * - maxOccurs: 1
     * @var string
     */
    public $Worker_Start_Date;
    /**
     * The Form_I_9_Additional_Information
     * Meta information extracted from the WSDL
     * - documentation: Any Additional Information to be assigned to the Form I-9.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Form_I_9_Additional_Information;
    /**
     * The Form_I_9_Employer_Signature_Date
     * Meta information extracted from the WSDL
     * - documentation: The Employer Signature Date to be assigned to the Form I-9.
     * - maxOccurs: 1
     * @var string
     */
    public $Form_I_9_Employer_Signature_Date;
    /**
     * The External_Form_I_9_Section_2_List_A_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_DataType
     */
    public $External_Form_I_9_Section_2_List_A_Data;
    /**
     * The External_Form_I_9_Section_2_List_B_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_B_DataType
     */
    public $External_Form_I_9_Section_2_List_B_Data;
    /**
     * The External_Form_I_9_Section_2_List_C_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_C_DataType
     */
    public $External_Form_I_9_Section_2_List_C_Data;
    /**
     * Constructor method for External_Form_I-9_Section_2_DataType
     * @uses External_Form_I_9_Section_2_DataType::setWorker_Start_Date()
     * @uses External_Form_I_9_Section_2_DataType::setForm_I_9_Additional_Information()
     * @uses External_Form_I_9_Section_2_DataType::setForm_I_9_Employer_Signature_Date()
     * @uses External_Form_I_9_Section_2_DataType::setExternal_Form_I_9_Section_2_List_A_Data()
     * @uses External_Form_I_9_Section_2_DataType::setExternal_Form_I_9_Section_2_List_B_Data()
     * @uses External_Form_I_9_Section_2_DataType::setExternal_Form_I_9_Section_2_List_C_Data()
     * @param string $worker_Start_Date
     * @param string $form_I_9_Additional_Information
     * @param string $form_I_9_Employer_Signature_Date
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_DataType $external_Form_I_9_Section_2_List_A_Data
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_B_DataType $external_Form_I_9_Section_2_List_B_Data
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_C_DataType $external_Form_I_9_Section_2_List_C_Data
     */
    public function __construct($worker_Start_Date = null, $form_I_9_Additional_Information = null, $form_I_9_Employer_Signature_Date = null, \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_DataType $external_Form_I_9_Section_2_List_A_Data = null, \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_B_DataType $external_Form_I_9_Section_2_List_B_Data = null, \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_C_DataType $external_Form_I_9_Section_2_List_C_Data = null)
    {
        $this
            ->setWorker_Start_Date($worker_Start_Date)
            ->setForm_I_9_Additional_Information($form_I_9_Additional_Information)
            ->setForm_I_9_Employer_Signature_Date($form_I_9_Employer_Signature_Date)
            ->setExternal_Form_I_9_Section_2_List_A_Data($external_Form_I_9_Section_2_List_A_Data)
            ->setExternal_Form_I_9_Section_2_List_B_Data($external_Form_I_9_Section_2_List_B_Data)
            ->setExternal_Form_I_9_Section_2_List_C_Data($external_Form_I_9_Section_2_List_C_Data);
    }
    /**
     * Get Worker_Start_Date value
     * @return string|null
     */
    public function getWorker_Start_Date()
    {
        return $this->Worker_Start_Date;
    }
    /**
     * Set Worker_Start_Date value
     * @param string $worker_Start_Date
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public function setWorker_Start_Date($worker_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($worker_Start_Date) && !is_string($worker_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_Start_Date, true), gettype($worker_Start_Date)), __LINE__);
        }
        $this->Worker_Start_Date = $worker_Start_Date;
        return $this;
    }
    /**
     * Get form_I_Additional_Information value
     * @return form_I_Additional_Information
     */
    public function getForm_I_9_Additional_Information()
    {
        return $this->{'Form_I-9_Additional_Information'};
    }
    /**
     * Set form_I_Additional_Information value
     * @param form_I_Additional_Information $form_I_Additional_Information
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public function setForm_I_9_Additional_Information($form_I_9_Additional_Information = null)
    {
        // validation for constraint: string
        if (!is_null($form_I_9_Additional_Information) && !is_string($form_I_9_Additional_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($form_I_9_Additional_Information, true), gettype($form_I_9_Additional_Information)), __LINE__);
        }
        $this->Form_I_9_Additional_Information = $this->{'Form_I-9_Additional_Information'} = $form_I_9_Additional_Information;
        return $this;
    }
    /**
     * Get form_I_Employer_Signature_Date value
     * @return form_I_Employer_Signature_Date
     */
    public function getForm_I_9_Employer_Signature_Date()
    {
        return $this->{'Form_I-9_Employer_Signature_Date'};
    }
    /**
     * Set form_I_Employer_Signature_Date value
     * @param form_I_Employer_Signature_Date $form_I_Employer_Signature_Date
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public function setForm_I_9_Employer_Signature_Date($form_I_9_Employer_Signature_Date = null)
    {
        // validation for constraint: string
        if (!is_null($form_I_9_Employer_Signature_Date) && !is_string($form_I_9_Employer_Signature_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($form_I_9_Employer_Signature_Date, true), gettype($form_I_9_Employer_Signature_Date)), __LINE__);
        }
        $this->Form_I_9_Employer_Signature_Date = $this->{'Form_I-9_Employer_Signature_Date'} = $form_I_9_Employer_Signature_Date;
        return $this;
    }
    /**
     * Get external_Form_I_Section_List_A_Data value
     * @return external_Form_I_Section_List_A_Data
     */
    public function getExternal_Form_I_9_Section_2_List_A_Data()
    {
        return $this->{'External_Form_I-9_Section_2_List_A_Data'};
    }
    /**
     * Set external_Form_I_Section_List_A_Data value
     * @param external_Form_I_Section_List_A_Data $external_Form_I_Section_List_A_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public function setExternal_Form_I_9_Section_2_List_A_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_DataType $external_Form_I_9_Section_2_List_A_Data = null)
    {
        $this->External_Form_I_9_Section_2_List_A_Data = $this->{'External_Form_I-9_Section_2_List_A_Data'} = $external_Form_I_9_Section_2_List_A_Data;
        return $this;
    }
    /**
     * Get external_Form_I_Section_List_B_Data value
     * @return external_Form_I_Section_List_B_Data
     */
    public function getExternal_Form_I_9_Section_2_List_B_Data()
    {
        return $this->{'External_Form_I-9_Section_2_List_B_Data'};
    }
    /**
     * Set external_Form_I_Section_List_B_Data value
     * @param external_Form_I_Section_List_B_Data $external_Form_I_Section_List_B_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public function setExternal_Form_I_9_Section_2_List_B_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_B_DataType $external_Form_I_9_Section_2_List_B_Data = null)
    {
        $this->External_Form_I_9_Section_2_List_B_Data = $this->{'External_Form_I-9_Section_2_List_B_Data'} = $external_Form_I_9_Section_2_List_B_Data;
        return $this;
    }
    /**
     * Get external_Form_I_Section_List_C_Data value
     * @return external_Form_I_Section_List_C_Data
     */
    public function getExternal_Form_I_9_Section_2_List_C_Data()
    {
        return $this->{'External_Form_I-9_Section_2_List_C_Data'};
    }
    /**
     * Set external_Form_I_Section_List_C_Data value
     * @param external_Form_I_Section_List_C_Data $external_Form_I_Section_List_C_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public function setExternal_Form_I_9_Section_2_List_C_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_C_DataType $external_Form_I_9_Section_2_List_C_Data = null)
    {
        $this->External_Form_I_9_Section_2_List_C_Data = $this->{'External_Form_I-9_Section_2_List_C_Data'} = $external_Form_I_9_Section_2_List_C_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
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
