{%extends 'c_right_base.tpl'%} {%block name='content'%}<div class="opr-vote-container c-abstract"> <div class="opr-vote-head-icon"></div><div class="opr-vote-head"> <div class="opr-vote-title">{%$tplData.title%}</div> {%if $tplData.rule[0].text%}<a class="opr-vote-rule" href="{%$tplData.rule[0].url%}" target="_blank">{%$tplData.rule[0].text%}</a>{%/if%} <div style="clear:both"></div> </div> <div class="opr-vote-flipboard-container"> <div class="opr-vote-flipboard"> <div><span></span></div> <div><span></span></div> <div><span></span></div> <div><span></span></div> <div><span></span></div> <div><span></span></div> <div><span></span></div> <div><span></span></div> <div><span></span></div> </div> <span>票</span> <div style="clear:both"></div> </div> <div class="opr-vote-rank-container"> <div class="opr-vote-btn-rank"> {%if $tplData.rank[0]['url']%}<a href="{%$tplData.rank[0]['url']%}" target="_blank">{%/if%}{%$tplData.rank[0]['text']|escape%}{%if $tplData.rank[0]['url']%}</a>{%/if%}<br /> <div class="opr-vote-currank">&nbsp;</div> </div> <a href="#" onclick="return false;" hidefocus="true" class="opr-vote-btn-start"> {%$tplData.btn[0]['start']|escape%} </a> <div class="opr-vote-btn-end"> <div class="opr-vote-btn-end-text">{%$tplData.btn[0]['end']|escape%}</div><div class="opr-vote-btn-end-subend">{%$tplData.btn[0]['subend']|escape%}</div> </div> <div style="clear:both"></div> </div> <div class="opr-vote-share-box"> <div class="opr-vote-sharebtn opr-vote-sharebtn-down">分享<div class="opr-vote-share-icon"></div></div> {%if $tplData.more[0]['text']%}<div class="opr-vote-more"><a href="{%$tplData.more[0]['url']%}" class="opr-vote-morelink" target="_blank">{%$tplData.more[0]['text']|escape%}</a></div>{%/if%} <div style="clear:both"></div>  <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{'text':'{%$tplData.share|escape%}'}"> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tieba"></a> <a class="bds_tqq"></a> <a class="bds_douban"></a> <a class="bds_renren"></a> </div> <script type="text/javascript" id="bdshare_js" data="type=tools" ></script> <script type="text/javascript" id="bdshell_js"></script>  </div> </div><script >
    A.setup({              
        'playername':'{%$tplData.playername|escape:'javascript'%}'        
    });
</script>{%/block%}