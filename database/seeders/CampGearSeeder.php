<?php

namespace Database\Seeders;

use App\Models\CampGear;
use Illuminate\Database\Seeder;

class CampGearSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['Tenda Dome 2 Orang', 'Tenda', 45000, 8, 'img1.jpg',
             'Tenda dome double layer untuk 2 orang. Ringan dan cepat dipasang, cocok untuk pendakian santai atau camping berdua.'],
            ['Tenda Dome 4 Orang', 'Tenda', 75000, 6, 'img2.jpg',
             'Tenda dome double layer kapasitas 4 orang, sudah termasuk flysheet, pasak, dan frame. Ruangnya lega untuk camping bersama teman.'],
            ['Carrier 60 Liter', 'Tas', 40000, 10, 'img3.jpg',
             'Tas carrier 60 liter dengan back system yang bisa disesuaikan dan rain cover bawaan. Muat untuk perjalanan 2 sampai 3 hari.'],
            ['Daypack 25 Liter', 'Tas', 20000, 12, 'img4.jpg',
             'Tas harian 25 liter untuk tektok atau membawa perlengkapan ringan. Punya kantong samping untuk botol minum.'],
            ['Sleeping Bag Polar', 'Perlengkapan Tidur', 20000, 15, 'img5.jpg',
             'Sleeping bag bahan polar yang hangat, ringan, dan mudah dilipat. Nyaman dipakai saat malam yang dingin.'],
            ['Matras Gulung', 'Perlengkapan Tidur', 10000, 20, 'img6.jpg',
             'Matras gulung berbahan foam sebagai alas tidur di dalam tenda, menahan dingin dari tanah.'],
            ['Kompor Portable', 'Alat Masak', 15000, 12, 'img7.jpg',
             'Kompor gas portable dengan pemantik otomatis. Hemat tempat dan praktis dibawa naik gunung. Gas dibeli terpisah.'],
            ['Nesting Set 4 Piece', 'Alat Masak', 12000, 9, 'img8.jpg',
             'Satu set panci dan wajan lipat dari aluminium untuk memasak dan makan selama di camp.'],
            ['Headlamp LED', 'Aksesoris', 10000, 18, 'img9.jpg',
             'Lampu kepala LED dengan tiga mode cahaya dan tali elastis yang bisa disetel. Baterai sudah terpasang.'],
            ['Trekking Pole', 'Aksesoris', 15000, 0, 'img10.jpg',
             'Tongkat trekking aluminium yang panjangnya bisa diatur, membantu menjaga keseimbangan di jalur menanjak.'],
        ];

        foreach ($data as [$name, $category, $price, $stock, $image, $desc]) {
            CampGear::create([
                'name'        => $name,
                'category'    => $category,
                'rent_price'  => $price,
                'stock'       => $stock,
                'image'       => $image,
                'description' => $desc,
            ]);
        }
    }
}
