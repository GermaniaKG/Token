<?php
namespace Germania\Token;

class Token implements TokenInterface
{

    /**
     * @var string
     */
    protected $content;


    /**
     * @var integer
     */
    protected $lifetime;


    /**
     * @param string $content   Token String
     * @param int    $lifetime  Token lifetime
     */
    public function __construct(string $content, int $lifetime)
    {
        $this->content = $content;
        $this->lifetime = $lifetime;
    }



    /**
     * Debugging serializer. Hides the token string itself.
     *
     * @return array Array with `content` and `lifetime` information
     */
    public function __debugInfo()
    {
        return array(
            'content' => sprintf("(Token string: %s bytes)", mb_strlen($this->content)),
            'lifetime' => $this->lifetime
        );
    }


    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return $this->getContent();
    }


    /**
     * @inheritDoc
     */
    public function getContent() : string
    {
        return $this->content;
    }


    /**
     * @inheritDoc
     */
    public function getLifeTime() : int
    {
        return $this->lifetime;
    }
}
