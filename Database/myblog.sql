-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-20 11:34:27
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `mb_article`
--

CREATE TABLE `mb_article` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `context` text NOT NULL,
  `create_time` datetime NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `mb_article`
--

INSERT INTO `mb_article` (`id`, `title`, `context`, `create_time`, `cid`) VALUES
(1, '早安心语：世界没有那么好，也并不是那么糟', '<p><span class="wp_keywordlink" style="text-align: justify;"><a href="http://yispace.net/category/zaoanxinyu" title="早安心语">早安心语</a></span><span style="text-align: justify;">：世界没有那么好，也并不是那么糟，我们要做的，只不过是在环境允许的情况下，善意地对所有人。在环境不允许的情况下，保护好自己真正在意的人。</span></p><p style="text-align: justify;">1、我没有很刻意的去想念你，因为我知道，遇到了就应该感恩，路过了就需要释怀。我只是在很多很多的小瞬间，想起你。比如一部电影，一首歌，一句歌词，一条马路和无数个闭上眼睛的瞬间。</p><p style="text-align: justify;">2、什么排山倒海的力量也止不住两个相爱过的人的互助。我觉得我爱了你，从此以后，不管什么时候我都不能对你无动于衷。</p><p style="text-align: justify;">3、这么多年，我一直在学习一件事情，就是不回头，只为自己没有做过的事情后悔，不为自己做过的事情后悔。人生每一步行来，都是需要付出代价的。我得到了我想要的一些，失去了我不想失去的一些。可这世上的芸芸众生，谁又不是这样呢。</p><p style="text-align: justify;">4、时间真好！验证了人心，见证了人性，懂得了真的，明白了假的，没有解不开的难题，只有解不开的心绪。没有过不去的经历，只有走不出的自己。</p><p style="text-align: justify;">5、最合适的两个人，不是在一开始就一拍即合，而是愿意在未来漫长的岁月里，为了彼此而变成更好的两个人。世界上原本就不存在天造地设的一双，只有努力适合彼此的对方。</p><p style="text-align: justify;">6、愿你一生清澈明朗，所求遂所愿，做你愿做之事，爱你愿爱之人，愿我们都继续像月亮一样，偶尔安慰一些寂寞的人。</p><p style="text-align: justify;">7、过自己想要的生活，上帝会让你付出代价。照顾好自己，爱自己才能爱好别人。如果你压抑，痛苦，忧伤，不自由，又怎么可能在心里腾出温暖的房间，让重要的人住在里面。如果一颗心千疮百孔，住在里面的人就会被雨水打湿。</p><p style="text-align: justify;">8、各人有各人理想的乐园，有自己所乐于安享的世界，朝自己所乐于追求的方向去追求，就是你一生的道路，不必抱怨环境，也无须艳羡他人。</p><p style="text-align: justify;">9、别人在熬夜的时候，你在睡觉，别人已经起床，你还在挣扎再多睡几分钟，你有很多想法，但脑袋热了就过了，别人却一件事坚持到底。你连一本书都要看很久，该工作的时候就刷起手机，肯定也不能早晨起来背单词，晚上加班到深夜。很多时候不是你平凡，碌碌无为，而是你没有别人付出得多。</p><p style="text-align: justify;">10、越矫情越痛苦，越坦然越快乐。</p><p style="text-align: justify;">11、人一定要受过伤才会沉默专注，无论是心灵或肉体上的创伤，对成长都有益处。</p><p style="text-align: justify;">12、一个人越懒，明天要做的事越多。</p><p style="text-align: justify;">13、你该懂事了。不能因为屁大点小事就和亲人朋友恋人冷战，无论错在谁，你都应该主动摆出和解的态度。不要再高喊‘我是这样的人’‘我就这性格改不了’狭隘和坏脾气不能被如此包装并泛滥。应该相信，你能成为那个主动化解冰封的人，而你的举动则会让自己和对方从尴尬中解脱，并得到温暖。</p><p style="text-align: justify;">14、知人不必言尽，言尽则无友。责人不必苛尽，苛尽则众远。敬人不必卑尽，卑尽则少骨。</p><p style="text-align: justify;">15、吃醋是最明显的告白，等待是最愚蠢的告白，陪伴是最长情的告白。</p><p style="text-align: justify;">16、我们有时总把后果看得过于严重，最后难为了自己。就像小学时考了不及格，站在家门口不敢敲门。其实门那边是热气腾腾的饭菜和妈妈的一句“没关系啊，努力了就很好”。回过头来看，那些曾经让自己寝食难安的事，大多败给了想象。</p><p style="text-align: justify;">17、要么有美貌，要么有智慧，如果两者你都不占绝对优势，麻烦你人好点。</p><p style="text-align: justify;">18、如果说去旅行去冒险是为了遇见不曾见过的美妙景色，经历不曾想过的充实人生，那么与你的相遇相守就是我能想到的最美丽的冒险。</p><p style="text-align: justify;">19、奈何一个人随着年龄增长，梦想便不复轻盈；他开始用双手掂量生活，更看重果实而非花朵。</p><p style="text-align: justify;">20、比起人我还是喜欢手机，起码手机会告诉你电量不足，但人总是一声不吭的走掉。你不爱就算了，何必借口万千，还要那么稀烂。</p><p style="text-align: justify;">21、在无数白昼来临之前，总希望眨着眼一晚又一晚，和你扛住流年。</p><p style="text-align: justify;">22、你可以随时转身，但是不能一直后退。</p><p style="text-align: justify;">23、这个世界并不完美，甚至有点残酷。你无法决定下一段旅途遇见的是好事还是坏事，可你能决定面对它们的态度。你看这个世界的角度，决定了这个世界给你的温度。</p><p style="text-align: justify;">24、到了现在这个年纪，谁都不想再取悦了，跟谁在一起舒服就和谁在一起，包括朋友也是，累了就躲远一点。宁可孤独，也不违心，宁可抱憾，也不将就。</p><p style="text-align: justify;">25、那些伤害过你的人，没什么值得感谢的，能扛过去是你当初了不起，抗不过去你现在只会更卑微。要感激的只是你自己，还有一直陪在你身边的人，多谢自己当初熬了过去，多谢身边的人一直支持你爱着你。</p><p style="text-align: justify;">26、朋友不一定会止于距离，但一定会止于差距。</p><p style="text-align: justify;">27、心累，就是常常徘徊在坚持和放弃之间，举棋不定。烦恼，就是记性太好，该记的，不该记的都会留在心里。</p><p style="text-align: justify;">28、单身不是你邋遢活着的借口。当你的世界只剩下自己一个人，更要好好吃饭、睡觉、娱乐……你得先照顾好自己，才有力气熬到对的人出现，并且，用身上的光芒吸引他从此留下。</p><p style="text-align: justify;">29、有时候，认真做一件事或爱一个人，往往被感动的却只有自己。</p><p style="text-align: justify;">30、很多人内心住着两个自己，两个完全不同的人。一个感性到泪水说流就流，一个理智偏执到近乎冷酷无情。所以上一秒情绪泛滥的自己总会在下一秒被自己嘲讽，批评。</p><p style="text-align: justify;">31、我们有时总把后果看得过于严重，最后难为了自己。就像小学时考了不及格，站在家门口不敢敲门。其实门那边是热气腾腾的饭菜和妈妈的一句’没关系啊，努力了就很好。’回过头来看，那些曾经让自己寝食难安的事，大多败给了想象。</p><p style="text-align: justify;">32、人生就是：定性，知事，选梦，遇人，择城，终老。</p><p style="text-align: justify;">33、让女人失望的不是你没有钱，而是在你身上看不到希望；永远不要低估一个姑娘和你同甘共苦的决心，只要你拿真心来换。</p><p style="text-align: justify;">34、保持乐观和积极的心态，任何事情都不做负能量的估判，和正能量的人相伴，你就会发现不一样的风景。</p><p style="text-align: justify;">35、当你可以直面自己身体里与生俱来的笨拙与孤独，你便能够彻底谅解过去的自己。大多数人都像我们这样活着，虽不聪明，但诚恳；虽会犯错，但坦然。</p><p style="text-align: justify;">36、没有人有耐心听你讲完自己的故事，因为每个人都有自己的话要说；没有人喜欢听你抱怨生活，因为每个人都有自己的苦痛；世人多半寂寞，这世界愿意倾听，习惯沉默的人，难得几个。我再也不想对别人提起自己的过往，那些挣扎在梦魇中的寂寞，荒芜，还是交给时间，慢慢淡漠。</p><p style="text-align: justify;">37、在路上，迎风奔跑，回顾过去、想起人生中无数次告别的时候，风会吹掉所有的坏，裸露出所有的好。</p><p style="text-align: justify;">38、你还年轻，还不懂得内心的记忆会把不好的东西抹掉，而把美好的东西更加美化。正是因为这样功能，我们才对过去记忆犹新。</p><p style="text-align: justify;">39、世界没有那么好，也并不是那么糟，我们要做的，只不过是在环境允许的情况下，善意地对所有人。在环境不允许的情况下，保护好自己真正在意的人。</p><p style="text-align: justify;">40、相遇靠缘分，相守靠人心。</p>  \n			', '2017-01-20 18:33:44', 1);

-- --------------------------------------------------------

--
-- 表的结构 `mb_column`
--

CREATE TABLE `mb_column` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `mb_column`
--

INSERT INTO `mb_column` (`id`, `name`) VALUES
(1, '人生哲理'),
(2, '励志文章'),
(3, '情感美文'),
(4, '经典美文');

-- --------------------------------------------------------

--
-- 表的结构 `mb_manager`
--

CREATE TABLE `mb_manager` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pwd` char(32) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mb_manager`
--

INSERT INTO `mb_manager` (`id`, `user`, `pwd`, `name`) VALUES
(1, 'admin', '670b14728ad9902aecba32e22fa4f6bd', '管理员');

-- --------------------------------------------------------

--
-- 表的结构 `mb_user`
--

CREATE TABLE `mb_user` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pwd` char(32) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mb_article`
--
ALTER TABLE `mb_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mb_column`
--
ALTER TABLE `mb_column`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mb_manager`
--
ALTER TABLE `mb_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mb_user`
--
ALTER TABLE `mb_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `mb_article`
--
ALTER TABLE `mb_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `mb_column`
--
ALTER TABLE `mb_column`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `mb_manager`
--
ALTER TABLE `mb_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `mb_user`
--
ALTER TABLE `mb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
