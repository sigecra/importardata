<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\PrhnovedadesController;

class ImportarNov extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registro:novedades';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importar registros de novedades';

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
     * @return mixed
     */
    public function handle()
    {
        //
        PrhnovedadesController::importar();
    }
}
