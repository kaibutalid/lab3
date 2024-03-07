<?php

namespace App\Controllers;

use App\Models\CommentsModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class Comments extends BaseController
{
    public function index()
    {
        $model = model(CommentsModel::class);

        $data = [
            'comments'  => $model->getComments(),
            'title' => 'Comments archive',
        ];

        return view('templates/header', $data)
            . view('comments/index', $data)
            . view('templates/footer');
    }

    public function show($slug = null)
    {
        $model = model(CommentsModel::class);

        $data['comments'] = $model->getComments($slug);

        if (empty($data['comments'])) {
            throw new PageNotFoundException('Cannot find the comment: ' . $slug . ':(');
        }

        $data['username'] = $data['comments']['username'];

        return view('templates/header', $data)
            . view('comments/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Add a Comment!'])
            . view('comments/create')
            . view('templates/footer');
    }



    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['username', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'username' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(CommentsModel::class);

        $model->save([
            'username' => $post['username'],
            'slug'  => url_title($post['username'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Add a Comment!'])
        . view('comments/success')
        . view('templates/footer');
}

}