<x-app-layout>
	<div>
		<a href="{{}}" class="flex items-center font-semibold hover:underline">
			<svg class="w-4 h-4" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
			</svg>
			<span class="ml-2">All ideas</span>
		</a>
	</div>
	<div class="idea-container bg-white rounded-xl flex mt-4">

		<div class="flex flex-1 px-4 py-6">
			<div></div>
			<a href="#">
				<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
			</a>
			<div class="w-full mx-4">
				<h4 class="text-xl font-semibold">
					<a href="#" class="hover:underline">A random title can go here</a>
				</h4>
				<div class="text-gray-600 mt-3 line-clamp-3">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</div>
				<div class="flex items-center justify-between mt-6">
					<div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
						<div class="font-bold text-gray-900">John Doe</div>
						<div>&bull;</div>
						<div>10 Hours Ago</div>
						<div>&bull;</div>
						<div>Category</div>
						<div>&bull;</div>
						<div class="text-gray-900">3 Comments</div>
						<div>&bull;</div>
					</div>
					<div class="flex items-center space-x-2">
						<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
							Open
						</div>
						<button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7  transition duration-150 ease-in">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
							</svg>
							<ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
								<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Mark as Spam</a></li>
								<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Delete Post</a></li>
							</ul>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end idea container -->

	<div class="buttons-container flex items-center justify-between mt-6">
		<div class="flex items-center space-x-4 ml-6">
			<button type="button" class="flex items-center justify-center h-11 w-32 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
				<span class="ml-1">Reply</span>
			</button>

			<button type="button" class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

				<span class="mr-1">Set Status</span>
				<svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
				</svg>
			</button>
		</div>

		<div class="flex items-center space-x-3">
			<div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
				<div class="text-xl leading-snug">12</div>
				<div class="text-gray-400 text-xs leading-none">Votes</div>
			</div>
			<button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

				<span class="mr-1">Vote</span>

			</button>
		</div>

	</div>
	<!--end button container -->

	<div class="comments-container relative space-y-6 pt-4 ml-22 my-8 mt-1">
		<div class="comment-container relative bg-white rounded-xl flex mt-4">

			<div class="flex flex-1 px-4 py-6">
				<div class="flex-none">
				<a href="#">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
				</a>
				</div>
				<div class="w-full mx-4">
					<div class="text-gray-600 mt-3">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem praesentium odit officia error alias! Quisquam commodi amet repudiandae dolor explicabo veritatis rerum, sunt qui nostrum quod non est, reprehenderit accusantium.
					</div>
					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
							<div class="font-bold text-gray-900">John Doe</div>
							<div>&bull;</div>
							<div>10 Hours Ago</div>

						</div>
						<div class="flex items-center space-x-2">

							<button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7  transition duration-150 ease-in">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
								</svg>
								<ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Mark as Spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Delete Post</a></li>
								</ul>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end commend container -->
		<div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">

			<div class="flex flex-1 px-4 py-6">
				<div class="flex-none">
				<a href="#">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
				</a>
				<div class="text-center uppercase text-blue text-xxs font-bold mt-1">admin</div>
				</div>
				<div class="w-full mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Status Changed to "Under Construction"</a>
					</h4>
					<div class="text-gray-600 mt-3">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem praesentium odit officia error alias! Quisquam commodi amet repudiandae dolor explicabo veritatis rerum, sunt qui nostrum quod non est, reprehenderit accusantium.
					</div>
					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
							<div class="font-bold text-blue">Andrea</div>
							<div>&bull;</div>
							<div>10 Hours Ago</div>

						</div>
						<div class="flex items-center space-x-2">

							<button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7  transition duration-150 ease-in">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
								</svg>
								<ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Mark as Spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Delete Post</a></li>
								</ul>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end commend container -->
		<div class="comment-container relative bg-white rounded-xl flex mt-4">

			<div class="flex flex-1 px-4 py-6">
				<div class="flex-none">
				<a href="#">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
				</a>
				</div>
				<div class="w-full mx-4">
					<div class="text-gray-600 mt-3">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem praesentium odit officia error alias! Quisquam commodi amet repudiandae dolor explicabo veritatis rerum, sunt qui nostrum quod non est, reprehenderit accusantium.
					</div>
					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
							<div class="font-bold text-gray-900">John Doe</div>
							<div>&bull;</div>
							<div>10 Hours Ago</div>

						</div>
						<div class="flex items-center space-x-2">

							<button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7  transition duration-150 ease-in">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
								</svg>
								<ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Mark as Spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in ">Delete Post</a></li>
								</ul>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end commend container -->
	</div><!-- end commends container -->

</x-app-layout>