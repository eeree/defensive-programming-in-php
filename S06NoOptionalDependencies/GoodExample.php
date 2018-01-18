<?php

class GoodExample
{
    private $logger;

    private $heroRepository;

    public function __construct(HeroRepositoryInterface $heroRepository, LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function renameHero(int $oldName, string $newName) :void
    {
        try {
            $this->heroRepository->rename($oldName, $newName);
        } catch (HeroNotFoundException $ex) {
            $this->logger->error($ex);
        }
    }
}

$renamer = new GoodExample($marvelHeroRepository, $filesystemLogger);
$renamer->renameHero('Hulk', 'Hulk Hogan');

$renamer = new GoodExample($marvelHeroRepository, new NullLogger());
$renamer->renameHero('Hulk', 'Hulk Hogan');
