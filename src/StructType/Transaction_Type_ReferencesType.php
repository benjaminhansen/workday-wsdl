<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction_Type_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element containing Transaction Types.
 * @subpackage Structs
 */
class Transaction_Type_ReferencesType extends AbstractStructBase
{
    /**
     * The Transaction_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: If specified, this search criterium will return those Transaction Log Entries with Transaction Types that match the search criterium.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType[]
     */
    public $Transaction_Type_Reference;
    /**
     * Constructor method for Transaction_Type_ReferencesType
     * @uses Transaction_Type_ReferencesType::setTransaction_Type_Reference()
     * @param \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType[] $transaction_Type_Reference
     */
    public function __construct(array $transaction_Type_Reference = array())
    {
        $this
            ->setTransaction_Type_Reference($transaction_Type_Reference);
    }
    /**
     * Get Transaction_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType[]|null
     */
    public function getTransaction_Type_Reference()
    {
        return $this->Transaction_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Type_ReferenceForArrayConstraintsFromSetTransaction_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transaction_Type_ReferencesTypeTransaction_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$transaction_Type_ReferencesTypeTransaction_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType) {
                $invalidValues[] = is_object($transaction_Type_ReferencesTypeTransaction_Type_ReferenceItem) ? get_class($transaction_Type_ReferencesTypeTransaction_Type_ReferenceItem) : sprintf('%s(%s)', gettype($transaction_Type_ReferencesTypeTransaction_Type_ReferenceItem), var_export($transaction_Type_ReferencesTypeTransaction_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType[] $transaction_Type_Reference
     * @return \WorkdayWsdl\\StructType\Transaction_Type_ReferencesType
     */
    public function setTransaction_Type_Reference(array $transaction_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Type_ReferenceArrayErrorMessage = self::validateTransaction_Type_ReferenceForArrayConstraintsFromSetTransaction_Type_Reference($transaction_Type_Reference))) {
            throw new \InvalidArgumentException($transaction_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Type_Reference = $transaction_Type_Reference;
        return $this;
    }
    /**
     * Add item to Transaction_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Transaction_Type_ReferencesType
     */
    public function addToTransaction_Type_Reference(\WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Transaction_Log_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Transaction_Type_ReferencesType
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
