<?php

namespace App\DataFixtures;

use App\Entity\Pasta;
use App\Repository\PastaRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Cottura;

class AppFixtures extends Fixture
{
    /**
     * Generates initialization data for pastas : [nome, origine, dimensioni]
     * @return \\Generator
     */
    private static function pastasDataGenerator()
    {
        yield ["Tagiatelle", "Naple", 5];
        yield ["Pasta Box", "Rome", 4];
        yield ["Pen", "Florence", 3];
        yield ["Torsade", "Francfort", 5];
        yield ["Spagetti", "Seyches", 8];
        yield ["Coude", "Bras long sur seine", 5];
    }

    /**
     * Generates initialization data for cottura:
     *  [pasta_nome, pasta_origine, pasta_size, cuisson, durée]
     * @return \\Generator
     */
    private static function cotturaGenerator()
    {
        yield ["Tagiatelle", "Naple", 5, "aldente", 6];
        yield ["Pasta Box", "Rome", 4, "bueno cuito", 10];
        yield ["Pasta Box", "Rome", 4, "aldente", 7];
        yield ["Pen", "Florence", 3, "mi cuito", 8];
        yield ["Pen", "Florence", 3, "aldente", 5];
        yield ["Torsade", "Francfort", 5, "bueno cuito", 11];
        yield ["Torsade", "Francfort", 5, "aldente", 9];
        yield ["Spagetti", "Seyches", 8, "mi cuito", 7];
        yield ["Spagetti", "Seyches", 8, "aldente", 6];
        yield ["Coude", "Bras long sur seine", 5, "aldente", 7];
    }

    public function load(ObjectManager $manager)
    {
        $pastaRepo = $manager->getRepository(Pasta::class);

        foreach (self::pastasDataGenerator() as [$nome, $origine, $dimensioni] ) {
            $pasta = new Pasta();
            $pasta->setNome($nome);
            $pasta->setOrigine($origine);
            $pasta->setDimensioni($dimensioni);
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
    }
}

