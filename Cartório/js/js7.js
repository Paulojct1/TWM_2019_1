if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
$.include('js/superfish.js')
$.include('js/jquery.hoverIntent.js')
$.include('js/coin-slider.js?v23')
$.include('js/FF-cash.js')
$.include('js/jquery.easing.1.3.js')
$.include('js/jquery.cycle.all.min.js')
$.include('js/jquery.backgroundPosition.js')

function onAfter(curr, next, opts, fwd){var $ht=$(this).height();$(this).parent().animate({height:$ht})}

$(function() {
				$.mask.masks.letras = {mask: 'i', type:'repeat'};
				$.mask.masks.numeros = {mask: '9', type:'repeat'};
				$('input:text').setMask();
				$('.data').datepicker();
});

function AbreJanela(Obj, Url, Largura, Altura, Scroll, Titulo){
                     $(Obj).colorbox({
                                      href: Url,
                                      iframe: true,
                                      innerWidth:Largura,
                                      innerHeight:Altura,
                                      scrolling:Scroll,
                                      opacity:"0.8",
                                      title:Titulo
                     });
}
function validabusca(){
			   obj = $('#query');
			   if( $(obj).val() == '' || $(obj).val() == 'O que você procura?' ){
                   alert('Digite algo para a pesquisa!');
                   $(obj).focus();
			       return false;
			   }
}
