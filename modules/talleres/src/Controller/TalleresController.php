<?php

namespace Drupal\talleres\Controller;

use Drupal\talleres\Dao\TalleresDao;
use Drupal\Core\Url;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Link;
use Drupal\Core\Render\RendererInterface;

class TalleresController extends ControllerBase
{

  public function add()
  {
    $extra = '612-123-4567';
    $form = \Drupal::formBuilder()->getForm('Drupal\talleres\Form\TalleresAddForm', $extra);
    return array(
      '#title'   => 'TALLERES',
      '#type'    => 'markup',
      '#markup'  => RendererInterface::render($form),
    );

  }


  public function lista()
  {
    //$link = Link::fromTextAndUrl('Nuevo', Url::fromRoute('/faq/add'));
    $new_link = "";
    if(\Drupal::currentUser()->hasPermission('talleres add')
) {
      $url = Url::fromRoute('talleresAdd');
      $link_options = array(
        'attributes' => array(
            'class' => array(
                'btn',
                'btn-primary',
            ),
        ),
      );
      $url->setOptions($link_options);
      $new_link = Link::fromTextAndUrl(t('Nuevo'), $url);

<<<<<<< HEAD
        $rows = array();

        foreach(TalleresDao::getAll() as $id=> $content) {
            $url = Url::fromRoute('talleresDelete', ['id' => $content->id]);
            $delete_link = \Drupal::l(t('Eliminar'), $url);
            $url = Url::fromRoute('talleresUpdate', ['id' => $content->id]);
            $update_link = \Drupal::l(t('Modificar'), $url);
            $rows[] = array(
                'data' => array($id,$content->taller,$content->presenta,$content->descripcion, $delete_link, $update_link)
            );
        }
        $header = array(
            'id' => t('Id'),
            'taller'=>t('Taller'),
            'presenta'=>t('Presenta'),
            'descripcion'=>t('Descripcion'),
            'eliminar' => t('Eliminar'),
            'actualizar' => t('Actualizar'),
        );


    }else
    {
        $rows = array();

        foreach(TalleresDao::getAll() as $id=> $content) {
            $rows[] = array(
                'data' => array($id,$content->taller,$content->presenta,$content->descripcion)
            );
        }
        $header = array(
            'id' => t('Id'),
            'taller'=>t('Taller'),
            'presenta'=>t('Presenta'),
            'descripcion'=>t('Descripcion'),
        );

    }


=======
    }

    $header = array(
      'id' => t('Id'),
      'taller'=>t('Taller'),
      'presenta'=>t('Presenta'),
      'descripcion'=>t('Descripcion'),
      'eliminar' => t('Eliminar'),
      'actualizar' => t('Actualizar'),
    );
    
    $rows = array();
    
    foreach(TalleresDao::getAll() as $id=> $content) {
      $url = Url::fromRoute('talleresDelete', ['id' => $content->id]);
      $delete_link = \Drupal::l(t('Eliminar'), $url);
      $url = Url::fromRoute('talleresUpdate', ['id' => $content->id]);
      $update_link = \Drupal::l(t('Modificar'), $url);
      $rows[] = array(
        'data' => array($id,$content->taller,$content->presenta,$content->descripcion, $delete_link, $update_link)
      );
    }
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794


    $table = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#attributes' => array(
        'id' => 'bd-talleres-table',
<<<<<<< HEAD
          'class' => array(
              'table',
              'table-dark',
          ),

=======
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
      ),
    );

    return array(
      '#title'   => 'TALLERES',
      '#theme'    => 'talleres_list',
<<<<<<< HEAD
      '#new_talleres'  => $new_link,
=======
      '#new_faq'  => $new_link,
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
      '#tabla_lista' => \Drupal::service('renderer')->render($table),
    );
  }

  public function lista2()
  {
    //$link = Link::fromTextAndUrl('Nuevo', Url::fromRoute('/faq/add'));
    $new_link = "";
    if(\Drupal::currentUser()->hasPermission('talleres add')
) {
      $url = Url::fromRoute('talleresAdd');
      $new_link = \Drupal::l(t('Nuevo'), $url);
    }
    
    //$data = FaqDao::getAll();
    //$data = db_query('select * from {faq}')->fetchAll();
    $conn = Database::getConnection();
    $data = $conn->query('select * from {talleres}')->fetchAll();

    return array(
      '#title'   => 'TALLERES',
      '#theme'    => 'talleres_list2',
      '#tabla_lista' => $data,
    );
  }


}
