{%extends 'c_base.tpl'%} {%block name='data_modifier'%} {%$extData.feData.hasBorder = false%}{%/block%}{%block name='content'%}<table class="c-table"> <thead> <tr> <th style="width:140px;">项目</th> <th style="width:100px;">加盟金额</th> <th style="width:100px;">所在区域</th> <th style="width:70px;">在线咨询</th> </tr> </thead> <tbody class="op_tbody"> {%for $loop_i=0 to count($tplData.projectItem)-1%} <tr> <td><a href="{%$tplData.projectItem[$loop_i]['url']|escape:'html'%}" target="_blank" style="color:#0000CC;">{%$tplData.projectItem[$loop_i]['name']|escape:'html'%}</a></td> <td style="color:#FF8A00;">{%$tplData.projectItem[$loop_i]['amount']|escape:'html'%}</td> <td>{%$tplData.projectItem[$loop_i]['area']|escape:'html'%}</td> <td><a class="c-btn c-btn-mini" href="{%$tplData.projectItem[$loop_i]['consultUrl']|escape:'html'%}" target="_blank">我要留言</a></td> </tr> {%if $loop_i===4%} {%break%} {%/if%}{%/for%} </tbody></table><div style="margin-top:6px;">{%foreach $tplData.moreLink as $item%}<a href="{%$item['url']|escape:'html'%}" class="op_merchant_moreLink" target="_blank">{%$item['name']|escape:'html'%}</a>{%/foreach%}</div>{%/block%}