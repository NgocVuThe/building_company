<?php

namespace App\Repositories\ManagementRepository;

use App\Models\Posts;

class PostRepository implements PostInterface
{
    protected $post;

    public function __construct(Posts $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return $this->post->all();
    }

    public function getById($id)
    {
        return $this->post->find($id);
    }

    public function create(array $data)
    {
        return $this->post->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->post->update($data);
    }

    public function delete($id)
    {

    }
}