<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Section_2_List_A_Doc_3_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information for Form I-9 Section 2 List A Doc 3 to assign to the worker.
 * @subpackage Structs
 */
class External_Form_I_9_Section_2_List_A_Doc_3_DataType extends AbstractStructBase
{
    /**
     * The Document_Title_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Section 2 List A Doc 3 Document Title to assign to the Worker's Form I-9.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType
     */
    public $Document_Title_Reference;
    /**
     * The DHS_Document_Title
     * Meta information extracted from the WSDL
     * - documentation: DHS Document Title for Employment authorization document issued by DHS to be assigned to the Form I-9 Section 3.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DHS_Document_Title;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: The Section 2 List A Doc 3 Expiration Date to assign to the Worker's Form I-9.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * Constructor method for External_Form_I-9_Section_2_List_A_Doc_3_DataType
     * @uses External_Form_I_9_Section_2_List_A_Doc_3_DataType::setDocument_Title_Reference()
     * @uses External_Form_I_9_Section_2_List_A_Doc_3_DataType::setDHS_Document_Title()
     * @uses External_Form_I_9_Section_2_List_A_Doc_3_DataType::setExpiration_Date()
     * @param \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference
     * @param string $dHS_Document_Title
     * @param string $expiration_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference = null, $dHS_Document_Title = null, $expiration_Date = null)
    {
        $this
            ->setDocument_Title_Reference($document_Title_Reference)
            ->setDHS_Document_Title($dHS_Document_Title)
            ->setExpiration_Date($expiration_Date);
    }
    /**
     * Get Document_Title_Reference value
     * @return \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType|null
     */
    public function getDocument_Title_Reference()
    {
        return $this->Document_Title_Reference;
    }
    /**
     * Set Document_Title_Reference value
     * @param \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType
     */
    public function setDocument_Title_Reference(\WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference = null)
    {
        $this->Document_Title_Reference = $document_Title_Reference;
        return $this;
    }
    /**
     * Get DHS_Document_Title value
     * @return string|null
     */
    public function getDHS_Document_Title()
    {
        return $this->DHS_Document_Title;
    }
    /**
     * Set DHS_Document_Title value
     * @param string $dHS_Document_Title
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType
     */
    public function setDHS_Document_Title($dHS_Document_Title = null)
    {
        // validation for constraint: string
        if (!is_null($dHS_Document_Title) && !is_string($dHS_Document_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHS_Document_Title, true), gettype($dHS_Document_Title)), __LINE__);
        }
        $this->DHS_Document_Title = $dHS_Document_Title;
        return $this;
    }
    /**
     * Get Expiration_Date value
     * @return string|null
     */
    public function getExpiration_Date()
    {
        return $this->Expiration_Date;
    }
    /**
     * Set Expiration_Date value
     * @param string $expiration_Date
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType
     */
    public function setExpiration_Date($expiration_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_Date) && !is_string($expiration_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration_Date, true), gettype($expiration_Date)), __LINE__);
        }
        $this->Expiration_Date = $expiration_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType
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
