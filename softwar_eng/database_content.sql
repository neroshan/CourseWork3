-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2016 at 05:31 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `software_eng`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `page_title`, `author`, `keyword`, `content`) VALUES
(1, 'Racism at work place', 'Niroshan Kulasingam', 'racism work place', '<p> \r\n                        Equal opportunity at work place means that everyone should have the equal chance to apply and get selected for \r\n                        jobs. Everyone should be treated fairly without any differentiations. There should not be any discrimination in\r\n                        terms of sex, religions, disability, racial origin and martial status. Most organization has a policy to prevent\r\n                        discrimination at work place.\r\n                        <img src="img/discrimination.jpg" alt="racism">\r\n                    </p>\r\n                    \r\n                    <p>\r\n                        \r\n                        Employer should treat employees equally. Employees should be selected by their ability to work and previous\r\n                        experience. Ethnic minorities are not treated as other ethnic majority at work place. A survey of 24,000 people\r\n                        shows that racial bullying is rising.  About 30% of employees at workplace experienced racial harassment last year\r\n                        alone. Data from <a href="http://race.bitc.org.uk/all-resources/research-articles/race-work-report">survey</a>\r\n                        statics shows this information. This static is very alarming to UK people. \r\n                        </p>\r\n                        <h4>Some of the racist behaviors might be look like this.</h4>\r\n                        <ol>\r\n                            <li>Being shouted at</li>\r\n                            <li>Being called racist names</li>\r\n                            <li>Being denied certain benefits</li>\r\n                            <li>Being overlooked for promotion and/training</li>\r\n                            <li>Being bullied </li>\r\n                        </ol>\r\n                    \r\n                        <h4>How we can prevent racism at work place</h4>\r\n                    <p>\r\n                        First of all find out whether employer has a policy about the racism at work place. This may be in the equal\r\n                        opportunity section of the policy. If you believe someone in your work place treat you not normal as other\r\n                        employees because you are ethical minorities, talk to your colleagues and your manager. This will help you to\r\n                        discuss problem together with your colleagues.\r\n                        <img src="img/Racism.jpg" alt="racism">\r\n                    </p>\r\n                    \r\n                    <p>\r\n                      If you are a trade union member, talk to your union representative. They will take care of this matter. It is\r\n                        always better to talk to that individual who was racist. Explain your feelings and ask that individual to change\r\n                        his/ her behavior. \r\n                    </p>\r\n        \r\n                    <p >\r\n                        <iframe style="width:100%;height:400px;border:0;"  src="https://www.youtube.com/embed/X6n1rnMKlcc"  allowfullscreen>\r\n                        </iframe>\r\n                    </p>'),
(2, 'Racism at education', 'Niroshan Kulasingam', ' racism education', '<p> \r\n                        Racism at education especially at school is one of the important matters. At English schools black Caribbean pupils\r\n                        opportunities are rejected in base racism that will dramatically decrease the chance of academic success, according\r\n                        to a new study. <a href="http://www.theguardian.com/education/2008/sep/05/raceineducation.raceinschools">Source</a>\r\n                    </p>\r\n                    \r\n                    <p>\r\n                        \r\n                        Research evidences shows that teachers at school are under-estimating the abilities of some black pupils. This\r\n                        behavior is preventing some of the black pupils academic talents.  The research shows that pupils take high-tiger\r\n                        exam paper in math, English and science at 14 discriminated by their racism. White pupils are more likely to take\r\n                        higher-tiger paper than black Caribbean, Pakistani, black African and Bangladeshi classmates.\r\n                        \r\n                    </p>\r\n                    <p>\r\n                        Dr Steve Strand from Warwick University, the author of the study, said: "After accounting for all measured factors,\r\n                        the under-representation is specific to this one ethnic group and indicates that, all other things being equal, for\r\n                        every three white British pupils entered for the higher tiers, only two black Caribbean pupils are entered."\r\n                    </p>\r\n                    \r\n                    <p>\r\n                      <h4>\r\n                          Following statics from theguardian website published on 5th September 2008.\r\n<a href="http://www.theguardian.com/education/2008/sep/05/raceineducation.raceinschools">\r\n                          Source</a>\r\n\r\n                      </h4>\r\n\r\n                    </p>\r\n        \r\n                    <p >\r\n                        A third of the most capable black Caribbean pupils are not entered to take the hardest papers in tests at 14\r\n                    </p>\r\n         \r\n                    <p>\r\n                        Black Caribbean and mixed white-and-black Caribbean children are excluded at rates three times greater than that\r\n                        for white children\r\n                    </p>\r\n         \r\n                    <p>\r\n                        In 2007 44.9% of black Caribbean pupils, and 47.3% of pupils of mixed white and black Caribbean heritage, achieved\r\n                        5 or more A*-C grades, compared to 57.3% nationally\r\n                    </p>\r\n         \r\n                    <p>\r\n                       The gap between black Caribbean achievement and the national average at GCSE has narrowed by eight percentage points\r\n                        in four years\r\n                    </p>\r\n         \r\n                    <p>\r\n                        In 2005 there were twice as many black men in prison in the UK than in universities\r\n                    </p>'),
(5, 'How technology helps to prevent racism', 'Niroshan Kulasingam', 'How technology helps to prevent racism', '<p>A new study shows that playing video games or virtual reality avatars whose not your race could reduce racism. This new technology help to reduce tension between two different race group. </p>\r\n\r\n<p>A typical example would be that when you travel by air plane, you may have the seat next to a different race person but you have to travel quite long time. If you spend more time, you will have communication with that person. When you have communication, you happen to about that person&#39;s good behaviours. That will help to remove whatever bad impression you have before about other races.</p>\r\n\r\n<p>In work place, you have to work together as a group expecially in IT industrtries. If you work together, you will have more time to spend with other race people . You also have to deal with many problems together so, you need to have good communication. That will help to reduce the racism.</p>\r\n\r\n<p>\r\n<iframe style="width:100%;height:400px;border:0;" src="https://www.youtube.com/embed/iQzAMWm4nkI"  allowfullscreen></iframe>\r\n</p>'),
(3, 'How lack of education or poor education due to wealth can affect people and their environment', 'Lokesh Tilwani', 'wealth lack of education', '                    <p>\r\n                        Poverty has a good number of factors that can affect the capability of a child to learn effectively in school which can later lead to poor education. These factors contain:\r\n\r\n                        <ol>\r\n                            <li>If the child eats well enough for him/her to be well nourished</li>\r\n                            <li>How much rest does the child gets at night when sleeping</li>\r\n                            <li>Are the child&#39;s parents or guardians encouraging enough to motivate the child to finish their assignments</li>\r\n                            <li>Is the child&#39;s living conditions worrying or not</li>\r\n                        </ol>\r\n\r\n                    </p>\r\n                    \r\n                    <p>\r\n                        The lack of education or poor education can affect individuals, both adults and children, in several ways in any given place; some of which will be discussed here.\r\n                    </p>\r\n\r\n                    <p> \r\n                        Firstly, it can affect the employment rate to become extremely low resulting in the incidence of a big toll in poverty in certain areas. A good education is very important if the growth of the economy is to be ensured. Poor or lack of education can affect one&#39;s ability to achieve their desired career since they would not have the required intellectual skills for the specific job. Instead, they would be forced to do something ordinary such as manual labour jobs in developing countries or retail jobs in developed countries, which do not require much intellectual skills; hence, not following their dream job. Therefore, the number of skilled workers will decrease whereas the number of workers with poor education will increase. Acquiring skills as basic as just reading and solving mathematical questions can make a huge difference in an individual&#39;s employability. This can lead to the other effect of lack of education which is in social and living situations.\r\n                    </p>\r\n                        \r\n                    <p>\r\n                        Moreover, deprivation of education can affect the social and living circumstances extremely in non-educated surroundings. \r\n                        <img src="img/crime.jpg" alt="education2" style="float:right;" align="right">\r\n                        By this, we mean that people who not educated or illiterate in these areas can be easily influenced to undergo in criminal activities such as stealing from other people, joining gangs which can lead to engaging themselves in gang violence. \r\n                        These criminal activities can lead to the individual&#39;s criminal convictions which can prevent them one way or another in progressing to their desired career if they eventually gained the required skills through education.\r\n                    </p>\r\n\r\n                    <p>\r\n                        Furthermore, lack of education can also affect the health of individuals. If people do not know how to take care of their bodies with proper hygiene techniques, it can lead to illnesses which eventually lead to deterioration in the individual&#39;s health. This can influence drug abuse since illiterate people may not know what medication to take when and how much. Also, considering health-wise, poor education can lead to teen pregnancy due to poor family planning since the individuals will have little or no knowledge of.\r\n                    </p>'),
(4, 'How technology can help in resolving this issue', 'Lokesh Tilwani', 'How technology', ' <p>\r\n                        Technology can have a major impact on whether an individual can acquire a good or bad education due to wealth issues. Having said this, it is easier to implement technology in a high-income environment since institutions can afford purchasing these products to help individuals to gain a better education than before. On the other hand, implementing technology in a low-income environment can be challenging since the products can be expensive to acquire. In this case, there can also be some cheaper or smaller alternatives that can be acquired that can replicate some features of these expensive products which can help individuals in low resource, rural or poor communities to get a better education to progress in getting the required skills (although this is not always the case since some products can be expensive but worth it for the products capabilities).\r\n                    </p>\r\n                    \r\n                    <p>\r\n                        There are different ways where various technologies can be used to resolve this issue in low resource, rural or poor communities, especially where internet access are challenging. One way is by sharing a single device with multiple individuals. This can be applied to a class where a number of students can individually use a one computer with their individual mouse that each student have, by transforming simple projectors into low-cost digital whiteboards. This can be explained in detail in the following link: <a href="http://blogs.worldbank.org/edutech/off-the-grid">http://blogs.worldbank.org/edutech/off-the-grid</a>. In a high-income environment, where institutes can afford more, students can use desktop computers in labs, laptops at school, and the school might also distribute laptops or tablets to each student for educational purposes.\r\n                    </p>\r\n\r\n                    <p> \r\n                        Another way, in low resource, rural or poor communities, is for take short low cost videos, either through cheap video cameras or mobile phones, and discuss difficult topics, review tough and frequent questions, and also review past papers for students to look at whenever teachers are not around in the schools archives. This can be further explained in detail in the following link: <a href="https://blogs.worldbank.org/edutech/using-video-improve-teaching-and-support-teachers">https://blogs.worldbank.org/edutech/using-video-improve-teaching-and-support-teachers</a>. This method can also be used in developed countries but uploading the videos online where students can download and view anywhere, anytime.\r\n                    </p>\r\n                        \r\n                    <p>\r\n                        An additional way, in developing countries where internet connections are slow and unpredictable, caching online contents for later use offline is a great way to distribute digital contents between teachers and students such as e-books, teaching materials and topic related questions that are difficult to find in available hardcopy text books. This method can also be applied to developed countries in the same way. This can be explained even more in the following link: <a href="http://blogs.worldbank.org/edutech/egranary">http://blogs.worldbank.org/edutech/egranary</a>. This is also close to e-learning which is somehow like a virtual school, that is used using a computer with internet access, that consists of part of all of the courses that can be used for academic or personal use thereby gaining new knowledge entirely or improving on existing information. It has many benefits such as anyone can learn anywhere, anytime; it is cost effective; it is discreet which at times is helpful for shy students; and it saves time since students can track their progress. More about this can be explained in the following link: <a href="http://www.virtual-college.co.uk/elearning/elearning.aspx">http://www.virtual-college.co.uk/elearning/elearning.aspx</a>.\r\n                    </p>\r\n'),
(6, 'Differences in access to education due to wealth issues', 'Lokesh Tilwani', 'Differences in access to education', '                    <p>\r\n						Education is one of the most important tool for an individual to have in our current time for people to progress successfully ahead in life with their gained skills. According to <a href="http://dictionary.reference.com/">dictionary.reference.com</a>, education is <i><b>the act or process of imparting or acquiring general knowledge, developing the powers of reasoning and judgment, and generally of preparing oneself or others intellectually for mature life</b></i>. Education is also very important since it can aid in the decrease of inequality and poverty around, even if basic reading and writing is the only education someone can achieve.\r\n                    </p>\r\n                    \r\n                    <p>\r\n						Although education is essential, wealth is another factor that can act as a barrier towards education, in terms of poverty. Poverty, according to <a href="http://dictionary.reference.com/">dictionary.reference.com</a>, <i><b>is the state or condition of having little or no money, goods, or means of support; condition of being poor</b></i>. This is one of the key reason why learners as a whole drop-out or get poor education, possibly leading to drop-out, in schools because of the high cost of fees, transport and other necessities which they cannot afford (fees being the major problem in these cases). This state of children in poor families can create a huge gap of inequality between them and children of families with steady or high income. Even the schools might take some penal and illegitimate steps, also known as punishments, towards poor families being unable to pay their children&#39;s fees. These steps include denying children in these category access to school facilities, withholding their results and openly embarrassing them and their parents or guardians which can inflict these children mentally to drop-out. Other steps consist of forcing these children to sit on the floor during classes, embarrassing them in assemblies, setting them in separate rooms from other children that can restrict them from gaining the knowledge they require and even threating them of being expelled. These can discourage them to drop-out of school and to be socially excluded from other children.\r\n                    </p>\r\n\r\n                    <p> \r\n                        Not well-funded schools can also have a negative impact on teachers and other school staff which may receive salaries that are less than the minimum wage. This can cause staff members to quit these jobs leading to more schools lacking potential teachers that might have had a great impact on the education given in those institutes. Additionally, this can restrain schools from getting the necessary study materials which can lead to being insufficient in supply.\r\n                    </p>\r\n\r\n                    <p>\r\n						Education is an ultimate right for children and individuals in general. Although of the progress over the last 15 years, many children are still being deprived of this right due to such barriers as wealth. These issues can be regulated by providing financial and technical support to low-income communities or developing countries so as to develop the learning outcomes of children. This will in turn increase the teaching staff&#39;s salaries, constructing more training centres for teachers to improve their teaching strategies, and also provide the school with more learning materials. Even in developed countries, both teachers and students can mentor children and other students in local schools in low-income communities to help them progress in their educational lives.\r\n						<p>\r\n							<iframe style="width:100%;height:350px;" \r\n							src="https://www.youtube.com/embed/e_feXDXgBvM" allowfullscreen>\r\n							</iframe>\r\n						</p>\r\n					</p>'),
(7, 'What are the indicators of gender inequality in Information Technology', 'Alexis Miakouikila', 'What are the indicators of gender inequality in Information Technology', '<p>Although women have had a number of decisive roles in the development of computing and the IT industry, such as Ada Lovelace or Grace Hopper, the modern tech industry is perceived as a male-oriented sector; leading to gender inequalities.</p>\r\n\r\n<p><a href="http://nces.ed.gov/programs/digest/d12/tables/dt12_349.asp">According to the National Center for Education Statistics</a> in 1970, 13.6% of U.S. IT related bachelor degrees were awarded to women. By 1984 it rose to 37.1%. However in 2011 only 17.6% of undergraduate computer science degrees went to women. Obviously, women are driven out of this sector, an <a href="http://fortune.com/2014/10/02/women-leave-tech-culture/">article published in Fortune</a> reveals that as much as 27% of women cited workplace culture as a reason for leaving jobs in the technology industry.<br/><br/>\r\n\r\nSo what and where are those problems that drive women out of this sector?</p>\r\n\r\n<h4>Sexual and Verbal Harassment</h4>\r\n\r\n<p>Sexual and verbal harassment, notably at conferences, is not uncommon, as denoted by the number of examples of it. In May 2012, Dell had to make <a href="https://plus.google.com/+Dell/posts/5Zg5FdFEydi">public apologies</a> for a number of inappropriate comments made about women by Mads Christensen, speaker at a conference in Denmark.<p>\r\n\r\n<p>In November 5th 2010, Google technical writer Noirin Shirley posted a blog entry about how she got sexually harassed at an Apache Conference. It was later revealed that it was not the first time she was a victim of such a behaviour and that it happened at three other conferences that year. Even more dreadful than the event was its response, as Noirin Shirley <a href="http://www.marieclaire.com/career-advice/tips/a7664/geeks-attack/">was attacked by thousands of people for ''naming and shaming''.</a></p>\r\n\r\n<h4>A salary issue?</h4>\r\n<p>The <a href="http://media.dice.com/report/february-2015-the-position-gap/">dice salary survey</a> shows a $10,000 pay gap in annual salary between male and female in the tech industry, but also shows that at least part of this gap can be explained by difference in qualifications and experience. The gap could be thus defined as a position gap rather than a pay gap. The <a href="http://www.bbc.co.uk/guides/zxjr9j6">main problem</a> being that too few women choose to build a career into IT to begin with. The male-oriented unwelcoming to women culture, and family reasons drive some of them out of the industry, widening the gap.</p>\r\n\r\n<h4>The Nadella Controversy</h4>\r\n<p>When asked about how women should act when uncomfortable about asking for a raise, Microsoft CEO Satya Nadella <a href="http://www.theguardian.com/technology/2014/oct/10/microsoft-ceo-satya-nadella-women-dont-ask-for-a-raise">answered</a> "It''s not really about asking for the raise, but knowing and having faith that the system will actually give you the right raises a you go along". This statement sparkled the anger of women activists and he later apologised on Twitter on how badly he answered that question. This incident is a blatant proof of how the gender gap get little attention from industry leaders in the computing sector.</p>'),
(8, 'How does sexism in Computing and Technology affect people and society?', 'Alexis Miakouikila', 'How does sexism in Computing and Technology affect people and society', '<p>Because of the unwelcoming atmosphere of the computing sector to women, they are inhibited when it comes to <a href="http://fortune.com/2014/10/02/women-leave-tech-culture/">build a career in IT</a>. This, in turn, reinforce the male domination and contribute to the idea that technologie jobs are designed for men and not suited to women. It then somehow find a the way to education, where young girls are discouraged towards growing an interest for technology.</p>\r\n\r\n<p>Among the few women who decide to build a career in computing, some of them decide to quit the industry early because of the <a href="http://edition.cnn.com/2012/05/07/tech/web/brogrammers/index.html">"brogrammer"</a> culture and the misogyny that can arise in some places or niche markets (even though mainstream computing markets <a href="http://gizmodo.com/5910824/theres-no-such-thing-as-a-brogrammer"> do not experience that</a>). Others decide to leave the industry because it does not offer what they need to <a href="http://fortune.com/2014/10/02/women-leave-tech-culture/">start a family</a>.</p>\r\n\r\n<p>The IT sector being majoritarily <a href="http://www.theatlantic.com/business/archive/2013/09/the-brogrammer-effect-women-are-a-small-and-shrinking-share-of-computer-workers/279611/">composed of men</a>, unacceptable behaviour can be easily covered and let men doing wrong things without any fear of being punished. Electronics and software conventions are places where sexual harassment may occur without any sanctions taken against the offenders (see Noirin Shirley <a href="http://www.marieclaire.com/career-advice/tips/a7664/geeks-attack/">conference experience</a>). The gaming sector is also an example of that. Since it is run by men and targeting a masculine audience, women are often misrepresented, as weak, idiot, useless and most of the time they are oversexualised. Unfortunately, because games have become a powerful and popular media, those misconceptions about women find their way elsewhere into our culture. Children in particular, may become exposed to such games and reproduce what they see into the real world. Boys may consider girls as weak and not rely on them for sports or other physical activities, and girls may set limits for themselves and not get involve in some activities, such as math and physics, as much as they could, and also try to get attention from boys only by embellishing their bodies.</p>\r\n\r\n<h4>Misrepresentation of women in Games</h4>\r\n\r\n<p><img src="img/female_character.jpg" alt="typical female character" style="float: left; padding: 3px"/>In an article published in the journal Mass Communication and Society, James D. Ivory investigated the gender representation in review from  games. He found that games are targeting male audience, that male characters are more represented, and that female characters are oversexualised. In a such a male dominated context, it is to be expected that gender inequalities will arise against women. To fight against misrepresentations of women in the videogames industry, feminist Anita Sarkeesian endeavoured to launch a serie of YouTube videos examining gender representation in video games after a successfully obtaining the fund through her <a href="http://www.kickstarter.com/projects/566429325/tropes-vs-women-in-video-games"> kickstarter project</a>. Unfortunately, she soon after became the victim of verbal and sexual harassment, and even received rape and death threats.</p>\r\n\r\n<p>A study published in the <a href="http://www.psmag.com/books-and-culture/halo-3-gamers-are-often-sexist-too-61564">Pacific Standard</a> tend to demonstrate a blatant misogyny among gamers since female players in similar conditions receive three times as much negative comments than male players, and casual sentence such as "hi everybody" could spark response as insulting as "shut up, you b*tch".</p>'),
(9, 'How could gender-inequalities disappear from Computing and Technology, and how this sector could alleviate this issue in general', 'Alexis Miakouikila', 'How could gender-inequalities disappear from Computing and Technology, and how this sector could alleviate this issue in general', '<p>A number of organisations have sought, and still actively contribute to alleviate gender inequality in the computing sector. One of those is the <a href="http://adainitiative.org/">Ada initiative</a>. This organisation named after Ada Lovelace, has sought between 2011 and 2015 to increase the participation of women into open source and open culture. It has now ceased its activities, but members are still active.\r\nAnother such organisation is LinuxChix, a women-oriented Linux community. The SWIFT (Supporting Women In Technology) organisation establish survey to reveal the problems linked to sexism in technology, in order to make solve the problems more efficiently. In <a href="http://www.sciencedirect.com/science/article/pii/S1877042815024933">one such survey</a> they showed that women were more likely to believe they lacked the skills needed to be successful in technology.</p>\r\n\r\n<h4>Destroying stereotypes</h4>\r\n\r\n<p>Jesse Fox and Jeremy Bailenson, in their <a href="https://vhil.stanford.edu/pubs/2009/fox-sr-virgins-vamps.pdf">article</a> about the exposure to sexualised content in a virtual environment, show that gender-stereotypical female representations enhance negative behaviour toward women, while content that breaks stereotypes do not. This is alarming knowing that Melinda C. R. Burgess, Steven Paul Stermer and Stephen Burgess in their <a href="https://www.researchgate.net/publication/226396946_Sex_Lies_and_Video_Games_The_Portrayal_of_Male_and_Female_Characters_on_Video_Game_Covers">study</a> about the portrayal of male and female characters in videogames tell us that 97% of 8 to 17 years old played games, and that a majority of games portray women as either being weak, or sexualised. No doubt that breaking stereotypes and portraying women in a more realistic way would reduce negative behaviour toward women in society.</p>\r\n\r\n<h4>Attracting more women into Computer Science</h4>\r\n\r\n<p>The main problem in computing is the lack of engagement of women. It is no surprise that women are not portrayed in a realistic way when all computing related sectors are largely dominated by men (see <a href="http://www.aauw.org/resource/why-so-few-women-in-science-technology-engineering-and-mathematics-executive-summary/">Why so few? Women in Science, Technology, Mathematics</a> from Catherine Hill). Attracting women into computing is the major challenge. J. McGrath Cohoon, in Recruting and retaining women, describe a number of methods to get more female students involved in computing courses. It includes reaching out to more girls during enrollment, changing the structure of teaching to adapt to them, and make sure to provide girls with all sort of roles including research and teaching. Overall we could say that attracting and retaining women should become one of the priorities of computing courses. A better parity would impact on the content of teachings, and material released by the IT sector, including games and media.\r\n</p> <iframe width="560" height="315" src="https://www.youtube.com/embed/X6p5AZp7r_Q" frameborder="0" allowfullscreen></iframe>  '),
(10, 'Effect of Society', 'Ashley-James Buckingham', 'society IT', '<p>Within this Website you will have seen sufficient discussions on topics related to <a href="sexism_in_IT.php.html">Gender imbalance</a> and <a href="wealth_in_education1.php.html">Educational differences</a> while i shall not repeat the points made in these articles they do provide evidence to support the following discussion, it is for this reason that i recommend reading those articles first. </p> </br> <p>Within this article we will explore the arguments both for and against the reasoning behind inequality in Computing and IT. While the points made bellow do cross with the topics provided by my peers, it is important to note that this section will be describing the actions of current society to promote/degrade the positioning of people within IT and not the specifics of active gender discrimination and economic bias. </p> </br> <h3>THE POWER OF SOCIETY</h3> <div> <img src="https://pmcdeadline2.files.wordpress.com/2014/11/1984-big-brother.png?w=446&h=299&crop=1" alt="George Orwell Great Society" height="42" width="42"> <br><i>"The reflection of the current social paradigm tells us we are largely determined by conditioning and conditions." </i> </br><strong>Stephen R. Covey</strong><br> <div> </br> </br></br> <p>The power of society is evident all around us, we are told what to wear, how to act and what choices we can make. the power of soviet has both created devastating wars and propelled us to greatness, and with the Orwell &#39great society&#39 we live in today it is clear to see how the ideas of the general public can easily influence your actions. By reading the articles written by my peers on this website it is very evident that inequality does exist within computing,however as previously mentioned this section will address the direct influence society has on computing. </p>'),
(11, 'What Society Tells Us', 'Ashley-James Buckingham', 'rules society', '<p>A quick game click the picture below which you think best describes a geek? </br> <iframe width="640" height="600" src="https://quiz.tryinteract.com/#/na-company/1" class="interact-embed" width="800" height="600" frameborder="0"></iframe> <p class="interact-p"></p> <br> <p>If the above experiment worked you will have picked the obvious geek photo, if you didn&#39t and the results do not agree with this point then i can only put it down to the fact that this webpage will most likely be viewed by self confessed geeks like myself.The experiment above is used to quickly demonstrate the affect that society has on our own views. While the above experiment is tongue in cheek it is important to understand that the same is still happening. Society tells us that we must conform to the typical computer geek to be interested in computing, this can be increasingly damaging to those who are currently in educational development where they are picking there future options.<strong>if you do not conform to the society geek you cant pick computing </strong> </p> </br> <p>So we have established what society deems as a geek however what is interesting is societies shift in the way they view these &#39geeks&#39 an article in the guardian titled <a href="http://www.theguardian.com/fashion/2013/sep/02/rise-geeks-outsiders-superhero-movies-dork">"Rise of the Geeks"</a> explains how the unpopular outcast with the help of many factors such as television and media became the cool and powerful guy that everyone loves. </p> <br>The Big Bang Theory<br><i>Note:language some may find offensive</i></br> <p> <iframe width="640" height="360" src="https://www.youtube.com/embed/QORourhNyY8" frameborder="0" allowfullscreen></iframe> </p> <p><strong>I thought this was about how society doesn&#39t create equal opportunities?</strong> well….it is. Firstly at a young age you can be put off going to a computing class because you don&#39t fit the societies geek but secondly even when geeks became cool we seemed to have left women behind.Still even in the 21st Century societies view is a geek male is cool but a geek girl well they are still left with the ancient views.This therefore reducing the chances f equal opportunity for women picking computer science, an argument that supports <a href="sexism_in_IT.php.html">Alexis Miakouikila article</a>. </p> </br> <strong>so society hates women?</strong> <p>well no..the feminist movement has grown and grown and societies view has changed with regards to women&#39s place in IT and many incentives have been made to ensure this is increased,however it could be argued that societies new ‘tactics’ to equal opportunities between sexes actually reduces equality.To understand the following paragraph it is strongly recommended to read Alexis article in depth. Societies rush to get women into the field of computing has resulted in quotas to hire women, incentives for women during education and specialised programs by big technology corporations to get women to experience the workplace. While these seem like great ideas we must consider the affect that this society rule has on the opposite gender leaving university the men. </p> </br> <p> Men currently have no government educational incentives or men only experience days and due to the parsing of quotas study have found that <a href="http://www.pnas.org/content/112/17/5360">women are two-to-one more likely to secure employment from graduation than their male counterparts.<a> </p>'),
(12, 'How Society Can Change and Increase Equal Opportunities', 'Ashley-James Buckingham', 'disability society IT employment', '<p>One increase in equal opportunity which I believe deserves its own section is related to disability in employment. <a href="https://www.gov.uk/government/publications/disability-facts-and-figures/disability-facts-and-figures#education">Statistics</a> show that Disabled people are now more likely to be employed than they were in 2002, but disabled people remain significantly less likely to be in employment than non-disabled people, the chart below specifies this contrast. <p><iframe width="640" height="360" frameborder="0" scrolling="no" src="https://plot.ly/~ashbuck/2.embed?share_key=aXJfgmXoA1OU2u5JoYhp3t"></iframe></p> </p> </br> <br> <p>while there are many factors that have enabled this i would like to discuss the role of society that plays to elevate this opportunity. Societies idea of a IT employee has changed along with working expectations, with the development of high speed internet and affordable technology more and more people now work from home, this can directly aid the disabled in many ways, most obviously those who have mobility impairments are no longer expected to travel to and from an office in a busy commute to compete work. Other disabilities can also benefit from this social change, those who have sensory impairments can also work from home with specially made hardware and software that aids there ability to work. The video below demonstrates some technology specially made to aid these impairments. </p> </br> <p><iframe width="640" height="360" src="https://www.youtube.com/embed/X92Cd6jicko" frameborder="0" allowfullscreen></iframe> </p> </br> <strong>Society changes can help </strong> <p>So as we have established changes in the way society thinks can directly influence how people think and therefore increase the opportunities of everyone, in an ideal society everyone will have equal opportunity however this will no happen until everyone agrees the importance of ensuring that equality is demonstrated through society from television to the classroom and within tech companies from the top to the bottom.</p> </br>');