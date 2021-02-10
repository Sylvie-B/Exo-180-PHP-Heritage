<?php


class Habitation
{
    private string $pays;
    private string $ville;
    private string $codeP;
    private string $chambres;
    private string $pieces;

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
     * @return string
     */
    public function getChambres(): string
    {
        return $this->chambres;
    }

    /**
     * @param string $chambres
     */
    public function setChambres(string $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return string
     */
    public function getPieces(): string
    {
        return $this->pieces;
    }

    /**
     * @param string $pieces
     */
    public function setPieces(string $pieces): void
    {
        $this->pieces = $pieces;
    }


}