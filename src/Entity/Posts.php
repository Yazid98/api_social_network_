<?php

/**
 * Class Posts
 * App\Entity.
 */
class Posts
{
    /**
     * @var int|null
     */
    private ?int $id;

    /**
     * @var string
     */
    private string $content;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $publishedAt;

    /**
     * @var User
     */
    private User $author;

    /**
     * @var User[]
     */
    private array $likedBy;

    /**
     * DateTimeImmutable comme ça la temps ne se modifiera jamais.
     */
    public function __construct()
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
     * Get the value of content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content.
     *
     * @return self
     */
    public function setContent(string $content)
    {
        $this->content = $content;

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
     * Get the value of likedBy.
     *
     * @return User[]
     */
    public function getLikedBy()
    {
        return $this->likedBy;
    }

    /**
     * Set the value of likedBy.
     *
     * @param User[] $likedBy
     *
     * @return self
     */
    public function setLikedBy(array $likedBy)
    {
        $this->likedBy = $likedBy;

        return $this;
    }
}
