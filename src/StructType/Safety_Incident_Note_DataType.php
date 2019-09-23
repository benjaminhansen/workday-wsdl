<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Note_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The note data for the involved party.
 * @subpackage Structs
 */
class Safety_Incident_Note_DataType extends AbstractStructBase
{
    /**
     * The Note_Date
     * Meta information extracted from the WSDL
     * - documentation: The date of the note.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note_Date;
    /**
     * The Note_Subject
     * Meta information extracted from the WSDL
     * - documentation: The subject of the note.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note_Subject;
    /**
     * The Note_Content
     * Meta information extracted from the WSDL
     * - documentation: The content of the note.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note_Content;
    /**
     * The Is_Witness_Note
     * Meta information extracted from the WSDL
     * - documentation: Whether this was a witness note or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Witness_Note;
    /**
     * Constructor method for Safety_Incident_Note_DataType
     * @uses Safety_Incident_Note_DataType::setNote_Date()
     * @uses Safety_Incident_Note_DataType::setNote_Subject()
     * @uses Safety_Incident_Note_DataType::setNote_Content()
     * @uses Safety_Incident_Note_DataType::setIs_Witness_Note()
     * @param string $note_Date
     * @param string $note_Subject
     * @param string $note_Content
     * @param bool $is_Witness_Note
     */
    public function __construct($note_Date = null, $note_Subject = null, $note_Content = null, $is_Witness_Note = null)
    {
        $this
            ->setNote_Date($note_Date)
            ->setNote_Subject($note_Subject)
            ->setNote_Content($note_Content)
            ->setIs_Witness_Note($is_Witness_Note);
    }
    /**
     * Get Note_Date value
     * @return string|null
     */
    public function getNote_Date()
    {
        return $this->Note_Date;
    }
    /**
     * Set Note_Date value
     * @param string $note_Date
     * @return \StructType\Safety_Incident_Note_DataType
     */
    public function setNote_Date($note_Date = null)
    {
        // validation for constraint: string
        if (!is_null($note_Date) && !is_string($note_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note_Date, true), gettype($note_Date)), __LINE__);
        }
        $this->Note_Date = $note_Date;
        return $this;
    }
    /**
     * Get Note_Subject value
     * @return string|null
     */
    public function getNote_Subject()
    {
        return $this->Note_Subject;
    }
    /**
     * Set Note_Subject value
     * @param string $note_Subject
     * @return \StructType\Safety_Incident_Note_DataType
     */
    public function setNote_Subject($note_Subject = null)
    {
        // validation for constraint: string
        if (!is_null($note_Subject) && !is_string($note_Subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note_Subject, true), gettype($note_Subject)), __LINE__);
        }
        $this->Note_Subject = $note_Subject;
        return $this;
    }
    /**
     * Get Note_Content value
     * @return string|null
     */
    public function getNote_Content()
    {
        return $this->Note_Content;
    }
    /**
     * Set Note_Content value
     * @param string $note_Content
     * @return \StructType\Safety_Incident_Note_DataType
     */
    public function setNote_Content($note_Content = null)
    {
        // validation for constraint: string
        if (!is_null($note_Content) && !is_string($note_Content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note_Content, true), gettype($note_Content)), __LINE__);
        }
        $this->Note_Content = $note_Content;
        return $this;
    }
    /**
     * Get Is_Witness_Note value
     * @return bool|null
     */
    public function getIs_Witness_Note()
    {
        return $this->Is_Witness_Note;
    }
    /**
     * Set Is_Witness_Note value
     * @param bool $is_Witness_Note
     * @return \StructType\Safety_Incident_Note_DataType
     */
    public function setIs_Witness_Note($is_Witness_Note = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Witness_Note) && !is_bool($is_Witness_Note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Witness_Note, true), gettype($is_Witness_Note)), __LINE__);
        }
        $this->Is_Witness_Note = $is_Witness_Note;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Safety_Incident_Note_DataType
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
