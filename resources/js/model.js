const btnDeleteProducts = document.querySelectorAll(".delete");

btnDeleteProducts.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        makeModel(e.currentTarget);
    });
});

function makeModel(target) {
    const actionForm = new URL(target.href);

    const modelHTML = `
        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-screen bg-black/50">
            <div class="relative w-full max-w-md max-h-full left-1/2 -translate-x-1/2">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 text-blue-950 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="mb-5 text-lg font-normal text-blue-950">Are you sure you want to delete this product?</h3>
                        <form action="${actionForm.pathname}" method="POST" class="inline-flex">
                            <input type="hidden" name="_method" value="DELETE" />
                            <input type="hidden" name="_token" value="${target.dataset.token}" />
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure
                            </button>
                        </form>
                        <button data-modal-hide="popup-modal" type="button" class="text-blue-950 bg-white hover:bg-blue-950 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                    </div>
                </div>
            </div>
        </div>
    `;
    const model = stringToHTML(modelHTML);
    const tagMain = document.querySelector("main");
    tagMain.appendChild(model);

    const close = document.querySelector('[data-modal-hide="popup-modal"]');

    function deleteModel() {
        tagMain.removeChild(model);
    }

    close.addEventListener("click", deleteModel);
}

function stringToHTML(stringHTML) {
    const element = document.createElement("div");
    element.innerHTML = stringHTML;

    return element.children[0];
}
