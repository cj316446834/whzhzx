var threeSelectData={
"请选择":{val:"",items:{"请选择":{val:"",items:{"请选择":""}}}},
	"整形美容":{val:"01",items:{
		"胸部整形":{val:"0101",items:{
			"假体丰胸":"010101",
			"自体脂肪移植丰胸":"010102",
			"乳房肥大缩小":"010103"
		}},
		"眼部整形":{val:"0102",items:{
			"眼角开大":"010201",
			"眼部修复":"010202"
		}}
	}},
	"皮肤美容":{val:"02",items:{
		"美白嫩肤":{val:"0201",items:{
			"肤色暗沉":"020101",
			"黑眼圈":"020102"
		}},
		"疤痕修复":{val:"0202",items:{
			"纹绣祛除":"020201",
			"凹陷性疤痕":"020202",
			"外伤性疤痕":"020203",
			"妊娠纹":"020204"
		}}
	}},
	};
$(function(){
	var $s1=$("#Select1");
	var $s2=$("#Select2");
	var $s3=$("#Select3");
	// var v1=null;
	// var v2=null;
	// var v3=null;
	var v1="01";
	var v2="0102";
	var v3="010202";
	$.each(threeSelectData,function(k,v){
		appendOptionTo($s1,k,v.val,v1);
	});
	$s1.change(function(){
		$s2.html("");
		$s3.html("");
		if(this.selectedIndex==-1) return;
		var s1_curr_val = this.options[this.selectedIndex].value;
		$.each(threeSelectData,function(k,v){
			if(s1_curr_val==v.val){
				if(v.items){
					$.each(v.items,function(k,v){
						appendOptionTo($s2,k,v.val,v2);
					});
				}
			}
		});
		$s2.change();
	}).change();
	$s2.change(function(){
		$s3.html("");
		var s1_curr_val = $s1[0].options[$s1[0].selectedIndex].value;
		if(this.selectedIndex==-1) return;
		var s2_curr_val = this.options[this.selectedIndex].value;
		$.each(threeSelectData,function(k,v){
			if(s1_curr_val==v.val){
				if(v.items){
					$.each(v.items,function(k,v){
						if(s2_curr_val==v.val){
							$.each(v.items,function(k,v){
								appendOptionTo($s3,k,v,v3);
							});
						}
					});
				}
			}
		});
	}).change();
	function appendOptionTo($o,k,v,d){
		var $opt=$("<option>").text(k).val(v);
		if(v==d){$opt.attr("selected", "selected")}
		$opt.appendTo($o);
	}
});// JavaScript Document