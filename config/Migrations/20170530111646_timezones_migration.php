<?php

use Phinx\Migration\AbstractMigration;

class TimezonesMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {

    	$table = $this->table('timezones');
		$table->addColumn('gmt_offset', 'double', [
            'default' => null,
            'null' => true,
         ]);
		$table->addColumn('dst_offset', 'double', [
            'default' => null,
            'null' => true,
         ]);
		$table->addColumn('code', 'string', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
   		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('timezones');
    }
}
