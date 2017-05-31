<?php

use Phinx\Migration\AbstractMigration;

class ProjectsMigration extends AbstractMigration
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
		$table = $this->table('projects');
		$table->addColumn('uniq_id', 'integer', [
            'default' => null,
            'limit' => 11,
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
		 $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('short_name', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => true,
         ]);
		 $table->addColumn('description', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('logo', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('project_type', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('default_assign', 'integer', [
            'default' => null,
            'limit' => 11,
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
		 $table->addColumn('dt_updated', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
    	$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
