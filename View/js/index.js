function showComments() {
    var comments = document.getElementById("comments");
    console.log("ça passe");
    comments.style.display = comments.style.display === 'none' ? 'block' : 'none';
    const form = `
        <form action="/comment" method="POST">
            <input type="text" name="comment" placeholder="Comment" />
            <input type="submit" value="Submit" />
            </form>
            `;
    comments.innerHTML = form;

}