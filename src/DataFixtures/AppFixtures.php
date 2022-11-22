<?php

namespace App\DataFixtures;

use App\Entity\Placard;
use App\Entity\Member;
use App\Entity\Fabrication;
use App\Entity\Pasta;
use App\Repository\PastaRepository;
use App\Repository\CotturaRepository;
use App\Repository\FabricationRepository;
use App\Repository\MemberRepository;
use App\Repository\PlacardRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Cottura;

class AppFixtures extends Fixture
{
    /**
     * Generates initialization data for pastas : [intitulé, parent]
     * @return \\Generator
     */
    private static function fabricationDataGenerator(){
        yield ["artisanale", null];
        yield ["industriel", null];
        yield ["Mario","artisanale"];
        yield ["Luigi", "artisanale"];
        yield ["panzani","industriel"];
    }


    /**
     * Generates initialization data for pastas : [nome, origine, dimensioni, [fabrication_intitulé, fabrication_parent]]
     * @return \\Generator
     */
    private static function pastasDataGenerator()
    {
        yield ["Tagiatelle", "Naple", 5, ["artisanale", "Mario"]];
        yield ["Pasta Box", "Rome", 4, ["artisanale", "Mario"]];
        yield ["Pen", "Florence", 3, ["artisanale", "Mario"]];
        yield ["Torsade", "Francfort", 5, ["artisanale", "Mario"]];
        yield ["Spagetti", "Seyches", 8, ["artisanale", "Mario"]];
        yield ["Coude", "Bras long sur seine", 5, ["artisanale", "Mario"]];
    }

    /**
     * Generates initialization data for cottura:
     *  [pasta_nome, pasta_origine, pasta_size, pasta_fabrication, cuisson, durée]
     * @return \\Generator
     */
    private static function cotturaGenerator()
    {
        yield ["Tagiatelle", "Naple", 5, "aldente", 6];
        yield ["Pasta Box", "Rome", 4, "bueno cuito", 10];
        yield ["Pasta Box", "Rome", 4,  "aldente", 7];
        yield ["Pen", "Florence", 3, "mi cuito", 8];
        yield ["Pen", "Florence", 3, "aldente", 5];
        yield ["Torsade", "Francfort", 5, "bueno cuito", 11];
        yield ["Torsade", "Francfort", 5, "aldente", 9];
        yield ["Spagetti", "Seyches", 8, "mi cuito", 7];
        yield ["Spagetti", "Seyches", 8,"aldente", 6];
        yield ["Coude", "Bras long sur seine", 5,"aldente", 7];
    }


    /**
     * Generates initialization data for member:
     *  [pasta_nome, pasta_origine, pasta_size,pasta_fabrication, nom]
     * @return \\Generator
     */
    private static function memberGenerator()
    {
        yield [[["Tagiatelle", "Naple"],["Pasta Box", "Rome"]],  "Fabulo"];
        yield [[["Torsade", "Francfort"],["Coude", "Bras long sur seine"]],  "Pablito"];
    }

    /**
     * Generates initialization data for member:
     *  [pasta_nome, pasta_origine, pasta_size,pasta_fabrication, nom, description, publiée]
     * @return \\Generator
     */
    private static function placardGenerator()
    {
        yield [[["Tagiatelle", "Naple"],["Pasta Box", "Rome"]],  "Fabulo", "Pour les repas de tout les jours", True];
        yield [null, 'Fabulo', "Mon placard secret", False];
        yield [[["Torsade", "Francfort"],["Coude", "Bras long sur seine"]], 'Pablito', "Pour les grosses faims", True];
    }

    public function load(ObjectManager $manager)
    {
        $fabricationRepo = $manager->getRepository(Fabrication::class);

        foreach (self::fabricationDataGenerator() as [$intitulé, $parent_name]){
            $fabrication = new Fabrication();
            $fabrication->setIntitulé($intitulé);
            if ($parent_name !== null){
                $parent = $fabricationRepo->findOneBy(['parent' => $parent_name]);
                $fabrication->setParent($parent);
            }
            $manager->persist($fabrication);
            $manager->flush();
        }

        $pastaRepo = $manager->getRepository(Pasta::class);

        foreach (self::pastasDataGenerator() as [$nome, $origine, $dimensioni, $fabrications_name] ) {
            $pasta = new Pasta();
            $pasta->setNome($nome);
            $pasta->setOrigine($origine);
            $pasta->setDimensioni($dimensioni);

            foreach ($fabrications_name as $fabrication_name){
                $fabrication = $fabricationRepo->findOneBy(['intitulé' => $fabrication_name]);
                $fabrication->addPasta($pasta);
                $pasta->addFabrication($fabrication);
                $manager->persist($fabrication);
                $manager->persist($pasta);
            }

            $manager->persist($pasta);
        }
        $manager->flush();

        foreach (self::cotturaGenerator() as [$nome, $origine, $dimensioni, $typo, $tiempo])
        {
            $pasta = $pastaRepo->findOneBy(['nome' => $nome, 'origine' => $origine]);
            $cottura = new Cottura();
            $cottura->setTiempo($tiempo);
            $cottura->setTypo($typo);
            $pasta->addCottura($cottura);
            // there's a cascade persist on fim-recommendations which avoids persisting down the relation
            $manager->persist($pasta);
        }
        $manager->flush();

        foreach (self::memberGenerator() as [$pastas, $nom])
        {
            $member = new Member();
            $member->setNom($nom);
            foreach ($pastas as [$nome, $origine]) {
                $pasta = $pastaRepo->findOneBy(['nome' => $nome, 'origine' => $origine]);
                $pasta->setMember($member);
            }
            // there's a cascade persist on fim-recommendations which avoids persisting down the relation
            $manager->persist($pasta);
            $manager->persist($member);
        }
        $manager->flush();

        $memberRepo = $manager->getRepository(Member::class);

        foreach (self::placardGenerator() as [$pastas, $nom, $description, $publiée]){
            $placard = new Placard();
            $placard->setDescription($description);
            $placard->setPubliee($publiée);
            if ($pastas != null){
                foreach ($pastas as [$nome, $origine]) {
                    $pasta = $pastaRepo->findOneBy(['nome' => $nome, 'origine' => $origine]);
                    $pasta->addPlacard($placard);
                    $manager->persist($pasta);
                }
            }
            $member = $memberRepo->findOneBy(['nom'=>$nom]);
            $member->addPlacard($placard);
            $manager->persist($pasta);
            $manager->persist($member);
            $manager->persist($placard);
        }

        $manager->flush();

    }
}

