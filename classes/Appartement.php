<?php


class Appartement extends Habitation
{
    private bool $garage;

    public function __construct(string $pays, string $ville, string $codeP, int $chambres, int $pieces, bool $garage){
        parent::__construct($pays, $ville, $codeP, $chambres, $pieces);

        $this->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }
}

