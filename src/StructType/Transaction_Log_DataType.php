<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction_Log_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing the data of the transaction log entry.
 * @subpackage Structs
 */
class Transaction_Log_DataType extends AbstractStructBase
{
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
     * The Transaction_Effective_Moment
     * Meta information extracted from the WSDL
     * - documentation: Date attribute identifying the effective moment of the transaction.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Transaction_Effective_Moment;
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
     * The Transaction_Log_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: References to the transaction log types of the transaction.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Transaction_Log_TypeObjectType[]
     */
    public $Transaction_Log_Type_Reference;
    /**
     * The Transaction_Target_Reference
     * Meta information extracted from the WSDL
     * - documentation: References to the transaction targets of the transaction.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Event_TargetObjectType[]
     */
    public $Transaction_Target_Reference;
    /**
     * The Is_Rescind_Or_Rescinded
     * Meta information extracted from the WSDL
     * - documentation: This transaction log is either an event that has been rescinded or is a rescind event that rescinds another event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Rescind_Or_Rescinded;
    /**
     * The Is_Correction_Or_Corrected
     * Meta information extracted from the WSDL
     * - documentation: This transaction log is either an event that has been corrected or is a correction event that corrects another event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Correction_Or_Corrected;
    /**
     * Constructor method for Transaction_Log_DataType
     * @uses Transaction_Log_DataType::setTransaction_Log_Description()
     * @uses Transaction_Log_DataType::setTransaction_Effective_Moment()
     * @uses Transaction_Log_DataType::setTransaction_Entry_Moment()
     * @uses Transaction_Log_DataType::setTransaction_Log_Type_Reference()
     * @uses Transaction_Log_DataType::setTransaction_Target_Reference()
     * @uses Transaction_Log_DataType::setIs_Rescind_Or_Rescinded()
     * @uses Transaction_Log_DataType::setIs_Correction_Or_Corrected()
     * @param string $transaction_Log_Description
     * @param string $transaction_Effective_Moment
     * @param string $transaction_Entry_Moment
     * @param \StructType\Transaction_Log_TypeObjectType[] $transaction_Log_Type_Reference
     * @param \StructType\Event_TargetObjectType[] $transaction_Target_Reference
     * @param bool $is_Rescind_Or_Rescinded
     * @param bool $is_Correction_Or_Corrected
     */
    public function __construct($transaction_Log_Description = null, $transaction_Effective_Moment = null, $transaction_Entry_Moment = null, array $transaction_Log_Type_Reference = array(), array $transaction_Target_Reference = array(), $is_Rescind_Or_Rescinded = null, $is_Correction_Or_Corrected = null)
    {
        $this
            ->setTransaction_Log_Description($transaction_Log_Description)
            ->setTransaction_Effective_Moment($transaction_Effective_Moment)
            ->setTransaction_Entry_Moment($transaction_Entry_Moment)
            ->setTransaction_Log_Type_Reference($transaction_Log_Type_Reference)
            ->setTransaction_Target_Reference($transaction_Target_Reference)
            ->setIs_Rescind_Or_Rescinded($is_Rescind_Or_Rescinded)
            ->setIs_Correction_Or_Corrected($is_Correction_Or_Corrected);
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
     * @return \StructType\Transaction_Log_DataType
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
     * Get Transaction_Effective_Moment value
     * @return string|null
     */
    public function getTransaction_Effective_Moment()
    {
        return $this->Transaction_Effective_Moment;
    }
    /**
     * Set Transaction_Effective_Moment value
     * @param string $transaction_Effective_Moment
     * @return \StructType\Transaction_Log_DataType
     */
    public function setTransaction_Effective_Moment($transaction_Effective_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($transaction_Effective_Moment) && !is_string($transaction_Effective_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_Effective_Moment, true), gettype($transaction_Effective_Moment)), __LINE__);
        }
        $this->Transaction_Effective_Moment = $transaction_Effective_Moment;
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
     * @return \StructType\Transaction_Log_DataType
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
     * Get Transaction_Log_Type_Reference value
     * @return \StructType\Transaction_Log_TypeObjectType[]|null
     */
    public function getTransaction_Log_Type_Reference()
    {
        return $this->Transaction_Log_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Log_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Log_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Log_Type_ReferenceForArrayConstraintsFromSetTransaction_Log_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transaction_Log_DataTypeTransaction_Log_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$transaction_Log_DataTypeTransaction_Log_Type_ReferenceItem instanceof \StructType\Transaction_Log_TypeObjectType) {
                $invalidValues[] = is_object($transaction_Log_DataTypeTransaction_Log_Type_ReferenceItem) ? get_class($transaction_Log_DataTypeTransaction_Log_Type_ReferenceItem) : sprintf('%s(%s)', gettype($transaction_Log_DataTypeTransaction_Log_Type_ReferenceItem), var_export($transaction_Log_DataTypeTransaction_Log_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Log_Type_Reference property can only contain items of type \StructType\Transaction_Log_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Log_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Log_TypeObjectType[] $transaction_Log_Type_Reference
     * @return \StructType\Transaction_Log_DataType
     */
    public function setTransaction_Log_Type_Reference(array $transaction_Log_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Log_Type_ReferenceArrayErrorMessage = self::validateTransaction_Log_Type_ReferenceForArrayConstraintsFromSetTransaction_Log_Type_Reference($transaction_Log_Type_Reference))) {
            throw new \InvalidArgumentException($transaction_Log_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Log_Type_Reference = $transaction_Log_Type_Reference;
        return $this;
    }
    /**
     * Add item to Transaction_Log_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Log_TypeObjectType $item
     * @return \StructType\Transaction_Log_DataType
     */
    public function addToTransaction_Log_Type_Reference(\StructType\Transaction_Log_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Transaction_Log_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Log_Type_Reference property can only contain items of type \StructType\Transaction_Log_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Log_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Transaction_Target_Reference value
     * @return \StructType\Event_TargetObjectType[]|null
     */
    public function getTransaction_Target_Reference()
    {
        return $this->Transaction_Target_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Target_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Target_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Target_ReferenceForArrayConstraintsFromSetTransaction_Target_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transaction_Log_DataTypeTransaction_Target_ReferenceItem) {
            // validation for constraint: itemType
            if (!$transaction_Log_DataTypeTransaction_Target_ReferenceItem instanceof \StructType\Event_TargetObjectType) {
                $invalidValues[] = is_object($transaction_Log_DataTypeTransaction_Target_ReferenceItem) ? get_class($transaction_Log_DataTypeTransaction_Target_ReferenceItem) : sprintf('%s(%s)', gettype($transaction_Log_DataTypeTransaction_Target_ReferenceItem), var_export($transaction_Log_DataTypeTransaction_Target_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Target_Reference property can only contain items of type \StructType\Event_TargetObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Target_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Event_TargetObjectType[] $transaction_Target_Reference
     * @return \StructType\Transaction_Log_DataType
     */
    public function setTransaction_Target_Reference(array $transaction_Target_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Target_ReferenceArrayErrorMessage = self::validateTransaction_Target_ReferenceForArrayConstraintsFromSetTransaction_Target_Reference($transaction_Target_Reference))) {
            throw new \InvalidArgumentException($transaction_Target_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Target_Reference = $transaction_Target_Reference;
        return $this;
    }
    /**
     * Add item to Transaction_Target_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Event_TargetObjectType $item
     * @return \StructType\Transaction_Log_DataType
     */
    public function addToTransaction_Target_Reference(\StructType\Event_TargetObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Event_TargetObjectType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Target_Reference property can only contain items of type \StructType\Event_TargetObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Target_Reference[] = $item;
        return $this;
    }
    /**
     * Get Is_Rescind_Or_Rescinded value
     * @return bool|null
     */
    public function getIs_Rescind_Or_Rescinded()
    {
        return $this->Is_Rescind_Or_Rescinded;
    }
    /**
     * Set Is_Rescind_Or_Rescinded value
     * @param bool $is_Rescind_Or_Rescinded
     * @return \StructType\Transaction_Log_DataType
     */
    public function setIs_Rescind_Or_Rescinded($is_Rescind_Or_Rescinded = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Rescind_Or_Rescinded) && !is_bool($is_Rescind_Or_Rescinded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Rescind_Or_Rescinded, true), gettype($is_Rescind_Or_Rescinded)), __LINE__);
        }
        $this->Is_Rescind_Or_Rescinded = $is_Rescind_Or_Rescinded;
        return $this;
    }
    /**
     * Get Is_Correction_Or_Corrected value
     * @return bool|null
     */
    public function getIs_Correction_Or_Corrected()
    {
        return $this->Is_Correction_Or_Corrected;
    }
    /**
     * Set Is_Correction_Or_Corrected value
     * @param bool $is_Correction_Or_Corrected
     * @return \StructType\Transaction_Log_DataType
     */
    public function setIs_Correction_Or_Corrected($is_Correction_Or_Corrected = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Correction_Or_Corrected) && !is_bool($is_Correction_Or_Corrected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Correction_Or_Corrected, true), gettype($is_Correction_Or_Corrected)), __LINE__);
        }
        $this->Is_Correction_Or_Corrected = $is_Correction_Or_Corrected;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transaction_Log_DataType
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
