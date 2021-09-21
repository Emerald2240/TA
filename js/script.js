const initBg = (autoplay = true) => {
//The next few lines makes sure the backgrounds are dynamic and unique
    var ran3num = [];

    for (var i = 0; i < 3; i++) {
        var val = Math.floor(Math.random() * 19);
        if (val == 0) {
            val = 5;
        }

        if (i > 0) {
            for (var j = 0; j < ran3num.length; j++) {
                if (val == ran3num[j]) {
                    if (val < 19) {
                        val++;
                    } else {
                        val--;
                    }
                }
            }
        }

        ran3num.push(val);
        console.log(ran3num);
    }




    const bgImgsNames = ['hd_back' + ran3num[0] + '.jpg', 'hd_back' + ran3num[1] + '.jpg', 'hd_back' + ran3num[2] + '.jpg'];
    const bgImgs = bgImgsNames.map(img => "img/" + img);

    $.backstretch(bgImgs, { duration: 4000, fade: 500 });

    if (!autoplay) {
        $.backstretch('pause');
    }
}

const setBg = id => {
    $.backstretch('show', id);
}

const setBgOverlay = () => {
    const windowWidth = window.innerWidth;
    const bgHeight = $('body').height();
    const tmBgLeft = $('.tm-bg-left');

    $('.tm-bg').height(bgHeight);

    if (windowWidth > 768) {
        tmBgLeft.css('border-left', `0`)
            .css('border-top', `${bgHeight}px solid transparent`);
    } else {
        tmBgLeft.css('border-left', `${windowWidth}px solid transparent`)
            .css('border-top', `0`);
    }
}

$(document).ready(function () {
    const autoplayBg = true;	// set Auto Play for Background Images
    initBg(autoplayBg);
    setBgOverlay();

    const bgControl = $('.tm-bg-control');
    bgControl.click(function () {
        bgControl.removeClass('active');
        $(this).addClass('active');
        const id = $(this).data('id');
        setBg(id);
    });

    $(window).on("backstretch.after", function (e, instance, index) {
        const bgControl = $('.tm-bg-control');
        bgControl.removeClass('active');
        const current = $(".tm-bg-controls-wrapper").find(`[data-id=${index}]`);
        current.addClass('active');
    });

    $(window).resize(function () {
        setBgOverlay();
    });
});