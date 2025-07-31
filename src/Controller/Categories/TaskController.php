<?php declare(strict_types=1);

namespace App\Controller\Categories;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/tasks', name: 'task-dashboard', methods: ['GET'])]
    public function index()
    {
        return $this->render('interface/tasks.html.twig', [
            'controller_name' => 'TaskController',
            'taskList' => [
                ['id' => 1, 'data' => ['name' => 'task1', 'teaser' => 'teaser1']],
                ['id' => 2, 'data' => ['name' => 'task2', 'teaser' => 'teaser2']],
                ['id' => 3, 'data' => ['name' => 'task3', 'teaser' => 'teaser3']],
                ['id' => 4, 'data' => ['name' => 'task4', 'teaser' => 'teaser4']],
                ['id' => 5, 'data' => ['name' => 'task5', 'teaser' => 'teaser5']]],
        ]);
    }

    #[Route('/task/details/{taskId}', name: 'task_details', methods: ['GET'])]
    public function details(int $taskId)
    {
        return $this->render('details/details.html.twig', [
            'controller_name' => 'TaskController',
            'controllerName' => 'Task',
            'taskId' => $taskId,
            'detail' => ['id' => 5, 'data' => ['name' => 'task5', 'teaser' => 'teaser5', 'description' => 'description5']]
        ]);
    }
}