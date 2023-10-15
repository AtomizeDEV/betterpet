<?php
/*
 * File name: UsersTableSeeder.php
 * Last modified: 2021.03.02 at 14:35:42
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>//admin
                array(
                    'id' => 1,
                    'name' => 'Hyatt Zimmerman',
                    'email' => 'admin@demo.com',
                    'phone_number' => '+1 234 8996 321',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$YOn/Xq6vfvi9oaixrtW8QuM2W0mawkLLqIxL.IoGqrsqOqbIsfBNu',
                    'api_token' => 'PivvPlsQWxPl1bB5KrbKNBuraJit0PrUZekQUgtLyTRuyBq921atFtoR1HuA',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'fU74kiNeDsPSli77nLRFboCEmUOuK57tpt9SGSczqnmlebqgOODfO8HXjYrb',
                    'created_at' => NULL,
                    'updated_at' => '2021-02-09 16:50:32',
                ),
            1 =>//clinic owner
                array(
                    'id' => 2,
                    'name' => 'Jennifer Paul',
                    'email' => 'clinic@demo.com',
                    'phone_number' => '+1 234 8996 322',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$YOn/Xq6vfvi9oaixrtW8QuM2W0mawkLLqIxL.IoGqrsqOqbIsfBNu',
                    'api_token' => 'tVSfIKRSX2Yn8iAMoUS3HPls84ycS8NAxO2dj2HvePbbr4WHorp4gIFRmFwB',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'TwyKlf5NJ0oG6l5FfFhbCKsdRWrjF6HCunV8nZn2U9OXhJJTZ2Jxx4EqAJPA',
                    'created_at' => NULL,
                    'updated_at' => '2021-02-28 17:06:55',
                ),
            2 =>//clinic owner
                array(
                    'id' => 3,
                    'name' => 'Germaine Guzman',
                    'email' => 'clinic1@demo.com',
                    'phone_number' => '+1 234 8996 353',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$EBubVy3wDbqNbHvMQwkj3OTYVitL8QnHvh/zV0ICVOaSbALy5dD0K',
                    'api_token' => 'fXLu7VeYgXDu82SkMxlLPG1mCAXc4EBIx6O5isgYVIKFQiHah0xiOHmzNsBv',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'SPz6luq3aoxCbgIS1gqmFDgM1qzGlIDtF0HgmDbtWcx2reaeFcogcFQzdP2F',
                    'created_at' => NULL,
                    'updated_at' => '2021-02-24 21:52:57',
                ),
            3 =>//clinic owner
                array(
                    'id' => 4,
                    'name' => 'Tanya French',
                    'email' => 'clinic3@demo.com',
                    'phone_number' => '+1 234 8996 323',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$EBubVy3wDbqNbHvMQwkj3OTYVitL8QnHvh/zV0ICVOaSbALy5dD0K',
                    'api_token' => 'nBVg3E9anaPKmOqLOi8pau9p0296efgmARZWaYsjY8FZxEyynpc41oeEVGvR',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'ulPJNAOjZollS4kqJkM4p0O8bgBMSjBD4CX533axvnFY96i8hq68O2XX47oA',
                    'created_at' => NULL,
                    'updated_at' => '2021-02-24 21:52:57',
                ),
            4 =>//doctor
                array(
                    'id' => 5,
                    'name' => 'Aimee Mcgee',
                    'email' => 'doctor@demo.com',
                    'phone_number' => '+1 234 8996 324',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$pmdnepS1FhZUMqOaFIFnNO0spltJpziz3j13UqyEwShmLhokmuoei',
                    'api_token' => 'Czrsk9rwD0c75NUPkzNXM2WvbxYHKj8p0nG29pjKT0PZaTgMVzuVyv4hOlte',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'yCzPqDP1oczySU57q6G71SxTIJSiZUBE4vYdXbXCqzpzC2iN09igcs3jzSQK',
                    'created_at' => NULL,
                    'updated_at' => '2021-02-21 14:50:29',
                ),
            5 =>//doctor
                array(
                    'id' => 6,
                    'name' => 'Josephine Harding',
                    'email' => 'doctor1@demo.com',
                    'phone_number' => '+61 1900 654 321',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$n/06hZG121ZGp3tSwDQS3uhsQKxEYspjKrn7kGlLxRinUZKiulrEm',
                    'api_token' => 'gkEWScQHIol9EIRhP3m5m7JqnK5UvcGdEsKQJo7YeBcQawYFq3JAJ6SX9UKy',
                    'device_token' => NULL,
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => NULL,
                    'created_at' => '2021-01-11 10:55:52',
                    'updated_at' => '2021-02-02 11:29:47',
                ),
            6 =>//doctor
                array(
                    'id' => 7,
                    'name' => 'Nicolette Christiansen',
                    'email' => 'doctor3@demo.com',
                    'phone_number' => '+1-613-555-0111',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$04$WRpHC9iMxZ3f.gctQ4igsuZjsYfGjX7igVM8GsC2AMME3.4au3dYu',
                    'api_token' => 'TKArYDDFHNiEI33sfExaBEhxHCs5kFaWP7EO6aNlUZfnqHrvsMCwsYeAk9s2',
                    'device_token' => NULL,
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'JbiYaHlRWGKkfITxH9qI87GzTMPf0zJ2Iw6NIdlS5dDvWuT5PC2sP5ELGwKx',
                    'created_at' => '2021-01-11 11:33:59',
                    'updated_at' => '2021-02-02 11:30:56',
                ),
            7 =>//doctor
                array(
                    'id' => 8,
                    'name' => 'Rose Bauer',
                    'email' => 'doctor4@demo.com',
                    'phone_number' => '+1-613-555-0115',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC',
                    'api_token' => 'w6QJYqZyllY24AIR3nSsKqgj5eMSZevmgpSywwxJxUS9nwULcuriRLBxEXZC',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'WxYP9zjTBy9SYF5OWjcFbMt2Ob9r0bahBKzPDOtw9OrAJ89JqaMxkN5aqu8J',
                    'created_at' => '2021-01-17 16:13:24',
                    'updated_at' => '2021-02-28 18:03:25',
                ),
            8 =>//doctor
                array(
                    'id' => 9,
                    'name' => 'David A. Buck',
                    'email' => 'doctor5@demo.com',
                    'phone_number' => '+44 1632 960584',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$MqPMTfg6RUNxxEH6aLdqnOYZUBsT7xtxkglD74pDgThV52.HJrLba',
                    'api_token' => 'WivbG2oAEbEGl51EBeBuHaZeCqyfBnCVGo18nSaj2FwwiDjux2ZOAZWUoddK',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'SdstZCaeYW0pjqZn832HMzBD7WPGJ5m9hwWG28nhbIrzSS0etj33rbTRJ6kD',
                    'created_at' => '2021-02-10 11:31:12',
                    'updated_at' => '2021-02-23 20:41:50',
                ),
            9 =>//customer
                array(
                    'id' => 10,
                    'name' => 'Ernest T. Ouellette',
                    'email' => 'customer@demo.com',
                    'phone_number' => '+44 1632 960162',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC',
                    'api_token' => 'NK0jIZGo5JV2A9f4RDrL8e2wPs2Jvnf4Y3YothuOOaz1GyTyHwN3n7te7VAwo',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'CH39lO8S4b4Ls38LQyo52vp6N1NYkEfI6bL24WrY2IRTtFk82FV2d1vQB94k',
                    'created_at' => '2021-01-17 16:13:24',
                    'updated_at' => '2021-02-28 18:03:25',
                ),
            10 =>//customer
                array(
                    'id' => 11,
                    'name' => 'Tammy R. Brown',
                    'email' => 'customer1@demo.com',
                    'phone_number' => '+44 1632 960661',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC',
                    'api_token' => 'kH3nifIw329cmmaWHXPu71mgFii0Kn5m09UrBj6jT7J3simjs1UFXujJjmuf',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'Ob4LTjfop22zqDP6CoEqB9sYH72IImeUR24aoQuPXyXYu2HI5I7eJ63raf5L',
                    'created_at' => '2021-01-17 16:13:24',
                    'updated_at' => '2021-02-28 18:03:25',
                ),
            11 =>//customer
                array(
                    'id' => 12,
                    'name' => 'John K. Ranson',
                    'email' => 'customer2@demo.com',
                    'phone_number' => '+1-202-555-0159',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC',
                    'api_token' => 'kH3nifIw32cmmaWHXPu71mFFDRscdn5m09UrBj6jT4J3simjs1UFXujJjmuf',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'Ob4LTjfop22zfhvDhfB9sYH74r2IImeUR24aoQuPXyXYu2HI5I7eJ63raf5L',
                    'created_at' => '2021-01-17 16:13:24',
                    'updated_at' => '2021-02-28 18:03:25',
                ),
            12 =>//customer
                array(
                    'id' => 13,
                    'name' => 'Forrest Kreger',
                    'email' => 'customer3@demo.com',
                    'phone_number' => '+1-202-555-0190',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC',
                    'api_token' => 'W3WQ2z7TxNEq2w4wl7T20y9oU1LKW2WPb470TMTuAP6NB384a7XC6r3YRHZY',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => '4YldUURclmr9Ra7aTBsJpQk3x9WAnshsS6MnwkiOouGo8yO8FCJC1Hdu3vi9',
                    'created_at' => '2021-01-17 16:13:24',
                    'updated_at' => '2021-02-28 18:03:25',
                ),
            13 =>//customer
                array(
                    'id' => 14,
                    'name' => 'Ramon Isaac',
                    'email' => 'customer4@demo.com',
                    'phone_number' => '+1-202-555-0111',
                    'phone_verified_at' => '2021-01-10 17:22:10',
                    'email_verified_at' => '2021-01-10 17:22:10',
                    'password' => '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC',
                    'api_token' => 'U8jTumv58grQom08vHO0M4z9562kMhQ9P32PvTyv1qTBu5hon6jMrX720Feq',
                    'device_token' => '',
                    'stripe_id' => NULL,
                    'card_brand' => NULL,
                    'card_last_four' => NULL,
                    'trial_ends_at' => NULL,
                    'paypal_email' => NULL,
                    'remember_token' => 'FGXXD8LzNK3QfNRdcsJjQTPFoAAt7TQhUifBQWj1Y2v1ZaqpKc8gfBQWj1YE',
                    'created_at' => '2021-01-17 16:13:24',
                    'updated_at' => '2021-02-28 18:03:25',
                ),
        ));


    }
}
