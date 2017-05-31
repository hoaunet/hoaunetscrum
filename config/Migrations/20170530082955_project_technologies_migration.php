<?php

use Phinx\Migration\AbstractMigration;

class ProjectTechnologiesMigration extends AbstractMigration
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
		$table = $this->table('project_technologies');
		 $table->addColumn('project_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		  $table->addColumn('technology_id', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);		
   		 $table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('project_technologies');
    }
}
