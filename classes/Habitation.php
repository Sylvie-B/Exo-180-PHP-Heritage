<?php


class Habitation
{
    private string $pays;
    private string $ville;
    private string $codeP;
    private int $chambres;
    private int $pieces;

    /**
     * Habitation constructor.
     * @param string $pays
     * @param string $ville
     * @param string $codeP
     * @param int $chambres
     * @param int $pieces
     */
    public function __construct(string $pays, string $ville, string $codeP, int $chambres, int $pieces){
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodeP($codeP);
        $this->setChambres($chambres);
        $this->setPieces($pieces);
}

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getCodeP(): string
    {
        return $this->codeP;
    }

    /**
     * @param string $codeP
     */
    public function setCodeP(string $codeP): void
    {
        $this->codeP = $codeP;
    }

    /**
     * @return int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }

}