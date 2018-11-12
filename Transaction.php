<?php
/**
 * Interface que nos muestra elementos básicos
 * de una transacción
 */

/**
 * Interface Transaction
 * Las interfaces se definen de la misma manera que una clase, aunque reemplazando la palabra reservada class por la
 * palabra reservada interface y sin que ninguno de sus métodos tenga su contenido definido.
 */
interface Transaction
{
    // ver https://secure.php.net/manual/es/language.oop5.interfaces.php
    function setProduct($product) ;
    function makeTotal() ;
}