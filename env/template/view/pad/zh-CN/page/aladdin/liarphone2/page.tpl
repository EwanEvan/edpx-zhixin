{%extends 'c_base.tpl'%} {%block name='data_modifier'%}{%$extData.feData.hasBorder=true%}{%/block%}{%block name="title"%}{%/block%}{%block name='content'%}<style data-merge>{%fe_fn_c_css css='tool'%}.op_liarphone2_label{width:87px;height:22px;text-align:center;font-family:Microsoft YaHei;font-size:1.2em;line-height:22px;margin-right:6px;display:inline-block;vertical-align:text-bottom}.op_liarphone2_label_qz{color:#f8f8f8;background-color:#cb0000}.op_liarphone2_label_tx{color:#fff;background-color:#b75a00}.op_liarphone2_number{font-size:1.7em;font-family:arial;color:#000;white-space:nowrap}.op_liarphone2_addr,.op_liarphone2_net{font-size:1.7em;white-space:nowrap;font-family:SimHei}.op_liarph{%*i*%}one2_word{font-size:1em;color:#000}</style> <div class="c-row"> <div class="c-span3"> {%if $tplData.phlabel%}<i class="c-tool c-tool-cheat"></i> {%else%}<i class="c-tool c-tool-phone-pos"></i> {%/if%} </div> <div class="c-span21 c-span-last"> <div> {%if $tplData.phlabel%} {%* rptyp被举报类型,以此字段区分不同样式 *%} <span class="{%if $tplData.phlabel=='疑似欺诈'%}op_liarphone2_label op_liarphone2_label_qz{%else%}op_liarphone2_label op_liarphone2_label_tx {%/if%} c-gap-right-small">{%$tplData.phlabel|escape:8%}</span> {%/if%} <span class="op_liarphone2_number c-gap-right-small">{%$tplData.phnumber%}</span> {%if $tplData.phaddress%}<span class="op_liarphone2_addr c-gap-right-small">{%$tplData.phaddress%}</span> {%/if%} {%if $tplData.phnet%}<span class="op_liarphone2_net">{%$tplData.phnet%}</span> {%/if%} </div> <div class="op_liarphone2_word">被{%$tplData.num%}个&nbsp;<a href="{%$tplData.datasrc[0]['url']%}" target="_blank">{%$tplData.datasrc[0]['title']%}</a>&nbsp;用户标记为<strong>"{%$tplData.marker%}"</strong>{%if $tplData.tips!=""%},{%$tplData.tips%}{%/if%}。</div> </div> </div> <script data-merge>A.setup(function(){var isIE = !-[1,];var isIE6=isIE&&!window.XMLHttpRequest;if (isIE) {try {document.execCommand('BackgroundImageCache', false, true);} catch (err) {}} });</script>{%/block%}