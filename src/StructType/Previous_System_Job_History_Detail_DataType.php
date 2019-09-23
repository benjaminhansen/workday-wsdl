<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Previous_System_Job_History_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Detail data for a Previous System Job History entry.
 * @subpackage Structs
 */
class Previous_System_Job_History_Detail_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a Previous System Job History entry. This can be entered here on an add to set the reference id to a customer determined value or left blank and a default value will be saved. If you are updating an existing
     * entry, entering a value here will change the reference id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Worker_History_Name
     * Meta information extracted from the WSDL
     * - documentation: Name to identify the Previous System Job History. This does not have to be unique. During an update, if no value is sent then the existing value will be kept. Required on an Add.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_History_Name;
    /**
     * The Action_Date
     * Meta information extracted from the WSDL
     * - documentation: Date of the Previous System Job entry. During an update, if no value is sent, then the existing date will be kept. Required on an Add.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Action_Date;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason for the Previous System Job Entry. During an update, if no value is sent then the existing value will be kept. Required on an Add.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Free Form Description for the Previous System Job Entry. During an update, if no valie is sent then the existing value will be kept.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for Previous_System_Job_History_Detail_DataType
     * @uses Previous_System_Job_History_Detail_DataType::setID()
     * @uses Previous_System_Job_History_Detail_DataType::setWorker_History_Name()
     * @uses Previous_System_Job_History_Detail_DataType::setAction_Date()
     * @uses Previous_System_Job_History_Detail_DataType::setReason()
     * @uses Previous_System_Job_History_Detail_DataType::setDescription()
     * @param string $iD
     * @param string $worker_History_Name
     * @param string $action_Date
     * @param string $reason
     * @param string $description
     */
    public function __construct($iD = null, $worker_History_Name = null, $action_Date = null, $reason = null, $description = null)
    {
        $this
            ->setID($iD)
            ->setWorker_History_Name($worker_History_Name)
            ->setAction_Date($action_Date)
            ->setReason($reason)
            ->setDescription($description);
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
     * @return \StructType\Previous_System_Job_History_Detail_DataType
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
     * Get Worker_History_Name value
     * @return string|null
     */
    public function getWorker_History_Name()
    {
        return $this->Worker_History_Name;
    }
    /**
     * Set Worker_History_Name value
     * @param string $worker_History_Name
     * @return \StructType\Previous_System_Job_History_Detail_DataType
     */
    public function setWorker_History_Name($worker_History_Name = null)
    {
        // validation for constraint: string
        if (!is_null($worker_History_Name) && !is_string($worker_History_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_History_Name, true), gettype($worker_History_Name)), __LINE__);
        }
        $this->Worker_History_Name = $worker_History_Name;
        return $this;
    }
    /**
     * Get Action_Date value
     * @return string|null
     */
    public function getAction_Date()
    {
        return $this->Action_Date;
    }
    /**
     * Set Action_Date value
     * @param string $action_Date
     * @return \StructType\Previous_System_Job_History_Detail_DataType
     */
    public function setAction_Date($action_Date = null)
    {
        // validation for constraint: string
        if (!is_null($action_Date) && !is_string($action_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action_Date, true), gettype($action_Date)), __LINE__);
        }
        $this->Action_Date = $action_Date;
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \StructType\Previous_System_Job_History_Detail_DataType
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Previous_System_Job_History_Detail_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Previous_System_Job_History_Detail_DataType
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
