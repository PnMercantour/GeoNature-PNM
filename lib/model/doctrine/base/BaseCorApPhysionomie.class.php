<?php

/**
 * BaseCorApPhysionomie
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $indexap
 * @property integer $id_physionomie
 * @property BibPhysionomies $BibPhysionomies
 * @property TApresence $TApresence
 * 
 * @method integer          getIndexap()         Returns the current record's "indexap" value
 * @method integer          getIdPhysionomie()   Returns the current record's "id_physionomie" value
 * @method BibPhysionomies  getBibPhysionomies() Returns the current record's "BibPhysionomies" value
 * @method TApresence       getTApresence()      Returns the current record's "TApresence" value
 * @method CorApPhysionomie setIndexap()         Sets the current record's "indexap" value
 * @method CorApPhysionomie setIdPhysionomie()   Sets the current record's "id_physionomie" value
 * @method CorApPhysionomie setBibPhysionomies() Sets the current record's "BibPhysionomies" value
 * @method CorApPhysionomie setTApresence()      Sets the current record's "TApresence" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorApPhysionomie extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('florepatri.cor_ap_physionomie');
        $this->hasColumn('indexap', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('id_physionomie', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibPhysionomies', array(
             'local' => 'id_physionomie',
             'foreign' => 'id_physionomie'));

        $this->hasOne('TApresence', array(
             'local' => 'indexap',
             'foreign' => 'indexap'));
    }
}