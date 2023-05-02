<?php
/** 
 * Envoie des requetes delete
 * 
 * @category Connection
 * @package  None
 * @author   Original Martin <dieu@PHP.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version  SVN: $Id$
 * @link     http://pear.php.net/package/PackageName
 */


try{
    $dns = 'mysql:host=localhost;dbname=workout';
    $utilisateur = 'root';
    $motDePasse = '';
    $connection = new PDO($dns, $utilisateur, $motDePasse);
    $connection->query("SET NAMES utf8");

} catch ( Exception $e ) {
    echo "Connection à MySQL impossible : ", $e->getMessage();
    die();

}

?>