function showComments(id) {
  console.log("ept");
    var comments = document.getElementById(id + "formComment");
    comments.style.display = "block";
    const form = `
    <div class="w-full"><br>
            <form class="flex p-2">
              <div class=" z-0 w-5/6 mb-6 group">
                <input type="text" name="comments" id="floating_comments" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Votre commentaire " required />
              </div>
              <div class="ml-5">
                <input type="submit" class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg" name="insert" value="submit">
            </form>
          </div>
            `;
            
    comments.innerHTML = form;

}