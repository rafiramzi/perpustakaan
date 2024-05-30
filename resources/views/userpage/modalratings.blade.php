<div id="modal" class="fixed inset-0 z-40 hidden border bg-black/40">
    <div class="flex justify-center items-center h-full w-full">
        <div class="bg-white rounded-lg shadow-md p-6">
            <button id="closeModalButton" class="text-white bg-indigo-600 px-4 py-2 rounded">X</button>
            <h2 class="text-xl font-semibold mb-4 text-center">Ratings</h2>
            <p class="text-gray-600 mb-6 text-center">Berikan penilaian mu terhadap buku ini</p>
            <div class="flex items-center mb-4">
                <span class="text-gray-700 mr-3">1</span>
                <input id="rating-slider" type="range" min="1" max="5" value="5"
                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                <span class="text-gray-700 ml-3">5</span>
            </div>
            <div class="text-center">
                <span id="rating-value" class="text-xl font-semibold text-gray-700">5</span>
            </div>
            <button
                class="relative h-12 w-full overflow-hidden border border-indigo-600 text-indigo-600 shadow-2xl transition-all duration-200 before:absolute before:bottom-0 before:left-0 before:right-0 before:top-0 before:m-auto before:h-0 before:w-0 before:rounded-sm before:bg-indigo-600 before:duration-300 before:ease-out hover:text-white hover:shadow-indigo-600 hover:before:h-40 hover:before:w-full hover:before:opacity-80 rounded-md ">
                <span class="relative z-10 font-semibold ">Submit</span>
            </button>
        </div>
    </div>


</div>

<script>
    const closeModalButton = document.getElementById('closeModalButton');
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    const slider = document.getElementById('rating-slider');
    const ratingValue = document.getElementById('rating-value');

    slider.addEventListener('input', function() {
        ratingValue.textContent = slider.value;
    });
</script>
