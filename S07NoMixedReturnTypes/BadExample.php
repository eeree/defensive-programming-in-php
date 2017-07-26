<?php

class BadExample
{
    public function getMarvelHeroByName(string $name)
    {
        $hero = $this->heroRepository->getByName($name);

        if (empty($hero)) {
            return false;
        }

        return new MarvelHero($name);
    }
}
