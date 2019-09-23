<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction_Log_EntryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing the transaction log entry.
 * @subpackage Structs
 */
class Transaction_Log_EntryType extends AbstractStructBase
{
    /**
     * The Transaction_Log_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to a transaction log entry.
     * - minOccurs: 0
     * @var \StructType\Transaction_LogObjectType
     */
    public $Transaction_Log_Reference;
    /**
     * The Transaction_Log_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Transaction_Log_DataType
     */
    public $Transaction_Log_Data;
    /**
     * Constructor method for Transaction_Log_EntryType
     * @uses Transaction_Log_EntryType::setTransaction_Log_Reference()
     * @uses Transaction_Log_EntryType::setTransaction_Log_Data()
     * @param \StructType\Transaction_LogObjectType $transaction_Log_Reference
     * @param \StructType\Transaction_Log_DataType $transaction_Log_Data
     */
    public function __construct(\StructType\Transaction_LogObjectType $transaction_Log_Reference = null, \StructType\Transaction_Log_DataType $transaction_Log_Data = null)
    {
        $this
            ->setTransaction_Log_Reference($transaction_Log_Reference)
            ->setTransaction_Log_Data($transaction_Log_Data);
    }
    /**
     * Get Transaction_Log_Reference value
     * @return \StructType\Transaction_LogObjectType|null
     */
    public function getTransaction_Log_Reference()
    {
        return $this->Transaction_Log_Reference;
    }
    /**
     * Set Transaction_Log_Reference value
     * @param \StructType\Transaction_LogObjectType $transaction_Log_Reference
     * @return \StructType\Transaction_Log_EntryType
     */
    public function setTransaction_Log_Reference(\StructType\Transaction_LogObjectType $transaction_Log_Reference = null)
    {
        $this->Transaction_Log_Reference = $transaction_Log_Reference;
        return $this;
    }
    /**
     * Get Transaction_Log_Data value
     * @return \StructType\Transaction_Log_DataType|null
     */
    public function getTransaction_Log_Data()
    {
        return $this->Transaction_Log_Data;
    }
    /**
     * Set Transaction_Log_Data value
     * @param \StructType\Transaction_Log_DataType $transaction_Log_Data
     * @return \StructType\Transaction_Log_EntryType
     */
    public function setTransaction_Log_Data(\StructType\Transaction_Log_DataType $transaction_Log_Data = null)
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
     * @return \StructType\Transaction_Log_EntryType
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
