<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * The settings to add.
     */
    protected $settings = [
        [
            'key'         => 'current_theme',
            'name'        => 'Current Theme',
            'description' => 'That theme is using on system',
            'value'       => 'default',
            'field'       => '{"name":"value","label":"Value","type":"select_from_array", "options":{"default":"Default"}}',
            'active'      => 1,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting) {
            $result = \Backpack\Settings\app\Models\Setting::where('key', $setting['key'])->first();

            if (!$result){
                $result = DB::table('settings')->insert($setting);
            } else {
                $result->name = $setting['name'];
                $result->description = $setting['description'];
                $result->value = $setting['value'];
                $result->field = $setting['field'];
                $result->active = $setting['active'];
                $result->save();
            }
        }

        $this->command->info('Inserted '.count($this->settings).' records.');
    }
}
