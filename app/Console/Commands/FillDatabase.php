<?php

namespace App\Console\Commands;

use App\scripts\DatabaseFiller;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class FillDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pre-fills the database with data';

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
    public function handle(DatabaseFiller $filler)
    {
        $roles = Storage::get('database/roles.json');
        $filler->rolesAsJson($roles);
        $permissions = Storage::get('database/permissions.json');
        $filler->PermissionsAsJson($permissions);
        $rolePermissions = Storage::get('database/roles_permissions.json');
        $filler->rolePermissionsAsJson($rolePermissions);
    }
}
