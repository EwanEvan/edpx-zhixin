<?php 
  class CssJs_Util_calendar
   {
      private static $cssStr = '.op-calendar-title{font-size:1.08em;font-weight:bold;}.op-calendar-content{font-size:1.69em;font-family:Microsoft Yahei;}.op-calendar-content-mult .op-calendar-content{font-size:1.23em;}.op-calendar-order{color:#999;text-align:right;margin-bottom:-3px;}.op-calendar-report{color:#999;text-decoration:none;}.op-calendar-sp{margin:0 8px;color:#d1d1d1;font-size:.92em;position:relative;top:-1px;}.op-calendar-reportover{display:none;}.op-calendar-btn i{vertical-align:text-bottom;_vertical-align:text-top;}.op-calendar-openlink{color:#999;text-decoration:none;}.op-calendar-openlink:hover{text-decoration:underline;}.op-calendar-new-box{border:2px solid #57abff;border-right:0;height:366px;position:relative;z-index:1;margin-top:24px;}.op-calendar-new-year-box,.op-calendar-new-month-box,.op-calendar-new-holiday-box{float:left;}.op-calendar-new-year-box,.op-calendar-new-month-box{margin-right:7px;}.op-calendar-new-year-box{width:80px;}.op-calendar-new-month-box{width:61px;padding:0 22px;position:relative;z-index:1;}.op-calendar-new-holiday-box{width:95px;}.op-calendar-new-select-box{height:26px;float:left;zoom:1;visibility:hidden;}.op-calendar-new-backtoday{float:right;width:52px;}.op-calendar-new-left{padding:10px;width:385px;position:absolute;z-index:1;left:0;}.op-calendar-new-right{color:#fff;text-align:center;margin-left:406px;height:368px;_height:366px;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#55aaff,endColorstr=#73b9ff,grandientType=0);background:#5caeff;background:-webkit-gradient(linear,0 0,0 100%,from(#5af),to(#73b9ff));background:-moz-linear-gradient(top,#5af,#73b9ff);}.op-calendar-new-table-box{float:left;}.op-calendar-new-month-box .c-dropdown2-btn-icon-border{border-color:transparent;_border-color:#fff;background-color:transparent!important;}.op-calendar-new .c-dropdown2 .c-dropdown2-btn-icon{padding-left:0;}.op-calendar-new-prev-month,.op-calendar-new-next-month{position:absolute;top:0;display:block;width:21px;border:1px solid #999;border-bottom-color:#d8d8d8;background:#fafafa;height:24px;text-align:center;line-height:24px;text-decoration:none;color:#7a7a7a;font-weight:bold;font-family:Simsun,Simhei,sans-serif;z-index:205;}.op-calendar-new-prev-month{left:0;border-right-color:#d8d8d8;}.op-calendar-new-next-month{right:0;border-left-color:#d8d8d8;}.op-calendar-new-prev-month:hover,.op-calendar-new-next-month:hover{color:#389cff;border-color:#389cff;border-left:1px solid #389cff;}.op-calendar-new-month-box .c-dropdown2-btn{_text-indent:-2px;}.op-calendar-new-table{width:385px;border-collapse:collapse;border-spacing:0;}.op-calendar-new-table th,.op-calendar-new-table td{width:55px;height:54px;border-top:1px solid #c8cacc;padding:0;}.op-calendar-new-relative{position:relative;width:100%;zoom:1;}.op-calendar-new-table th{height:33px;border-color:#5af;font-weight:normal;font-size:14px;}.op-calendar-new-table-six td{height:45px;}.op-calendar-new-table td a{display:block;width:48px;border-right:1px solid #fff;height:33px;padding:11px 3px 10px;text-align:center;text-decoration:none;line-height:1;white-space:nowrap;overflow:hidden;}.op-calendar-new-table td a *{cursor:pointer;}.op-calendar-new-table-six td a{padding:6px 3px;}.op-calendar-new-table td .op-calendar-new-table-selected,.op-calendar-new-table td .op-calendar-new-table-border,.op-calendar-new-table td a:hover{padding:8px 0 7px;width:48px;border:3px solid #fb0;}.op-calendar-new-table-six td .op-calendar-new-table-selected,.op-calendar-new-table-six td .op-calendar-new-table-border,.op-calendar-new-table-six td a:hover{padding:3px 0;}.op-calendar-new-daynumber{display:block;height:22px;font-size:18px;color:#000;}.op-calendar-new-table-almanac{display:block;color:#999;font-size:12px;}.op-calendar-new-table-festival .op-calendar-new-table-almanac{color:#e02d2d;}th.op-calendar-new-table-weekend,.op-calendar-new-table-weekend .op-calendar-new-daynumber{color:#e02d2d;}.op-calendar-new-table-other-month .op-calendar-new-daynumber,.op-calendar-new-table-other-month .op-calendar-new-table-almanac{color:#bfbfbf;}.op-calendar-new-table-today .op-calendar-new-daynumber,.op-calendar-new-table-today .op-calendar-new-table-almanac{color:#fff;}.op-calendar-new-table-today{background:#fb0;}.op-calendar-new-table td .op-calendar-new-table-rest,.op-calendar-new-table td .op-calendar-new-table-work{background:#fff0f0;}.op-calendar-new-table td .op-calendar-new-table-work{background:#f5f5f5;}.op-calendar-new-table-holiday-sign{position:absolute;left:0;top:0;display:block;width:15px;height:15px;color:#fff;background:#f43;text-align:left;text-indent:1px;line-height:14px;*line-height:18px;overflow:hidden;}.op-calendar-new-table-work .op-calendar-new-table-holiday-sign{background:#969799;}.op-calendar-new-table-other-month .op-calendar-new-table-holiday-sign{filter:alpha(opacity = 50);opacity:.5;}.op-calendar-new-right-date{height:48px;line-height:48px;}.op-calendar-new-right-day{position:relative;width:75px;height:75px;margin:0 auto;line-height:76px;font-size:52px;background:#fb0;border-radius:3px;box-shadow:1px 2px 5px rgba(0,0,0,0.1),-1px 2px 5px rgba(0,0,0,0.1);}.op-calendar-new-right-lunar span{display:block;}.op-calendar-new-right-almanac{margin:10px auto 0;width:110px;border-top:2px solid #94c9ff;padding-top:10px;line-height:18px;height:155px;}.op-calendar-new-right-almanac span{display:block;width:55px;float:left;white-space:nowrap;overflow:hidden;}.op-calendar-new-right-almanac i{display:block;width:30px;height:30px;margin:0 auto 5px;}.op-calendar-new-right-almanac i,.op-calendar-hover-suit i,.op-calendar-hover-avoid i{font-style:normal;font:24px/30px \'Microsoft Yahei\';text-shadow:2px 2px 1px rgba(0,0,0,0.1);text-align:center;color:#fff;}.op-calendar-new-right-hover .op-calendar-hover-almanac{display:block;}.op-calendar-hover-almanac{display:none;position:absolute;z-index:100;width:210px;right:-231px;top:198px;background:#fff;padding:15px 10px;border:1px solid #5fafff;color:#333;box-shadow:4px 4px rgba(0,0,0,0.05);z-index:100;}.op-calendar-almanac-arrow{position:absolute;top:20px;left:-11px;font:22px Simsun;color:#fff;text-shadow:0 -1px rgba(0,0,0,0.05);z-index:1;}.op-calendar-hover-suit,.op-calendar-hover-avoid{padding-left:40px;position:relative;display:block;min-height:30px;_height:30px;text-align:left;}.op-calendar-hover-suit i,.op-calendar-hover-avoid i{display:block;position:absolute;top:0;left:0;width:30px;height:30px;background:#67b3ff;}.op-calendar-hover-avoid i{background:#ff5040;}.op-calendar-new-holidaytip{display:none;position:relative;background:#f7f7f7;padding:10px 10px 10px 0;}.op-calendar-new-holidaytip p{margin-left:35px;}.op-calendar-new-holidaytip-icon{position:absolute;left:0;top:10px;padding-left:10px;width:20px;height:20px;text-align:center;font:20px/20px Simsun;color:#61b0ff;}.op-calendar-new-holidaytip-icon i{font-style:normal;font:14px/20px Tahoma,Arial;_line-height:16px;position:absolute;width:20px;height:20px;right:0;top:0;}.op-calendar-new-holidaystyle .op-calendar-new-box{border-color:#cb1c18;}.op-calendar-new-holidaystyle .op-calendar-new-right{color:#fff;text-align:center;margin-left:406px;height:368px;_height:366px;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#cb1c18,endColorstr=#f44f23,grandientType=0);background:#cb1c18;background:-webkit-gradient(linear,0 0,0 100%,from(#cb1c18),to(#f44f23));background:-moz-linear-gradient(top,#cb1c18,#f44f23);}.op-calendar-new-holidaystyle .op-calendar-new-right-almanac{border-top-color:#eb7563;}.op-calendar-new-holidaystyle .op-calendar-new-table th{border-color:#f55c4e;}.op-calendar-new-holidaystyle .op-calendar-hover-almanac{border-color:#cb1c18;}';  // css字串，不含<style>和</style>标签
      private static $jsStr  = 'A.merge("calendar",function(){A.setup(function(){var f=A.baidu,j=this,g,m=false,c,b,e,h=j.find(".op-calendar-report"),a=j.find(".op-calendar-reportover"),d=j.find(".op-calendar-box"),k=j.find(".op-calendar-showbtn"),l=j.find(".op-calendar-hidebtn");h.click(function(){h.hide();a.show()});k.click(function(n){n.preventDefault();k.hide();if(!m){m=true;g()}l.css("display","inline");d.css("display","block")});l.click(function(){l.hide();d.hide();k.show()});g=function(){d.html(\'<div class="op-calendar-new">                <div class="op-calendar-new-box">                    <div class="op-calendar-new-left c-clearfix">                        <div class="op-calendar-new-select-box">                            <div class="op-calendar-new-year-box"></div>                            <div class="op-calendar-new-month-box">                                <a href="javascript:;" class="op-calendar-new-prev-month" hidefocus="true" onclick="return false">&lt;</a>                                <a href="javascript:;" class="op-calendar-new-next-month" hidefocus="true" onclick="return false">&gt;</a>                            </div>                            <div class="op-calendar-new-holiday-box"></div>                        </div>                        <a class="c-btn op-calendar-new-backtoday OP_LOG_BTN" hidefocus="true" data-click="{fm:\\\'beha\\\'}" href="javascript:;">返回今天</a>                        <div class="op-calendar-new-table-box c-gap-top"></div>                    </div>                    <div class="op-calendar-new-right"></div>                </div>                <div class="op-calendar-new-holidaytip"></div>            </div>\');var o=j.data.curDate,p=j.data.selectDate.length?j.data.selectDate:o,y=6018,v=j.find(".op-calendar-new-table-box"),r=j.find(".op-calendar-new-right")[0],w=j.find(".op-calendar-new-select-box")[0],s=j.find(".op-calendar-new-backtoday"),x=j.find(".op-calendar-new-holidaytip")[0],q=j.find(".op-calendar-new-prev-month"),t=j.find(".op-calendar-new-next-month"),n=j.find(".op-calendar-new"),u="op-calendar-new-holidaystyle";A.use("dropdown21",function(){A.use("lunar",function(){var B=A.ui.lunar,G,F,C,z,D,E;D=function(I,H){return I.replace(/#{([^}]+)}/g,function(K,J){return H[J]||""})};E=function(H){n.toggleClass(u,!!H)};G=function(H){return H.split(/-0?/).join("-")};z=function(I){var H;if(typeof I==="string"){H=I.split(/-0?/);I=new Date(H[0],H[1]-1,H[2])}else{H=[I.getFullYear(),I.getMonth()+1,I.getDate()]}return{year:H[0],month:H[1],date:H[2],yearMonth:H.slice(0,2).join("-"),dateStr:H.join("-"),dateStrZero:[H[0],("0"+H[1]).slice(-2),("0"+H[2]).slice(-2)].join("-"),Date:I}};p=z(p);C={set:function(K,J,I){var H=function(L){return L||[]};this.setHoliday(H(K.holidaylist),J);this.setAlmanac(H(K.almanac),I);this.setHolidayDateList(H(K.holiday),I);this.setMod(H(K.day),I)},_holiday:{},getHoliday:function(H){return this._holiday[H]},setHoliday:function(L,M){var J={},K,H,I;if(this._holiday[M]){return}for(K=0,H=L.length;K<H;K++){J[L[K].name]={}}this._holiday[M]=J},_holidayDateList:{},_festival:{},setHolidayDateList:function(O,H){var P={},R=H.split("-")[0],J,M,L,K,I,N,Q;if(this._holidayDateList[H]){return}if(!O.length&&O.festival){O=[O]}!this._holiday[R]&&(this._holiday[R]={});!this._festival[R]&&(this._festival[R]={});for(M=0,I=O.length;M<I;M++){J=O[M];N=this._holiday[R][J.name]||{};if(z(J.festival).year==R){$.extend(N,J);this._festival[R][J.festival]=J.name}J=J.list;for(L=0,K=J.length;L<K;L++){P[J[L].date]=J[L].status;J[L]=z(J[L].date).dateStrZero}N.startday=G(J.sort()[0])}this._holidayDateList[H]=P},getHolidayDateList:function(H){return this._holidayDateList[H]},getFestival:function(H){return this._festival[H]},_almanac:{},getAlmanac:function(H){return this._almanac[H]},setAlmanac:function(K,H){if(this._almanac[H]){return}var L=this._almanac[H]={},J,I;for(J=0,I=K.length;J<I;J++){L[G(K[J].date)]={suit:K[J].suit.replace(/\\.$/,"").split(".").slice(0,15),avoid:K[J].avoid.replace(/\\.$/,"").split(".").slice(0,15)}}},_mod:{},setMod:function(H){var K=this._mod,J,I;for(J=0,I=H.length;J<I;J++){K[H[J].date]=H[J]}},getMod:function(){return this._mod},getData:function(H,I){if(this._almanac[H]){I.call(this)}else{H=H.split("-");this.ajax(H[0]+"年"+H[1]+"月",I,function(){return H.join("-")})}},getHolidayData:function(J,I,K){var H=this.getHoliday(J);if(H&&H[I].festival){K.call(this)}else{this.ajax(J+"年"+I,K,function(O){var M=O.holiday,N,L;if(M&&!M.length){M=[M]}for(N=0,L=M.length;N<L;N++){if(M[N].name==I){return z(M[N].festival).yearMonth}}})}},ajax:function(J,K,I){var H=this;j.ajax(J,y,{success:function(M){var L;M=M[0]||{};L=I(M);if(!L){return}H.set(M,L.split("-")[0],L);K.call(H)}})}};F=function(ag,U,T){var ad,ae,R,S="op-calendar-new-table-rest",ab="op-calendar-new-table-work",P="op-calendar-new-table-weekend",Q="op-calendar-new-table-festival",O="op-calendar-new-table-today",I="op-calendar-new-table-other-month",H="op-calendar-new-table-selected",Y="op-calendar-new-table-border",M,N,X,af,J,L,V=function(){},aa,K,ac,Z="<tr>{一}{二}{三}{四}{五}{!六}{!日}</tr>",W=1000*24*60*60;Z=Z.replace(/\\{\\!?|\\}/g,function(ah){return ah=="{"?"<th>":(ah=="{!"?\'<th class="\'+P+\'">\':"</th>")});K=function(ak,ah){var aj=i=0,ai;while(ak.charCodeAt(i)){ai=ak.charCodeAt(i)>255?2:1;if((ai+aj)>ah){return ak.slice(0,--i)+"..."}aj+=ai;i++}return ak.slice(0,i)};X=function(ah){R=ah.year;ae=ah.month;ad=ah.date};ag=G(ag);af=function(ar){var ak=ar.Date,am=B(ak),aq,ao=C.getMod()[ar.dateStr]||{},ai=C.getAlmanac(ar.yearMonth)||{},aj=ai[ar.dateStr]||{},an,ap=aj.suit||[],ah=aj.avoid||[],al=\'<p class="op-calendar-new-right-date">#{date}</p><p class="op-calendar-new-right-day">#{day}</p><p class="op-calendar-new-right-lunar c-gap-top-small"><span>#{lunarMonth}</span><span>#{lunarYear}</span><span>#{lunarDate}</span></p><div class="op-calendar-new-right-almanacbox"><p class="op-calendar-new-right-almanac c-clearfix"><span class="op-calendar-new-right-suit"><i>宜</i>#{suit}</span><span class="op-calendar-new-right-avoid"><i>忌</i>#{avoid}</span></p><p class="op-calendar-hover-almanac"><span class="op-calendar-almanac-arrow">◆</span><span class="op-calendar-hover-suit"><i>宜</i>#{suitAll}</span><span class="op-calendar-hover-avoid c-gap-top"><i>忌</i>#{avoidAll}</span></p></div>\';aq=function(at,au){return at&&at.length?at.slice(0,au).join("<br />"):""};r.innerHTML=D(al,{date:ar.dateStrZero+" 星期"+am.cnDay,day:ar.date,lunarMonth:ao.lunarmonth||(am.lMonth.replace("十二","腊")+"月"+am.lDate),lunarYear:ao.lunaryear||(am.gzYear+"年 【"+am.animal+"年】"),lunarDate:ao.lunardate||(am.gzMonth+"月 "+am.gzDate+"日"),suit:aq(ap,5),avoid:aq(ah,5),suitAll:ap.join("、"),avoidAll:ah.join("、")});if(ap.length+ah.length>0){an=j.find(".op-calendar-new-right-almanacbox");an.hover(function(){var at=this;clearTimeout(c);c=setTimeout(function(){an.addClass("op-calendar-new-right-hover")},300)},function(){var at=this;clearTimeout(c);c=setTimeout(function(){an.removeClass("op-calendar-new-right-hover")},100)})}};M=function(ai,am,ao){var ar=[],aq=C.getHolidayDateList(z(ao).yearMonth),al=C.getMod(),at=1,av="",au,aj,ay,ax,ap,ah,ak,aw,an;if((am-ai)/W<28){am=new Date(am.getTime()+W*7)}ak=\'<td><div class="op-calendar-new-relative"><a href="javascript:;" #{title} data-click="{fm:\\\'beha\\\'}" hidefocus="true" class="#{classname}" date="#{date}">#{rest}<span class="op-calendar-new-daynumber">#{day}</span><span class="op-calendar-new-table-almanac">#{almanac}</span></a></div></td>\';while(ai<=am){if(at>42){break}ay=z(ai);aj=[];ah="";ax=B(ai);ap=ax.festival();au=al[ay.dateStr]||{};if(aq[ay.dateStr]){ah=\'<span class="op-calendar-new-table-holiday-sign">#{text}</span>\';if(aq[ay.dateStr]=="1"){aj.push(S);ah=D(ah,{text:"休"})}else{if(aq[ay.dateStr]=="2"){aj.push(ab);ah=D(ah,{text:"班"})}else{aj.push(S);ah=""}}}if((at+1)%7==0||at%7==0){aj.push(P)}if(ap.length||ax.term||(au.red&&au.red=="1")){aj.push(Q)}if(ay.dateStr==ag){if(aq[ay.dateStr]){aj.push(Y)}else{aj.push(O)}}if(ay.month!=ae){aj.push(I)}if(ay.dateStr==ao){aj.push(H)}at%7==1&&ar.push("<tr>");aw=au.tableword||(ap.length?ap[0].desc.replace(/国际|世界/,""):(ax.term||ax.lDate));an=K(aw,8);ar.push(D(ak,{classname:aj.join(" "),day:ay.date,almanac:an,date:ay.dateStr,rest:ah,title:an==aw?"":(\' title="\'+aw+\'"\')}));at%7==0&&ar.push("</tr>");ai=new Date(W+ai.getTime());at++}if(at>36){av=" op-calendar-new-table-six"}return\'<table class="op-calendar-new-table\'+av+\'">\'+Z+ar.join("")+"</table>"};N=function(aj,ai){var am,al,ak,ah;am=new Date(aj.getFullYear(),aj.getMonth(),1);al=new Date(aj.getFullYear(),aj.getMonth()+1,1);al=new Date(al.getTime()-W);if(ai){am=z(ai).Date;al=new Date(am.getTime()+W*28)}return{startDate:new Date(am.getTime()-W*((am.getDay()==0?7:am.getDay())-1)),endDate:new Date(al.getTime()+W*(7-(al.getDay()==0?7:al.getDay())))}};L=function(aj,ak){var ai=z(aj),al=z([R,ae,ad].join("-")),an,am,ah;C.getData(ai.yearMonth,function(){am=C.getFestival(ai.year);ah=am[ai.dateStr]||null;if(ai.year!=R||ai.month!=ae){an=N(ai.Date,ak);X(ai);U.html(M(an.startDate,an.endDate,aj));J=j.find("."+H);V(ai,al,ak)}X(ai);E(ah);af(ai);ac(C.getHoliday(R)[ah])})};ac=function(ai){var ah;if(!ai||(!ai.desc&&!ai.rest)){T.style.display="none"}else{ah=\'<span class="op-calendar-new-holidaytip-icon">○<i>!</i></span><p>#{desc}</p><p>#{rest}</p></span>\';T.style.display="block";T.innerHTML=D(ah,{desc:ai.desc,rest:ai.rest})}};U.delegate("a","click",function(ah){ah.preventDefault();aa(this);L(this.getAttribute("date"))});aa=function(ah){J&&J.removeClass(H);ah&&$(ah).addClass(H);J=j.find("."+H)};return{getDate:function(){return z([R,ae,ad].join("-"))},nextMonth:function(){var ah,aj=this.getDate(),am,al,ai,ak;am=new Date(aj.year,parseInt(aj.month,10)+1,1);al=new Date(am-W).getDate();ak=aj.date<al?aj.date:al;ai=z(new Date(aj.year,aj.month,ak));this.setDate(ai.dateStr)},prevMonth:function(){var ak,ai=this.getDate(),ah,aj;ak=new Date((new Date(ai.year,ai.month-1,1)-W)).getDate();ah=z(new Date(ai.year,ai.month-2,ai.date<ak?ai.date:ak));this.setDate(ah.dateStr)},set:function(aj,ak){var ai=this.getDate(),ah;ai[aj]=ak;ah=z([ai.year,ai.month,ai.date].join("-"));if(ah.Date.getDate()!=ah.date){ah={dateStr:ah.yearMonth+"-1"}}L(ah.dateStr);return this},setDate:function(ah){L(ah);return this},setHoliday:function(ai,aj){var ah=this;C.getHolidayData(aj,ai,function(){var ak=this.getHoliday(aj)[ai];if(!ak){ah.setHoliday(ai,z(ag).year);return}ae=null;L(G(ak.festival),G(ak.startday),true);ac(ak)})},backToday:function(){var ah=window.event||{};ah.returnValue=false;ae=null;this.setDate(ag);return this},addMonthChangeEvent:function(ak,ah,aj){var ai=this;if(typeof ak=="function"){V=function(al,an,am){ak.call(ai,al,an,am)}}return this}}};(function(){var L=F(o,v,x),T=z(o).year;e=A.ui.dropdown21;var O,N,I,H,U,M,P={value:"default",text:"假期安排",selected:1},S,K,R,J,Q;L.setDate(p.dateStr);O=function(ac,W,ab,Y,aa){var Z,V,X=[];if(Object.prototype.toString.call(ac)!="[object Array]"){for(Z=ac.min;Z<=ac.max;Z++){X.push({value:Z,text:Z+ac.unit,selected:Z==W})}}else{X=ac}return e(X,{appendTo:j.find("."+ab)[0],number:12,onchange:Y,onopen:aa})};I=function(X){var V,W;if(H){return}H=true;V=X.index;if(V==0){return}W=$(".c-dropdown2-menu-inner",U)[0];W.scrollTop=0;b=setInterval(function(){var Y;if(W.scrollTop==0||!$(W).hasClass("opui-scroll-ctrl-content")){return}clearInterval(b);Y=$(".opui-scroll-ctrl-scroll",W.parentNode)[0];b=setInterval(function(){if(Y.style.cssText==""){return}W.scrollTop=V*26;clearInterval(b)},10)},10)};R=O({min:1900,max:2050,unit:"年"},p.year,"op-calendar-new-year-box",function(V){L.set("year",V.item.value)},I);U=j.find(".op-calendar-new-year-box")[0];M=$(".c-dropdown2-menu",U)[0];M.style.left="-9999px";R.open();R.close();M.style.left="0";J=O({min:1,max:12,unit:"月"},p.month,"op-calendar-new-month-box",function(V){L.set("month",V.item.value)});K=function(W){var V=W.item.value;if(V=="default"){return}L.setHoliday(V,R.getValue())};Q=O([P],"default","op-calendar-new-holiday-box",K);S=function(W){Q.removeAll();Q.add(P);for(var V in W){if(W.hasOwnProperty(V)){Q.add({value:V,text:V})}}};w.style.visibility="visible";L.addMonthChangeEvent(function(W,Z,Y){var X=this.getDate(),V=R.getLength();J.setIndex(X.month-1);if(X.year-1900>(V-1)){R.add({value:V+1900,text:V+1900+"年"})}R.setIndex(X.year-1900);if(!Y){Q.setIndex(0)}if(W.year!=Z.year){S(C.getHoliday(W.year))}});s.click(function(){L.backToday()});t.click(function(){L.nextMonth()});q.click(function(){L.prevMonth()})})()})})};this.dispose=function(){clearTimeout(c);clearInterval(b);e&&e.dispose&&e.dispose()}})});';   // js字串，不含<script标签
      private static $uiList = 'img,btn,dropdown2';   // 包含的组件，以','分割的字符串，比如'input,text,button'这样
      
      public static function getHeadCss()
      {
         if (!is_string(self::$cssStr))
         {
            return '';
         }
         return self::$cssStr;
      }
      
      public static function getFootJs()
      {
         if (!is_string(self::$jsStr))
         {
            return '';
         }
         return self::$jsStr;
      }
      
      // 返回数组
      public static function getCssUI()
      {
		 if ( empty(self::$uiList) ) return array();

         $arr = @explode(',', self::$uiList);
         if (!is_array($arr))
         {
            $arr = array();
         }
         return $arr;
      }
   }