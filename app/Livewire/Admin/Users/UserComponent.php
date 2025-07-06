<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $listeners = ['deleteProduct' => 'confirmDelete'];
    public $searchUser;
      #----------------------delete
    public function confirmDelete($id)
    {
        $this->dispatch('show-delete-confirmation', id: $id);
    }
    #[On('deleteConfirmed')]
    public function delete($id)
    {
        $product = User::findOrFail($id);
        $deleted = $product->delete();
        if ($deleted) {
            $this->dispatch(
                'swal:success',
                message: "تم الحذف بنجاح"
            );
        } else {
            $this->dispatch(
                'swal:error',
                message: "حدث خطا اثناء الحذف!!"
            );
        }
        Cache::forget('categories');

        $this->dispatch('productAdded');
    }

    public function render()
    {
        return view('admin.users.user-component', [
            'users' => User::where('name', 'like', '%' . $this->searchUser . '%')->paginate(5)
        ]);
    }
}
