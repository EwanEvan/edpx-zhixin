{%extends 'c_base.tpl'%} {%block name='content'%}<div class="op-disease-main"> <p class="op-disease-t">{%$extData.OriginQuery|cat:'_相关疾病'|escape:'html'|limitlen:64|highlight:0%}</p> <p class="op-disease-a">建议关注以下疾病，点击链接了解各种疾病诊断方法、症状、病因等信息。</p> <table style="width:600px" border="0"> <tbody> {%foreach $tplData.posdis as $item%} {%if $item@index > 2%} {%break%} {%/if%} <tr class="op-disease-d"> <td class="op-disease-td"><a target="_blank" href="{%build_search_url params="wd=`$item.dis|escape:'url'|cat:'&rsv_dl=0_left_disease_6704'`"%}">{%$item.dis|escape:'html'%}</a></td> <td><font color="#666">症状：</font>&nbsp;&nbsp;{%$item.sym|escape:'html'|limitlen:70|highlight:0%}</td> </tr> {%/foreach%} </tbody> </table></div>{%/block%}