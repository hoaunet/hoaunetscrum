<?php

use Phinx\Migration\AbstractMigration;

class CompanyUsersMigration extends AbstractMigration
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
		$table = $this->table('company_users');
		$table->addColumn('company_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('company_uniq_id', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
         ]);
		 $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('user_type', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('is_active', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('est_billing_amt', 'float', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('act_date', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		  $table->addColumn('billing_start_date', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		  $table->addColumn('billing_end_date', 'datetime', [
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
		$table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('company_users');
    }
}
