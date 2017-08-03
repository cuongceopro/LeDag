# ************************************************************
# Sequel Pro SQL dump
# バージョン 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# ホスト: 127.0.0.1 (MySQL 5.6.28)
# データベース: LeDag
# 作成時刻: 2017-07-30 08:11:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# テーブルのダンプ categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'collection','2017-02-19 10:50:52','2017-02-19 10:50:52'),
	(2,'event','2017-02-19 10:50:52','2017-02-19 10:50:52'),
	(3,'news',NULL,NULL),
	(4,'hankerchief',NULL,NULL),
	(5,'bag',NULL,NULL),
	(6,'man_closers',NULL,NULL),
	(7,'woman_closers',NULL,NULL),
	(8,'kid',NULL,NULL),
	(9,'others',NULL,NULL),
	(10,'odermade',NULL,NULL);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `commenter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# テーブルのダンプ good_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `good_categories`;

CREATE TABLE `good_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `good_categories` WRITE;
/*!40000 ALTER TABLE `good_categories` DISABLE KEYS */;

INSERT INTO `good_categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'手刺繍ギフト','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(2,'AKIKALE','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(3,'KAORU ZHOU',NULL,NULL),
	(4,'その他',NULL,NULL),
	(5,'オーダーメイド&リメーク',NULL,NULL),
	(6,'レンタル',NULL,NULL);

/*!40000 ALTER TABLE `good_categories` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ goods
# ------------------------------------------------------------

DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci,
  `image1` text COLLATE utf8_unicode_ci,
  `image2` text COLLATE utf8_unicode_ci,
  `image3` text COLLATE utf8_unicode_ci,
  `image4` text COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` text COLLATE utf8_unicode_ci,
  `cost` int(10) unsigned NOT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;

