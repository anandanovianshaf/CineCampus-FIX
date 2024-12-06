-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2024 pada 12.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussions`
--

CREATE TABLE `discussions` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `discussion_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `discussions`
--

INSERT INTO `discussions` (`id`, `movie_id`, `user_id`, `parent_id`, `discussion_text`, `created_at`) VALUES
(41, 10, 3, NULL, 'mantap filmnya, apakah ada yang setuju?', '2024-11-30 14:34:10'),
(52, 2, 1, NULL, 'entah menurut kalian bagaimana, tapi menurut saya ini lumayan membuat saya terkesan', '2024-11-30 16:06:25'),
(55, 2, 1, NULL, 'sebenarnya ini film yang lumayan asik, hanya saja saya kurang mengetahui konteks dari film ini, ya saya sendiri pun bingung sebenarnya', '2024-11-30 16:08:50'),
(56, 7, 1, NULL, 'kinda good bro, demn i would like to watch this thing 100x times more', '2024-11-30 16:10:03'),
(62, 15, 3, NULL, 'Serem? lebih ke ngeri sih ya, soalnya kan ini kisah nyata, ya itu pas belum ketauan wkkw. Lah ujung-ujungnya malah settingan, kebiasaan warga konoha anjay lah wkkw', '2024-12-01 09:53:45'),
(63, 15, 1, NULL, 'Wwkwk gue setuju banget nih sama @Nebraska, sebelum tau faktanya emang storynya aja bikin horror, apalagi daerah lokasi aniayanya deket sama gue di Katapang. Wah intinya emang film itu bagusnya ada di film aja, dan kenyataan itu kadang bisa lebih manis atau lebih pahit dari film. Peace :D', '2024-12-01 09:55:30'),
(64, 15, 3, NULL, 'Gue awalnya ngira film ini lumayan horror, bahkan mengerikan, karena ya judulnya diambil dari kisah nyata, cuman ya gue kaget banget pas keungkap bahwa inituh bohongan, gajadi ngeri deh wkwk', '2024-12-01 09:56:58'),
(65, 15, 3, NULL, '@Ananda Novianshaf iya kan kata gw juga gitu, tapi ya ini semua cuman film sih, yaa not bad lah ya hahaha', '2024-12-01 09:58:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL COMMENT 'id untuk setiap film',
  `name` varchar(255) NOT NULL COMMENT 'nama',
  `poster` varchar(255) NOT NULL COMMENT 'url/path poster film',
  `genre` varchar(100) NOT NULL,
  `year` year(4) NOT NULL COMMENT 'tahun rilis',
  `duration` varchar(15) NOT NULL COMMENT 'durasi film per menit',
  `short_synopsis` varchar(255) NOT NULL COMMENT 'slogan',
  `synopsis` text NOT NULL COMMENT 'sinopsis',
  `director` varchar(255) NOT NULL COMMENT 'director',
  `writer` varchar(255) NOT NULL COMMENT 'penulis',
  `actors` varchar(255) NOT NULL COMMENT 'aktor yang terkenal',
  `age_certificate` varchar(10) NOT NULL COMMENT 'sertifikat umur',
  `trailer_link` varchar(255) NOT NULL COMMENT 'link di youtube'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabel movie ini berisikan induk database filmnya';

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `name`, `poster`, `genre`, `year`, `duration`, `short_synopsis`, `synopsis`, `director`, `writer`, `actors`, `age_certificate`, `trailer_link`) VALUES
(1, '13 Bom di Jakarta', 'img/landing.jpg', 'Action, Crime, Thriller, Indonesian', '2023', '2j 23m', 'Perjuangan cinta untuk bisa bertahan, Ketidakadilan di balik terorisme', 'Sekelompok teroris berusaha memporak-porandakan Jakarta, ibukota Indonesia, dengan serangan bom di tiga belas titik berbeda. Pihak keamanan yang mengetahui rencana tersebut, berusaha bertindak cepat agar tidak ada korban jiwa', 'Angga Dwimas Sasongko', 'Angga Dwimas Sasongko, Mohamad Irfan Ramly', 'Ardhito Pramono, Lutesha, Chicco Kurniawan', '17+', 'https://www.youtube.com/watch?v=uXJHPMKLgiI'),
(2, 'Jatuh Cinta Seperti di Film-Film', 'img/jatuh_cinta.jpg', 'Drama, Romance, Indonesian', '2023', '1j 58m', 'Kisah Cinta seorang penulis dengan teman SMA', 'Bagus, seorang penulis skenario, bertemu kembali dengan teman SMA dan pujaan hatinya, Hana, yang masih berduka karena kehilangan suaminya. Dia ingin meyakinkan Hana untuk jatuh cinta sekali lagi, seperti di film-film.', 'Yandy Laurens', 'Emest Prakasa, Suryana Paramita', 'Ringgo Agus Rahman, Nirina Zubir, Alex Abbad, Sheila Dara, Dion Wiyoko, Julie Estelle', '13+', 'https://www.youtube.com/watch?v=F6jPobzz-ag'),
(3, 'Mencuri Raden Saleh', 'img/raden_saleh.jpg', 'Action, Crime, Drama, Indonesian', '2022', '2j 24m', 'Untuk menyelamatkan ayahnya, seorang pemalsu ulung berencana mencuri lukisan berharga dengan bantuan sekelompok spesialis yang beraneka ragam.', 'Berawal dari keadaan terdesak karena butuh uang, sekelompok anak muda biasa berencana melakukan pencurian terbesar abad ini: mencuri lukisan Raden Saleh berjudul Penangkapan Diponegoro yang disimpan di Istana Kepresidenan.', 'Angga Dwimas Sasongko', 'Angga Dwimas Sasongko, Husein M. Atmodjo', 'Iqbaal Dhiafakhri Ramadhan, Angga Yunanda, Rachel Amanda', '13+', 'https://www.youtube.com/watch?v=DN3sRz_veBU'),
(4, 'Petualangan Sherina 2', 'img/sherina_2.jpg', 'Action, Adventure, Comedy, Drama, Indonesian', '2023', '2j 6m', 'Sadam, seorang petualang sejati, bertemu kembali dengan teman masa kecilnya yang pemberani, Sherina, saat dia memulai petualangan jurnalistik.', 'Sadam tumbuh menjadi seorang petualang sejati. Ia telah mengunjungi dan menjelajahi hampir seluruh kepulauan Indonesia. Lalu, peristiwa apa yang mempertemukan Sadam dengan teman masa kecilnya, Sherina? Sherina, si pemberani, dikenal cerdas dan selalu berusaha mencapai yang terbaik. Sebagai seorang jurnalis, Sherina harus membuat liputan yang membawanya ke #adventureagain.', 'Riri Riza', 'Jujur Prananto, Mira Lesmana, Riri Riza', 'Jujur Prananto, Mira Lesmana, Riri Riza', '17+', 'https://www.youtube.com/watch?v=YoopUGMwDeQ'),
(5, 'Exhuma', 'img/exhuma.jpg', 'Drama, Horror, Mystery, Thriller', '2024', '2j 14m', 'The process of excavating an ominous grave unleashes dreadful consequences buried underneath.', 'The process of excavating an ominous grave unleashes dreadful consequences buried underneath.', 'Jang Jae-hyun', 'Jang Jae-hyun', 'Kim Go-eun, Choi Min-sik, Lee Do-hyun', '17+', 'https://www.youtube.com/watch?v=avjE7_ozv-8'),
(6, 'Agak Laen', 'img/agak_laen.jpg', 'Comedy, Indonesian', '2024', '1j 59m', 'Seorang lelaki tua meninggal dalam perjalanan rumah hantu yang gagal. Operator menguburkan jenazahnya di lokasi, mengubahnya menjadi atraksi populer.', 'Demi mengejar impian mengubah nasib, empat sahabat yang menjaga rumah hantu di pasar malam mencari cara baru untuk menakut-nakuti pengunjung agar terhindar dari kebangkrutan. Sayangnya usaha Bene, Jegel, Boris dan Oki mengakibatkan salah satu pengunjungnya meninggal dunia. Karena panik, mereka menguburkan korban di rumah hantu. Tak disangka, arwah korban berkeliaran hingga membuat rumah hantu tersebut menjadi menyeramkan dan ramai dikunjungi pengunjung. Saat polisi mulai menyelidiki, mereka terpaksa melakukan berbagai konspirasi konyol untuk menutupi kejadian sebenarnya. Apa yang akan terjadi pada mereka selanjutnya?', 'Muhadkly Acho', 'Muhadkly Acho', 'Bene Dion Rajagukguk, Oki Rengga, Indra Jegel', '13+', 'https://www.youtube.com/watch?v=y7tZL3zjE_c'),
(7, 'Star Wars: Episode VII - The Force Awakens', 'img/star_wars.jpg', 'Sci-fi, Action, Adventure', '2015', '2j 18m', 'As a new threat to the galaxy rises, Rey, a desert scavenger, and Finn, an ex-stormtrooper, must join Han Solo and Chewbacca to search for the one hope of restoring peace.\r\n', '30 years after the defeat of Darth Vader and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8 droid that knows the whereabouts of the long lost Luke Skywalker. Rey, as well as a rogue stormtrooper and two smugglers, are thrown into the middle of a battle between the Resistance and the daunting legions of the First Order', 'J.J Abrams', 'Lawrence Kasdan, J.J. Abrams, Michael Arndt', 'Daisy Ridley, John Boyega, Oscar Isaac', 'SU', 'https://www.youtube.com/watch?v=sGbxmsDFVnE'),
(8, 'Tenggelamnya Kapal Van Der Wijck', 'img/vandenwijck.jpg', 'Drama, Romance, Indonesian', '2013', '2j 44m', 'Diadaptasi dari novel klasik berjudul sama, film ini menceritakan kisah cinta antara Zainuddin, Hayati, dan Aziz. Perbedaan latar belakang sosial membawa cinta sejati Zainuddin dan Hayati mengalami tragedi di kapal layar Van Der Wijck.', 'Diadaptasi dari novel klasik berjudul sama, film ini menceritakan kisah cinta antara Zainuddin, Hayati, dan Aziz. Perbedaan latar belakang sosial membawa cinta sejati Zainuddin dan Hayati mengalami tragedi di kapal layar Van Der Wijck.', 'Sunil Soraya', 'Donny Dhirgantoro, Buya Hamka, Riheam Junianti', 'Herjunot Ali, Pevita Pearce, Reza Rahardian\r\n', '13+', 'https://www.youtube.com/watch?v=k_nK2PQ1Q8Q'),
(9, '5 cm', 'img/5cm.jpg', 'Adventure, Drama, Romance, Indonesian', '2013', '2j 5m', 'Lima sahabat mencoba mencari tahu apa itu persahabatan sejati dengan mendaki Gunung Semeru, puncak tertinggi di Pulau Jawa.', 'Genta, Arial, Zafran, Riani, dan Ian merasa “jenuh” dengan persahabatan mereka dan memutuskan untuk berpisah, tidak saling berkomunikasi selama tiga bulan. Selama tiga bulan mereka bertemu kembali dan merayakan pertemuan mereka dengan sebuah perjalanan penuh mimpi dan tantangan. Perjalanan hati mengibarkan saka merah putih di puncak tertinggi pulau jawa pada 17 Agustus.', 'Rizal Mantovani', 'Donny Dhirgantoro', 'Herjunot Ali, Raline Shah, Fedi Nuril', '13+', 'https://www.youtube.com/watch?v=wT2aPdXwdt8'),
(10, 'Filosofi Kopi', 'img/filosofi_kopi.jpg', 'Drama, Indonesia', '2015', '1j 57m', 'Sebuah kedai kopi yang berjuang untuk membayar utangnya, sekaligus mempertahankan prinsipnya.', 'Sebuah kedai kopi yang berjuang untuk membayar utangnya, sekaligus mempertahankan prinsipnya.', 'Angga Dwimas Sasongko', 'Jenny Jusuf, Dewi Lestari', 'Rio Dewanto, Chicco Jerikho, Julie Estelle', '15+', 'https://www.youtube.com/watch?v=SIWtKj9j3sw'),
(11, 'Us', 'img/us.jpg', 'Horror, Mystery, Thriller', '2019', '1j 56m', 'In order to get away from their busy lives, the Wilson family takes a vacation to Santa Cruz, California. At night, four strangers break into Adelaide\'s childhood home. The family is shocked to find out that the intruders look like them.', 'In order to get away from their busy lives, the Wilson family takes a vacation to Santa Cruz, California with the plan of spending time with their friends, the Tyler family. On a day at the beach, their young son Jason almost wanders off, causing his mother Adelaide to become protective of her family. That night, four mysterious people break into Adelaide\'s childhood home where they\'re staying. The family is shocked to find out that the intruders look like them, only with grotesque appearances', 'Jordan Peele', 'Jordan Peele', 'Lupita Nyong\'o, Winston Duke, Elisabeth Moss', '17+', 'https://www.youtube.com/watch?v=hNCmb-4oXJA'),
(12, 'Pengabdi Setan 2 Komuni', 'img/pengabdisetan2.jpg', 'Drama, Horror, Mystery, Indonesian', '2022', '1j 59m', 'Ketika badai besar melanda, bukan badai yang harus ditakuti oleh sebuah keluarga, melainkan orang-orang dan entitas non-manusia yang berada di luar jangkauan mereka.', 'Beberapa tahun kemudian mereka berhasil menyelamatkan diri dari kejadian mengerikan yang membuat mereka kehilangan ibu mereka dan si bungsu Ian, Rini dan adik-adiknya, Toni dan Bondi, serta Ayah mereka tinggal di rumah susun. Mereka percaya tinggal di rumah susun aman jika terjadi sesuatu karena banyak orang. Namun, mereka segera menyadari bahwa tinggal bersama banyak orang juga bisa berbahaya jika mereka tidak mengenal tetangganya. Di malam yang penuh teror, Rini dan keluarganya harus kembali menyelamatkan diri. Namun kali ini, mungkin sudah terlambat untuk dijalankan.', 'Joko Anwar', 'Joko Anwar', 'Tara Basro, Endy Arfian, Nasar Annuz', '13+', 'https://www.youtube.com/watch?v=8LIHcd7WfWI'),
(13, 'Home Sweet Loan', 'img/home_sweet_loan.jpg', 'Drama, Family, Indonesian', '2024', '1j 52m', 'Seorang pekerja kelas menengah bernama Kaluna. Ia masih tinggal bersama orang tua dan kakak-kakaknya yang sudah menikah.', 'Kaluna, a middle-class worker, who still lives with her parents and older siblings who are already married. She tries hard to save and live simply in order to realize her dream of buying and owning her own house. But the reality of her life as a sandwich generation who has to help support her extended family, coupled with her minimal income, makes it difficult to realize this dream. This condition makes Kaluna feel like she is not at home every time she comes home.', 'Sabrina Rochelle Kalangie', 'Widya Arifianti, Almira Bastari, Sabrina Rochelle Kalangie', 'Yunita Siregar, Derby Romero, Risty Tagor', 'SU', 'https://www.youtube.com/watch?v=rWsnLS0Q7G0'),
(14, 'Jalan yang Jauh Jangan Lupa Pulang', 'img/jalanjauh.jpg', 'Drama, Indonesian', '2023', '1j 49m', 'Belajar di luar negeri di London, Aurora berjuang dengan hubungannya saat jauh dari keluarganya dalam sekuel \"One Day We\'ll Talk About Today\" ini.', 'Di London, Aurora menemukan belahan jiwa yang memiliki visi yang sama dengannya, Jem, seorang artis pendatang baru yang juga merupakan senior di kampus dan merupakan imigran dari Indonesia. Kehidupan Aurora yang sempurna dan penuh gairah hingga ia menemukan sisi lain dari Jem, yang membuat Aurora berhenti kuliah dan meninggalkan mimpinya. Di masa sulitnya, Aurora dibantu oleh dua sahabatnya: Honey dan Kit, untuk tinggal bersama di apartemen mereka. Keasyikan Aurora untuk bertahan hidup dan berusaha kembali bersekolah dengan bekerja serabutan menyebabkan dia kehilangan kontak dengan keluarganya. Dua bulan tanpa kabar membuat Angkasa dan Awan mengikuti Aurora ke London. Terkejut dengan kondisi Aurora yang berantakan, Angkasa dan Awan sepakat memaksa Aurora pulang.', 'Angga Dwimas Sasongko', 'Angga Dwimas Sasongko, Mohammad Irfan Ramly, Marchella F.P.', 'Sheila Dara Aisha, Jerome Kurnia, Lutesha', '13+', 'https://www.youtube.com/watch?v=RX_F6AoQphc'),
(15, 'Vina - Sebelum 7 hari', 'img/vina.jpg', 'Drama, Crime, Horror, Mystery, Thriller, Indonesia', '2024', '1j 40m', 'Vina, korban kekejaman geng motor di Cirebon, tak terima kematiannya dicap kecelakaan. Semangatnya turun tangan dalam tujuh hari sebelum kejadian untuk mengungkap kebenaran di balik apa yang sebenarnya terjadi.', 'Jenazah mendiang Vina yang ditemukan di jalan layang Cirebon diduga akibat kecelakaan sepeda motor tunggal. Nenek Vina curiga karena tubuh Vina diremukkan secara tidak wajar namun tidak memiliki cukup bukti untuk menolak laporan tersebut. Vina merasuki tubuh sahabatnya Linda. Dia hanya punya waktu 7 hari setelah kematiannya untuk mengungkapkan kebenaran yang menyakitkan. Al Fatihah.', 'Anggy Umbara', 'Dirmawan Hatta, Bounty Umbara', 'Delia Husein, Yusuf Mahardika, Lydia Kandou', '17+', 'https://www.youtube.com/watch?v=DGcJFwFMj9Q'),
(16, 'KKN di Desa Penari', 'img/kkn.jpg', 'Horror, Mystery, Thriller, Indonesian', '2022', '2j 20m', 'Enam mahasiswa yang harus melaksanakan KKN di desa terpencil diimbau untuk tidak melewati batas gerbang terlarang menuju tempat misterius yang mungkin berkaitan dengan sosok penari cantik yang mulai mengganggu mereka.', 'Seorang pria bernama Simpleman, punya cerita seram. Bermula dari 5 orang mahasiswa yang harus melaksanakan KKN di desa terpencil, Nur (Tissa Biani), Widya (Adinda Thomas), Ayu (Aghniny Haque), Bima (Achmad Megantara), Anton (Calvin Jeremy) dan Wahyu (M. Fajar Nugraga) tidak pernah menyangka bahwa desa yang mereka pilih bukanlah desa biasa. Pak Prabu (Kiki Narendra) kepala desa memperingatkan mereka untuk tidak melewati batas gerbang terlarang, yaitu gerbang menuju tapak kaki. Tempat misterius tersebut mungkin ada kaitannya dengan sosok penari cantik yang mulai mengganggu Nur dan juga Widya. Satu demi satu mulai merasakan keanehan desa tersebut. Bima mulai mengubah sikapnya. Program KKN mereka berantakan, nampaknya warga gaib di desa tersebut tidak menyukai mereka. Nur akhirnya menemukan fakta mencengangkan bahwa salah satu dari mereka melanggar aturan paling fatal di desa tersebut. Teror sosok penari misterius itu semakin menakutkan, mereka berusaha meminta bantuan Mbah Buyut (Diding Boneng) dukun setempat, namun terlambat, mereka terancam tidak akan bisa kembali dengan selamat dari desa yang dikenal dengan nama tersebut. desa penari.', 'Awi Suryadi', 'Gerald Mamahit, Lele Laila, SimpleMan', 'Tissa Biani Azzahra, Adinda Thomas, Achmad Megantara', '17+', 'https://www.youtube.com/watch?v=jtDRXPTZT-M'),
(17, 'Bolehkah Sekali Saja Kumenangis', 'img/bolehkah.jpg', 'Drama, Indonesian', '2024', '1j 41m', 'Setelah kakaknya meninggalkan rumah, Tari berjuang sendirian untuk menyelamatkan ibunya dari ayahnya yang kejam. Tari yang mengalami trauma sejak kecil memutuskan untuk bergabung dengan kelompok pendukung bersama Baskara. Mereka mencari keselamatan dengan', 'Setelah kakaknya meninggalkan rumah, Tari berjuang sendirian untuk menyelamatkan ibunya dari ayahnya yang kejam. Tari yang trauma sejak kecil tak mampu lagi memikul beban tersebut. Ditemani Baskara, pria temperamental yang juga tergabung dalam kelompok pendukung yang sama. Akankah Tari mampu mengatasi trauma yang dialaminya dan tidak lagi memendam air mata?', 'Reka Wijaya', 'Junisya Aurelita, Santy Diliana, Rezy Junio', 'Prilly Latuconsina, Pradikta Wicaksono, Surya Saputra', '17+', 'https://www.youtube.com/watch?v=j-UOIJezxXo'),
(20, 'Bila Esok Ibu Tiada', 'img/bila_esok_ibu_tiada.jpg', 'Drama, Family, Indonesian', '2024', '1j 44m', 'Sebuah keluarga dengan empat orang anak yang sangat bergantung pada ibunya. Sang ibu selalu memberikan yang terbaik dan mendedikasikan dirinya untuk merawat anak-anaknya.', 'Meninggalnya Haryo meninggalkan duka yang pedih bagi istrinya, Rahmi, dan keempat anaknya, Ranika, Rangga, Rania, dan Hening. Ranika sebagai tulang punggung keluarga yang terlalu otoriter membuat hubungan kakak beradik itu renggang. Padahal, Rahmi menaruh harapan besar pada anak-anaknya, jika esok hari Rahmi tiada, mereka akan selalu harmonis. Sayangnya, muncul masalah lain sehingga menimbulkan kekacauan. Hening yang ketahuan berkencan diam-diam, Rania yang mencuri teman dekat Ranika, dan Rangga yang tidak punya pekerjaan dan menganggap Ranika \'pahlawan yang terlambat\'. Ketidakharmonisan antara anak-anaknya membuat kesehatan Rahmi semakin buruk... Akankah Rahmi mampu melewati masa kritisnya? Mampukah keempat anak Rahmi mengabulkan permintaan terakhir Rahmi \'Seandainya Besok Ibu Tidak Ada Lagi\'?', 'Rudy Soedjarwo', 'Oka Aurora, Nagiga Nur Ayati, Rudy Soedjarwo', 'Christine Hakim, Adinia Wirasti, Fedi Nuril', '13+', 'https://www.youtube.com/watch?v=UQURtWvSt9o'),
(21, 'It Ends With Us', 'img/it_ends_with_us.jpg', 'Drama, Romance', '2024', '2j 10m', 'When a woman\'s first love suddenly reenters her life, her relationship with a charming, but abusive neurosurgeon is upended and she realizes she must learn to rely on her own strength to make an impossible choice for her future.', 'IT ENDS WITH US, the first Colleen Hoover novel adapted for the big screen, tells the compelling story of Lily Bloom, a woman who overcomes a traumatic childhood to embark on a new life in Boston and chase a lifelong dream of opening her own business. A chance meeting with charming neurosurgeon Ryle Kincaid sparks an intense connection, but as the two fall deeply in love, Lily begins to see sides of Ryle that remind her of her parents\' relationship. When Lily\'s first love, Atlas Corrigan, suddenly reenters her life, her relationship with Ryle is upended, and Lily realizes she must learn to rely on her own strength to make an impossible choice for her future', 'Justin Baldoni', 'Christy Hall, Colleen Hoover', 'Blake Lively, Justin Baldoni, Jenny Slate', 'PG-13', 'https://www.youtube.com/watch?v=DLET_u31M4M'),
(22, 'Temurun', 'img/temurun.jpg', 'Horror, Thriller, Indonesian', '2024', '1j 52m', 'Ketika mereka berusaha berdamai dengan kehilangan yang dialami, mampukah Dewi dan Sena menghadapi misteri warisan yang diwariskan keluarga besar mereka?', 'Kakak beradik Dewi dan Sena sedang berduka atas kepergian orang tuanya. Di tengah kesedihan yang dirasakan dan coba diatasi Dewi dan Sena, mereka berdua dikejutkan dengan warisan yang ditinggalkan untuk mereka. Warisan nenek moyang keluarga membawa kengerian yang mengubah hidup Dewi dan Sena. Berbagai kejadian mistis menakutkan dan teror diluar nalar mulai menghampiri mereka berdua. Meski Dewi dan Sena tidak menyukai uang dan berharap akan warisan tersebut, namun tak ada yang bisa dilakukan. Keduanya pun berusaha menerima dan tetap hidup berdampingan dengan warisan leluhurnya. Lantas apa sebenarnya warisan yang diwarisi Dewi dan Sena secara turun temurun? Mampukah mereka mengatasi dan mengungkap segala misteri dibalik warisan yang diwariskan dari keluarga yang membawa teror mengerikan?', 'Inarah Syarafina', 'Vontian Suwandi', 'Yasamin Jasem, Bryan Domani, Karina Suwandhi', '17+', 'https://www.youtube.com/watch?v=luo62FPh1x4'),
(23, 'Dilan 1983 : Wo Ai Ni', 'img/dilan_1983.jpg', 'Drama, Romance, Indonesian', '2024', '1j 56m', 'Masa kecil Dilan yang saat itu berusia sekitar 12 tahun. Ia masih kecil dan tinggal bersama keluarganya di Provinsi Timor Timur karena ayahnya bertugas sebagai tentara Indonesia.', 'Masa kecil Dilan saat berusia 12 tahun. Saat berusia 12 tahun, Dilan ikut ayahnya bertugas di Timor Leste yang dulu bernama Timor Timur. Dilan menghabiskan waktu sekitar 1,5 tahun di Timor Timur dan kembali ke Bandung dan bersekolah di tempat lamanya. Pada tahun 1983, Dilan bertemu dengan mahasiswa baru etnis Tionghoa asal Semarang bernama Mei Lien. Kehadiran Mei Lien di sekolah Dilan membuatnya merasa menyukai Mei sehingga ingin belajar bahasa Mandarin. Keinginan Dilan untuk belajar bahasa Mandarin mengejutkan keluarganya.', 'Pidi Baiq, Fajar Bustomi', 'Pidi Baiq, Alim Sudio', 'M. Adhiyat, Malea Emma Tjandrawidjaja, Ira Wibowo', 'SU', 'https://www.youtube.com/watch?v=h_-kHZR8e0U'),
(24, 'The Fast and the Furious', 'img/ff1.jpg', 'Action, Crime, Thriller', '2001', '1h 46m', 'Los Angeles police officer Brian O\'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to end it.', 'Los Angeles street racer Dominic Toretto falls under the suspicion of the LAPD as a string of high-speed electronics truck robberies rocks the area. Brian O\'Connor, an officer of the LAPD, joins the ranks of Toretto\'s highly skilled racing crew undercover to convict Toretto. However, O\'Connor finds himself both enamored with this new world and in love with Toretto\'s sister, Mia. As a rival racing crew gains strength, O\'Connor must decide where his loyalty really lies.', 'Rob Cohen', 'Ken Li, Gary Scott Thompson, Erik Bergquist', 'Vin Diesel, Paul Walker, Michelle Rodriguez', '17+', 'https://www.youtube.com/watch?v=2TAOizOnNPo'),
(26, '2 Fast 2 Furious', 'img/ff2.jpg', 'Action, Crime, Thriller', '2003', '1h 47m', 'Former cop Brian O\'Conner is called upon to bust a dangerous criminal and he recruits the help of a former childhood friend and street racer who has a chance to redeem himself.', 'EX LAPD cop Brian O\'Conner (Paul Walker) teams up with his ex-con friend Roman Pearce (Tyrese Gibson) and works with undercover U.S. Customs Service agent Monica Fuentes (Eva Mendes) to bring Miami-based drug lord Carter Verone (Cole Hauser) down', 'John Singleton', 'Gary Scott Thompson, Michael Brandt, Derek Haas', 'Paul Walker, Tyrese Gibson, Cole Hauser', 'A', 'https://www.youtube.com/watch?v=F_VIM03DXWI'),
(27, 'Joose, the Tiger and the Fish', 'img/joose.jpg', 'Anime, Romance, Animation, Drama', '2020', '1h 39m', 'After befriending a marine biology student, a sarcastic artist living with paraplegia begins to experience the world beyond her home.', 'Equipped with his passion for diving and admiration for marine biology, university student Tsuneo Suzukawa tries his best to juggle several part-time jobs to earn enough money to study abroad. But one night, in a fateful accident, he meets a girl in a wheelchair, driving his current path into a detour. The girl, Kumiko-who prefers to be called \"Josee\"-initially comes off as rude. Tsuneo, however, is then convinced by Josee\'s grandmother to take on the paid job to be Josee\'s caretaker. Despite being annoyed with her bossy demeanor, Tsuneo sees the opportunity to save more funds to support his academic dream. Nonetheless, after putting up with Josee\'s behavior for some time, Tsuneo tries to quit, only to discover Josee\'s dreams of traversing the outside world-to experience a life free from her crippling condition. Changing his mind, Tsuneo decides to accompany Josee in exploring the wonders that the world has to offer. Through their time together, the two begin to realize that the traits that bind them may be vital toward fulfilling their respective aspirations.', 'Kotaro Tamura', 'Seiko Tanabe, Sayaka Kuwamura', 'Kaya Kiyohara, Taishi Nakagawa, Matsutera Chiemi', 'R13+', 'https://www.youtube.com/watch?v=w6IsHL91aXo'),
(29, 'Rascal Does Not Dream Of A Dreaming Girl', 'img/rascal.jpg', 'Anime, Animation, Drama, Fantasy, Romance', '2019', '1h 29m', 'A high school student\'s blissful days with his girlfriend are interrupted when his first crush returns in two forms.', 'In Fujisawa, where the skies are bright and the seas glisten, Sakuta Azusagawa is in his second year of high school. His blissful days with his girlfriend and upperclassman, Mai Sakurajima, are interrupted with the appearance of his first crush, Shoko Makinohara. For reasons unknown, he encounters two Shoko\'s: one in middle school and another who has become an adult. As Sakuta finds himself helplessly living with the Shoko\'s, the adult Shoko leads him around by the nose, causing a huge rift in his relationship with Mai. In the midst of all of this, he discovers that the middle school Shoko is suffering from a grave illness and his scar begins to throb.', 'Soichi Masui', 'Hajime Kamoshida, Masahiro Yokotani', 'Kaito Ishikawa, Asami Seto, Inori Minase', '13+', 'https://www.youtube.com/watch?v=rl7zM1zi4Ew'),
(30, 'Gran Turismo', 'img/gran.jpg', 'Action, Sports, Adventure, Drama', '2023', '2h 14m', 'Based on the unbelievable, inspiring true story of a team of underdogs - a struggling, working-class gamer, a failed former race car driver, and an idealistic motorsport exec - who risk it all to take on the most elite sport in the world.', 'Jann is an avid gamer from Cardiff who spends his days playing Gran Turismo, refusing to succeed in the real world. Meanwhile, in Tokyo, Danny, a marketing manager for the Nissan automobile corporation, is running an advertising campaign and, together with the management of Gran Turismo, hatches a plan to launch a competition inviting gamers to try their luck in real racing cars. Needing help organizing an event, Danny turns to Jack, a former racing driver and incorrigible cynic. When fate brings Jann together with Danny and Jack, the gamer becomes the driver of a Nissan racing car, plunging headlong into the fight for a place in the sun in the competitive world of real racing.', 'Neill Blomkamp', 'Jason Hall, Zach Baylin, Alex Tse', 'David Harbour, Orlando Bloom, Archie Madekwe', '13+', 'https://www.youtube.com/watch?v=GVPzGBvPrzw'),
(31, 'Skyfall', 'img/skyfall.jpg', 'Spy, Action, Adventure, Thriller', '2012', '2h 23m', 'James Bond\'s loyalty to M is tested when her past comes back to haunt her. When MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.', 'When James Bond\'s latest assignment goes gravely wrong and agents around the world are exposed, MI6 is attacked, forcing M to relocate the agency. These events cause her authority and position to be challenged by Gareth Mallory, the new Chairman of the Intelligence and Security Committee. With MI6 now compromised from both inside and out, M is left with one ally she can trust: Bond. 007 takes to the shadows, aided only by field agent, Miss Eve Moneypenny, following a trail to a mysterious enemy, whose lethal and hidden motives have yet to reveal themselves.', 'Sam Mendes', 'Neal Purvis, Robert Wade, John Logan', 'Daniel Craig, Javier Bardem, Naomie Harris\r\n\r\n', 'R', 'https://www.youtube.com/watch?v=6kw1UVovByw'),
(32, 'Hacksaw Ridge', 'img/hacksaw.jpg', 'War, Biography, Drama, History', '2016', '2h 19m', 'World War II American Army Medic Desmond T. Doss, serving during the Battle of Okinawa, refuses to kill people and becomes the first man in American history to receive the Medal of Honor without firing a shot.', 'The true story of Desmond T. Doss, the conscientious objector who, after the Battle of Okinawa, was awarded the Medal of Honor for his incredible bravery and regard for his fellow soldiers. Following his upbringing and how this shaped his views (especially his religious view and anti-killing stance), Doss\'s trials and tribulations after enlisting in the US Army (trying to become a medic) begin, preluding the hell on Earth that was Hacksaw Ridge.', 'Mel Gibson', 'Robert Schenkkan, Andrew Knight', 'Andrew Garfield, Sam Worthington, Luke Bracey', '18+', 'https://www.youtube.com/watch?v=s2-1hz1juBI'),
(33, 'World War Z', 'img/wwz.jpg', 'Zombie, Horror, Action, Adventure, SCI-FI, Thriller', '2013', '1h 56m', 'Former United Nations employee Gerry Lane traverses the world in a race against time to stop a zombie pandemic that is toppling armies and governments and threatens to destroy humanity itself.', 'Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.', 'Marc Forster', 'Matthew Michael Carnahan, Drew Goddard, Damon Lindelof', 'Brad Pitt, Mireille Enos, Daniella Kertesz\r\n', '21', 'https://www.youtube.com/watch?v=Md6Dvxdr0AQ'),
(34, 'Inside Job', 'img/inside.jpg', 'Crime, Documentary', '2010', '1h 49m', 'Takes a closer look at what brought about the 2008 financial meltdown.', '\'Inside Job\' provides a comprehensive analysis of the global financial crisis of 2008, which at a cost over $20 trillion, caused millions of people to lose their jobs and homes in the worst recession since the Great Depression, and nearly resulted in a global financial collapse. Through exhaustive research and extensive interviews with key financial insiders, politicians, journalists, and academics, the film traces the rise of a rogue industry which has corrupted politics, regulation, and academia. It was made on location in the United States, Iceland, England, France, Singapore, and China.', 'Charles Ferguson', 'Charles Ferguson, Chad Beck, Adam Bolt', 'Matt Damon, Gylfi Zoega, Andri Snær Magnason', 'PG-13', 'https://www.youtube.com/watch?v=FzrBurlJUNk'),
(35, 'Train to Busan', 'img/busan.jpg', 'Zombie, Action, Horror, Thriller, Korean', '2016', '1h 58m', 'While a zombie virus breaks out in South Korea, passengers struggle to survive on the train from Seoul to Busan.', 'Sok-woo, a father with not much time for his daughter, Soo-ahn, are boarding the KTX, a fast train that shall bring them from Seoul to Busan. But during their journey, the apocalypse begins, and most of the earth\'s population become flesh craving zombies. While the KTX is shooting towards Busan, the passenger\'s fight for their families and lives against the zombies - and each other.', 'Yeon Sang-Ho', 'Park Joo-suk, Yeon Sang-ho', 'Gong YooJung Yu-miMa Dong-seok', '17+', 'https://www.youtube.com/watch?v=1ovgxN2VWNc'),
(36, 'La La Land', 'img/la_la_land.jpg', 'Music, Comedy, Drama, Romance', '2016', '2h 8m', 'When Sebastian, a pianist, and Mia, an actress, follow their passion and achieve success in their respective fields, they find themselves torn between their love for each other and their careers.', 'Aspiring actress serves lattes to movie stars in between auditions and jazz musician Sebastian scrapes by playing cocktail-party gigs in dingy bars. But as success mounts, they are faced with decisions that fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.', 'Damien Chazelle', 'Damien Chazelle', 'Ryan Gosling, Emma Stone, Rosemarie DeWitt', '13+', 'https://www.youtube.com/watch?v=0pdqf4P9MB8&t=9s'),
(37, 'Interstellar', 'img/inter.jpg', 'SCI-FI, Adventure, Drama, Fantasy', '2014', '2h 49m', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'In the near future around the American Midwest, Cooper, an ex-science engineer and pilot, is tied to his farming land with his daughter Murph and son Tom. As devastating sandstorms ravage Earth\'s crops, the people of Earth realize their life here is coming to an end as food begins to run out. Eventually stumbling upon a N.A.S.A. base 6 hours from Cooper\'s home, he is asked to go on a daring mission with a few other scientists into a wormhole because of Cooper\'s scientific intellect and ability to pilot aircraft unlike the other crew members. In order to find a new home while Earth decays, Cooper must decide to either stay, or risk never seeing his children again in order to save the human race by finding another habitable planet.', 'Christoper Nolan', 'Jonathan Nolan, Christopher Nolan', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain\r\n', 'R', 'https://www.youtube.com/watch?v=zSWdZVtXT7E'),
(38, 'The Wild Robot', 'img/wild_robot.jpg', 'Animation, Fantasy, SCI-FI', '2024', '1h 42m', 'After a shipwreck, an intelligent robot called Roz is stranded on an uninhabited island. To survive the harsh environment, Roz bonds with the island\'s animals and cares for an orphaned baby goose.', 'From DreamWorks Animation comes a new adaptation of a literary sensation, Peter Brown\'s beloved, award-winning, #1 New York Times bestseller, The Wild Robot. The epic adventure follows the journey of a robot--ROZZUM unit 7134, \"Roz\" for short--that is shipwrecked on an uninhabited island and must learn to adapt to the harsh surroundings, gradually building relationships with the animals on the island and becoming the adoptive parent of an orphaned gosling', 'Chris Sanders', 'Chris Sanders, Peter Brown', 'Lupita Nyong\'o, Pedro Pascal, Kit Connor', 'PG', 'https://www.youtube.com/watch?v=VUCNBAmse04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `platform`
--

CREATE TABLE `platform` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL COMMENT 'ambil dari tabel movies',
  `netflix` varchar(255) NOT NULL COMMENT 'masukin linknya',
  `prime` varchar(255) NOT NULL,
  `disney` varchar(255) NOT NULL,
  `hulu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `platform`
--

INSERT INTO `platform` (`id`, `movie_id`, `netflix`, `prime`, `disney`, `hulu`) VALUES
(1, 1, 'https://www.netflix.com/id/title/81755774', '', '', ''),
(2, 2, 'https://www.netflix.com/id/title/81704426?source=35', '', '', ''),
(3, 3, 'https://www.netflix.com/id/title/81647967?source=35', '', '', ''),
(4, 4, '', 'https://primevideo.com/dp/amzn1.dv.gti.95b06310-b6ca-4254-8e8b-727d13de6c5d?autoplay=0&ref_=atv_cf_strg_wb', '', ''),
(5, 5, '', 'https://www.primevideo.com/detail/Exhuma/0Q69FWWUZETZ742DWJ1A5J68FT', '', ''),
(6, 6, 'https://www.netflix.com/id/title/81728111?source=35', '', '', ''),
(7, 7, '', 'https://www.primevideo.com/-/id/detail/Star-Wars-The-Force-Awakens/0HK9XPVWNZ64U1ES6OJKN2P9Z8', 'https://www.hotstar.com/id/onboarding?ref=%2Fid', 'https://www.hulu.com/movie/star-wars-the-force-awakens-438ec2e9-a05c-4b01-84f4-18960b363868'),
(8, 8, 'https://www.netflix.com/id/title/81002866?source=35', '', '', ''),
(9, 9, 'https://www.netflix.com/id/title/81002850?source=35', '', '', ''),
(10, 10, 'https://www.netflix.com/id/title/81016322?source=35', '', '', ''),
(11, 11, '', 'https://www.primevideo.com/detail/Us/0OFM98SOKFRBUB0L0K73KL3YSZ', '', ''),
(12, 12, '', 'https://www.primevideo.com/-/id/detail/Satans-Slaves-2-Communion/0GGXHYFW3VTXP8RKT1HS4XZUGT', '', ''),
(13, 13, '', '', '', ''),
(14, 14, 'https://www.netflix.com/id/title/81685589?source=35', '', '', ''),
(15, 15, '', '', '', ''),
(16, 16, '', 'https://www.primevideo.com/dp/amzn1.dv.gti.750121a7-5270-472c-a3ab-2db5ed9f6e69?autoplay=0&ref_=atv_cf_strg_wb', '', ''),
(17, 17, '', '', '', ''),
(18, 20, '', '', '', ''),
(19, 21, '', 'https://www.primevideo.com/detail/It-Ends-with-Us/0NKHN5L93EMWINBEG0QLW78DCT', '', ''),
(20, 22, 'https://www.netflix.com/id/title/81767017?source=35', '', '', ''),
(21, 23, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ratings`
--

INSERT INTO `ratings` (`id`, `movie_id`, `user_id`, `rating`) VALUES
(1, 1, 1, 8.7),
(2, 2, 1, 7.4),
(3, 3, 1, 9.1),
(4, 1, 3, 9.9),
(5, 3, 3, 8.0),
(6, 4, 3, 8.0),
(7, 7, 1, 8.0),
(8, 15, 3, 9.0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reviews`
--

INSERT INTO `reviews` (`id`, `movie_id`, `user_id`, `review_text`, `created_at`) VALUES
(1, 1, 1, 'Film yang sangat seru! Baru kali ini saya sangat terkesan dengan film action dari negeri sendiri. Banyak faktor-faktor yang membuat film ini bisa menyaingi action luar, seperti aktornya, editing, colograding, story dan lainnya.', '2024-11-09 13:57:40'),
(2, 2, 1, 'BAPERR! iyaaa, film ini benar-benar bikin baper orang-orang yang melihatnya. What a great movie', '2024-11-09 13:58:30'),
(3, 3, 1, 'Lumayan seru, film ini mengkombinasikan gaya action yang ciamik dengan kebudayaan di Indonesia', '2024-11-09 13:59:16'),
(5, 8, 1, 'mantap', '2024-11-30 11:06:47'),
(6, 4, 1, 'Mantap sekali, saya sangat suka action yang ada disini', '2024-11-30 05:19:53'),
(7, 1, 3, 'mantap sekali bung', '2024-11-30 05:37:43'),
(8, 7, 1, 'could i say that this is some kind of masterpiece? hell yeah', '2024-11-30 10:09:40'),
(9, 4, 3, 'mantap', '2024-12-01 03:49:47'),
(10, 15, 3, 'Film yang cukup mengerikan, saya dibuat merinding dan prihatin saat menontonnya, mengingat ini diambil dari kisah nyata. Saya juga sangat menghargai produsernya yang tetap menghargai korban dan membuat filmnya menjadi sangat ciamik.', '2024-12-01 03:59:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` char(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nim`, `password`) VALUES
(1, 'Ananda Novianshaf', '1237050054', '202cb962ac59075b964b07152d234b70'),
(2, 'nanda', '1237050055', '202cb962ac59075b964b07152d234b70'),
(3, 'Nebraska', '1237051111', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indeks untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id untuk setiap film', AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `platform`
--
ALTER TABLE `platform`
  ADD CONSTRAINT `platform_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
