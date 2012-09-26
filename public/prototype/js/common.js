jQuery(function($){
    // 初始化导航
    $('#nav').initNav();
    $('#slider').slider();
});

jQuery.fn.extend({

    // 导航
    initNav: function(){
        var main = this.extend({
            items: this.find("li"),
            contents: this.find("li div.nav-content"),
            run: function(){
                main.items.hover(function(e){
                    $(this).find('a:first-child').addClass('active');
                    $(this).find('div.nav-content').removeClass('hide');
                }, function(e){
                    $(this).find('a:first-child').removeClass('active');
                    main.contents.addClass('hide');
                })
            }
        });

        main.run();
    },

    // 首页幻灯
    slider: function(){
        var list = this.find('#pics');
        var main = this.extend({
            list: list,
            listHeight: list.height(),
            listLength: list.find('li').length,
            itemHeight: list.height()/list.find('li').length,
            currentElement: 0,
            timer: null,
            ctrls: this.find('#ctrls li'),
            txt: this.find('#slider-txt'),
            setStyle: function(){
                var text = main.list.find('li').eq(main.currentElement).find('a').attr('title');
                main.txt.text(text);
                main.ctrls.find('a').removeClass('active').eq(main.currentElement).addClass('active');
                var top = '-'+((main.itemHeight*main.currentElement)%main.listHeight)+'px';
                main.list.animate({marginTop: top}, 'slow');
                if(main.timer){
                    clearTimeout(main.timer);
                }
                main.timer = setTimeout(function(){
                    main.currentElement++;
                    main.currentElement %= main.listLength;
                    main.setStyle();
                }, 3000);
            },
            run: function(){
                main.setStyle();
                main.ctrls.on('click', function(e){
                    e.preventDefault();
                    main.currentElement = main.ctrls.index(this);
                    main.setStyle();
                });
            }
        });

        main.run();
    }

});