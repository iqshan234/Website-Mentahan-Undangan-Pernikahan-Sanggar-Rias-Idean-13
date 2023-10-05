   $(document).ready( function() {
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();
    var numImgs = $('img.photo').length;
    //Builds holder for popup images and fills in all data
    $('img.photo').each(function(index) {
        index = index + 1;
        flatID = 'image' + index;
        idBox = 'image' + index + '_box';
        idImg = 'image' + index + '_image';
        idImgHash = '#' + idImg;
        imgPosition = $(this).attr('data-image');
        imgSrc = document.getElementById(flatID).src;
        flatHash = '#' + flatID;
        imgWidth = $(flatHash).attr('data-width');
        imgHeight = $(flatHash).attr('data-height');
        boxWidth = parseInt(imgWidth) + parseInt(60);
        boxHeight = parseInt(imgHeight) + parseInt(60);
        heightAdj = parseInt(windowHeight) - parseInt(60);
        widthAdj = parseInt(windowWidth) - parseInt(60);
        myHeight = document.getElementById(flatID).height;
        heightContent = parseInt(myHeight) + parseInt(60);
        imgSrc = document.getElementById(flatID).src;
        idContent = flatHash + "_box";
        idImage = flatHash + "_image";
        $(".gallery").append("<div class=\"popup_box\" id=\""+idBox+"\"><div class=\"center\">"+imgPosition+" of "+numImgs+"</div><img class=\"popup_img\" id=\""+idImg+"\"><a class=\"popupBoxClose\">Close</a><a class=\"popupBoxNext\">Next</a><a class=\"popupBoxPrevious\">Previous</a></div>");
        $(idImgHash).attr('src', imgSrc);
        if(imgWidth < windowWidth && imgHeight < heightAdj) {
            $(idContent).css('width', boxWidth);
            console.log('top1 smallish');
        }
        else if(imgWidth < windowWidth && imgHeight > heightAdj) {
            $(idImage).css('height', heightAdj);
            $(idContent).css('width', boxWidth);
            console.log('Too Tall');
        }
        else if (imgWidth >= windowWidth && imgHeight < heightAdj){
            $(idImage).css('width', widthAdj);
            $(idContent).css('width', windowWidth);
            console.log('top2 too wide');
        }
        else if (imgWidth >= windowWidth && imgHeight > heightAdj){
            $(idImage).css('width', widthAdj);
            $(idContent).css('width', windowWidth);
            console.log('top3 too big');
        }
        else {
            console.log('not an option ' +idImg);
        }
    });
    //Unload the Popupbox
    function unloadPopupBox() {
        $(".background").css('display', 'none');
        $('.popup_box').removeClass('active').addClass('inactive');
    };
    //Classes that fires off 'unloadPopupBox'
    $('.popupBoxClose, .popup_img, .background').click( function() {
        unloadPopupBox();
    });
    $('.popupBoxPrevious').click(function(){
        imgPrev()
    });
    $('.popupBoxNext').click(function(){
        imgNext()
    });
    $(document.documentElement).keyup(function (e) {
        if (e.keyCode == 39) {
            imgNext();
        }
        if (e.keyCode == 37) {
            imgPrev();
        }
    });
    $('img.photo').click(function(){
        flatID = this.id;
        flatHash = '#'+flatID;
        imgWidth = $(flatHash).attr('data-width');
        imgHeight = $(flatHash).attr('data-height');
        imgID = flatHash + '_image';
        contentID = flatHash + '_box';
        //getImageWidth();
        $(idImg).addClass("active");
        $(".background").css('width', windowWidth).css('height', windowHeight).addClass("overlay").fadeIn("slow");
        $(contentID).addClass('active').removeClass('inactive').fadeIn('slow');
    });
    //Prev & Next buttons and keyboard
    $(document).on('swipeleft', 'img', function(){
       imgNext();
    });
    $(document).on('swiperight', 'img', function(){
        imgPrev();
    });
    function imgNext(){
        var $active = $('.popup_box.active'), $targetslide;
        if ($active.next('.popup_box').length) {
            $target = $active.next('.popup_box');
            $target.addClass('active');
            $active.removeClass('active');
        } else {
            $target = $('.popup_box:first');
            $target.addClass('active');
            $active.removeClass('active');
        }
    }
    function imgPrev(){
        var $active = $('.popup_box.active'), $targetslide;
        if ($active.prev('.popup_box').length) {
            $target = $active.prev('.popup_box');
            $target.addClass('active');
            $active.removeClass('active');
        } else {
            $target = $('.popup_box:last');
            $target.addClass('active');
            $active.removeClass('active');
        }
    }
})