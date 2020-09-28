<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CreatePost extends Component
{
    use WithPagination;
    public $title, $body, $post_id;
    public $isOpen = 0;

    public function render()
    {
        return view('livewire.create-post',[
            'posts' => Post::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        $this->postNull();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function postNull()
    {
        $this->title = Null;
        $this->body = Null;
        $this->post_id = Null;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::updateOrCreate(['id' => $this->post_id],[
            'user_id' => Auth::id(),
            'title' => $this->title,
            'body' => $this->body,
        ]);
        // session()->flash('message', $this->post_id ? 'Post Updated Successully.' : 'Post Created Successfully.');

        $this->closeModal();
        $this->postNull();
        $this->add();
    }

    public function add()
    {
        $this->emit('swal:izialert', [
            'type'    => 'success',
            'title'   => 'Success',
            'message' => 'Post Add Successfully!',
        ]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->openModal();
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
