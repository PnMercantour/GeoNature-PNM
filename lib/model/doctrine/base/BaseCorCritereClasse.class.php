<?php

/**
 * BaseCorCritereClasse
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_critere_cf
 * @property integer $id_classe
 * @property BibClasses $BibClasses
 * @property BibCriteresCf $BibCriteresCf
 * 
 * @method integer          getIdCritereCf()   Returns the current record's "id_critere_cf" value
 * @method integer          getIdClasse()      Returns the current record's "id_classe" value
 * @method BibClasses       getBibClasses()    Returns the current record's "BibClasses" value
 * @method BibCriteresCf    getBibCriteresCf() Returns the current record's "BibCriteresCf" value
 * @method CorCritereClasse setIdCritereCf()   Sets the current record's "id_critere_cf" value
 * @method CorCritereClasse setIdClasse()      Sets the current record's "id_classe" value
 * @method CorCritereClasse setBibClasses()    Sets the current record's "BibClasses" value
 * @method CorCritereClasse setBibCriteresCf() Sets the current record's "BibCriteresCf" value
 * 
 * @package    faune
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorCritereClasse extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactfaune.cor_critere_classe');
        $this->hasColumn('id_critere_cf', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_classe', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibClasses', array(
             'local' => 'id_classe',
             'foreign' => 'id_classe'));

        $this->hasOne('BibCriteresCf', array(
             'local' => 'id_critere_cf',
             'foreign' => 'id_critere_cf'));
    }
}