<?php

namespace Database\Seeders;

use App\Models\Kid;
use Illuminate\Database\Seeder;

class KidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kids = [
            [
                'name' => 'Pablo',
                'surname' => 'Alvarez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736768622/2_itbzec.png',
                'age' => 12,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 1
            ],
            [
                'name' => 'Ana',
                'surname' => 'García',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772252/640px-Camila_Cabello_Vogue_4_mbj32o.jpg',
                'age' => 18,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 2
            ],
            [
                'name' => 'Carlos',
                'surname' => 'Martínez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736768644/images_bsok5b.png',
                'age' => 15,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 3
            ],
            [
                'name' => 'Lucía',
                'surname' => 'López',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772139/depositphotos_207538918-stock-photo-beauty-model-portrait-charming-brunette_urhx1l.webp',
                'age' => 12,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 4
            ],
            [
                'name' => 'Miguel',
                'surname' => 'Sánchez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736769028/depositphotos_24445241-stock-photo-head-and-shoulders-portrait-of_nufnap.webp',
                'age' => 8,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 5
            ],
            [
                'name' => 'Sofía',
                'surname' => 'Pérez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772296/ana-de-armas-1656579722.jpg_urxnba.jpg',
                'age' => 19,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 6
            ],
            [
                'name' => 'Diego',
                'surname' => 'Gómez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736769095/2025566-retrato-de-ni_C3_B1o-con-ojos-azules-sonriendo-aislados-en-blanco_thxqxt.jpg',
                'age' => 3,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 7
            ],
            [
                'name' => 'María',
                'surname' => 'Rodríguez',
                'image' => 'https://randomuser.me/api/portraits/women/8.jpg',
                'age' => 20,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 8
            ],
            [
                'name' => 'Juan',
                'surname' => 'Alberto',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736771135/imagen_2025-01-13_132534117_rjnayh.png',
                'age' => 18,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 9
            ],
            [
                'name' => 'Elena',
                'surname' => 'Ruiz',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772333/12d6d346e99489f506a33f553b75022b_mvgwdw.jpg',
                'age' => 18,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 10
            ],
            [
                'name' => 'Andrés',
                'surname' => 'Alguacil',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770926/Et4x2iFXAA0WkZq_qkomvr.jpg',
                'age' => 18,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 11
            ],
            [
                'name' => 'Isabel',
                'surname' => 'Díaz',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772452/images_fcgyp4.jpg',
                'age' => 7,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 12
            ],
            [
                'name' => 'Fernando',
                'surname' => 'Moreno',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770734/08cdb8bf4315aa4410085e87872ff3ba_sevz8e.jpg',
                'age' => 15,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 13
            ],
            [
                'name' => 'Laura',
                'surname' => 'Muñoz',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772548/horoscopo-chino-2019-como-son-los-ninos-nacidos-en-el-ano-del-cerdo-lg_z8sysq.jpg',
                'age' => 2,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 14
            ],
            [
                'name' => 'Raúl',
                'surname' => 'Romero',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770544/nino-chino-sobre-fondo-blanco_894067-26394_fx0h1k.jpg',
                'age' => 3,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 15
            ],
            [
                'name' => 'Carmen',
                'surname' => 'Alonso',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772543/depositphotos_2161621-stock-photo-innocent-asian-baby-face_sfzwoc.webp',
                'age' => 3,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 16
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Gutiérrez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770489/Shutterstock_376886917_zrfgss.jpg',
                'age' => 8,
                'attitude' => 0,
                'gender_id' => 1,
                'country_id' => 17
            ],
            [
                'name' => 'Marta',
                'surname' => 'Jiménez',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772611/girl-in-peru-1429002_zkmxq5.jpg',
                'age' => 7,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 18
            ],
            [
                'name' => 'Juan',
                'surname' => 'Ruiz',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770839/roberto-carlos_w416_ccitjw.webp',
                'age' => 19,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 19
            ],
            [
                'name' => 'Clara',
                'surname' => 'Torres',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772818/ai-generated-8593109_640_z4jsnp.jpg',
                'age' =>13,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 20
            ],
            [
                'name' => 'Pedro',
                'surname' => 'Navarro',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770778/imagen_2025-01-13_131936826_g8ndut.png',
                'age' => 16,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 21
            ],
            [
                'name' => 'Rosa',
                'surname' => 'Ramos',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772848/premium_photo-1675200124904-dfadce24119f_z8xauq.jpg',
                'age' => 17,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 22
            ],
            [
                'name' => 'Hugo',
                'surname' => 'Gil',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736770566/ni_C3_B1o-sonriente-sobre-fondo-blanco_erm9vx.jpg',
                'age' => 5,
                'attitude' => 0,
                'gender_id' => 1,
                'country_id' => 23
            ],
            [
                'name' => 'Alicia',
                'surname' => 'Castro',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772855/primer-plano-nina-morena-sonriendo_1149-174_ftumca.jpg',
                'age' => 15,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 24
            ],
            [
                'name' => 'Manuel',
                'surname' => 'Vargas',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736771221/e8d8726b39181b1f3bdeb1ed192b7df9_fkuux2.jpg',
                'age' => 18,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 25
            ],
            [
                'name' => 'Patricia',
                'surname' => 'Cabrera',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772940/depositphotos_583006416-stock-photo-close-beautiful-woman-african-braids_m0cmid.webp',
                'age' => 16,
                'attitude' => 1,
                'gender_id' => 2,
                'country_id' => 26
            ],
            [
                'name' => 'José',
                'surname' => 'Flores',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736771459/depositphotos_236583542-stock-photo-young-boy-virtual-reality-glasses_xrez2j.webp',
                'age' => 6,
                'attitude' => 1,
                'gender_id' => 1,
                'country_id' => 27
            ],
            [
                'name' => 'Teresa',
                'surname' => 'Soto',
                'image' => 'https://res.cloudinary.com/dzfqdntdw/image/upload/v1736772944/depositphotos_5195632-stock-photo-young-cute-black-woman-thinking_od76bs.webp',
                'age' => 14,
                'attitude' => 0,
                'gender_id' => 2,
                'country_id' => 1
            ]
        ];

        foreach ($kids as $kid) {
            Kid::create($kid);
        }
    }
}