INSERT INTO `goods` (`id`, `cat_id`, `code`, `image1`, `image2`, `image3`, `image4`, `name`, `color`, `cost`, `summary`, `detail`, `created_at`, `updated_at`)
VALUES
	(1,'1',NULL,NULL,NULL,NULL,NULL,'ハンカチ',NULL,5000,NULL,'日本製綿100％・サイズ：46x46・手作りにこだわり「人の手の温かさを伝わる」一つ一つ丁寧に、作り手の気持ちを込めて作り上げる・オリジナルデザイン手刺繍オーダー受付・お気軽いに相談まで','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(2,'1',NULL,NULL,NULL,NULL,NULL,'2 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(3,'1',NULL,NULL,NULL,NULL,NULL,'3 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(4,'1',NULL,NULL,NULL,NULL,NULL,'4 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(5,'1',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(62,'2',NULL,NULL,NULL,NULL,NULL,'1 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(63,'2',NULL,NULL,NULL,NULL,NULL,'2 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(64,'2',NULL,NULL,NULL,NULL,NULL,'3番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(65,'2',NULL,NULL,NULL,NULL,NULL,'4番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(66,'2',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(67,'2',NULL,NULL,NULL,NULL,NULL,'6 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(68,'2',NULL,NULL,NULL,NULL,NULL,'7 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(69,'3','KZM-012','kaoruzhou/KZM-012_1.JPG','kaoruzhou/KZM-012_2.JPG','kaoruzhou/KZM-012_3.JPG','kaoruzhou/KZM-012_4.JPG','セーター','黒、グレー',19000,'綿100％・オーダー受付中',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(71,'4',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(72,'4',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(73,'5',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(74,'5',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(75,'6',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(76,'6',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(77,'6',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(81,'4',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(82,'4',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(83,'4',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(84,'5',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(85,'5',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(86,'5',NULL,NULL,NULL,NULL,NULL,'5 番目の商品',NULL,5000,NULL,'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。','2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(87,'3','KZM-013','kaoruzhou/KZM-013_1.JPG','kaoruzhou/KZM-013_2.JPG',NULL,NULL,'シャツ','薄ブルー、白',23000,'綿100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(88,'3','KZM-014','kaoruzhou/KZM-014_1.JPG',NULL,NULL,NULL,'シャツ','薄ブルー、白',23000,'綿100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(89,'3','KZM-015','kaoruzhou/KZM-015_1.JPG','kaoruzhou/KZM-015_2.JPG',NULL,NULL,'シャツ','チェック',24000,'綿100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(90,'3','KZM-016','kaoruzhou/KZM-016_1.JPG','kaoruzhou/KZM-016_2.JPG',NULL,NULL,'ショットパンツ','黒',19000,'ウール100％、後ろ左ポケット・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(91,'3','KZM-018','kaoruzhou/KZM-018_1.JPG',NULL,NULL,NULL,'パンツ','黒・赤・グレー',25000,'ウール100％、後ろ左ポケット・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(92,'3','KZM-020','kaoruzhou/KZM-020_1.JPG','kaoruzhou/KZM-020_2.JPG',NULL,NULL,'パンツ','チェック',32000,'ウール100％、切り替え展開・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(93,'3','KZM-023','kaoruzhou/KZM-023_1.JPG','kaoruzhou/KZM-023_2.JPG',NULL,NULL,'ジャケット','チェック',68000,'日本製ウール100％、後ろ左ポケット・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(94,'3','KZM-024','kaoruzhou/KZM-024_1.JPG','kaoruzhou/KZM-024_2.JPG',NULL,NULL,'ジャケット','ダックグレー',90000,'日本製ウール100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(95,'3','KZM-025','kaoruzhou/KZM-025_1.JPG','kaoruzhou/KZM-025_2.JPG',NULL,NULL,'コート','黒・オレンジー',100000,'日本製ウール100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(96,'3','KZM-026','kaoruzhou/KZM-026_1.JPG','kaoruzhou/KZM-026_2.JPG',NULL,NULL,'コート','黒・薄ブルー',120000,'日本製ウール100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(97,'3','KZF-012','kaoruzhou/KZF-012_1.JPG','kaoruzhou/KZF-012_2.JPG',NULL,NULL,'トップス','ゴールド',24000,'ポリエステル・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(98,'3','KZF-013','kaoruzhou/KZF-013_1.JPG','kaoruzhou/KZF-013_2.JPG',NULL,NULL,'スカート','黒',32000,'人造ファー・ウール100％・裏地ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(99,'3','KZF-015','kaoruzhou/KZF-015_1.JPG','kaoruzhou/KZF-015_2.JPG',NULL,NULL,'トップス','ピンク',21000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(100,'3','KZF-016','kaoruzhou/KZF-016_1.JPG','kaoruzhou/KZF-016_2.JPG',NULL,NULL,'ワンピース','ピンク',27000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(101,'3','KZF-017','kaoruzhou/KZF-017_1.JPG','kaoruzhou/KZF-017_2.JPG',NULL,NULL,'ワンピース','ブルー',27000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(102,'3','KZF-018','kaoruzhou/KZF-018_1.JPG','kaoruzhou/KZF-018_2.JPG',NULL,NULL,'ワンピース','黒',49000,'綿100％オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(103,'3','KZF-019','kaoruzhou/KZF-019_1.JPG','kaoruzhou/KZF-019_2.JPG',NULL,NULL,'ワンピース','黒',43000,'レザー・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(105,'3','KZF-020','kaoruzhou/KZF-020_1.JPG','kaoruzhou/KZF-020_2.JPG',NULL,NULL,'コート','ピンク',33000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(106,'3','KZF-022','kaoruzhou/KZF-022_1.JPG','kaoruzhou/KZF-022_2.JPG',NULL,NULL,'コート','青いチェック・黒',54000,'人造ファー・毛100％・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(107,'3','KZF-023','kaoruzhou/KZF-023_1.JPG','kaoruzhou/KZF-023_2.JPG',NULL,NULL,'コート','青',42000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(108,'3','KZF-024','kaoruzhou/KZF-024_1.JPG','kaoruzhou/KZF-024_2.JPG',NULL,NULL,'コート','黒・ピンク',80000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22'),
	(109,'3','KZF-025','kaoruzhou/KZF-025_1.JPG','kaoruzhou/KZF-025_2.JPG',NULL,NULL,'トップス・袖','ピンク',24000,'人造ファー・ポリエステル100％・オーダー受付中（オーダー場合は色・サイズ変更可能）',NULL,'2017-03-04 18:25:22','2017-03-04 18:25:22');

/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_02_07_154904_create_posts_table',1),
	(4,'2017_02_07_154925_create_categories_table',1),
	(5,'2017_02_19_102120_create_comments_table',1),
	(6,'2017_03_04_180316_create_goods_table',2),
	(7,'2017_03_04_180400_create_good_categories_table',2),
	(8,'2017_03_19_125746_create_table_carts',3),
	(9,'2017_03_19_125802_create_table_carts_item',3),
	(10,'2017_03_19_133848_create_shoppingcart_table',3),
	(11,'2017_03_20_043142_create_table_products',3),
	(12,'2017_03_20_060408_create_products_table',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# テーブルのダンプ posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_count` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_summary` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `title`, `cat_id`, `content`, `comment_count`, `created_at`, `updated_at`, `content_summary`)
VALUES
	(1,'アオザイの基本','1','基本～単衣のアオザイの縫い方まで、ご自分のペースに合わせて進んでいくので、初めての方でも安心してじっくりと学べます。\n<p>\n<b>講座の詳細</b><br>\n☆教室：東京都台東区入谷2-3-2<br>\r☆定員：3人　（1回）<br>\r☆日時：毎週金曜日の18時～20時・毎週日曜日の14時～16時<br>\r☆期間：アオザイ一点完成まで10回参加必要<br>\r☆料金：無料（材料費持参・設備は1000円/回）<br>\r☆持ち物：筆記用具（指抜き・縫い針・糸・その他）<br>\r持ち物は初日に説明いたします。不明な点や購入希望の方はご相談ください。<br>\n</p>\n\n',0,'2017-07-30 10:48:57','2017-02-19 10:48:57','基本～単衣のアオザイの縫い方まで、ご自分のペースに合わせて進んでいくので、初めての方でも安心してじっくりと学べます。\n<p>\n<b>講座の詳細</b><br>\n☆教室：東京都台東区入谷2-3-2<br>\r☆定員：3人　（1回）<br>\n</p>'),
	(8,'アオザイの基本','1','基本～単衣のアオザイの縫い方まで、ご自分のペースに合わせて進んでいくので、初めての方でも安心してじっくりと学べます。\n<p>\n<b>講座の詳細</b><br>\n☆教室：東京都台東区入谷2-3-2<br>\r☆定員：3人　（1回）<br>\r☆日時：毎週金曜日の18時～20時・毎週日曜日の14時～16時<br>\r☆期間：アオザイ一点完成まで10回参加必要<br>\r☆料金：無料（材料費持参・設備は1000円/回）<br>\r☆持ち物：筆記用具（指抜き・縫い針・糸・その他）<br>\r持ち物は初日に説明いたします。不明な点や購入希望の方はご相談ください。<br>\n</p>\n\n',0,'2017-07-30 10:48:57','2017-02-19 10:48:57','基本～単衣のアオザイの縫い方まで、ご自分のペースに合わせて進んでいくので、初めての方でも安心してじっくりと学べます。\n<p>\n<b>講座の詳細</b><br>\n☆教室：東京都台東区入谷2-3-2<br>\r☆定員：3人　（1回）<br>\n</p>');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `price`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'1 商品','1 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'1 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(2,'2 商品','2 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'2 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(3,'3 商品','3 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'3 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(4,'4 商品','4 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'4 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(5,'5 商品','5 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'5 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(6,'6 商品','6 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'6 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(7,'7 商品','7 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'7 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(8,'8 商品','8 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'8 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(9,'9 商品','9 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'9 image','2017-03-20 06:04:58','2017-03-20 06:04:58'),
	(10,'10 商品','10 商品','この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。',5000.00,'10 image','2017-03-20 06:04:58','2017-03-20 06:04:58');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ shoppingcart
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shoppingcart`;

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# テーブルのダンプ users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;