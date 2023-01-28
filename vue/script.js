function imagePreview(event){
    var image = URL.createObjectURL(event.target.files[0])
    var imageTextArea= document.getElementById("preview")
    var textArr= document.getElementById("publication")
    var newimage = document.createElement('img')
    newimage.src =image
    newimage.width= '300'
    imageTextArea.appendChild(newimage)
    textArr.rows = 1
}