<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Pulau Mursala',
                'type' => 1,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Tapian Nauli',
                'description' => 'Pulau Mursala terletak di Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah. Pulau Mursala merupakan pulau terbesar di wilayah Kebupaten Tapanuli Tengah. Pulau dengan luas kurang lebih 8000 ha tersebut berada disebelah barat daya Kota Sibolga. Pulau Mursala memiliki keindahan air terjun tawar yang jatuh ke tengah laut, seperti tidak ada pudarnya. Air terjun di pulau yang terletak di Samudera Hindia ini sangat jarang ditemui di dunia, sehingga tidak sedikit turis mancanegara yang tertarik berkunjung untuk melihat keunikan air terjun tersebut. Air terjun mengalir melalui tebing dan langsung turun ke laut. Karena dianggap menarik, Pulau Mursala pernah menjadi lokasi syuting Film King Kong.',
                'maps_url' => 'https://goo.gl/maps/35BVyAQmc4CDx5oAA'

            ],
            [
                'name' => 'Pulau Kalimantung',
                'type' => 1,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kawasan Kepulauan Mursala',
                'description' => 'Pulau Kalimantung berada di Kabupaten Tapanuli Tengah, tepatnya masih di kawasan Kepulauan Mursala. Tempat ini menyimpan pesona yang akan membuatmu enggan untuk beranjak pulang. Untuk sampai ke pulau yang masih asri dan tak berpenghuni ini, kita cukup menyewa kapal boat mesin tempel, atau warga setempat menyebutnya dengan nama “Sitempel” akronim dari “Mesin Tempel” dengan waktu tempuh kurang lebih 1.5 jam dari Pandan. Sepanjang perjalanan menuju Pulau Kalimantung ini, kita akan dimanjakan dengan pemandangan laut biru yang dihiasi gambaran hidup nelayan sedang mencari ikan. Pulau Kalimantung dikelilingi oleh pantai yang indah dan dangkal. Laut berwarna hijau nan bersih menghiasi pinggir pantai berpasir putih, sedangkan air lautnya sangatlah jernih dan berwarna biru. Pantai Kalimantung masih relatif, dan air yang dangkal, membuat pantai ini sangat cocok untuk liburan keluarga dengan membawa anak-anak bermain pasir dan mengenal pantai. Di tempat inipun, kita dapat menghabiskan waktu dengan menyelam atau snorkeling, sambil menikmati keindahan aneka ikan-ikan kecil dan batu karang yang ada. Tak hanya itu, sejauh mata memandang, kita juga tak akan menemukan sampah karena kebersihan pulau ini masih sangat terjaga.',
                'maps_url' => 'https://goo.gl/maps/jqKShEUpSg8Rqi4KA'

            ],
            [
                'name' => 'Pulau Putri',
                'type' => 1,
                'region' => 'Tapanuli Tengah',
                'address' => null,
                'description' => 'Pulau Putri merupakan sebuah pulau kecil dengan luas sekitar 2,5 hektar yang langsung menghadap ke Samudra Hindia. Untuk sampai ke Pulau ini, butuh perjalanan hampir dua jam dari pantai Pandan dengan menyewa spead boat. Biayanya sekitar Rp 250 ribu per orang. Pulau Putri menawarkan pesona yang indah. Di sepanjang pulau ini terdapat pasir putih. Lautnya biru, dan perbukitan berhutan yang masih terawat. Biasanya di Pulau Putri ini menjadi tempat persinggahan bagi wisatawan usai melihat air terjun Pulau Mursala. Di Pulau Putri, Anda juga akan menikmati keindahan pasirnya. Jika misalnya anda hobi menyelam, akan dapat melihat ikan-ikan yang lucu, ditambah lagi terumbu karangnya yang indah. Diketahui juga, di bawah laut pantai pulau putri ini ada terumbu karang berjenis Coral Reef, merupakan jenis terumbu karang langka di dunia. Kawasan ini juga bisa anda manfaatkan untuk memancing di sepanjang pesisir daratan pulau tersebut. Sebagian daratan pulau ini masih terdapat hutan tropis yang di dalamnya tumbuh beragam jenis tumbuhan. Karenanya, suasana yang sejuk pun akan langsung terasa ketika memasuki kawasan hutan di sana.',
                'maps_url' => 'https://goo.gl/maps/tNnF6q9hkNisKi4d6'
            ],
            [
                'name' => 'Pulau Poncan',
                'type' => 1,
                'region' => 'Sibolga',
                'address' => null,
                'description' => 'Sebenarnya, terdapat dua Pulau Poncan Sibolga, yaitu Poncan Gadang dan Poncan Ketek. Kedua pulau tersebut memiliki lokasi bersebelahan dan bisa dijangkau dalam waktu singkat menggunakan kapal cepat atau speedboat.  Jika Anda ingin berwisata ke Pulau Poncan, akses transportasi sangat mudah. Perjalanan menuju ke Pulau Poncan dilakukan menggunakan speedboat yang tersedia di dermaga, dengan biaya sekitar Rp15 ribuan per orang. Daya tarik utama Pulau Poncan Sibolga tentu saja pemandangan pantai dan laut yang sangat indah. Kedua pulau ini memiliki pantai yang sangat bersih sehingga membuat wisatawan yang berkunjung betah berlama-lama bermain. Selain menikmati panorama pantai, ada beberapa aktivitas yang bisa dilakukan ketika Anda berkunjung ke Pulau Poncan Sibolga. Anda bisa berenang di tepi pantai hingga diving atau snorkeling. Selain itu, Anda pun bisa melakukan aktivitas berkeliling pulau dengan menggunakan speedboat dan hanya dikenakan biaya yang cukup terjangkau.',
                'maps_url' => 'https://goo.gl/maps/Tjoc7aRvrS8QoA2w6'
            ],
            [
                'name' => 'Pantai Indah Pandan',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Desa Pandan, Kecamatan Pandan, Kabupaten Tapanuli Tengah',
                'description' => 'Obyek wisata Pantai Indah Pandan memiliki lokasi yang tepatnya berada di Desa Pandan, Kecamatan Pandan, Kabupaten Tapanuli Tengah. Pantai ini sampai sekarang masih menjadi tempat pariwisata yang sangat populer di berbagai daerah di Kabupaten Tapanuli Tengah. Semilir angin pantai yang membawa lautan akan menyapa anda sesaat setelah tiba di Pantai Indah Pandan. Suasana perkotaan yang bising dan penuh polusi akan berganti dengan nuansa pantai yang nyaman dan menentramkan hati. Pantai yang membentang dari timur ke barat ini memiliki air laut yang terbilang jernih. Pasir pantai di sana berwarna putih dan terasa lembut, jadi anda bisa berjalan-jalan atau bermain voli bersama dengan keluarga. Ombak-ombak yang berkejaran juga terlihat indah di lautan. Di pinggiran pantai juga ada banyak pepohonan yang rindang dan pondok untuk tempat beristirahat. Saat sore anda bisa menikmati view dari matahari tenggelam atau sunset di Pantai Pandan. Warnanya yang orange kemerahan membuat pemandangan di sekitar pantai bak lukisan. Bagi anda yang suka dengan wisata alam, benar-benar akan sangat dimanjakan di tempat pariwisata ini. Selain dapat menikmati panorama, pengunjung bisa melakukan berbagai kegiatan yang menarik dan seru, seperti snorkling, bermain air di tepi pantai dan juga bermain surfing. Di Pantai Indah Pandan anda bisa memuaskan hasrat berfoto anda karena banyak spot menarik yang bisa anda manfaatkan seperti spot di depan batu-batu karang yang ada di sana, keeksotisan pemandangan tersebut akan membuat foto anda jadi semakin menarik. Anda juga bisa mengabadikan kegiatan-kegiatan yang anda lakukan di sana seperti saat anda bermain voli, snorkling atau saat mengadakan api unggun.',
                'maps_url' => 'https://goo.gl/maps/gSMdSGjhUfp84uZN6'
            ],
            [
                'name' => 'Pantai Kalangan',
                'type' => 2,
                'region' => 'Sibolga',
                'address' => null,
                'description' => "Pantai Indah Kalangan atau biasa disebut Pantai Kalangan berada di Pandan, Sibolga, Sumetera Utara. Pantai ini menjadi tempat favorit untuk berakhir pekan. Yang membuat pantai ini berbeda karena berada di dalam kawasan teluk. Teluk adalah perairan yang menjorok ke daratan dan dibatasi oleh daratan di tiga sisinya. Seperti teluk lainnya, Pantai Kalangan memiliki ombak yang tenang, dangkal dan berpasir. Airnya hijau namun bening bak kaca. Ini mengapa Pantai Kalangan menjadi tempat berburu vitamin sea di Sibolga. Biasanya yang datang adalah wisatawan domestik dari Padangsidimpuan dan warga sekitar. Pantai ini sangat cocok untuk berenang. Kedalamannya hanya sampai pinggang orang dewasa saja. Sehingga sangat aman untuk anak-anak. Berenang sepanjang hari tidaklah masalah. Airnya bukan cuma bening tapi juga hangat. Semakin sore, airnya akan semakin hangat dan bening.\nPantai ini difasilitasi dengan hotel, warung dan gazebo. Wisatawan bisa duduk seharian sambil menunggu sunset di sana. Sayangnya, pantai ini dipenuhi sampah. Ada banyak sisa makanan yang dibuang oleh pengunjung ke pantai. Pengunjung harus berhati-hati karena rawan terkena duri ikan atau kepiting yang dibuang sembarang di pasir. Terlepas dari itu, Pantai Kalangan Sibolga adalah obyek wisata yang menarik. Biaya masuknya gratis.
                                ",
                'maps_url' => 'https://goo.gl/maps/TRYkSxKUVaKhoW1aA'
            ],
            [
                'name' => 'Pantai Hollywood',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kelurahan Lubuk Tukko Baru, Kecamatan Pandan',
                'description' => "Pantai Hollywood Pandan terletak di Jalan lintas Sibolga-Padang Sidimpuan Kelurahan Lubuk Tukko Baru, Kecamatan Pandan, Kabupaten Tapanulu Tengah ini menjadi tempat yang mengesankan. Pantai wisata menarik ini cukup indah untuk anda nikmati bersama keluarga. Tempat wisata pantai Hollywood ini selalu terawat, mempunyai air yang jernih, dan pasir yang putih sehingga selalu ramai dikunjungi. Pantai ini memiliki pasir yang putih, air laut super jernih, dan yang paling menarik perhatian wisatawan adalah pemandangan matahari terbenamnya yang super cantik. Beberapa kegiatan yang dapat Anda lakukan di sini di antaranya diving, menikmati sunset, atau menikmati berbagai kuliner khas ala Pantai Hollywood. Bagi yang ingin berburu sunrise sambil melihat aktivitas para nelayan di pagi hari bisa mencoba untuk mengunjungi pantai Hollywood ini. Di sekitar pantai sudah tersedia beberapa hotel, ataupun penginapan dengan fasilitas yang cukup memadai dengan harga yang terjangkau. Jadi sebelumnya kita bisa menginap di sini jika lokasi tempat tinggal jauh dari pantai Hollywood. Pantai yang terkenal akan wisata kuliner seafood dan khas lautnya lainnya, anda akan melihat jukung-jukung para nelayan berjejer rapi di tepi pantai yang pastinya akan menambah indahnya suasana pagi hari. Walaupun pantai Keindahan alam dan terkenal akan wisata kuliner khas lautnya. Sarana dan prasarana fasilitas pantai Hollywood dikelola cukup baik. Terdapat berbagai sarana bersenang-senang. Anda yang datang ke Pantai Hollywood bersama keluarga juga dapat bersantai sambil bernyanyi di room karaoke yang disediakan.",
                'maps_url' => 'https://goo.gl/maps/cHMnfPnKyQb638iQA'
            ],
            [
                'name' => 'Pantai Anggar',
                'type' => 2,
                'region' => 'Sibolga',
                'address' => 'Kecamatan Sibolga Kota, Kotabaringin',
                'description' => "Pantai Anggar atau yang kerap disebut daerah Pelabuhan Lama Kota Sibolga ini terletak di Kecamatan Sibolga Kota, Kotabaringin, Kota Sibolga. Pantai ini sering dikunjungi oleh warga setempat untuk mandi air laut, karena pantai ini terkenal dengan kejernihannya dan kebersihannya yang selalu dirawat oleh petugas setempat serta warga sekitar. Pantai ini juga identik dengan daerah Kawasan Kota Tua yang juga merupakan ikon dari Kota Sibolga. Kawasan Kota Tua Sibolga di Pelabuhan Lama ini terdiri dari beberapa bangunan peninggalan Kolonial Belanda. Antara lain Bioskop Haven Theatre yang dibangun oleh Belanda tahun 1934 yang digunakan sebagai hiburan para pelaut, pedagang juga penduduk lokal. Gudang Marison sebagai pusat perdagangan juga Gudang NV Perseroan Dagang Tapanuli. Seluruh gedung ini berada di sekitar Pelabuhan lama Sibolga. Pelabuhan lama Sibolga ini dahulunya tempat bersandar kapal-kapal, namun seiring dengan menyusutnya air laut akhirnya pelabuhan dipindahkan ke jalan horas dan dipindahkan lagi ke jalan Majapahit. ",
                'maps_url' => 'https://goo.gl/maps/pJXuNzFt3fQreP2v6'
            ],
            [
                'name' => 'Pantai Ujung Sibolga',
                'type' => 2,
                'region' => 'Sibolga',
                'address' => 'Desa Simare-Mare',
                'description' => "Pantai Ujung Sibolga menjadi salah satu objek wisata favorit terutama untuk menikmati pemandangan matahari terbenam . Pantai ini berlokasi di Desa Simare-Mare yang termasuk Kecamatan Sibolga Utara. Disini juga tersedia fasilitas yang cukup lengkap seperti ada tamannya, gedung yang disediakan untuk menikmati berbagai kuliner yang dijual. Sangat cocok untuk berwisata atau dijadikan tempat untuk nongkrong santai sambil menikmati pemandangan. Pemandangan matahari terbenam atau biasa disebut dengan sunset adalah peristiwa alam yang sering ditunggu. Matahari yang hampir tenggelam biasanya memancarkan cahaya berwarna oranye yang sangat cantik. Pantai menjadi salah satu tempat terbaik untuk menikmati peristiwa alam ini. Bagi kamu penikmat pemandangan sunset, bisa mencoba ke pantai Ujung . Sambil berfoto bersama teman atau keluarga dengan background pemandangan laut dan matahari mulai terbenam. ",
                'maps_url' => 'https://goo.gl/maps/HfnYuu6XKSQDorN7A'
            ],
            [
                'name' => 'Pantai Ujung Sibolga',
                'type' => 2,
                'region' => 'Sibolga',
                'address' => 'Desa Simare-Mare',
                'description' => "Pantai Ujung Sibolga menjadi salah satu objek wisata favorit terutama untuk menikmati pemandangan matahari terbenam . Pantai ini berlokasi di Desa Simare-Mare yang termasuk Kecamatan Sibolga Utara. Disini juga tersedia fasilitas yang cukup lengkap seperti ada tamannya, gedung yang disediakan untuk menikmati berbagai kuliner yang dijual. Sangat cocok untuk berwisata atau dijadikan tempat untuk nongkrong santai sambil menikmati pemandangan. Pemandangan matahari terbenam atau biasa disebut dengan sunset adalah peristiwa alam yang sering ditunggu. Matahari yang hampir tenggelam biasanya memancarkan cahaya berwarna oranye yang sangat cantik. Pantai menjadi salah satu tempat terbaik untuk menikmati peristiwa alam ini. Bagi kamu penikmat pemandangan sunset, bisa mencoba ke pantai Ujung . Sambil berfoto bersama teman atau keluarga dengan background pemandangan laut dan matahari mulai terbenam. ",
                'maps_url' => 'https://goo.gl/maps/HfnYuu6XKSQDorN7A'
            ],
            [
                'name' => 'Pantai Pandaratan',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kelurahan Pondok Batu, Kecamatan Sarudik',
                'description' => "Pantai Pandaratan Pondok Batu adalah sebuah objek wisata yang berlokasi di Kelurahan Pondok Batu, Kecamatan Sarudik, Kabupaten Tapanuli Tengah. Pantai ini berjarak sekitar 3 Km dari pusat Kota Sibolga.  Pantai ini  bisa dikatakan sudah cukup terkenal. Bagi mereka yang berdomisili di Sibolga, mungkin sudah sangat familiar dengan nama pantai Pandaratan Pondok Batu ini.  Setiap musim libur tiba, pantai ini selalu ramai dikunjungi oleh para pengunjung. Mereka yang datang ke pantai ini sendiri tak hanya terbatas pada wisatawan lokal saja. Tak sedikit pula kita temukan berbagai wisatawan yang datang dari luar kota. Pantai ini sangat terkenal dengan surganya bintang laut. Sangat mudah untuk menemukan bintang laut di pantai ini, baik itu di bibir pantai dan di dalam air. Pemandangan hamparan pasir putih nan menawan, pemandangan laut  yang indah, dengan latar Pulau Poncan, dan Pulau Sendok, serta hijaunya perbukitan sekitar menambah kesan semakin indah di pantai ini. Yang paling menarik, kawasan ini masih terdapat puluhan hektare hutan bakau (mangrove) yang tumbuh baik dengan ekosistem didalamnya. Disekitar Pantai terdapat juga sebuah batu karang berukuran cukup besar dan batu karang yang bentuknya seperti goa. Batu karang ini menambah kesan unik dan menarik untuk dieksplorasi. Biasanya mereka akan duduk diatas sambil menikmati deburan ombak yang menghampiri kaki. Ombak yang relatif tenang akan menarik perhatian setiap pengunjung untuk berenang atau menikmati keindahan pantai sambil duduk santai. Panorama yang ditawarkan tentu tak akan membuat bosan menghabiskan waktu di sini. Melakukan beberapa aktivitas yang seru bersama teman maupun keluarga. Seperti bermain pasir, bermain bola, bermain layangan, ataupun hal-hal yang seru untuk dilakukan. Terdapat sederet fasilitas yang bisa bikin wisatawan nyaman saat berlibur ke pantai ini, seperti toilet, warung makan, dan parkiran 24 jam.",
                'maps_url' => 'https://goo.gl/maps/UKhdhurR2xzAeKGm6'
            ],
            [
                'name' => 'Pantai Batu Gajah',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Hajoran, Kecamatan Pandan',
                'description' => "Bukan gajah sungguhan, pantai ini punya batu besar yang menyerupai gajah. Letaknya di Hajoran, Kecamatan Pandan, Kabupaten Tapanuli Tengah. Pantai ini bisa dibilang tersembunyi karena berada di belakang pemukiman warga. Untuk bisa ke sini, wisatawan harus treking sedikit ke atas bukit. Dari atas sana, terlihat hamparan pasir dan ombak yang memanjakan mata. Dari bibir pantai terlihat batu besar menyerupai gajah. Ada lubang besar di pinggir batu dan guratan panjang menyerupai belalai. Kalau dilihat-lihat kepala gajah seakan sedang menunduk untuk minum. Pantai ini masih masuk dalam area teluk, sehingga pantainya tidak terlalu dalam. Namun jika ada gelombang tetap harus diwaspadai.\nBagian Batu Gajah masih masuk dalam kawasan subtidal atau pasang surut. Saat surut wisatawan bisa masuk ke sana. Kalau sedang pasang airnya bisa sampai sebahu orang dewasa. Selain batu gajah, pantai ini juga memiliki menara pandang untuk foto-foto. Biayanya Rp 3.000-5.000 tergantung tempat. Sudah ada deretan gazebo yang disiapkan untuk wisatawan. Hanya ada dua tipe gazebo yaitu besar dan kecil. Kalau yang besar Rp 100 ribu, sementara yang kecil Rp 50 ribu. Gazebo bisa dipakai seharian. Tak hanya berjemur, bermain ombak di sini sangat menyenangkan. Berenang di antara ombak menjadi salah satu kegiatan wisatawan. Jika tak ingin basah-basahan, bisa berkeliling dengan kapal wisata. Harganya cukup murah Rp 10.000 saja per orang.",
                'maps_url' => 'https://goo.gl/maps/mAjU6cAaTvZgtnc37'
            ],
            [
                'name' => 'Pantai Binasi',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Sorkam Barat',
                'description' => "Pantai ini terletak di Kecamatan Sorkam Barat, Kabupaten Tapanuli Tengah. Pantai Binasi merupakan satu di antara destinasi andalan yang ada di Kabupaten Tapanuli Tengah. Lokasi Pantai Binasi berada sekitar 60 km dari Kecamatan Pandan. Jarak tersebut bisa ditempuh sekitar dua jam perjalanan dari Pandan dan berhadapan langsung dengan Samudera Hindia di Pantai Barat Sumatera Utara. Dengan sajian pantai yang masih terbilang alami, ditambah banyaknya pepohonan yang rimbun dan teduh, sehingga meningkatkan kunjungan wisata di objek wisata ini pada musim liburan dan setiap akhir pekan. Bermain di tepi pantai dengan deburan ombak tenang  dan angin pantai yang sepoi akan menambah kesan yang tak terbantahkan bahwa Tapanuli Tengah merupakan surganya wisata bahari. Dengan biaya yang variatif dan terjangkau, bisa mendapatkan pemandangan sunset dan sunrise. Untuk biaya parkir kendaraan cukup terjangkau, mulai dari Rp5.000 hingga Rp15.000. Selain itu, kuliner khas pesisir juga dapat dinikmati di tempat ini dengan harga beragam di gerai-gerai pantai. Pelancong yang datang ke destinasi ini juga beragam, mulai dari usia muda hingga dewasa. Pengunjung yang datang pun terdiri dari lokal Sumut, luar Sumut, bahkan luar negeri. Selain sekadar mandi laut atau bersantai, pengunjung juga bisa keliling pulau dengan memakai jasa pemilik perahu atau travel.",
                'maps_url' => 'https://goo.gl/maps/hCjaJ5aSoAMsWFKn9'
            ],
            [
                'name' => 'Pantai Kade Tigo',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Barus',
                'description' => "Destinasi wisata bahari ini dinamakan dengan Pantai Kade Tigo. Nama pantai ini merupakan kata yang berartikan dari masyarakat yang rumpun, yang lokasi wisatanya terletak di Kecamatan Barus, Kabupaten Tapanuli Tengah. Seperti biasanya wisata bahari, pantai kade tigo menawarkan suasana alam  yang begitu cantik. Pasir putih yang begitu membentang luas dengan sekililing pantai ditumbuhi oleh pepohonan kelapa, serta pesona alam pantai yang juga harus kamu jempoli.  Sehingga menjadikan pemandangan alam yang begitu mempesona. Banyak kegiatan yang dapat dilakukan pengunjung saat berada di pantai Pasir Jambak, mulai dari aktivitas menikmati pesona alam pantai, Bermain ombak di pinggir pantai, berenang, berjemur, bermain bola bersama rekan-rekan di atas pasir putih, serta bermain pasir pantai dengan membuat rumah ataupun mengubur teman kamu dengan pasir putih pantai ini. Pemandangan langit yang berwarna biru memudar dengan cahaya matahari yang mulai tenggelam, dengan membiaskan warna orange di setiap awan yang menghalangi cahaya tersebut, membuat pemandangan menjadi sangat eksotis dan cukup romantik. Pantai ini buka setiap hari jam 6 pagi sampai jam 7 malam. Dipantai ini anda dapat menenangkan pikiran anda dan menikmati keindahan pantai yang juga begitu mempesona.",
                'maps_url' => 'https://goo.gl/maps/6jk3rS5mfu8VejLw9'
            ],
            [
                'name' => 'Pantai Pulo Pane',
                'type' => 2,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Barus',
                'description' => "Pantai Pulo Pane berada di Desa Pananggahan, Kecamatan Barus, Kabupaten Tapanuli Tengah. Warga sekitar menyebutnya pulau terpisah karena saat pasang, jalur lintas seakan tenggelam. Tapi saat surut, pasir pantai akan timbul dan membuat jalan ke arah pulau ini. Pasir pantainya putih dan halus. Kalau diperhatikan lekat-lekat, ada kerlap-kerlip di pasirnya. Pasirnya bercampur dengan cangkang kerang yang sudah hancur. Masyarakat sekitar mayoritas beragama islam, sehingga ternak seperti kambing dibiarkan di tepi pantai. Jika ingin menyeberang ke Pulau Pane, wisatawan tinggal jalan kaki saja. Gunakan alas kaki yang nyaman, karena Pulo Pane adalah wilayah pulau karang. Di sisi yang menghadap ke dalam pulau, pasir pantai masih bisa ditemukan. Mangrove pun tumbuh di tengah laut dan bisa dijadikan sebagai tempat foto. Sayangnya, tak ada penjual makanan dan minuman di dalam Pulo Pane. Pulau ini dijadikan sebagai tempat berkebun oleh warga sekitar. Para pengail ikan juga kerap ada di sekitar pulau",
                'maps_url' => 'https://goo.gl/maps/bEne678bpnEGqhnX7'
            ],
            [
                'name' => 'Air Terjun Sibuni - Buni',
                'type' => 3,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Sarudik',
                'description' => "Air Terjun Sibuni-Buni terletak di Kecamatan Sarudik, Kabupaten Tapanuli Tengah. Pohon-pohon tinggi masih berdiri tegak tak diganggu dengan adanya pembangunan. Jadi pemandangan tetap asri dan alami. Ada pondok, dan warung serta tempat beristirahat yang bisa dimanfaatkan untuk merehatkan badan sejenak sambil memandangi alam terbukanya. Pemandangan sekitar air terjun terbilang cukup memikat, pasalnya aliran sungainya sangat jernih dengan arus yang kencang pula saat terjun dari beberapa tingkatannya. Air terjunnya memiliki beberapa tingkatan, tingkatan paling tinggi merupakan air terjun aslinya. Karena benar-benar turun dari tebing setinggi 12 meter dan turun ke aliran sungai Sarudik. Sedangkan 3 tingkatan kecilnya berupa bendungan buatan mirip tangga. Wisatawan bisa mandi di kolam tingkatan air terjunnya, atau merasakan pijatan dari aliran air terjun yang mengucur deras tersebut. Pengelolaan pun sedang digalakkan, mulai dari bangunan pondok, warung makanan hingga jajanan dan mushola sedang dalam penyempurnaan. Selain itu, ruko-ruko untuk pedagang souvenir juga sudah disediakan, nantinya pedagang souvenir juga akan meramaikan Air Terjun Sibuni-buni. Akan banyak pedagang yang menawarkan produk oleh-oleh seperti kaos, celana untuk mandi, aksesoris khas Tapanuli Tengah hingga makanan dan jajanan.",
                'maps_url' => 'https://goo.gl/maps/CdadqpQqeBAPt9KY9'
            ],
            [
                'name' => 'Air Terjun Aek Martolu Rampa',
                'type' => 3,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Sarudik',
                'description' => "Wisata Air Terjun Aek Martolu Rampa yang wajib dikunjungi jika berwisata ke Desa Rampah, Kecamatan Sitahuis, Kabupaten Tapanuli Tengah. Destinasi wisata air terjun Aek Martolu Rampa ini juga belum banyak diketahui masyarakat luas. Sesuai namanya, air terjun ini memiliki tiga tingkat. Kondisi alam air terjun ini juga masih terjaga ke asriannya. Dengan suasana pohon-pohon besar yang mengelilingi air terjun Aek Martolu Rampa, semakin menambah keasriannya. Air yang tumpah dari puncak terjun juga tampak jernih dan sejuk. Pas untuk suasana santai pengunjung. Sensasi yang disajikan oleh alam juga berbeda dan membuat pengunjung betah berlama-lama saat berkunjung ke destinasi ini. Di sekitar lokasi, juga terdapat pedagang kudapan yang menjajakan barang dagangannya dengan konsep asongan. Untuk mencapai lokasi ini juga tidak terlalu memakan waktu lama. Bila melalui jalan lintas Sumatera Sibolga-Tarutung, lokasi ini berada di persimpangan jalan Desa Rampa-Poriaha. Dan memakan waktu sekitar 10 menit dengan menggunakan kendaraan. Namun, untuk melanjutkan perjalanan ke lokasi air terjun ini, masih harus menempuh perjalanan dengan berjalan kaki. Jaraknya hanya berkisar 100 meter, mengingat kondisi jalan setapak menuju air terjun masih dalam tahap pengerjaan. Untuk menikmati suasana Aek Martolu Rampa, pengunjung hanya dipatok biaya sebesar Rp 5 ribu-Rp 10 ribu. Itu pun sudah termasuk biaya parkir kendaraan. Namun terdapat kendala di lokasi wisata ini. Di sekitar lokasi, belum tersedia penginapan bagi pengunjung yang ingin menginap.",
                'maps_url' => 'https://goo.gl/maps/8XXnQobddHfWPQjm8'
            ],
            [
                'name' => 'Air Terjun Aloban Bair',
                'type' => 3,
                'region' => 'Tapanuli Tengah',
                'address' => 'Desa Aloban, Kecamatan Tapian Nauli',
                'description' => "Air Terjun Aloban Bair berada di Desa Aloban, Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah. Secara umum orang lebih mengetahui daerah air terjun ini bernama Poriaha. Berada lumayan jauh dari jalan raya, tepatnya 8 Km dari pertigaan utama jalan lintas Sibolga - Barus. Sedangkan pertigaan itu sendiri berjarak 8.5 Km dari Kota Sibolga. Masyarakat lebih akrab menyebutnya Air Terjun Aloban. Bisa dilihat betapa sebenarnya air terjun ini sangat layak dikunjungi. Memiliki beberapa tingkat, walau air terjun besar hanya pada dua tingkat utama. Air sejuk dan bersih, khas air terjun pegunungan. Bebatuan juga turut menghiasi. Menuju lokasi juga tidak kalah seru, melewati beberapa desa dengan bentangan alam yang ada diantaranya. Letaknya yang berada di tepi jajaran bukit barisan sudah pasti memberikan kesan yang hijau dan tenang. Air terjun utama bagian bawah memiliki tinggi sekitar delapan meter dan memiliki kolam paling luas dan dalam. Menjadi bagian paling ramai karena siapapun bisa sampai pada lokasi ini. Sedangkan bagian air terjun sisi atas ketinggiannya sekitar 15 meter. Sayang belum sampai ke puncaknya. Untuk sampai pada sisi air terjun atas ini harus menyusuri sisi tebing. Perlu kehati-hatian ekstra.",
                'maps_url' => 'https://goo.gl/maps/tc3wEitAcbS4nsL9A'
            ],
            [
                'name' => 'Air Terjun Labuhan Sonang',
                'type' => 3,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Sarudik',
                'description' => "Nama Air Terjun Labuhan Sonang ini memiliki arti Pelabuhan Senang. Asal mula namanya tidak terlalu diketahui, barangkali dulu para nelayan merasa senang ketika menyandarkan kapalnya di pantai ini. Sekilas pantai ini hampir sama seperti pantai umumnya di sekitar daerah ini. Lalu, kenapa tempat ini istimewa? Pertama dan paling utama, letak pantai ini yang ada diantara perbukitan dan pantai. Kesannya seolah-olah menemukan daerah baru. Benar-benar tidak ada pemukiman di pantai ini kecuali beberapa rumah saja. Kedua, akses ke tempat ini masih terbatas sampai sekarang. Akses jalan ada, tapi kondisinya masih jalan rintisan. Setidaknya satu tahun ke depan akan jauh lebih baik. Garis pantainya cukup panjang, sangat seru jika menapaki ujung ke ujung sampai ke balik perbukitan. Sebagai penyempurna petualangan ke tempat ini dari pantai langkahkan kaki ke arah perbukitan. Jaraknya tidak lebih setengah kilometer. Pemandangan sekitar cukup menghibur mata. Tenang, sepi, alami. Airnya dijadikan sebagai sumber air bersih yang dialirkan melalui pipa hingga ke dermaga. Hanya disisakan sedikit untuk mengaliri bekas sungai di bawahnya. Akses menuju lokasi ini bisa dua cara, lewat laut atau darat. Jalur laut hanya ditempuh nelayan. Lewat darat bisa masuk melalui jalan Pondok Batu. Simpang Pondok Batu berada hanya seratusan meter dari gapura perbatasan Kabupaten Tapanuli Tengah dan Kota Sibolga di Kecamatan Sarudik.",
                'maps_url' => 'https://goo.gl/maps/BRGcUeiGfQeJ2Ru47'
            ],
            [
                'name' => 'Air Terjun Aek Bottar',
                'type' => 3,
                'region' => 'Tapanuli Tengah',
                'address' => 'Desa Pagaran Honas, Kecamatan Badiri',
                'description' => "Air Terjun Aek Bottar terletak di Desa Pagaran Honas, Kecamatan Badiri, Kabupaten Tapanuli Tengah. Untuk mencapai lokasi tersebut, dibutuhkan waktu satu jam perjalanan dengan naik kendaraan dari Kecamatan Pandan mengarah ke Tapanuli bagian selatan. Selama perjalanan, kita akan melintasi kawasan pusat pemerintahan Kabupaten Tapanuli Tengah, termasuk beberapa desa yang ada di Kecamatan Badiri. Selama perjalanan menuju lokasi, kita akan disuguhkan pemandangan yang asri dengan penduduk desa yang ramah ditambah aliran sungai yang membujur mengarah ke Desa Pagaran Honas. Setibanya di lokasi, kita harus memarkirkan kendaraan yang telah disediakan oleh penduduk sekitar. Selanjutnya sudah bisa memasuki wisata Air Terjun Aek Bottar dengan berjalan kaki sekitar 15-20 menit. Kita akan disambut pepohonan nan rindang dan akses jalan yang masih bertanah liat. Ingat, harus mempersiapkan perlengkapan seperti sepatu gunung ataupun sendal yang tidak licin karena jalan yang terjal menurun ke bawah. Sesampainya di lokasi, kita akan dimanjakan dengan suasana yang hening dan tenang. Letih yang dirasakan saat menuju air terjun ini akan terbayarkan dengan pemandangan nan indah dan asri. Air terjun Aek Bottar ini memiliki ketinggian kurang lebih 20 meter dan luas kolamnya kurang lebih 15 meter persegi. Di pemandian air terjun ini, kita bisa merasakan suasana yang sejuk dan sensasi air yang dingin. Bagi yang pandai berenang, bisa bermain di bawah air terjun atau di aliran sungainya. Namun bagi yang tidak pandai berenang, pastikan memiliki pelampung, karena air terjun ini memiliki debit air yang cukup dalam.",
                'maps_url' => 'https://goo.gl/maps/rYSyXeUwDooe1rg97'
            ],
            [
                'name' => 'Air Terjun Aek Saili',
                'type' => 3,
                'region' => 'Tapanuli Tengah',
                'address' => 'Kecamatan Tukka',
                'description' => "Air Terjun Aek Saili berada di Kecamatan Tukka, Kabupaten Tapteng yang memiliki objek wisata air terjun bertingkat 7. Untuk sampai ke lokasi ini memang tidak mudah untuk dijangkau, sebab hampir memakan waktu lebih kurang dua jam dengan berjalan kaki serta menyusuri hutan yang terjal dan menurun, serta berliku liku. Sesekali harus beristirahat di antara lebatnya hutan untuk mengembalikan stamina melanjutkan perjalanan menuju air terjun bertingkat 7 ini. Rasa lelah dan letih yang dirasakan nantinya akan terbayar setelah menikmati keindahan Air Terjun Aek Saili ini. Kita juga tidak menduga hasil yang diharapkan sangatlah memuaskan, lelah dan letih saat perjalanan 2 jam seakan hilang begitu saja ketika melihat betapa indahnya air terjun ciptaan Tuhan ini. Tidak hanya menikmati keindahan dan kesejukan air terjun tersebut dengan mata saja, para wisatawan juga bisa menikmatinya dengan seluruh badannya dengan merasakan air yang mengalir deras dari tingkatan pertama hingga ketujuh dari air terjun tersebut. Bahkan bisa menaiki tingkat demi tingkat air terjun ini dengan rasa penasaran untuk memastikan kebenaran jumlah tingkatan dari air terjun saili ini.",
                'maps_url' => 'https://goo.gl/maps/BWxi3LTsk4Q2uj566'
            ],
            [
                'name' => 'Tor Simarbarimbing',
                'type' => 4,
                'region' => 'Sibolga',
                'address' => 'Kelurahan Angin Nauli',
                'description' => "Kota Sibolga sangat potensial, karena di samping keindahan pantai-pantai maupun pulau-pulau yang ada , juga terdapat alam pegunungan dan perbukitan yang seolah-olah melindungi kota ini. Bagi  pecinta wisata pegunungan, cobalah naik ke Bukit Tor Simarbarimbing di Kelurahan Angin Nauli, Kota Sibolga. Di bukit ini bisa melakukan hiking yang tidak terlalu melelahkan untuk akhirnya mencapai puncak bukit dan menikmati pemandangan yang indah. Dari puncak bukit, kita akan menikmati keindahan Teluk Tapian Nauli dan Kota Sibolga dari ketinggian. Tempat ini sangat cocok untuk berburu gambar. Jika ingin santai-santai saja, udara yang segar mampu memaksimalkan relaksasi pengunjung. Kita bisa menggunakan gazebo-gazebo yang tersedia. Pemandangan alam yang penuh dengan pohon-pohon hijau juga mampu meningkatkan ketenangan. Jalan-jalan ke Bukit Tor Simarbarimbing di Angin Nauli tidak hanya membuat mata segar, namun tubuh dan pikiran juga kembali bugar.",
                'maps_url' => 'https://goo.gl/maps/srpsbiHH4X3WQXJL7'
            ],
            [
                'name' => 'Puncak GM Panggabean',
                'type' => 4,
                'region' => 'Sibolga',
                'address' => 'Kecamatan Sitahuis',
                'description' => "Objek wisata yang satu ini merupakan objek wisata situs sejarah perjuangan kota sibolga. Objek wisata yang satu ini terletak di pinggir jalan lintas menuju Tarutung-Sibolga. Dimana Masyarakat sekitar menyebut wisata yang satu ini dengan semboyan Wisata Situs Sejarah Puncak GM Panggabean. Puncak GM Panggabean merupakan salah satu tempat wisata sejarah yang berada di Desa Bonan Dolok, Kecamatan Sitahuis, yang hanya berjarak sekitar 17 kilometer dari Kota Sibolga. Monumen perjuangan ini dibangun atas jasa Jenderal TNI (Purn) Maraden Panggabean kala menjabat Menteri Koordinator Bidang Politik dan Keamanan sekitar tahun 1982 silam. Di objek wisata ini anda akan melihat tujuh patung pejuang yang berdiri kokoh. Di barisan pinggir tampak anak kecil di antara manusia dewasa menyandang perlengkapan perang, dan di atasnya terdapat lambang burung garuda. Selain itu jika anda sudah merasa puas untuk melihat sejarah monumen perjuangan ini. anda bisa juga melanjutkan perjalanan anda lagi menuju ke atas. Disini anda akan berjumpa melihat sebuah panatapan Kota Sibolga. Dimana anda akan melihat langsung daratan,penggunungan, dan lautan kota sibolga yang begitu sangat indah sewaktu dipandang. Jika anda ingin berkunjung kemari, anda tidak perlu mengeluarkan uang untuk memasuki kawasan monumen perjuangan puncak GM ini.",
                'maps_url' => 'https://goo.gl/maps/4UvC2sZUoqU2CyoJA'
            ],
            [
                'name' => 'Puncak GM Panggabean',
                'type' => 4,
                'region' => 'Sibolga',
                'address' => 'Jalan Lintas Tarutung-Sibolga',
                'description' => "Objek wisata yang satu ini merupakan objek wisata situs sejarah perjuangan kota sibolga. Objek wisata yang satu ini terletak di pinggir jalan lintas menuju Tarutung-Sibolga. Dimana Masyarakat sekitar menyebut wisata yang satu ini dengan semboyan Wisata Situs Sejarah Puncak GM Panggabean. Puncak GM Panggabean merupakan salah satu tempat wisata sejarah yang berada di Desa Bonan Dolok, Kecamatan Sitahuis, yang hanya berjarak sekitar 17 kilometer dari Kota Sibolga. Monumen perjuangan ini dibangun atas jasa Jenderal TNI (Purn) Maraden Panggabean kala menjabat Menteri Koordinator Bidang Politik dan Keamanan sekitar tahun 1982 silam. Di objek wisata ini anda akan melihat tujuh patung pejuang yang berdiri kokoh. Di barisan pinggir tampak anak kecil di antara manusia dewasa menyandang perlengkapan perang, dan di atasnya terdapat lambang burung garuda. Selain itu jika anda sudah merasa puas untuk melihat sejarah monumen perjuangan ini. anda bisa juga melanjutkan perjalanan anda lagi menuju ke atas. Disini anda akan berjumpa melihat sebuah panatapan Kota Sibolga. Dimana anda akan melihat langsung daratan,penggunungan, dan lautan kota sibolga yang begitu sangat indah sewaktu dipandang. Jika anda ingin berkunjung kemari, anda tidak perlu mengeluarkan uang untuk memasuki kawasan monumen perjuangan puncak GM ini.",
                'maps_url' => 'https://goo.gl/maps/4UvC2sZUoqU2CyoJA'
            ],
            [
                'name' => 'Makam Papan Tinggi',
                'type' => 4,
                'region' => 'Tapanuli Tengah',
                'address' => 'Desa Penanggahan, Kecamatan Barus',
                'description' => "Makam Papan Tinggi ini terletak di Desa Penanggahan, Kecamatan Barus, Kabupaten Tapanuli Tengah. Makam Papan Tinggi merupakan kompleks pemakaman tua Syeikh Mahmud Barus. Tempat ini dinamakan Makam Papan Tinggi lantaran lokasi makamnya terletak di atas bukit. Kompleks makam yang berada di ketinggian kurang lebih 3000 mdpl ini berdiri di atas lahan seluas 40 meter x 15 meter, dengan pagar pembatas di sekelilingnya setinggi 160 cm. Tempat yang juga merupakan destinasi wisata sejarah ini memiliki anak tangga 876 buah hingga ke lokasi. Pada tahun 1994-1995, kompleks makam ini pernah dilakukan rekonstruksi oleh Kanwil Depdikbud Sumatera Utara. Tempat ini juga sudah dilakukan kegiatan konservasi arkeologi oleh Balai Pelestarian Peninggalan Purbakala Aceh-Sumatera Utara pada tahun 2008. Kompleks makam ini memiliki 7 buah makam tanpa menggunakan jirat (kijing), hanya berupa nisan.",
                'maps_url' => 'https://goo.gl/maps/WREXSVZJ6sxcwHKx7'
            ],
            [
                'name' => 'Sibolga Square',
                'type' => 5,
                'region' => 'Sibolga',
                'address' => 'Pasar baru, Kecamatan Sibolga Kota',
                'description' => "Sibolga Square berada di Jl. Ahmad Yani, Pasar baru, Kecamatan Sibolga Kota, Kota Sibolga. Sibolga Square buka pada malam hari dan banyak menjual berbagai jenis kuliner, seperti : nasi goreng, sate, mie tek-tek, mi tiaw, mihun, ifumie, soto ayam, pempek, mie sop, mie goreng, mie gomak, dan masih banyak lagi. Bagi kamu yang sedang dan akan berkunjung ke Sibolga tempat ini direkomendasikan untuk tempat nongkrong. Informasi tambahan, Sibolga Square tidak dilengkapi fasilitas toilet umum.",
                'maps_url' => 'https://goo.gl/maps/Mz8L7HkoGkMbUhiL7'
            ],
            [
                'name' => 'Hotel Wisata Indah',
                'type' => 6,
                'region' => 'Sibolga',
                'address' => 'Jalan Brigadir Jenderal Katamso No. 51, Pasar Baru',
                'description' => "Jika Anda kebetulan tidak kebagian kamar di Sibolga Marine Resort, Hotel Wisata Indah mungkin menjadi opsi terbaik untuk menginap. Pasalnya, akomodasi ini terletak di tepi Pantai Sibolga, spot terdekat dari Pulau Poncan. Hotel Wisata Indah sendiri berada di Jalan Brigadir Jenderal Katamso No. 51, Pasar Baru, Sibolga. Hotel Wisata Indah menjadi favorit banyak pelancong karena lokasinya yang berada di pinggir pantai dengan view laut yang elok. Selain itu, akomodasi ini juga memiliki kamar-kamar yang bersih dan luas, dengan fasilitas yang komplet, termasuk kolam renang luar ruangan, restoran dengan sajian lokal dan Western, akses Wi-Fi gratis, hingga lift.",
                'maps_url' => 'https://goo.gl/maps/vwHWz3P1T6rJFxPW7'
            ],
            [
                'name' => 'Hotel Prima Indah',
                'type' => 6,
                'region' => 'Sibolga',
                'address' => 'Jalan Brigadir Jenderal Katamso No. 51, Pasar Baru',
                'description' => "Akomodasi ini beralamat tidak jauh dari Hotel Wisata Indah, tepatnya di Jalan Brigadir Jenderal Katamso No. 45, Kota Sibolga. Hotel Prima Indah bisa Anda capai setelah melakukan perjalanan sekitar 800 meter dari Terminal Sibolga. Sementara, apabila Anda hendak berwisata ke Pulau Poncan, Anda hanya perlu waktu 10 menit menyeberang dengan speedboat. Menurut review beberapa wisatawan yang pernah singgah, Hotel Prima Indah dikatakan memiliki pelayanan yang lumayan baik. Selain itu, akomodasi ini juga memiliki lokasi yang bagus karena dekat dengan pantai. Meski demikian, beberapa tamu mengeluhkan sarapan yang terlalu standar serta sinyal Wi-Fi yang tidak begitu bagus.\nKenaikan tarif penginapan juga dialami di Hotel Prima Indah. Pasalnya, Anda hanya mengeluarkan biaya sebesar Rp430 ribu per malam untuk menginap di Deluxe Room. Meski kenaikannya tidak signifikan hanya berkisar Rp20 ribu rupiah, Anda harus tetap menyiapkan kocek lebih. Untuk pemesanan, Anda bisa langsung datang ke lokasi, via situs booking online, atau menghubungi nomor telepon (0631) 22872.",
                'maps_url' => 'https://goo.gl/maps/qyrvBeq9WFkumMZo7'
            ],
            [
                'name' => 'PIA Hotel',
                'type' => 6,
                'region' => 'Sibolga',
                'address' => 'Jalan Padang Sidempuan KM 10, Pandan',
                'description' => "Penginapan ini dapat Anda temukan di Jalan Padang Sidempuan KM 10, Pandan, Sibolga, Sumatera Barat. Saat ini telah berganti nama menjadi Pia Hotel Pandan Beach Resort, lokasi akomodasi hanya berjarak sekitar 122 meter menuju Pantai Pandan. Jika wisatawan berangkat dari Terminal Sibolga, cukup menempuh perjalanan sejauh 7,5 km atau 5 menit berkendara untuk tiba di properti ini. Menurut ulasan para tamu yang sempat menginap, Pia Hotel Pandan Beach Resort dikatakan sebagai rekomendasi menarik bagi mereka yang mengincar akomodasi di pinggir pantai. Kamar yang disediakan relatif bersih dan luas meski menempati bangunan yang sudah tergolong tua. Selain itu, makanan yang disediakan pun cukup lezat. Sayangnya, masih ada sejumlah tamu yang mengeluhkan kondisi fasilitas lain seperti air panas yang kerap macet serta toilet yang tidak terlalu lapang. Menyediakan setidaknya 116 unit kamar, Pia Hotel Pandan Beach Resort dapat dikategorikan sebagai hotel bintang 2 dengan fasilitas yang cukup memadai. Saat bermalam di tempat ini, wisatawan dapat menikmati fasilitas seperti televisi layar datar, kamar mandi tambahan, rak pakaian, kopi instan atau teh gratis, AC, balkon atau teras, hingga Wi-Fi gratis.\nHarga sewa kamar Hotel Bumi Asih atau Pia Hotel di atas kami rangkum dari berbagai sumber, termasuk beberapa situs booking online. Perlu diingat bahwa biaya sewa kamar hotel tersebut tidak mengikat dan dapat berubah sewaktu-waktu, tergantung tanggal pemesanan Anda. Jika tertarik mampir, bisa melakukan reservasi via online travel agent atau nomor telepon (0631) 372145.",
                'maps_url' => 'https://goo.gl/maps/Zy5pCV38cEmQ8Q8DA'
            ],
            [
                'name' => 'Sibolga Marine Resort',
                'type' => 6,
                'region' => 'Sibolga',
                'address' => 'Jalan Kolonel Yos Sudarso No. 29, Poncan Gadang',
                'description' => "Penginapan ini beralamat di Jalan Kolonel Yos Sudarso No. 29, Poncan Gadang, Kota Sibolga. Sibolga Marine Resort bisa dikatakan sebagai akomodasi paling populer di Pulau Poncan. Menurut situs resminya, tempat inap ini telah berdiri sejak tahun 1997 silam, terletak di atas lahan seluas lebih dari 3 hektar dengan 70 unit kamar berbentuk seperti pondok yang didesain menyerupai rumah adat Batak. Setidaknya, ada tiga tipe kamar yang telah disediakan di tempat ini, yaitu Standard Room, Superior Room, dan Deluxe Room. Semua unit menawarkan pemandangan laut dan balkon, tipe Standard dikatakan cocok untuk traveler single maupun couple. Sementara, tipe Superior adalah kamar dengan desain elegan dilengkapi king size bed, sedangkan tipe Deluxe menawarkan ruangan yang nyaman lengkap dengan living room.\nJika dibandingkan dengan penawaran sebelumnya, tarif penginapan Sibolga Marine Resort mengalami perubahan harga pada 2020. Awalnya, standard room ditaksir hanya Rp450.000 per malam, saat ini Anda harus merogoh kocek sebesar Rp600 ribu per malam. Jika Anda berkunjung saat musim liburan, maka diperlukan budget lebih untuk menginap semalam. Pihak Sibolga Marine Resort juga kerap mengadakan paket menginap pada musim-musim liburan. Paket yang tersedia biasanya 2 hari 1 malam, 3 hari 2 malam, serta 4 hari 3 malam dengan harga mulai Rp700 ribuan hingga Rp3,3 jutaan. Jika Anda berminat singgah, reservasi bisa dilakukan melalui situs resmi hotel atau via nomor telepon (0631) 23278.",
                'maps_url' => 'https://goo.gl/maps/MPPsnKct1MdkAvUh8'
            ],
        ];

        foreach ($data as $key => $data) {
            Destination::create($data);
        }
    }
}
