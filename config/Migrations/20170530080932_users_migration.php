<?php

use Phinx\Migration\AbstractMigration;

class UsersMigration extends AbstractMigration
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
         $table = $this->table('users');
		 $table->addColumn('uniq_id', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
         ])->addIndex(['uniq_id']);
		 $table->addColumn('btprofile_id', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('usersubscription_id', 'integer', [
            'default' => null,
            'limit' => 10,
            'null' => true,
         ]);
		 $table->addColumn('credit_cardtoken', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('card_number', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('expiry_date', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => true,
         ]);
		 $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
         ]);
		 $table->addColumn('is_beta', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('last_name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('short_name', 'string', [
            'default' => null,
            'limit' => 8,
            'null' => true,
         ]);
		 $table->addColumn('istype', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('photo', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('photo_reset', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
         ]);
		 $table->addColumn('isactive', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('timezone_id', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => true,
         ]);
		 $table->addColumn('isemail', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('is_agree', 'integer', [
            'default' => null,
            'limit' => 2,
            'null' => true,
         ]);
		 $table->addColumn('usersub_type', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('est_billing_amount', 'float', [
            'default' => null,            
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
		 $table->addColumn('dt_last_login', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('dt_last_logout', 'datetime', [
            'default' => null,            
            'null' => false,
         ]);
		 $table->addColumn('query_string', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('update_email', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => true,
         ]);
		 $table->addColumn('update_random', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => true,
         ]);
		 $table->addColumn('gaccess_token', 'text', [
            'default' => null,            
            'null' => true,
         ]);
		 $table->addColumn('ip', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true,
         ]);
		 $table->addColumn('sig', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
         ]);
		 $table->addColumn('desk_notify', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->addColumn('active_dashboard_tab', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
         ]);
		 $table->addColumn('is_moderator', 'integer', [
            'default' => null,
            'limit' => 3,
            'null' => true,
         ]);
		 $table->addColumn('show_default_inner', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => true,
         ]);
		 $table->create();
    }
	/**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
