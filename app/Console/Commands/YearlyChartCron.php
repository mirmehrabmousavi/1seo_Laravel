<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class YearlyChartCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yearlyChart:cron';

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
        $sites = \App\Models\Site::all();
        foreach ($sites as $site) {
            $domain = new \App\Http\Controllers\DataAPI\Analyztic();
            [$pageAuthority,$pageAuthNum] = $domain->pageAuthority($site->sites);
            [$domainAuthority,$domainAuthNum] = $domain->domainAuthority($site->sites);
            \App\Models\Charts::create([
                'site' => $site->sites,
                'pageAuthority' => $pageAuthority,
                'domainAuthority' => $domainAuthority,
                'result' => '0'
            ]);
        }
    }
}
