<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavLists extends Component
{
	public function render()
	{
		$lists = [
			['id' => 1, 'title' => 'beranda', 'icon' => 'home'],
			['id' => 2, 'title' => 'trending', 'icon' => 'likes'],
		];
		return view('livewire.nav-lists', [
			'lists' => $lists,
		]);
	}
}
