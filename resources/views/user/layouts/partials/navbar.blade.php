<nav class="w-full h-full flex justify-between items-center">
	<div id="nav-search" class="flex justify-center items-center">
		<form action="" class="m-8">
			<label class="flex justify-center items-center gap-3">
				<input type="text" class="border hidden md:flex py-1 px-4 rounded-full">
				<button type="submit" class="border rounded-full flex justify-center items-center px-3 py-1 gap-1"><x-carbon-search class="w-4" /> Cari</button>
			</label>
		</form>
	</div>

	<div id="nav-right" class="mx-4 flex justify-center items-center gap-3 lg:gap-5">
		<div id="nav-darktoggle" class="rounded-full border p-2">
			<x-carbon-moon class="w-6" />
		</div>
		<div id="nav-profile" class="h-10 w-10 rounded-full border"></div>
		<div id="nav-hamburger" class="md:hidden"><x-fluentui-re-order-dots-vertical-24-o  class="w-6"/></div>
	</div>
</nav>
