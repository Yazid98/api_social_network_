<?php

/**
 * Class Comments
 * App\Entity.
 */
class Comments
{
    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $message;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $publishedAt;

    /**
     * @var User
     */
    private User $author;

    /**
     * @var Posts
     */
    private Posts $post;

    /**
     * Comment constructor.
     */
    private function __construct()
    {
        $this->publishedAt = new \DateTimeImmutable();
    }

    /**
     * Get the value of id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message.
     *
     * @return self
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of publishedAt.
     *
     * @return \DateTimeInterface
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set the value of publishedAt.
     *
     * @param \DateTimeInterface $publishedAt
     *
     * @return self
     */
    public function setPublishedAt(DateTimeInterface $publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get the value of author.
     *
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author.
     *
     * @return self
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of post
     *
     * @return  Posts
     */ 
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set the value of post
     *
     * @param  Posts  $post
     *
     * @return  self
     */ 
    public function setPost(Posts $post)
    {
        $this->post = $post;

        return $this;
    }
}
