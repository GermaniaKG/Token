<?php
namespace Germania\Token;

interface TokenInterface
{


    /**
     * Returns the token value.
     *
     * @return string
     */
    public function __toString();


    /**
     * Returns the token value.
     *
     * @return string
     */
    public function getContent() : string;


    /**
     * Returns the token lifetime in seconds.
     *
     * @return int
     */
    public function getLifeTime() : int;
}
