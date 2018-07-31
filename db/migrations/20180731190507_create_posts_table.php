<?php

use Phinx\Migration\AbstractMigration;

class CreatePostsTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('posts', ['signed' => false]);

        $table->addColumn('title', 'string')
            ->addColumn('body', 'string')
            ->addColumn('user_id', 'integer', ['signed' => false])
            ->addColumn('topic_id', 'integer', ['signed' => false])

            ->addForeignKey('topic_id', 'topics', 'id', ['delete'=> 'CASCADE', 'update'=> 'NO_ACTION'])

            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
