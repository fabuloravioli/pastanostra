<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;
use App\Entity\Pasta;
use App\Entity\Cottura;


class AddCoturaCommand extends Command
{
    protected static $defaultName = 'app:add-cotura';
    protected static $defaultDescription = 'Add a short description for your command';

    /**
     * @var PastaRepository
     */
    private $pastaRepository;

    /**
     * @var EntityManager : gère les fonctions liées à la persistence
     */
    private $em;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->em = $container->get('doctrine')->getManager();
        $this->pastaRepository = $this->em->getRepository(Pasta::class);
    }

    protected function configure(): void
    {
        $this
            ->addArgument('nome', InputArgument::REQUIRED, 'name of the pasta')
            ->addArgument('typo', InputArgument::REQUIRED, 'type of cottura')
            ->addArgument('tiempo', InputArgument::REQUIRED, 'time of cottura')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $nome = $input->getArgument('nome');
        $typo = $input->getArgument('typo');
        $tiempo = $input->getArgument('tiempo');


        // Chargement en mémoire d'un film existant dans la base
        $pasta = $this->pastaRepository->findOneBy(
            ['nome' => $nome]);

        // Création d'une instance en mémoire
        $cottura = new Cottura();
        $cottura->setTypo($typo);
        $cottura->setTiempo($tiempo);

// Ajout en mémoire dans la collection des recommendations de ce film
        $pasta->addCottura($cottura);

        // marque l'instance comme "à sauvegarder" en base
        $this->em->persist($pasta);

        // génère les requêtes en base
        $this->em->flush();

        return Command::SUCCESS;
    }
}
