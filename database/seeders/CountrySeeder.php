<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ["code" => "US", "name" => "United States", "phone_code" => 1],
            ["code" => "GB", "name" => "United Kingdom", "phone_code" => 44],
            ["code" => "AS", "name" => "American Samoa", "phone_code" => 1684],
            ["code" => "AD", "name" => "Andorra", "phone_code" => 376],
            ["code" => "AO", "name" => "Angola", "phone_code" => 244],
            ["code" => "AI", "name" => "Anguilla", "phone_code" => 1264],
            ["code" => "AG", "name" => "Antigua and Barbuda", "phone_code" => 1268],
            ["code" => "AR", "name" => "Argentina", "phone_code" => 54],
            ["code" => "AM", "name" => "Armenia", "phone_code" => 374],
            ["code" => "AW", "name" => "Aruba", "phone_code" => 297],
            ["code" => "AU", "name" => "Australia", "phone_code" => 61],
            ["code" => "AT", "name" => "Austria", "phone_code" => 43],
            ["code" => "BS", "name" => "Bahamas", "phone_code" => 1242],
            ["code" => "BY", "name" => "Belarus", "phone_code" => 375],
            ["code" => "BE", "name" => "Belgium", "phone_code" => 32],
            ["code" => "BA", "name" => "Bosnia and Herzegovina", "phone_code" => 387],
            ["code" => "BW", "name" => "Botswana", "phone_code" => 267],
            ["code" => "BR", "name" => "Brazil", "phone_code" => 55],
            ["code" => "BN", "name" => "Brunei", "phone_code" => 673],
            ["code" => "BG", "name" => "Bulgaria", "phone_code" => 359],
            ["code" => "BF", "name" => "Burkina Faso", "phone_code" => 226],
            ["code" => "BI", "name" => "Burundi", "phone_code" => 257],
            ["code" => "KH", "name" => "Cambodia", "phone_code" => 855],
            ["code" => "CM", "name" => "Cameroon", "phone_code" => 237],
            ["code" => "CA", "name" => "Canada", "phone_code" => 1],
            ["code" => "CN", "name" => "China", "phone_code" => 86],
            ["code" => "CO", "name" => "Colombia", "phone_code" => 57],
            ["code" => "CR", "name" => "Costa Rica", "phone_code" => 506],
            ["code" => "HR", "name" => "Croatia", "phone_code" => 385],
            ["code" => "CY", "name" => "Cyprus", "phone_code" => 357],
            ["code" => "CZ", "name" => "Czech Republic", "phone_code" => 420],
            ["code" => "DK", "name" => "Denmark", "phone_code" => 45],
            ["code" => "DO", "name" => "Dominican Republic", "phone_code" => 1],
            ["code" => "EC", "name" => "Ecuador", "phone_code" => 593],
            ["code" => "FR", "name" => "France", "phone_code" => 33],
            ["code" => "DE", "name" => "Germany", "phone_code" => 49],
            ["code" => "IE", "name" => "Ireland", "phone_code" => 353],
            ["code" => "IT", "name" => "Italy", "phone_code" => 39],
            ["code" => "JP", "name" => "Japan", "phone_code" => 81],
            ["code" => "KE", "name" => "Kenya", "phone_code" => 254],
            ["code" => "KR", "name" => "South Korea", "phone_code" => 82],
            ["code" => "MY", "name" => "Malaysia", "phone_code" => 60],
            ["code" => "MX", "name" => "Mexico", "phone_code" => 52],
            ["code" => "NL", "name" => "Netherlands", "phone_code" => 31],
            ["code" => "NG", "name" => "Nigeria", "phone_code" => 234],
            ["code" => "NO", "name" => "Norway", "phone_code" => 47],
            ["code" => "PH", "name" => "Philippines", "phone_code" => 63],
            ["code" => "PL", "name" => "Poland", "phone_code" => 48],
            ["code" => "RU", "name" => "Russia", "phone_code" => 7],
            ["code" => "SA", "name" => "Saudi Arabia", "phone_code" => 966],
            ["code" => "ZA", "name" => "South Africa", "phone_code" => 27],
            ["code" => "ES", "name" => "Spain", "phone_code" => 34],
            ["code" => "SE", "name" => "Sweden", "phone_code" => 46],
            ["code" => "CH", "name" => "Switzerland", "phone_code" => 41],
            ["code" => "TR", "name" => "Turkey", "phone_code" => 90],
            ["code" => "AE", "name" => "United Arab Emirates", "phone_code" => 971],
        ];   

        DB::table('countries')->insert($countries);
    }
}
