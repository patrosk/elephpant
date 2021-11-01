<?php

declare(strict_types=1);

$monster_definition = [
    "A monster is usually defined as a large, frightening and evil imaginary creature. It often implies
    a repulsive character, an object of dread, awful deeds or abomination. Monsters are often depicted as inherently evil beings that
    are dangerous and aggressive and have a grotesque and abnormal appearance that inspires terror and fear. Most monsters share some
    similarities with animals or humans, but are hideously deformed in one way or another. They often herald destruction and death and
    threaten the moral or social order of human existence.",

    "Greek Mythology presents a plethora of monsters, varying in size, form and origin. Many of them are
    the result of curses or transformations, and although the monsters are depicted as evil and terrible creatures, they often have
    tragic backstories. This page presents information about six monsters found in Greek Mythology and tells their story. And depending
    on how you read them, you might ask yourself the question:",
];

$monsters = [
    [
        'name' => 'Medusa',
        'image' => '/img/medusa.jpg',
        'location' => 'Sarpedon',
        'creature' => 'Once a beautiful woman, now cursed with snakes as hair',
        'powers' => 'Petrifying gaze',
        'weakness' => 'Only mortal Gorgon',
        'slain_by' => 'Perseus',

        'story' => [
            "Medusa, the daughter of Gorgon and the sea-goddess Ceto, was a woman so beautiful that the sea-god Poseidon was completely bewitched. When Medusa didn't reciprocate his advances, he was enraged and raped her in the temple of Athena.
        This made Athena furious. But not with Poseidon - she unleashed her wrath upon Medusa and cursed her.",

            "The woman was transformed into a monster with snakes as hair, so that no man could ever look at her with desire. Her gaze turned
        mortal men into stone. Shunned by everyone, she hid in the cavernous Sarpedon.",

            "The hero Perseus was sent to kill her in order to prove himself. He slayed her with
        the help of Athena, who gave him a reflective shield with which he could see Medusa without risking to meet
        her petrifying gaze. He severed her head from her body and thereafter used it to petrify his enemies. Upon completing his mission and receiving his reward,
        Perseus gifted Medusa's head to Athena who put it in her shield, thereby creating a powerful weapon.",

            "Although described as a hideous monster, Medusa was ultimately a victim of the gods' lust and anger. Making her pay for
        Poseidon's crime is, to put it mildly, just cruel. To make matters worse, she was hunted down and killed in order
        for a hero to gain recognition. Victim-blaiming much??",
        ]
    ],

    [
        'name' => 'Minotaur',
        'image' => '/img/minotaur.jpg',
        'location' => 'Labyrinth on Crete',
        'creature' => 'Offspring of woman and beast: a man with the head and tail of a bull',
        'powers' => 'Ferocious man-eater',
        'weakness' => 'Trapped in the Labyrinth',
        'slain_by' => 'Theseus',

        'story' => [
            "Angry that the king didn't sacrifice a bull to Poseidon as intended, the Sea God made the king's
        wife fall in love with the snow-white bull. The result of this love was Minotaur, a creature with the body of
        a man and the head and tail of a bull. Since there was no natural source of nourishment, Minotaur started eating
        humans to stay alive.",

            "Fearing the man-eating beast, the king commissioned a huge labyrinth, in which Minotaur was
        trapped. To keep the beast in check, fourteen youths were sacrificed at regular intervals.
        The youths were sent into the labyrinth to be hunted down and devoured by Minotaur. The hero Theseus volunteered
        to join the third batch of youths to be sacrificed, in order to kill the monster. He was aided by the king's daughter who fell in
        love with him; she gave him a ball of yarn which allowed him to retrace his stepts and navigate in the labyrinth.
        He managed to kill the Minotaur and led the youths out of the labyrinth.",

            " On his way back home, he left the king's
        daughter on an island and neglected to put up the white sails he had promised in case of a succesful mission. His father
        saw his ship approaching and, presuming his son to be dead, committed suicide. This secured the throne for Theseus.",

            "Minotaur is depicted as a ferocious monster, but it could also be argued that he was merely the result of a cruel joke by
        Poseidon. Trapping a beast in a labyrinth and then sending youths to be sacrificed or to kill it is also, arguably,
        in the gray area of morality.",
        ]

    ],

    [
        'name' => 'Hydra',
        'image' => '/img/hydra.jpeg',
        'location' => 'Lake Lerna',
        'creature' => 'Water-dwelling, many-headed serpent',
        'powers' => 'Poisonous breath and blood; for every head chopped off, the Hydra regrows two more',
        'weakness' => 'Vulnerable if all heads are removed',
        'slain_by' => 'Hercules',

        'story' => [
            "The many-headed serpent Hydra was created by the goddess Hera to kill the hero Hercules. Hydra dwelled in
        a cave said to be one of the entrances to the Underworld, thus hindering mortals to enter the realm of the dead. Not
        fearing the monster, Hercules beheaded Hydra; however, it regrew two heads for every head severed.",

            "Hercules found himself fighting with an increasingly powerful creature, and it was only with the help of his nephew that he realised he
        could defeat it by scorching the neck stumps after decapitation, thus preventing new heads from growing. In this manner,
        he finally slayed Hydra. The one immortal head of Hydra was cut off with a golden sword and put under a stone. Hercules
        then dipped his arrows in Hydra's venomous blood and used it to kill his coming enemies. Hera, upset that Hydra didn't kill Hercules,
        placed Hydra in the sky, thus creating the constellation Hydra.",

            "Like many monsters in Greek Mythology, Hydra was placed in
        a hero's way to fame. His success required the monster's defeat. Although Hydra is not described as a particularly developed
        creature, being killed by slowly having all your heads cut off and your neck stumps scorched doesn't sound like a nice way to go.",

            "After countless battles, adventures and conquests (most of them involving a lot of killing), Hercules ended up dying because his
        wife gave him a piece of cloth which, unknowingly to her, was stained with Hydra's blood from one of Hercules' arrows. The poison tore
        his skin and exposed his bones. So in the end, Hercules did not survive Hydra. Oh, the irony.",
        ]

    ],

    [
        'name' => 'Polyphemus',
        'image' => '/img/Polyphemus.gif',
        'location' => 'Island of the Cyclopes',
        'creature' => 'Cyclope',
        'powers' => 'One-eyed, man-eating giant',
        'weakness' => 'Gets drunk on wine offered by Odysseus',
        'slain_by' => 'Blinded by Odysseus',

        'story' => [
            "Polyphemus was a one-eyed giant known as a cyclope. He lived on the island of the cyclopes with his brethren, minding
        his own business herding sheep. Cyclopes were sometimes described as man-eating savages and sometimes as skilled musicians.",

            "When Odysseus and his men came upon Polyphemus, they were trapped by the cyclope in his cave. Each morning, Polyphemus left the cave to graze
        his sheep and every evening as he returned, he ate two of the men. In order to escape, Odysseus managed to get Polyphemus drunk one
        evening. As the giant dozed off, Odysseus took a sharp wooden stake and drove it into Polyphemus' only eye.",

            "The cyclope cried out in anguish but received no help. When he let the sheep out of the cave in the morning, he felt their backs to ensure the men were not
        escaping on them; however, Odysseus and his crew had tied themselves to the sheep's bellies and thus escaped the cave and left the
        island.",

            "It is understandable that Odysseus felt compelled to contrive a plan to escape after seeing two men of his crew being devoured
        every night, but gouging someone's only eye out is also pretty mean.",
        ],
    ],

    [
        'name' => 'Scylla',
        'image' => '/img/scylla.jpg',
        'location' => 'Rock of Scilla, Calabria',
        'creature' => 'Once a beautiful naiade, now a sea monster',
        'powers' => 'Four-eyed monster with six snakelike heads and twelve tentacles.',
        'weakness' => 'Cursed monster',
        'slain_by' => 'Hercules, but resurrected by her father Phorcys.',

        'story' => [
            "The monster known as Scylla was once a beautiful naiad loved by the sea-god Glaucus. He sought the help of sorceress
        Circe, who promised to make a potion that would make Scylla love him back.",

            "However, Circe herself fell in love with Glaucus. In her
        jealousy of the beautiful naiad, she poisoned the water in the spring where Scylla bathed, turning her into a terrible monster with twelve tentacles
        and six snakelike heads with three rows of razor-sharp teeth.",

            "Scylla was condemned to live as this frightful monster on the
        rock of Scilla, from which she attacked passing ships and devoured their crew. She was so feared that sailors would steer clear of the Strait of Messina, on one side of which the Rock of
        Scilla lay. Those who could not avoid passing her tried to stay just out of her range, because on the other side of the strait lived the dangerous Charybdis.",

            "Scylla was eventually killed by Hercules on his passage to Sicily, but her father Phorcys, another sea-god, used flaming torches on
        her body to bring her back to life. It's a shame he couldn't turn her back into a naiad, thus only prolonging her life as a sea monster.
        All this because Glaucus fell in love with her. Could be that she still sits on the rock of Scilla.",
        ]
    ],

    [
        'name' => 'Charybdis',
        'image' => '/img/charybdis.png',
        'location' => 'Strait of Messina',
        'creature' => 'Sea monster cursed by Zeus with an unquenchable thirst for sea water',
        'powers' => 'Drinks sea water thrice a day, creating dangerous whirlpools',
        'weakness' => 'Chained to the sea-bed',
        'slain_by' => 'None',

        'story' => [
            "Charybdis was the daughter of Poseidon. She aided her father in his ongoing rivalry over land with his brother Zeus
        by engulfing land and islands in water. Having land stolen from him made Zeus furious, so he hunted Charybdis down and chained her to the sea-bed.
        He then cursed Charybdis and transformed her into a huge, formless bladder of a monster with an uncontrollable thirst for sea water.",

            "To quench her thirst, she drank sea water thrice a day and belched it out again, creating huge and dangerous whirlpools that could
        drag entire ships under water. She was so feared by sailors, fishermen and heroes alike, that everyone tried to avoid her at all costs.
        Steering clear from her when travelling through the Strait of Messina was however not safe either, because the sea-monster Scylla
        dwelled on the rock of Scilla, ready to devour the ships' crew members.",

            "The two monsters were just within an arrow-shot of each other,
        making the journey through the Strait of Messina precarious. Most heroes would, like Odysseus, rather risk losing a few crew members to
        Scylla than facing the horrors of Charybdis. She was never killed but did not escape her fate as a sea monster. One would think that an
        uncle would not be so cruel to his niece - but then again, the Greek gods did not have the most functional family relations.",

            "The proverb to be 'between Scylla and Charybdis' is still used today to describe a situation
        where one is presented with two opposite dangers, where one has to find a route that avoids both or simply choose the lesser of two evils.
        There is in fact a whirlpool located on the coast of Sicily, opposite the Rock of Scilla, where two currents meet. However, it is so small that
        it is only dangerous in extreme weather conditions.",
        ]
    ],
];
