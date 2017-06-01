<?php

use Phinx\Migration\AbstractMigration;

class SaveReportsMigration extends AbstractMigration
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
    	$table = $this->table('save_reports');
		 $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
         ]);
		  $table->addColumn('rpt_type', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
         ]);
		  $table->addColumn('frm_dt', 'date', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('to_dt', 'date', [
            'default' => null,            
            'null' => false,
         ]);
		  $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);
		  $table->addColumn('ip', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true,
         ]);
   		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('save_reports');
    }
}
