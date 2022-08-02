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



var k = 1;

$('#btn-add').click(function(){
	var idr = $(this).attr('id');
	var form = '<div class="form-group">'+'<label for="teamMember">Nama Team member</label>'+'<input type="text" class="form-control" id="teamMember[]" name="teamMember[]"></div>'
	if(k<=20){
		k += 1;

		$('#'+k+'smember').appendChild(form)
	}
})

/* <div class="form-group">
							<label for="teamMember">Nama Team member</label>
							<input type="text" class="form-control" id="teamMember[]" name="teamMember[]">
						</div>
						<div class="form-group">
							<label for="nimMember">NIM Team Member</label>
							<input type="text" class="form-control" id="nimMember[]" name="nimMember[]">
							<?= form_error('nimMember[]', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="ktmMember">Upload KTM Member</label>
							<input type="file" class="form-control" id="ktmMember[]" name="ktmMember[]">
						</div> */

/* $(".btn-tambah").onclick(function(){
    if(k==null){
        for(k = 0; k<19; k++){
            $("").append(
                '<div class="form-group">
                <label for="email">Nama Team Leader</label>
                <input type="text" class="form-control" id="teamLeader" name="teamLeader">
                </div>
                <div class="form-group">
                <label for="email">NIM Team Leader</label>
                <input type="text" class="form-control" id="nimLeader" name="nimLeader">
                </div>
                <div class="form-group">
                <label for="email">Upload KTM Leader</label>
                <input type="text" class="form-control" id="ktmLeader" name="ktmLeader">
                </div>');
            )
        }
    }
} */
