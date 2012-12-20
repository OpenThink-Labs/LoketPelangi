<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TblCustomer', 'doctrine');

/**
 * BaseTblCustomer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $ckode_customer
 * @property string $ckode_sales
 * @property string $ckode_loket
 * @property string $ckode_usaha
 * @property string $ckode_pos
 * @property integer $lokasi_id
 * @property string $cnama
 * @property string $cnama_singkat
 * @property string $calamat
 * @property string $calamat_tagih
 * @property timestamp $dtgl_masuk
 * @property string $cattn
 * @property string $ctelepon
 * @property string $cnpwp
 * @property integer $nterm
 * @property string $cstatus
 * @property integer $takakura_pinjaman
 * @property decimal $takakura_uang_jaminan
 * @property integer $tong_sampah_pinjaman
 * @property decimal $tong_sampah_uang_jaminan
 * @property string $ctelepon2
 * @property string $ctransfer
 * @property string $ccetak_harga
 * @property string $cpayment
 * @property TblSales $TblSales
 * @property EdupediaLocation $EdupediaLocation
 * @property TblLoket $TblLoket
 * @property TblWilayah $TblWilayah
 * @property TblBidangusaha $TblBidangusaha
 * @property TblJenisbayar $TblJenisbayar
 * @property TblStatuscust $TblStatuscust
 * @property Doctrine_Collection $CustomerGroup
 * 
 * @method string              getCkodeCustomer()            Returns the current record's "ckode_customer" value
 * @method string              getCkodeSales()               Returns the current record's "ckode_sales" value
 * @method string              getCkodeLoket()               Returns the current record's "ckode_loket" value
 * @method string              getCkodeUsaha()               Returns the current record's "ckode_usaha" value
 * @method string              getCkodePos()                 Returns the current record's "ckode_pos" value
 * @method integer             getLokasiId()                 Returns the current record's "lokasi_id" value
 * @method string              getCnama()                    Returns the current record's "cnama" value
 * @method string              getCnamaSingkat()             Returns the current record's "cnama_singkat" value
 * @method string              getCalamat()                  Returns the current record's "calamat" value
 * @method string              getCalamatTagih()             Returns the current record's "calamat_tagih" value
 * @method timestamp           getDtglMasuk()                Returns the current record's "dtgl_masuk" value
 * @method string              getCattn()                    Returns the current record's "cattn" value
 * @method string              getCtelepon()                 Returns the current record's "ctelepon" value
 * @method string              getCnpwp()                    Returns the current record's "cnpwp" value
 * @method integer             getNterm()                    Returns the current record's "nterm" value
 * @method string              getCstatus()                  Returns the current record's "cstatus" value
 * @method integer             getTakakuraPinjaman()         Returns the current record's "takakura_pinjaman" value
 * @method decimal             getTakakuraUangJaminan()      Returns the current record's "takakura_uang_jaminan" value
 * @method integer             getTongSampahPinjaman()       Returns the current record's "tong_sampah_pinjaman" value
 * @method decimal             getTongSampahUangJaminan()    Returns the current record's "tong_sampah_uang_jaminan" value
 * @method string              getCtelepon2()                Returns the current record's "ctelepon2" value
 * @method string              getCtransfer()                Returns the current record's "ctransfer" value
 * @method string              getCcetakHarga()              Returns the current record's "ccetak_harga" value
 * @method string              getCpayment()                 Returns the current record's "cpayment" value
 * @method TblSales            getTblSales()                 Returns the current record's "TblSales" value
 * @method EdupediaLocation    getEdupediaLocation()         Returns the current record's "EdupediaLocation" value
 * @method TblLoket            getTblLoket()                 Returns the current record's "TblLoket" value
 * @method TblWilayah          getTblWilayah()               Returns the current record's "TblWilayah" value
 * @method TblBidangusaha      getTblBidangusaha()           Returns the current record's "TblBidangusaha" value
 * @method TblJenisbayar       getTblJenisbayar()            Returns the current record's "TblJenisbayar" value
 * @method TblStatuscust       getTblStatuscust()            Returns the current record's "TblStatuscust" value
 * @method Doctrine_Collection getCustomerGroup()            Returns the current record's "CustomerGroup" collection
 * @method TblCustomer         setCkodeCustomer()            Sets the current record's "ckode_customer" value
 * @method TblCustomer         setCkodeSales()               Sets the current record's "ckode_sales" value
 * @method TblCustomer         setCkodeLoket()               Sets the current record's "ckode_loket" value
 * @method TblCustomer         setCkodeUsaha()               Sets the current record's "ckode_usaha" value
 * @method TblCustomer         setCkodePos()                 Sets the current record's "ckode_pos" value
 * @method TblCustomer         setLokasiId()                 Sets the current record's "lokasi_id" value
 * @method TblCustomer         setCnama()                    Sets the current record's "cnama" value
 * @method TblCustomer         setCnamaSingkat()             Sets the current record's "cnama_singkat" value
 * @method TblCustomer         setCalamat()                  Sets the current record's "calamat" value
 * @method TblCustomer         setCalamatTagih()             Sets the current record's "calamat_tagih" value
 * @method TblCustomer         setDtglMasuk()                Sets the current record's "dtgl_masuk" value
 * @method TblCustomer         setCattn()                    Sets the current record's "cattn" value
 * @method TblCustomer         setCtelepon()                 Sets the current record's "ctelepon" value
 * @method TblCustomer         setCnpwp()                    Sets the current record's "cnpwp" value
 * @method TblCustomer         setNterm()                    Sets the current record's "nterm" value
 * @method TblCustomer         setCstatus()                  Sets the current record's "cstatus" value
 * @method TblCustomer         setTakakuraPinjaman()         Sets the current record's "takakura_pinjaman" value
 * @method TblCustomer         setTakakuraUangJaminan()      Sets the current record's "takakura_uang_jaminan" value
 * @method TblCustomer         setTongSampahPinjaman()       Sets the current record's "tong_sampah_pinjaman" value
 * @method TblCustomer         setTongSampahUangJaminan()    Sets the current record's "tong_sampah_uang_jaminan" value
 * @method TblCustomer         setCtelepon2()                Sets the current record's "ctelepon2" value
 * @method TblCustomer         setCtransfer()                Sets the current record's "ctransfer" value
 * @method TblCustomer         setCcetakHarga()              Sets the current record's "ccetak_harga" value
 * @method TblCustomer         setCpayment()                 Sets the current record's "cpayment" value
 * @method TblCustomer         setTblSales()                 Sets the current record's "TblSales" value
 * @method TblCustomer         setEdupediaLocation()         Sets the current record's "EdupediaLocation" value
 * @method TblCustomer         setTblLoket()                 Sets the current record's "TblLoket" value
 * @method TblCustomer         setTblWilayah()               Sets the current record's "TblWilayah" value
 * @method TblCustomer         setTblBidangusaha()           Sets the current record's "TblBidangusaha" value
 * @method TblCustomer         setTblJenisbayar()            Sets the current record's "TblJenisbayar" value
 * @method TblCustomer         setTblStatuscust()            Sets the current record's "TblStatuscust" value
 * @method TblCustomer         setCustomerGroup()            Sets the current record's "CustomerGroup" collection
 * 
 * @package    POSLoketPelangi
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTblCustomer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tbl_customer');
        $this->hasColumn('ckode_customer', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('ckode_sales', 'string', 9, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 9,
             ));
        $this->hasColumn('ckode_loket', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('ckode_usaha', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('ckode_pos', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('lokasi_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('cnama', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('cnama_singkat', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('calamat', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('calamat_tagih', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('dtgl_masuk', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('cattn', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ctelepon', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('cnpwp', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('nterm', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cstatus', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'A',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('takakura_pinjaman', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('takakura_uang_jaminan', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('tong_sampah_pinjaman', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tong_sampah_uang_jaminan', 'decimal', 10, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             'scale' => '2',
             ));
        $this->hasColumn('ctelepon2', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ctransfer', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'N',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('ccetak_harga', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'F',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cpayment', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'K',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TblSales', array(
             'local' => 'ckode_sales',
             'foreign' => 'ckode_sales'));

        $this->hasOne('EdupediaLocation', array(
             'local' => 'lokasi_id',
             'foreign' => 'id'));

        $this->hasOne('TblLoket', array(
             'local' => 'ckode_loket',
             'foreign' => 'ckode_loket'));

        $this->hasOne('TblWilayah', array(
             'local' => 'ckode_pos',
             'foreign' => 'ckodepos'));

        $this->hasOne('TblBidangusaha', array(
             'local' => 'ckode_usaha',
             'foreign' => 'ckode_usaha'));

        $this->hasOne('TblJenisbayar', array(
             'local' => 'cpayment',
             'foreign' => 'ckode_jenisbayar'));

        $this->hasOne('TblStatuscust', array(
             'local' => 'cstatus',
             'foreign' => 'ckode_statuscust'));

        $this->hasMany('CustomerGroup', array(
             'local' => 'ckode_customer',
             'foreign' => 'ckode_customer'));
    }
}