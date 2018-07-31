<?php

use Phinx\Migration\AbstractMigration;

class CreateTopicsTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('topics', ['signed' => false]);

        $table->addColumn('title', 'string')
            ->addColumn('body', 'text')
            ->addColumn('user_id', 'integer', ['signed' => false])

            // cascade delete if user is deleted (in real-world forum I'd consider it twice)
            ->addForeignKey('user_id', 'users', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION'])

            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
