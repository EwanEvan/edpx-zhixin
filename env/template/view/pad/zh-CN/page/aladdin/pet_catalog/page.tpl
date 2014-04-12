{%extends 'c_base.tpl'%} {%block name="title"%}{%/block%}{%block name="foot"%}{%/block%}{%block name="data_modifier"%} {%function op_pet_catalog_buildurl text='' url=''%}{%$escaped_text = $text%}<a href="{%if !$url%}/s?wd={%$escaped_text|escape:'url'%}&rsv_dl=0_left_pet_catalog_{%$extData.resourceid%}{%else%}{%$url%}{%/if%}" target="_blank">{%$escaped_text|highlight:0%}</a> {%/function%}{%/block%}{%block name='content'%}<style data-merge>{%fe_fn_c_css css='table'%}.op-pet-catalog-td a{font-size:1.07em}.op-pet-catalog-last td{border-bottom:0}.op-pet-catalog-title{font-size:1.07em;font-weight:bold}</style><style>.op-pet-catalog-table td,.op-pet-catalog-table th{width:{%number_format(100/count($tplData.catalog),2)%}%}</style><h3 class="c-gray op-pet-catalog-title c-gap-bottom-small">{%$tplData.title|limitlen:56|highlight:0%}</h3><table class="c-table op-pet-catalog-table"> {%for $index=0 to $tplData.catalog_length%} <tr {%if $index == $tplData.catalog_length%}class="op-pet-catalog-last"{%/if%}> {%if $index == 0%} {%foreach $tplData.catalog as $item%} <th>{%$item.title|escape:'html'%}</th> {%/foreach%} {%else%}{%foreach $tplData.catalog as $item%} {%if $item.link[ $index-1 ]%} <td class="op-pet-catalog-td">{%op_pet_catalog_buildurl text=$item.link[ $index-1 ].name url=$item.link[ $index-1 ].url%}</td> {%/if%} {%/foreach%} {%/if%} </tr> {%/for%}</table>{%/block%}