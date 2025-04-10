<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class CompaniesSeeder extends Seeder
{
    private $wilayas = [
        'Adrar', 'Chlef', 'Laghouat', 'Oum El Bouaghi', 'Batna', 'Béjaïa', 'Biskra',
        'Béchar', 'Blida', 'Bouira', 'Tamanrasset', 'Tébessa', 'Tlemcen', 'Tiaret',
        'Tizi Ouzou', 'Alger', 'Djelfa', 'Jijel', 'Sétif', 'Saïda', 'Skikda',
        'Sidi Bel Abbès', 'Annaba', 'Guelma', 'Constantine', 'Médéa', 'Mostaganem',
        'M\'Sila', 'Mascara', 'Ouargla', 'Oran', 'El Bayadh', 'Illizi', 'Bordj Bou Arreridj',
        'Boumerdès', 'El Tarf', 'Tindouf', 'Tissemsilt', 'El Oued', 'Khenchela',
        'Souk Ahras', 'Tipaza', 'Mila', 'Aïn Defla', 'Naâma', 'Aïn Témouchent',
        'Ghardaïa', 'Relizane'
    ];

    private $industries = [
        'Agriculture', 'Construction', 'Manufacturing', 'Mining', 'Retail', 
        'Transportation', 'Information Technology', 'Healthcare', 'Finance',
        'Education', 'Hospitality', 'Energy', 'Telecommunications', 'Media',
        'Entertainment', 'Real Estate', 'Professional Services', 'Automotive',
        'Pharmaceuticals', 'Food Processing', 'Textiles', 'Chemicals',
        'Aerospace', 'Defense', 'Tourism'
    ];

    private $legalStatuts = [
        'SARL', 'EURL', 'SPA', 'SNC', 'SCS', 'GIE', 'Coopérative',
        'Entreprise Individuelle', 'Société Civile', 'Succursale'
    ];

    public function run()
    {
        $faker = Faker::create('fr_FR');

        $userIds = DB::table('users')->pluck('id')->toArray();
        if (empty($userIds)) {
            $userIds = [1];
        }

        $industryIds = DB::table('industries')->pluck('id')->toArray();
        if (empty($industryIds)) {
            foreach ($this->industries as $industry) {
                $id = DB::table('industries')->insertGetId(['name' => $industry]);
                $industryIds[] = $id;
            }
        }

        $legalStatutIds = DB::table('legal_statuts')->pluck('id')->toArray();
        if (empty($legalStatutIds)) {
            foreach ($this->legalStatuts as $statut) {
                $id = DB::table('legal_statuts')->insertGetId(['name' => $statut]);
                $legalStatutIds[] = $id;
            }
        }

        $enterprises = [];
        $usedEmails = [];

        for ($i = 0; $i < 250; $i++) {
            $name = $this->generateEnterpriseName($faker);

            // Ensure unique email
            do {
                $email = $this->generateEnterpriseEmail($name);
            } while (in_array($email, $usedEmails));
            $usedEmails[] = $email;

            $phone = $this->generateAlgerianPhoneNumber($faker);
            $nif = $this->generateNIF();
            $rcommerce = $this->generateRCommerce();

            $enterprises[] = [
                'name' => $name,
                'address' => $faker->streetAddress,
                'phone' => $phone,
                'email' => $email,
                'fax' => $faker->boolean(30) ? '0' . $faker->numberBetween(20, 29) . $faker->numberBetween(100000, 999999) : null,
                'wilaya' => $faker->randomElement($this->wilayas),
                'logo' => $faker->boolean(20) ? 'logos/' . Str::slug($name) . '.png' : null,
                'industry_id' => $faker->randomElement($industryIds),
                'legal_statut_id' => $faker->randomElement($legalStatutIds),
                'nif' => $nif,
                'rcommerce' => $rcommerce,
                'statut' => $faker->randomElement(['active', 'inactive']),
                'user_id' => $faker->randomElement($userIds),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach (array_chunk($enterprises, 50) as $chunk) {
            DB::table('companies')->insert($chunk);
        }
    }

    private function generateEnterpriseName($faker)
    {
        $prefixes = ['SARL', 'EURL', 'SPA', 'Entreprise'];
        $types = ['Industrie', 'Commerce', 'Services', 'Technologie', 'Agroalimentaire', 'Bâtiment', 'Transport'];
        $suffixes = ['Algérie', 'DZ', 'Group', 'Holdings', 'International'];

        $name = '';

        if ($faker->boolean(70)) {
            $name .= $faker->randomElement($prefixes) . ' ';
        }

        $name .= $faker->lastName;

        if ($faker->boolean(60)) {
            $name .= ' ' . $faker->randomElement($types);
        }

        if ($faker->boolean(30)) {
            $name .= ' ' . $faker->randomElement($suffixes);
        }

        return $name;
    }

    private function generateEnterpriseEmail($name)
    {
        $domains = ['com', 'dz', 'net', 'org', 'biz'];
        $providers = ['gmail', 'yahoo', 'hotmail', 'outlook', 'protonmail'];

        $cleanName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $name));
        $randomNumber = rand(1, 999);

        if (rand(0, 1)) {
            $domain = strtolower(str_replace(' ', '', $name)) . '.dz';
            return 'contact@' . $domain;
        } else {
            $provider = $providers[array_rand($providers)];
            $domain = $domains[array_rand($domains)];
            return $cleanName . $randomNumber . '@' . $provider . '.' . $domain;
        }
    }

    private function generateAlgerianPhoneNumber($faker)
    {
        $prefixes = ['5', '6', '7'];
        $prefix = $prefixes[array_rand($prefixes)];
        $number = '0' . $prefix . $faker->numberBetween(10000000, 99999999);

        if ($faker->boolean(20)) {
            $number = '+213' . substr($number, 1);
        }

        return $number;
    }

    private function generateNIF()
    {
        return str_pad(rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    }

    private function generateRCommerce()
    {
        $letter = chr(rand(65, 90));
        $digits = rand(1, 999999);
        return $letter . str_pad($digits, rand(2, 6), '0', STR_PAD_LEFT);
    }
}
