<?php

namespace Bb\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class NewsAdmin extends Admin
{
    protected $datagridValues = array(
        '_page'       => 1,
        '_sort_order' => 'DESC', // sort direction
        '_sort_by' => 'id', // field name
    );

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('publish_date', 'date', array(
                'format' => 'dd-MM-yyyy',
                'widget' => 'choice',
                'label' => 'Data',
            ))
            ->add('title', 'text', array('label' => 'Titolo'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('publish_date')
            ->add('title')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title', null, array('label' => 'Titlo'))
            ->add('publish_date', null, array('label' => 'Data'))
        ;
    }

    public function getNewInstance()
    {
        $news = parent::getNewInstance();
        $news->setPublishDate( new \DateTime( 'now' ) );
        return $news;
    }

}