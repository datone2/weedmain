namespace AppBundle\Document;

use Symfony\Cmf\Bundle\SeoBundle\SeoAwareInterface;

class Page implements SeoAwareInterface
{
    protected $seoMetadata;

    // ...
    public function getSeoMetadata()
    {
        return $this->seoMetadata;
    }

    public function setSeoMetadata($metadata)
    {
        $this->seoMetadata = $metadata;
    }
}