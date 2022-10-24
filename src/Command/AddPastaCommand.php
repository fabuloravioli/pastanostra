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


class AddPastaCommand extends Command
{
    protected static $defaultName = 'add-pasta';
    protected static $defaultDescription = 'Add a short description for your command';

    /**
     * @var EntityManager : gère les fonctions liées à la persistence
     */
    private $em;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->em = $container->get('doctrine')->getManager();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('nome', InputArgument::REQUIRED, 'name of the pasta')
            ->addArgument('origine', InputArgument::REQUIRED, 'origine city of the pasta')
            ->addArgument('dimensioni', InputArgument::REQUIRED, 'size of the pasta')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $nome = $input->getArgument('nome');
        $origine = $input->getArgument('origine');
        $dimensioni = $input->getArgument('dimensioni');

        // crée une instance en mémoire
        $pasta = new Pasta();
        $pasta->setNome($nome);
        $pasta->setOrigine($origine);
        $pasta->setDimensioni($dimensioni);

        // marque l'instance comme "à sauvegarder" en base
        $this->em->persist($pasta);

        // génère les requêtes en base
        $this->em->flush();

        return Command::SUCCESS;
    }
}
