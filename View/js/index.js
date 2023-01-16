function showComments(id) {
  console.log(id);
    var comments = document.getElementById(id + "formComment");
    comments.style.display = "block";
    const form = `
    <div class="w-full"><br>
            <form>
              <div class="relative z-0 w-5/6 mb-6 group">
                <label for="comments" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Votre Commentaire</label>
                <input type="text" name="comments" id="floating_comments" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              </div>
              <div class="w-1/6">
                <input type="submit" class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg" name="insert" value="submit">
            </form>
          </div>
            `;
            
    comments.innerHTML = form;

}