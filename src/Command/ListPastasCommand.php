<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

use App\Entity\Pasta;
use App\Repository\PastaRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ListPastasCommand extends Command
{
    protected static $defaultName = 'app:list-pastas';
    protected static $defaultDescription = 'Add a short description for your command';

    /**
     * @var PastaRepository
     */
    private $pastaRepository;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->pastaRepository = $container->get('doctrine')->getManager()->getRepository(Pasta::class);
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $pastas = $this->pastaRepository->findAll();
        if(!$pastas) {
            $output->writeln('<comment>no pastas found<comment>');
            exit(1);
        }

        foreach($pastas as $pasta)
        {
            $output->writeln($pasta);
        }

        return Command::SUCCESS;
    }
}
