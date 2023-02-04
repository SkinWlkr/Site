$$('img').each(function (img_tag) {
    if (/.*\.gif/.test(img_tag.src)) {
        var rub = new SuperGif({ gif: img_tag } );
        rub.load(function(){
            console.log('oh hey, now the gif is loaded');
        });
    }
});