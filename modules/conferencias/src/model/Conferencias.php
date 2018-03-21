<?php
/**
 * Created by PhpStorm.
 * User: niluxer
 * Date: 3/7/18
 * Time: 20:35
 */

class Conferencias
{
    private $id;
    private $titulo;
    private $resumen;
    private $fecha;
    private $lugar;
    private $hora;
<<<<<<< HEAD
    private $conferencista;
    private $curriculum;

    /**
     * ConferenciasDao constructor.
=======
    private $nombre;
    private $curriculum;

    /**
     * FaqDao constructor.
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
     */
    public function __construct()
    {
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
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
<<<<<<< HEAD
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
=======
     * @param mixed $question
     */
    public function setTitulo($titulo)
    {
        $this->question = $titulo;
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
    }

    /**
     * @return mixed
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
<<<<<<< HEAD
     * @param mixed $resumen
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
=======
     * @param mixed $question
     */
    public function setResumen($resumen)
    {
        $this->question = $resumen;
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
<<<<<<< HEAD
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
=======
     * @param mixed $question
     */
    public function setFecha($fecha)
    {
        $this->question = $fecha;
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
    }

    /**
     * @return mixed
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
<<<<<<< HEAD
     * @param mixed $lugar
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
=======
     * @param mixed $question
     */
    public function setLugar($lugar)
    {
        $this->question = $lugar;
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
<<<<<<< HEAD
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
=======
     * @param mixed $question
     */
    public function setHora($hora)
    {
        $this->question = $hora;
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
    }

    /**
     * @return mixed
     */
<<<<<<< HEAD
    public function getConferencista()
    {
        return $this->conferencista;
    }

    /**
     * @param mixed $conferencista
     */
    public function setConferencista($conferencista)
    {
        $this->conferencista = $conferencista;
=======
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $question
     */
    public function setNombre($nombre)
    {
        $this->question = $nombre;
>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
    }

    /**
     * @return mixed
     */
    public function getCurriculum()
    {
        return $this->curriculum;
    }

    /**
<<<<<<< HEAD
     * @param mixed $curriculum
     */
    public function setCurriculum($curriculum)
    {
        $this->curriculum = $curriculum;
    }

=======
     * @param mixed $question
     */
    public function setCurriculum($curriculum)
    {
        $this->question = $curriculum;
    }





>>>>>>> 25bd42bde43ad346072499d2a3c9226ec0f60794
}