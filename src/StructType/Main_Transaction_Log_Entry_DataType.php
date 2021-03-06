<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Main_Transaction_Log_Entry_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The details of the transaction that has been rescinded or corrected.
 * @subpackage Structs
 */
class Main_Transaction_Log_Entry_DataType extends AbstractStructBase
{
    /**
     * The Transaction_Log_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to a transaction log entry.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Transaction_LogObjectType
     */
    public $Transaction_Log_Reference;
    /**
     * The Transaction_Log_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing the rescind and correction data of the transaction log entry.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Transaction_Log_DataType
     */
    public $Transaction_Log_Data;
    /**
     * Constructor method for Main_Transaction_Log_Entry_DataType
     * @uses Main_Transaction_Log_Entry_DataType::setTransaction_Log_Reference()
     * @uses Main_Transaction_Log_Entry_DataType::setTransaction_Log_Data()
     * @param \WorkdayWsdl\\StructType\Transaction_LogObjectType $transaction_Log_Reference
     * @param \WorkdayWsdl\\StructType\Transaction_Log_DataType $transaction_Log_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Transaction_LogObjectType $transaction_Log_Reference = null, \WorkdayWsdl\\StructType\Transaction_Log_DataType $transaction_Log_Data = null)
    {
        $this
            ->setTransaction_Log_Reference($transaction_Log_Reference)
            ->setTransaction_Log_Data($transaction_Log_Data);
    }
    /**
     * Get Transaction_Log_Reference value
     * @return \WorkdayWsdl\\StructType\Transaction_LogObjectType|null
     */
    public function getTransaction_Log_Reference()
    {
        return $this->Transaction_Log_Reference;
    }
    /**
     * Set Transaction_Log_Reference value
     * @param \WorkdayWsdl\\StructType\Transaction_LogObjectType $transaction_Log_Reference
     * @return \WorkdayWsdl\\StructType\Main_Transaction_Log_Entry_DataType
     */
    public function setTransaction_Log_Reference(\WorkdayWsdl\\StructType\Transaction_LogObjectType $transaction_Log_Reference = null)
    {
        $this->Transaction_Log_Reference = $transaction_Log_Reference;
        return $this;
    }
    /**
     * Get Transaction_Log_Data value
     * @return \WorkdayWsdl\\StructType\Transaction_Log_DataType|null
     */
    public function getTransaction_Log_Data()
    {
        return $this->Transaction_Log_Data;
    }
    /**
     * Set Transaction_Log_Data value
     * @param \WorkdayWsdl\\StructType\Transaction_Log_DataType $transaction_Log_Data
     * @return \WorkdayWsdl\\StructType\Main_Transaction_Log_Entry_DataType
     */
    public function setTransaction_Log_Data(\WorkdayWsdl\\StructType\Transaction_Log_DataType $transaction_Log_Data = null)
    {
        $this->Transaction_Log_Data = $transaction_Log_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Main_Transaction_Log_Entry_DataType
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
