<?php
namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="DirectoryPlatform\AppBundle\Repository\PostRepository")
 * @ORM\Table(name="directory_platform_posts")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 * @UniqueEntity("slug")
 */
class Post
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Category", inversedBy="posts")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id",onDelete="CASCADE")
	 */
	private $category;

	/**
	 * @Assert\File(mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
	 * @Vich\UploadableField(mapping="image", fileNameProperty="image_name")
	 */
	private $image;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true, name="image_name")
	 */
	private $imageName;	

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $name;

	/**
	 * @ORM\Column(type="string", nullable=true, unique=true, length=100)
	 */
	private $slug;

	/**
	 * @ORM\Column(type="text")
	 */
	private $description;

	/**
	 * @ORM\Column(type="boolean", nullable=true, name="is_published")
	 */
	private $isPublished;

	/**
	 * @ORM\Column(name="created", type="datetime")
	 */
	private $created;

	/**
	 * @ORM\Column(name="modified", type="datetime", nullable=true)
	 */
	private $modified;

	/**
	 * @ORM\PrePersist
	 */
	public function onPrePersist()
	{
		$this->created = new \DateTime('now');
		$this->modified = new \DateTime('now');
	}

	/**
	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
		$this->modified = new \DateTime('now');
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param mixed $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

	/**
	 * @return mixed
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param File $image
	 */
	public function setImage(File $image)
	{
		$this->image = $image;

		if ($image) {
			$this->modified = new \DateTime('now');
		}
	}

	/**
	 * @return mixed
	 */
	public function getImageName()
	{
		return $this->imageName;
	}

	/**
	 * @param mixed $imageName
	 */
	public function setImageName($imageName)
	{
		$this->imageName = $imageName;
	}
	
	/**
	 * @return mixed
	 */
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * @param mixed $category
	 */
	public function setCategory($category)
	{
		$this->category = $category;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * @param $slug
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getIsPublished()
	{
		return $this->isPublished;
	}

	/**
	 * @param mixed $isPublished
	 */
	public function setIsPublished($isPublished)
	{
		$this->isPublished = $isPublished;
	}

	/**
	 * @return mixed
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * @param mixed $created
	 */
	public function setCreated($created)
	{
		$this->created = $created;
	}

	/**
	 * @return mixed
	 */
	public function getModified()
	{
		return $this->modified;
	}

	/**
	 * @param mixed $modified
	 */
	public function setModified($modified)
	{
		$this->modified = $modified;
	}
}