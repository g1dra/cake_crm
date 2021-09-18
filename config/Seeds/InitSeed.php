<?php


use Phinx\Seed\AbstractSeed;

class InitSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $users = $this->table('users');
        $users->truncate();
        $data = [
            [
                'email'    => 'admin@gmail.com',
                'password'    => 'admin',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email'    => 'example@gmail.com',
                'password'    => 'example',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ]
        ];

        $users->insert($data)
            ->saveData();
    }
}
