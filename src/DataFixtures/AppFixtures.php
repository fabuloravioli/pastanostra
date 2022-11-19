<?php

namespace App\DataFixtures;

use App\Entity\Member;
use App\Entity\Fabrication;
use App\Entity\Pasta;
use App\Repository\PastaRepository;
use App\Repository\CotturaRepository;
use App\Repository\FabricationRepository;
use App\Repository\MemberRepository;
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
        yield ["Tagiatelle", "Naple", 5, ["artisanale", "Mario"], "aldente", 6];
        yield ["Pasta Box", "Rome", 4, ["artisanale", "Mario"], "bueno cuito", 10];
        yield ["Pasta Box", "Rome", 4, ["artisanale", "Mario"], "aldente", 7];
        yield ["Pen", "Florence", 3, ["artisanale", "Mario"],"mi cuito", 8];
        yield ["Pen", "Florence", 3, ["artisanale", "Mario"],"aldente", 5];
        yield ["Torsade", "Francfort", 5, ["artisanale", "Mario"],"bueno cuito", 11];
        yield ["Torsade", "Francfort", 5, ["artisanale", "Mario"],"aldente", 9];
        yield ["Spagetti", "Seyches", 8, ["artisanale", "Mario"],"mi cuito", 7];
        yield ["Spagetti", "Seyches", 8, ["artisanale", "Mario"],"aldente", 6];
        yield ["Coude", "Bras long sur seine", 5, ["artisanale", "Mario"],"aldente", 7];
    }


    /**
     * Generates initialization data for member:
     *  [pasta_nome, pasta_origine, pasta_size,pasta_fabrication, nom]
     * @return \\Generator
     */
    private static function memberGenerator()
    {
        yield ["Tagiatelle", "Naple", 5, ["artisanale", "Mario"], "Fabulo"];
        yield ["Pasta Box", "Rome", 4, ["artisanale", "Mario"], "Fabulo"];
        yield ["Pen", "Florence", 3, ["artisanale", "Mario"], "Fabulo"];
        yield ["Torsade", "Francfort", 5, ["artisanale", "Mario"], "Fabulo"];
        yield ["Spagetti", "Seyches", 8, ["artisanale", "Mario"], "Fabulo"];
        yield ["Coude", "Bras long sur seine", 5, ["artisanale", "Mario"], "Fabulo"];
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

        foreach (self::memberGenerator() as [$nome, $origine , $nom])
        {
            $pasta = $pastaRepo->findOneBy(['nome' => $nome, 'origine' => $origine]);
            $member = new Member();
            $member->setNom($nom);
            $pasta->addMember($member);
            // there's a cascade persist on fim-recommendations which avoids persisting down the relation
            $manager->persist($pasta);
        }
        $manager->flush();
    }
}

