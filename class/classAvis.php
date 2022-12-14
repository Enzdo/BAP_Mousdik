<?php

class avis{
    public function __construct(
        public string $name,
        public string $message,
        public int $score,
    )
    {
    }
}