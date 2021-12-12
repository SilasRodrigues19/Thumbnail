const urlField = document.querySelector('.field input'),
    previewArea = document.querySelector('.preview-area'),
    imgTag = document.querySelector('.thumbnail'),
    hiddenInput = document.querySelector('.hidden-input');

urlField.onkeyup = () => {
    let imgUrl = urlField.value;
    previewArea.classList.add('active');

    if (imgUrl.indexOf('https://www.youtube.com/watch?v=') != -1) {
        let vidId = imgUrl.split('v=')[1].substring(0, 11);
        let ytbThumbURL = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
        imgTag.src = ytbThumbURL;
    } else if (imgUrl.indexOf('https://youtu.be/') != -1) {
        let vidId = imgUrl.split('be/')[1].substring(0, 11);
        let ytbThumbURL = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
        imgTag.src = ytbThumbURL;
    } else if (imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {
        imgTag.src = imgUrl;
    } else {
        imgTag.src = '';
        previewArea.classList.remove('active');
    }
    hiddenInput.value = imgTag.src;
}