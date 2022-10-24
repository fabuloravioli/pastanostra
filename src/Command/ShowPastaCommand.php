<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Entity\Pasta;
use App\Repository\PastaRepository;


class ShowPastaCommand extends Command
{
    protected static $defaultName = 'app:show-pasta';
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
            ->addArgument('nome', InputArgument::REQUIRED, 'pasta name')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $nome = $input->getArgument('nome');

        $pasta = $this->pastaRepository->findOneBy(
            ['nome' => $nome]);

        if(!$pasta) {
            $output->writeln('unknown pasta: ' . $nome);
            exit(1);
        }

        $output->writeln($pasta . ':');

        foreach($pasta->getCotturas() as $cottura) {
            $output->writeln('-'. $cottura);
        }
        return Command::SUCCESS;
    }
}
