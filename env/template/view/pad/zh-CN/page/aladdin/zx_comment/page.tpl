{%extends 'base.tpl'%} {%block name='content'%}<style>.op_zx_comment{color:#666;line-height:22px;padding:15px;background:#f8f8f8;width:606px;font-size:15px;overflow:hidden}.op_zx_comment h3{font-size:16px;float:left}.op_zx_comment p{color:#333;border-bottom:1px dashed #e8e8e8;padding-bottom:7px;margin-bottom:6px;line-height:20px}.op_zx_comment_title,.op_zx_comment_num,.op_zx_comment_point{background:url(http://www.baidu.com/aladdin/img/newvideo/newvideo-1.3.png) no-repeat}.op_zx_comment_title{background-position:0 -51px;padding-left:14px;flo{%*i*%}at:left}.op_zx_comment_num{font-size:14px;background-position:right -34px;padding-right:20px;float:right}.op_zx_comment_morelink{font-size:15px;font-family:simsun;float:right;margin:1px 7px 3px 0}</style>{%$FE_GBVAR.wrapper_prefix%}<div class="op_zx_comment"><h3><a target="_blank" href="{%$tplData.commentTitle[0].link%}">{%$tplData.commentTitle[0].title|limitlen:50|highlight:0%}</a></h3> {%if $tplData.comment|count > 3%} <a target="_blank" class="op_zx_comment_morelink" href="{%$tplData.commentTitle[0].link%}">查看全部影评&gt;&gt;</a> {%/if%} <br style="clear:both;" /> <div> {%foreach array_slice($tplData.comment, 0, 3) as $item%} <div> <a class="op_zx_comment_title"{%if $item@first%} style="background:none;padding-left:0px;"{%/if%} target="_blank" title="{%$item.title%}" href="{%$item.link%}">{%$item.title|limitlen:48%}</a> <span class="op_zx_comment_num">{%$item.num%}人{%if $item@first%}推荐此影评{%/if%}</span> <div style="clear:both;"></div> {%if $item@first && $item.content != '' %} <p{%if $tplData.comment != '' && $tplData.comment|count == 1%} style="border-bottom:0;padding-bottom:0;margin-bottom:0;"{%/if%}> <span style="word-wrap:break-word;">{%$item.content|limitlen:140%}</span> {%if $item.content|limitlen:140 != $item.content|trim%} <a target="_blank" href="{%$item.link%}" style="margin-left:8px;">{%$item.tip%}</a> {%/if%} </p> <div style="clear:both"></div> {%/if%} </div> {%/foreach%} </div></div>{%$FE_GBVAR.wrapper_suffix%}{%/block%}