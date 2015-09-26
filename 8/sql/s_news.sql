-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 9 朁E26 日 21:02
-- サーバのバージョン： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_academy`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `s_news`
--

CREATE TABLE IF NOT EXISTS `s_news` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `s_detail` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `s_outline` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `show_flg` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `s_index` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `open_date` datetime NOT NULL,
  `close_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `s_news`
--

INSERT INTO `s_news` (`s_id`, `s_title`, `s_detail`, `s_outline`, `author`, `show_flg`, `category`, `s_index`, `create_date`, `update_date`, `open_date`, `close_date`) VALUES
(1, 'マクラーレン・ホンダ「日本で速さの向上示したい」', '　マクラーレン・ホンダのレーシングディレクター、エリック・ブーリエとホンダF1プロジェクト新井康久総責任者は、今週末の日本GPはチームにとって厳しいレースになると予想されるが、ファンのために全力を尽くすと誓った。\r\n\r\n　今年マクラーレン・ホンダは新エンジン規則の下での初のシーズンを迎えたが、パフォーマンスと信頼性の改善に苦労しており、第13戦終了時点で2台合わせて入賞は4回、コンストラクターズ選手権9位と低迷している。\r\n\r\n　シンガポールでは結果はダブルリタイアだったものの、ペースは比較的よく、期待を感じさせた。しかし鈴鹿サーキットではコース特性の関係で苦労することになると、ドライバーをはじめとしたマクラーレン・ホンダのメンバーたちは認めている。\r\n', '　マクラーレン・ホンダのレーシングディレクター、エリック・ブーリエとホンダF1プロジェクト新井康久総責任者は、今週末の日本GPはチームにとって厳しいレースになると予想されるが、ファンのために全力を尽くすと誓った。', 'オートスポーツweb', 0, 1, 0, '2015-09-22 23:59:59', '2015-09-27 03:54:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'マクラーレン・ホンダ「日本で速さの向上示したい」', '　マクラーレン・ホンダのレーシングディレクター、エリック・ブーリエとホンダF1プロジェクト新井康久総責任者は、今週末の日本GPはチームにとって厳しいレースになると予想されるが、ファンのために全力を尽くすと誓った。\r\n\r\n　今年マクラーレン・ホンダは新エンジン規則の下での初のシーズンを迎えたが、パフォーマンスと信頼性の改善に苦労しており、第13戦終了時点で2台合わせて入賞は4回、コンストラクターズ選手権9位と低迷している。\r\n\r\n　シンガポールでは結果はダブルリタイアだったものの、ペースは比較的よく、期待を感じさせた。しかし鈴鹿サーキットではコース特性の関係で苦労することになると、ドライバーをはじめとしたマクラーレン・ホンダのメンバーたちは認めている。\r\n\r\n　それでもホンダのホームグランプリに集まるファンのため、速さの改善を示したいと、ブーリエは述べた。\r\n', 'aaaマクラーレン・ホンダのレーシングディレクター、エリック・ブーリエとホンダF1プロジェクト新井康久総責任者は、今週末の日本GPはチームにとって厳しいレースになると予想されるが、ファンのために全力を尽くすと誓った。', 'オートスポーツweb', 1, 1, 1, '2019-09-23 23:59:59', '2015-09-27 03:52:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'フォルクスワーゲン、WRCで3年連続の3冠を達成', 'フォルクスワーゲン 世界ラリー選手権（WRC）で3年連続のワールドチャンピオンを確定\r\n第10戦「ラリー・オーストラリア」でオジェ選手が今季7勝目\r\n\r\n　フォルクスワーゲンは、ラリー競技の最高峰「FIA 世界ラリー選手権（通称：WRC）」の2015年シーズン第10戦「ラリー・オーストラリア」に市販車をベースとした3台の「ポロ R WRC」で参戦し、フランス人のセバスチャン・オジェ選手が今季7度目となる優勝を果たしました。この結果、フォルクスワーゲン・モータースポーツは3年連続でWRCマニュファクチャラーズチャンピオンを確定し、名実ともにWRCのトップを走り続けています。また、オジェ選手も3年連続となるドライバーズチャンピオン、同じくジュリアン・イングラシア選手も3年連続コ・ドライバーズチャンピオンを決めました。\r\n', 'フォルクスワーゲン 世界ラリー選手権（WRC）で3年連続のワールドチャンピオンを確定\r\n第10戦「ラリー・オーストラリア」でオジェ選手が今季7勝目', 'フォルクスワーゲン プレ', 1, 5, 1, '2015-09-24 21:13:00', '2015-09-24 21:15:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'プジョー、ダカールへ向け改良した2008DKRを発表', '　プジョーは、2016年のダカールラリーに投入を予定しているプジョー2008DKR16を発表した。今年のダカールに投入した2008DKRから、ボディのワイド化、低重心化などが行われているほか、エンジンにも改良を施している。\r\n\r\n　1987年からダカール4連覇を達成し、“砂漠のライオン”の異名をとったプジョーは、今年1月に行われたダカールラリーに25年ぶりに復帰。バギータイプの後輪駆動車『2008DKR』を開発し、ダカールで5回の優勝経験を持つステファン・ペテランセルや2度のWRC王者カルロス・サインツ、2輪から転向したシリル・デプレという布陣で挑んだものの苦戦。優勝候補と言われながらも、最終的に総合11位で復帰戦を終えた。\r\n\r\n　2016年のダカールラリー挑戦にあたり、プジョーは2008DKRに大幅な改良を実施。ボディの全長と全幅を延長したほか、3リッターのツインターボディーゼルエンジンにも手を加え、パワーを向上させている。\r\n\r\n　また、砂丘や川底、岩場でも安定した走行が行えるよう前後のオーバーハングを短縮。加えてボンネットとルーフに装着されていたエアインテーク位置を変更し、空力性能を改善している。\r\n\r\n　サスペンションは新たに設計され、より幅広い路面コンディションに対応できるようにしたほか、ホイールやピレリタイヤと組み合わせた際の重量バランスも見直された。\r\n\r\n　プジョー・スポールでディレクターを務めるブルーノ・ファミンは、すでにモロッコでテストを実施していることを明かし、「マシンのあらゆる部分に手を加えた」とコメントしている。\r\n\r\n「マシンの様々なエリアに小さな改良をいくつも施した。結果として、マシン全体に渡って改修が行われている状態だよ」\r\n\r\n「テストは順調に進んでいる。また、アップデートを施した2008DKRで出場したチャイナ・シルクロード・ラリーではワン・ツーフィニッシュを達成することができた。我々は正しい方向に進んでいると確信できる結果だったよ」\r\n\r\n　マシンの順調な開発ぶりをアピールしたファミンだが、2016年のダカールラリーについては現実的な予想を述べている。\r\n\r\n「まだプログラムの折り返し地点にも到達していないんだ」とファミン。\r\n\r\n「プジョーのダカール参戦は3年計画で、我々の戦いは始まったばかりなんだ。もちろん、3年でダカールへの挑戦を辞める訳ではないよ」\r\n\r\n「2016', 'プジョーは、2016年のダカールラリーに投入を予定しているプジョー2008DKR16を発表した。今年のダカールに投入した2008DKRから、ボディのワイド化、低重心化などが行われているほか、エンジンにも改良を施している。', 'オートスポーツweb', 1, 7, 1, '2015-09-24 22:13:00', '2015-09-24 21:17:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'GT300：VivaCつちや、悲願のマザーシャシー初優勝', '　スーパーGT第6戦SUGOは20日、81周の決勝レースが行われ、GT300クラスは予選2番手からスタートしたVivaC 86 MCが大差をつけ優勝。参戦初年度のマザーシャシーに初勝利をもたらした。\r\n\r\n　予選日と同様、青空が広がるコンディションで迎えた決勝レース。毎戦恒例となりつつある地元県警協力のもとパレードラップが行われ、その後1周のフォーメーションラップでレースはスタートした。なお、公式予選に出走できなかったExcellence Porscheはフリー走行の結果を受け決勝への参加が認められている。また、昨日の練習走行でクラッシュしたマッハ車検 with いらこん 86c-westは決勝レースに参加することができなかった。\r\n\r\n　オープニングラップの1コーナーでは大きな混乱もなく、ポールシッターのARTA CR-Z GTを先頭に2番手VivaC 86 MC、3番手TOYOTA PRIUS apr GTの順で通過していく。トップのARTA CR-Zは2周目にVivaC 86とのギャップを1.3秒まで拡大したものの、翌周には0.8秒まで詰め寄られる。その後、6周目までは順位を守ったが、7周目にVivaC 86にオーバーテイクされ2番手に後退。その後、ARTA CR-Zは後方から迫ってきたTOYOTA PRIUSにもオーバーテイクを許し、3番手まで順位を落としている。また、9周目にはRUNUP Group&DOES GT-Rが2コーナーの立ち上がりで体勢を崩し、3コーナーでクラッシュ。右フロントを大きく破損してしまったためリタイアしている。\r\n', '　スーパーGT第6戦SUGOは20日、81周の決勝レースが行われ、GT300クラスは予選2番手からスタートしたVivaC 86 MCが大差をつけ優勝。参戦初年度のマザーシャシーに初勝利をもたらした。\r\n', 'オートスポーツweb', 1, 2, 1, '2015-09-24 21:17:30', '2015-09-24 21:20:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'WTCC：ホンダ、3年連続で母国V。性能向上を証明', 'Honda Civic WTCCが2戦連続両レースで表彰台を獲得\r\nレース2ではモンテイロ選手が優勝し、Honda Civic WTCCは日本ラウンドで3年連続優勝を飾る\r\n\r\n2015年9月13日（日）・決勝\r\n会場：日本 ツインリンクもてぎ（4.801km）\r\n天候：曇り一時雨　気温：26℃／コースコンディション：ドライ\r\n\r\n世界ツーリングカー選手権（WTCC）第9戦日本ラウンドは決勝レースを迎えました。ツインリンクもてぎは朝から厚い雲に覆われ、レースが開始される午後2時には、時折り細かい雨が落ちてくるコンディションとなりました。\r\n\r\nレース1は午後2時15分、小雨が上がったドライコンディションでスタートが切られました。ポールポジションからスタートした「ゼングー・モータースポーツ（Zengő Motorsport）」のノルベルト・ミケリス選手は、スタート直後にトップを奪われ2番手となります。「カストロール・ホンダ・ワールド・ツーリングカー・チーム（Castrol Honda World Touring Car Team）」のガブリエーレ・タルクィーニ選手は6番手から、ティアゴ・モンテイロ選手はエンジン交換のため最後尾となる17番手からのスタートでしたが、ともに好スタートを切りポジションアップに成功。タルクィーニ選手は、オープニングラップで3番手に上昇し、2番手のミケリス選手の背後からトップ争いに加わりました。モンテイロ選手も周回ごとに順位を上げ、5周目には入賞圏内となる10番手となりました。\r\n\r\nミケリス選手は、序盤こそトップに1秒差以内まで迫りました。しかし、後半タイヤが苦しくなり2位でフィニッシュし、追撃及ばず。タルクィーニ選手は3番手を守りきり、Honda Civic WTCCが2-3フィニッシュを達成しました。モンテイロ選手は9位となり、ポイント獲得を果たしています。\r\n\r\nレース1終了の頃から雨が降り始めましたが、レース2がスタートする午後3時25分には、雨は上がり路面もほぼドライコンディションに回復しました。\r\n\r\nリバースグリッドにより、モンテイロ選手が3番手、タルクィーニ選手が5番手、ミケリス選手が10番手からのスタートです。好スタートを決めたモンテイロ選手は、第1コーナーまでにトップの座を奪いました。その後も快調なペースで2番手以下を引き離します。序盤から中盤にかけて、2番手より1秒近', 'Honda Civic WTCCが2戦連続両レースで表彰台を獲得\r\nレース2ではモンテイロ選手が優勝し、Honda Civic WTCCは日本ラウンドで3年連続優勝を飾る\r\n', 'Honda プレスリリー', 1, 3, 1, '2015-09-24 11:21:17', '2015-09-24 21:22:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'ホンダ「声援に支えられ最善尽くしたがQ3に届かず」／日本GP土曜', '　2015年F1日本GPの土曜予選で、マクラーレン・ホンダのフェルナンド・アロンソは14位、ジェンソン・バトンは16位だった。\r\n\r\n■マクラーレン・ホンダ\r\nホンダF1プロジェクト総責任者　新井康久\r\n　我々、つまりふたりのドライバーとチームは今日、ホームグランプリで最善を尽くしました。\r\n\r\n　常に日本のファンから温かい声援をいただき、心から嬉しく思いました。FP3の短い時間内でパワーユニットとシャシーのデータセッティングを昨日の状態から大幅に改善しました。しかし上位勢との差が大きいことは承知しており、今後も開発スピードを加速し続けていく必要があります。\r\n\r\n　予選Q1で、ジェンソンの2回目のフライングラップがイエローフラッグに邪魔されたのは残念でした。彼はセッションの自己ベストタイムを更新しつつありましたが、不運にも十分なタイムを出すことができませんでした。\r\n\r\n　フェルナンドは期待どおりQ2でラップタイムを更新しましたが、それでもQ3には届きませんでした。\r\n\r\n　明日の決勝では、母国のファンからの熱狂的な応援を力に変えて、より一層決意を固めて挑戦していきます。 ', '　2015年F1日本GPの土曜予選で、マクラーレン・ホンダのフェルナンド・アロンソは14位、ジェンソン・バトンは16位だった。', 'オートスポーツweb', 1, 1, 1, '2015-09-26 19:05:05', '2015-09-27 02:06:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '鈴鹿前夜祭：キミ×琢磨、セブは可夢偉にエール', '　日本GPの予選後に行われた毎年恒例の前夜祭で、鈴木亜久里、佐藤琢磨というゲストに加え、今年はフェラーリのセバスチャン･ベッテル、キミ･ライコネンが参加。フェラーリのグッズを纏った多くのファンの声援の中、今までにないユニークな組み合わせによるトークが行われた。\r\n\r\n　夜18時30分から登場予定だったフェラーリの2人だが、ベッテルがひとり10分早く登壇するという、ファンには嬉しいサプライズも。そこではベッテルと鈴木亜久里という、なかなか珍しい組み合わせの会話で会場が盛り上がった。\r\n\r\n亜久里「俺もね、フェラーリに憧れていたんだけど、実際にフェラーリに入ってどんな気分?」\r\n\r\nベッテル「やっぱり、フェラーリはどんなドライバーにとっても憧れのチーム。夢のような気持だったし、ずっと憧れていたんだ」\r\n\r\n　続いて改めて鈴鹿の印象などを話したベッテル、最後に、日本のF1ファン、小林可夢偉に向けたメッセージを送った。\r\n\r\n「今、F1に日本人ドライバーがいないのは本当に残念。可夢偉のように高いポテンシャルを持ったドライバー、彼のようなドライバーがF1に乗れるようにならないといけないんだ」とベッテル。2006年のユーロF3でベッテルと可夢偉はチームメイトだったこともあり、ベッテルは可夢偉の速さを熟知している。可夢偉がF1に戻ってきてくれることを、ベッテルも待ち望んでいるようだった。\r\n\r\n　ベッテルに遅れてライコネンが登壇。MCを務めるピエール北川さんの「明日はドラマチックなレースを期待したいですね」というライコネンへのノリの良い質問にも、「ドラマチックなレースは難しいけど、良いスタートを切って、良いレースをしたいね」と、相変わらずのクールな返答。それでもファンの歓声に手を挙げて応え、「たくさんのファンに来てもらってうれしい。明日に向けて頑張るよ」と、会場を沸かせた。\r\n', '日本GPの予選後に行われた毎年恒例の前夜祭で、鈴木亜久里、佐藤琢磨というゲストに加え、今年はフェラーリのセバスチャン･ベッテル、キミ･ライコネンが参加。フェラーリのグッズを纏った多くのファンの声援の中、今までにないユニークな組み合わせによるトークが行われた', 'オートスポーツweb', 1, 1, 1, '2015-09-26 20:54:47', '2015-09-27 03:56:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'WTCC：ロペス、60kgのウエイトを積みレース1制す', '世界ツーリングカー選手権（WTCC）', '世界ツーリングカー選手権（WTCC）', 'プジョー･シトロエン･ジ', 1, 3, 1, '2015-09-14 20:57:49', '2015-09-27 03:58:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'リオ五輪とUEFA欧州選手権がDTMカレンダーに影響', '　2016年のドイツ・ツーリングカー選手権（DTM）は、ブラジル・リオで行われるオリンピックと6月から7月にフランスで開催されるサッカー・UEFA欧州選手権（EURO）にバッティングしないスケジュールを選択するため、今季とはラウンド数が変動するかもしれない。\r\n\r\n　今季は9ラウンド18戦で開催されているDTM。2016年は9か10のレースラウンドを望んでいるが、テレビ契約がDTMのカレンダー決定に影響しているようだ。\r\n\r\n　現在シリーズの国内放送をしているドイツ公共放送連盟（ARD）との契約は2015年までで、オリンピックとユーロの放送権利を持っている第2ドイツテレビ（ZDF）と来季からの放送契約を結んでいる。\r\n\r\n　ヨーロッパのナショナルチームによるサッカーの大陸選手権大会であるEUROは4年に1度開催され、今年はフランスで6月10日から7月10まで行われる。またリオで8月5日から21日までオリンピックが開催される。TV放送契約を考慮するとこの期間にレース開催は難しい。\r\n\r\n　また、DTMはアウディが出場するル・マン24時間やニュルブルクリンク24時間、スパ24時間と同じ週にレースを行うことはせず、F1とのバッティングも避けることを望んでいる。\r\n\r\n　しかし、例年のように5月の上旬にスタートし10月中旬の終了を目指すとなると、スパ24時間の日程がまだ発表されていないが、5月7～8日、5月20～21日、6月4～5日、7月23～24日、9月10～11日、10月1～2日、10月15～16日の7週末しか残っていないようだ。\r\n\r\n　ホッケンハイムは開幕戦と最終戦での開催を続ける予定なので5月7～8日と10月15～16日になると予想される。7月のEURO決勝が行われる週末や8月中の開催できるなら10ラウンドの可能性もあるが、最悪の場合ラウンド数の減少もありえるだろう', '2016年のドイツ・ツーリングカー選手権（DTM）は、ブラジル・リオで行われるオリンピックと6月から7月にフランスで開催されるサッカー・UEFA欧州選手権（EURO）にバッティングしないスケジュールを選択するため、今季とはラウンド数が変動するかもしれない。', 'オートスポーツweb ', 1, 7, 1, '2015-09-11 20:59:04', '2015-09-27 03:59:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'SUBARU BRZ GT300、SGT第6戦SUGOは5位入賞', '2015.09.20 - SUPER GT第6戦　菅生ラウンド・決勝レポート\r\nSUBARU BRZ GT300は5位入賞\r\n\r\n9月20日(日)、宮城県のスポーツランドSUGOでSUPER GT第6戦「SUGO GT 300km RACE」の決勝レースが行われ、予選7位からスタートしたSUBARU BRZ GT300(井口卓人/山内英輝)は5位入賞を果たしました。\r\n\r\nセーフティカー導入時の思わぬタイムロス\r\n\r\n決勝レースの25周目にGT500車両の1台がクラッシュし、バックストレート上で停止するアクシデントが発生します。この影響でセーフティカーが導入されると、規則に従ってピットレーンは一時的に閉鎖されました。そして30周目にピットレーンがオープンになると、一部の例外を除いて全車がピットストップを実施。このためピットレーンは大混雑になったほか、ふたたびセーフティカーがメインストレートにやってきたところでピットロード出口は閉鎖され、これにより一部の車両は足止めされました。この影響でSUBARU BRZ GT300もコースへの復帰が30秒ほど遅れたうえ、直後にセーフティカーがコースから退去して競技が再開されたため、トップから大きく遅れをとる格好となりました。この時の状況を、スタートドライバーを務めた井口は次のように振り返っています。「セーフティカーの時にピットインするタイミングはものすごくいい判断でしたが、混雑に巻き込まれてしまい、思うようなポジションでコースインできなかったのは残念でした」\r\n\r\nこの段階では一部にまだピットストップを行っていない車両があったため、SUBARU BRZ GT300は一時13番手まで後退しました。しかし、ピットストップでタイヤをそれまでのミディアムコンパウンドからハードコンパウンドに履き替え、安定したラップタイムを刻めるようになると、後半を受け持った山内が徐々にポジションを上げていきます。「ハンドリングのバランスとしてはオーバーステアが強い状態でしたが、それでもペースはよかったので追い上げていくことができました」と、山内は自分のスティントについてそう説明しました。そしてレース終盤の60周目、山内はエンジンパワーの点で有利なFIA GT3車両を最終コーナーで豪快にパス。ここで5番手に浮上すると、そのポジションを守ってチェッカーフラッグを受けました。\r\n\r\nより完成されたセットアップ', '2015.09.20 - SUPER GT第6戦　菅生ラウンド・決勝レポート\r\nSUBARU BRZ GT300は5位入賞\r\n\r\n9月20日(日)、宮城県のスポーツランドSUGOでSUPER GT第6戦「SUGO GT 300km RACE」の決勝レースが', 'SUBARU プレスリリ', 1, 0, 1, '2015-09-22 21:00:18', '2015-09-27 04:00:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_news`
--
ALTER TABLE `s_news`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_news`
--
ALTER TABLE `s_news`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
