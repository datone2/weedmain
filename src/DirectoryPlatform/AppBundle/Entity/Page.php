namespace Acme\SiteBundle\Entity;

use Symfony\Cmf\Bundle\SeoBundle\SeoAwareInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Page implements SeoAwareInterface
{
    /**
     * @ORM\Column(type="object")
     */
    protected $seoMetadata;

    // ...
}