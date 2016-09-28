<?php
/**
 * Created by PhpStorm.
 * User: Szymon
 * Date: 23.09.2016
 * Time: 18:57
 */

namespace Tests\AppBundle\Controller;


use Symfony\Component\BrowserKit\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function indexAction(Request $request)
    {
        die('TODOS');
        return $this->render('default/index.html.twig',
            [
                'base_dir' => realpath($this->container->
                    getParametr('kernal.root_dir') . '/..'),
            ]);
    }

}