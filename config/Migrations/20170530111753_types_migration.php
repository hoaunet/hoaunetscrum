<?php

use Phinx\Migration\AbstractMigration;

class TypesMigration extends AbstractMigration
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
    	$table = $this->table('types');
		$table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('short_name', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => true,
         ]);
		 $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('seq_order', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
   		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('types');
    }
}
