<?php

namespace Bolt\Storage\Field\Type;

use Bolt\Storage\Field\Sanitiser\SanitiserAwareInterface;
use Bolt\Storage\Field\Sanitiser\SanitiserAwareTrait;
use Doctrine\DBAL\Types\Type;

/**
 * This is one of a suite of basic Bolt field transformers that handles
 * the lifecycle of a field from pre-query to persist.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 */
class TextAreaType extends FieldTypeBase implements SanitiserAwareInterface
{
    use SanitiserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'textarea';
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageType()
    {
        return Type::getType('text');
    }
}
