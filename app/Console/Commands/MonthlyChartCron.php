<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MonthlyChartCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthlyChart:cron';

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
            $externalLinks = $domain->externalLinks($site->sites);
            \App\Models\Charts::create([
                'site' => $site->sites,
                'externalLinks' => $externalLinks,
                'indexPages' => '20000',
                'result' => '1'
            ]);
        }
    }
}
