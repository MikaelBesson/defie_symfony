<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * TODO Vous ouvez définir une route principale pour le controler si vous le souhaitez.
 */
class UserController extends AbstractController
{
    /**
     * Cette méthode retourne la liste des utilisateur de l'application
     * @return Response
     * TODO Définissez la route pour accéder à cette fonction du controller UserController
     */
    #[]
    public function list(): Response
    {
        $message = '
            <table>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                </tr>
                <tr>
                    <td>Super</td>
                    <td>Admin</td>
                </tr>
            </table>
        ';
        // TODO Retournez une Response, renvoyer le code HTML présent dans la variable $message.
    }


    /**
     * Cette méthode édite un utilisateur en particulier, elle devra prendre un paramètre supplémentaire pour accéder à l'utilisateur en question.
     * @param int $userID
     * @return Response
     * TODO Définissez cette route, n'oubliez pas de définir le paramètre pour être en mesure d'éditer l'utilisateur.
     */
    public function edit(int $userID): Response
    {
        $html = '
            <div class="success">L\'utilisateur ' . $userID . ' a été modifié avec succès</div>
        ';

        // TODO Retournez une Response contenant le code HTML spécifié dans la variable $html
    }


    /**
     * Cette méthode supprime un utilisateur, elle prend un paramètre supplémentaire qui doit ABSOLUMENT être un entier, j'attend une regex pour celui ci !!!!!
     * @param int $userId
     * @return Response
     * TODO Définissez cette route.
     */
    public function delete(int $userId): Response
    {
        $html = '
            <div class="success">L\'utilisateur ' . $userID . ' a été supprimé avec succès</div>
        ';

        // TODO Retournez une Response contenant le code HTML spécifié dans la variable $html
    }

}