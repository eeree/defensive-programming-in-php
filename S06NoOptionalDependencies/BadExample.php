<?php

class BadExample
{
    private $logger;

    public function setLogger(LoggerInterface $logger) :void
    {
        $this->logger = $logger;
    }

    public function setRepository(HeroRepositoryInterface $heroRepository)
    {
        $this->heroRepository = $heroRepository;
    }

    public function renameHero(int $oldName, string $newName) :void
    {
        try {
            $this->heroRepository->rename($oldName, $newName);
        } catch (HeroNotFoundException $ex) {
            if (isset($this->logger)) {
                $this->logger->error($ex);
            }
        }
    }
}

$renamer = new BadExample();
$renamer->setRepository($marvelHeroRepository);
$renamer->renameHero('Hulk', 'Hulk Hogan');
