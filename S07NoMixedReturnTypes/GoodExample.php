<?php

class GoodExample
{
    public function getMarvelHeroByName(string $name) :HeroInterface
    {
        $hero = $this->heroRepository->getByName($name);

        if (empty($hero)) {
            return new NullHero();
        }

        return new MarvelHero($name);
    }
}
