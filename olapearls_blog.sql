-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 05:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olapearls_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_posts`
--

CREATE TABLE `banner_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` int(10) UNSIGNED NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_posts`
--

INSERT INTO `banner_posts` (`id`, `title`, `status`) VALUES
(1, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `tags`, `content`, `photo`, `posted`, `date`, `author`, `category`, `views`) VALUES
(2, 'ON PURPOSE!', 'Inspiration', '<p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">There have been different details and definition given to the word PURPOSE. However, as Christians, you start your journey to destiny the day you discover purpose because, your destiny is your destination in Christ. Purpose in itself is one way or the other attached to the gospel. You may say \"my purpose is to change the statuesque in the music world or to change the narrative in politics\". Whatsoever your purpose is, it is so that God can be glorified because that is the ultimate reason we were created -</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">&nbsp;</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">Isa</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">iah&nbsp;</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">43:7. The reason why Sade\'s purpose is in the fashion world and Segun\'s purpose is in the finance world and Kate\'s purpose is in the media world is so that God will be glorified in every aspect of life which will bring into reality the big picture God is painting. </span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">The totality of God\'s plan is the combination of the purpose of every child of God. The total plan of God is like a puzzle that has been split into smaller portions. Every piece is important and that makes you very important because you are a carrier of a piece. The complete plan of God can only be expressed when every piece is right in place. Amazingly, every piece of a puzzle is one way or the other connected to another piece therefore, it is important that every piece is in the right place and is given expression. You are still alive because God has an expression He wants to give to the world through your life. The question is, \" Are you yielding? Are you a missing piece?\"</span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">As humans, we are often found in one of these three states:</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"></p><ol><li><span style=\"font-family: Calibri; font-size: 11pt;\">You haven\'t discovered the plan and purpose of God for your life like Saul.</span></li><li><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;You have discovered God\'s plan and purpose for your life but, you\'re running like Jonah.<br></span></li><li><span style=\"font-family: Calibri; font-size: 11pt;\">You have discovered His plan and purpose for your life and you are walking in it like Jesus.</span></li></ol><p></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">If you are like Saul, you\'d be doing yourself the favour of repenting and going back to the father. You don\'t necessarily have to be persecuting the Christians before you can be a Saul. If Saul had an understanding of God, he\'d have yielded earlier. He was very important in the big picture God was painting at that time. Would you yield yourself willingly or rather have God get you the hard way? </span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">&nbsp;If you\'re like Jonah, I bet you won\'t want to be swallowed up by a Fish. Jonah was as well needed to convey a message to the people of Nineveh- the message of salvation. Just obey and do not question God. </span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">If you are like Jesus, you\'re walking in purpose, congratulations! It is good. Keep partnering with the power of the Holy Spirit in you. The world awaits your manifestation. Do not forget, Jesus is a big piece in the puzzle.</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">You have been created to give answers to the questions the world is asking. The impact of your life is measured on how much of Jesus you express. The kind of life Jesus lived, is the life you are called to live because the life you now live is the life of Christ. This is on purpose!</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">CALL TO ACTION: Study the Life of Jesus and live your life on purpose.</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\">FACT: Your field of practice may not necessarily have to do with your purpose. Jesus was a carpenter. Also, your field of study/ practice may be pointing you to your purpose. Peter was a fisherman- fisher of fishes turned fisher of men.</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:11.0000pt;\"><o:p></o:p></span></p>', '07258000_1596981837.jpg', 'publish', '2020-08-09', 'admin', '10', 2),
(3, 'SELF MANAGEMENT', 'MOTIVATION', '<p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">Have you ever planned your day the night before or maybe very early the same day? Did you follow the plan? Have you been able to complete the task for a day? I bet I can give an answer to that. But, as for me, the answer used to be \'no\' until I stumbled on one of Peter Drucker\'s words. He said \"You cannot manage time; you can only manage yourself.\"</span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">We live in a world of people with great ideas, plans, proposals, goals etc. But in actual sense, they don\'t execute all of these because there is never enough time. The fact is that you cannot save time; you can only spend it in a different way. There is no area in your life in which self-discipline is more important than in the way you spend your time. Time management is a basic discipline that largely establishes the quality of your life. In other words, time management is life management.</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">Life management is the conscious ability to choose the order of happenings in your life. It is accessing the true value in everything you do. It is the determination to always do the important things first before others - putting into perspective your priorities. You can tell how much value something has to you by the amount of time you invest in it. </span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">There are so many things you involve yourself in and you spend so much time on yet they are not as important as the things you say \'you\'ll do later\'. There are things that make little or no difference if you do not do them at all. There are things with little or no consequences if left undone. There are also things you can leave for other people to do. &nbsp;</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">The major importance of time management is that it improves the quality of your life. Also, it makes you a more organized person. You are able to achieve more in less time and the most important things in your life are never left untouched. However, the most powerful word in our time management is \"no\".</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">You may probably be overwhelmed by a lot of tasks. You need to ask yourself questions like, \"What am I doing that isn\'t so important?\" What things can I stop doing in order to focus on more important things? Is this the best way to spend my time? Allocate your time to people and things who deserve it and not those who demand it. The law of efficiency says \"There is never enough time to do everything, but there is always enough time to do the most important things.\"</span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">Brian Tracy said in one of his books, \"You require tremendous discipline to set priorities and then stick to those priorities. You require the continuous exertion of principle and willpower to overcome the procrastination that holds most people back. However, the more you discipline yourself to use your time well, the happier you will feel and the better will be the quality of your life in every area.\"</span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\">Ten to twelve minutes of planning your day will save at least two hours of wasted time and effort throughout the day. Quit procrastination because, whatever you do repeatedly eventually becomes a habit. Plan your day ahead by arranging your task according to priority. Start with the most important and give it your 100% concentration.</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;font-size:11.0000pt;\"><o:p></o:p></span></p>', '63894300_1597310427.jpg', 'publish', '2020-08-10', 'admin', '11', 12),
(5, 'WHAT WE MISSED THE MOST !', 'FUN', '<div>Hello fam!</div><div>You\'re welcome to the very first groove.</div><div>Today, we\'ll be talking about what we missed the most about church services during the lock-down. Make sure you also participate by telling us what you missed in the comment section.</div><div>Visit our social media handles at the bottom of this page to watch the video.</div><div><br></div><div>Do not forget to hit the subscription button, like the video and share.</div><div><br></div><div>Jesus is our inspiration!</div><div>Enjoy!</div>', '92556300_1597501121.jpeg', 'publish', '2020-08-15', 'admin', '12', 1),
(6, 'PAY ATTENTION.', 'INSPIRATIONAL', '<p class=\"MsoNormal\"><i>&nbsp;\"Hear, you deaf;<o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>And look, you blind, that you may see.<o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>Who is blind but My servant, <o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>Or deaf as My messenger whom I send?<o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>Who is blind as he who is perfect,<o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>And blind as the Lord\'s servant?<o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>Seeing many things, but you do not observe; <o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\"><i>Opening the ears, but he does not hear.\"<o:p></o:p></i></p>\r\n\r\n<p class=\"MsoNormal\">Isaiah.42:18-20<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">Have you ever paid an extra price\r\njust because of your poor attention to detail? Most often than not, they are\r\nalways little details. <o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Some years ago, I was in the final\r\nclass in secondary school. It was the usual long holiday and I was attending\r\nthe summer classes. One beautiful morning, I walked hurriedly along the road\r\npassing some shops. As I was approaching the bus stop, I saw a man standing in\r\nfront of a shop - He was standing with his arms akimbo staring at nothing.\r\n\"Good Morning Sir!\", I said as I passed before him. He didn\'t\r\nrespond. I greeted him again this time with a louder voice. \"Good Morning\r\nSir!\" There was still no response.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">I began to complain to my brother\r\nwho was walking beside me. \"Where is the man?\", he asked. I turned\r\nback and pointed at the man. To my surprise, my brother started laughing. I\r\nbecame angry wondering what exactly was funny. \"What is funny?\" I\r\nasked with an angry voice. \"That is a mannequin\" he managed to say as\r\nhe laughed harder. I then stopped and looked sternly, paying attention to every\r\ndetail of his appearance. He had been standing on the same spot and staring\r\ninto God knows what. He had no hair on his head and his fingers did not look\r\nreal. His body looked like that of the doll I played with when I was younger.\r\nHe also had no shoes on. I was so pained. How did I make such a huge mistake?\r\nIt was an error on my part and not the mannequin\'s fault. \"How did I not\r\nsee all of these while approaching him?\" I thought to myself. This is a day\r\nI will never forget. I simply did not pay attention.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">To pay attention is to give your\r\nmental focus to something. To observe keenly - to look properly. Attention is\r\npaid to discern and to differentiate. <o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">As Christians, it is very\r\nimportant for us to pay attention to everything that goes on within us and\r\naround us. Sometimes, the devil puts before us empty threats and situations that\r\nare not real in themselves, and other times, he appears as an angel of light\r\nhereby deceiving those who do not pay attention.&nbsp; He whispers lies into our ears and many times\r\nwe believe them simply because we\'ve not paid enough attention to God\'s word.\r\nWe forget the realities of God\'s word and opt for the lies of the devil.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">There are details in the written\r\nword of God and in the spoken word of God. It is therefore important for us to\r\npay attention in the place of prayer, study and even our daily living. The\r\ndevil is looking for whom to devour.&nbsp; It\r\nis possible to hear your voice or the voice of the devil and take it for the\r\nvoice of God. You\'d only be able to identify God\'s voice if you constantly pay\r\nattention. Pay attention! You can\'t be in haste and pay attention. We have the Spirit\r\nof truth available to us who will guide us, but to obey Him, you need to pay\r\nattention.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">&nbsp;<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>', '38370600_1597594530.jpg', 'publish', '2020-08-16', 'olapearl', '10', 1),
(7, 'PERSISTENCE', 'MOTIVATION', '<p class=\"MsoNormal\">Persistence is self- discipline in action. Your ability to\r\npersist in the face of all setbacks and temporary failures is essential to\r\nsuccess in life.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Napoleon Hill said, \"Persistence is to the character of man\r\nas carbon is to steel.\"&nbsp; The primary reason for success is persistence, and,\r\nlikewise, the primary reason for failure is lack of persistence, quitting too\r\nsoon.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">There is a direct link between self-discipline and self-\r\nesteem. Each time you discipline yourself to do what you should do, when you\r\nshould do it, whether you feel like it or not, your self-esteem increases. This\r\nwhy there is direct relationship between self-esteem and persistence. Each time\r\nyou persist and force yourself to continue on, even when you feel like\r\nquitting, your self-esteem goes up.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Each act of self-discipline strengthens every other act of\r\nself- discipline. Every act of persistence strengthens every other act of\r\npersistence. When you discipline yourself to persist, over and over, you like\r\nand respect yourself more and more. You become stronger and more confident.\r\nEventually, you become unstoppable.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\"><o:p>&nbsp;</o:p></p>\r\n\r\n<p class=\"MsoNormal\">Brian Tracy<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">The Power of Self - Discipline<o:p></o:p></p>', '50355900_1597654441.jpg', 'publish', '2020-08-17', 'olapearl', '11', 1),
(8, 'SKIN TALK', 'FUN', 'Hello fam!<div>How was your week?</div><div>It\'s another weekend and we\'re excited.</div><div>This weekend, we\'ll be discussing the skin. Skin care is not for the female gender alone.</div><div>Know your skin type, take care of it and glow.</div><div>To check out the video, visit our YouTube link below.</div><div><br></div><div>Do not forget to like, share, comment and subscribe. Have a blessed weekend!</div>', '30155400_1598106854.jpg', 'publish', '2020-08-22', 'olapearl', '12', 1),
(9, 'THINK ON THESE THINGS!', 'INSPIRATIONAL', '<p class=\"MsoNormal\">Dear believer, I know it hasn\'t been easy. I know the\r\nhustling and bustling of this world is nothing to write home about. I know\r\nthoughts of what to eat, drink and wear, how to survive without stumbling and\r\nhow to keep our identity is overwhelming. I can relate with the fact that\r\nliving according to the perfect will of our father in this perverse world is not\r\neasy. I understand that sometimes, we find it easy to call home, study our\r\nmanual - the bible and live according to the principles of our kingdom. But other\r\ntimes, when we get buffeted by the challenges, cares and anguish of this world,\r\nwe forget to do these things. I know it is easy for us to remember our father\r\nwhen we see His provisions and it gets difficult when there are no provisions.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">I can honestly relate with the fact that, there are times\r\nwhen it looks like our father doesn\'t care about us and has forgotten us. We\r\neven call Him sometimes and He gives us silence as response. You\'d remember\r\nsometimes, the life of the unbelievers seems better than ours. It even gets\r\nannoying when we boast about the abilities of our father but get disappointed.\r\nWe look like fools when we follow the principles of our kingdom and the wide\r\nway seem better than the narrow way. Sometimes, you just want to give up.<o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">I know all these things and I want to remind you of some things.\r\nI hope you haven\'t forgotten what Christ told us -&nbsp;<b>\"And everything I\'ve taught\r\nyou is so that the peace which is in Me will be in you and will give you great\r\nconfidence as you rest in me. For in this unbelieving world you will experience\r\ntrouble and sorrows, but you must be courageous, for I have conquered the\r\nworld!\" John. 16:33 - TPT</b><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Jesus knows exactly what you\'re going through right now. Oh! You didn\'t know? Let me show you. <b>\"For we do not have a high priest who is\r\nunable to sympathize with our weaknesses, but we have one who has been tempted\r\nin every way, just as we are&nbsp; - yet was without sin. Let us then approach the\r\nthrone of grace with confidence, so that we may receive mercy and find grace to\r\nhelp us in our time of need.\" Hebrews.4:15-16 - NIV</b><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">All you really have to do is to fix your eyes, mind and gaze\r\non Jesus. <b>\"As for us, we have all of these great witnesses who encircle us like\r\nclouds. So we must let go of every wound that has pierced us and the sin we so\r\neasily fall into. Then we will be able to run life\'s marathon race with passion\r\nand determination, for the path has been already marked out before us. We look\r\naway from the natural realm and we fasten our gaze onto Jesus who birthed faith\r\nwithin us and who leads us forward into faith\'s perfection. His example is\r\nthis: Because his heart was focused on the joy of knowing that you would be\r\nhis, he endured the agony of the cross and conquered its humiliation, and now\r\nsits exalted at the right hand of the throne of God!\" Hebrews. 12:1-2 - TPT</b><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\">Can you see that that our manual is perfect? It has the\r\nanswers to all your challenges and it reminds you of the promises of our\r\nfather.&nbsp; Set your mind on things above\r\nand you\'ll see how victorious your living will be. Remember, \"As He is, so are\r\nwe in this world\".&nbsp; Think on these\r\nthings!<o:p></o:p></p>', '65527500_1598202896.jpg', 'publish', '2020-08-23', 'olapearl', '10', 0),
(10, 'CONSISTENCY', 'Motivation', '<div>\"We are what we repeatedly do. Excellence, then, is not an act but a habit.\" -Aristotle.&nbsp;</div><div><br></div><div>It is often said that whatever you consistently do for 21 days becomes a habit. This shows that our habits are formed from the actions we take everyday. Actions, in the long run, lead to either success or failure, fulfilment or disappointment. Little wonder Anthony Robbins said: \"It\'s not what we do once in a while that shapes our lives. It\'s what we do consistently.\"</div><div><br></div><div>It is safe to say that everyone would like to improve and make tremendous changes in an area of their lives or the other. Many of us have this great goal, important target, we\'d love to hit. However, with time, we lose sight of it.</div><div><br></div><div>Maybe you\'ve been trying to begin your project, start your own business, or learn a trade. You set out with great enthusiasm, working and pressing towards your goal, but gradually, the excitement and enthusiasm fades. What might be keeping you from achieving your goal is lack of consistency.</div><div><br></div><div>The power and effect of consistency is profound, and sadly, it\'s underrated. Once you are able to start up with a habit that will help you achieve your goal, keep at it. You can never expect to succeed if you only work when you feel like it! You have to understand that consistency is essential and nothing tangible is achieved without it.</div><div><br></div><div>Consistency is harder when no one is there to applaud you, or give you a soothing pat on the back. You must be your own cheerleader during those times - times when there are no results yet. You must be your biggest fan.</div><div><br></div><div>That is the reason the law of consistency states that: Motivation gets you going; Discipline keeps you growing.</div><div><br></div><div>You have desires, one of which is achieving your beautiful goals. Yet, there are times you get lazy. One thing you must not forget in order to keep going in times like this, is that, achievements require productivity; productivity requires commitment and commitment requires consistency. If you are persistent, you will achieve your goals; if you\'re consistent, you will keep it. Your best plans will fail if there is no dedication to consistency.</div><div><br></div><div>John Maxwell said: \"Small disciplines repeated with consistency everyday lead to great achievements gained slowly overtime.\" Take small and steady but consistent steps towards your goal and choose consistency over perfection, because in actual fact, perfection comes with consistency.</div>', '68495100_1598353845.jpeg', 'publish', '2020-08-25', 'admin', '11', 0),
(11, 'GRATITUDE', 'Gratitude', '<div><span style=\"font-size: 0.857em;\">Hello!</span><br></div><div>It\'s another weekend for the groove and this, is so different.&nbsp;</div><div><br></div><div>For it is by the mercies of the Lord that we are not consumed. The Lord has been so gracious to us. Even in this month of September, a lot has happened but we are still standing. The Lord has kept us. We know you have a lot of things you\'re grateful to God for. So, in the comment section below, share with us what you are most grateful for.</div>', '12856800_1599310542.jpg', 'publish', '2020-09-05', 'olapearl', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`) VALUES
(10, 'Lifestyle'),
(11, 'Politics / Society'),
(12, 'Fashion'),
(13, 'Career'),
(14, 'Parenting'),
(15, 'Art and Justice'),
(16, 'Health and Fitness');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comments` text NOT NULL,
  `comment_sender` text NOT NULL,
  `email` text NOT NULL,
  `post_id` int(10) NOT NULL,
  `commentedon` date NOT NULL,
  `timer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `parent_comment_id`, `comments`, `comment_sender`, `email`, `post_id`, `commentedon`, `timer`) VALUES
(2, 0, 'Hmmm... Word\nAn awesome piece', 'Adepitan Oluwabusolami', 'oluwabusolami11@gmail.com', 2, '2020-08-09', '00:00:00'),
(3, 0, 'This is so good, Lord help us to discover and walk in our purpose in life.', 'Olamide Daniel', 'olasomojesu@gmail.com', 2, '2020-08-09', '00:00:00'),
(4, 0, 'Nice Piece', 'Abiodun  Samuel', 'samuelaholu15@gmail.com', 2, '2020-08-09', '00:00:00'),
(5, 0, 'Great article here', 'Prodigy', 'Greatnessabolade@outlook.com', 2, '2020-08-09', '00:00:00'),
(6, 0, '\"The impact of our life is measured on how much of Jesus we express\"\nThis part really got me thinking.......', 'Omoniyi Lawal', 'omoniyilawal53@yahoo.com', 2, '2020-08-09', '00:00:00'),
(7, 0, 'Hmmm, the world awaits my manifestation. Powerful', 'TeeWhy', 'toyin4allsouls@gmail.com', 2, '2020-08-09', '00:00:00'),
(8, 0, 'This is really inspiring. Go girl! ', 'Abiodun Oluwabusayo', 'busayoabiodun17@gmail.com', 2, '2020-08-09', '00:00:00'),
(9, 0, 'This piece is focusing om the real existence of men  here on earth. Until all come to this knowledge the world may be living life in total delusion..', 'Abiodun Macarthy ', 'abiodunmacarthy32@gmail.com', 2, '2020-08-09', '00:00:00'),
(10, 0, 'Wawwww pieces piece ...this is impressing, we all need to find an grace or power to maintain our bearing in HIM may God release it upon us,..more knowledge to the writer. This really call my attentions to track my call \nPERMISSION TO COPY AND REPOST \n', 'AlexHkenny', 'hunsakehinde8@gmail.con', 2, '2020-08-10', '00:00:00'),
(11, 0, 'Inspiring !', 'Goodness', 'samuelaholu15@gmail.com', 2, '2020-08-10', '00:00:00'),
(12, 0, 'This is a wonderful piece...thanks for sharing', 'Prince dynamic', 'opeoluwaonafadeji@gmail.com', 2, '2020-08-10', '00:00:00'),
(13, 0, 'Awesome piece here', 'Jay', 'soroyefelicia@gmail.com', 2, '2020-08-10', '00:00:00'),
(14, 0, 'Very fantastic, the more you able to manage your time the easier way to discover your purpose', 'Daniel Olamide', 'olasomojesu@gmail.com', 3, '0000-00-00', '00:00:00'),
(15, 0, 'Nice writeup \nSo helpful', 'Abdulkabir Olamilekan Orthodox', 'saveasoul247@gmail.com', 3, '0000-00-00', '00:00:00'),
(16, 0, 'Very nice write up ðŸ‘ðŸ½ðŸ‘ðŸ½', 'Omodolor Tolulope ', 'odebbytolulope@gmail.com', 3, '0000-00-00', '00:00:00'),
(17, 0, 'Thanks a lot for sharing', 'Pronix77', 'adesewa01@yahoo.com', 3, '0000-00-00', '00:00:00'),
(18, 0, 'Nice write up. God will continue to increase you in knowledge. ', 'Aholu Lydia ', 'aholulydia62@gmail.com', 3, '0000-00-00', '00:00:00'),
(19, 0, 'This so helpful thanks so much', 'Olukotun Esther', 'olukotuntemitope20@gmail.com', 3, '0000-00-00', '00:00:00'),
(20, 0, 'ðŸ’¯ this is nice', 'Wisdom ', 'wisdom_kumuyi@yahoo.co.uk', 3, '0000-00-00', '00:00:00'),
(21, 0, 'I just watched the video and it was really fun and interesting. nice one guys I look forward to more contents. God bless you and have a Grooooovyyyy weekend lol', 'Prince Dynamic ', 'opeoluwaoanafadeji@gmail.com', 5, '0000-00-00', '00:00:00'),
(22, 0, 'I think i missed the Praise session in churchðŸ¤”', 'Luter', 'luteraondona22@gmail.com', 5, '0000-00-00', '00:00:00'),
(23, 0, 'Praise session.\nI missed it alot', 'Luter', 'luteraondona22@gmail.com', 5, '0000-00-00', '00:00:00'),
(24, 0, 'I actually missed the worship andwhole connection with other members\nGreat one ðŸ‘â¤ï¸', 'Bishop sam', 'bishopbosun@gmail.com', 5, '0000-00-00', '00:00:00'),
(25, 0, 'Very nice\nThanks  alot for sharing ', 'Peculiar', 'ezindupeculiar@gmail.com', 3, '0000-00-00', '00:00:00'),
(26, 0, 'Mhen I miss everything, I miss praise and worship session,I miss the sounds,I miss playing with the children and most importantly I miss prayer session especially the early morning altar prayerðŸ˜ðŸ˜ðŸ˜', 'Ibukunoluwa Mercy', 'Olamiposimercy@gmail.com', 5, '0000-00-00', '00:00:00'),
(27, 0, 'Please can we continue with the lockdown as baba said in the video ðŸ¤£ðŸ¤£', 'Samuel', 'samuelaholu15@gmail.com', 5, '0000-00-00', '00:00:00'),
(32, 0, 'I miss all activities that goes on in the church. Because God presence is always here with us in every section of the service.', 'Adams Ayobamidele David', 'doxology360@gmail.com', 5, '0000-00-00', '00:00:00'),
(33, 0, 'I missed youth service', 'Mide', 'olamidesenami98@gmail.com', 5, '0000-00-00', '00:00:00'),
(34, 0, 'Wow!! Quite groovy. ', 'Black Opal', 'toyin4allsouls@gmail.com', 5, '0000-00-00', '00:00:00'),
(35, 0, 'I missed the joy of congregations worshipðŸ‘ŒAMAZING!ðŸ’ƒ\n', 'ANJOLAJESU PELUMI ADUNBI ', 'anjolaadunbi@gmail.com', 5, '0000-00-00', '00:00:00'),
(36, 0, 'Thanks alot for this piece...hmm not paying attention can affect a lot of things and even hurt later on.', 'Prince Dynamic', 'opeoluwaonafadeji@gmail.com', 6, '0000-00-00', '00:00:00'),
(37, 0, 'Great message... The spiritual controls the physical... We have to be sensitive to the spirit. Thanks for this content.', 'Aj Boluwatife', 'Boluwatifeaj121@gmail.com', 6, '0000-00-00', '00:00:00'),
(38, 0, 'Hmmm \nI will start paying attention.\nThanks for this awesome piece ma', 'Adepitan Busolami ', 'oluwabusolami11@gmail.com', 6, '0000-00-00', '00:00:00'),
(39, 0, 'True talk. ', 'Abosede Lizzy Olubunmi Tijani', 'lizzybtjani@gmail.com', 7, '0000-00-00', '00:00:00'),
(40, 0, 'Thank you so much for this piece. Very insiteful. ', 'ANJOLAJESU PELUMI ADUNBI ', 'anjolaadunbi@gmail.com', 7, '0000-00-00', '00:00:00'),
(41, 0, 'Nice piece over here', 'Doteightinc', 'support@doteightinc.com', 7, '0000-00-00', '00:00:00'),
(42, 0, 'What a motivational piece! There is need to always come here for more. Thanks.', 'Olanrewaju Grace', 'olanrewajutosingrace@gmail.com', 7, '0000-00-00', '00:00:00'),
(43, 0, 'The Lord will give us the grace. ', 'Aholu Lydia ', 'aholulydia62@gma', 6, '0000-00-00', '00:00:00'),
(44, 0, 'Excellent pieceðŸ‘Œ', 'Olatunji Emmanuel', 'olatunjiemmanuel07@gmail.com', 7, '0000-00-00', '00:00:00'),
(45, 0, 'Underrated Piece here', 'Victor ', 'samuelaholu15@gmail.com', 7, '0000-00-00', '00:00:00'),
(46, 0, 'Looking  unto Jesus the author and finisher of our faith... Help us Lord!!', 'Olamide', 'adetayoolamide2@gmail.com', 9, '0000-00-00', '00:00:00'),
(47, 0, 'Jesus our perfect life coach!!!!Hallelujah ðŸ‘ðŸ»ðŸ‘ðŸ»ðŸ‘ðŸ»', 'Delight', 'delightabuh@gmail.com', 9, '0000-00-00', '00:00:00'),
(48, 0, 'Thank you very much Sir, for this wonderful message God bless you.', 'Debbie', 'debbieishu@gmail.com', 9, '0000-00-00', '00:00:00'),
(49, 0, 'This is a fact. But remember that the Bible is complete, so Matthew 6:33 should be our watchword ', 'Tijani Abosede Lizzy', 'lizzybijani@gmail.com', 9, '0000-00-00', '00:00:00'),
(50, 0, 'Thank you very much ma\nI set my affections on things above not on the wordly things', 'Oluwabusolami', 'oluwabusolami11@gmail.com', 9, '0000-00-00', '00:00:00'),
(51, 0, 'Wow,educativeðŸ‘Œ\nThanks for this', 'Eniola', 'eniolavictoria2016@gmail.com', 10, '0000-00-00', '00:00:00'),
(52, 0, 'Wow,thanks for this ðŸ‘Œ', 'Eniola Victoria ', 'eniolavictoria2016@gmail.com', 10, '0000-00-00', '00:00:00'),
(53, 0, 'Hnm,  very true,\nThanks for this reminder ', 'Eniola', 'eniolavictoria2016@gmail.com', 9, '0000-00-00', '00:00:00'),
(54, 0, 'You said it all dear,thanks for this piece', 'Eniola ', 'eniolavictoria2016@gmail.com', 10, '0000-00-00', '00:00:00'),
(55, 0, 'Awesome ', 'olapearl', 'samuelaholu15@gmail.com', 0, '0000-00-00', '00:00:00'),
(56, 0, 'ðŸ¤”', 'Prodigy', 'greatnessabolade@outlook.com', 10, '0000-00-00', '00:00:00'),
(57, 0, 'Grateful for life and peace. The peace is beyond understanding', 'Temitope', 'olamidesenami98@gmail.com', 11, '0000-00-00', '00:00:00'),
(59, 0, 'Most grateful for the gift of life and despite all odds, God is faithful.', 'Tijani Abosede Lizzy', 'lizzybtijani@gmail.com', 11, '0000-00-00', '00:00:00'),
(60, 0, 'I love you Jesus ... Well done ma, more insight and knowledge', 'Busolami', 'oluwabusolami11@gmail.com', 12, '0000-00-00', '00:00:00'),
(61, 0, 'My Saviour made it to the cross, went further to give me victory over sin and death and brought me into His marvellous Light. What manner of Love? I will forever be Grateful for the salvation of my soul', 'OluwaTee', 'toyin4allsouls@gmail.com', 12, '0000-00-00', '00:00:00'),
(62, 0, 'Hmmnn. *Think about it*', 'Tee', 'toyin4allsouls@gmail.com', 9, '0000-00-00', '00:00:00'),
(83, 0, 'Thank you Jesus', 'Sammy', '', 12, '2020-09-17', '00:00:00'),
(111, 0, '', '', '', 0, '2021-09-29', '12:09:18'),
(112, 0, '', '', '', 0, '2021-09-29', '12:09:18'),
(113, 0, '', '', '', 0, '2021-09-29', '12:09:19'),
(114, 0, '', '', '', 0, '2021-09-29', '12:09:38'),
(115, 0, '', '', '', 2, '2021-09-29', '12:09:46'),
(116, 0, '', '', '', 0, '2021-09-29', '12:35:30'),
(117, 0, '', '', '', 2, '2021-09-29', '12:36:43'),
(118, 0, '', '', '', 2, '2021-09-29', '12:40:55'),
(119, 118, '', '', '', 0, '2021-09-29', '12:41:58'),
(120, 0, '', '', '', 2, '2021-09-29', '01:08:44'),
(121, 0, '', '', '', 2, '2021-09-29', '01:11:03'),
(122, 0, '', '', '', 0, '2021-09-29', '01:11:58'),
(123, 0, '', '', '', 0, '2021-09-29', '01:12:15'),
(124, 0, '', '', '', 2, '2021-09-29', '01:12:40'),
(125, 0, '', '', '', 2, '2021-09-29', '01:43:09'),
(126, 0, '', '', '', 2, '2021-09-29', '01:45:17'),
(127, 0, '', '', '', 0, '2021-09-29', '01:46:18'),
(128, 0, '', '', '', 2, '2021-09-29', '01:46:42'),
(129, 0, '', '', '', 2, '2021-09-29', '01:47:38'),
(130, 0, '', '', '', 2, '2021-09-29', '01:48:17'),
(131, 0, '', '', '', 0, '2021-09-29', '01:50:47'),
(132, 0, '', '', '', 0, '2021-09-29', '01:51:59'),
(133, 0, 'jqwdkjqlwdqwd', 'Aholu Samuel', '', 10, '2021-09-29', '00:00:00'),
(134, 0, 'jdkwdfwejfwef', 'Aholu Samuel', '', 10, '2021-09-29', '00:00:00'),
(135, 0, 'qwd,jlqwkdqwk', ',jbnqdk/leqdc', '', 10, '2021-09-29', '00:00:00'),
(136, 0, 'ehwqodewjqfdjeklqwdnqd', 'Aholu Samuel', '', 0, '2021-09-29', '00:00:00'),
(137, 0, 'jwqdqlwknddwk', 'DotHost', '', 0, '2021-09-29', '00:00:00'),
(138, 0, 'wdhkdwqedjashfuwertjfwhefehwlfkwelkfjlfec', 'Aholu Samuel', '', 9, '2021-09-29', '00:00:00'),
(139, 0, '', '', '', 0, '2021-09-29', '02:17:27'),
(140, 62, 'DEWQJCEWjewcfewlj;', 'name', '', 9, '2021-09-29', '00:00:00'),
(141, 57, 'wqdyt', 'This is a test', '', 11, '2021-09-29', '00:00:00'),
(142, 141, 'dehdekwfcq', 'Sammy', '', 11, '2021-09-29', '00:00:00'),
(143, 57, 'This is another test', 'DotHost', '', 11, '2021-09-29', '00:00:00'),
(144, 0, 'Samuel is my name', 'Aholu Samuel', '', 0, '2021-09-29', '00:00:00'),
(145, 0, 'xfcgjjbhkl', 'fgxhghjkl', '', 11, '2021-09-29', '00:00:00'),
(146, 35, '', '', '', 5, '0000-00-00', '02:42:27'),
(147, 34, '', '', '', 0, '2021-10-21', '02:49:28PM'),
(148, 0, '', '', '', 5, '2021-10-21', '02:50:14PM'),
(149, 34, '', '', '', 0, '2021-10-21', '02:50:40PM'),
(150, 0, '', '', '', 0, '2021-10-21', '02:58:26PM'),
(151, 0, '', '', '', 5, '2021-10-21', '02:59:13PM'),
(152, 35, '', '', '', 0, '2021-10-21', '03:02:06PM'),
(153, 0, '', '', '', 0, '2021-10-21', '03:03:44PM'),
(154, 0, '', '', '', 0, '2021-10-22', '01:16:06PM');

-- --------------------------------------------------------

--
-- Table structure for table `editors_choice`
--

CREATE TABLE `editors_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editors_choice`
--

INSERT INTO `editors_choice` (`id`, `blog`) VALUES
(2, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `googleplus` varchar(40) DEFAULT NULL,
  `pinterest` varchar(40) DEFAULT NULL,
  `dribble` varchar(40) DEFAULT NULL,
  `comments_script` text DEFAULT NULL,
  `sharing_script` text DEFAULT NULL,
  `javascript` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `facebook`, `twitter`, `googleplus`, `pinterest`, `dribble`, `comments_script`, `sharing_script`, `javascript`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.plus.google.com', 'http://www.pinterest.com', 'http://www.dribble.com', '<div class=\"fb-comments container\" data-href=\"http://www.uoecu.org/newsview.php?id=<?php echo $row[\'id\'];?>\" data-numposts=\"20\" width=\"100%\"></div>', '<div class=\"addthis_sharing_toolbox\"></div>', '<script>(function(d, s, id) {\r\n		var js, fjs = d.getElementsByTagName(s)[0];\r\n		if (d.getElementById(id)) return;\r\n		js = d.createElement(s); js.id = id;\r\n		js.src = \'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=298807240601869\';\r\n		fjs.parentNode.insertBefore(js, fjs);\r\n	}(document, \'script\', \'facebook-jssdk\'));</script>\r\n<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57587edcb1479678\"></script>');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'titles', 1, 3, 3, 3),
(2, 2, 'links', 1, 3, 3, 3),
(3, 2, 'blog_categories', 1, 3, 3, 3),
(4, 2, 'blogs', 1, 3, 3, 3),
(5, 2, 'banner_posts', 1, 3, 3, 3),
(6, 2, 'editors_choice', 1, 3, 3, 3),
(47, 3, 'titles', 0, 0, 0, 0),
(48, 3, 'links', 0, 0, 0, 0),
(49, 3, 'blog_categories', 0, 3, 0, 0),
(50, 3, 'blogs', 1, 1, 1, 1),
(51, 3, 'editors_choice', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2018-04-26', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2018-04-26', 0, 1),
(3, 'authors', 'contains all the guest authors', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'titles', '1', 'admin', 1524766759, 1597310784, 2),
(2, 'links', '1', 'admin', 1524766827, 1524878963, 2),
(9, 'banner_posts', '1', 'admin', 1524779492, 1524779492, 2),
(13, 'editors_choice', '1', 'admin', 1524799889, 1524799889, 2),
(14, 'editors_choice', '2', 'admin', 1524799903, 1524799903, 2),
(22, 'blog_categories', '10', 'admin', 1592234837, 1592234864, 2),
(23, 'blog_categories', '11', 'admin', 1592234890, 1592234908, 2),
(24, 'blog_categories', '12', 'admin', 1592234947, 1592234952, 2),
(25, 'blog_categories', '13', 'admin', 1592234977, 1592234983, 2),
(26, 'blog_categories', '14', 'admin', 1592235010, 1592235010, 2),
(28, 'blogs', '2', 'admin', 1596981837, 1597053011, 2),
(29, 'blogs', '3', 'admin', 1597046804, 1597310427, 2),
(31, 'blogs', '5', 'admin', 1597501121, 1597502129, 2),
(32, 'blogs', '6', 'olapearl', 1597594530, 1597595057, 3),
(33, 'blogs', '7', 'olapearl', 1597654441, 1597654663, 3),
(34, 'blogs', '8', 'olapearl', 1598106854, 1598106920, 3),
(35, 'blogs', '9', 'olapearl', 1598202896, 1598204991, 3),
(36, 'blogs', '10', 'admin', 1598353845, 1598354491, 2),
(37, 'blogs', '11', 'olapearl', 1599310542, 1599310802, 3),
(38, 'blogs', '12', 'olapearl', 1599414142, 1630063369, 3),
(39, 'blogs', '13', 'admin', 1633613278, 1633615850, 2),
(40, 'blog_categories', '15', 'admin', 1634825784, 1634825784, 2),
(41, 'blog_categories', '16', 'admin', 1634825808, 1634825808, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `custom5` text NOT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `custom5`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '38db4a51e1f10c25623799f62e28fe9a', 'hello@olapearlshub.com', '2018-04-26', 2, 0, 1, '', '', '', '', '', '', NULL, NULL),
('guest', NULL, NULL, '2021-08-27', 1, 0, 1, NULL, NULL, NULL, NULL, '', 'Anonymous member created automatically on 2021-08-27', NULL, NULL),
('olapearl', '38db4a51e1f10c25623799f62e28fe9a', 'olamidesenami98@gmail.com', '2020-08-02', 3, 0, 1, 'Aholu Olamide', '3,Jesus Street, Rolu Estate, Idi Orogbo, Parafa, Ikorodu', 'Lagos', '08094793295', '', 'member signed up through the registration form.\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1', NULL, NULL),
('sammy', '4385695633f8c6c8ab52592092cecf04', 'sammy@gmail.com', '2021-09-19', 3, 0, 0, 'Sammy Sammy', 'lag', 'Lag', '23457890', '', 'member signed up through the registration form.', NULL, NULL),
('samuel', 'f664811ddc6a6b3a02ea7051e24f5e86', 'somebody@gmail.com', '2021-08-27', 3, 1, 1, 'Same Person', 'Ikole', 'Ekiti', '12345678', '', 'member signed up through the registration form.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_hits`
--

CREATE TABLE `page_hits` (
  `page` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_hits`
--

INSERT INTO `page_hits` (`page`, `count`) VALUES
('The beginning of the end of the world', 4),
('The challanges of being a writter', 16),
('The future of web developement on earth', 24),
('The subtle art of not giving a fuck-Mark Manson', 34),
('This is test rum', 3),
('Today is a new day', 1),
('Why I did what I did', 1),
('Why i ventured into writting as a proffesion', 16);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `date`) VALUES
(19, 'Aholu Samuel', 'aholusam@yahoo.com', '2021-01-07 09:07:23'),
(18, 'Olamide', 'olamidesenami98@gmail.com', '2020-12-30 10:54:39'),
(17, 'Ideraoluwa', 'ideraoluwaakosua@gmail.com', '2020-12-14 14:01:23'),
(15, 'Aholu Samuel', 'samuelaholu15@gmail.com', '2020-09-27 10:48:23'),
(14, 'Esther Akinyemi', 'estherabiodun9920@gmail.com', '2020-09-18 18:04:47'),
(20, 'Aholu Samuel Viavor', 'samuelaholu15@gmail.com', '2021-04-22 13:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `bannertext1` varchar(150) DEFAULT NULL,
  `bannertext2` varchar(150) DEFAULT NULL,
  `bannertext3` varchar(150) DEFAULT NULL,
  `bannertext4` varchar(150) DEFAULT NULL,
  `detailed_description` text DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `googlemap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `bannertext1`, `bannertext2`, `bannertext3`, `bannertext4`, `detailed_description`, `address`, `email`, `phone`, `googlemap`) VALUES
(1, 'Olapearl\'s Hub', '...Jesus is our inspiration', '98778500_1596303038.png', 'blog, Sunday, challenge ,inspiration, fun, olapearls, Hub, Olapearl\'s, Olapearl\'s Hub', 'Olapearl\'s Hub is an institution where souls are saved and lives are blessed. It is a college where lives are pruned. The center of it all is Jesus.', 'Create a lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Create the lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Olapearl\'s Hub is an institution where souls are saved and lives are blessed. It is a college where lives are pruned. The center of it all is Jesus. With fun, we bring to reality the ability to walk in the fullness of Christ and realize the abilities stored up in our spirit man.', 'Lagos, Nigeria', 'hello@olapearlshub.com', '08094793295', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `p_id`, `address`) VALUES
(14, 3, '::1'),
(15, 11, '::1'),
(16, 5, '::1'),
(17, 8, '::1'),
(18, 7, '::1'),
(19, 6, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_info`
--

CREATE TABLE `visitor_info` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `time_accessed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_info`
--

INSERT INTO `visitor_info` (`id`, `ip_address`, `user_agent`, `time_accessed`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:26:52'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:01'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:40'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:55'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:01'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:12'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:19'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:22'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:29'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:32'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:35'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:38'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:05'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:09'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:18'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:25'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:28'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:51'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:57'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:00'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:07'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:15'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:39:41'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:40:41'),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:41:27'),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:26:10'),
(27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:27:34'),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:20'),
(29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:42'),
(30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:26'),
(31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:38'),
(32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:41'),
(33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:43'),
(34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:45'),
(35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:48'),
(36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:51'),
(37, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:53'),
(38, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:56'),
(39, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:59'),
(40, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:02'),
(41, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:05'),
(42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:07'),
(43, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:10'),
(44, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:04'),
(45, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:14'),
(46, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:43:06'),
(47, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:01'),
(48, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:08'),
(49, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:48:58'),
(50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:49:18'),
(51, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 22:22:28'),
(52, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:41:41'),
(53, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:43:58'),
(54, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:46:23'),
(55, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-20 16:55:12'),
(56, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:18:56'),
(57, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:18:57'),
(58, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:40'),
(59, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:49'),
(60, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:49'),
(61, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:30:52'),
(62, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-22 11:00:53'),
(63, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-22 11:00:53'),
(64, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-22 11:04:32'),
(65, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-22 11:04:32'),
(66, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-23 18:50:19'),
(67, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-26 15:05:16'),
(68, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:39:45'),
(69, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:41:10'),
(70, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:51:25'),
(71, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:51:38'),
(72, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:52:34'),
(73, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Mobile Safari/537.36', '2020-05-07 16:04:11'),
(74, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2020-05-17 11:45:03'),
(75, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2020-05-18 18:09:04'),
(76, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', '2020-05-31 13:22:16'),
(77, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 17:26:28'),
(78, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 19:18:38'),
(79, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 22:12:31'),
(80, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 16:42:38'),
(81, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 16:42:56'),
(82, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 17:06:25'),
(83, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 17:06:34'),
(84, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-17 16:55:14'),
(85, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-11 21:39:17'),
(86, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-11 21:39:17'),
(87, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-15 19:47:58'),
(88, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-18 20:18:39'),
(89, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-18 20:18:55'),
(90, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-19 12:42:07'),
(91, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-19 12:58:34'),
(92, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-21 07:49:29'),
(93, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 16:39:26'),
(94, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 17:10:29'),
(95, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 17:28:22'),
(96, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:08:18'),
(97, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:21:49'),
(98, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:22:31'),
(99, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:23:46'),
(100, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:30:46'),
(101, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:36:54'),
(102, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:39:39'),
(103, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-23 11:31:22'),
(104, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:47:42'),
(105, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:17'),
(106, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:30'),
(107, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:48'),
(108, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-24 00:40:33'),
(109, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-26 15:02:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_posts`
--
ALTER TABLE `banner_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `editors_choice`
--
ALTER TABLE `editors_choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`blog`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `page_hits`
--
ALTER TABLE `page_hits`
  ADD PRIMARY KEY (`page`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_posts`
--
ALTER TABLE `banner_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `editors_choice`
--
ALTER TABLE `editors_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `visitor_info`
--
ALTER TABLE `visitor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
