<?php

namespace App\Console\Commands;

use Chiiya\FilamentAccessControl\Enumerators\PermissionName;
use Chiiya\FilamentAccessControl\Enumerators\RoleName;
use Chiiya\FilamentAccessControl\Models\FilamentUser;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RefreshPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the permission database';

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
        $this->info('Permission refresh started');

        DB::transaction(fn() => $this->updatePermissions());

        $this->info('Permission refresh completed');

        return 0;
    }

    public function updatePermissions()
    {
        $role = $this->getSuperAdminRole();

        $role->syncPermissions($this->refreshAdminPermissions());

        $this->createAdminUser()->syncRoles($role);
    }

    public function getSuperAdminRole(): Role
    {
        return Role::firstOrCreate(['name' => RoleName::SUPER_ADMIN, 'guard_name' => 'filament']);
    }

    public function refreshAdminPermissions(): Collection
    {
        return collect([
            PermissionName::UPDATE_ADMIN_USERS,
            PermissionName::UPDATE_PERMISSIONS,
        ])->map(fn($permission) => Permission::firstOrCreate([
            'name' => $permission,
            'guard_name' => 'filament',
        ]));
    }

    public function createAdminUser()
    {
        return FilamentUser::query()->firstOrCreate(['email' => config('app.company_email')], [
            'first_name' => 'EuniceMary',
            'last_name' => 'Ijeoma',
            'password' => Hash::make('EuniceMary12'),
        ]);
    }
}
