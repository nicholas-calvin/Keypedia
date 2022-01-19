<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyboardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyboards')->insert([
            //WIRELESS
            [
                'category_id' => '1',
                'name' => '10 inches Wireless Keyboard Bluetooth',
                'price' => '80',
                'imgPath' => 'assets/image/wireless/wireless keyboard1.jpg',
                'description' => 'Terhubung melalui Bluetooth, tidak ada penerima USB. Support IOS, Android, Windows dan smart phones. Iphone, Ipad 2018 dan 2017, Ipad Pro, Ipad 2/3/4, Ipad 2.1, Samsung Galaxy Tab A, Galaxy Note, Nexus 10, LG, Nexus, Huaweii, ZTE etc. Pertama nyalakan Bluetooth di perangkat, lalu hidupkan sakelar keyboard bluetooth dan sakelar bluetooth, tekan tombol kombinasi FN + C di ipad untuk refresh Bluetooth, lalu sambungkan keyboard Bluethooth, tekan FN + Q / W/ Tombol kombinasi E pada keyboard untuk beralih ke sistem yang sesuai'
            ],
            [
                'category_id' => '1',
                'name' => 'Keyboard Mouse wireless D3200 Outsaid D',
                'price' => '180',
                'imgPath' => 'assets/image/wireless/wireless keyboard2.png',
                'description' => 'Nyaman digunakan, desain retro, jarak hingga 10m, plug n play, 3V, 3mA, 2.4GHZ. Bisa digunakan untuk TV, laptop, tv box, desktop/pc, AIO dan lainnya.'
            ],
            [
                'category_id' => '1',
                'name' => 'Logitech K580',
                'price' => '700',
                'imgPath' => 'assets/image/wireless/wireless keyboard3.png',
                'description' => 'Modern and slim design, works with easy switch, bluetooth wireless 2.4 GHz USB, 24-month batrey life karena ada fitur auto sleep.
                Kompatibel menggunakan receiver dengan windows 10 or higher, windows 8 dan 7, MacOs 10.10 or higher. Kompatibel untuk bluetooth windows10 or higher, windows 8 dan 7, MacOs X 10.10 or higher, IOS 10.3.3 or higher, Android 5.0 or higher, Surface'
            ],
            //WIRED
            [
                'category_id' => '2',
                'name' => 'JellyBean U2000 USB Wired Keyboard and Mouse',
                'price' => '100',
                'imgPath' => 'assets/image/wired/wired keyboard1.jpg',
                'description' => 'Alcatroz Combo Keyboard & Mouse JellyBean U2000 keyboard dan mouse buatan Alcatroz memiliki desain menarik. Desain keyboard berbentuk bulat dan memiliki warna yang cerah dengan UV Coated Keypads, dilengkapi dengan mouse 1200 CPI yang memiliki warna serasi dengan keyboard, nyaman digunakan dan dapat meningkatkan produktivitas bekerja'
            ],
            [
                'category_id' => '2',
                'name' => 'Prolink Wired Keyboard',
                'price' => '45',
                'imgPath' => 'assets/image/wired/wired keyboard2.jpg',
                'description' => 'PCBO5303U

                Keyboard:
                - USB Interface
                - Comfortable & silent keypad touch
                - Designed for quick accessing to Start Menu in Windows OS Platform
                - Reliable keyboard with spill-resistant design
                
                Mouse:
                - USB Interface
                - Super High Sensitivity with 1000dpi which provides smoother & precise control
                - Stylish yet ergonomic design ensures comfort for the hand of the user
                '
            ],
            [
                'category_id' => '2',
                'name' => 'Inphic V580 Wired Keyboard silent office waterproof',
                'price' => '80',
                'imgPath' => 'assets/image/wired/wired keyboard3.jpg',
                'description' => 'Fitur:
                1. Versi unggulan menggunakan desain floating keycaps , dan keycaps cekung bulat lebih pas di jari
                2. Menggunakan desain tombol bass
                3. Desain tahan air dan tahan percikan, desain penyegelan membran
                4. Keyboard tipis, jari nyaman dan pas alami, kokoh dan tahan lama
                
                Keyboard parameters:
                1. Working method: photoelectric
                2. Material: ABS
                3. Interface: USB
                4. Weight: Value version: about 560g,
                5. Button life: about 12 million times
                6. Working current: 100mA
                7. Size: Value version: 450x170x25mm'
            ],
            //MECHANICAL
            [
                'category_id' => '3',
                'name' => 'Vortex Series VX5 PRO blue switch',
                'price' => '415',
                'imgPath' => 'assets/image/mechanical/mechanical keyboard1.jpg',
                'description' => 'Features :
                - ABS Material
                - Layout 61%
                - Vortex VX5 Pro is available switch : RED , BLUE , BROWN outemu Switch
                - MODE RGB 14 mode RGB with music Sync Mode
                - Foam damper di bottom case
                - Prelubes Stabilizer
                - VX5pro Universal Hotswap Socket 5 Pin
                - Software available in our website www.vortexseries.net
                - Garansi 1 Tahun VortexSeries'
            ],
            [
                'category_id' => '3',
                'name' => 'Fantech MAXPOWER MK853 blue switch',
                'price' => '459',
                'imgPath' => 'assets/image/mechanical/mechanical keyboard2.jpg',
                'description' => 'SHORTCUT VOLUME KNOB
                Atur Volume, play dan pause dalam satu tombol
                
                ERGONOMIC WRIST REST
                Bermain lebih lama dengan sandaran tangan yang ergonomis dan bisa di lepas pasang dengan mudah
                
                ALL KEYS ANTI GHOSTING
                Tidak perlu khawatir lagi tidak bisa menekan banyak tombol bersamaan karena MK853 ini sudah dilengkapi ANTI-GHOSTING di seluruh tombol tanpa terkecuali !
                
                Spesifikasi Lengkap :
                
                - Jenis Switch : Mechanical
                - Tipe Switch : Content Blue Clicky & Red Silent
                - Non Removeable Switch
                - Jumlah Tombol : 104 Tombol
                - Anti Ghosting : ALL KEYS
                - Ukuran : 436mm X 220mm X 42mm
                - Berat : 1.3kg
                - Dual Shot KeyCaps
                - 22 Spectrum Mode
                - Ergonomic Wrist Rest
                - Media Keys
                - Multimedia Volume Scroll Wheel
                - Software & Macro Support (Windows Only)
                - Compatible : Win10/8/7, MacOS, Linux
                '
            ],
            [
                'category_id' => '3',
                'name' => 'Digital Alliance Meca 6 RGB 61% Mechanical Keyboard',
                'price' => '340',
                'imgPath' => 'assets/image/mechanical/mechanical keyboard3.jpg',
                'description' => 'SWITCH
                - Switch Typel: Mechanical
                - Switch Name: Outemu
                - Switch Color: Blue, Red, Black
                - Special Features: Removable Switch
                - Lifespan: 60 Million Clicks Lifetime
                
                KEYBOARD
                - Model: Meca 6
                - Type: 61% Layout Size Mechanical
                - Material: ABS + Metal
                - Weight: 525 gr
                - Dimension (L x W x H): 291 x 112 x 37 mm
                - Interface: Detachable Type-C Cable
                - Keycaps: Double Injection
                - Cable Length: 160 cm
                - Backlight: Rainbow 5 Color
                - LED Mode: 14 LED Mode'
            ]
        ]);
    }
}
