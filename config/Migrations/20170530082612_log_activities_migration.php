<?php

use Phinx\Migration\AbstractMigration;

class LogActivitiesMigration extends AbstractMigration
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
		$table = $this->table('log_activities');
		$table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('log_type_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]); 
		$table->addColumn('json_value', 'text', [
            'default' => null,            
            'null' => true,
         ]); 
		$table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);
		 $table->addColumn('ip', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]); 
    	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('log_activities');
    }
}
