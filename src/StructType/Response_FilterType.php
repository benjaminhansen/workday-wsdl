<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Response_FilterType StructType
 * Meta information extracted from the WSDL
 * - documentation: Page number cannot be zero. | Parameters that let you filter the data returned in the response. You can filter returned data by dates and page attributes.
 * @subpackage Structs
 */
class Response_FilterType extends AbstractStructBase
{
    /**
     * The As_Of_Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date when application data, such as benefits and compensation, are deemed effective in the Workday system. (Also referred to as the "Effective Moment".) If not specified, this date defaults to TODAY.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $As_Of_Effective_Date;
    /**
     * The As_Of_Entry_DateTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date and time that data was entered into the system. (This field is also referred to as the "Entry Moment".) If not specified, defaults to the CURRENT DATE/TIME.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $As_Of_Entry_DateTime;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - documentation: Indicates the page of data to return in the response, and defaults to the first page (Page = 1). For responses that contain more than one page of data, use this parameter to retrieve the additional pages of data. For example, set
     * Page = 2 to retrieve the second page of data.Note: If you set the page parameter, you must also specify the "As_Of_Entry_Date" to ensure that the result set remains the same between your requests. | The page of data that has been returned for the
     * given request.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Page;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: Sets the number of objects to return within each response page (Min = 1, Max = 999, Default = 100 if not set). Any values you set must be between 1-999.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 3
     * @var float
     */
    public $Count;
    /**
     * Constructor method for Response_FilterType
     * @uses Response_FilterType::setAs_Of_Effective_Date()
     * @uses Response_FilterType::setAs_Of_Entry_DateTime()
     * @uses Response_FilterType::setPage()
     * @uses Response_FilterType::setCount()
     * @param string $as_Of_Effective_Date
     * @param string $as_Of_Entry_DateTime
     * @param float $page
     * @param float $count
     */
    public function __construct($as_Of_Effective_Date = null, $as_Of_Entry_DateTime = null, $page = null, $count = null)
    {
        $this
            ->setAs_Of_Effective_Date($as_Of_Effective_Date)
            ->setAs_Of_Entry_DateTime($as_Of_Entry_DateTime)
            ->setPage($page)
            ->setCount($count);
    }
    /**
     * Get As_Of_Effective_Date value
     * @return string|null
     */
    public function getAs_Of_Effective_Date()
    {
        return $this->As_Of_Effective_Date;
    }
    /**
     * Set As_Of_Effective_Date value
     * @param string $as_Of_Effective_Date
     * @return \WorkdayWsdl\\StructType\Response_FilterType
     */
    public function setAs_Of_Effective_Date($as_Of_Effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Effective_Date) && !is_string($as_Of_Effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Effective_Date, true), gettype($as_Of_Effective_Date)), __LINE__);
        }
        $this->As_Of_Effective_Date = $as_Of_Effective_Date;
        return $this;
    }
    /**
     * Get As_Of_Entry_DateTime value
     * @return string|null
     */
    public function getAs_Of_Entry_DateTime()
    {
        return $this->As_Of_Entry_DateTime;
    }
    /**
     * Set As_Of_Entry_DateTime value
     * @param string $as_Of_Entry_DateTime
     * @return \WorkdayWsdl\\StructType\Response_FilterType
     */
    public function setAs_Of_Entry_DateTime($as_Of_Entry_DateTime = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Entry_DateTime) && !is_string($as_Of_Entry_DateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Entry_DateTime, true), gettype($as_Of_Entry_DateTime)), __LINE__);
        }
        $this->As_Of_Entry_DateTime = $as_Of_Entry_DateTime;
        return $this;
    }
    /**
     * Get Page value
     * @return float|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param float $page
     * @return \WorkdayWsdl\\StructType\Response_FilterType
     */
    public function setPage($page = null)
    {
        // validation for constraint: float
        if (!is_null($page) && !(is_float($page) || is_numeric($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($page) && mb_strlen(mb_substr($page, mb_strpos($page, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($page, true), mb_strlen(mb_substr($page, mb_strpos($page, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($page) && $page < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($page, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($page) && mb_strlen(preg_replace('/(\D)/', '', $page)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($page, true), mb_strlen(preg_replace('/(\D)/', '', $page))), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Get Count value
     * @return float|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param float $count
     * @return \WorkdayWsdl\\StructType\Response_FilterType
     */
    public function setCount($count = null)
    {
        // validation for constraint: float
        if (!is_null($count) && !(is_float($count) || is_numeric($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($count) && mb_strlen(mb_substr($count, mb_strpos($count, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($count, true), mb_strlen(mb_substr($count, mb_strpos($count, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($count) && $count < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($count, true)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($count) && mb_strlen(preg_replace('/(\D)/', '', $count)) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($count, true), mb_strlen(preg_replace('/(\D)/', '', $count))), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Response_FilterType
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
