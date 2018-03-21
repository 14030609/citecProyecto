<?php

namespace Drupal\conferencias\Dao;

use Drupal\Core\Database\Database;

class ConferenciasDao {

<<<<<<< HEAD
    static function getAll()
    {
        $conn = Database::getConnection();
        $result = $conn->query('select * from {conferencias}')->fetchAllAssoc('id');

        return $result;
    }
=======
	static function getAll()
	{
        $conn = Database::getConnection();
        $result = $conn->query('select * from {conferencias}')->fetchAllAssoc('id');

		return $result;
	}
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794

    /*static function getOne()
    {
        //$conn = Database::getConnection();
        //$result = $conn->query('select * from {faq}')->fe
        $result = db_query('select * from {faq}')->fetchAllAssoc('id');
        return $result;
    }*/

    static function exists($id) {
        $conn = Database::getConnection();
        $result = $conn->query('SELECT 1 FROM {conferencias} WHERE id = :id', array(':id' => $id))->fetchField();

        //$result = db_query('SELECT 1 FROM {faq} WHERE id = :id', array(':id' => $id))->fetchField();
        return (bool) $result;
    }

<<<<<<< HEAD
    static function add($titulo, $resumen, $fecha, $lugar, $hora, $conferencista, $curriculum) {
=======
    static function add($titulo, $resumen,$fecha,$lugar,$hora,$nombre,$curriculum) {
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
        $conn = Database::getConnection();
        $conn->insert('conferencias')->fields(
            array(
                'titulo' => $titulo,
                'resumen' => $resumen,
                'fecha' => $fecha,
                'lugar' => $lugar,
                'hora' => $hora,
<<<<<<< HEAD
                'conferencista' => $conferencista,
                'curriculum'=>$curriculum,
=======
                'nombre' => $nombre,
                'curriculum' => $curriculum,


>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
            )
        )->execute();

    }

<<<<<<< HEAD
    static function update($id, $titulo, $resumen, $fecha, $lugar, $hora, $conferencista, $curriculum) {
=======
    static function update($id, $titulo, $resumen,$fecha,$lugar,$hora,$nombre,$curriculum) {
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
        $conn = Database::getConnection();
        $conn->update('conferencias')->fields(
            array(
                'titulo' => $titulo,
                'resumen' => $resumen,
                'fecha' => $fecha,
                'lugar' => $lugar,
                'hora' => $hora,
<<<<<<< HEAD
                'conferencista' => $conferencista,
                'curriculum'=>$curriculum,
=======
                'nombre' => $nombre,
                'curriculum' => $curriculum,
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
            )
        )->condition('id', $id, '=')->execute();
        /*db_update('faq')
        ->fields(array(
          'question' => $question,
          'answare' => $answare,
        ))
        ->condition('id', $id, '=')
        ->execute();*/
    }

    static function delete($id) {
        //db_delete('faq')->condition('id', $id)->execute();
        $conn = Database::getConnection();
        $conn->delete('conferencias')->condition('id', $id, '=')->execute();

    }

}