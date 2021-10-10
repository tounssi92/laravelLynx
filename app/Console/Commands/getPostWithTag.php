<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class getPostWithTag extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getPost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $input['name'] = $this->ask('tag ?');
        $arrayPost = Post::query()->postwithtag($input['name'])->get();
        foreach ($arrayPost as $value) {
            echo "titre :".$value["titre"]."\n";
            echo "contenu :".$value["contenu"]."\n";
            echo "date :".$value["date"]."\n";
            echo "\n";
        }

    }
}
