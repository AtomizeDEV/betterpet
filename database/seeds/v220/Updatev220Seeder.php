<?php


use Illuminate\Database\Seeder;

class Updatev220Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::table('app_settings')->insert(
                array(
                    'key' => 'enable_payment_before_appointment_is_completed',
                    'value' => '0',
                )
            );
        }catch (Exception $e){}
    }
}
