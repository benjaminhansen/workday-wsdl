<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Committee_Classification_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Committee Classification Response
 * @subpackage Structs
 */
class Put_Committee_Classification_ResponseType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Classification Reference
     * - minOccurs: 0
     * @var \StructType\Committee_ClassificationObjectType
     */
    public $Committee_Classification_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Committee_Classification_ResponseType
     * @uses Put_Committee_Classification_ResponseType::setCommittee_Classification_Reference()
     * @uses Put_Committee_Classification_ResponseType::setVersion()
     * @param \StructType\Committee_ClassificationObjectType $committee_Classification_Reference
     * @param string $version
     */
    public function __construct(\StructType\Committee_ClassificationObjectType $committee_Classification_Reference = null, $version = null)
    {
        $this
            ->setCommittee_Classification_Reference($committee_Classification_Reference)
            ->setVersion($version);
    }
    /**
     * Get Committee_Classification_Reference value
     * @return \StructType\Committee_ClassificationObjectType|null
     */
    public function getCommittee_Classification_Reference()
    {
        return $this->Committee_Classification_Reference;
    }
    /**
     * Set Committee_Classification_Reference value
     * @param \StructType\Committee_ClassificationObjectType $committee_Classification_Reference
     * @return \StructType\Put_Committee_Classification_ResponseType
     */
    public function setCommittee_Classification_Reference(\StructType\Committee_ClassificationObjectType $committee_Classification_Reference = null)
    {
        $this->Committee_Classification_Reference = $committee_Classification_Reference;
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
     * @return \StructType\Put_Committee_Classification_ResponseType
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
     * @return \StructType\Put_Committee_Classification_ResponseType
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
