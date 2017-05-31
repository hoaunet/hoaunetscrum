<?php

use Phinx\Migration\AbstractMigration;

class CaseFilesMigration extends AbstractMigration
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

         $table = $this->table('case_files');
		 $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
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
		 $table->addColumn('easycase_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('comment_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);		 
		 $table->addColumn('file', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('thumb', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('file_size', 'decimal', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('count', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);
		 $table->addColumn('downloadurl', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('isactive', 'integer', [
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
        $this->dropTable('case_files');
    }
}
