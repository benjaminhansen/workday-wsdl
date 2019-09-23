<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Professional_Experience_Rating_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Work Experience Rating.
 * @subpackage Structs
 */
class Professional_Experience_Rating_ReferenceType extends AbstractStructBase
{
    /**
     * The Rating_Description
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of Work Experience Rating.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Rating_Description;
    /**
     * Constructor method for Professional_Experience_Rating_ReferenceType
     * @uses Professional_Experience_Rating_ReferenceType::setRating_Description()
     * @param string $rating_Description
     */
    public function __construct($rating_Description = null)
    {
        $this
            ->setRating_Description($rating_Description);
    }
    /**
     * Get Rating_Description value
     * @return string|null
     */
    public function getRating_Description()
    {
        return $this->Rating_Description;
    }
    /**
     * Set Rating_Description value
     * @param string $rating_Description
     * @return \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType
     */
    public function setRating_Description($rating_Description = null)
    {
        // validation for constraint: string
        if (!is_null($rating_Description) && !is_string($rating_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rating_Description, true), gettype($rating_Description)), __LINE__);
        }
        $this->Rating_Description = $rating_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType
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
