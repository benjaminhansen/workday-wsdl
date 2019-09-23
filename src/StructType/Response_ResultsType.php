<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Response_ResultsType StructType
 * Meta information extracted from the WSDL
 * - documentation: The "Response_Results" element contains summary information about the data that has been returned from your request including "Total_Results", "Total_Pages", and the current "Page" returned.
 * @subpackage Structs
 */
class Response_ResultsType extends AbstractStructBase
{
    /**
     * The Total_Results
     * Meta information extracted from the WSDL
     * - documentation: The total number of results that have been returned from your request.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Total_Results;
    /**
     * The Total_Pages
     * Meta information extracted from the WSDL
     * - documentation: The total number of pages that exist for your request. A page of data in WWS contains a maximum of 100 entries. So, if you have exactly 1,000 employees returned in a request, then you will have 10 pages of data that will need to be
     * retrieved to build your complete dataset.Each page contains a maximum of 100 entries.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Total_Pages;
    /**
     * The Page_Results
     * Meta information extracted from the WSDL
     * - documentation: Number of Results in current page.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Page_Results;
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
     * Constructor method for Response_ResultsType
     * @uses Response_ResultsType::setTotal_Results()
     * @uses Response_ResultsType::setTotal_Pages()
     * @uses Response_ResultsType::setPage_Results()
     * @uses Response_ResultsType::setPage()
     * @param float $total_Results
     * @param float $total_Pages
     * @param float $page_Results
     * @param float $page
     */
    public function __construct($total_Results = null, $total_Pages = null, $page_Results = null, $page = null)
    {
        $this
            ->setTotal_Results($total_Results)
            ->setTotal_Pages($total_Pages)
            ->setPage_Results($page_Results)
            ->setPage($page);
    }
    /**
     * Get Total_Results value
     * @return float|null
     */
    public function getTotal_Results()
    {
        return $this->Total_Results;
    }
    /**
     * Set Total_Results value
     * @param float $total_Results
     * @return \StructType\Response_ResultsType
     */
    public function setTotal_Results($total_Results = null)
    {
        // validation for constraint: float
        if (!is_null($total_Results) && !(is_float($total_Results) || is_numeric($total_Results))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_Results, true), gettype($total_Results)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($total_Results) && mb_strlen(mb_substr($total_Results, mb_strpos($total_Results, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($total_Results, true), mb_strlen(mb_substr($total_Results, mb_strpos($total_Results, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($total_Results) && $total_Results < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($total_Results, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($total_Results) && mb_strlen(preg_replace('/(\D)/', '', $total_Results)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($total_Results, true), mb_strlen(preg_replace('/(\D)/', '', $total_Results))), __LINE__);
        }
        $this->Total_Results = $total_Results;
        return $this;
    }
    /**
     * Get Total_Pages value
     * @return float|null
     */
    public function getTotal_Pages()
    {
        return $this->Total_Pages;
    }
    /**
     * Set Total_Pages value
     * @param float $total_Pages
     * @return \StructType\Response_ResultsType
     */
    public function setTotal_Pages($total_Pages = null)
    {
        // validation for constraint: float
        if (!is_null($total_Pages) && !(is_float($total_Pages) || is_numeric($total_Pages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_Pages, true), gettype($total_Pages)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($total_Pages) && mb_strlen(mb_substr($total_Pages, mb_strpos($total_Pages, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($total_Pages, true), mb_strlen(mb_substr($total_Pages, mb_strpos($total_Pages, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($total_Pages) && $total_Pages < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($total_Pages, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($total_Pages) && mb_strlen(preg_replace('/(\D)/', '', $total_Pages)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($total_Pages, true), mb_strlen(preg_replace('/(\D)/', '', $total_Pages))), __LINE__);
        }
        $this->Total_Pages = $total_Pages;
        return $this;
    }
    /**
     * Get Page_Results value
     * @return float|null
     */
    public function getPage_Results()
    {
        return $this->Page_Results;
    }
    /**
     * Set Page_Results value
     * @param float $page_Results
     * @return \StructType\Response_ResultsType
     */
    public function setPage_Results($page_Results = null)
    {
        // validation for constraint: float
        if (!is_null($page_Results) && !(is_float($page_Results) || is_numeric($page_Results))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($page_Results, true), gettype($page_Results)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($page_Results) && mb_strlen(mb_substr($page_Results, mb_strpos($page_Results, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($page_Results, true), mb_strlen(mb_substr($page_Results, mb_strpos($page_Results, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($page_Results) && $page_Results < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($page_Results, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($page_Results) && mb_strlen(preg_replace('/(\D)/', '', $page_Results)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($page_Results, true), mb_strlen(preg_replace('/(\D)/', '', $page_Results))), __LINE__);
        }
        $this->Page_Results = $page_Results;
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
     * @return \StructType\Response_ResultsType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Response_ResultsType
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
