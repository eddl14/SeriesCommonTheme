
INSERT INTO utilisateur (prenomUtilisateur,nomUtilisateur,username,password,email,dateNaissance,usercanonical,emailcanonical,enabled,salt,last_login,locked,expired,expires_at,confirmation_token,password_requested_at,roles,credentials_expired,credentials_expired_at)
VALUES ("Levy","LOESER","Alezan","c54Qsu3E","levy.loeser@outlook.fr","1978-12-02","","",12,"sdcsd","",15,"12/05/16 05:06:08",),
("Hugo","KIWI","Quadrane","b99s3yEM","hugo.kiwi@outlook.fr","1985-04-01"),
("Matthew","ALLON","Orion","yV6k5a7Z","matthew.allon@outlook.fr","1968-06-10"),
("Chetan","BALWE","Lagon","uT92pz7D","chetan.balwe@outlook.fr","1993-12-01"),
("Luc","LI","Jeronimo","zUa587yY","luc.li@outlook.fr","1963-11-21"),
("Vladimir","HABICH","Beta","47FnRe5a","vladimir.habich@outlook.fr","2000-07-26"),
("Ahmed","MOUSSAOUI","Icare","Cp2spJ68","ahmed.moussaoui@outlook.fr","1971-05-07"),
("Sam","PAYNE","Riri","txRLv829","sam.payne@outlook.fr","1997-09-15"),
("David","RYDTH","Uther","NK8gmk65","david.rydth@outlook.fr","1991-03-19"),
("Pierre","SCHAPIRA","Wanek","3wD4W9px","pierre.schapira@outlook.fr","1999-04-07");

