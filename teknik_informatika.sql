-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mar 2017 pada 13.14
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teknik_informatika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
`id_admin` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `berita` text NOT NULL,
  `tgl_post` date NOT NULL,
  `author` varchar(10) NOT NULL,
  `images` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `judul_seo` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `berita`, `tgl_post`, `author`, `images`, `deskripsi`, `status`, `judul_seo`) VALUES
(2, 'Kalender Akademik 2014-2015', '0', '2015-04-02', 'admin', 'kalender.jpg', '0', 'kalender', ''),
(3, 'Belajar Codeigniter', '<p style="text-align:center"><img alt="" src="/ti.uts-sumbawa.ac.id/assets/content_upload/images/codeigniter-development.png" style="height:213px; width:500px" /></p>\r\n\r\n<p style="margin-left:0.25in; text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp; Codeigniter merupakan salah satu dari sekian banyak framework PHP yang ada. Codeigniter dikembangkan oleh Rick Ellis (<a href="http://www.ellislab.com">http://www.ellislab.com</a>). Tujuan dari pembuatan framework CodeIgniter ini menurut user manualnya adalah untuk menghasilkan framework yang akan dapat digunakan untuk pengembangan proyek pembuatan website secara lebih cepat dibandingkan dengan pembuatan website dengan cara koding secara manual, dengan menyediakan banyak sekali pustaka yang dibutuhkan dalam pembuatan website, dengan antarmuka yang sederhana dan struktur logika untuk mengakses pustaka yang dibutuhkan. CodeIgniter membiarkan kita untuk memfokuskan diri pada pembuatan website dengan meminimalkan pembuatan kode untuk berbagai tujuan pembuatan website. CodeIgniter merupakan perangkat lunak yang bersifat gratis, hal ini dikarenakan CodeIgniter mempunyai lisensi dibawah Apache/BSD-Style yang bersifat open source.</p>\r\n', '2015-06-10', 'admin', '10921914_770680633017155_1337058808_n.jpg', 'codeinginter adalah framework yang sangat populer', 'berita', 'belajar-codeigniter'),
(4, 'Jangan Benci aku Mama', '<p style="text-align:center"><img alt="" src="/ti.uts-sumbawa.ac.id/assets/content_upload/images/11351123_957355147628467_1342109981609974506_n.jpg" style="height:386px; width:400px" /></p>\r\n\r\n<p style="text-align:center">JANGAN BENCI AKU, MAMA&hellip;</p>\r\n\r\n<p style="text-align:justify">Setiap mengenang kisah ini hatiku nyeri bagai tersayat-sayat sembilu. Saya merasa diriku begitu kotor. Umpat dan caci seakan memadati setiap lembar perjalanan sisa umurku. Namun demi kemanusiaan, izinkan daku, Tuhan, menuturkan kisah pilu ini. Sebelum ajal menjemputku...semoga menjadi pelajaran bagi para ibu yang banyak lalai terhadap buah hatinya&hellip;&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Dua puluh tahun silam&hellip;seorang bayi laki-laki lahir dari rahimku. Wajahnya lumayan tampan, namun terlihat agak bodoh... Sam, suamiku, lalu memberinya nama Eric. Seiring perputaran waktu, makin nampak pula bahwa anak ini agak terbelakang. Saya malu dengan cibiran orang. Niat jahat selalu menggelitik hatiku untuk menyerahkannya saja pada seseorang untuk dijadikan budak atau pelayan. Namun Sam selalu mencegat niat buruk itu. Akhirnya, terpaksa saya membesarkannya juga.&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Di tahun kedua setelah Eric lahir, Angelica, adik perempuan Erik yang cantik mungil lahir. Rasa sayang kami seakan tumpah ruah pada diri Angelica. Sering kami mengajaknya pergi ke taman hiburan, pusat perbelanjaan dan membelikannya pakaian anak-anak yang indah...</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Namun tidak demikian dengan Eric. Ia hanya memiliki beberapa helai pakaian butut. Beberapa kali Sam berniat membelikannya, tapi saya selalu melarangnya dengan dalih penghematan uang keluarga. Dan Sam pun selalu menuruti perkataan saya. Saat usia Angelica 2 tahun, babak baru kehidupan kami dimulai. Sam meninggal dunia lantaran sakit. Saat itu Eric berumur 4 tahun. Keluarga kami pun jatuh miskin dengan hutang yang semakin menumpuk.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Akhirnya saya mengambil tindakan yang akan membuat saya menyesal seumur hidup. Saya menjual rumah kenangan kami untuk menambal utang. Kami pun tinggal di sebuah gubuk tua selama beberapa bulan. Lalu kemudian saya memutuskan berangkat ke kota lain bersama Angelica dan meninggalkan Eric yang saat itu sedang tidur lelap di dalam gubuk.&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Hari berganti bak berlari. Tak terasa setahun..., dua tahun..., lima tahun..., sepuluh tahun tahun... telah berlalu sejak kejadian itu. Saya pun telah melupakan peristiwa itu. Ditambah lagi karena saya telah menikah dengan Brad, seorang pria dewasa. Usia Pernikahan kami telah menginjak tahun kelima. Berkat Brad, sifat-sifat buruk saya yang semula pemarah, egois, dan tinggi hati, berubah sedikit demi sedikit menjadi lebih sabar dan penyayang. Angelica telah berumur 12 tahun dan kami menyekolahkannya di asrama putri sekolah perawatan. Tidak ada lagi yang ingat tentang Eric. Riwayatnya seolah hilang ditelan bumi.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Hingga suatu malam... seorang anak dengan wajah tampan namun agak pucat menghampiri saya&hellip;.Sambil tersenyum ia berkata, &quot;Bibi&hellip;, bibi kenal mama saya?? Saya lindu cekali pada mommy!&quot; Setelah berkata demikian ia berbalik hendak beranjak pergi. Saya berseru menahannya, &quot;Tunggu nak..., sepertinya saya mengenal dirimu. Siapa namamu anak manis?&quot; &quot;Nama saya Elic, bibi.&quot; &quot;Eric...? Eric... Ya Tuhan! Kau benar-benar Eric???&quot;&hellip; Saya langsung tersentak dan bangun. Mimpi yang barusan saya lihat begitu nyata. Rasa bersalah, sesak dan berbagai perasaan aneh lainnya menerpa diri saya saat itu juga. Bayang-bayang Eric kembali menari-nari di benak saya.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Tiba-tiba terlintas kembali kisah ironis yang terjadi dulu bak sebuah film di kepala saya. Baru sekarang saya menyadari betapa jahatnya perbuatan saya dulu. Rasanya seperti mau mati saja saat itu. Penyesalan dan rasa bersalah setiap hari menghantui diriku. Hingga pernah suatu saat saya memutuskan untuk mengakhiri hidupku&hellip;Ya, saya harus mati..., Ketika tinggal se-inchi jarak pisau yang akan saya goreskan ke pergelangan tangan, tiba-tiba bayangan Eric melintas kembali di pikiran saya. Seakan baru tersadar dari mimpi, saya bangkit dan berujar, &quot;Mommy akan menjemputmu nak...&quot;.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Sore itu saya memarkir mobil Civic biru saya di samping sebuah gubuk. Brad dengan pandangan heran menatap saya dari samping. &quot;Mary, apa yang sebenarnya terjadi?&quot; &quot;Oh, Brad, kau pasti akan membenciku setelah saya ceritakan hal yang telah saya lakukan dulu&quot;. Akhirnya aku pun menuturkannya juga dengan suara terisak menahan tangis yang hendak pecah&hellip; Ternyata Tuhan sungguh baik kepada saya. Ia telah memberi suami yang begitu baik dan penuh pengertian. Setelah tangis reda, saya keluar dari mobil diikuti oleh Brad dari belakang.&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Mata saya menatap nanar pada gubuk yang terbentang dua meter dari hadapan kami. Teringat betapa gubuk itu pernah saya tinggali beberapa bulan lamanya bersama Eric... merenda hari-hari penuh kesusahan. Eric... Saya telah meninggalkan Eric di sana 10 tahun yang lalu. Dengan perasaan sedih saya berlari menghampiri gubuk tersebut dan mendorong pintu yang terbuat dari bambu itu... Gelap sekali... Tidak terlihat sesuatu apapun juga! Perlahan mata saya mulai menyesuaikan dengan kegelapan dalam ruangan kecil itu. Namun saya tidak menemukan siapapun di dalamnya. Hanya ada sepotong kain lusuh tergeletak di lantai tanah. Saya mengambil seraya mengamatinya dengan seksama... Mata saya mulai berkaca-kaca. Satu-satu air mata pilu menitik di atas potongan kain kumal itu. Saya mengenali betul potongan kain lusuh tersebut. Ia adalah bekas baju butut yang dulu dikenakan Eric sehari-harinya...</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Saya terus memanggil-manggil nama Eric, namun tak ada satu pun jawaban di sana. Dengan perasaan hampa saya melangkah keluar dari gubuk reok itu... Air mata masih menganak sungai menghangati pipiku. Saat itu saya hanya diam seribu bahasa, berkecamuk dengan aneka pikiran dan perasaan bersalah yang dalam. Tak ada yang dapat saya perbuat kecuali bergerak bersama Brad menaiki mobil dan meninggalkan gubuk yang menyimpan kenangan pahit tersebut. Tuhan, betapa bodahnya diriku ini&hellip;Betapa besar kesalahan dan dosa yang telah kuperbuat&hellip;masih adakah maaf untuk diri yang hina ini, Tuhan?...Tiba-tiba, saya menangkap sosok bayangan di belakang mobil kami. Saya kaget sebab suasana saat itu gelap sekali. Tak lama kemudian terlihatlah wajah seseorang. Begitu kotor dan lusuh. Ternyata ia seorang wanita tua. Hatiku bergetar kala ia tiba-tiba menegur saya dengan parau, &quot;Heii...! Siapa kamu?! Mau apa kau kemari?!&quot; Dengan perasaan masih gundah, saya memberanikan diri bertanya, &quot;Ibu&hellip;, apa ibu kenal seorang anak bernama Eric yang dulu tinggal di sini??&quot;&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Getir ia menjawab, &quot;Kalau nyonya ibunya, anda sungguh perempuan terkutuk!!... Tahukah kamu, sepuluh tahun yang lalu, sejak nyonya campakkan ia di sini, Eric terus mengharap dan menunggu seraya memanggil ibunya, &#39;Mommy..., mommy!&#39; Karena iba, saya kadang memberinya makan dan mengajaknya tinggal bersama saya. Nyonya, walau saya orang miskin dan hanya sebagai pemulung sampah, saya tidak akan pernah tega meninggalkan anak saya seperti itu! Saya orang tak punya, namun masih punya nurani dan kasih sayang. Nyonya, tiga bulan yang lalu Eric meninggalkan secarik kertas ini... Tahukah anda, bertahun-tahun lamanya, setiap hari anak yang malang itu belajar menulis, hanya untuk menulis sesuatu untukmu...&quot;. Gemetar tangan saya menyambut uluran kertas lusuh dari perempuan tua itu. Air mata penyesalan terus mambanjiri pipiku. Nanar saya membaca tulisan di kertas itu... &quot;Mommy, mengapa Mommy tidak pernah kembali lagi...? Mommy marah sama Eric, ya?? Maafkan kesalahan Eric ya&hellip;Mom, biarlah Eric yang pergi, tapi Mommy harus berjanji, kalau Mommy tidak akan marah lagi sama Eric. O ya Mom, Eric tidak pernah berhenti berdoa buat Mommy. Bye, Mom...&quot;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Lututku goyah. Tak sadar saya menjerit histeris, seraya mengguncang tubuh wanita tua itu, &quot;Bu, saya mohon, tolong katakan...katakan di mana anakku berada sekarang??? Tolonglah bu, Demi Tuhan, saya berjanji akan meyayanginya sekarang!, Saya tidak akan meninggalkannya lagi, Bu! Tolong katakan...!!!&quot; Brad lalu menarik dan memeluk tubuh saya yang bergetar keras.&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">&quot;Baiklah nyonya&hellip;kalau nyonya ingin bertemu dengannya, datanglah esok pagi di tempat ini!!&quot;. Lirih suara perempuan tua itu.&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">****</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Tanah pusara itu masih merah. Angin semilir bertiup pelan. Satu persatu dedaunan kering terlepas, jatuh menghampiri nisan Eric. Sisa-sisa reruntuhan pagi telah sirna bersama sinar mentari yang mulai menyengat. Saya tidak tahu sudah berapa jam saya berlutut di hadapan pusara itu. Rasanya air mataku telah kering dan hanya meninggalkan rasa perih di kelopak mata. Namun Saya masih ingin menangis&hellip;</p>\r\n\r\n<p style="text-align:justify">&quot;Sehari sebelum nyonya kemari, Eric telah dipanggil Yang Kuasa. Ia meninggal di belakang gubuk ini. Tubuhnya sangat kurus, dan lemah. Hanya demi menunggu nyonya kembali, anak malang itu rela bertahan di belakang gubuk ini tanpa berani masuk ke dalamnya. Ia takut jika ibunya datang akan pergi lagi bila melihatnya ada di dalam sana... Nyonya, sungguh impian anak malang itu hanya satu. Ia hanya berharap dapat melihat wajah Mommy-nya dari balik gubuk ini... Meski hujan deras dan kedinginan. Dengan kondisi yang lemah ia tetap bersikeras menanti Nyonya di sana&hellip;di sana&hellip; Ia seorang anak yang baik Nyonya. Sungguh dosa anda tidak terampuni!&quot;</p>\r\n\r\n<p style="text-align:justify">Suara lirih wanita tua itu terus terngiang-ngiang di kepalaku&hellip; dunia mulai gelap. Mata saya berkunang-kunang&hellip;.pegangan tangan saya melemah&hellip;.lalu jatuh tidak ingat apa-apa lagi.&nbsp;</p>\r\n\r\n<p style="text-align:justify">RSMD</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Digubah kembali dari sebuah kisah nyata di Republik Irlandia Utara.&nbsp;</p>\r\n\r\n<p style="text-align:justify">Sumber: Bunga Rampai Tarbiyah&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n', '2015-06-10', 'admin', '11351123_957355147628467_1342109981609974506_n.jpg', 'kesah kehidupan seorang anak kecil yang cacat yang tidak terima oleh ibunya, kemudian ibunya itu menyesal menelantarkan dia', 'berita', 'jangan-benci-aku-mama'),
(5, 'Seni dan Ilmu Pemrogramman', '<p><img alt="" src="/ti.uts-sumbawa.ac.id/assets/content_upload/images/kekuatan.jpg" style="float:left; height:197px; margin:3px 7px; width:200px" /></p>\r\n\r\n<p style="text-align:justify">Ilmu <em>Pemrograman komputer</em> sering dikenal sebagai &lsquo;<em>coding</em>&lsquo; atau &lsquo;berkembang&rsquo;. Biasanya <em>ilmu komputer</em> <em>Pemrograman</em> tuntutan dalam menulis, memodifikasi, memperbaiki, dan memelihara <em>kode sumber</em> dari <em>program perangkat lunak</em> komputer. Karena <em>kode sumber</em> <em>perangkat lunak</em> ditulis dalam <em>Bahasa pemrograman</em> <em>ilmu komputer</em>, <em>Programmer</em> atau &lsquo;programmer&rsquo; perlu tahu <em>Bahasa</em> pemrograman secara mendalam, programmer perlu tahu bahasa pemrograman dalam-dan-keluar sebagai kode sumber ditulis menggunakan <em>bahasa pemrograman komputer</em>. Dalam siklus hidup pengembangan perangkat lunak tradisional, ilmu komputer fase pemrograman dianggap sebagai salah satu langkah paling signifikan. Meskipun ada perdebatan yang sedang berlangsung pada apakah pemrograman ilmu komputer adalah sebuah seni atau praktek rekayasa, saya pribadi berpikir bahwa ilmu pemrograman komputer adalah sebuah praktek rekayasa. Pertama-tama, itu semua proses mekanis standar yang disajikan sebagai pemrograman. Salah satu insiden yang &lsquo;pemrograman&rsquo; paling terkenal adalah <em>Al-Jazari</em> &lsquo;s musisi robot yang diprogram dengan menggunakan pasak dan Cams. Meskipun ini &lsquo;pemrograman&rsquo; itu sepenuhnya berbeda dari jenis pemrograman yang kita lihat saat ini, ada pengaruh positif dari konsep-konsep pemrograman historis untuk konsep-konsep yang &lsquo;pemrograman&rsquo; modern.</p>\r\n\r\n<p style="text-align:justify">Ada beberapa tuntutan untuk memenuhi dalam pemrograman ilmu komputer modern. Ketika datang ke kualitas, efisiensi, performa, kehandalan, ketahanan, kegunaan, dan portabilitas dianggap sebagai faktor penting. Jika kode program perangkat lunak mengabaikan parameter ini, maka itu bukanlah sebuah software yang ditulis dengan benar. Untuk membuat hidup programmer mudah, ada banyak algoritma diperkenalkan dan standar. Selain itu, ada sejumlah metodologi diperkenalkan untuk membuat latihan pemrograman ilmu komputer yang mudah. Berdasarkan metodologi, bahasa-bahasa pemrograman yang ideal untuk pengembangan perangkat lunak di bidang deferent. <em>Manajemen Proyek perangkat lunak</em> adalah ofprogramme jenis tertentu, perangkat lunak yang mudah dipelajari secara online di belajar microsoft proyek 2007</p>\r\n\r\n<p style="text-align:justify">create : Erwin Mardinata</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n', '2015-07-01', 'admin', '11051737_559677654173435_348062415902520691_n.jpg', 'Pemrogramman adalah ilmu yang mempelajari tentang teknologi-teknologi yang sangat canggih', 'berita', 'seni-dan-ilmu-pemrogramman'),
(6, 'Tes', '<p>TEst</p>\r\n', '2017-03-26', 'admin', '', '', 'profil', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_upload` date DEFAULT NULL,
  `id_kat` int(3) NOT NULL,
  `title_file` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `judul`, `tgl_upload`, `id_kat`, `title_file`) VALUES
(2, 'Framework Codeigniter', '2015-04-26', 2, 'FRAMEWORK_CODEIGNITER.docx'),
(3, 'The power of pretending', '2015-04-26', 4, 'The_Power_of_Pretending.pdf'),
(4, 'Penyesalan seorang Istri', '2015-04-26', 4, 'Aku_membencinya.docx'),
(5, 'Jangan Benci aku Mama', '2015-04-26', 4, 'JANGAN_BENCI_AKU.docx'),
(6, 'Jadwal UTS teknik Informatika tahun 2014/2015', '2015-04-26', 5, 'Doc2.docx'),
(7, 'Panduan skripsi Teknik Informatika', '2015-04-26', 6, 'Aku_Tidak_Akan_Menyerah_Sebelum_Cita.docx'),
(8, '5 + 1 Kunci Sukses', '2015-04-26', 4, '5_+_1_Kunci_Sukses.pdf'),
(9, '3V Talking', '2015-04-26', 4, '3V_Talking.pdf'),
(10, '5 Fase akan perubahan drastis', '2015-04-26', 4, '5_Fase_Akan_Perubahan_Drastis.pdf'),
(11, 'Membeli Nilai', '2015-04-26', 4, 'Membeli_Nilai.pdf'),
(12, '5 strategi menjadi orang sukses', '2015-04-26', 4, '5_Strategi_Menjadi_Orang_Sukses.pdf'),
(13, 'Panduan Magang', '2017-03-26', 7, 'Pedoman-Magang-TI-UTS-2016.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
`id` int(5) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id`, `photo`, `deskripsi`, `tgl`) VALUES
(8, 'Jellyfish.jpg', 'Deskripsi 1', '2017-03-26'),
(9, 'Desert.jpg', 'Deskripsi 2', '2017-03-26'),
(10, 'Penguins.jpg', 'Deskripsi 3', '2017-03-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_data`
--

CREATE TABLE IF NOT EXISTS `kat_data` (
`id_kat` int(3) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kat_data`
--

INSERT INTO `kat_data` (`id_kat`, `kategori`) VALUES
(2, 'ebook'),
(4, 'Novel'),
(5, 'pengumuman penting'),
(6, 'Arsip'),
(7, 'Magang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
`id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` char(8) NOT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
`id_mk` int(3) NOT NULL,
  `kode_mk` char(7) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `jml_sks` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `prasyarat` varchar(50) DEFAULT NULL,
  `id_peg` int(3) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `kode_mk`, `nama_mk`, `jml_sks`, `semester`, `prasyarat`, `id_peg`) VALUES
(1, 'INF-001', 'Dasar Pemrograman Komputer', 4, 1, '', 17),
(2, 'INF-002', 'Pemrograman Lanjut', 4, 2, '', 18),
(3, 'INF-004', 'Jaringan komputer', 4, 2, '', 18),
(4, 'INF-005', 'Grafika Komputer', 3, 3, '', 18),
(5, 'INF-003', 'Desain dan Analisis Algoritma', 3, 4, '', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id_peg` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` char(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text,
  `jenis_pegawai` varchar(20) NOT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poling`
--

CREATE TABLE IF NOT EXISTS `poling` (
`id` int(5) NOT NULL,
  `value` char(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `poling`
--

INSERT INTO `poling` (`id`, `value`) VALUES
(1, 'a'),
(2, 'b'),
(3, 'a'),
(4, 'b'),
(5, '0'),
(6, '0'),
(7, '0'),
(8, '0'),
(9, '0'),
(10, 'a'),
(11, 'a'),
(12, 'd'),
(13, 'a'),
(14, 'd'),
(15, 'e'),
(16, 'c'),
(17, 'a'),
(18, 'a'),
(19, 'b'),
(20, 'a'),
(21, 'a'),
(22, 'a'),
(23, 'b'),
(24, 'b'),
(25, 'd'),
(26, 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`), ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kat_data`
--
ALTER TABLE `kat_data`
 ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
 ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_peg`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kat_data`
--
ALTER TABLE `kat_data`
MODIFY `id_kat` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
MODIFY `id_mk` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id_peg` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data`
--
ALTER TABLE `data`
ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `kat_data` (`id_kat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
