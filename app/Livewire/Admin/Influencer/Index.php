<?php

namespace App\Livewire\Admin\Influencer;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use App\Models\Influencer;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $influencer_id;

    public function deleteinfluencer($influencer_id)
    {
        // dd($influencer_id);
        $this->influencer_id = $influencer_id;
    }
    public function destroyinfluencer()
    {
        $influencer =  Influencer::find($this->influencer_id);
        $path = 'upload/influencer/' . $influencer->image;

        if (File::exists($path)) {
            File::delete($path);
        }
        $influencer->delete();
        session()->flash('message','successfully influencer deleted');
        $this->dispatchBrowserEvent('close-model');
        // redirect('/admin-panel/influencer/');
    }




    public function render()
    {
        $influencers = Influencer::orderBy('id', 'DESC')->paginate(4);
        return view('livewire.admin.influencer.index', ['influencers' => $influencers]);
    }

}