INSERT INTO serie (nomOriginalSerie,nomSerie,synopsisSerie,resumeSerie,anneeProdSerie) 
VALUES ("Game of Thrones", "Le Trône de fer", "Dans un pays où l'été peut durer plusieurs années et l'hiver toute une vie, 
des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. Pendant ce temps,
 complots et rivalités se jouent sur le continent pour s'emparer du Trône de Fer, le symbole du pouvoir absolu. ",
"en attente de résumé.","2011-01-25"),
("Breaking Bad", "Breaking Bad: Le Chimiste", "Atteint d'un cancer incurable, le professeur de chimie Walter White décide 
de tout mettre en oeuvre pour mettre définitivement à l'abri sa famille. Sa solution ? Fabriquer et vendre du crystal meth. 
Il fait appel à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone...","en attente de résumé.","2008-05-01"),
("Mr.Robot", "Mr.Robot", "Elliot est un jeune programmeur anti-social qui souffre d'un trouble du comportement
 qui le pousse à croire qu'il ne peut rencontrer des gens qu'en les hackant. Il travaille pour une firme spécialisée dans 
la cyber-sécurité mais un homme connu sous le nom de Mr Robot l'approche un jour pour faire tomber une compagnie 
surpuissante qui fait partie de celles qu'il doit justement protéger... ","en attente de résumé.","2015-02-16"),
("House of Cards", "Le Château de cartes", "Frank Underwood, homme politique rusé et vieux briscard de Washington, 
est prêt à tout pour conquérir le poste 'suprême'... ","en attente de résumé.","2013-01-15"),
("11.22.63", "11/22/63", "Un professeur essaie d'éviter le meurtre de JFK en remontant le temps, 
mais sa mission est mise en péril par Lee Harvey Oswald et le passé qui ne veut pas être changé. ","en attente de résumé.","2016-05-12"),
("American Horror Story", "Histoire d'horreur"," A chaque saison, son histoire. American Horror Story nous embarque dans des récits
 à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct. De quoi vous confronter à vos plus grandes frayeurs ! ",
"en attente de résumé.","2011-05-18"),
("Luther", "Luther", "Brillant inspecteur à la Criminelle, Luther a parfois du mal à contenir ses propres démons intérieurs... ",
"en attente de résumé.","2010-04-19"),
("Äkta Människor", "Real Humans", "Äkta Människor ('les véritables humains') se situe dans un monde parallèle où les robots humanoïdes (Hubot) 
sont devenus des machines courantes dans la société. Ces Hubots sont très réalistes et sont configurés de telle sorte à remplir une large demande. 
S'adaptant à tous les besoins humains, de la simple tâche ménagère à des activités plus dangereuses voire illégales, la société semble en dépendre. 
Une partie de la population refuse alors l'intégration de ces robots tandis que les machines manifestent des signes d'indépendance et de personnalité propre.",
"en attente de résumé.","2012-06-08"),
("Bates Motel", "Motel Bates", "Une plongée dans le passé du fameux Norman Bates, futur propriétaire de l'hôtel de 'Psychose',
 alors qu'il partage une relation très complexe avec sa mère, Norma. Pourquoi est-il devenu un serial killer ? ",
"en attente de résumé.","2013-01-07"),
("Misfits", "Misfits", "Cinq jeunes marginaux qui n'ont rien en commun se retrouvent en même temps à devoir remplir des travaux 
d'intérêts généraux. Un jour, ils essuient un puissant et étrange orage et, au sortir, se retrouvent tous affublés de supers pouvoirs... ",
"en attente de résumé.","2009-04-09");

INSERT INTO saison (nomSaison,numeroSaison,resumeSaison,anneeProduction)
VALUES("saison", 1, "
    Sur le continent de Westeros, le roi Robert Baratheon règne sur le Royaume des Sept Couronnes depuis qu'il a mené à la victoire la rébellion contre le roi fou, Aerys II Targaryen, dix-sept ans plus tôt. Son guide et principal conseiller, 
Jon Arryn, venant de décéder, il part dans le nord du royaume demander à son vieil ami Eddard Stark, seigneur suzerain du Nord et de la maison Stark, de remplacer leur regretté mentor au poste de « Main du roi ». Eddard, peu désireux de quitter ses terres,
 accepte à contre-cœur de partir à la cour avec ses deux filles Arya et Sansa, alors que Jon Snow, son fils bâtard, se prépare à intégrer la fameuse Garde de Nuit : la confrérie protégeant le royaume depuis des siècles à son septentrion, de toute créature pouvant
provenir d'au-delà du Mur protecteur. Mais, juste avant le départ pour le Sud, Bran, fils Stark, fait une découverte en escaladant une tour de Winterfell dont découleront des conséquences inattendues…
    Dans le même temps, sur le continent Est, Viserys Targaryen, héritier « légitime » en exil des Sept Couronnes et fils d'Aerys, projette de marier sa jeune sœur Daenerys au khal Drogo, le chef d'une puissante horde de cavaliers nomades afin de s'en faire des alliés, 
en vue de la reconquête du royaume. Mais Viserys est presque aussi instable mentalement que son père. ","2011-02-03"),
("saison", 2, "
    Après la mort du roi Robert Baratheon et d'Eddard Stark, la légitimité du roi Joffrey est contestée par Stannis et Renly, frères de Robert, tandis que Sansa Stark est retenue comme otage à Port-Réal. Robb Stark poursuit sa rébellion pour venger son père et libérer sa sœur,
 bien que personne ne sache où se trouve Arya Stark. Lord Tywin Lannister, père de la Reine régente Cersei et grand-père du roi, qui la détient sans le savoir, continue de son côté à lutter à la fois contre les Baratheon et contre les Nordiens de Robb Stark. Chaque camp cherche de nouveaux alliés, 
et la guerre se prolonge, ignorant la menace d'au-delà du Mur. En effet, Lord Jeor Mormont continue de guider la Garde de Nuit face aux Sauvageons, soutenu par Jon Snow, cherchant désespérément un moyen d'arrêter la marche de leur immense armée vers le sud.
    De l'autre côté du Détroit, après avoir perdu les Dothraki, Daenerys Targaryen emmène ses dragons jusqu'à la cité de Qarth, où elle espère trouver un appui en vue de reconquérir les Sept-Couronnes. ","2012-04-07"),
("saison", 1, "
    Walter « Walt » White est un professeur de chimie dans un lycée du Nouveau-Mexique et un père de famille de 50 ans. Sa femme Skyler est enceinte et son fils Walter Jr., est handicapé. Son quotidien déjà morose devient carrément noir lorsqu'il apprend qu'il est atteint d'un incurable cancer des poumons. 
Les médecins ne lui donnent pas plus de deux ans à vivre.
    Hank, son beau-frère et agent à la DEA, lui fait part des énormes sommes d'argent brassées par le marché de la drogue. Afin d'économiser suffisamment d'argent pour sa famille lorsqu'il ne sera plus de ce monde, Walter décide de s'associer avec Jesse Pinkman, un de ses anciens élèves devenu junkie et accessoirement dealer.
 Grâce à ses connaissances poussées en chimie, Walter produit de la méthamphétamine à la limite de la perfection tandis que Jesse se charge de la distribution du 'Blue Sky', surnom donné au produit en raison de sa pureté et de son aspect bleuté. Le duo improvisé met alors en place un labo itinérant dans un vieux camping-car et 
commence à « cuisiner » dans le secret absolu au milieu d'un désert d'Albuquerque.Les deux hommes seront vites dépassés par leur double vie et devront faire face à la violente réalité du milieu de la drogue qui les plongera dans une longue descente aux enfers. ","2008-01-06"),
("saison", 2, "
    Walter commence à se faire un nom dans le milieu de la drogue, sous le pseudonyme d'Heisenberg. La nouvelle double vie de Walter manque à maintes reprises d'être découverte par sa famille, à qui il a finalement avoué son cancer. Skyler, très inquiète, décide de reprendre son ancien travail de comptable, alors qu'elle est à huit mois de grossesse. 
Mais ses soupçons envers son mari sont de plus en plus insistants. Walt et Jesse décident de monter leur propre affaire de trafic de drogue. Hank est sur la trace de Heisenberg sans savoir qu'il s'agit de son beau frère Walter White. La confiance de Walter en Jesse s'effrite lorsque celui-ci commence à consommer de la drogue intempestivement. 
Peu après, le cancer de Walter est suffisamment freiné pour pouvoir être opéré. Sous l'effet de l'anesthésie, dans un lapsus, Walter révèle à sa femme qu'il a bien un secret.","2009-05-08"),
("saison", 1, "
    A VENIR","2015-04-09"),
("saison", 2, "
    A VENIR","2016-01-01"),
("saison", 1, "
    La série débute dans les rues de Washington. Le député Francis Underwood tue un chien blessé par une voiture en l'étranglant, puis s'adresse au spectateur en affirmant qu'il faut parfois faire des choses déplaisantes, mais nécessaires. L'action se concentre sur ce parlementaire démocrate de Caroline du Sud, puissant et ivre de pouvoir. 
Après avoir soutenu le candidat Garrett Walker et permis son élection à la Présidence des États-Unis contre la promesse d'être nommé Secrétaire d'État, Underwood est trahi et n'accède pas à ce poste : le président le juge utile dans sa fonction de whip de la majorité démocrate. Profondément déçu, il se comporte en parfait lieutenant du président et l'assiste fidèlement dans sa tâche, 
mais élabore dans le même temps une stratégie pour l'évincer du pouvoir.","2013-06-06"),
("saison", 2, "
    Alors que Frank Underwood est sur le point de prendre ses fonctions, Zoe Barnes et deux de ses collègues, Lucas Goodwin et Janine Skorsky, poursuivent leurs investigations et parviennent à localiser Rachel Posner. L'homme de main de Frank, Douglas Stamper, force Rachel à habiter dans un endroit isolé. Underwood donne rendez-vous à Zoe Barnes dans le métro de Washington et la pousse sous une rame, 
sans être vu. Janine abandonne ses recherches et s'installe à Ithaca (New York) afin d'éviter d'être tuée elle aussi. La mort de Zoe encourage Lucas à continuer seul. Il sollicite l'aide d'un hacker, Gavin Orsay, pour retrouver l'historique des conversations entre Frank et Zoe, mais celui-ci travaille pour Doug et a pour mission de piéger Lucas. Ce dernier est arrêté par le FBI et est accusé de cyber-terrorisme.
 Plus tard dans la saison, le hacker fait du chantage à Doug en évoquant Rachel Posner. Craignant de devoir déménager à nouveau et menacée par Doug, elle le frappe violemment à la tête avec une pierre, le laissant inanimé dans la forêt. Elle s'enfuit au volant de sa voiture.","2014-03-06"),
("saison", 1, "
    A VENIR","2016-02-02"),
("saison", 2, "
    A VENIR","2017-06-06"),
("Murder House", 1, "
    La première saison de la série est centrée autour de la famille Harmon composée de Ben, Vivien et Violet. Peu après que Vivien a fait une fausse couche et que Ben l'a trompée avec l’une de ses étudiantes, les Harmon décident de quitter Boston et achètent une maison victorienne à Los Angeles.","2011-04-04"),
("Asylum", 2, "
    La deuxième saison est centrée sur l'asile psychiatrique (asylum en anglais) de Briarcliff, dirigé de main de fer en 1964 par Sœur Jude (Judy Martin pour l'état civil), une nonne autoritaire et sadique qui prend sa mission très à cœur, cherchant la rédemption pour une faute passée. Elle est aidée dans cette tâche par la jeune et naïve Sœur Mary-Eunice et le Dr Arthur Arden, un médecin au passé obscur qui s'adonne à des expérimentations perverses. 
L'établissement est sous les ordres d'un prêtre charismatique, arriviste et peu scrupuleux, Monseigneur Timothy Howards.","2012-05-07"),
("saison", 1, "
    The first series of Luther aired in Summer 2010 and received positive reviews from critics, getting an average of 5.9 million viewers per episode","2010-06-06"),
("saison", 2, "
    In August 2010, the BBC announced that it had commissioned a second series for 2011. Filming started in late September/early October 2010. Originally planned to be broadcast as two two-hour episodes,[9] it was shown as four one-hour episodes. The first episode was shown on BBC One on 14 June 2011.","2011-05-05"),
("saison",1,"Leo Eischer (Andreas Wilson) a grandi en tant que fils du scientifique David Eischer (Thomas W. Gabrielsson) avec les hubots. Il a une relation amoureuse avec la hubot Mimi (Lisette Pagler). Il dirige un groupe de hubots sauvages avec Niska (Eva Röse), et il est à l'avant-garde de la lutte pour leur liberté. Mimi, qui a été blessée, est enlevée par des vendeurs au noir. Réparée et reprogrammée, elle est revendue à un magasin de hubots. 
Leo, accompagné du hubot Max, part à sa recherche, tandis que les autres rebelles cherchent refuge dans une église. Un double homicide a été découvert dans la maison même où ils avaient auparavant rechargé leurs batteries. Les policiers Beatrice Novak (Marie Robertson) et Ove Holm (Wahlström Ola) de l'EHURB (traduit en français par BSH pour Brigade Spéciale des Hubots), unité spécialisée du crime commis par des hubots, commencent la traque des hubots, suspects du double meurtre…",
"2012"),
("saison",2,"La famille Engman, qui a recueilli Mimi (Lisette Pagler), se retrouve au cœur des événements qui se précipitent. Les enfants de David se retrouvent séparés, et seule Beatrice Eischer (Marie Robertson), le clone de la femme de David, continue de rechercher le précieux code permettant de libérer les hubots. Malheureusement, elle n'est pas la seule à le convoiter, et personne ne sait encore ce qui pourrait se passer s'il se répandait, car, parallèlement, 
un virus très dangereux se répand chez les hubots. Malgré tout cela, certains enfants de David trouvent leur voie auprès des humains, Flash (Josephine Alhanko) devient Florentine Jarmeus, et fonde une famille, tandis que Mimi devient juriste en travaillant auprès d’Inger (Pia Halvorsen), changeant les mentalités en nous questionnant tous sur la définition de l'humain et sur son avenir","2013-08-08"),
("saison", 1, "
    Après la mort mystérieuse de son mari, Norma Bates décide de refaire sa vie loin de l’Arizona, dans la petite ville de White Pine Bay dans l’Oregon, avec son fils, Norman. Elle rachète là-bas un vieux motel abandonné ainsi que le manoir qui trône majestueusement quelques mètres plus loin. À peine installés, des événements tragiques vont renforcer le lien qui existe entre eux.","2013-06-06"),
("saison", 2, "
    A VENIR","2014-08-08"),
("saison",1,"Cinq jeunes délinquants effectuant leurs peines de travaux d'intérêt général dans un centre communautaire, sont frappés par un éclair à la suite d'une tempête étrange. Ils découvrent ensuite que la foudre leur a donné des facultés surnaturelles.","2009-08-08"),
("saison",2,"Les quatre ados ont retrouvé Nathan, et connaissent désormais son pouvoir. Cependant, ils sont sauvés les uns après les autres par un mystérieux individu d'une agilité remarquable, toujours là au bon moment, et dont l'identité reste un mystère…","2010-09-09");

INSERT INTO episode(numeroEpisode,nomEpisode,nomOriginalEpisode,resumeEpisode)
VALUES (1,"L'hiver vient","Winter is coming","Au delà d'un gigantesque mur de protection de glace dans le nord de Westeros. Robert Baratheon, le roi, arrive avec son cortège au sud du mur de Winterfell pour demander de l'aide à son vieil ami Eddard Stark. Dans le même temps, sur un autre continent, les derniers survivants de l'ancien régime Targaryen sont à la recherche d'une nouvelle alliance pour reprendre leur royaume de «l'usurpateur» roi Robert..."),
(2,"La route royale","The Kingsroad","Le roi Robert Baratheon et son entourage prennent la direction du Sud avec Eddard Stark et ses filles Sansa et Arya. Sur la route, Arya a des ennuis avec le prince Joffrey, ce qui laisse à Eddard une décision difficile à prendre. Pendant ce temps, Jon Snow et Tyrion Lannister se dirigent vers le Mur, dans le Nord, le premier pour rejoindre la Garde de nuit et le second par curiosité. A Essos, Daenerys apprend ce que cela signifie d'être mariée à un seigneur de guerre Dothraki. Sur les terres de Winterfell, Bran Stark lutte pour ne pas mourir après sa chute... "),
(1,"Chute libre","Pilot","Professeur de chimie dans un lycée, Walter White travaille parallèlement dans une station de lavage de voitures afin de boucler les fins de mois de sa famille, composée de sa femme Skyler, qui est enceinte, et de son fils Walter Jr, un adolescent handicapé. Alors qu'il découvre qu'il est atteint d'un cancer du poumon en stade terminal, Walter décide de reprendre sa vie en main. Utilisant ses connaissances en chimie, il s'attelle à la fabrication de méthamphétamines, avec l'aide de Jesse Pinkman, un ancien élève qui s'est spécialisé dans le trafic de drogues..."),
(2,"Le choix","Cat's in the bag','Après leur mésaventure dans le désert, Walter et Pinkman doivent se débarrasser des corps des deux trafiquants qu'ils ont éliminé. Leur tâche se complique quand ils découvrent avec stupéfaction que l'un d'entre eux a survécu. Les deux acolytes ne sont pas d'accord quant à la marche à suivre. De son côté, Skyler s'interroge sur le comportement étrange de son mari. Intriguée par un appel, elle mène l'enquête pour découvrir ce qu'il fabrique. Au lycée, Walter ne parvient pas à faire abstraction de ses ennuis...'),
(1,'eps1.0_hellofriend.mov','eps1.0_hellofriend.mov",''),
(2,"eps.1.1_ones-and-zer0es.mpeg","eps.1.1_ones-and-zer0es.mpeg ",''),
(1,"L'échiquier politique","Chapter 1","Elu démocrate au Congrès, Francis Underwood est un politicien expérimenté, séduisant et calculateur. Il est un des principaux architectes de la victoire de Garett Walker, élu président des Etats-Unis grâce à son aide. En échange, ce dernier avait promis à Francis le poste de Secrétaire d'Etat. Mais une fois installé à la fonction suprême, Walker rompt sa promesse. Furieux, Francis entreprend de l'évincer et de détruire tous ceux qui l'ont trahi, avec l'aide de sa femme Claire, non moins ambitieuse, et de quelques pions qui oeuvrent au service de ses fantasmes. 
Désormais, Francis suivra ses propres règles pour parvenir à ses fins politiques..."),
(2,"Chaises musicales","Chapter 2","Politicien sans scrupules, stratège hors-pair, Francis Underwood ne recule devant rien pour accéder au poste suprême. Il manipule Zoe Barnes, une jeune journaliste qui, malgré sa naïveté, gagne en influence au sein de la rédaction du Washington Herald. Le démocrate aimerait qu'elle publie dans le journal un article susceptible de mettre la Maison Blanche dans une situation très inconfortable. Il s'agirait de piéger Michael Kern, le nouveau secrétaire d'Etat. De son côté, son épouse Claire, tout aussi ambitieuse, est bien décidée à ne plus se laisser attendrir.
 Elle n'hésite pas à réduire de moitié de l'effectif de la fondation qu'elle dirige..."),
(1,"","The Rabbit Hole",""),
(2,"","The kill Floor",""),
(1,"La maison","Pilot","Les Harmon semblent constituer la famille américaine parfaite, mais les apparences sont trompeuses. Vivien, la mère, ancienne violoncelliste, a renoncé à la musique depuis longtemps. Elle ne se remet pas du traumatisme causé par une fausse couche douloureuse et l’aventure extraconjugale de son mari, Ben. Ce dernier, psychiatre, a eu une liaison avec une de ses étudiantes. Leur fille... "),
(2,"Intrus","Home Invasion","Vivien et Ben se réconcilient peu à peu. Vivien annonce à Ben qu’elle est de nouveau enceinte. Dans le même temps, il reçoit un appel de sa maîtresse, Hayden, qui le supplie d’accepter une dernière rencontre. Cédant à la tentation et à la culpabilité, Ben part la retrouver à Boston, un soir. Alors qu’elles sont seules à la maison, Vivien et Violet sont agressées par trois..."),
(1,"Le mal en soi","episode 1","Après sept mois de suspension, l'inspecteur John Luther peut reprendre le service. Dorénavant, il est secondé par Justin Ripley. Le tandem de policiers héritent de l'enquête sur le meurtre de Douglas et Laura Morgan. Les cadavres du couple ont été retrouvés chez eux par leur fille Alice. Luther est persuadé qu'Alice Morgan est coupable. Alors qu'il n'a pas de preuves de sa responsabilité dans le double homicide, il fait quand même part de son intime conviction à la jeune femme pour observer sa réaction. Mais celle-ci ne se laisse pas déconcerter par les accusations de l'inspecteur.
 Parallèlement à ce dossier, Luther apprend de sa femme Zoe qu'elle le quitte pour un autre..."),
(2,"Les liens du sang","epsiode 2","Luther est relâché comme Mark a déclaré avoir frappé le premier. Alice Morgan décide de harceler Zoe pour se venger de Luther qui l'a accusé de l'avoir piégé. Alors qu'un sniper abat plusieurs officiers de police, Luther reçoit une vidéo à son bureau. Owen Lynch, un soldat blessé en Afghanistan dont le père est en prison, revendique les crimes. Luther essaye de faire pression sur Terry Lynch, le père du jeune homme..."),
(1,"episode 1","Break In,Break Loose","Au royaume de Suède, une nouvelle génération de robots, les «hubots», a été créée pour rendre service aux humains. Tâches domestiques, assistance aux personnes âgées, les hubots sont des employés modèles qui ne dorment jamais et ressemblent à s'y méprendre aux humains. Mais certains androïdes, surnommés «les enfants de David», se libèrent de la tutelle de leurs maîtres. Parmi eux figure Mimi. Kidnappée par des trafiquants et séparée des autres hubots rebelles, Mimi est vendue au marché noir. Amoureux de la belle androïde, Léo, un autre enfant de David, part à sa recherche. Pendant ce temps, la famille Engman se dote d'un nouveau hubot, dont la mémoire a été effacée..."),
(2,"episode 2","Trust No One","Un double meurtre a été commis dans la vieille maison où les «enfants de David» ont rechargé leurs batteries. La police se lance à la recherche des assassins. Inger accepte difficilement la présence d'Anita (Mimi), la nouvelle hubote, tandis que de l'argent disparaît du portefeuille de Hans. Roger regrette de plus en plus l'absence de Kevin, son beau-fils, et sa haine des hubots ne fait que croître, en particulier vis-à-vis de celui qui partage la vie de son ex-femme..."),
(1,"La veuve noire","First Dream,Then You Die","Six mois après la mort de son mari, Norma Bates et son fils, Norman, déménagent à White Bine Bay, dans l'Oregon. Elle a acheté un hôtel dans une vente aux enchères. Le site est petit, mais elle espère faire tourner cette affaire malgré les mises en garde et les menaces de l'ancien propriétaire Keith Summers. La ville projette, en effet, de construire une route contournant la ville. Alors que Norman fait bonne impression auprès des filles au sein de sa nouvelle école, il file la nuit retrouver ses camarades. Mais une jeune fille attaque subitement sa mère. Les événements se précipitent dans la ville. La panique s'installe progressivement..."),
(2,"Suspicions","Nice Town You Picked,Norma","Dylan, le fils aîné de Norma issu d'un précédent mariage, arrive en ville. Les relations tendues qu'il entretient avec sa mère bousculent l'équilibre de la famille..."),
(1,"Une journée particulière","Episode 1","Nathan, Kelly, Curtis, Alisha et Simon, cinq adolescents condamnés à des travaux d'intérêt généraux pour divers petits délits, sont occupés à repeindre des bancs lorsqu'un violent orage éclate au-dessus de leur tête. Ils fuient Tony, leur surveillant qu'ils se sont amusés à provoquer depuis le début de la journée et sont frappés par la foudre. Ils survivent au choc. C'est pour découvrir qu'ils sont maintenant dotés chacun d'un pouvoir très particulier."),
(2,"Il y a quelqu'un qui sait","Episode 2","Alors qu'ils ramassent les déchets, le petit groupe tomber sur un homme complètement nu. Nathan le reconnait : c'est le petit ami de sa mère ! Par ailleurs, quelqu'un sait ce qu'ils ont fait à leur directeur de probation...");

INSERT INTO genre(libelleGenre,ageConseille)
VALUES ('Drame/Fantasy médiéval','16 ans et plus'),
('Drame/Policier/Thriller','16 ans et plus'),
('Drame/Techno-thriller/Thriller psychologique/Satire sociale','16 ans et plus'),
('Politique/Thriller','16 ans et plus'),
('Policier/Science-fiction','12 ans et plus'),
('Drame/Fantastique/Horreur','16 ans et plus'),
('Policière','16 ans et plus'),
('Drame/Science-fiction','12 ans et plus'),
('Drame/Thriller','16 ans et plus'),
('Super-héros/Comédie noire/Fantastique/Science-fiction','16 ans et plus');

INSERT INTO acteur (prenomActeur,nomActeur)
VALUES ('Peter','Dinklage'),
('Kit','Harington'),
('Emilia','Clarke'),
('Lena','Headey'),
('Maisie','Williams'),
('Sophie','Turner'),
('Bryan','Cranston'),
('Anna','Gunn'),
('Aaron','Paul'),
('Dean','Norris'),
('Betsy','Brandt'),
('Rami','Malek'),
('Christian','Slater'),
('Portia','Doubleday'),
('Carly','Chaikin'),
('Martin','Wallström'),
('Kevin','Spacey'),
('Robin','Wright'),
('Kate','Mara'),
('Corey','Stoll'),
('Kristen','Connoly'),
('James','Franco'),
('Chris','Cooper'),
('Cherry','Jones'),
('Sarah','Gadon'),
('Sarah','Paulson'),
('Evan','Peters'),
('Jessica','Lange'),
('Frances','Conroy'),
('Angela','Bassett'),
('Idris','Elba'),
('Dermot','Crowley'),
('Micheal','Smiley'),
('Ruth','Wilson'),
('Andrea','Wilson'),
('Lisette','Pagler'),
('Pia','Halvorsen'),
('Marie','Robertson'),
('Vera','Farmiga'),
('Freddie','Highmore'),
('Max','Thieriot'),
('Nestor','Carbonell'),
('Nicola','Peltz'),
('Robert','Sheehan'),
('Lauren','Socha'),
('Nathan','Stewart-Jarrett'),
('Antonia','Thomas');

INSERT INTO producteur (prenomProducteur,nomProducteur)
VALUES ('Mark','Huffam'),
('Frank','Doelger'),
('Mark','Johnson'),
('Sam','Esmail'),
('David','Fincher'),
('Bad Robot Production','Warner Bros.Television'),
('Alexis Martin','Woodall'),
('Patrick','McKee'),
('Justis','Greene'),
('Neil','Cross'),
('Stefan','Baron'),
('Henrik','Widman'),
('American Genre','Carlton Cuse Productions'),
('Kerry Ehrin','Production'),
('Universal','Television'),
('Kate','Crowe');

INSERT INTO realisateur (prenomRealisateur,nomRealisateur)
VALUES ('Timothy','Van Patten'),
('Brian','Kirk'),
('Vince','Gilligan'),
('Niels Arden','Oplev'),
('Sam','Esmail'),
('David','Fincher'),
('Kevin','Macdonald'),
('Ryan','Murphy'),
('Brad','Falchuk'),
('Sam','Miller'),
('Stefan','Schwartz'),
('Levan','Akin'),
('Harald','Hamrell');