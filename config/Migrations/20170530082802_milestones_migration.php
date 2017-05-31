<?php

use Phinx\Migration\AbstractMigration;

class MilestonesMigration extends AbstractMigration
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
		$table = $this->table('milestones');
		$table->addColumn('uniq_id', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]);
		 $table->addColumn('project_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]);  
		$table->addColumn('description', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		$table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('start_date', 'date', [
            'default' => null,            
            'null' => false,
         ]);
		   $table->addColumn('end_date', 'date', [
            'default' => null,            
            'null' => false,
         ]);
		  $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',            
            'null' => false,
         ]);  
		 $table->addColumn('modified', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);  
		 $table->addColumn('isactive', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('id_seq', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
    	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('milestones');
    }
}
