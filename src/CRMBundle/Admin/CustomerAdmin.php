<?php

namespace CRMBundle\Admin;

use CRMBundle\Enums\CustomerTypes;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CustomerAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('type')
            ->add('domain')
            ->add('id')
            ->add('title')
            ->add('comment')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('type')
            ->add('domain')
            ->add('id')
            ->add('title')
            ->add('comment')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Customer')
                ->add('title')
                ->add('type', ChoiceType::class, [
                    'choices' => CustomerTypes::getList()
                ])
                ->add('domain')
                ->add('config')
                ->add('comment', null, [
                    'required' => false
                ])
            ->end()
            ->with('Peoples')
                ->add('peoples', 'sonata_type_collection', [
                    'by_reference' => false
                ], [
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'title'
                ])
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Customer')
                ->add('title')
                ->add('type')
                ->add('domain')
                ->add('config')
                ->add('createdAt')
                ->add('updatedAt')
                ->add('comment')
            ->end()
            ->with('Peoples')
                ->add('peoples')
            ->end()
        ;
    }
}
