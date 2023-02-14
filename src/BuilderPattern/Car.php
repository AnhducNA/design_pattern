<?php

namespace Anhduc\DesignPattern\BuilderPattern;

class Car
{
    private string $model;
    private string $year;
    private string $engine;

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getEngine(): string
    {
        return $this->engine;
    }

    /**
     * @param string $engine
     */
    public function setEngine(string $engine): void
    {
        $this->engine = $engine;
    }

    public function getDescription(): string
    {
        return "This is a " . $this->year . " " . $this->model . " with a " . $this->engine . " engine.";
    }


}