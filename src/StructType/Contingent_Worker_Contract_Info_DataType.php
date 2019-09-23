<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contingent_Worker_Contract_Info_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Contingent Worker Contract Information data.
 * @subpackage Structs
 */
class Contingent_Worker_Contract_Info_DataType extends AbstractStructBase
{
    /**
     * The Worker_Status_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Status_DataType
     */
    public $Worker_Status_Data;
    /**
     * The Worker_Position_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Position_DataType
     */
    public $Worker_Position_Data;
    /**
     * The Contingent_Worker_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying name of Contingent worker Type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contingent_Worker_Type_Name;
    /**
     * The Vendor_Reference_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Vendor_ReferenceType
     */
    public $Vendor_Reference_Data;
    /**
     * The Contract_Details_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Contract_Details_DataType
     */
    public $Contract_Details_Data;
    /**
     * The Contract_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Date of Contract End.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contract_End_Date;
    /**
     * The Worker_Document_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Document_Data_WWSType
     */
    public $Worker_Document_Data;
    /**
     * Constructor method for Contingent_Worker_Contract_Info_DataType
     * @uses Contingent_Worker_Contract_Info_DataType::setWorker_Status_Data()
     * @uses Contingent_Worker_Contract_Info_DataType::setWorker_Position_Data()
     * @uses Contingent_Worker_Contract_Info_DataType::setContingent_Worker_Type_Name()
     * @uses Contingent_Worker_Contract_Info_DataType::setVendor_Reference_Data()
     * @uses Contingent_Worker_Contract_Info_DataType::setContract_Details_Data()
     * @uses Contingent_Worker_Contract_Info_DataType::setContract_End_Date()
     * @uses Contingent_Worker_Contract_Info_DataType::setWorker_Document_Data()
     * @param \StructType\Worker_Status_DataType $worker_Status_Data
     * @param \StructType\Worker_Position_DataType $worker_Position_Data
     * @param string $contingent_Worker_Type_Name
     * @param \StructType\Vendor_ReferenceType $vendor_Reference_Data
     * @param \StructType\Contract_Details_DataType $contract_Details_Data
     * @param string $contract_End_Date
     * @param \StructType\Worker_Document_Data_WWSType $worker_Document_Data
     */
    public function __construct(\StructType\Worker_Status_DataType $worker_Status_Data = null, \StructType\Worker_Position_DataType $worker_Position_Data = null, $contingent_Worker_Type_Name = null, \StructType\Vendor_ReferenceType $vendor_Reference_Data = null, \StructType\Contract_Details_DataType $contract_Details_Data = null, $contract_End_Date = null, \StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this
            ->setWorker_Status_Data($worker_Status_Data)
            ->setWorker_Position_Data($worker_Position_Data)
            ->setContingent_Worker_Type_Name($contingent_Worker_Type_Name)
            ->setVendor_Reference_Data($vendor_Reference_Data)
            ->setContract_Details_Data($contract_Details_Data)
            ->setContract_End_Date($contract_End_Date)
            ->setWorker_Document_Data($worker_Document_Data);
    }
    /**
     * Get Worker_Status_Data value
     * @return \StructType\Worker_Status_DataType|null
     */
    public function getWorker_Status_Data()
    {
        return $this->Worker_Status_Data;
    }
    /**
     * Set Worker_Status_Data value
     * @param \StructType\Worker_Status_DataType $worker_Status_Data
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setWorker_Status_Data(\StructType\Worker_Status_DataType $worker_Status_Data = null)
    {
        $this->Worker_Status_Data = $worker_Status_Data;
        return $this;
    }
    /**
     * Get Worker_Position_Data value
     * @return \StructType\Worker_Position_DataType|null
     */
    public function getWorker_Position_Data()
    {
        return $this->Worker_Position_Data;
    }
    /**
     * Set Worker_Position_Data value
     * @param \StructType\Worker_Position_DataType $worker_Position_Data
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setWorker_Position_Data(\StructType\Worker_Position_DataType $worker_Position_Data = null)
    {
        $this->Worker_Position_Data = $worker_Position_Data;
        return $this;
    }
    /**
     * Get Contingent_Worker_Type_Name value
     * @return string|null
     */
    public function getContingent_Worker_Type_Name()
    {
        return $this->Contingent_Worker_Type_Name;
    }
    /**
     * Set Contingent_Worker_Type_Name value
     * @param string $contingent_Worker_Type_Name
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setContingent_Worker_Type_Name($contingent_Worker_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($contingent_Worker_Type_Name) && !is_string($contingent_Worker_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contingent_Worker_Type_Name, true), gettype($contingent_Worker_Type_Name)), __LINE__);
        }
        $this->Contingent_Worker_Type_Name = $contingent_Worker_Type_Name;
        return $this;
    }
    /**
     * Get Vendor_Reference_Data value
     * @return \StructType\Vendor_ReferenceType|null
     */
    public function getVendor_Reference_Data()
    {
        return $this->Vendor_Reference_Data;
    }
    /**
     * Set Vendor_Reference_Data value
     * @param \StructType\Vendor_ReferenceType $vendor_Reference_Data
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setVendor_Reference_Data(\StructType\Vendor_ReferenceType $vendor_Reference_Data = null)
    {
        $this->Vendor_Reference_Data = $vendor_Reference_Data;
        return $this;
    }
    /**
     * Get Contract_Details_Data value
     * @return \StructType\Contract_Details_DataType|null
     */
    public function getContract_Details_Data()
    {
        return $this->Contract_Details_Data;
    }
    /**
     * Set Contract_Details_Data value
     * @param \StructType\Contract_Details_DataType $contract_Details_Data
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setContract_Details_Data(\StructType\Contract_Details_DataType $contract_Details_Data = null)
    {
        $this->Contract_Details_Data = $contract_Details_Data;
        return $this;
    }
    /**
     * Get Contract_End_Date value
     * @return string|null
     */
    public function getContract_End_Date()
    {
        return $this->Contract_End_Date;
    }
    /**
     * Set Contract_End_Date value
     * @param string $contract_End_Date
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setContract_End_Date($contract_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($contract_End_Date) && !is_string($contract_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_End_Date, true), gettype($contract_End_Date)), __LINE__);
        }
        $this->Contract_End_Date = $contract_End_Date;
        return $this;
    }
    /**
     * Get Worker_Document_Data value
     * @return \StructType\Worker_Document_Data_WWSType|null
     */
    public function getWorker_Document_Data()
    {
        return $this->Worker_Document_Data;
    }
    /**
     * Set Worker_Document_Data value
     * @param \StructType\Worker_Document_Data_WWSType $worker_Document_Data
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
     */
    public function setWorker_Document_Data(\StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this->Worker_Document_Data = $worker_Document_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Contingent_Worker_Contract_Info_DataType
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
