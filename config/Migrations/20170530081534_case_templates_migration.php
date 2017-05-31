<?php

use Phinx\Migration\AbstractMigration;

class CaseTemplatesMigration extends AbstractMigration
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
		$table = $this->table('case_templates');
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
         $table->addColumn('description', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('is_active', 'integer', [
            'default' => null,
            'limit' => 2,
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
        $this->dropTable('case_templates');
    }
}
