<?php

use Phinx\Migration\AbstractMigration;

class EasycasesMigration extends AbstractMigration
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
		$table = $this->table('easycases');
		$table->addColumn('uniq_id', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ])->addIndex(['uniq_id']);
		 $table->addColumn('case_no', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('case_count', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('project_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('updated_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('type_id', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('priority', 'string', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => true,
         ]);
		 $table->addColumn('message', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('estimated_hours', 'decimal', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('hours', 'decimal', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('completed_task', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		$table->addColumn('assign_to', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]); 
		 $table->addColumn('due_date', 'date', [
            'default' => null,            
            'null' => false,
         ]); 
		$table->addColumn('istype', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);  
		$table->addColumn('format', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);  
		 $table->addColumn('status', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		$table->addColumn('legend', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);   
		$table->addColumn('isactive', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]); 
		 $table->addColumn('dt_created', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);  
		 $table->addColumn('actual_dt_created', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);   
		 $table->addColumn('reply_type', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]); 
		 $table->addColumn('is_chrome_extension', 'integer', [
            'default' => null,
            'limit' => 1,
            'null' => true,
         ]);
		$table->addColumn('from_email', 'integer', [
            'default' => null,
            'limit' => 1,
            'null' => true,
         ]);        
    	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('easycases');
    }
}
