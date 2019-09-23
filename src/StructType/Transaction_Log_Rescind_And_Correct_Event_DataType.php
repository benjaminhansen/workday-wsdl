<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction_Log_Rescind_And_Correct_Event_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Details on the rescind or correct of the event described in the main transaction data section.
 * @subpackage Structs
 */
class Transaction_Log_Rescind_And_Correct_Event_DataType extends AbstractStructBase
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
     * The Transaction_Log_Description
     * Meta information extracted from the WSDL
     * - documentation: The Description of the Transaction Log
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Transaction_Log_Description;
    /**
     * The Is_Correction
     * Meta information extracted from the WSDL
     * - documentation: True if this is a correction of the main transaction.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Correction;
    /**
     * The Is_Rescind
     * Meta information extracted from the WSDL
     * - documentation: True if this is a rescind of the main transaction.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Rescind;
    /**
     * The Prior_Effective_Moment
     * Meta information extracted from the WSDL
     * - documentation: Date attribute identifying the effective moment of the transaction prior to the correction. This date will be the same as the transaction effective moment if the correction did not involve a date change.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Prior_Effective_Moment;
    /**
     * The Transaction_Entry_Moment
     * Meta information extracted from the WSDL
     * - documentation: Date attribute identifying the entry moment of the transaction.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Transaction_Entry_Moment;
    /**
     * Constructor method for Transaction_Log_Rescind_And_Correct_Event_DataType
     * @uses Transaction_Log_Rescind_And_Correct_Event_DataType::setTransaction_Log_Reference()
     * @uses Transaction_Log_Rescind_And_Correct_Event_DataType::setTransaction_Log_Description()
     * @uses Transaction_Log_Rescind_And_Correct_Event_DataType::setIs_Correction()
     * @uses Transaction_Log_Rescind_And_Correct_Event_DataType::setIs_Rescind()
     * @uses Transaction_Log_Rescind_And_Correct_Event_DataType::setPrior_Effective_Moment()
     * @uses Transaction_Log_Rescind_And_Correct_Event_DataType::setTransaction_Entry_Moment()
     * @param \StructType\Transaction_LogObjectType $transaction_Log_Reference
     * @param string $transaction_Log_Description
     * @param bool $is_Correction
     * @param bool $is_Rescind
     * @param string $prior_Effective_Moment
     * @param string $transaction_Entry_Moment
     */
    public function __construct(\StructType\Transaction_LogObjectType $transaction_Log_Reference = null, $transaction_Log_Description = null, $is_Correction = null, $is_Rescind = null, $prior_Effective_Moment = null, $transaction_Entry_Moment = null)
    {
        $this
            ->setTransaction_Log_Reference($transaction_Log_Reference)
            ->setTransaction_Log_Description($transaction_Log_Description)
            ->setIs_Correction($is_Correction)
            ->setIs_Rescind($is_Rescind)
            ->setPrior_Effective_Moment($prior_Effective_Moment)
            ->setTransaction_Entry_Moment($transaction_Entry_Moment);
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
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
     */
    public function setTransaction_Log_Reference(\StructType\Transaction_LogObjectType $transaction_Log_Reference = null)
    {
        $this->Transaction_Log_Reference = $transaction_Log_Reference;
        return $this;
    }
    /**
     * Get Transaction_Log_Description value
     * @return string|null
     */
    public function getTransaction_Log_Description()
    {
        return $this->Transaction_Log_Description;
    }
    /**
     * Set Transaction_Log_Description value
     * @param string $transaction_Log_Description
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
     */
    public function setTransaction_Log_Description($transaction_Log_Description = null)
    {
        // validation for constraint: string
        if (!is_null($transaction_Log_Description) && !is_string($transaction_Log_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_Log_Description, true), gettype($transaction_Log_Description)), __LINE__);
        }
        $this->Transaction_Log_Description = $transaction_Log_Description;
        return $this;
    }
    /**
     * Get Is_Correction value
     * @return bool|null
     */
    public function getIs_Correction()
    {
        return $this->Is_Correction;
    }
    /**
     * Set Is_Correction value
     * @param bool $is_Correction
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
     */
    public function setIs_Correction($is_Correction = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Correction) && !is_bool($is_Correction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Correction, true), gettype($is_Correction)), __LINE__);
        }
        $this->Is_Correction = $is_Correction;
        return $this;
    }
    /**
     * Get Is_Rescind value
     * @return bool|null
     */
    public function getIs_Rescind()
    {
        return $this->Is_Rescind;
    }
    /**
     * Set Is_Rescind value
     * @param bool $is_Rescind
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
     */
    public function setIs_Rescind($is_Rescind = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Rescind) && !is_bool($is_Rescind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Rescind, true), gettype($is_Rescind)), __LINE__);
        }
        $this->Is_Rescind = $is_Rescind;
        return $this;
    }
    /**
     * Get Prior_Effective_Moment value
     * @return string|null
     */
    public function getPrior_Effective_Moment()
    {
        return $this->Prior_Effective_Moment;
    }
    /**
     * Set Prior_Effective_Moment value
     * @param string $prior_Effective_Moment
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
     */
    public function setPrior_Effective_Moment($prior_Effective_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($prior_Effective_Moment) && !is_string($prior_Effective_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prior_Effective_Moment, true), gettype($prior_Effective_Moment)), __LINE__);
        }
        $this->Prior_Effective_Moment = $prior_Effective_Moment;
        return $this;
    }
    /**
     * Get Transaction_Entry_Moment value
     * @return string|null
     */
    public function getTransaction_Entry_Moment()
    {
        return $this->Transaction_Entry_Moment;
    }
    /**
     * Set Transaction_Entry_Moment value
     * @param string $transaction_Entry_Moment
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
     */
    public function setTransaction_Entry_Moment($transaction_Entry_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($transaction_Entry_Moment) && !is_string($transaction_Entry_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_Entry_Moment, true), gettype($transaction_Entry_Moment)), __LINE__);
        }
        $this->Transaction_Entry_Moment = $transaction_Entry_Moment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transaction_Log_Rescind_And_Correct_Event_DataType
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
