<?php

namespace JavierEguiluz\Bundle\EasyAdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * The 'group' form type is a special form type used to display a design
 * element needed to create complex form layouts. This "fake" type just displays
 * some HTML tags and it must be added to a form as "unmapped" and "non required".
 */
class EasyAdminGroupType extends AbstractType
{
    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'easyadmin_group';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
