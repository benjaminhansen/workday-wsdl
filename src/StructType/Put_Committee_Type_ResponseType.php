<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Committee_Type_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Committee Type Response
 * @subpackage Structs
 */
class Put_Committee_Type_ResponseType extends AbstractStructBase
{
    /**
     * The Committee_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Type. Used to identify the Committee Type to update. Leave blank on an Add.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_TypeObjectType
     */
    public $Committee_Type_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Committee_Type_ResponseType
     * @uses Put_Committee_Type_ResponseType::setCommittee_Type_Reference()
     * @uses Put_Committee_Type_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Committee_TypeObjectType $committee_Type_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_TypeObjectType $committee_Type_Reference = null, $version = null)
    {
        $this
            ->setCommittee_Type_Reference($committee_Type_Reference)
            ->setVersion($version);
    }
    /**
     * Get Committee_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_TypeObjectType|null
     */
    public function getCommittee_Type_Reference()
    {
        return $this->Committee_Type_Reference;
    }
    /**
     * Set Committee_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_TypeObjectType $committee_Type_Reference
     * @return \WorkdayWsdl\\StructType\Put_Committee_Type_ResponseType
     */
    public function setCommittee_Type_Reference(\WorkdayWsdl\\StructType\Committee_TypeObjectType $committee_Type_Reference = null)
    {
        $this->Committee_Type_Reference = $committee_Type_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Committee_Type_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Committee_Type_ResponseType
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
