<?php

class BadExample
{
    public function umlautNormalizer(string $text) :string
    {
        try {
            $umlauts = $this->linguisticsRepository->getUmlautEntity();
            $normalizedText = str_replace($umlauts->encoded(), $umlauts->plain(), $text);
        } catch (RepositoryException $ex) {
            $this->logger->error($ex);
        }

        return $normalizedText;
    }
}
