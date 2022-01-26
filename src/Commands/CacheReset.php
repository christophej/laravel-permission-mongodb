<?php

namespace Maklad\Permission\Commands;

use Illuminate\Console\Command;
use Maklad\Permission\PermissionRegistrar;

/**
 * Class CacheReset
 * @package Maklad\Permission\Commands
 */
class CacheReset extends Command
{
    protected $signature = 'permission:cache-reset';

    protected $description = 'Reset the permission cache';

    public function handle()
    {
        if (app(PermissionRegistrar::class)->forgetCachedPermissions()) {
            $this->info('Permission cache flushed.');
        } else {
            $this->error('Unable to flush cache.');
        }
    }
}
