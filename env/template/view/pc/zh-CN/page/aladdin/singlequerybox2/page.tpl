{%extends 'c_base.tpl'%} {%block name='data_modifier'%}{%$extData.feData.hasBorder=true%}{%/block%}{%block name='content'%}<div class="op_singlequerybox2">{%if $tplData.content1%}<div class="c-gap-bottom op_singlequerybox2_subtitle">{%$tplData.content1|highlight:0%}</div>{%/if%}<form target="_blank" name="op_singlequerybox2_f" method="get" style="position:static;" accept-charset="gb2312" autocomplete="off" action="{%$tplData.input[0]['action']|escape:'html'%}" onsubmit="return op_singlequerybox2_ons();"><table cellspacing="0" cellpadding="0"><tr><td><span class="c-gap-right-small">在</span></td><td> <span class="c-gap-right c-input c-input-small"> <i class="c-icon c-icon-map"></i> <input type="text" id="op_singlequerybox2_c" name="job_cit" value="{%if $tplData.city!=""%}{%$tplData.city|escape:'html'%}{%/if%}"/> </span> </td><td><span class="c-gap-right-small">找</span></td><td> <span class="c-gap-right c-input c-input-large"> <i class="c-icon c-icon-bag"></i><input class="op_singlequerybox2_init" type="text" name="{%$tplData.input[0]['name']|escape:'html'%}" tip="{%if $tplData.input[0]['tip']!=""%}{%$tplData.input[0]['tip']|escape:'html'%}{%/if%}" id="op_singlequerybox2_i"/> </span> </td><td><a class="c-btn c-btn-primary op_singlequerybox2_btn OP_LOG_BTN" onclick="return op_singlequerybox2_s();" target="_blank" href="{%$tplData.url|escape:'html'%}">{%$tplData.button|escape:'html'%}</a><input type="submit" style="display:none;*display:block;overflow:hidden;width:0px;height:0px;position:absolute"></td></tr></table>{%$loop_maxcount=count($tplData.param)%}{%for $op_loop_count=0 to 5%}{%if $op_loop_count<$loop_maxcount%}<input type="hidden" name="{%$tplData.param[$op_loop_count]['name']|escape:'html'%}" value="{%$tplData.param[$op_loop_count]['value']|escape:'html'%}" />{%else%}{%break%}{%/if%}{%/for%}</form>{%if $tplData.content2%}<div class="c-gap-top" style="color:#666;">{%$tplData.content2|escape:'html'%}</div>{%/if%}{%if $tplData.more[0]['txt']%}<div class="c-gap-top-small"><a href="{%$tplData.more[0]['url']%}" target="_blank">{%$tplData.more[0]['txt']|escape:'html'%}</a></div>{%/if%}</div>{%/block%}