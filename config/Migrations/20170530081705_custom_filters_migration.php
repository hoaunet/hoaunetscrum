<?php

use Phinx\Migration\AbstractMigration;

class CustomFiltersMigration extends AbstractMigration
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
		$table = $this->table('custom_filters');
		$table->addColumn('project_uniq_id', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => true,
         ]);
		 $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('filter_name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('filter_date', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('filter_duedate', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('filter_type_id', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('filter_status', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('filter_member_id', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('filter_priority', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('filter_assignto', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('filter_search', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);
		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('custom_filters');
    }
}
