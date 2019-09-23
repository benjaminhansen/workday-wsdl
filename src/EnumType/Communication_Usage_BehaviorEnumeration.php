<?php

namespace EnumType;

/**
 * This class stands for Communication_Usage_BehaviorEnumeration EnumType
 * @subpackage Enumerations
 */
class Communication_Usage_BehaviorEnumeration
{
    /**
     * Constant for value 'Billing'
     * @return string 'Billing'
     */
    const VALUE_BILLING = 'Billing';
    /**
     * Constant for value 'Customer Invoice'
     * @return string 'Customer Invoice'
     */
    const VALUE_CUSTOMER_INVOICE = 'Customer Invoice';
    /**
     * Constant for value 'Customer Statement'
     * @return string 'Customer Statement'
     */
    const VALUE_CUSTOMER_STATEMENT = 'Customer Statement';
    /**
     * Constant for value 'Dunning Letter'
     * @return string 'Dunning Letter'
     */
    const VALUE_DUNNING_LETTER = 'Dunning Letter';
    /**
     * Constant for value 'International Assignment'
     * @return string 'International Assignment'
     */
    const VALUE_INTERNATIONAL_ASSIGNMENT = 'International Assignment';
    /**
     * Constant for value 'Lockbox'
     * @return string 'Lockbox'
     */
    const VALUE_LOCKBOX = 'Lockbox';
    /**
     * Constant for value 'Mailing'
     * @return string 'Mailing'
     */
    const VALUE_MAILING = 'Mailing';
    /**
     * Constant for value 'Mileage Calculation'
     * @return string 'Mileage Calculation'
     */
    const VALUE_MILEAGE_CALCULATION = 'Mileage Calculation';
    /**
     * Constant for value 'One Time Passcode'
     * @return string 'One Time Passcode'
     */
    const VALUE_ONE_TIME_PASSCODE = 'One Time Passcode';
    /**
     * Constant for value 'Other - Business'
     * @return string 'Other - Business'
     */
    const VALUE_OTHER_BUSINESS = 'Other - Business';
    /**
     * Constant for value 'Other - Home'
     * @return string 'Other - Home'
     */
    const VALUE_OTHER_HOME = 'Other - Home';
    /**
     * Constant for value 'Other - Work'
     * @return string 'Other - Work'
     */
    const VALUE_OTHER_WORK = 'Other - Work';
    /**
     * Constant for value 'Paycheck'
     * @return string 'Paycheck'
     */
    const VALUE_PAYCHECK = 'Paycheck';
    /**
     * Constant for value 'Payroll Tax Form'
     * @return string 'Payroll Tax Form'
     */
    const VALUE_PAYROLL_TAX_FORM = 'Payroll Tax Form';
    /**
     * Constant for value 'Permanent'
     * @return string 'Permanent'
     */
    const VALUE_PERMANENT = 'Permanent';
    /**
     * Constant for value 'Procurement'
     * @return string 'Procurement'
     */
    const VALUE_PROCUREMENT = 'Procurement';
    /**
     * Constant for value 'Remit To'
     * @return string 'Remit To'
     */
    const VALUE_REMIT_TO = 'Remit To';
    /**
     * Constant for value 'Shipping'
     * @return string 'Shipping'
     */
    const VALUE_SHIPPING = 'Shipping';
    /**
     * Constant for value 'Storage'
     * @return string 'Storage'
     */
    const VALUE_STORAGE = 'Storage';
    /**
     * Constant for value 'Street Address'
     * @return string 'Street Address'
     */
    const VALUE_STREET_ADDRESS = 'Street Address';
    /**
     * Constant for value 'Tax Reporting'
     * @return string 'Tax Reporting'
     */
    const VALUE_TAX_REPORTING = 'Tax Reporting';
    /**
     * Constant for value 'Work From Home'
     * @return string 'Work From Home'
     */
    const VALUE_WORK_FROM_HOME = 'Work From Home';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BILLING
     * @uses self::VALUE_CUSTOMER_INVOICE
     * @uses self::VALUE_CUSTOMER_STATEMENT
     * @uses self::VALUE_DUNNING_LETTER
     * @uses self::VALUE_INTERNATIONAL_ASSIGNMENT
     * @uses self::VALUE_LOCKBOX
     * @uses self::VALUE_MAILING
     * @uses self::VALUE_MILEAGE_CALCULATION
     * @uses self::VALUE_ONE_TIME_PASSCODE
     * @uses self::VALUE_OTHER_BUSINESS
     * @uses self::VALUE_OTHER_HOME
     * @uses self::VALUE_OTHER_WORK
     * @uses self::VALUE_PAYCHECK
     * @uses self::VALUE_PAYROLL_TAX_FORM
     * @uses self::VALUE_PERMANENT
     * @uses self::VALUE_PROCUREMENT
     * @uses self::VALUE_REMIT_TO
     * @uses self::VALUE_SHIPPING
     * @uses self::VALUE_STORAGE
     * @uses self::VALUE_STREET_ADDRESS
     * @uses self::VALUE_TAX_REPORTING
     * @uses self::VALUE_WORK_FROM_HOME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BILLING,
            self::VALUE_CUSTOMER_INVOICE,
            self::VALUE_CUSTOMER_STATEMENT,
            self::VALUE_DUNNING_LETTER,
            self::VALUE_INTERNATIONAL_ASSIGNMENT,
            self::VALUE_LOCKBOX,
            self::VALUE_MAILING,
            self::VALUE_MILEAGE_CALCULATION,
            self::VALUE_ONE_TIME_PASSCODE,
            self::VALUE_OTHER_BUSINESS,
            self::VALUE_OTHER_HOME,
            self::VALUE_OTHER_WORK,
            self::VALUE_PAYCHECK,
            self::VALUE_PAYROLL_TAX_FORM,
            self::VALUE_PERMANENT,
            self::VALUE_PROCUREMENT,
            self::VALUE_REMIT_TO,
            self::VALUE_SHIPPING,
            self::VALUE_STORAGE,
            self::VALUE_STREET_ADDRESS,
            self::VALUE_TAX_REPORTING,
            self::VALUE_WORK_FROM_HOME,
        );
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
