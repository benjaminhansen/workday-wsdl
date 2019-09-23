<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction_Log_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Subscriber Reference must have an enabled Transaction Log Service configuration. | Searches the transaction log for business processes and event lites to find specific events that occurred during a period of time.
 * @subpackage Structs
 */
class Transaction_Log_CriteriaType extends AbstractStructBase
{
    /**
     * The Transaction_Date_Range_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing Effective and Updated DateTime data.
     * - minOccurs: 0
     * @var \StructType\Effective_And_Updated_DateTime_DataType
     */
    public $Transaction_Date_Range_Data;
    /**
     * The Transaction_Type_References
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criteria will return those Transaction Log Entries which match the Transaction Types specified here.
     * - choice: Transaction_Type_References | Subscriber_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Transaction_Type_ReferencesType
     */
    public $Transaction_Type_References;
    /**
     * The Subscriber_Reference
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those Transaction Log Entries that match the Transaction Types defined in the subscription of the subscriber.
     * - choice: Transaction_Type_References | Subscriber_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SubscriberObjectType
     */
    public $Subscriber_Reference;
    /**
     * Constructor method for Transaction_Log_CriteriaType
     * @uses Transaction_Log_CriteriaType::setTransaction_Date_Range_Data()
     * @uses Transaction_Log_CriteriaType::setTransaction_Type_References()
     * @uses Transaction_Log_CriteriaType::setSubscriber_Reference()
     * @param \StructType\Effective_And_Updated_DateTime_DataType $transaction_Date_Range_Data
     * @param \StructType\Transaction_Type_ReferencesType $transaction_Type_References
     * @param \StructType\SubscriberObjectType $subscriber_Reference
     */
    public function __construct(\StructType\Effective_And_Updated_DateTime_DataType $transaction_Date_Range_Data = null, \StructType\Transaction_Type_ReferencesType $transaction_Type_References = null, \StructType\SubscriberObjectType $subscriber_Reference = null)
    {
        $this
            ->setTransaction_Date_Range_Data($transaction_Date_Range_Data)
            ->setTransaction_Type_References($transaction_Type_References)
            ->setSubscriber_Reference($subscriber_Reference);
    }
    /**
     * Get Transaction_Date_Range_Data value
     * @return \StructType\Effective_And_Updated_DateTime_DataType|null
     */
    public function getTransaction_Date_Range_Data()
    {
        return $this->Transaction_Date_Range_Data;
    }
    /**
     * Set Transaction_Date_Range_Data value
     * @param \StructType\Effective_And_Updated_DateTime_DataType $transaction_Date_Range_Data
     * @return \StructType\Transaction_Log_CriteriaType
     */
    public function setTransaction_Date_Range_Data(\StructType\Effective_And_Updated_DateTime_DataType $transaction_Date_Range_Data = null)
    {
        $this->Transaction_Date_Range_Data = $transaction_Date_Range_Data;
        return $this;
    }
    /**
     * Get Transaction_Type_References value
     * @return \StructType\Transaction_Type_ReferencesType|null
     */
    public function getTransaction_Type_References()
    {
        return isset($this->Transaction_Type_References) ? $this->Transaction_Type_References : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTransaction_Type_References method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Type_References method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTransaction_Type_ReferencesForChoiceConstraintsFromSetTransaction_Type_References($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Subscriber_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Transaction_Type_References can\'t be set as the property %s is already set. Only one property must be set among these properties: Transaction_Type_References, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Transaction_Type_References value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction_Type_ReferencesType $transaction_Type_References
     * @return \StructType\Transaction_Log_CriteriaType
     */
    public function setTransaction_Type_References(\StructType\Transaction_Type_ReferencesType $transaction_Type_References = null)
    {
        // validation for constraint: choice(Transaction_Type_References, Subscriber_Reference)
        if ('' !== ($transaction_Type_ReferencesChoiceErrorMessage = self::validateTransaction_Type_ReferencesForChoiceConstraintsFromSetTransaction_Type_References($transaction_Type_References))) {
            throw new \InvalidArgumentException($transaction_Type_ReferencesChoiceErrorMessage, __LINE__);
        }
        if (is_null($transaction_Type_References) || (is_array($transaction_Type_References) && empty($transaction_Type_References))) {
            unset($this->Transaction_Type_References);
        } else {
            $this->Transaction_Type_References = $transaction_Type_References;
        }
        return $this;
    }
    /**
     * Get Subscriber_Reference value
     * @return \StructType\SubscriberObjectType|null
     */
    public function getSubscriber_Reference()
    {
        return isset($this->Subscriber_Reference) ? $this->Subscriber_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSubscriber_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscriber_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubscriber_ReferenceForChoiceConstraintsFromSetSubscriber_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Transaction_Type_References',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Subscriber_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Subscriber_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Subscriber_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\SubscriberObjectType $subscriber_Reference
     * @return \StructType\Transaction_Log_CriteriaType
     */
    public function setSubscriber_Reference(\StructType\SubscriberObjectType $subscriber_Reference = null)
    {
        // validation for constraint: choice(Transaction_Type_References, Subscriber_Reference)
        if ('' !== ($subscriber_ReferenceChoiceErrorMessage = self::validateSubscriber_ReferenceForChoiceConstraintsFromSetSubscriber_Reference($subscriber_Reference))) {
            throw new \InvalidArgumentException($subscriber_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($subscriber_Reference) || (is_array($subscriber_Reference) && empty($subscriber_Reference))) {
            unset($this->Subscriber_Reference);
        } else {
            $this->Subscriber_Reference = $subscriber_Reference;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transaction_Log_CriteriaType
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
