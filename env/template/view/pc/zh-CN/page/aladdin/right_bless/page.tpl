{%extends 'c_right_base.tpl'%} {%block name='content'%}<style>.opr-bless,.opr-bless-btn{background:url({%$tplData.bgurl%}) no-repeat}.opr-bless-num{color:{%$tplData.blesscount[0].fontcolor|escape:'html'%}}.opr-bless-num b{color:{%$tplData.blesscount[0].strongcolor|escape:'html'%}}.opr-bless-btn{color:{%$tplData.btn[0].fontcolor|escape:'html'%}}.opr-bless{color:#333;height:52px;padding-top:13px;position:relative;zoom:1;overflow:hidden}.container_l .opr-bless{width:351px}.container_s .opr-bless{width:259px}{%if $tplData.shownarrow%}.container_l .opr-bless{width:259px}{%/if%}.opr-bless .opr-bless-prey{color:#fff;margin-top:23px;*margin-top:35px}.opr-bless-btn{background-position:0 -65px;width:69px;height:23px;line-height:22px;*line-height:23px;padding-left:23px;display:inline-block;cursor:pointer;text-align:center}.opr-bless-btn2{background-position:-92px -65px;cursor:default}.opr-bless-heart{position:absolute;top:80px;left:175px}.opr-bless-num b{margin:0 2px}.opr-bless-version{font-size:.923em;margin-top:3px}</style>{%if $tplData.showgray%}<div class="opr-bless-graystyle"> <style type="text/css">html{filter:grayscale(100%);-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);-ms-filter:grayscale(100%);-o-filter:grayscale(100%);filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter:grayscale(1)}</style></div>{%/if%}<div class="opr-bless"> <div class="opr-bless-prey c-gap-left c-gap-top"> <span class="opr-bless-btn OP_LOG_BTN" data-click="{fm:'beha'}">{%$tplData.btn[0].text|escape:'html'%}</span><span class="opr-bless-num c-gap-left">{%str_replace( '[number]', '<b></b>', $tplData.blesscount[0].text )%}</span> </div> <div class="opr-bless-player"></div></div>{%if $tplData.music && $tplData.music[0].version%}<div class="opr-bless-version c-gray">{%$tplData.music[0].version|escape:'html'%}</div>{%/if%}<script >
    A.setup({
        upurl: '{%$tplData.upurl%}',
        fetchurl: '{%$tplData.fetchurl%}',
        musicUrl: '{%if $tplData.music%}{%$tplData.music[0].url%}{%/if%}'
    });
</script>{%/block%}