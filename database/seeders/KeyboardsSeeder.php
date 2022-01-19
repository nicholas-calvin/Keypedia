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
            //60% MECHANICAL
            [
                'category_id' => '3',
                'name' => 'Vortex Series VX5 PRO blue switch',
                'price' => '415',
                'imgPath' => 'assets/image/60% mechanical/60% mechanical keyboard1.jpg',
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
                'name' => 'Razer Huntsman Mini Mercury White',
                'price' => '1000',
                'imgPath' => 'assets/image/60% mechanical/60% mechanical keyboard2.jpg',
                'description' => 'Features :
                - The #1 Best-Selling Gaming Peripherals Manufacturer in the US: Source - The NPD Group, Inc., U.S. Retail Tracking Service, Gaming Designed: Keyboards, Mice, PC Headsets, and PC Microphones, Based on dollar sales, Jan. 2017- June 2020 combined
                - Faster Than Legacy Mechanical Switches: Razer Optical switches use light-based actuation, registering key presses at the speed of light (30% shorter actuation distance than other clicky switches at 1.5 mm) with satisfying, clicky feedback
                - Ultimate Personalization & Gaming Immersion with Razer Chroma: Fully syncs with popular games, Razer hardware, Philips Hue, and gear from 30+ partners; supports 16.8 million colors on individually backlit keys
                - Quality, Aluminum Construction: Covered with a matte, aluminum top frame for increased structural integrity
                - Oil-Resistant Doubleshot PBT Keycaps: Made of textured, high-grade PBT for a more durable and textured finish less prone to long-term grime buildup
                - Fully Programmable Macros: Razer Hypershift allows for all keys and keypress combinations to be remapped to execute complex commands'
            ],
            [
                'category_id' => '3',
                'name' => 'Digital Alliance Meca 6 RGB 61% Mechanical Keyboard',
                'price' => '340',
                'imgPath' => 'assets/image/60% mechanical/60% mechanical keyboard3.jpg',
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
            ],
            //Full size mechanical
            [
                'category_id' => '4',
                'name' => 'Tecware Phantom 104 keys',
                'price' => '600',
                'imgPath' => 'assets/image/full size mechanical/full size mechanical keyboard1.jpg',
                'description' => 'Spesification:

                    Dimensions : 444.5 x 133.5 x 22.3 mm
                    Weight : 1.14kg
                    Layout : 104 Keys
                    Rated Voltage : 5.0V / 300mA
                    Switch Lifespan : 50 million keystrokes
                    Cable Length : 1.8m Braided USB cable
                    Frame : Black Plastic Body / Gunmetal Alloy Backplate
                    Switch Type : Mechanical Outemu Switches
                    Circuit Board : FR-4 Fibreglass PCB
                    LEDs : SMD LEDs
                    Keycaps : Double-shot ABS Keycaps
                    Interface : USB
                    Colorize : 18 Lighting Modes and Custom Lighting Profile
                    Package Contents :
                    01 x Phantom Keyboard
                    04 x Spare Mechanical Switch
                    01 x Switch Puller
                    01 x Keycap Puller
                    01 x Manual
                    
                    Garansi Resmi 1 Tahun'
            ],
            [
                'category_id' => '4',
                'name' => 'Fantech MAXPOWER MK853 blue switch',
                'price' => '459',
                'imgPath' => 'assets/image/full size mechanical/full size mechanical keyboard2.jpg',
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
                'category_id' => '4',
                'name' => 'Redragon Mechanical Keyboard Rainbow Full size K608',
                'price' => '427',
                'imgPath' => 'assets/image/full size mechanical/full size mechanical keyboard3.jpg',
                'description' => 'Redragon Red/Blue/Brown Switch: Equipped with the classic mechanical red switch, ideal for intensive gaming. It offers linear and smooth straight up and down travel, no-bump consistent keystroke with a quiet noise. Equipped with the classic mechanical brown switch, suitable for both gaming and working. It offers soft tactile feedback with a small bump on each keystroke with moderate noise. Equipped with the classic mechanical blue switch, suitable for long-time typing use. It offers the typical tactile feature of mechanical switches, along with audible clicky feedback sound.

                Decent Rainbow Backlight: With 9 vibrant rainbow backlight modes + 8 preset gaming lighting ways, different vibes for your daily working/gaming use. 2 customizable backlit modes ready for dedicated use.
                
                100% Anti-ghosting: NKRO 104 keys ensure the most accurate simultaneous key actuation while any gameplay. No matter how fast your gaming move is, the damage will precisely strike on your target.
                
                Smooth Brushed Plate: All 104 keys are stably fixed in the brushed surface board, solid material build without losing the modern minimalist style. Adjustable stand supports for different board angles.
                
                Neat Floated Design: Full keys in floated layout form makes the keyboard spacing both look and feel natural and ample. And the better point is that you no longer have to worry about dust-build, easy to handle it with a hairdryer.'
            ],
        ]);
    }
}
