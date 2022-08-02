$(window).scroll(function () {
	let navscroll = $(this).scrollTop();
	if (navscroll) {
		$('.nav-home').addClass("header-area");
		$('.nav-home').css({
			'transition': '1.5s'
		});
	} else {
		$('.nav-home').removeClass("header-area");
	}
})

$('.tab-btn').click(function () {
	res = $(this).attr("id");
	res2 = (res += "s");
	for (let i = 1; i <= 3; i++) {
		if ($(".contentcollapsed").is(":visible")) {
			$(".contentcollapsed").slideUp();
		}
	}

	if ($("#" + res2).is(":visible")) {
		$("#" + res2).slideUp();
	} else {
		$("#" + res2).slideToggle();
	}
});

$('.btn-talent').click(function () {
	res = $(this).attr("id");
	res2 = (res += "-c");
	for (let i = 1; i <= 3; i++) {
		if ($(".desc-collapsed").is(":visible")) {
			$(".desc-collapsed").slideUp();
		}
	}

	if ($("#" + res2).is(":visible")) {
		$("#" + res2).slideUp();
	} else {
		$("#" + res2).slideToggle();
	}
});

var opt = document.getElementsByClassName("opt-tab");
var btn = document.getElementsByClassName("tab-btn");

for (var i = 0; i < btn.length; i++) {
	btn[i].addEventListener("click", function () {
		var cur = document.getElementsByClassName("active");
		if (cur.length > 0) {
			cur[0].className = cur[0].className.replace("active", " ");
		}
		this.className += " active";
	})
}

$('#scrTop').click(function(){
	document.documentElement.scrollTop = 0;
})

/**$('.t-reg').click(function(){
    window.location.href = "regist.html";
}) */

$('.reg-submit').on("click", function () {
	swal({
		title: "Pendaftaran Berhasil",
		text: "Tambah Anggota?",
		icon: "success",
		button:
		{
			text: "Tambah Anggota",
			className: "reg-submit",
			classId: "regsub"
		},
		closeOnClickOutside: false,
		closeOnEsc: false
	}).then(okay => {
		if (okay) {
			window.location.href = "index.html";
		}
	})
})





$('#btn-add').click(function(){
	
})

var k = 3;

$('#cont-btn').click(function(){
	var php = "<?= form_error('nimMember[]', '<small class='text-danger pl-3'>', '</small>'); ?>";
	var html = '<div id="'+k+'smember"><div class="card-body"><div class="form-group"><label for="teamMember">Nama Team member '+k+'</label><input type="text" class="form-control" id="teamMember[]" name="teamMember[]"></div><div class="form-group"><label for="nimMember">NIM Team Member '+k+'</label><input type="text" class="form-control" id="nimMember[]" name="nimMember[]">'+php+'</div><div class="form-group"><label for="ktmMember">Upload KTM Member '+k+'</label><input type="file" class="form-control" id="ktmMember[]" name="ktmMember[]"></div></div></div>';
	if(k<=20){
		k+=1;
		$('#form-memb').append(html);
	}else{
		$('#cont-btn').css({
			'display': 'none'
		})
	}
})



function disableButton(){
	document.getElementById("submit-lead").disabled = true;
}

function activeButton(element){
	if(element.checked){
		document.getElementById("submit-lead").disabled = false;
    }
    else  {
        document.getElementById("submit-lead").disabled = true;
    }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}